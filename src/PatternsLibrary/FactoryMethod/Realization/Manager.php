<?php

namespace PhpPatterns\PatternsLibrary\FactoryMethod\Realization;

use PhpPatterns\PatternsLibrary\FactoryMethod\Realization\Workers\JuniorWorkerClass;
use PhpPatterns\PatternsLibrary\FactoryMethod\Realization\Workers\MiddleWorkerClass;

class Manager
{
    public static int $junior = 0;
    public static int $middle = 1;

    public function __construct(public int $mode)
    {

    }

    public function fixIssue()
    {
        switch ($this->mode){
            case self::$junior:
                return new JuniorWorkerClass();
            default:
                return new MiddleWorkerClass();
        }
    }
}