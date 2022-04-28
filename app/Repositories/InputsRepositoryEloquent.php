<?php

namespace App\Repositories;

use App\Entities\Inputs;
use App\Presenters\InputsPresenter;
use App\Validators\InputsValidator;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class InputsRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class InputsRepositoryEloquent extends BaseRepository implements InputsRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Inputs::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {

        return InputsValidator::class;
    }

    /**
     * @return string
     */
    public function presenter()
    {
        return InputsPresenter::class;
    }
}
