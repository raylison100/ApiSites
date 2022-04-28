<?php

namespace App\Repositories;

use App\Entities\PersonalWords;
use App\Presenters\PersonalWordsPresenter;
use App\Validators\PersonalWordsValidator;
use Prettus\Repository\Eloquent\BaseRepository;

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
