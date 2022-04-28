<?php

namespace App\Repositories;

use App\Entities\UndefinedWords;
use App\Presenters\UndefinedWordsPresenter;
use App\Validators\UndefinedWordsValidator;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class UndefinedWordsRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class UndefinedWordsRepositoryEloquent extends BaseRepository implements UndefinedWordsRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return UndefinedWords::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {

        return UndefinedWordsValidator::class;
    }


    /**
     * @return string
     */
    public function presenter()
    {
        return UndefinedWordsPresenter::class;
    }
}
