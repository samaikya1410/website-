<?php
	include("admin/db/inc.php");
 		error_reporting(0);
 ?>
<?php include_once('inc/header.php') ?> 
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="js/slideshow.js"> </script>

<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});

	
</script>
<link rel="stylesheet" href="fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<div class="nav">
        
        	<ul>
            	<li> <a href="index.php" > Home</a> </li>
                <li> <a href="about.php"> About U</a> </li>
                <li> <a href="events.php"> Events</a> </li>
                <li> <a href="volunteers.php"> Volunteers</a> </li>
                <li> <a href="gallery.php" class="nav-active"> Gallery</a> </li>
                <li> <a href="contact.php"> Contact</a> </li>
            </ul>
        
</div>
<div class="page-image">
</div>

<div class="left-content">
<div class="gallery">




<?php 
$id=$_GET['id'];
$select_cat = mysql_query("select * from gallery_cat where id='$id'"); 
$select_db = mysql_query("select * from gallery where id='$id'"); 

$num_rows = mysql_num_rows($select_db);
		if($num_rows > 0)
		{
		 
		}else
		{
		  echo "<script>location.href='gallery.php'</script>";
		}
		
		
		$view_cat = mysql_fetch_array ($select_cat)
?>  

<div class="headings"> <?php  echo $view_cat['cat_name'];  ?> </div>

<div align="right"><a href="gallery.php" style="color:#000; font-weight:bold;">  Back To Gallery </a> </div>
 
<?php
				  $a=1;
				  while( $view = mysql_fetch_array ($select_db))
				  {
				  ?>
                 
			<a class="fancybox" rel="group" href="gallery/<?php  echo $view['image'];  ?>" title="<?php  echo $view['name'];  ?>"><img src="gallery/<?php  echo $view['image'];  ?>"  alt="<?php  echo $view['name'];  ?>" /></a>

            
            <?php
			 $a++;			 
				  }	
			?>
</div>
</div>

<?php include_once('inc/sidebar.php') ?> 
<?php include_once('inc/footer.php') ?> 