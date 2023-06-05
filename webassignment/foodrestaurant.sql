-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 24, 2023 at 09:06 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodrestaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int NOT NULL AUTO_INCREMENT,
  `food_name` varchar(100) NOT NULL,
  `food_price` varchar(50) NOT NULL,
  `food_image_location` varchar(100) NOT NULL,
  `qty` int NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `food_code` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=193 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `food_name`, `food_price`, `food_image_location`, `qty`, `total_price`, `food_code`) VALUES
(192, 'Salmon Sushi', '5.00', '../image/salmon_sushi.jpg', 1, '5', 'p1008');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `type` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `subject` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

DROP TABLE IF EXISTS `food`;
CREATE TABLE IF NOT EXISTS `food` (
  `id` int DEFAULT NULL,
  `food_name` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `food_category` varchar(8) DEFAULT NULL,
  `food_description` varchar(78) DEFAULT NULL,
  `long_description` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `food_price` decimal(6,2) DEFAULT NULL,
  `food_image_location` varchar(50) DEFAULT NULL,
  `food_code` varchar(5) DEFAULT NULL,
  `food_qty` int DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `food_name`, `food_category`, `food_description`, `long_description`, `food_price`, `food_image_location`, `food_code`, `food_qty`) VALUES
(1, 'Shoyu Ramen ', 'Ramen  ', 'Soy sauce broth ramen clear and brown in color, healthy and less fat.', 'Shoyu in japanese measn soy sauce, hence this ramen consist of soy sauce broth with clear and brown in color. It is more healthier and less fat contains in a bowl. Besides, due to the soy sauce used, the ramen will have a strong taste. \n\nSimilar as a common ramen, the ramen could customize the toppings wish to choose such as fish cake, seasoned boiled egg, corn, sliced pork and etc.', '15.00', '../image/shoyu_ramen.jpg ', 'p1000', 1),
(2, 'Mushroom Ramen   ', 'Ramen  ', 'With thick and creamy tonkotsu soup, fresh mushroom and bak choy.', 'Mushroom ramen which is the modification and creativity from our chef. The ramen is made from tonkotsu soup with fresh mushroom and bak choy. \n\nThe creamy and milky tonkotsu soup give a thick flavor of the broth. It is special because the broth used is made up by boiling pork bones with some herbs for a long time. In short, the broth is rich in nutrients and collagen which benefits our health.', '14.90', '../image/mushroom_ramen.jpg  ', 'p1001', 1),
(3, 'Miso Ramen', 'Ramen  ', 'Umami-rich broth which made from fermented soy-bean and porks.', 'Miso is mean by fermented bean paste has been used in miso ramen. The umami-rich broth not only made from miso but also the chicken and pork.\n\nSimilar as a common ramen, the ramen could customize the toppings wish to choose such as fish cake, seasoned boiled egg, corn, sliced pork and etc.', '11.90', '../image/miso_ramen.jpg', 'p1002', 1),
(4, 'Tonkotsu Ramen', 'Ramen  ', 'Thick and creamy tonkotsu broth full with collagen and herbs.', '\nA sensory delight dishes which contains creamy and milky tonkotsu soup which give a thick flavor of the broth. Moreover, it also rich in toppings such as sliced pork, seasoned boiled egg, fish cake and bean sprouts which provides a crunchy texture.\n\nIt is special because the broth used is made up by boiling pork bones with some herbs for a long time. In short, the broth is rich in nutrients and collagen which benefits our health. The rich collagen able to mainatain a healthy joint and skin.', '15.00', '../image/tonkotsu_ramen.jpg', 'p1003', 1),
(5, 'Hakata Ramen', 'Ramen  ', 'Same broth with creamy tonkotsu but differentiate the noodles used.', 'Although it is same broth used for Hakata ramen, but it can be differ from the noodles used. The thickness in noodles will affect the taste of ramen. Thus, in Hakata ramen, a thin noodles is used instead of thick noodles. \n\nThis is becuase thin noodles able to absorb the broth of the noodles. Thin noodles is initially design for fisherman around there as they are busy and thin noodles able to boiled quicker.', '13.50', '../image/hakata_ramen.jpg', 'p1004', 1),
(6, 'Chicken Shio Ramen', 'Ramen  ', 'Soup made from chicken or pork which seasoned with salt as the name of \'Shio\'.', '\nShio in japanese means salt in general. Shio ramen is a ramen that primarily seasoned with salt. Milder flavor of the shio broth create a shine broth of the ramen. \n\nSimilar as a common ramen, the ramen could customize the toppings wish to choose such as fish cake, seasoned boiled egg, corn, sliced pork and etc.', '14.90', '../image/chicken_shio_ramen.jpg', 'p1005', 1),
(7, 'Tomato Shio Ramen', 'Ramen  ', 'Clear broth of ramen soup made from vegies such as corns, mushroom and tomato', 'A special ramen that made with creativity of our chef. The clear broth of ramen soup with fresh vegies such as corns, mushroom and tomato balance the nutrients needed. Besides, the sour taste of the tomato enhance the broth and make it less greasy.\n\nSimilar as a common ramen, the ramen could customize the toppings wish to choose such as fish cake, seasoned boiled egg, corn, sliced pork and etc.', '12.50', '../image/tomato_shio_ramen.jpg', 'p1006', 1),
(8, 'Sapporo Style Ramen', 'Ramen  ', 'Medium thickness of miso broth and seasonings such as bean sprouts and onion.', 'Sapporo style ramen consist of medium thickness of miso broth and seasonings such as bean sprouts and onion. The vegies added in Sapporo tyle ramen could be freh or stirred fried to enhance the taste if the toppings and ramen. \n\nSimilar as a common ramen, the ramen could customize the toppings wish to choose such as fish cake, seasoned boiled egg, corn, sliced pork and etc.', '12.90', '../image/sapporo_style_ramen.jpg', 'p1007', 1),
(9, 'Salmon Sushi', 'Sushi', 'Fresh salmon with fragrant sushi rice, best fit with the soy sauce and wasabi.', '\nFresh salmon sushi is rich, fatty flavor that combine with the rice\'s sweetness and the soy sauce\'s saltiness. Wasabi could be added to gain more special flavor that stimulate your taste buds.', '5.00', '../image/salmon_sushi.jpg', 'p1008', 1),
(10, 'Tako Sushi', 'Sushi', 'Seafood sushi with fresh octopus. Enjoy chewy texture and sweetness of tako.', 'Tako sushi is a seafood sushi with a fresh and chewy octopus that enable you to taste the sweetness of tako.', '10.00', '../image/tako_sushi.jpg', 'p1009', 1),
(11, 'Ebi Prawn Sushi', 'Sushi', 'Butterfly shape of fresh shrimp create an artistic visual effect.', 'Butterfly shape of shrimp create an artistic visual effect when enjoying the meal, fresh prawn used give sweet flavour and firm texture.', '10.00', '../image/ebi_prawn_sushi.jpg', 'p1010', 1),
(12, 'Tamagoyaki Sushi', 'Sushi', 'Sweet and light Japanese omelette wrapped with nori seaweed.', 'Japanese omelette/ rolled egg - tamagoyaki which is made by rolling several layers of fried beaten eggs. It taste sweet and light texture and popular among children who not eating raw seafood.', '12.00', '../image/tamagoyaki_sushi.jpeg', 'p1011', 1),
(13, 'Sushi Platter', 'Sushi', 'Various Type Of Sushi could be enjoy in a single plate.', 'Various Type Of Sushi Such As Nigiri, Maki And California Roll which able to enjoy several types of sushi in a plate.', '20.50', '../image/sushiplatter.jpg', 'p1012', 1),
(14, 'Hosomaki', 'Sushi', 'Consist of one or two fillings of tuna, cucumber and tamagoyaki.', 'Although it consist of just one or two fillings of tuna, cucumber and tamagoyaki, but it is enough to serve as appetizer.', '8.00', '../image/hosomaki.jpg', 'p1013', 1),
(15, 'Temaki', 'Sushi', 'Hand roll form sushi with fresh sashimi, veggies.', 'Hand roll form sushi just like ice cream cone, with fresh sashimi, veggies. You could also customize as you wish.', '13.00', '../image/temaki.jpg', 'p1014', 1),
(16, 'Fruit Sushi', 'Sushi', 'Special sushi contain fresh fruits such as kiwi, mango, pitaya and etc.', '\nSpecial sushi been create by our restaurant. Contain lots of fresh fruits such as kiwi, mango, pitaya and etc. It can be served with honey, condensed milk, and caramel sauce.', '12.00', '../image/fruit_sushi.jpg', 'p1015', 1),
(17, 'Mugicha(Barley Tea)  ', 'Beverage', 'A tea made from roasted barley which taste good in both hot and cold.', 'Mugicha or known as barley tea is made from roasted barley which can be easy to found and grown around the world. It contains higher fibre and often used in bakery and been fermented in making alcoholic drinks. Light taste of barley become popular among?people prefer mild diet.\n\nBarley tea could help in relieve the stomachache, help in people with sleep related problems, reduce cholesterol and help in weight loss.\n\nREMINDER: Barley tea is not suitable for people who sensitive to gluten and allergy to cereal grains.', '4.00', '../image/mugicha.jpg    ', 'p1016', 1),
(18, 'Genmaicha ', 'Beverage', 'Green tea with light yellow color with mildly sweey and nutty flavor.', 'Genmaicha which also known as \"popcorn\" that consists of green tea and roasted popped brown rice. The reason that people adding brown rice into tea is to make the tea last longer and reduce the actual cost of the tea. Aroma of roasted brown rice with some sweetness provide a delightful taste of tea.\n\nGenmaicha may help with relieve stress and concentration. Besides, depending on the green tea used, green tea that full with antioxidants could prevent certain types of cancer. Although genmaicha mixed with brown rice, but it is carbohydrates free and can help burns fats and suppress appetite.\n\nREMINDER: People sensitive witb caffeine should not intake excess amount of green tea to avoid upset digestive system.', '4.50', '../image/genmaicha.jpg  ', 'p1017', 1),
(19, 'Lemon Tea', 'Beverage', 'Refreshing beverages which rich in vitamins and great hydration source.', 'Lemon as a well known and common beverage consists of vitamins and antioxidants that benefits our health. It is low in calorie and helps in lowering the blood pressure as well as reduce the risk of diabetes.\n\nREMINDER: Everything with benefits will have side effects due to excessive intake. Lemon tea will lead to acid reflux and tooth decay due to its acidic features.', '6.00', '../image/lemon_tea.jpg', 'p1018', 1),
(20, 'Sour plum drink', 'Beverage', 'Refreshing drinks especially during hot day.', 'Sour plum drink can be considered as a medicinal drink which can expel heat and also thirst quencing. Other than sour plums, the tea contains of some herbs such as dried orange peel, hawthorn berries licorice root and others.\n\nSour plum drink provides a better function in curing heat related disease according to the traditional Chinese medicine.\n\nREMINDER: Excessive intake of plum juice for people with constipation might leading to excessive digestive problems.', '6.00', '../image/sour_plum_drink.jpg', 'p1019', 1),
(21, 'Peach tea', 'Beverage', 'Sweet and fruity peach flavor.', 'Flavored fruit and herbal tea of peach tea are popular among teenage due to its fruity peach aroma. Flavored fruit peach tea contains fresh fuits such as mango, apples, pineapple and etc. \n\nPeach mainly used in treating summer thirst, constipation, exhaustion and cough. It also helps in improving the immune system and supporting cardiac health as containiing vitamins.\n\nREMINDER: People allergic to peach should avoid this beverage.', '4.50', '../image/peach_tea.jpg', 'p1020', 1),
(22, 'Three Layer Tea', 'Beverage', 'Density provide better visual effect, creamy and refreshing flavor.', 'The beautiful layers form by palm sugar syrup (gula Melaka), evaporated milk and black tea. Sweetness could be adjust by increase or decrease the syrup in the drinks. It provides a refreshing flavor and it is not sweet as expected.\n\nOur restaurant could customize it for vegans by replacing the evaporated milk with other milk such as oat milk, soy milk or even almond milk.', '6.00', '../image/three_layer_tea.jpg', 'p1021', 1),
(23, 'Snow Fungus Soup With Pears', 'Beverage', 'Chinese dessert that serve on special occasions.', 'A Chinese dessert that serve on special occasions and it is prized treat as expensive price of snow fungus than black wood ear fungus. Chinese sweet soups could be serve well in either warm or cold such as red bean soup.\n\nIn this soup, pears addded could enhance the sweetness and health of the soups. Chewy and gelatinous snow fungus is believed to strengthen the body and help in recovery from illness. It is also famous dessert among women due to its beauty benefits.', '6.50', '../image/../image/snow_fungus_soup_with_pears.jpeg', 'p1022', 1),
(24, 'Mango Similu', 'Beverage', 'Dessert with mixture of coconut milk, sago, milk and fruits.', '\nSimilu is a simple dessert that made up from cocounut milk, sago, milk and fresh fruits. The milky taste and coconut aroma best suit for those milk lovers. The fresh fruits provide fresh and juicy texture of the dessert. ', '5.90', '../image/mango_similu.jpg', 'p1023', 1),
(25, 'Grass Jelly Drink', 'Beverage', 'A refreshing drink made from grass jelly.', '\nA refreshing drink that made from grass jelly which also known as herb jelly. The jelly-like slippery texture and slightly bitter taste of the glass jelly serve better with some toppings or honey to neutral the bitter taste of it. \n\nThe honey water in grass jelly drink could be also replace with milk or soy milk according to your taste. ', '2.50', '../image/grass_jelly_drink.jpeg', 'p1024', 1),
(26, 'Barley Water', 'Beverage', 'A refreshing drink with semi sweet flavor.', 'Barley water is a magical drink for urinary tract infections due to its diuretic properties. It can increases urination and remove toxins from the body. \n\nThe barley water boiled with the stevia leaves which as the sugar substitute are good in lowering the blood pressure.', '2.00', '../image/barley_water.jpg', 'p1025', 1),
(27, 'Mochi Ice Cream', 'Dessert', 'Small round rice cake with ice cream inside', 'Mochi ice cream is a small round rice cake filled with ice cream. The mochi dough is made from glutinous rice flour and is chewy and soft, while the ice cream center can be various flavors such as green tea, strawberry, or vanilla.', '8.50', '../image/mochi_ice_cream.jpg', 'p2026', 1),
(28, 'Dorayaki', 'Dessert', 'Red bean paste sandwiched between two sweet pancakes', 'Dorayaki is a popular Japanese dessert that consists of two sweet pancakes filled with a sweet red bean paste. The pancakes are made from flour, eggs, sugar, and honey, and are soft and fluffy.', '7.90', '../image/dorayaki.jpg', 'p2027', 1),
(29, 'Matcha Roll Cake', 'Dessert', 'Green tea flavored sponge cake rolled with whipped cream', 'Matcha roll cake is a green tea-flavored sponge cake that is rolled with whipped cream. The sponge cake is light and airy, while the matcha flavor gives it a unique taste that is both sweet and bitter.', '10.50', '../image/matcha_roll_cake.jpg', 'p2028', 1),
(30, 'Anmitsu', 'Dessert', 'Sweet jelly cubes with fruits, red bean paste and syrup', 'Anmitsu is a traditional Japanese dessert that consists of sweet jelly cubes, fruits, red bean paste, and syrup. The jelly cubes are made from agar, a type of seaweed, and are flavored with sugar and fruit juice.', '9.00', '../image/anmitsu.jpg', 'p2029', 1),
(31, 'Taiyaki', 'Dessert', 'Fish-shaped pastry filled with sweet red bean paste', 'Taiyaki is a fish-shaped pastry that is filled with sweet red bean paste. The pastry is made from a pancake-like batter that is cooked in a fish-shaped mold. The red bean paste filling is sweet and creamy.', '6.50', '../image/taiyaki.jpg', 'p2030', 1),
(32, 'Castella', 'Dessert', 'Fluffy and moist sponge cake made from eggs, sugar, and flour', 'Castella is a fluffy and moist sponge cake that is made from eggs, sugar, and flour. The cake is sweet and has a light texture that melts in your mouth. It is often served with tea or coffee.', '8.50', '../image/castella.jpg', 'p2031', 1),
(33, 'Kakigori', 'Dessert', 'Shaved ice with flavored syrup and condensed milk', 'Kakigori is a Japanese shaved ice dessert that is flavored with syrup and condensed milk. The ice is shaved finely, creating a fluffy and light texture that melts in your mouth. It can be served with various flavors such as strawberry, green tea, or lemon.', '7.00', '../image/kakigori.jpg', 'p2032', 1),
(34, 'Daifuku', 'Dessert', 'Small round mochi stuffed with sweet filling like red bean paste, strawberry o', 'Daifuku is a type of mochi (sweet rice cake) that is often filled with sweet filling such as red bean paste, strawberry, or green tea. The rice cake is made from glutinous rice flour and water, and then pounded into a sticky dough. The filling is then wrapped in the dough and formed into a small round ball. It is often served as a sweet snack or dessert.', '3.50', '../image/daifuku.jpg', 'p2033', 1),
(35, 'Warabi Mochi', 'Dessert', 'Mochi made from bracken starch and covered in kinako (toasted soybean flour).', 'Warabi mochi is a type of mochi that is made from bracken starch and covered in kinako (toasted soybean flour). The mochi has a jelly-like texture and is often served chilled. It is a popular dessert in Japan, and is often eaten during the summer months.', '4.50', '../image/warabi_mochi.jpg', 'p2034', 1),
(36, 'Dango', 'Dessert', 'Small, sticky rice cakes on a skewer, usually served with sweet soy sauce.', 'Dango is a traditional Japanese dessert that consists of small, sticky rice cakes on a skewer. It is usually served with sweet soy sauce, and sometimes with toppings such as sesame seeds or matcha powder. Dango has a chewy texture and a slightly sweet flavor, making it a popular snack or dessert in Japan.', '2.50', '../image/dango.jpg', 'p2035', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(50) NOT NULL,
  `foods` varchar(255) NOT NULL,
  `amount_paid` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `pmode`, `foods`, `amount_paid`) VALUES
(12, 'Jackie Lee', 'leejackie1212@gmail.com', '+60127829182', '168, Jalan Katsuri 30\r\nBandar Putra, 81000 Kulai, Johor.', 'cod', 'Salmon Sushi(2), Tako Sushi(1)', '10'),
(13, 'dsads', '1742kexin.wong@gmail.com', '+271127593682', '6823, Jalan Nuri 28/2\r\nBandar Putra 81000 Johor', 'netbanking', 'Salmon Sushi(2)', '10'),
(14, 'Melvin Ng', 'melvin0912@gmail.com', '+60125381222', '12092, Jalan Bunga Raya 9/2\r\nTaman Muhhibah, 81000 Kulai, Johor.', 'netbanking', 'Salmon Sushi(1), Tako Sushi(1)', '15'),
(15, 'hello', 'happy@gmail.com', '60123456789', '12, Jalan Ceria, Taman Meriah, 81000 Kulai, Johor.', 'cards', 'Mushroom Ramen   (3)', '44.7'),
(16, 'Jennifier', 'jennifer@gmail.com', '012-3456789', '12, jalan SL 1/2, Taman Cheras, 49000 kajang, selangor.', 'cod', 'Mushroom Ramen   (1), Sour plum drink(1), Shoyu Ramen (1), Miso Ramen(1), Hakata Ramen(1), Hosomaki(1), Tonkotsu Ramen(1), Sushi Platter(1), Mugicha(Barley Tea)  (1), Temaki(1), Peach tea(1), Tako Sushi(1)', '136.3'),
(17, 'Jane', 'j@gmail.com', '0178253462', '18, jalan kampung, taman katsuri, 81000 kulai, johor.', 'cod', 'Hakata Ramen(1), Temaki(1), Miso Ramen(1), Sushi Platter(1), Hosomaki(1), Three Layer Tea(1), Matcha Roll Cake(1)', '83.4'),
(18, 'Jane', 'j@gmail.com', '0182536823', '12, Jalan Kampung, Taman Baru, 81000 Kulai, Johor.', 'cod', '', '0'),
(19, 'Jane', 'J@Gmail.Com', '0182536823', '12, Jalan Kampung, Taman Baru, 81000 Kulai, Johor.', 'netbanking', '', '0'),
(20, 'Jane', 'J@Gmail.Com', '0182536823', '12, Jalan Kampung, Taman Baru, 81000 Kulai, Johor.', 'netbanking', '', '0'),
(21, 'Jane', 'J@Gmail.Com', '0182536823', 'J@Gmail.Com', 'cards', 'Tonkotsu Ramen(1), Chicken Shio Ramen(1), Sapporo Style Ramen(1)', '42.8'),
(22, 'Jane', 'J@Gmail.Com', '0182536823', '12, Jalan Kampung, Taman Baru, 81000 Kulai, Johor.', 'cod', 'Hakata Ramen(1), Tomato Shio Ramen(1), Tamagoyaki Sushi(1)', '38'),
(23, 'Jane', 'J@Gmail.Com', '0182536823', '12, Jalan Kampung, Taman Baru, 81000 Kulai, Johor.', 'netbanking', 'Mushroom Ramen   (1)', '14.9'),
(24, 'Jane', 'J@Gmail.Com', '0182536823', '12, Jalan Kampung, Taman Baru, 81000 Kulai, Johor.', 'netbanking', 'Shoyu Ramen (1)', '15'),
(25, 'Jane', 'J@Gmail.Com', '0182536823', '12, Jalan Kampung, Taman Baru, 81000 Kulai, Johor.', 'cod', 'Miso Ramen(1)', '11.9'),
(26, 'Jane', 'J@Gmail.Com', '0182536823', '12, Jalan Kampung, Taman Baru, 81000 Kulai, Johor.', 'netbanking', 'Salmon Sushi(1)', '5'),
(27, 'Jane', 'J@Gmail.Com', '0182536823', '12, Jalan Kampung, Taman Baru, 81000 Kulai, Johor.', 'cards', 'Snow Fungus Soup With Pears(1)', '6.5'),
(28, 'Jane', 'J@Gmail.Com', '0182536823', '12, Jalan Kampung, Taman Baru, 81000 Kulai, Johor.', 'cod', 'Shoyu Ramen (1)', '15'),
(29, 'Jane', 'J@Gmail.Com', '0182536823', '12, Jalan Kampung, Taman Baru, 81000 Kulai, Johor.', 'cards', 'Peach tea(1)', '4.5'),
(30, 'Jane', 'J@Gmail.Com', '0182536823', '12, Jalan Kampung, Taman Baru, 81000 Kulai, Johor.', 'cod', 'Castella(1)', '8.5'),
(31, 'Jane', 'J@Gmail.Com', '0182536823', '12, Jalan Kampung, Taman Baru, 81000 Kulai, Johor.', 'cod', 'Dorayaki(1)', '7.9');

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

DROP TABLE IF EXISTS `useraccount`;
CREATE TABLE IF NOT EXISTS `useraccount` (
  `userid` int NOT NULL AUTO_INCREMENT,
  `username` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`userid`, `username`, `email`, `password`) VALUES
(1, 'Jane Lee', 'jane123@gmail.com', '123456'),
(2, 'Kelvin Wong', 'wong1234@gmail.com', 'abcd');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
