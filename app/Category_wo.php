<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_wo extends Model
{
    protected $table = 'category_wos';
   protected $fillable =[
       'name',
	];
}
