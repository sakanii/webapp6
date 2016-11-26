@extends('app')
  @section('content')
<div class="header" >
<div class="header-top">
<div class="row">
   <div class="col-sm-12 form-group">
<h1 id="h1-bootstrap-heading">Admin Panel<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h1><hr/>

<div class="container">
<div class="head-top">
    </div>
         </div>
               </div>
                     </div>
  <form  action="editItem" method="post">
  {!! csrf_field() !!}  
 <div class="row">
    <div class="col-md-12">
    <h2 id="h2-bootstrap-heading">Apartment Detials<a class="anchorjs-link" href="#h2.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h2><hr/>

    </div>
  </div>
  <div class="form-group row add">
    <div class="col-md-5">
      <input type="text" class="form-control" id="gender" name="gender"
      placeholder="Enter The Gender Here" required>
      <p class="error text-center alert alert-danger hidden"></p>
    </div>
    <div class="col-md-5">
      <input type="text" class="form-control" id="floor" name="floor"
      placeholder="Floor Number " required>
      <p class="error text-center alert alert-danger hidden"></p>
    </div>
     <div class="col-md-5">
      <input type="text" class="form-control" id="location" name="location"
      placeholder="Apartment Location  Here" required>
      <p class="error text-center alert alert-danger hidden"></p>
    </div>
     <div class="col-md-5">
      <input type="text" class="form-control" id="num_of_room" name="num_of_room"
      placeholder="Number Of Room Here" required>
      <p class="error text-center alert alert-danger hidden"></p>
    </div>
    
     <div class="row">
    <div class="col-md-12">
     <h2 id="h2-bootstrap-heading">Owner Detials<a class="anchorjs-link" href="#h2.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h2><hr/>

   
    </div>
  </div>
    
      <div class="col-md-5">
      <input type="text" class="form-control" id="owner_name" name="owner_name"
      placeholder=" owner Name Here" required>
      <p class="error text-center alert alert-danger hidden"></p>
    </div>
      <div class="col-md-5">
      <input type="text" class="form-control" id="owner_email" name="owner_email"
      placeholder=" owner Email Here" required>
      <p class="error text-center alert alert-danger hidden"></p>
    </div>
        <div class="col-md-5">
      <input type="text" class="form-control" id="owner_phone" name="owner_phone"
      placeholder=" owner Phone Number Here" required>
      <p class="error text-center alert alert-danger hidden"></p>
    </div>
       <div class="col-md-5">
      <input type="text" class="form-control" id="bank_account" name="bank_account"
      placeholder=" owner Bank Account Number Here" required>
      <p class="error text-center alert alert-danger hidden"></p>
    </div>
      <div class="col-md-5">
      <input type="text" class="form-control" id="bank_name" name="bank_name"
      placeholder=" owner Bank Name Here" required>
      <p class="error text-center alert alert-danger hidden"></p>
    </div>
     <div class="row">
    <div class="col-md-12">
    <h2 id="h2-bootstrap-heading">Room Detials<a class="anchorjs-link" href="#h2.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h1><hr/>

    </div>
  </div>
    <div class="col-md-5">
      <input type="text" class="form-control" id="beds_num" name="beds_num"
      placeholder=" Number Of Beds Here" required>
      <p class="error text-center alert alert-danger hidden"></p>
    </div>
 <div class="col-md-5">
      <input type="text" class="form-control" id="room_type" name="room_type"
      placeholder="Room Type  Here" required>
      <p class="error text-center alert alert-danger hidden"></p>
    </div>

 <div class="col-md-5">
      <input type="text" class="form-control" id="bathroom_type" name="bathroom_type"
      placeholder="Bathroom Type  Here" required>
      <p class="error text-center alert alert-danger hidden"></p>
    </div>
 <div class="col-md-5">
      <input type="text" class="form-control" id="availability" name="availability"
      placeholder="Availability  Here" required>
      <p class="error text-center alert alert-danger hidden"></p>
    </div>

<div class="col-md-5">
      <input type="text" class="form-control" id="price" name="price"
      placeholder="price  Here" required>
      <p class="error text-center alert alert-danger hidden"></p>
    </div>


    <div class="row">
    <div class="col-md-12">
     <h2 id="h2-bootstrap-heading">Room Description<a class="anchorjs-link" href="#h2.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h2><hr/>

      
    </div>
  </div>

<div class="col-md-5">
      <input type="text" class="form-control" id="internet" name="internet"
      placeholder="Availability of internet Here" required>
      <p class="error text-center alert alert-danger hidden"></p>
    </div>
    <div class="col-md-5">
      <input type="text" class="form-control" id="supermarket" name="supermarket"
      placeholder="supermarket Name if Availabe Here" required>
      <p class="error text-center alert alert-danger hidden"></p>
    </div>
<div class="col-md-5">
      <input type="text" class="form-control" id="resturant" name="resturant"
      placeholder="resturant Name if Availabe Here" required>
      <p class="error text-center alert alert-danger hidden"></p>
    </div>
  </div>
<div class="col-md-2">
<input type="hidden" name="_token" value="{!!csrf_token()!!}">

      <button class="btn btn-warning" type="submit" id="add">
        <span class="glyphicon glyphicon-plus"></span> Add New Data
      </button>
    </div>
    </h2></div>
      <div class="row"></div>
  <div class="row">
   <h2 id="h2-bootstrap-heading">Apartment<a class="anchorjs-link" href="#h2.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h2><hr/>

    <div class="table-responsive">
      <table class="table table-borderless" >
        <tr>
          <th>No.</th>
          <th>Gender</th>
          <th>Floor</th>
          <th>Location</th>
          <th>Number of room</th>
      
          <th>Actions</th>
        </tr>
         {{ csrf_field() }}

        <?php $no=1; ?>
        @foreach($accomodations as $accomodation)
          <tr class="item{{$accomodation->id}}">
            <td>{{$no++}}</td>
            <td>{{$accomodation->gender}}</td>
            <td>{{$accomodation->floor}}</td>
           <td>{{$accomodation->location}}</td>
            <td>{{$accomodation->num_of_room}}</td>
            <td>
            <button class="edit-modal btn btn-primary" data-id="{{$accomodation->apartment_id}}" data-title="{{$accomodation->gender}}" data-description="{{$accomodation->floor}}" data-lease="{{$accomodation->location}}" data-rent="{{$accomodation->num_of_room}}" >
              <span class="glyphicon glyphicon-edit"></span> Edit
            </button>
            <button class="delete-modal btn btn-danger" data-id="{{$accomodation->apartment_id}}" data-title="{{$accomodation->gendr}}" data-description="{{$accomodation->floor}}" data-lease="{{$accomodation->location}}" data-rent="{{$accomodation->num_of_room}}" >
              <span class="glyphicon glyphicon-trash"></span> Delete
            </button>
          </td>
          </tr>
        @endforeach
        </table></div></div>

        

<div class="row">

 <h2 id="h2-bootstrap-heading">Reporting Masseges<a class="anchorjs-link" href="#h2.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h2><hr/>

    <div class="table-responsive">
      <table class="table table-borderless" id="table">
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Date</th>
          <th>Telephone Number</th>
          <th>Reporting Message</th>
        <th>Owner Email</th>
          <th>Actions</th>
        </tr>
         {{ csrf_field() }}


  
</table></div></div>
     

  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" role="form">
            <div class="form-group">
              <label class="control-label col-sm-2" for="apartment_id">ID :</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="apartment_id" disabled>
              </div>
              </div>
              <div class="form-group">
              <label class="control-label col-sm-2" for="gender">Gender:</label>
              <div class="col-sm-10">
                <input type="name" class="form-control" id="gender">
              </div>
            </div>
            <div class="form-group">
            <label class="control-label col-sm-2" for="floor">Floor:</label>
            <div class="col-sm-10">
              <input type="name" class="form-control" id="floor">
            </div>
          </div>
           <div class="form-group">
            <label class="control-label col-sm-2" for="location">Location:</label>
            <div class="col-sm-10">
              <input type="name" class="form-control" id="location">
            </div>
          </div>
           <div class="form-group">
            <label class="control-label col-sm-2" for="num_of_room">Number Of Room:</label>
            <div class="col-sm-10">
              <input type="name" class="form-control" id="num_of_room">
            </div>
          </div>
         
          </form>
            <div class="deleteContent">
            Are you Sure you want to delete <span class="title"></span> ?
            <span class="hidden id"></span>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn actionBtn" data-dismiss="modal">
              <span id="footer_action_button" class='glyphicon'> </span>
            </button>
            <button type="button" class="btn btn-warning" data-dismiss="modal">
              <span class='glyphicon glyphicon-remove'></span> Close
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  @stop






  
  




         