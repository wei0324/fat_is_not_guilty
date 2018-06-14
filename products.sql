-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018 年 06 月 14 日 16:26
-- 伺服器版本: 10.1.30-MariaDB
-- PHP 版本： 7.2.2

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
(1, '桑椹乳酪蛋糕', 520, '#桑椹漿果\r\n香味低調卻擁有令人齒頰生津的自然果酸\r\n#澳洲頂級乳酪\r\n純粹的大地乳香，天然的乳酪鹹與甜在口中釋放\r\n\r\n#成分\r\n100%凝脂乳酪、蛋、糖、蜂蜜、桑椹漿果', '10.jpg'),
(2, '不可錯過的雙重滿足(原味&藍莓)', 920, '#澳洲頂級乳酪\r\n純粹的大地乳香，天然的乳酪鹹與甜在口中釋放\r\n#藍莓漿果\r\n溫火淬鍊出的藍莓漿果，更多的濕潤與甜香，為重乳酪帶來一抹清香\r\n\r\n#成分\r\n純粹原味乳酪蛋糕成分:100%凝脂乳酪、蛋、糖\r\n\r\n北國藍莓乳酪蛋糕成分:100%凝脂乳酪、蛋、糖、藍莓漿果', '15.jpg'),
(3, '芝麻桂圓乳酪蛋糕', 880, '新鮮黑芝麻顛覆傳統高溫翻炒方式\r\n\r\n使用低溫焙炒後研磨\r\n\r\n因此製出的芝麻龍眼乳酪蛋糕\r\n\r\n吃了不燥熱上火，口感更加溫順', '16.jpg'),
(4, '朱古力圓舞曲乳酪蛋糕', 580, '#舌尖上的優雅舞曲\r\n#香濃巧克力碎餅:\r\n撒於乳酪蛋糕頂端，讓喜愛可可得您，一次享用綿密與完美融合的盛宴\r\n#黑巧克力乳酪\r\n絲綢般柔滑的溫潤質地，融入自然熟成的乳酪蛋糕，仿若一支華麗的圓舞曲。\r\n\r\n', '17.jpg'),
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
-- 資料表索引 `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
