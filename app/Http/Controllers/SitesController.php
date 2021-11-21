<?php

namespace App\Http\Controllers;

use App\Services\SiteService;
use App\Validators\SitesValidator;

/**
 * Class SitesController.
 *
 * @package namespace App\Http\Controllers;
 */
class SitesController extends Controller
{
    /**
     * @var SiteService
     */
    protected $service;

    /**
     * @var SitesValidator
     */
    protected $validator;

    /**
     * SitesController constructor.
     *
     * @param SiteService $service
     * @param SitesValidator $validator
     */
    public function __construct(SiteService $service, SitesValidator $validator)
    {
        $this->service = $service;
        $this->validator  = $validator;
    }
}
