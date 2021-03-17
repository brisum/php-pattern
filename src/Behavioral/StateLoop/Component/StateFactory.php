<?php

namespace Brisum\Pattern\Behavioral\StateLoop\Component;

use Brisum\Pattern\Behavioral\StateLoop\Component\Exception\StateNotFoundException;
use Symfony\Component\DependencyInjection\ContainerInterface;

class StateFactory
{
    private ContainerInterface $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }
    
    public function createState(string $name): StateInterface
    {
        $name  = ucfirst(preg_replace_callback(
            '/(?:_)([a-z0-9])/i',
            static function($matches) { return strtoupper($matches[1]); },
            $name
        ));
        $class =  "Brisum\\Pattern\\Behavioral\\State\\State\\{$name}";

        if (!class_exists($class)) {
            throw new StateNotFoundException($class);
        }

        $state = $this->container->get($class);
        assert($state instanceof StateInterface);

        return $state;
    }
}
