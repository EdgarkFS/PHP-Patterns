<?php

namespace PhpPatterns\PatternsLibrary\AbstractFactory\Realization\Encoders\Mega;

use PhpPatterns\PatternsLibrary\AbstractFactory\Realization\TtdEncoder;

class MegaTtdEncoder extends TtdEncoder
{
    public function encode(): string
    {
        return 'Mega Ttd Encoder<br>';
    }
}