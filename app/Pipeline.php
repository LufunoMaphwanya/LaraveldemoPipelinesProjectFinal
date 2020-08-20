<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pipeline extends Model
{
    //
    public function getOne($id){
        $data = Pipeline::where('id',$id)->first();
        return $data;
    }
    public function stages()
    {
        return $this->hasMany('App\Stage');
    }
}
