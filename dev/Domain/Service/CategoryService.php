<?php

namespace Dev\Domain\Service;

use Dev\Domain\Service\Abstracts\AbstractService;
use Dev\Infrastructure\Repository\CategoryRepository;

class CategoryService extends AbstractService
{
    public function __construct(CategoryRepository $repository)
    {
        parent::__construct($repository);
    }

    public function create(array $data)
    {
        return $this->repository->create($data);
    }

    public function index(array $filter = [])
    {
        if (isset($filter['limit'])) {
            return $this->repository->paginate($filter['limit'])->withQueryString();
        }
        return $this->repository->get();
    }
}