<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    // public function index(){
    //     return view('contact');
    // }
    public function contact(Request $request){
        
        $data = new Contact;

        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->mobile=$request->input('mobile');
        $data->address=$request->input('address');

        $data->save();

        return back();
    //print_r($request->all());
    }

//     function contact_record(){
//        $search_records=Contact::all();
//        return view('contact_record',compact('records'));
//     }

//    public function view(Request $request)
//     {
//         $search=$request['search'] ?? "";
//         if($search!=="")
//         {
//             $data=Contact::where('name','LIKE',"%$search%")->get();
//         }
//         else{
//             $data=Contact::all();
//         }
//         $search_records=compact('data','search');
//         return view('contact_record', compact('search_records'));
//     }

    public function index(Request $request) {
        $contacts = Contact::query()
            ->when(!empty($request->get('search')), function ($query) use ($request) {
                $query->where('name','LIKE',"%". $request->get('search') . "%")->orWhere('email','LIKE',"%". $request->get('search') . "%")->orWhere('mobile','LIKE',"%". $request->get('search') . "%");
            })
            ->get();

        return view('contact_record', compact('contacts'));
    }
}