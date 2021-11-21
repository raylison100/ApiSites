<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $service;

    /** @var  ValidatorInterface $validator */
    protected $validator;

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        return response()->json($this->service->all($request->query->get('limit', 15)));
    }

    /**
     * Display the specified resource.
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        return response()->json($this->service->find($id));
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @throws ValidatorException
     */
    public function store(Request $request): JsonResponse
    {
        if ($this->validator) {
            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);
        }
        try{
            $response = $this->service->create($request->all());
            return response()->json($response);
        }catch (Exception $e){
            return $this->returnError($e->getMessage(), $e->getCode());
        }
    }

    /**
     * @param Request $request
     * @param int $id
     * @return JsonResponse
     * @throws ValidatorException
     */
    public function update(Request $request, int $id): JsonResponse
    {
        if ($this->validator) {
            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);
        }
        try{
            $response = response()->json($this->service->update($request->all(), $id));
            return response()->json($response);
        }catch (Exception $e){
            return $this->returnError($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Restore the specified resource from storage.
     * @param int $id
     * @return array
     */
    public function restore(int $id): array
    {
        return $this->service->restore($id);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        return response()->json($this->service->delete($id), 200);
    }

    /**
     * @param array $data
     * @return JsonResponse
     */
    public function findWhere(array $data): JsonResponse
    {
        return response()->json($this->service->findWhere($data), 200);
    }

    /**
     * @param $message
     * @param $error
     * @return JsonResponse
     */
    protected function returnError($message, $error): JsonResponse
    {
        return response()->json([
            "error"       => true,
            'message' => $message,
        ], $error);
    }
  }
