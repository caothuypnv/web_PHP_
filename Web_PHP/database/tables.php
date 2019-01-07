<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("connect.php");
mysqli_set_charset($link,"utf8");
$sql1 = "CREATE TABLE products (
 id int(11) NOT NULL AUTO_INCREMENT,
 name varchar(255) default null,
 price int(11) default null,
 quantity int(11) default null,
 category_id int(11) NOT NULL,
 comments varchar(500) default null,
 Images  varchar(255) default null,
 PRIMARY KEY (id),
 FOREIGN KEY (category_id) REFERENCES categories (id))";



$sql = "CREATE TABLE categories (
 id int(11) NOT NULL AUTO_INCREMENT,
 name varchar(255) default null,
 description text,
 PRIMARY KEY (id))";



$sql2 = "CREATE TABLE  EMPLOYEES(
	id int(11) auto_increment primary key not null,
    name varchar(255) not null,
	birthday date not null,
    address varchar(255) not null,
    phone varchar(30) not null)";


$sql3 = "CREATE TABLE  CUSTOMERS(
	id int(11) auto_increment primary key not null,
    name varchar(255) not null,
    address varchar(255),
    phone varchar(30) not null)";





if(mysqli_query($link, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
if(mysqli_query($link, $sql1)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
 }
if(mysqli_query($link, $sql2)){
     echo "Table created successfully.";
 } else{
     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
 }
if(mysqli_query($link, $sql3)){
    echo "Table created successfully.";
} else{
     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
mysqli_close($link);

?>	

