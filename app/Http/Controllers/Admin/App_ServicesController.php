<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\App_Services;

class App_ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
            public function __construct()
{
    $this->middleware('auth');
} 
 
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.admin_pages.app-services');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate data
          $this->validate($request, [
            'header' => 'required',
            'header1' => 'required|alpha',
            'paragraph1' => 'required',
            'header2' => 'required|alpha',
            'paragraph2' => 'required',
            'header3' => 'required|alpha',
            'paragraph3' => 'required',
            'header4' => 'required|alpha',
            'paragraph4' => 'required',


            ]);
          //store data
          $app_services=new App_Services;
          $app_services->header=$request->header;
         
          $app_services->P1_header=$request->header1;
          $app_services->P1_paragraph=$request->paragraph1;

          $app_services->P2_header=$request->header2;
          $app_services->P2_paragraph=$request->paragraph2;

          $app_services->P3_header=$request->header3;
          $app_services->P3_paragraph=$request->paragraph3;

          $app_services->P4_header=$request->header4;
          $app_services->P4_paragraph=$request->paragraph4;




          //save data
          $app_services->save();

          return redirect('/admin/app_services');

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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
