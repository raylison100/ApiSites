<?php

namespace App\Http\Controllers;

use App\Services\InputService;
use App\Validators\InputsValidator;

/**
 * Class InputsController.
 *
 * @package namespace App\Http\Controllers;
 */
class InputsController extends Controller
{
    /**
     * @var InputService
     */
    protected $service;

    /**
     * @var InputsValidator
     */
    protected $validator;

    /**
     * InputsController constructor.
     *
     * @param InputService $service
     * @param InputsValidator $validator
     */
    public function __construct(InputService $service, InputsValidator $validator)
    {
        $this->service = $service;
        $this->validator  = $validator;
    }
}
