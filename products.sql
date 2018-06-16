-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018 年 06 月 16 日 13:25
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
(5, '密韻青檸乳酪蛋糕', 480, '#鬱悶情緒的治療師\r\n#青檸乳酪 : 果汁拌入乳酪中，勾勒出微妙的酸度，提拉出重乳酪的鹹香\r\n#溫潤蜂蜜 : 與香檸契合的蜂蜜，酸甜交錯，讓你一再上癮的輕盈滋味', '18.jpg'),
(6, '楓糖蔓越莓乳酪蛋糕', 480, '#把驚喜權留給味蕾\r\n#加拿大純淨楓糖漿 : 天然楓糖與蔓越莓交融，滑順柔軟的甜蜜香氣，會是你嚮往體會的舌尖記憶。\r\n#蔓越莓果乾 : 果酸與乳酪的酸相映成趣，灌注蛋糕甜美卻帶點頑皮個性。\r\n', '19.jpg'),
(7, '靜岡熔岩抹茶布朗尼', 520, '#春末限定夢幻逸品\r\n#熔岩抹茶巧克力 : 慢火熬煮巧克力，與靜岡抹茶結合成熔岩抹茶巧克力，茶韻深厚而更加濃郁\r\n#苦甜抹茶布朗尼 : 口感濃厚而綿密，像是長了一口冰淇淋，入口即化', '20.jpg'),
(8, 'OREO 千層', 690, '#嚴選經典OREO餅乾 : 不用轉一轉，舔一舔，再抱一抱牛奶，就可以吃到OREO的美味\r\n#經典的多層次口感 : 微苦微甜、你儂我儂的甜蜜幸福，擄獲各個年齡層芳心。', '21.jpg'),
(9, '草莓甜心千層', 690, '#手工特製蜜漬草莓 : 繁複工法，溫順的帶出台灣草莓獨有的甜蜜香氣。\r\n#甜蜜心坎的味覺饗宴 : 每一口都是草莓的香氣，瀰漫在口中。單純而甜入心的味覺饗宴。', '22.jpg'),
(10, '貝里斯牛奶千層', 660, '#貝里斯香甜奶香 : 來自鮮奶油及威士忌的完美結合，造就獨樹一幟的香甜氣息，濃郁口感充滿著微醺的迷人風味\r\n#愛爾蘭的香甜氣息 : 濃郁奶香充滿著微醺的迷人風味。奶酒的香甜，金黃焦香的岩燒蛋皮，以及奶香味足的鮮奶油，簡單元素傳遞一國香氣的幸福。\r\n', '23.jpg'),
(11, '英式伯爵千層', 660, '#嚴選皇家伯爵茶 : 甘美茶香在口中綻放，地中海風味的佛手柑芬芳，提供極致品質絕佳口感。\r\n#伯爵茶的清爽口感 : 濃郁茶香充滿皇室般的極致享受，加上鮮奶油，混合成一股淡淡奶茶風味，傳遞貴族皇室得幸福。', '24.jpg'),
(12, '太妃焦糖千層', 660, '#特製手工焦糖醬 : 甜而不膩，絲綢滑順的口感，加上天然奶油，讓平凡的味道中，有著療癒的迷人魔力。\r\n#層層濃郁甜蜜，每一口都充滿焦糖香氣。焦糖醬與奶霜混合，特殊香氣衝擊著味蕾，淺嚐一口療癒人心。', '25.jpg'),
(13, '黃豆卡士達星蕨餅', 120, '添加蕨粉所製成外皮，口感特殊、滑嫩Q軟，配上烘焙黃豆粉及香醇豆漿所製成的豆奶慕斯外餡，加上黑糖蜜內餡，濃蜜香甜。軟嫩外皮更裹上烘炒無糖黃豆粉，濃濃豆粉香氣撲鼻而來，每一口都令人回味無窮。', '26.jpg'),
(14, '和風抹茶星蕨餅', 120, '添加蕨粉所製成外皮，口感特殊、滑嫩Q軟，配上濃醇抹茶粉所製抹茶慕斯外餡與黑糖蜜內餡，濃郁的茶感帶有一絲絲黑糖的甜蜜。軟嫩外皮更裹上略帶苦味抹茶粉，茶香濃郁滿溢，清爽可口。', '27.jpg'),
(15, '抹茶紅豆布丁', 90, '濃郁芬芳的抹茶加入鮮奶油製作而成，一入口茶香撲鼻，拌以底部的台產紅豆泥，滑嫩順口，餘韻猶存。', '28.jpg'),
(16, '荷蘭風味小鬆餅', 150, '午茶新選項！ \r\n比利時原裝進口的荷蘭風味小鬆餅，最早可追溯至15世紀，當時只是家中的小點心，現在於荷蘭市集都可以看見它的身影，風味單純，充滿蛋香外更略帶鹹感，與發泡鮮奶油搭配甜而不膩，與一般pancake/waffle不同，更像是香港雞蛋仔與台灣傳統雞蛋糕的融合體。 \r\n每份有8顆，含一份鮮奶油與焦糖醬。', '29.jpg'),
(17, '焦糖海鹽可可塔', 150, '小批製作的濃焦糖醬搭配進口海鹽與法芙娜巧克力脆米，在生巧克力慕斯中夾入鬆軟海綿蛋糕，最後以巧克力鏡面與金粉裝飾，是近期星巴克最為精緻費工的限定甜點。', '30.jpg'),
(18, '甜柚香檸塔', 150, '特有風味的韓國柚子醬夾藏在檸檬卡士達與酥脆塔皮間，上層帶有檸檬香氣的慕斯中夾藏的香草蛋糕增添口感，兩種柑橘風味的水果與非洲產區的黑咖啡搭配更能感受到絕佳的風味與層次！', '31.jpg'),
(19, '檸檬塔', 150, '選用酸甜的檸檬調合奶油交織出清爽滑順的檸檬奶醬，搭配烘烤至香酥的塔皮與海綿蛋糕，相當受到星巴克顧客的喜愛與好評。', '32.jpg'),
(20, '焦香堅果餅', 100, '腰果、南瓜子、夏威夷豆、杏仁片等...各式堅果加上特製餅皮當襯底，手工焦糖更增添甜蜜風味 \r\n保存期限:二個月 \r\n保存條件:常溫陰涼處。 \r\n本產品為奶素', '33.jpg'),
(21, '夏威夷豆塔', 120, '精選美國夏威夷豆加上特製餅皮當襯底，搭配手工焦糖增添濃郁美味，一口咬下，香脆可口 \r\n保存期限:二個月 \r\n本產品為奶素', '34.jpg'),
(22, '鹽花堅果糖', 200, '150克±5%/罐，密封罐裝 \r\n保存期限:30日 \r\n保存條件:常溫陰涼處，為保持新鮮口感，請儘早食用完畢 \r\n本產品為奶素', '35.jpg'),
(23, '杏仁達克瓦滋', 100, '70克±5%/罐，密封罐包裝。 \r\n保存期限:60日 \r\n保存條件:常溫陰涼處，為保持新鮮口感，請儘早食用完畢。 \r\n本產品為奶蛋素\r\n', '36.jpg');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
