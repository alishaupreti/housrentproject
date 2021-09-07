<?php if(!empty($_SESSION['user']['login']))
{
include 'view/header.php';
}
?>
<?php
if(isset($_POST['send_message1'])){

  $message=$_POST['message'];
  $owner_id=$_POST['owner_id'];
  $customer_id=$_POST['customer_id'];
  
    
  $sql="INSERT INTO chat(owner_message,owner_id,customer_id) VALUES ('$message','$owner_id','$customer_id')";
 $conn = db_connect();
  $query = mysqli_query($conn,$sql);
  if($query)
  {       
    // echo '<center><img style="width:60% !important;"class="d-block w-100" src="http://localhost/houserentsystem/images/message-success.png"></center>';
    // echo  '<center><h1> Message has been sent Succesfully. You will get your reply soon</h1></center';
    $alertmessage = ' Your Message has been sent succesfully' ;
echo "<script type='text/javascript'>
alert('$alertmessage');
</script>";

  }}?>
<?php

$main_url = "http://localhost/houserentsystem/";
$db['host'] = "localhost";
    $db['username'] = "root";
    $db['password'] = "";
    $db['db_name'] = "houserentsystem";

    $conn = new mysqli($db['host'], $db['username'], $db['password'], $db['db_name']);
?>
<?php 


if(!empty($_SESSION['user']['login'])){

 ?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

<br><br><br>
 <div class="container-fluid">
  

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <center><h2 style="color:maroon ; text-transform:uppercase;">Owner Profile</h2></center><br>

      <div class="container">


	  <div class="row">

<div class="col-sm-4">


</div>

<div class="col-sm-4">
<?php 
        $u_email= $_SESSION['user']['user_email'];

        $sql="SELECT * from admin_user where email='$u_email'";
        $result=mysqli_query($conn,$sql);
          $photo = $_SESSION['user']['image_url'];
        if(mysqli_num_rows($result)>0)
      {
          while($rows=mysqli_fetch_assoc($result)){
          
       ?>
        <div class="card">
  <img src="<?php echo !empty($photo)? $photo : $base_url . "images/defaultuser.jpeg"; ?> "  style="height:200px; width: 100%">
  <h1><?php echo  $_SESSION['user']['user_name']?></h1>
  <p class="title"><?php echo $_SESSION['user']['user_email']; ?></p>
  <p><b>Phone No.: </b><?php echo $rows['phone_no']; ?></p>
  <p><b>Address: </b><?php echo $rows['address']; ?></p>
  

  <!-- Trigger the modal with a button -->
  <p><button id="button-text" type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModal">Update Profile</button></p>

</div>
<div class="col-sm-4">

</div>


</div>

     

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <center><h3 style="color:maroon !important;" class="modal-title">Update Profile</h3></center>
        </div>
        <div class="modal-body">

            <form method="POST" action="<?php echo $base_url ?>?r=updateprofile">
                <div class="form-group">
                  <label for="full_name">Full Name:</label>
                  <input type="hidden" value="<?php echo $rows['owner_id']; ?>" name="owner_id">
                  <input type="text" class="form-control" id="full_name" value="<?php echo $rows['name']; ?>" name="full_name">
                </div>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" id="email" value="<?php echo $rows['email']; ?>" name="email" readonly>
                </div>
                <div class="form-group">
                  <label for="phone_no">Phone No.:</label>
                  <input pattern="[1-9]{1}[0-9]{9}" type="text" class="form-control" id="phone_no" value="<?php echo $rows['phone_no']; ?>" name="phone_no">
                </div>
                <div class="form-group">
                  <label for="address">Address:</label>
                  <input type="text" class="form-control" id="address" value="<?php echo $rows['address']; ?>" name="address">
                </div>
                
    <div class="form-group">
      <label>Your Id Photo:</label><br>
      <input type="hidden" class="form-control" id="id_photo" value="<?php echo $rows['id_photo']; ?>" name="id_photo" readonly>
      <img src="<?php echo !empty($rows['id_photo'])? $rows['id_photo'] : $base_url . "images/defaultuser.jpeg";?>" id="id_photo" name="id_photo" height="100px" readonly>
    </div>
                <hr>
                <button type="submit" style="background-color:maroon;width:40%;"name="owner_update" class="btn btn-primary btn-lg ">Update</button><br>
                
              </form>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>
    </div>
    </div>






    <div id="menu4" class="tab-pane fade">
      <div class="container">
      <center><h2 style="color:maroon ; text-transform:uppercase;">See Messages</h2></center><br>
            <?php 
      $owner_id=$rows['owner_id']; 
      $owner_image_url = $rows['id_photo'];
        $owner_name = $rows['name'];
      $sql1="SELECT * FROM chat where owner_id='$owner_id' ";

    $query1 = mysqli_query($conn,$sql1);

  if(mysqli_num_rows($query1)>0)
  {
    while($row= mysqli_fetch_assoc($query1)){

      $customer_id=$row['customer_id'];
      $sql2="SELECT * FROM customer_user where customer_id='$customer_id' ";

    $query2 = mysqli_query($conn,$sql2);

  if(mysqli_num_rows($query2)>0)
  {
    while ($rows= mysqli_fetch_assoc($query2)){
      $customer_id=$rows['customer_id'];
      $image_url = $rows['id_photo'];
      $customer_name = $rows['name'];
      ?>
      <?php

if(!empty($row['message'])){
  
?>
    
      <p>
      <div style="font-size:15px;padding:10px 15px;background-color:maroon"> 
     <a target=_blank id="text-size"href="<?php echo !empty($rows['id_photo'])? $main_url.$rows['id_photo'] : $main_url . "images/defaultuser.jpeg";?>"><img style="border-radius:100px;" src="<?php echo !empty($rows['id_photo'])? $main_url.$rows['id_photo'] : $main_url . "images/defaultuser.jpeg"; ?>" width=50 height=50></a> 
          <span style="color:white !important;"> <?php echo $rows['name'];?> </span><span style="color:white !important;font-size:19px;">(Customer)</span><br>        <span style="color:white !important;"><?php echo $row['message']; ?></span><br><br>
          <form method="POST">
          <input type="hidden" name="owner_id" value="<?php echo $owner_id; ?>">    
      <input type="hidden" name="customer_id" value="<?php echo $rows['customer_id'] ?>">
            
        <textarea name="message" class="form-control" placeholder="Type your message here..."></textarea><br>
          <input style="border:1px solid white !important;" type="submit" name="send_message1" class="btn btn-primary" formmethod="post" value="Reply">
</form>
          <br><br>
         
</div>
<br><br><br>
          <?php
        
      }
         
    
    }
  }
?>

  
<?php
    }}
  else
  {
?>
</div>
<div class="message">
      <p>
        No previous chat available.
      </p>
</div>
<?php
  } }}
?>
  </div>
<div class="clearfix"></div>

 
    






    <div id="menu1" class="tab-pane fade">
      <center><h2 style="color:maroon ; text-transform:uppercase;">Add Property</h2></center><br>

      <div class="container">
        <form method="POST" action="<?php echo $base_url ?>?r=addproperty" enctype="multipart/form-data">
          <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
              <label for="province">Province/State:</label>
              <select class="form-control" name="province" required="required">
                                <option value="">--Select Province/State--</option>
                                <option value="Province No. 1">Province No. 1</option>
                                <option value="Province No. 2">Province No. 2</option>
                                <option value="Bagmati Pradesh">Bagmati Pradesh</option>
                                <option value="Gandaki Pradesh">Gandaki Pradesh</option>
                                <option value="Province No. 5">Province No. 5</option>
                                <option value="Karnali Pradesh">Karnali Pradesh</option>
                                <option value="Sudurpaschim Pradesh">Sudurpaschim Pradesh</option>
              </select>
            </div>
            <div class="form-group">
              <label for="zone">Zone:</label>
              <select class="form-control" name="zone" required="required">
                                <option value="">--Select Zone--</option>
                                <option value="Bagmati">Bagmati</option>
                                <option value="Bheri">Bheri</option>
                                <option value="Dhawalagiri">Dhawalagiri</option>
                                <option value="Gandaki">Gandaki</option>
                                <option value="Janakpur">Janakpur</option>
                                <option value="Karnali">Karnali</option>
                                <option value="Kosi">Kosi</option>
                                <option value="Lumbini">Lumbini</option>
                                <option value="Mahakali">Mahakali</option>
                                <option value="Mechi">Mechi</option>
                                <option value="Narayani">Narayani</option>
                                <option value="Rapti">Rapti</option>
                                <option value="Sagarmatha">Sagarmatha</option>
                                <option value="Seti">Seti</option>
                            </select>
            </div>
            <div class="form-group">
              <label for="district">District:</label>
              <select class="form-control" name="district" required="required">
                                %{--Mechi--}%
                                <option value="">--Select District--</option>
                                <option value="Taplejung">Taplejung</option>
                                <option value="Panchthar">Panchthar</option>
                                <option value="Ilam">Ilam</option>
                                <option value="Jhapa">Jhapa</option>
                                %{--Koshi--}%
                                <option value="Morang">Morang</option>
                                <option value="Sunsari">Sunsari</option>
                                <option value="Dhankutta">Dhankutta</option>
                                <option value="Sankhuwasabha">Sankhuwasabha</option>
                                <option value="Bhojpur">Bhojpur</option>
                                <option value="Terhathum">Terhathum</option>
                                %{--Sagarmatha--}%
                                <option value="Okhaldunga">Okhaldunga</option>
                                <option value="Khotang">Khotang</option>
                                <option value="Solukhumbu">Solukhumbu</option>
                                <option value="Udaypur">Udaypur</option>
                                <option value="Saptari">Saptari</option>
                                <option value="Siraha">Siraha</option>
                                %{--Janakpur--}%
                                <option value="Dhanusa">Dhanusa</option>
                                <option value="Mahottari">Mahottari</option>
                                <option value="Sarlahi">Sarlahi</option>
                                <option value="Sindhuli">Sindhuli</option>
                                <option value="Ramechhap">Ramechhap</option>
                                <option value="Dolkha">Dolkha</option>
                                %{--Bagmati--}%
                                <option value="Sindhupalchauk">Sindhupalchauk</option>
                                <option value="Kavreplanchauk">Kavreplanchauk</option>
                                <option value="Lalitpur">Lalitpur</option>
                                <option value="Bhaktapur">Bhaktapur</option>
                                <option value="Kathmandu">Kathmandu</option>
                                <option value="Nuwakot">Nuwakot</option>
                                <option value="Rasuwa">Rasuwa</option>
                                <option value="Dhading">Dhading</option>
                                %{--Narayani--}%
                                <option value="Makwanpur">Makwanpur</option>
                                <option value="Rauthat">Rauthat</option>
                                <option value="Bara">Bara</option>
                                <option value="Parsa">Parsa</option>
                                <option value="Chitwan">Chitwan</option>
                                %{--Gandaki--}%
                                <option value="Gorkha">Gorkha</option>
                                <option value="Lamjung">Lamjung</option>
                                <option value="Tanahun">Tanahun</option>
                                <option value="Syangja">Syangja</option>
                                <option value="Kaski">Kaski</option>
                                <option value="Manang">Manang</option>
                                %{--Dhawalagiri--}%
                                <option value="Mustang">Mustang</option>
                                <option value="Parwat">Parwat</option>
                                <option value="Myagdi">Myagdi</option>
                                <option value="Baglung">Baglung</option>
                                %{--Lumbini--}%
                                <option value="Gulmi">Gulmi</option>
                                <option value="Palpa">Palpa</option>
                                <option value="Nawalparasi">Nawalparasi</option>
                                <option value="Rupandehi">Rupandehi</option>
                                <option value="Arghakhanchi">Arghakhanchi</option>
                                <option value="Kapilvastu">Kapilvastu</option>
                                %{--Rapti--}%
                                <option value="Pyuthan">Pyuthan</option>
                                <option value="Rolpa">Rolpa</option>
                                <option value="Rukum">Rukum</option>
                                <option value="Salyan">Salyan</option>
                                <option value="Dang">Dang</option>
                                %{--Bheri--}%
                                <option value="Bardiya">Bardiya</option>
                                <option value="Surkhet">Surkhet</option>
                                <option value="Dailekh">Dailekh</option>
                                <option value="Banke">Banke</option>
                                <option value="Jajarkot">Jajarkot</option>
                                %{--Karnali--}%
                                <option value="Dolpa">Dolpa</option>
                                <option value="Humla">Humla</option>
                                <option value="Kalikot">Kalikot</option>
                                <option value="Mugu">Mugu</option>
                                <option value="Jumla">Jumla</option>
                                %{--Seti--}%
                                <option value="Bajura">Bajura</option>
                                <option value="Bajhang">Bajhang</option>
                                <option value="Achham">Achham</option>
                                <option value="Doti">Doti</option>
                                <option value="Kailali">Kailali</option>
                                %{--Mahakali--}%
                                <option value="Kanchanpur">Kanchanpur</option>
                                <option value="Dadeldhura">Dadeldhura</option>
                                <option value="Baitadi">Baitadi</option>
                                <option value="Darchula">Darchula</option>
                            </select>
            </div>
            <div class="form-group">
              <label for="city">City:</label>
              <input type="text" class="form-control" id="city" placeholder="Enter City" name="city">
            </div>
            <div class="form-group">
              <label for="vdc/municipality">VDC/Municipality:</label>
              <select class="form-control" name="vdc_municipality">
                <option value="">--Select VDC/Municipality--</option>
                <option value="VDC">VDC</option>
                <option value="Municipality">Municipality</option>
              </select>

            </div>
            <div class="form-group">
              <label for="ward_no">Ward No.:</label>
              <input type="text" class="form-control" id="ward_no" placeholder="Enter Ward No." name="ward_no">
            </div>
            <div class="form-group">
              <label for="tole">Area Tole:</label>
              <input type="text" class="form-control" id="area" placeholder="Enter Area where the property belongs" name="area">
            </div>
            <div class="form-group">
              <label for="contact_no">Contact No.:</label>
              <input type="text" class="form-control" id="contact_no" placeholder="Enter Contact No." name="contact_no">
            </div>
            <div class="form-group">
               <label for="property_type">Property Type:</label>
                <select class="form-control" name="property_type">
                      <option value="">--Select Property Type--</option>
                      <option value="Full House Rent">Full House Rent</option>
                      <option value="Flat Rent">Flat Rent</option>
                      <option value="Room Rent">Room Rent</option>
                </select>
            </div>                      
            <div class="form-group">
                <label for="estimated_price">Estimated Price:</label>
                <input type="estimated_price" class="form-control" id="estimated_price" placeholder="Enter Estimated Price" name="estimated_price">
            </div>
        </div>

        <div class="col-sm-6">
                  <div class="form-group">
                    <label for="total_rooms">Total No. of Rooms:</label>
                    <input type="number" class="form-control" id="total_rooms" placeholder="Enter Total No. of Rooms" name="total_rooms">
                  </div>
                  <div class="form-group">
                    <label for="bedroom">No. of Bedroom:</label>
                    <input type="number" class="form-control" id="bedroom" placeholder="Enter No. of Bedroom" name="bedroom">
                  </div>
                  <div class="form-group">
                    <label for="living_room">No. of Living Room:</label>
                    <input type="number" class="form-control" id="living_room" placeholder="Enter No. of Living Room" name="living_room">
                  </div>
                  <div class="form-group">
                    <label for="kitchen">No. of Kitchen:</label>
                    <input type="number" class="form-control" id="kitchen" placeholder="Enter No. of Kitchen" name="kitchen">
                  </div>
                  <div class="form-group">
                    <label for="bathroom">No. of Bathroom/Washroom:</label>
                    <input type="number" class="form-control" id="bathroom" placeholder="Enter No. of Bathroom/Washroom" name="bathroom">
                  </div>
                  <div class="form-group">
                    <label for="description">Full Description:</label>
                    <textarea type="comment" class="form-control" id="description" placeholder="Enter Property Description" name="description"></textarea>
                  </div>
                  
                  <table class="table" id="dynamic_field">  
                  <tr> 
                    <div class="form-group"> 
                    <label><b>Photos:</b></label>                    
                    <td><input type="file" name="p_photo[]" placeholder="Photos" class="form-control name_list" required accept="image/*" /></td> 
                    <td><button type="button" id="add" name="add" class="btn btn-success col-lg-12">Add More</button></td>  
                  </div>
                  </tr>  
                </table>
                  <hr>
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg col-lg-12" value="Add Property" name="add_property">
                  </div>
                </div>
              </div>
              </form>
              <br><br>

    </div>
    </div>


    <div id="menu2" class="tab-pane fade">
      <center><h2 style="color:maroon ; text-transform:uppercase;">View Property</h2></center><br>
      <div class="container-fluid">
      <input type="text" id="myInput" onkeyup="viewProperty()" placeholder="Search By City" title="Type in a name">
            <div style="overflow-x:auto;">
              <table id="myTable">
                <tr class="header">
                  <th>Id.</th>
                  <th>Province/State</th>
                  <th>Zone</th>
                  <th>District</th>
                  <th>City</th>
                  <th>VDC/Municipality</th>
                  <th>Ward No.</th>
                  <th>Area Tole</th>
                  <th>Contact No.</th>
                  <th>Property Type</th>
                  <th>Estmated Price</th>
                  <th>Total Rooms</th>
                  <th>Bedroom</th>
                  <th>Living Room</th>
                  <th>Kitchen</th>
                  <th>Bathroom</th>
                  <th>Description</th>
                  <th>Photos</th>
                </tr>
                <?php 
                $conn = db_connect();
                $u_email=$_SESSION['user']['user_email'];
        $sql1="SELECT * from admin_user where email='$u_email'";
        $result1=mysqli_query($conn,$sql1);

        if(mysqli_num_rows($result1)>0)
      {
          while($rowss=mysqli_fetch_assoc($result1)){
            $owner_id=$rowss['owner_id'];

        $sql="SELECT * from property_list where owner_id='$owner_id'";
        $result=mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)>0)
      {
          while($rows=mysqli_fetch_assoc($result)){
          $property_id=$rows['property_id'];
       ?>
                <tr>
                  <td><?php echo $rows['property_id'] ?></td>
                  <td><?php echo $rows['province'] ?></td>
                  <td><?php echo $rows['zone'] ?></td>
                  <td><?php echo $rows['district'] ?></td>
                  <td><?php echo $rows['city'] ?></td>
                  <td><?php echo $rows['vdc_municipality'] ?></td>
                  <td><?php echo $rows['ward_no'] ?></td>
                  <td><?php echo $rows['area_tole'] ?></td>
                  <td><?php echo $rows['contact_no'] ?></td>
                  <td><?php echo $rows['property_type'] ?></td>
                  <td>Rs.<?php echo $rows['estimated_price'] ?></td>
                  <td><?php echo $rows['total_rooms'] ?></td>
                  <td><?php echo $rows['bedroom'] ?></td>
                  <td><?php echo $rows['living_room'] ?></td>
                  <td><?php echo $rows['kitchen'] ?></td>
                  <td><?php echo $rows['bathroom'] ?></td>
                  <td><?php echo $rows['description'] ?></td><td>
<?php $sql2="SELECT * from property_photo where property_id='$property_id'";
        $query=mysqli_query($conn,$sql2);

        if(mysqli_num_rows($query)>0)
      {
          while($row=mysqli_fetch_assoc($query)){ ?>
                  <img src="<?php echo $row['p_photo'] ?>" width="50px">
                <?php }}}}}} ?>
                </td>
                </tr>
              </table> 
            </div>
    </div>
    </div>

    <div id="menu3" class="tab-pane fade">
      <center><h2 style="color:maroon ; text-transform:uppercase;">Update Property</h2></center><br>
      <div class="container-fluid">
            <div style="overflow-x:auto;">
              <table id="myTable">
                <tr class="header">
                  <th>Id.</th>
                  <th>Province/State</th>
                  <th>Zone</th>
                  <th>District</th>
                  <th>City</th>
                  <th>VDC/Municipality</th>
                  <th>Ward No.</th>
                  <th>Area Tole</th>
                  <th>Contact No.</th>
                  <th>Property Type</th>
                  <th>Estmated Price</th>
                  <th>Total Rooms</th>
                  <th>Bedroom</th>
                  <th>Living Room</th>
                  <th>Kitchen</th>
                  <th>Bathroom</th>
                  <th>Description</th>
                  <th>Photos</th>
                  <th>Edit/Delete</th>
                </tr>
                <?php 
$conn = db_connect();
        $sql="SELECT * from property_list where owner_id='$owner_id'";
        $result=mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)>0)
      {
          while($rows=mysqli_fetch_assoc($result)){
          $property_id=$rows['property_id'];
       ?>
                <tr>
                  <td><?php echo $rows['property_id'] ?></td>
                  <td><?php echo $rows['province'] ?></td>
                  <td><?php echo $rows['zone'] ?></td>
                  <td><?php echo $rows['district'] ?></td>
                  <td><?php echo $rows['city'] ?></td>
                  <td><?php echo $rows['vdc_municipality'] ?></td>
                  <td><?php echo $rows['ward_no'] ?></td>
                  <td><?php echo $rows['area_tole'] ?></td>
                  <td><?php echo $rows['contact_no'] ?></td>
                  <td><?php echo $rows['property_type'] ?></td>
                  <td>Rs.<?php echo $rows['estimated_price'] ?></td>
                  <td><?php echo $rows['total_rooms'] ?></td>
                  <td><?php echo $rows['bedroom'] ?></td>
                  <td><?php echo $rows['living_room'] ?></td>
                  <td><?php echo $rows['kitchen'] ?></td>
                  <td><?php echo $rows['bathroom'] ?></td>
                  <td><?php echo $rows['description'] ?></td><td>
<?php $sql2="SELECT * from property_photo where property_id='$property_id'";
        $query=mysqli_query($conn,$sql2);

        if(mysqli_num_rows($query)>0)
      {
          while($row=mysqli_fetch_assoc($query)){ ?>
                  <img src="<?php echo $row['p_photo'] ?>" width="50px">
                <?php }}  ?>
                </td>
                <form method="POST" action="<?php echo $base_url ?>?r=deleteproperty">
                <td>
                  <input type="hidden" name="property_id" value="<?php echo $rows['property_id']; ?>">
                      <p><button id="button-text" class="btn btn-success" name="edit_property" type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModal1">Edit Property</button></p>

                  <input onclick="return confirm('!!! Warning Are you sure Want to Delete the Property ? ')" type="submit" class="btn btn-danger" name="delete_property" value="Delete Property">
                  </td>
                </tr>
                </form>
                <?php }} ?>
              </table> 
            </div>
    </div>
    </div>

  <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <center><h2 style="color:maroon ; text-transform:uppercase;">Edit Property Details</h2></center><br>

        </div>
        <div class="modal-body">
            <?php 
                $conn = db_connect();
        $sql="SELECT * from property_list where property_id ='$property_id'";
        $result=mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)>0)
      {
          while($rows=mysqli_fetch_assoc($result)){
       ?>
        <form style="padding:15px;" method="POST" action="<?php echo $base_url ?>?r=updateproperty" enctype="multipart/form-data">
          <div class="row">
    
            <div class="form-group">
              <label for="province">Province/State:</label>
             <?php $options = $rows['province'];?>
              <select class="form-control"  name="province" required="required">
                                <option value="">--Select Province/State--</option>
                                <option value="Province No. 1"<?php if($options=="Province No. 1") echo 'selected="selected"'; ?>>Province No. 1</option>
                                <option value="Province No. 2"<?php if($options=="Province No. 2") echo 'selected="selected"'; ?>>Province No. 2</option>
                                <option value="Bagmati Pradesh"<?php if($options=="Bagmati Pradesh") echo 'selected="selected"'; ?>>Bagmati Pradesh</option>
                                <option value="Gandaki Pradesh"<?php if($options=="Gandaki Pradesh") echo 'selected="selected"'; ?>>Gandaki Pradesh</option>
                                <option value="Province No. 5"<?php if($options=="Province No. 5") echo 'selected="selected"'; ?>>Province No. 5</option>
                                <option value="Karnali Pradesh"<?php if($options=="Karnali Pradesh") echo 'selected="selected"'; ?>>Karnali Pradesh</option>
                                <option value="Sudurpaschim Pradesh"<?php if($options=="Sudurpaschim Pradesh") echo 'selected="selected"'; ?>>Sudurpaschim Pradesh</option>
              </select>
            </div>
            <div class="form-group">
              <label for="zone">Zone:</label> 
              <?php $options = $rows['zone'];?>
              <select class="form-control" name="zone" required="required">
                                <option value="">--Select Zone--</option>
                                <option value="Bagmati" <?php if($options=="Bagmati") echo 'selected="selected"'; ?>>Bagmati</option>
                                <option value="Bheri" <?php if($options=="Bheri") echo 'selected="selected"'; ?>>Bheri</option>
                                <option value="Dhawalagiri" <?php if($options=="Dhawalagiri") echo 'selected="selected"'; ?>>Dhawalagiri</option>
                                <option value="Gandaki" <?php if($options=="Gandaki") echo 'selected="selected"'; ?>>Gandaki</option>
                                <option value="Janakpur" <?php if($options=="Janakpur") echo 'selected="selected"'; ?>>Janakpur</option>
                                <option value="Karnali" <?php if($options=="Karnali") echo 'selected="selected"'; ?>>Karnali</option>
                                <option value="Kosi"<?php if($options=="Kosi") echo 'selected="selected"'; ?>>Kosi</option>
                                <option value="Lumbini" <?php if($options=="Lumbini") echo 'selected="selected"'; ?>>Lumbini</option>
                                <option value="Mahakali" <?php if($options=="Mahakali") echo 'selected="selected"'; ?>>Mahakali</option>
                                <option value="Mechi" <?php if($options=="Mechi") echo 'selected="selected"'; ?>>Mechi</option>
                                <option value="Narayani" <?php if($options=="Narayani") echo 'selected="selected"'; ?>>Narayani</option>
                                <option value="Rapti" <?php if($options=="Rapti") echo 'selected="selected"'; ?>>Rapti</option>
                                <option value="Sagarmatha" <?php if($options=="Sagarmatha") echo 'selected="selected"'; ?>>Sagarmatha</option>
                                <option value="Seti" <?php if($options=="Seti") echo 'selected="selected"'; ?>>Seti</option>
                            </select>
            </div>
            <div class="form-group">
              <label for="district">District:</label>
              <?php $options = $rows['district'];?>
              <select class="form-control" name="district" required="required">
                                %{--Mechi--}%
                                <option value="">--Select District--</option>
                                <option value="Taplejung" <?php if($options=="Taplejung") echo 'selected="selected"'; ?>>Taplejung</option>
                                <option value="Panchthar" <?php if($options=="Panchthar") echo 'selected="selected"'; ?>>Panchthar</option>
                                <option value="Ilam" <?php if($options=="Ilam") echo 'selected="selected"'; ?>>Ilam</option>
                                <option value="Jhapa" <?php if($options=="Jhapa") echo 'selected="selected"'; ?>>Jhapa</option>
                                %{--Koshi--}%
                                <option value="Morang" <?php if($options=="Morang") echo 'selected="selected"'; ?>>Morang</option>
                                <option value="Sunsari" <?php if($options=="Sunsari") echo 'selected="selected"'; ?>>Sunsari</option>
                                <option value="Dhankutta" <?php if($options=="Dhankutta") echo 'selected="selected"'; ?>>Dhankutta</option>
                                <option value="Sankhuwasabha" <?php if($options=="Sankhuwasabha") echo 'selected="selected"'; ?>>Sankhuwasabha</option>
                                <option value="Bhojpur" <?php if($options=="Bhojpur") echo 'selected="selected"'; ?>>Bhojpur</option>
                                <option value="Terhathum" <?php if($options=="Terhathum") echo 'selected="selected"'; ?>>Terhathum</option>
                                %{--Sagarmatha--}%
                                <option value="Okhaldunga" <?php if($options=="Okhaldunga") echo 'selected="selected"'; ?>>Okhaldunga</option>
                                <option value="Khotang" <?php if($options=="Khotang") echo 'selected="selected"'; ?>>Khotang</option>
                                <option value="Solukhumbu" <?php if($options=="Solukhumbu") echo 'selected="selected"'; ?>>Solukhumbu</option>
                                <option value="Udaypur" <?php if($options=="Udaypur") echo 'selected="selected"'; ?>>Udaypur</option>
                                <option value="Saptari" <?php if($options=="Saptari") echo 'selected="selected"'; ?>>Saptari</option>
                                <option value="Siraha" <?php if($options=="Siraha") echo 'selected="selected"'; ?>>Siraha</option>
                                %{--Janakpur--}%
                                <option value="Dhanusa" <?php if($options=="Dhanusa") echo 'selected="selected"'; ?>>Dhanusa</option>
                                <option value="Mahottari" <?php if($options=="Mahottari") echo 'selected="selected"'; ?>>Mahottari</option>
                                <option value="Sarlahi" <?php if($options=="Sarlahi") echo 'selected="selected"'; ?>>Sarlahi</option>
                                <option value="Sindhuli" <?php if($options=="Sindhuli") echo 'selected="selected"'; ?>>Sindhuli</option>
                                <option value="Ramechhap" <?php if($options=="Ramechhap") echo 'selected="selected"'; ?>>Ramechhap</option>
                                <option value="Dolkha" <?php if($options=="Dolkha") echo 'selected="selected"'; ?>>Dolkha</option>
                                %{--Bagmati--}%
                                <option value="Sindhupalchauk" <?php if($options=="Sindhupalchauk") echo 'selected="selected"'; ?>>Sindhupalchauk</option>
                                <option value="Kavreplanchauk" <?php if($options=="Kavreplanchauk") echo 'selected="selected"'; ?>>Kavreplanchauk</option>
                                <option value="Lalitpur" <?php if($options=="Lalitpur") echo 'selected="selected"'; ?>>Lalitpur</option>
                                <option value="Bhaktapur" <?php if($options=="Bhaktapur") echo 'selected="selected"'; ?>>Bhaktapur</option>
                                <option value="Kathmandu" <?php if($options=="Kathmandu") echo 'selected="selected"'; ?>>Kathmandu</option>
                                <option value="Nuwakot" <?php if($options=="Nuwakot") echo 'selected="selected"'; ?>>Nuwakot</option>
                                <option value="Rasuwa" <?php if($options=="Rasuwa") echo 'selected="selected"'; ?>>Rasuwa</option>
                                <option value="Dhading" <?php if($options=="Dhading") echo 'selected="selected"'; ?>>Dhading</option>
                                %{--Narayani--}%
                                <option value="Makwanpur" <?php if($options=="Makwanpur") echo 'selected="selected"'; ?>>Makwanpur</option>
                                <option value="Rautahat" <?php if($options=="Rautahat") echo 'selected="selected"'; ?>>Rauthat</option>
                                <option value="Bara" <?php if($options=="Bara") echo 'selected="selected"'; ?>>Bara</option>
                                <option value="Parsa" <?php if($options=="Parsa") echo 'selected="selected"'; ?>>Parsa</option>
                                <option value="Chitwan" <?php if($options=="Chitwan") echo 'selected="selected"'; ?>>Chitwan</option>
                                %{--Gandaki--}%
                                <option value="Gorkha" <?php if($options=="Gorkha") echo 'selected="selected"'; ?>>Gorkha</option>
                                <option value="Lamjung" <?php if($options=="Lamjung") echo 'selected="selected"'; ?>>Lamjung</option>
                                <option value="Tanahun" <?php if($options=="Tanahun") echo 'selected="selected"'; ?>>Tanahun</option>
                                <option value="Syangja" <?php if($options=="Syangja") echo 'selected="selected"'; ?>>Syangja</option>
                                <option value="Kaski" <?php if($options=="Kaski") echo 'selected="selected"'; ?>>Kaski</option>
                                <option value="Manang" <?php if($options=="Manang") echo 'selected="selected"'; ?>>Manag</option>
                                %{--Dhawalagiri--}%
                                <option value="Mustang" <?php if($options=="Mustang") echo 'selected="selected"'; ?>>Mustang</option>
                                <option value="Parwat" <?php if($options=="Parwat") echo 'selected="selected"'; ?>>Parwat</option>
                                <option value="Myagdi" <?php if($options=="Myagdi") echo 'selected="selected"'; ?>>Myagdi</option>
                                <option value="Baglung" <?php if($options=="Baglung") echo 'selected="selected"'; ?>>Baglung</option>
                                %{--Lumbini--}%
                                <option value="Gulmi" <?php if($options=="Gulmi") echo 'selected="selected"'; ?>>Gulmi</option>
                                <option value="Palpa" <?php if($options=="Palpa") echo 'selected="selected"'; ?>>Palpa</option>
                                <option value="Nawalparasi" <?php if($options=="Nawalparasi") echo 'selected="selected"'; ?>>Nawalparasi</option>
                                <option value="Rupandehi" <?php if($options=="Rupandehi") echo 'selected="selected"'; ?>>Rupandehi</option>
                                <option value="Arghakhanchi" <?php if($options=="Arghakhanchi") echo 'selected="selected"'; ?>>Arghakhanchi</option>
                                <option value="Kapilvastu" <?php if($options=="Kapilvastu") echo 'selected="selected"'; ?>>Kapilvastu</option>
                                %{--Rapti--}%
                                <option value="Pyuthan" <?php if($options=="Pyuthan") echo 'selected="selected"'; ?>>Pyuthan</option>
                                <option value="Rolpa" <?php if($options=="Rolpa") echo 'selected="selected"'; ?>>Rolpa</option>
                                <option value="Rukum" <?php if($options=="Rukum") echo 'selected="selected"'; ?>>Rukum</option>
                                <option value="Salyan" <?php if($options=="Salyan") echo 'selected="selected"'; ?>>Salyan</option>
                                <option value="Dang" <?php if($options=="Dang") echo 'selected="selected"'; ?>>Dang</option>
                                %{--Bheri--}%
                                <option value="Bardiya" <?php if($options=="Bardiya") echo 'selected="selected"'; ?>>Bardiya</option>
                                <option value="Surkhet" <?php if($options=="Surkhet") echo 'selected="selected"'; ?>>Surkhet</option>
                                <option value="Dailekh" <?php if($options=="Dailekh") echo 'selected="selected"'; ?>>Dailekh</option>
                                <option value="Banke" <?php if($options=="Banke") echo 'selected="selected"'; ?>>Banke</option>
                                <option value="Jajarkot" <?php if($options=="jajarkot") echo 'selected="selected"'; ?>>Jajarkot</option>
                                %{--Karnali--}%
                                <option value="Dolpa" <?php if($options=="Dolpa") echo 'selected="selected"'; ?>>Dolpa</option>
                                <option value="Humla" <?php if($options=="Humla") echo 'selected="selected"'; ?>>Humla</option>
                                <option value="Kalikot" <?php if($options=="Kalikot") echo 'selected="selected"'; ?>>Kalikot</option>
                                <option value="Mugu" <?php if($options=="Mugu") echo 'selected="selected"'; ?>>Mugu</option>
                                <option value="Jumla" <?php if($options=="Jumla") echo 'selected="selected"'; ?>>Jumla</option>
                                %{--Seti--}%
                                <option value="Bajura" <?php if($options=="Bajura") echo 'selected="selected"'; ?>>Bajura</option>
                                <option value="Bajhang" <?php if($options=="Bajhang") echo 'selected="selected"'; ?>>Bajhang</option>
                                <option value="Achham" <?php if($options=="Achham") echo 'selected="selected"'; ?>>Achham</option>
                                <option value="Doti" <?php if($options=="Doti") echo 'selected="selected"'; ?>>Doti</option>
                                <option value="Kailali" <?php if($options=="Kailali") echo 'selected="selected"'; ?>>Kailali</option>
                                %{--Mahakali--}%
                                <option value="Kanchanpur" <?php if($options=="Kanchanpur") echo 'selected="selected"'; ?>>Kanchanpur</option>
                                <option value="Dadeldhura" <?php if($options=="Dadeldhura") echo 'selected="selected"'; ?>>Dadeldhura</option>
                                <option value="Baitadi" <?php if($options=="Baitadi") echo 'selected="selected"'; ?>>Baitadi</option>
                                <option value="Darchula" <?php if($options=="Darchula") echo 'selected="selected"'; ?>>Darchula</option>
                            </select>
            </div>
            <div class="form-group">
              <label for="city">City:</label>
              <input type="text" class="form-control" id="city" value="<?php echo $rows['city']; ?>" placeholder="Enter City" name="city">
            </div>
            <div class="form-group">
              <label for="vdc/municipality">VDC/Municipality:</label>
              <?php $options = $rows['vdc_municipality'];?>
              <select class="form-control" name="vdc_municipality">
                <option value="">--Select VDC/Municipality--</option>
                <option value="VDC" <?php if($options=="VDC") echo 'selected="selected"'; ?>>VDC</option>
                <option value="Municipality" <?php if($options=="Municipality") echo 'selected="selected"'; ?>>Municipality</option>
              </select>

            </div>
            <div class="form-group">
              <label for="ward_no">Ward No.:</label>
              <input type="text" class="form-control" id="ward_no" value="<?php echo $rows['ward_no']; ?>" placeholder="Enter Ward No." name="ward_no">
            </div>
            <div class="form-group">
              <label for="tole">Tole:</label>
              <input type="text" class="form-control" id="area_tole" value="<?php echo $rows['area_tole']; ?>" placeholder="Enter Tole" name="area_tole">
            </div>
            <div class="form-group">
              <label for="contact_no">Contact No.:</label>
              <input type="text" class="form-control" id="contact_no" value="<?php echo $rows['contact_no']; ?>" placeholder="Enter Contact No." name="contact_no">
            </div>
            <div class="form-group">
               <label for="property_type">Property Type:</label>
               <?php $options = $rows['property_type'];?>
                <select class="form-control" name="property_type">
                      <option value="">--Select Property Type--</option>
                      <option value="Full House Rent" <?php if($options=="Full House Rent") echo 'selected="selected"'; ?>>Full House Rent</option>
                      <option value="Flat Rent" <?php if($options=="Flat Rent") echo 'selected="selected"'; ?>>Flat Rent</option>
                      <option value="Room Rent" <?php if($options=="Room Rent") echo 'selected="selected"'; ?>>Room Rent</option>
                </select>
            </div>                      
            <div class="form-group">
                <label for="estimated_price">Estimated Price:</label>
                <input type="estimated_price" class="form-control" id="estimated_price" value="<?php echo $rows['estimated_price']; ?>" placeholder="Enter Estimated Price" name="estimated_price">
            </div>
                  <div class="form-group">
                    <label for="total_rooms">Total No. of Rooms:</label>
                    <input type="number" class="form-control" id="total_rooms" value="<?php echo $rows['total_rooms']; ?>" placeholder="Enter Total No. of Rooms" name="total_rooms">
                  </div>
                  <div class="form-group">
                    <label for="bedroom">No. of Bedroom:</label>
                    <input type="number" class="form-control" id="bedroom" value="<?php echo $rows['bedroom']; ?>" placeholder="Enter No. of Bedroom" name="bedroom">
                  </div>
                  <div class="form-group">
                    <label for="living_room">No. of Living Room:</label>
                    <input type="number" class="form-control" id="living_room" value="<?php echo $rows['living_room']; ?>" placeholder="Enter No. of Living Room" name="living_room">
                  </div>
                  <div class="form-group">
                    <label for="kitchen">No. of Kitchen:</label>
                    <input type="number" class="form-control" id="kitchen"  value="<?php echo $rows['kitchen']; ?>" placeholder="Enter No. of Kitchen" name="kitchen">
                  </div>
                  <div class="form-group">
                    <label for="bathroom">No. of Bathroom/Washroom:</label>
                    <input type="number" class="form-control" id="bathroom" value="<?php echo $rows['bathroom']; ?>" placeholder="Enter No. of Bathroom/Washroom" name="bathroom">
                  </div>
                  <div class="form-group">
                    <label for="description">Full Description:</label>
                    <textarea type="comment" class="form-control" id="description"   placeholder="Enter Property Description" name="description"><?php echo htmlspecialchars ($rows['description']); ?></textarea>
                  </div>
                  <hr>
                  <div class="form-group">
                  <input type="hidden" class="form-control" id="booked" value="<?php echo $rows['booked']; ?>"  name="booked">
                    <input onclick="return confirm('!!! Warning Are you sure Want to Update the Property ? ')" type="submit" class="btn btn-primary btn-lg col-lg-12" value="Update Property" name="update_property">
                  </div>
              </div>
              </form>
              <?php
          }}
          ?>
              <br><br>

    </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>



<div id="menu6" class="tab-pane fade">
      <center><h2 style="color:maroon ; text-transform:uppercase;">Booked Property</h2></center><br>

      <div class="container">

              <table id="myTable">
                <tr class="header">
                  <th>Booked By</th>
                  <th>Booker Email Address</th>
                  <th>Property Province</th>
                  <th>Property District</th>
                  <th>Property Zone</th>
                  <th>Property Ward No</th>
                  <th>Property Area Tole</th>
                  <th>Delete</th>
                </tr>

      <?php 
         $conn = db_connect();
            $u_email= $_SESSION['user']['user_email'];

        $sql3="SELECT * from admin_user where email='$u_email'";
            $result3=mysqli_query($conn,$sql3);

            if(mysqli_num_rows($result3)>0)
          {
              while($rowss=mysqli_fetch_assoc($result3)){
                $owner_id=$rowss['owner_id'];
                $booking_status = 'Yes';
                $sql2="SELECT * from property_list WHERE owner_id='$owner_id' AND booked='$booking_status'";
        $result2=mysqli_query($conn,$sql2);

        if(mysqli_num_rows($result2)>0)
      {
          while($ro=mysqli_fetch_assoc($result2)){
            $property_id=$ro['property_id'];

        $sql="SELECT * from booking where property_id='$property_id'";
        $result=mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)>0)
      {
          while($rows=mysqli_fetch_assoc($result)){
          
       ?>
                <tr>
                  
        <?php 
        $customer_id=$rows['customer_id'];
        $property_id=$rows['property_id'];
        $sql1="SELECT * from customer_user where customer_id='$customer_id'";
        $result1=mysqli_query($conn,$sql1);

        if(mysqli_num_rows($result1)>0)
      {
          while($row=mysqli_fetch_assoc($result1)){
          
       ?>


        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>



                  <td><?php echo $ro['province']; ?></td>
                  <td><?php echo $ro['district']; ?></td>
                  <td><?php echo $ro['zone']; ?></td>
                  <td><?php echo $ro['ward_no']; ?></td>
                  <td><?php echo $ro['area_tole']; ?></td>
                  <form method="POST" action="<?php echo $base_url ?>?r=deletebooking">                  
                  <td>
                  <input type="hidden" name="property_id" value="<?php echo $rows['property_id']; ?>">
                  <input onclick="return confirm('!!! Warning Are you sure Want to Delete the Booking ? ')" type="submit" class="btn btn-danger" name="delete_booking" value="Delete Booking">
                  </td>
          </form>
                </tr>
              <?php }}}}}}}} ?>
              </table> 
    </div>
    </div>

  </div>
</div>
        
<?php

}

?>
   
</body>
<script>
              function updateProperty() {
                var input, filter, table, tr, td, i, txtValue;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                table = document.getElementById("myTable");
                tr = table.getElementsByTagName("tr");
                th = table.getElementsByTagName("th");
                for (i = 1; i < tr.length; i++) {
                  tr[i].style.display = "none";
                    for(var j=0; j<th.length; j++){
                      td = tr[i].getElementsByTagName("td")[j];      
                      if (td) {
                        if (td.innerHTML.toUpperCase().indexOf(filter.toUpperCase()) > -1)
                        {
                          tr[i].style.display = "";
                          break;
                         }
                      }
                    }
                }
              }
              </script>



<script>
              function viewProperty() {
                var input, filter, table, tr, td, i, txtValue;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                table = document.getElementById("myTable");
                tr = table.getElementsByTagName("tr");
                th = table.getElementsByTagName("th");
                for (i = 1; i < tr.length; i++) {
                  tr[i].style.display = "none";
                    for(var j=0; j<th.length; j++){
                      td = tr[i].getElementsByTagName("td")[j];      
                      if (td) {
                        if (td.innerHTML.toUpperCase().indexOf(filter.toUpperCase()) > -1)
                        {
                          tr[i].style.display = "";
                          break;
                         }
                      }
                    }
                }
              }
              </script>
              <script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="file" name="p_photo[]" placeholder="Photos" class="form-control name_list" required accept="image/*" /></td></td> <td><button id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>'); 
      });  

                 



      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $('#submit').click(function(){            
           $.ajax({  
                url:"name.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                }  
           });  
      });  
 });  
 </script>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

<script>



  </script>
<br><br>
<?php 
include 'footer.php';
?>