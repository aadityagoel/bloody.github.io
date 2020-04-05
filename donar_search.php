<!-- header Start -->
<?php require 'header.php' ?>
<!-- header Ends -->

<section class="w3l-inner-page-main">
  <div class="breadcrumb-infhny">
    <div class="container">
      <nav aria-label="breadcrumb">
        <h2 class="hny-title text-center">Search Donor</h2>
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Search Donor</li>
        </ol>
      </nav>
    </div>
  </div>
</section>


<section class="w3l-services-2">
    <!-- /content-6-section -->
    <div class="services-2-mian py-5">
        <div class="container py-lg-5">
            <h3 class="hny-title mb-0 text-center">Search<span class="dot-1">.</span></h3>
            <div class="welcome-grids row mt-5 col-md-12">
                <div class="col-md-12 welcome-image">
                    <div class="col-md-12">
                        <form action="" method="post" enctype="multipart/form-data" class="signin-form mt-lg-5 mt-4">
                        <div class="col-md-6" style="float: left;">
                            <div class="input-grids" >
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
                            </div> 
                        </div>
                        <div class="col-md-2 w3l-contact-main" style="float: left; margin-left: 20px;">
                            <button class="btn submit" name="sbmt">Search</button>
                        </div>
                        </form>
                    </div>
                    
                    <table class="col-md-12 table-striped">
                        <thead>
                            <tr>
                                <th>Donar Name</th>
                                <th>Blood Group</th>
                                <th>City</th>
                                <th>Gender</th>
                                <th>Contact Number</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                           if(isset($_POST["sbmt"]))
                           {
                           $cn=$conn;
                           $s="select * from donor where blood_group='".$_POST["b_group"] ."'";
                            $result=mysqli_query($cn,$s);
                           while($data=mysqli_fetch_array($result))
                                {
                                    echo"<tr>
                                            <td>$data[1]</td>
                                            <td>$data[5]</td>
                                            <td>$data[7]</td>
                                            <td>$data[2]</td>
                                            <td>$data[4]</td>
                                            <td>$data[6]</td>
                                        </tr>";
                                }
                            mysqli_close($cn);
                           }
                           ?>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- footer Starts -->
<?php require 'footer.php' ?>
<!-- footer Ends -->
