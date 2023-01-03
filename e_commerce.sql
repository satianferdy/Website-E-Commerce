-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jan 2023 pada 06.18
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_commerce`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Tees'),
(2, 'Shirt'),
(3, 'Bottoms'),
(4, 'Outwear'),
(5, 'Headwear'),
(6, 'Knitwear'),
(7, 'Footwear'),
(8, 'Accessories'),
(9, 'Jawelry'),
(10, 'Bag'),
(11, 'Home Goods');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `harga` double NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `stock` enum('soldout','ready') DEFAULT 'ready'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `harga`, `foto`, `details`, `stock`) VALUES
(1, 4, 'Weirdo Luxury', 499000, '1.png', 'Bring you special vintage looking. The airy mesh is breathable to keep you maximum cool in summer days.\r\n<br><br>\r\nRegular Beggie Hoddie with plastisol screen-printed. <br>\r\nmaterial : cotton 20s\r\n<br><br>\r\nAttention <br>\r\nPlease record when opening the package from us to be evidence. Sorry, we do not accept returns if there is an error on the part of the buyer, such as choosing the wrong size or color or no record when opening the package.\r\n', 'ready'),
(2, 4, 'Love Is Bias', 499000, '2.png', 'Bring you special vintage looking. The airy mesh is breathable to keep you maximum cool in summer days.\r\n<br><br>\r\nRegular Beggie Hoddie with plastisol screen-printed. <br>\r\nmaterial : cotton 20s\r\n<br><br>\r\nAttention <br>\r\nPlease record when opening the package from us to be evidence. Sorry, we do not accept returns if there is an error on the part of the buyer, such as choosing the wrong size or color or no record when opening the package.\r\n', 'ready'),
(3, 1, 'BRNDHN tee', 200000, '3.png', 'Bring you special vintage looking. The airy mesh is breathable to keep you maximum cool in summer days.\r\n<br><br>\r\nOversize short sleeve t-shirt with plastisol screen-printed. <br>\r\nmaterial : cotton 20s\r\n<br><br>\r\nAttention <br>\r\nPlease record when opening the package from us to be evidence. Sorry, we do not accept returns if there is an error on the part of the buyer, such as choosing the wrong size or color or no record when opening the package.\r\n', 'ready'),
(4, 1, 'Kobe Bryant tee', 200000, '4.png', 'Bring you special vintage looking. The airy mesh is breathable to keep you maximum cool in summer days.\r\n<br><br>\r\nOversize short sleeve t-shirt with plastisol screen-printed. <br>\r\nmaterial : cotton 20s\r\n<br><br>\r\nAttention <br>\r\nPlease record when opening the package from us to be evidence. Sorry, we do not accept returns if there is an error on the part of the buyer, such as choosing the wrong size or color or no record when opening the package.\r\n', 'ready'),
(5, 7, 'Vans Live at HOV Sk8-Low', 799000, '5.png', 'A Take Off The Legendary Vans Upper, Is Built With A Durable Suede And Canvas Upper. And Has A Print On The Side This Lace-Up Sneaker Brings The Familiar Sk8-Hi Aesthetic To A Classic Flat That Reflects A Taller Pair With A Reinforced Toe Flap. Support Padded Collar And The Iconic Waffle Rubber Sole.<br><br>\r\n\r\nVans Live At HOV Sk8-Low <br>\r\nSize 39 - 45 <br>\r\n<br>\r\nAttention <br>\r\nPlease record when opening the package from us to be evidence. Sorry, we do not accept returns if there is an error on the part of the buyer, such as choosing the wrong size or color or no record when opening the package.', 'ready'),
(6, 7, 'Reebok Classic Leather 1983 Vintage', 899000, '12.png', 'Coming soon', 'ready'),
(7, 7, 'New Balance CT300', 699000, '7.png', 'classic New Balance Court heritage style in a modern low-profile silhouette.', 'ready'),
(8, 7, 'Nike Waffle Spezial Edition', 999000, '8.png', 'Retro and contemporary style meet in this Nike Waffle Debut. Fun graphics add a vintage touch that celebrates 50 years of Nike innovation.', 'ready'),
(9, 7, 'Nike Air Max SC Womens', 799000, '9.png', 'The Nike Air Max SC Womens is designed to be the perfect finishing touch to any outfit and keeps you comfortable and breathable all day long.', 'ready'),
(10, 7, 'Vans Flame Old Skool', 899000, '11.png', 'The first to bear the iconic side stripe, the Vans Flame Old Skool is a low top lace-up shoe. It is lined, has padded collars for comfort, reinforced toecaps to withstand repeated wear, and features the Vans signature waffle outsole for a firmer grip. Get yours', 'ready'),
(11, 7, 'Nike Blazer Mid 77 Vintage', 999000, '10.png', 'The first to bear the iconic side stripe, the Vans Flame Old Skool is a low top lace-up shoe. It is lined, has padded collars for comfort, reinforced toecaps to withstand repeated wear, and features the Vans signature waffle outsole for a firmer grip. Get yours', 'ready'),
(12, 4, 'Nike Swoosh Fleece Jacket', 2499000, '13.png', 'Coming Soon', 'ready'),
(13, 1, 'Nike Swoosh Tee', 899000, '14.png', 'Coming soon', 'ready'),
(14, 4, 'CDG Green Fleece Jacket', 1599000, '15.png', 'Coming Soon', 'ready'),
(15, 2, 'CDG White Shirt', 899000, '16.png', 'Coming Soon', 'ready'),
(16, 10, 'CDG School Backpack', 599000, '17.png', 'Coming Soon', 'ready'),
(17, 2, 'CDG Summer Shirt', 799000, '18.png', 'Coming Soon', 'ready'),
(18, 6, 'CDG Street Knitwear', 699000, '19.png', 'Coming Soon', 'ready');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$xhpabczbwFks7ZgfybCs.O20yws5qFq/1hChixzQdZ0f6UG4ytW9S');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `category_product` (`category_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `category_product` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
