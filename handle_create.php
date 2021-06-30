<?php  include('database.php'); ?>
<?php
	if (isset($_POST['submit'])) {
        //header("Location: http://localhost/ASM2-Cloud/product.php"); 
		$name = $_POST['name'];
		$quantity = $_POST['quantity'];
		$price = $_POST['price'];
        $image = $_POST['image'];
        $type = $_POST['type'];

        $sql = "INSERT INTO product (name, type, image, price, quantity) VALUES ( '$name', '$type', '$image', '$price','$quantity')";
        try {
            pg_query($conn, $sql); 
		    header('location: product.php');
            exit();
        } catch (Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }	
	}
?>