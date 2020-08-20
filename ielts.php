<?php
include_once("head.php");

$ie = $obj->display('ielts','id=1');
$ie1= $ie->fetch_array();

// if($_POST)
// {
//   // print_r($_POST);die;
//   $p=$_POST['password'];
//   $rp=$_POST['rpassword'];
//   if($p!=$rp)
//   {
//     header("Location: profile.php?pass=no");
//   }
//   else
//   {

//   $data=array(
//     'fname'=>$_POST['fname'],
//     'lname'=>$_POST['lname'],
//     'email'=>$_POST['email'],
//     'password'=>$_POST['password']
//   );
//   // print_r($data);die;
//   $obj->update('dm_lead',$data,'id='.$cl1['id']);
//   header('Location: profile.php');
// }
// echo "no";die;
  
// }
?>
 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">IELTS Schedule</h1>

          <div class="row">

            <div class="col-lg-10">

              <!-- document list -->
              <div class="card shadow mb-4">
              <h1 class="display-3">We will be back soon</h1>
  <p class="lead"><strong>Sorry for the inconvenience.</strong></p>
  <p class="lead"><strong>We will send you sms with the link to attend IELTS.</strong></p>

  <hr>
                <!-- <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Below is the Schedule and link to attend the session</h6>
                </  div>
                <div class="card-body">
                <Label>NEXT IELTS SESSION IS ON : <?php echo $ie1['timing']; ?> </Label>
			<br/>
			<br/>
			<Label>Zoom link will be updated below to join the session.</label>
			<br/>
			<div>
			<a href="<?php echo $ie1['link']; ?>"><?php echo $ie1['link']; ?></a>
			</div> -->
              <!-- <form class="user" method="post" action="">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label>First Name</label>
                    <input type="text" class="form-control form-control-user" id="FirstName" name="fname" value="<?=$cl1['fname']?>">
                  </div>
                  <div class="col-sm-6">
                    <label>Last Name</label>
                    <input type="text" class="form-control form-control-user" id="LastName" name="lname" value="<?=$cl1['lname']?>">
                  </div>
                </div>
                <label>Email</label>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="InputEmail" name="email" value="<?=$cl1['email']?>">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label>Password</label>
                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="password" value="<?=$cl1['password']?>">
                  </div>
                  <div class="col-sm-6">
                    <label>Re-enter Password</label>
                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" name="rpassword" value="<?=$cl1['password']?>">
                  </div>
                </div>
                <?php if($_GET['pass']=="no"){ ?>
                  <div class="text-center">
                <h4 class="h4 text-red-900 mb-4" style="color:red">Password does not match</h4>
              </div>
            <?php } ?> -->
                </div>
                <!-- <input type="submit" name="register" value="Change Password" class="btn btn-primary btn-user btn-block">
                </input>
                </form> -->
                </div>

              </div>

            </div>

          </div>


      <!-- End of Main Content -->
      <?php include_once('foot.php'); ?>