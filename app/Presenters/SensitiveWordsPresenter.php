<?php

namespace App\Presenters;

use App\Transformers\SensitiveWordsTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class SensitiveWordsPresenter.
 *
 * @package namespace App\Presenters;
 */
class SensitiveWordsPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new SensitiveWordsTransformer();
    }
}
