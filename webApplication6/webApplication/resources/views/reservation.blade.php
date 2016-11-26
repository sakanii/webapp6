<!DOCTYPE html>
<html>
<head>
<title>Sakani\Reservation</title>
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
    <meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Scripts -->
<script src="{{URL::asset('js/jquery.min.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>

<!--webfonts-->
<link href="{{URL::asset('//fonts.googleapis.com/css?family=Josefin+Sans:400,700italic,700,600italic,600,400italic,300italic,300,100italic,100' )}}"rel='stylesheet' type='text/css'>
<link href="{{URL::asset('//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' )}}"rel='stylesheet' type='text/css'>
<!--webfonts-->
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
left: 10px;

 float: center; 
}
	ul aa{
 	float: right;
 }
div.any{

	left:1500px;
float: center;
  padding-left:30px;
  padding-right:30px;
}
h1 {
    color:white;

}
div .bg{
	background-color: white;
}
div .a{
	left:0px;
	height: 100px;
	width: 600px;
}
#something {
    position:absolute;
    height: 400px;
    width: 800px;
    margin: -100px 0 0 -200px;
    top: 30%;
    left: 47%;
}
</style>
<body>
<!---header-->
<div class="header" id="home">
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
			            </div>
			            	<div class="container">
			<div class="header-bottom">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

<div class="clearfix"></div>
						</div></div></nav></div>
						<div class="header" >

	
	
						

<div class="row" id="something">
<div class="col-sm-8">
<div class="panel panel-default">
<div class="panel-body">



<div class="guest-details-title">
<div class="customer-info">
<form  action="searchAvailability" method="post">
<input type="hidden" name="_token" value="{!!csrf_token()!!}">
{!! csrf_field() !!}
<div class="row">
   <div class="col-sm-12 form-group">
 <div class="col-sm-12">
                <span class="card-title"><center> <h2>Reservation</h2></center></span>
              <legend>Student information</legend>
                <p>Student Name : </p>
                
              <p>Student Email :</p>
                  <p>Student Phone num :</p>
                 <p>Student City:</p>

                   <legend>Owner information</legend>
                <p>Owner Name : </p>
                <p>Owner Email :</p>
                 <p>Owner Phone num : </p>
                <!--if bay by bank account-->
                 <p>Owner Bank Account# :</p></center>
                 <p>Bank Name :</p></center>

               <legend>Reservation information</legend>
                <p>Room Location : </p>
                <p>Room Type : </p>
                <p>Floor# : </p>
                <p>Total Price : </p>
                <p>Room Extra Detiales(has net/near supermarket..) : </p>

                 <legend>Room Picture : </legend>
               
                

          <a href="index.php"> <img  src="images/sleep.jpg" alt=""  style="width:440px;height:200px;left :0;"></a>
             
               
            </div>
        </div>
    </div>
</div></form></div></div></div></div></div></div></div></body></head></html>