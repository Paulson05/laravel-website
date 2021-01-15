<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
       
        return view('pages.home',);
      }
      public function about() {
       
        return view('pages.about',);
      }
      public function services() {
       
        return view('pages.services',);
      }
      public function gallery() {
       
        return view('pages.gallery',);
      }
      public function contact() {
       
        return view('pages.contact',);
      }

      public function save() {
        
        
        
                $contact = new Contact();
        
                $contact->email= request('email');
                $contact->password = request('password');
                $contact->comment = request('comment');
               
                $contact -> save();
        
                return redirect('/',);
              }
       
}
