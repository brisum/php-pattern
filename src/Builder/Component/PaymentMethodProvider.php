<?php

namespace Brisum\Pattern\Builder\Component;

class PaymentMethodProvider
{
    private array $paymentMethods = [
        'liqpay' => [
            'countries' => ['UA'],
            'currencies' => ['UAH', 'EUR', 'USD']
        ]
    ];

    public function getPaymentMethodsBy(Criteria $criteria): array
    {
        $paymentMethods = [];

        foreach ($this->paymentMethods as $paymentMethod)
        {
            if (!in_array($criteria->getCountry(), $paymentMethod['countries'], true)) {
                continue;
            }

            if (!in_array($criteria->getCurrency(), $paymentMethod['currencies'], true)) {
                continue;
            }

            $paymentMethods[] = $paymentMethod;
        }

        return $paymentMethods;
    }
}
