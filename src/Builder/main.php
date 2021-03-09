<?php

declare(strict_types=1);

require_once __DIR__ . '/../../bootstrap.php';

use Brisum\Pattern\Builder\Component\CriteriaBuilder;
use Brisum\Pattern\Builder\Component\CriteriaDirector;
use Brisum\Pattern\Builder\Component\PaymentMethodProvider;

global $di;

echo "Guest:\n";
$builder = new CriteriaBuilder();
$director = new CriteriaDirector(['country' => 'UA', 'currency' => 'EUR'], []);
$paymentMethodProvider = new PaymentMethodProvider();

$director->buildGuestCriteria($builder);
$criteria = $builder->getCriteria();
$paymentMethods = $paymentMethodProvider->getPaymentMethodsBy($criteria);

var_dump($paymentMethods);