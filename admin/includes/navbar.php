</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar-o">
            <div class="sidebar-o-header">
                <img src="<?php echo $base_url; ?>frontend_assets/auth_assets/images/logo.png">
            </div>

            <ul class="list-unstyled components">
                <!-- <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle w-100">Home<i class="icon-angle-down pull-right"></i></a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="#">Home 1</a>
                    </li>
                    <li>
                        <a href="#">Home 2</a>
                    </li>
                    <li>
                        <a href="#">Home 3</a>
                    </li>
                </ul>
            </li> -->
                <li class="<?php if($page == 'dashboard') echo 'active'; ?>"> <a href="<?php echo $base_url;?>admin/dashboard"><i class="icon-home"></i>&nbsp;Dashboard <i
                            class="icon-chevron-right pull-right"></i></a> </li>
                <li class="<?php if($page == 'departments') echo 'active'; ?>">
                    <a href="<?php echo $base_url;?>admin/departments"><i class="icon-building"></i> Departments <i
                            class="icon-chevron-right pull-right"></i></a>
                </li>
                <li class="<?php if($page == 'classes') echo 'active'; ?>">
                    <a href="<?php echo $base_url;?>admin/classes"><i class="icon-group"></i> Classes <i
                            class="icon-chevron-right pull-right"></i></a>
                </li>
                <li class="<?php if($page == 'courses') echo 'active'; ?>">
                    <a href="<?php echo $base_url;?>admin/courses"><i class="icon-book"></i> Courses <i
                            class="icon-chevron-right pull-right"></i></a>
                </li>
                <li class="<?php if($page == 'students') echo 'active'; ?>">
                    <a href="<?php echo $base_url;?>admin/students"><i class="icon-group"></i> Students <i
                            class="icon-chevron-right pull-right"></i></a>
                </li>
                <li class="<?php if($page == 'teachers') echo 'active'; ?>">
                    <a href="<?php echo $base_url;?>admin/teachers"><i class="icon-group"></i> Teachers <i
                            class="icon-chevron-right pull-right"></i></a>
                </li>
                <li class="<?php if($page == 'admin_user') echo 'active'; ?>">
                    <a href="#"><i class="icon-user"></i> Admin Users <i
                            class="icon-chevron-right pull-right"></i></a>
                </li>
                <li class="<?php if($page == 'downloadable') echo 'active'; ?>">
                    <a href="#"><i class="icon-download"></i> Course Material <i
                            class="icon-chevron-right pull-right"></i></a>
                </li>
                <li class="<?php if($page == 'assignment') echo 'active'; ?>">
                    <a href="#"><i class="icon-upload"></i> Uploaded Assignments <i
                            class="icon-chevron-right pull-right"></i></a>
                </li>
                <li class="<?php if($page == 'content') echo 'active'; ?>">
                    <a href="#"><i class="icon-file"></i> Results <i
                            class="icon-chevron-right pull-right"></i></a>
                </li>
                <li class="<?php if($page == 'user_log') echo 'active'; ?>">
                    <a href="#"><i class="icon-file"></i> User Log <i
                            class="icon-chevron-right pull-right"></i></a>
                </li>
                <li class="<?php if($page == 'activity_log') echo 'active'; ?>">
                    <a href="#"><i class="icon-file"></i> Activity Log <i
                            class="icon-chevron-right pull-right"></i></a>
                </li>
                <!--li class="<?php if($page == 'school_year') echo 'active'; ?>">
                    <a href="school_year.php"><i class="icon-calendar"></i> School Year <i
                            class="icon-chevron-right pull-right"></i></a>
                </li-->
                <li class="<?php if($page == 'calendar_of_events') echo 'active'; ?>">
                    <a href="#"><i class="icon-calendar"></i>Calendar of Events <i
                            class="icon-chevron-right pull-right"></i></a>
                </li>
            </ul>

        </nav>
        <!-- Page Content -->
        <div id="content-o">

            <div class="navbar" style="
    padding: 15px 10px;
    background: #fff;
    border: none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);">
                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="icon-align-left"></i>
                    <span>Menu</span>
                </button>
                <ul class="nav pull-right">
                    <li class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"
                            style="padding:10px;position:relative;bottom:10px;background-color:#fff"><img class="img-circle"
                                src="<?php echo $base_url; ?>frontend_assets/auth_assets/images/logo.png"
                                style="display: inline-block;height:40px;width:40px;padding-right:10px"><b>Admin</b> <i
                                class="caret" style="position:relative;top:10px;"></i>

                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a tabindex="-1" href="#">Profile</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a tabindex="-1" href="../auth/logout.php"><i class="icon-signout"></i>&nbsp;Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>