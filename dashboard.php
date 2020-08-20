<?php 	include_once("header.php");	

$ie = $obj->display('ielts','id=1');
if($ie->num_rows){
$ie1= $ie->fetch_array();
}
if(isset($_GET['task'])){
	$data1 = array(
    			"status" => 1
				);
	$obj->update('dm_task',$data1,'id='.$_GET['task']);
	
header("location:dashboard.php");

}
?>
		

			<div class="col-sm-10">

			<div class="row mb-3">

			<div class="col-sm-6">

			<div class="apoint"><h5>Today's Appointments</h5>

			
			<div style="overflow-y:scroll; overflow-x:hidden; height:96px;">
			<?php $task=$obj->display('appointments','counsilorid='.$_SESSION['ID'].' and date="'.date('Y-m-d').'"');
			while($task1=$task->fetch_array())
			{
				$led=$obj->display('dm_lead','id='.$task1['leadid']);
				$led1=$led->fetch_array();
			if($led1['service_interest']==2) {$ld="DMB";}
			if($led1['service_interest']==1) {$ld="DMS";}
			?>
			<div class="row"><div class="col-8"><a href="lead_edit.php?lead=<?php echo $task1["leadid"];?>" style="color:#fff"><?php echo $ld.''.$task1["leadid"];?></a></div><div class="col-4"><?php echo date('d-m-Y');?></div></div>
			<?php } ?>
			</div>
			

			</div>

			</div>

			<div class="col-sm-6">

			<div class="todo"><h5>To Do's</h5>
			<div style="overflow-y:scroll; overflow-x:hidden; height:96px;">
			<?php $task=$obj->display('dm_task','asignTo='.$_SESSION['ID'].' and dob="'.date('Y-m-d').'"');
			while($task1=$task->fetch_array())
			{
			$emp=$obj->display('dm_employee','id='.$task1['asignBy']); $emp1=$emp->fetch_array();
			?>
			<div class="row"><div class="col-10"><?php echo $emp1['name'].' says '.$task1['task'];?></div><div class="col-2"><?php if($task1['status']==0) {?><a href="dashboard.php?task=<?=$task1['id'];?>">Status</a><?php } else { echo "<h6>Done</h6>";} ?></div></div>
			<?php } ?>
			</div>

			</div>

			</div>

			</div>

			

			<div class="row">
<?php if($_SESSION['TYPE']=="RM" || $_SESSION['TYPE']=="SA" || $_SESSION['TYPE']=="FMP" || $_SESSION['TYPE']=="DGM" || $_SESSION['TYPE']=="RMSM" || $_SESSION['TYPE']=="FO") {
?>
			<div class="col-sm-6">
			<div class="apoint"><h5>Balance collection for today</h5>
			<div style="overflow-y:scroll; overflow-x:hidden; height:96px;">

			<?php $bal=$obj->display('dm_lead','payBalance!=0 and dueDate="'.date('Y-m-d').'"');
			while($bal1=$bal->fetch_array())
			{
			?>
			<div class="row"><div class="col-8"><?=$bal1['fname'];?></div><div class="col-4">AED <?=$bal1['payBalance'];?></div></div>
			<?php
			} 
			?>
			</div>
			</div>
			</div>
   <?php } ?>
<?php if($_SESSION['TYPE']=="AM" || $_SESSION['TYPE']=="ABM" || $_SESSION['TYPE']=="BM" || $_SESSION['TYPE']=="IC" || $_SESSION['TYPE']=="MC" || $_SESSION['TYPE']=="SIC"){
?>
  <div class="col-sm-6">
			<div class="apoint"><h5>Balance collection for today</h5>
			<div style="overflow-y:scroll; overflow-x:hidden; height:96px;">

			<?php $bal=$obj->display('dm_lead','payBalance!=0 and Counsilor="'.$_SESSION['ID'].'" and dueDate="'.date('Y-m-d').'"');
			while($bal1=$bal->fetch_array())
			{
			?>
			<div class="row"><div class="col-8"><?=$bal1['fname'];?></div><div class="col-4">AED <?=$bal1['payBalance'];?></div></div>
			<?php
			} 
			?>
			</div>
			</div>
			</div>

			<?php } ?>


			<div class="col-sm-6">

			<div class="todo"><h5>Follow-up for the day</h5>

			<div style="overflow-y:scroll; overflow-x:hidden; height:96px;">
			<?php $task=$obj->display('dm_lead','assignTo='.$_SESSION['ID'].' and followup="'.date('Y-m-d').'"');
			while($task1=$task->fetch_array())
			{
			if($task1['service_interest']==2) {$ld="DMB";}
			if($task1['service_interest']==1) {$ld="DMS";}
			?>
			<div class="row"><div class="col-8"><a href="lead_edit.php?lead=<?php echo $task1["id"];?>" style="color:#fff"><?php echo $ld.''.$task1["id"];?></a></div><div class="col-4"><?php echo date('d-m-Y');?></div></div>
			<?php } ?>
			</div>

			</div>

			</div>

			</div>
            <br/>
			<div><h5>IELTS Schedule</h5>
			<br/>
			<Label>NEXT IELTS SESSION IS ON : <?php echo $ie1['timing']; ?> </Label><br/>
			<?php if ($_SESSION['TYPE']=="SA"){ ?>
			<label>link for Session</label>: <a href="<?php echo $ie1['link']; ?>" target="_blank"><?php echo $ie1['link']; ?></a>
			<?php } ?>

			</div>

			

			</div>

		

<?php 	include_once("footer.php");	

?>

