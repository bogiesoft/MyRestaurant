<?php

namespace Restaurant\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'image'];


    /**
    * Relation with Items Model
    */
    public function items(){
      return $this->hasMany(\Restaurant\Models\Item::class);
    }
}
