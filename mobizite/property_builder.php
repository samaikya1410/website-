<?php
include_once 'include/db.php';
include_once 'include/header.php';
?> 


  <div class="container-fluid">
       	<div class="col-lg-12 banner">
   	    <img src="images/propbuil.jpg" width="100%" height="500" alt=""/> </div>
		<div class="clearfix"></div>
        <div class="row" >
			<div class="prods spring" data-stellar-background-ratio="0">
              <div class="col-lg-10 col-lg-offset-1 prods-content" data-stellar-background-ratio="0">
              <h1 style="text-align:center;">Products</h1>
              <h2 style="text-align:center;">Property Bulider</h2>
        	<p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, similique, sed, quis, officia doloremque nostrum quo suscipit nihil numquam soluta laudantium temporibus placeat. Tempora, mollitia, nihil ipsum officia dolorum minus voluptatum quidem reiciendis esse nemo! Maiores, necessitatibus, ducimus, vero quidem explicabo autem quis totam placeat hic corrupti voluptatibus sed officiis magnam corporis harum architecto voluptatem deserunt cum itaque neque possimus nemo cupiditate obcaecati eveniet unde blanditiis expedita assumenda magni a perspiciatis ipsam optio nobis aperiam in voluptate sunt quasi recusandae iste quas illo. Eius, incidunt, porro, alias totam dolorem facere error dolore numquam aspernatur vitae earum delectus! Earum nihil aliquam perferendis quos repellat tempore debitis! Ea, esse, neque deleniti eveniet ipsum rem cum aut ducimus reprehenderit dignissimos ullam eligendi et nihil at tenetur incidunt recusandae enim est quibusdam iusto minus suscipit eos error quae numquam magni ex. Quaerat, autem quas pariatur sed iste adipisci aspernatur molestias quam ipsam odit quia consectetur sunt animi veniam nobis officiis at suscipit dignissimos debitis omnis. Odio, rem, non, sit eum asperiores eius laborum nisi odit cum obcaecati voluptatum nemo aliquam id sunt delectus. Fugiat, quo, consequatur laborum ipsam cumque odit tempora adipisci aliquam eaque delectus illum sunt autem at! Impedit, ducimus ratione nesciunt doloribus.</p>
        </div>
          </div> 
            
        </div>
    <div class="row">
        	<div class="prd col-lg-3" style="position: relative;">
    <div class="col-lg-10 col-lg-offset-1 prd1">
    <h3>Free</h3>
    <ul>
    <li><span style="color:green">&#10004;</span>Website Template</li>
    
    </ul>
    <a href="#" class="sign" data-toggle="modal" data-target="#signup" style="position:absolute; bottom:10px; text-decoration:none;">SIGNUP</a>
    </div></div>
    <div class="prd col-lg-3">
    <div class="col-lg-10 col-lg-offset-1 prd1"> 
    <h3>Silver</h3>
    <ul>
    <li><span style="color:green">&#10004;</span>Website Template</li>
    <li><span style="color:green">&#10004;</span>SEO</li>
     
    </ul>
    <a href="#" class="sign" data-toggle="modal" data-target="#signup" style="position:absolute; bottom:10px; text-decoration:none;" >SIGNUP</a></div>	
    </div>
    <div class="prd col-lg-3">
    <div class="col-lg-10 col-lg-offset-1 prd1">	
    <h3>Gold</h3>
    <ul>
    <li><span style="color:green">&#10004;</span>Website Template</li>
    <li><span style="color:green">&#10004;</span>SEO</li>
    <li><span style="color:green">&#10004;</span>Mobile App</li>
    
    </ul>
    <a href="#" class="sign" data-toggle="modal" data-target="#signup" style="position:absolute; bottom:10px; text-decoration:none;" >SIGNUP</a>	
    </div></div>
    <div class="prd col-lg-3">
    <div class="col-lg-10 col-lg-offset-1 prd1">
    <h3>Platinum</h3>
    <ul>
    <li><span style="color:green">&#10004;</span>Website Template</li>
    <li><span style="color:green">&#10004;</span>SEO</li>
    <li><span style="color:green">&#10004;</span>Mobile App</li>
    <li><span style="color:green">&#10004;</span>Social Media</li>
    <li><span style="color:green">&#10004;</span>Analytics</li>
    </ul>
    <a href="#" class="sign" data-toggle="modal" data-target="#signup" style="position:absolute; bottom:10px; text-decoration:none;" >SIGNUP</a>	
    </div></div>	

        </div>
        
        
        <?php
		
			if(isset($_POST['signup'])){
	
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$service1=$_POST['service1'];
		$service2=$_POST['service2'];
		$service3=$_POST['service3'];
		//$services_array=$_POST['services'];
		//$services = @implode(",",$services_array);
		$plan=$_POST['plan'];
		
	    $contact=$_POST['contact'];
		
		$check=mysql_query("SELECT * FROM users WHERE email = '$email'");
		
		$count=mysql_num_rows($check);
			  	if($count==1){
					echo "<script> alert('Emai ID Already Exists! Please Sign In') </script>";
					
					}
					
					
					else{
					
		
			$insert= mysql_query("INSERT INTO users( name, email, password, contact) VALUES ('$name', '$email','$password','$contact')");
		 if($insert){
			 echo "<div align='center'>Successfully Uploaded</div>";
		 }else
		 {
			 echo 'not updated';
		 }
		 
		 if($service1){
			 mysql_query("UPDATE users SET pb = '$plan' WHERE email = '$email' ");
		 }
		 if($service2){
			 mysql_query("UPDATE users SET pm = '$plan' WHERE email = '$email' ");
		 }
		 if($service3){
			 mysql_query("UPDATE users SET ra = '$plan' WHERE email = '$email' ");
		 }
		 
		 
		 
		 
	}
			}
		?>
        
        
        
 <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Sign Up</h4>
      </div>
      <div class="modal-body">
       	<form class="form-horizontal" role="form" method="post">
  		<div class="form-group">
    	<div class="form-group">
    	<label for="name" class="col-sm-2 control-label">Name<font style="font-size:18px; color:red">*</font></label>
    	<div class="col-sm-10">
      	<input type="name" name="name" class="form-control" id="name" placeholder="Enter your Name" required>
    	</div>
		</div>
		<div class="form-group">
		<label for="inputEmail1" class="col-sm-2 control-label">Email<font style="font-size:18px; color:red">*</font></label>
    	<div class="col-sm-10">
      	<input type="email" name="email" class="form-control" id="inputEmail1" placeholder="Enter your Email Address" required>
    	</div>
  		</div>
  		<div class="form-group">
    	<label for="inputPassword1" class="col-sm-2 control-label">Password<font style="font-size:18px; color:red">*</font></label>
    	<div class="col-sm-10">
      	<input type="password" name="password" class="form-control" id="inputPassword1" placeholder="Enter Your Password" required>
    	</div>
  		</div>
        <div class="form-group">
    	<label for="signplan" class="col-sm-2 control-label">Plan<font style="font-size:18px; color:red">*</font></label>
    	<div class="col-sm-10">
		<input type="checkbox" name="service1" value="pb" id="services" class="rad">Property Builder
        <input type="checkbox" name="service2" value="pm" id="services2" class="rad">Property Management Firm  
        <input type="checkbox" name="services3" value="ra" id="services3" class="rad">Real Estate Agent
    	</div>
  		</div>
  		<div class="form-group">
    	<label for="signplan" class="col-sm-2 control-label">Plan<font style="font-size:18px; color:red">*</font></label>
    	<div class="col-sm-10">
		<input type="radio" name="plan" value="free" class="rad">Free
        <input type="radio" name="plan" value="silver" class="rad"> Silver 
        <input type="radio" name="plan" value="gold" class="rad"> Gold 
        <input type="radio" name="plan" value="platinum"  class="rad"> Platinum
    	</div>
  		</div>
		<div class="form-group">
    	<label for="cont_num" class="col-sm-2 control-label">Contact<font style="font-size:18px; color:red">*</font></label>
    	<div class="col-sm-10">
      	<input type="number" name="contact" class="form-control" id="cont_num" placeholder="Enter Your Contact Number" required>
    	</div>
  		</div>
  		<div class="form-group">
    	<div class="col-sm-offset-2 col-sm-10">
      	<button type="submit"  name="signup" class="btn btn-default">Submit</button>
    	</div>
  		</div>
		</form>
      </div>
          
    </div>
  </div>
</div>
</div>
</div>
   
    <div style="clear:both"></div>
    
  <!--  <script src="js/jquery-1.11.1.min.js">
     $('.sign').click(function(){
		 var a,b,c,d,e,f,g;
		a=$(this).parent();
		b=$(a).find('h3');
		c=$(b).val();
		switch(c){
			case 'Free' :{
						$('#signplan1').attr('checked', 'true');
						$('#name').val('sam');
						}
						break;
			case 'Silver' :{
						$('#signplan2').attr('checked', 'true');
						$('#name').val('sam');
						}
						break;
			case 'Gold' :{
						$('#signplan3').attr('checked', 'true');
						$('#name').val('sam');
						}
						break;
			case 'Platinum' :{
						$('#signplan4').attr('checked', 'true');
						$('#name').val('sam');
						}
						break;		
			default : break;	
		}
	 });
     </script>
  -->
    <?php 
	include_once 'include/footer.php';
	?>
   

    