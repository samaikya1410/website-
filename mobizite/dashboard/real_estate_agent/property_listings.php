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

if(isset($_POST['property_listings'])){
$prop_name=$_POST['property_name'];
$prop_price = $_POST['property_price'];	

$prop_imagename=$_FILES['property_image']['name'];
$prop_imagetype=$_FILES['property_image']['type'];
$prop_imagesize=$_FILES['property_image']['size'];
$prop_imagetmp=$_FILES['property_image']['tmp_name'];
$path=$prop_name."-".$prop_imagename;

$prop_desc = $_POST['property_description'];
$prop_details = $_POST['property_details']; 

$insert = mysql_query("INSERT INTO reprop(prop_name,prop_price,prop_image,prop_desc,prop_details) 
VALUES  ('$prop_name','$prop_price','$path','$prop_desc','$prop_details' ) ");


 if($insert){
			 echo "<div align='center'>Successfully Uploaded</div>";
				 move_uploaded_file($prop_imagetmp,"upload_images_prop/$path");	
		 }else
		 {
			 echo 'not updated';
		 }


}


?>

<div class="container">
<div class="col-lg-8 col-lg-offset-2">	
<ul class="nav nav-pills nav-justified">
  <li><a href="home.php">Home</a></li>
  <li class="active"><a href="property_listings.php">Property Listings</a></li>
  <li><a href="successful_deals.php">Successful Deals</a></li>
</ul>
</div>
<div class="col-lg-12"><hr></div>
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
  <li class="active"><a href="#property_listings" role="tab" data-toggle="tab">Property Listings</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="client_details">
  			<form method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="form-group">
                  <label for="property_name" class="col-sm-2  col-lg-3 control-label">Property Name*</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="text" name="property_name" class="form-control" id="property_name" placeholder="" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="property_price" class="col-sm-2  col-lg-3 control-label">Property Price*</label>
                  <div class="col-sm-10 col-lg-9">
                    <input name="property_price" type="text" class="form-control" id="property_price" placeholder="" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-lg-3 control-label">Property Image*</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="file" name="property_image" value="upload image" class="" id="property_image" placeholder="" required accept="image" >	<br>
                  <!-- <button class="btn btn-default">Add more Images</button> -->  
                 </div>
                </div>
                <div class="form-group">
                  <label for="property_description" class="col-sm-2  col-lg-3 control-label">Property Description*</label>
                  <div class="col-sm-10 col-lg-9">
                    <textarea name="property_description" class="form-control" id="property_description" placeholder="" required></textarea>
                  </div>
                </div>   
                <div class="form-group">
                  <label for="property_details" class="col-sm-2  col-lg-3 control-label">Property Details</label>
                  <div class="col-sm-10 col-lg-9">
                    <textarea name="property_details" type="text" class="form-control" id="property_details" placeholder="" required></textarea>
                  </div>
                </div>
                
              <!--  <div class="form-group">
    			<div class="col-sm-offset-2 col-sm-10">
      			<button type="submit" class="btn btn-default">Add more Properties</button>  
    			</div>
 				</div> -->
                <div class="form-group">
    			<div class="col-sm-offset-2 col-sm-10">
      			<button type="submit" name="property_listings" class="btn btn-default">Submit</button>  
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