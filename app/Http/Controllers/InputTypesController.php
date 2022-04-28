<?php

namespace App\Http\Controllers;

use App\Services\InputTypeService;
use App\Validators\InputTypesValidator;

/**
 * Class InputTypesController.
 *
 * @package namespace App\Http\Controllers;
 */
class InputTypesController extends Controller
{
    /**
     * @var InputTypeService
     */
    protected $service;

    /**
     * @var InputTypesValidator
     */
    protected $validator;

    /**
     * InputTypesController constructor.
     *
     * @param InputTypeService $service
     * @param InputTypesValidator $validator
     */
    public function __construct(InputTypeService $service, InputTypesValidator $validator)
    {
        $this->service = $service;
        $this->validator = $validator;
    }
}
