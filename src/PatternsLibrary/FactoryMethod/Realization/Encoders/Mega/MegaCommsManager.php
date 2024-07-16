<?php

namespace PhpPatterns\PatternsLibrary\FactoryMethod\Realization\Encoders\Mega;

use PhpPatterns\PatternsLibrary\FactoryMethod\Realization\ApptEncoder;
use PhpPatterns\PatternsLibrary\FactoryMethod\Realization\CommsManager;

class MegaCommsManager extends CommsManager
{
    public function getHeaderText(): string
    {
        return "HEADER MegaComms<br>";
    }

    public function getApptEncoder(): ApptEncoder
    {
        return new MegaApptEncoder();
    }

    public function getFooterText(): string
    {
        return "Footer MegaComms<br>";
    }
}