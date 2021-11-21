<?php

namespace App\Criterias;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class FilterByGroupCriteria
 * @package namespace App\Criteria;
 */
class FilterByGroupCriteria extends AppCriteria implements CriteriaInterface
{

    /**
     * @param $model
     * @param RepositoryInterface $repository
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        $group_id = $this->request->query->get('group_id');
        if (is_numeric($group_id)) {
            $model = $model->where('group_id', $group_id);
        }
        return $model;
    }
}
