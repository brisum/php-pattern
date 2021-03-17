<?php

namespace Brisum\Pattern\Behavioral\StateLoop\Component;

use Brisum\Pattern\Behavioral\StateLoop\Entity\DepositEntity;

class DepositContext
{
    private StateFactory $stateFactory;
    private DepositEntity $depositEntity;
    private StateInterface $state;

    public function __construct(StateFactory $stateFactory, DepositEntity $depositEntity)
    {
        $this->stateFactory = $stateFactory;
        $this->depositEntity = $depositEntity;
        $this->state = $stateFactory->createState($depositEntity->state);
    }

    public function process(): void
    {
        $this->state->process($this);
    }

    public function getStateFactory(): StateFactory
    {
        return $this->stateFactory;
    }

    public function setState(StateInterface $state): void
    {
        $this->state = $state;
    }

    public function getDepositEntity(): DepositEntity
    {
        return $this->depositEntity;
    }
}
