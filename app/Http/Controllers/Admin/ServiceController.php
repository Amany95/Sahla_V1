<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Handyman;
use App\professional;
use App\Companies;
use App\Cover;
use App\Contactus;
//use DB;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.admin_pages.services');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_handymen(Request $request)
    {
        //validate data
          $this->validate($request, [
            'img_home' => 'required|image',
            'img_page' => 'required|image',
            'handyman_header' => 'required|alpha',
            'handyman_paragraph' => 'required',
            ]);
          //store data
          $handyman=new Handyman;
          $img_home=$request->img_home;
          $filename=time().'.'. $img_home->getClientOriginalExtension();

         // $location=public_path('images/'.$filename);
          $location = public_path('/images');
          $img_home->move($location, $filename);
          $handyman->img_home=$filename;

          $img_page=$request->img_page;
          $filename=time().'.'. $img_page->getClientOriginalExtension();
         // $location=public_path('images/',$filename);
          $location = public_path('/images');

          $img_page->move($location, $filename);
          $handyman->img_page=$filename;

          $handyman->header=$request->handyman_header;
          $handyman->paragraph=$request->handyman_paragraph;

          //save data
          $handyman->save();

          return redirect('/admin/services');



        
    }

     public function store_professional(Request $request)
    {
        //validate data
          $this->validate($request, [
            'img_home' => 'required|image',
            'img_page' => 'required|image',
            'professional_header' => 'required',
            'professional_paragraph' => 'required',
            ]);
          //store data
          $professional=new Professional;
          $img_home=$request->img_home;
          $filename=time().'.'. $img_home->getClientOriginalExtension();

         // $location=public_path('images/'.$filename);
          $location = public_path('/images');
          $img_home->move($location, $filename);
          $professional->img_home=$filename;

          $img_page=$request->img_page;
          $filename=time().'.'. $img_page->getClientOriginalExtension();
         // $location=public_path('images/',$filename);
          $location = public_path('/images');

          $img_page->move($location, $filename);
          $professional->img_page=$filename;

          $professional->header=$request->professional_header;
          $professional->paragraph=$request->professional_paragraph;

          //save data
          $professional->save();

          return redirect('/admin/services');



        
    }

   public function store_companies(Request $request)
    {
        //validate data
          $this->validate($request, [
            'img_home' => 'required|image',
            'img_page' => 'required|image',
            'companies_header' => 'required|alpha',
            'companies_paragraph' => 'required',
            ]);
          //store data
          $companies=new Companies;
          $img_home=$request->img_home;
          $filename=time().'.'. $img_home->getClientOriginalExtension();

         // $location=public_path('images/'.$filename);
          $location = public_path('/images');
          $img_home->move($location, $filename);
          $companies->img_home=$filename;

          $img_page=$request->img_page;
          $filename=time().'.'. $img_page->getClientOriginalExtension();
         // $location=public_path('images/',$filename);
          $location = public_path('/images');

          $img_page->move($location, $filename);
          $companies->img_page=$filename;

          $companies->header=$request->companies_header;
          $companies->paragraph=$request->companies_paragraph;

          //save data
          $companies->save();

          return redirect('/admin/services');



        
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
