<?php

return [

    'app' => [
        'title' => 'Bentega.top',
        'name' => 'Bentega',
    ],

    'menu' => [
        'index' => 'Home',
        'articles' => 'Articles',
        'login' => 'Log in',
        'logout' => 'Log out',
        'signup' => 'Sign up',
    ],

    'search' => [
        'placeholder' => 'Search for an article',
    ],

    'index' => [
        'meta' => [
            'title' => 'Bentega',
            'description' => 'Bentega',
        ],
    ],

    'auth' => [
        'modal' => [
            'signup' => [
                'h1' => 'Sign up for free',
                'inputs' => [
                    'name' => [
                        'placeholder' => '',
                        'label' => 'Your name',
                    ],
                    'email' => [
                        'placeholder' => 'name@example.com',
                        'label' => 'Email address',
                    ],
                    'password' => [
                        'placeholder' => 'Password',
                        'label' => 'Password',
                    ],
                    'password_confirmation' => [
                        'placeholder' => 'Confirm Password',
                        'label' => 'Confirm Password',
                    ],
                ],
                'submit' => 'Sign up',
                'unknown_error' => 'Unknown error. Response code: ',
            ],
            'login' => [
                'h1' => 'Log in',
                'inputs' => [
                    'email' => [
                        'placeholder' => 'name@example.com',
                        'label' => 'Email address',
                    ],
                    'password' => [
                        'placeholder' => 'Password',
                        'label' => 'Password',
                    ],
                    'remember' => [
                        'placeholder' => '',
                        'label' => 'Remember me',
                    ],
                ],
                'submit' => 'Log in',
                'unknown_error' => 'Unknown error. Response code: ',
            ],
        ],
    ],

];
