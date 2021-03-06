<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Rooms extends Model
{
    public function getCreatedAtAttribute(){
        return Carbon::Parse($this->attributes['created_at'])->translatedFormat('Y/m/d H:i:s, l');
     }
    protected $table = 'rooms';
   protected $fillable =[
       'name',
       'equipment_id',
        'tower_id', 'floor_id'
	];
}
