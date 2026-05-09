<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Requests\Api\Auth\SignupRequest;
use App\Requests\Api\Auth\LoginRequest;
use App\Models\User;
use Auth;
use Lang;
use Illuminate\Auth\Events\Registered;

class AuthController extends Controller
{
    /**
     * @param SignupRequest $request
     * @return mixed
     */
    public function signup(SignupRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Подтвердить емейл
        event(new Registered($user));

        //Auth::login($user);

        return response()->json(['success' => true]);
    }

    /**
     * @param LoginRequest $request
     * @return mixed
     */
    public function login(LoginRequest $request)
    {
        //
        $validated = $request->validated();

        //
        $credentials = [
            'email' => $validated['email'],
            'password' => $validated['password']
        ];

        //
        $remember = $validated['remember'];

        //
        if (Auth::attempt($credentials, $remember)) {
            //
            $user = Auth::user();

            //
            if ($user->email_verified_at === null) {
                $this->forceLogout($request);
                return $this->setError('verified');
            } else {
                $request->session()->regenerate();
                return response()->json(['success' => true]);
            }
        } else {
            //
            $user = User::query()->where('email', $validated['email']);

            //
            if ($user) {
                return $this->setError('failed');
            } else {
                return $this->setError('email');
            }
        }
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function logout(Request $request): RedirectResponse
    {
        $this->forceLogout($request);
        return redirect(route('index'));
    }

    /**
     * @param $request
     * @return void
     */
    protected function forceLogout($request) {
        Auth::logout($request);
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }

    /**
     * @param $code
     * @return mixed
     */
    protected function setError($code) {
        return response()->json([
            'errors' => [
                'email' => Lang::get('auth.' . $code)
            ]
        ], 422);
    }
}
