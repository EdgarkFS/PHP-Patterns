<?php

namespace PhpPatterns\PatternsLibrary\AbstractFactory\Realization\Encoders\Bloggs;

use PhpPatterns\PatternsLibrary\AbstractFactory\Realization\ApptEncoder;

class BloggsApptEncoder extends ApptEncoder
{
    public function encode(): string
    {
        return 'Dataset in Bloggs format<br>';
    }
}