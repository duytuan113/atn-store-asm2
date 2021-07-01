<?php  include('database.php'); ?>
<?php 
  $products = [];
  $getTypeQuery = "SELECT DISTINCT type FROM product ORDER BY type ASC";
  $typeResult = pg_query($conn, $getTypeQuery);
  
  $sql = "SELECT * FROM product";
  $result = pg_query($conn, $sql);
  while($row = pg_fetch_assoc($result)){
      array_push($products, $row);
  };

?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>ShopATN</title>
  </head>
  <body>
    <div class="grid-container">
      <header class="row">
        <div>
          <a class="brand" href="home.php">ATN STORE</a>
        </div>
        <div>
          <a href="home.php">Home</a>
          <a href="cart.php">Contact</a>
          <a href="cart.php">Cart</a>
          <a href="sign_in.php">Sign In</a>
        </div>
      </header>
      <main>
      <?php  while($typeName = pg_fetch_assoc($typeResult)) {?>
            
        <div>
          <h3><?php echo $typeName['type'] ?></h3>
              <?php foreach($products as $product) { ?>  
                  <?php if($product['type'] == $typeName['type']) { ?>
            <div class="row center">
                  <div class="card">
                    <a href="product.html">
                      <!-- image size: 680px by 830px -->
                      <img class="medium" src="image/<?php echo $product['image'] ?>" alt="product" />
                    </a>
                    <div class="card-body">
                      <a href="product.html">
                        <h2><?php echo $product['name'] ?></h2>
                      </a>
                      <div class="rating">
                        <span> <i class="fa fa-star"></i> </span>
                        <span> <i class="fa fa-star"></i> </span>
                        <span> <i class="fa fa-star"></i> </span>
                        <span> <i class="fa fa-star"></i> </span>
                        <span> <i class="fa fa-star"></i> </span>
                      </div>
                      <div class="price">Price: $<?php echo $product['price'] ?></div>
                      <div class="price">Quantity: <?php echo $product['quantity']?></div>
                    </div>
                
              </div>
                  <?php } ?>
                <?php } ?>
           
          </div>
        </div>
        <?php } ?>
      </main>
      <footer class="row center">Cloud Computing-1644-GCD0807B</footer>
    </div>
  </body>
</html>