<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\setting;
use App\Cause;
use App\Event;
use App\Gallery;
use App\Post;
use App\Role;
use App\User;
use Session;
use Auth;

class HomeController extends Controller
{


   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
   public function index()
   {
      //To Get All Cause active OUT SIDE IN HOME VIEW
      $Causes = Cause::orderBy('created_at', 'desc')->paginate(6);
      //To Get All Event active OUT SIDE IN HOME VIEW
      $Events = Event::orderBy('created_at', 'desc')->paginate(4);
      //To Get All Posts active OUT SIDE IN HOME VIEW
      $Posts = Post::orderBy('created_at', 'desc')->paginate(2);
      //To Get All Gallery active OUT SIDE IN HOME VIEW
      $Gallers = Gallery::orderBy('created_at', 'desc')->paginate(20);
      // To Get Change The Language Arabic or English or French
      if (Session::get('lang') == 'arabic') {
         return view('arabic.home', compact('Causes', 'Events', 'Posts', 'Gallers'));
      }
      // To Get Change The Language Arabic or English or French
      elseif (Session::get('lang') == 'French') {
         return view('French.home', compact('Causes', 'Events', 'Posts', 'Gallers'));
      }
      // To Get Change The Language Arabic or English or French
      else {
         return view('english.home', compact('Causes', 'Events', 'Posts', 'Gallers'));
      }
   }
   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
   public function about()
   {
      //To Get All Cause active OUT SIDE IN HOME VIEW
      $Causes = Cause::orderBy('created_at', 'desc')->paginate(6);
      //To Get All Event active OUT SIDE IN HOME VIEW
      $Events = Event::orderBy('created_at', 'desc')->paginate(4);
      //To Get All Posts active OUT SIDE IN HOME VIEW
      $Posts = Post::orderBy('created_at', 'desc')->paginate(2);
      //To Get All Gallery active OUT SIDE IN HOME VIEW
      $Gallers = Gallery::orderBy('created_at', 'desc')->paginate(20);
      // To Get Change The Language Arabic or English or French
      if (Session::get('lang') == 'arabic') {
         return view('arabic.about', compact('Causes', 'Events', 'Posts', 'Gallers'));
      }
      // To Get Change The Language Arabic or English or French
      elseif (Session::get('lang') == 'French') {
         return view('French.about', compact('Causes', 'Events', 'Posts', 'Gallers'));
      }
      // To Get Change The Language Arabic or English or French
      else {
         return view('english.about', compact('Causes', 'Events', 'Posts', 'Gallers'));
      }
   }
   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
   public function Contact()
   {
      //To Get All Cause active OUT SIDE IN HOME VIEW
      $Causes = Cause::orderBy('created_at', 'desc')->paginate(6);
      //To Get All Event active OUT SIDE IN HOME VIEW
      $Events = Event::orderBy('created_at', 'desc')->paginate(4);
      //To Get All Posts active OUT SIDE IN HOME VIEW
      $Posts = Post::orderBy('created_at', 'desc')->paginate(2);
      //To Get All Gallery active OUT SIDE IN HOME VIEW
      $Gallers = Gallery::orderBy('created_at', 'desc')->paginate(20);
      // To Get Change The Language Arabic or English or French
    //   if (Session::get('lang') == 'arabic') {
    //      return view('arabic.Contact', compact('Causes', 'Events', 'Posts', 'Gallers'));
    //   }
    //   // To Get Change The Language Arabic or English or French
    //   elseif (Session::get('lang') == 'French') {
    //      return view('French.Contact', compact('Causes', 'Events', 'Posts', 'Gallers'));
    //   }
    //   // To Get Change The Language Arabic or English or French
    //   else {
    //      return view('english.Contact', compact('Causes', 'Events', 'Posts', 'Gallers'));
    //   }
        return view('French.Contact', compact('Causes', 'Events', 'Posts', 'Gallers'));
   }
}
