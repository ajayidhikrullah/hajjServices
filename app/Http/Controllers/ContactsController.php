<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacts;
class ContactsController extends Controller
{
    //


    public function contact()
    {
        return view ('partials.contact.index');   
    }



    public function create()
    {
        // $contact = new Contacts;
        // $phone = 'phone_number';

        $this->validate(request(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',            
            'body' => 'required'
        ]);

        Contacts::create(request(
            [
                'first_name', 'last_name', 'email', 'phone_number', 'body',
            ]
           ));
        // if ($phone !== '8128114951') {
        //     # code...
        //     return 'Wrong Phone Number!!!';
        // } else{
        //     
        // }
        // $contact->save();

    }



}
