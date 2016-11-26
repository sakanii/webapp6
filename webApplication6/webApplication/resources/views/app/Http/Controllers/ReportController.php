<?php

namespace App\Http\Controllers;
use Request;
use DB;
use App\Http\Requests;
use App\Report;
use Illuminate\Support\Facades\Redirect;

class ReportController extends Controller
{
    //
     public function index(){
		 return view('reporting');
	 
	 }
	 public function store(Request $Request){
	 	  Report::create(Request::all());
	 	  session()->push('m','Reporting Message Has Been Send');

return redirect('home');

	 }
	 //
    
}
