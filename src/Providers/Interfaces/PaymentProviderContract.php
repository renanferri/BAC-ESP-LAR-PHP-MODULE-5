<?php

namespace Beerandcode\Modulo5\Providers\Interfaces;

use Beerandcode\Modulo5\Utils\Http;

interface PaymentProviderContract
{
    public function __construct(Http $clientHttp);

    public function charge(string $email, int $amount) : string;
}