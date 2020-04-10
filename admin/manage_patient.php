
<!-- header Start -->
<?php require 'header.php' ?>
<!-- header Ends -->

<div id="page-wrapper">
	<div class="main-page">
		<div class="tables">
			<h2 class="title1">Blood Donors</h2>
			<div class="bs-example widget-shadow" data-example-id="bordered-table"> 

				<table class="table table-bordered table-responsive"> 
					<thead> 
						<tr> 
							<th>Paitent Name</th>
							<th>Gender</th>
							<th>Age</th>
							<th>Blood Group</th>
							<th>Contact Name</th>
							<th>Email</th>
							<th>Mobile</th>
							<th>City</th>
							<!-- <th>State</th> -->
							<th>Required Date</th>
							<th>Doctor Name</th>
							<th>Hospital Address</th>
							<th>Action</th>
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
                        ?>
                            <tr>
                                <td><?php echo $data[1]; ?></td>
                                <td><?php echo $data[2]; ?></td>
                                <td><?php echo $data[3]; ?></td>
                                <td><?php echo $data[4]; ?></td>
                                <td><?php echo $data[5]; ?></td>
                                <td><?php echo $data[6]; ?></td>
                                <td><?php echo $data[7]; ?></td>
                                <td><?php echo $data[8]; ?></td>
                                <!-- <td><?php echo $data[9]; ?></td> -->
                                <td><?php echo $data[10]; ?></td>
                                <td><?php echo $data[11]; ?></td>
                                <td><?php echo $data[12]; ?></td>
                                <td>
                                    <a href="update_patient.php?z=<?php echo $data[0];?>" class="btn btn-primary btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                	<a href="delete_patient.php?z=<?php echo $data[0];?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                                </td>
                            </tr>
                            </tbody>
                        <?php
                            }
                            mysqli_close($cn);
                        ?>

					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<!-- footer Starts -->
<?php require 'footer.php' ?>
<!-- footer Ends -->
