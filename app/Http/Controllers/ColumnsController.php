<?php

namespace App\Http\Controllers;

use App\Column;
use Illuminate\Http\Request;

class ColumnsController extends Controller
{
    public function showall(){
        return view('columns', [
            'columns' => Column::all()
        ]);
    }

    public function showone(){
        $id =request('id');
        return view('column', [
            'column' => ((new Column())->getOne($id))
        ]);
    }
}
