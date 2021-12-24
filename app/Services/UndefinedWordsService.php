<?php

namespace App\Services;

use App\Repositories\UndefinedWordsRepository;

/**
 * Class SensitiveWordsService
 * @package App\Services
 */
class UndefinedWordsService extends AppService
{
    /**
     * @var UndefinedWordsRepository
     */
    protected $repository;

    /**
     * SensitiveWordsRepository constructor.
     * @param UndefinedWordsRepository $repository
     */
    public function __construct(UndefinedWordsRepository $repository)
    {
        $this->repository = $repository;
    }


    public function check($check)
    {
        return $this->repository->findWhere([
            ['name', 'like', '%'. $check .'%']
        ]);
    }
}
