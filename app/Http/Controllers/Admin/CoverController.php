<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cover;
use App\Cover_Img;
use App\Cover_Content;

class CoverController extends Controller
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
        return view('Admin.admin_pages.cover-home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeimg(Request $request)
    {
        //validate data
          $this->validate($request, [
            'logo' => 'required|image',
           
            
            ]);
          //store data
          $cover=new Cover;
          $logo=$request->logo;
          $filename=time().'.'. $logo->getClientOriginalExtension();

         // $location=public_path('images/'.$filename);
          $location = public_path('/images');
          $logo->move($location, $filename);
          $cover->logo=$filename;

          $cover->save();
          return redirect('/admin/cover_home');
    }

    public function store_coverimg(Request $request)
    {
        //validate data
          $this->validate($request, [
            'cover' => 'required|image',
           
            
            ]);
          //store data
          $cover_img=new Cover_Img;
          $img=$request->cover;
          $filename=time().'.'. $img->getClientOriginalExtension();

         // $location=public_path('images/'.$filename);
          $location = public_path('/images');
          $img->move($location, $filename);
          $cover_img->img=$filename;

          $cover_img->save();
          return redirect('/admin/cover_home');
    }

    public function store_content(Request $request)
    {
        //validate data
          $this->validate($request, [
            'header_cover'=>'required',
            'paragraph_cover'=>'required',
            'img_cover' => 'required|image',
           
            
            ]);
          //store data
          $cover_content=new Cover_Content;
          $cover_content->header=$request->header_cover;
          $cover_content->paragraph=$request->paragraph_cover;

          $img=$request->img_cover;
          $filename=time().'.'. $img->getClientOriginalExtension();

         // $location=public_path('images/'.$filename);
          $location = public_path('/images');
          $img->move($location, $filename);
          $cover_content->icon=$filename;

          

          $cover_content->save();
          return redirect('/admin/cover_home');
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
