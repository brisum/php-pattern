<?php

declare(strict_types=1);

namespace Brisum\Pattern\Creational\FactoryMethod\Component;

use Brisum\Pattern\Creational\FactoryMethod\Component\Exception\TransportNotFoundException;
use Symfony\Component\DependencyInjection\ContainerInterface;

class TransportFactory
{
    private ContainerInterface $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getTransport(string $type): TransportInterface
    {
        $name  = ucfirst(preg_replace_callback(
            '/(?:_)([a-z0-9])/i',
            static function($matches) { return strtoupper($matches[1]); },
            $type
        ));
        $class =  "Brisum\\Pattern\\FactoryMethod\\Transport\\{$name}\\{$name}Transport";

        if (!class_exists($class)) {
            throw new TransportNotFoundException($class);
        }

        $factory = $this->container->get($class);
        assert($factory instanceof TransportInterface);

        return $factory;
    }
}
