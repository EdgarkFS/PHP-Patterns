<?php

namespace PhpPatterns\PatternsLibrary\FactoryMethod\Realization\Workers;

use PhpPatterns\PatternsLibrary\FactoryMethod\Realization\SeniorWorkerClass;

class JuniorWorkerClass extends SeniorWorkerClass
{
    public function work(): void
    {
        echo "I will work on this issue for 4 hours\n";
    }
}