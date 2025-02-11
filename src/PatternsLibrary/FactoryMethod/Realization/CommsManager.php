<?php

namespace PhpPatterns\PatternsLibrary\FactoryMethod\Realization;

abstract class CommsManager
{
    abstract public function getHeaderText(): string;
    abstract public function getApptEncoder(): ApptEncoder;
    abstract public function getFooterText(): string;
}