<?php

declare(strict_types=1);

namespace Brisum\Pattern\Behavioral\StateLoop\State;

use Brisum\Pattern\Behavioral\StateLoop\Component\DepositContext;
use Brisum\Pattern\Behavioral\StateLoop\Component\DepositStateInterface;
use Brisum\Pattern\Behavioral\StateLoop\Component\StateInterface;

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
