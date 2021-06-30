<?php 
    include('database.php');

 
        $id = $_GET['id'];
        $productName = $_POST['name'];
        $image = $_POST['image'];
        $type = $_POST['type'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];

        $sql = "UPDATE product
        SET name = '$productName', image= '$image', type =' $type', price='$price', quantity = '$quantity'
        WHERE id = $id";

        $result = pg_query($conn, $sql);
        header('location: product.php');
  

?>