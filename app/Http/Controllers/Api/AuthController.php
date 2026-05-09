<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Requests\Api\Auth\SignupRequest;

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
}
