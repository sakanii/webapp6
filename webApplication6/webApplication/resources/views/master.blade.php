
<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Sakani\projects</title>
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

<!--js-->
<!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
<!--js-->
<script src="{{URL::asset('js/jquery.min.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>

<!--webfonts-->
<link href="{{URL::asset('//fonts.googleapis.com/css?family=Josefin+Sans:400,700italic,700,600italic,600,400italic,300italic,300,100italic,100' )}}"rel='stylesheet' type='text/css'>
<link href="{{URL::asset('//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' )}}"rel='stylesheet' type='text/css'>
<!--webfonts-->
</head>
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
left:200px;
 float: center; 
}
	ul aa{
 	float: right;
 }

</style>
<body>
	<!--header-->
	<div class="header" id="home">
			<div class="header-top">
				<div class="container">
					<div class="head-top">
					<div class="social-icons" class id="icons">
									<a href="#"><i class="icon"></i></a>
									<a href="#"><i class="icon1"></i></a>
									<a href="#"><i class="icon2"></i></a>
									<a href="#"><i class="icon3"></i></a>

								</div>
								<!-- Authentication Links -->
								  @if (Auth::guest())
								<a href="{{ url('/login') }}" data-toggle="modal" data-target="#myModal1">التسجيل</a><br/>
								<a href="{{ url('/register') }}" data-toggle="modal" data-target="#myModal">تسجيل الدخول</a>
								 @else
								  <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
					
						<div class="clearfix"></div>
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
								 <a href="index.php"> <img  src="images/logo.PNG" alt=""  style="width:250px;height:100px;right:0;"></a>
                                     <li class="menu__item"><a href="/contact" class="menu__link"><span class="menu__helper">للتواصل معنا</span></a>
									</li>
									<li class="menu__item"><a href="/codes" class="menu__link"><span class="menu__helper">Codes</span></a></li>
									<li class="menu__item"><a href="/projects" class="menu__link"><span class="menu__helper">Projects</span></a></li>
									
									<li class="menu__item menu__item--current"><a href="/about" class="menu__link"><span class="menu__helper">من نحن</span></a></li>
									<li class="menu__item"><a href="/services" class="menu__link"><span class="menu__helper">الخدمات</span></a></li>
									<li class="menu__item"><a href="/home" class="menu__link"><span class="menu__helper">الصفحة الرئيسية</span></a></li>
								</ul>
							</nav>
<!-- Collect the nav links, forms, and other content for toggling -->
						
							<div class="clearfix"></div>
						</div><!-- /.navbar-collapse -->
							<!-- /.container-fluid -->
					</div>
				</nav>

			</div>	
		</div>
	</div>
	<!--header-->

	<!--footer-->
					<div class="footer-section">
						<div class="container">
							<div class="footer-grids">
								<div class="col-md-3 footer-grid">
									<h4>About </h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
								</div>
								<div class="col-md-3 footer-grid">
									<h4>Property Types</h4>
									<ul>
										<li>Lorem Post With Image Format</li>
										<li>Example Video Blog Post</li>
										<li>Example Post With Gallery Post</li>
										<li>Example Video Blog Post</li>
										<li>Lorem Post With Image Format</li>
										<li>Example Video Blog Post</li>
									</ul>
								</div>
								<div class="col-md-3 footer-grid">
									<h4>Useful links</h4>
									<ul>
										<li><a href="index.html">Home</a></li>
										<li><a href="about.html">About</a></li>
										<li><a href="services.html">Services</a></li>
										<li><a href="contact.html">Contact</a></li>
										<li><a href="codes.html">Codes</a></li>
										<li><a href="projects.html">Projects</a></li>
									</ul>
								</div>
								<div class="col-md-3 footer-grid">
									<h4>Contacts</h4>
									<ul>
										<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>1 234 567 890</li>
										<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:example@mail.com"> example@mail.com</a></li>
										<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1398 W El Camino Real</li>
										<li><i class="glyphicon glyphicon-time" aria-hidden="true"></i>Mon-Sat 8:00 am to 8:00 pm</li>
									</ul>
								</div>
							<div class="clearfix"> </div>
							</div>
							
						</div>
					</div>
					<!--footer-->
	