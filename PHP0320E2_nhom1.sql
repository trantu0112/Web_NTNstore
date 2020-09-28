-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th9 28, 2020 lúc 01:10 PM
-- Phiên bản máy phục vụ: 5.7.31-0ubuntu0.18.04.1
-- Phiên bản PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `PHP0320E2_nhom1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_account`
--

CREATE TABLE `tbl_account` (
  `id_account` int(11) NOT NULL,
  `display_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `addres` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '1',
  `points` int(9) NOT NULL DEFAULT '0',
  `img_avarta` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'img_avarta.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_account`
--

INSERT INTO `tbl_account` (`id_account`, `display_name`, `user_name`, `password`, `phone`, `email`, `addres`, `type`, `status`, `points`, `img_avarta`) VALUES
(10, 'Nguyễn Thành Nam', 'namnt721', '8713a951e6491ed5aeb7abb7b0a78d2e', '0904392248', 'namviptl@gmail.com', 'Số 18, ngõ 105 Phố Thúy Lĩnh, Lĩnh Nam Hoàng Mai, Hà Nội', 'Quản lý', 1, 999, 'img.jpg'),
(91, 'Trần Anh Tú', 'trantu0112', '8713a951e6491ed5aeb7abb7b0a78d2e', '0935709669', 'trantu01121999@gmail.com', 'Kim Ngưu, Hà Nội', 'Quản lý', 1, 99999, 'trantu0112_Gearvn_hính nền tối giản_ (32).jpg'),
(94, 'Trần Minh Anh', 'tranminhanh2010@gmail.com', '89b67155896ea441a9188c001a1d0090', '0906779856', 'tranminhanh2010@gmail.com', 'Lò Đúc', 'Khách hàng', 1, 0, 'img_avarta.png'),
(96, 'Trần Quang Anh', 'tuta721@wru.vn', '8713a951e6491ed5aeb7abb7b0a78d2e', '0912006677', 'tuta721@wru.vn', 'Hà Nội', 'Khách hàng', 1, 0, 'img_avarta.png'),
(97, 'Nguyễn Thành Nam', 'namvp@gmail.com', '8713a951e6491ed5aeb7abb7b0a78d2e', '0563054233', 'namvp@gmail.com', 'Lĩnh Nam', 'Khách hàng', 1, 500000, '97_nike-sb-dunk-low-ben-jerrys-chunky-dunky-replica-300x300.jpg'),
(98, 'Nguyễn Thành Long', 'longthanh@gmail.com', '8713a951e6491ed5aeb7abb7b0a78d2e', NULL, 'longthanh@gmail.com', NULL, 'Khách hàng', 1, 0, 'img_avarta.png'),
(101, 'Phạm Đăng Nam', 'pdnam2599@gmail.com', '8713a951e6491ed5aeb7abb7b0a78d2e', '0914005586', 'pdnam2599@gmail.com', 'Đại Từ', 'Quản lý', 1, 0, 'pdnam2599_GearVN_giản dị_42.jpg'),
(102, 'Nam Phạm', 'namdaitu1@gmail.com', '8713a951e6491ed5aeb7abb7b0a78d2e', '0363603868', 'namdaitu1@gmail.com', 'Hà Nội1', 'Khách hàng', 1, 0, 'img_avarta.png'),
(106, 'Nguyễn Văn Sơn', 'trananhtu01121999@gmail.com', '8713a951e6491ed5aeb7abb7b0a78d2e', '0935709660', 'trananhtu01121999@gmail.com', 'Hà Nội Không Vội Được Đâu', 'Khách hàng', 1, 0, 'img_avarta.png'),
(109, 'Hường', 'hhh123@gmai.com', '8575a414e7aa225bed1f6d044d3ce699', '0398756789', 'hhh123@gmai.com', 'Nhà ở gần vườn hoa', 'Khách hàng', 1, 900000, 'hhh123@gmai.com_'),
(110, 'Nam Phạm', 'nampd72@wru.vn', '8713a951e6491ed5aeb7abb7b0a78d2e', NULL, NULL, NULL, 'Nhân viên', 1, 0, 'nampd72@wru.vn_frame.png'),
(111, 'Phạm Thu Thủy', 'thuy123@gmail.com', '8575a414e7aa225bed1f6d044d3ce699', '0563054244', 'thuy123@gmail.com', 'Nhà ở gần vườn hoa', 'Khách hàng', 1, 0, 'img_avarta.png'),
(114, 'Phạm Thu Thủy', 'namviptl24@gmail.com', '8575a414e7aa225bed1f6d044d3ce699', '0563054211', 'namviptl24@gmail.com', 'Nhà ở gần vườn hoa', 'Khách hàng', 1, 0, 'img_avarta.png'),
(117, 'Nguyễn Thành Nam', 'namvp1@gmail.com', '8575a414e7aa225bed1f6d044d3ce699', '0904392249', 'namvp1@gmail.com', 'Hà Nội', 'Khách hàng', 1, 0, 'img_avarta.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id_post` int(11) NOT NULL,
  `post_avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateTime` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_blog`
--

INSERT INTO `tbl_blog` (`id_post`, `post_avatar`, `post_name`, `description`, `content`, `dateTime`, `created`, `updated`) VALUES
(1, '1.jpg', 'HƯỚNG DẪN VỆ SINH GIÀY VANS TRẮNG NHƯ MỚI TRONG 4 BƯỚC ĐƠN GIẢN', 'Một đôi giày Vans trắng là lựa chọn tuyệt vời cho những bộ trang phục dạo phố cuối tuần, nhưng đồng thời đây cũng là đối tượng dễ dàng bị bám bẩn. Làm thế nào để làm sạch đôi giày Vans trắng cho kế hoạch đi chơi tuần này và phải làm thật nhanh để đôi giày', '<p>Một đ&ocirc;i gi&agrave;y&nbsp;<strong>Vans</strong>&nbsp;trắng l&agrave; lựa chọn tuyệt vời cho những bộ trang phục dạo phố cuối tuần, nhưng đồng thời đ&acirc;y cũng l&agrave; đối tượng dễ d&agrave;ng bị b&aacute;m bẩn. L&agrave;m thế n&agrave;o để l&agrave;m sạch đ&ocirc;i gi&agrave;y&nbsp;<strong>Vans&nbsp;</strong>trắng cho kế hoạch đi chơi tuần n&agrave;y? Dưới đ&acirc;y l&agrave; 4 bước cực đơn giản m&agrave; bất kỳ ai cũng c&oacute; thể thực hiện.</p>\r\n\r\n<ol>\r\n	<li><strong>Chuẩn bị nguy&ecirc;n liệu</strong></li>\r\n</ol>\r\n\r\n<p>Để bắt đầu, tất cả những g&igrave; bạn cần l&agrave;:</p>\r\n\r\n<ul>\r\n	<li>2 c&aacute;i b&aacute;t.</li>\r\n	<li>Nước sạch, bột giặt.</li>\r\n	<li>Một c&aacute;i b&agrave;n chải ch&agrave; chắc chắn.</li>\r\n	<li>V&agrave; một chiếc khăn sạch.</li>\r\n</ul>\r\n\r\n<p>Bước 1 trong chuỗi thao t&aacute;c vệ sinh gi&agrave;y&nbsp;<strong>Vans&nbsp;</strong>trắng đ&atilde; ho&agrave;n th&agrave;nh.</p>\r\n\r\n<p><img alt=\"\" src=\"https://bizweb.dktcdn.net/100/140/774/files/white-vans-1.jpg?v=1594969922520\" style=\"height:464px; width:700px\" /></p>\r\n\r\n<ol start=\"2\">\r\n	<li><strong>Trộn nguy&ecirc;n liệu vệ sinh gi&agrave;y</strong></li>\r\n</ol>\r\n\r\n<p>Đầu ti&ecirc;n, h&atilde;y trộn hai cốc nước ấm với &frac14; ch&eacute;n bột giặt.</p>\r\n\r\n<p>Tiếp đến, nh&uacute;ng b&agrave;n chải ch&agrave; v&agrave;o phần dung dịch lỏng đ&atilde; pha, nhẹ nh&agrave;ng ch&agrave; l&ecirc;n bền mặt của gi&agrave;y. Bạn c&oacute; thể sử dụng một chiếc b&agrave;n chải đ&aacute;nh răng cũ để l&agrave;m sạch bề mặt cao su.</p>\r\n\r\n<p>Bạn n&ecirc;n đặt một b&aacute;t nước sạch, ấm kh&aacute;c, qu&aacute; tr&igrave;nh vệ sinh&nbsp;<strong>Vans&nbsp;</strong>trắng sẽ xen kẽ giữa 2 thao t&aacute;c: ch&agrave; tr&ecirc;n gi&agrave;y v&agrave; nhung b&agrave;n chải v&agrave;o nước ấm định kỳ. Việc n&agrave;y sẽ hạn chế t&igrave;nh trạng bụi bẩn lan rộng tr&ecirc;n vải gi&agrave;y.</p>\r\n\r\n<ol start=\"3\">\r\n	<li><strong>Lau sạch gi&agrave;y Vans</strong></li>\r\n</ol>\r\n\r\n<p>Sau khi đ&atilde; được l&agrave;m sạch bằng chiếc b&agrave;n chải, bạn cần thấm ướt chiếc khăn sạch đ&atilde; chuẩn bị trước đ&oacute; v&agrave; lau nhẹ nh&agrave;ng quanh bề mặt gi&agrave;y.</p>\r\n\r\n<p>Một lựa chọn kh&aacute;c cho bạn l&agrave; sử dụng chất tẩy vết bẩn thấm v&agrave;o khăn, lau quanh gi&agrave;y đến khi cảm thấy &ldquo;kh&ocirc;ng thể trắng hơn&rdquo;.</p>\r\n\r\n<p><img alt=\"\" src=\"https://bizweb.dktcdn.net/100/140/774/files/white-vans-3.jpg?v=1594969946994\" style=\"height:600px; width:600px\" /></p>\r\n\r\n<ol start=\"4\">\r\n	<li><strong>Sấy kh&ocirc; gi&agrave;y Vans trắng</strong></li>\r\n</ol>\r\n\r\n<p>Cuối c&ugrave;ng, đ&acirc;y l&agrave; thao t&aacute;c &ldquo;t&ugrave;y chọn&rdquo;: bạn c&oacute; thể thực hiện hoặc kh&ocirc;ng. Tất nhi&ecirc;n, gi&agrave;y vẫn c&oacute; thể kh&ocirc; tự nhi&ecirc;n, nhưng để gi&uacute;p ch&uacute;ng kh&ocirc; nhanh hơn, bạn c&oacute; thể sử dụng m&aacute;y sấy.</p>\r\n\r\n<p>Nếu bạn kh&ocirc;ng c&oacute; thời gian cho việc đợi chờ những đ&ocirc;i gi&agrave;y của m&igrave;nh kh&ocirc; bằng việc sấy kh&ocirc;, việc tận dụng &aacute;nh s&aacute;ng mặt trời cũng l&agrave; một điều đ&aacute;ng để thử. Tuy nhi&ecirc;n &aacute;nh s&aacute;ng mặt trời trực tiếp c&oacute; thể khiến việc ố v&agrave;ng cho đ&ocirc;i gi&agrave;y trở n&ecirc;n dễ d&agrave;ng hơn. V&igrave; vậy khi quyết định d&ugrave;ng &aacute;nh s&aacute;ng cho việc l&agrave;m kh&ocirc; đ&ocirc;i gi&agrave;y, bạn h&atilde;y:</p>\r\n\r\n<ul>\r\n	<li>D&ugrave;ng giấy vệ sinh bọc to&agrave;n bộ đ&ocirc;i gi&agrave;y tạo th&agrave;nh một lớp cản ngăn tia s&aacute;ng trực tiếp đến gi&agrave;y</li>\r\n	<li>Một lưu &yacute; d&agrave;nh cho bạn l&agrave; khi sấy&nbsp;<strong>Vans&nbsp;</strong>sẽ khiến ch&uacute;ng c&oacute; một số biến đổi về h&igrave;nh d&aacute;ng. Do đ&oacute;, bạn n&ecirc;n đặt một miếng giấy b&ocirc;ng b&ecirc;n trong gi&agrave;y để giữ d&aacute;ng của n&oacute;.</li>\r\n</ul>\r\n\r\n<p>Việc vệ sinh một đ&ocirc;i gi&agrave;y&nbsp;<strong>Vans&nbsp;</strong>trắng v&ocirc; c&ugrave;ng dễ d&agrave;ng phải kh&ocirc;ng? Bằng c&aacute;ch n&agrave;y, bạn c&oacute; thể l&agrave;m mới gi&agrave;y bất kỳ l&uacute;c n&agrave;o. Đừng qu&ecirc;n bảo quản để giữ đ&ocirc;i gi&agrave;y&nbsp;<strong>Vans&nbsp;</strong>của bạn bền hơn v&agrave; lu&ocirc;n giữ được sự tinh tươm tươi mới như ng&agrave;y đầu nh&eacute;!</p>\r\n', '18/08/2020', '2020-08-18 14:01:10', '2020-09-05 07:58:15'),
(9, '2.jpg', 'VÌ SAO GIÀY NIKE AIR FORCE 1 TRẮNG ĐƯỢC CÁC BẠN HỌC SINH LỰA CHỌN', 'Thiết kế gọn gàng, đẹp mắt & cá tính là những đặc tính cơ bản của mẫu giày Nike Air Force 1 Trắng & \"siêu phẩm\" này đang nhận được những phản hồi tích cực từ các tín đồ thời trang. Nếu bạn đam mê loại giày sneaker, yêu thích sự trẻ trung năng động và cá t', '<p>Hiện nay để mua được một đ&ocirc;i gi&agrave;y sneaker đạt đủ 3 ti&ecirc;u ch&iacute;:&nbsp;<strong>rẻ, đẹp v&agrave; chất lượng</strong>&nbsp;th&igrave; v&ocirc; c&ugrave;ng kh&oacute; khăn cho giới trẻ. V&agrave; để đ&aacute;p ứng được nhu cầu đ&oacute; n&ecirc;n thương hiệu&nbsp;<a href=\"https://giaygiare.vn/giay-nike\" rel=\"noopener noreferrer\" target=\"_blank\" title=\"giày Nike\">gi&agrave;y Nike</a>&nbsp;đ&atilde; cho ra đời đ&ocirc;i sneaker Air Force 1 Trắng nhận được rất nhiều sự đ&oacute;n ch&agrave;o của c&aacute;c bạn học sinh. L&yacute; do tại sao m&agrave; đ&ocirc;i gi&agrave;y n&agrave;y lại được y&ecirc;u th&iacute;ch đến thế? H&atilde;y c&ugrave;ng t&igrave;m hiểu nh&eacute;.</p>\r\n\r\n<h2>Một ch&uacute;t th&ocirc;ng tin về Af1 Trắng Full</h2>\r\n\r\n<p><img alt=\"\" src=\"https://product.hstatic.net/200000042104/product/__ci0919-102___nike_air_force_1_shadow__white_magic_flamingo__44b619458adb4aa4a36c6fe197792997_master.jpg\" style=\"height:539px; width:898px\" /></p>\r\n\r\n<p>Sở dĩ đ&ocirc;i gi&agrave;y n&agrave;y được gọi l&agrave; một huyền thoại c&aacute;ch mạng trong giới Sneaker bởi v&igrave; n&oacute; được xem l&agrave; một trong những đ&ocirc;i gi&agrave;y đầu ti&ecirc;n sử dụng c&ocirc;ng nghệ ti&ecirc;n tiến nhất để tăng cường khả năng vận h&agrave;nh trong qu&aacute; tr&igrave;nh sử dụng&nbsp;<a href=\"https://giaygiare.vn/giay-air-force\" rel=\"noopener noreferrer\" target=\"_blank\" title=\"Nike Air Force 1\">Nike Air Force 1</a>.<br />\r\nViệc &aacute;p dụng c&ocirc;ng nghệ cao v&agrave;o qu&aacute; tr&igrave;nh sản xuất đ&ocirc;i gi&agrave;y n&agrave;y bởi v&igrave; mục đ&iacute;ch ban đầu của n&oacute; l&agrave; được chế tạo cho người chơi thể thao, đặc biệt l&agrave; b&oacute;ng rổ. V&agrave; cũng ch&iacute;nh v&igrave; l&yacute; do n&agrave;y m&agrave; n&oacute; được nhiều người trong giới thể thao c&oacute; tầm ảnh hưởng nhất định đặc biệt quan t&acirc;m v&agrave; lan rộng n&oacute; đến to&agrave;n thế giới.</p>\r\n\r\n<h2>Ưu điểm giới trẻ chọn Nike Air Force 1 l&agrave; sự lựa chọn h&agrave;ng đầu</h2>\r\n\r\n<p><img alt=\"\" src=\"https://giaysneaker.com.vn/public/media//thumb/nike-air-force-1-shadow-vien-do3-570x570.jpg\" style=\"height:600px; width:600px\" /></p>\r\n\r\n<h3>Mức gi&aacute; hợp l&yacute;, ph&ugrave; hợp với t&uacute;i tiền</h3>\r\n\r\n<p>Tất nhi&ecirc;n hiện nay học sinh hoặc sinh vi&ecirc;n kh&ocirc;ng thể c&oacute; qu&aacute; nhiều tiền để mua được một đ&ocirc;i gi&agrave;y qu&aacute; mắc cho n&ecirc;n Nike Air Force 1 với mức gi&aacute; trung b&igrave;nh m&agrave; c&ograve;n c&oacute; thể gọi l&agrave; kh&aacute; rẻ so với chất lượng của n&oacute; l&agrave; sự lựa chọn h&agrave;ng đầu.</p>\r\n\r\n<h3>M&agrave;u trắng gi&uacute;p dễ d&agrave;ng mix c&aacute;c bộ trang phục</h3>\r\n\r\n<p>Nếu c&oacute; một m&agrave;u n&agrave;o tr&ecirc;n thế giới c&oacute; thể phối hợp ho&agrave;n hảo với bất cứ một m&agrave;u sắc n&agrave;o kh&aacute;c th&igrave; đ&oacute; ch&iacute;nh l&agrave; m&agrave;u trắng. Ch&iacute;nh v&igrave; vậy ri&ecirc;ng về gi&agrave;y Nike Air Force 1 th&igrave; m&agrave;u trắng lại được rất nhiều bạn trẻ quan t&acirc;m bởi v&igrave; t&iacute;nh khả dụng của n&oacute; trong bất cứ loại trang phục n&agrave;o.</p>\r\n\r\n<p>V&igrave; nếu bạn l&agrave; một học sinh th&igrave; nhiều nh&agrave; trường sẽ c&oacute; quy định bắt buộc phải mang gi&agrave;y m&agrave;u trắng v&agrave; điều đ&oacute; thuận tiện với m&agrave;u sắc của đ&ocirc;i gi&agrave;y n&agrave;y. Bạn ho&agrave;n to&agrave;n c&oacute; thể tự tin diện Nike Air Force ở bất cứ nơi n&agrave;o, bất cứ nơi đ&acirc;u m&agrave; vẫn c&oacute; thể hợp thời trang v&agrave; v&ocirc; c&ugrave;ng thời thượng.</p>\r\n\r\n<p>H&atilde;y thử tưởng tượng bạn c&oacute; thể mix bất cứ loại trang phục từ đơn giản cho đến kh&oacute; nhằn với đ&ocirc;i gi&agrave;y thể thao m&agrave;u trắng n&agrave;y sẽ v&ocirc; c&ugrave;ng đơn giản biết bao.</p>\r\n\r\n<p>Nếu l&agrave; một buổi hẹn h&ograve; th&igrave; chỉ cần một chiếc quần Jean c&ugrave;ng với một đ&ocirc;i gi&agrave;y trắng tinh sẽ gi&uacute;p bạn c&oacute; thể g&acirc;y ấn tượng được với người ấy.<br />\r\nHoặc nếu l&agrave; một buổi tiệc c&ugrave;ng với bạn b&egrave; th&acirc;n thiết th&igrave; mix một chiếc v&aacute;y s&agrave;nh điệu c&ugrave;ng đ&ocirc;i gi&agrave;y Sneaker n&agrave;y c&oacute; thể l&agrave;m bạn trở n&ecirc;n c&aacute; t&iacute;nh nhưng vẫn c&oacute; thể thoải m&aacute;i bay nhảy trong suốt cả một buổi tiệc d&agrave;i.</p>\r\n\r\n<h3>Kh&ocirc;ng dễ bị dơ như những đ&ocirc;i gi&agrave;y trắng kh&aacute;c</h3>\r\n\r\n<p><img alt=\"\" src=\"https://znews-photo.zadn.vn/w660/Uploaded/lqmctqvp/2020_04_07/af5.jpg\" style=\"height:440px; width:660px\" /></p>\r\n\r\n<p>Nếu bạn đang sợ gi&agrave;y&nbsp;<a href=\"https://giaygiare.vn/giay-nike-air-force-1-trang-full-nam-nu.html\" rel=\"noopener noreferrer\" target=\"_blank\" title=\"Air Force 1 trắng\">Air Force 1 trắng</a>&nbsp;c&oacute; thể sẽ dễ bị dơ hoặc bị ố m&agrave;u trong qu&aacute; tr&igrave;nh sử dụng th&igrave; ho&agrave;n to&agrave;n c&oacute; thể y&ecirc;n t&acirc;m th&igrave; đ&ocirc;i gi&agrave;y n&agrave;y được l&agrave;m bằng chất liệu cao cấp c&ugrave;ng m&agrave;u sơn c&oacute; thể khiến t&igrave;nh trạng gi&agrave;y l&uacute;c n&agrave;o cũng tr&ocirc;ng như mới.<br />\r\nNgo&agrave;i ra, nếu bạn lo lắng v&igrave; vấn đề gi&agrave;y trắng c&oacute; thể bị dơ th&igrave; ho&agrave;n to&agrave;n c&oacute; thể mua những dung dịch l&agrave;m sạch chỉ chuy&ecirc;n dụng cho gi&agrave;y thể thao để lau sau mỗi lần sử dụng. Việc n&agrave;y rất đơn giản m&agrave; lại c&oacute; thể gi&uacute;p bảo quản những đ&ocirc;i gi&agrave;y của bạn c&oacute; tuổi thọ l&acirc;u hơn cũng như s&aacute;ng m&agrave;u hơn rất nhiều.</p>\r\n\r\n<h2>Chất lượng l&agrave;m n&ecirc;n thương hiệu</h2>\r\n\r\n<p>Chắc hẳn c&aacute;c bạn sẽ kh&ocirc;ng phải &iacute;t nhất một lần nghe đến c&aacute;i t&ecirc;n Nike trong l&agrave;ng c&aacute;c &ocirc;ng lớn m&aacute;u mặt ở thị trường gi&agrave;y rồi đ&uacute;ng kh&ocirc;ng? Ch&iacute;nh v&igrave; vậy những đ&ocirc;i gi&agrave;y được thương hiệu n&agrave;y thiết kế chắc chắn sẽ rất chất lượng v&agrave; được đầu tư kỹ lưỡng rồi.<br />\r\nCho n&ecirc;n, bạn sẽ kh&ocirc;ng cần qu&aacute; lo lắng khi chọn mua Nike Air Force d&ugrave; nh&igrave;n rất thời trang nhưng lại kh&ocirc;ng hề mau hư hỏng đ&acirc;u nh&eacute;.</p>\r\n\r\n<p>Ch&uacute;ng t&ocirc;i tự h&agrave;o l&agrave; một nơi cung cấp những đ&ocirc;i gi&agrave;y từ nhiều thương hiệu lớn, đa dạng mẫu m&atilde; với chất lượng Replica &amp; Super Fake c&ugrave;ng với gi&aacute; cả phải chăng nhất tr&ecirc;n thị trường hiện nay.<br />\r\nH&atilde;y để ch&uacute;ng t&ocirc;i mang lại cho bạn một sản phẩm chất lượng nhất khi chọn mua gi&agrave;y thể thao n&oacute;i chung hoặc Nike Air Force 1 Trắng n&oacute;i ri&ecirc;ng.</p>\r\n', '31/08/2020', '2020-08-31 14:33:00', '2020-09-03 11:50:12'),
(10, '3.jpg', 'CÁCH LÀM TRẮNG ĐẾ GIÀY BỊ Ố VÀNG CHUẨN CHỈ - 5 CÁCH VỆ SINH AN TOÀN NHẤT', 'Adidas là một trong những hàng thời trang sneaker lớn nhất hiện nay của thế giới vì vậy hãng này luôn nghiên cứu và phát minh những công nghệ mới.. Năm 2014, adidas mang đến cho người dùng một trong những công nghệ tiên tiến lần đầu tiên được áp dụng tron', '<h3>C&aacute;ch 1: D&ugrave;ng kem đ&aacute;nh răng</h3>\r\n\r\n<p>Để thực hiện phương ph&aacute;p n&agrave;y bạn cần kem đ&aacute;nh răng v&agrave; một chiếc b&agrave;n chải. Kem đ&aacute;nh răng th&igrave; nh&agrave; n&agrave;o cũng c&oacute; rồi, đừng n&oacute;i l&agrave; nh&agrave; bạn kh&ocirc;ng c&oacute; nh&eacute;. B&agrave;n chải th&igrave; sử dụng b&agrave;n chải đ&aacute;nh răng l&agrave; tốt nhất v&igrave; độ lớn của n&oacute; cũng vừa bằng độ rộng của đế gi&agrave;y n&ecirc;n rất dễ ch&agrave;. Nếu kh&ocirc;ng c&oacute; c&aacute;i b&agrave;n chải đ&aacute;nh răng cũ n&agrave;o th&igrave; bạn sử dụng b&agrave;n chải b&igrave;nh thường cũng được.</p>\r\n\r\n<p><a href=\"https://bountysneakers.com/wp-content/uploads/2019/10/2.jpg\"><img alt=\"Bàn chải đánh răng và kem đánh răng, hoặc dung dịch vệ sinh giày\" src=\"https://bountysneakers.com/wp-content/uploads/2019/10/2.jpg\" style=\"height:570px; width:760px\" /></a></p>\r\n\r\n<p>B&agrave;n chải đ&aacute;nh răng v&agrave; kem đ&aacute;nh răng, hoặc dung dịch vệ sinh gi&agrave;y</p>\r\n\r\n<p><a href=\"https://bountysneakers.com/wp-content/uploads/2019/10/cach-lam-trang-de-giay-2.jpg\"><img alt=\"cach-lam-trang-de-giay-2\" src=\"https://bountysneakers.com/wp-content/uploads/2019/10/cach-lam-trang-de-giay-2.jpg\" style=\"height:366px; width:650px\" /></a></p>\r\n\r\n<p dir=\"ltr\">Dù tính t&acirc;̉y rửa của kem đánh răng kh&ocirc;ng mạnh nhưng v&acirc;̃n có th&ecirc;̉ t&acirc;̉y đ&ecirc;́ giày màu trắng khi chúng mới bị những v&ecirc;́t b&acirc;̉n đeo bám.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Sau khi làm sạch bùn đ&acirc;́t tr&ecirc;n đ&ecirc;́ giày, bạn thoa trực ti&ecirc;́p kem đánh răng l&ecirc;n đ&ecirc;́ r&ocirc;̀i dùng bàn chải đánh răng đã cũ đ&ecirc;̉ chà mạnh.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Thực hi&ecirc;̣n thao tác nhi&ecirc;̀u l&acirc;̀n cho đ&ecirc;́n khi đ&ecirc;́ giày trắng lại như lúc ban đ&acirc;̀u.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Bước cu&ocirc;́i cùng bạn xả đ&ecirc;́ giày với nước sạch r&ocirc;̀i đ&ecirc;̉ kh&ocirc; tự nhi&ecirc;n.</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>Lưu &yacute;:</strong>&nbsp;C&aacute;ch tẩy trắng n&agrave;y chỉ n&ecirc;n d&ugrave;ng cho những đ&ocirc;i gi&agrave;y bị ố mới. Với những vết ố l&acirc;u ng&agrave;y th&igrave; kem đ&aacute;nh răng sẽ kh&ocirc;ng c&oacute; t&aacute;c dụng đ&acirc;u. Bởi vậy, nếu gi&agrave;y của bạn đ&atilde; bị ố v&agrave;ng qu&aacute; 3 th&aacute;ng th&igrave; h&atilde;y lựa chọn c&aacute;ch l&agrave;m trắng đế gi&agrave;y kh&aacute;c nh&eacute;.</p>\r\n\r\n<h3>C&aacute;ch 2: D&ugrave;ng chanh tươi</h3>\r\n\r\n<p dir=\"ltr\">Kh&ocirc;ng m&acirc;́y b&acirc;́t ngờ khi chanh tươi lu&ocirc;n có mặt trong danh sách những c&aacute;ch&nbsp;<em>l&agrave;m sạch đế gi&agrave;y m&agrave;u trắng</em>. Như đ&atilde; biết, chanh chứa h&agrave;m lượng axit rất cao n&ecirc;n nếu bạn muốn l&agrave;m trắng đế gi&agrave;y, bạn c&oacute; thể sử dụng chanh tươi để đ&aacute;nh bay&nbsp; c&aacute;c vết ố v&agrave;ng.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Cách thức thực hi&ecirc;̣n v&ocirc; cùng đơn giản, bạn vắt chanh tươi đ&ecirc;̉ l&acirc;́y nước, đựng trong m&ocirc;̣t chén nhỏ.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Dùng khăn m&ecirc;̀m nhúng vào nước chanh r&ocirc;̀i chà l&ecirc;n đ&ecirc;́ giày, sau đó dùng bàn chải chà th&acirc;̣t mạnh cho đ&ecirc;́n khi đ&ecirc;́ trắng trở lại. Cách làm này áp dụng với đ&ecirc;́ giày mới bị &ocirc;́ vàng, v&ecirc;́t b&acirc;̉n cứng đ&acirc;̀u có th&ecirc;̉ sẽ khó khăn hơn.</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p><a href=\"https://bountysneakers.com/wp-content/uploads/2019/10/cach_lam_sach_de_giay_bi_o_vang_3.jpg\"><img alt=\"cach_lam_sach_de_giay_bi_o_vang_3\" src=\"https://bountysneakers.com/wp-content/uploads/2019/10/cach_lam_sach_de_giay_bi_o_vang_3.jpg\" style=\"height:266px; width:500px\" /></a></p>\r\n\r\n<h3>C&aacute;ch 3: D&ugrave;ng nước cốt chanh kết hợp baking soda l&agrave;m trắng đế gi&agrave;y</h3>\r\n\r\n<p><a href=\"https://bountysneakers.com/wp-content/uploads/2019/10/cach-lam-trang-de-giay-1.jpg\"><img alt=\"cach-lam-trang-de-giay-1\" src=\"https://bountysneakers.com/wp-content/uploads/2019/10/cach-lam-trang-de-giay-1.jpg\" style=\"height:418px; width:650px\" /></a></p>\r\n\r\n<p>Baking soda c&oacute; rất nhiều c&ocirc;ng dụng. Một trong những c&ocirc;ng dụng m&agrave; mọi người hay d&ugrave;ng baking soda l&agrave; tẩy trắng. Ch&iacute;nh v&igrave; vậy, nếu nh&agrave; bạn c&oacute; baking soda th&igrave; c&oacute; thể h&ograve;a baking soda với nước cốt chanh. Sau đ&oacute; nh&uacute;ng b&agrave;n chải đ&aacute;nh răng v&agrave;o hỗn hợp n&agrave;y rồi ch&agrave; nhẹ b&agrave;n chải l&ecirc;n phần đề gi&agrave;y. Ch&agrave; khoảng 2 &ndash; 3 lần, bạn sẽ thấy đế gi&agrave;y của bạn sạch hơn, trắng hơn so với trước.</p>\r\n\r\n<h3>C&aacute;ch 3: D&ugrave;ng nước lau đồ gỗ hoặc chất tẩy m&oacute;ng tay Acetone</h3>\r\n\r\n<p dir=\"ltr\">Trong nước lau đ&ocirc;̀ g&ocirc;̃ có chứa ch&acirc;́t giúp t&acirc;̉y rửa v&ecirc;́t b&acirc;̉n và làm đ&ecirc;́ giày sáng bóng hơn. N&ecirc;́u giày dính v&ecirc;́t &ocirc;́ l&acirc;u ngày, bạn hoàn toàn có th&ecirc;̉ sử dụng dung dịch này đ&ecirc;̉ giặt rửa.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Sau khi loại bùn đ&acirc;́t khỏi đ&ecirc;́ giày, bạn dùng m&ocirc;̣t chi&ecirc;́c khăn m&ecirc;̀m nhúng vào nước lau đ&ocirc;̀ g&ocirc;̃ r&ocirc;̀i chà l&ecirc;n ph&acirc;̀n đ&ecirc;́ giày, nh&acirc;́t là ph&acirc;̀n đ&ecirc;́ bị &ocirc;́ vàng.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Ti&ecirc;́p tục chà cho đ&ecirc;́n khi đ&ecirc;́ giày trắng trở lại.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Dùng m&ocirc;̣t chi&ecirc;́c khăn sạch khác đ&ecirc;̉ lau lại ph&acirc;̀n đ&ecirc;́ r&ocirc;̀i đặt giày ở nơi thoáng gió đ&ecirc;̉ giày kh&ocirc; là bạn có th&ecirc;̉ sử dụng được.</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p><a href=\"https://bountysneakers.com/wp-content/uploads/2019/10/giat_giay_bang_nuoc_tay_rua_mong_tay.jpg\"><img alt=\"giat_giay_bang_nuoc_tay_rua_mong_tay\" src=\"https://bountysneakers.com/wp-content/uploads/2019/10/giat_giay_bang_nuoc_tay_rua_mong_tay.jpg\" style=\"height:450px; width:800px\" /></a></p>\r\n\r\n<h3>C&aacute;ch 4: D&ugrave;ng dấm ăn</h3>\r\n\r\n<p dir=\"ltr\">D&acirc;́m trắng cũng là nguy&ecirc;n li&ecirc;̣u quen thu&ocirc;̣c có mặt ngay trong gian b&ecirc;́p m&agrave; bạn c&oacute; thể d&ugrave;ng để l&agrave;m sạch đế gi&agrave;y cực kỳ hiệu quả.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Bạn sử dụng khăn m&ecirc;̀m th&acirc;́m d&acirc;́m vào đ&ecirc;́ giày, dùng bàn chải đánh răng l&ocirc;ng m&ecirc;̀m chà l&ecirc;n đ&ecirc;́, thao tác mạnh với đ&ecirc;́ cao su, nhẹ nhàng với đ&ecirc;́ nhựa.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Sau khi làm sạch đ&ecirc;́ giày bằng d&acirc;́m, bạn giặt lại giày bằng b&ocirc;̣t giặt có tính t&acirc;̉y rửa nhẹ, phơi giày ở nơi thoáng mát đ&ecirc;̉ giày kh&ocirc; tự nhi&ecirc;n.</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p><a href=\"https://bountysneakers.com/wp-content/uploads/2019/10/cach_giat_giay_bi_moc_bang_giam_an.jpg\"><img alt=\"cach_giat_giay_bi_moc_bang_giam_an\" src=\"https://bountysneakers.com/wp-content/uploads/2019/10/cach_giat_giay_bi_moc_bang_giam_an.jpg\" style=\"height:364px; width:600px\" /></a>C&aacute;ch 5: D&ugrave;ng dầu gội v&agrave; nước n&oacute;ng</p>\r\n\r\n<ul dir=\"ltr\">\r\n	<li>Nhi&ecirc;̀u bạn còn bán tín bán nghi vì kh&ocirc;ng nghĩ rằng d&acirc;̀u g&ocirc;̣i có th&ecirc;̉&nbsp;<em>làm sạch đ&ecirc;́ giày màu trắng</em>. Nhưng chỉ khi áp dụng bạn mới thực sự th&acirc;́y hi&ecirc;̣u quả của phương pháp này.</li>\r\n	<li>Bạn cho m&ocirc;̣t chút d&acirc;̀u g&ocirc;̣i vào nước nóng, tạo bọt r&ocirc;̀i dùng khăn th&acirc;́m dung dịch l&ecirc;n giày, chà mạnh bằng chính chi&ecirc;́c khăn đó hoặc dùng m&ocirc;̣t chi&ecirc;́c bàn chải khác.</li>\r\n	<li>Sau khi chà sạch đ&ecirc;́, xả giày với nước sạch cho đ&ecirc;́n khi đ&ecirc;́ h&ecirc;́t nhờn và đem phơi giày ở nơi thoáng gió.</li>\r\n</ul>\r\n\r\n<p><a href=\"https://bountysneakers.com/wp-content/uploads/2019/10/lam_sach_de_giay_trang_bang_dau_goi.jpg\"><img alt=\"lam_sach_de_giay_trang_bang_dau_goi\" src=\"https://bountysneakers.com/wp-content/uploads/2019/10/lam_sach_de_giay_trang_bang_dau_goi.jpg\" style=\"height:576px; width:960px\" /></a></p>\r\n\r\n<p>Tr&ecirc;n đ&acirc;y l&agrave; c&aacute;c&nbsp;<a href=\"https://bountysneakers.com/huong-dan-cach-lam-trang-de-giay-bi-o-vang-chuan-chi-5-cach-ve-sinh/\"><strong>c&aacute;ch&nbsp;</strong></a><strong><a href=\"https://bountysneakers.com/huong-dan-cach-lam-trang-de-giay-bi-o-vang-chuan-chi-5-cach-ve-sinh/\">l&agrave;m trắng đế gi&agrave;y</a>&nbsp;bị ố v&agrave;ng</strong>&nbsp;kh&aacute; hữu hiệu m&agrave; kh&ocirc;ng hề g&acirc;y độc hại.</p>\r\n\r\n<p>C&aacute;ch 5: D&ugrave;ng thuốc tẩy</p>\r\n\r\n<p>Nếu như vết ố bẩn tr&ecirc;n đế gi&agrave;y trở n&ecirc;n qu&aacute; kh&oacute; chịu v&agrave; cứng đầu d&ugrave; bạn đ&atilde; thử một trong những c&aacute;ch tr&ecirc;n cũng kh&ocirc;ng t&agrave;i n&agrave;o tẩy sạch được. L&uacute;c n&agrave;y c&oacute; lẽ bạn cần một sức mạnh thật sự, đ&oacute; ch&iacute;nh l&agrave; thuốc tẩy. C&aacute;c loại thuốc tẩy trắng được b&aacute;n nhiều ở c&aacute;c tiệm tạp h&oacute;a, bạn ho&agrave;n to&agrave;n c&oacute; thể dễ d&agrave;ng mua được.</p>\r\n\r\n<p>Đầu ti&ecirc;n bạn pha thuốc tẩy v&agrave;o một x&ocirc; nước, d&ugrave;ng b&agrave;n chải đ&aacute;nh răng nh&uacute;ng v&agrave;o rồi ch&agrave; l&ecirc;n khu vực đế gi&agrave;y bị ố v&agrave;ng. Ch&agrave; xong giữ nguy&ecirc;n th&ecirc;m 15 ph&uacute;t để thuốc tẩy ph&aacute;t huy t&aacute;c dụng. Cuối c&ugrave;ng lau sạch lại l&agrave; đế gi&agrave;y trở n&ecirc;n sạch b&oacute;ng trở lại.</p>\r\n\r\n<p><a href=\"https://bountysneakers.com/wp-content/uploads/2019/10/cach-lam-sach-de-giay-bi-o-vang-1.jpg\"><img alt=\"cach-lam-sach-de-giay-bi-o-vang-1\" src=\"https://bountysneakers.com/wp-content/uploads/2019/10/cach-lam-sach-de-giay-bi-o-vang-1.jpg\" style=\"height:281px; width:500px\" /></a></p>\r\n\r\n<p><strong>Lưu &yacute;</strong>&nbsp;đối với c&aacute;c loại gi&agrave;y vải m&agrave;u kh&aacute;c m&agrave;u trắng, bạn cần cẩn thận tr&aacute;nh thuốc tẩy d&iacute;nh v&agrave;o l&agrave;m mất m&agrave;u khiến cho chiếc gi&agrave;y trở n&ecirc;n xấu x&iacute;, mất thẩm mỹ.</p>\r\n\r\n<h2 dir=\"ltr\">Lưu ý khi l&agrave;m sạch đế giày màu trắng</h2>\r\n\r\n<p dir=\"ltr\">C&ocirc;ng thức&nbsp;làm sạch đ&ecirc;́ giày màu trắng&nbsp;thì đơn giản như v&acirc;̣y nhưng n&ecirc;́u kh&ocirc;ng thực hi&ecirc;̣n c&acirc;̉n th&acirc;̣n, chúng ta v&acirc;̃n có th&ecirc;̉ phạm sai l&acirc;̀m khi&ecirc;́n đ&ocirc;i giày càng ngày càng bị b&acirc;̉n th&ecirc;m đ&acirc;́y. Dưới đ&acirc;y là m&ocirc;̣t s&ocirc;́ lưu ý quan trọng khi bạn&nbsp;<em>làm sạch đ&ecirc;́ giày trắng</em>.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Ở bước giặt với xà phòng, bạn phải giặt th&acirc;̣t sạch, đảm bảo kh&ocirc;ng còn cặn xà phòng dính tr&ecirc;n giày bởi sau khi phơi nắng, chính v&ecirc;́t cặn này sẽ tạo thành v&ecirc;̣t &ocirc;́ vàng tr&ecirc;n giày.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">N&ecirc;́u đ&ecirc;́ giày còn nhờn vì chưa được xả sạch, hãy ng&acirc;m đ&ecirc;́ trong nước 5 phút r&ocirc;̀i đem phơi.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">N&ecirc;n bọc ph&acirc;̀n th&acirc;n giày bằng m&ocirc;̣t túi nilon đ&ecirc;̉ khi làm sạch đ&ecirc;́ giày, ph&acirc;̀n th&acirc;n kh&ocirc;ng bị ảnh hưởng.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Kh&ocirc;ng phơi giày ở nơi có nắng to vì đ&ecirc;́ sẽ d&ecirc;̃ bị nhũn m&ecirc;̀m, nh&acirc;́t là đ&ecirc;́ nhựa.</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\">N&ecirc;́u giày chỉ bị b&acirc;̉n ph&acirc;̀n đ&ecirc;́, chúng ta kh&ocirc;ng nh&acirc;́t thi&ecirc;́t phải đem cả đ&ocirc;i giày đi giặt nữa bởi đã có những c&ocirc;ng thức chuy&ecirc;n làm sạch đ&ecirc;́ giày r&ocirc;̀i. Những c&ocirc;ng thức&nbsp;l&agrave;m sạch đế gi&agrave;y trắng&nbsp;d&ecirc;̃ thực hi&ecirc;̣n tr&ecirc;n chắc chắn sẽ giúp bạn ti&ecirc;́t ki&ecirc;̣m rất nhiều thời gian v&agrave; c&ocirc;ng sức đấy!</p>\r\n\r\n<p>&nbsp;</p>\r\n', '31/08/2020', '2020-08-31 14:39:29', '2020-09-03 11:53:07'),
(11, '4.jpg', 'VANS X DEPOP CHAMPION COMMUNITY VÀ SỰ SÁNG TẠO VỚI LẦN HỢP TÁC ĐẦU TIÊN', 'Mới bắt đầu ra mắt những hình ảnh mới nhất thuộc bộ sưu tập với Stray Rats và The Simpsons, Vans đã rục rịch chuẩn bị cho những sản phẩm mới nhất của mình. Vans quyết định đi khắp nơi để khai thác thị trường và Depop có trụ sở tại Vương quốc Anh là nơi dừ', '<p>Một bộ sưu tập s&aacute;u sản phẩm được thiết kế bởi bốn nh&agrave; s&aacute;ng tạo đầy cảm hứng từ cộng đồng của Depop.&nbsp;<strong>Jessica Luostarinen</strong>&nbsp;của London đ&atilde; thiết kế ba trong số s&aacute;u sản phẩm trong bộ sưu tập n&agrave;y, với Super ComfyCush Era l&agrave; t&acirc;m điểm của m&agrave; c&ocirc; quan t&acirc;m nhất.</p>\r\n\r\n<p><img src=\"https://bizweb.dktcdn.net/100/140/774/files/vans-x-depop-champion-community-va-su-sang-tao-voi-lan-hop-tac-dau-tien-2.jpg?v=1598947776787\" /></p>\r\n\r\n<p>Bắt nguồn từ sở trường của c&ocirc; ấy l&agrave; minh họa biểu cảm, h&igrave;nh ảnh khu&ocirc;n mặt sống động của thể thao cổ điển: platformed-<strong>Vans</strong>&nbsp;được ph&aacute;c họa tr&ecirc;n nền m&agrave;u đen. Nắm bắt được mong muốn của Luostarinen l&agrave; l&agrave;m cho người mặc cảm thấy tự tin, đồ họa h&igrave;nh miệng cười ở giữa c&oacute; k&iacute;ch thước kh&aacute;c nhau như thể hiện rất đ&uacute;ng &yacute; đồ cũng như h&agrave;m &yacute; được gửi gắm. &Aacute;o ph&ocirc;ng d&agrave;i tay liền kề v&agrave; &aacute;o hoodie cũng theo đ&oacute; m&agrave; ph&aacute;t triển, thể hiện n&eacute;t đẹp ri&ecirc;ng trong từng sản phẩm.</p>\r\n\r\n<p><img src=\"https://bizweb.dktcdn.net/100/140/774/files/vans-x-depop-champion-community-va-su-sang-tao-voi-lan-hop-tac-dau-tien-3.jpg?v=1598947787244\" /></p>\r\n\r\n<p>Nghệ sĩ&nbsp;<strong>Lei-Mai LeMaow</strong>&nbsp;ở Manchester cũng l&agrave;m việc tr&ecirc;n kiểu d&aacute;ng&nbsp;<strong>Vans</strong>&nbsp;Era, kh&ocirc;ng thể bỏ qua chất lượng tuyệt vời m&agrave; c&ocirc;ng cụ Super ComfyCush mang lại. Thay v&agrave;o đ&oacute;, LeMaow l&agrave;m việc tr&ecirc;n h&igrave;nh b&oacute;ng năm 1976 được sửa đổi một ch&uacute;t, th&ecirc;m nh&acirc;n vật Gary đặc trưng của c&ocirc; v&agrave;o đế vải của gi&agrave;y. Lớp da lộn tr&ecirc;n b&agrave;n ch&acirc;n trước, g&oacute;t ch&acirc;n v&agrave; lưỡi tạo n&ecirc;n một m&agrave;u đỏ th&iacute;ch hợp.</p>\r\n\r\n<p><img src=\"https://bizweb.dktcdn.net/100/140/774/files/vans-x-depop-champion-community-va-su-sang-tao-voi-lan-hop-tac-dau-tien-4.jpg?v=1598947797614\" /></p>\r\n\r\n<p><strong>Connor Williams</strong>&nbsp;v&agrave;&nbsp;<strong>Yuki Haze</strong>&nbsp;trang bị cho Old Skool v&agrave; Super ComfyCush Slip-On tương ứng với cảm hứng từ trải nghiệm chụp ảnh v&agrave; cắt d&aacute;n của họ.</p>\r\n\r\n<p>Tất cả những sản phẩm từ bộ sưu tập n&agrave;y vẫn chưa được phổ biến rộng r&atilde;i ở c&aacute;c cửa h&agrave;ng ch&iacute;nh thức. H&atilde;y c&ugrave;ng&nbsp;<strong>VANSVIETNAM</strong>&nbsp;theo d&otilde;i những th&ocirc;ng tin mới nhất từ ch&iacute;nh bộ sưu tập độc đ&aacute;o n&agrave;y c&aacute;c bạn nh&eacute;!</p>\r\n\r\n<p><img src=\"https://bizweb.dktcdn.net/100/140/774/files/vans-x-depop-champion-community-va-su-sang-tao-voi-lan-hop-tac-dau-tien-5.jpg?v=1598947807735\" /></p>\r\n\r\n<p><img src=\"https://bizweb.dktcdn.net/100/140/774/files/vans-x-depop-champion-community-va-su-sang-tao-voi-lan-hop-tac-dau-tien-6.jpg?v=1598947816148\" /></p>\r\n\r\n<p><img src=\"https://bizweb.dktcdn.net/100/140/774/files/vans-x-depop-champion-community-va-su-sang-tao-voi-lan-hop-tac-dau-tien-7.jpg?v=1598947823664\" /></p>\r\n', '05/09/2020', '2020-09-05 08:13:18', '2020-09-05 08:13:18'),
(12, '5.jpg', 'VANS X SIMPSONS CÙNG NHÌN LẠI CHẶNG ĐƯỜNG DÀI 30 NĂM CỦA SERIES PHIM HOẠT HÌNH ĐÌNH ĐÁM', 'The Simpsons (Gia đình Simpson) là một chương trình truyền hình hài kịch tình huống hoạt họa nổi tiếng của Hoa Kỳ, một trong những chương trình được chiếu lâu nhất, bắt đầu từ ngày 17 tháng 12 năm 1989 trên hệ thống truyền hình Fox Network cho đến giờ. Đế', '<p>Mới đ&acirc;y Vans đ&atilde; hợp t&aacute;c dự &aacute;n với bộ phim hoạt h&igrave;nh mang t&iacute;nh biểu tượng &quot;The Simpson&quot;. Lần hợp t&aacute;c n&agrave;y bao gồm sản phẩm về gi&agrave;y, &aacute;o v&agrave; phụ kiện. Điểm chung của c&aacute;c sản phẩm tr&ecirc;n l&agrave; đều c&oacute; sự xuất hiện của 5 th&agrave;nh vi&ecirc;n ch&iacute;nh trong gia đ&igrave;nh The Simpson, c&aacute;c nh&acirc;n vật phụ v&agrave; cả những cảnh phim kinh điển.</p>\r\n\r\n<p>Nổi bật trong những mẫu gi&agrave;y xuất hiện trong bộ sưu tập n&agrave;y mang t&ecirc;n &quot;El Barto&quot; - mẫu gi&agrave;y dựa tr&ecirc;n Chukka Pro. Lisa Simpson cũng kh&ocirc;ng k&eacute;m cạnh khi c&oacute; mặt tr&ecirc;n hai mẫu Sk8-Hi v&agrave; Old Skool. Thiết kế m&agrave;u nổi khối tinh tế tr&ecirc;n SliP-On Pro v&agrave; Slide-On&nbsp; được lấy cảm hứng từ những chiếc b&aacute;nh donut ưa th&iacute;ch của Homer Simpson.</p>\r\n\r\n<p>Những sản phẩm &aacute;o từ bộ sưu tập n&agrave;y gồm chiếc T-shirt in h&igrave;nh cả gia đ&igrave;nh nh&agrave; Simpson, ngo&agrave;i ra ch&uacute;ng ta c&oacute; c&aacute;c phụ kiện như&nbsp; t&uacute;i ch&eacute;o, balo trượt v&aacute;n, mũ lưỡi trai.</p>\r\n\r\n<p>Tất cả những sản phẩm tr&ecirc;n sẽ c&oacute; tại c&aacute;c cửa h&agrave;ng của Vans v&agrave;o ng&agrave;y 7 th&aacute;ng T&aacute;m tới.</p>\r\n\r\n<p><img src=\"https://bizweb.dktcdn.net/100/140/774/files/vans-x-simpsons-1.jpg?v=1598948502120\" /></p>\r\n\r\n<p>Tuy l&agrave; một chương tr&igrave;nh hoạt họa, chương tr&igrave;nh n&agrave;y&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Ch%C3%A2m_bi%E1%BA%BFm?aelang=vi\" title=\"Châm biếm\">ch&acirc;m biếm</a>&nbsp;nhiều kh&iacute;a cạnh của cuộc đời, đặc biệt l&agrave; lối sống của tầng lớp lao động v&agrave; trung lưu tại Mỹ, văn h&oacute;a Mỹ v&agrave; x&atilde; hội Mỹ n&oacute;i chung. N&oacute; đ&atilde; được chiếu tại nhiều&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Qu%E1%BB%91c_gia?aelang=vi\" title=\"Quốc gia\">quốc gia</a>&nbsp;tr&ecirc;n thế giới trong nhiều&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Ng%C3%B4n_ng%E1%BB%AF?aelang=vi\" title=\"Ngôn ngữ\">ng&ocirc;n ngữ</a>, v&agrave; được xem l&agrave; một trong những sản phẩm&nbsp;<a href=\"https://vi.wikipedia.org/wiki/V%C4%83n_h%C3%B3a_ph%E1%BB%95_th%C3%B4ng?aelang=vi\" title=\"Văn hóa phổ thông\">văn h&oacute;a đại ch&uacute;ng</a>&nbsp;xuất khẩu quan trọng v&agrave; c&oacute; nhiều ảnh hưởng nhất của Hoa Kỳ.</p>\r\n\r\n<p><img src=\"https://bizweb.dktcdn.net/100/140/774/files/vans-x-simpsons-2.jpg?v=1598948515119\" /></p>\r\n\r\n<p>V&agrave; với sự nổi tiếng cũng như những h&igrave;nh ảnh cực k&igrave; bắt mắt dễ nh&igrave;n,&nbsp;<strong>Vans</strong>&nbsp;kh&ocirc;ng thể dễ d&agrave;ng bỏ qua việc hợp t&aacute;c tạo n&ecirc;n những sản phẩm mang đậm phong c&aacute;ch&nbsp;<strong>Simpsons</strong>&nbsp;với&nbsp;<strong>VANS</strong>&nbsp;<strong>X</strong>&nbsp;<strong>SIMPSONS</strong>.</p>\r\n\r\n<p><img src=\"https://bizweb.dktcdn.net/100/140/774/files/vans-x-simpsons-3.jpg?v=1598948525984\" /></p>\r\n\r\n<p>C&oacute; lẽ từ đầu năm 2020 đến nay, đ&acirc;y hẳn l&agrave; một sự hợp t&aacute;c mang t&iacute;nh đột ph&aacute; v&agrave; v&ocirc; c&ugrave;ng được mong chờ. Với những sản phẩm v&ocirc; c&ugrave;ng chất lượng v&agrave; mang t&iacute;nh biểu tượng từ&nbsp;<strong>Simpsons&nbsp;</strong>cũng như&nbsp;<strong>Vans</strong>, bộ sưu tập nhanh ch&oacute;ng được quan t&acirc;m về những h&igrave;nh ảnh đầu ti&ecirc;n được ra mắt. Tất cả những nh&acirc;n vật gạo cội của&nbsp;<strong>The Simpsons&nbsp;</strong>được ph&aacute;c họa r&otilde; tr&ecirc;n từng sản phẩm với nhiều mức độ. C&oacute; thể bao tr&ugrave;m hết cả sản phẩm, c&oacute; thể xuất hiện ri&ecirc;ng lẻ t&ugrave;y theo. B&ecirc;n cạnh đ&oacute; m&agrave;u sắc cũng l&agrave; vấn đề được quan t&acirc;m bậc nhất khi để ph&aacute;c họa được những n&eacute;t đặc trưng của bộ phim n&agrave;y,&nbsp;<strong>Vans</strong>&nbsp;đ&atilde; c&acirc;n nhắc mang đến những gam m&agrave;u trẻ trung mới lạ v&agrave; kh&ocirc;ng k&eacute;m phần vui tươi.</p>\r\n\r\n<p><img src=\"https://bizweb.dktcdn.net/100/140/774/files/vans-x-simpsons-4.jpg?v=1598948555116\" /></p>\r\n\r\n<p>Bộ sưu tập sẽ nhanh ch&oacute;ng được b&aacute;n ở c&aacute;c cửa h&agrave;ng trực thuộc&nbsp;<strong>VANS</strong>&hellip;</p>\r\n\r\n<p><img src=\"https://bizweb.dktcdn.net/100/140/774/files/vans-x-simpsons-5.jpg?v=1598948566985\" /></p>\r\n\r\n<p><strong>VANS X SIMPSONS</strong></p>\r\n\r\n<p><strong><img src=\"https://bizweb.dktcdn.net/100/140/774/files/vans-x-simpsons-6.jpg?v=1598948578576\" /></strong></p>\r\n\r\n<p><strong><img src=\"https://bizweb.dktcdn.net/100/140/774/files/vans-x-simpsons-7.jpg?v=1598948588779\" /></strong></p>\r\n', '05/09/2020', '2020-09-05 08:23:23', '2020-09-05 08:23:23'),
(13, '6.jpg', 'LÀM SAO ĐỂ PHÂN BIỆT GIÀY NIKE THẬT VÀ GIÀY NIKE GIẢ CHUẨN NHẤT ?', 'Tại sao giày Nike nhập khẩu Mỹ mà lại ghi tem là Made in China hay Made in Vietnam?\r\nĐây là câu hỏi rất nhiều khách hàng thắc mắc, thậm chí còn phủ nhận hoàn toàn rằng đó là giày không “chuẩn” vì tem trên những đôi giày Nike chính hãng có ghi hãng chữ “ma', '<p>Thứ nhất, đ&uacute;ng l&agrave; trụ sở ch&iacute;nh của Nike được đặt tại Mỹ, tuy nhi&ecirc;n điều n&agrave;y kh&ocirc;ng c&oacute; nghĩa l&agrave; nh&agrave; m&aacute;y sản xuất của Nike cũng ở Mỹ v&agrave; c&aacute;c đ&ocirc;i gi&agrave;y Nike ch&iacute;nh h&atilde;ng phải l&agrave; Made in the USA. Hiện nay Nike đặt nh&agrave; m&aacute;y của m&igrave;nh tại c&aacute;c nước Việt Nam, Trung Quốc, Indonesia v&agrave; Mexico. Nguy&ecirc;n nh&acirc;n v&ocirc; c&ugrave;ng đơn giản, ở những nước n&agrave;y th&igrave; gi&aacute; thu&ecirc; nh&acirc;n c&ocirc;ng rẻ hơn v&agrave; nguồn nh&acirc;n lực cũng dồi d&agrave;o hơn. Đặc biệt, đến nay th&igrave; 80% sản lượng gi&agrave;y sản xuất được của Nike l&agrave; từ Việt Nam. Vậy th&igrave; chắc chắn những đ&ocirc;i gi&agrave;y đ&oacute; phải l&agrave; &ldquo;Made in Vietnam/China/Indonesia&rdquo;.<em>Vậy n&ecirc;n c&aacute;c bạn n&ecirc;n từ bỏ &yacute; định mua đ&ocirc;i gi&agrave;y phải made in USA nha. v&igrave; qua b&ecirc;n đ&oacute; cũng made in việt nam &agrave;.</em></p>\r\n\r\n<p>Thứ hai l&agrave;, c&aacute;c nh&agrave; m&aacute;y n&agrave;y sản xuất theo quy tr&igrave;nh do Nike đưa ra, vật liệu được sử dụng cũng do Nike cung cấp v&agrave; tất nhi&ecirc;n c&aacute;c nh&acirc;n c&ocirc;ng chỉ cần l&agrave;m theo những g&igrave; theo y&ecirc;u cầu của h&atilde;ng, chất liệu sản phẩm được l&agrave;m ra cũng qua c&aacute;c khẩu kiểm định v&agrave; đ&aacute;nh gi&aacute; chất lượng theo chỉ ti&ecirc;u của h&atilde;ng trước khi được ph&acirc;n phối ra thị trường v&agrave; đưa đến c&aacute;c cửa h&agrave;ng ph&acirc;n phối để người ti&ecirc;u d&ugrave;ng lựa chọn, n&ecirc;n mọi người c&oacute; thể ho&agrave;n to&agrave;n y&ecirc;n t&acirc;m khi sử dụng những đ&ocirc;i gi&agrave;y n&agrave;y.</p>\r\n\r\n<p><strong>C&aacute;ch ph&acirc;n biệt gi&agrave;y nike thật giả, gi&agrave;y nike ch&iacute;nh h&atilde;ng v&agrave; h&agrave;ng nh&aacute;i</strong></p>\r\n\r\n<p><strong><em>&ndash;&nbsp;&nbsp; &nbsp;Ph&acirc;n biệt qua Tem</em></strong></p>\r\n\r\n<p><strong><em>&ndash;&nbsp;&nbsp; &nbsp;Ph&acirc;n biệt qua chất liệu v&agrave; chất lượng gia c&ocirc;ng</em></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>1.&nbsp;<strong><em>Ph&acirc;n biệt qua Tem</em></strong></p>\r\n\r\n<p>Tem gi&agrave;y được tạo ra với mục đ&iacute;ch cung cấp th&ocirc;ng tin, đặc điểm của gi&agrave;y như k&iacute;ch cỡ, m&agrave;u sắc, thời gian sản xuất, nơi sản xuất nhằm nhận biết v&agrave; bảo vệ sản phẩm của m&igrave;nh trước những mặt h&agrave;ng nh&aacute;i, k&eacute;m chất lượng.</p>\r\n\r\n<p><a href=\"http://s1.img.yan.vn/YanNews/2167221/201603/20160324-025508-2_520x408.jpg\"><img alt=\" Hãy chú ý tem giày trước tiên nếu muốn phân biệt giày thật và giả. (Ảnh: etasi.vn)\" src=\"https://s1.img.yan.vn/YanNews/2167221/201603/20160324-025508-2_520x408.jpg\" title=\" Hãy chú ý tem giày trước tiên nếu muốn phân biệt giày thật và giả. (Ảnh: etasi.vn)\" /></a><br />\r\nH&atilde;y ch&uacute; &yacute; tem gi&agrave;y trước ti&ecirc;n nếu muốn ph&acirc;n biệt gi&agrave;y thật v&agrave; giả.</p>\r\n\r\n<p>Tem gi&agrave;y Nike thường được &eacute;p nhiệt hoặc may tr&ecirc;n lưỡi g&agrave;, m&aacute; trong hoặc t&ecirc;n tấm l&oacute;t (với một số d&ograve;ng như Flyknit Free Run) của gi&agrave;y. Tem ch&iacute;nh h&atilde;ng sẽ c&oacute; những đặc điểm sau:</p>\r\n\r\n<p><strong>&ndash;&nbsp;</strong>Bề mặt tem b&oacute;ng mịn, c&oacute; độ co gi&atilde;n nhẹ.</p>\r\n\r\n<p><strong>&ndash;&nbsp;</strong>M&atilde; sản phẩm (Check Code): D&atilde;y số được khoanh tr&ograve;n ch&iacute;nh l&agrave; m&atilde; k&yacute; hiệu mẫu v&agrave; m&agrave;u của gi&agrave;y. Để kiểm tra gi&agrave;y thật hay giả bạn chỉ cần g&otilde; d&ograve;ng m&atilde; n&agrave;y k&egrave;m theo chữ &ldquo;<em>Nike</em>&rdquo; tr&ecirc;n trang t&igrave;m kiếm rồi chọn phần t&igrave;m kiếm h&igrave;nh ảnh.&nbsp;(v&iacute; dụ: &ldquo;<a href=\"https://www.google.com.vn/webhp?sourceid=chrome-instant&amp;ion=1&amp;espv=2&amp;ie=UTF-8#q=631331-601+NIKE\"><strong>631331-601 NIKE</strong></a>&rdquo; th&igrave; kết quả sẽ hiện ra l&agrave; đ&ocirc;i gi&agrave;y NIKE AIR MAX 2014 GS m&agrave;u hồng)</p>\r\n\r\n<p><img alt=\" Tuy nhiên cũng sẽ có trường hợp bạn không tra ra mã. Đừng vội hoảng hốt, vì đây có thể là những đôi giày mẫu (sample) chưa được ra mắt trên thị trường. (Ảnh: etasi.vn)\" src=\"https://s1.img.yan.vn/YanNews/2167221/201603/20160324-030808-3_520x408.jpg\" /><br />\r\nTuy nhi&ecirc;n cũng sẽ c&oacute; trường hợp bạn kh&ocirc;ng tra ra m&atilde;. Đừng vội hoảng hốt, v&igrave; đ&acirc;y c&oacute; thể l&agrave; những đ&ocirc;i gi&agrave;y mẫu (sample) chưa được ra mắt tr&ecirc;n thị trường</p>\r\n\r\n<p>&ndash; Kiểm tra ph&ocirc;ng chữ:<br />\r\n<a href=\"http://s1.img.yan.vn/YanNews/2167221/201603/20160324-030824-4_520x263.jpg\"><img alt=\" Chữ in đậm màu, sắc nét, có khoảng cách và chiều cao đều nhau. Còn giày giả thường sẽ in chữ lem luốc và phông chữ cũng không thống nhất. (Ảnh: etasi.vn)\" src=\"https://s1.img.yan.vn/YanNews/2167221/201603/20160324-030824-4_520x263.jpg\" title=\" Chữ in đậm màu, sắc nét, có khoảng cách và chiều cao đều nhau. Còn giày giả thường sẽ in chữ lem luốc và phông chữ cũng không thống nhất. (Ảnh: etasi.vn)\" /></a><br />\r\nChữ in đậm m&agrave;u, sắc n&eacute;t, c&oacute; khoảng c&aacute;ch v&agrave; chiều cao đều nhau. C&ograve;n gi&agrave;y giả thường sẽ in chữ lem luốc v&agrave; ph&ocirc;ng chữ cũng kh&ocirc;ng thống nhất.</p>\r\n\r\n<p><br />\r\nĐặc biệt, c&aacute;c chữ &ldquo;<em>e</em>&rdquo; trong d&ograve;ng &ldquo;<em>nikebetterworld.com</em>&rdquo; sẽ c&oacute; phần đu&ocirc;i lu&ocirc;n được vuốt nhọn.</p>\r\n\r\n<p>Đối với tem &eacute;p nhiệt sẽ c&oacute; độ phồng nhất định do c&oacute; kh&ocirc;ng kh&iacute; b&ecirc;n trong, viền tem được gia nhiệt chảy n&ecirc;n b&aacute;m d&iacute;nh đều v&agrave;o bề mặt chất liệu gi&agrave;y.</p>\r\n\r\n<p>.</p>\r\n\r\n<p><em><strong><strong>2. Ph&acirc;n biệt gi&agrave;y NIKE ch&iacute;nh h&atilde;ng qua chất liệu v&agrave; chất lượng gia c&ocirc;ng</strong></strong></em></p>\r\n\r\n<p>&ndash; C&aacute;c sản phầm Nike h&agrave;ng Fake được l&agrave;m bằng c&aacute;c chất liệu k&eacute;m hơn so với h&agrave;ng ch&iacute;nh h&atilde;ng, đặc biệt l&agrave; phần đế gi&agrave;y.&nbsp;</p>\r\n\r\n<p>+ C&aacute;c đế gi&agrave;y ch&iacute;nh h&atilde;ng mềm v&agrave; &ecirc;m hơn tuy nhi&ecirc;n form vẫn rất chắc chắn v&agrave; kh&ocirc;ng bị mất form khi mang trong khoảng thời gian d&agrave;i</p>\r\n\r\n<p>+ Phần th&acirc;n tr&ecirc;n của c&aacute;c mẫu gi&agrave;y ch&iacute;nh h&atilde;ng rất tinh tế v&agrave; tỉ mỉ trong từng chi tiết, đặc biệt l&agrave; với nhiều mẫu gi&agrave;y Nike c&oacute; ph&acirc;n th&acirc;n c&oacute; kết cấu phức tạp như Nike Flyknit.</p>\r\n\r\n<p>&ndash; Về chất lượng gia c&ocirc;ng th&igrave; với sản phẩm gi&agrave;y Nike ch&iacute;nh h&atilde;ng, chất lượng gia c&ocirc;ng rất tinh xảo, đặc biệt ở c&aacute;c đường may dưới l&oacute;t gi&agrave;y, dưới lưỡi g&agrave; v&agrave; tại c&aacute;c đường keo, rất gọn g&agrave;ng v&agrave; sạch.</p>\r\n', '05/09/2020', '2020-09-05 08:26:14', '2020-09-05 08:27:58');
INSERT INTO `tbl_blog` (`id_post`, `post_avatar`, `post_name`, `description`, `content`, `dateTime`, `created`, `updated`) VALUES
(14, '7.jpg', 'TOP 6 MẪU GIÀY ADIDAS MỚI NHẤT NĂM 2020 MÀ DÂN CHƠI KHÔNG THỂ BỎ QUA', 'Nếu là một tín đồ của Adidas chắc chắn bạn không thể bỏ lỡ các mẫu giày Adidas mới nhất của năm nay. Không chỉ sở hữu chất lượng cực xịn mà còn có kiểu dáng thiết kế vượt trội hơn hẳn.\r\nCùng tham khảo ngay top 6 các mẫu giày Adidas mới nhất đang “làm mưa ', '<h3><strong>1. Adidas Ultra Boost</strong></h3>\r\n\r\n<p><strong>Gi&agrave;y Thể Thao Adidas Ultra Boost&nbsp;</strong>đến từ thương hiệu Adidas nổi tiếng của Đức.&nbsp;<strong>C&aacute;c mẫu gi&agrave;y Adidas Ultra Boost</strong>được thiết kế mang n&eacute;t thể thao khỏe khoắn, năng động cho bạn trải nghiệm tuyệt vời nhất khi đi l&ecirc;n ch&acirc;n.</p>\r\n\r\n<p>Trọng lượng của đ&ocirc;i gi&agrave;y nhẹ c&oacute; khả năng tạo lực đẩy n&agrave;y c&oacute; phần th&acirc;n tr&ecirc;n l&agrave;m từ vải dệt kh&ocirc;ng đường may, được tạo ra với c&ocirc;ng nghệ dệt chuyển động tạo độ co gi&atilde;n m&agrave; vẫn cố định ch&acirc;n bạn trong khi chạy.</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000282067/file/fullsizeoutput_710-1024x679_de1e062087f04450987c5614ae424755_grande.jpeg\" /></p>\r\n\r\n<p><strong>Gi&agrave;y thể thao Adidas</strong>&nbsp;Ultra Boost c&oacute; thiết kế &ocirc;m s&aacute;t ch&acirc;n nhằm giảm &aacute;p lực ở c&aacute;c điểm tiếp x&uacute;c. C&ocirc;ng nghệ adidas Primeknit 360 Th&acirc;n tr&ecirc;n được l&agrave;m bằng vải dệt adidas Primeknit với độ &ocirc;m được thiết kế đặc biệt để n&acirc;ng đỡ c&oacute; định hướng v&agrave; cải thiện chuyển động nguồn năng lượng bất tận.</p>\r\n\r\n<p>Boost hiện l&agrave; c&ocirc;ng nghệ đệm c&oacute; độ bật nảy tốt nhất của adidas, cho độ chuyển hồi năng lượng cao đến kh&oacute; tin: C&agrave;ng d&ugrave;ng nhiều sức, bạn c&agrave;ng nhận nhiều năng lượng khung g&oacute;t 3D Miếng trợ g&oacute;t dạng đ&uacute;c c&ocirc;ng nghệ Fitcounter &ocirc;m tự nhi&ecirc;n gi&uacute;p tối ưu chuyển động của g&oacute;t ch&acirc;n.</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000282067/file/madness-adidas-ultra-boost-black-release-date-1_3d3362f11e8d4661a47c9b2dad3d6eaf_grande.jpg\" /></p>\r\n\r\n<p>Form gi&agrave;y đi l&ecirc;n ch&acirc;n vừa vặn, c&aacute;c đường chỉ kh&acirc;u v&ocirc; c&ugrave;ng chắc chắn v&agrave; tỉ mỉ đảm bảo h&agrave;i l&ograve;ng mọi kh&aacute;ch h&agrave;ng. M&agrave;u sắc trắng - cam dễ d&agrave;ng kết hợp với nhiều trang phục kh&aacute;c nhau theo sở th&iacute;ch bản th&acirc;n tạo n&ecirc;n 1 set đồ đẹp khi đi chơi, đi học hay dạo phố...</p>\r\n\r\n<h3><strong>2. Adidas Yeezy</strong></h3>\r\n\r\n<p><strong>C&aacute;c mẫu gi&agrave;y Adidas Yeezy</strong>&nbsp;được thiết kế với nhiều phi&ecirc;n bản đa dạng m&agrave;u sắc, đ&atilde; l&agrave;m chao đảo giới streetwear Việt Nam. Ngay từ những ng&agrave;y đầu ra mắt c&aacute;c t&iacute;n đồ đam m&ecirc; gi&agrave;y đ&atilde; xếp h&agrave;ng từ rất sớm để c&oacute; thể mua được những đ&ocirc;i gi&agrave;y &ldquo;si&ecirc;u phẩm&rdquo; đầu ti&ecirc;n n&agrave;y.</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000282067/file/e_2019_06_adidas-yeezy-boost-350-v2-reflective-lundmark-on-feet-look-1_97b63954570f4a88b0aab3a95bd65fc4_grande.jpg\" /></p>\r\n\r\n<p><strong>Adidas Yeezy</strong>&nbsp;được thiết kế với m&agrave;u sắc đa dạng từ sặc sỡ cho đến basic với c&aacute;c gam m&agrave;u trắng, đen, xam&hellip;Phần tr&ecirc;n gi&agrave;y được l&agrave;m bằng vải tho&aacute;ng kh&iacute;, tạo cảm gi&aacute;c thoải m&aacute;i khi đi. Phần đế dầy c&oacute; chất liệu 100% cao su, bởi vậy m&agrave; khi sử dụng, người d&ugrave;ng sẽ c&oacute; cảm gi&aacute;c rất &ecirc;m ch&acirc;n.</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000282067/file/f2eaee9be7f19c34f740bd6b19483f2d_60429a69bf2747bab202aca5e017e21c_grande.jpg\" /></p>\r\n\r\n<h3><strong>3. Adidas Stan Smith</strong></h3>\r\n\r\n<p><strong>C&aacute;c mẫu gi&agrave;y Adidas Stan Smith</strong>&nbsp;được biết đến l&agrave; một trong những mẫu gi&agrave;y đ&igrave;nh đ&aacute;m nhất của h&atilde;ng gi&agrave;y Adidas, đ&ocirc;i gi&agrave;y được thiết kế bởi Horst Dassler - con trai của người khai sinh ra Adidas - Adolf Dassler</p>\r\n\r\n<p>Phần tr&ecirc;n của đ&ocirc;i gi&agrave;y được l&agrave;m bằng da m&agrave;u trắng, trong khi đế được l&agrave;m bằng cao su, đế trong l&agrave;m bằng chất liệu tổng hợp. Gi&agrave;y được thiết kế đế cao su với c&aacute;c r&atilde;nh gi&uacute;p tăng sự linh hoạt v&agrave; độ b&aacute;m cao, chống trơn trượt tốt.</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000282067/file/67c4efa8eb61cccfab083eb15043375a_65ea8d502db44079b17ee62790636f2f_grande.jpg\" /></p>\r\n\r\n<p><strong>Gi&agrave;y sneaker Adidas&nbsp;</strong>Stan Smith sử dụng chất liệu vải kết hợp da tổng hợp cao cấp với đường may tỉ mỉ, chắc chắn c&ugrave;ng phần đế &ecirc;m &aacute;i gi&uacute;p đảm b&agrave;o v&agrave; tự tin tr&ecirc;n từng bước đi của bạn</p>\r\n\r\n<p>Bạn c&oacute; thể thoải m&aacute;i phối hợp&nbsp;<strong>Adidas Stan Smith</strong>&nbsp;với những set trang phục kh&aacute;c nhau, c&ugrave;ng c&aacute;c phụ kiện như t&uacute;i x&aacute;ch, v&ograve;ng tay, đồng hồ, hẳn bạn sẽ trở n&ecirc;n nổi bật v&agrave; thu h&uacute;t hơn trong mắt mọi người.</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000282067/file/adidas-stan-smith-home-of-classi_bc3f8cb3629c4332b59a3d8bce86244d_grande.png\" /></p>\r\n\r\n<p><strong>Gi&agrave;y Adidas Stan Smith ch&iacute;nh h&atilde;ng</strong>&nbsp;với gam m&agrave;u truy&ecirc;̀n th&ocirc;́ng, kh&ocirc;ng chỉ gi&uacute;p bạn thể hiện phong c&aacute;ch thời trang lịch l&atilde;m m&agrave; c&ograve;n gi&uacute;p dễ d&agrave;ng khi ph&ocirc;́i c&ugrave;ng nhiều trang phục như: quần jean, &aacute;o thun hay phụ kiện kh&aacute;c để trở n&ecirc;n thật cá tính và thời trang.</p>\r\n\r\n<h3><strong>4. Adidas AlphaBounce</strong></h3>\r\n\r\n<p><strong>C&aacute;c mẫu gi&agrave;y Adidas AlphaBounce</strong>&nbsp;được Adidas cho ra mắt lần đầu ti&ecirc;n v&agrave;o ng&agrave;y 15/6/2016, đem đến cho người d&ugrave;ng những trải nghiệm tốt v&agrave; mới lạ với hai chất liệu rất độc đ&aacute;o: th&acirc;n gi&agrave;y bằng Forged Mesh cho phi&ecirc;n bản đầu ti&ecirc;n; Engineered Mesh cho phi&ecirc;n bản n&acirc;ng cấp, bộ đế bằng chất liệu Bounce.</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000282067/file/adidas-alphabounce-beyond-grey-orange_d79d5998fbf649bc9ea0d9fd7a4e92a6_grande.jpg\" /></p>\r\n\r\n<p>Adidas AlphaBounce n&oacute;i chung (kh&ocirc;ng kể phi&ecirc;n bản) mang thiết kế của gi&agrave;y chạy (running) với phần đế cao, thu&ocirc;n dần về mũi, nhấn nh&aacute; bằng những đường r&atilde;nh đặc trưng tr&ecirc;n hai b&ecirc;n th&acirc;n gi&agrave;y v&agrave; bộ đế Bounce. Cấu tr&uacute;c sock-like (lưỡi g&agrave; liền, giống một đ&ocirc;i tất) cộng với d&acirc;y gi&agrave;y tr&ograve;n (rope-lace) tiệp m&agrave;u đem lại sự khỏe khoắn.</p>\r\n\r\n<p>Về tổng thể, AlphaBounce tiếp tục mang ng&ocirc;n ngữ thiết kế tối giản, mang hơi hướng tương lai của d&ograve;ng gi&agrave;y Adidas Performance nhưng vẫn đ&aacute;p ứng tốt về mặt thời trang.</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000282067/file/-buy-new-sneakers-trainers-for-m_784f1c2f610f46c7a0f84c4dcd29e7e3_grande.png\" /></p>\r\n\r\n<p>Ch&uacute;ng ta c&oacute; thể t&igrave;m thấy sự c&acirc;n bằng giữa hiệu năng v&agrave; thời trang tr&ecirc;n thiết kế của AlphaBounce, khi sử dụng đ&ocirc;i gi&agrave;y n&agrave;y, adidas muốn hướng người d&ugrave;ng theo hướng &quot;all day, everyday&quot; - đủ tốt, đủ đẹp để sử dụng h&agrave;ng ng&agrave;y</p>\r\n\r\n<p>Điểm đặc biệt ở chỗ, Adidas AlphaBounce c&ograve;n được tối giản cả yếu tố thương hiệu: logo Adidas Performance chỉ xuất hiện một c&aacute;ch khi&ecirc;m tốn ở g&oacute;t ngo&agrave;i v&agrave; pulltab ở lưỡi g&agrave;. Điều n&agrave;y tạo sự tối ưu cho thiết kế m&agrave; kh&ocirc;ng cần qu&aacute; bận t&acirc;m đến việc đặt logo ở đ&acirc;u, ngo&agrave;i ra c&ograve;n tạo sự th&acirc;n thiện cho người d&ugrave;ng.</p>\r\n\r\n<h3><strong>5. Adidas EQT Gazelle</strong></h3>\r\n\r\n<p><strong>C&aacute;c mẫu gi&agrave;y Adidas EQT Gazelle</strong>&nbsp;l&agrave; mẫu gi&agrave;y Swift kết tinh từ nhiều thiết kế gi&agrave;y chạy biểu tượng của&nbsp;h&atilde;ng gi&agrave;y adidas&nbsp;trong nhiều thập kỷ. Được thiết kế để sử dụng h&agrave;ng ng&agrave;y, mẫu gi&agrave;y bằng vải dệt kim si&ecirc;u nhẹ c&oacute; kiểu d&aacute;ng thanh tho&aacute;t v&agrave; đem lại cảm gi&aacute;c n&acirc;ng đỡ m&agrave; linh hoạt.</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000282067/file/adidas-equipment-gazelle-og-feet_609864343799460caf87ed54ae22c7b5_grande.png\" /></p>\r\n\r\n<p><strong><em>Đặc điểm nổi bật của gi&agrave;y Adidas EQT Gazelle Shoes:</em></strong></p>\r\n\r\n<p>- Phần tr&ecirc;n của gi&agrave;y Adidas EQT Gazelle được l&agrave;m từ chất liệu da v&agrave; vải lưới cao cấp với độ &ocirc;m được thiết kế đặc biệt để n&acirc;ng đỡ c&oacute; định hướng v&agrave; hỗ trợ chuyển động.</p>\r\n\r\n<p>- Đế ngo&agrave;i bằng cao su mềm dẻo, lớp l&oacute;t mềm mại mang lại cảm gi&aacute;c thoải m&aacute;i cho đ&ocirc;i ch&acirc;n.</p>\r\n\r\n<p>- Form gi&agrave;y đi l&ecirc;n ch&acirc;n vừa vặn, c&aacute;c đường chỉ kh&acirc;u rất tinh tế v&agrave; chắc chắn đảm bảo h&agrave;i l&ograve;ng mọi kh&aacute;ch h&agrave;ng.</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000282067/file/maxresdefault__11__9d1087a6de7248238ef7277cb10437aa_grande.jpg\" /></p>\r\n\r\n<p>Gi&agrave;y thể thao Adidas EQT lu&ocirc;n l&agrave; sự lựa chọn h&agrave;ng đầu bởi sự năng động, trẻ trung, tiện dụng, dễ d&agrave;ng phối kết hợp với nhiều bộ trang phục v&agrave; ph&ugrave; hợp đi trong nhiều ho&agrave;n cảnh kh&aacute;c nhau.</p>\r\n\r\n<p><strong>Gi&agrave;y Adidas EQT ch&iacute;nh h&atilde;ng gi&aacute; bao nhi&ecirc;u?&nbsp;</strong>C&aacute;c mẫu gi&agrave;y Adidas EQT đ&atilde;ng thực sự chinh phục được mọi t&iacute;n đồ đam m&ecirc; gi&agrave;y tr&ecirc;n thế giới trong năm nay, với kiểu d&aacute;ng c&aacute; t&iacute;nh s&agrave;nh điệu l&agrave;m nổi bật mọi phong c&aacute;ch. Gi&aacute; gi&agrave;y Adidas EQT ch&iacute;nh h&atilde;ng c&oacute; gi&aacute; b&aacute;n tại Việt Nam khoảng 1.750.000 -2.000.000VNĐ. C&oacute; sự ch&ecirc;nh lệch về gi&aacute; b&aacute;n t&ugrave;y v&agrave;o mẫu sản phẩm, thời điểm v&agrave; cửa h&agrave;ng b&aacute;n kh&aacute;c nhau.&nbsp;</p>\r\n\r\n<h3><strong>6. Adidas Pulse Boost &nbsp;</strong></h3>\r\n\r\n<p>C&aacute;c mẫu gi&agrave;y Adidas Pulse Boost nằm ở ph&acirc;n kh&uacute;c gi&aacute; rẻ hơn si&ecirc;u phẩm Ultra Boost nhưng lại sở hữu phong c&aacute;ch thiết kế độc đ&aacute;o kh&ocirc;ng giống với bất k&igrave; đ&ocirc;i gi&agrave;y boost n&agrave;o kh&aacute;c của Adidas từ trước đến nay.</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000282067/file/adidas_pulsebooost_281479cc52054239bcd9f4d74d2cac93_grande.png\" /></p>\r\n\r\n<p><em><strong>Thiết kế của Adidas Pulse Boost:</strong></em></p>\r\n\r\n<p>- Pulse Boost được thiết kế theo một xu hướng mới ho&agrave;n to&agrave;n. Với lớp đế mỏng v&agrave; độ ch&ecirc;nh lệch giữa g&oacute;t - mũi chỉ c&ograve;n 8 mm tạo cảm gi&aacute;c th&acirc;n gi&agrave;y d&agrave;i v&agrave; gọn hơn.</p>\r\n\r\n<p>- Phần g&oacute;t gi&agrave;y được l&agrave;m vểnh cao hơn gi&uacute;p người d&ugrave;ng hạn chế tiếp đất bằng g&oacute;t g&acirc;y hại cho đầu gối khi chạy.</p>\r\n\r\n<p>- Với đ&ocirc;i gi&agrave;y n&agrave;y, Adidas ho&agrave;n to&agrave;n sử dụng một tấm th&acirc;n liền bằng vải Adapt Knit mới v&agrave; kh&ocirc;ng c&oacute; bộ khung giữ d&acirc;y. Logo 3 sọc được in trực tiếp l&ecirc;n th&acirc;n gi&agrave;y. Thiết kế n&agrave;y tạo cảm gi&aacute;c gi&agrave;y sang trọng v&agrave; hiện đại hơn.</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000282067/file/adidas_pulse_boost_04f7675942864ed6911e61f8eb957319_grande.png\" /></p>\r\n\r\n<p><em><strong>C&ocirc;ng nghệ của Adidas Pulse Boost:</strong></em></p>\r\n\r\n<p>- Boost HD: một c&ocirc;ng nghệ cải tiến đệm Boost mới được Adidas &aacute;p dụng gần đ&acirc;y nhằm mang lại sự ổn định hơn về độ nảy khi nhiều người cho rằng đệm Boost nguy&ecirc;n bản c&oacute; độ nảy kh&aacute; cao v&agrave; thiếu ổn định. Tuy nhi&ecirc;n, độ &ecirc;m v&agrave; thoải m&aacute;i của đệm Boost nguy&ecirc;n bản vẫn được giữ nguy&ecirc;n.</p>\r\n\r\n<p>- Adaptive Traxion c&ocirc;ng nghệ phủ mặt đế gi&agrave;y mới cho ph&eacute;p người d&ugrave;ng c&oacute; được độ b&aacute;m đường tối đa khi chuyển hướng với bất k&igrave; loại bề mặt n&agrave;o.</p>\r\n\r\n<p>- Adapt Knit cũng l&agrave; một c&ocirc;ng nghệ mới về th&acirc;n gi&agrave;y của Adidas với khả năng co d&atilde;n th&iacute;ch hợp theo h&igrave;nh dạng b&agrave;n ch&acirc;n để đem lại cảm gi&aacute;c vừa vặn của ri&ecirc;ng người d&ugrave;ng.</p>\r\n\r\n<p>- M&atilde; QR tr&ecirc;n lưỡi g&agrave; của gi&agrave;y khi qu&eacute;t bằng điện thoại sẽ mở ra một Playlist nhạc thể thao s&ocirc;i động ho&agrave;n to&agrave;n miễn ph&iacute; tr&ecirc;n Spotify. Đ&acirc;y l&agrave; một khuyến mại kh&aacute; &yacute; nghĩa cho người d&ugrave;ng của Adidas.</p>\r\n\r\n<h2><strong>Hướng dẫn c&aacute;ch bảo quản gi&agrave;y Adidas đ&uacute;ng c&aacute;ch</strong></h2>\r\n\r\n<p>&ndash; Ch&uacute;ng ta n&ecirc;n định kỳ vệ sinh gi&agrave;y, khi gi&agrave;y bẩn c&aacute;c bạn n&ecirc;n d&ugrave;ng vải sạch thấm nước x&agrave; b&ocirc;ng lau một c&aacute;ch nhẹ nh&agrave;ng, kh&ocirc;ng n&ecirc;n d&ugrave;ng chất tẩy rửa để giặt v&agrave; kh&ocirc;ng n&ecirc;n d&ugrave;ng b&agrave;n chải ch&agrave; mạnh v&agrave;o gi&agrave;y.</p>\r\n\r\n<p>&ndash; Kh&ocirc;ng n&ecirc;n giặt bằng m&aacute;y giặt v&igrave; sẽ l&agrave;m cho đ&ocirc;i gi&agrave;y trở n&ecirc;n biến dạng mất form gi&agrave;y</p>\r\n\r\n<p>&ndash; Khi muốn tẩy trắng hoặc l&agrave;m sạch gi&agrave;y th&igrave; kh&ocirc;ng n&ecirc;n ng&acirc;m gi&agrave;y qu&aacute; l&acirc;u trong chất tẩy rửa hoặc x&agrave; ph&ograve;ng v&igrave; sẽ dễ l&agrave;m m&ograve;n, mục da gi&agrave;y, gi&ograve;n h&oacute;a cao su...</p>\r\n\r\n<p>&ndash; N&ecirc;n hạn chế tối đa nhất việc giặt gi&agrave;y đặc biệt l&agrave; sử dụng x&agrave; ph&ograve;ng hoặc c&aacute;c chất tẩy rửa để giặt v&igrave; khi tiếp x&uacute;c với nước v&agrave; c&aacute;c chất ấy sẽ l&agrave;m ảnh hưởng tới chất lượng gi&agrave;y, ch&oacute;ng hỏng.</p>\r\n\r\n<p>&ndash;&nbsp;Để gi&agrave;y trong kệ ri&ecirc;ng gi&uacute;p bảo quản gi&agrave;y tốt v&agrave; bền hơn.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '05/09/2020', '2020-09-05 08:32:37', '2020-09-05 08:32:37'),
(15, '8.jpg', 'ADIDAS MANG HẲN ULTRABOOST RA NGOÀI VŨ TRỤ ĐỂ LÀM THÍ NGHIỆM', 'Adidas đã công bố hợp tác với Trạm vũ trụ quốc tế (ISS), sẽ khám phá sự đổi mới và hiệu suất sản phẩm bên ngoài lực hấp dẫn của Trái đất. Thông qua quan hệ đối tác, adidas sẽ trở thành thương hiệu đầu tiên thử nghiệm giày sneakers trong các điều kiện cụ t', '<p>A<a href=\"https://ula.store/collections/vendors?q=ADIDAS\">didas</a>&nbsp;đ&atilde; c&ocirc;ng bố hợp t&aacute;c với Trạm vũ trụ quốc tế (ISS), sẽ kh&aacute;m ph&aacute; sự đổi mới v&agrave; hiệu suất sản phẩm b&ecirc;n ngo&agrave;i lực hấp dẫn của Tr&aacute;i đất. Th&ocirc;ng qua quan hệ đối t&aacute;c, adidas sẽ trở th&agrave;nh thương hiệu đầu ti&ecirc;n thử nghiệm gi&agrave;y sneakers trong c&aacute;c điều kiện cụ thể của kh&ocirc;ng gian b&ecirc;n ngo&agrave;i vũ trụ. adidas đ&atilde; đặt nền m&oacute;ng th&ocirc;ng qua thử nghiệm ban đầu với c&aacute;c quả b&oacute;ng đ&aacute; của m&igrave;nh, được đưa l&ecirc;n vũ trụ v&agrave;o đầu năm nay trong nỗ lực kh&aacute;m ph&aacute; c&aacute;c đặc điểm của ch&uacute;ng khi bay vượt qua tầng kh&iacute; quyền tr&ecirc;n Tr&aacute;i đất, nhưng sự hợp t&aacute;c n&agrave;y sẽ chuyển sang thử nghiệm hiệu suất của một c&ocirc;ng nghệ nổi tiếng hơn.</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000008082/file/ast.com-image-2019-11-adidas-international-space-station-partnership-1_398863d07ba54a63b265fa224a6dca7a.jpg\" /></p>\r\n\r\n<p>Sự hợp t&aacute;c sẽ bắt đầu bằng việc adidas gửi c&aacute;c mẫu gi&agrave;y v&agrave; vi&ecirc;n BOOST cho Ph&ograve;ng th&iacute; nghiệm Trạm vũ trụ quốc tế ISS v&agrave; sẽ được đưa l&ecirc;n t&agrave;u SpaceX trong một thử nghiệm trong tương lai. C&aacute;c phi h&agrave;nh gia tr&ecirc;n t&agrave;u sẽ nhắm đến việc kh&aacute;m ph&aacute; xem c&oacute; thể tạo ra c&aacute;c phần midsole BOOST với c&aacute;c v&ugrave;ng c&oacute; k&iacute;ch thước hạt kh&aacute;c nhau hay kh&ocirc;ng bằng c&aacute;ch kiểm tra qu&aacute; tr&igrave;nh tạo midsole BOOST trong điều kiện kh&ocirc;ng hấp dẫn. Theo adidas, c&aacute;c nh&agrave; khoa học tin rằng sự ph&aacute;t triển n&agrave;y c&oacute; thể cải thiện cả hiệu suất v&agrave; sự thoải m&aacute;i của cả ng&agrave;nh sneaker trong tương lai.</p>\r\n\r\n<p>&ldquo;Những điều kiện độc đ&aacute;o của kh&ocirc;ng gian cung cấp m&ocirc;i trường l&yacute; tưởng để kh&aacute;m ph&aacute; những điều chưa biết&rdquo;, chủ tịch về c&aacute;c chương tr&igrave;nh v&agrave; quan hệ đối t&aacute;c của ISS &ndash; Christine Kretz giải th&iacute;ch. V&iacute; dụ, vi trọng lực l&agrave; điều kiện duy nhất để ch&uacute;ng ta c&oacute; thể quan s&aacute;t c&aacute;c th&iacute; nghiệm cụ thể như h&agrave;nh vi của một quả b&oacute;ng đ&aacute; xoay tr&ograve;n m&agrave; kh&ocirc;ng l&agrave;m gi&aacute;n đoạn luồng kh&ocirc;ng kh&iacute; v&agrave; c&aacute;c hỗ trợ b&ecirc;n ngo&agrave;i để giữ n&oacute; tại chỗ. Việc kiểm so&aacute;t một số biến nhất định cho ph&eacute;p ch&uacute;ng t&ocirc;i tiến h&agrave;nh c&aacute;c thử nghiệm v&agrave; thu thập những l&yacute; thuyết kh&aacute;c c&oacute; thể xảy ra tr&ecirc;n Tr&aacute;i đất.</p>\r\n\r\n<p>adidas cũng c&oacute; kế hoạch học hỏi từ c&aacute;c phi h&agrave;nh gia trong lĩnh vực hoạt động của m&igrave;nh bằng c&aacute;ch quan s&aacute;t chế độ luyện tập của họ. Thương hiệu n&agrave;y hy vọng sẽ &aacute;p dụng những ph&aacute;t hiện của m&igrave;nh v&agrave;o quy tr&igrave;nh sản xuất c&aacute;c mẫu gi&agrave;y LOOP mới nhất của m&igrave;nh để gi&uacute;p tạo ra những đ&ocirc;i gi&agrave;y bền vững hiệu suất cao cho những &ldquo;cư d&acirc;n tr&aacute;i đất&rdquo; nơi qu&ecirc; nh&agrave;.&nbsp;Sự hợp t&aacute;c giữa adidas v&agrave; ISS sẽ bắt đầu từ năm 2020.</p>\r\n', '05/09/2020', '2020-09-05 08:47:51', '2020-09-05 08:47:51'),
(16, '9.jpg', 'G-DRAGON: \'TÔI TỪNG KHÔNG CÓ TIỀN MUA GIÀY NIKE AIR FORCE 1\'', 'Theo Hypebeast, G-Dragon (Big Bang) từng tâm sự: \"Ngay từ những năm tháng đầu tiên theo đuổi hip hop - khi mới chỉ là đứa trẻ, Nike Air Force 1 đối với tôi đã có ý nghĩa hơn cả một đôi giày\".\r\n\r\nLời chia sẻ chạm đến trái tim người hâm mộ bởi thiết kế trên', '<p>Trưởng nh&oacute;m Big Bang cho rằng kh&ocirc;ng c&oacute; đ&aacute;p &aacute;n n&agrave;o đ&uacute;ng trong thời trang.</p>\r\n\r\n<p>Theo&nbsp;<em>Hypebeast</em>, G-Dragon (<a href=\"https://zingnews.vn/tieu-diem/big-bang.html\" title=\"Tin tức Big Bang\">Big Bang</a>) từng t&acirc;m sự: &quot;Ngay từ những năm th&aacute;ng đầu ti&ecirc;n theo đuổi hip hop - khi mới chỉ l&agrave; đứa trẻ, Nike Air Force 1 đối với t&ocirc;i đ&atilde; c&oacute; &yacute; nghĩa hơn cả một đ&ocirc;i gi&agrave;y&quot;.</p>\r\n\r\n<p>Lời chia sẻ chạm đến tr&aacute;i tim người h&acirc;m mộ bởi thiết kế tr&ecirc;n đ&aacute;nh dấu c&aacute;i bắt tay giữa trưởng nh&oacute;m Big Bang v&agrave; thương hiệu thời trang thể thao lớn nhất nh&igrave; thế giới. Qua m&agrave;n kết hợp đ&oacute;, anh c&ugrave;ng Nike tạo n&ecirc;n &quot;l&agrave;n s&oacute;ng&quot; gi&agrave;y hoa c&uacute;c, biến n&oacute; trở th&agrave;nh m&oacute;n đồ được săn đ&oacute;n, c&oacute; gi&aacute; b&aacute;n lại cao nhất năm 2019.</p>\r\n\r\n<p>D&ugrave; vậy, kh&ocirc;ng nhiều người biết ch&agrave;ng nghệ sĩ H&agrave;n Quốc nổi tiếng lại từng coi Nike Air Force 1 như một giấc mơ.</p>\r\n\r\n<p>&quot;V&igrave; kh&ocirc;ng c&oacute; đủ tiền mua, t&ocirc;i thường đi qua cửa h&agrave;ng v&agrave; chi&ecirc;m ngưỡng ch&uacute;ng bằng cả tr&aacute;i tim. Đối với những người y&ecirc;u th&iacute;ch hip hop, quần &aacute;o rộng, mũ v&agrave; Nike Air Force 1 l&agrave; đồng phục&quot;, anh n&oacute;i.</p>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"G-Dragon mac thoi trang anh 2\" src=\"https://znews-photo.zadn.vn/Uploaded/mdf_vsxrlu/2020_08_18/gd_1.jpeg\" title=\"G-Dragon mặc thời trang ảnh 2\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Nike Air Force 1 x PEACEMINUSONE Para-noise được l&ograve;ng nhiều bạn trẻ, khiến họ sẵn s&agrave;ng bỏ ra số tiền lớn để mua. Ảnh:&nbsp;<em>Nike</em>.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3>Mẹ l&agrave; nguồn cảm hứng thời trang lớn</h3>\r\n\r\n<p>Lớn l&ecirc;n trong gia đ&igrave;nh kh&ocirc;ng c&oacute; truyền thống l&agrave;m nghệ thuật, G-Dragon bắt đầu con đường chinh phục đam m&ecirc; từ con số 0. Ng&agrave;y th&aacute;ng thực tập sinh thiếu thốn khiến anh c&agrave;ng khao kh&aacute;t trở th&agrave;nh nghệ sĩ tiếng tăm. Anh từng chia sẻ tr&ecirc;n truyền h&igrave;nh bản th&acirc;n muốn trở n&ecirc;n nổi tiếng hơn chỉ để được ăn thịt thoải m&aacute;i.</p>\r\n\r\n<p>G-Dragon theo đuổi nghệ thuật từ khi c&ograve;n nhỏ. Mẹ lu&ocirc;n l&agrave; người bầu bạn c&ugrave;ng anh, đảm nhiệm từ vai tr&ograve; quản l&yacute; đến trang điểm, chuẩn bị trang phục.</p>\r\n\r\n<p>&quot;T&ocirc;i từng l&agrave;m diễn vi&ecirc;n nh&iacute;. Hồi đ&oacute;, t&ocirc;i kh&ocirc;ng c&oacute; quản l&yacute; hay stylist ri&ecirc;ng. Mẹ ch&iacute;nh l&agrave; người đ&atilde; mua v&agrave; phối đồ cho t&ocirc;i. C&oacute; lẽ đ&oacute; l&agrave; lần đầu ti&ecirc;n t&ocirc;i gia nhập thế giới thời trang. Khi xem lại h&igrave;nh ảnh l&uacute;c 5-6 tuổi, t&ocirc;i thấy m&igrave;nh cũng kh&aacute; s&agrave;nh điệu&quot;, G-Dragon n&oacute;i trong một buổi phỏng vấn với&nbsp;<em>Dazed</em>.</p>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><img alt=\"G-Dragon mac thoi trang anh 3\" src=\"https://znews-photo.zadn.vn/w860/Uploaded/mdf_vsxrlu/2020_08_18/gd_4_1.jpg\" style=\"height:1278px; width:967px\" title=\"G-Dragon mặc thời trang ảnh 3\" /></p>\r\n\r\n			<p><img alt=\"G-Dragon mac thoi trang anh 4\" src=\"https://znews-photo.zadn.vn/w860/Uploaded/mdf_vsxrlu/2020_08_18/gd_3_1.jpg\" style=\"height:1448px; width:961px\" title=\"G-Dragon mặc thời trang ảnh 4\" /></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Phong c&aacute;ch thời trang mang đậm phong c&aacute;ch ri&ecirc;ng của G-Dragon được nhiều bạn trẻ h&acirc;m mộ. Ảnh:&nbsp;<em>Pinterest, NumberG</em>.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Được truyền cảm hứng từ mẹ v&agrave; c&oacute; niềm đam m&ecirc; thời trang từ nhỏ, anh nhanh ch&oacute;ng chứng minh gu ăn mặc s&agrave;nh điệu của m&igrave;nh trong giới giải tr&iacute;. N&eacute;t độc đ&aacute;o, ph&aacute; c&aacute;ch gi&uacute;p nam nghệ sĩ nh&agrave; YG lu&ocirc;n trở th&agrave;nh t&acirc;m điểm ch&uacute; &yacute; khi xuất hiện tại c&aacute;c sự kiện thời trang.</p>\r\n\r\n<p>Ngo&agrave;i ra, anh biến những c&aacute;ch diện đồ lạ lẫm th&agrave;nh xu hướng mới của giới trẻ. Nam thần tượng kh&ocirc;ng ngại kho&aacute;c l&ecirc;n m&igrave;nh trang phục được thiết kế cho nữ, vẽ nguệch ngoạc l&ecirc;n t&uacute;i x&aacute;ch đắt đỏ, để t&oacute;c mullet hay đi gi&agrave;y thể thao đạp g&oacute;t.</p>\r\n\r\n<p>G-Dragon cho hay: &quot;Nhiều l&uacute;c t&ocirc;i cũng cảm thấy xấu hổ về diện mạo của m&igrave;nh. Bạn đừng sợ bởi kh&ocirc;ng c&oacute; đ&aacute;p &aacute;n đ&uacute;ng trong thời trang&quot;.</p>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><img alt=\"G-Dragon mac thoi trang anh 5\" src=\"https://znews-photo.zadn.vn/Uploaded/mdf_vsxrlu/2020_08_18/gd_6.jpg\" style=\"height:1000px; width:635px\" title=\"G-Dragon mặc thời trang ảnh 5\" /></p>\r\n\r\n			<p><img alt=\"G-Dragon mac thoi trang anh 6\" src=\"https://znews-photo.zadn.vn/Uploaded/mdf_vsxrlu/2020_08_18/gd_5.jpg\" style=\"height:1280px; width:853px\" title=\"G-Dragon mặc thời trang ảnh 6\" /></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><img alt=\"G-Dragon mac thoi trang anh 7\" src=\"https://znews-photo.zadn.vn/w860/Uploaded/mdf_vsxrlu/2020_08_18/gd_8.jpg\" style=\"height:1024px; width:666px\" title=\"G-Dragon mặc thời trang ảnh 7\" /></p>\r\n\r\n			<p><img alt=\"G-Dragon mac thoi trang anh 8\" src=\"https://znews-photo.zadn.vn/w860/Uploaded/mdf_vsxrlu/2020_08_18/gd_7.jpg\" style=\"height:800px; width:640px\" title=\"G-Dragon mặc thời trang ảnh 8\" /></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>G-Dragon biến quần &aacute;o, t&uacute;i x&aacute;ch th&agrave;nh chất liệu để s&aacute;ng tạo c&aacute;c t&aacute;c phẩm nghệ thuật. Ảnh:&nbsp;<em>Always GD, @xxxibgdrgn.</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Năm 2014, G-Dragon c&ugrave;ng c&aacute;c cộng sự cho ra mắt thương hiệu &quot;cộp m&aacute;c&quot; ch&iacute;nh m&igrave;nh - PEACEMINUSONE. T&ecirc;n v&agrave; logo của h&atilde;ng thời trang do trưởng nh&oacute;m Big Bang s&aacute;ng tạo, mang &yacute; nghĩa s&acirc;u sắc, khiến người kh&aacute;c nhớ đến anh.</p>\r\n\r\n<p>Logo PEACEMINUSONE l&agrave; biểu tượng ho&agrave; b&igrave;nh nhưng thiếu mất một n&eacute;t ch&eacute;o b&ecirc;n phải. Khi t&aacute;ch l&agrave;m đ&ocirc;i, n&oacute; biến th&agrave;nh chữ GD (t&ecirc;n viết tắt của G-Dragon). B&ecirc;n cạnh đ&oacute;, G-Dragon cũng kh&eacute;o l&eacute;o lồng gh&eacute;p con số 8 may mắn của m&igrave;nh v&agrave;o bằng c&aacute;ch chọn logo h&igrave;nh tr&ograve;n, gợi li&ecirc;n tưởng chiếc đồng hồ điểm 8h.</p>\r\n\r\n<p>Thực tế, số 8 trở th&agrave;nh &quot;b&ugrave;a may mắn&quot; của nam idol v&igrave; anh được sinh ra v&agrave;o ng&agrave;y 18/8/1988.</p>\r\n\r\n<p>B&ecirc;n cạnh logo &quot;ho&agrave; b&igrave;nh khuyết n&eacute;t&quot;, hoa c&uacute;c dại cũng l&agrave; biểu tượng thường được bắt gặp trong c&aacute;c thiết kế của nam ca sĩ H&agrave;n Quốc. Trưởng nh&oacute;m Big Bang d&agrave;nh t&igrave;nh y&ecirc;u cho lo&agrave;i hoa n&agrave;y bởi n&oacute; khiến nhiều người li&ecirc;n tưởng tới sự ng&acirc;y thơ, trong s&aacute;ng cũng như l&ograve;ng thuỷ chung với l&yacute; tưởng bản th&acirc;n theo đuổi.</p>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"G-Dragon mac thoi trang anh 9\" src=\"https://znews-photo.zadn.vn/Uploaded/mdf_vsxrlu/2020_08_18/gd_9.jpg\" title=\"G-Dragon mặc thời trang ảnh 9\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>PEACEMINUSONE l&agrave; thương hiệu G-Dragon đặt t&acirc;m huyết s&aacute;ng tạo. Ảnh:&nbsp;<em>@jiyongahhh</em>.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3>Bức hoạ tr&ecirc;n trang b&igrave;a Vogue Korea v&agrave; những th&agrave;nh tựu</h3>\r\n\r\n<p>Nh&acirc;n dịp sinh nhật của G-Dragon,&nbsp;<em>Vogue Korea</em>&nbsp;đăng tải h&igrave;nh ảnh trang b&igrave;a được s&aacute;ng tạo bởi ch&iacute;nh nam nghệ sĩ. Tạp ch&iacute; thời trang viết: &quot;G-Dragon nổi tiếng với cả những người y&ecirc;u nghệ thuật. Tr&ecirc;n trang b&igrave;a&nbsp;<em>Vogue&nbsp;</em>th&aacute;ng 9, anh truyền tải niềm hy vọng qua một bức họa. T&aacute;c phẩm của anh mang th&ocirc;ng điệp: &Aacute;nh s&aacute;ng l&agrave; hy vọng&quot;.</p>\r\n\r\n<table align=\"right\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"G-Dragon mac thoi trang anh 10\" src=\"https://znews-photo.zadn.vn/Uploaded/mdf_vsxrlu/2020_08_18/gdragon.jpeg\" title=\"G-Dragon mặc thời trang ảnh 10\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Trang b&igrave;a đặc biệt do G-Dragon s&aacute;ng tạo cho tạp ch&iacute;&nbsp;<em>Vogue</em>&nbsp;th&aacute;ng 9. Ảnh:&nbsp;<em>Vogue Korea</em>.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Điều n&agrave;y thể hiện r&otilde; sự ưu &aacute;i của&nbsp;<em>Vogue</em>&nbsp;d&agrave;nh cho th&agrave;nh vi&ecirc;n nh&oacute;m Big Bang bởi ấn phẩm th&aacute;ng 9 được coi l&agrave; số b&aacute;o quan trọng nhất trong năm. Số&nbsp;<em>Vogue</em>&nbsp;n&agrave;y c&ograve;n đ&aacute;nh dấu sự kiện đặc biệt: Lần đầu trong lịch sử 128 năm ra đời,&nbsp;<em>Vogue</em>&nbsp;thiết kế 26 phi&ecirc;n bản trang b&igrave;a tr&ecirc;n 19 ng&ocirc;n ngữ nhưng c&ugrave;ng chung chủ đề &quot;Vogue Hope&quot;.</p>\r\n\r\n<p>Kh&ocirc;ng phải ngẫu nhi&ecirc;n biệt danh &quot;&ocirc;ng ho&agrave;ng thời trang Kpop&quot; lại được d&ugrave;ng để chỉ G-Dragon. Tầm ảnh hưởng của nam ca sĩ tới ng&agrave;nh thời trang tại H&agrave;n Quốc v&agrave; thế giới rất lớn. M&oacute;n đồ n&agrave;o li&ecirc;n quan đến G-Dragon đều hết sạch trong &quot;nh&aacute;y mắt&quot;.</p>\r\n\r\n<p>Với thương hiệu PEACEMINUSONE, sản phẩm thường chỉ được sản xuất với số lượng giới hạn. Ch&uacute;ng nhanh ch&oacute;ng hết h&agrave;ng, kể cả đ&oacute; l&agrave; những cuộn băng d&iacute;nh, m&oacute;c kho&aacute;... c&oacute; gi&aacute;&nbsp;35 USD&nbsp;trở l&ecirc;n.</p>\r\n\r\n<p>D&ugrave; tạm ngừng hoạt động suốt 2 năm để thực hiện nghĩa vụ qu&acirc;n sự, độ phủ s&oacute;ng của G-Dragon chưa bao giờ giảm. Xuất ngũ kh&ocirc;ng l&acirc;u, anh x&aacute;c nhận kết hợp c&ugrave;ng Nike cho ra mắt đ&ocirc;i gi&agrave;y Nike Air Force 1 x PEACEMINUSONE Para-noise với 3 phi&ecirc;n bản: Swoosh trắng cho quốc tế, swoosh đỏ d&agrave;nh ri&ecirc;ng thị trường H&agrave;n Quốc v&agrave; swoosh v&agrave;ng chỉ tặng người th&acirc;n.</p>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"G-Dragon mac thoi trang anh 11\" src=\"https://znews-photo.zadn.vn/Uploaded/mdf_vsxrlu/2020_08_18/prochallenger.jpg\" title=\"G-Dragon mặc thời trang ảnh 11\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Nhiều ng&ocirc;i sao tr&ecirc;n thế giới cũng y&ecirc;u th&iacute;ch đ&ocirc;i gi&agrave;y Para-noise của G-Dragon. Ảnh:&nbsp;<em>@prochallenger</em>.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Mẫu sneakers tr&ecirc;n tạo n&ecirc;n &quot;cơn sốt&quot; trong giới trẻ. C&aacute;c bạn trẻ H&agrave;n Quốc sẵn s&agrave;ng xếp h&agrave;ng d&agrave;i dưới nắng n&oacute;ng suốt nhiều giờ chỉ để nhận được cơ hội mua gi&agrave;y. Nếu kh&ocirc;ng đủ may mắn, d&ugrave; cố gắng xếp h&agrave;ng, họ cũng kh&ocirc;ng thể mua đ&ocirc;i gi&agrave;y số lượng c&oacute; hạn n&agrave;y.</p>\r\n\r\n<p>Ng&agrave;y mở b&aacute;n, Nike Air Force 1 x PEACEMINUSONE Para-noise bản swoosh trắng hết sạch sau 0,06 gi&acirc;y tại thị trường Trung Quốc. C&aacute;c nước kh&aacute;c cũng kh&ocirc;ng nằm ngo&agrave;i cuộc săn gi&agrave;y khi Mỹ, Canada hết h&agrave;ng trong 5 ph&uacute;t, Australia 10 ph&uacute;t v&agrave; Anh chỉ 2 ph&uacute;t.</p>\r\n\r\n<p>Sau đ&oacute;, gi&aacute; b&aacute;n của sản phẩm n&agrave;y từ&nbsp;250 USD&nbsp;bị đẩy l&ecirc;n&nbsp;3.890 USD&nbsp;cho bản swoosh đỏ v&agrave;&nbsp;700 USD&nbsp;với bản swoosh trắng.</p>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"G-Dragon mac thoi trang anh 12\" src=\"https://znews-photo.zadn.vn/Uploaded/mdf_vsxrlu/2020_08_18/gd_10.jpg\" title=\"G-Dragon mặc thời trang ảnh 12\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>G-Dragon xuất hiện b&ecirc;n d&agrave;n ng&ocirc;i sao nổi tiếng Hollywood trong show diễn&nbsp;<em>Haute Couture&nbsp;</em>của nh&agrave; mốt Chanel. Ảnh:&nbsp;<em><a href=\"https://zingnews.vn/tieu-diem/karl-lagerfeld.html\" title=\"Tin tức Karl Lagerfeld\">Karl Lagerfeld</a>.</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Kh&ocirc;ng chỉ vậy, G-Dragon c&ograve;n trở th&agrave;nh đại sứ thương hiệu của Chanel từ năm 2016. Anh chứng minh mối quan hệ tốt đẹp với nh&agrave; mốt Ph&aacute;p khi l&agrave; một trong những sao H&agrave;n Quốc hiếm hoi g&oacute;p mặt tại h&agrave;ng ghế đầu trong show Chanel tại&nbsp;<em>Tuần lễ Haute Couture.&nbsp;</em>Kh&aacute;ch mời tới sự kiện n&agrave;y thường được chọn lọc, hầu hết thuộc giới qu&yacute; tộc.</p>\r\n\r\n<p>Đặc biệt, nh&agrave; thiết kế qu&aacute; cố Karl Lagerfeld c&ograve;n từng đăng tải l&ecirc;n trang c&aacute; nh&acirc;n h&igrave;nh ảnh c&aacute;c ng&ocirc;i sao tầm cỡ thế giới, trong đ&oacute; c&oacute; G-Dragon với d&ograve;ng trạng th&aacute;i: &quot;Những người bạn th&acirc;n y&ecirc;u của t&ocirc;i&quot;. &Ocirc;ng cũng đ&iacute;ch th&acirc;n thực hiện bộ ảnh chụp G-Dragon cho số b&aacute;o kỷ niệm 20 năm th&agrave;nh lập&nbsp;<em>Vogue Korea.</em></p>\r\n\r\n<p>Tất cả đ&atilde; cho thấy sự gần gũi giữa nam nghệ sĩ nh&agrave; YG v&agrave; &quot;&ocirc;ng ho&agrave;ng Chanel&quot;.</p>\r\n\r\n<p>Bước sang tuổi 32, G-Dragon tạm xa rời việc ca h&aacute;t đ&atilde; 3 năm. Tuy nhi&ecirc;n, anh vẫn đang tiếp tục gặt h&aacute;i th&agrave;nh c&ocirc;ng ở lĩnh vực thời trang với những th&agrave;nh tựu nổi bật.</p>\r\n\r\n<p>Anh từng n&oacute;i: &quot;T&ocirc;i chỉ mặc quần &aacute;o v&igrave; kh&ocirc;ng thể ra đường khi chẳng c&oacute; g&igrave; tr&ecirc;n người. Sau đ&oacute;, mọi người gọi t&ocirc;i l&agrave; t&iacute;n đồ thời trang&quot;.</p>\r\n', '05/09/2020', '2020-09-05 08:50:24', '2020-09-05 08:50:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id_cate` int(11) NOT NULL,
  `cate_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_cate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`id_cate`, `cate_name`, `date_cate`) VALUES
(2, 'ADIDAS', '2020-08-04 22:16:27'),
(3, 'NIKE', '2020-08-04 22:16:31'),
(18, 'VANS', '2020-08-05 14:08:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_detail_order`
--

CREATE TABLE `tbl_detail_order` (
  `id_order` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `size` tinyint(2) NOT NULL,
  `quantity_order` tinyint(3) NOT NULL,
  `price_detail` float NOT NULL,
  `total` float NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_detail_order`
--

INSERT INTO `tbl_detail_order` (`id_order`, `id_product`, `size`, `quantity_order`, `price_detail`, `total`, `status`) VALUES
(72, 19, 37, 1, 793000, 793000, 1),
(72, 20, 37, 3, 1350000, 4050000, 1),
(72, 42, 37, 1, 2300000, 2300000, 1),
(75, 19, 40, 1, 793000, 793000, 1),
(75, 20, 37, 1, 1350000, 1350000, 1),
(75, 29, 40, 1, 3000000, 3000000, 1),
(75, 45, 37, 1, 2500000, 2500000, 1),
(76, 17, 39, 1, 2000000, 2000000, 1),
(77, 45, 37, 1, 2500000, 2500000, 1),
(82, 10, 37, 1, 792000, 792000, 1),
(82, 35, 37, 1, 1450000, 1450000, 1),
(84, 2, 37, 1, 1200000, 1200000, 1),
(85, 48, 37, 1, 1700000, 1700000, 1),
(86, 48, 37, 1, 1700000, 1700000, 1),
(87, 48, 40, 2, 1700000, 3400000, 1),
(88, 48, 39, 1, 1700000, 1700000, 1),
(89, 48, 40, 1, 1700000, 1700000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_discount`
--

CREATE TABLE `tbl_discount` (
  `id_discount` int(11) NOT NULL,
  `code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `percent` tinyint(3) NOT NULL DEFAULT '0',
  `day_create` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `end_day` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_discount`
--

INSERT INTO `tbl_discount` (`id_discount`, `code`, `percent`, `day_create`, `end_day`) VALUES
(2, 'FREESHIP', 20, '2020-09-18 00:00:00', '2020-09-30 00:00:00'),
(3, 'GIAM50', 50, '2020-09-09 21:57:15', '2020-09-10 21:56:56'),
(7, 'GIAM30', 30, '2020-09-11 00:00:00', '2020-10-12 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_img_product`
--

CREATE TABLE `tbl_img_product` (
  `id_detail_img` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `name_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_img_product`
--

INSERT INTO `tbl_img_product` (`id_detail_img`, `id_product`, `name_img`) VALUES
(36, 45, 'VN0A3JFIWZ2-1-650x650.jpg'),
(37, 45, 'VN0A3JFIWZ2-2-650x650.jpg'),
(38, 45, 'VN0A3JFIWZ2-3-650x650.jpg'),
(39, 44, 'VN0A4U39WZ2-1-650x650.jpg'),
(40, 44, 'VN0A4U39WZ2-2-650x650.jpg'),
(41, 44, 'VN0A4U39WZ2-3-650x650.jpg'),
(42, 43, 'VN0A38GFTIO-DRAKE02-650x650.jpg'),
(43, 43, 'VN0A38GFTIO-DRAKE11-650x650.jpg'),
(44, 43, 'VN0A38GFTIO-DRAKE12-650x650.jpg'),
(45, 42, 'VN0A4BTXVTM_6-650x650.jpg'),
(46, 42, 'VN0A4BTXVTM_7-650x650.jpg'),
(47, 42, 'VN0A4BTXVTM_8-650x650.jpg'),
(48, 41, 'VN0A38EMQ9H-DRAKE1-650x650.jpg'),
(49, 41, 'VN0A38EMQ9H-DRAKE2-650x650.jpg'),
(50, 41, 'VN0A38EMQ9H-DRAKE3-650x650.jpg'),
(51, 40, 'VN0A38EMUKL-DRAKE2-650x650.jpg'),
(52, 40, 'VN0A38EMUKL-DRAKE3-650x650.jpg'),
(53, 40, 'VN0A38EMUKL-DRAKE5-650x650.jpg'),
(54, 39, 'VN0A38ENMR9-DRAKE1-650x650.jpg'),
(55, 39, 'VN0A38ENMR9-DRAKE2-650x650.jpg'),
(56, 39, 'VN0A38ENMR9-DRAKE3-650x650.jpg'),
(57, 38, '-vn0a2z5iv77-2.jpg'),
(58, 38, 'vn0a2z5iv77-3.jpg'),
(59, 38, 'vn0a2z5iv77-4.jpg'),
(60, 37, '5-650x650.jpg'),
(61, 37, '6-650x650.jpg'),
(62, 37, '8-650x650.jpg'),
(64, 36, 'VN0A3MU6WOK-1-650x650.jpg'),
(65, 36, 'VN0A3MU6WOK-2-650x650.jpg'),
(66, 36, 'VN0A3MU6WOK-4-650x650.jpg'),
(67, 35, 'VN0A2Z5I002-1-650x650.jpg'),
(68, 35, 'VN0A2Z5I002-2-650x650.jpg'),
(69, 35, 'VN0A2Z5I002-3-650x650.jpg'),
(70, 34, 'VN0A2Z5IWN4-1.1-650x650.jpg'),
(71, 34, 'VN0A2Z5IWN4-2-650x650.jpg'),
(72, 34, 'VN0A2Z5IWN4-4.1-650x650.jpg'),
(73, 31, 'nike-air-more-uptempo-varsity-red-release-002.jpg'),
(74, 31, 'nike-air-more-uptempo-varsity-red-release-003.jpg'),
(75, 31, 'nike-air-more-uptempo-varsity-red-release-005.jpg'),
(76, 30, '2-20-475x428.jpg'),
(77, 30, '3-20-475x428.jpg'),
(78, 30, '4-20-475x428.jpg'),
(79, 29, 'air-jordan-1-dior-replica.jpg'),
(80, 29, 'air-jordan-1-dior-replica-2.jpg'),
(81, 29, 'air-jordan-1-dior-replica-3.jpg'),
(82, 28, 'nike-air-max-97-ultra-1-1024x683.jpg'),
(83, 28, 'nike-air-max-97-ultra-2-1024x683.jpg'),
(84, 28, 'nike-air-max-97-ultra-4-1024x682.jpg'),
(85, 27, 'nike-air-max-270-nu-1.jpg'),
(86, 27, 'nike-air-max-270-nu-2.jpg'),
(87, 27, 'nike-air-max-270-nu-4.jpg'),
(88, 26, 'CU3244-100-Release-Date-Price.jpg'),
(89, 26, 'CU3244-100-Release-Date-Price-4.jpg'),
(90, 26, 'CU3244-100-Release-Date-Price-5.jpg'),
(91, 25, '_553558-112_P3.jpg'),
(92, 25, '553558-112_P1.jpg'),
(93, 25, '553558-112_P4.jpg'),
(94, 24, 'CI0919-100_P2.jpg'),
(95, 24, 'CI0919-100_P3.jpg'),
(96, 24, 'CI0919-100_P4.jpg'),
(97, 23, 'CI0919-102_P1.jpg'),
(98, 23, 'CI0919-102_P2.jpg'),
(99, 23, 'CI0919-102_P3.jpg'),
(100, 22, 'CU3012-164_P1.jpg'),
(101, 22, 'CU3012-164_P2.jpg'),
(102, 22, 'CU3012-164_P4.jpg'),
(103, 21, 'https-2.jpg'),
(104, 21, 'https-3.jpg'),
(105, 21, 'https-4.jpg'),
(106, 20, '78beda32.jpg'),
(107, 20, 'a3dcb0e5.jpg'),
(109, 20, 'e32fd43d.jpg'),
(110, 19, '250_614_cq2991_05_standard.jpg'),
(111, 19, '250_614_cq2991_06_standard.jpg'),
(112, 19, '250_614_cq2991_41_detail.jpg'),
(113, 18, 'ihtzw1554091768.jpg'),
(114, 18, 'rnzeh1554091769.jpg'),
(115, 18, 'xzcwo1554091769.jpg'),
(116, 17, '2cc39257.jpg'),
(117, 17, '59c4806c.jpg'),
(118, 17, 'e195d6be.jpg'),
(120, 16, 'zz-BD7112-03.jpg'),
(121, 16, 'zz-BD7112-05.jpg'),
(122, 16, 'zz-BD7112-10.jpg'),
(123, 15, 'Giay-adidas-Alphabounce-Instinct-Nam-Den-Den-01-800x800_0.jpg'),
(124, 15, 'Giay-adidas-Alphabounce-Instinct-Nam-Den-Den-02-800x800_0.jpg'),
(125, 15, 'Giay-adidas-Alphabounce-Instinct-Nam-Den-Den-05-800x800_0.jpg'),
(126, 14, 'Giay-Adidas-Alphabounce-Instinct-M-xam-do-replica2-1.jpg'),
(127, 14, 'Giay-Adidas-Alphabounce-Instinct-M-xam-do-replica3.jpg'),
(128, 14, 'Giay-Adidas-Alphabounce-Instinct-M-xam-do-replica5.jpg'),
(129, 13, 'zz-AQ1026-01.jpg'),
(130, 13, 'zz-AQ1026-06.jpg'),
(131, 13, 'zz-AQ1026-11.jpg'),
(132, 12, 'MG_4330.jpg'),
(133, 12, 'MG_4331.jpg'),
(134, 12, 'MG_4334.jpg'),
(135, 11, '20190823-_DSC0753.jpg'),
(136, 11, '20190823-_DSC0755.jpg'),
(137, 11, '20190823-_DSC0757.jpg'),
(138, 10, 'vn0a4p3xoiu-2.jpg'),
(139, 10, 'vn0a4p3xoiu-3.jpg'),
(140, 10, 'vn0a4p3xoiu-4.jpg'),
(141, 9, '2cb2a3fa.jpg'),
(142, 9, '4b4af5ac.jpg'),
(143, 9, '69f0454d.jpg'),
(144, 8, 'adidas-yeezy-700-V3-alvah-H67799-3-690x517.jpg'),
(145, 8, 'adidas-yeezy-700-V3-alvah-H67799-4-690x517.jpg'),
(146, 8, 'adidas-yeezy-700-V3-alvah-H67799-5-690x517.jpg'),
(147, 7, 'prophere-shoes-black-bd7731-01-standard.jpg'),
(148, 7, 'prophere-shoes-black-bd7731-05-standard.jpg'),
(149, 7, 'prophere-shoes-black-bd7731-06-standard.jpg'),
(150, 2, 'av478910001-2010.jpg'),
(151, 2, 'av478910003-24.jpg'),
(152, 2, 'av478910004-5547.jpg'),
(153, 1, '7ed495f2ade75c4dc8ad3a7f08a3b590.jpg'),
(154, 1, '44be69b6808c7a77e49c8a2d9858bb80.jpg'),
(155, 1, 'CJ9583-100-Online-6.jpg'),
(157, 48, 'adidas-stan-smith-j-1-600x600.jpg'),
(158, 48, 'EE6173_07-1.jpg'),
(159, 48, 'EE6173_FTW_photo_back-lateral-top_gradient-500x500-2.png'),
(160, 48, 'ee6173-4-1-600x400.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` int(11) NOT NULL,
  `id_account` int(11) NOT NULL,
  `note` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `minus_points` int(11) NOT NULL,
  `percent` tinyint(3) NOT NULL,
  `sum_total` float NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Đang xử lý',
  `date_order` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`id_order`, `id_account`, `note`, `minus_points`, `percent`, `sum_total`, `status`, `date_order`) VALUES
(75, 92, 'Ship nhanh nhá', 0, 30, 5350100, 'Đang xử lý', '2020-09-19 11:22:46'),
(76, 96, 'Ship giờ hành chính', 0, 30, 1400000, 'Đang xử lý', '2020-09-19 11:54:38'),
(77, 97, 'oke', 0, 0, 2500000, 'Đang xử lý', '2020-09-19 12:14:37'),
(82, 106, 'Nhanh lên', 0, 30, 1569400, 'Hoàn thành', '2020-09-25 20:21:33'),
(84, 109, 'Đặt cho vui thôi chứ không có tiền :))', 0, 0, 1200000, 'Hoàn thành', '2020-09-26 01:39:27'),
(85, 111, 'oke', 0, 0, 1700000, 'Đang xử lý', '2020-09-26 10:27:46'),
(86, 114, 'da', 0, 30, 1190000, 'Đang xử lý', '2020-09-26 10:30:37'),
(87, 117, 'Giao hàng đúng giờ!', 0, 0, 3400000, 'Đang xử lý', '2020-09-26 14:16:02'),
(88, 117, 'Đổi địa chỉ: Hưng Yên', 0, 0, 1700000, 'Đang xử lý', '2020-09-26 14:18:04'),
(89, 117, '', 100000, 0, 1600000, 'Đang xử lý', '2020-09-26 14:19:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id_product` int(11) NOT NULL,
  `id_cate` int(11) NOT NULL,
  `product_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(5) NOT NULL,
  `price` float NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci COMMENT 'Mô tả sản phẩm',
  `date_creat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `percent` tinyint(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`id_product`, `id_cate`, `product_name`, `quantity`, `price`, `img`, `description`, `date_creat`, `status`, `percent`) VALUES
(1, 3, 'Giày Nike M2K Tekno trắng bạc', 100, 1500000, 'Nike-M2K-Tekno-Cool-White-300x300.jpg', 'Nike M2K Tekno trắng bạc', '2020-08-08 21:19:48', 'new', 0),
(2, 3, 'Giày Nike M2K Tekno trắng cam', 100, 1500000, 'Nike-M2K-Tekno-White-Black-Orange-Replica-300x300.jpg', 'Nike M2K Tekno trắng cam', '2020-08-08 22:33:34', 'sale', 20),
(7, 2, 'Giày Adidas Prophere đen đế trắng', 100, 1200000, '2_giay-adidas-prophere-den-de-trang-replica-300x300.jpg', 'Adidas Prophere đen đế trắng', '2020-08-18 22:10:56', 'sale', 35),
(8, 2, 'Giày Adidas Yeezy 700 V3 Alvah', 100, 2500000, '2_giay-adidas-Yeezy-Boost-700-V3-Alvah-replica-1-300x300.jpeg', 'Adidas Yeezy 700 V3 Alvah', '2020-08-18 22:14:17', 'sale', 33),
(9, 2, 'Giày Adidas Yeezy 700 Utility Black', 100, 2500000, '2_Giay-adidas-yeezy-700-utility-black-replica-2-300x300.jpg', 'Adidas Yeezy 700 Utility Black', '2020-08-18 22:14:55', 'new', 0),
(10, 18, 'Giày Vans Vault Old Skool Black White', 100, 1200000, 'vans-vault-old-skool-black-white-replica-300x300.jpeg', 'Vans Vault Old Skool Black White', '2020-08-24 00:10:06', 'sale', 34),
(11, 2, 'Giày Adidas Prophere đen sọc trắng', 100, 1200000, '2_adidas-prophere-den-trang-replica-300x300.jpg', 'Giày Adidas Prophere đen sọc trắng', '2020-08-30 23:24:29', 'old', 25),
(12, 2, 'Giày Adidas Prophere đỏ mận', 100, 1200000, '2_adidas-prophere-do-man-replica-1-300x300.jpg', 'Adidas Prophere đỏ mận', '2020-08-30 23:26:10', 'new', 0),
(13, 2, 'Giày Adidas Prophere xanh đậm', 100, 1200000, '2_adidas-prophere-xanh-dam-replica-300x300.jpg', 'Giày Adidas Prophere xanh đậm', '2020-08-30 23:26:56', 'new', 0),
(14, 2, 'Giày Adidas Alphabounce Instinct M xám đỏ', 100, 2000000, '2_Giay-Adidas-Alphabounce-Instinct-M-xam-do-replica1-300x300.jpg', 'Giày Adidas Alphabounce Instinct M xám đỏ', '2020-08-30 23:27:38', 'sale', 10),
(15, 2, 'Giày Adidas Alphabounce Instinct M full đen', 100, 2000000, '2_giay-adidas-alphabounce-instinct-m-full-den-replica-5-300x300.jpg', 'Giày Adidas Alphabounce Instinct M full đen', '2020-08-30 23:28:18', 'new', 0),
(16, 2, 'Giày Adidas Alphabounce Instinct M xám xanh', 100, 2000000, '2_Giay-Adidas-Alphabounce-Instinct-M-xam-xanh-300x300.jpg', 'Giày Adidas Alphabounce Instinct M xám xanh', '2020-08-30 23:28:47', 'sale', 45),
(17, 2, 'Giày Adidas Alphabounce Instinct M đen trắng', 100, 2000000, '2_Giay-Adidas-Alphabounce-Instinct-M-trang-do-300x300.jpg', 'Giày Adidas Alphabounce Instinct M đen trắng', '2020-08-30 23:29:14', 'new', 0),
(18, 2, 'Giày Adidas Alphabounce Beyond hồng xám', 100, 1400000, '2_giay-adidas-alphabounce-hong-cat-replica-300x300.jpg', 'Giày Adidas Alphabounce Beyond hồng xám', '2020-08-30 23:31:14', 'sale', 37),
(19, 2, 'Giày Adidas EQT Bask ADV đen trắng phản quang', 100, 1300000, '2_adidas-eqt-trang-den-phan-quang-replica-300x300.jpg', 'Giày Adidas EQT Bask ADV đen trắng phản quang', '2020-08-30 23:33:41', 'sale', 39),
(20, 2, 'Giày Adidas NMD R1 Japan Black', 100, 1350000, '2_giay-adidas-nmd-r113.jpg', '<p>Gi&agrave;y Adidas NMD R1 Japan Black</p>\r\n', '2020-08-30 23:36:10', 'new', 0),
(21, 3, 'Giày Nike Air Jordan 1 Low SB UNC', 100, 2000000, '3_giay-nike-air-jordan-low-sb-unc-300x300.jpg', 'Giày Nike Air Jordan 1 Low SB UNC', '2020-08-30 23:44:27', 'new', 0),
(22, 3, 'Giày Nike Air Force 1 Shadow Beige Pale Ivory', 100, 1300000, '3_Nike-Air-Force-1-Shadow-Beige-Pale-Ivory-replica-300x300.jpg', 'Giày Nike Air Force 1 Shadow Beige Pale Ivory', '2020-08-30 23:45:22', 'new', 0),
(23, 3, 'Giày Nike Air Force 1 Shadow White Magic Flamingo', 100, 1300000, '3_nike-air-force-1-shadow-white-magic-flamingo-replica-300x300.jpg', 'Giày Nike Air Force 1 Shadow White Magic Flamingo', '2020-08-30 23:45:49', 'sale', 15),
(24, 3, 'Giày Nike Air Force 1 Shadow Triple White', 100, 1300000, '3_nike-air-force-1-shadow-triple-white-replica-300x300.jpg', 'Giày Nike Air Force 1 Shadow Triple White', '2020-08-30 23:46:28', 'old', 0),
(25, 3, 'Giày Nike Air Jordan 1 Low White', 100, 2000000, '3_Air-Jordan-1-Low-Triple-White-Replica-300x300.jpg', 'Giày Nike Air Jordan 1 Low White', '2020-08-30 23:48:08', 'old', 0),
(26, 3, 'Giày Nike SB Dunk Low Ben & Jerry’s Chunky Dunky', 100, 2000000, '3_nike-sb-dunk-low-ben-jerrys-chunky-dunky-replica-300x300.jpg', 'Giày Nike SB Dunk Low Ben & Jerry’s Chunky Dunky', '2020-08-30 23:48:46', 'sale', 27),
(27, 3, 'Giày Nike Air Max 270 hồng', 100, 2000000, '3_giay-nike-air-max-270-hong-replica-300x300.jpg', 'Giày Nike Air Max 270 hồng', '2020-08-30 23:49:18', 'sale', 29),
(28, 3, 'Giày Nike Air Max 97 full đen', 100, 1500000, '3_giay-nike-air-max-97-full-den-replica-300x300.jpg', 'Giày Nike Air Max 97 full đen', '2020-08-30 23:49:52', 'old', 0),
(29, 3, 'Giày Nike Air Jordan 1 Retro High Dior', 100, 3000000, '3_giay-nike-air-jordan-1-dior-replica-300x300.jpg', 'Giày Nike Air Jordan 1 Retro High Dior', '2020-08-30 23:52:07', 'new', 0),
(30, 3, 'Giày Nike Air Uptempo xanh trắng', 100, 1600000, '2_nike-air-uptempo-trang-xanh-replica-300x300.jpg', 'Giày Nike Air Uptempo xanh trắng', '2020-08-30 23:52:51', 'new', 0),
(31, 3, 'Giày Nike Air Uptempo trắng đỏ', 100, 1600000, '3_nike-air-uptempo-trang-do-replica-300x300.jpg', 'Giày Nike Air Uptempo trắng đỏ', '2020-08-30 23:53:23', 'new', 0),
(34, 18, 'Giày Vans UA Authentuc Packing Tape', 100, 1350000, '18_VN0A2Z5IWN4-300x300.jpg', 'Giày Vans UA Authentuc Packing Tape', '2020-08-31 00:08:56', 'sale', 12),
(35, 18, 'Giày Vans Authentic National Geographic', 100, 1450000, '18_VN0A2Z5I002-300x300.jpg', 'Vans Authentic National Geographic', '2020-08-31 00:10:56', 'old', 0),
(36, 18, 'Giày Vans UA Authentic SF KIDE', 100, 1600000, '18_VN0A3MU6WOK-300x300.jpg', 'Vans UA Authentic SF KIDE', '2020-08-31 00:11:52', 'sale', 23),
(37, 18, 'Giày Vans UA Authentic Iridescent Check', 100, 1450000, '18_VN0A2Z5ISRY-2-300x300.jpg', 'Vans UA Authentic Iridescent Check', '2020-08-31 00:13:06', 'sale', 13),
(38, 18, 'Giày Vans Authentic Pig Suede', 100, 1900000, '18_VN0A2Z5IV77-1-300x300.jpg', 'Vans Authentic Pig Suede', '2020-08-31 00:13:54', 'sale', 11),
(39, 18, 'Giày Vans Authentic 44 DX Anaheim Factory', 100, 1900000, '18_VN0A38ENMR9-DRAKE-300x300.jpg', 'Vans Authentic 44 DX Anaheim Factory', '2020-08-31 00:15:06', 'old', 0),
(40, 18, 'Giày Vans Authentic OTW Repeat', 100, 1400000, '2_VN0A38EMUKL-DRAKE-300x300.jpg', '<p>Vans Authentic OTW Repeat</p>\r\n', '2020-08-31 00:16:00', 'sale', 29),
(41, 18, 'Giày Vans UA Authentic Patchwork Denim', 100, 1500000, '18_VN0A38EMQ9H-DRAKE-300x300.jpg', 'Vans UA Authentic Patchwork Denim', '2020-08-31 00:17:29', 'new', 0),
(42, 18, 'Giày Vans Anaheim Factory Sid DX Red', 100, 2300000, '18_VN0A4BTXVTM-300x300.jpg', 'VANS ANAHEIM FACTORY SID DX', '2020-08-31 00:18:55', 'new', 0),
(43, 18, 'Giày Vans UA SK8-HI 38 DX Anaheim Factory', 100, 2400000, '18_VN0A38GFTIO-300x300.jpg', 'Vans UA SK8-HI 38 DX Anaheim Factory', '2020-08-31 00:21:02', 'old', 0),
(44, 18, 'Giày Vans UA Era Mother Earth', 100, 1900000, '18_VN0A4U39WZ2-300x300.jpg', '<p>Vans UA Era Mother Earths</p>\r\n', '2020-08-31 00:22:02', 'new', 0),
(45, 18, 'Giày Vans UA Style 238 Mother earth', 100, 2500000, '18_VN0A3JFIWZ2-300x300.jpg', '<p>Vans UA Style 238 Mother earth</p>\r\n', '2020-08-31 00:22:43', 'new', 0),
(48, 2, 'Giày Stan Smith Màu trắng Standard', 100, 1700000, '2_EH0739-STAN-SMITH-SHOES-8-300x300.jpg', '<p>Gi&agrave;y Stan Smith M&agrave;u trắng Standard</p>\r\n', '2020-09-23 21:43:42', 'new', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_star_rating`
--

CREATE TABLE `tbl_star_rating` (
  `id_product` int(11) NOT NULL,
  `id_account` int(11) NOT NULL,
  `rating` tinyint(1) NOT NULL,
  `rating_proc` text COLLATE utf8_unicode_ci NOT NULL,
  `day_create` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_star_rating`
--

INSERT INTO `tbl_star_rating` (`id_product`, `id_account`, `rating`, `rating_proc`, `day_create`) VALUES
(1, 10, 4, 'Đẹp', '2020-08-23 21:16:32'),
(17, 96, 3, 'Đi ko êm', '2020-09-19 11:54:06'),
(26, 92, 5, 'Đẹp thật sự!', '2020-09-19 11:14:52'),
(44, 92, 4, 'Đẹp quá', '2020-09-19 21:08:23');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_account`
--
ALTER TABLE `tbl_account`
  ADD PRIMARY KEY (`id_account`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id_post`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id_cate`);

--
-- Chỉ mục cho bảng `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  ADD PRIMARY KEY (`id_order`,`id_product`,`size`),
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_product` (`id_product`);

--
-- Chỉ mục cho bảng `tbl_discount`
--
ALTER TABLE `tbl_discount`
  ADD PRIMARY KEY (`id_discount`);

--
-- Chỉ mục cho bảng `tbl_img_product`
--
ALTER TABLE `tbl_img_product`
  ADD PRIMARY KEY (`id_detail_img`),
  ADD KEY `id_product` (`id_product`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_customer` (`id_account`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_cate` (`id_cate`);

--
-- Chỉ mục cho bảng `tbl_star_rating`
--
ALTER TABLE `tbl_star_rating`
  ADD PRIMARY KEY (`id_product`,`id_account`),
  ADD KEY `id_account` (`id_account`),
  ADD KEY `id_product` (`id_product`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_account`
--
ALTER TABLE `tbl_account`
  MODIFY `id_account` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT cho bảng `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id_cate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `tbl_discount`
--
ALTER TABLE `tbl_discount`
  MODIFY `id_discount` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_img_product`
--
ALTER TABLE `tbl_img_product`
  MODIFY `id_detail_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  ADD CONSTRAINT `fk_id_order_tbl_detail_order_tbl_order` FOREIGN KEY (`id_order`) REFERENCES `tbl_order` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_product_tbl_detail_order_tbl_product` FOREIGN KEY (`id_product`) REFERENCES `tbl_product` (`id_product`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_img_product`
--
ALTER TABLE `tbl_img_product`
  ADD CONSTRAINT `fk_id_product_tbl_img_product_tbl_product` FOREIGN KEY (`id_product`) REFERENCES `tbl_product` (`id_product`);

--
-- Các ràng buộc cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `fk_id_customer_tbl_order_tbl_customer` FOREIGN KEY (`id_account`) REFERENCES `tbl_account` (`id_account`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `fk_id_cate_tbl_product_tbl_category` FOREIGN KEY (`id_cate`) REFERENCES `tbl_category` (`id_cate`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_star_rating`
--
ALTER TABLE `tbl_star_rating`
  ADD CONSTRAINT `fk_id_account_tbl_star_rating_tbl_account` FOREIGN KEY (`id_account`) REFERENCES `tbl_account` (`id_account`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_product_tbl_star_rating_tbl_product` FOREIGN KEY (`id_product`) REFERENCES `tbl_product` (`id_product`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
