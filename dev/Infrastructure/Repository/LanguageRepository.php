<?php

namespace Dev\Infrastructure\Repository;

use Dev\Infrastructure\Model\Language;
use Dev\Infrastructure\Repository\Abstracts\AbstractRepository;

class LanguageRepository extends AbstractRepository
{
    public function __construct(Language $model)
    {
        parent::__construct($model);
    }
}