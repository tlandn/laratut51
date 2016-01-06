<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
  public __construct() {
    parent::__construct();
  }

   public function about() {
       $people =[];
       $people = [
           'A' , 'B', 'C'
       ];

       return View::make('pages.about', compact('people');
       return view('pages.about', compact('people'));
   }

    public function contact() {
        $first = 'Fox';
        return view('pages.contact', compact('first'));
    }
}
