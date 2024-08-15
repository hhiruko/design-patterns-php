<?php

namespace Creational\Singleton;

class Singleton
{
    private static Singleton $instance;

    private string $config;

    protected function __construct() {}

    public static function getInstance(): Singleton
    {
        if (empty(self::$instance)) {
            self::$instance = new static();
        }

        return self::$instance;
    }

    public function getConfig(): string
    {
        return $this->config;
    }

    public function setConfig(string $config): void
    {
        $this->config = $config;
    }
}