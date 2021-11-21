<?php

namespace App\Services;

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
}
