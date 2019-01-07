<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="row = 12">
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			<?php
                        	require_once("../database/connect.php");
                        	error_reporting(1);
                            $sql = "SELECT * FROM products";
                            $result = mysqli_query($link,$sql);
                            if($result)
                            {
                                while($row = mysqli_fetch_assoc($result))
                                {
                        ?>
                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['<?php
                        	require_once("../database/connect.php");
                        	error_reporting(1);
                            $sql = "SELECT * FROM categories";
                            $result = mysqli_query($link,$sql);
                            if($result)
                            {
                                while($row = mysqli_fetch_assoc($result))
                                {
                        ?>
                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>   
                        <?php
                                }
                            }
                       ?>']; ?></option>   
                        <?php
                                }
                            }
                       ?>
		</div>
		<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
			
		</div>
		
	</div>

</body>
</html>>