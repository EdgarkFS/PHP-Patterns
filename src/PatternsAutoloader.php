<?php

namespace PhpPatterns;

class PatternsAutoloader
{
    private static $path = 'PatternsLibrary/%s/%s.php';
    private static $pathNamespace = 'PhpPatterns\PatternsLibrary\%s\%s';

    public function __construct(public string $patternName = '')
    {

    }

    public function load(): void
    {
        if ($this->patternName === '') {
            throw new \Exception('Pattern name not specified');
        }

        $path = sprintf(self::$path, $this->patternName, $this->patternName);

        if(!$path || !file_exists(__DIR__ . '/' . $path)){
            throw new \Exception('Pattern file not found');
        }

        $className = sprintf(self::$pathNamespace, $this->patternName, $this->patternName);
        $patternClass = new $className();
        $patternClass->init();
    }
}