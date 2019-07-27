<?php

return [

    /*
    |--------------------------------------------------------------------------
    | If Impersonate needs to load and register the routes.
    |--------------------------------------------------------------------------
    */

    'register_routes' => true,

    /*
    |--------------------------------------------------------------------------
    | Model to impersonate
    |--------------------------------------------------------------------------
    */
    'model' => config("auth.providers.users.model"),

    /*
    |--------------------------------------------------------------------------
    | Column in users table to use to find the user
    |--------------------------------------------------------------------------
    */
    'find_by' => 'id',

    /*
    |--------------------------------------------------------------------------
    | The session keys where the original user id and if busy impersonate
    |--------------------------------------------------------------------------
    */

    'session' => [
        'is_active'     => 'impersonate.is_active',
        'original_user' => 'impersonate.original_user_id',
    ],
];
