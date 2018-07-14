<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;
use App\Cover;
use App\Contactus;
class BlogController extends Controller
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
        $blog=Blog::all()->toArray();
        return view('Admin.admin_pages.all-Blog',['blog' => $blog]);

    }
    
 


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.admin_pages.add-Blog');
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
            'name' => 'required',
            'img' => 'required|image',
            'img_client' => 'required|image',
            'question' => 'required',
            'blog' => 'required',
            
            ]);
          //store data
          $blog=new Blog;

          $blog->name=$request->name;

          $img1=$request->img;
          $filename=time().'.'. $img1->getClientOriginalExtension();

         // $location=public_path('images/'.$filename);
          $location = public_path('/images');
          $img1->move($location, $filename);
          $blog->img=$filename;

          $img2=$request->img_client;
          $filename=time().'.'. $img2->getClientOriginalExtension();

         // $location=public_path('images/'.$filename);
          $location = public_path('/images');
          $img2->move($location, $filename);
          $blog->img_client=$filename;

        $blog->question=$request->question;

          $blog->answer=$request->blog;


          //save data
          $blog->save();

          return redirect('/admin/add_blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog=Blog::where('id',$id)->get();
        return view('Admin.admin_pages.edit_blog',['blog_edit'=>$blog_edit]);
        
        
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
        //validate data
          $this->validate($request, [
            'name' => 'required',
          
            'question' => 'required|alpha',
            'blog' => 'required',
            
            ]);

          $blog=Blog::find($id);

          $blog->name=$request->name;

          

        $blog->question=$request->question;

          $blog->answer=$request->blog;


          //save data
          $blog->save();

          return redirect('/admin/all_blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog=Blog::find($id);
        $blog->delete();
        return redirect('/admin/all_blog');
    }
}
