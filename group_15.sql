-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018 年 06 月 18 日 17:12
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
('member', 'member123456', 'ncue@gmail.com', '國立彰化師範大學', 0, 0),
('test', 'test123456', 'test@test', '5', 1, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `comment`
--

CREATE TABLE `comment` (
  `no` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `account` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=big5;

--
-- 資料表的匯出資料 `comment`
--

INSERT INTO `comment` (`no`, `productID`, `account`, `content`, `time`) VALUES
(1, 34, '34', '344', '2018-06-17 00:00:00'),
(2, 0, 'admin', 'jier', '2018-06-18 00:17:53'),
(3, 0, 'admin', 'fe', '2018-06-18 00:22:32'),
(4, 0, 'admin', 'fwq', '2018-06-18 00:46:14'),
(5, 0, 'admin', 'fefe', '2018-06-18 00:48:20'),
(6, 1, 'admin', 'fff', '2018-06-18 22:05:13');

-- --------------------------------------------------------

--
-- 資料表結構 `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=big5;

--
-- 資料表的匯出資料 `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `message`) VALUES
(1, '123', '456', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(2, 'f', 'e', 'g'),
(13, '6666', '555555555', '4444444');

-- --------------------------------------------------------

--
-- 資料表結構 `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `account` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` int(10) NOT NULL,
  `num` int(10) NOT NULL,
  `productID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=big5;

--
-- 資料表的匯出資料 `orders`
--

INSERT INTO `orders` (`id`, `account`, `name`, `price`, `num`, `productID`) VALUES
(1, 'test', '56', 3, 3, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `category` int(11) NOT NULL,
  `image_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=big5;

--
-- 資料表的匯出資料 `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `category`, `image_name`) VALUES
(1, '桑椹乳酪蛋糕', 520, '#桑椹漿果\r\n香味低調卻擁有令人齒頰生津的自然果酸\r\n#澳洲頂級乳酪\r\n純粹的大地乳香，天然的乳酪鹹與甜在口中釋放\r\n\r\n#成分\r\n100%凝脂乳酪、蛋、糖、蜂蜜、桑椹漿果', 0, '10.jpg'),
(3, '芝麻桂圓乳酪蛋糕', 880, '新鮮黑芝麻顛覆傳統高溫翻炒方式\r\n\r\n使用低溫焙炒後研磨\r\n\r\n因此製出的芝麻龍眼乳酪蛋糕\r\n\r\n吃了不燥熱上火，口感更加溫順', 0, '16.jpg'),
(4, '朱古力圓舞曲乳酪蛋糕', 580, '#舌尖上的優雅舞曲\r\n#香濃巧克力碎餅:\r\n撒於乳酪蛋糕頂端，讓喜愛可可得您，一次享用綿密與完美融合的盛宴\r\n#黑巧克力乳酪\r\n絲綢般柔滑的溫潤質地，融入自然熟成的乳酪蛋糕，仿若一支華麗的圓舞曲。\r\n\r\n', 0, '17.jpg'),
(5, '密韻青檸乳酪蛋糕', 480, '#鬱悶情緒的治療師\r\n#青檸乳酪 : 果汁拌入乳酪中，勾勒出微妙的酸度，提拉出重乳酪的鹹香\r\n#溫潤蜂蜜 : 與香檸契合的蜂蜜，酸甜交錯，讓你一再上癮的輕盈滋味', 0, '18.jpg'),
(6, '楓糖蔓越莓乳酪蛋糕', 480, '#把驚喜權留給味蕾\r\n#加拿大純淨楓糖漿 : 天然楓糖與蔓越莓交融，滑順柔軟的甜蜜香氣，會是你嚮往體會的舌尖記憶。\r\n#蔓越莓果乾 : 果酸與乳酪的酸相映成趣，灌注蛋糕甜美卻帶點頑皮個性。\r\n', 0, '19.jpg'),
(7, '靜岡熔岩抹茶布朗尼', 520, '#春末限定夢幻逸品\r\n#熔岩抹茶巧克力 : 慢火熬煮巧克力，與靜岡抹茶結合成熔岩抹茶巧克力，茶韻深厚而更加濃郁\r\n#苦甜抹茶布朗尼 : 口感濃厚而綿密，像是長了一口冰淇淋，入口即化', 0, '20.jpg'),
(8, 'OREO 千層', 690, '#嚴選經典OREO餅乾 : 不用轉一轉，舔一舔，再抱一抱牛奶，就可以吃到OREO的美味\r\n#經典的多層次口感 : 微苦微甜、你儂我儂的甜蜜幸福，擄獲各個年齡層芳心。', 0, '21.jpg'),
(9, '草莓甜心千層', 690, '#手工特製蜜漬草莓 : 繁複工法，溫順的帶出台灣草莓獨有的甜蜜香氣。\r\n#甜蜜心坎的味覺饗宴 : 每一口都是草莓的香氣，瀰漫在口中。單純而甜入心的味覺饗宴。', 0, '22.jpg'),
(10, '貝里斯牛奶千層', 660, '#貝里斯香甜奶香 : 來自鮮奶油及威士忌的完美結合，造就獨樹一幟的香甜氣息，濃郁口感充滿著微醺的迷人風味\r\n#愛爾蘭的香甜氣息 : 濃郁奶香充滿著微醺的迷人風味。奶酒的香甜，金黃焦香的岩燒蛋皮，以及奶香味足的鮮奶油，簡單元素傳遞一國香氣的幸福。\r\n', 0, '23.jpg'),
(11, '英式伯爵千層', 660, '#嚴選皇家伯爵茶 : 甘美茶香在口中綻放，地中海風味的佛手柑芬芳，提供極致品質絕佳口感。\r\n#伯爵茶的清爽口感 : 濃郁茶香充滿皇室般的極致享受，加上鮮奶油，混合成一股淡淡奶茶風味，傳遞貴族皇室得幸福。', 0, '24.jpg'),
(12, '太妃焦糖千層', 660, '#特製手工焦糖醬 : 甜而不膩，絲綢滑順的口感，加上天然奶油，讓平凡的味道中，有著療癒的迷人魔力。\r\n#層層濃郁甜蜜，每一口都充滿焦糖香氣。焦糖醬與奶霜混合，特殊香氣衝擊著味蕾，淺嚐一口療癒人心。', 0, '25.jpg'),
(13, '髒髒泡芙', 70, '酥脆外皮淋上濃郁黑巧克力、豪氣灑上可可香、讓您又髒又難忘\r\n\r\n♥成份說明:巧克力、可可粉、砂糖、鮮奶油、奶油、麵粉、蛋、鮮奶\r\n                   \r\n♥保存期限:室溫2H冷藏2天冷凍5天\r\n♥冷藏食用:冰涼滑順好滋味', 1, '1.jpg'),
(14, '芋頭麻糬泡芙', 70, '新開發軟綿外皮搭配Q彈麻糬，還有香濃自製內餡，嚴選食材產地直送，吃得到新鮮芋頭顆粒，讓您品嘗台灣在地食材美味\r\n\r\n♥成份說明:大甲芋頭、砂糖、鮮奶油、奶油、麵粉、蛋、鮮奶\r\n                   \r\n♥保存期限:室溫2H冷藏2天冷凍5天\r\n♥冷藏食用:冰涼滑順好滋味\r\n\r\n♥成份說明:巧克力、可可粉、砂糖、鮮奶油、奶油、麵粉、蛋、鮮奶\r\n                   \r\n♥保存期限:室溫2H冷藏2天冷凍5天\r\n♥冷藏食用:冰涼滑順好滋味', 1, '2.jpg'),
(15, '抹茶泡芙', 55, '簡單、搭配清爽才能突顯抹茶香味\r\n\r\n♥成份說明:抹茶、砂糖、新鮮雞蛋、鮮奶、麵粉、安佳奶油、總統牌鮮奶油\r\n                   玉米澱粉、日本寒天粉、蛋白霜外皮\r\n♥保存期限:室溫2H冷藏2天冷凍5天\r\n♥冷藏食用:冰涼滑順好滋味\r\n♥冷凍食用:冰淇淋好口感', 1, '3.jpg'),
(16, '生牛奶糖泡芙', 55, '糖與鮮奶裹著蜂蜜在銅鍋裡漫舞，用時間慢慢蘊藏彼此芳香氣味，編織出一首美麗舞曲!\r\n\r\n♥成份說明:蜂蜜、砂糖、新鮮雞蛋、鮮奶、麵粉、安佳奶油、總統牌鮮奶油\r\n                   玉米澱粉、日本寒天粉、蛋白霜外皮\r\n♥保存期限:室溫2H冷藏2天冷凍5天\r\n♥冷藏食用:冰涼滑順好滋味\r\n♥冷凍食用:冰淇淋好口感', 1, '4.jpg'),
(17, '焦糖起司泡芙', 75, '白色魔法起司，在你的口哩，不停的嘎吱，嘎吱的舞動\r\n\r\n♥成份說明:起司、焦糖、蜜核桃、砂糖、新鮮雞蛋、鮮奶、麵粉、安佳奶油、總統牌鮮奶油\r\n                   玉米澱粉\r\n♥保存期限:室溫2H冷藏2天冷凍5天\r\n♥冷藏食用:冰涼滑順好滋味\r\n♥冷凍食用:冰淇淋好口感', 1, '5.jpg'),
(18, '焦糖杏仁泡芙', 80, '乳白色的脆杏片，穿上金色的蜜糖衣，閃閃的甜香，誘你口\r\n\r\n♥成份說明:焦糖、杏仁片、砂糖、新鮮雞蛋、鮮奶、麵粉、安佳奶油、總統牌鮮奶油\r\n                   玉米澱粉、日本寒天粉、加州核桃\r\n♥保存期限:室溫2H冷藏2天冷凍5天\r\n♥冷藏食用:冰涼滑順好滋味\r\n♥冷凍食用:冰淇淋好口感', 1, '6.jpg'),
(19, '黑森林金字塔泡芙', 80, '巧克力豆的香脆，綿密的蛋糕，吸引你的每一感官\r\n\r\n♥成份說明:比利時巧克力、巧克力豆、砂糖、新鮮雞蛋、鮮奶、麵粉、安佳奶油、總統牌鮮奶油\r\n                   玉米澱粉、日本寒天粉\r\n♥保存期限:室溫2H冷藏2天冷凍5天\r\n♥冷藏食用:冰涼滑順好滋味\r\n♥冷凍食用:冰淇淋好口感', 1, '7.jpg'),
(20, '提拉米蘇泡芙', 55, '有著義大利人的熱情，綿密乳香，入口即溶\r\n\r\n♥成份說明:起司、砂糖、新鮮雞蛋、鮮奶、麵粉、安佳奶油、總統牌鮮奶油\r\n                   玉米澱粉、加州核桃\r\n♥保存期限:室溫2H冷藏2天冷凍5天\r\n♥冷藏食用:冰涼滑順好滋味\r\n♥冷凍食用:冰淇淋好口感', 1, '8.jpg'),
(21, '杏仁瓦片', 55, '甜而不膩的口感，純手工的鬆軟，超厚實的奶香，讓人印象深刻，是永遠不敗的甜心魅力！', 2, '26.jpg'),
(22, '南瓜子瓦片', 55, '每一片都是滿滿的南瓜子，用低溫烘烤至金黃色澤，輕、薄、脆的滋味，手作的用心吃的到！', 2, '27.jpg'),
(23, '杏仁千層酥', 55, '超人氣的杏仁千層酥，濃到化不開杏仁香氛，層層交疊的口感，讓您忍不住泡杯咖啡來場下午茶約會吧！', 2, '28.jpg');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account`);

--
-- 資料表索引 `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`no`);

--
-- 資料表索引 `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

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
-- 使用資料表 AUTO_INCREMENT `comment`
--
ALTER TABLE `comment`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表 AUTO_INCREMENT `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用資料表 AUTO_INCREMENT `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表 AUTO_INCREMENT `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
