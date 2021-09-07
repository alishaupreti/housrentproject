<?php
include 'view/header.php';
?>
<?php
// $db['host'] = "localhost";
// $db['username'] = "root";
// $db['password'] = "";
// $db['db_name'] = "houserentsystem";
// $conn = new mysqli($db['host'], $db['username'], $db['password'], $db['db_name']);

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.card {
  box-shadow: 0 4px 8px 0 maroon;
  max-width: 100%;
  min-width: 100%;
  margin: auto;
  text-align: center;
  font-family: arial;
  display: inline-block;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  opacity: 0.8;
 
}

.container {
  padding: 2px 16px;
}

.btn {
  width: 100%;
}

.image {
  min-width: 100%;
  min-height: 200px;
  max-width: 100%;
  max-height:200px;
}
</style>
</head>
<body>
    <div style="margin-top:5%">
<?php
$conn = db_connect();
$q_string = $_POST['search_property'];
$sql="SELECT * FROM property_list where concat(zone,district,province,city,area_tole,property_type) like '%$q_string%'";
    $query=mysqli_query($conn,$sql);
 echo '<center><h1 style="font-size:30px !important;color:maroon;text-transform:uppercase">Searched Properties</h1></center>';
 if(mysqli_num_rows($query)>0)
 {
   while ($rows=mysqli_fetch_assoc($query)) {
     $property_id=$rows['property_id'];
  
 ?>
</div>
<center>
<div style="margin-left:28%"class="col-sm-5">

<div style="margin-top:5%;margin-bottom:5%;" class="card">
    <?php
$sql2="SELECT * FROM property_photo where property_id='$property_id'";
$query2=mysqli_query($conn,$sql2);
if(mysqli_num_rows($query2)>0)
    {
      $row=mysqli_fetch_assoc($query2); 
        $photo=$row['p_photo'];
        echo  '<img class="image" src="/houserentsystem/admin-zone/'.$photo.'">'; }?>

  <h4 style="margin-top:2%;font-size:15px !important"><b><?php echo $rows['property_type']; ?></b></h4> 
  <p style="font-size:10px"><?php echo $rows['city'].', '.$rows['district'] ?></p>
  <form method="POST" action="<?php echo $base_url ?>?r=viewproperty" >
  <p><input type="hidden" value="<?php echo $rows['property_id']?>" name="property_id" id="property_id"> <br><br> 
  <input type="submit" class="btn btn-lg btn-primary btn-block" value="View Property">
</p>
  </center>
</div>
</div>

</body>

</html> 


<?php 
}

 }
    else{
    	echo "<center><h3>Searched Property not found...</h3></center>";
       
    }
    ?>
<br><br>

