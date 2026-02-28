-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2026 at 07:46 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unitop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pages`
--

CREATE TABLE `tbl_pages` (
  `id` int(11) NOT NULL,
  `page_title` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `page_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_pages`
--

INSERT INTO `tbl_pages` (`id`, `page_title`, `created_at`, `page_content`) VALUES
(1, 'Giới thiệu', '2026-02-23 01:09:05', '<p>[Giới thiệu] Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>'),
(2, 'Liên hệ', '2026-02-23 01:09:05', '<p>[Liên hệ] Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` int(11) NOT NULL,
  `product_title` text NOT NULL,
  `price` int(11) NOT NULL DEFAULT 0,
  `code` text NOT NULL,
  `product_desc` text NOT NULL,
  `product_thumb` text NOT NULL,
  `product_content` text NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `product_title`, `price`, `code`, `product_desc`, `product_thumb`, `product_content`, `cat_id`) VALUES
(1, 'Điện thoại OPPO A3 8GB/128GB', 4200000, 'UNI#1', 'OPPO A3 8GB/128GB mang đến một trải nghiệm sử dụng mượt mà và an toàn. Thiết kế bền bỉ theo tiêu chuẩn quân sự và khả năng kháng nước IP54 cho phép thiết bị vượt qua mọi thử thách, từ những buổi dã ngoại đến những cơn mưa bất chợt.', 'https://cdn.tgdd.vn/Products/Images/42/328454/oppo-a3-black-thumb-1-600x600.jpg', '<p style=\'text-align: justify;\'>OPPO A3 mang đến thiết kế tinh tế với hai phiên bản màu trắng và đen, tạo cảm giác thanh lịch và hiện đại. Mặt lưng hạn chế bám vân tay, giúp giữ cho thiết bị luôn sạch sẽ. Thiết kế này vừa đẹp mắt, vừa mang lại cảm giác cầm nắm thoải mái cho người dùng.</p>', 1),
(2, 'iPhone 17 Pro Max 256GB', 37990000, 'UNI#2', 'iPhone 17 Pro là phiên bản mới nhất của Apple, mang đến nhiều nâng cấp tập trung vào hiệu năng, hệ thống camera và vật liệu thiết kế. Sản phẩm này giới thiệu những công nghệ mới nhằm cải thiện các tính năng cốt lõi và trải nghiệm sử dụng hàng ngày.', 'https://cdn.tgdd.vn/Products/Images/42/342679/iphone-17-pro-max-cam-thumb-600x600.jpg', '<p style=\'text-align: justify;\'>iPhone 17 Pro được thiết kế lại toàn diện từ trong ra ngoài với nhiều cải tiến về cấu hình và độ bền. Điểm nhấn của thiết kế mới là khung máy nguyên khối làm từ nhôm rèn nhiệt giúp tăng độ bền. iPhone 17 Pro sẽ có ba tùy chọn màu sắc: Bạc (Silver), Cam vũ trụ (Cosmic Orange) và Xanh đậm (Deep Blue).</p>', 1),
(3, 'Samsung Galaxy S25 5G 12GB/256GB', 17990000, 'UNI#3', 'Trong sự kiện Unpacked 2025, Samsung giới thiệu Samsung Galaxy S25 - một bước đột phá với thiết kế hiện đại, camera vượt trội và hiệu suất mạnh mẽ. Được trang bị chip Snapdragon 8 Elite For Galaxy tích hợp AI, máy mang đến khả năng tối ưu hóa hiệu năng vượt bậc, đáp ứng mọi nhu cầu của người dùng, đồng thời thể hiện đẳng cấp trong từng chi tiết.', 'https://cdn.tgdd.vn/Products/Images/42/333363/samsung-galaxy-s25-green-thumbai-600x600.jpg', '<p style=\'text-align: justify;\'>Galaxy S25 tiếp tục kế thừa những nét đặc trưng từ các thế hệ trước, nhưng có sự tinh chỉnh mang lại vẻ ngoài sang trọng và hiện đại hơn. Máy vẫn giữ kiểu dáng vuông vức, với các góc được bo nhẹ nhàng, tạo cảm giác mạnh mẽ nhưng không kém phần tinh tế.</p>', 1),
(4, 'Laptop HP 15 fc0655AU R5 7430U', 14590000, 'UNI#4', 'Laptop HP 15 fc0655AU R5 7430U (C81NGPA) là lựa chọn lý tưởng cho học sinh, sinh viên, nhân viên văn phòng và cả những bạn yêu thích thiết kế đồ họa cơ bản, tìm kiếm một thiết bị đa năng với hiệu suất ổn định và thiết kế thanh lịch. Chiếc laptop này không chỉ đáp ứng tốt các tác vụ hàng ngày mà còn mang đến trải nghiệm làm việc và giải trí mượt mà, trở thành người bạn đồng hành đáng tin cậy trong mọi hoạt động.', 'https://cdnv2.tgdd.vn/mwg-static/tgdd/Products/Images/44/358079/hp-15-fc0655au-r5-7430u-c81ngpa-thumb-3-639015630581578905-600x600.jpg', '<p>Về hiệu năng, HP 15 fc0655AU được trang bị bộ vi xử lý <strong>AMD Ryzen 5 - 7430U</strong> mạnh mẽ. Với <strong>6 nhân</strong> và <strong>12 luồng</strong>, cùng tốc độ CPU từ <strong>2.30 GHz</strong> và có thể đạt đến <strong>4.30 GHz</strong> khi tải nặng, chiếc laptop này dễ dàng xử lý các tác vụ từ cơ bản đến nâng cao. Từ việc duyệt web, soạn thảo văn bản, làm bài tập nhóm đến chạy các phần mềm thiết kế đồ họa 2D như Photoshop, Illustrator một cách trơn tru. Đi kèm với CPU là card đồ họa tích hợp <strong>AMD Radeon Graphics</strong>, cung cấp hiệu suất đồ họa đủ dùng cho các nhu cầu giải trí đa phương tiện, chỉnh sửa ảnh nhẹ nhàng hoặc chơi một số tựa game không đòi hỏi cấu hình quá cao.</p>', 2),
(5, 'Laptop MacBook Air 13 inch M4 16GB/256GB', 23990000, 'UNI#5', 'Không làm người dùng thất vọng, Apple đã cho ra mắt MacBook Air M4 16GB không chỉ là một chiếc laptop đồ họa siêu mỏng nhẹ mà còn mang đến hiệu suất mạnh mẽ với chip Apple M4 và RAM 16 GB, cùng màn hình Liquid Retina rực rỡ và thời lượng pin ấn tượng. Sản phẩm này là sự lựa chọn hoàn hảo cho mọi nhu cầu, phù hợp cho cả người dùng văn phòng, sinh viên, đặc biệt là nhà sáng tạo nội dung, thiết kế đồ hoạ.', 'https://cdn.tgdd.vn/Products/Images/44/335362/macbook-air-13-inch-m4-xanh-den-600x600.jpg', '<p>Bộ vi xử lý <strong>Apple M4</strong> được sản xuất trên tiến trình tiên tiến của Apple, giúp tối ưu hiệu suất và tiết kiệm năng lượng vượt trội. Với <strong>10 nhân CPU</strong>, con chip này mang lại khả năng xử lý nhanh chóng và mượt mà cho mọi tác vụ, từ công việc văn phòng, lập trình, chỉnh sửa ảnh đến biên tập video.</p>', 2),
(6, 'Laptop Dell 15 DC15255 - DC5R5802W1', 15690000, 'UNI#6', 'Chiếc laptop Dell 15 DC15255 R5 7530U (DC5R5802W1) là một lựa chọn lý tưởng dành cho học sinh, sinh viên và nhân viên văn phòng, đặc biệt là những ai cần một thiết bị đa năng cho cả công việc và giải trí, thậm chí cả thiết kế đồ họa cơ bản. Với hiệu năng mạnh mẽ từ chip AMD Ryzen 5 và màn hình chất lượng cao, đây chắc chắn là người bạn đồng hành đáng tin cậy.', 'https://cdnv2.tgdd.vn/mwg-static/tgdd/Products/Images/44/342755/dell-15-dc15255-r5-7530u-dc5r5802w1-thumb-638920698565049808-600x600.jpg', '<p>Trái tim của chiếc laptop này là bộ vi xử lý <strong>AMD Ryzen 5 - 7530U</strong> với <strong>6 nhân</strong> và <strong>12 luồng</strong>, đạt tốc độ cơ bản <strong>2.00 GHz</strong> và có thể tăng tốc lên đến <strong>4.50 GHz</strong> khi tải nặng. Nhờ vậy, máy dễ dàng xử lý mượt mà mọi tác vụ hàng ngày từ lướt web, học online, làm việc văn phòng với các ứng dụng như Word, Excel, PowerPoint, cho đến lập trình cơ bản mà không gặp phải tình trạng giật lag.</p>', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_cat`
--

CREATE TABLE `tbl_product_cat` (
  `id` int(11) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_product_cat`
--

INSERT INTO `tbl_product_cat` (`id`, `cat_title`) VALUES
(1, 'Điện thoại'),
(2, 'Laptop');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `password` varchar(40) NOT NULL,
  `age` int(100) NOT NULL,
  `earn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `username`, `fullname`, `email`, `gender`, `password`, `age`, `earn`) VALUES
(1, 'ltbxq9', 'Lê Thanh Bình', 'binhlethanh623@gmail.com', 'female', '71fb3bdd4eda118210fdb3757fd35b3e', 23, 50),
(2, 'nguyenvana', 'Nguyễn Văn A', 'nguyenvana@gmail.com', 'male', 'c9bfdf858ae297036c991a137d14acc4', 30, 80),
(4, 'lethib', 'Lê Thị Bích', 'ltb@gmail.com', 'female', '4334b0225dfdbbeaee0fd28e5cb2d25a', 45, 40),
(6, 'tranvanc', 'Trần Văn Cường', 'tvc@gmail.com', 'male', '27a4c6344a910da8182cf1db39f7a558', 29, 100),
(7, 'daothid', 'Đào Thị Doanh', 'dtd@gmail.com', 'female', '36336a15e8123a2e9fedfbf5ebb5cd74', 34, 44),
(8, 'dovane', 'Đỗ Văn En', 'dve@gmail.com', 'male', 'e6e812539f1e43d5ec9e44c29c8154ba', 50, 30),
(9, 'buithig', 'Bùi Thị Giang', 'btg@gmail.com', 'female', '0c2a888b2d4fd45cda4b2a21d4ca34f4', 54, 90),
(10, 'vivanh', 'Vi Văn Hoàng', 'vvh@gmail.com', 'male', '4fef3d06c9dfacceeb46d593fa70f333', 39, 48),
(11, 'chuthii', 'Chu Thị Yến', 'cti@gmail.com', 'female', 'dee4edcd47898bf4b9f3f2b25bfa2d55', 36, 60),
(12, 'phanvank', 'Phan Văn Khải', 'pvk@gmail.com', 'male', '02435f6e61951a0bc62ac8ec6ed9b509', 27, 100),
(13, 'phamthil', 'Phạm Thị Loan', 'ptl@gmail.com', 'female', '1db3183163209b72063e1dbb7b838a37', 44, 30),
(14, 'caovanm', 'Cao Văn Mạnh', 'cvm@gmail.com', 'male', '19f6fd78022485fc88d60162b4df30a5', 37, 120),
(15, 'ngothin', 'Ngô Thị Như', 'ntn@gmail.com', 'female', '24ef43e8ee887a38e8d8352f68dbe987', 22, 40),
(16, 'havanp', 'Hà Văn Phương', 'hvp@gmail.com', 'male', 'cda5e627b1e2faeac2c21406d2101f20', 33, 80),
(17, 'vuthiq', 'Vũ Thị Quỳnh', 'vtq@gmail.com', 'female', '4f2e7e09c96d20f3b198e9d15cda6437', 21, 40);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`) USING HASH,
  ADD KEY `fkk_product_car` (`cat_id`);

--
-- Indexes for table `tbl_product_cat`
--
ALTER TABLE `tbl_product_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_product_cat`
--
ALTER TABLE `tbl_product_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD CONSTRAINT `fkk_product_car` FOREIGN KEY (`cat_id`) REFERENCES `tbl_product_cat` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
