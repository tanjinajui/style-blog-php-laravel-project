<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contacts;
class ContactController extends Controller
{
	 //Authentication use not Register not login er jonno
    public function __construct()
{
    $this->middleware('admin');
}
     public function index()
    {
       $contacts=Contacts::orderBy('id','asc')->paginate(2);
       return view('Admin.Contact.index',compact('contacts'));
    }
     // Delete function
    public function destroy($id)
    {
        $data_show=Contacts::find($id);
        $data_show->delete();
        //return back dile delete hoye oi page thakbe
        return back()->with('success',"Delete this data");
        // redirect je page debo delete hoye se page a jabe
        return redirect('/contacts')->with('success',"Delete this data");
    }
}
