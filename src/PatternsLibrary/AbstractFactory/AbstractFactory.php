<?php

namespace PhpPatterns\PatternsLibrary\AbstractFactory;

use PhpPatterns\PatternExecuter;
use PhpPatterns\PatternsLibrary\AbstractFactory\Realization\CommsManager;
use PhpPatterns\PatternsLibrary\AbstractFactory\Realization\Encoders\Bloggs\BloggsCommsManager;
use PhpPatterns\PatternsLibrary\AbstractFactory\Realization\Encoders\Mega\MegaCommsManager;

class AbstractFactory extends PatternExecuter
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
        $responseString .= $commsManager->make(1)->encode();
        $responseString .= $commsManager->make(2)->encode();
        $responseString .= $commsManager->make(3)->encode();
        $responseString .= $commsManager->getFooterText();
        return $responseString;
    }
}