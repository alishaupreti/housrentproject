

<?php
include "view/header.php"
?>
<div style="margin-top:3%;margin-bottom:3%"></div>
<div class="container">
<center><h1 style="color:maroon;text-transform:uppercase;"> Introduction</h1>
<hr id="line">
</center> <br><br>

  <div style="padding:30px 10px;"class="row">

<div class="col-6">
<center><img style="border-radius:30px;" src="http://localhost/houserentsystem/images/houserentsystemintroduction.jpg" width=500 height = 400 ></center>

</div>

<div id="column"class="col-6">
<h2 style="color:maroon;text-transform:uppercase;"> Welcome to Rent House System </h2> <br>
<p style="font-size:17px;line-height:180%;"> Rent House  System is an house rent system of nepal where you can find any type of house for rent at any time easily by using this system user can get house for rent and also user can put the house on rent by loging in to Owner Login . You can search the house by typing in search box and click the search button and after searching you will get the house which is listed by owner themeselves with all of the house details with their phone number and user as customer can get house for rent by login in to the site and book the property.</p>
<a href="#search" style="width:60%;padding:10px;"  class="btn btn-lg btn-primary btn-block" >Search Property</a>
</div>


</div>

<br>
<div style="padding:30px 10px; border"id="property">
<div style="padding-bottom:15px;">
<center><h1 style="color:maroon;text-transform:uppercase;"> Recently Added Property </h1>
<hr id="line"></center> <br><br>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
<?php
$recent_property = get_recent_property();
$rowcount=mysqli_num_rows($recent_property);
for($i=1;$i<=$rowcount;$i++)
  {
      $rows=mysqli_fetch_array($recent_property);
      $p_id=$rows['property_id']; 
    
  
?>

  
  <?php 
  if($i==1)
  {
  ?>
    <div class="carousel-item active">
    <?php
    $conn = db_connect();
    $sql2="SELECT * FROM property_photo where property_id='$p_id'";
$query2=mysqli_query($conn,$sql2);
if(mysqli_num_rows($query2)>0)
    {
      $row=mysqli_fetch_assoc($query2); 
        $photo=$row['p_photo'];
        echo  '<img class="d-block w-100" src="/houserentsystem/admin-zone/'.$photo.'">'; }?>
      <div style="background-color:maroon"class="carousel-caption d-none d-md-block">
      <h4 style="margin-top:2%;font-size:25px !important"><b><?php echo $rows['property_type']; ?></b></h4> 
  <p style="font-size:15px"><?php echo $rows['city'].', '.$rows['district'] ?></p> 
 <p>
  <form style="margin-top:5%" class="form-horizontal" method="POST" action="<?php echo $base_url?>?r=viewproperty">
  <input type="hidden" name="property_id" value=" <?php echo $rows['property_id']?>">    
  <button  style="border:1px solid white !important;width:40% !important;border-radius:0 !important"type="submit" id="slider-button"   class="btn btn-lg btn-primary btn-block" > View Property </button>
  </form>  </p>
      </div>
    </div>
    
    <?php 
  }
  else
  {
    ?> 
   <div class="carousel-item">
   <?php
    $conn = db_connect();
    $sql2="SELECT * FROM property_photo where property_id='$p_id'";
$query2=mysqli_query($conn,$sql2);
if(mysqli_num_rows($query2)>0)
    {
      $row=mysqli_fetch_assoc($query2); 
        $photo=$row['p_photo'];
        echo  '<img class="d-block w-100" src="/houserentsystem/admin-zone/'.$photo.'">'; }?>
      <div  style="background-color:maroon" class="carousel-caption d-none d-md-block">
      <h3 style="margin-top:2%;font-size:25px !important"><b><?php echo $rows['property_type']; ?></b></h3> 
  <p style="font-size:15px"><?php echo $rows['city'].', '.$rows['district'] ?></p> 
  <p><form style="margin-top:5%" class="form-horizontal" method="POST" action="<?php echo $base_url?>?r=viewproperty">
  <input type="hidden" name="property_id" value=" <?php echo $rows['property_id']?>">    
  <button  style="border:1px solid white !important;width:40% !important;border-radius:0 !important"type="submit" id="slider-button"   class="btn btn-lg btn-primary btn-block" > View Property </button>
  </form> </p>
      </div>
    </div>
    <?php
   }
  }
  ?>
 </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
  <i style="background-color:white;padding:15px;color:maroon;font-size:30px" class="fas fa-arrow-left"></i>    
  <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
  <i style="background-color:white;padding:15px;color:maroon;font-size:30px" class="fas fa-arrow-right"></i>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br><br>
</div>
<br><br>
<center><h1 style="color:maroon;text-transform:uppercase;"> Search Your Dream House !!!! </h1>
<hr id="line"></center>
<br>
<form id="search" method="POST" action="<?php echo $base_url?>?r=search" class="d-flex">
        <input class="form-control me-2" name="search_property" id="search_property" type="search" placeholder="Search" aria-label="Search">
        <input  class="btn btn-outline-success" type="submit" value="Search">
      </form>
      <br><br>
</div>
</div>
<?php
include "view/footer.php";
?>