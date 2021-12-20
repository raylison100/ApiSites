<?php

namespace App\Repositories;

use App\Entities\SensitiveWords;
use App\Presenters\SensitiveWordsPresenter;
use App\Validators\SensitiveWordsValidator;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class SensitiveWordsRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class SensitiveWordsRepositoryEloquent extends BaseRepository implements SensitiveWordsRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return SensitiveWords::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return SensitiveWordsValidator::class;
    }


    /**
     * @return string
     */
    public function presenter()
    {
        return SensitiveWordsPresenter::class;
    }
}
