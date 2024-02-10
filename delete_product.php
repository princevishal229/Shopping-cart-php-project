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

