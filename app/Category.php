<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'cat_id';
    //protected $keyType = 'string';
    //public $incrementing = false;
    public $timestamps = false;
    //const CREATED_AT = 'creation_date';
    //const UPDATED_AT = 'last_update';

    public $fillable = [
    	'cat_name', 'desc'
    ];

    public function products()
    {
       return $this->hasMany('App\Product','cat_id');
    }

}
