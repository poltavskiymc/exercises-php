<?php

namespace HexletBasics\Logic\TernaryOperator;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        assert(convertString('hey') === 'yeh');
        assert(convertString('Hey') === 'Hey');
    }
}
