<?php

namespace PhpPatterns\PatternsLibrary\FactoryMethod\Realization\Workers;

use PhpPatterns\PatternsLibrary\FactoryMethod\Realization\SeniorWorkerClass;

class MiddleWorkerClass extends SeniorWorkerClass
{
    public function work()
    {
        echo "Interesting task. I will write you soon \n";
    }
}