<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
     public function add(){
       return view('contact');
    }
    public function contact(Request $request){
        
        $data = new Contact;

        $data->name=$request->input('name');
        $data->email=$request->input('email'); 
        $data->mobile=$request->input('mobile');
        $data->address=$request->input('address');

        $data->save();
        return redirect('contact_record');
    }



    public function index(Request $request) {
        $contacts = Contact::query()
            ->when(!empty($request->get('search')), function ($query) use ($request) {
                $query->where('name','LIKE',"%". $request->get('search') . "%")->orWhere('email','LIKE',"%". $request->get('search') . "%")->orWhere('mobile','LIKE',"%". $request->get('search') . "%");
            })
            ->get();

        return view('contact_record', compact('contacts'));
    }


    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('edit_contact', compact('contact'));
    }

    public function update(Request $request,$id){
        $contact = Contact::find($id);
        $contact->name=$request->input('name');
        $contact->email=$request->input('email'); 
        $contact->mobile=$request->input('mobile');
        $contact->address=$request->input('address');

        $contact->update();
        return redirect('contact_record')->with('status','Data updated successfully');
    }



    public function delete($id)
    {
        $contacts=Contact::find($id);
        $contacts->delete();
        return redirect('contact_record')->with('status','Data deleted successfully');
    }
    
}