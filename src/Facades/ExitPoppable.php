<?php

namespace smunabo\exitPoppable\Facades;

/**
 * Created by PhpStorm.
 * User: stephenmunabo
 * Date: 5/18/17
 * Time: 9:24 AM
 */

use Illuminate\Support\Facades\Facade;

class ExitPoppable Extends Facade
{
    protected static function getFacadeAccessor()
    {
        return "exitpoppable";
    }
}