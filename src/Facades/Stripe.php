<?php

namespace Beerandcode\Modulo5\Facades;

use Beerandcode\Modulo5\Base\Facade;
use Beerandcode\Modulo5\Providers\StripePaymentProvider;

class Stripe extends Facade
{
    protected static function getFacadeAcessor() : string
    {
        return StripePaymentProvider::class;
    }
}
