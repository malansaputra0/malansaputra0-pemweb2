<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;

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
    public function process(Request $request): RedirectResponse
      {
        $request -> validate([
            'name' => 'required|string|min:5|max:50',
            'email' => 'required|email',
            'subject' => 'required|max:50',
            'message' => 'required|max:255'
        ]
                         );
        
        return redirect()->back()->with('success', 'Email sent successfully');
                         
      }
  
}