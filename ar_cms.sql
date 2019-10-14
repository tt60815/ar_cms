-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 13, 2019 at 05:12 PM
-- Server version: 5.6.34
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ar_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_class_id` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_special_price` int(11) NOT NULL,
  `product_sequence` int(11) NOT NULL,
  `product_description` varchar(500) NOT NULL,
  `product_content` longtext NOT NULL,
  `product_is_use` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_class_id`, `product_price`, `product_special_price`, `product_sequence`, `product_description`, `product_content`, `product_is_use`) VALUES
(1, '肌肉芭樂', 1, 1000, 6005, 1, '肌肉芭樂簡述RRR', '                                                 \r\n                                                                                                  \r\n                                                                                                  \r\n                                                 <div class=\"center-block panel panel-default\">\r\n\r\n<div class=\"panel-body\">\r\n<h2 style=\"text-align: center; \">熊兒企業 樣板</h2>\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.<span style=\"font-family: Calibri, Arial, \" ibm=\"\" plex=\"\" sans\",=\"\" \"microsoft=\"\" jhenghei\",=\"\" sans-seri;\"=\"\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</span></p><div><span style=\"font-family: Calibri, Arial, \" ibm=\"\" plex=\"\" sans\",=\"\" \"microsoft=\"\" jhenghei\",=\"\" sans-seri;\"=\"\"><br></span></div>\r\n</div>\r\n\r\n\r\n<div class=\"panel-body\"><img src=\"https://source.unsplash.com/random/1200x800\" style=\"width: 100%;\"></div><div class=\"panel-body\"><br></div><div class=\"panel-body\"><br></div>\r\n\r\n\r\n<div class=\"panel-body\">\r\n<div class=\"col-md-6\">\r\n<h3>Heading</h3>\r\n\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n</div>\r\n\r\n<div class=\"col-md-6\">\r\n<h3>Heading</h3>\r\n\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"panel-body\">\r\n<div class=\"col-md-6\">\r\n<h3>Heading</h3>\r\n\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n</div>\r\n\r\n<div class=\"col-md-6\">\r\n<h3>Heading</h3>\r\n\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p><p><br></p><p><br></p>\r\n</div>\r\n</div>\r\n\r\n\r\n\r\n<div class=\"panel-body\">\r\n<img class=\"img-responsive note-float-right\" src=\"https://source.unsplash.com/random/600x400\" style=\"float: right;\">\r\n\r\n\r\n<h3>. Bootstrap Blocks .</h3>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.<span style=\"font-family:Calibri,Arial,\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</span><span style=\"font-family:Calibri,Arial,\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</span><span style=\"font-family:Calibri,Arial,\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</span><span style=\"font-family:Calibri,Arial,\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</span></p><p><span style=\"font-family:Calibri,Arial,\"><br></span></p><p><span style=\"font-family:Calibri,Arial,\"><br></span></p><p><span style=\"font-family:Calibri,Arial,\"><br></span></p>\r\n</div>\r\n\r\n\r\n<div class=\"panel-body\">\r\n<div class=\"col-md-4\">\r\n<h3>Heading</h3>\r\n\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<h3>Heading</h3>\r\n\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<h3>Heading</h3>\r\n\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p><p><br></p><p><br></p>\r\n</div>\r\n</div>\r\n\r\n \r\n\r\n\r\n<div class=\"panel-body\">\r\n<img class=\"img-responsive note-float-left\" src=\"https://source.unsplash.com/random/600x400\" style=\"float: left;\">\r\n\r\n\r\n<h3>. Bootstrap Blocks .</h3>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.<span style=\"font-family:Calibri,Arial,\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</span><span style=\"font-family:Calibri,Arial,\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</span><span style=\"font-family:Calibri,Arial,\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</span><span style=\"font-family:Calibri,Arial,\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</span></p><p><span style=\"font-family:Calibri,Arial,\"><br></span></p><p><br></p>\r\n</div>\r\n<br>\r\n<div class=\"panel-body\">\r\n<img class=\"img-responsive note-float-left\" src=\"https://source.unsplash.com/random/600x400\" style=\"float: left;\">\r\n\r\n \r\n<h3>. Bootstrap Blocks .</h3>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.<span style=\"font-family:Calibri,Arial,\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</span><span style=\"font-family:Calibri,Arial,\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</span><span style=\"font-family:Calibri,Arial,\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</span><span style=\"font-family:Calibri,Arial,\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</span></p>\r\n</div>\r\n</div>\r\n                                                  \r\n                                                                                               \r\n                                                                                               \r\n                                                                                               \r\n                                                                                               \r\n                                             ', 1),
(4, '運動飲料', 1, 1000, 300, 6, '*大型\r\n*綠色\r\n*好吃', '<h1><img alt=\"Saturn V carrying Apollo 11\" class=\"right\" src=\"../../../app-assets/images/elements/01.png\" height=\"250\" style=\"float:right;\"> Apollo 11</h1>\r\n	<p><strong>Apollo 11</strong> was the spaceflight that landed the first humans, Americans <a href=\"http://en.wikipedia.org/wiki/Neil_Armstrong\">Neil Armstrong</a> and <a href=\"http://en.wikipedia.org/wiki/Buzz_Aldrin\">Buzz Aldrin</a>, on the Moon on July 20, 1969, at 20:18 UTC. Armstrong became the first to step onto the lunar surface 6 hours later on July 21 at 02:56 UTC.</p>\r\n	<p>Armstrong spent about <s>three and a half</s> two and a half hours outside the spacecraft, Aldrin slightly less; and together they collected 47.5 pounds (21.5&nbsp;kg) of lunar material for return to Earth. A third member of the mission, <a href=\"http://en.wikipedia.org/wiki/Michael_Collins_(astronaut)\">Michael Collins</a>, piloted the <a href=\"http://en.wikipedia.org/wiki/Apollo_Command/Service_Module\">command</a> spacecraft alone in lunar orbit until Armstrong and Aldrin returned to it for the trip back to Earth.</p>\r\n	<h2>Broadcasting and <em>quotes</em></h2>\r\n	<p>Broadcast on live TV to a world-wide audience, Armstrong stepped onto the lunar surface and described the event as:</p>\r\n	<blockquote>\r\n	<p>One small step for [a] man, one giant leap for mankind.</p>\r\n	</blockquote>\r\n\r\n	<p>Apollo 11 effectively ended the <a href=\"http://en.wikipedia.org/wiki/Space_Race\">Space Race</a> and fulfilled a national goal proposed in 1961 by the late U.S. President <a href=\"http://en.wikipedia.org/wiki/John_F._Kennedy\">John F. Kennedy</a> in a speech before the United States Congress:</p>\r\n\r\n	<blockquote>\r\n	<p>[...] before this decade is out, of landing a man on the Moon and returning him safely to the Earth.</p>\r\n	</blockquote>\r\n\r\n	<h2>Technical details</h2>\r\n\r\n	<p>Launched by a <strong>Saturn V</strong> rocket from <a href=\"http://en.wikipedia.org/wiki/Kennedy_Space_Center\">Kennedy Space Center</a> in Merritt Island, Florida on July 16, Apollo 11 was the fifth manned mission of <a href=\"http://en.wikipedia.org/wiki/NASA\">NASA</a>\'s Apollo program. The Apollo spacecraft had three parts:</p>\r\n\r\n	<ol>\r\n	<li><strong>Command Module</strong> with a cabin for the three astronauts which was the only part which landed back on Earth</li>\r\n	<li><strong>Service Module</strong> which supported the Command Module with propulsion, electrical power, oxygen and water</li>\r\n	<li><strong>Lunar Module</strong> for landing on the Moon.</li>\r\n	</ol>\r\n\r\n	<p>After being sent to the Moon by the Saturn V\'s upper stage, the astronauts separated the spacecraft from it and travelled for three days until they entered into lunar orbit. Armstrong and Aldrin then moved into the Lunar Module and landed in the <a href=\"http://en.wikipedia.org/wiki/Mare_Tranquillitatis\">Sea of Tranquility</a>. They stayed a total of about 21 and a half hours on the lunar surface. After lifting off in the upper part of the Lunar Module and rejoining Collins in the Command Module, they returned to Earth and landed in the <a href=\"http://en.wikipedia.org/wiki/Pacific_Ocean\">Pacific Ocean</a> on July 24.</p>\r\n\r\n	<hr>\r\n	<p><small>Source: <a href=\"http://en.wikipedia.org/wiki/Apollo_11\">Wikipedia.org</a></small></p>\r\n										', 1),
(5, '肌肉芭樂', 1, 1000, 123, 1, 'dfsg', '                                                 \r\n                                                 <div style=\"text-align: justify;\"><img src=\"http://localhost/upload/images/f7e6c85504ce6e82442c770f7c8606f0.jpg\" class=\"img-thumbnail note-float-left\" style=\"width: 49%; float: left;\"><span style=\"font-family: Calibri, Arial, \" ibm=\"\" plex=\"\" sans\",=\"\" \"microsoft=\"\" jhenghei\",=\"\" sans-seri;\"=\"\">\r\n</span><img src=\"http://localhost/upload/images/140f6969d5213fd0ece03148e62e461e.jpg\" class=\"img-thumbnail note-float-right\" style=\"width: 49%; float: right;\"></div>                                                  \r\n                                             ', 0),
(6, 'xbcvngndfg', 1, 123, 512, 5435, 'dfshsdgh', 'dj', 0),
(7, 'dfsdfhsdfh', 1, 14, 46, 1, 'dj', 'hgfh', 1),
(8, '爆音及聯', 2, 231, 2, 45, '*耐操\r\n*好用\r\n*很大', '                                                 \r\n                                                                                                  \r\n                                                                                                  \r\n                                                 <p><img src=\"http://localhost/upload/images/1d7f7abc18fcb43975065399b0d1e48e.jpg\" style=\"width: 25%;\"><img src=\"http://localhost/upload/images/a2557a7b2e94197ff767970b67041697.jpg\"><img src=\"http://localhost/upload/images/38af86134b65d0f10fe33d30dd76442e.jpg\" style=\"width: 25%;\"><img src=\"http://localhost/upload/images/013d407166ec4fa56eb1e1f8cbe183b9.jpg\" style=\"width: 25%;\"><br></p>                                                  \r\n                                                                                               \r\n                                                                                               \r\n                                             ', 1),
(9, '', 0, 0, 0, 0, '', '', 0),
(10, 'sdfghsdfh', 1, 231, 2312, 124, 'dasg', 'asdgasdg', 1),
(11, 'agsfha', 2, 124, 55, 21612346, 'sgf', 'sdfhsdfh', 1),
(12, 'asdfgasdfh', 1, 42, 11235, 15, 'dfg', '                                                 \r\n                                                                                                  \r\n                                                                                                  \r\n                                                                                                  \r\n                                                 <p>                                                 \r\n                                                 sdfh<img src=\"http://localhost/upload/images/fa7cdfad1a5aaf8370ebeda47a1ff1c3.jpg\"><img src=\"http://localhost/upload/images/58a2fc6ed39fd083f55d4182bf88826d.jpg\"><img src=\"http://localhost/upload/images/202cb962ac59075b964b07152d234b70.jpg\"><img src=\"http://localhost/upload/images/698d51a19d8a121ce581499d7b701668.jpg\">                                                  \r\n                                             </p>                                                  \r\n                                                                                               \r\n                                                                                               \r\n                                                                                               \r\n                                             ', 1),
(13, '', 0, 0, 0, 0, '', '', 0),
(14, '', 0, 0, 0, 0, '', '', 0),
(15, '', 0, 0, 0, 0, '', '', 0),
(16, '', 0, 0, 0, 0, '', '', 0),
(17, '', 0, 0, 0, 0, '', '', 0),
(18, 'sgsdh', 1, 12, 4, 15, 'sdfhsd', '                                                 \r\n                                                                                                  \r\n                                                                                                  \r\n                                                                                                  \r\n                                                                                                  \r\n                                                                                                  \r\n                                                                                                  \r\n                                                                                                  \r\n                                                                                                  \r\n                                                                                                  \r\n                                                 fhsdfhFFF                                                  \r\n                                             ', 1),
(19, '米田共', 1, 600, 200, 5, '●100%高純度分離乳清蛋白：每份含有蛋白質 25 克、BCAAs 5.7 克\r\n●完全不含碳水化合物、脂肪及糖、未添加香料、色素及甜味劑，適合與其他運動產品或飲品一起沖泡\r\n●無乳糖麩質，適合乳糖及麩質耐受不良者', '                                                 \r\n                                                                                                  \r\n                                                 <p style=\"padding: 0.5rem; margin: auto; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); max-width: 800px; font-size: 16.8px; color: rgb(70, 76, 81); font-family: \"Noto Sans TC\", \"Microsoft JhengHei\", Helvetica, sans-serif;\"><img src=\"https://imgur.com/iFCZq80.jpg\" width=\"650\" height=\"650\" style=\"padding: 0px; margin: auto; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); max-width: 800px; height: auto; width: 786px;\"><img src=\"https://imgur.com/S3evFsu.jpg\" width=\"650\" height=\"650\" style=\"padding: 0px; margin: auto; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); max-width: 800px; height: auto; width: 786px;\"><br style=\"padding: 0px; margin: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"><br style=\"padding: 0px; margin: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"></p><p style=\"padding: 0.5rem; margin: auto; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); max-width: 800px; font-size: 16.8px; color: rgb(70, 76, 81); font-family: \"Noto Sans TC\", \"Microsoft JhengHei\", Helvetica, sans-serif;\">100%高純度分離乳清蛋白：</p><p style=\"padding: 0.5rem; margin: auto; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); max-width: 800px; font-size: 16.8px; color: rgb(70, 76, 81); font-family: \"Noto Sans TC\", \"Microsoft JhengHei\", Helvetica, sans-serif;\">每份含有蛋白質 25 克、BCAAs 5.7 克</p><p style=\"padding: 0.5rem; margin: auto; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); max-width: 800px; font-size: 16.8px; color: rgb(70, 76, 81); font-family: \"Noto Sans TC\", \"Microsoft JhengHei\", Helvetica, sans-serif;\">完全不含碳水化合物、脂肪及糖</p><p style=\"padding: 0.5rem; margin: auto; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); max-width: 800px; font-size: 16.8px; color: rgb(70, 76, 81); font-family: \"Noto Sans TC\", \"Microsoft JhengHei\", Helvetica, sans-serif;\">未添加香料、色素及甜味劑，適合與其他運動產品或飲品一起沖泡</p><p style=\"padding: 0.5rem; margin: auto; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); max-width: 800px; font-size: 16.8px; color: rgb(70, 76, 81); font-family: \"Noto Sans TC\", \"Microsoft JhengHei\", Helvetica, sans-serif;\">無乳糖、麩質，適合乳糖及麩質耐受不良者</p><p style=\"padding: 0.5rem; margin: auto; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); max-width: 800px; font-size: 16.8px; color: rgb(70, 76, 81); font-family: \"Noto Sans TC\", \"Microsoft JhengHei\", Helvetica, sans-serif;\"></p><p style=\"padding: 0.5rem; margin: auto; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); max-width: 800px; font-size: 16.8px; color: rgb(70, 76, 81); font-family: \"Noto Sans TC\", \"Microsoft JhengHei\", Helvetica, sans-serif;\">食用方式:</p><p style=\"padding: 0.5rem; margin: auto; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); max-width: 800px; font-size: 16.8px; color: rgb(70, 76, 81); font-family: \"Noto Sans TC\", \"Microsoft JhengHei\", Helvetica, sans-serif;\"><span style=\"padding: 0px; margin: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">取本品 1 匙(約 29 克)，加入 180-240 毫升您喜愛的飲品，攪拌均勻後飲用。每日 1 次，多食無益。</span></p>                                                  \r\n                                                                                               \r\n                                                                                               \r\n                                                                                               \r\n                                             ', 1),
(20, '爽新增', 2, 900, 900, 65, '測試', '                                                 \r\n                                                                                                  \r\n                                                                                                  <div class=\"center-block panel panel-default\">\r\n\r\n<div class=\"panel-body\">\r\n<h2 style=\"text-align: center; \">熊兒企業 樣板</h2>\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.<span style=\"font-family: Calibri, Arial, \" ibm=\"\" plex=\"\" sans\",=\"\" \"microsoft=\"\" jhenghei\",=\"\" sans-seri;\"=\"\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</span></p><div><span style=\"font-family: Calibri, Arial, \" ibm=\"\" plex=\"\" sans\",=\"\" \"microsoft=\"\" jhenghei\",=\"\" sans-seri;\"=\"\"><br></span></div>\r\n</div>\r\n\r\n\r\n<div class=\"panel-body\"><img src=\"http://localhost/upload/images/da4fb5c6e93e74d3df8527599fa62642.jpg\" style=\"width: 100%;\"><br></div><div class=\"panel-body\"><br></div><div class=\"panel-body\"><br></div>\r\n\r\n\r\n<div class=\"panel-body\">\r\n<div class=\"col-md-6\">\r\n<h3>Heading</h3>\r\n\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n</div>\r\n\r\n<div class=\"col-md-6\">\r\n<h3>Heading</h3>\r\n\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"panel-body\">\r\n<div class=\"col-md-6\">\r\n<h3>Heading</h3>\r\n\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n</div>\r\n\r\n<div class=\"col-md-6\">\r\n<h3>Heading</h3>\r\n\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p><p><br></p><p><br></p>\r\n</div>\r\n</div>\r\n\r\n\r\n\r\n<div class=\"panel-body\">\r\n<img src=\"http://localhost/upload/images/202cb962ac59075b964b07152d234b70.jpg\" style=\"float: right; width: 50%;\" class=\"note-float-right\"><br>\r\n\r\n\r\n<h3>. Bootstrap Blocks .</h3>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.<span style=\"font-family:Calibri,Arial,\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</span><span style=\"font-family:Calibri,Arial,\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</span><span style=\"font-family:Calibri,Arial,\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</span><span style=\"font-family:Calibri,Arial,\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</span></p><p><span style=\"font-family:Calibri,Arial,\"><br></span></p><p><span style=\"font-family:Calibri,Arial,\"><br></span></p><p><span style=\"font-family:Calibri,Arial,\"><br></span></p>\r\n</div>\r\n\r\n\r\n<div class=\"panel-body\">\r\n<div class=\"col-md-4\">\r\n<h3>Heading</h3>\r\n\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<h3>Heading</h3>\r\n\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<h3>Heading</h3>\r\n\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p><p><br></p><p><br></p>\r\n</div>\r\n</div>\r\n\r\n \r\n\r\n\r\n<div class=\"panel-body\">\r\n<img src=\"http://localhost/upload/images/e00da03b685a0dd18fb6a08af0923de0.jpg\" style=\"float: left; width: 50%;\" class=\"note-float-left\"><br>\r\n\r\n\r\n<h3>. Bootstrap Blocks .</h3>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.<span style=\"font-family:Calibri,Arial,\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</span><span style=\"font-family:Calibri,Arial,\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</span><span style=\"font-family:Calibri,Arial,\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</span><span style=\"font-family:Calibri,Arial,\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</span></p><p><span style=\"font-family:Calibri,Arial,\"><br></span></p><p><br></p>\r\n</div>\r\n<br>\r\n<div class=\"panel-body\">\r\n<img src=\"http://localhost/upload/images/2b24d495052a8ce66358eb576b8912c8.jpg\" style=\"float: right; width: 50%;\" class=\"note-float-right\"><br>\r\n\r\n \r\n<h3>. Bootstrap Blocks .</h3>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.<span style=\"font-family:Calibri,Arial,\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</span><span style=\"font-family:Calibri,Arial,\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</span><span style=\"font-family:Calibri,Arial,\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</span><span style=\"font-family:Calibri,Arial,\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</span></p>\r\n</div>\r\n</div>\r\n                                                  \r\n                                                                                               \r\n                                                                                               \r\n                                                                                               \r\n                                                                                               \r\n                                                                                               \r\n                                                                                              \r\n                                                                                               \r\n                                                                                               \r\n                                             ', 1),
(21, 'dgjdfgj', 1, 34, 135, 135, 'ertwert', 'asfafs', 1),
(22, '乾洗髮', 1, 1000, 65, 5, '*好用\r\n*好吃\r\n*好玩', '                                                 \r\n                                                                                                  \r\n                                                 <p>                                                 \r\n                                                                                                  \r\n                                                 </p><p><img src=\"http://localhost/upload/images/31fefc0e570cb3860f2a6d4b38c6490d.png\" style=\"width: 100%;\"><img src=\"http://localhost/upload/images/069059b7ef840f0c74a814ec9237b6ec.png\" style=\"\"><img src=\"Ooops!  Your upload triggered the following error:  1\"><img src=\"http://localhost/upload/images/38b3eff8baf56627478ec76a704e9b52.jpg\" style=\"width: 100%;\"><img src=\"http://localhost/upload/images/7e7757b1e12abcb736ab9a754ffb617a.jpg\" style=\"width: 100%;\"><img src=\"http://localhost/upload/images/65ded5353c5ee48d0b7d48c591b8f430.jpg\" style=\"width: 100%;\"><img src=\"http://localhost/upload/images/069059b7ef840f0c74a814ec9237b6ec.jpg\" style=\"width: 100%;\"><img src=\"http://localhost/upload/images/a4a042cf4fd6bfb47701cbc8a1653ada.jpg\" style=\"width: 100%;\"><img src=\"http://localhost/upload/images/bd4c9ab730f5513206b999ec0d90d1fb.jpg\" style=\"\"><img src=\"http://localhost/upload/images/f899139df5e1059396431415e770c6dd.jpg\" style=\"\"><img src=\"http://localhost/upload/images/3636638817772e42b59d74cff571fbb3.jpg\" style=\"\"><img src=\"http://localhost/upload/images/1385974ed5904a438616ff7bdb3f7439.jpg\" style=\"width: 100%;\"><img src=\"http://localhost/upload/images/7f6ffaa6bb0b408017b62254211691b5.jpg\" style=\"width: 100%;\"><img src=\"http://localhost/upload/images/58a2fc6ed39fd083f55d4182bf88826d.jpg\"><img src=\"http://localhost/upload/images/4c56ff4ce4aaf9573aa5dff913df997a.jpg\" style=\"width: 100%;\"><img src=\"http://localhost/upload/images/9fc3d7152ba9336a670e36d0ed79bc43.jpg\" style=\"width: 100%;\"><img src=\"http://localhost/upload/images/2b44928ae11fb9384c4cf38708677c48.jpg\" style=\"width: 100%;\"><img src=\"http://localhost/upload/images/a597e50502f5ff68e3e25b9114205d4a.jpg\" style=\"width: 100%;\"><img src=\"http://localhost/upload/images/58a2fc6ed39fd083f55d4182bf88826d.gif\" style=\"width: 100%;\"><img src=\"http://localhost/upload/images/a2557a7b2e94197ff767970b67041697.jpg\" style=\"width: 100%;\"><img src=\"http://localhost/upload/images/e00da03b685a0dd18fb6a08af0923de0.jpg\" style=\"width: 100%;\"></p>                                                  \r\n                                                                                               \r\n                                             <p></p>                                                  \r\n                                                                                               \r\n                                             ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_class`
--

CREATE TABLE `product_class` (
  `product_class_id` int(11) NOT NULL,
  `product_class_name` varchar(100) NOT NULL,
  `product_class_description` text NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_class`
--

INSERT INTO `product_class` (`product_class_id`, `product_class_name`, `product_class_description`, `pic`) VALUES
(1, '運動塑身', '來運動喔', ''),
(2, '音樂系列', '音樂唱歌什麼的', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_tag`
--

CREATE TABLE `product_tag` (
  `product_tag_id` int(11) NOT NULL,
  `product_tag_name` varchar(100) NOT NULL,
  `product_class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_tag`
--

INSERT INTO `product_tag` (`product_tag_id`, `product_tag_name`, `product_class_id`) VALUES
(5, '其他', 1),
(6, '其他', 2),
(3, '啞鈴', 1),
(4, '槓鈴', 1),
(2, '直笛', 2),
(7, '補充品', 1),
(1, '鋼琴', 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_tag_link`
--

CREATE TABLE `product_tag_link` (
  `product_tag_link_id` int(11) NOT NULL,
  `product_tag_link_product_id` int(11) NOT NULL,
  `product_tag_link_product_tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_tag_link`
--

INSERT INTO `product_tag_link` (`product_tag_link_id`, `product_tag_link_product_id`, `product_tag_link_product_tag_id`) VALUES
(206, 1, 3),
(207, 1, 7),
(175, 4, 7),
(189, 5, 7),
(101, 6, 7),
(102, 7, 7),
(110, 8, 2),
(109, 8, 6),
(111, 10, 5),
(112, 11, 6),
(118, 12, 5),
(129, 18, 5),
(145, 19, 4),
(146, 19, 7),
(213, 20, 1),
(212, 20, 2),
(214, 21, 5),
(230, 22, 3),
(231, 22, 4),
(232, 22, 7);

-- --------------------------------------------------------

--
-- Table structure for table `product_wh`
--

CREATE TABLE `product_wh` (
  `product_wh_id` int(11) NOT NULL,
  `product_wh_product_id` int(11) NOT NULL,
  `product_wh_pic` varchar(200) NOT NULL,
  `product_wh_sequence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_wh`
--

INSERT INTO `product_wh` (`product_wh_id`, `product_wh_product_id`, `product_wh_pic`, `product_wh_sequence`) VALUES
(49, 1, '5da1f17984229.jpg', 4),
(50, 1, '5da1f1798808b.jpg', 9),
(53, 4, '5da288c8dcaa6.jpg', 0),
(54, 5, '5da288fe95854.jpg', 0),
(55, 6, '5da2892de1638.jpg', 0),
(56, 7, '5da2896d429d2.jpg', 0),
(57, 8, '5da289e3dd34a.jpg', 1),
(58, 8, '5da28c30056ac.jpg', 0),
(59, 10, '5da28c9c5d376.jpg', 0),
(60, 11, '5da28cb7063bd.jpg', 0),
(93, 18, '5da2a137eabee.jpg', 0),
(94, 18, '5da2a151a6f25.jpg', 0),
(95, 18, '5da2a1596af04.jpg', 0),
(96, 18, '5da2a160f3e0c.jpg', 0),
(97, 18, '5da2a1743632c.jpg', 0),
(100, 19, '5da2a4c331e9f.jpg', 5),
(101, 19, '5da2a4c3372ef.jpg', 3),
(102, 20, '5da30445f0546.jpg', 6),
(103, 20, '5da3044601f27.jpg', 0),
(104, 20, '5da304c3bd53b.png', 1),
(105, 21, '5da3098c8f506.jpg', 0),
(106, 22, '5da31467c3b9d.png', 0),
(108, 22, '5da31467ccd6d.png', 0),
(109, 22, '5da31467d04a0.png', 0),
(110, 22, '5da315dba56d0.png', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_class`
--
ALTER TABLE `product_class`
  ADD PRIMARY KEY (`product_class_id`);

--
-- Indexes for table `product_tag`
--
ALTER TABLE `product_tag`
  ADD PRIMARY KEY (`product_tag_id`),
  ADD UNIQUE KEY `jobclass2_name` (`product_tag_name`,`product_class_id`),
  ADD UNIQUE KEY `jobclass2_name_2` (`product_tag_name`,`product_class_id`);

--
-- Indexes for table `product_tag_link`
--
ALTER TABLE `product_tag_link`
  ADD PRIMARY KEY (`product_tag_link_id`),
  ADD UNIQUE KEY `usertagjobclass2_jobid` (`product_tag_link_product_id`,`product_tag_link_product_tag_id`),
  ADD UNIQUE KEY `usertagjobclass2_jobid_2` (`product_tag_link_product_id`,`product_tag_link_product_tag_id`);

--
-- Indexes for table `product_wh`
--
ALTER TABLE `product_wh`
  ADD PRIMARY KEY (`product_wh_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `product_class`
--
ALTER TABLE `product_class`
  MODIFY `product_class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product_tag`
--
ALTER TABLE `product_tag`
  MODIFY `product_tag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `product_tag_link`
--
ALTER TABLE `product_tag_link`
  MODIFY `product_tag_link_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=233;
--
-- AUTO_INCREMENT for table `product_wh`
--
ALTER TABLE `product_wh`
  MODIFY `product_wh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
