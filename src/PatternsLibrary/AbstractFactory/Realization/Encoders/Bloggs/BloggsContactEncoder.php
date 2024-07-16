<?php

namespace PhpPatterns\PatternsLibrary\AbstractFactory\Realization\Encoders\Bloggs;

use PhpPatterns\PatternsLibrary\AbstractFactory\Realization\ContactEncoder;

class BloggsContactEncoder extends ContactEncoder
{

    public function encode(): string
    {
        return 'Bloggs Contact Encoder<br>';
    }
}