-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 15, 2025 lúc 05:18 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `baitaplon`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhsachsanpham`
--

CREATE TABLE `danhsachsanpham` (
  `id` int(11) NOT NULL,
  `tendanhmuc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhsachsanpham`
--

INSERT INTO `danhsachsanpham` (`id`, `tendanhmuc`) VALUES
(1, 'Laptop'),
(2, 'PC'),
(3, 'Camera'),
(5, 'Smartphone'),
(7, 'máy tính bảng'),
(8, 'đồng hồ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(255) NOT NULL,
  `giasp` int(100) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `noidung` tinytext NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `tensanpham`, `giasp`, `hinhanh`, `mota`, `noidung`, `id_danhmuc`) VALUES
(54, 'Samsung Galaxy S24 Ultra', 25000000, '1736580363_ss-s24-ultra-xam-222.png', 'Samsung Galaxy S24 Ultra', 'Trải nghiệm đỉnh cao với hiệu năng mạnh mẽ từ vi xử lý tân tiến, kết hợp cùng RAM 12GB cho khả năng đa nhiệm mượt mà. Lưu trữ thoải mái mọi ứng dụng, hình ảnh và video với bộ nhớ trong 256GB.', 5),
(55, 'iPhone 16 Pro Max', 27490000, '1736580408_iphone-16-pro-max.png', 'iPhone 16 Pro Max', 'Màn hình Super Retina XDR 6,9 inch lớn hơn có viền mỏng hơn, đem đến cảm giác tuyệt vời khi cầm trên tay. Điều khiển Camera - Chỉ cần trượt ngón tay để điều chỉnh camera giúp chụp ảnh hoặc quay video', 5),
(58, 'Samsung Galaxy M55', 10190000, '1736581213_dien-thoai-samsung-galaxy-m55.png', 'Apple Watch Series 10 42mm', 'Mới, đầy đủ phụ kiện từ nhà sản xuất Hộp, Sách hướng dẫn, Cáp Type C, Cây lấy sim Bảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi phần cứng từ nhà sản xu', 5),
(60, 'Samsung Galaxy S24', 12990000, '1736581277_dien-thoai-samsung-galaxy-s24-fe_3__4.png', 'Samsung Galaxy S24', 'Mới, đầy đủ phụ kiện từ nhà sản xuất Điện thoại thông minh Cáp truyền dữ liệu Que lấy sim Bảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi phần cứng từ n', 5),
(61, 'Apple Watch Series 10 42mm', 1790000, '1736581337_DHAppleWatch.png', 'Apple Watch Series 10 42mm', 'Hàng chính hãng Apple Việt Nam, Mới Apple Watch Series 10 Dây đeo Cáp Sạc Nhanh Từ Tính Có Đầu Nối USB-C (1m) Của Apple Watch 1 ĐỔI 1 trong 30 ngày nếu có lỗi phần cứng nhà sản xuất. Bảo hành 12 tháng tại', 8),
(62, 'Đồng hồ Samsung Galaxy Watch FE 40mm', 2690000, '1736581396_DHsamsung-galaxy-watch-fe_1_.png', 'Đồng hồ Samsung Galaxy Watch FE 40mm', 'Vì sao nên chọn mua đồng hồ thông minh Samsung Galaxy Watch FE? 2. Đồng hồ thông minh Samsung Galaxy Watch FE - Thiết kế năng động, hiệu năng mượt mà 2.1. Tạo hình hiện đại, năng động với đa dạng các tu', 8),
(64, 'Vòng đeo tay thông minh Xiaomi Mi Band 9 Pro', 12990000, '1736581505_DhXiaoMi Band 9 Pro.png', 'Vòng đeo tay thông minh Xiaomi Mi Band 9 Pro', 'Mới, đầy đủ phụ kiện từ nhà sản xuất Vòng đeo tay, sạc, sách hướng dẫn sử dụng Bảo hành 12 tháng', 8),
(66, 'Xiaomi Redmi Pad SE Wifi', 11450000, '1736581634_xiaomi-redmi-pad-se_1_3.png', 'Xiaomi Redmi Pad SE Wifi', 'Mới, đầy đủ phụ kiện từ nhà sản xuất Bảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi phần cứng từ nhà sản xuất. (xem chi tiết) Giá sản phẩm đã bao gồm VA	', 7),
(67, 'Đồng hồ thông minh Huawei Watch D2', 8490000, '1736581669_DHhuawei_3.png', 'Đồng hồ thông minh Huawei Watch D2', 'Mới, đầy đủ phụ kiện từ nhà sản xuất 1x Đồng hồ (có 2 dây đeo (1 dây cỡ lớn và 1 dây đeo cỡ nhỏ)) 1x Thước đo chu vi cổ tay 1x Cáp sạc không dây 1x Hướng dẫn sử dụng Bảo hành 12 tháng ch	', 8),
(71, 'Samsung Galaxy Tab S9 FE	', 14990000, '1736581876_samsungS9FEPlus.png', 'Samsung Galaxy Tab S9 FE	', 'Mới, đầy đủ phụ kiện từ nhà sản xuất Bút cảm ứng, Cáp Type C - Type C, Hộp máy, Sách hướng dẫn Bảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi phần cứng t	', 7),
(72, 'Samsung Galaxy Tab S9	', 9490000, '1736581914_samsungS9.png', 'Samsung Galaxy Tab S9	', 'Mới, đầy đủ phụ kiện từ nhà sản xuất Sách hướng dẫn, Bút cảm ứng, Cây lấy sim, Cáp Type C - Type C, Hộp máy Bảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi	', 7),
(73, 'iPad Pro M4', 27490000, '1736581952_Ipad Pro M4 .png', 'iPad Pro M4', 'Máy mới 100%, đầy đủ phụ kiện từ nhà sản xuất. Sản phẩm có mã ZA/A (được Apple Việt Nam phân phối chính thức). iPad Pro Cáp Sạc USB-C (1 mét) Bộ Tiếp Hợp Nguồn USB-C 20W Khăn lau màn hình trong phi	', 7),
(74, 'Xiaomi Redmi Pad SE Wifi', 1790000, '1736581989_xiaomi-redmi-pad-se_1_3.png', 'Xiaomi Redmi Pad SE Wifi', ' đầy đủ phụ kiện từ nhà sản xuất\r\nBảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi phần cứng từ nhà sản xuất. (xem chi tiết)\r\nGiá sản phẩm đã bao gồm VAT', 7),
(75, 'Camera Insta360 One X3', 8490000, '1736582024_cmr DJI osmo Pocket3.png', 'Camera Insta360 One X3', '3. Camera hành trình Insta360 X3 - Lưu lại mọi chặng đường ấn tượng 3.1. Thiết kế nhỏ gọn, màn cảm ứng tiện lợi 3.2. Cảm biến Insta360 X3 chất lượng, nhiều công nghệ ấn tượng 3.3. Trải nghiệm gh	', 3),
(76, 'Camera DJI Osmo Action 4', 8990000, '1736582079_camera-hanh-dong-dji-action-4_12_.png', 'Camera DJI Osmo Action 4', '1. Camera hành động DJI Osmo Action 4 - Chống rung xuất sắc, ghi hình chất lượng 4K 1.1. Chất lượng ghi hình lên tới 4K cùng tính năng chống rung cao cấp 1.2. Kiểu dáng gọn nhẹ, có thể linh hoạt mang theo bên	', 3),
(77, 'Camera GoPro Hero 12', 9490000, '1736582146_cmrGOPRO HERO12_2_.webp', 'Camera GoPro Hero 12', 'Chất lượng hình ảnh đỉnh cao, quay video 5.3K siêu nét, chi tiết ấn tượng với dải động rộng. Ổn định HyperSmooth 6.0 cho ra những thước phim mượt mà, chuyên nghiệp ngay cả khi di chuyển mạnh. Chống n	', 3),
(78, 'DJI Osmo Pocket 3	', 12990000, '1736582205_camera-hanh-trinh-insta360-one-x3.png', 'DJI Osmo Pocket 3	', 'ActiveTrack 6.0 hỗ trợ theo dõi các chủ thể và tự động khoá đối tượng trong khung hình chuyển động Chế độ màu D-Log M và HLG 10-bit giúp tái hiện lại cảnh chụp với màu sắc chân thực và sống động	', 3),
(79, 'PC CPS Đồ Hoạ D07	', 23290000, '1736582238_pcdohoa.png', 'PC CPS Đồ Hoạ D07	', 'Trang bị card đồ họa rời NVIDIA GeForce RTX 3060 mang đến hiệu suất đồ họa ấn tượng, xử lý mượt mà các tác vụ thiết kế đồ họa 2D, 3D, render video và chiến game Esports. Bộ vi xử lý Intel Core i5-1460	', 2),
(80, 'PC CPS Gaming G1	', 10590000, '1736582275_pc-cps-gaming-g1.png', 'PC CPS Gaming G1	', 'Nội dung chính 1. PC CPS Gaming G1 mạnh mẽ, giá siêu tốt 1.1. Hiện đại và ấn tượng 1.2. Mạnh mẽ và bứt phá	', 2),
(81, 'PC Mini Pc Asus NUC 14 Pro Revel Canyon U7	', 19490000, '1736582323_pc mini ASUS.png', 'PC Mini Pc Asus NUC 14 Pro Revel Canyon U7	', 'Trang bị bộ vi xử lý Intel Core i7-155H, kết hợp cùng RAM DDR5 tốc độ cao, dễ dàng xử lý mượt mà mọi tác vụ, từ công việc văn phòng, giải trí đa phương tiện. Tích hợp WiFi 6 + Bluetooth cho kết nối in	', 2),
(82, 'PC CPS văn phòng S04	', 17490000, '1736582370_pc-cps-van-phong-s4.png', 'PC CPS văn phòng S04	', 'Bộ vi xử lý Intel Core i5 12400 đảm bảo bạn có đủ sức mạnh để chạy các ứng dụng học tập,văn phòng và các tựa game nhẹ. Ram 8GB giúp chạy nhiều ứng dụng cùng lúc mà không gặp phải vấn đề về	', 2),
(83, 'Laptop MSI Modern 14 C12MO-660VN	', 17490000, '1736582408_MSI.png', 'Laptop MSI Modern 14 C12MO-660VN	', '1. Laptop MSI Modern 14 C12MO-660VN - Thoải mái lưu trữ, xử lý nhanh chóng 1.1. Tăng tốc độ xử lý, lưu trữ linh hoạt 1.2. Truy xuất cực nhanh, card đồ họa	', 1),
(84, 'nitro5	', 16999000, '1736582461_nitro5_.png', 'nitro5 dành cho anh em chơi game	', 'Chip Core i5-12500H cùng card rời RTX 3050 cho khả năng chiến các tựa game nặng, chỉnh sửa hình ảnh trên PTS, Render video ngắn mượt mà. Ram 8GB, ổ cứng SSD 512GB mang đến tốc độ xử lý nhanh cùng đa nhiệm mư	', 1),
(85, 'Laptop ASUS Gaming VivoBook K3605ZC-RP564W	', 18490000, '1736582498_ASUS.png', 'Laptop ASUS Gaming VivoBook K3605ZC-RP564W	', 'Laptop Asus Gaming Vivobook K3605ZF-RP634W – Chinh phục mọi nhu cầu 1.1. CPU mạnh mẽ, card đồ họa lý tưởng 1.2. Chuẩn RAM DDR4, ổ cứng SSD 1.3. Thiết kế gaming, màu tối giản 1.4. Màn hình lớn, tốc độ quét	', 1),
(86, 'Laptop Acer Aspire 3 Spin A3SP14-31PT-387Z', 9490000, '1736582538_Acer.png', 'cấu hình máy khỏe	', '1. Laptop Acer Aspire 3 Spin 14 A3SP14-31PT-387Z - Laptop lai nhỏ gọn, hiệu năng ổn định 1.1. Tốc độ đọc - ghi lớn, khả năng đa nhiệm ổn định 1.2. Vẻ ngoài hiện đại, hỗ trợ xoay 360 độ 1.3. Hoạt động	', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `useer`
--

CREATE TABLE `useer` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhsachsanpham`
--
ALTER TABLE `danhsachsanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- Chỉ mục cho bảng `useer`
--
ALTER TABLE `useer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhsachsanpham`
--
ALTER TABLE `danhsachsanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT cho bảng `useer`
--
ALTER TABLE `useer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `danhsachsanpham` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
