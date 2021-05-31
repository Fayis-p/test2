<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Task1</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Result <b>Portal</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addStudentModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Student</span></a>
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Roll No</th>
						<th>Student Name</th>
						<th>Email</th>
						<th>Mobile</th>
						<th>Dept</th>
						<th>Subject</th>
						<th>Mark obtain</th>
						<th>Result</th>
						<th>Grade</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php
						include 'connection.php';
						$sql = "SELECT * FROM student";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
					?>	
					<tr>
						<td><?=$row['rollno'];?></td>
						<td><?=$row['name'];?></td>
						<td><?=$row['email'];?></td>
						<td><?=$row['mobile'];?></td>
						<td><?=$row['dept'];?></td>
						<td><?=$row['subject'];?></td>
						<td><?=$row['mark'];?></td>
						<td><?=$row['result'];?></td>
						<td><?=$row['grade'];?></td> 
						<td>
							<a href="#editStudentModal" data-id="<?=$row['id'];?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteStudentModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
					<?php	
						}
						}
					?>
					
				</tbody>
			</table>
			<div class="clearfix">
				<div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Previous</a></li>
					<li class="page-item"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item active"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Next</a></li>
				</ul>
			</div>
		</div>
	</div>        
</div>
<!-- Edit Modal HTML -->
<div id="addStudentModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="formadd" method="post">
				<div class="modal-header">						
					<h4 class="modal-title">Add Student</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="alert alert-success alert-dismissible" id="success" role="alert" style="display:none;">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Roll No</label>
						<input type="text" name="rollno" id="rollno" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Student Name</label>
						<input type="text" name="name" id="name" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" id="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Mobile</label>
						<input type="text" name="mobile" id="mobile" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Dept</label>
						<input type="text" name="dept" id="dept" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Subject</label>
						<input type="text" name="subject" id="subject" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Mark Option</label>
						<input type="text" name="mark" id="mark" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Result</label>
						<input type="text" name="result" id="result" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Grade</label>
						<input type="text" name="grade" id="grade" class="form-control" required>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" id="btnadd" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
<div id="editStudentModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Edit Student</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Roll No</label>
						<input type="text" name="rollno" id="" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Student Name</label>
						<input type="text" name="name" id="" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" id="" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Mobile</label>
						<input type="text" name="mobile" id="" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Dept</label>
						<input type="text" name="dept" id="" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Subject</label>
						<input type="text" name="subject" id="" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Mark Option</label>
						<input type="text" name="mark" id="" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Result</label>
						<input type="text" name="result" id="" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Grade</label>
						<input type="text" name="grade" id="" class="form-control" required>
					</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" id="btnedit" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteStudentModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Delete Student</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Are you sure you want to delete these Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#mark").change(function(){
		   var mark = $(this).val();
		   if(mark==50 || mark>50)
			{
				$('#result').val('Passed');
				$('#grade').val('C');
				if(mark>59 || mark<70)
				{
					$('#grade').val("B");
				}
				else if(mark==70 || mark>70)
				{
					$('#grade').val("A");
				}
				else if(mark==80 || mark>80)
				{
					$('#grade').val("A+");
				}
				else if(mark==90 || mark>90)
				{
					$('#grade').val("S");
				}
				else{}
			}
			else{
				$('#result').val('failed');
				$('#grade').val('D');
			}
	  	});
	});
</script>
<script type="text/javascript">
$(document).ready(function() {
	$('#btnadd').on('click', function() {
		
		$("#btnadd").attr("disabled", "disabled");

		var rollno = $('#rollno').val();
		var name = $('#name').val();
		var email = $('#email').val();
		var mobile = $('#mobile').val();
		var dept = $('#dept').val();
		var subject = $('#subject').val();
		var mark = $('#mark').val();
		var result = $('#result').val();
		var grade = $('#grade').val();

			$.ajax({
				
				url: "action.php",
				type: "POST",
				dataType:"json",
				data: {
					rollno: rollno,
					name: name,
					email: email,
					mobile: mobile,
					dept: dept,
					subject: subject,
					mark: mark,
					result: result,
					grade: grade				
				},
				cache: false,
				success: function(dataResult){
					
					var dataResult = JSON.parse(dataResult);
					if(dataResult.success){
						$("#btnadd").removeAttr("disabled");
						$('#formadd').find('input:text').val('');
						$("#success").show();
						$('#success').html('Data added successfully !');
						setInterval(function(){ 
                            $('.alert-success').hide();
                            $("#formadd").hide();  
                            location.reload();
                        }, 1000);						
					}
					else if(dataResult.statusCode==201){
					   alert("Error occured !");
					}
					
				}
			});
		
	});
});
</script>
<script type="text/javascript">
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
</body>
</html>