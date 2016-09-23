<?php
include_once 'include/header.php';
?>
<?php
mysql_connect("localhost","root","");
mysql_select_db("mobizite");

echo mysql_error();

if(isset($_POST['submit'])){
	$first = $_POST['name'];
	$last = $_POST['description'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	
	mysql_query("INSERT INTO users(firstname, lastname, email, password) VALUES ('$first', '$last', '$email', '$password')");
}

?>
<div class="container">
<form class="form-horizontal" method="post">                
					<div class="form-group">
                  <label for="company-name" class="col-sm-2  col-lg-3 control-label">firstname*</label>
                  <div class="col-sm-10 col-lg-9">

                    <input type="text" name='name' class="form-control" id="company-name" placeholder="" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="company-description" class="col-sm-2  col-lg-3 control-label">lastname*</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="text" name='description' class="form-control" id="company-description" placeholder="" required>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="company-password" class="col-sm-2  col-lg-3 control-label">password*</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="text" name='password' class="form-control" id="company-password" placeholder="" required>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="company-email" class="col-sm-2  col-lg-3 control-label">email*</label>
                  <div class="col-sm-10 col-lg-9">
                    <input type="email" name='email' class="form-control" id="company-email" placeholder="" required>
                  </div>
                </div>
                <div class="form-group">
                  
                  <div class="col-lg-12">
                    <button type="submit" name='submit'>submit</button>
                  </div>
                </div>
     </form> 
     </div>   
<?php
include_once 'include/footer.php';
?>
