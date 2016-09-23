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



<?php $select_db = mysql_query("select * from gallery_cat"); ?>   <?php
				  $a=1;
				  while( $view = mysql_fetch_array ($select_db))
				  {
				  ?>
           <div class="gallery-box">        
	         <a href="view-gallery.php?id=<?php echo $view['id'];  ?>">
			<img src="gallery/default.jpg" />
			<?php echo $view['cat_name']; ?> </a> <br />
          </div>
            <?php
             $a++;
				  }	
				  
			?>
</div>
</div>

<?php include_once('inc/sidebar.php') ?> 
<?php include_once('inc/footer.php') ?> 