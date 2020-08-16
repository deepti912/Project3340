<?php 
require_once('config.php');
 ?>
 
 
<!DOCTYPE html>
<html>
<head>
	<title>Job Registration</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div>
		<form action="postjob.php" method="post">
			<div class="container">
				
					<div class="row">
						<div class="col-sm-3">
							<h1>Job Registration</h1>
							
							<hr class="mb-3">
							<label for="jobtitle"><b>Job Title</b></label>
							<input class="form-control" id="jobtitle" type="text" name="jobtitle" required>

							<label for="location"><b>Location</b></label>
							<input class="form-control" id="location" type="text" name="location" required>
							
							<label for="description"><b>Job Description</b></label>
							<input class="form-control" id="description" type="text" name="description" required>

							<label for="employer_id"><b>Employer ID</b></label>
							<input class="form-control" id="employer_id" type="number" name="employer_id" required>

							<hr class="mb-3">
							
							<button class="btn btn-primary" id="register" onclick="window.location.href='employee2.php';">Post</button> 
						</div>
					</div>
				
				
			</div>
		</form>
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();
			if(valid) {

				var jobtitle = $('#jobtitle').val();
				var location = $('#location').val();
				var description = $('#description').val();
				var employer_id = $('#employer_id').val();
				
				e.preventDefault();

				$.ajax({
					type: 'POST',
					url: 'process_job.php',
					data: {jobtitle: jobtitle, location: location, description: description, employer_id: employer_id},
					success: function(data) {
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
							})
					},
					error: function(data) {
					Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data',
								'type': 'error'
							})
					},
				});

				
			}
			else {
				
			}
			
		});
		
	});
</script>
</body>
</html>