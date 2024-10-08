<?php
function create($class, $attr = [], $times = null)
{
    return factory($class, $times)->create($attr);
}

function make($class, $attr = [], $times = null)
{
    return factory($class, $times)->make($attr);
}
function admitUnauth($that)
{
    return $that->expectException('Illuminate\Auth\AuthenticationException');
}
