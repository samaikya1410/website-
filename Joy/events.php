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

<div class="event-content">


<?php $select_db = mysql_query("select * from events order by id"); ?>   <?php
				  $a=1;
				  while( $view = mysql_fetch_array ($select_db))
				  {
				  ?>	
                <div class="evetns-list" style="height:auto;">
                		
                        <img src="events/<?php echo $view['eimage'];?>" align="left" />
                        
                        <span class="event-heading">
                         <a href="view-events.php?id=<?php  echo $view['id'];  ?>"> <?php echo $view['ename'] ?> </a> </span> <br />
                        <span class="event-date"> <?php  echo $view['edate'];  ?> </span> <br />
                        <span class="event-loc"> <?php  echo $view['eloc'];  ?> </span> <br />
                        
                        <span class="event-desc"> <?php  echo $view['edesc'];  ?> </span>
                        
                </div>

             <?php
				  $a++;
				  }				  
				  ?>


</div>

 
<?php include_once('inc/footer.php') ?>