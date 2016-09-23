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
    
    <div class="headings"> Events </div>
    	

    
    
    <div class="content">
   	
    		 <div class="add-product"><a href="add-event.php"> Add Event </a></div>
    		<div class="clear"> </div>
            
            <table width="701" border="0" align="center" cellpadding="6" cellspacing="0" class="table-styles">
      <tr>
        <th width="70">S.no</th>
        <th width="250">Event Name</th>
        <th width="263">Event Date</th>
        <th width="37">View</th>
        <th width="37">Edit</th>
        <th width="42">Delete</th>
      </tr>
      
    	<?php $events = mysql_query('select * from events'); 

   
				  $a=1;
				  while($view=mysql_fetch_array($events))
				  {
		?>
    
      <tr>
        <td width="70"><?php echo $a ?></td>
        <td width="229"><img src="../events/<?php echo $view['eimage']?>" align="left" width="24" height="24" /> <?php echo $view['ename']?></td>
        <td width="263"><?php echo ucwords ($view['edate'])?></td>
        <td width="37"><a  href="../view-events.php?id=<?php echo $view['id']; ?>" target="_blank"> View </a></td>
        <td width="37"><a  href="edit-events.php?id=<?php echo $view['id']; ?>" > Edit </a></td>
        <td width="42"><a href="delete-events.php?id=<?php echo $view['id']; ?>"onclick="return confirm('Are you sure?')" > Delete </a> </td>
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