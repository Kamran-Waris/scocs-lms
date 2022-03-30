<?php 

include('config/config.php');

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

?>
<!DOCTYPE html>
<html class="hide-sidebar ls-bottom-footer" lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SCOCS LMS</title>
  <link href="frontend_assets/auth_assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <link href="frontend_assets/auth_assets/css/vendor/all.css" rel="stylesheet">
  <link href="frontend_assets/auth_assets/css/app/app.css" rel="stylesheet">

 
</head>

<body class="login">

  <div id="content">
    <div class="container-fluid">
      <div class="lock-container">
        <div class="panel panel-default text-center paper-shadow" data-z="0.5">
          <h1 class="text-display-1 text-center margin-bottom-none">Login</h1>
          <img src="frontend_assets/auth_assets/images/logo.png" class="img-circle width-80">
            <div class="panel-body">
              <div class="form-group">
                  <a href="admin" class="btn btn-danger btn-block">Administration Login <i class="fa fa-fw fa-unlock-alt"></i></a>
              </div>
              <div class="form-group">
                  <a href="teacher" class="btn btn-warning btn-block">Teacher Login <i class="fa fa-fw fa-unlock-alt"></i></a>
              </div>
              <div class="form-group">
                  <a href="student" class="btn btn-primary btn-block">Student Login <i class="fa fa-fw fa-unlock-alt"></i></a>
              </div>
              <div style="height: 30px;"></div>
            </div>
          </div>
        </div>
        <div style="height: 20px;"></div>
</div>
      </div>
    </div>
  </div>

 <!-- Footer -->
<footer class="footer">
  <strong>SCOCS LMS</strong> &copy; Copyright 2022
</footer>
<!-- // Footer -->

</div>
<!-- /st-container -->

<!-- Inline Script for colors and config objects; used by various external scripts; -->
<script>
var colors = {
  "danger-color": "#e74c3c",
  "success-color": "#81b53e",
  "warning-color": "#f0ad4e",
  "inverse-color": "#2c3e50",
  "info-color": "#2d7cb5",
  "default-color": "#6e7882",
  "default-light-color": "#cfd9db",
  "purple-color": "#9D8AC7",
  "mustard-color": "#d4d171",
  "lightred-color": "#e15258",
  "body-bg": "#f6f6f6"
};
var config = {
  theme: "html",
  skins: {
    "default": {
      "primary-color": "#42a5f5"
    }
  }
};
</script>

<script src="frontend_assets/auth_assets/js/vendor/all.js"></script>

<script src="frontend_assets/auth_assets/js/app/app.js"></script>


</body>

</html>