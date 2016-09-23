
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



 <script type="text/javascript">
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
	$select=mysql_query("select * from products where id = '$id'");
	$rows=mysql_fetch_array($select);
	
?>

    
    <div class="headings">Edit Products</div>
    
    	<?php
        	 
			 if(isset($_POST['add']))
			  {
			  $product=$_POST['product'];
			  $path=$product."-".$filename;
			  $item=$_POST['item'];
			  $description=$_POST['description'];		 
			  $update=mysql_query("UPDATE products SET product='$product', item='$item', description='$description' WHERE id = $id ");
			
				if($update)
					  {
					  echo "<script>location.href='products.php'</script>";
					  }	  
					   }
	
		?>
        
    	<div class="adding-products">
        	<form action="" method="post" name="validate" enctype="multipart/form-data">
             
              Product<br />
              <input name="product" type="text" id="product" value="<?php echo $rows['product'] ?>" /> <br />
				Item No<br />
              <input name="item" type="text" id="item" value="<?php echo $rows['item'] ?>"/> <br />
                Description <br />
              <textarea name="description" id="description"><?php echo $rows['description'] ?> </textarea> <br />
              
                
                Category : 
                 <?php echo ucwords($rows['category']) ?> 
              
              
            	<br />
                <input type="submit" name="add" value="Submit" onclick="MM_validateForm('product','','R','item','','R','description','','R');return document.MM_returnValue"  />
            
          </form>
        
        <a href="change-image.php?id=<?php echo $rows['product'] ?>"> </a>
        
        </div>
    
 
        
 
	
    
   

	
<?php include('inc/footer.php'); ?>    