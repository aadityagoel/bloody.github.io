
<!-- header Start -->
<?php require 'header.php' ?>
<!-- header Ends -->
<?php
require "connection.php";
$id=$_GET['z'];
if($id=="")
{
	echo "<script>alert('Invalid ID'); window.location='manage_donor.php';</script>";
}
?>
<div id="page-wrapper">
	<div class="main-page">
		<div class="forms">
			<h2 class="title1">Update Donor</h2>			
			<div class="row">
				<div class="form-three widget-shadow">
					<div class=" panel-body-inputin">
						<form class="form-horizontal" method="post" action="">
						<?php
                              $cn=$conn;
                              $s="select * from donor where `donar_id` = $id";
                                $result=mysqli_query($cn,$s);
                                $r=mysqli_num_rows($result);
                                //echo $r;
                                while($data=mysqli_fetch_array($result))
                            {	
                        ?>
							<div class="form-group">
								<label class="col-md-2 control-label">Name</label>
								<div class="col-md-8">
									<input type="text" name="name" class="form-control1" value="<?php echo $data[1]; ?>" placeholder="Type Name" required="">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Gender</label>
								<div class="col-md-8">
									<input name="gender" type="radio" value="male" checked="checked" placeholder="Male" class="" required=""> Male</input>
                            		<input name="gender" type="radio" value="female" class="" > Female</input>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Age</label>
								<div class="col-md-8">
									<input type="number" name="age" value="<?php echo $data[3]; ?>" class="form-control1" placeholder="Type Age" required="">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Mobile</label>
								<div class="col-md-8">
									<input type="number" name="mobile" value="<?php echo $data[4]; ?>" class="form-control1" placeholder="Type Mobile Number" required="">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Blood Group</label>
								<div class="col-sm-8">
									<select multiple="" name="b_group" class="form-control1" required="">
		                                <option value="A+">A+</option>
		                                <option value="A-">A-</option>
		                                <option value="B+">B+</option>
		                                <option value="B-">B-</option>
		                                <option value="AB+">AB+</option>
		                                <option value="AB-">AB-</option>
		                                <option value="O+">O+</option>
		                                <option value="O-">O-</option>
									</select>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-md-2 control-label">Email Address</label>
								<div class="col-md-8">
									<input type="email" name="email" value="<?php echo $data[6]; ?>" class="form-control1" placeholder="Email Address" required="">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">City</label>
								<div class="col-md-8">
									<input type="text" name="city" value="<?php echo $data[7]; ?>" class="form-control1" placeholder="City" required="">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">State</label>
								<div class="col-sm-8">
									<select multiple="" name="state" class="form-control1" required="">
		                                <option value="Andhra Pradesh">Andhra Pradesh</option>
		                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
		                                <option value="Assam">Assam</option>
		                                <option value="Bihar">Bihar</option>
		                                <option value="Chandigarh">Chandigarh</option>
		                                <option value="Chhattisgarh">Chhattisgarh</option>
		                                <option value="Delhi">Delhi</option>
		                                <option value="Goa">Goa</option>
		                                <option value="Gujarat">Gujarat</option>
		                                <option value="Haryana">Haryana</option>
		                                <option value="Himachal Pradesh">Himachal Pradesh</option>
		                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
		                                <option value="Jharkhand">Jharkhand</option>
		                                <option value="Karnataka">Karnataka</option>
		                                <option value="Kerala">Kerala</option>
		                                <option value="Madhya Pradesh">Madhya Pradesh</option>
		                                <option value="Maharashtra">Maharashtra</option>
		                                <option value="Manipur">Manipur</option>
		                                <option value="Meghalaya">Meghalaya</option>
		                                <option value="Mizoram">Mizoram</option>
		                                <option value="Nagaland">Nagaland</option>
		                                <option value="Odisha">Odisha</option>
		                                <option value="Punjab">Punjab</option>
		                                <option value="Rajasthan">Rajasthan</option>
		                                <option value="Sikkim">Sikkim</option>
		                                <option value="Tamil Nadu">Tamil Nadu</option>
		                                <option value="Telangana">Telangana</option>
		                                <option value="Tripura">Tripura</option>
		                                <option value="Uttar Pradesh">Uttar Pradesh</option>
		                                <option value="Uttarakhand">Uttarakhand</option>
		                                <option value="West Bengal">West Bengal</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="txtarea1" class="col-sm-2 control-label">Address</label>
								<div class="col-sm-8">
									<textarea name="address" id="txtarea1" value="<?php echo $data[9]; ?>" cols="50" rows="4" class="form-control1" required=""><?php echo $data[9]; ?></textarea>
								</div>
							</div>
							<div class="form-group"> 
								<div class="col-md-2"></div>
								<div class="col-md-8">
									<button type="submit" name="sbmt" class="btn btn-default">Submit</button>
								</div>
							</div>
							<?php
                            }
                            mysqli_close($cn);
                        ?>
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
 	
 	$can=$conn;
 	// echo $data[1];
	$i="UPDATE `donor` SET `name` = '" .$_POST["name"] . "', `gender` = '" .$_POST["gender"] . "', `age` = '" .$_POST["age"] . "', `mobile` = '" .$_POST["mobile"] . "', `blood_group` = '" .$_POST["b_group"] . "', `email` = '" .$_POST["email"] . "', `city` = '" .$_POST["city"] . "', `state` = '" .$_POST["state"] . "', `address` = '" .$_POST["address"] . "' WHERE `donar_id` = $id"; 
	 	

	 	$q=mysqli_query($can,$i);
	 	mysqli_close($can);
	 	if($q>0)
	 	{
	        echo "<script>alert('donor updated successfully'); window.location='manage_donor.php';</script>";
	 	}
	 	else
	 	{
	        echo "<script>alert('Saving Record Failed');</script>";
	 	}
 	}
?>

<!-- footer Starts -->
<?php require 'footer.php' ?>
<!-- footer Ends -->
