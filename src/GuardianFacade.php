<?php

namespace DesignByCode\Guardian;

use Illuminate\Support\Facades\Facade;

/**
 * @see \DesignByCode\Guardian\Guardian
 */
class GuardianFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'guardian';
    }
}
