<?php

namespace App\Criterias;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class FilterByCompanyCriteria
 * @package namespace App\Criteria;
 */
class FilterByCompanyCriteria extends AppCriteria implements CriteriaInterface
{

    /**
     * @param $model
     * @param RepositoryInterface $repository
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        $company_id = $this->request->query->get('company_id');
        if (is_numeric($company_id)) {
            $model = $model->where('company_id', $company_id);
        }
        return $model;
    }
}
