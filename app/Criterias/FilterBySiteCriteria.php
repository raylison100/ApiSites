<?php

namespace App\Criterias;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class FilterBySiteRunCriteria
 * @package namespace App\Criteria;
 */
class FilterBySiteCriteria extends AppCriteria implements CriteriaInterface
{

    /**
     * @param $model
     * @param RepositoryInterface $repository
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        $site_id = $this->request->query->get('site_id');

        if(is_numeric($site_id)){
            $model = $model->where('site_id',$site_id);
        }

        return $model;
    }
}
