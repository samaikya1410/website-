<div class="right-content">

	<div class="headings"> Volunteers Voice </div>
    <div class="side-volunteers">
       <?php $select_vv = mysql_query("select * from vv order by id  DESC limit 1"); ?>   <?php
				  $a=1;
				  while( $vv = mysql_fetch_array ($select_vv))
				  {
					  
					  ?>
                       <img src="volunteers/<?php  echo $vv['image'];  ?> " align="left" width="80" height="80" style="margin-right:5px; margin-bottom:5px;" />
                      
     <div class="side-content">
     	<?php  echo  substr($vv['message'],0,150); ?>
     </div>
     <?php
	 		$a++;
				  }
	 ?>
    </div>
    
    <br />
	 <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fjoyofsharing.kids&amp;width&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=1426482200903176" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:290px;" allowTransparency="true"></iframe>

</div>
<div class="clear"> </div>