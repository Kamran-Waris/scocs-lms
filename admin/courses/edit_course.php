<?php  include('../includes/header.php'); ?>
<?php  include('../auth/session.php'); ?> 
<?php $get_id = $_GET['id']; ?>
<?php $page = 'courses'; ?>
<!-- Title -->
<title>Dashboard | SCOCS LMS</title>

<?php include('../includes/navbar.php') ?>
        
        <div class="container-fluid main-content">
            
            <div class="row-fluid">
                <div class="span6">
                    <h2>Edit Course</h2>
                </div>
            </div>
            <div style="height:20px;"></div>

			<div class="row-fluid">
		
						<div class="span12" id="content">
		                    <div class="row-fluid">
									 <a href="add_course.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Course</a>
		                        <!-- block -->
		                        <div id="" class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">Edit Course</div>
		                            </div>
		                            <div class="block-content collapse in">
									<a href="./"><i class="icon-arrow-left"></i> Back</a>
									
									<?php
									$query = mysqli_query($conn,"select * from course where course_id = '$get_id'")or die(mysqli_error($conn));
									$row = mysqli_fetch_array($query);
									?>
									
									    <form class="form-horizontal" method="post">
										<div class="control-group">
											<label class="control-label" for="inputEmail">Course Code</label>
											<div class="controls">
											<input type="text" value="<?php echo $row['course_code']; ?>" name="course_code" id="inputEmail" placeholder="course Code">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Course Title</label>
											<div class="controls">
											<input type="text" value="<?php echo $row['course_title']; ?>" class="span8" name="title" id="inputPassword" placeholder="course Title" required>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Number of Units</label>
											<div class="controls">
											<input type="text" value="<?php echo $row['unit']; ?>" class="span1" name="unit" id="inputPassword" required>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Description</label>
											<div class="controls">
													<textarea name="description" id="ckeditor_full">
													<?php echo $row['description']; ?>
													</textarea>
											</div>
										</div>
												
																		
											
										<div class="control-group">
										<div class="controls">
										
										<button name="update" type="submit" class="btn btn-info"><i class="icon-save icon-large"></i> Update</button>
										</div>
										</div>
										</form>
										
										<?php
										if (isset($_POST['update'])){
										$course_code = $_POST['course_code'];
										$title = $_POST['title'];
										$unit = $_POST['unit'];
										$description = $_POST['description'];
										
										
									
										mysqli_query($conn,"update course set course_code = '$course_code' ,
																		course_title = '$title',
																		unit  = '$unit',
																		description = '$description'
																		where course_id = '$get_id' ")or die(mysqli_error($conn));
																		
										mysqli_query($conn,"insert into activity_log (date,username,action) values(NOW(),'$user_username','Edit course $course_code')")or die(mysqli_error($conn));
										
										?>
										<script>
										window.location = "./";
										</script>
										<?php
										}
										
										
										?>
									
								
		                            </div>
		                        </div>
		                        <!-- /block -->
		                    </div>
		                </div>
            </div>
		 
          
	</div>

<?php include('../includes/footer.php'); ?>

</body>
</html>