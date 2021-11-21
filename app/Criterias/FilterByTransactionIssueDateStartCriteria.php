<?php

namespace App\Criterias;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class FilterByTransactionIssueDateStartCriteria
 * @package namespace App\Criteria;
 */
class FilterByTransactionIssueDateStartCriteria extends AppCriteria implements CriteriaInterface
{

    /**
     * @param $model
     * @param RepositoryInterface $repository
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        $issue_date = $this->request->query->get('start_issue_date');

        if ($issue_date) {
            $model = $model->where('issue_date', '>=',$issue_date);
        }

        return $model;
    }
}
