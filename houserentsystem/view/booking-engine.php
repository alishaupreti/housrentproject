


<?php 

// $db['host'] = "localhost";
// $db['username'] = "root";
// $db['password'] = "";
// $db['db_name'] = "houserentsystem";
// $conn = new mysqli($db['host'], $db['username'], $db['password'], $db['db_name']);
$conn = db_connect();
if(isset($_POST['book_property'])){
	

if(!empty($_SESSION['user']['login'])){
	global $conn,$property_id;
  $u_email= $_SESSION['user']['email_address'];

$property_id=$_POST['property_id'];
  
$sql="SELECT * FROM customer_user where email='$u_email'";
    $query=mysqli_query($conn,$sql);

    if(mysqli_num_rows($query)>0)
    {
      while ($rows=mysqli_fetch_assoc($query)) {
      	$Customer_id=$rows['customer_id'];


      	$sql1="UPDATE property_list SET booked='Yes' WHERE property_id='$property_id'";
      	$query1=mysqli_query($conn,$sql1);

      	$sql2="INSERT INTO booking(property_id,customer_id) VALUES ('$property_id','$Customer_id')";
      	$query2=mysqli_query($conn,$sql2);

      	if($query2)
		{
     



                $email=$rows ['email'];
                $msg="Thankyou Mr/Ms ".$rows['name']." for booking Property. Please visit the property location to view it personally.";
                $recipient=$email;
                $subject="Property Booked";
                $mailheaders="From: RentHouse\n";
               
                //mail send
                mail($recipient,$subject,$msg,$mailheaders);

		?>


<style>
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
  <center><strong>Thankyou for booking this property.</strong></center>
</div></div>



		<?php





		}

      }

  


} }}

?>