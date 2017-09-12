<?php

namespace Lyn\Admin;

use Illuminate\Support\Facades\Facade;

class Admin extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'lin/admin';
    }
}