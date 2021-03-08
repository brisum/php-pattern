<?php

declare(strict_types=1);

require_once __DIR__ . '/../../bootstrap.php';

use Brisum\Pattern\AbstractFactory\Component\FurnitureFactoryProvider;

global $di;
$furnitureFactoryProvider = new FurnitureFactoryProvider($di);
$furnitureFactory = $furnitureFactoryProvider->getFactory('modern');

$furnitureFactory->createCupboard()->build();
$furnitureFactory->createSofa()->build();
$furnitureFactory->createChair()->build();
$furnitureFactory->createTable()->build();
