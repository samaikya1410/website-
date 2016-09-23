<?php
error_reporting(0);
session_start();
include("db/inc.php");
$admin_id=$_SESSION['admin'];
if($admin_id ) {
	echo "<script>location.href='subscribe.php'</script>";
}
?>
<?php include('inc/header.php'); ?>



<div class="headings"> Welcome Admin </div>
	<?php
			  if(isset($_POST['login'])){
				  $admin_id=$_REQUEST['username'];
				  $password=$_REQUEST['password'];
				  $select=mysql_query("select * from admin where username='$admin_id' and password='$password'");
			 	  $rows=mysql_num_rows($select);
			  
			  if($rows==1)
			  	{
					
				  $_SESSION['admin']=$admin_id;
				  echo "<script>location.href='subscribe.php'</script>";
				 
				  }
				  else{
				  echo "<div align='center'>"."Incorrect Username / Password"."</div>";
				  }
				  }
			  
			  ?>

    <form action="" method="post" enctype="multipart/form-data"> 
	<div class="login">
    	User Name: <br />
    	<input type="text" name="username"/>
        <br />
        Password: <br />
    	<input type="password" name="password"/>
        <br />
        
        
        <input type="submit" name="login" value="Login" /> 
    </div>
    </form>
<?php include('inc/footer.php'); ?>    