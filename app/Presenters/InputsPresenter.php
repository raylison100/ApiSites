<?php

namespace App\Presenters;

use App\Transformers\InputsTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class InputsPresenter.
 *
 * @package namespace App\Presenters;
 */
class InputsPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new InputsTransformer();
    }
}
