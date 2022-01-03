<?php

namespace App\Http\Controllers;

use App\Models\Ajaxcrud;
use Illuminate\Http\Request;

class AjaxcrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Ajaxcrud::all();
        return view('crudAjax',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $insertdata=new Ajaxcrud();
        $insertdata->name=$request->post('name');
        $insertdata->email=$request->post('email');
        $insertdata->post=$request->post('post');
        $insertdata->comment=$request->post('comment');
        $insertdata->save();
        return ["result"=>"data insert successfully"];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ajaxcrud  $ajaxcrud
     * @return \Illuminate\Http\Response
     */
    public function show(Ajaxcrud $ajaxcrud)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ajaxcrud  $ajaxcrud
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ajaxcrud  $ajaxcrud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $insertdata=Ajaxcrud::find($id);
        $insertdata->name=$request->post('name');
        $insertdata->email=$request->post('email');
        $insertdata->post=$request->post('post');
        $insertdata->comment=$request->post('comment');
        $insertdata->save();
        return ["result"=>"data update successfully"];

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ajaxcrud  $ajaxcrud
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $delete=Ajaxcrud::find($id);
        $delete->delete();
        return ['result'=>'delete data successfully'];
    }
}
