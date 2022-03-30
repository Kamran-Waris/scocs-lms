<?php require_once('../../config/config.php'); ?>
<?php

if (isset($_POST['delete_course']) && isset($_POST['selector'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($conn,"DELETE FROM course where course_id='$id[$i]'");
}
}
?>
<script>
	window.location = "./";
</script>