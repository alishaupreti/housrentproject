
<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Rent House</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo $base_url ?>resource/bootstrap/css/bootstrap.min.css">

        <link href="<?php echo $base_url ?>resource/bootstrap1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
        <!--<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">-->
<link href="<?php echo $base_url ?>resource/bootstrap/css/font-awesome.min.css" rel="stylesheet">

   <link rel="stylesheet" href="<?php echo $base_url ?>resource/style6.css">
<script src="<?php echo $base_url ?>resource/js/jquery-3.2.1.js"></script>
<script src="<?php echo $base_url ?>resource/bootstrap/js/bootstrap.js"></script>
<script src="<?php echo $base_url ?>resource/js.js"></script>


<script src="https://kit.fontawesome.com/c758a59ac3.js" crossorigin="anonymous"></script>


   <link rel="stylesheet" href="<?php echo $base_url ?>resource/style6.css">

        <style>
            
            /* Remove the navbar's default margin-bottom and rounded borders */ 
            .navbar {
                margin-bottom: 0;
                border-radius: 0;
                
                
            }
            img {
    margin-top: -19px !important;
}
label.col-md-3.control-label {
    font-size: 15px !important;
}
input.form-control.validate {
    font-size: 15px !important;
}
input.form-control {
    font-size: 15px !important;
}
            #nvv{
                position: relative;
            }
            .bg-info {
    background-color: #f8f9fa!important;
}
            /* Add a gray background color and some padding to the footer */
            footer {
                background-color: #f2f2f2;
                padding: 25px;
            }
            .navbtn{
                border: 1px solid gold;
                border-radius: 20px 0 20px 0;
             
            }
           .navbtn:hover{
               box-shadow: 3px;
                 border-radius: 20px 0 20px 0;
                 
            }
            .bg {
  background:url("images/renthouse2.png");
 background-size: cover;
background-repeat: no-repeat;
padding:200px 0 200px 0;
background-attachment: fixed;
  background-position: center top;
}
img.d-block.w-100 {
    height: 430px !important;
}
a{
  color:black !important;
}
#button{
    background-color:maroon ;
    color:white !important;
    border:1px solid maroon;
    padding-right:30px;
    padding-left:30px;
    padding-top:10px;
    padding-bottom:10px;
}
#button:hover{
    border:1px solid maroon;
    background-color:white ;
    color:maroon !important;
}
.spacing{
  padding: 30px 0 30px 0  !important;
}
.top-bottom-spacing{
  padding:15px 0 15px 85px  !important
}
button.btn.btn-primary {
    border-radius: 0px 50px 0px 50px !important;
    padding: 10px 20px 10px 30px  !important;
}
button.btn.btn-outline-success {
    border-radius: 0px 50px 0px 50px !important;
    padding: 10px 20px 10px 30px !important;
    border-color: maroon !important;
    color: maroon !important;
    font-size: 15px !important;
}
input#search_property {
    padding: 22px !important;
}
a.btn.btn-lg.btn-primary.btn-block {
    font-size: 15px !important;
    background-color: maroon !important;
    border-color: maroon;
    color:white !important;
}
a#slider-button {
    font-size: 15px !important;
    background-color: maroon !important;
    border-color: white !important;
    color:white !important;
    width: 30% !important;
}
img.d-block.w-100 {
    height: 500px !important;
}
button.carousel-control-prev {
    margin-top: -15% !important;
}
button.carousel-control-next {
    margin-top: -15% !important;
}
a#slider-button:hover {
    font-size: 15px !important;
    background-color: white !important;
    border-color: maroon;
    color: black !important;
    width: 30% !important;
}
a.btn.btn-lg.btn-primary.btn-block:hover {
    font-size: 15px !important;
    background-color: white !important;
    border-color: maroon;
    color:black !important;
}
input.btn.btn-outline-success {
    background-color: maroon;
    border: none !important;
    color: white !important;
    font-size: 15px !important;
}
input.btn.btn-outline-success:hover {
    background-color: white;
    border: 1px solid maroon !important;
    color: maroon !important;
    font-size: 15px !important;
}
button.btn.btn-outline-success:hover{
    background-color:maroon !important;
    color:white  !important
}
li.nav-item {
    font-size: 20px !important;
    padding: 15px !important;
}
li.nav-item a {
    font-size: 20px !important;
    padding:10px !important;
    text-decoration:none !important;
}
.container-fluid.row {
    margin-top: 1% !important;
}
#text{
    color:white !important;
    font-size:15px !important;
}
a#text:hover{
    color:black !important;
}
#button{
    text-decoration:none !important;background-color:maroon;padding:15px;
}
i#social-fb {
    color: white !important;
}
i#social-tw {
    color: white !important;
}
i#social-gp {
    color: white !important;
}
i#social-em {
    color: white;
}

button#button1 {
    background-color: maroon !important;
    border: none;
    padding: 10px !important;
    font-size:15px !important;
}
button#button1:hover {
    background-color: white !important;
    border: 1px solid maroon;    
    padding: 10px !important;
    color: maroon !important;
    font-size:15px !important;
}
.text-footer {
    font-size: 15px !important;
}
a#button1 {
  background-color: maroon !important;
    border: none;
    padding: 7px !important;
    color:white !important;
    text-decoration:none !important;
    margin-left: 3% !important;
}
.col-lg-offset-3.col-lg-6 {
    padding-top: 5%;
}
a#button1:hover {
  background-color: white !important;
    border: 1px solid maroon;    
    padding: 7px !important;
    color: maroon !important;
    margin-left: 3% !important;
}
input#fileToUpload {
    font-size: 15px !important;
}
label.col-md-3.control-label {
    font-size: 15px !important;
}
.panel-heading {
    background-color: maroon !important;
}
.panel.panel-primary {
    border-color: maroon !important;
}
a#text-size {
    font-size: 15px !important;
    font-weight: bold !important;
    text-transform: uppercase !important;
}
a#button-text {
    background-color: red !important;
    color: white !important;
}

a#button-text:hover {
    background-color: white !important;
    color: black !important;
    border:1px solid maroon !important; 
}
button#button1 {
    background-color: maroon !important;
    border: none;
    padding: 10px !important;
    font-size:15px !important;
}
button#button1:hover {
    background-color: white !important;
    border: 1px solid maroon;    
    padding: 10px !important;
    color: maroon !important;
    font-size:15px !important;
}
button#btn-signup {
    background-color: maroon !important;
    border: none;
    padding: 10px !important;
    font-size:15px !important;
}
button#btn-signup:hover {
    background-color: white !important;
    border: 1px solid maroon;    
    padding: 10px !important;
    color: maroon !important;
    font-size:15px !important;
}
.text-footer {
    font-size: 15px !important;
}
a#button1 {
  background-color: maroon !important;
    border: none;
    padding: 7px !important;
    color:white !important;
    text-decoration:none !important;
    margin-left: 3% !important;
}
.col-lg-offset-3.col-lg-6 {
    padding-top: 5%;
}
a#button1:hover {
  background-color: white !important;
    border: 1px solid maroon;    
    padding: 7px !important;
    color: maroon !important;
    margin-left: 3% !important;
}
input#fileToUpload {
    font-size: 15px !important;
}
label.col-md-3.control-label {
    font-size: 15px !important;
}
.panel-heading {
    background-color: maroon !important;
}
.panel.panel-primary {
    border-color: maroon !important;
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

input.btn.btn-success.waves-effect {
    background-color: maroon !important;
    border: none !important;
    font-size:15px !important;
}
input.btn.btn-success.waves-effect:hover {
    background-color: white !important;
    border: 1px solid maroon !important;
    color:maroon !important;
}
}

.btn-danger:hover {
    color: black !important;
    border: 1px solid maroon !important;
    background-color: white !important;
}
.nav>li>a:focus, .nav>li>a:hover {
    text-decoration: none;
    background-color: white !important;
    color: black !important;
}
#button-text {
    background-color: red !important;
    color: white !important;
}

#button-text:hover {
    background-color: white !important;
    color: black !important;
    border:1px solid maroon !important; 

}
.input-group-addon {
    font-size: 14px;
    font-weight: 400;
    line-height: 1;
    color: #555;
    text-align: center;
    background-color: #eee;
    border: 1px solid #ccc;
    border-radius: 4px;
    padding-top: 5px !important;
    padding-left: 10px !important;
    padding-right: 22px !important;
}
.input-group-addon:hover {
    font-size: 14px;
    font-weight: 400;
    line-height: 1;
    color: black !important;
    text-align: center;
    background-color: white !important;
    border: 1px solid #ccc;
    border-radius: 4px;
    padding-top: 5px !important;
    padding-left: 10px !important;
    padding-right: 22px !important;
}
hr#line {
    width: 40%;
    border: 2px solid black;
}
  /* Remove the navbar's default margin-bottom and rounded borders */ 
  .navbar {
                margin-bottom: 0;
                border-radius: 0;
                
                
            }
            img {
    margin-top: -19px !important;
}
label.col-md-3.control-label {
    font-size: 15px !important;
}
input.form-control.validate {
    font-size: 15px !important;
}
.message {
    font-size: 15px !important;
}

textarea.form-control {
    font-size: 15px !important;
}
input.form-control {
    font-size: 15px !important;
}
            #nvv{
                position: relative;
            }
            .bg-info {
    background-color: #f8f9fa!important;
}
            /* Add a gray background color and some padding to the footer */
            footer {
                background-color: #f2f2f2;
                padding: 25px;
            }
            .navbtn{
                border: 1px solid gold;
                border-radius: 20px 0 20px 0;
             
            }
           .navbtn:hover{
               box-shadow: 3px;
                 border-radius: 20px 0 20px 0;
                 
            }
            .bg {
  background:url("images/renthouse2.png");
 background-size: cover;
background-repeat: no-repeat;
padding:200px 0 200px 0;
background-attachment: fixed;
  background-position: center top;
}
img.d-block.w-100 {
    height: 430px !important;
}
a{
  color:black !important;
}
#button{
    background-color:maroon ;
    color:white !important;
    border:1px solid maroon;
    padding-right:30px;
    padding-left:30px;
    padding-top:10px;
    padding-bottom:10px;
}
#button:hover{
    border:1px solid maroon;
    background-color:white ;
    color:maroon !important;
}
.spacing{
  padding: 30px 0 30px 0  !important;
}
.top-bottom-spacing{
  padding:15px 0 15px 85px  !important
}
button.btn.btn-primary {
    border-radius: 0px 50px 0px 50px !important;
    padding: 10px 20px 10px 30px  !important;
}
button.btn.btn-outline-success {
    border-radius: 0px 50px 0px 50px !important;
    padding: 10px 20px 10px 30px  !important;
    border-color:maroon  !important;
    color:maroon !important
}
button.btn.btn-outline-success:hover{
    background-color:maroon !important;
    color:white  !important
}
li.nav-item {
    font-size: 20px !important;
    padding:10px !important;

}
li.nav-item a {
    font-size: 20px !important;
    padding:10px !important;
    text-decoration:none !important;
}
.container-fluid.row {
    margin-top: 1% !important;
}
#text{
    color:white !important;
    font-size:15px !important;
}
a#text:hover{
    color:black !important;
}
#button{
    text-decoration:none !important;background-color:maroon;padding:15px;
}
i#social-fb {
    color: maroon !important;
}
i#social-tw {
    color: maroon !important;
}
i#social-gp {
    color: maroon !important;
}
i#social-em {
    color: maroon;
}

button#button1 {
    background-color: maroon !important;
    border: none;
    padding: 10px !important;
    font-size:15px !important;
}
button#button1:hover {
    background-color: white !important;
    border: 1px solid maroon;    
    padding: 10px !important;
    color: maroon !important;
    font-size:15px !important;
}
.text-footer {
    font-size: 15px !important;
}
a#button1 {
  background-color: maroon !important;
    border: none;
    padding: 7px !important;
    color:white !important;
    text-decoration:none !important;
    margin-left: 3% !important;
}
.col-lg-offset-3.col-lg-6 {
    padding-top: 5%;
}
a#button1:hover {
  background-color: white !important;
    border: 1px solid maroon;    
    padding: 7px !important;
    color: maroon !important;
    margin-left: 3% !important;
}
input#fileToUpload {
    font-size: 15px !important;
}
label.col-md-3.control-label {
    font-size: 15px !important;
}
.panel-heading {
    background-color: maroon !important;
}
.panel.panel-primary {
    border-color: maroon !important;
}
a#text-size {
    font-size: 15px !important;
    font-weight: bold !important;
    text-transform: uppercase !important;
}
a#button-text {
    background-color: red !important;
    color: white !important;
    font-size: 15px !important;
}

a#button-text:hover {
    background-color: white !important;
    color: black !important;
    border:1px solid maroon !important; 
}
.btn-primary {
    color: white !important;
    background-color: maroon !important;
    border-color: maroon !important;
    font-size:15px !important;
    padding:15px !important;
}

.btn-primary:hover {
    color: black !important;
    background-color: white !important;
    border-color: maroon !important;
}
.btn-success {
    color: white !important;
    background-color: maroon !important;
    border-color: maroon !important;
    font-size: 15px !important;
    padding: 15px !important;
    margin-top: 2% !important;
    display: inline-block;
    width: 100% !important;
}

.btn-success:hover {
    color: black !important;
    background-color: white !important;
    border-color: maroon !important;
}
.fade:not(.show) {
    opacity: 1;
}
.alert {
    position: relative;
    width: 99% !important;
    padding: 2rem 1rem !important;
    margin-bottom: 0rem ;
    border: 1px solid transparent;
    border-radius: .25rem !important;
    font-size: 15px !important;
    margin-top: 15px !important;
}
</style>
    </head>
    <body>

    
    


                    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <div class="container-fluid row">
      <div class="col-4">
    <a class="navbar-brand" href="<?php echo $base_url ?>?r=site"> <img src="./resource/image/logo.png" alt="" width="100" height="100"></a>
                    </div>

<div class="col-8">

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo $base_url ?>?r=site">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#property">Recent Property</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#search">Search Property</a>
        </li>
        <?php
                        if(!empty($_SESSION['user']['login'])){ 
                            // if (!empty($_SESSION['user']['login'])){ ?> <br>
                        
                        <li><p  style="margin: 7px;padding: 5px;color: #fff"><a target=_blank id="text-size"href="<?php echo !empty($_SESSION['user']['image_url'])? $_SESSION['user']['image_url'] : $base_url . "images/defaultuser.jpeg";?>"><img style="border-radius:100px;" src="<?php echo !empty($_SESSION['user']['image_url'])? $_SESSION['user']['image_url'] : $base_url . "images/defaultuser.jpeg"; ?>" width=50 height=50></a></p></li><br>

                            <li><a id="button-text" style="margin: 7px;padding: 5px;" href="<?= $base_url ?>?r=logout" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a></li>
                            <?php 
                        } else { ?>      
        <li style="margin-right:0%;"class="nav-item dropdown">
          <a id="button" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Register 
          </a>
          <ul class="dropdown-menu" style="background-color:maroon;" aria-labelledby="navbarDropdownMenuLink">
            <li ><a id="text" class="dropdown-item" href="<?php echo $base_url ?>?r=signup">Customer Register</a></li>
            <li><a id="text" class="dropdown-item" href="<?php echo $base_url ?>admin-zone/?r=signup">Owner Register</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a id="button" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Login
          </a>
          <ul style="background-color:maroon;"  class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a id="text"class="dropdown-item" href="<?php echo $base_url ?>?r=login">Customer Login</a></li>
            <li><a id="text"class="dropdown-item" href="<?php echo $base_url ?>admin-zone/?r=login">Owner Login</a></li>
          </ul>
        </li>
        <?php
                            
                        }
                        ?>

                       
                        
                       
                         
      </ul>
    </div>





                    </div>


                    </div>
</nav>


<div class="container" style="min-height: 500px;"> 
            <?php
            if (hasFlash('message')) {
                $falshError = getFlash('message');
                foreach ($falshError as $fe) {
                    ?>
                    <div class="alert alert-<?php echo $fe['type']; ?> fade in alert-dismissable">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                       <?php
                        echo empty($fe['title']) ? '' : "<strong>" . $fe['title'] . "</strong> ";
                        echo $fe['body'];
                        ?>
                    </div>
                    <?php
                }
            }
            ?>