<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Rental;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use App\Report;

class appartmentController extends Controller
{
    //
    public function index(){
      // we need to show all data from "blog" table
      $accomodations = Rental::all();
      $reportes= Report::all();
      // show data to our view
      return view('CRUD.index',['accomodations' => $accomodations,'reportes'=>$reportes]);
    }

      // edit data function
      public function editItem(Request $req) {
      $accomodation = Rental::find($req->id);
      $accomodation->title = $req->title;
      $accomodation->description = $req->description;
      $accomodation->lease = $req->lease;
      $accomodation->rent = $req->rent;
      $accomodation->owner = $req->owner;
      $accomodation->save();
      return response()->json($accomodation);
    }

    // add data into database
    public function addItem(Request $req) {
      $rules = array(
        'title' => 'required',
        'description' => 'required',
        'lease' => 'required',
        'rent' => 'required',
        'owner' => 'required',
      );
      // for Validator
      $validator = Validator::make ( Input::all (), $rules );
      if ($validator->fails())
      return Response::json(array('errors' => $validator->getMessageBag()->toArray()));

      else {
        $accomodation = new Rental();
        $accomodation->title = $req->title;
        $accomodation->description = $req->description;
        $accomodation->lease = $req->lease;
        $accomodation->rent = $req->rent;
        $accomodation->owner = $req->owner;
        $accomodation->save();
        return response()->json($accomodation);
      }
    }
    // delete item
    public function deleteItem(Request $req) {
      Rental::find($req->id)->delete();
      return response()->json();
    }
}
