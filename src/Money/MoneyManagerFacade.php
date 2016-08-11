<?php

namespace aharen\Money;

use Illuminate\Support\Facades\Facade;

class MoneyManagerFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'App\Services\Money\MoneyManager';
    }
}
