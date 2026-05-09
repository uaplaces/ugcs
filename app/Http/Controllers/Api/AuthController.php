<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Requests\Api\Auth\SignupRequest;
use App\Requests\Api\Auth\loginRequest;

class AuthController extends Controller
{
    /**
     * @param SignupRequest $request
     * @return mixed
     */
    public function signup(SignupRequest $request)
    {
        return response()->json($request->all());
    }

    /**
     * @param loginRequest $request
     * @return mixed
     */
    public function login(LoginRequest $request)
    {
        return response()->json($request->all());
    }

    public function logout()
    {
        return redirect('front.index');
    }
}
