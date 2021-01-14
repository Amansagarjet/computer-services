-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2020 at 05:39 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lovcomputersolution`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_table`
--

CREATE TABLE `category_table` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) DEFAULT NULL,
  `status` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_table`
--

INSERT INTO `category_table` (`cat_id`, `cat_name`, `status`) VALUES
(1, 'Hardware', 'Y'),
(2, 'Networking', 'Y'),
(3, 'Software', 'Y'),
(4, 'Antivirus', 'Y'),
(5, 'Data Recovery', 'Y'),
(6, 'Annual Maintainance', 'Y'),
(7, 'Printer Repair', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `contain`
--

CREATE TABLE `contain` (
  `id` int(11) NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `tittle` varchar(255) DEFAULT NULL,
  `description` varchar(3000) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `status` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contain`
--

INSERT INTO `contain` (`id`, `page_id`, `tittle`, `description`, `image_url`, `status`) VALUES
(0, 1, 'Commitments', 'Lov Computer Solution commitment provides honest service with good technical skills. Lov Computer solution is to add value and to contribute to our client’s long term success and competitive strength. we build long term relationships with our client.', NULL, 'Y'),
(1, 1, 'Target Market', 'Lov Computer Solution provide affordable computers, Rent on Computers, IT Products, and Services to the public, small businesses, private companies, colleges, schools, and government departments.', NULL, 'Y'),
(2, 1, 'Our Mission', 'Our Mission is to add value and to contribute to our client’s long term success and competitive strength. we build long term relation with our client. we provide best service in computer & laptop repairing.', NULL, 'Y'),
(3, 1, 'Management And Ownership', 'We have experienced good technical skills very qualified honest engineer in our team. They find all type of issue in computers & laptops and solved very quickly.', NULL, 'Y'),
(4, 1, NULL, 'rating', 'star.png', 'Y'),
(5, 1, NULL, 'body_small_image_1', 'b1.jpg', 'Y'),
(6, 1, NULL, 'body_small_image_2', 'b2.jpg', 'Y'),
(7, 1, NULL, 'body_small_image_3', 'b3.jpg', 'Y'),
(8, 1, NULL, 'body_small_image_4', 'b4.jpg', 'Y'),
(9, 1, NULL, 'body_small_image_5', 'b5.jpg', 'Y'),
(10, 1, NULL, 'body_small_image_6', 'b6.jpg', 'Y'),
(11, 1, 'We Provide Service With Right Commitment', 'Largely on the strength of Microsoft’s success, Gates amassed a huge paper fortune as the company’s largest individual shareholder. He became a paper billionaire in 1986, and within a decade his net worth had reached into the tens of billions of dollars—making him by some estimates the world’s richest private individual. With few interests beyond software and the potential of information technology, Gates at first preferred to stay out of the public eye, handling civic and philanthropic affairs indirectly through one of his foundations. Nevertheless, as Microsoft’s power and reputation grew, and especially as it attracted the attention of the U.S. Justice Department’s antitrust division, Gates, with some reluctance, became a more public figure. Rivals (particularly in competing companies in Silicon Valley).', 'a5.jpg', 'Y'),
(12, 1, 'We Provide Service With Right Commitment', 'Largely on the strength of Microsoft’s success, Gates amassed a huge paper fortune as the company’s largest individual shareholder. He became a paper billionaire in 1986, and within a decade his net worth had reached into the tens of billions of dollars—making him by some estimates the world’s richest private individual. With few interests beyond software and the potential of information technology, Gates at first preferred to stay out of the public eye, handling civic and philanthropic affairs indirectly through one of his foundations. Nevertheless, as Microsoft’s power and reputation grew, and especially as it attracted the attention of the U.S. Justice Department’s antitrust division, Gates, with some reluctance, became a more public figure. Rivals (particularly in competing companies in Silicon Valley).', 'a2.jpg', 'Y'),
(13, 1, 'carousel', 'first image', 'web1.png', 'Y'),
(14, 1, 'carousel1', 'second image', 'web2.jpg', 'Y'),
(15, 1, 'carousel2', 'third image', 'web4.jpg', 'Y'),
(16, 1, 'carousel3', 'fourth image', 'web5.jpg', 'Y'),
(17, 1, 'carousel4', 'five image', 'web6.jpg', 'Y'),
(18, 1, 'carousel5', 'six image', 'web7.png', 'Y'),
(19, 2, 'Introduction & Company\'s Mission', '¨Kindly permit us to introduce ourselves as Lov Computers who is highly trained and professionally engaged in Repairing & Maintenance of Computers. Lov Computers have sufficient stock of spare parts for repairing and maintainance of computers & Laptops at', 'ab1.jpg', 'Y'),
(20, 2, 'High Performance Service', 'Lov computer solution provides high-performance\r\nservice in computer and laptop repairing.$We provide service with honest & good technical skills.$We provide service with the right commitment.$We provide service of the web designing.$We prove both chip level & card level repairing.$We prove you are the right choice for repairing.', 'ab2.png', 'Y'),
(21, 2, 'Major Clients', 'Our satisfied Major clients that we constantly supply and have<br>developed a permanent relationship include:$\r\n1.Onyx Electronisys Pvt.Ltd (manage traffic signals in Delhi)$2.Mayo International School (2nd rank in east Delhi)$3.Arunodaya Public School$4.Value Prospect Consulting in Noida$5.Zoren Hops Machines Pvt.Ltd$6.HKJ & Associates (A law firm in Mayur Vihar)$7.Abatek Technologies Pvt.Ltd$8.Flores Hospital Ghaziabad$\r\n9.SMS Envocare Ltd$10.Darsh Digital (interior work)', NULL, 'Y'),
(22, 2, 'Services', 'Lov Computer solution provide better & quick service.$\r\n1. Annual Maintenance Contract For Computers & Laptops.$2. Sale of new computers,laptops & Printers.$3. Hardware, Consumables & Software Sales & Support.$4. Network Installation & Support.$5. Computer Hardware Maintenance.$6. Computers on Rent or hire.$7. Non Comprehensive Services Without Spare Parts.$8. Regularly system cleaning.$9. Maintenance of Anti-Virus Updates/Upgrades.$10. Toner Cartridge Refilling.$', NULL, 'Y'),
(23, 1, 'We Provide<br>HIGH PERFORMANCE SERVICE', NULL, NULL, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `tittle` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `status` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `tittle`, `description`, `image_url`, `status`) VALUES
(1, 'Addresss', 'U Block Laxmi Nagar,Near Metro Station,<br>New Delhi (110092)', NULL, 'Y'),
(2, 'Contact us', '+91-9012267671 , +91-8279416143', '', 'Y'),
(3, 'Email Address', 'Lovcomputersolution@gmail.com', '', 'Y'),
(4, 'FACEBOOK', 'https://www.facebook.com/aman.sagar.77715', NULL, 'Y'),
(5, 'INSTAGRAM', 'https://www.instagram.com/amansagarcooltechy/', NULL, 'Y'),
(6, 'Linkedin', 'https://www.linkedin.com/in/aman-sagar-6052b2199/', '', 'Y'),
(7, 'Youtube', 'https://www.youtube.com/channel/UCmNGS4qzTDKDGEsgCGOzFoA', '', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `pages_table`
--

CREATE TABLE `pages_table` (
  `id` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages_table`
--

INSERT INTO `pages_table` (`id`, `page_name`, `url`, `status`) VALUES
(1, 'Home', 'sai_home.php', 'Y'),
(2, 'About', 'sai_about.php', 'Y'),
(3, 'Services', '#', 'Y'),
(4, 'Contact Us', 'sai_contact.php', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `qry` varchar(255) DEFAULT NULL,
  `status` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `name`, `email`, `subject`, `qry`, `status`) VALUES
(0, 'Kapil sagar', 'Kapilsagarjet@gmail.com', 'Network installation', 'Please Solve my Problem quickly.', 'Y'),
(1, 'Vipin sagar', 'Vipinsagarjet@gmail.com', 'Hardware Problem', 'Please design for me Good website', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `service_name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `cat_id`, `service_name`, `description`, `image`, `status`) VALUES
(0, 4, 'Antivirus install upgrade & updates', 'Lov Computer Solution Provides secure computers it provide regularly updates antiviruses and cleanup  regularly unwanted files and cache.', 'v4.jpg', 'Y'),
(1, 1, 'PC Assemble', 'Lov Computer Solution Provides all type computer Normal and Gaming & Servers assemble.', 'h.jpg', 'Y'),
(2, 1, 'Laptop Repair', 'Lov Computer Solution provides solved all types problems of laptop in Delhi NCR', 'laptop_repair.jpg', 'Y'),
(3, 1, 'Motherboard Repair', 'Lov Computer Solution provides cheep and best service chip level Motherboard repair.', 'h1.jpg', 'Y'),
(4, 1, 'Hardware Peripheral ', 'Lov Computer solution provides all types computer peripheral devices and product like Computers,Laptops,Printers.', 'h2.png', 'Y'),
(5, 2, 'Network installation', 'We provides local area network setup and troubleshoot network issues and provide secure network in offices and home.', 'n.jpg', 'Y'),
(6, 2, 'Network Support', 'Lov Computer Solution provides remotely support and on side support office and home.', 'n1.jpg', 'Y'),
(7, 3, 'System Software', 'Lov Computer Solution provides system softwares like Microsoft Windows Xp, 7, 8, 8.1,10, Microsoft Server, Unix, Linux and Ubuntu.', 's.jpg', 'Y'),
(8, 3, 'Software installation', 'Lov Computer Solution provides all types application softwares trial and paid like Microsoft Office, Coral Draw, Media players, Browsers and Much Many More.', 's1.png', 'Y'),
(9, 3, 'Utility Software', 'Lov Computer Solution provides all kinds of drivers like Graphics, Sound, Chipset, Compression utility, Backup software.', 's2.png', 'Y'),
(10, 3, 'Accesories Software', 'Lov Computer Solution provides all kinds of Accesories drivers like Printers respaberry utility, Backup software.', 's2.png', 'Y'),
(11, 5, 'Data Recovery', 'Lov Computer Solution provides  all types data recovery like Hard Drive, pendrive important data securely save  with best paid softwares.', 'v2.png', 'Y'),
(12, 5, 'Pendrive SD Card Recovery', 'Lov Computer Solution provides pendrive and SD card Recovery that important data was delete or corupted we have try data save or virus effected recovery.', 'v3.jpg', 'Y'),
(13, 6, 'Annual Maintainance contract', 'We Provides AMC For companies or home best and quick support and well educated and experience engineer.', 'amc.jpg', 'Y'),
(14, 6, 'On Site Services', 'Lov Computer Solution Provides On Site Support office or home in Delhi NCR.', 'on.png', 'Y'),
(15, 7, 'Printer Repaiiring', 'Lov Computer Solution Provides Laser Printer repairing reasonable price and good service.', 'p.jpg', 'Y'),
(16, 7, 'Toner & Catridge Refilling', 'Lov Computer Solution Provides on site toner refilling like office or home with best printing.', 'p1.jpeg', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_table`
--
ALTER TABLE `category_table`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contain`
--
ALTER TABLE `contain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages_table`
--
ALTER TABLE `pages_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_table`
--
ALTER TABLE `category_table`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contain`
--
ALTER TABLE `contain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1632;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pages_table`
--
ALTER TABLE `pages_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
