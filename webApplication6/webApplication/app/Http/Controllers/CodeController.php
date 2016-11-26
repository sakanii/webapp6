<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class CodeController extends Controller
{
	public function showcodePage(){
   return view('codes');
    }
}