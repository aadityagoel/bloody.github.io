<!-- header Start -->
<?php require 'header.php' ?>
<!-- header Ends -->

<section class="w3l-inner-page-main">
  <div class="breadcrumb-infhny">
    <div class="container">
      <nav aria-label="breadcrumb">
        <h2 class="hny-title text-center">Donor Registration</h2>
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Donor Registration</li>
        </ol>
      </nav>
    </div>
  </div>
</section>
 

	<!-- /contact-form -->
<section class="w3l-contact-main">
	<div class="contact-infhny py-5">
		<div class="container">
			<div class="register-grids row py-lg-5">
				<div class="contact-left col-lg-6">
						<img src="assets/images/new/16.jpg" alt="" class="img-fluid">
				</div>
				<div class="contact-right col-lg-6 pl-lg-4">
						<!-- <h3>Donor Registration</h3> -->
					<h4>Donor Registration</h4>
					<p>I want to Become a Donor</p>
					<form action="" method="post" enctype="multipart/form-data" class="signin-form mt-lg-5 mt-4">
						<div class="input-grids">
                            <input type="text" name="name" placeholder="Donor Name" class="register-input" required="" />
							Gender : &nbsp <input name="gender" type="radio" value="male" checked="checked" placeholder="Male" class="regis-input" required=""> Male</input>
                            <input name="gender" type="radio" value="female" class="regis-input" required=""> Female</input>
                            <input type="text" name="age" placeholder="Donor Age" class="register-input" required="" />
                            <input type="number" name="mobile" placeholder="Phone Number" class="register-input" required="" />
                            <select class="register-input" name="b_group" required="">
                                <option value="">Select Blood Group</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                            </select>
							<input type="email" name="email" placeholder="Your Email" class="register-input" required="" />
                            <input type="text" name="city" placeholder="Your City" class="register-input" required="" />
                            <select class="register-input" name="state" required="">
                                <option value="">Select State</option>
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
						<div  class="form-input">
							<textarea name="message" placeholder="Type your Complete Address here" required=""></textarea>
						</div>
						
						<button class="btn submit" name="sbmt">Register</button>
					</form>
				</div>

			</div>
		</div>
	</div>
	
</section>
<!-- //contact-form -->

<?php
 if(isset($_POST["sbmt"])) 
 {
 	
 	$cn=$conn;
 	$s="insert into donor(name,gender,age,mobile,blood_group,email,city,state,address) values('" . $_POST["name"] ."','" . $_POST["gender"] ."','" . $_POST["age"] ."','" . $_POST["mobile"] ."','" . $_POST["b_group"] ."','" . $_POST["email"] . "','" . $_POST["city"] . "','" . $_POST["state"]   ."','" . $_POST["message"] ."')";
 	$q=mysqli_query($cn,$s);
 	mysqli_close($cn);
 	if($q>0)
 	{
        echo "<script>alert('Thank You Donar for Registration');</script>";
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
