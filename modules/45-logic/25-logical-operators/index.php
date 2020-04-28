<?php

namespace HexletBasics\Logic\LogicalOperators;

// BEGIN
function isLannisterSoldier($color, $shield)
{
    return ($color === 'red' && $shield === null) || ($shield === 'lion');
}
// END
