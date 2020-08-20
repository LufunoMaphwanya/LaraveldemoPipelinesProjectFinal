<?php
//
//namespace App\Http\Controllers;
//
//use App\Pipeline;
//use Illuminate\Http\Request;
//
//class PipelineRunner extends Controller
//{
//    //
//    public function uploadcsvAndRun(Request $req){
////        $req->validate([
////            'file' => 'required|mimes:csv|max:2048'
////        ]);
//
////        $id =request('id');
////        $pipeline = Pipeline::where('id',$id)->first();
////
////        if($req->file()) {
////            $fileName = 'pipeline'.$pipeline.id.'.csv';
////            $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');
////
////            $pipeline->last_run = date();
////            $pipeline->save();
////
//////            return $pipeline;
////        }
//        return $pipeline;
//
//    }
//}
