<?php
session_start();
include("db/inc.php");
$admin_id=$_SESSION['admin'];
if($admin_id=="" ) {
	echo "<script>location.href='index.php'</script>";
}
?>

<?php include('inc/header.php'); ?>



<?php include('inc/admin-navigation.php'); ?>


    
    <div class="headings"> Add Images </div>
    	

    <?php
        
			 if(isset($_POST['submit']))
			  {
			  $name=$_POST['name'];
			  $message=$_POST['message'];
			  $filename=$_FILES['photo']['name'];
	    	  $filetype=$_FILES['photo']['type'];
			  $filesize=$_FILES['photo']['size'];
			  $filetmp=$_FILES['photo']['tmp_name'];
			  $path=$name."-".$filename;
			  $insert=mysql_query("INSERT INTO vv (image, name,message) VALUES ('$path','$name','$message')");
			
				if($insert)
					  {
					  echo "<div align='center'>Successfully Uploaded</div>";
					  move_uploaded_file($filetmp,"../volunteers/$path");
					  }	  
					   }
	
		?>
    
    <div class="content">
   		<form action="" method="post" name="validate" enctype="multipart/form-data" onSubmit="return validateFileExtension(this.photo)">
    		<table width="50%" align="center" border="0" cellspacing="0" cellpadding="5">
              <tr>
                <td width="20%">Name</td>
                <td><input type="text" name="name"  /></td>
              </tr>
              <tr>
                <td>Image</td>
                <td><input type="file" name="photo"  onchange="return validateFileExtension(this)"/></td>
              </tr>
              <tr>
                <td>Message</td>
                <td><textarea name="message" id="message"> </textarea></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="submit" value="Submit" /></td>
              </tr>
            </table>
</form>
            
    </div>

	
<?php include('inc/footer.php'); ?>    