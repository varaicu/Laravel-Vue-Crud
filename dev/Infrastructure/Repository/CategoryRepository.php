<?php

namespace Dev\Infrastructure\Repository;

use Dev\Infrastructure\Model\Category;
use Dev\Infrastructure\Repository\Abstracts\AbstractRepository;

class CategoryRepository extends AbstractRepository
{
    public function __construct(Category $model)
    {
        parent::__construct($model);
    }
}