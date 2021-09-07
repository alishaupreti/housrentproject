<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Admin Dashboard</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo $base_url ?>resource/bootstrap/css/bootstrap.min.css">

<!--<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">-->
<link href="<?php echo $base_url ?>resource/bootstrap/css/font-awesome.min.css" rel="stylesheet">

<link rel="stylesheet" href="<?php echo $base_url ?>resource/style6.css">
<script src="<?php echo $base_url ?>resource/js/jquery-3.2.1.js"></script>
<script src="<?php echo $base_url ?>resource/bootstrap/js/bootstrap.js"></script>
<script src="<?php echo $base_url ?>resource/js.js"></script>


<script src="https://kit.fontawesome.com/c758a59ac3.js" crossorigin="anonymous"></script>

    
   <link rel="stylesheet" href="<?php echo $base_url ?>resource/style6.css">
   
   <style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}
button.btn.btn-primary {
    border-radius:10px;
    padding: 10px 20px 10px 30px  !important;
    border:none;
}
button.btn.btn-outline-success {
    border-radius: 0px 50px 0px 50px !important;
    padding: 10px 20px 10px 30px !important;
    border-color: maroon !important;
    color: maroon !important;
    font-size: 15px !important;
}
#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

button:hover, a:hover {
  opacity: 0.7;
}

.form-group {
  text-align: left;
}
#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}
.display-chat {
    border: 1px solid maroon !important;
    padding: 15px 25px !important;
    border-radius: 30px !important;
}
input.btn.btn-primary {
    background-color: maroon !important;
    padding: 15px 20px !important;
    border: none !important;
}
input.btn.btn-primary:hover {
    background-color: white !important;
    padding: 15px 20px !important;
    border: 1px solid maroon !important;
    color:maroon !important;
}
.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}
button#button1 {
    background-color: maroon !important;
    border: none;
    padding: 10px !important;
    font-size:15px !important;
    border:none 
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
a.btn.btn-success {
    background-color: maroon !important;
    border: none;
    padding: 10px !important;
    font-size:15px !important;
}
a.btn.btn-success :hover {
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

input.btn.btn-success.waves-effect {
    background-color: maroon !important;
    border: none !important;
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
    border:none !important;
}

#button-text:hover {
    background-color: white !important;
    color: black !important;
    border:1px solid maroon !important; 
}


</style>
</head>
<body>
    <?php if(!empty($_SESSION['user']['login'])){?>
    <div id="main" style="width:100%;">
    <div class="row">
<div class="col-sm-2">
<a class="navbar-brand" href="<?php echo $base_url ?>?r=site"> <img src="./resource/image/logo.png" alt="" width="100" height="100"></a>
</div>


<div style="padding-top:2%"class="col-sm-8">
<ul class="navbar-nav me-auto mb-2 mb-lg-0 nav nav-pills navbar-left">
    <li class="active" style="background-color: #FFF8DC"><a data-toggle="pill" href="#home">Profile</a></li>
    <li style="background-color: #FAC0E6"><a data-toggle="pill" href="#menu4">Messages</a></li>
    <li style="background-color: #FAF0E6"><a data-toggle="pill" href="#menu1">Add Property</a></li>
    <li style="background-color: #FFFACD"><a data-toggle="pill" href="#menu2">View Property</a></li>
    <li style="background-color: #FFFAF0"><a data-toggle="pill" href="#menu3">Edit/Delete Property</a></li>
    <li style="background-color: #FAFAF0"><a data-toggle="pill" href="#menu6">Booked Property</a></li>
    
  </ul>
</div>
<div style="padding-top:1%" class="col-sm-2">
<ul class="navbar-nav me-auto mb-2 mb-lg-0 nav nav-pills navbar-left">
<?php
                        if(!empty($_SESSION['user']['login'])){ 
                    
                            ?>
                            <?php
                             $image = $_SESSION['user']['image_url'];
                            ?>
                        <li><p  style="margin: 7px;padding: 5px;color: #fff"><a target=_blank id="text-size"href="<?php echo !empty($_SESSION['user']['image_url'])? $_SESSION['user']['image_url'] : $base_url . "images/defaultuser.jpeg";?>"><img style="border-radius:100px;" src="<?php echo !empty($_SESSION['user']['image_url'])? $_SESSION['user']['image_url'] : $base_url . "images/defaultuser.jpeg"; ?>" width=50 height=50></a></p></li>
                            <li><a style="margin: 7px;padding: 5px;" href="<?= $base_url ?>?r=logout" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a></li>
                            <?php  } ?>
                        </ul>
                        </div>
    </div>
   
                        </div>
                        <?php
    }

    ?>
    
        <div class="container-fluid" style="min-height: 500px;"> 
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
        
     

