<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id'     => env('FB_ID'),
        'client_secret' => env('FB_SECRET'),
        'redirect'      => env('APP_URL') . '/oauth/facebook/callback',
    ],

    'twitter' => [
        'client_id'     => env('TW_ID'),
        'client_secret' => env('TW_SECRET'),
        'redirect'      => env('APP_URL') . '/oauth/twitter/callback',
    ],

     'google' => [
        'client_id'     => '708940633345-o5pa4s2g3k9mlalllpba7vnfschctl0f.apps.googleusercontent.com',
        'client_secret' => 'p_cYvCK7W9jdDS6poRCJngbE',
        'redirect'      => 'https://ceresusach.herokuapp.com/oauth/google/callback',
    ],


    //'google' => [
        //'client_id'     => '16577149202-4niaic0hmmrt6ghnt9hra5052ekc51k0.apps.googleusercontent.com',
        //'client_secret' => '1RGQCR5kGDDYEaCpxSQnst2o',
        //'redirect'      => 'http://ceresusach.herokuapp.com/oauth/google/callback',
    //],

    'github' => [
        'client_id'     => env('GH_ID'),
        'client_secret' => env('GH_SECRET'),
        'redirect'      => env('APP_URL') . '/oauth/github/callback',
    ]
];
