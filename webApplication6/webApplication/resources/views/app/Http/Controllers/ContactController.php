<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class ContactController extends Controller
{
	public function showContactPage(){
   return view('contact');
    }
}