<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\InputTypes;

/**
 * Class InputTypesTransformer.
 *
 * @package namespace App\Transformers;
 */
class InputTypesTransformer extends TransformerAbstract
{
    /**
     * Transform the InputTypes entity.
     *
     * @param \App\Entities\InputTypes $model
     *
     * @return array
     */
    public function transform(InputTypes $model)
    {
        return [
            'id'            => (int) $model->id,
            'name'          => $model->name,
            'created_at'    => $model->created_at->toDateTimeString(),
            'updated_at'    => $model->updated_at->toDateTimeString(),
        ];
    }
}
