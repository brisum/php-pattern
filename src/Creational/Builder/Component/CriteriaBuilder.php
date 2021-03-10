<?php

namespace Brisum\Pattern\Creational\Builder\Component;

class CriteriaBuilder
{
    private array $criteria = [];

    public function getCriteria(): Criteria
    {
        return new Criteria($this->criteria);
    }

    public function setCountry(string $country): self
    {
        $this->criteria['country'] = $country;

        return $this;
    }

    public function setCurrency(string $currency): self
    {
        $this->criteria['currency'] = $currency;

        return $this;
    }
}
