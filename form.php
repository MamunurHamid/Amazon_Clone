<?php
// Connect to the MySQL database
$con = mysqli_connect('localhost:3309', 'root', '', 'amazonshop');
if (!$con) {
    die(mysqli_error($con));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = $_POST['product_name'];
    $product_description = $_POST['product_description'];
    $product_category = $_POST['product_category'];
    $product_mainimage = $_POST['product_mainimage'];
    $list_price = $_POST['list_price'];
    $image_1 = $_POST['image_1'];
    $image_2 = $_POST['image_2'];
    $image_3 = $_POST['image_3'];
    $image_4 = $_POST['image_4'];

    // Calculate product price as 70% of list price
    $product_price = $list_price * 0.7;

    $sql = "INSERT INTO products (product_name, product_description, product_category, product_mainimage, product_price, list_price, image_1, image_2, image_3, image_4)
            VALUES ('$product_name', '$product_description', '$product_category', '$product_mainimage', '$product_price', '$list_price', '$image_1', '$image_2', '$image_3', '$image_4')";

    if ($con->query($sql) === TRUE) {
        // Redirect to the same page to prevent form resubmission
        header("Location: form.php?success=1");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

$con->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Product</title>

    <style>
        body {
            background-color: bisque;
        }

        .divv {
            border: 5px orange solid;
            border-radius: 15px;
            margin: auto;
            width: 400px;
            padding-left: 50px;
        }

        .formm {
            font-size: 18px;
        }

        form input {
            display: block;
            width: 80%;
            height: 21px;
            border-radius: 6px;
            font-size: 15px;
        }

        form textarea {
            display: block;
            width: 80%;
            border-radius: 6px;
            font-size: 15px;
        }
    </style>
</head>

<body>
    <?php if (isset($_GET['success']) && $_GET['success'] == 1) : ?>
    <?php endif; ?>
    <div class="divv">
        <h2>Add New Product</h2>
        <form class="formm" method="POST" action="form.php">
            <label for="product_name">Product Name:</label><br>
            <input type="text" id="product_name" name="product_name" required><br>

            <label for="product_description">Product Description:</label><br>
            <textarea id="product_description" name="product_description" required></textarea><br>

            <label for="product_category">Product Category:</label><br>
            <input type="text" id="product_category" name="product_category" required><br>

            <label for="product_mainimage">Main Image URL:</label><br>
            <input type="text" id="product_mainimage" name="product_mainimage" required><br>

            <label for="list_price">List Price:</label><br>
            <input type="number" step="0.01" id="list_price" name="list_price" required><br>

            <label for="image_1">Thumbnail Image 1 URL:</label><br>
            <input type="text" id="image_1" name="image_1" required><br>

            <label for="image_2">Thumbnail Image 2 URL:</label><br>
            <input type="text" id="image_2" name="image_2" required><br>

            <label for="image_3">Thumbnail Image 3 URL:</label><br>
            <input type="text" id="image_3" name="image_3" required><br>

            <label for="image_4">Thumbnail Image 4 URL:</label><br>
            <input type="text" id="image_4" name="image_4" required><br>

            <input style="width: 40%; height: 30px;" type="submit" value="Add Product">
            <button style="margin-bottom: 15px; margin-top: 15px; text-align: center;">
                <a style="font-size: 18px; color: blue; text-decoration: none; font-weight: 600;" href="toys-bg.php">View Products</a>
            </button>
        </form>
    </div>
</body>

</html>