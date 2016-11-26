<!DOCTYPE html>
<html>
<head>
<title>Sakani\Searching</title>
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
div .a{
	left:0px;
	height: 100px;
	width: 600px;
}

 #something {
    position:absolute;
    height: 500px;
    width: 1000px;
    margin: -100px 0 0 -200px;
    top: 70%;
    left: 40%;
}
#gallary{
     position:absolute;
    height: 500px;
    width: 1410px;
    margin: -100px 0 0 -200px;
    top: 70%;
    left: 15%;

}
#gallary2{
     position:absolute;
    height: 500px;
    width: 1410px;
    margin: -100px 0 0 -200px;
    top: 70%;
    left: 88%;

}


</style>
<body>
<!---header-->

<div class="header" id="search">
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
 <li><a href="index.php"> <img  src="images/logo.PNG" alt=""  style="width:250px;height:89px;left :0;"></a></li>
 <li class="menu__item menu__item--current"><a href="/home" class="menu__link"><span class="menu__helper"><h4>Home</h4></span></a></li>

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
<h1 id="h1-bootstrap-heading" ><center>Matching Found</center><a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h1></div>
<div class="container">
<div class="head-top">
    </div>
         </div>
               </div>
                     </div>
                     </nav></div></div></div></div>
<div class="container" >
<div class= panel-body>
 <div class="col-md-12">
 <legend><h2> the number of Matching = {{$count}}</h2></legend>
   </div></div></div>
 
 <?php $i=0; ?>

  @foreach($apartment as $apartments)	
 
  @foreach($room as $rooms)
@if($rooms->apartment_id==$apartments->apartment_id )
					
<div class="container" >
<div class= panel-body>
<div class="form-group row add" id="any" >

<div class="col-md-8">
<h3 class="animated wow slideInLeft" data-wow-delay=".5s"> <span> <h1><center></center></h1>
</span></h3>
<h3 class="animated wow slideInLeft" data-wow-delay=".5s"> <span> <h1><center></center></h1>
</span></h3>
	<p><h2>Room#{{++$i}}</h2></p><br/>
<h3><legend>The Accomdation Detailes</legend></h3>



	<p><h4>The apartment type of gender who can live in is a :{{$apartments->gender}}.</h4></p>
	<p><h4>The  location of this apartment is near the {{$apartments->location}},it`s located at floor #: {{$apartments->floor}} and has {{$apartments->num_of_room}} room.</h4></p>
 <p><h4>The type of this room is:{{$rooms->room_type}}</h4></p>
 <p><h4>The type of bathroom is:{{$rooms->bathroom_type}}.</h4></p>
  <p> <h4>This Room has ({{$rooms->beds_num}}) Beds.</h4> </p>
 <p><h4>Number Of students who live in this room ={{$rooms->availability}}</h4></p>
 <p><h4>So number of student who can live in this room ={{$rooms->beds_num-$rooms->availability}}</h4></p>
 <p><h4>The room price={{$rooms->price}}</h4></p>
@foreach($roomdescription as $roomdescriptions)
@if($apartments->des_id==$roomdescriptions->des_id)
<p><h4>This room has:</h4></p>
<p><h4> {{$roomdescriptions->internet}}</h4></p>
<p><h4>{{$roomdescriptions->supermarket}}</h4></p>
<p><h4>{{$roomdescriptions->resturant}}</h4></p>
	
	@endif
	@endforeach
	

  <form  action="book" method="post">
  <input type="hidden" name="_token" value="{!!csrf_token()!!}">
 {!! csrf_field() !!}
      <button class="btn btn-warning" type="submit" id="{{$rooms->id}}">
        <span class="glyphicon glyphicon"></span>    Book This  
      </button></form>
    
   
</div></div></div>
 
@endif
@endforeach
	
@endforeach




<div class="copy-section">
<div class="container">
<p>&copy; 2016 Sakani All rights reserved | Design by  <a href="http://w3layouts.com">Al Najah University students</a></p>
	</div>
	</div>