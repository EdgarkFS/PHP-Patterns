<?php

namespace PhpPatterns\PatternsLibrary\Singleton;

use PhpPatterns\PatternExecuter;
use PhpPatterns\PatternsLibrary\Singleton\Realization\Preferences;

class Singleton extends PatternExecuter
{
    public function init()
    {
        $preferences = Preferences::getlnstance();
        $preferences->setProperty('name', 'John');

        echo $preferences->getProperty('name');
        unset($preferences);

        $preferences2 = Preferences::getlnstance();
        echo '<br>' . $preferences2->getProperty('name');
    }
}