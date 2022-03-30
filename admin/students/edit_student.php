<?php  include('../includes/header.php'); ?>
<?php  include('../auth/session.php'); ?>  
<?php $get_id = $_GET['id']; ?>
<?php $page = 'students'; ?>
<!-- Title -->
<title>Edit Student | SCOCS LMS</title>

<?php include('../includes/navbar.php') ?>
        
        <div class="container-fluid main-content">
            
            <div class="row-fluid">
                <div class="span6">
                    <h2>Edit Student</h2>
                </div>
            </div>
            <div style="height:20px;"></div>

            <div class="row-fluid">
				<div class="span3" id="adduser">
				<?php include('edit_students_form.php'); ?>		   			
				</div>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Student List</div>
                            </div>
                            <div class="block-content collapse in">
									<div class="span12">
									<form action="delete_student.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<a data-toggle="modal" href="#student_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
									<?php include('modal_delete.php'); ?>
										<thead>
										  <tr>
												    <th></th>
												
													<th>Name</th>
													<th>ID Number</th>
											
													<th>Course Yr & Section</th>
													<th></th>
										   </tr>
										</thead>
										<tbody>
											
                                         <?php
                                    $query = mysqli_query($conn,"select * from student LEFT JOIN class ON class.class_id = student.class_id ORDER BY student.student_id DESC") or die(mysqli_error());
                                    while ($row = mysqli_fetch_array($query)) {
                                        $id = $row['student_id'];
                                        ?>

										<tr>
										<td width="30">
										<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
										</td>
         
                                        <td><?php echo $row['firstname'] . " " . $row['lastname']; ?></td> 
										<td><?php echo $row['username']; ?></td> 
								 
										<td width="100"><?php echo $row['class_name']; ?></td> 

										<td width="30"><a href="edit_student.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"></i> </a></td>
									 
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