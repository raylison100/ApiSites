<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\SensitiveWords;

/**
 * Class SensitiveWordsTransformer.
 *
 * @package namespace App\Transformers;
 */
class SensitiveWordsTransformer extends TransformerAbstract
{
    /**
     * Transform the SensitiveWords entity.
     *
     * @param \App\Entities\SensitiveWords $model
     *
     * @return array
     */
    public function transform(SensitiveWords $model)
    {
        return [
            'id'            => (int) $model->id,
            'name'          => $model->name,
            'created_at'    => $model->created_at->toDateTimeString(),
            'updated_at'    => $model->updated_at->toDateTimeString(),
        ];
    }
}
