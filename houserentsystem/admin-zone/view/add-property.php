
<?php

// $db['host'] = "localhost";
//     $db['username'] = "root";
//     $db['password'] = "";
//     $db['db_name'] = "houserentsystem";

//     $conn = new mysqli($db['host'], $db['username'], $db['password'], $db['db_name']);

if(!empty($_SESSION['user']['login'])){
if(isset($_POST['add_property'])){
	add_property();
}
}


function add_property(){

	global $property_id,$province,$zone,$district,$city,$vdc_municipality,$ward_no,$area_tole,$contact_no,$property_type,$estimated_price,$total_rooms,$bedroom,$living_room,$kitchen,$bathroom,$description,$path,$p_photo,$property_photo_id,$owner_id,$booked;



	$conn = db_connect();
	$province=validate($_POST['province']);
	$zone=validate($_POST['zone']);
	$district=validate($_POST['district']);
	$city=validate($_POST['city']);
	$vdc_municipality=validate($_POST['vdc_municipality']);
	$ward_no=validate($_POST['ward_no']);
	$area_tole=validate($_POST['area']);
	$contact_no=validate($_POST['contact_no']);
	$property_type=validate($_POST['property_type']);
	$estimated_price=validate($_POST['estimated_price']);
	$total_rooms=validate($_POST['total_rooms']);
	$bedroom=validate($_POST['bedroom']);
	$living_room=validate($_POST['living_room']);
	$kitchen=validate($_POST['kitchen']);
	$bathroom=validate($_POST['bathroom']);
	$description=validate($_POST['description']);
   	$booked='No';
   	$u_email=$_SESSION['user']['user_email'];
        $sql1="SELECT * from admin_user where email='$u_email'";
        $result1= mysqli_query($conn,$sql1);

        if(mysqli_num_rows($result1)>0)
      {
          while($rowss=mysqli_fetch_assoc($result1)){
            $owner_id=$rowss['owner_id'];

   	$sql = "INSERT INTO property_list(province,zone,district,city,vdc_municipality,ward_no,area_tole,contact_no,property_type,estimated_price,total_rooms,bedroom,living_room,kitchen,bathroom,description,booked,owner_id) VALUES('$province','$zone','$district','$city','$vdc_municipality','$ward_no','$area_tole','$contact_no','$property_type','$estimated_price','$total_rooms','$bedroom','$living_room','$kitchen','$bathroom','$description','$booked','$owner_id')";
		$query=mysqli_query($conn,$sql);

		$property_id = mysqli_insert_id($conn);

		$countfiles = count($_FILES['p_photo']['name']);
	
	for($i=0;$i<$countfiles;$i++){
	$paths = $_FILES['p_photo']['tmp_name'][$i];
		  if($paths!="")
			{
		    	$path="product-photo/" . $_FILES['p_photo']['name'][$i];
				if(move_uploaded_file($paths, $path)) {
		        $sql2 = "INSERT INTO property_photo(p_photo,property_id) VALUES('$path','$property_id')";
				$query=mysqli_query($conn,$sql2);

			}}
 
 }
		if(!empty($query)){
			
?>

<!-- <style>
.alert {
  padding: 20px;
  background-color: #DC143C;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
<script>
	window.setTimeout(function() {
    $(".alert").fadeTo(1000, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 2000);
</script>
<div class="container">
<div class="alert" role='alert'>
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <center><strong>Your Property has been added succesfully.</strong></center>
</div></div> -->


<?php
$message = ' Your Property has been succesfully added ' ;
echo "<script type='text/javascript'>
alert('$message');
window.location.href = '?r=site';
</script>";
		}
		else{
			echo "error";
		}

}
}}


function validate($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}




 ?>