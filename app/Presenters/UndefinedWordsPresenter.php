<?php

namespace App\Presenters;

use App\Transformers\UndefinedWordsTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class UndefinedWordsPresenter.
 *
 * @package namespace App\Presenters;
 */
class UndefinedWordsPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new UndefinedWordsTransformer();
    }
}
