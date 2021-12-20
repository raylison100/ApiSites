<?php

namespace App\Services;

use App\Repositories\PersonalWordsRepository;

/**
 * Class PersonalWordsService
 * @package App\Services
 */
class PersonalWordsService extends AppService
{
    /**
     * @var PersonalWordsRepository
     */
    protected $repository;

    /**
     * PersonalWordsRepository constructor.
     * @param PersonalWordsRepository $repository
     */
    public function __construct(PersonalWordsRepository $repository)
    {
        $this->repository = $repository;

    }

    public function check($check)
    {
        return $this->repository->findWhere([
            ['name', 'like', '%'. $check .'%' ]
        ]);
    }
}
