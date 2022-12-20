-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 06:09 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marthas-kitchen`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `username`, `password`) VALUES
(1, 'administrator', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) UNSIGNED NOT NULL,
  `category` varchar(30) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `category`, `image_name`, `featured`, `active`) VALUES
(1, 'Main Dish', 'main-dishes.jpeg', 'Yes', 'Yes'),
(2, 'Desserts', 'desserts.jpeg', 'Yes', 'Yes'),
(3, 'Appetizers', 'appetizer.jpg', 'Yes', 'Yes'),
(4, 'Beverages', 'beverages.jpg', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `item_id` int(11) UNSIGNED NOT NULL,
  `food_category` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL,
  `food_category_id` int(11) NOT NULL,
  `food_name` varchar(50) NOT NULL,
  `food_image` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `featured` varchar(11) NOT NULL,
  `active` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`item_id`, `food_category`, `category_id`, `food_category_id`, `food_name`, `food_image`, `description`, `price`, `featured`, `active`) VALUES
(1, 'Breakfast', 1, 1, 'Fruity pancake', 'Fruity pancake.jpg', 'Fluffy, American-style pancakes made with natural yogurt and stacked with layers of fruit.', 250, 'Yes', 'Yes'),
(2, 'Breakfast', 1, 1, 'Roti Prata', 'Roti Prata.jpg', 'South Indian flatbread that is crisp and flaky on the outside, but soft on the inside.', 300, 'Yes', 'Yes'),
(3, 'Breakfast', 1, 1, 'Tofu Scramble', 'Tofu Scramble.jpg', 'spiced tofu with cherry tomatoes for an egg-free take on scramble on toast. Perfect for breakfast, served on rye bread', 280, 'Yes', 'Yes'),
(4, 'Breakfast', 1, 1, 'cornbread waffles with sausage', 'cornbread waffles with sausage.jpg', 'get ready for a vegan brunch feast with these cornbread waffles, hickory maple sausages and a sweet maple butter drizzle.', 380, 'Yes', 'Yes'),
(5, 'Lunch', 1, 2, 'Fish & Chips', 'Fish _ Chips.jpg', 'Breaded fish, golden deep fried served with a choice of chips', 100, 'Yes', 'Yes'),
(6, 'Lunch', 1, 2, 'Pulled Beef', 'Pulled Beef.jpg', 'Slow roasted brisket  with  red onion, avo and fresh cilantro, served in two soft-shell tacos', 180, 'Yes', 'Yes'),
(7, 'Lunch', 1, 2, 'Indian Chicken Curry', 'Indian Chicken Curry.jpg', 'spicy, and delicious with soft, tender, and juicy chicken pieces.', 220, 'Yes', 'Yes'),
(8, 'Lunch', 1, 2, 'Adobo', 'Adobo.jpg', 'A traditional pilipino food, cooked in soy  sauce and lemon. They say you’ve never been to the philippines if you have never tried this dish.', 235, 'Yes', 'Yes'),
(9, 'Dinner', 1, 3, 'Smoked Beets', 'Smoked beets.jpg', 'slowly smoked until tender, and then served with a creamy goat cheese ranch dip', 170, 'Yes', 'Yes'),
(10, 'Dinner', 1, 3, 'Braised Beef Short Rib', 'Braised Beef Short Rib.jpg', 'These Braised Beef Short Ribs are so tender you can eat them with a spoon. The sauce has a deep, rich flavor', 300, 'Yes', 'Yes'),
(11, 'Dinner', 1, 3, 'Grilled Salmon', 'Grilled Salmon.jpg', 'This grilled salmon is coated in a flavorful marinade then grilled until golden brown.', 300, 'Yes', 'Yes'),
(12, 'Dinner', 1, 3, 'Caesar Salad', 'Caesar salad.jpg', 'The crowd-pleasing salad of crisp romaine leaves, crunchy croutons, and a little or a lot of anchovy, as you like.', 85, 'Yes', 'Yes'),
(13, 'Desserts', 2, 4, 'Tiramisu', 'Tiramisu.jpg', 'A classic Italian layered dessert with rum-flavored, coffee-soaked ladyfingers, a creamy mascarpone custard, and whipped cream. The top of this tiramisu is dusted with cocoa powder.', 230, 'Yes', 'Yes'),
(14, 'Desserts', 2, 4, 'Brownie Sundae', 'Brownie Sundae.jpg', 'Thick fudge brownie topped with mounds of vanilla ice cream, caramel, chocolate syrup, walnuts and whipped cream', 160, 'Yes', 'Yes'),
(15, 'Desserts', 2, 4, 'Oreo Ice Cream Cake', 'Oreo Ice Cream Cake.jpg', 'Vanilla and oreo cookie ice cream cake', 160, 'Yes', 'Yes'),
(16, 'Desserts', 2, 4, 'Chocolate Mousse Cake', 'Chocolate Mousse Cake.jpg', 'Moist chocolate cake with chocolate mousse, covered in a decadent dark chocolate ganache', 99, 'Yes', 'Yes'),
(17, 'Appetizers', 3, 5, 'Nacho Supreme', 'Nacho Supreme.jpg', 'Large bed of nacho chips topped with tomatoes, onions, peppers, & baked with cheese. Served with salsa and sour cream', 220, 'Yes', 'Yes'),
(18, 'Appetizers', 3, 5, 'Mexican Dip', 'Mexican Dip.jpg', 'Blend cream cheese, salsa, cheddar and mozza cheese, served with nacho chips and deep fried pita bread.', 180, 'Yes', 'Yes'),
(19, 'Appetizers', 3, 5, 'Basket “O” Rings', 'BasketORings.jpg', 'Beefeater onion rings with seasoning salt.', 150, 'Yes', 'Yes'),
(20, 'Appetizers', 3, 5, 'Calamari Rings', 'Calamari Rings.png', 'Breaded calamari rings, golden deep fried and served with a garlic-lemon mayonnaise', 60, 'Yes', 'Yes'),
(21, 'Beverages', 4, 6, 'Cucumber Lemonade', 'Cucumber Lemonade.png', 'This cucumber lemonade is a super refreshing addition to your summer lemonade repertoire. It’s packed with several health benefits from the cucumber juice', 45, 'Yes', 'Yes'),
(22, 'Beverages', 4, 6, 'Pineapple Iced Tea', 'Pineapple ice tea.jpg', 'This thirst-quenching tea is simple to mix together and has a sparkling citrus flavor we all enjoy.', 50, 'Yes', 'Yes'),
(23, 'Beverages', 4, 6, 'Cappuccino', 'Cappuccino.jpg', 'smooth blend of creamy milk and strong espresso', 90, 'Yes', 'Yes'),
(24, 'Beverages', 4, 6, 'Milkshake', 'Milkshake.jpg', 'sweet beverage made by blending milk, ice cream, and flavorings or sweeteners', 55, 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(200) NOT NULL,
  `food` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `customer_contact` varchar(20) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `item_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
