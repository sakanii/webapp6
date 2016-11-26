<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Admin</title> <!--css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--css-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Home Plat Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js-->
<script src="{{URL::asset('js/jquery.min.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/numscroller-1.0.js')}}"></script>
<!--js-->
<!--webfonts-->
<link href="{{URL::asset('//fonts.googleapis.com/css?family=Josefin+Sans:400,700italic,700,600italic,600,400italic,300italic,300,100italic,100' )}}"rel='stylesheet' type='text/css'>
<link href="{{URL::asset('//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic') }}"rel='stylesheet' type='text/css'>
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
								<a href="#" data-toggle="modal" data-target="#myModal1">التسجيل</a><br/>
								<a href="#" data-toggle="modal" data-target="#myModal">تسجيل الدخول</a>
									
					
					
					
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
								
							<div class="clearfix"></div>
						</div><!-- /.navbar-collapse -->
							<!-- /.container-fluid -->
					</div>
				</nav>

			</div>	
		</div>
	</div>
	
	
</nav></div></div></div>

		<div class="container" >
	
	


{!! Form::open(["url"=>"books","files"=>"true"]) !!}
<h>Add New Data</h><br/>
Enter the owner name: <br>{!! Form:: text("owner_name") !!}<br>
Enter phone number: <br>{!! Form:: text("phone_number") !!}<br>

Enter owner email :<br> {!! Form:: text("owner_email") !!}<br>


upload image :<br>{!! form :: file ("images")!!} <br> 

<br> Enter the discription :<br>
location :<br> {!! Form:: text("location") !!}<br>

flat number: <br> {!! Form:: text("flat") !!}<br>

number of rooms :<br> {!! Form:: text("number_of_room") !!}<br>

<br>{!! Form :: submit("ADD",["class"=>"btn btn-info"]) !!}
{!! Form :: close()!!}



	</div>
























	<!--footer-->
	<div class="copy-section">
						<div class="container">
							<p>&copy; 2016 Sakani All rights reserved | Design by  <a href="http://w3layouts.com">Al Najah University students</a></p>
						</div>
					</div>
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body real-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-right">
										<form action="#" method="post">
											<h3>تسجيل الدخول</h3>
											<input type="text" name="Email" value="دخل الايميل" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your Email';}" required="">	
											<input type="password" name="Password" value="كلمة المرور" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
											<h4><a href="#">نسيت كلمة المرور</a> / <a href="#">انشاء كلمة مرورو جديدة</a></h4>
											<div class="single-bottom">
					
	<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>تذكرني</label>
											</div>
											<input type="submit" value="تسجيل الدخول" >
										</form>
									</div>
								</div>
								<p>By logging in you agree to our <a href="#">Terms</a> and <a href="#">Conditions</a> and <a href="#">Privacy Policy</a></p>
					
</div>
>
						</div>
					</div>
				</div>
			</div>
			<!--signin-->
			<!--Register-->
			<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body real-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-right">
										<form action="#" method="post">
											<h3>التسجيل </h3>
											<input type="text" name="Name" value="الاسم" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
											<input type="text" name="Phone" value="رقم الهلاتف" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile number';}" required="">
											<input type="text" name="Email" value="الايميل" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email id';}" required="">	
											<input type="password" name="Password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
											
											<input type="submit" value="التسجيل الان" >
										</form>
									</div>
									<div class="clearfix"></div>								
								</div>
	<p>By logging in you agree to our <a href="#">Terms</a> and <a href="#">Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		<!--Register-->
</body>
</html>						<div class="copy-section">
						<div class="container">
							<p>&copy; 2016 Sakani All rights reserved | Design by  <a href="http://w3layouts.com">Al Najah University students</a></p>
						</div>
					</div>
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body real-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-right">
										<form action="#" method="post">
											<h3>تسجيل الدخول</h3>
											<input type="text" name="Email" value="دخل الايميل" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your Email';}" required="">	
											<input type="password" name="Password" value="كلمة المرور" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
											<h4><a href="#">نسيت كلمة المرور</a> / <a href="#">انشاء كلمة مرورو جديدة</a></h4>
											<div class="single-bottom">
					
	<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>تذكرني</label>
											</div>
											<input type="submit" value="تسجيل الدخول" >
										</form>
									</div>
								</div>
								<p>By logging in you agree to our <a href="#">Terms</a> and <a href="#">Conditions</a> and <a href="#">Privacy Policy</a></p>
					
</div>
>
						</div>
					</div>
				</div>
			</div>
			<!--signin-->
			<!--Register-->
			<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body real-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-right">
										<form action="#" method="post">
											<h3>التسجيل </h3>
											<input type="text" name="Name" value="الاسم" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
											<input type="text" name="Phone" value="رقم الهلاتف" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile number';}" required="">
											<input type="text" name="Email" value="الايميل" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email id';}" required="">	
											<input type="password" name="Password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
											
											<input type="submit" value="التسجيل الان" >
										</form>
									</div>
									<div class="clearfix"></div>								
								</div>
	<p>By logging in you agree to our <a href="#">Terms</a> and <a href="#">Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		<!--Register-->
</body>
</html>
								<div class="copy-section">
						<div class="container">
							<p>&copy; 2016 Sakani All rights reserved | Design by  <a href="http://w3layouts.com">Al Najah University students</a></p>
						</div>
					</div>
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body real-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-right">
										<form action="#" method="post">
											<h3>تسجيل الدخول</h3>
											<input type="text" name="Email" value="دخل الايميل" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your Email';}" required="">	
											<input type="password" name="Password" value="كلمة المرور" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
											<h4><a href="#">نسيت كلمة المرور</a> / <a href="#">انشاء كلمة مرورو جديدة</a></h4>
											<div class="single-bottom">
					
	<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>تذكرني</label>
											</div>
											<input type="submit" value="تسجيل الدخول" >
										</form>
									</div>
								</div>
								<p>By logging in you agree to our <a href="#">Terms</a> and <a href="#">Conditions</a> and <a href="#">Privacy Policy</a></p>
					
</div>
>
						</div>
					</div>
				</div>
			</div>
			<!--signin-->
			<!--Register-->
			<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body real-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-right">
										<form action="#" method="post">
											<h3>التسجيل </h3>
											<input type="text" name="Name" value="الاسم" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
											<input type="text" name="Phone" value="رقم الهلاتف" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile number';}" required="">
											<input type="text" name="Email" value="الايميل" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email id';}" required="">	
											<input type="password" name="Password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
											
											<input type="submit" value="التسجيل الان" >
										</form>
									</div>
									<div class="clearfix"></div>								
								</div>
	<p>By logging in you agree to our <a href="#">Terms</a> and <a href="#">Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		<!--Register-->
</body>
</html>