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
    
    <div class="headings"> Volunteers </div>
    	

    
    
    <div class="content">
   	
    	<!--	 <div class="add-product"><a href="add-event.php"> Add Event </a></div> -->
    		<div class="clear"> </div>
            
            <table width="701" border="0" align="center" cellpadding="6" cellspacing="0" class="table-styles">
      <tr>
        <th width="70">S.no</th>
        <th width="165">Name</th>
        <th width="194">Email</th>
        <th width="119">Phone</th>
        <th width="93">City</th>
        <th width="93">Qualification</th>
      </tr>
      
    	<?php $events = mysql_query('select * from volunteers'); 

   
				  $a=1;
				  while($view=mysql_fetch_array($events))
				  {
		?>
    
      <tr>
        <td width="70"><?php echo $a ?></td>
        <td width="165"><?php echo ucwords ($view['name'])?></td>
        <td width="194"><?php echo ucwords ($view['email'])?></td>
        <td width="119"><?php echo ucwords ($view['phone'])?></td>
        <td width="93"><?php echo ucwords ($view['city'])?></td>
        <td width="93"><?php echo ucwords ($view['qualification'])?></td>
      </tr>
    
      <?php
			$a++;
			 }
		?>
        
      
     
    </table>
    
     <?php
	  if(isset($_REQUEST['delete'])) {
		  $id = $_GET['id'];
		echo $id;
	  }
	  
	  
	  ?>
    </div>

	
<?php include('inc/footer.php'); ?>    