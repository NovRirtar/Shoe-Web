-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th3 17, 2024 lúc 11:27 AM
-- Phiên bản máy phục vụ: 8.0.31
-- Phiên bản PHP: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shoe2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `shoe_id` int NOT NULL,
  `shoe_color` varchar(255) NOT NULL,
  `shoe_size` int NOT NULL,
  `quantity` int NOT NULL,
  `status` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `shoe_id`, `shoe_color`, `shoe_size`, `quantity`, `status`) VALUES
(14, 17, 47, 'đen', 38, 0, 2),
(15, 17, 48, 'đen', 38, 0, 3),
(16, 1, 48, 'đen', 35, 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'nike'),
(2, 'adidas'),
(3, 'vans'),
(4, 'converse');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cart_id` int NOT NULL,
  `quantity` int NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `cart_id`, `quantity`, `date`) VALUES
(2, 3, 0, '2024-02-25'),
(3, 5, 0, '2024-03-10'),
(5, 15, 0, '2024-03-17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shoe`
--

DROP TABLE IF EXISTS `shoe`;
CREATE TABLE IF NOT EXISTS `shoe` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` bigint NOT NULL,
  `sale` int NOT NULL,
  `size` varchar(255) NOT NULL,
  `category_id` int NOT NULL,
  `color` varchar(255) NOT NULL,
  `review` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `shoe`
--

INSERT INTO `shoe` (`id`, `name`, `price`, `sale`, `size`, `category_id`, `color`, `review`) VALUES
(28, 'Nike Air Max Excee - Be', 3099000, 0, '35,36,37,38,39,40,41,42,43,44,45,46', 1, 'be', 'GIÀY THỂ THAO NAM NIKE AIR MAX EXCEE Giày Thể Thao Nam Nike Air Max Excee là đôi giày tôn vinh dòng Air Max 90 huyền thoại của Nike. Với vẻ ngoài đậm chất cổ điển pha trộn nét hiện đại, Excee không chỉ là một đôi giày, mà còn là tuyên ngôn phong cách của bạn. Hãy phối chúng với trang phục streetwear cá tính, và bước ra ngoài, khẳng định sự khác biệt, sẵn sàng tạo nên dấu ấn riêng trên từng con đường bạn đi. THÔNG SỐ  Công nghệ Max Air cushioning hỗ trợ vững chắc và thoải mái cho mỗi bước chân củ'),
(29, 'Nike Court Vision Low Next Nature', 2090000, 3, '38,40,41,42,45,46', 1, 'trắng đen,đen trắng,trắng', 'GIÀY THỜI TRANG NAM NIKE COURT VISION LO NN  Yêu thích kiểu dáng cổ điển của bóng rổ thập niên 80 nhưng bạn có thích văn hóa nhịp độ nhanh của trò chơi ngày nay không? Nike Court Vision Low. Các lớp phủ trên và đường khâu sắc nét của nó giữ nguyên linh hồn của kiểu dáng ban đầu. Cổ giày được đệm chắc chắn, với kiểu dáng cắt thấp giúp bạn luôn cảm thấy thoải mái khi sử dụng chúng.  THÔNG SỐ  Được làm bằng vật liệu tái chế ít nhất 20% tính theo trọng lượng. Sử dụng chất liệu tổng hợp, thiết kế có '),
(30, 'Air Jordan 1 Low SE', 3519000, 0, '36,38,39,41,42,46,45', 1, 'nâu,trắng,xám xanh', 'Dưới đây là một số chiếc AJ1 đơn giản và đẹp mắt. Bạn có mong đợi điều gì ít hơn không? Được chế tác từ da sắc nét, chúng có đệm Nike Air thoải mái ở đế. Logo Swoosh thêu tạo điểm nhấn hoàn thiện cho sản phẩm được yêu thích nhất mọi thời đại này.'),
(31, 'Air Jordan 1 Mid', 3578000, 2, '35,36,37,38,39,40,41,42,43,44,45,46', 1, 'trắng,đỏ,', 'Lấy cảm hứng từ AJ1 nguyên bản, Air Jordan 1 Mid mang đến cho người hâm mộ cơ hội theo bước chân của MJ. Màu sắc tươi mới trang trí các vật liệu sạch sẽ, cổ điển, truyền tải sự hiện đại vào một thiết kế cổ điển.'),
(32, 'Nike Air Max Scorpion Flyknit', 8953000, 10, '38,40,41,42,45,46', 1, 'xám', 'Chúng ta đã nhìn về tương lai và nó sẽ rất thoải mái. Với bộ phận Air \"tải điểm\" (đệm tạo thành từng bước của bạn), Air Max Scorpion Flyknit mang lại cảm giác tương lai. Và bởi vì vẻ ngoài rất quan trọng nên chúng tôi đã chế tạo phần trên từ loại vải giống renin vô cùng mềm mại.'),
(33, 'Nike Air Force 1 Mid By You', 4109000, 0, '36,38,39,41,42,46,45', 1, 'custom màu', 'Hãy để thiết kế của bạn tỏa sáng với chất liệu sa-tanh, giữ nét cổ điển trên vải canvas hoặc trở nên sang trọng với chất liệu da. Cho dù bạn chọn gì thì những chiếc AF-1 này đều là về bạn. 12 lựa chọn màu sắc và một tùy chọn Gum bổ sung cho ý nghĩa duy nhất là thiết kế của bạn sẽ trở thành độc nhất vô nhị, giống như bạn.'),
(34, 'Nike Air Max 90', 3829000, 5, '36,38,39,41,42,46,45', 1, 'be,trắng', 'Thắt dây và cảm nhận di sản. Được sản xuất tại sự giao thoa giữa nghệ thuật, âm nhạc và văn hóa, đôi giày chạy bộ vô địch này đã giúp định hình thập niên 90. Được các tổng thống đeo, cách mạng hóa nhờ sự hợp tác và tôn vinh nhờ những màu sắc hiếm có, hình ảnh nổi bật, đế Waffle và lớp đệm Nike Air lộ ra ngoài đã giúp nó luôn tồn tại và hoạt động tốt.'),
(35, 'Air Jordan Legacy 312 Low', 4505000, 6, '36,38,39,41,42,46,45', 1, 'đỏ,xanh rêu', 'Tôn vinh di sản của MJ với lời cảm ơn tới mã vùng 312 của Chicago. Với các yếu tố từ ba đôi giày Jordan mang tính biểu tượng (AJ3, AJ1 và Air Alpha Force), đây là một bản kết hợp hiện đại thể hiện tốt nhất.'),
(36, 'Air Jordan 1 Mid SE Craft', 3850000, 0, '35,36,37,38,39,40,41,42,43,44,45,46', 1, 'đỏ,xanh rêu,cam', 'Màu sắc mới và kết cấu mới mẻ mang đến cho bạn một chiếc AJ1 thủ công, giữ được vẻ ngoài cổ điển và cảm giác quen thuộc. Chiếc áo được yêu thích nhất mọi thời đại này được làm từ vật liệu cao cấp và được trang trí bằng các cạnh thô và đường khâu tương phản.'),
(37, 'OZMILLEN', 2700000, 0, '35,36,37,38,39,40,41,42,43,44,45,46', 2, 'trắng,', 'Dành cho những tâm hồn phóng khoáng tự vạch ra con đường của riêng mình, đôi giày adidas OZMILLEN sẽ dẫn lối đầy khác biệt. Lấy cảm hứng từ giày chạy bộ OZWEEGO thập niên 90 đầy phá cách, đôi giày dáng thấp này có thiết kế thú vị với lưỡi gà rời bằng vải lưới, mũi giày đặc trưng và 3 Sọc bằng TPU với khung má giày lấp ló. Các chi tiết phản quang phủ ngoài cùng lớp lót trong vải lưới và da tổng hợp mang hơi hướng tương lai. Lớp đệm Adiplus mang đến cảm giác thoải mái không thể chối từ để bạn có t'),
(38, 'SUPERSTAR XLG ATMOS', 3000000, 10, '38,39,40,42,45,46', 2, 'trắng,đen', 'Đã tuyệt vời nay càng tuyệt vời hơn. Dòng giày adidas Superstar biểu tượng kết hợp cùng hơi hướng boutique Nhật Bản tạo nên phiên bản hiện đại của một item vốn được yêu thích suốt nhiều thập kỷ. Thân giày bằng da với tông màu đen đơn sắc và đệm lót tạo nên thiết kế dày dặn. Tất cả các chi tiết đặc trưng của giày Superstar đều hiện diện, từ 3 Sọc hai bên hông đến mũi giày vỏ sò trứ danh hoàn thiện thiết kế. Kết quả là phiên bản trơn láng, mượt mà của mẫu giày đã ra mắt từ năm 1969 với vai trò ban'),
(39, 'CAMPUS 00S', 2600000, 15, '35,36,37,38,39,40,41,42,43,44,45,46', 2, 'trắng,xanh biển,đen', 'Đôi giày adidas này thừa hưởng những chi tiết biểu tượng của giày Campus 80s và biến tấu thành phiên bản thế hệ mới mang cảm hứng trượt ván. Nổi tiếng về độ bền và càng lúc càng ôm theo hình dáng bàn chân, chất liệu da lộn giúp duy trì tuổi thọ và khả năng tiếp đất vững vàng. Thiết kế colorblock, họa tiết graphic và logo thương hiệu đậm chất học đường làm nên một thiết kế mới mẻ để thế hệ mới sở hữu và thỏa sức phối đồ.'),
(40, 'SAMBA OG', 2500000, 2, '38,40,41,42,45,46', 2, 'trắng,đen', 'Ra đời trên sân bóng, giày Samba là biểu tượng kinh điển của phong cách đường phố. Phiên bản này trung thành với di sản, thể hiện qua thân giày bằng da mềm, dáng thấp, nhã nhặn, các chi tiết phủ ngoài bằng da lộn và đế gum, biến đôi giày trở thành item không thể thiếu trong tủ đồ của tất cả mọi người - cả trong và ngoài sân cỏ.'),
(41, 'CỔ THẤP FORUM', 2600000, 0, '35,36,37,38,39,40,41,42,43,44,45,46', 2, 'xanh biển', 'Không chỉ là một đôi giày, mà chính là một tuyên ngôn. Dòng adidas Forum ra mắt năm 1984 và cực kỳ được ưa chuộng cả trên sân bóng rổ lẫn trong giới âm nhạc. Mẫu mới của dòng giày kinh điển này tái hiện tinh thần thập niên 80, nguồn năng lượng bùng nổ trên sân đấu cũng như thiết kế quai cổ chân chữ X đặc trưng, kết tinh thành phiên bản cổ thấp đậm chất đường phố.'),
(42, 'NMD_R1 PRIMEBLUE', 3900000, 0, '38,39,40', 2, 'đen', 'Soạn đồ, mang giày và xuất phát. Hành trình phiêu lưu khắp phố phường đang vẫy gọi với đôi giày NMD_R1 này. Là phiên bản cập nhật của dòng giày chạy bộ thập niên 80 trứ danh trong kho di sản adidas, đôi giày trainer hiện đại này có thân giày bằng vải dệt kim mềm mại, co giãn và lớp đệm Boost hoàn trả năng lượng cho cảm giác thoải mái suốt ngày dài. Sắc màu táo bạo và các miếng bịt đế giữa đặc trưng gây ấn tượng mạnh mẽ, vậy nên bạn chắc chắn sẽ xuất hiện đầy phong cách ở bất cứ nơi đâu.  Sản phẩ'),
(43, 'STAN SMITH', 2800000, 0, '38,39,40', 2, 'xanh lá,trắng', 'Vẻ đẹp kinh điển. Phong cách vốn dĩ. Đa năng hàng ngày. Suốt hơn 50 năm qua và chưa dừng ở đó, giày adidas Stan Smith luôn giữ vững vị trí là một biểu tượng. Đôi giày này là phiên bản cải biên mới mẻ, là một phần cam kết của adidas hướng tới chỉ sử dụng polyester tái chế bắt đầu từ năm 2024. Với thân giày vegan và đế ngoài làm từ cao su phế liệu, đôi giày này vẫn mang phong cách đầy tính biểu tượng, đồng thời thân thiện với môi trường.  Giày sử dụng chất liệu vegan thay cho thành phần hoặc chất '),
(44, 'VANS OLD SKOOL CLASSIC', 1800000, 20, '35,36,37,38,39,40,41,42,43,44,45,46', 3, 'trắng,đen', 'Được gọi vui một cách thân thuộc là \"giày VANS đen\" vốn là một sự phổ biến rất đặc biệt đối với các tín đồ của nhà VANS. Tới nay đôi giày chỉ với phối màu đen trắng này vẫn nằm trong top \"Best Seller\" của VANS trên toàn thế giới, với kiểu dáng cổ điển cùng \"sọc Jazz\" huyền thoại hợp thời trang khiến đôi VANS này thật sự trở thành mẫu giày classic bất bại, là fan hâm mộ của VANS nói chung và những skaters nói riêng đều nên có một đôi trong tủ giày. Được mệnh danh là phiên bản mang \"càng cũ càng đ'),
(45, 'VANS CHECKERBOARD SLIP-ON CLASSIC', 1700000, 12, '36,38,39,41,42,46,45', 3, 'trắng,đen', 'Bắt đầu trở nên nổi tiếng khi được Sean Penn sử dụng trong bộ phim Fast Times vào năm 1982 và từ phong trào trở thành một phong cách huyền thoại không hề lỗi thời và luôn nằm trong mục \"Best Seller\" của VANS cho tới thời điểm hiện tại.'),
(46, 'VANS CLASSIC SK8-HI', 2000000, 0, '35,36,37,38,39,40,41,42,43,44,45,46', 3, 'trắng,đen', 'VANS SK8 xuất hiện lần đầu năm 1978 với tên gọi '),
(47, 'Converse Chuck Taylor All Star Move', 2000000, 30, '38,40,41,42,45,46', 4, 'đen', 'Converse nổi tiếng với dòng giày high-top với upper được làm bằng chất liệu vải, đế ngoài có hoa văn kim cương và huy hiệu ngôi sao mang tính biểu tượng ở mắt cá chân. Ở phiên bản này, Converse vẫn giữ nguyên upper vải truyền thống, cải tiến bằng cách nâng cao phần đế giúp tôn dàng người mang và tạo nên phong cách cá tính cho set đồ của bạn.'),
(48, 'Unisex Converse Chuck 70 Vintage Canvas', 1400000, 0, '35,36,37,38,39,40,41,42,43,44,45,46', 4, 'đen,trắng,vàng', 'Chuck 70 kết hợp những chi tiết tốt nhất với tay nghề thủ công hoàn hảo và vật liệu cao cấp. Một biểu tượng phong cách nâng cao, sản phẩm trang bị thêm đệm để giữ cho đôi chân của bạn trông - và cảm giác - tốt cả ngày.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shoe_image`
--

DROP TABLE IF EXISTS `shoe_image`;
CREATE TABLE IF NOT EXISTS `shoe_image` (
  `id` int NOT NULL AUTO_INCREMENT,
  `shoe_id` int NOT NULL,
  `link_image` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `shoe_image`
--

INSERT INTO `shoe_image` (`id`, `shoe_id`, `link_image`) VALUES
(38, 28, 'imageShoe/2.jpg'),
(39, 28, 'imageShoe/1.jpg'),
(40, 28, 'imageShoe/2.jpg'),
(41, 28, 'imageShoe/6.jpg'),
(42, 28, 'imageShoe/7.jpg'),
(43, 28, 'imageShoe/8.jpg'),
(44, 29, 'imageShoe/1.jpg'),
(45, 29, 'imageShoe/2.jpg'),
(46, 29, 'imageShoe/6.jpg'),
(47, 29, 'imageShoe/7.jpg'),
(48, 30, 'imageShoe/1.jpg'),
(49, 30, 'imageShoe/6.jpg'),
(50, 30, 'imageShoe/7.jpg'),
(51, 30, 'imageShoe/8.jpg'),
(52, 31, 'imageShoe/1.jpg'),
(53, 31, 'imageShoe/6.jpg'),
(54, 31, 'imageShoe/7.jpg'),
(55, 31, 'imageShoe/8.jpg'),
(56, 32, 'imageShoe/7.jpg'),
(57, 32, 'imageShoe/8.jpg'),
(58, 32, 'imageShoe/9.jpg'),
(59, 32, 'imageShoe/10.jpg'),
(60, 33, 'imageShoe/2.jpg'),
(61, 33, 'imageShoe/6.jpg'),
(62, 33, 'imageShoe/7.jpg'),
(63, 33, 'imageShoe/8.jpg'),
(64, 34, 'imageShoe/8.jpg'),
(65, 34, 'imageShoe/9.jpg'),
(66, 34, 'imageShoe/10.jpg'),
(67, 35, 'imageShoe/5.jpg'),
(68, 35, 'imageShoe/8.jpg'),
(69, 35, 'imageShoe/9.jpg'),
(70, 35, 'imageShoe/10.jpg'),
(71, 36, 'imageShoe/4.jpg'),
(72, 36, 'imageShoe/8.jpg'),
(73, 36, 'imageShoe/9.jpg'),
(74, 36, 'imageShoe/10.jpg'),
(75, 37, 'imageShoe/7.jpg'),
(76, 37, 'imageShoe/8.jpg'),
(77, 37, 'imageShoe/9.jpg'),
(78, 38, 'imageShoe/4.jpg'),
(79, 38, 'imageShoe/5.jpg'),
(80, 38, 'imageShoe/8.jpg'),
(81, 38, 'imageShoe/9.jpg'),
(82, 39, 'imageShoe/4.jpg'),
(83, 39, 'imageShoe/5.jpg'),
(84, 39, 'imageShoe/10.jpg'),
(85, 40, 'imageShoe/4.jpg'),
(86, 40, 'imageShoe/5.jpg'),
(87, 40, 'imageShoe/8.jpg'),
(88, 41, 'imageShoe/4.jpg'),
(89, 41, 'imageShoe/5.jpg'),
(90, 41, 'imageShoe/9.jpg'),
(91, 42, 'imageShoe/4.jpg'),
(92, 42, 'imageShoe/5.jpg'),
(93, 42, 'imageShoe/8.jpg'),
(94, 42, 'imageShoe/9.jpg'),
(95, 43, 'imageShoe/4.jpg'),
(96, 43, 'imageShoe/8.jpg'),
(97, 43, 'imageShoe/9.jpg'),
(98, 44, 'imageShoe/3.jpg'),
(99, 44, 'imageShoe/4.jpg'),
(100, 44, 'imageShoe/8.jpg'),
(101, 44, 'imageShoe/9.jpg'),
(102, 45, 'imageShoe/4.jpg'),
(103, 45, 'imageShoe/8.jpg'),
(104, 45, 'imageShoe/9.jpg'),
(105, 46, 'imageShoe/4.jpg'),
(106, 46, 'imageShoe/5.jpg'),
(107, 46, 'imageShoe/7.jpg'),
(108, 46, 'imageShoe/9.jpg'),
(109, 46, 'imageShoe/10.jpg'),
(110, 47, 'imageShoe/7.jpg'),
(111, 47, 'imageShoe/8.jpg'),
(112, 48, 'imageShoe/8.jpg'),
(113, 48, 'imageShoe/9.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT '0',
  `gender` tinyint(1) NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fullname`, `dob`, `address`, `role`, `gender`, `email`, `phone`) VALUES
(1, 'admin', '25f9e794323b453885f5181f1b624d0b', 'Susan', '2001-04-27', 'HCM', 1, 1, 'Susan@gmail.com', '024882198'),
(17, 'test', '04a2f971feb1f89dd5e35165f2758ab2', 'fufuy', '2005-03-02', '12345678Aa@', 0, 1, 'hoangtuan12112003@gmail.com', '0382372304');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
