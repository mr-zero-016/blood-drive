 <!DOCTYPE html>
<html>
<body>
	<?php
	include 'conn.php';
	$name= $_POST['name'];
	$blood= $_POST['bloodgroup'];
	$req= $_POST['unitsrequired'];
	$mobile= $_POST['phonenumber'];
	$email =  $_POST['email'];
	$ins=mysqli_query($con,"INSERT INTO `reqlist`(`name`,`bloodgroup`,`unitsrequired`,`phonenumber`,`email`) VALUES ('$name','$blood','$req','$mobile','$email')") or die(mysqli_error($con));
	?>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.min.css">
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="js/dataTables.bootstrap4.min.js"></script>
	<div class="container">
		<div class="card">
			<div class="card-header">
				<h2>Donar Details</h2>
			</div>
			<div class="card-body">
				<div class="container">
					<div class="table-responsive">
						<br>
						<table id="example" width="100%" class="table table-bordered">
							<thead>
								<td>S.no</td>
								<td>Name</td>
								<td>Department</td>
								<td>Year</td>
									<td>Mobile</td>
								<td>E-mail</td>
							</thead>
							<?php
							$count=1;
							$sel=mysqli_query($con,"SELECT * FROM `register` WHERE `rbloodgroup` = '$blood' ") or die(mysqli_error($con));
							while($val=mysqli_fetch_array($sel))
							{
								echo "<tr><td>" .$count ."</td><td>" .$val['rname'] ."</td><td>" .$val['rdepartment'] ."</td><td>" .$val['ryear'] ."</td><td>" .$val['rphonenumber'] ."</td><td>" .$val['remail'] ."</td></tr>";
								$count++;
							}
							?>
						</table>
						<br>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>