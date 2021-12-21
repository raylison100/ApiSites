<?php

namespace App\Criterias;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class FilterBySiteRunCriteria
 * @package namespace App\Criteria;
 */
class FilterByTypeCriteria extends AppCriteria implements CriteriaInterface
{

    /**
     * @param $model
     * @param RepositoryInterface $repository
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        $type_id = $this->request->query->get('type_id');

        if(is_numeric($type_id)){
            $model = $model->where('type_id',$type_id);
        }

        return $model;
    }
}
