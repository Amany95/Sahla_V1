<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
use File;
use Excel;
use DB;
use Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use App\Mail\Myemail;
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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('test');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /* $rules= [
        'file' => 'required',
        ];
        $messages = [
            'max'  => ' the :attribute must be less than or equal to 225 value',
            'required'  => 'the :attribute must be present in the input data and not empty',
            'mimes'     =>'the :attribute must be excel file'
        ];

        $data=$this->validate($request,$rules,$messages);


        if($request->hasFile('file')){
            $extension = File::extension($request->file->getClientOriginalName());
            if ($extension == "xlsx" || $extension == "xls" || $extension == "csv")
             {
 
                $path = $request->file->getRealPath();
                $data = Excel::load($path, function($reader) {
                })->get();
                if(!empty($data) && $data->count())
                {
 
                    foreach ($data as $key => $value) {
                        $insert[] = [
                        'name' => $value->name,
                        'email' => $value->email
                        ];
                        Mail::to($value->email)->send(new Myemail);
                        
                    }
 
                    if(!empty($insert))
                    {
 
                        $insertData = DB::table('tests')->insert($insert);
                        
                    }
                }
 
 
            }
        }


        /*$test=new Test;

         $file=$request->file;
          $filename=time().'.'. $file->getClientOriginalExtension();

         // $location=public_path('images/'.$filename);
          $location = public_path('/files');
          $file->move($location, $filename);
          $test->file=$filename;

        $test->save();*/
        
return 'Email was sent';    }
//|mimes:xlsx,application/csv,application/excel
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
