<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Content;
use App\Model\Handyman;
use App\Professional;
use App\Companies;
use App\Feature;
use App\Feature_Img;
use App\App_Services;
use App\client;
use App\Cover;
use App\Contactus;
use App\Android;
use App\Blog;
use App\ios;
use App\Msg;

class UserController extends Controller
{
  


    public function index()
    {
        $android=Android::orderBy('id', 'desc')
               ->take(1)->get();
         $ios=Ios::orderBy('id', 'desc')
               ->take(1)->get();     
        $cover=Cover::orderBy('id', 'desc')
               ->take(1)->get();
        $contactus=Contactus::orderBy('id', 'desc')
               ->take(1)->get();               
        return view('User.user_pages.download',array('android' => $android,'ios' => $ios,'cover' => $cover,'contactus'=>$contactus));
    }

    public function index_sahla()
    {
        $content=Content::orderBy('id', 'desc')
               ->take(1)->get();
        $handyman=Handyman::orderBy('id', 'desc')
               ->take(1)->get();      
        $companies=Companies::orderBy('id', 'desc')
               ->take(1)->get();
        $professional=Professional::orderBy('id', 'desc')
               ->take(1)->get();               
        $companies=Companies::orderBy('id', 'desc')
               ->take(1)->get();
        $professional=Professional::orderBy('id', 'desc')
               ->take(1)->get();
        $feature_img=Feature_Img::orderBy('id', 'desc')
               ->take(1)->get();
        $feature=Feature::orderBy('id', 'desc')
               ->take(1)->get();    
        $app_services=App_Services::orderBy('id', 'desc')
               ->take(1)->get();
        $client=client::orderBy('updated_at', 'desc')
               ->take(9)->get();  
        $cover=Cover::orderBy('id', 'desc')
               ->take(1)->get();
        $contactus=Contactus::orderBy('id', 'desc')
               ->take(1)->get();
        $contactus1=Contactus::orderBy('id', 'desc')
               ->take(1)->get();           

        return view('User.user_pages.index',array('content' => $content,'handyman' => $handyman,'companies' => $companies,'professional' => $professional,'feature_img' => $feature_img,'feature' => $feature,'app_services' => $app_services,'client' => $client,'cover' => $cover,'contactus'=>$contactus,'contactus1'=>$contactus1));

    }
    public function index_page()
    {
        $blog=Blog::all();
        $blog_count=Blog::orderby('counter','desc')->limit(3)->get();
        $blog_updated=Blog::orderby('updated_at','desc')->limit(3)->get();
        $cover=Cover::orderBy('id', 'desc')
               ->take(1)->get();
        $contactus=Contactus::orderBy('id', 'desc')
               ->take(1)->get();       
        return view('User.user_pages.main-blog',array('blog'=>$blog,'blog_count'=>$blog_count,'blog_updated'=>$blog_updated,'cover'=>$cover,'contactus'=>$contactus));
    


    }


     public function show($id)
    {
         // get the nerd
        $blog = Blog::find($id);
        $count=$blog->counter;
        $result=$count+1;
        $blog->counter=$result;
        $blog->save();
        $cover=Cover::orderBy('id', 'desc')
               ->take(1)->get();
        $contactus=Contactus::orderBy('id', 'desc')
               ->take(1)->get(); 
        $blog_count =Blog::orderby('counter','desc')->limit(9)->get();            
         return view('User.user_pages.blog-general',array('blog'=>$blog,'cover'=>$cover,'contactus'=>$contactus,'blog_count'=>$blog_count));

    }


    public function index_handyman()
    {
       // $handyman = DB::table('handymen')->orderBy('id', 'DESC')->toArray();
      $handyman=Handyman::orderBy('id', 'desc')
               ->take(1)->get();
      $cover=Cover::orderBy('id', 'desc')
               ->take(1)->get();
      $contactus=Contactus::orderBy('id', 'desc')
               ->take(1)->get();                  
        return view('User.user_pages.worker',array('handyman' => $handyman,'cover'=>$cover,'contactus'=>$contactus));

    }

    public function index_companies()
    {
       // $handyman = DB::table('handymen')->orderBy('id', 'DESC')->toArray();
      $companies=Companies::orderBy('id', 'desc')
               ->take(1)->get();
       $cover=Cover::orderBy('id', 'desc')
               ->take(1)->get();

        $contactus=Contactus::orderBy('id', 'desc')
               ->take(1)->get();               
        return view('User.user_pages.co_Owners',array('companies'=>$companies,'cover'=>$cover,'contactus'=>$contactus));

    }

    public function index_professional()
    {
       // $handyman = DB::table('handymen')->orderBy('id', 'DESC')->toArray();
      $professional=Professional::orderBy('id', 'desc')
               ->take(1)->get();
       $cover=Cover::orderBy('id', 'desc')
               ->take(1)->get();

       $contactus=Contactus::orderBy('id', 'desc')
               ->take(1)->get();        
        return view('User.user_pages.employee',array('professional' => $professional,'cover'=>$cover,'contactus'=>$contactus));

    }


    public function store_msg(Request $request)
    {
         $this->validate($request, [
        'name' => 'required',
        'email' => 'required',
        'message' => 'required'
    ]);


        $msg=new Msg;
        $msg->name         =  $request->name;
        $msg->email  =  $request->email;
        $msg->msg  =  $request->message;


        $msg->save();
        return redirect('/user/sahla');
    }
}
