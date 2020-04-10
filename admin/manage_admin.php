
<!-- header Start -->
<?php require 'header.php' ?>
<!-- header Ends -->

<div id="page-wrapper">
	<div class="main-page">
		<div class="tables">
			<h2 class="title1">Admin</h2>
			<div class="bs-example widget-shadow" data-example-id="bordered-table"> 
				<table class="table table-bordered"> 
					<thead> 
						<tr> 
							<th>Name</th>
							<th>Email</th>
							<th>Password</th>
							<th>Time</th>
							<th>Action</th>
						</tr> 
					</thead>
					<tbody>
						<?php
                          	$cn=$conn;
                          	$s="select * from admin";
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
                                <td>
                                	<a href="delete_admin.php?z=<?php echo $data[0];?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
