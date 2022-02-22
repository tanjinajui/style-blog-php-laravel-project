<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Categories;

class CategoryController extends Controller
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
        $categories=Categories::orderBy('id','asc')->paginate(2);
       return view('Admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.category.create');
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
        'category' => 'required|unique:categories|max:255',
        'category_code' => 'nullable',
    ]);
        $data_add=$request->all();
        Categories::create($data_add);
        return back()->with('success', 'Data inserted successfully');
        //return $add->all();
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
         $data_show=Categories::find($id);
        return view('Admin.category.edit',compact('data_show'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $update, $id)
    {
         $data=Categories::find($id);
        $update_data=$update->all();
        $data->update($update_data);
        return redirect('/categories')->with('success','Category update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $data_show=Categories::find($id);
        $data_show->delete();
        //return back dile delete hoye oi page thakbe
        // return back()->with('success',"Delete this data");
        // redirect je page debo delete hoye se page a jabe
        return redirect('/categories')->with('success',"Delete this data");
    }
}
