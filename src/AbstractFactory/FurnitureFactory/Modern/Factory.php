<?php

declare(strict_types=1);

namespace Brisum\Pattern\AbstractFactory\FurnitureFactory\Modern;

use Brisum\Pattern\AbstractFactory\Component\FurnitureFactoryInterface;
use Brisum\Pattern\AbstractFactory\Component\FurnitureObjectInterface;
use Brisum\Pattern\AbstractFactory\FurnitureFactory\Modern\FurnitureObject\Chair;
use Brisum\Pattern\AbstractFactory\FurnitureFactory\Modern\FurnitureObject\Cupboard;
use Brisum\Pattern\AbstractFactory\FurnitureFactory\Modern\FurnitureObject\Sofa;
use Brisum\Pattern\AbstractFactory\FurnitureFactory\Modern\FurnitureObject\Table;

class Factory implements FurnitureFactoryInterface
{

    public function createCupboard(): FurnitureObjectInterface
    {
        return new Cupboard();
    }

    public function createSofa(): FurnitureObjectInterface
    {
        return new Sofa();
    }

    public function createTable(): FurnitureObjectInterface
    {
        return new Table();
    }

    public function createChair(): FurnitureObjectInterface
    {
        return new Chair();
    }
}
