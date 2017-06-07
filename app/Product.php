<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $rules = [
      'name' => 'bail|required|unique:products|max:255',
      'cost' => 'required',
      'price' => 'required',
      'category_id' => 'required'
    ];

    /**
     * Fillable fields
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'qauntity',
        'cost',
        'price',
        'category_id'
    ];

    public function category()
    {
      return $this->belongsTo('App\Category');
    }
}
