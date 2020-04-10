

<!-- header Start -->
<?php require 'header.php' ?>
<!-- header Ends -->

<div id="page-wrapper">
	<div class="main-page">
		<div class="forms">
			<h2 class="title1">Add Admin</h2>			
			<div class="row">
				<div class="form-three widget-shadow">
					<div class=" panel-body-inputin">
						<form class="form-horizontal" method="post" action="">
							<div class="form-group">
								<label class="col-md-2 control-label">Name</label>
								<div class="col-md-8">
									<div class="input-group">							
										<span class="input-group-addon">
											<i class="fa fa-user"></i>
										</span>
										<input type="text" name="name" class="form-control1" placeholder="Name">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Email Address</label>
								<div class="col-md-8">
									<div class="input-group">							
										<span class="input-group-addon">
											<i class="fa fa-envelope-o"></i>
										</span>
										<input type="text" name="email" class="form-control1" placeholder="Email Address">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Password</label>
								<div class="col-md-8">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="fa fa-lock"></i>
										</span>
										<input type="password" id="txtPassword" name="pass" class="form-control1" id="exampleInputPassword1" placeholder="Password">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Confirm Password</label>
								<div class="col-md-8">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="fa fa-key"></i>
										</span>
										<input type="password" id="txtConfirmPassword" name="c_pass" class="form-control1" id="exampleInputPassword1" placeholder="Confirm Password">
									</div>
								</div>
							</div>
							
							<div class="form-group"> 
								<div class="col-md-2"></div>
								<div class="col-md-8">
									<button type="submit" name="sbmt" class="btn btn-default" onclick="return Validate()" >Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php
 if(isset($_POST["sbmt"])) 
 {
 	
 	$cn=$conn;
 	$s="insert into admin(admin_name,admin_email,admin_pswd) values('" . $_POST["name"] ."','" . $_POST["email"] ."','" . $_POST["pass"] ."')";
 	$q=mysqli_query($cn,$s);
 	mysqli_close($cn);
 	if($q>0)
 	{
        echo "<script>alert('Admin added successfully');</script>";
 	}
 	else
 	{
        echo "<script>alert('Saving Record Failed');</script>";
 	}
 		
 }
?>

<script type="text/javascript">
    function Validate() {
        var password = document.getElementById("txtPassword").value;
        var confirmPassword = document.getElementById("txtConfirmPassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>


<!-- footer Starts -->
<?php require 'footer.php' ?>
<!-- footer Ends -->
