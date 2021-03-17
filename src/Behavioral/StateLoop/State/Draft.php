<?php

declare(strict_types=1);

namespace Brisum\Pattern\Behavioral\StateLoop\State;

use Brisum\Pattern\Behavioral\StateLoop\Component\DepositContext;
use Brisum\Pattern\Behavioral\StateLoop\Component\DepositStateInterface;
use Brisum\Pattern\Behavioral\StateLoop\Component\StateInterface;

class Draft implements StateInterface
{
    public function process(DepositContext $depositContext): void
    {
        echo "Switch to " . DepositStateInterface::READY_TO_PROCESSING . "...\n";

        $depositContext->getDepositBuilder()->setState(DepositStateInterface::READY_TO_PROCESSING);
    }

    public function __toString(): string
    {
        return DepositStateInterface::DRAFT;
    }
}
