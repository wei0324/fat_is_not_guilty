-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018 年 06 月 05 日 07:42
-- 伺服器版本: 10.1.31-MariaDB
-- PHP 版本： 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `group_15`
--
CREATE DATABASE IF NOT EXISTS `group_15` DEFAULT CHARACTER SET big5 COLLATE big5_chinese_ci;
USE `group_15`;

-- --------------------------------------------------------

--
-- 資料表結構 `account`
--

CREATE TABLE `account` (
  `account` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(12) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `info` tinyint(1) NOT NULL,
  `authority` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=big5;

--
-- 資料表的匯出資料 `account`
--

INSERT INTO `account` (`account`, `password`, `email`, `address`, `info`, `authority`) VALUES
('admin', 'admin123456', 'admin@admin', 'admin', 0, 1),
('member', 'member123456', 'ncue@gmail.com', '國立彰化師範大學', 0, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `account` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=big5;

-- --------------------------------------------------------

--
-- 資料表結構 `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=big5;

--
-- 資料表的匯出資料 `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `image_name`) VALUES
(1, 'food1', 100, '要一個對於食物只有分為能吃和不能吃的人，想出什麼精美的文案，實在太為難人了。', '1.jpg'),
(2, 'food2', 200, '要一個對於食物只有分為能吃和不能吃的人，想出什麼精美的文案，實在太為難人了。', '2.jpg'),
(3, 'food3', 300, '要一個對於食物只有分為能吃和不能吃的人，想出什麼精美的文案，實在太為難人了。', '3.jpg'),
(4, 'food4', 400, '要一個對於食物只有分為能吃和不能吃的人，想出什麼精美的文案，實在太為難人了。', '4.jpg'),
(5, 'food5', 500, '要一個對於食物只有分為能吃和不能吃的人，想出什麼精美的文案，實在太為難人了。', '5.jpg'),
(6, 'food6', 600, '要一個對於食物只有分為能吃和不能吃的人，想出什麼精美的文案，實在太為難人了。', '6.jpg'),
(7, 'food7', 700, '要一個對於食物只有分為能吃和不能吃的人，想出什麼精美的文案，實在太為難人了。', '7.jpg'),
(8, 'food8', 800, '要一個對於食物只有分為能吃和不能吃的人，想出什麼精美的文案，實在太為難人了。', '8.jpg'),
(9, 'food9', 900, '要一個對於食物只有分為能吃和不能吃的人，想出什麼精美的文案，實在太為難人了。', '9.jpg'),
(10, 'food10', 1000, '要一個對於食物只有分為能吃和不能吃的人，想出什麼精美的文案，實在太為難人了。', '10.jpg'),
(11, 'food11', 1100, '要一個對於食物只有分為能吃和不能吃的人，想出什麼精美的文案，實在太為難人了。', '11.jpg'),
(12, 'food12', 1200, '要一個對於食物只有分為能吃和不能吃的人，想出什麼精美的文案，實在太為難人了。', '12.jpg');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account`);

--
-- 資料表索引 `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表 AUTO_INCREMENT `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
