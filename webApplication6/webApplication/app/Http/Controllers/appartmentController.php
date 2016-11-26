<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Apartment;
use App\Room;
use App\ApartmentDescription;
use App\Owner;
use App\RequestForm;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use App\Report;

class appartmentController extends Controller
{
    //
    public function index(){
      // we need to show all data from "blog" table
      $accomodations = Apartment::all();
      $reporte= Report::all();

      // show data to our view
      return view('CRUD.index',['accomodations' => $accomodations,'reporte'=>$reporte]);
    }

      // edit data function
      public function editItem(Request $req) {
      $accomodation = Apartment::find($req->id);
      $accomodation->gender = $req->gender;
      $accomodation->floor = $req->floor;
      $accomodation->location = $req->location;
      $accomodation->num_of_room = $req->num_of_room;
     
      $accomodation->save();
      return response()->json($accomodation);
    }
      public function addItem(Request $req) {
      $rules = array(
        'gender' => 'required',
        'floor' => 'required',
        'location' => 'required',
        'num_of_room' => 'required',
        'owner_name' => 'required',
         'owner_email' => 'required',
        'owner_phone' => 'required',
        'bank_account' => 'required',
        'bank_name' => 'required',
        'beds_num' => 'required',
        'room_type' => 'required',
        'bathroom_type' => 'required',
        'availability' => 'required',
        'internet' => 'required',
        'supermarket' => 'required',
        'resturant' => 'required',
        
      );
  $validator = Validator::make ( Input::all (), $rules );
      if ($validator->fails())
      return Response::json(array('errors' => $validator->getMessageBag()->toArray()));

      else {
        $accomodation = new Apartment();
        $accomodation->gender = $req->gender;
        $accomodation->floor = $req->floor;
        $accomodation->location = $req->location;
        $accomodation->num_of_room = $req->num_of_room;

        $accomodation->save();
        $owner= new Owner();
        $owner->owner_name=$req->owner_name;
        $owner->owner_email=$req->owner_email;
        $owner->owner_phone=$req->owner_phone;
       $owner->bank_account=$req->bank_account;
        $owner->bank_name=$req->bank_name;
        $owner->save();
          $room= new Room();
        $room->beds_num=$req->beds_num;
        $room->room_type=$req->room_type;
        $room->bathroom_type=$req->bathroom_type;
       $room->availability=$req->availability;
        $room->price=$req->price;
        $room->save();
$description=new ApartmentDescription();
$description->internet=$req->internet;
$description->supermarket=$req->supermarket;
$description->resturant=$req->resturant;
$description->save();

        return response()->json($accomodation);
      }
    }

     public function deleteItem(Request $req) {
      Rental::find($req->id)->delete();
      return response()->json();
    }

     
}
