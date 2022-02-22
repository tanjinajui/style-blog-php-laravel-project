<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Categories;
use App\Posts;
use Image;

class PostController extends Controller
{
   //Authentication use not Register not login er jonno
    public function __construct()
{
    $this->middleware('admin');
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Categories::all();
        $posts=Posts::orderBy('id','desc')->paginate(2);
        return view('Admin.post.index',compact('categories','posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Categories::all();
        return view('Admin.post.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //form validation
        $request->validate([
        'post_title' => 'required|max:255|min:3|unique:posts',
        'categories_id' => 'required',
        'post_description' => 'required|unique:posts',
        'post_picture' => 'required',
    ]);

        $data_show=new Posts;
        if ($request->hasfile('post_picture')) {
           $post_picture=$request->file('post_picture');
           
           $file_name=time().'.'.$post_picture->getClientOriginalExtension();
           //image_resize_compose_code
           $image_resize = Image::make($post_picture->getRealPath());              
           $image_resize->resize(734,355);

           $image_resize->save('images/post_picture/'.$file_name);          
           $data_show->post_picture=$file_name;
          //return $file_name;
        }
        $data_show->post_title=$request->post_title;
        $data_show->categories_id=$request->categories_id;        
        $data_show->post_description=$request->post_description;
       
        $data_show->save();
        return redirect('/posts')->with('success', 'Data inserted successfully');
        // $data_add=$request->all();
        // Students::create($data_add);
        // return back();
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
        //$data_show=Admissions::find($id);
        //database theke data find kora
        $data_show=Posts::where('id',$id)->first();
        $categories=Categories::all();
        return view('Admin.Post.edit',compact('data_show', 'categories'));
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
        $data_show=Posts::find($id);
        if ($request->hasfile('post_picture')) {
           $post_picture=$request->file('post_picture');
           
           $file_name=time().'.'.$post_picture->getClientOriginalExtension();
           //old img file
           $old_file=$data_show->post_picture;
           //image_resize_compose_code
           $image_resize = Image::make($post_picture->getRealPath());              
           $image_resize->resize(734,355);
           // if (!empty($old_file)) {
           //      $path=("images/student_picture/$old_file");
           //      unlink($path);
           // }
           //image upload na thake emty thakle
           if ($old_file!="") {
               $path=("images/post_picture/$old_file");
               unlink($path);
           }
           $image_resize->save('images/post_picture/'.$file_name);          
           $data_show->post_picture=$file_name;
          //return $file_name;
        }
        $data_show->post_title=$request->post_title;
        $data_show->categories_id=$request->categories_id; 
        $data_show->post_description=$request->post_description;
       
        $data_show->save();
        
        return redirect('/posts')->with('success','Posts upndate successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
    {
        $data_show=Posts::find($id);
        $data_show-> delete();
        //old img file
        $old_file=$data_show->post_picture;
        if ($old_file!="") {
               $path=("images/post_picture/$old_file");
               unlink($path);
           }
        //return back dile delete hoye oi page thakbe
        return back()->with('success',"Delete this data");
        // redirect je page debo delete hoye se page a jabe
        return redirect('/posts')->with('success',"Delete this data");
    }
}
