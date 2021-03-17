<?php

namespace Brisum\Pattern\Behavioral\StateLoop\Component;

use Brisum\Pattern\Behavioral\StateLoop\Entity\DepositEntity;

class DepositBuilder
{
    private array $properties = [
        'state' => null
    ];

    public function __construct(DepositEntity $depositEntity)
    {
        $this->properties['state'] = $depositEntity->getState();
    }

    public function getDepositEntity(): DepositEntity
    {
        return new DepositEntity($this->properties);
    }

    public function setState(string $state): self
    {
        $this->properties['state'] = $state;

        return $this;
    }
}
