
<?php
error_reporting(0);
session_start();
include("db/inc.php");
$admin_id=$_SESSION['admin'];
if($admin_id=="" ) {
	echo "<script>location.href='index.php'</script>";
}
?>

<?php include('inc/header.php'); ?>

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

<?php include('inc/admin-navigation.php'); ?>

<?php
	$id=$_GET['id'];
	$select=mysql_query("select * from events where id = '$id'");
	$rows=mysql_fetch_array($select);
	
?>

    
    <div class="headings"> Add Event </div>
    	

    <?php
        
			 if(isset($_POST['submit']))
			  {
			  $ename=$_POST['ename'];
			  $edate=$_POST['edate'];
			  $eloc=$_POST['eloc'];
			  $edesc=$_POST['edesc'];
			  $filename=$_FILES['photo']['name'];
	    	  $filetype=$_FILES['photo']['type'];
			  $filesize=$_FILES['photo']['size'];
			  $filetmp=$_FILES['photo']['tmp_name'];
			  $path=$ename."-".$filename;
			  $insert=mysql_query("UPDATE  events SET ename='$ename', edate='$edate', eloc='$eloc',edesc='edesc',eimage='$path' WHERE id=$id" );
			  
			 
				if($insert)
					  {
					  echo "<script>location.href='events.php'</script>";
					  move_uploaded_file($filetmp,"../events/$path");
					  }	  
					   }
	
		?>
    
    <div class="content">
   		<form action="" method="post" name="validate" enctype="multipart/form-data" onSubmit="return validateFileExtension(this.photo)">
    		<table width="50%" align="center" border="0" cellspacing="0" cellpadding="5">
              <tr>
                <td width="20%">Event Name</td>
                <td><input name="ename" type="text" id="ename" value="<?php echo $rows['ename'] ?>"  /></td>
              </tr>
              <tr>
                <td>Event Image</td>
                <td><input type="file" name="photo"  onchange="return validateFileExtension(this)"/> <strong>Old Image</strong> : <?php echo $rows['eimage'] ?> </td>
              </tr>
              <tr>
                <td>Event Date</td>
                <td><input type="text" name="edate" id="datepicker" value="<?php echo $rows['edate'] ?>"  /></td>
              </tr>
              <tr>
                <td>Event Location</td>
                <td><input name="eloc" type="text" id="eloc" <?php echo $rows['eloc'] ?> /></td>
              </tr>
              <tr>
                <td>Event Description</td>
                <td><textarea name="edesc" cols="50" rows="10" id="edesc" ><?php echo $rows['edesc'] ?> </textarea></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><input name="submit" type="submit" onclick="MM_validateForm('ename','','R','datepicker','','R','eloc','','R','edesc','','R');return document.MM_returnValue" value="Submit" /></td>
              </tr>
            </table>
</form>
            
    </div>

	
<?php include('inc/footer.php'); ?>    