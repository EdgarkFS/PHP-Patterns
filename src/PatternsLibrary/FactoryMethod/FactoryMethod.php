<?php

namespace PhpPatterns\PatternsLibrary\FactoryMethod;

use PhpPatterns\PatternExecuter;
use PhpPatterns\PatternsLibrary\FactoryMethod\Realization\CommsManager;
use PhpPatterns\PatternsLibrary\FactoryMethod\Realization\Encoders\Bloggs\BloggsCommsManager;
use PhpPatterns\PatternsLibrary\FactoryMethod\Realization\Encoders\Mega\MegaCommsManager;

class FactoryMethod extends PatternExecuter
{
    public function init()
    {
        $responseString = $this->realization(new BloggsCommsManager());
        $responseString .= "<br>";
        $responseString .= $this->realization(new MegaCommsManager());

        echo $responseString;
    }

    private function realization(CommsManager $commsManager)
    {
        $responseString = $commsManager->getHeaderText();
        $responseString .= $commsManager->getApptEncoder()->encode();
        $responseString .= $commsManager->getFooterText();
        return $responseString;
    }
}