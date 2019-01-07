
<?php
  include("connect.php"); 
try {
 
    $sql = 'SELECT id,
                    name,
                    price,
					quantity,
					category_id,
					comments,
					Images
               FROM products
              ORDER BY name';
   $result = mysqli_query($link,$sql);
} catch (PDOException $e) {
    die("Could not connect to the database $web_PHP:" . $e->getMessage());
}
$link = './images/';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>select</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <style type="text/css">
        	
        	img{
        		width: 100px;
        		height: 100px;
        	}
        </style>
    </head>
    <body>
        <div id="container">
            <h1>Products</h1>
            <table class="table table-bordered table-condensed">
                <thead>
                    <tr>
                        <th> name</th>
                        <th> price</th>
                        <th> quantity</th>
                        <th> category_id</th>
                        <th> comments</th>
                        <th> Images</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
               			while ($row=mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['name']) ?></td>
                            <td><?php echo htmlspecialchars($row['price']); ?></td>
                            <td><?php echo htmlspecialchars($row['quantity']); ?></td>
							<td><?php echo htmlspecialchars($row['category_id']) ?></td>
                            <td><?php echo htmlspecialchars($row['comments']); ?></td>
                            <td><img src="<?php echo $link.$row['Images'] ?>"></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
    </body>
</div>
</html>

