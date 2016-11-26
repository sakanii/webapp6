<!DOCTYPE html>
<html>
<head>
<title>Sakani\Reporting</title>
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
left: 0px;
right: 300px;
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
    width: 1100px;
    margin: -100px 0 0 -200px;
    top: 65%;
    left: 30%;
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
						</div>



<nav class="menu menu--francisco">
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav menu__list" class id="aa">
 <li><a href="index.php"> <img  src="images/logo.PNG" alt=""  style="width:250px;height:89px;left :0;"></a></li>
 <li class="menu__item menu__item--current"><a href="/about" class="menu__link"><span class="menu__helper"><h4>Home</h4></span></a></li>

<li class="menu__item menu__item--current"><a href="/about" class="menu__link"><span class="menu__helper"><h4>about us</h4></span></a></li>
 <li class="menu__item"><a href="/reporting" class="menu__link"><span class="menu__helper"><h4>Reporting</h4></span></a></li>	
 <li class="menu__item"><a href="/search" class="menu__link"><span class="menu__helper"><h4>Search</h4></span></a></li>						
<li class="menu__item"><a href="/services" class="menu__link"><span class="menu__helper"><h4>Services</h4></span></a></li>
<li class="menu__item"><a href="/logout" class="menu__link"><span class="menu__helper"><h4>Log Out</h4></span></a></li>
</ul>
</nav>

							<div class="clearfix"></div>
						</div><!-- /.navbar-collapse -->
						<!-- /.container-fluid -->
					</div>
				</nav>
			</div>	
		</div>
		</nav></div></div></div>
		
		<!--header-->
<div class="header" >
<div class="header-top">
<div class="row">
   <div class="col-sm-12 form-group">

<h1 id="h1-bootstrap-heading" ><center>Reporting</center><a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h1></div>
<div class="container">
<div class="head-top">
    </div>
         </div>
               </div>
                     </div>
                     </nav></div></div></div></div></div></div></div>




@if(Session::has('m'))
	
			<div class="container">
<div class="head-top">
<?php $a=[]; $a=session()->pull('m');?>
<div class="alert alert-{{$a[0]}}" class="well">
{{$a[0]}}
</div></div></div>
@endif
<div class="row" id="something">

<div class="container" >



    <!----------Form-------------------------------------------------------->

<center>

<form  action="store" method="post">

{!! csrf_field() !!}
<div class="form-group row">
  <label for="example-email-input" class="col-xs-2 col-form-label">Email</label>
  <div class="col-xs-6">
    <input class="form-control" type="email" value="Enter Your Email" id="email">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-xs-2 col-form-label">Name</label>
  <div class="col-xs-6">
    <input class="form-control" type="text" value=" Enter Your Name" id="name">
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-xs-2 col-form-label">Telephone</label>
  <div class="col-xs-6">
    <input class="form-control" type="tel" value="+97" id="telephone">
  </div>
</div>


<div class="form-group row">
  <label for="example-date-input" class="col-xs-2 col-form-label">Date</label>
  <div class="col-xs-6">
    <input class="form-control" type="date" value="2016-08-19" id="date">
  </div>
</div>

 <div class="form-group row">
    <label for="exampleTextarea"  class="col-xs-2 col-form-label">Your Problem</label>
    <div class="col-xs-6">
    <textarea class="form-control" value="Enter your problem Here"   id="msg"  rows="3">
    </textarea>
    </div>
  </div>
   <div class="form-group row">
<input type="hidden" name="_token" value="{!!csrf_token()!!}">
<div class="row">

                        <div class="col-md-12">
      <button class="btn btn-warning" type="submit" id="store">
        <span class="glyphicon glyphicon"></span> Report
      </button>
    </div>
    </div>
</form> </center>
</div>
</div>



















</body>
</html>