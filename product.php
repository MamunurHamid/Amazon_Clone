<?php
$conn = new mysqli('localhost:3309', 'root', '', 'amazonshop');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$product_id = intval($_GET['id']);
$sql = "SELECT * FROM products WHERE id = $product_id";
$result = $conn->query($sql);
$product = $result->fetch_assoc();

$product_price = number_format($product['product_price'], 2); // Format the price to 2 decimal places
list($integer_part, $decimal_part) = explode('.', $product_price); // Split into integer and decimal parts
?>


<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AmazonBD.com-Shop Online</title>
    <link rel="icon" href="images/Amazon_icon.png" type="image/icon type">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Include Tailwind DaisyUI CSS -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Include Your Custom CSS -->
    <link href="style.css" rel="stylesheet">
    <!-- JS -->
    <script src="product.js"></script>

</head>

<body>

    <section class="mainbody">
        <div class="sidebar">
            <div class="hdn-head">
                <h2>Hello, Sign in</h2>
            </div>
            <div class="hdn-content">
                <h3>Digital Content & Devices</h3>
                <ul>
                    <div>
                        <li>BD Accesories</li><i class="fa-solid fa-angle-right"></i>
                    </div>
                    <div>
                        <li>BD Books</li><i class="fa-solid fa-angle-right"></i>
                    </div>
                    <div>
                        <li>BD Clothes</li><i class="fa-solid fa-angle-right"></i>
                    </div>
                </ul>
                <div class="line"></div>
            </div>
            <div class="hdn-content">
                <h3>Shop By Department</h3>
                <ul>
                    <div>
                        <li>Electronics</li><i class="fa-solid fa-angle-right"></i>
                    </div>
                    <div>
                        <li>Computers</li><i class="fa-solid fa-angle-right"></i>
                    </div>
                    <div>
                        <li>Smart Homes</li><i class="fa-solid fa-angle-right"></i>
                    </div>
                    <div>
                        <li>Arts & Crafts</li><i class="fa-solid fa-angle-right"></i>
                    </div>
                </ul>
                <div class="line"></div>
            </div>
        </div>
        <i class="fa-solid fa-xmark"></i>
        <div class="triangle"><i class="fa-solid fa-triangle"></i></div>
        <div class="hdn-sign">
            <div class="hdn-table">
                <div>
                    <h3>Your Lists</h3>
                    <ul>
                        <li>Create a List</li>
                        <li>Find a List & Registry</li>
                        <li>Amazon Smile Charity Lists</li>
                    </ul>
                </div>
                <div class="hdn-line"></div>
                <div>
                    <h3>Your Account</h3>
                    <ul>
                        <li>Account</li>
                        <li>Orders</li>
                        <li>Recommendations</li>
                        <li>Watchlist</li>
                        <li>Kindle Unlimited</li>
                        <li>Content & Devices</li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="black"></div>
        <header>
            <div class="first">
                <div class="flex logo">
                    <a href="index.html"><img src="images/logo.png" alt=""></a>
                    <div class="map flex">
                        <i class="fas fa-map-marker"></i>
                        <div>
                            <span>Deliver to</span>
                            <span>Bangladesh</span>
                        </div>
                    </div>
                </div>
                <div class="flex input">
                    <div>
                        <span>All</span>
                        <i class="fas fa-caret-down"></i>
                    </div>
                    <input type="text">
                    <i class="fas fa-search"></i>
                </div>
                <div class="flex right">
                    <div class="flex lang">
                        <img src="images/bnflag.png" alt="">
                        <i class="fas fa-caret-down"></i>
                    </div>
                    <div class="sign">
                        <span>Hello, Sign in</span>
                        <div class="flex ac">
                            <span>Accounts & Lists</span>
                            <i class="fas fa-caret-down"></i>
                        </div>
                    </div>
                    <div class="sign">
                        <span>Returns</span>
                        <span>& Orders</span>
                    </div>
                    <div class="flex cart">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="ca">Cart</span>
                    </div>
                </div>
            </div>
            <div class="second">
                <div class="second-1">
                    <div>
                        <i class="fas fa-bars"></i>
                        <span>All</span>
                    </div>
                </div>
                <div class="second-2">
                    <ul>
                        <li>Today's Deal</li>
                        <li>Customer Service</li>
                        <li>Registry</li>
                        <li>Gift Cards</li>
                        <li>Sell</li>
                    </ul>
                </div>
                <div class="second-3">
                    <span>Shop Valentine's Day</span>
                </div>
            </div>
        </header>
    </section>


    <!-- product page starts -->
    <section class="productbody">
    <div class="full-page">
        <div class="left-container">
            <div class="column">
                <img class="thumbnail" src="<?= $product['product_mainimage'] ?>" alt="Thumbnail 1" onmouseover="displayImage('<?= $product['product_mainimage'] ?>')">
                <img class="thumbnail" src="<?= $product['image_1'] ?>" alt="Thumbnail 1" onmouseover="displayImage('<?= $product['image_1'] ?>')">
                <img class="thumbnail" src="<?= $product['image_2'] ?>" alt="Thumbnail 2" onmouseover="displayImage('<?= $product['image_2'] ?>')">
                <img class="thumbnail" src="<?= $product['image_3'] ?>" alt="Thumbnail 3" onmouseover="displayImage('<?= $product['image_3'] ?>')">
                <img class="thumbnail" src="<?= $product['image_4'] ?>" alt="Thumbnail 4" onmouseover="displayImage('<?= $product['image_4'] ?>')">
            </div>
            <div>
                <img class="main-image" id="mainImage" src="<?= $product['product_mainimage'] ?>" alt="Main Image">
            </div>
        </div>

        <div class="mid-container">
            <h1 style="font-size: 24px;"><?= $product['product_name'] ?></h1>
            <!-- ratings -->
            <div style="display: flex; align-items: center; margin-top: 5px; margin-bottom: 15px;" class="ratings">
                <p style="font-size: 18px;">4.5</p>
                <div class="rating rating-sm rating-half">
                    <input type="radio" name="rating-10" class="rating-hidden" />
                    <input type="radio" name="rating-10" class="bg-yellow-500 mask mask-star-2 mask-half-1" />
                    <input type="radio" name="rating-10" class="bg-yellow-500 mask mask-star-2 mask-half-2" />
                    <input type="radio" name="rating-10" class="bg-yellow-500 mask mask-star-2 mask-half-1" />
                    <input type="radio" name="rating-10" class="bg-yellow-500 mask mask-star-2 mask-half-2" />
                    <input type="radio" name="rating-10" class="bg-yellow-500 mask mask-star-2 mask-half-1" />
                    <input type="radio" name="rating-10" class="bg-yellow-500 mask mask-star-2 mask-half-2" />
                    <input type="radio" name="rating-10" class="bg-yellow-500 mask mask-star-2 mask-half-1" />
                    <input type="radio" name="rating-10" class="bg-yellow-500 mask mask-star-2 mask-half-2" />
                    <input type="radio" name="rating-10" class="bg-yellow-500 mask mask-star-2 mask-half-1" checked />
                    <input type="radio" name="rating-10" class="bg-yellow-500 mask mask-star-2 mask-half-2" />
                </div>
            </div>
            <!-- line -->
            <hr style="border: 0.1px solid #d1d1d1; width: 100%; height: 0px;">

            <div class="deal">
                <p class="limited">Limited time deal</p>
            </div>
            <div style="margin-top: 10px; display: flex; align-items: center;">
                <p style="font-size: 26px; color: rgb(209, 74, 74); padding-right: 8px;">-30%</p>
                <!-- price -->
                <p>
                    <sup style="font-size: 14px; flex-direction: column;">Tk.</sup>
                    <sub style="font-size: 30px;"><?= $integer_part ?></sub>
                    <sup style="font-size: 14px;"><?= $decimal_part ?></sup>
                </p>
            </div>
            <p style="font-size: 13px; color: rgb(92, 92, 92);">List price: <strike>$<?= number_format($product['list_price'], 2) ?></strike></p>
            <hr style="border: 0.1px solid #d1d1d1; margin-top: 35px; width: 100%; height: 0px;">
            <div style="margin-top: 10px;" class="description">
                <h1 style="font-size: 16px; font-weight: 600;">About this item</h1>
                <p><?= $product['product_description'] ?></p>
            </div>
        </div>

        <!-- cart -->
        <div class="right-container">
            <!-- price -->
            <p>
                <sup style="font-size: 14px; flex-direction: column;">Tk.</sup>
                <sub style="font-size: 30px;"><?= $integer_part ?></sub>
                <sup style="font-size: 14px;"><?= $decimal_part ?></sup>
            </p>

            <h1 style="font-size: 14px; padding-top: 12px; padding-bottom: 12px;">Delivery <span style="font-weight: 600;">Wednesday, June 5</span></h1>
            <div class="locate">
                <i class="fa-solid fa-location-dot"></i>
                <p style="font-size: 12px; padding-left: 5px;">Deliver to Bangladesh</p>
            </div>
            <p style="font-size: 20px; color: #007600; padding-top: 16px; padding-bottom: 16px;">In Stock</p>
            <div class="dropdown-button-container">
                <button class="dropdown-button">
                    Quantity: <span id="selectedQuantity">1</span>
                    <select id="quantityDropdown" onchange="updateQuantity()">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </button>
            </div>
            <div class="btns">
                <button id="btnadd" class="btn-sub">Add to Cart</button>
                <button id="btnbuy" class="btn-sub">Buy Now</button>
            </div>
            <div style="font-size: 13px; padding-top: 10px">
                <p>Ships from <span style="font-size: 14px; padding-left: 5px;">AmazonBD.com</span></p>
                <p>Sold by <span style="font-size: 14px; padding-left: 23px;">AmazonBD.com</span></p>
            </div>
        </div>
    </div>

    <!-- line -->
    <hr style="border: 0.1px solid #d1d1d1; margin-bottom: 20px; margin-top: 15px; width: 100%; height: 0px;">
</section>
    <!-- product page ends -->
</body>

</html>
<?php $conn->close(); ?>