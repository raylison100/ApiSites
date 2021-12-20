<?php

namespace App\Presenters;

use App\Transformers\PersonalWordsTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class PersonalWordsPresenter.
 *
 * @package namespace App\Presenters;
 */
class PersonalWordsPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new PersonalWordsTransformer();
    }
}
