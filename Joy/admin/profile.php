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
    
    <div class="headings"> Welcome Admin </div>
    	

    
    
    <div class="content">
    	Welcome to Admin Panel 
    </div>

	
<?php include('inc/footer.php'); ?>    