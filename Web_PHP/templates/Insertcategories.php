
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Exercises</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</head>
	<body>
		<div class="container-fluid" style="width: 30%">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title"> Danh mục sản phẩm</h3>
				</div>
				<div class="panel-body">
					<form action="Insertcategories.php" method="POST" role="form">	
						<div class="form-group">
							<label for="">Tên danh mục</label>
							<input type = "text" class="form-control" name ="name" id = "name" placeholder="Input field" 
									value = "" required="required">
						</div>
						<div class="form-group">
							<label for="">Comment</label>
							<input type = "text" class="form-control" name ="description" id = "description" placeholder="Input field" 
									value = "" required="required"  min="1">
						</div>
									
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="margin-left: 30%">
						<button type="submit" class="btn btn-primary" value="Insert">Insert</button>
					</div>
					
					</form>
				</div>
			</div>
		</div>
	</body>
</html> 

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

require_once("../database/connect.php");

$sql = "INSERT INTO categories (name,description) VALUES ( ?, ?)";


if($stmt = $link->prepare($sql)){

   $stmt->bind_param("ss", $name, $description);
   mysqli_set_charset($link,"utf8");
   $name = $_POST['name'];
   $description = $_POST['description'];
   
  
   $stmt->execute();
   
  
   echo "Records inserted successfully.";
}
 else{
   echo "ERROR: Could not prepare query: $sql. " . $link->error;
}

$stmt->close();

?>

	