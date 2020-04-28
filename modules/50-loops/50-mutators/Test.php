<?php

namespace HexletBasics\Loops\Mutators;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $str = 'If I look back I am lost';
        assert(filterString($str, 'I') === '   look back  am lost');
        assert(filterString($str, 'o') === 'If I lk back I am lst');
    }
}
