<?php

namespace PhpPatterns\PatternsLibrary\AbstractFactory\Realization\Encoders\Mega;

use PhpPatterns\PatternsLibrary\AbstractFactory\Realization\ApptEncoder;

class MegaApptEncoder extends ApptEncoder
{
    public function encode(): string
    {
        return 'Dataset in Mega\'s format <br>';
    }
}