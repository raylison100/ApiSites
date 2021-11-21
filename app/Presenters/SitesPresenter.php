<?php

namespace App\Presenters;

use App\Transformers\SitesTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class SitesPresenter.
 *
 * @package namespace App\Presenters;
 */
class SitesPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new SitesTransformer();
    }
}
