<?php

namespace PhpPatterns\PatternsLibrary\AbstractFactory\Realization\Encoders\Bloggs;

use PhpPatterns\PatternsLibrary\AbstractFactory\Realization\TtdEncoder;

class BloggsTtdEncoder extends TtdEncoder
{
    public function encode(): string
    {
        return 'Bloggs Ttd Encoder<br>';
    }
}