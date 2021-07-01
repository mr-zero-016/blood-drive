<!DOCTYPE html>
<html>
<head>
	<title>Blood Drive</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.grid.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="bootstrap.min.js"></script>

<?php
$servername="localhost";
$username="root";
$password="";
$dpname ="blooddrive";
$conn=new mysqli($servername,$username,$password,$dpname);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
if($_SERVER['REQUEST_METHOD']="post" && isset($_POST['submit']))
{
$rname=$_POST['rname'];
$rbloodgroup=$_POST['rbloodgroup'];
$rage=$_POST['rage'];
$rgender=$_POST['rgender'];
$rdepartment=$_POST['rdepartment'];
$ryear=$_POST['ryear'];
$rphonenumber=$_POST['rphonenumber'];
$remail=$_POST['remail'];
$sql="insert into register(rname,rbloodgroup,rage,rgender,rdepartment,ryear,rphonenumber,remail)values(
'$rname','$rbloodgroup','$rage','$rgender','$rdepartment','$ryear','$rphonenumber','$remail')";

if($conn->query($sql)==TRUE){
echo "<script type='text/javascript'>
alert('Response Submitted');
</script>";
}
else
{echo "An error occur connection fail".$conn->error;
}
}
?>

</head>

<body>
	<a href="index.php"><button class="btn btn-primary" id="but-align" >Back</button></a>
	<div   class="col-md-4 " id="reg-align">
                <form action="registerform.php" method="POST">
                    
                    <h2 style="text-align: center; ">REGISTER</h2>

                    <br>

                    <input type="text" placeholder="Name" name="rname" required class="form-control" autofocus>
                    
                    <br/>
                    
                  
                    <select name="rbloodgroup" class="form-control" required>
                    	  <option name="rbloodgroup" value="">Select blood group</option>
                          <option name="rbloodgroup" value="A+ve">A+ve</option>
                          <option name="rbloodgroup" value="B+ve">B+ve</option>
                          <option name="rbloodgroup" value="O+ve">O+ve</option>
                          <option name="rbloodgroup" value="AB+ve">AB+ve</option> 
                          
                          <option name="rbloodgroup" value="A-ve">A-ve</option>
                          <option name="rbloodgroup" value="B-ve">B-ve</option>
                          <option name="rbloodgroup" value="O-ve">O-ve</option>
                          <option name="rbloodgroup" value="AB-ve">AB-ve</option>
  				    </select>         
                    
                    <br/>
                    
                    <input type="number" placeholder="Age"   name="rage" required class="form-control">
         
                    <br/>

                    <select name="rgender" class="form-control" required>
                          <option name="rgender" value="">Select gender</option>
                          <option name="rgender" value="Male">MALE</option>
                          <option name="rgender" value="Female">FEMALE</option>
                          <option name="rgender" value="Other">OTHER</option>
                    </select>         
                    
                    <br/>

                     <select name="rdepartment" class="form-control" required>
                    	  <option name="rdepartment" value="">Select department</option>
                          <option name="rdepartment" value="CSE">CSE</option>
                          <option name="rdepartment" value="IT">IT</option>
                          <option name="rdepartment" value="EEE">EEE</option>
                          
                          <option name="rdepartment" value="ECE">ECE</option>
                          <option name="rdepartment" value="CIVIL">CIVIL</option>
                          <option name="rdepartment" value="MECH">MECH</option>
                    </select>         
                    
                    <br/>

                    <select name="ryear" class="form-control" required>
                    	  <option name="ryear" value="">Select year</option>
                          <option name="ryear" value="FIRST">FIRST</option>
                          <option name="ryear" value="SECOND">SECOND</option>
                          <option name="ryear" value="THIRD">THIRD</option>
                          <option name="ryear" value="FOURTH">FOURTH</option>
                          <option name="ryear" value="FOURTH">Passed Out</option>
  				    </select>         
                          
                    <br/>
                    
                   
                    <input type="text" placeholder="Phone number" required name="rphonenumber" class="form-control">
                  
                    <br/>

                    <input type="email" placeholder="Email" required name="remail" class="form-control" >
                 
                    <br/>

                    <button type="submit" name="submit" class="btn btn-primary" id="but-align" >Submit</button>
                    
              
              		<br/>
                </form>
    </div>


</body>