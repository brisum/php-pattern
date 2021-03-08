<?php

declare(strict_types=1);

namespace Brisum\Pattern\AbstractFactory\Component;

interface FurnitureObjectInterface
{
    function build(): void;
}
