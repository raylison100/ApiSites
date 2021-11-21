<?php

namespace App\Criterias;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class FilterByTransactionIssueDateCriteria
 * @package namespace App\Criteria;
 */
class FilterByTransactionIssueDateCriteria extends AppCriteria implements CriteriaInterface
{

    /**
     * @param $model
     * @param RepositoryInterface $repository
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        $issue_date = $this->request->query->get('issue_date');
       
        if ($issue_date 
        && !$this->request->query->get('start_issue_date')
        && !$this->request->query->get('end_issue_date'))
        {
            $model = $model->where('issue_date', $issue_date);
        }
        return $model;
    }
}
