<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public $rules = [
        'name' => 'bail|required|unique:categories|max:255',
    ];


    /**
     * Fillable fields
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description'
    ];

    public function products()
    {
      return $this->hasMany('App\Product');
    }

}
