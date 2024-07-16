<?php

namespace PhpPatterns\PatternsLibrary\Prototype;

use PhpPatterns\PatternExecuter;
use PhpPatterns\PatternsLibrary\Prototype\Realization\Planets\Earth\EarthForest;
use PhpPatterns\PatternsLibrary\Prototype\Realization\Planets\Earth\EarthSea;
use PhpPatterns\PatternsLibrary\Prototype\Realization\Planets\Mars\MarsPlains;
use PhpPatterns\PatternsLibrary\Prototype\Realization\TerrainFactory;

class Prototype extends PatternExecuter
{
    public function init()
    {
        $earthFactory = new TerrainFactory(
            new EarthSea(),
            new MarsPlains(),
            new EarthForest()
        );

        print_r($earthFactory->getSea());
        echo '<br>';
        print_r($earthFactory->getPlains());
        echo '<br>';
        print_r($earthFactory->getForest());
    }
}