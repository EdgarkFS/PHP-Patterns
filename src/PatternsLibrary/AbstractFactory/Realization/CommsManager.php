<?php

namespace PhpPatterns\PatternsLibrary\AbstractFactory\Realization;

use PhpPatterns\PatternsLibrary\AbstractFactory\Realization\Interfaces\Encoder;

abstract class CommsManager
{
    public const APPT = 1;
    public const TTD = 2;
    public const CONTACT = 3;

    abstract public function getHeaderText(): string;
    abstract public function make(int $flag_int): Encoder;
    abstract public function getFooterText(): string;
}