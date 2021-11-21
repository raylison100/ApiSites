<?php

namespace App\Services;

use App\Criterias\AppRequestCriteria;
use App\Criterias\FilterByActionCriteria;
use App\Criterias\FilterByMemberIdCriteria;
use App\Criterias\FilterByTransactionIssueDateCriteria;
use App\Criterias\FilterByTransactionIssueDateEndCriteria;
use App\Criterias\FilterByTransactionIssueDateStartCriteria;
use App\Criterias\FilterByTransactionStatusCriteria;
use App\Presenters\TransactionV2Presenter;
use App\Repositories\TransactionRepository;

/**
 * Class TransactionService
 * @package App\Services
 */
class TransactionService extends AppService
{
    /**
     * @var TransactionRepository
     */
    protected $repository;

    /**
     * EbanxPaymentService constructor.
     * @param TransactionRepository $repository
     */
    public function __construct(TransactionRepository $repository)
    {
        $this->repository = $repository;

    }

    /**
     * @param array $data
     * @param bool $skipPresenter
     * @return mixed
     */
    public function create(array $data, $skipPresenter = false)
    {
        if($data['action_id'] == 3) $data['status_id'] = 3;
        return $skipPresenter ? $this->repository->skipPresenter()->create($data) : $this->repository->create($data);
    }

    /**
     * @param int $limit
     * @return mixed
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function all(int $limit = 999)
    {
        return $this->repository
            ->resetCriteria()
            ->pushCriteria(app(FilterByMemberIdCriteria::class))
            ->pushCriteria(app(AppRequestCriteria::class))
            ->paginate($limit);
    }

    /**
     * @param int $limit
     * @return mixed
     */
    public function v2Index($limit = 15)
    {
        return $this->repository
            ->setPresenter(TransactionV2Presenter::class)
            ->resetCriteria()
            ->pushCriteria(app(FilterByTransactionIssueDateStartCriteria::class))
            ->pushCriteria(app(FilterByTransactionIssueDateEndCriteria::class))
            ->pushCriteria(app(FilterByTransactionIssueDateCriteria::class))
            ->pushCriteria(app(FilterByActionCriteria::class))
            ->pushCriteria(app(FilterByTransactionStatusCriteria::class))
            ->pushCriteria(app(FilterByMemberIdCriteria::class))
            ->pushCriteria(app(AppRequestCriteria::class))
            ->paginate($limit);
    }
}
