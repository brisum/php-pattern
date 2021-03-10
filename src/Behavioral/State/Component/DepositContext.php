<?php

namespace Brisum\Pattern\Behavioral\State\Component;

use Brisum\Pattern\Behavioral\State\DepositEntity\DepositEntity;

class DepositContext
{
    private StateFactory $stateFactory;
    private DepositEntity $depositEntity;
    private StateInterface $state;

    private function __construct(DepositEntity $depositEntity, StateInterface $state)
    {
        $this->depositEntity = $depositEntity;
        $this->state = $state;
    }

    public function create(DepositEntity $depositEntity): DepositContext
    {
        $state = $this->stateFactory->createState($depositEntity->status);

        return new DepositContext($depositEntity, $state);
    }

    public function process(): void
    {
        $this->state->process($this);
    }

    public function setStateFactory(StateFactory $stateFactory): void
    {
        $this->stateFactory = $stateFactory;
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
