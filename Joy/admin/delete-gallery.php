<?php
session_start();
include("db/inc.php");
$admin_id=$_SESSION['admin'];
if($admin_id=="" ) {
	echo "<script>location.href='index.php'</script>";
}
?>

<?php
$id=$_GET['id'];
$query=mysql_query("select * from gallery where id='$id'");
$view=mysql_fetch_array($query);

	$delete=mysql_query("DELETE FROM gallery WHERE id=$id");
	echo "<script>location.href='gallery.php'</script>";
?>