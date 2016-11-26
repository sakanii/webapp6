<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

//Use Request;
use App\Http\Requests;
use App\RoomDescription ;
class searchController extends Controller
{
    
     public function index(){
		 return view('search');
	 
	 }
	 public function book(){
	 	return view('bookingreq');
	 }
public function searchAvailability(Request $request){
	     	$room_types=$request['room_type'];
	     	$campus=$request['campus'];
            $bathroom=$request['bathroom'];
            $rooms=RoomDescription::all();
//$vars =RoomDescription::where('room_type','=',$room_types)->where('campus_type','=',$campus)->where('bathroom','=',$bathroom)->get();
//$count=RoomDescription::where('room_type','=',$room_types)->where('campus_type','=',$campus)->where('bathroom','=',$bathroom)->count();
      return view('search')->with($rooms);

     // return view('search',['count' =>$count,'room'=>$rooms]);
  }

}
