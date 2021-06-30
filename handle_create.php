<?php  include('database.php'); ?>
<?php
    $name = "";
	$quantity = "";
	$price = 0;
    $image = "";
    $type = "";

	if (isset($_POST['submit'])) {
        //header("Location: http://localhost/ASM2-Cloud/product.php"); 
		$name = $_POST['name'];
		$quantity = $_POST['quantity'];
		$price = $_POST['price'];
        $image = $_POST['image'];
        $type = $_POST['type'];
        try {
            pg_query($conn, "INSERT INTO tbProduct (Name, Type, Image, Price, Quantity) VALUES ( '$name', '$type','$image' ,'$price','$quantity')"); 
		    header('location: product.php');
            exit();
        } catch (Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }	
	}
?>