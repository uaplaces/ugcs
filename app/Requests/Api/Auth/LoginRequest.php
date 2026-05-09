<?php

namespace App\Requests\Api\Auth;

use App\Requests\AjaxRequest;

class LoginRequest extends AjaxRequest
{
    /*
     * @return array
     */
    public function rules()
    {
        return [
            'email' => [
                'required',
                'email',
                'max:191',
            ],
            'password' => [
                'required',
                'min:6',
                'max:191'
            ],
            'remember_me' => [
                'required',
                'in:0,1',
            ],
        ];
    }
}
