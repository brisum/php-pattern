<?php

declare(strict_types=1);

namespace Brisum\Pattern\Behavioral\StateLoop\Component;

interface StateInterface
{
    public function process(DepositContext $depositContext): void;

    public function __toString(): string;
}
