<?php

namespace App\Presenters;

use App\Transformers\InputTypesTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class InputTypesPresenter.
 *
 * @package namespace App\Presenters;
 */
class InputTypesPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new InputTypesTransformer();
    }
}
