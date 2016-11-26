<!DOCTYPE html>
<html>
<head>
<title>Sakani\BookingRequest</title>
<!--css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--css-->

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Home Plat Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
 <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
      <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <!-- Scripts -->
<script src="{{URL::asset('js/jquery.min.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>

<!--webfonts-->
<link href="{{URL::asset('//fonts.googleapis.com/css?family=Josefin+Sans:400,700italic,700,600italic,600,400italic,300italic,300,100italic,100' )}}"rel='stylesheet' type='text/css'>
<link href="{{URL::asset('//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' )}}"rel='stylesheet' type='text/css'>
 <style type="text/css">
	div.pos{
			
	float: right;
	}
	div.icons{
			
	 
	float: left;
	}
	ul.nav{
position: relative;
	top:0;
left: 0px;
right: 300px;
 float: center; 
}
	ul .aa{
 	float: right;
 }
div.any{
	width: 200px;
	height: 400px;

float: center;
  padding-left:100px;
  padding-right:100px;

}
div .tab{
  padding-left: 50px;
  padding-top: 50px;
  padding-right: 50px;

}
h1 {
    color:white;
}
div .bg{
	background-color: white;
}
#a{
	left:0px;
	height: 100px;
	width: 600px;
}
details-container {
     padding-top: 45px; 
}

div {
    display: block;
}


 #something {
    position:absolute;
    height: 400px;
    width: 1400px;
    margin: -100px 0 0 -200px;
    top: 65%;
    left: 40%;
}
</style>
<body>
<!---header-->
<div class="header">
			<div class="header-top">
				<div class="container">
					<div class="head-top">
					<div class="indicate">
					 <div class="social-icons" class id="icons">
									<a href="#"><i class="icon"></i></a>
									<a href="#"><i class="icon1"></i></a>
									<a href="#"><i class="icon2"></i></a>
									<a href="#"><i class="icon3"></i></a>
						</div>			
						</div>
						</div>
                    	</div>
			            </div></div>
			            <div class="container">
			<div class="header-bottom">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<nav class="menu menu--francisco">
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav menu__list" class id="aa">
 <li><a href="index.php"> <img  src="images/logo.PNG" alt=""  style="width:250px;height:85px;left :0;"></a></li>
 <li class="menu__item menu__item--current"><a href="/home" class="menu__link"><span class="menu__helper"><h4>Home</h4></span></a></li>
<li class="menu__item"><a href="/book" class="menu__link"><span class="menu__helper"><h4>Book room</h4></span></a></li>
<li class="menu__item menu__item--current"><a href="/about" class="menu__link"><span class="menu__helper"><h4>about us</h4></span></a></li>
 <li class="menu__item"><a href="/reporting" class="menu__link"><span class="menu__helper"><h4>Reporting</h4></span></a></li>
 <li class="menu__item"><a href="/search" class="menu__link"><span class="menu__helper"><h4>Search</h4></span></a></li>							
<li class="menu__item"><a href="/services" class="menu__link"><span class="menu__helper"><h4>Services</h4></span></a></li>
</ul>
</nav>

							<div class="clearfix"></div>
						</div><!-- /.navbar-collapse -->
						<!-- /.container-fluid -->
					</div>
				</nav>
			</div>	
		</div>
		<!--header-->


<div class="header" >
<div class="header-top">
<div class="row">
   <div class="col-sm-12 form-group">

<h1 id="h1-bootstrap-heading" ><center>Booking Request</center><a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h1></div>
<div class="container">
<div class="head-top">
    </div>
         </div>
               </div>
                     </div>
                     </nav></div></div></div></div>

   
 <div class="row" id="something">
<div class="col-sm-6">
<div class="panel panel-default">
<div class="panel-body">
<div class="row">
<div class="col-sm-6 form-group">
<h3 id="h3-bootstrap-heading"  data-bind="text: page.yourInformationText"  >Apartment Information <a class="anchorjs-link" href="#h3.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h3></div><i class="ficon form-control-feedback"></i> </div>

	
 
 
 @foreach($apartment as $apartments)

<div class="guest-details-title">
<div class="customer-info">

<div class="row">
<div class="col-sm-6 form-group has-feedback first-name" data-bind="validationElement: guestDetails.customer.firstName" title="enter your first name" data-orig-title=""> <label for="firstName" class="control-label" data-bind="text: guestDetails.firstNameText">Apartment Location:{{$apartments->location}} </label> <span class="help-block" style="display: none;"></span> <i class="ficon form-control-feedback"></i> </div>
<div class="col-sm-6 form-group has-feedback first-name" data-bind="validationElement: guestDetails.customer.firstName" title="enter your first name" data-orig-title=""> <label for="firstName" class="control-label" data-bind="text: guestDetails.firstNameText">Apartment Floor#:{{$apartments->floor}} </label> <span class="help-block" style="display: none;"></span> <i class="ficon form-control-feedback"></i> </div>
<div class="col-sm-6 form-group has-feedback first-name" data-bind="validationElement: guestDetails.customer.firstName" title="enter your first name" data-orig-title=""> <label for="firstName" class="control-label" data-bind="text: guestDetails.firstNameText">Gender Type:{{$apartments->gender}} </label> <span class="help-block" style="display: none;"></span> <i class="ficon form-control-feedback"></i> </div>
@endforeach

@foreach($room as $rooms)
<div class="col-sm-6 form-group has-feedback first-name" data-bind="validationElement: guestDetails.customer.firstName" title="enter your first name" data-orig-title=""> <label for="firstName" class="control-label" data-bind="text: guestDetails.firstNameText">Room Type is:{{$rooms->room_type}} </label> <span class="help-block" style="display: none;"></span> <i class="ficon form-control-feedback"></i> </div>
<div class="col-sm-6 form-group has-feedback first-name" data-bind="validationElement: guestDetails.customer.firstName" title="enter your first name" data-orig-title=""> <label for="firstName" class="control-label" data-bind="text: guestDetails.firstNameText">Room Has (#of beds): {{$rooms->beds_num}}</label> <span class="help-block" style="display: none;"></span> <i class="ficon form-control-feedback"></i> </div>
<div class="col-sm-6 form-group has-feedback first-name" data-bind="validationElement: guestDetails.customer.firstName" title="enter your first name" data-orig-title=""> <label for="firstName" class="control-label" data-bind="text: guestDetails.firstNameText">Room Availability:{{$rooms->beds_num - $rooms->availability}} </label> <span class="help-block" style="display: none;"></span> <i class="ficon form-control-feedback"></i> </div>
<div class="col-sm-6 form-group has-feedback first-name" data-bind="validationElement: guestDetails.customer.firstName" title="enter your first name" data-orig-title=""> <label for="firstName" class="control-label" data-bind="text: guestDetails.firstNameText">Room Bathroom Type is : {{$rooms->bathroom_type}}</label> <span class="help-block" style="display: none;"></span> <i class="ficon form-control-feedback"></i> </div>
<div class="col-sm-6 form-group has-feedback first-name" data-bind="validationElement: guestDetails.customer.firstName" title="enter your first name" data-orig-title=""> <label for="firstName" class="control-label" data-bind="text: guestDetails.firstNameText">Room Price:{{$rooms->price}} </label> <span class="help-block" style="display: none;"></span> <i class="ficon form-control-feedback"></i> </div>
@endforeach

<!--from room table each room has aprice divid by 3 of availability-->



</div>
</div>

 

<div class="row">
<div class="col-sm-6 form-group">
<h3 id="h3-bootstrap-heading"  data-bind="text: page.yourInformationText"  >Student Information <a class="anchorjs-link" href="#h3.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h3></div><i class="ficon form-control-feedback"></i> </div>
<div class="guest-details-title">
<div class="customer-info">
<div class="row">
<div class="col-sm-6 form-group has-feedback first-name" data-bind="validationElement: guestDetails.customer.firstName" title="enter your first name" data-orig-title=""> <label for="firstName" class="control-label" data-bind="text: guestDetails.firstNameText">First Name </label> <input type="text" class="form-control" name="firstName" id="first_name" autocomplete="off" data-bind="value: guestDetails.customer.firstName, disable: isLoggedIn, allowEmpty" value="enter your first name" data-orig-title=""><span class="help-block" style="display: none;"></span> <i class="ficon form-control-feedback"></i> </div>
<div class="col-sm-6 form-group has-feedback last-name" data-bind="validationElement: guestDetails.customer.lastName"  data-orig-title=""> <label for="lastName" class="control-label" data-bind="text: guestDetails.lastNameText">Last Name</label> <input type="text" class="form-control" name="lastName" id="last_name" autocomplete="off" data-bind="value: guestDetails.customer.lastName, disable: isLoggedIn, allowEmpty" value="enter your last name" data-orig-title=""><span class="help-block" style="display: none;"></span> <i class="ficon form-control-feedback"></i> </div>
</div>



<div class="row">
<div class="col-sm-6 form-group has-feedback email" data-bind="validationElement: guestDetails.customer.email"  data-orig-title=""> <label for="email" class="control-label" data-bind="text: guestDetails.emailAddressText">Email</label> <input type="email" class="form-control" name="email" id="student_email" autocomplete="off" data-bind="value: guestDetails.customer.email, disable: isLoggedIn, allowEmpty" value="enter your email here" data-orig-title=""><span class="help-block" style="display: none;"></span> <i class="ficon form-control-feedback"></i>  </div>
<div class="col-sm-6 form-group has-feedback phone-number" data-bind="validationElement: guestDetails.customer.phoneNumber"  data-orig-title=""> <label for="phoneNumber" class="control-label" data-bind="text: guestDetails.phoneNumberText">Phone Number</label> <input type="tel" class="form-control" name="phoneNumber" id="student_phone" autocomplete="off" data-bind="value: guestDetails.customer.phoneNumber, allowEmpty" maxlength="16" value="enter your right phone number" data-orig-title=""><span class="help-block" style="display: none;"></span> <i class="ficon form-control-feedback"></i> </div></div>
<div class="row">
<div class="col-sm-6 form-group has-feedback city" data-bind="validationElement: guestDetails.customer.city"  data-orig-title=""> <label for="city" class="control-label" data-bind="text: guestDetails.cityText">City</label> <input type="city" class="form-control" name="city" id="city" autocomplete="off" data-bind="value: guestDetails.customer.email, disable: isLoggedIn, allowEmpty" value="enter your city name here" data-orig-title=""><span class="help-block" style="display: none;"></span> <i class="ficon form-control-feedback"></i>  </div>
<div class="col-sm-6 form-group has-feedback city" data-bind="validationElement: guestDetails.customer.city"  data-orig-title="">
 <label for="pay" class="control-label" data-bind="text: guestDetails.payTypeText">Type Of Pay:</label> 
 <select class="form-control" id="type_of_pay">
       <option value="By Owner Account">By Owner Account</option>
      <option value="By Hand">By Hand</option>
  
    </select>
 </div>
</div>
<div class="row">
<div class="col-sm-5 form-group">
<legend><h3>Room Picture</h3></legend>
	<a href="index.php"> <img  src="images/roomroom.jpg" alt=""  style="width:640px;height:250px;left :0;"></a></div></div>
  
<div class="row">

 <div class="col-md-12">
   <form  action="sendrequest " method="get">
                        <input type="hidden" name="_token" value="{!!csrf_token()!!}">
 {!! csrf_field() !!}
      <button class="btn btn-warning" type="submit" id="sendrequest">
        <span class="glyphicon glyphicon"></span> Send Request
      </button>
      </form>
    </div>
    </div>

                </div>
                </div>
                </div>
                </div>
               
              


</style>
</div></div></div></div>
 







                     </body></head></html>