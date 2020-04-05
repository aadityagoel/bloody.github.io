<!-- header Start -->
<?php require 'header.php' ?>
<!-- header Ends -->

<section class="w3l-inner-page-main">
  <div class="breadcrumb-infhny">
    <div class="container">
      <nav aria-label="breadcrumb">
        <h2 class="hny-title text-center">Contact</h2>
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Contact</li>
        </ol>
      </nav>
    </div>
  </div>
</section>
 

	<!-- /contact-form -->
<section class="w3l-contact-main">
	<div class="contact-infhny py-5">
		<div class="container">
			<div class="contact-grids row py-lg-5">
				<div class="contact-left col-lg-6">
						<img src="assets/images/new/17.jpg" alt="" class="img-fluid">
				</div>
				<div class="contact-right col-lg-6 pl-lg-4">
						<h3>Contact</h3>
					<h4>Everything Start With A Hello!</h4>
					<p>We’re here to answer any questions you may have and create an effective solution for your instructional needs.</p>
					<form action="" method="post" enctype="multipart/form-data" class="signin-form mt-lg-5 mt-4">
						<div class="input-grids">
							<input type="text" name="name" placeholder="Full name" class="contact-input" required="" />
							<input type="email" name="email" placeholder="Your email" class="contact-input" required="" />
							<input type="number" name="mobile" placeholder="Phone number" class="contact-input" required="" />
						</div>
						<div  class="form-input">
							<textarea name="message" placeholder="Type your message here" required=""></textarea>
						</div>
						
						<button class="btn submit" name="sbmt">Send Message</button>
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
         
         			$s="insert into contact(name,email,mobile,message) values('" . $_POST["name"] ."','" . $_POST["email"] . "','" . $_POST["mobile"] . "','" . $_POST["message"]   ."')";
         			
         			
         	$q=mysqli_query($cn,$s);
         	mysqli_close($cn);
         	if($q>0)
         	{
         	echo "<script>alert('Record Save');</script>";
         	}
         	else
         	{echo "<script>alert('Saving Record Failed');</script>";
         	}
         		
         		}	
         	
         
         ?>

<!-- footer Starts -->
<?php require 'footer.php' ?>
<!-- footer Ends -->
