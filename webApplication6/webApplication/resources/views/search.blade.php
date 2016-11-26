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
    top: 62%;
    left: 40%;
}
#gallary{
     position:absolute;
    height: 500px;
    width: 1410px;
    margin: -100px 0 0 -200px;
    top: 62%;
    left: 15%;

}
#gallary2{
     position:absolute;
    height: 500px;
    width: 1410px;
    margin: -100px 0 0 -200px;
    top: 62%;
    left: 90%;

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
<div class="col-sm-11 form-group">

<h1 id="h1-bootstrap-heading" ><center>Search Form</center><a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h1></div>
<div class="container">
<div class="head-top">
    </div>
         </div>
               </div>
                     </div>
                     </nav></div></div></div></div>

  <form  action="searchAvailability" method="post">
  {!! csrf_field() !!}

 <div class="row" id="something">
<div class="col-sm-8">
<div class="panel panel-default">
<div class="panel-body">

   <div class="row">
  

 <div class=" col-sm-12 form-group">
  <legend><h2>Set Your selection to search for desired room :</h2></legend> </div></div>
 <div class="row">
  

 <div class=" col-sm-12 form-group">

  <label for="sel1">Gender:</label>
  <select class="form-control" name="gender">
  <option id="male"  >male</option>
 <option id="female"  >female</option>
  

</select></div></div>
 <div class="row">
  

 <div class=" col-sm-12 form-group">

  <label for="sel1">Location:</label>
  <select class="form-control" name="location">
    <option id="new campus"  >new campus</option>
      <option id="old campus"   >old campus</option>
  

</select></div></div>
 
 <div class="row">
  

 <div class=" col-sm-12 form-group">
  <label for="sel1">Floor#:</label>
  <select class="form-control" name="floor">
    <option id="1"  >1</option>
      <option id="2"   >2</option>
    <option  id="3"  >3</option>

</select></div></div>
 <div class="row">
 <div class=" col-sm-12 form-group">
  <label for="sel1">Room Type:</label>
  <select class="form-control" name="room_type">
    <option id="single"  >single</option>
      <option id="shared"   >shared</option>
</select></div></div>
 <div class="row">
 <div class=" col-sm-12 form-group">
  <label for="sel1">Bathroom Type:</label>
  <select class="form-control" name="bathroom_type">
    <option id="single"  >single</option>
      <option id="shared"   >shared</option>
</select></div></div>

<div class="row">
<div class="col-sm-5 form-group">
  <legend></legend>
  <a href="index.php"> <img  src="images/roomroom.jpg" alt=""  style="width:600px;height:250px;left :0;"></a></div></div>



<div class="row">
 <div class="col-md-12">
 <input type="hidden" name="_token" value="{!!csrf_token()!!}">
  {!! csrf_field() !!}

      <button class="btn btn-warning" type="submit" id="searchAvailability">
        <span class="glyphicon glyphicon"></span> Search Availability
      </button>
    </div>
    </div>



</div></div></div></div>
</form>




    <!----------Form-------------------------------------------------------->
   
<!--
<div class="row" id="gallary">
<div class="row">
<div class="col-sm-2 form-group">
  <a href="index.php"> <img  src="images/ph6.jpg" alt=""  style="width:290px;height:145px;left :0;"></a></div></div>
 <div class="row">
<div class="col-sm-2 form-group">
  <a href="index.php"> <img  src="images/ph1.jpg" alt=""  style="width:290px;height:145px;left :0;"></a></div></div>
   <div class="row">
<div class="col-sm-2 form-group">
  <a href="index.php"> <img  src="images/ph2.jpg" alt=""  style="width:290px;height:145px;left :0;"></a></div></div>
  <div class="row">
<div class="col-sm-2 form-group">
  <a href="index.php"> <img  src="images/ph3.jpg" alt=""  style="width:290px;height:145px;left :0;"></a></div></div>
    <div class="row">
<div class="col-sm-2 form-group">
  <a href="index.php"> <img  src="images/ph5.jpg" alt=""  style="width:290px;height:145px;left :0;"></a></div></div>

 
</div></div>
<div class="row" id="gallary2">

 <div class="row">
<div class="col-sm-2 form-group">
  <a href="index.php"> <img  src="images/ph4.jpg" alt=""  style="width:290px;height:145px;left :0;"></a></div></div>
   <div class="row">
<div class="col-sm-2 form-group">
  <a href="index.php"> <img  src="images/ph3.jpg" alt=""  style="width:290px;height:145px;left :0;"></a></div></div>
   <div class="row">
<div class="col-sm-2 form-group">
  <a href="index.php"> <img  src="images/ph5.jpg" alt=""  style="width:290px;height:145px;left :0;"></a></div></div>
  <div class="row">
<div class="col-sm-2 form-group">
  <a href="index.php"> <img  src="images/ph6.jpg" alt=""  style="width:290px;height:145px;left :0;"></a></div></div>
   
    <div class="row">
<div class="col-sm-2 form-group">
  <a href="index.php"> <img  src="images/ph1.jpg" alt=""  style="width:290px;height:145px;left :0;"></a></div></div>
</div></div></div></div></nav>
<!----footer-->






















 
    


</body>
</html>
 