<?php

namespace Dev\Domain\Service\Abstracts;

use Dev\Infrastructure\Repository\Abstracts\AbstractRepository;

abstract class AbstractService
{
    protected $repository;

    public function __construct(AbstractRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __call($name, $arguments)
    {
        return $this->repository->{$name}(...$arguments);
    }
}