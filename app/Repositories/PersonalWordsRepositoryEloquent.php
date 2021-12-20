<?php

namespace App\Repositories;

use App\Presenters\PersonalWordsPresenter;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\PersonalWordsRepository;
use App\Entities\PersonalWords;
use App\Validators\PersonalWordsValidator;

/**
 * Class PersonalWordsRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class PersonalWordsRepositoryEloquent extends BaseRepository implements PersonalWordsRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return PersonalWords::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return PersonalWordsValidator::class;
    }


    /**
     * @return string
     */
    public function presenter()
    {
        return PersonalWordsPresenter::class;
    }
}
