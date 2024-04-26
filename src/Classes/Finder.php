<?php

namespace App\Classes;

class Finder extends Workers
{
    public static function find(string $email): array
    {
        foreach (self::$workers as $worker) {
            if ($worker['email'] === $email) {
                return $worker;
            }
        }
        return [];
    }
}