<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\setting;
use App\Cause;
use App\Role;
use App\User;
use Session;
use Auth;
use App\Post;

class CauseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\ResponseCauses
     */
    public function index()
    {

        $Causes = Cause::orderBy('created_at', 'desc')->simplePaginate(10);
        // To Get Change The Language Arabic or English or French
        // if (Session::get('lang') == 'arabic') {
        //     return view('arabic.Causes.index', compact('Causes'));
        // }
        // // To Get Change The Language Arabic or English or French
        // elseif (Session::get('lang') == 'English') {
        //     return view('english.Causes.index', compact('Causes'));
        // }
        // // To Get Change The Language Arabic or English or French
        // else {
        //     return view('French.Causes.index', compact('Causes'));
        // }
        return view('French.Causes.index', compact('Causes'));
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

        //To Get All Cause
        $Cause = Cause::where('slug', '=', $slug)->firstOrFail();
        //To Get All Posts active OUT SIDE IN HOME VIEW
        $RentPosts = Post::orderBy('created_at', 'desc')->get();
        return view('english.Causes.show', compact('Cause', 'RentPosts'));
    }
}
