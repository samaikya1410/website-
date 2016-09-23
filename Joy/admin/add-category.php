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
			 
			  $insert=mysql_query("INSERT INTO gallery_cat (cat_name) VALUES ('$name')");
			
				if($insert)
					  {
					  echo "<div align='center'>Created Category Successfully</div>";
					  
					  }	  
					   }
	
		?>
    
    <div class="content">
   		<form action="" method="post" name="validate" enctype="multipart/form-data" >
    		<table width="50%" align="center" border="0" cellspacing="0" cellpadding="5">
              <tr>
                <td width="20%">Category Name</td>
                <td><input type="text" name="name"  /></td>
              </tr>
              
              <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="submit" value="Submit" /></td>
              </tr>
            </table>
</form>
        <hr /> 
   <table width="300" align="center">     
        <?php $events = mysql_query('select * from gallery_cat'); 

   
				  $a=1;
				  while($view=mysql_fetch_array($events))
				  {
		?>
    
      <tr>
        <td width="70"><?php echo $a ?></td>
        <td width="229">  <?php echo $view['cat_name']?> </td>
        
        <td width="42"><a href="delete-gallery-cat.php?id=<?php echo $view['id']; ?>"onclick="return confirm('Are you sure?')" > Delete </a> </td>
      </tr>
    
      <?php
			$a++;
			 }
			 
		?>
       </table>
            
    </div>

	
<?php include('inc/footer.php'); ?>    