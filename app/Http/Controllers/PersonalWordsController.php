<?php

namespace App\Http\Controllers;

use App\Services\PersonalWordsService;
use App\Validators\PersonalWordsValidator;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Class PersonalWordsController.
 *
 * @package namespace App\Http\Controllers;
 */
class PersonalWordsController extends Controller
{
    /**
     * @var PersonalWordsService
     */
    protected $service;

    /**
     * @var PersonalWordsValidator
     */
    protected $validator;

    /**
     * PersonalWordsController constructor.
     *
     * @param PersonalWordsService $service
     * @param PersonalWordsValidator $validator
     */
    public function __construct(PersonalWordsService $service, PersonalWordsValidator $validator)
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
