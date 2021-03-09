<?php

declare(strict_types=1);

namespace Brisum\Pattern\Builder\Component;

class Criteria
{
    private string $country;
    private string $currency;

    public function __construct(array $criteria = [])
    {
        foreach ($criteria as $property => $value) {
            if (property_exists($this, $property)) {
                $this->$property = $value;
            }
        }
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }
}
