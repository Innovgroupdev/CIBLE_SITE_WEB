<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\setting;
use App\Post;
use App\Role;
use App\User;
use Session;
use Auth;


class PostController extends Controller
{
    public function index()
    {
        //To Get All Posts active OUT SIDE IN HOME VIEW
        $Posts = Post::with('Category')->with('User')->simplePaginate(10);
        //To Get All Posts active OUT SIDE IN HOME VIEW
        $RentPosts = Post::orderBy('created_at', 'desc')->get();
        // To Get Change The Language Arabic or English or French
        if (Session::get('lang') == 'arabic') {
            return view('arabic.Posts.index', compact('Posts', 'RentPosts'));
        }
        // To Get Change The Language Arabic or English or French
        elseif (Session::get('lang') == 'French') {
            return view('French.Posts.index', compact('Posts', 'RentPosts'));
        }
        // To Get Change The Language Arabic or English or French
        else {
            return view('english.Posts.index', compact('Posts', 'RentPosts'));
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

        //To Get All Post 
        $Post = Post::where('slug', '=', $slug)->firstOrFail();
        //To Get All Posts active OUT SIDE IN HOME VIEW
        $RentPosts = Post::orderBy('created_at', 'desc')->get();
        //To Get Comments 
        $Comments = $Post->Comments;
        return view('english.Posts.show', compact('Post', 'Comments', 'RentPosts'));
    }
}
