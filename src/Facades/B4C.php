<?php

namespace Maksuco\B4C\Facades;

use Illuminate\Support\Facades\Facade;

class B4C extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ('maksuco-B4C');
    }
}
