<?php

namespace Brisum\Pattern\Creational\Builder\Component;

class CriteriaDirector
{
    private array $env;
    private array $user;

    public function __construct(array $env = [], array $user = [])
    {
        $this->env = [
            'country'  => $env['country'] ?? 'UA',
            'currency' => $env['currency'] ?? 'UAH',
        ];
        $this->user = $user
            ? [
                'country'  => $user['country'],
                'currency' => $user['currency'],
            ]
            : [];
    }

    public function buildGuestCriteria(CriteriaBuilder $criteriaBuilder): void
    {
        $criteriaBuilder->setCountry($this->env['country']);
        $criteriaBuilder->setCurrency($this->env['currency']);
    }

    public function buildUserCriteria(CriteriaBuilder $criteriaBuilder): void
    {
        $criteriaBuilder->setCountry($this->user['country']);
        $criteriaBuilder->setCurrency($this->user['currency']);
    }
}
