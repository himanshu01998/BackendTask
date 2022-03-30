-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 16, 2021 at 09:22 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minics`
--

-- --------------------------------------------------------

--
-- Table structure for table `beauty_toys_and_more`
--

CREATE TABLE `beauty_toys_and_more` (
  `product_id` bigint(20) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_sub_category` varchar(30) NOT NULL,
  `product_price` double(11,2) NOT NULL,
  `product_color` varchar(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_img1` text NOT NULL,
  `seller_id` int(11) NOT NULL,
  `is_active` varchar(20) NOT NULL DEFAULT 'True'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beauty_toys_and_more`
--

INSERT INTO `beauty_toys_and_more` (`product_id`, `product_name`, `product_sub_category`, `product_price`, `product_color`, `product_desc`, `product_img1`, `seller_id`, `is_active`) VALUES
(1, 'NHR Infrared Induction Helicopter Hand Sensor Aircraft USB Charger 2 in 1 Flying Helicopter with Remote Control  (Blue)', 'Toy Vehicle', 579.00, 'Blue', 'NHR Exceed Helicopter is a hand induction helicopter which is operated by wireless remote control and Infra-Red Sensor. It has one inbuilt battery which can be charged through a USB port. It can float anywhere ascending, descending, left, and right with 3D lights in it.Made of the high-grade material, which is durable, wear-resisting, anti-corrosion and eco-friendly. ', 'images/productImages/2-in-1-infrared-induction-helicopter-sensor-aircraft-with-usb-original-imag7zkwmhze79gn.jpeg', 1, 'True'),
(2, 'MAYBELLINE NEW YORK Baby Lips Bloom Color Changing Lip Balm PINK BLOOM  (Pack of: 1, 1.7 g)', 'Makeup', 125.00, 'PINK BLOOM', 'Soft supple lips that look healthily luscious add a wonderful magnetism to your personality. Get your lips to shimmer with this Maybelline Lip Smooth Color Bloom Lip Balm Pink Blossom. With a delightful pink blossom flavour, this lip balm soothes and nourishes your chapped lips, replenishing them with moisture. A lot of factors like pollution, stress and harsh weather make your lips dull and pale. ', 'images/productImages/1-7-baby-lips-bloom-color-changing-lip-balm-maybelline-original-imafjzacmjhuyyzj.jpeg', 1, 'True'),
(3, 'LakmÃ© Eyeconic Kajal  (Turquiose, 0.35 g)', 'Kajal', 347.00, 'Turquiose', ' Work or parties, the Lakme Eyeconic kajal lets you create dramatic looks for your eyes. Just one stroke of this eye color is enough to define your peepers. Long-lasting Effect Draw on a subtle cat-eye, or go bold by trying a blended eye make-up. The Lakme Eyeconic kajal is smudge-proof and waterproof. It glides smoothly over your eyelids, and leaves a trail of matte color behind. Its intense colors stays on for up to 22 hours.', 'images/productImages/0-35-eyeconic-kajal-lakme-original-imaek8pfhajhz8gh.jpeg', 2, 'True'),
(4, 'MAYBELLINE NEW YORK Colossal Pen Liner 1.2 ml  (Black)', 'Liner', 259.00, 'Black', 'A smudge-proof, water-proof liquid eyeliner from Maybelline New York colossal range that lasts up to 24 hours and delivers intense black payoff. It has a brush tip applicator and long handle for easy application and removal.Maybelline New York - Quick Dry Formula, The liner is easy to apply and dries up within seconds of application to give you 12 hours of long-lasting finish. Flexi Tip Applicator:- The tip of the liner is designed to prevent mistakes while application and smoothly glides to give a clean, nice finish. ', 'images/productImages/1-2-colossal-pen-liner-maybelline-original-imafjza2ph5yzwfz.jpeg', 2, 'True');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_table` varchar(100) NOT NULL,
  `category_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_table`, `category_image`) VALUES
(1, 'Clothing', 'clothing', 'images/Cat_clothing.png'),
(2, 'Mobile', 'mobiles', 'images/Cat_Mobile.jpg'),
(3, 'Electronics', 'electronics', 'images/Cat_electronics.png'),
(4, 'Beauty, Toys & More', 'beauty_toys_and_more', 'images/Cat_beauty.png');

-- --------------------------------------------------------

--
-- Table structure for table `clothing`
--

CREATE TABLE `clothing` (
  `product_id` bigint(20) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_sub_category` varchar(30) NOT NULL,
  `product_price` double(11,2) NOT NULL,
  `product_color` varchar(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_img1` text NOT NULL,
  `seller_id` int(11) NOT NULL,
  `is_active` varchar(20) NOT NULL DEFAULT 'True'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clothing`
--

INSERT INTO `clothing` (`product_id`, `product_name`, `product_sub_category`, `product_price`, `product_color`, `product_desc`, `product_img1`, `seller_id`, `is_active`) VALUES
(1, 'Color Block Men Hooded Neck T-Shirt', 'T-Shirts', 399.00, 'White, Red, Black', 'Strut on the streets in comfort wearing this EYEBOGLER T-shirt. This unique creation is made using cotton. Be carefree and live the moment wearing this regular-fit T-shirt. The use of color will add to the charm of your personality.', 'images/productImages/l-t345-blwhrd-new-eyebogler-original-imafzr4f7nxecr44.jpeg', 1, 'True'),
(2, 'Solid Men Hooded Neck Black T-Shirt', 'T-Shirts', 368.00, 'Black', 'This T-Shirt is made up of 60% Cotton, 40% Polyester single jersey fabric. It is bio-washed and softener treated which makes the fabric ultra soft in touch and feel. The fabric does not pill and the color will not fade easily.The fabric GSM is 190.', 'images/productImages/3xl-t2-seven-rocks-original-imafzbptgchwstcx.jpeg', 1, 'True'),
(3, 'Men\'s Regular Blue Jeans', 'Jeans', 459.00, 'Blue', 'Regular Men Blue Jeans,  Pocket Type - Patch Pocket, Reversible - No, Sales Package - 1 Jeans, Closure - Button, Fabric - Denim', 'images/productImages/38-lj4633-lzard-original-imafwaht5qkncvxx.jpeg', 1, 'True'),
(4, 'Grey Two Piece Suit 2 Piece Checkered Men Suit', 'Men Suit', 6499.00, 'Grey', 'Tailored in a Slim Fit, this grey check two piece suit from Louis Philippe by House of Louis Philippe will accentuate your dapper style.', 'images/productImages/44-lpsumslfy03270-louis-philippe-original-imafmf53y4sgdkbz.jpeg', 2, 'True'),
(5, 'Skinny Men Light Blue Jeans', 'Jeans', 1869.00, 'Blue', 'Skinny Men Light Blue Jeans, Killer Mens Ankle Fit Jeans', 'images/productImages/32-kjb-1624-killer-original-imag786yzdhh92gs.jpeg', 2, 'True'),
(6, 'Striped Men Hooded Neck Maroon T-Shirt', 'T-Shirts', 249.00, 'Maroon', 'Please go through the size chart before placing the orders. Mark your solid impressions with ours ultra-soft, super cool hooded t-shirt. Wear this ultra-comfy full sleeve hooded t-shirt. Place in many ways with dark jeans, cuffed chinos. Its 100% soft cotton, solid color. Machine wash t-shirt, the material moves in every direction. Looks cool in every type of jacket so you look cool in winters as well. Its super dry and ultra-fashionable hooded must have t-shirt in your wardrobe.', 'images/productImages/-original-imafdfvvz65ab7vm.jpeg', 1, 'True'),
(7, 'Printed Men Hooded Neck Black T-Shirt', 'T-Shirts', 359.00, 'Black', 'Shop from wide range of printed Hoodie Mask T-Shirt from TRIPR. Look confident with this Casual Hoodie Mask T-Shirt. Pair this tshirt with jeans or chinos,trousers and get an awesome look. It is regular machine wash. This fabric is soft in touch and it makes feel so comfort when you wear. The fabric does not pill and the colour will not fade easily.Available in various color and designs for your every day fashion.', 'images/productImages/4xl-tblhdfulmask-lion-tripr-original-imagy9tcx7q25wym.jpeg', 1, 'True');

-- --------------------------------------------------------

--
-- Table structure for table `electronics`
--

CREATE TABLE `electronics` (
  `product_id` bigint(20) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_sub_category` varchar(30) NOT NULL,
  `product_price` double(11,2) NOT NULL,
  `product_color` varchar(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_img1` text NOT NULL,
  `seller_id` int(11) NOT NULL,
  `is_active` varchar(20) NOT NULL DEFAULT 'True'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `electronics`
--

INSERT INTO `electronics` (`product_id`, `product_name`, `product_sub_category`, `product_price`, `product_color`, `product_desc`, `product_img1`, `seller_id`, `is_active`) VALUES
(1, 'acer Aspire 7 Core i5 10th Gen - (8 GB/512 GB SSD/Windows 10 Home/4 GB Graphics/NVIDIA GeForce GTX 1650)', 'Laptops', 49999.00, 'Black', 'This Acer gaming laptop features a large screen-to-body ratio and a FHD narrow border screen so that you can enjoy an expansive view of the screen. This gaming laptop offers USB ports, an HDMI port, and more to enable offline charging and so on. And, its aesthetic design and backlit keyboard enable you to game with ease in a dimly lit room.', 'images/productImages/na-gaming-laptop-acer-original-imag3d63hk3h8nm2.jpeg', 1, 'True'),
(2, 'ZEBRONICS 18.5 inch HD Monitor (ZEB-V19HD LED)  (Response Time: 8 ms)', 'Monitor', 5999.00, 'Black', 'ZEBRONICS 18.5 inch HD Monitor (ZEB-V19HD LED)  (Response Time: 8 ms), Screen Resolution Type: HD Response Time: 8 ms', 'images/productImages/zeb-v19hd-led-hd-18-5-zeb-v19hd-led-zebronics-original-imag73hbg3zhz3zx.jpeg', 1, 'True'),
(3, 'APPLE Watch Series 3 GPS - 38 mm Space Grey Aluminium Case with Black Sport Band  (Black Strap, Regular)', 'Smart Watches', 19900.00, 'Space Grey', 'GPS and Altimeter Swimproof Voice Based Siri 3 Activity Rings Tracking - Move, Exercise, Stand Smart Coaching Activity Sharing and Achievements Heart Rate Monitor Breathe App Notifications Touchscreen Notifier, Fitness & Outdoor Battery Runtime: Upto 18 hrs', 'images/productImages/mtf02hn-a-apple-original-imaf9ec8nh6sscfh.jpeg', 2, 'True'),
(4, 'SAMSUNG 192 L Direct Cool Single Door 2 Star Refrigerator  (Gray Silver, RR19A241BGS/NL)', 'Refrigerator', 13999.00, 'Gray Silver', '192 L : Good for couples and small families Linear Compressor 2 Star : For Energy savings up to 20% Direct Cool : Economical, consumes less electricity, requires manual defrosting', 'images/productImages/rr19a241bgs-nl-2-2021-samsung-original-imagy9pyfszpmgwm.jpeg', 1, 'True'),
(5, 'SAMSUNG 198 L Direct Cool Single Door 5 Star Refrigerator with Base Drawer  (Camellia Blue, RR21T2H2WCU/HL', 'Refrigerator', 18990.00, 'Camellia Blue', '198 L : Good for couples and small families Digital Inverter Compressor 5 Star : For Energy savings up to 55% Direct Cool : Economical, consumes less electricity, requires manual defrosting Base Stand with Drawer : For storing items that don\'t need cooling (Onion, Potato etc.)', 'images/productImages/rr21t2h2wcu-hl-5-samsung-original-imafnmkbyzev8szv.jpeg', 1, 'True'),
(6, 'Whirlpool 190 L Direct Cool Single Door 3 Star Refrigerator  (Solid Blue / Blue, WDE 205 CLS 3S BLUE)', 'Refrigerator', 12998.00, 'Solid Blue', '190 L : Good for couples and small families Normal Compressor 3 Star : For Energy savings up to 35% Direct Cool : Economical, consumes less electricity, requires manual defrosting', 'images/productImages/wde-205-cls-2s-2-whirlpool-original-imafzx73myyfmyy8.jpeg', 2, 'True');

-- --------------------------------------------------------

--
-- Table structure for table `mobiles`
--

CREATE TABLE `mobiles` (
  `product_id` bigint(20) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_sub_category` varchar(30) NOT NULL,
  `product_price` double(11,2) NOT NULL,
  `product_color` varchar(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_img1` text NOT NULL,
  `seller_id` int(11) NOT NULL,
  `is_active` varchar(20) NOT NULL DEFAULT 'True'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobiles`
--

INSERT INTO `mobiles` (`product_id`, `product_name`, `product_sub_category`, `product_price`, `product_color`, `product_desc`, `product_img1`, `seller_id`, `is_active`) VALUES
(1, 'realme GT Master Edition (Cosmos Black, 128 GB)  (6 GB RAM)', 'Android', 25999.00, 'Cosmos Black', '6 GB RAM | 128 GB ROM 16.33 cm (6.43 inch) Full HD+ Display 64MP + 8MP + 2MP | 32MP Front Camera 4300 mAh Battery Qualcomm Snapdragon 778G Processor', 'images/productImages/gt-master-edition-rmx3360-realme-original-imag6yg5jzgu7gzj.jpeg', 1, 'True'),
(2, 'APPLE iPhone 12 Mini (White, 64 GB)', 'ios', 49599.00, 'White', '64 GB ROM 13.72 cm (5.4 inch) Super Retina XDR Display 12MP + 12MP | 12MP Front Camera A14 Bionic Chip with Next Generation Neural Engine Processor Ceramic Shield Industry-leading IP68 Water Resistance All Screen OLED Display 12MP TrueDepth Front Camera with Night Mode, 4K Dolby Vision HDR Recording', 'images/productImages/apple-iphone-12-mini-dummyapplefsn-original-imafwgbfhfevaajh.jpeg', 1, 'True'),
(3, 'realme GT NEO 2 (NEO Black, 128 GB)  (8 GB RAM)', 'Android', 31999.00, 'NEO Black', '8 GB RAM | 128 GB ROM 16.81 cm (6.62 inch) Full HD+ Display 64MP + 8MP + 2MP | 16MP Front Camera 5000 mAh Battery Qualcomm Snapdragon 870 Processor', 'images/productImages/gt-neo2-5g-rmx3370-realme-original-imag7puemtw7atdk.jpeg', 2, 'True'),
(4, 'MOTOROLA G60 (Dynamic Gray, 128 GB)  (6 GB RAM)', 'Android', 18599.00, 'Dynamic Gray', '6 GB RAM | 128 GB ROM 17.22 cm (6.78 inch) Full HD+ Display 108MP + 8MP + 2MP | 32MP Front Camera 6000 mAh Battery Qualcomm Snapdragon 732G Processor 120Hz Refresh Rate Stock Android Experience', 'images/productImages/g60-panb0000in-panb0016in-panb0012in-panb0014in-motorola-original-imag2aq9v8hzetbn.jpeg', 1, 'True'),
(5, 'Infinix Hot 10 Play (Aegean Blue, 32 GB)  (3 GB RAM)', 'Android', 8299.00, 'Aegean Blue', '3 GB RAM | 32 GB ROM | Expandable Upto 256 GB 17.32 cm (6.82 inch) HD+ Display 13MP + Depth Sensor | 8MP Front Camera 6000 mAh Li-ion Polymer Battery MediaTek Helio G35 Processor', 'images/productImages/hot-10-play-x688b-infinix-original-imag29hftfmjywkv.jpeg', 1, 'True'),
(6, 'SAMSUNG Galaxy F42 5G (Matte Black, 128 GB)  (8 GB RAM)', 'Android', 22999.00, 'Matte Black', '8 GB RAM | 128 GB ROM | Expandable Upto 1 TB 16.76 cm (6.6 inch) Full HD+ Display 64MP + 5MP + 2MP | 8MP Front Camera 5000 mAh Lithium-ion Battery MediaTek Dimensity 700 Pro', 'images/productImages/galaxy-f42-5g-sm-e426bzahins-samsung-original-imag7anfwxsgumgz.jpeg', 1, 'True');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `seller_id` int(11) NOT NULL,
  `seller_name` varchar(30) NOT NULL,
  `seller_email` varchar(20) NOT NULL,
  `seller_password` varchar(15) NOT NULL,
  `seller_gstin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`seller_id`, `seller_name`, `seller_email`, `seller_password`, `seller_gstin`) VALUES
(1, 'Himanshu', 'h@gmail.com', '123', 'GST0123'),
(2, 'Heman', 'he@gmail.com', '123', 'GST01234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beauty_toys_and_more`
--
ALTER TABLE `beauty_toys_and_more`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `clothing`
--
ALTER TABLE `clothing`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `electronics`
--
ALTER TABLE `electronics`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `mobiles`
--
ALTER TABLE `mobiles`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`seller_id`),
  ADD UNIQUE KEY `seller_email` (`seller_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beauty_toys_and_more`
--
ALTER TABLE `beauty_toys_and_more`
  MODIFY `product_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clothing`
--
ALTER TABLE `clothing`
  MODIFY `product_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `electronics`
--
ALTER TABLE `electronics`
  MODIFY `product_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mobiles`
--
ALTER TABLE `mobiles`
  MODIFY `product_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
