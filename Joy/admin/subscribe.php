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
    
    <div class="headings"> Subscribers </div>
    	

    
    
    <div class="content">
    	
        
       	<table width="398" border="0" align="center" cellpadding="6" cellspacing="0" class="table-styles">
        	  <tr>
        	    <th width="70">S.no</th>
        	    <th width="250">Email</th>
        	    <th width="42">Delete</th>
      	    </tr>
        	 <?php $email = mysql_query('select * from subscribe'); 

   
				  $a=1;
				  while($view=mysql_fetch_array($email))
				  {
		?>
        	  <tr>
        	    <td width="70"><?php echo $a ?></td>
        	    <td width="229"><?php echo $view['email']?></td>
        	    <td width="42"><a href="delete-email.php?id=<?php echo $view['id']; ?>"onclick="return confirm('Are you sure?')" > Delete </a></td>
      	    </tr>
        	  <?php
			$a++;
			 }
		?>
   	  </table>
		
    </div>

	
<?php include('inc/footer.php'); ?>    