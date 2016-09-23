<?php
	include("admin/db/inc.php");
 		error_reporting(0);

 ?>

<?php include_once('inc/header.php') ?> 
<?php
        
			 if(isset($_POST['submit']))
			  {
			  $name=$_POST['name'];
			  $email=$_POST['email'];
			  $phone=$_POST['phone'];
			  $city=$_POST['city'];
			  $qualification=$_POST['qualification'];
			
			  $insert=mysql_query("INSERT INTO volunteers(name, email, phone, city, qualification) VALUES ('$name','$email','$phone','$city','$qualification')");
			}
			
			$message= "Dear $name Thanks For Registering. Joy Of Sharing Team Will Be Contacted Shortly. ";
		   
		$to = "$email";
		$subject = "Mail From Joy Of Sharing";
		$from = "contact@joyofsharing.com"; 
		$headers = "From:" . $from;
		$res = mail($to,$subject,$message,$headers);
		
	
		?>
    
<script type="text/javascript">
<!--
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
//-->
</script>
</head>

<body>

	
<div class="nav">
        
        	<ul>
            	<li> <a href="index.php"> Home</a> </li>
                <li> <a href="about.php" > About U</a> </li>
                <li> <a href="events.php"> Events</a> </li>
                <li> <a href="volunteers.php"   class="nav-active"> Volunteers</a> </li>
                <li> <a href="gallery.php"> Gallery</a> </li>
                <li> <a href="contact.php"> Contact</a> </li>
    </ul>
        
</div> 
<div class="page-image">
</div>

<div class="left-content">

	<div class="headings"> Volunteers </div>
    
<p> <?php 
if($insert)
					  {
					  echo "<div align='center'>Submited Successfully</div>";
					  }	 
?></p>
     <form action="" method="post" enctype="multipart/form-data" id="register-form" novalidate="novalidate" > 
    <table width="50%" border="0" align="center" cellpadding="5" cellspacing="0">
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
                    <td width="24%">City</td>
                    <td width="76%"><input type="text" name="city" id="city" /></td>
                  </tr>
                  <tr>
                    <td width="24%">Qualification</td>
                    <td width="76%"><input type="text" name="qualification" id="qualification" /></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td align="right"><label>
                      <input name="submit" type="submit" onclick="MM_validateForm('name','','R','email','','RisEmail','phone','','RisNum','city','','R','qualification','','R');return document.MM_returnValue" value="Submit" />
                    </label></td>
                  </tr>
                  <tr>
                    <td colspan="2" align="center">All Fields are Mandatory</td>
                  </tr>
    </table>
	</form>
</div>

<?php include_once('inc/sidebar.php') ?>
<?php include_once('inc/footer.php') ?>