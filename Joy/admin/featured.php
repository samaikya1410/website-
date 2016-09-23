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
    
    <div class="headings"> Gallery </div>
    	

    
    
    <div class="content">
   	
    		 <div class="add-product"><a href="add-featured.php"> Add Featured </a></div>
    		<div class="clear"> </div>
            
            <table width="398" border="0" align="center" cellpadding="6" cellspacing="0" class="table-styles">
      <tr>
        <th width="70">S.no</th>
        <th width="250">Image</th>
        <th width="42">Edit</th>
        <th width="42">Delete</th>
      </tr>
      
    	<?php $events = mysql_query('select * from featured'); 

   
				  $a=1;
				  while($view=mysql_fetch_array($events))
				  {
		?>
    
      <tr>
        <td width="70"><?php echo $a ?></td>
        <td width="229"><img src="../featured/<?php echo $view['image']?> " align="left" width="75" height="75" /> <br />          
        <?php echo $view['name']?></td>
         <td width="42"><a href="edit-featured.php?id=<?php echo $view['id']; ?>" > Edit </a> </td>
        <td width="42"><a href="delete-featured.php?id=<?php echo $view['id']; ?>"onclick="return confirm('Are you sure?')" > Delete </a> </td>
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