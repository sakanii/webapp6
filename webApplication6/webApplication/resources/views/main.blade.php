
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
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
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
<!-- banner -->
	<div class="banner">
		<div class="container">
			<div class="banner-left">
				<h3>the easiest way to find your dream home</h3>
				<p>Excepteur sint occaecat cupidatat.</p>
			</div>
			<div class="banner-right">
				<h3><span>Search For Home</span></h3>
				<div class="reservation">
					<div class="section_room">
						<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
						<select id="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">Location</option>
							<option value="null">Denmark</option>         
							<option value="AX">Sweden</option>
							<option value="AX">New Zealand</option>
							<option value="AX">America</option>
							<option value="AX">Australia</option>
						</select>
					</div>	
					<div class="section_room">
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
						<select id="country1" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">Type of property</option>
							<option value="null">Property1</option>         
							<option value="AX">Property2</option>
							<option value="AX">Property3</option>
							<option value="AX">Property4</option>
							<option value="AX">Property5</option>
						</select>
					</div>
					<div class="reservation-grids">
						<div class="reservation-grid-left">
							<div class="section_room">
								<span class="tent"> </span>
								<select id="country2" onchange="change_country(this.value)" class="frm-field required">
									<option value="null">Bedrooms</option>
									<option value="null">1</option>         
									<option value="AX">2</option>
									<option value="AX">3</option>
									<option value="AX">4</option>
									<option value="AX">More</option>
								</select>
							</div>
						</div>
						<div class="reservation-grid-right">
							<div class="section_room">
								<span class="bath"></span>
								<select id="country3" onchange="change_country(this.value)" class="frm-field required">
									<option value="null">Baths</option>
									<option value="null">Any</option>         
									<option value="AX">2</option>
									<option value="AX">3</option>
									<option value="AX">4</option>
									<option value="AX">More</option>
								</select>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="reservation-grids">
						<div class="reservation-grid-left">
							<div class="section_room">
								<span class="glyphicon glyphicon-yen" aria-hidden="true"></span>
								<select id="country2" onchange="change_country(this.value)" class="frm-field required">
									<option value="null">Price From Min</option>
									<option value="null">No Minimum</option>         
									<option value="AX">1000Yen</option>
									<option value="AX">3000Yen</option>
									<option value="AX">4000Yen</option>
									<option value="AX">5000Yen</option>
								</select>
							</div>
						</div>
						<div class="reservation-grid-right">
							<div class="section_room">
								<span class="glyphicon glyphicon-yen" aria-hidden="true"></span>
								<select id="country3" onchange="change_country(this.value)" class="frm-field required">
									<option value="null">Price From Max</option>
									<option value="null">Any</option>         
									<option value="AX">15000Yen</option>
									<option value="AX">25000Yen</option>
									<option value="AX">35000Yen</option>
									<option value="AX">More</option>
								</select>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="keywords">
						<form action="#" method="post">
							<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
							<input type="text" name="Key Words" placeholder="Key Words" required=" ">
							<input type="submit" value="Search">
						</form>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //banner -->
<!-- about -->
	<div class="about">
		<div class="container">
			<h3><span>About Us</span></h3>
			<p class="autem">Who we are</p>
			<div class="about-grids">
				<p class="delectus">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus 
					saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. 
					Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus 
					maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
				<div class="col-md-3 about-grid">
					<figure>
						<img src="images/house/1.jpg" alt=" " class="img-responsive" />
						<figcaption>
							<h4>James Willy</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
							<ul class="social-icons">
								<li><a href="#" class="icon icon-border facebook"></a></li>
								<li><a href="#" class="icon icon-border twitter"></a></li>
								<li><a href="#" class="icon icon-border instagram"></a></li>
							</ul>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-3 about-grid">
					<figure>
						<img src="images/house/2.jpg" alt=" " class="img-responsive" />
						<figcaption>
							<h4>Chris Michael</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
							<ul class="social-icons">
								<li><a href="#" class="icon icon-border facebook"></a></li>
								<li><a href="#" class="icon icon-border twitter"></a></li>
								<li><a href="#" class="icon icon-border instagram"></a></li>
							</ul>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-3 about-grid">
					<figure>
						<img src="images/house/3.jpg" alt=" " class="img-responsive" />
						<figcaption>
							<h4>Laura Li</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
							<ul class="social-icons">
								<li><a href="#" class="icon icon-border facebook"></a></li>
								<li><a href="#" class="icon icon-border twitter"></a></li>
								<li><a href="#" class="icon icon-border instagram"></a></li>
							</ul>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-3 about-grid">
					<figure>
						<img src="images/house/4.jpg" alt=" " class="img-responsive" />
						<figcaption>
							<h4>Paul Bill</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
							<ul class="social-icons">
								<li><a href="#" class="icon icon-border facebook"></a></li>
								<li><a href="#" class="icon icon-border twitter"></a></li>
								<li><a href="#" class="icon icon-border instagram"></a></li>
							</ul>
						</figcaption>
					</figure>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="about-grids-bottom">
				<div class="col-md-4 about-grids-bottom-grid">
					<h4>About Us</h4>
					<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam 
						nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas 
						nulla pariatur.</p>
				</div>
				<div class="col-md-4 about-grids-bottom-grid">
					<h4>Who We Are</h4>
					<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus 
						saepe eveniet ut et voluptates repudiandae.</p>
				</div>
				<div class="col-md-4 about-grids-bottom-grid">
					<h4>What We Do This</h4>
					<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis 
						voluptatibus maiores alias consequatur aut perferendis doloribus asperiores 
						repellat.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //about -->
<!-- about-bottom -->
	<div class="about-bottom">
		<div class="container">
			<div class="about-bottom-grid">
				<span> </span>
			</div>
			<h3>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu 
				fugiat nulla pariatur.</h3>
			<p><i>Andrew Jackson</i></p>
		</div>
	</div>
<!-- //about-bottom -->
<!-- testimonials -->
	<div class="testimonials">
		<div class="container">
			<h3><span>Testimonials</span></h3>
			<p class="autem">maiores alias consequatur aut perferendis doloribus asperiores repellat</p>
			<div class="testimonials-grids">
				<div class="col-md-6 testimonials-grid-left">
					<div class="wmuSlider example1 animated wow slideInUp" data-wow-delay=".5s">
						<div class="wmuSliderWrapper">
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="testimonials-grid-left-grid">
										<div class="testimonials-grid-left1">
											<img src="images/house/1.png" alt=" " class="img-responsive" />
										</div>
										<div class="testimonials-grid-left2">
											<h4>ut aut reiciendis voluptatibus maiores alias consequatur aut 
												perferendis doloribus asperiores repellat</h4>
											<p>2 days ago</p>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="testimonials-grid-left-grid">
										<div class="testimonials-grid-left1">
											<img src="images/house/2.png" alt=" " class="img-responsive" />
										</div>
										<div class="testimonials-grid-left2">
											<h4>quod maxime placeat facere possimus, omnis voluptas assumenda est, 
												omnis dolor repellendus</h4>
											<p>3 days ago</p>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
							</article>
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="testimonials-grid-left-grid">
										<div class="testimonials-grid-left1">
											<img src="images/house/3.png" alt=" " class="img-responsive" />
										</div>
										<div class="testimonials-grid-left2">
											<h4>ut aut reiciendis voluptatibus maiores alias consequatur aut 
												perferendis doloribus asperiores repellat</h4>
											<p>3 days ago</p>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="testimonials-grid-left-grid">
										<div class="testimonials-grid-left1">
											<img src="images/house/1.png" alt=" " class="img-responsive" />
										</div>
										<div class="testimonials-grid-left2">
											<h4>quod maxime placeat facere possimus, omnis voluptas assumenda est, 
												omnis dolor repellendus</h4>
											<p>4 days ago</p>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
							</article>
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="testimonials-grid-left-grid">
										<div class="testimonials-grid-left1">
											<img src="images/house/2.png" alt=" " class="img-responsive" />
										</div>
										<div class="testimonials-grid-left2">
											<h4>ut aut reiciendis voluptatibus maiores alias consequatur aut 
												perferendis doloribus asperiores repellat</h4>
											<p>4 days ago</p>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="testimonials-grid-left-grid">
										<div class="testimonials-grid-left1">
											<img src="images/house/3.png" alt=" " class="img-responsive" />
										</div>
										<div class="testimonials-grid-left2">
											<h4>quod maxime placeat facere possimus, omnis voluptas assumenda est, 
												omnis dolor repellendus</h4>
											<p>5 days ago</p>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
							</article>
						</div>
					</div>
						<script src="js/js/jquery.wmuSlider.js"></script> 
						<script>
							$('.example1').wmuSlider();         
						</script> 
				</div>
				<div class="col-md-6 testimonials-grid-right">
					<h4>Our Skills</h4>
					<p>Alias consequatur aut perferendis doloribus asperiores repellat.</p>
					<h5>Selling</h5>
					<div class="progress-bar1 blue stripes"> <span style="width: 100%"></span> </div>
					<h5>Buying</h5>
					<div class="progress-bar1 orange shine"> <span style="width: 100%"></span> </div>
					<h5>Dealers</h5>
					<div class="progress-bar1 green glow" id="soundlevel"> <span style="width: 100%"></span> </div>
					  
					<script>	$(document).ready(function(){ 
							$('.quarter').click(function(){
								$(this).parent().prev().children('span').css('width','50%');
								});
							$('.half').click(function(){
								$(this).parent().prev().children('span').css('width','55%');
								});
							$('.three-quarters').click(function(){
								$(this).parent().prev().children('span').css('width','75%');
								});
							$('.full').click(function(){
								$(this).parent().prev().children('span').css('width','100%');
								});			
						});
							var intervalID = setInterval(function(){getData();}, 100);
							var volumeLevel = 40;
							function getData(){
							  if (volumeLevel==40)
								{
								  volumeLevel=60
								}else if (volumeLevel==60)
								{
								  volumeLevel=40
								}
								$("#soundlevel").children('span').css('width', Math.floor(Math.random() * 100)+'%');
							}
							//@ sourceURL=pen.js
					</script>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //testimonials -->