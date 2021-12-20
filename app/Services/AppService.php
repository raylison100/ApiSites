<?php

namespace App\Services;

use App\AppHelper;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

/**
 * Class AppService
 * @package App\Services
 */
class AppService
{
    /**
     * @var
     */
    protected $repository;

    /**
     * @param int $limit
     * @return mixed
     */
    public function all(int $limit = 15)
    {
       return $this->repository->paginate($limit);
    }

    /**
     * @param array $data
     * @param bool $skipPresenter
     * @return mixed
     * @throws Exception
     */
    public function create(array $data, bool $skipPresenter = false)
    {
        try {
            DB::beginTransaction();
            $entity = $skipPresenter ? $this->repository->skipPresenter()->create($data)
                : $this->repository->create($data);
            DB::commit();
            return $entity;
        }catch (Exception $e){
            DB::rollBack();
            Log::error($e->getMessage());
            throw new Exception("failed to create", 400);
        }
    }

    /**
     * @param $id
     * @param false $skip_presenter
     * @return mixed
     */
    public function find($id, bool $skipPresenter = false)
    {
        return $skipPresenter ? $this->repository->skipPresenter()->find($id) : $this->repository->find($id);
    }

    /**
     * @param array $data
     * @param $id
     * @param bool $skipPresenter
     * @return array|mixed
     */
    public function update(array $data, $id, bool $skipPresenter = false)
    {
        try {
            DB::beginTransaction();
            $entity = $skipPresenter ? $this->repository->skipPresenter()->update($data, $id)
                : $this->repository->update($data, $id);
            DB::commit();
            return $entity;
        }catch (Exception $e){
            DB::rollBack();
            Log::error($e->getMessage());
            throw new Exception("failed to update", 400);
        }
    }

    /**
     * @param array $data
     * @param bool $first
     * @param bool $skipPresenter
     * @return mixed
     */
    public function findWhere(array $data, bool $first = false, bool $skipPresenter = false)
    {
        $repository = $skipPresenter ? $this->repository->skipPresenter()->findWhere($data)
                : $this->repository->findWhere($data);

        return $first ? $repository->first() : $repository;
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function findLast(array $data, bool $skipPresenter = false)
    {
        return $skipPresenter ? $this->repository->skipPresenter()->findWhere($data)->last()
            : $this->repository->findWhere($data)->last();
    }

    /**
     * Remove the specified resource from storage using softDelete.
     *
     * @param $id
     * @return array
     */
    public function delete($id)
    {
        return ['success' => (boolean)$this->repository->delete($id)];
    }


    /**
     * @param $value
     * @return string
     */
    public function removeSpaces($value)
    {
        return AppHelper::removeSpaces($value);
    }

    /**
     * @param $value
     * @return mixed
     */
    public function removeSpecialCharacters($value)
    {
        return AppHelper::removeSpecialCharacters($value);
    }

    /**
     * @param $value
     * @return mixed
     */
    public function removeAccentuation($value)
    {
        return AppHelper::removeAccentuation($value);
    }

    /**
     * @param $value
     * @return mixed
     */
    public function removeAccentuationAndSpecialCharacters($value)
    {
        return AppHelper::removeAccentuationAndSpecialCharacters($value);
    }

    /**
     * @param $date
     * @return false|string
     */
    public function formatDateDB($date)
    {
        return AppHelper::formatDateDB($date);
    }
}
