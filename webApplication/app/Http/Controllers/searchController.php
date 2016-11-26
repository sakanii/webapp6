<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\RequestForm;
use App\Room;
use App\Owner;
use App\Apartment;
use App\Http\Requests;
use App\ApatrmentDescription ;
class searchController extends Controller
{
    
    public function index(){

     return view('search');

  }
   /*when user enter his selections and press Search button 
    /*get data has to be comapre from apartment table
/*and return matching found to responseof search page
    */
public function searchAvailability(Request $request){
 $location=$request->location;
   $gender=$request->gender;
  $floor=$request->floor;
 $room_type=$request->room_type;
   $bathroom_type=$request->bathroom_type;
   $apartment=Apartment::where('floor','=',$floor)
  ->where('location','=',$location)
  ->where('gender','=',$gender)->get();
  $room=Room::where('room_type','=',$room_type)
 ->where('bathroom_type','=',$bathroom_type)
 ->where('beds_num','!=','availability')->get();
 
  $count=Room::where('room_type','=',$room_type)
 ->where('bathroom_type','=',$bathroom_type)
 ->where('beds_num','!=','availability')->count();

/*  $gender=$request->gender;
  $floor=$request->floor;
 */

/*
$countacount=Apartment::where('location','=',$location)
 ->where('gender','=',$gender)
 ->where('floor','=',$floor)->count();
*/
/* if($countacount==0){
  $apartment=Apartment::where('gender','=',$gender)
  ->where('location','=',$location)->get();
  
  

  if($count==0){
  $room=Room::where('room_type','=',$room_type)
  ->where('beds_num','!=','availability')->get();

 }*/
/* elseif ($count!=0) {
   # code...

 $room=Room::where('room_type','=',$room_type)
 ->where('bathroom_type','=',$bathroom_type)
 ->where('beds_num','!=','availability')->get();
  }
 }
 elseif($countacount!=0){
 $apartment=Apartment::where('location','=',$location)
 ->where('gender','=',$gender)
 ->where('floor','=',$floor)->get();
 $count=Room::where('room_type','=',$room_type)
 ->where('bathroom_type','=',$bathroom_type)
 ->where('beds_num','!=','availability')->count();
 if($count==0){
  $room=Room::all();
 }
 elseif ($count!=0) {
   # code...

 $room=Room::where('room_type','=',$room_type)
 ->where('bathroom_type','=',$bathroom_type)
 ->where('beds_num','!=','availability')->get();

  }
 }*/
  $roomdescription=ApatrmentDescription::all();
 
 return view('responseofsearch',['apartment'=>$apartment ,'room'=>$room,'count'=>$count,'roomdescription'=>$roomdescription]);


  # code...




  }
   /*function from bookingreq page has to take enter info and save it in requestform table and we reach this bage after pressing book this button in the responseofsearch page*/
public function book(Request $request){
//id of pressed button

$room=Room::where('room_id','=',$id)->get();
//$apartment_id=$room->apartment_id;
$id=$room->apartment_id;
$apartment=Apartment::where('apartment_id','=',$id);

$owner=Owner::all();

$apartmentdescription=ApatrmentDescription::all();
//has to get room picture from room_id from room_picture table
     
    return view('bookingreq',['apartment'=>$apartment,'room'=>$room,'owner'=>$owner,'apartmentdescription'=>$apartmentdescription]);

   }
  
 public function sendrequest (Request $request){
    $req = new RequestForm();
        $req->firt_name = $request->first_name;
        $req->last_name = $request->last_name;
        $req->student_email = $request->student_email;
        $req->student_phone = $request->student_phone;
        $req->city = $request->city;
        $req->type_of_pay = $request->type_of_pay;
//how to get room_id also to store it
        $req->save();
  //has to return to reservation form with all info and if type of pay by account it has to show account info also  and has to redirect to reservation page with req id and room id to represent all booking and student info*/
 return view('reservation');
}
 public function reservation(){
     return view('reservation');
   
   }

}
