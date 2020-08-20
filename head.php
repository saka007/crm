<?php
// if($_POST)
// {
//   echo $_POST['message'];die;
// }
include_once("include/config.php");
include_once("include/authenticatec.php");
// echo $_SESSION['ID'];
$cl=$obj->display('dm_lead',"id=".$_SESSION['ID']);
$cl1=$cl->fetch_array();

$op=$obj->display('dm_ops_skill_canada',"leadId=".$_SESSION['ID']);
$op1=$op->fetch_array();
$requiredp_docs_client=14;
$requirede_docs_client=15;
// print_r($op1);
$c=$obj->display3('SELECT ((IF(copr IS null, 1,0))+(IF(vphoto IS null, 1,0))+(IF(final_visa_docfb is null, 1,0))+(IF (final_visa_docfull IS null, 1,0))+(IF (mcert_re is null, 1,0))+(IF (bcert IS null, 1,0))+(IF(niddoc IS null, 1,0))+(IF (marraige IS null, 1,0))+(IF (ielts is null,1,0))+(IF (passport IS null, 1,0))+(IF(passport_new is null, 1,0))+(IF(pcc is null, 1,0))+(IF(photo is null, 1,0))+(IF(resume is null, 1,0))) as SUM FROM dm_client_personal WHERE leadid='.$_SESSION["ID"]);
$c1=$c->fetch_array();
$ce=$obj->display3('SELECT ((IF(con_mark_sheet_m IS null, 1,0))+(IF(con_mark_sheet_b IS null, 1,0))+(IF(ind_mark_sheet_m is null, 1,0))+(IF (revised_eca_m IS null, 1,0))+(IF (intermediate is null, 1,0))+(IF (revised_eca_b IS null, 1,0))+(IF(revised_wes_eca_m IS null, 1,0))+(IF (conv_cert_m IS null, 1,0))+(IF (revised_wes_eca_b is null,1,0))+(IF (eca_m IS null, 1,0))+(IF(conv_cert_b is null, 1,0))+(IF(ind_mark_sheet_b is null, 1,0))+(IF(bach_seal_trans_unv is null, 1,0))+(IF(eca_b is null, 1,0))+(IF(ssc is null, 1,0))) as SUM FROM dm_client_edu WHERE leadid='.$_SESSION["ID"]);
$ce1=$ce->fetch_array();
$em=$obj->display('dm_employee',"id=".$cl1['assignTo']);
$em1=$em->fetch_array();
//spouse
$requiredp_docs_spouse=12;
$requirede_docs_spouse=15;

$cs=$obj->display3('SELECT ((IF(copr IS null, 1,0))+(IF(vphoto IS null, 1,0))+(IF(final_visa_docfb is null, 1,0))+(IF (final_visa_docfull IS null, 1,0))+(IF (bcert IS null, 1,0))+(IF(niddoc IS null, 1,0))+(IF (ielts is null,1,0))+(IF (passport IS null, 1,0))+(IF(passport_new is null, 1,0))+(IF(pcc is null, 1,0))+(IF(photo is null, 1,0))+(IF(resume is null, 1,0))) as SUM FROM dm_spouse_personal WHERE leadid='.$_SESSION["ID"]);
if($cs->num_rows){
  $cs1=$cs->fetch_array();
}

$ces=$obj->display3('SELECT ((IF(con_mark_sheet_m IS null, 1,0))+(IF(con_mark_sheet_b IS null, 1,0))+(IF(ind_mark_sheet_m is null, 1,0))+(IF (revised_eca_m IS null, 1,0))+(IF (intermediate is null, 1,0))+(IF (revised_eca_b IS null, 1,0))+(IF(revised_wes_eca_m IS null, 1,0))+(IF (conv_cert_m IS null, 1,0))+(IF (revised_wes_eca_b is null,1,0))+(IF (eca_m IS null, 1,0))+(IF(conv_cert_b is null, 1,0))+(IF(ind_mark_sheet_b is null, 1,0))+(IF(bach_seal_trans_unv is null, 1,0))+(IF(eca_b is null, 1,0))+(IF(ssc is null, 1,0))) as SUM FROM dm_spouse_edu WHERE leadid='.$_SESSION["ID"]);
if($ces->num_rows){
$ces1=$ces->fetch_array();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Client - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="theme/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

  <!-- Custom styles for this template-->
  <link href="theme/css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/dropzone.css">
  <script src="theme/package/dist/sweetalert2.all.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/dropzone.min.js"></script>
<style type="text/css">
  .margin-left-md{
      margin-left: 9px;
}
/*.card-header2:first-child {
    border-radius: calc(.35rem - 1px) 30px 30px 0;
    width: 17%;
    margin-top: 2%;
    background-image: linear-gradient(#89b5a0,#1f8857);
    color: white;
    padding-left: 17px;

}*/
</style>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="cdashboard.php">
       
        <div class="sidebar-brand-text mx-3"><img src="images/logo3.png" width="200px"></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="cdashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="ielts.php">
          <i class="fas fa-fw fa-book-open"></i>
          <span>IELTS</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="cmessenger.php">
          <i class="fas fa-fw fa-envelope"></i>
          <span>Messenger <span id="mmcount"></span></span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        My Data
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-folder"></i>
          <span>Personal Documents</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Documents Data :</h6>
            <a class="collapse-item" href="docuploadp.php">Docs To be Uploaded(<?php echo isset($c1['SUM'])?$c1['SUM']:$requiredp_docs_client;?>)</a>
            <!-- <a class="collapse-item" href="cards.html">Uploaded Documents</a> -->
            <a class="collapse-item" href="approveddocsp.php">Reviewed Documents</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-folder"></i>
          <span>Education Documents</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Documents Data:</h6>
            <a class="collapse-item" href="docuploade.php">Docs to be Uploaded(<?php echo isset($ce1['SUM'])?$ce1['SUM']:$requirede_docs_client;?>)</a>
            <!-- <a class="collapse-item" href="utilities-border.html">Upoaded Documents</a> -->
            <a class="collapse-item" href="approveddocse.php">Reviewed Documents</a>
          </div>
        </div>
      </li>
      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities2" aria-expanded="true" aria-controls="collapseUtilities2">
          <i class="fas fa-fw fa-folder"></i>
          <span>Professional Documents</span>
        </a>
        <div id="collapseUtilities2" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Documents Data:</h6>
            <a class="collapse-item" href="docuploadpr.php">Docs to be Uploaded</a>
            <!-- <a class="collapse-item" href="utilities-border.html">Upoaded Documents</a> -->
            <a class="collapse-item" href="approveddocspr.php">Reviewed Documents</a>
          </div>
        </div>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Spouse Data
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          <i class="fas fa-fw fa-folder"></i>
          <span>Spouse Documents</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Documents Data :</h6>
            <a class="collapse-item" href="docuploadp_spouse.php">Docs To be Uploaded(<?php echo isset($cs1['SUM'])?$cs1['SUM']:$requiredp_docs_spouse;?>)</a>
            <!-- <a class="collapse-item" href="cards.html">Uploaded Documents</a> -->
            <a class="collapse-item" href="approveddocsps_spouse.php">Reviewed Documents</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities4" aria-expanded="true" aria-controls="collapseUtilities4">
          <i class="fas fa-fw fa-folder"></i>
          <span>Education Documents</span>
        </a>
        <div id="collapseUtilities4" class="collapse" aria-labelledby="headingUtilities2" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Documents Data:</h6>
            <a class="collapse-item" href="docuploade_spouse.php">Docs to be Uploaded(<?php echo isset($ces1['SUM'])?$ces1['SUM']:$requirede_docs_spouse;?>)</a>
            <!-- <a class="collapse-item" href="utilities-border.html">Upoaded Documents</a> -->
            <a class="collapse-item" href="approveddocse_spouse.php">Reviewed Documents</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities3" aria-expanded="true" aria-controls="collapseUtilities3">
          <i class="fas fa-fw fa-folder"></i>
          <span>Professional Documents</span>
        </a>
        <div id="collapseUtilities3" class="collapse" aria-labelledby="headingUtilities2" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Documents Data:</h6>
            <a class="collapse-item" href="docuploadpr_spouse.php">Docs to be Uploaded</a>
            <!-- <a class="collapse-item" href="utilities-border.html">Upoaded Documents</a> -->
            <a class="collapse-item" href="approveddocspr_spouse.php">Reviewed Documents</a>
          </div>
        </div>
      </li>
      <!-- Heading -->
      <!-- <div class="sidebar-heading">
        Talk to us
      </div> -->

      <!-- Nav Item - Pages Collapse Menu -->
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Coversations</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Whatsapp:</h6>
            <a class="collapse-item" href="whatsapp_send.php">Send</a>
            <a class="collapse-item" href="register.html">Inbox</a>
            <a class="collapse-item" href="forgot-password.html">Recieved</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Email:</h6>
            <a class="collapse-item" href="email_send.php">Send</a>
            <a class="collapse-item" href="inbox_email.php">Inbox</a>
            <a class="collapse-item" href="blank.html">Recieved</a>
          </div>
        </div>
      </li> -->

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">


            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$cl1['fname']?></span>
                <img class="img-profile rounded-circle" src="https://cdn.pixabay.com/photo/2019/08/30/10/29/sunflower-4440930__340.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="profile.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logoutc.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

       

     