
<?php 

//echo password_hash('admin@scocs123',PASSWORD_DEFAULT);

require_once '../config/config.php';

session_start();

if(isset($_SESSION['admin_logged_in']))
{
    header("Location: ".$base_url."admin/dashboard");
}

if(isset($_SESSION['teacher_logged_in']))
{
    header("Location: ".$base_url."teacher/dashboard");
}

if(isset($_SESSION['student_logged_in']))
{
    header("Location: ".$base_url."student/dashboard");
}

$roll_no = '';
$password = '';
$roll_no_error = '';
$password_error = '';


if(isset($_REQUEST['roll_no']))
{
    $roll_no = $_REQUEST['roll_no'];
    $password = $_REQUEST['password'];

    if( $roll_no == "" || $password == "" )
    {
        if($roll_no == "")
        {
            $roll_no_error = 'The Roll Number Field is required *';
        }

        if($password == "")
        {
            $password_error = 'The Password Field is required *';
        }

    }
    else
    {

        $sql = "SELECT * FROM student where roll_no = '$roll_no'";
        $result = $conn->query($sql);
        $nums = 0;
        if($result == true)
        {
            $nums = $result->num_rows;
        }
        
        if($nums > 0)
        {
            $row = $result->fetch_array();

            if(password_verify($password,$row['password']))
            {
                $_SESSION['student_logged_in'] = $row['student_id'];

                header("Location: ".$base_url."student/dashboard");
            }
            else
            {
                $password_error = 'The Password Field is incorrect.';
            }
        }
        else
        {
            $roll_no_error = 'The Roll Number Field does not match our record';
        }
    }

}


?>