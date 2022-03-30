<?php  include('../includes/header.php'); ?>
<?php  include('../auth/session.php'); ?> 
<?php $page = 'courses'; ?>
<!-- Title -->
<title>Add Course | SCOCS LMS</title>

<?php include('../includes/navbar.php') ?>
        
        <div class="container-fluid main-content">

            <div class="row-fluid">
		
						<div class="span12" id="content">
		                    <div class="row-fluid">
							
		                        <!-- block -->
		                        <div class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">Add Course</div>
		                            </div>
		                            <div class="block-content collapse in">
									<a href="./"><i class="icon-arrow-left"></i> Back</a>
									    <form class="form-horizontal" method="post">
										<div class="control-group">
											<label class="control-label" for="inputEmail">Course Code</label>
											<div class="controls">
											<input type="text" name="course_code" id="inputEmail" placeholder="Course Code">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Course Title</label>
											<div class="controls">
											<input type="text" class="span8" name="title" id="inputPassword" placeholder="course Title" required>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Number of Units</label>
											<div class="controls">
											<input type="text" class="span1" name="unit" id="inputPassword" required>
											</div>
										</div>
											<div class="control-group">
											<label class="control-label" for="inputPassword">Semester</label>
											<div class="controls">
												<select name="semester">
													<option></option>
													<option>1st</option>
													<option>2nd</option>
													<option>3rd</option>
													<option>4th</option>
													<option>5th</option>
													<option>6th</option>
													<option>7th</option>
													<option>8th</option>
												</select>
											</div>
										</div>
								
										<div class="control-group">
											<label class="control-label" for="inputPassword">Description</label>
											<div class="controls">
													<textarea name="description" id="ckeditor_full"></textarea>
											</div>
										</div>
												
																		
											
										<div class="control-group">
										<div class="controls">
										
										<button name="save" type="submit" class="btn btn-info"><i class="icon-save"></i> Save</button>
										</div>
										</div>
										</form>
										
										<?php
										if (isset($_POST['save'])){
										$course_code = $_POST['course_code'];
										$title = $_POST['title'];
										$unit = $_POST['unit'];
										$description = $_POST['description'];
										$semester = $_POST['semester'];
										
										
										$query = mysqli_query($conn,"select * from course where course_code = '$course_code' ")or die(mysqli_error($conn));
										$count = mysqli_num_rows($query);

										if ($count > 0){ ?>
										<script>
										alert('Data Already Exist');
										</script>
										<?php
										}else{
										mysqli_query($conn,"insert into course (course_code,course_title,description,unit,semester) values('$course_code','$title','$description','$unit','$semester')")or die(mysqli_error($conn));
										
										
										mysqli_query($conn,"insert into activity_log (date,username,action) values(NOW(),'$user_username','Add course $course_code')")or die(mysqli_error($conn));
										
										
										?>
										<script>
										window.location = "./";
										</script>
										<?php
										}
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