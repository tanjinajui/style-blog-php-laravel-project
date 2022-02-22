<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Abouts;
use Image;
class AboutController extends Controller
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
        $abouts=Abouts::orderBy('id','desc')->paginate(2);
        return view('Admin.About.index',compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $abouts=Abouts::all();
        return view('Admin.About.create',compact('abouts'));
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
        'about_title' => 'required|max:255|min:3',
        'sales_manager_name' => 'required',
        'manager_name' => 'required',
        'about_description' => 'required',
        'team_title' => 'required',
        'about_picture' => 'required',
        'sales_manager_picture' => 'required',
        'manager_picture' => 'required',
    ]);

        $data_show=new Abouts;
        if ($request->hasfile('about_picture')) {
           $about_picture=$request->file('about_picture');
           
           $file_name=time().'.'.$about_picture->getClientOriginalExtension();
           //image_resize_compose_code
           $image_resize = Image::make($about_picture->getRealPath());              
           $image_resize->resize(734,342);

           $image_resize->save('images/about_picture/'.$file_name);          
           $data_show->about_picture=$file_name;
          //return $file_name;
        }
        if ($request->hasfile('sales_manager_picture')) {
           $sales_manager_picture=$request->file('sales_manager_picture');
           
           $file_name=time().'.'.$sales_manager_picture->getClientOriginalExtension();
           //image_resize_compose_code
           $image_resize = Image::make($sales_manager_picture->getRealPath());              
           $image_resize->resize(340,300);

           $image_resize->save('images/sales_manager_picture/'.$file_name);          
           $data_show->sales_manager_picture=$file_name;
          //return $file_name;
        }
        if ($request->hasfile('manager_picture')) {
           $manager_picture=$request->file('manager_picture');
           
           $file_name=time().'.'.$manager_picture->getClientOriginalExtension();
           //image_resize_compose_code
           $image_resize = Image::make($manager_picture->getRealPath());              
           $image_resize->resize(340,300);

           $image_resize->save('images/manager_picture/'.$file_name);          
           $data_show->manager_picture=$file_name;
          //return $file_name;
        }
        $data_show->about_title=$request->about_title;
        $data_show->sales_manager_name=$request->sales_manager_name;        
        $data_show->manager_name=$request->manager_name;        
        $data_show->team_title=$request->team_title;        
        $data_show->about_description=$request->about_description;
       
        $data_show->save();
        return redirect('/abouts')->with('success', 'Data inserted successfully');
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
        $data_show=Abouts::find($id);
        return view('Admin.about.edit',compact('data_show'));
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
        $data_show=Abouts::find($id);
        if ($request->hasfile('about_picture')) {
           $about_picture=$request->file('about_picture');
           
           $file_name=time().'.'.$about_picture->getClientOriginalExtension();
           //old img file
           $old_file=$data_show->about_picture;
           //image_resize_compose_code
           $image_resize = Image::make($about_picture->getRealPath());              
           $image_resize->resize(734,342);
           // if (!empty($old_file)) {
           //      $path=("images/student_picture/$old_file");
           //      unlink($path);
           // }
           //image upload na thake emty thakle
           if ($old_file!="") {
               $path=("images/about_picture/$old_file");
               unlink($path);
           }
           $image_resize->save('images/about_picture/'.$file_name);          
           $data_show->about_picture=$file_name;
          //return $file_name;
        }
        if ($request->hasfile('sales_manager_picture')) {
           $sales_manager_picture=$request->file('sales_manager_picture');
           
           $file_name=time().'.'.$sales_manager_picture->getClientOriginalExtension();
           //old img file
           $old_file=$data_show->sales_manager_picture;
           //image_resize_compose_code
           $image_resize = Image::make($sales_manager_picture->getRealPath());              
           $image_resize->resize(340,300);
           // if (!empty($old_file)) {
           //      $path=("images/student_picture/$old_file");
           //      unlink($path);
           // }
           //image upload na thake emty thakle
           if ($old_file!="") {
               $path=("images/sales_manager_picture/$old_file");
               unlink($path);
           }
           $image_resize->save('images/sales_manager_picture/'.$file_name);          
           $data_show->sales_manager_picture=$file_name;
          //return $file_name;
        }
        if ($request->hasfile('manager_picture')) {
           $manager_picture=$request->file('manager_picture');
           
           $file_name=time().'.'.$manager_picture->getClientOriginalExtension();
           //old img file
           $old_file=$data_show->manager_picture;
           //image_resize_compose_code
           $image_resize = Image::make($manager_picture->getRealPath());              
           $image_resize->resize(340,300);
           // if (!empty($old_file)) {
           //      $path=("images/student_picture/$old_file");
           //      unlink($path);
           // }
           //image upload na thake emty thakle
           if ($old_file!="") {
               $path=("images/manager_picture/$old_file");
               unlink($path);
           }
           $image_resize->save('images/manager_picture/'.$file_name);          
           $data_show->manager_picture=$file_name;
          //return $file_name;
        }
        $data_show->about_title=$request->about_title;
        $data_show->sales_manager_name=$request->sales_manager_name; 
        $data_show->manager_name=$request->manager_name; 
        $data_show->about_description=$request->about_description;
        $data_show->team_title=$request->team_title;
       
        $data_show->save();
        
        return redirect('/abouts')->with('success','Abouts information upndate successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $data_show=Abouts::find($id);
        $data_show-> delete();
        //old img file
        $old_file=$data_show->about_picture;
        if ($old_file!="") {
               $path=("images/about_picture/$old_file");
               unlink($path);
           }
           //old img file
        $old_file=$data_show->sales_manager_picture;
        if ($old_file!="") {
               $path=("images/sales_manager_picture/$old_file");
               unlink($path);
           }
           //old img file
        $old_file=$data_show->manager_picture;
        if ($old_file!="") {
               $path=("images/manager_picture/$old_file");
               unlink($path);
           }
        //return back dile delete hoye oi page thakbe
        return back()->with('success',"Delete this data");
        // redirect je page debo delete hoye se page a jabe
        return redirect('/abouts')->with('success',"Delete this data");
    }
}
