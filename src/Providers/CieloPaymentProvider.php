<?php

namespace Beerandcode\Modulo5\Providers;

use Beerandcode\Modulo5\Providers\Interfaces\PaymentProviderContract;
use Beerandcode\Modulo5\Utils\Http;

class CieloPaymentProvider implements PaymentProviderContract
{
    public function __construct(Http $clientHttp)
    {        
    }

    public function charge(string $email, int $amount) : string
    {
        return "We successfully charged BRL {$amount} from {$email}";
    }
}
