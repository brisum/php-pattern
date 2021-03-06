<?php

declare(strict_types=1);

namespace Brisum\Pattern\Behavioral\State\State;

use Brisum\Pattern\Behavioral\State\Component\DepositContext;
use Brisum\Pattern\Behavioral\State\Component\DepositStateInterface;
use Brisum\Pattern\Behavioral\State\Component\StateInterface;

class ReadyToProcessing implements StateInterface
{
    public function process(DepositContext $depositContext): void
    {
        echo "Switch to " . DepositStateInterface::PENDING . "...\n";

        $nextStatus = DepositStateInterface::PENDING;
        $nextState = $depositContext->getStateFactory()->createState($nextStatus);

        $depositContext->getDepositEntity()->state = $nextStatus;
        $depositContext->setState($nextState);
    }

    public function __toString(): string
    {
        return DepositStateInterface::READY_TO_PROCESSING;
    }
}
