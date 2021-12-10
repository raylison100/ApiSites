<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Sites.
 *
 * @package namespace App\Entities;
 */
class Sites extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'link',
        'xpath',
        'selector',
        'run',
        'error',
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public function inputs(){
        return $this->hasMany(Inputs::class);
    }
}
