
<?php
	include_once 'include/header.php';
	include_once("include/db.php");
	 

session_start();
$servcies_login=$_SESSION['user'];
if($servcies_login ) {
	echo "<script>location.href='dashboard/dashboard.php'</script>";
}

			  if(isset($_POST['login'])){
				  $email=$_REQUEST['email'];
				  $password=$_REQUEST['password'];
				  $select=mysql_query("select * from users where email='$email' and password='$password'");
			 	  $rows=mysql_num_rows($select);
			  
			  if($rows==1)
			  	{
					
				  $_SESSION['user']=$email;
				  echo "<script>location.href='dashboard/dashboard.php'</script>";
				 
				  }
				  else{
				  echo "<div align='center'>"."Incorrect Username / Password"."</div>";
				  }
				  }
			  
			  ?>

	<div class="container">
    <br>
    	<h4 align="center">Sign In</h4>
        <br>
    	<form class="form-horizontal" role="form" method="post">
  		<div class="form-group">
    	<label for="inputEmail1" class="col-sm-4 control-label">Email<font style="font-size:18px; color:red">*</font></label>
    	<div class="col-sm-6">
      	<input type="email" name="email" class="form-control" id="inputEmail1" placeholder="Type Your Email Address" required>
    	</div>
  		</div>
  		<div class="form-group">
    	<label for="inputPassword1" class="col-sm-4 control-label">Password<font style="font-size:18px; color:red">*</font></label>
    	<div class="col-sm-6">
      	<input type="password" name="password" class="form-control" id="inputPassword1" placeholder="Type Your Password" required>
    	</div>
  		</div>
  		
  		<div class="form-group">
    	<div class="col-sm-offset-4 col-sm-6">
      	<button type="submit" class="btn btn-default" name="login">Sign in</button>
    	</div>
  		</div>
		</form>
    
    </div>


<?php 
	include_once 'include/footer.php';
	?>