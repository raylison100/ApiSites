<?php

namespace App\Services;

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
}
