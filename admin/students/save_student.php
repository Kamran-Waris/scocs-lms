<?php require_once('../../config/config.php'); ?> 
<?php
        
    $fn = $_POST['fn'];
    $ln = $_POST['ln'];        
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $class_id = $_POST['class_id'];
    $password = password_hash('12345678',PASSWORD_DEFAULT);
    $query = mysqli_query($conn,"select * from student where email  =  '$email' or phone  =  '$phone' ")or die(mysqli_error($conn));
    $count = mysqli_num_rows($query);
    
    if ($count > 0){ ?>
        <script>
            alert('Date Already Exist');
        </script>
        <?php
    }else{
        $query = mysqli_query($conn,"select * from class where class_id  =  '$class_id' ")or die(mysqli_error($conn));
        $count = mysqli_num_rows($query);
        $row = mysqli_fetch_array($query);
        $query = mysqli_query($conn,"select * from student where class_id  =  '$class_id' ")or die(mysqli_error($conn));
        $count = mysqli_num_rows($query);
        $un = $row['class_session'].'-scocs-lhr-'.$count+1;
        mysqli_query($conn,"insert into student (firstname,lastname,class_id,username,password,image,email,phone,dob)
        values ('$fn','$ln','$class_id','$un','$password','uploads/NO-IMAGE-AVAILABLE.jpg','$email','$phone','$dob')               
        ") or die(mysqli_error($conn)); 
    }
?>
