<?php

namespace App\Http\Controllers;

use App\Services\SensitiveWordsService;
use App\Validators\SensitiveWordsValidator;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Class SensitiveWordsController.
 *
 * @package namespace App\Http\Controllers;
 */
class SensitiveWordsController extends Controller
{
    /**
     * @var SensitiveWordsService
     */
    protected $service;

    /**
     * @var SensitiveWordsValidator
     */
    protected $validator;

    /**
     * SensitiveWordsController constructor.
     *
     * @param SensitiveWordsService $service
     * @param SensitiveWordsValidator $validator
     */
    public function __construct(SensitiveWordsService $service, SensitiveWordsValidator $validator)
    {
        $this->service = $service;
        $this->validator  = $validator;
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
