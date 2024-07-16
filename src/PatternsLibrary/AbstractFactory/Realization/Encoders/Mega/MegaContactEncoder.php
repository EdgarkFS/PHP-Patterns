<?php

namespace PhpPatterns\PatternsLibrary\AbstractFactory\Realization\Encoders\Mega;

use PhpPatterns\PatternsLibrary\AbstractFactory\Realization\ContactEncoder;

class MegaContactEncoder extends ContactEncoder
{
    public function encode(): string
    {
        return 'Mega Contact Encoder<br>';
    }
}