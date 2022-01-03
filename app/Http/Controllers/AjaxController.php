<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ajaxpost;
use App\Models\blogs;
use App\Models\Post;
use PDF;

class AjaxController extends Controller
{
    //
    public function ajaxpost(){
        return view('post');
    }
    public function requestpost(Request $request){
        $newpost=new Ajaxpost();
        $newpost->title=$request->post('title');
        $newpost->details=$request->post('details');
        $newpost->save();
        return ['status'=>'Data insert successfully!'];
    }
    public function getreq(){
        return view('blogs');
    }
    public function postreq(Request $request){
        $message=new blogs();
        $message->post=$request->post('post');
        $message->comments=$request->post('comment');
        $message->save();
        return ['status','Add data successfully'];
    }
    public function list(){
        $list=blogs::all();
        return view('bloglist',['list'=>$list]);
        // return response()->json([
        //     'list'=>$list,
        // ]);
        // return view('bloglist',['list'=>$list]);
    }
    public function pdf(){
        $list=blogs::all();
        $pdf=PDF::loadview('bloglist',compact('list'));
        return $pdf->download('bloglist.pdf');
    }
}
