<?php

namespace App\Services;

use App\Repositories\InputTypesRepository;

/**
 * Class InputTypeService
 * @package App\Services
 */
class InputTypeService extends AppService
{
    /**
     * @var InputTypesRepository
     */
    protected $repository;

    /**
     * InputTypeService constructor.
     * @param InputTypesRepository $repository
     */
    public function __construct(InputTypesRepository $repository)
    {
        $this->repository = $repository;

    }
}
