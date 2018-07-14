<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use App\Mail\Myemail;


class EmailController extends Controller
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
   public function mail()
    {
        //$name = 'Krunal';
        Mail::to('amany.adel1996@gmail.com')->send(new Myemail);
        return 'Email was sent';
    }

   /* public function send(Request $request)
    {

        $rules= [
        'mail' => 'required',
        'title' => 'required',
        'message' => 'required'
        ];
        $messages = [
            'max'  => ' the :attribute must be less than or equal to 225 value',
            'required'  => 'the :attribute must be present in the input data and not empty',
            'mimes'     =>'the :attribute must be excel file'
        ];

        $data=$this->validate($request,$rules,$messages);
        //$message=$request->message;
        /*$email=new Mail();

        $email->email=$request->*/

       /* $title = $request->input('title');
        $content = $request->input('content');

        Mail::send('emails.send', ['title' => $title, 'content' => $content], function ($message)
        {

            $message->from('amany.adel1996@gmail.com', 'Christian Nwamba');

            $message->to('amany.adel1996@yahoo.com');

        });

        return response()->json(['message' => 'Request completed']);*/

      /*  $data = ['message' => $request->message,'title'=> $request->title];

        Mail::to($request->email)->send(new Myemail($message));
    
     }*/   
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
