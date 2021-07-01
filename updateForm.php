<?php include('database.php'); ?>

<?php
     if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$record = pg_query($conn, "SELECT * FROM product WHERE id = '$id'");

		if ($record) {
			$product = pg_fetch_assoc($record);
			$name = $product['name'];
			$quantity = $product['quantity'];
            $price = $product['price'];
            $image = $product['image'];
            $type = $product['type'];
		}
	}
?>
<?php 
    if (isset($_POST['update'])) {
        $updatedName = $_POST['name'];
        $updatedQuantity = $_POST['quantity'];
        $updatedPrice = $_POST['price'];
        $updatedType = $_POST['type'];
        $updatedImage = $_POST['image'];
    
        pg_query($conn, "UPDATE product
        SET name = '$updatedName', image= '$updatedImage', type ='$updatedType', price='$updatedPrice', quantity = '$updatedQuantity'
        WHERE id = $id");
        // $_SESSION['message'] = "Address updated!"; 
        header('location: product.php');
        exit();
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Update</title>
  </head>
  <body>
    <h3>Update Product</h3>
    <div class="container">
        <form action="updateForm.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" 
                    aria-describedby="emailHelp" placeholder="Enter product name"
                    name="name"
                    value="<?php echo $name ?>"
                >
            </div>
            <div class="form-group">
                <br>
                <label for="exampleInputPassword1">image</label>
                <input type="file" class="form-control" 
                id="exampleInputPassword1" 
                name="image"
                value="<?php echo $image ?>"
                >
            </div>
            <div class="form-group">
                <br>
            <label for="cars">Choose type:</label>
            <select name="type" id="cars">
                <option value="SPORT">SPORT</option>
                <option value="SUV">SUV</option>
                <option value="LUXURY">LUXURY</option>
            </select>
            </div>
            <div class="form-group">
                <br>
                <label for="exampleInputPassword1">Price</label>
                <input type="text" class="form-control" 
                id="exampleInputPassword1" placeholder="Enter Price"
                name="price"
                value="<?php echo $price ?>"
                >
            </div>
            <div class="form-group">
                <br>
                <label for="exampleInputPassword1">Quantity</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Quantity"
                name="quantity"
                value="<?php echo $quantity?>"
                >
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name='update'>Submit</button>
        </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
   
  </body>
</html>