<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function store() {
error_log(request('email'));
error_log(request('password'));

error_log(request('comment'));


        // $contact = new Contact();

        // $contact->email= request('email');
        // $contact->password = request('password');
        // $contact->comment = request('comment');
       
        // $contact -> save();

        return redirect('/',);
      }
}
