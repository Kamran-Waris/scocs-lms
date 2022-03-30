<?php  include('../includes/header.php'); ?>
<?php  include('../auth/session.php'); ?> 
<?php $page = 'dashboard'; ?> 
<!-- Title -->
<title>Dashboard | SCOCS LMS</title>

<?php include('../includes/navbar.php') ?>
        
        <div class="container-fluid main-content">
            
            <div class="row-fluid">
                <div class="span6">
                    <h2>Dashboard</h2>
                </div>
            </div>
            <div style="height:20px;"></div>

            <div class="row-fluid">
                <!--/span-->
                <div class="span12" id="content">
						<div class="row-fluid"></div>
						
                    <div class="row-fluid">
            
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Data Numbers</div>
                            </div>
                            <div class="block-content collapse in">
							        <div class="span12">
						
									<?php 
								$query_reg_teacher = mysqli_query($conn,"select * from teacher")or die(mysqli_error($conn));
								$count_reg_teacher = mysqli_num_rows($query_reg_teacher);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_reg_teacher; ?>"><?php echo $count_reg_teacher; ?></div>
                                    <div class="chart-bottom-heading"><strong>Registered Teacher</strong>

                                    </div>
                                </div>
								
								<?php 
								$query_teacher = mysqli_query($conn,"select * from teacher")or die(mysqli_error($conn));
								$count_teacher = mysqli_num_rows($query_teacher);
								?>
								
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_teacher; ?>"><?php echo $count_teacher ?></div>
                                    <div class="chart-bottom-heading"><strong>Teachers</strong>

                                    </div>
                                </div>
								
								<?php 
								$query_student = mysqli_query($conn,"select * from student")or die(mysqli_error($conn));
								$count_student = mysqli_num_rows($query_student);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_student ?>"><?php echo $count_student ?></div>
                                    <div class="chart-bottom-heading"><strong>Registered Students</strong>

                                    </div>
                                </div>
								
								
										<?php 
								$query_student = mysqli_query($conn,"select * from student")or die(mysqli_error($conn));
								$count_student = mysqli_num_rows($query_student);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_student ?>"><?php echo $count_student ?></div>
                                    <div class="chart-bottom-heading"><strong>Students</strong>

                                    </div>
                                </div>
								
								
								
								
							
								
									<?php 
								$query_class = mysqli_query($conn,"select * from class")or die(mysqli_error($conn));
								$count_class = mysqli_num_rows($query_class);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_class; ?>"><?php echo $count_class; ?></div>
                                    <div class="chart-bottom-heading"><strong>Class</strong>

                                    </div>
                                </div>
								
								
										<?php 
								$query_file = mysqli_query($conn,"select * from files")or die(mysqli_error($conn));
								$count_file = mysqli_num_rows($query_file);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_file; ?>"><?php echo $count_file; ?></div>
                                    <div class="chart-bottom-heading"><strong>Downloadable File</strong>

                                    </div>
                                </div>
								
								
										<?php 
								$query_course = mysqli_query($conn,"select * from course")or die(mysqli_error($conn));
								$count_course = mysqli_num_rows($query_course);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_course; ?>"><?php echo $count_course; ?></div>
                                    <div class="chart-bottom-heading"><strong>courses</strong>

                                    </div>
                                </div>
						
						
                            </div>
                        </div>
                        <!-- /block -->
						
                    </div>
                    </div>
                </div>
            </div>
    
          
        </div>

	<?php include('../includes/footer.php'); ?>
    
    </body>
</html>