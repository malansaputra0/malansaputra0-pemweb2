<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class ContactController extends Controller
{
    public function index() {

        $data = [
            "title" => "Contact",
            "nav" => [
                "active" => 'Contact', 
            ],
            "assets" => "Contact",
        ];

        return view("web/contact", $data);
    }
    public function process(Request $request)
      {
        $validation -> validate($request, [
            'name' => 'required|min:5|max:50',
            'email' => 'required|email',
            'subject' => 'required|max:50',
            'message' => 'required|'
        ]
                         );
        Contact::create($validation->all());
  
        return redirect()->back()
                         ->with(['success' => 'Your email has been sent!. We will reply shortly.']);
      }
  
}