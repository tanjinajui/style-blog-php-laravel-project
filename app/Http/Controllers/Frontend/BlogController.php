<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Posts;
class BlogController extends Controller
{
    public function index()
    {
    	$blogs=Posts::orderBy('id','desc')->paginate(2);
    	return view('frontend.blog.index',compact('blogs'));
    }
    public function details($id)
    {
    	$data=Posts::find($id);
        //1post a user joto bar view show
        $data->view=$data->view + 1;
        $data->save();

    	return view('frontend.blog.details',compact('data'));
    }
}
