<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\PersonalWords;

/**
 * Class PersonalWordsTransformer.
 *
 * @package namespace App\Transformers;
 */
class PersonalWordsTransformer extends TransformerAbstract
{
    /**
     * Transform the PersonalWords entity.
     *
     * @param \App\Entities\PersonalWords $model
     *
     * @return array
     */
    public function transform(PersonalWords $model)
    {
        return [
            'id'            => (int) $model->id,
            'name'          => $model->name,
            'created_at'    => $model->created_at->toDateTimeString(),
            'updated_at'    => $model->updated_at->toDateTimeString(),
        ];
    }
}
