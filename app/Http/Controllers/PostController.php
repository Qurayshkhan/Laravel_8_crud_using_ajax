<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\ajaxpost;

class PostController extends Controller
{
    //
    public function index(){
        return view('welcome');
    }
    public function ajaxRequestPost(Request $request)
    {
        $ajax=new Post();
        $ajax->name=$request->post('name');
        $ajax->email=$request->post('email');
        $ajax->save();
        return ['status'=>'data inserted'];
    }

}
