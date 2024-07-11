<?php

namespace PhpPatterns\PatternsLibrary\FactoryMethod;

use PhpPatterns\PatternExecuter;
use PhpPatterns\PatternsLibrary\FactoryMethod\Realization\Manager;

class FactoryMethod extends PatternExecuter
{
    public function init()
    {
        $junior = new Manager(Manager::$junior);
        $middle = new Manager(Manager::$middle);

        $junior->fixIssue()->work();
        $middle->fixIssue()->work();
    }
}