<?php
function make_pipeline(...$funcs)
{
    return function($arg) use ($funcs)
    {
        return -1;
    };
}

$fun = make_pipeline( function($x) { return $x * 3; },
    function($x) { return $x + 1; },
    function($x) { return $x / 2; } );
echo $fun(3);