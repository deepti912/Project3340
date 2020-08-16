<?php 
require_once('config_employer.php');
?>

<?php 

if(isset($_POST)) {
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$email = $_POST['email'];
			$phonenumber = $_POST['phonenumber'];
			$password = $_POST['password'];

			$sql = "INSERT INTO employer (firstname, lastname, email, phonenumber, password) VALUES (?, ?, ?, ?, ?)";
			$stmtinsert = $db->prepare($sql);
			$result = $stmtinsert->execute([$firstname, $lastname, $email, $phonenumber, $password]);
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