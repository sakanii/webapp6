

<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Sakani\Home</title>
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
					<div class="indicate">
					 <div class="social-icons" class id="icons">
									<a href="#"><i class="icon"></i></a>
									<a href="#"><i class="icon1"></i></a>
									<a href="#"><i class="icon2"></i></a>
									<a href="#"><i class="icon3"></i></a>

								</div>					
							<!--<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><a href="#">General Pvt 66, Dong Da Hanoi, Vietnam.</a>-->
						</div>
						</div>
					
								
							
                      <div class="deatils">
                       <!-- Authentication Links -->
                   
                    <ul>
                     @if (Auth::guest())
                        <li><i class="glyphicon glyphicon-lock" aria-hidden="true"></i><a href="/register" >الاشتراك</a></li>
                        <li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="/login" >تسجيل الدخول</a></li>

                    @else
                    </ul>
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
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
	<!--
							<ul>
							<li><i class="glyphicon glyphicon-lock" aria-hidden="true"></i><a href="/register" data-toggle="modal" data-target="#myModal1">الاشتراك</a></li>
								<li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="/login" data-toggle="modal" data-target="#myModal">تسجيل الدخول</a></li>
								
							</ul>
								-->
								
               


                   
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
 <li><a href="index.php"> <img  src="images/logo.PNG" alt=""  style="width:250px;height:89px;left :0;"></a></li>
 <li class="menu__item menu__item--current"><a href="/about" class="menu__link"><span class="menu__helper"><h4>Home</h4></span></a></li>

<li class="menu__item menu__item--current"><a href="/about" class="menu__link"><span class="menu__helper"><h4>about us</h4></span></a></li>
					
<li class="menu__item"><a href="/services" class="menu__link"><span class="menu__helper"><h4>Services</h4></span></a></li>

 <li class="menu__item"><a href="/login" class="menu__link"><span class="menu__helper"><h4>Sign In</h4></span></a></li>

 <li class="menu__item"><a href="/login" class="menu__link"><span class="menu__helper"><h4>Sign Up</h4></span></a></li>
</ul>
</nav>
<div class="clearfix"></div>
						</div><!-- /.navbar-collapse -->
							<!-- /.container-fluid -->
					</div>
				</nav>

			</div>	
		</div>
	</div>

							
                              
		<div class="header" id="home">
			<div class="header-top">
				<div class="container">
					<div class="head-top">
					<div class="indicate">
					
								</div>					
							<!--<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><a href="#">General Pvt 66, Dong Da Hanoi, Vietnam.</a>-->
						</div>
						</div>			
						
									                        
		<div class="header" id="home">
			<div class="header-top">
				<div class="container">
					<div class="head-top">
					<div class="indicate">
					
								</div>					
							<!--<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><a href="#">General Pvt 66, Dong Da Hanoi, Vietnam.</a>-->
						</div>
						</div>			
						                        
		<div class="header" id="home">
			<div class="header-top">
				<div class="container">
					<div class="head-top">
					<div class="indicate">
					
								</div>					
							<!--<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><a href="#">General Pvt 66, Dong Da Hanoi, Vietnam.</a>-->
						</div>
						</div>			
						                        
		<div class="header" id="home">
			<div class="header-top">
				<div class="container">
					<div class="head-top">
					<div class="indicate">
					
								</div>					
							<!--<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><a href="#">General Pvt 66, Dong Da Hanoi, Vietnam.</a>-->
						</div>
						</div>			
						
								
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


	
@yield('content')

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
					
 				 <script>
    $(function() {

        var app = {
            DOM: {},
            init: function () {

                // only applies to register form
                if (window.location.pathname == '/register') {

                    this.DOM.form = $('form');
                    this.DOM.form.name  = this.DOM.form.find('input[name="name"]');
                    this.DOM.form.email = this.DOM.form.find('input[name="email"]');
                    this.DOM.form.pwd   = this.DOM.form.find('input[name="password"]');
                    this.DOM.form.pwdc  = this.DOM.form.find('input[name="password_confirmation"]');

                    this.DOM.form.name.group = this.DOM.form.name.closest('.form-group');
                    this.DOM.form.email.group = this.DOM.form.email.closest('.form-group');
                    this.DOM.form.pwd.group = this.DOM.form.pwd.closest('.form-group');

                    this.DOM.form.submit( function(e) {
                        e.preventDefault();

                        var self = this; // native form object

                        error = {};

                        app.DOM.form.name.group.find('strong').text('');
                        app.DOM.form.email.group.find('strong').text('');
                        app.DOM.form.pwd.group.find('strong').text('');

                        app.DOM.form.name.group.removeClass('has-error');
                        app.DOM.form.email.group.removeClass('has-error');
                        app.DOM.form.pwd.group.removeClass('has-error');

                        var user = {};
                        user.name = app.DOM.form.name.val();
                        user.email = app.DOM.form.email.val();
                        user.password = app.DOM.form.pwd.val();
                        user.password_confirmation = app.DOM.form.pwdc.val();

                        var request = $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: '/validate/user',
                            type: 'POST',
                            contentType: 'application/json',
                            data: JSON.stringify(user)
                        });
                        request.done( function(data)
                        {
                            // native form submit
                            self.submit();
                        });
                        request.fail( function(jqXHR)
                        {
                            error = jqXHR.responseJSON;
                            if (error.name) {
                                app.DOM.form.name.group.find('strong').text(error.name[0]);
                                app.DOM.form.name.group.addClass('has-error');
                            }
                            if (error.email) {
                                app.DOM.form.email.group.find('strong').text(error.email[0]);
                                app.DOM.form.email.group.addClass('has-error');
                            }
                            if (error.password) {
                                app.DOM.form.pwd.group.find('strong').text(error.password[0]);
                                app.DOM.form.pwd.group.addClass('has-error');
                            }

                        });

                    });
                }
            }
        }
        app.init();
    });
    </script>
</body>
</html>
                          
</body>
</html>
