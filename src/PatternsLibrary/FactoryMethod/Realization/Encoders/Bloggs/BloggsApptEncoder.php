<?php

namespace PhpPatterns\PatternsLibrary\FactoryMethod\Realization\Encoders\Bloggs;

use PhpPatterns\PatternsLibrary\FactoryMethod\Realization\ApptEncoder;

class BloggsApptEncoder extends ApptEncoder
{
    public function encode(): string
    {
        return "Dataset in Bloggs format<br>";
    }
}