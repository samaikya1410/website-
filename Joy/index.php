<?php
	include("admin/db/inc.php");
 		error_reporting(0);
 ?>
     <?php include_once('inc/header.php') ?> 

<script>

function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
</script>

<title>Joy Of Sharing</title>
</head>

<body>     
      <?php
        
			 if(isset($_POST['submit']))
			  {
			  $name=$_POST['name'];
			  $email=$_POST['email'];
			  $phone=$_POST['phone'];
			  $event=$_POST['event'];
			  $date=$_POST['date'];
			
			  $insert=mysql_query("INSERT INTO regevent(name, email, phone, event, date) VALUES ('$name','$email','$phone','$event','$date')");
			
			
			$message= "Dear $name Thanks For Registering. Joy Of Sharing Team Will Be Contacted Shortly. ";
		   
		$to = "$email";
		$subject = "Mail From Joy Of Sharing";
		$from = "naveen305@gmail.com"; 
		$headers = "From:" . $from;
		$res = mail($to,$subject,$message,$headers);
		
	}
		?>    
        
        <?php
        
			 if(isset($_POST['newssubmit']))
			  {

			  $subemail=$_POST['subemail'];
	
			  $insert=mysql_query("INSERT INTO subscribe(email) VALUES ('$subemail')");
			
			
			$message= "Dear $subemail Thanks For Registering. Joy Of Sharing Team Will Be Contacted Shortly. ";
		   
		$to = "$subemail";
		$subject = "Mail From Joy Of Sharing";
		$from = "naveen305@gmail.com"; 
		$headers = "From:" . $from;
		$res = mail($to,$subject,$message,$headers);
		
	}
		?>      
        
        <div class="nav">
        
        	<ul>
            	<li> <a href="index.php" class="nav-active"> Home</a> </li>
                <li> <a href="about.php"> About U</a> </li>
                <li> <a href="events.php"> Events</a> </li>
                <li> <a href="volunteers.php"> Volunteers</a> </li>
                <li> <a href="gallery.php"> Gallery</a> </li>
                <li> <a href="contact.php"> Contact</a> </li>
            </ul>
        
        </div>
        
        <div class="slider" id="slideshow">
        	<img src="slides/slide-1.jpg" class="active" />
            <img src="slides/slide-2.jpg"/>
            <img src="slides/slide-3.jpg"/>
    </div>
        
        <div class="highlights">
        <?php $select_featured = mysql_query("select * from featured order by id  DESC limit 1"); ?>   <?php
				  $c=1;
				  while( $featured = mysql_fetch_array ($select_featured))
				  {
				  ?>	
        	
            	<img src="featured/<?php echo $featured['image'];?>" align="left" />
                
                <div class="test-heading"> <?php echo $featured['name'];?></div>
                <div class="test-info"> <?php echo $featured['message'];?> </div>
            <?php
				  $c++;
				  }				  
				  ?>
        
        </div>
        
        <div class="col3">
        
        	<div class="col">

            
            <h1> Events </h1>
              <?php $select_db = mysql_query("select * from events order by id  DESC limit 4"); ?>   <?php
				  $a=1;
				  while( $view = mysql_fetch_array ($select_db))
				  {
				  ?>	
                <div class="evetns-list">
                		
                        <img src="events/<?php echo $view['eimage'];?>" align="left" />
                        
                        <span class="event-heading">
                         <a href="view-events.php?id=<?php  echo $view['id'];  ?>"> <?php echo $view['ename'] ?> </a> </span> <br />
                        <span class="event-date"> <?php  echo $view['edate'];  ?> </span> <br />
                        <span class="event-loc"> <?php  echo $view['eloc'];  ?> </span>
                        
                </div>

             <?php
				  $a++;
				  }				  
				  ?>
                <div class="view">
                <a href="events.php" >View All Events </a>
                </div>
                
            </div>
        	
            <div class="col">
            
            	 <h1> Volunteer Voice </h1>
                  <?php $select_vv = mysql_query("select * from vv order by id  DESC limit 1"); ?>   <?php
				  $a=1;
				  while( $vv = mysql_fetch_array ($select_vv))
				  {
					  
					  ?>
                 
                <div class="vol-list">
                		
                        <img src="volunteers/<?php  echo $vv['image'];  ?> " align="left" />
                        
                        <span class="vol-heading"><a href="#"> <?php  echo $vv['name'];  ?>  </a> </span> <br />
                        <p class="vol-text"> <?php  echo  substr($vv['message'],0,150); ?> <br /> 
                         <input type="button" id="opener" value="Read More" />
                         </p> 
                </div>
                
                  <div id="dialog" title="Volunteers Voice">
                  <img src="volunteers/<?php  echo $vv['image'];  ?>" width="150" height="150" /> <br />
                  <p>  <?php  echo $vv['message'];  ?> </p> 
                                 
                </div>
                 <?php
				  $a++;
				  }	
		
				  ?>
        
                <br />
                
              <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fjoyofsharing.kids&amp;width&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=1426482200903176" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:290px;" allowTransparency="true"></iframe>
    
            </div>
            
           
            
            <div class="col">

           	  <h1> Register for an Event </h1>
                  
                    <p> <?php 
                    if($insert)
					  {
					  echo "<script> alert('Registered Successfully'); </script>";
					  }	 
                    ?></p>
              <form action="" method="post" enctype="multipart/form-data"> 
                <table width="100%" border="0" cellspacing="0" cellpadding="5">
                  <tr>
                    <td width="24%">Name</td>
                    <td width="76%"><input type="text" name="name" id="name" /></td>
                  </tr>
                  <tr>
                    <td width="24%">Email</td>
                    <td width="76%"><input type="text" name="email" id="email" /></td>
                  </tr>
                  <tr>
                    <td width="24%">Phone</td>
                    <td width="76%"><input type="text" name="phone" id="phone" /></td>
                  </tr>
                  <tr>
                    <td width="24%">Event</td>
                    <td width="76%"><input type="text" name="event" id="event" /></td>
                  </tr>
                  <tr>
                    <td width="24%">Date</td>
                    <td width="76%"><input id="datepicker" type="text" name="date"  /></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td align="right"><label>
                      <input name="submit" type="submit" onClick="MM_validateForm('name','','R','email','','RisEmail','phone','','RisNum','event','','R','datepicker','','R');return document.MM_returnValue" value="Submit" />
                    </label></td>
                  </tr>
                </table>
              </form>
		<hr />
        <p> <?php 
                    if($subinsert)
					  {
					  echo "<script> alert('Registered Successfully'); </script>";
					  }	 
                    ?></p>
        <form action="" method="post" enctype="multipart/form-data">
                 <table width="100%" border="0" cellspacing="0" cellpadding="5">
              <tr>
                <td colspan="2"><b> Subscribe to  News Letter </b></td>
                </tr>
              <tr>
                <td width="24%">Email</td>
                <td><input name="subemail" type="text" id="Subscribe-Email"  /></td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td><input name="newssubmit" type="submit" onClick="MM_validateForm('Subscribe-Email','','R');return document.MM_returnValue" value="Register" /></td>
              </tr>
              </table>
		</form>
            
            </div>
            
            <div class="clear"></div>
            
        </div>
        
       <?php include_once('inc/footer.php') ?>