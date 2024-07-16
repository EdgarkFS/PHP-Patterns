<?php

namespace PhpPatterns\PatternsLibrary\FactoryMethod\Realization\Encoders\Mega;

use PhpPatterns\PatternsLibrary\FactoryMethod\Realization\ApptEncoder;

class MegaApptEncoder extends ApptEncoder
{
    public function encode(): string
    {
        return "Dataset in Mega's format <br>";
    }
}