
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

$username = '';
$password = '';
$username_error = '';
$password_error = '';


if(isset($_REQUEST['username']))
{
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if( $username == "" || $password == "" )
    {
        if($username == "")
        {
            $username_error = 'The Username Field is required *';
        }

        if($password == "")
        {
            $password_error = 'The Password Field is required *';
        }

    }
    else
    {

        $sql = "SELECT * FROM teacher where username = '$username'";
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
                $_SESSION['teacher_logged_in'] = $row['teacher_id'];

                header("Location: ".$base_url."teacher/dashboard");
            }
            else
            {
                $password_error = 'The Password Field is incorrect.';
            }
        }
        else
        {
            $username_error = 'The Username Field does not match our record';
        }
    }

}


?>