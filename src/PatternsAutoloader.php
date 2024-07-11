<?php

namespace src;

class PatternsAutoloader
{
    public function __construct(public string $patternName)
    {

    }

    public function load(): void
    {
        $path = `Patterns/$this->patternName/$this->patternName.php`;
        if(file_exists($path)){
            include_once $path;
            $patternClass = new $this->patternName();
            $patternClass->init();
        }
    }
}