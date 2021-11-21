<?php

namespace App\Criterias;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class FilterUserProgramIdCriteria
 * @package namespace App\Criteria;
 */
class FilterUserProgramIdCriteria extends AppCriteria implements CriteriaInterface
{

    /**
     * @param $model
     * @param RepositoryInterface $repository
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        $program_id = $this->request->query->get('program_id');
        if (is_numeric($program_id)) {
            $model = $model->where(function ($query) use ($program_id){
                $query->whereHas('userProgram',function ($q) use ($program_id){
                   $q->where('program_id','=',$program_id);
                });
            });
        }
        return $model;
    }
}
