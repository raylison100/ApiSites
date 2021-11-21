<?php

namespace App\Criterias;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class FilterByStatusCriteria
 * @package namespace App\Criteria;
 */
class FilterByMemberIdCriteria extends AppCriteria implements CriteriaInterface
{

    /**
     * @param $model
     * @param RepositoryInterface $repository
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        $member_id = $this->request->query->get('member_id');

        if (is_numeric($member_id)) {
            $model = $model->where('member_id',$member_id);
        }

        return $model;
    }
}
