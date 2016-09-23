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
    
    <div class="headings"> Register Event</div>
    	

    
    
    <div class="content">
   	
    	<!--	 <div class="add-product"><a href="add-event.php"> Add Event </a></div> -->
    		<div class="clear"> </div>
            
            <table width="701" border="0" align="center" cellpadding="6" cellspacing="0" class="table-styles">
      <tr>
        <th width="61">S.no</th>
        <th width="107">Name</th>
        <th width="141">Email</th>
        <th width="112">Phone</th>
        <th width="97">Event</th>
        <th width="111">Date</th>
      </tr>
      
    	<?php $events = mysql_query('select * from regevent'); 

   
				  $a=1;
				  while($view=mysql_fetch_array($events))
				  {
		?>
    
      <tr>
        <td width="61"><?php echo $a ?></td>
        <td width="107"><?php echo ucwords ($view['name'])?></td>
        <td width="141"><?php echo ucwords ($view['email'])?></td>
        <td width="112"><?php echo ucwords ($view['phone'])?></td>
        <td width="97"><?php echo ucwords ($view['event'])?></td>
        <td width="111"><?php echo ucwords ($view['date'])?></td>
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