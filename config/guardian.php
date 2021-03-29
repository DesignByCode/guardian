<?php


return [

    /*
    |--------------------------------------------------------------------------
    | Add require middleware to dashboard routes
    |--------------------------------------------------------------------------
    |
    | The web route is already added, just specify the additional middleware that you require
    | If you add Email verification "verified", "password.confirm" just remember to add the necessary adjustments.
    | docs: https://laravel.com/docs/8.x/verification#model-preparation
    */
    'middleware' => ['verified'],

    /*
     |--------------------------------------------------------------------------
     | Add default avatar types
     |--------------------------------------------------------------------------
     |
     | Available type is 'ui-avatar' or 'gravatar'.
     | All configuration can be added to the query-string array except for the size property
     | which is globally added to all avatars types.
     | Gravatar docs: https://en.gravatar.com/site/implement/images
     | UI Avatars docs: https://ui-avatars.com/
     | if type is set to gravatar it disable the upload avatar section in dashboard/profile
     | use gravatar globally using `$user->avatar`
     */
    'avatar' => [
        'type' => 'ui-avatar',
        'size' => 100,
        'ui-avatar' => [
            'query-string' => [
                'background' => 'random',
                'rounded' => false,
                'bold' => true,
            ],
        ],
        'gravatar' => [
            'query-string' => [
                'd' => 'mp',
                'r', 'pg',
            ],
        ],
    ] ,

    /*
    |--------------------------------------------------------------------------
    | Avatar Media Conversion size
    |--------------------------------------------------------------------------
    |
    | Add or remove feature in admin section
    |
    */

    "avatar-media" => [
        "thumb" => [
            "width" => 100,
            "height" => 100,
        ],
        "small" => [
            "width" => 40,
            "height" => 40,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Admin features
    |--------------------------------------------------------------------------
    |
    | Add or remove feature in admin section
    |
    */
    'features' => [
        'enable-profile-update' => true,
        'enable-avatar-upload' => true,
        'enable-password-update' => true,
        'enable-browser-session-deletion' => true,
        'enable-two-factor-authentication' => true,
        'enable-delete-own-account' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Status session codes for flash messages
    |--------------------------------------------------------------------------
    |
    | Add additional sessions for sentinel backend.
    |
    */
    'status' => \DesignByCode\Guardian\Guardian::STATUS_CODES,


];
