<?php 
require_once 'login1.php';

$conn = new mysqli($hn, $un, $pw, $db);

if ($conn->connect_error) die($conn->connect_error);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Career Right</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky top">
<div class ="container fluid">
	<h1>Career Right</h1>
	
	
	<button class= "navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="employer1.php?logout=true">Logout</a>
			</li>
		</ul>
	</div>
</div>
</nav>




<?php
if (isset($_POST['delete']))
{
  foreach($_POST['chk'] as $item) {
   
    $id = get_post($conn, $value);
    $query = "DELETE FROM jobs WHERE id='$item'";
    $result = $conn->query($query);
    if (!$result) echo "DELETE failed: $query<br>" . $conn->error . "<br><br>";
}
   
}
echo <<<_END

<script src="checkboxes.js"></script>
<link rel="stylesheet" type="text/css" href="table.css">


  <table>
  <thead>
   
    <tr>
      <th>Job ID</th>
      <th>Job Title</th>
      <th>Location</th>
      <th>Description</th>
      <th>Employer ID</th>
      <th><input type="checkbox" name="checkbox" onclick="check_all()"></th>
    </tr>
  </thead>
  
  
  
  <form action="employer2.php" method="post">
  <input type="submit" name="delete" value="DELETE RECORD">   
  
  
  
_END;

$query = "SELECT * FROM jobs";
$result = $conn->query($query);
if (!$result) die($conn->error);
$rows = $result->num_rows;

 

for ($j = 0;$j < $rows;++$j)
{
    echo '<tr>';
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    echo '<td>' . $row[id] . '</td>';
    echo '<td>' . $row[jobtitle] . '</td>';
    echo '<td>' . $row[location] . '</td>';
    echo '<td>' . $row[description] . '</td>';
    echo '<td>' . $row[employer_id] . '</td>';
    echo '<td><input type="checkbox"  name="chk[]" value="'.$row[id].'"></td>';
    echo '</tr>';
   
}
// echo "</table> </form>";  
$result->close();
$conn->close();

 

function get_post($conn, $var)
{
    return $conn->real_escape_string($_POST[$var]);
}

?>


	


</body>
</html>