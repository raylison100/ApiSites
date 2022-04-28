<?php

namespace App\Repositories;

use App\Entities\InputTypes;
use App\Presenters\InputTypesPresenter;
use App\Validators\InputTypesValidator;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class InputTypesRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class InputTypesRepositoryEloquent extends BaseRepository implements InputTypesRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return InputTypes::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {

        return InputTypesValidator::class;
    }

    /**
     * @return string
     */
    public function presenter()
    {
        return InputTypesPresenter::class;
    }
}
