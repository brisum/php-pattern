<?php

declare(strict_types=1);

namespace Brisum\Pattern\Creational\AbstractFactory\FurnitureFactory\Country\FurnitureObject;

use Brisum\Pattern\Creational\AbstractFactory\Component\FurnitureObjectInterface;

class Table implements FurnitureObjectInterface
{
    public function build(): void
    {
        echo "Country table\n";
    }
}
