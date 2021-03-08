<?php

declare(strict_types=1);

namespace Brisum\Pattern\AbstractFactory\FurnitureFactory\Modern\FurnitureObject;

use Brisum\Pattern\AbstractFactory\Component\FurnitureObjectInterface;

class Table implements FurnitureObjectInterface
{
    public function build(): void
    {
        echo "Modern table\n";
    }
}
