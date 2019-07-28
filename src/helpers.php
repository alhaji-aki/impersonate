<?php

if (!function_exists('impersonate')) {
    /**
     * Helper impersonate() without facade: Impersonate::login()
     *
     * @param User|null $user
     * @return \Illuminate\Foundation\Application|mixed
     */
    function impersonate(User $user = null)
    {
        $impersonate = app('impersonate');

        if (!is_null($user)) {
            return $impersonate->login($user);
        }

        return $impersonate;
    }
}

if (!function_exists('findItemToImpersonate')) {
    /**
     * Find the model to impersonate
     * @param $user
     * @return $user | \Exception
     */
    function findItemToImpersonate($user)
    {
        if ($user instanceof user) {
            return $user;
        }
        return config('impersonate.model')::where(config('impersonate.find_by'), $user)->firstOrFail();
    }
}
