<?php

namespace DesignByCode\Guardian;

class Guardian
{
     const STATUS_CODES = [
        'profile-information-updated' => [
            'type' => 'success',
            'message' => 'Profile successfully updated.',
        ],
        'password-updated' => [
            'type' => 'success',
            'message' => 'Password successfully updated.',
        ],
        'verification-link-sent' => [
            'type' => 'success',
            'message' => 'Verification link have been send successfully.',
        ],
        'two-factor-authentication-enabled' => [
            'type' => 'success',
            'message' => 'Two factor authentication successfully enabled.',
        ],
        'two-factor-authentication-disabled' => [
            'type' => 'success',
            'message' => 'Two factor authentication successfully disabled.',
        ],
        'browser-sessions-delete' => [
            'type' => 'success',
            'message' => 'Browser sessions delete successfully.',
        ],

        'we-have-emailed-your-password-reset-link' => [
            'type' => 'success',
            'message' => 'We have emailed your password reset link!',
        ],
        'your-password-has-been-reset' => [
            'type' => 'success',
            'message' => 'Your password has been reset!',
        ],
        'avatar-uploaded-successfully' => [
            'type' => 'success',
            'message' => 'Your avatar has uploaded successfully!',
        ],
        'avatar-removed-successfully' => [
            'type' => 'success',
            'message' => 'Your avatar is successfully removed!',
        ],
        'new-user-created' => [
            'type' => 'success',
            'message' => 'New user successfully created!',
        ],
    ];
}
