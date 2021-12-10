<?php

namespace App\Criterias;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class FilterBySiteRunCriteria
 * @package namespace App\Criteria;
 */
class FilterBySiteRunCriteria extends AppCriteria implements CriteriaInterface
{

    /**
     * @param $model
     * @param RepositoryInterface $repository
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        $run = $this->request->query->get('run');
 
        if(is_numeric($run)){
            $model = $model->where('run',$run);  
        }      

        return $model;
    }
}
