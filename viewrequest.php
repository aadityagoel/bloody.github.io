<!-- header Start -->
<?php require 'header.php' ?>
<!-- header Ends -->

<section class="w3l-inner-page-main">
  <div class="breadcrumb-infhny">
    <div class="container">
      <nav aria-label="breadcrumb">
        <h2 class="hny-title text-center">Current Requests</h2>
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Current Requests</li>
        </ol>
      </nav>
    </div>
  </div>
</section>

<section class="w3l-services-2">
    <!-- /content-6-section -->
    <div class="services-2-mian py-5">
        <div class="container py-lg-5">
            <h3 class="hny-title mb-0 text-center">Recent Request<span class="dot-1">.</span></h3>
            <div class="welcome-grids row mt-5 col-md-12">
                <div class="col-md-12 welcome-image">
                    <table class="col-md-12 table-striped">
                        <thead>
                            <tr>
                                <th>Patient Name</th>
                                <th>Contact Name</th>
                                <th>Blood Group</th>
                                <th>City</th>
                                <th>Contact Number</th>
                                <th>Email</th>
                                <th>Required Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                              $cn=$conn;
                              $s="select * from request";
                                $result=mysqli_query($cn,$s);
                                $r=mysqli_num_rows($result);
                                //echo $r;
                                while($data=mysqli_fetch_array($result))
                                {
                                    echo"<tr>
                                            <td>$data[1]</td>
                                            <td>$data[5]</td>
                                            <td>$data[4]</td>
                                            <td>$data[8]</td>
                                            <td>$data[7]</td>
                                            <td>$data[6]</td>
                                            <td>$data[10]</td>
                                        </tr>";
                                }
                                mysqli_close($cn);
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
