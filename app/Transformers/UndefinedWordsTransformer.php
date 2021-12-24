<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\UndefinedWords;

/**
 * Class UndefinedWordsTransformer.
 *
 * @package namespace App\Transformers;
 */
class UndefinedWordsTransformer extends TransformerAbstract
{
    /**
     * Transform the UndefinedWords entity.
     *
     * @param \App\Entities\UndefinedWords $model
     *
     * @return array
     */
    public function transform(UndefinedWords $model)
    {
        return [
            'id'         => (int) $model->id,
            'name'       => $model->name,
            'created_at' => $model->created_at->toDateTimeString(),
            'updated_at' => $model->updated_at->toDateTimeString()
        ];
    }
}
