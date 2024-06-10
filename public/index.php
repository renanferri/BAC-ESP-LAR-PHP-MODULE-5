<?php

use Beerandcode\Modulo5\Base\Container;
use Beerandcode\Modulo5\Base\ContainerPrint;
use Beerandcode\Modulo5\Base\Facade;
use Beerandcode\Modulo5\Facades\Stripe;
use Beerandcode\Modulo5\Providers\CieloPaymentProvider;
use Beerandcode\Modulo5\Providers\Interfaces\PaymentProviderContract;
use Beerandcode\Modulo5\Providers\PaddlePaymentProvider;
use Beerandcode\Modulo5\Providers\StripePaymentProvider;
use Beerandcode\Modulo5\Services\Checkout;

use Beerandcode\Modulo5\Utils\Http;

require __DIR__ . '/../vendor/autoload.php';

/*

$service = new Checkout('renan.gferri@gmail.com', 456);

echo $service->handle(new StripePaymentProvider(new Http));
echo $service->handle(new PaddlePaymentProvider(new Http));
echo $service->handle(new CieloPaymentProvider(new Http));
*/

// $container = new Container;

// $container->register(PaymentProviderContract::class, CieloPaymentProvider::class);

// $paymentProvider = $container->get(PaymentProviderContract::class);

// $servicePaddle = new Checkout('renan.gferri@gmail.com', 456);

// echo $servicePaddle->handle($paymentProvider);

// echo "\n";

// $serviceCielo = new Checkout('2renan.gferri@gmail.com', 789);

// $cieloProvider = $container->get(PaymentProviderContract::class);

// echo $serviceCielo->handle($cieloProvider);

// echo "\n";


echo Stripe::charge('bbb', 222);
echo "\n";
