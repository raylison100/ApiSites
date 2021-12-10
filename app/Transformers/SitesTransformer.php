<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Sites;

/**
 * Class SitesTransformer.
 *
 * @package namespace App\Transformers;
 */
class SitesTransformer extends TransformerAbstract
{
    /**
     * Transform the Sites entity.
     *
     * @param \App\Entities\Sites $model
     *
     * @return array
     */
    public function transform(Sites $model)
    {
        return [
            'id'            => (int) $model->id,
            'name'          => $model->name,
            'link'          => $model->link,
            'xpath'         => $model->xpath,
            'selector'      => $model->selector,
            'run'           => $model->run ? "Sim" : "Não",
            'error'         => $model->error ? "Sim" : "Não",
            'created'       => $model->created_at->toDateTimeString(),
            'updated_at'    => $model->updated_at->toDateTimeString(),
        ];
    }
}
