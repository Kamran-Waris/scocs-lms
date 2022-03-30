<?php require_once('../../config/config.php'); ?>
<?php
if (isset($_POST['delete_class']) && isset($_POST['selector'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($conn,"DELETE FROM class where class_id='$id[$i]'");
    mysqli_query($conn,"delete from teacher_class  where  teacher_class_id = '$id[$i]' ")or die(mysqli_error($conn));
    mysqli_query($conn,"delete from teacher_class_student  where  teacher_class_id = '$id[$i]' ")or die(mysqli_error($conn));
    mysqli_query($conn,"delete from teacher_class_announcements  where  teacher_class_id = '$id[$i]' ")or die(mysqli_error($conn));
    mysqli_query($conn,"delete from teacher_notification  where  teacher_class_id = '$id[$i]' ")or die(mysqli_error($conn));
    mysqli_query($conn,"delete from class_subject_overview where  teacher_class_id = '$id[$i]' ")or die(mysqli_error($conn));
}
}
header("location: ".$base_url."admin/classes");
?>