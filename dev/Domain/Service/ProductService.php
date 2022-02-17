<?php

namespace Dev\Domain\Service;

use Dev\Domain\Service\Abstracts\AbstractService;
use Dev\Infrastructure\Repository\ProductRepository;

class ProductService extends AbstractService
{
    public function __construct(ProductRepository $repository)
    {
        parent::__construct($repository);
    }

    public function create(array $data)
    {
        $product = $this->repository->create($data);
        if (isset($data['image'])) {
            $product->images()->create(['url' => $data['image']]);
        }
        return $product;
    }

    public function index(array $filter = [])
    {
        if (isset($filter['limit'])) {
            return $this->repository->paginate($filter['limit'])->withQueryString();
        }
        return $this->repository->get();
    }
}