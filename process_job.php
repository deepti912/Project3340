<?php 
require_once('config.php');
?>

<?php 

if(isset($_POST)) {
			$jobtitle = $_POST['jobtitle'];
			$location = $_POST['location'];
			$description = $_POST['description'];
			$employer_id = $_POST['employer_id'];

			$sql = "INSERT INTO jobs (jobtitle, location, description, employer_id) VALUES (?, ?, ?, ?)";
			$stmtinsert = $db->prepare($sql);
			$result = $stmtinsert->execute([$jobtitle, $location, $description, $employer_id]);
			if($result) {
				echo 'Successfully saved.';
			}
			else {
				echo 'Errors while saving the data';
			}
}
else {

	echo 'No data';
}


 ?>