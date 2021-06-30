<?php  include('database.php'); ?>
<?php
	if (isset($_POST['submit'])) {
        //header("Location: http://localhost/ASM2-Cloud/product.php"); 
		$name = $_POST['name'];
		$quantity = $_POST['quantity'];
		$price = $_POST['price'];
        $image = $_POST['image'];
        $type = $_POST['type'];
        try {
            pg_query($conn, "INSERT INTO 'tbProduct' ('Name', 'Type', 'Price', 'Image', 'Quantity') VALUES ( '$name', '$type' ,'$price', '$image','$quantity');"); 
		    header('location: product.php');
            exit();
        } catch (Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }	
	}
?>