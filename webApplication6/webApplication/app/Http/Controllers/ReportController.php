<?php

namespace App\Http\Controllers;
use Request;
use DB;
use App\Http\Requests;
use App\Report;
use App\Apartment;
use App\Room;
use App\ApartmentDescription;
use App\Owner;
use App\RequestForm;
use Illuminate\Support\Facades\Redirect;

class ReportController extends Controller
{
    //
     public function index(){
		 return view('reporting');
	 
	 }
	 public function store(Request $Request){
	 $reporte=Report::create(Request::all());
/*$reporte = new Report();
$reporte->email=$Request['email'];
$reporte->name=$Request['name'];
$reporte->telephone=$Request['telephone'];
$reporte->date=$Request['date'];
$reporte->msg=$Request['msg'];
$reporte->save();*/
	 /* 
	 	  $email=$Request['email'];
	 	  $requestform=RequestForm::where('student_email',$email)->get();
	 	  $room_id=$requestform->room_id;
	 	  $var=Room::where('room_id',$room_id)->get();
	 	 $apartmentID= $var->apartment_id;
	 	 $var2=Apartment::where('apartment_id',$apartmentID)->get();
	 	 $owner_id=$var2->owner_id;
	 	 $owner=Owner::where('owner_id',$owner_id)->get();
	 	 $owner_email=$owner->owner_email;*/

	 	  session()->push('m','Reporting Message Has Been Send');
return view('home');
     // return view('CRUD.index',['reportes'=>$reporte,'owner_email'=>$owner_email]);

	 }
	 //
    
}
