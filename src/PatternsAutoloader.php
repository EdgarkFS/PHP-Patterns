<?php

namespace PhpPatterns;

class PatternsAutoloader
{
    public function __construct(public string $patternName = '')
    {

    }

    public function load(): void
    {
        if ($this->patternName === '') {
            throw new \Exception('Pattern name not specified');
        }

        $path = `Patterns/$this->patternName/$this->patternName.php`;


        if($path || !file_exists($path)){
            throw new \Exception('Pattern file not found');
        }

        $patternClass = new $this->patternName();
        $patternClass->init();
    }
}