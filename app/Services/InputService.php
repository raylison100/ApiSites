<?php

namespace App\Services;

use App\Criterias\AppRequestCriteria;
use App\Criterias\FilterBySiteCriteria;
use App\Criterias\FilterByTypeCriteria;
use App\Repositories\InputsRepository;

/**
 * Class InputService
 * @package App\Services
 */
class InputService extends AppService
{
    /**
     * @var InputsRepository
     */
    protected $repository;

    /**
     * InputService constructor.
     * @param InputsRepository $repository
     */
    public function __construct(InputsRepository $repository)
    {
        $this->repository = $repository;
    }


    public function selectInputs()
    {
        return $this->repository
            ->resetCriteria()
            ->pushCriteria(app(FilterBySiteCriteria::class))
            ->pushCriteria(app(FilterByTypeCriteria::class))
            ->pushCriteria(app(AppRequestCriteria::class));
    }
}
