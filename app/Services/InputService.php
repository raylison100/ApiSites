<?php

namespace App\Services;

use App\Criterias\AppRequestCriteria;
use App\Criterias\FilterBySiteCriteria;
use App\Criterias\FilterByTypeCriteria;
use App\Entities\Enum\InputTypeEnum;
use App\Entities\Inputs;
use App\Repositories\InputsRepository;
use App\Repositories\InputTypesRepository;
use App\Repositories\PersonalWordsRepository;
use App\Repositories\SensitiveWordsRepository;
use App\Repositories\SitesRepository;
use App\Repositories\UndefinedWordsRepository;


/**
 * Class InputService
 * @package App\Services
 */
class InputService extends AppService
{
    protected $repository;
    protected $inputTypeRepository;
    protected $sitesRepository;
    protected $personalWordsRepository;
    protected $sensitiveWordsRepository;
    protected $undefinedWordsRepository;


    /**
     * InputService constructor.
     * @param InputsRepository $repository
     * @param InputTypesRepository $inputTypeRepository
     * @param SitesRepository $sitesRepository
     * @param PersonalWordsRepository $personalWordsRepository
     * @param SensitiveWordsRepository $sensitiveWordsRepository
     * @param UndefinedWordsRepository $undefinedWordsRepository
     */
    public function __construct(InputsRepository         $repository,
                                InputTypesRepository     $inputTypeRepository,
                                SitesRepository          $sitesRepository,
                                PersonalWordsRepository  $personalWordsRepository,
                                SensitiveWordsRepository $sensitiveWordsRepository,
                                UndefinedWordsRepository $undefinedWordsRepository
    )
    {
        $this->repository = $repository;
        $this->inputTypeRepository = $inputTypeRepository;
        $this->sitesRepository = $sitesRepository;
        $this->personalWordsRepository = $personalWordsRepository;
        $this->sensitiveWordsRepository = $sensitiveWordsRepository;
        $this->undefinedWordsRepository = $undefinedWordsRepository;
    }


    public function selectInputs()
    {
        return $this->repository
            ->resetCriteria()
            ->pushCriteria(app(FilterBySiteCriteria::class))
            ->pushCriteria(app(FilterByTypeCriteria::class))
            ->pushCriteria(app(AppRequestCriteria::class));
    }

    public function allSitesInformation()
    {
        $categories = [
            [
                'id' => InputTypeEnum::DADOS_PESSOAS,
                'name' => 'Dados Pessoais'
            ],
            [
                'id' => InputTypeEnum::DADOS_SENSIVEIS,
                'name' => 'Dados Senssiveis'
            ],
            [
                'id' => InputTypeEnum::INDEFINIDOS,
                'name' => 'Indefinidos'
            ]
        ];

        $labels = $this->sitesRepository->skipPresenter()->findWhere([
            'run' => 1,
            'error' => 0,
        ], ['id', 'name']);


        $allData = [[], [], []];

        foreach ($labels as $l) {
            array_push($allData[0],
                $this->repository->skipPresenter()
                    ->findWhere(['site_id' => $l->id, 'type_id' => InputTypeEnum::DADOS_PESSOAS])->count());

            array_push($allData[1],
                $this->repository->skipPresenter()
                    ->findWhere(['site_id' => $l->id, 'type_id' => InputTypeEnum::DADOS_SENSIVEIS])->count());

            array_push($allData[2],
                $this->repository->skipPresenter()
                    ->findWhere(['site_id' => $l->id, 'type_id' => InputTypeEnum::INDEFINIDOS])->count());
        }

        return [
            'categories' => $categories,
            'labels' => $labels,
            'allData' => $allData
        ];
    }

    public function personalInformation()
    {
        $labels = $this->personalWordsRepository->skipPresenter()->all('name');
        return $this->generateDataWordInformation($labels);
    }

    public function sensitiveInformation()
    {
        $labels = $this->sensitiveWordsRepository->skipPresenter()->all('name');
        return $this->generateDataWordInformation($labels);
    }

    private function generateDataWordInformation($labels)
    {
        $data = [];

        foreach ($labels as $l) {
            array_push($data, Inputs::query()->where('name', $l->name)->count());
        }

        return [
            'labels' => $labels,
            'data' => $data
        ];
    }

}
