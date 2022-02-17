<?php

namespace Dev\Infrastructure\Repository;

use Dev\Infrastructure\Model\Product;
use Dev\Infrastructure\Repository\Abstracts\AbstractRepository;

class ProductRepository extends AbstractRepository
{
    public function __construct(Product $model)
    {
        parent::__construct($model);
    }
}