<!DOCTYPE html>
<html>
<head>
	<title>Blood Drive</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.grid.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="bootstrap.min.js"></script>
</head>
<body>
<!-- <div class="time">
<p class="val">
<?=date('h:i')?>
</p>
	
</div> -->
	<div class="container">	

		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="row">
						<div class="col-md-1">
							<img class="icon" src="images\icon.png">	</img>
						</div>
						<div class="col-md-11">	
							<h5 class="card-header">Blood Drive</h5>
						</div>  </div>
						<div class="card-body">
							<div class="slide">
								<div class="parallax-curtain"><p class="fronttext">SOMEONE IS WAITING FOR YOUR HELP<br>
									<button onclick="window.location.href='registerform.php'" class="btn btn-danger" > REGISTER</button></p>
								</div>
							</div>
							<div class="col-md-12">
								<div class="row">
									<div class="col-sm-4 color1">
										<div class="title-top">
											<p class="title-head">
									 			DONATE<br>BLOOD
											</p>
											<span class="ico"><i class="fa fa-tint"></i></span>
										</div>
										<div class="title"></div>
										<p class="title-head" style="font-size: 20px" >
											The gift of life,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pass it on.
										</p>
										
									</div>
									<div class="col-sm-4 color2">
										<div class="title-top">
											<p class="title-head">
												BE A<br>HELPING HAND
											</p>
											<span class="ico"><i class="fa fa-paw"></i></span>
										</div>
										<div class="title"></div>
										<p class="title-head" style="font-size: 20px">
											Be a reason for someone's lives
										</p>
									</div>
									<div class="col-sm-4 color3">
										<div class="title-top">
											<p class="title-head">
												SAVE<br>LIFE
											</p>
											<span class="ico"><i class="fa fa-leaf"></i></span>
										</div>
										<div class="title"></div>
										<p class="title-head" style="font-size: 20px">
											You don't have to be a docter to save lives,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Just donate blood
											

										</p>
									</div>
								</div>
							</div>
							<div class="log"></div>
							<div class="row">
								<div class="col-md-6">
									<div class="center">
										<h2>Request For</h2><br>
										<h1>DONAR</h1>
									</div>

								</div>
								<div class="col-md-4" id="lp-pom-form-371">
									<form action="data.php" method="post">

										<input type="text" placeholder="Name" name="name" required class="form-control">

										<br/>


										<select  name="bloodgroup" class="form-control">
											<option name="bloodgroup" value="">Select group</option>
											<option name="bloodgroup" value="A+ve">A+ve</option>
											<option name="bloodgroup" value="B+ve">B+ve</option>
											<option name="bloodgroup" value="O+ve">O+ve</option>
											<option name="bloodgroup" value="AB+ve">AB+ve</option>

											<option name="bloodgroup" value="A-ve">A-ve</option>
											<option name="bloodgroup" value="B-ve">B-ve</option>
											<option name="bloodgroup" value="O-ve">O-ve</option>
											<option name="bloodgroup" value="AB-ve">AB-ve</option>

										</select>         
										<br/>

										<input type="number" placeholder="Units required"   name="unitsrequired" required class="form-control">

										<br/>

										<input type="text" placeholder="Phone number" required name="phonenumber" class="form-control">

										<br/>

										<input type="email" placeholder="Email" required name="email" class="form-control" >

										<br/>

										<button type="submit" name="submit" class="btn btn-primary" >Submit</button>

										<br/><br/>
									</form>
								</div>

							</div>
							<div class="col-md-12 footerup">
								<div class="row">
									<div class="col-sm-4"><h3>TECHNICAL SUPPORT</h3></div>
									<div class="col-sm-4"><img class="tas" src="images\front.jpg"></div>
									<div class="col-sm-4 "><img class="techlawn" src="images/tr.png"></div>
								
								</div>

							</div>
							<div class="footer">

								<div class="col-md-12">
									<div class="row">
										<div class="col-md-12 foo-content">
											<p>Contact Us:</p>
										</div>
										<div class="col-sm-4 foo-content2">
											<p><i class="fa fa-user-o"></i> &nbsp;Muhammed Nafi K A<br><i class="fa fa-phone"></i> &nbsp;7845805672<br><i class="fa fa-envelope"></i> &nbsp;nafy141625@gmail.com</p>
										</div>
										<div class="col-sm-4 foo-content2">
											<p><i class="fa fa-user-o"></i> &nbsp;Karan S<br><i class="fa fa-phone"></i> &nbsp;9751842073<br><i class="fa fa-envelope"></i> &nbsp;karannn21915@gmail.com</p>
										</div>
										<div class="col-sm-4 foo-content2">
											<p><i class="fa fa-user-o"></i> &nbsp;Karthikeyan S<br><i class="fa fa-phone"></i> &nbsp;7358927518<br><i class="fa fa-envelope"></i> &nbsp;karthipkp1999@gmail.com</p>
										</div>
									</div>
								</div>
								<div class="col-md-12 copy pull-right text-right">
									Copyrights &copy; 2018
								</div>    	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
		<br>
	</div>
</body>
</html>