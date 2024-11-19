<?php include("config/database.php"); ?>
<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "crime_portal");

  // Initialize message variable
  $c_id = $_POST["c_id"];

  $msg = "";
  
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
    
  	$image = $_FILES['image']['name'];
    

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "UPDATE complaint SET images = '$image'WHERE c_id = $c_id";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
?>

