-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3309
-- Generation Time: Jun 29, 2024 at 10:27 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amazonshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_description` text DEFAULT NULL,
  `product_category` varchar(255) DEFAULT NULL,
  `product_mainimage` varchar(255) DEFAULT NULL,
  `product_price` decimal(10,2) DEFAULT NULL,
  `list_price` decimal(10,2) DEFAULT NULL,
  `image_1` varchar(255) DEFAULT NULL,
  `image_2` varchar(255) DEFAULT NULL,
  `image_3` varchar(255) DEFAULT NULL,
  `image_4` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_description`, `product_category`, `product_mainimage`, `product_price`, `list_price`, `image_1`, `image_2`, `image_3`, `image_4`) VALUES
(17, 'Potato Crackers', 'Potato crackers are a popular snack made from potatoes, flour, oil, and various seasonings, offering a light and crispy texture. They come in a variety of flavors such as plain salted, cheese, sour cream and onion, and barbecue. Typically golden-brown and available in various shapes like round or square, these crackers are packaged in airtight bags or boxes to preserve their freshness. Enjoyed by people of all ages, potato crackers can be eaten alone or paired with dips, making them ideal for casual snacking or parties. ', 'Snacks', 'https://shodagor.com/public/uploads/all/N5yuk.jpg', 24.49, 34.98, 'https://dokanpat.com.bd/wp-content/uploads/2022/03/bombay-sweets-potato-crackers.jpg', 'https://i.pinimg.com/originals/bf/d4/c7/bfd4c7eccfb6283c2e673631446d16e2.jpg', 'https://www.bombaysweetsbd.com/images/mdaol-carousel/potato_crackers.png', 'https://img2.tradewheel.com/uploads/images/products/5/4/potato-crackers-spicy-vegetable-12-gm-best-quality-potato-chips-from-bangladesh1-0253405001605200297.jpg.webp'),
(18, 'Mojo', 'Mojo is a refreshing and vibrant tropical drink often enjoyed for its bright, citrusy flavors. Commonly found in Caribbean and Latin American regions, this drink typically combines fresh fruit juices such as orange, lime, and pineapple, sometimes enhanced with a splash of rum for an alcoholic version. The mixture is often sweetened and served over ice, making it a perfect beverage for warm weather. Known for its refreshing taste and invigorating aroma, the Mojo drink is a delightful choice for quenching thirst and enjoying a taste of the tropics.', 'Snacks', 'https://chaldn.com/_mpimage/mojo-zero-can-250-ml?src=https%3A%2F%2Feggyolk.chaldal.com%2Fapi%2FPicture%2FRaw%3FpictureId%3D130805&q=best&v=1', 34.64, 49.49, 'https://chaldn.com/_mpimage/mojo-can-250-ml?src=https%3A%2F%2Feggyolk.chaldal.com%2Fapi%2FPicture%2FRaw%3FpictureId%3D130799&q=best&v=1', 'https://lulumart.com.bd/public/uploads/all/NAGA_MOJO_Can_-_250ml_BD.width-360.jpg', 'https://chaldn.com/_mpimage/mojo-soft-drink-2-ltr?src=https%3A%2F%2Feggyolk.chaldal.com%2Fapi%2FPicture%2FRaw%3FpictureId%3D130804&q=best&v=1', 'https://pbs.twimg.com/media/F_7LTGaakAAaI37.jpg'),
(19, 'Potato Crackers', 'Potato crackers are a popular snack made from potatoes, flour, oil, and various seasonings, offering a light and crispy texture. They come in a variety of flavors such as plain salted, cheese, sour cream and onion, and barbecue. Typically golden-brown and available in various shapes like round or square, these crackers are packaged in airtight bags or boxes to preserve their freshness. Enjoyed by people of all ages, potato crackers can be eaten alone or paired with dips, making them ideal for casual snacking or parties. ', 'Snacks', 'https://shodagor.com/public/uploads/all/N5yuk.jpg', 24.49, 34.98, 'https://dokanpat.com.bd/wp-content/uploads/2022/03/bombay-sweets-potato-crackers.jpg', 'https://i.pinimg.com/originals/bf/d4/c7/bfd4c7eccfb6283c2e673631446d16e2.jpg', 'https://www.bombaysweetsbd.com/images/mdaol-carousel/potato_crackers.png', 'https://img2.tradewheel.com/uploads/images/products/5/4/potato-crackers-spicy-vegetable-12-gm-best-quality-potato-chips-from-bangladesh1-0253405001605200297.jpg.webp'),
(20, 'Ruchi Chanachur', 'Ruchi Chanachur is a popular spicy snack mix from South Asia, particularly enjoyed in Bangladesh and India. This crunchy treat is a blend of fried lentils, chickpea flour noodles (sev), peanuts, dried peas, and various spices. The mix is known for its bold flavors, combining elements of spiciness, tanginess, and a hint of sweetness, making it an exciting and addictive snack. Often enjoyed on its own, Ruchi Chanachur is also paired with tea or added to other dishes for extra crunch and flavor. Packaged for freshness, it’s a go-to snack for those craving a flavorful and spicy bite.', 'Snacks', 'https://chaldn.com/_mpimage/ruchi-bbq-chanachur-300-gm?src=https%3A%2F%2Feggyolk.chaldal.com%2Fapi%2FPicture%2FRaw%3FpictureId%3D133063&q=best&v=1', 38.49, 54.99, 'https://chaldn.com/_mpimage/ruchi-jhal-chanachur-150-gm?src=https%3A%2F%2Feggyolk.chaldal.com%2Fapi%2FPicture%2FRaw%3FpictureId%3D133072&q=best&v=1', 'https://www.sfbl.com.bd/uploaded_files/munching_category.png', 'https://cdn.dribbble.com/users/11976629/screenshots/19249510/media/343f620a607cc4a3524650c1c2003fdb.jpg', 'https://www.melasupershop.com/uploads/2020/04/thumbnails/1586674875-1-550X550.jpg'),
(22, 'Walton Monitor-wd238v03', 'Walton monitors are high-quality display devices designed for various computing needs, offering a range of features to enhance the user experience. Known for their sharp image quality, vibrant colors, and sleek designs, Walton monitors cater to both casual users and professionals. They come in various sizes and resolutions, including Full HD and 4K options, ensuring clear and detailed visuals for everything from everyday tasks to intensive graphic work. Many models feature modern connectivity options like HDMI, VGA, and USB ports, along with ergonomic designs that allow for adjustable stands and VESA mount compatibility.', 'Electronics', 'https://i.pinimg.com/736x/29/62/c9/2962c918d3841e355f38e23ecd7fa7b7.jpg', 10499.99, 14999.98, 'https://i0.wp.com/sourcetechcomputer.com/wp-content/uploads/2022/07/Walton-WD238V03-23.8-inch-FHD-LED-Backlight-Monitor-with-Built-in-Speaker.jpg', 'https://www.nexus.com.bd/images/detailed/10/Walton_WD238V03_23.8_Inch_Full_HD_LED_Backlight_Monitor.jpg', 'https://www.originalstorebd.com/backend/uploads/product_main_image/5476.jpg', 'https://www.rmtechbd.com/image/cache/catalog/Monitor/Walton/walton-wd215v05-monitor-01.jpg-550x550-450x450.jpg'),
(23, 'Symphony AB-S20 Wireless Earphone', 'The Symphony AB-S20 Wireless Earphones offer high-quality sound and modern Bluetooth connectivity for a tangle-free experience. Designed for comfort, they come with multiple ear tip sizes and provide clear audio with deep bass, ideal for music, podcasts, and calls. With a long battery life, built-in controls, and a built-in microphone for hands-free calling, these compact and lightweight earphones are perfect for on-the-go use.', 'Electronics', 'https://gprmain.sgp1.cdn.digitaloceanspaces.com/dev-gprojukti/test/e2cc098628b748019354163e261aba2d-1.jpg', 1014.99, 1449.98, 'https://gprmain.sgp1.cdn.digitaloceanspaces.com/dev-gprojukti/test/fd74aaef42104a61b2c3e69384df81ed-3.jpg', 'https://gprmain.sgp1.cdn.digitaloceanspaces.com/dev-gprojukti/test/55600085f4b244be9fafc98ae189aa05-2.jpg', 'https://gprmain.sgp1.cdn.digitaloceanspaces.com/dev-gprojukti/test/6637b1dbce714b278fc5a854d9d07d96-4.jpg', 'https://sg-test-11.slatic.net/other/roc/9dbb4eaaa7a251946a6fb619b6fa4490.jpg'),
(24, 'Walton Olvio S35 Dual Sim Phone', 'The Walton Olvio S35 Dual SIM Phone is a reliable and user-friendly feature phone designed for simplicity and convenience. It supports dual SIM functionality, allowing users to manage two phone numbers simultaneously. The phone features a clear, bright display and a durable keypad, ensuring easy navigation and typing. Essential features include a built-in FM radio, camera, flashlight, and expandable storage via microSD card. With its long-lasting battery life, the Walton Olvio S35 is perfect for basic communication needs and is an ideal choice for those seeking a straightforward, affordable mobile phone.', 'Electronics', 'https://waltonbd.com/image/catalog/Mobile/2022/s35/id-image/S35_ID2.jpg', 2449.64, 3499.49, 'https://waltonbd.com/image/catalog/Mobile/2022/s35/id-image/S35_ID1.jpg', 'https://static-01.daraz.com.bd/p/f853a4bc36a733bae6cbc452ee30d9be.jpg', 'https://www.imei.info/media/t/gsm-cache/T/2/P2Wp7z-d/walton-olvio-s35.jpg', 'https://static-01.daraz.com.bd/p/f853a4bc36a733bae6cbc452ee30d9be.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
