<?php

use Symfony\Component\VarDumper\VarDumper;

/**
 * Global helpers for this project.
 *
 * SEE: https://github.com/laravel/framework/blob/6.x/src/Illuminate/Support/Traits/EnumeratesValues.php#L144
 */

if (!function_exists('dump')) {
    /**
     * Dump the items.
     *
     */
    function dump()
    {
        func_get_args()->each(function ($item) {
            VarDumper::dump($item);
        });
    }
}

if (!function_exists('dd')) {
    /**
     * Dump the items and end the script.
     *
     * @param mixed ...$args
     * @return void
     */
    function dd(...$args)
    {
        call_user_func_array('dump', $args);
        die(1);
    }
}
