-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2022 at 02:14 PM
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
-- Database: `martha's`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `ITEM_ID` int(11) UNSIGNED NOT NULL,
  `TYPE` varchar(20) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `DESCRIPTION` text NOT NULL,
  `PRICE` int(11) NOT NULL,
  `ACTIVE` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`ITEM_ID`, `TYPE`, `NAME`, `DESCRIPTION`, `PRICE`, `ACTIVE`) VALUES
(1, 'Appetizers', 'Nacho Supreme', 'Large bed of nacho chips topped with tomatoes, onions, peppers, & baked with cheese. Served with salsa and sour cream.', 220, 0),
(2, 'Appetizers', 'Mexican Dip', 'Blend cream cheese, salsa, cheddar and mozza cheese, served with nacho chips and deep fried pita bread.', 180, 0),
(3, 'Appetizers', 'Basket “O” Rings', 'Beefeater onion rings with seasoning salt.', 150, 0),
(4, 'Appetizers', 'Calamari Rings', 'Breaded calamari rings, golden deep fried and served with a garlic-lemon mayonnaise.', 60, 0),
(5, 'Beverages', 'Cucumber Lemonade', 'This cucumber lemonade is a super refreshing addition to your summer lemonade repertoire. It’s packed with several health benefits from the cucumber juice', 45, 0),
(6, 'Beverages', 'Pineapple Iced Tea', 'This thirst-quenching tea is simple to mix together and has a sparkling citrus flavor we all enjoy.', 50, 0),
(7, 'Beverages', 'Cappuccino', 'smooth blend of creamy milk and strong espresso.', 90, 0),
(8, 'Beverages', 'Milkshake', 'milk, ice cream, and flavorings or sweeteners.', 55, 0),
(9, 'Breakfast', 'Fruity pancake', 'Fluffy, American-style pancakes made with natural yogurt and stacked with layers of fruit.', 250, 0),
(10, 'Breakfast', 'Roti Prata', 'South Indian flatbread that is crisp and flaky on the outside, but soft on the inside. ', 300, 0),
(11, 'Breakfast', 'Tofu Scramble', 'spiced tofu with cherry tomatoes for an egg-free take on scramble on toast. Perfect for breakfast, served on rye bread', 280, 0),
(12, 'Breakfast', 'cornbread waffles wi', 'get ready for a vegan brunch feast with these cornbread waffles, hickory maple sausages and a sweet maple butter drizzle.', 380, 0),
(13, 'Lunch', 'Fish & Chips', 'Breaded fish, golden deep fried served with a choice of chips', 100, 0),
(14, 'Lunch', 'Pulled Beef', 'Slow roasted brisket  with  red onion, avo and fresh cilantro, served in two soft-shell tacos.', 180, 0),
(15, 'Lunch', 'Indian Chicken Curry', 'spicy, and delicious with soft, tender, and juicy chicken pieces.', 220, 0),
(16, 'Lunch', 'Adobo', 'A traditional pilipino food, cooked in soy  sauce and lemon. They say you’ve never been to the philippines if you have never tried this dish.', 235, 0),
(17, 'Dinner', 'Smoked Beets', 'slowly smoked until tender, and then served with a creamy goat cheese ranch dip', 170, 0),
(18, 'Dinner', 'Braised Beef Short R', 'These Braised Beef Short Ribs are so tender you can eat them with a spoon. The sauce has a deep, rich flavor', 300, 0),
(19, 'Dinner', 'Grilled Salmon', 'This grilled salmon is coated in a flavorful marinade then grilled until golden brown.', 300, 0),
(20, 'Dinner', 'Caesar Salad', 'The crowd-pleasing salad of crisp romaine leaves, crunchy croutons, and a little or a lot of anchovy, as you like.', 85, 0),
(21, 'Desserts', 'Tiramisu', 'A classic Italian layered dessert with rum-flavored, coffee-soaked ladyfingers, a creamy mascarpone custard, and whipped cream. The top of this tiramisu is dusted with cocoa powder.', 230, 0),
(22, 'Desserts', 'Brownie Sundae', 'Thick fudge brownie topped with mounds of vanilla ice cream, caramel, chocolate syrup, walnuts and whipped cream.', 160, 0),
(23, 'Desserts', 'Oreo Ice Cream Cake', 'Vanilla and oreo cookie ice cream cake', 160, 0),
(24, 'Desserts', 'Chocolate Mousse Cak', 'Moist chocolate cake with chocolate mousse, covered in a decadent dark chocolate ganache.', 99, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`ITEM_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `ITEM_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
