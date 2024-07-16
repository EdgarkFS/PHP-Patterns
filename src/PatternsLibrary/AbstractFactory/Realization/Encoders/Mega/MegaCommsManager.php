<?php

namespace PhpPatterns\PatternsLibrary\AbstractFactory\Realization\Encoders\Mega;

use PhpPatterns\PatternsLibrary\AbstractFactory\Realization\Interfaces\Encoder;
use PhpPatterns\PatternsLibrary\AbstractFactory\Realization\CommsManager;

class MegaCommsManager extends CommsManager
{
    public function getHeaderText(): string
    {
        return 'HEADER MegaComms<br>';
    }

    public function getFooterText(): string
    {
        return 'Footer MegaComms<br>';
    }

    public function make(int $flag_int): Encoder
    {
        switch ($flag_int)
        {
            case self::APPT:
                return new MegaApptEncoder();
            case self::CONTACT:
                return new MegaContactEncoder();
            case self::TTD:
                return new MegaTtdEncoder();
        }
    }
}