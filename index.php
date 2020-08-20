<?php 	

include_once("include/config.php");	

	

if(isset($_POST['txtUname']) && isset($_POST['txtPword']))	

{		

$uid=strtolower($_POST["txtUname"]);		

$pwd=$_POST["txtPword"];		    

$sql=$obj->display('dm_employee',"username='".$uid."' and password='".$pwd."' and status=1");		

$data=$sql->fetch_array();	

		

if($uid!=strtolower($data["username"]) || $pwd!=$data["password"])		

{			

$invalid=true;			

//header('Location: login.php?msg=2');		

}		

else		

{			

$rol=$obj->display('dm_role','id='.$data["role"]); $rol1=$rol->fetch_array();



$_SESSION["ADMIN_USER"]="Active";			

$_SESSION["LOG_USER"]=$data["name"];			

$_SESSION["BRANCH"]=$data["branch"];			

$_SESSION["REGION"]=$data["region"];			

$_SESSION["ROLE"]=$data["role"];			

$_SESSION["ID"]=$data["id"];			
$_SESSION["PHOTO"]=$data["photo"];			

$_SESSION["TYPE"]=$rol1["type"];			

header('Location: dashboard.php');		

}	

}

?>

<!DOCTYPE html>

<html lang="en">

<head>

	<title>Login V1</title>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->	

	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.css">

<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<!--===============================================================================================-->

	<link href="https://fonts.googleapis.com/css?family=Marck+Script" rel="stylesheet">

<!--===============================================================================================-->	

<!--===============================================================================================-->

<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="css/main.css">

<!--===============================================================================================-->

</head>

<body>

		<div class="container">

		<div class="row">

		<div class="col-12">

				<div class="logo text-center mt-5 mb-5" data-tilt>

					<img src="images/logo.jpg" alt="IMG">

				</div>

			</div>

		</div>	

		<div class="row">

		<div class="offset-sm-3 col-sm-6 col-12 mb-5">

		              <span class="text-danger" id="error"><?php if(isset($_GET['msg'])==2) { echo "Username or Password is Incorrect"; } ?></span>



<form id="loginf" method="post" class="login-form" action="">                            

					<div class="row">

					<div class="col-sm-5">

					<div class="form-group">

					<input class="form-control" type="text" name="txtUname" id="txtUname" placeholder="ENTER YOUR LOGIN ID" required>

										<a href="#" class="forgotpass">Forgot your password</a>

</div>

					</div>

					<div class="col-sm-5">

					<div class="form-group">

					<input class="form-control" type="password" name="txtPword" id="txtPword" placeholder="ENTER YOUR PASSWORD" required></div>

					</div>

					<div class="col-sm-2">

					<input type="submit" id="submit" name="submit" class="sub_btn" value="">

					</div>

					

					</div>					

				</form>

			</div>

		</div>

		<div class="row">

		<div class="col-12">

		<p class="caption">Every contact we have with a customer influences whether or not they 'll come back. <br>

		We have to be great every time or we 'll lose them. - Kevil Stirtz</p>

		</div>

		</div>





	</div>

	

	



	

<!--===============================================================================================-->	

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

<!--===============================================================================================-->

	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!--===============================================================================================-->




</body>

</html>