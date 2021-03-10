<?php

declare(strict_types=1);

namespace Brisum\Pattern\Creational\AbstractFactory\FurnitureFactory\Modern\FurnitureObject;

use Brisum\Pattern\Creational\AbstractFactory\Component\FurnitureObjectInterface;

class Cupboard implements FurnitureObjectInterface
{
    public function build(): void
    {
        echo "Modern cupboard\n";
    }
}
