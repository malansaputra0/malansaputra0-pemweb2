<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{
    public function index() {

        $data = [
            "title" => "Portfolio",
            "nav" => [
                "active" => 'Portfolio', 
            ],
            "assets" => "Portfolio",
        ];

        return view("web/portfolio", $data);
    }
}