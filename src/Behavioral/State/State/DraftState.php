<?php

declare(strict_types=1);

namespace Brisum\Pattern\Behavioral\State\State;

use Brisum\Pattern\Behavioral\State\Component\DepositContext;
use Brisum\Pattern\Behavioral\State\Component\DepositStatusInterface;
use Brisum\Pattern\Behavioral\State\Component\StateInterface;

class DraftState implements StateInterface
{
    public function process(DepositContext $depositContext): void
    {
        $nextStatus = DepositStatusInterface::READY_TO_PROCESSING;
        $nextState = $depositContext->getStateFactory()->createState($nextStatus);

        $depositContext->getDepositEntity()->status = $nextStatus;
        $depositContext->setState($nextState);
    }

    public function __toString(): string
    {
        return DepositStatusInterface::DRAFT;
    }
}
