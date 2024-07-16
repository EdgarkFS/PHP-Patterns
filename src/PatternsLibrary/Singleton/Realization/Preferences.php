<?php

namespace PhpPatterns\PatternsLibrary\Singleton\Realization;

class Preferences
{
    private array $props = [];
    private static Preferences $instance;
    private function construct()
    {
    }

    public static function getlnstance(): Preferences
    {
        if (empty(self::$instance))
        {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function setProperty(string $key, string $val): void
    {
        $this->props[$key] = $val;
    }

    public function getProperty(string $key): string
    {
        return $this->props[$key];
    }
}