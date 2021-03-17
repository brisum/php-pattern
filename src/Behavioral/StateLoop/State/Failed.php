<?php

declare(strict_types=1);

namespace Brisum\Pattern\Behavioral\StateLoop\State;

use Brisum\Pattern\Behavioral\StateLoop\Component\DepositContext;
use Brisum\Pattern\Behavioral\StateLoop\Component\DepositStateInterface;
use Brisum\Pattern\Behavioral\StateLoop\Component\StateInterface;

class Failed implements StateInterface
{
    public function process(DepositContext $depositContext): void
    {
        echo DepositStateInterface::FAILED . ", not processed.\n";
    }

    public function __toString(): string
    {
        return DepositStateInterface::FAILED;
    }
}
