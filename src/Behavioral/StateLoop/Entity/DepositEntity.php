<?php

declare(strict_types=1);

namespace Brisum\Pattern\Behavioral\StateLoop\Entity;

class DepositEntity
{
    private string $state = 'draft';

    public function __construct(array $properties = [])
    {
        foreach ($properties as $property => $value) {
            if (property_exists($this, $property)) {
                $this->$property = $value;
            }
        }
    }

    public function getState(): string
    {
        return $this->state;
    }
}
