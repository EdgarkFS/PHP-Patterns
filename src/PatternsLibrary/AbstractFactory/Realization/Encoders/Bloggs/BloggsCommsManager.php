<?php

namespace PhpPatterns\PatternsLibrary\AbstractFactory\Realization\Encoders\Bloggs;

use PhpPatterns\PatternsLibrary\AbstractFactory\Realization\Interfaces\Encoder;
use PhpPatterns\PatternsLibrary\AbstractFactory\Realization\CommsManager;

class BloggsCommsManager extends CommsManager
{
    public function getHeaderText(): string
    {
        return 'HEADER BloggsCal<br>';
    }

    public function getFooterText(): string
    {
        return 'Footer BloggsCal<br>';
    }

    public function make(int $flag_int): Encoder
    {
        switch ($flag_int)
        {
            case self::APPT:
                return new BloggsApptEncoder();
            case self::CONTACT:
                return new BloggsContactEncoder();
            case self::TTD:
                return new BloggsTtdEncoder();
        }
    }
}