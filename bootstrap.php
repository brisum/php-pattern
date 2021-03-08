<?php

declare(strict_types=1);

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

require_once __DIR__ . '/vendor/autoload.php';

$di = new ContainerBuilder();
$loader = new YamlFileLoader($di, new FileLocator(__DIR__ . '/config/'));
$loader->load('services.yaml');

$di->compile();
