<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class aboutController extends Controller
{
	public function showAboutPage(){
   return view('about');
    }
}
