<?php

namespace App\Services;

use App\Criterias\FilterBySiteRunCriteria;
use App\Repositories\SitesRepository;

/**
 * Class SiteService
 * @package App\Services
 */
class SiteService extends AppService
{
    /**
     * @var SitesRepository
     */
    protected $repository;

    /**
     * SiteService constructor.
     * @param SitesRepository $repository
     */
    public function __construct(SitesRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param int $limit
     * @return mixed
     */
    public function all(int $limit = 15)
    {
        return $this->repository
            ->resetCriteria()
            ->pushCriteria(app(FilterBySiteRunCriteria::class))
            ->paginate($limit);
    }
}
