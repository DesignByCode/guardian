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

    'status' => \DesignByCode\Guardian\Guardian::STATUS_CODES

];
