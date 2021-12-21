<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Inputs;

/**
 * Class InputsTransformer.
 *
 * @package namespace App\Transformers;
 */
class InputsTransformer extends TransformerAbstract
{
    /**
     * Transform the Inputs entity.
     *
     * @param \App\Entities\Inputs $model
     *
     * @return array
     */
    public function transform(Inputs $model)
    {
        return [
            'id'            => (int) $model->id,
            'name'          => $model->name,
            'site_id'       => $model->site_id,
            'site_name'     => $model->site->name,
            'type_id'       => $model->type_id,
            'type_name'     => $model->type->name,
            'created_at'    => $model->created_at->toDateTimeString(),
            'updated_at'    => $model->updated_at->toDateTimeString(),
        ];
    }
}
