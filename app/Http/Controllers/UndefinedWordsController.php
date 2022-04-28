<?php

namespace App\Http\Controllers;

use App\Services\UndefinedWordsService;
use App\Validators\UndefinedWordsValidator;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Class UndefinedWordsController.
 *
 * @package namespace App\Http\Controllers;
 */
class UndefinedWordsController extends Controller
{
    /**
     * @var UndefinedWordsService
     */
    protected $service;

    /**
     * @var UndefinedWordsValidator
     */
    protected $validator;

    /**
     * UndefinedWordsController constructor.
     *
     * @param UndefinedWordsService $service
     * @param UndefinedWordsValidator $validator
     */
    public function __construct(UndefinedWordsService $service, UndefinedWordsValidator $validator)
    {
        $this->service = $service;
        $this->validator = $validator;
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function check(Request $request): JsonResponse
    {
        return response()->json($this->service->check($request->query->get('check', '')));
    }
}
