<?php

declare(strict_types=1);

namespace Brisum\Pattern\AbstractFactory\FurnitureFactory\Modern\FurnitureObject;

use Brisum\Pattern\AbstractFactory\Component\FurnitureObjectInterface;

class Sofa implements FurnitureObjectInterface
{
    public function build(): void
    {
        echo "Modern sofa\n";
    }
}