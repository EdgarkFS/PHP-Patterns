<?php

namespace PhpPatterns\PatternsLibrary\AbstractFactory\Realization;

use PhpPatterns\PatternsLibrary\AbstractFactory\Realization\Interfaces\Encoder;

abstract class ContactEncoder implements Encoder
{
    abstract public function encode(): string;
}