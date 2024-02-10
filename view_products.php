
<!--  including php logic- connecting to database -->

<?php include('connect.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Products-Project</title>

    <!-- css file -->
    <link rel="stylesheet" href="css/style.css">

    <!--font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/
    6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

   <!-- header -->
   <?php include 'header.php'?>
    
   <!-- container -->
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Display Container</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- php code-->
  

<!-- display table -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Table</title>
    <style>
        .container {
            margin: 20px auto;
            width: 80%;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .product img {
            max-width: 100px;
            height: auto;
        }
        .action-btn {
            display: inline-block;
            padding: 5px 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
        .action-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <table>
            <tr>
                <th>Sno</th>
                <th>Name</th>
                <th>Image</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>

            <?php
$display_product = mysqli_query($conn, "SELECT * FROM `products`");  
if($display_product === false){
    echo "Error executing the query: " . mysqli_error($conn);
} elseif(mysqli_num_rows($display_product) > 0){
    //  logic to fetch data

    while ($row=mysqli_fetch_assoc($display_product)){
       // $product_name=$row['name']
     ?>




            <tr class="product">
                <td>1</td>
                <td>Earbuds</td>
                <td><img src="images\earbuds.jpg" alt="earbuds"></td>
                <td>500</td>
                <td>
                    <form method="POST" action="delete_product.php">
                        <input type="hidden" name="product_id" value="2">    
                        <button type="submit" class="action-btn" name="delete_product"><i class="fas fa-trash"></i> Delete</button>
                    </form>
                    <a href="#" class="action-btn"><i class="fas fa-edit"></i> Edit</a>
                </td>
            </tr>
            <tr class="product">
                <td>2</td>
                <td>Jacket</td>
                <td><img src="images\jacket.jpeg" alt="jacket"></td>
                <td>1000</td>
                <td>
                    <form method="POST" action="delete_product.php">
                        <input type="hidden" name="product_id" value="2">    
                        <button type="submit" class="action-btn" name="delete_product"><i class="fas fa-trash"></i> Delete</button>
                    </form>
                    <a href="#" class="action-btn"><i class="fas fa-edit"></i> Edit</a>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>




<?php
   }
}
else{
    echo "No products available";
}

   ?>


<!-- Add more product divs as needed -->
    </div>
<!-- deleting the product -->
    <?php include ('connect.php');

if(isset($_POST['delete_product'])) {
    // Get the product ID from the form submission
    $product_id = $_POST['product_id'];

    // Perform the deletion query
    $delete_query = "DELETE FROM products WHERE id = $product_id";

    if(mysqli_query($conn, $delete_query)) {
        echo "Product deleted successfully.";
    } else {
        echo "Error deleting product: " . mysqli_error($conn);
    }
}
?>    
 




</body>
</html>







    
</body>
</html>


