<?php

namespace Brisum\Pattern\Behavioral\StateLoop\Component;

use Brisum\Pattern\Behavioral\StateLoop\Entity\DepositEntity;

class DepositContext
{
    private DepositBuilder $depositBuilder;

    public function __construct(DepositEntity $depositEntity)
    {
        $this->depositBuilder = new DepositBuilder($depositEntity);
    }

    public function getDepositBuilder(): DepositBuilder
    {
        return $this->depositBuilder;
    }

    public function getDepositEntity(): DepositEntity
    {
        return $this->depositBuilder->getDepositEntity();
    }
}
