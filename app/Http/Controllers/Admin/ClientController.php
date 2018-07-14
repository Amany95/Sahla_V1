<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\client;

class ClientController extends Controller
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
        $client=client::all()->toArray();
        return view('Admin.admin_pages.online-Clients',['client' => $client]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.admin_pages.add-client');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'client_name' => 'required',
        'description' => 'required|max:255',
    ]);


        $client=new client;
        $client->name         =  $request->client_name;
        $client->description  =  $request->description;

        $client->save();
        return redirect('/admin/add_client');

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
        $client=client::find($id);
        
        return view('Admin.admin_pages.edit-client',['client'=>$client]);
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
        $this->validate($request, [
        'edit_name' => 'required',
        'edit_descrip' => 'required',
    ]);


        $client=client::find($id);
        $client->name         =  $request->edit_name;
        $client->description  =  $request->edit_descrip;

        $client->save();
        return redirect('/admin/online_clients');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client=client::find($id);
        $client->delete();
        
        return redirect('/admin/online_clients');

    }
}
