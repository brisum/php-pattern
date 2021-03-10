<?php

declare(strict_types=1);

namespace Brisum\Pattern\Behavioral\State\State;

use Brisum\Pattern\Behavioral\State\Component\DepositContext;
use Brisum\Pattern\Behavioral\State\Component\DepositStateInterface;
use Brisum\Pattern\Behavioral\State\Component\StateInterface;

class Complete implements StateInterface
{
    public function process(DepositContext $depositContext): void
    {
        echo DepositStateInterface::COMPLETE . ", not processed.\n";
    }

    public function __toString(): string
    {
        return DepositStateInterface::COMPLETE;
    }
}
