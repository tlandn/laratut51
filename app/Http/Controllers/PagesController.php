<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
   public function about() {
       $people =[];
       $people = [
           'A' , 'B', 'C'
       ];
       return view('pages.about', compact('people'));
   }

    public function contact() {
        $first = 'Fox';
        return view('pages.contact', compact('first'));
    }
}
