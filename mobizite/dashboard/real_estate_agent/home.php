<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome</title>
</head>
<link href="../../css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../../css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="styles/index.css">
<body>

<?php
include_once("db.php");

if(isset($_POST['client_details'])){
$client_name=$_POST['client_name'];	

$client_imagename=$_FILES['client_image']['name'];
$client_imagetype=$_FILES['client_image']['type'];
$client_imagesize=$_FILES['client_image']['size'];
$client_imagetmp=$_FILES['client_image']['tmp_name'];
$path=$client_name."-".$client_imagename;

$client_email = $_POST['client_email'];
$client_phone = $_POST['client_phone'];
$client_languages=$_POST['client_languages'];
$client_location = $_POST['client_location'];
$client_street = $_POST['client_street'];
$client_city = $_POST['client_city'];
$client_state = $_POST['client_state'];
$client_pincode = $_POST['client_pincode'];
$client_license = $_POST['client_license'];
$linked_in = $_POST['linked_in'];
$google_plus = $_POST['google_plus'];
$fb = $_POST['fb'];
$twitter = $_POST['twitter'];	
$client_biography=$_POST['client_biography'];		

 
 
$insert = mysql_query("INSERT INTO rehome(client_name, client_image, client_email, client_phone, client_languages,client_location, client_street, client_city, client_state, client_pincode,client_license, linked_in, fb, google_plus, twitter,client_biography) VALUES  ('$client_name', '$path', '$client_email', '$client_phone', '$client_languages', '$client_location', '$client_street', '$client_city', '$client_state', '$client_pincode', '$client_license', '$linked_in', '$google_plus', '$fb', '$twitter','$client_biography' ) ");



		 if($insert){
			 echo "<div align='center'>Successfully Uploaded</div>";
				 move_uploaded_file($client_imagetmp,"upload_images/$path");	
		 }else
		 {
			 echo 'not updated';
		 }
}
?>


<div class="container">
<div class="col-lg-8 col-lg-offset-2">	
<ul class="nav nav-pills nav-justified">
  <li class="active"><a href="home.php">Home</a></li>
  <li><a href="property_listings.php">Property Listings</a></li>
  <li><a href="successful_deals.php">Successful Deals</a></li>
</ul>
</div>
<div class="col-lg-12"><hr></div>
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
  <li class="active"><a href="#client_details" role="tab" data-toggle="tab">Client Details</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="client_details">
  			<form method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="form-group">
                  <label for="client_name" class="col-sm-2  col-lg-3 control-label">Your Name*</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="text" name="client_name" class="form-control" id="client_name" placeholder="" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-lg-3 control-label">Your Image*</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="file" name="client_image" value="upload image" class="" id="client_image" placeholder="" required accept="image" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="client_phone" class="col-sm-2 col-lg-3 control-label">Phone*</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="tel" name="client_phone" class="form-control" id="client_phone" placeholder="" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="client_email" class="col-sm-2 col-lg-3 control-label">Email*</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="email" name="client_email" class="form-control" id="client_email" placeholder="" required>
                  </div>
                </div>     
                <div class="form-group">
                  <label for="client_languages" class="col-sm-2  col-lg-3 control-label">Languages you are comfortable with*</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="text" name="client_languages" class="form-control" id="client_languages" placeholder="" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="client_location" class="col-sm-2 col-lg-3 control-label">Address*</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="text" name="client_location" class="form-control" id="client_location" placeholder="location" required>
                    <br>
                    <input type="text" name="client_street" class="form-control" id="client_street" placeholder="street" required>
                    <br>
                    <input type="text" name="client_city" class="form-control" id="client_city" placeholder="city" required>
                    <br>
                    <input type="text" name="client_state" class="form-control" id="client_state" placeholder="state" required>
                    <br>
                    <input type="text" name="client_pincode" class="form-control" id="client_pincode" placeholder="PIN Code" required>
                    <br>
                  </div>
                </div>
                <div class="form-group">
                  <label for="client_license" class="col-sm-2  col-lg-3 control-label">Your License Number*</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="text" name="client_license" class="form-control" id="client_license" placeholder="" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="linked_in" class="col-sm-2 col-lg-3 control-label">Social Network Links</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="text" name="linked_in" class="form-control" id="linked_in" placeholder="link for linkedin page" required>
                    <br>
                    <input type="text" name="google_plus" class="form-control" id="google_plus" placeholder="link for google+ page" required>
                    <br>
                    <input type="text" name="fb" class="form-control" id="fb" placeholder="link for fb page" required>
                    <br>
                    <input type="text" name="twitter" class="form-control" id="twitter" placeholder="link for twitter page" required>
                    <br>
                  </div>
                </div>
                <div class="form-group">
                  <label for="client_biography" class="col-sm-2  col-lg-3 control-label">Your Biography*</label>
                  <div class="col-sm-10 col-lg-9">
                    <textarea name="client_biography" class="form-control" id="client_biography" placeholder="" required></textarea>
                  </div>
                </div>
                <div class="form-group">
    			<div class="col-sm-offset-2 col-sm-10">
      			<button type="submit" name="client_details" class="btn btn-default">Submit</button>  
    			</div>
 				</div>
              </form>
  </div>
</div>

</div>

<script src="../../js/jquery-1.11.1.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--<script>
$('.nav-pills').children('li :nth-child(0)').addClass('active');
</script>-->

</body>
</html>