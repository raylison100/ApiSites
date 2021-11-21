<?php

namespace App\Repositories;

use App\Entities\Sites;
use App\Presenters\SitesPresenter;
use App\Validators\SitesValidator;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class SitesRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class SitesRepositoryEloquent extends BaseRepository implements SitesRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Sites::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return SitesValidator::class;
    }

    /**
     * @return string
     */
    public function presenter()
    {
        return SitesPresenter::class;
    }
}
