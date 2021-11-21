<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Inputs.
 *
 * @package namespace App\Entities;
 */
class Inputs extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'site_id',
        'type_id'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public function site(){
        return $this->belongsTo(Sites::class, 'site_id');
    }

    public function type(){
        return $this->belongsTo(InputTypes::class, 'type_id');
    }
}
