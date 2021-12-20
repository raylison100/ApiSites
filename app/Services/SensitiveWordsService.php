<?php

namespace App\Services;

use App\Repositories\SensitiveWordsRepository;

/**
 * Class SensitiveWordsService
 * @package App\Services
 */
class SensitiveWordsService extends AppService
{
    /**
     * @var SensitiveWordsRepository
     */
    protected $repository;

    /**
     * SensitiveWordsRepository constructor.
     * @param SensitiveWordsRepository $repository
     */
    public function __construct(SensitiveWordsRepository $repository)
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
