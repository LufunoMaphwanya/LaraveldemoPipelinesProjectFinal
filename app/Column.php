<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Column extends Model
{
    public function getOne($id){
        $data = Column::where('id',$id)->first();
        return $data;
    }

    public function pipelines(){
        return $this->belongsToMany('App\Pipeline');
    }
}
