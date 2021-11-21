<?php

namespace App\Criterias;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class FilterByTransactionStatusCriteria
 * @package namespace App\Criteria;
 */
class FilterByTransactionStatusCriteria extends AppCriteria implements CriteriaInterface
{

    /**
     * @param $model
     * @param RepositoryInterface $repository
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        $status_id = $this->request->query->get('status_id');

        if (is_numeric($status_id)) {
            $model = $model->where('status_id', $status_id);
        }

        return $model;
    }
}
