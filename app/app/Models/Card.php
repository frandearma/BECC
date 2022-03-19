<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Card extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description','price','firstEdition','image','atk','def','stars','subtypes_id','code'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    protected $dates = ['deleted_at'];

    public function subtypes()
    {
        return $this->hasOne(Subtypes::class, 'id', 'subtypes_id');
    }
    public function types()
    {
        return $this->hasOne(Types::class, 'id', 'subtypes.types_id');
    }
}
