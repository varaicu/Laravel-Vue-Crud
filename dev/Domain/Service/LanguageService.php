<?php

namespace Dev\Domain\Service;

use Dev\Domain\Service\Abstracts\AbstractService;
use Dev\Infrastructure\Repository\LanguageRepository;
use Dev\Infrastructure\Repository\ProductRepository;
use Illuminate\Support\Arr;

class LanguageService extends AbstractService
{
    public function __construct(LanguageRepository $repository)
    {
        parent::__construct($repository);
    }

    public function create(array $data)
    {
        $language = $this->repository->create($data);
        if (isset($data['keywords'])) {
            data_set($data['keywords'], '*.language_code', $language->code);
            $language->keywords()->createMany($data['keywords']);
        }
        return $language;
    }

    public function index(array $filter = [])
    {
        if (isset($filter['limit'])) {
            return $this->repository->paginate($filter['limit'])->withQueryString();
        }
        return $this->repository->get();
    }
}