<?php
$conn = new mysqli('localhost:3309', 'root', '', 'amazonshop');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the category from the URL parameter
$category = isset($_GET['category']) ? $_GET['category'] : '';

$sql = "SELECT id, product_name, product_description, product_mainimage, product_price FROM products";
if ($category) {
    $sql .= " WHERE product_category = '" . $conn->real_escape_string($category) . "'";
}
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>AmazonBD: <?= ucwords($_GET['category']) ?></title>

    <link rel="icon" href="images/Amazon_icon.png" type="image/icon type">

    <style>
        .product-card {
            text-align: left;
            width: 340px;
        }

        .product-card h3 {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            -webkit-line-clamp: 3;
            /* Limit to 3 lines */
        }

        .product-card p.description {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            -webkit-line-clamp: 2;
            /* Limit to 2 lines */
        }

        .product-price {
            vertical-align: super;
            font-size: smaller;
        }

        .price-amount {
            vertical-align: text-top;
            font-size: 1.5rem;
            font-weight: bold;
        }
    </style>
</head>

<body style="background-color: white;">
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
                    <li><a href="/singin.html">Account</a></li>
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

    <main class="categorybody">

        <div class="second-half">
            <div id="starting">
                <img src="images/Ldrago.jpg" alt="" class="Ldrago">
                <div>
                    <h3>Beyblade</h3>
                    <a href="https://www.ubuy.com.bd/en/brand/beyblade">CLick here to shop Beyblade from ubuy</a>
                </div>

            </div>
            <div id="middle">
                <h3>
                    Results
                </h3>
                <p>
                    Price and other details may vary based on the product size and color.
                </p>

                <div id="middle-grid">
                    <?php if ($result && $result->num_rows > 0) : ?>
                        <?php while ($row = $result->fetch_assoc()) : ?>
                            <div class="product-card toys">
                                <a href="product.php?id=<?= $row['id'] ?>"><img src="<?= $row['product_mainimage'] ?>" style="width: 100%; height: 330px;"></a>
                                <h3><?= $row['product_name'] ?></h3>
                                <p class="description"><?= $row['product_description'] ?></p>
                                <!-- price -->
                                <?php
                                $product_price = number_format($row['product_price'], 2); // Format the price to 2 decimal places
                                list($integer_part, $decimal_part) = explode('.', $product_price); // Split into integer and decimal parts
                                ?>
                                <p>
                                    <sup style="font-size: 14px; flex-direction: column;">Tk.</sup>
                                    <sub style="font-size: 30px;"><?= $integer_part ?></sub>
                                    <sup style="font-size: 14px;"><?= $decimal_part ?></sup>
                                </p>

                            </div>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <p>No products found in this category.</p>
                    <?php endif; ?>
                </div>

            </div>



            <div style="display: flex; justify-content: center; border: 1px solid lightgray; width: 70%; height: 57px; margin: 40px auto; justify-content: center; padding: 5px;">
                <p style="border-right: 1px solid lightgray; padding-right: 10px;">Previous</p>
                <p style="border-right: 1px solid lightgray; padding: 0px 10px;">1</p>
                <p style="border-right: 1px solid lightgray;padding: 0px 10px;">2</p>
                <p style="border-right: 1px solid lightgray;padding: 0px 10px;">3</p>
                <p style="padding-left: 10px;">Next</p>
            </div>

        </div>
    </main>


    <section class="footer">
        <div class="backtop">
            <span>Back to Top</span>
        </div>
        <div class="detail">
            <div class="table">
                <div>
                    <div class="t-head">Get to Know Us</div>
                    <ul>
                        <li><a style="color: white;" href="">Careers</a></li>
                        <li><a style="color: white;" href="">Blogs</a></li>
                        <li><a style="color: white;" href="">About UnAmazon</a></li>

                    </ul>
                </div>

                <div>
                    <div class="t-head">Make Money with Us</div>
                    <ul>
                        <li><a style="color: white;" href="">Sell Products on Amazon</a></li>
                        <li><a style="color: white;" href="">Become an Affiliate</a></li>
                        <li><a style="color: white;" href="">Advertise your Products</a></li>

                    </ul>
                </div>


                <div>
                    <div class="t-head">Amazon Payment Products</div>
                    <ul>
                        <li><a style="color: white;" href="">UnAmazon Business Cards</a></li>
                        <li><a style="color: white;" href="">Shop with Points</a></li>
                        <li><a style="color: white;" href="">Reload your Balance</a></li>
                        <li><a style="color: white;" href="">UnAmazon Currency Converter</a></li>
                    </ul>
                </div>


                <div>
                    <div class="t-head">Let Us Help You</div>
                    <ul>
                        <li><a style="color: white;" href="">Your Account</a></li>
                        <li><a style="color: white;" href="">Shipping Rates and Policies</a></li>
                        <li><a style="color: white;" href="">Returns and Replacements</a></li>
                        <li><a style="color: white;" href="">Manage your Content & Devices</a></li>
                        <li><a style="color: white;" href="">UnAmazon Assistant</a></li>
                        <li><a style="color: white;" href="">Help</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="line"></div>
        <div class="copy">
            <span>&copy; Designed by UnAmazon</span>
        </div>
    </section>
    <script src="app.js"></script>
    <script src="app2.js"></script>
</body>

</html>
<?php $conn->close(); ?>