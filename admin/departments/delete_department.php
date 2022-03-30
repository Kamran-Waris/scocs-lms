<?php require_once('../../config/config.php'); ?>
<?php
if (isset($_POST['delete_department']) && isset($_POST['selector'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($conn,"DELETE FROM department where department_id='$id[$i]'");
}
}
header("location: ".$base_url."admin/departments");
?>