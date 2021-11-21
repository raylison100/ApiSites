<?php

namespace App\Criterias;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class FilterByStatusCriteria
 * @package namespace App\Criteria;
 */
class FilterVoucherByMemberIdCriteria extends AppCriteria implements CriteriaInterface
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
            $model = $model->where(function ($query) use ($member_id){
                $query->whereHas('voucherEligibility',function ($q) use ($member_id){
                   $q->where('member_id','=',$member_id);
                });
            });
        }
        return $model;
    }
}
