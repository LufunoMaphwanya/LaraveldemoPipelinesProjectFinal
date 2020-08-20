<?php


namespace App\Http\Controllers;


use App\Pipeline;
use Carbon\Carbon;

class PipelinesController extends Controller
{
    public function showall(){
        return view('pipelines', [
            'pipelines' => Pipeline::all()
        ]);
    }

    public function showone(){
        $id =request('id');
        return view('pipeline', [
            'pipeline' => ((new Pipeline)->getOne($id))
        ]);
    }

    public function run(){
        $id =request('id');
        $this->runPipelineSimulate($id);

        return view('pipelinelog', [
            'pipeline' => Pipeline::where('id',$id)->first()
        ]);
    }

    private function runPipelineSimulate($id){
        $pipeline = Pipeline::where('id',$id)->first();
        $pipeline->last_run = Carbon::now()->toDateTimeString();
        $pipeline->save();
        return $pipeline;

    }
}
