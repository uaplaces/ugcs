<?php

namespace App\Requests\Api\Auth;

use App\Requests\AjaxRequest;
use Illuminate\Validation\Rule;
use Lang;

class SignupRequest extends AjaxRequest
{
    /*
     * @return array
     */
    public function rules()
    {
        return [
            'name' => [
                'required',
                'min:3',
                'max:191',
                Rule::notIn(Lang::get('auth.name_exceptions'))
            ],
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
            'password_confirmation' => [
                'required',
                'min:6',
                'max:191',
                'same:password'
            ]
        ];
    }
}
