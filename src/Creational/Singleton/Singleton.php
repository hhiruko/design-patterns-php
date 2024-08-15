<?php

namespace Creational\Singleton;

use Exception;

class Singleton
{
    private static Singleton $instance;

    private function __construct() {}
    private function __clone() {}
    public function __wakeup() {
        throw new Exception("Cannot unserialize a singleton.");
    }

    public static function getInstance(): Singleton
    {
        if (empty(self::$instance)) {
            self::$instance = new static();
        }

        return self::$instance;
    }
}