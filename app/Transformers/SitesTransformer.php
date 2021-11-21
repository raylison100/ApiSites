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
            'xpatch'        => $model->xpatch,
            'selector'      => $model->selector,
            'run'           => $model->run,
            'error'         => $model->error,
            'created_at'    => $model->created_at->toDateTimeString(),
            'updated_at'    => $model->updated_at->toDateTimeString(),
        ];
    }
}
