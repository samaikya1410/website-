<?php
error_reporting(0);
if (isset($_POST['send']))

{
$name=$_REQUEST['name'];
$mail=$_REQUEST['mail'];
$phone=$_REQUEST['phone'];
$subjectreq=$_REQUEST['message'];
$message= "Dear Admin
		   Name : $name
		   Phone : $phone
		   Subject : $subjectreq
		   Mail : $mail

		   ";
		   
$to = "joyofsharing.kids@gmail.com";
$subject = "Mail From Joy Of Sharing Website ";
$from = "joyofsharing.kids@gmail.com"; 
$headers = "From:" . $from;
$res = mail($to,$subject,$message,$headers);
}
?>


<?php include('inc/header.php'); ?>
<script>
 $(function() {
    $( "#dialog" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "fade",
        duration: 1000
      }
    });
 
    $( "#opener" ).click(function() {
      $( "#dialog" ).dialog( "open" );
    });
  });
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

<div class="nav">
        
        	<ul>
            	<li> <a href="index.php"> Home</a> </li>
                <li> <a href="about.php"> About U</a> </li>
                <li> <a href="events.php" > Events</a> </li>
                <li> <a href="volunteers.php"> Volunteers</a> </li>
                <li> <a href="gallery.php"> Gallery</a> </li>
                <li> <a href="contact.php" class="nav-active"> Contact</a> </li>
            </ul>
        
        </div> 
<div class="page-image">
</div>

<div class="contact-content">
       				
       			<div class="contact-form">
                 <?php
               if ($res) {
					echo "Your Mail Succesfully Sent. We Will Contact you Soon";
					}
				?>
               
                <p class="blue-headings" align="center" style="margin:0px;"> Please Enter All Field </p>
                <form action="" method="post" enctype="multipart/form-data">
                		<table width="420" border="0" align="center" cellpadding="10" cellspacing="0">
                          <tr>
                            <td width="65"><span class="blue-headings"> Name </span></td>
                            <td><label>
                              <input type="text" placeholder="Enter Your Name" name="name" id="name" />
                            </label></td>
                          </tr>
                          <tr>
                            <td><span class="blue-headings"> E-Mail </span></td>
                            <td><input type="text" placeholder="Enter Your Email" name="mail" id="mail" /></td>
                          </tr>
                          <tr>
                            <td><span class="blue-headings"> Phone </span></td>
                            <td><input type="text" placeholder="Enter Your Phone" name="phone" id="phone" /></td>
                          </tr>
                          <tr>
                            <td valign="top"><span class="blue-headings"> Message </span></td>
                            <td><label>
                              <textarea name="message" placeholder="Enter Your Message" id="message" cols="30" rows="7"></textarea>
                            </label></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td align="right"><input type="submit" name="send" class="send" onClick="MM_validateForm('name','','R','mail','','R','phone','','NisNum','message','','R');return document.MM_returnValue" value="Send"/></td>
                          </tr>
                        </table>	
			</form>
                
                </div>
                
                
                <div class="address">
                
                
                		
                		
                        <address>
                          
                        We look forward to your response and invite you cordially to post/present any feedback, questions or concerns you may have which can help us in our future assignments.
<br />
Email :joyofsharing.kids@gmail.com <br />
Phone :9494937437 or 9133398693
                        </address>
                
                </div>
                
                <div class="clear"> </div>
       		
       		
  
</div>

<?php include('inc/footer.php'); ?>