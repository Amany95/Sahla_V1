<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Feature;
use App\Feature_Img;
class FeaturesController extends Controller
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
        return view('Admin.admin_pages.feature');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_section(Request $request)
    {
        //validate data
          $this->validate($request, [
            'header1' => 'required',
            'paragraph1' => 'required',
            'change1' => 'required|image',

            'header2' => 'required',
            'paragraph2' => 'required',
            'change2' => 'required|image',

            'header3' => 'required',
            'paragraph3' => 'required',
            'change3' => 'required|image',

            'header4' => 'required',
            'paragraph4' => 'required',
            'change4' => 'required|image',

            'header5' => 'required',
            'paragraph5' => 'required',
            'change5' => 'required|image',

            'header6' => 'required',
            'paragraph6' => 'required',
            'change6' => 'required|image',

            'header7' => 'required',
            'paragraph7' => 'required',
            'change7' => 'required|image',

            'header8' => 'required',
            'paragraph8' => 'required',
            'change8' => 'required|image'
            ]);
          //store data
          $feature=new Feature;
        
          $feature->S1_header=$request->header1;
          $feature->S1_paragraph=$request->paragraph1;
          $img1=$request->change1;
          $filename1=time().'.'. $img1->getClientOriginalExtension();

         // $location=public_path('images/'.$filename);
          $location = public_path('/images');
          $img1->move($location, $filename1);
          $feature->S1_icon=$filename1;

          $feature->S2_header=$request->header2;
          $feature->S2_paragraph=$request->paragraph2;
          $img2=$request->change2;
          $filename2=time().'.'. $img2->getClientOriginalExtension();

         // $location=public_path('images/'.$filename);
          $location = public_path('/images');
          $img2->move($location, $filename2);
          $feature->S2_icon=$filename2;

          $feature->S3_header=$request->header3;
          $feature->S3_paragraph=$request->paragraph3;
          $img3=$request->change3;
          $filename3=time().'.'. $img3->getClientOriginalExtension();

         // $location=public_path('images/'.$filename);
          $location = public_path('/images');
          $img3->move($location, $filename3);
          $feature->S3_icon=$filename3;

          $feature->S4_header=$request->header4;
          $feature->S4_paragraph=$request->paragraph4;
          $img4=$request->change4;
          $filename4=time().'.'. $img4->getClientOriginalExtension();

         // $location=public_path('images/'.$filename);
          $location = public_path('/images');
          $img4->move($location, $filename4);
          $feature->S4_icon=$filename4;

          $feature->S5_header=$request->header5;
          $feature->S5_paragraph=$request->paragraph5;
          $img5=$request->change5;
          $filename5=time().'.'. $img5->getClientOriginalExtension();

         // $location=public_path('images/'.$filename);
          $location = public_path('/images');
          $img5->move($location, $filename5);
          $feature->S5_icon=$filename5;

          $feature->S6_header=$request->header6;
          $feature->S6_paragraph=$request->paragraph6;
          $img6=$request->change6;
          $filename6=time().'.'. $img6->getClientOriginalExtension();

         // $location=public_path('images/'.$filename);
          $location = public_path('/images');
          $img6->move($location, $filename6);
          $feature->S6_icon=$filename6;

          $feature->S7_header=$request->header7;
          $feature->S7_paragraph=$request->paragraph7;
          $img7=$request->change7;
          $filename7=time().'.'. $img7->getClientOriginalExtension();

         // $location=public_path('images/'.$filename);
          $location = public_path('/images');
          $img7->move($location, $filename7);
          $feature->S7_icon=$filename7;

          $feature->S8_header=$request->header8;
          $feature->S8_paragraph=$request->paragraph8;
          $img8=$request->change8;
          $filename8=time().'.'. $img8->getClientOriginalExtension();

         // $location=public_path('images/'.$filename);
          $location = public_path('/images');
          $img8->move($location, $filename8);
          $feature->S8_icon=$filename8;

          //save data
          $feature->save();

          return redirect('/admin/feature');
    }

    public function store_img(Request $request)
    {
     //validate data
          $this->validate($request, [
            'img' => 'required|image',
            
            ]);
          //store data
          $feature_img=new Feature_Img;
          $img=$request->img;
          $filename=time().'.'. $img->getClientOriginalExtension();

         // $location=public_path('images/'.$filename);
          $location = public_path('/images');
          $img->move($location, $filename);
          $feature_img->img=$filename;

          $feature_img->save();

          return redirect('/admin/feature');
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
