<?php

declare(strict_types=1);

namespace Brisum\Pattern\Behavioral\StateLoop\State;

use Brisum\Pattern\Behavioral\StateLoop\Component\DepositContext;
use Brisum\Pattern\Behavioral\StateLoop\Component\DepositStateInterface;
use Brisum\Pattern\Behavioral\StateLoop\Component\StateInterface;

class Pending implements StateInterface
{
    public function process(DepositContext $depositContext): void
    {
        echo "Switch to " . DepositStateInterface::COMPLETE . "...\n";

        $nextStatus = DepositStateInterface::COMPLETE;
        $nextState = $depositContext->getStateFactory()->createState($nextStatus);

        $depositContext->getDepositEntity()->state = $nextStatus;
        $depositContext->setState($nextState);
    }

    public function __toString(): string
    {
        return DepositStateInterface::PENDING;
    }
}
