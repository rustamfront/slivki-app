<?php

namespace App;

class Route
{
    private static string $url;

    public function __construct()
    {
        self::$url = $_SERVER['REQUEST_URI'];
    }

    public static function get(string $uri, callable $func): void
    {
        if ($uri === self::$url) {
            $func();
        }
    }
}