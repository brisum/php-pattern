<?php

declare(strict_types=1);

namespace Brisum\Pattern\Creational\AbstractFactory\Component;

interface FurnitureFactoryInterface
{
    public function createCupboard(): FurnitureObjectInterface;

    public function createSofa(): FurnitureObjectInterface;

    public function createTable(): FurnitureObjectInterface;

    public function createChair(): FurnitureObjectInterface;
}

