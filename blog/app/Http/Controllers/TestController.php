<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\BlogModel;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=DB::table('blog_models')
        ->select('*')
        ->orderBy('id','ASC')
        ->get();
        return view('home',compact('data'));
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
       // return $request->all();
        //INSERT BY MODEL
        $data=new BlogModel;
        $data->name=$request->get('nam');
        $data->email=$request->get('email');
        $data->save();
        echo "<script>alert('Success')</script>";
        echo "<script>window.open('test','_self')</script>";
        //INSERT BY DB
        /*$name=$request->nam;

        $info=DB::INSERT('insert into blog_models (name) values (?)',[$name]);*/



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        //$data = BlogModel::find($id);
        $data=DB::table('blog_models')
        ->select('*')
        ->where('id','=',$id)->get();

        return view ('edit',compact('data','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data=BlogModel::find($id);
        $data->name=$request->get('nam');
        $data->email=$request->get('email');
        $data->save();
        return redirect('test');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //return $id;
        //$data = DB::table('blog_models')->where('id','=',$id);
        $data= BlogModel ::find($id);
        $data->delete();
        return redirect('test');
    }
}
