<?php

namespace PhpPatterns\PatternsLibrary\FactoryMethod\Realization;

abstract class ApptEncoder
{
    abstract public function encode(): string;
}