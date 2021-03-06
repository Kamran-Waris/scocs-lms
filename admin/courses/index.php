<?php  include('../includes/header.php'); ?>
<?php  include('../auth/session.php'); ?> 
<?php $page = 'courses'; ?>
<!-- Title -->
<title>Courses | SCOCS LMS</title>

<?php include('../includes/navbar.php') ?>
        
        <div class="container-fluid main-content">
  
			<div class="row-fluid">
                <div class="span6">
                    <h2>Courses</h2>
                </div>
            </div>
            
			<div style="height:20px;"></div>

            <div class="row-fluid">
		
                <div class="span12" id="content">
                     <div class="row-fluid">
					 <a href="add_course.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Course</a>
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Course List</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
									<form action="delete_course.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<a data-toggle="modal" href="#course_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
									<?php include('modal_delete.php'); ?>
										<thead>
										  <tr>
											    <th></th>
												<th>Course Code</th>
												<th>Course Title</th>
												<th></th>
										   </tr>
										</thead>
										<tbody>
											
												<?php
											$course_query = mysqli_query($conn,"select * from course")or die(mysqli_error($conn));
											while($row = mysqli_fetch_array($course_query)){
											$id = $row['course_id'];
											?>
										
											<tr>
													<td width="30">
													<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
													</td>
													<td><?php echo $row['course_code']; ?></td>
													<td><?php echo $row['course_title']; ?></td>
												
													<td width="30"><a href="edit_course.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"></i> </a></td>
										</tr>
											
											<?php } ?>   
                              
										</tbody>
									</table>
									</form>
                                </div>
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