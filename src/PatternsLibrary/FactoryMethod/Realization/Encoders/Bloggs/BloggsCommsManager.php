<?php

namespace PhpPatterns\PatternsLibrary\FactoryMethod\Realization\Encoders\Bloggs;

use PhpPatterns\PatternsLibrary\FactoryMethod\Realization\ApptEncoder;
use PhpPatterns\PatternsLibrary\FactoryMethod\Realization\CommsManager;

class BloggsCommsManager extends CommsManager
{
    public function getHeaderText(): string
    {
        return "HEADER BloggsCal<br>";
    }

    public function getApptEncoder(): ApptEncoder
    {
        return new BloggsApptEncoder();
    }

    public function getFooterText(): string
    {
        return "Footer BloggsCal<br>";
    }
}