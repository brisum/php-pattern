<?php

declare(strict_types=1);

namespace Brisum\Pattern\Creational\AbstractFactory\Component;

use Brisum\Pattern\Creational\AbstractFactory\Component\Exception\FurnitureFactoryNotFoundException;
use Symfony\Component\DependencyInjection\ContainerInterface;

class FurnitureFactoryProvider
{
    private ContainerInterface $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getFactory(string $style): FurnitureFactoryInterface
    {
        $name  = ucfirst(preg_replace_callback(
            '/(?:_)([a-z0-9])/i',
            static function($matches) { return strtoupper($matches[1]); },
            $style
        ));
        $class =  "Brisum\\Pattern\\AbstractFactory\\FurnitureFactory\\{$name}\\Factory";

        if (!class_exists($class)) {
            throw new FurnitureFactoryNotFoundException($class);
        }

        $factory = $this->container->get($class);
        assert($factory instanceof FurnitureFactoryInterface);

        return $factory;
    }
}
