<?php 
    include("template/heardProduct.php");
    include("template/sidebar.php");
?>
<?php  include('database.php'); ?>

<?php 
    $products = pg_query($conn, "SELECT * FROM product");
    // $row = pg_fetch_row($products);
    // var_dump($row);
    // die()
?>

<?php
    
    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        try {
            pg_query($conn, "DELETE FROM product WHERE id = $id");
            header('location: product.php');
        } catch (Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <style> 
        table {
        position: absolute;
        left: 48%;
        top: 30%;
        margin-top: 25%;
        transform: translate(-50%, -50%);
        border-collapse: collapse;
        width: 960px;
        height: 200px;
        border: 1px solid #bdc3c7;
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    tr {
        transition: all .2s ease-in;
        cursor: pointer;
    }
    th,
    td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    #header{
        background-color: #074AE3;
        color: #fff;
    }
    tr:hover {
        background-color: #f5f5f5;
        transform: scale(1.02);
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    .btn-success{
        background: #2CE307 ;
    }
    .btn-danger{
        background: #F52B07  ;
    }
    .image{
    width: 15%;
    height: 150px;
    position: relative;
    }
    .image img{
        position: absolute;
        width: 100%;
        height: 100px; 
        margin-left: -33%;
        margin-top: -36%;
    }
    .list_product{
        width: 990px;
        height: 200vh;
        /* background: red; */
        position: absolute;
        margin-left: 24%;
        margin-top: 5%;
    }
    </style>
</head>
<body>
    <div class="list_product">
    <table>
            <tr>
                <th colspan="3">Add new product:
                <a href="createForm.php"><button type="button" class="btn-success" id="btn1">Create</button></a>
                </th>
                <th></th>
            </tr>
            <tr id="header">
                <th>ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Image</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Function</th>
            </tr>
            <!-- <tr>
                <td>John </td>
                <td>Doe </td>
                <td>25 </td>
                <td class="image"><img src="image/car01.png"></td>
                <td>Male </td>
                <td>USA </td>
                <td>
                    <a href="#" target="_blank"><button type="button" class="btn-success">Update</button></a>
                    <a href="#"><button type="button" class="btn-danger" >Delete</button></a>
                </td>
            </tr>  -->
            <?php while ($row = pg_fetch_assoc($products)) {?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['type']; ?></td>
                    <td class="image"><img src="image/<?php echo $row['image']?>"></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><?php echo $row['quantity']; ?></td>
                    <td>
                        <a href="updateForm.php?edit=<?php echo $row['id']; ?>"><button type="button" class="btn-success">Update</button></a>
                        <a href="product.php?del=<?php echo $row['id']; ?>"><button type="button" class="btn-danger" >Delete</button></a>
                    </td>
                </tr> 
            <?php }?>  
        </table>
    </div>
</body>
</html>