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


	
    

      
        
        
       
<div class="headings">Products</div>
    
    
    <div class="add-product"><a href="add-product.php"> Add Product </a></div>
    <div class="clear"> </div>

      <table width="701" border="0" align="center" cellpadding="6" cellspacing="0" class="table-styles">
      <tr>
        <th width="70">S.no</th>
        <th width="250">Product</th>
        <th width="263">Title</th>
        <th width="37">View</th>
        <th width="42">Delete</th>
      </tr>
      
    	<?php $product = mysql_query('select * from products'); 

   
				  $a=1;
				  while($view=mysql_fetch_array($product))
				  {
		?>
    
      <tr>
        <td width="70"><?php echo $a ?></td>
        <td width="229"><img src="../products/<?php echo $view['image']?>" align="left" width="24" height="24" /> <?php echo $view['title']?></td>
        <td width="263"><?php echo ucwords ($view['subtitle'])?></td>
        <td width="37"><a  href="../view-products.php?id=<?php echo $view['id']; ?>"> View </a></td>
        <td width="42"><a href="delete-products.php?id=<?php echo $view['id']; ?>"onclick="return confirm('Are you sure?')" > Delete </a> </td>
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
      

	
    
   

	
<?php include('inc/footer.php'); ?>    