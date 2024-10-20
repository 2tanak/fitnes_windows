<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Password Reset Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are the default lines which match reasons
    | that are given by the password broker for a password update attempt
    | has failed, such as for an invalid token or invalid new password.
    |
    */

    'reset' => 'Your password has been reset!',
    'sent' => 'We have emailed your password reset link!',
    'throttled' => 'Please wait before retrying.',
    'token' => 'This password reset token is invalid.',
    'user' => "We can't find a user with that email address.",
    'mail'=>[
    'subject'=>'Password Reset Notification - ',
	'line1'=>'You are receiving this email because we have received a password reset request for your account.',
	'action'=>'Change Password',
	'line2'=>'If you have not requested a password reset, no further action is required.'
    ]
];
