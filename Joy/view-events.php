<?php
	include("admin/db/inc.php");
 		error_reporting(0);

 ?>
<?php include_once('inc/header.php') ?> 


<div class="nav">
        
        	<ul>
            	<li> <a href="index.php"> Home</a> </li>
                <li> <a href="about.php" > About U</a> </li>
                <li> <a href="events.php"  class="nav-active"> Events</a> </li>
                <li> <a href="volunteers.php"> Volunteers</a> </li>
                <li> <a href="gallery.php"> Gallery</a> </li>
                <li> <a href="contact.php"> Contact</a> </li>
            </ul>
        
        </div> 
<div class="page-image">
</div>

<div class="left-content">


 <?php 
 
 
		$id=$_GET['id'];
		$select_db = mysql_query("select * from events where id='$id'");
		$view = mysql_fetch_array ($select_db);
		$num_rows = mysql_num_rows($select_db);
		if($num_rows > 0)
		{
		 
		}else
		{
		  echo "<script>location.href='events.php'</script>";
		}
	?>
    
    
     <div class="headings">  <?php echo $view['ename'] ?> </div>
     <div class="event-date">  <?php echo $view['edate'] ?> </div> 
     <div class="event-loc">  <?php echo $view['eloc'] ?> </div> 
     <img src="events/<?php echo $view['eimage'] ?> " height="200" />
     <br />
     <div>   <?php echo $view['edesc'] ?> </div>
        	  


</div>

<?php include_once('inc/sidebar.php') ?>

 
<?php include_once('inc/footer.php') ?>