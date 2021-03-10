<?php

declare(strict_types=1);

namespace Brisum\Pattern\Creational\AbstractFactory\FurnitureFactory\Country\FurnitureObject;

use Brisum\Pattern\Creational\AbstractFactory\Component\FurnitureObjectInterface;

class Sofa implements FurnitureObjectInterface
{
    public function build(): void
    {
        echo "Country sofa\n";
    }
}