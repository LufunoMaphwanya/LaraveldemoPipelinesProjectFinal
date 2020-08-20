<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Stage extends Model
{
    public function getOne($id){
        return Stage::where('id',$id)->first();
    }
    public function pipeline() {
        return $this->belongsTo('App/Pipeline');
    }
}
