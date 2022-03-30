<?php  include('../includes/header.php'); ?>
<?php  include('../auth/session.php'); ?> 
<?php $page = 'students'; ?>
<!-- Title -->
<title>Students | SCOCS LMS</title>

<?php include('../includes/navbar.php') ?>
        
        <div class="container-fluid main-content">
            
            <div class="row-fluid">
                <div class="span6">
                    <h2>Students</h2>
                </div>
            </div>
            <div style="height:20px;"></div>

            <div class="row-fluid">
				<div class="span3" id="adduser">
				<?php include('add_students.php'); ?>		   			
				</div>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Student List</div>
                            </div>
                            <div class="block-content collapse in">
								<div class="span12" id="studentTableDiv">
									<?php include('student_table.php'); ?>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


                </div>
            </div>

        </div>

<?php include('../includes/footer.php'); ?>
<script>
				
			jQuery(document).ready(function($){
				$("#add_student").submit(function(e){
					e.preventDefault();
					var _this = $(e.target);
					var formData = $(this).serialize();
					$.ajax({
						type: "POST",
						url: "save_student.php",
						data: formData,
						success: function(html){
							$.jGrowl("Student Successfully  Added", { header: 'Student Added' });
							$('#studentTableDiv').load('student_table.php', function(response){
								$("#studentTableDiv").html(response);
								$('#example').dataTable( {
									"sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>",
									"sPaginationType": "bootstrap",
									"oLanguage": {
										"sLengthMenu": "_MENU_ records per page"
									}
								} );
								$(_this).find(":input").val('');
								$(_this).find('select option').attr('selected',false);
								$(_this).find('select option:first').attr('selected',true);
							});
						}
					});
				});
			});
			</script>		
</body>
</html>