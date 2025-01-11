-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 11, 2025 lúc 02:09 AM
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
  `id` int(50) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhsachsanpham`
--

INSERT INTO `danhsachsanpham` (`id`, `tendanhmuc`, `thutu`) VALUES
(7, 'Máy Tính', 1),
(9, 'Điện Thoại', 2),
(10, 'Đồng Hồ', 3),
(11, 'Máy Tính Bảng', 4),
(12, 'Laptop', 5),
(13, 'Máy Ảnh', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(100) NOT NULL,
  `giasp` varchar(100) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `tomtat` tinytext NOT NULL,
  `noidung` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `tensanpham`, `giasp`, `hinhanh`, `tomtat`, `noidung`, `id`) VALUES
(2, 'Laptop Acer Aspire 3 Spin A3SP14-31PT-387Z', '9.490.000 ', '1736443563_', 'cấu hình máy khỏe', '1. Laptop Acer Aspire 3 Spin 14 A3SP14-31PT-387Z - Laptop lai nhỏ gọn, hiệu năng ổn định\r\n1.1. Tốc độ đọc - ghi lớn, khả năng đa nhiệm ổn định\r\n1.2. Vẻ ngoài hiện đại, hỗ trợ xoay 360 độ\r\n1.3. Hoạt động mượt mà với dòng vi xử lý Core i3-N305\r\n1.4. Thời lượng hoạt động bền bỉ, linh hoạt sử dụng với đa dạng cổng kết nối\r\n1.5. Màn hình 14 inch sắc nét, tích hợp cảm ứng tiện lợi', 12),
(3, 'Laptop ASUS Gaming VivoBook K3605ZC-RP564W', '18.490.000 ', '1736447475_', 'laptop nhà asus', '1. Laptop Asus Gaming Vivobook K3605ZF-RP634W – Chinh phục mọi nhu cầu\r\n1.1. CPU mạnh mẽ, card đồ họa lý tưởng\r\n1.2. Chuẩn RAM DDR4, ổ cứng SSD\r\n1.3. Thiết kế gaming, màu tối giản\r\n1.4. Màn hình lớn, tốc độ quét mượt\r\n1.5. Pin hoạt động lâu, đa cổng giao tiếp ', 12),
(4, 'nitro5', '16.999.000', '1736450488_', 'nitro5 dành cho anh em chơi game ', '1. Laptop Acer Nitro V – Cấu hình mạnh mẽ, đậm chất chiến binh\r\n1.1. Nitro V ANV15 Chinh phục trận đấu với hiệu năng ấn tượng\r\n1.2. Nitro V ANV15 xử lý đồ họa vượt trội với card NVIDIA GeForce RTX 2050\r\n1.3. Nitro V ANV15-51-58AN với Dual-Fan Cooling tản nhiệt tối ưu\r\n1.4. Nitro V ANV15 có thể lưu trữ khổng lồ với SSD 512GB PCIe\r\n1.5. Máy Nitro V ANV15 mang thiết kế gaming cá tính\r\n1.6. Thỏa sức kết nối phụ kiện với đa cổng kết nối cùng Nitro V', 12),
(6, 'Laptop MSI Modern 14 C12MO-660VN', '17.490.000 ', '1736450714_', 'máy cấu hình cao', '1. Laptop MSI Modern 14 C12MO-660VN - Thoải mái lưu trữ, xử lý nhanh chóng \r\n1.1. Tăng tốc độ xử lý, lưu trữ linh hoạt \r\n1.2. Truy xuất cực nhanh, card đồ họa ', 12),
(7, 'PC Mini Pc Asus NUC 14 Pro Revel Canyon U7', '19.490.000', '1736451068_', 'một chiếc pc mini', 'Thương hiệu ASUS NUC đại diện cho cam kết về sự xuất sắc trong công nghệ, ưu tiên thiết kế sản phẩm sáng tạo, nhằm đẩy mạnh giới hạn hiệu suất và trải nghiệm người dùng.', 7),
(8, 'PC CPS văn phòng S04', '8.990.000 ', '1736451182_', 'pc dành cho văn phòng', '1. PC CPS Văn Phòng S4 – Hiệu năng ấn tượng, linh kiện chất lượng\r\n1.1. Chipset Intel Core i5, VGA với khả năng xử lý đồ họa ấn tượng\r\n1.2. Mainboard hiện đại ASROCK, dung lượng RAM 8GB ổn định cùng ổ cứng SSD 256GB\r\n1.3. Bộ nguồn với công suất lớn tiết kiệm điện cùng bộ case ấn tượng', 7),
(10, 'PC CPS Gaming G1', '10.590.000', '1736451485_', 'pc gaming', 'Nội dung chính\r\n\r\n1. PC CPS Gaming G1 mạnh mẽ, giá siêu tốt\r\n1.1. Hiện đại và ấn tượng\r\n1.2. Mạnh mẽ và bứt phá', 7),
(11, 'PC CPS Đồ Hoạ D07', ' 23.290.000', '1736451564_', 'pc chuyên đồ họa', 'Nội dung chính\r\n\r\n1. Máy tính PC CPS Đồ Họa D07 - Hiệu năng vượt trội để chinh phục mọi tác vụ\r\n1.1. Hiệu năng mạnh mẽ, thoải mái xử lý nhanh mọi tác vụ\r\n1.2. Tích hợp card đồ họa rời, mức nhiệt ổn định với Deepcool AG620 ARGB\r\n1.3. Kiểu dáng mạnh mẽ, dễ dàng nâng cấp', 7),
(12, 'DJI Osmo Pocket 3', '12.990.000', '1736451757_', 'máy ảnh pocket 3', '1. So sánh máy quay chống rung DJI Osmo Pocket 3 Combo với Basic\r\n2. Máy quay 4K chống rung DJI Osmo Pocket 3 Combo - Hiệu năng quay chụp vô cùng mạnh mẽ\r\n2.1. Chống rung 3 trục - Osmo Pocket 3 Combo quay chụp ổn định khi di chuyển\r\n2.2. Thiết kế tiện lợi, quay video 4K trong thời gian 116 phút\r\n2.3. DJI Osmo Pocket 3 Combo Quay chụp siêu chân thực tính năng màu D-Log M 10 bit\r\n2.4. Màn hình cảm ứng OLED 2 inch xoay hiện đại\r\n3. Hướng dẫn sử dụng máy quay 4K DJI Osmo Pocket 3 Combo\r\n3.1. Các thao tác chính trên giao diện của camera Osmo Pocket 3 Combo\r\n3.2. Cách kết nối DJI Osmo Pocket 3 Combo với các phụ kiện', 13),
(13, 'Camera GoPro Hero 12', '9.490.000', '1736452080_', 'Gopro hero 12', '3.1. Kết nối smartphone, các phụ kiện linh hoạt qua kết nối WiFi, Bluetooth\r\n3.2. Chống rung HyperSmooth 6.0 cho từng thước phim hoàn hảo\r\n3.3. Bất chấp thời tiết, mưa, ghi hình dưới nước với khả năng chống thấm siêu bền\r\n3.4. Quay siêu nét với chất lượng video đến 5.3K cùng khả năng quay góc linh hoạt\r\n3.5. Chế độ HDR cùng dải màu 10 bit ghi hình chuẩn điện ảnh\r\n3.6. Tích hợp pin Enduro 1720mAh cho thời gian ghi hình kéo dài đến 2.5 giờ\r\n3.7. Ngoại hình gọn nhẹ, Bundle phụ kiện đa dạng, màn hình LCD cảm ứng dễ dàng thiết lập', 13),
(14, 'Camera DJI Osmo Action 4', ' 6.990.000', '1736452167_', 'camera action 4', 'Nội dung chính\r\n\r\n1. Camera hành động DJI Osmo Action 4 - Chống rung xuất sắc, ghi hình chất lượng 4K\r\n1.1. Chất lượng ghi hình lên tới 4K cùng tính năng chống rung cao cấp\r\n1.2. Kiểu dáng gọn nhẹ, có thể linh hoạt mang theo bên mình', 13),
(15, 'Camera Insta360 One X3', '8.490.000 ', '1736452245_', 'Insta360 One X3', '3. Camera hành trình Insta360 X3 - Lưu lại mọi chặng đường ấn tượng\r\n3.1. Thiết kế nhỏ gọn, màn cảm ứng tiện lợi\r\n3.2. Cảm biến Insta360 X3 chất lượng, nhiều công nghệ ấn tượng\r\n3.3. Trải nghiệm ghi hình tới 5.7K, hệ thống chống rung FlowState siêu chất\r\n3.4. Chống nước mạnh mẽ, pin lớn thoải mái quay chụp', 13),
(17, 'iPad Pro M4', '27.490.000', '1736452398_', 'iPad Pro M4', 'Máy mới 100%, đầy đủ phụ kiện từ nhà sản xuất. Sản phẩm có mã ZA/A (được Apple Việt Nam phân phối chính thức).\r\niPad Pro\r\nCáp Sạc USB-C (1 mét)\r\nBộ Tiếp Hợp Nguồn USB-C 20W\r\nKhăn lau màn hình trong phiên bản mặt kính màn hình có cấu trúc nano\r\n1 ĐỔI 1 trong 30 ngày nếu có lỗi phần cứng nhà sản xuất. Bảo hành 12 tháng tại trung tâm bảo hành chính hãng Apple: CareS.vn(xem chi tiết)\r\nXem thông tin kích hoạt bảo hành các sản phẩm Apple (tại đây)\r\nGiá sản phẩm đã bao gồm VAT', 11),
(18, 'Samsung Galaxy Tab S9', '9.490.000', '1736452476_', 'Samsung Galaxy Tab S9', 'Mới, đầy đủ phụ kiện từ nhà sản xuất\r\nSách hướng dẫn, Bút cảm ứng, Cây lấy sim, Cáp Type C - Type C, Hộp máy\r\nBảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi phần cứng từ nhà sản xuất. (xem chi tiết)\r\nGiá sản phẩm đã bao gồm VAT', 11),
(19, 'Samsung Galaxy Tab S9 FE', '14.990.000', '1736452558_', 'Samsung Galaxy Tab S9 FE', 'Mới, đầy đủ phụ kiện từ nhà sản xuất\r\nBút cảm ứng, Cáp Type C - Type C, Hộp máy, Sách hướng dẫn\r\nBảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi phần cứng từ nhà sản xuất. (xem chi tiết)\r\nGiá sản phẩm đã bao gồm VAT', 11),
(20, 'Xiaomi Redmi Pad SE Wifi', '11.450.000', '1736452632_', 'Xiaomi Redmi Pad SE Wifi', 'Mới, đầy đủ phụ kiện từ nhà sản xuất\r\nBảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi phần cứng từ nhà sản xuất. (xem chi tiết)\r\nGiá sản phẩm đã bao gồm VAT', 11),
(21, 'Vòng đeo tay thông minh Xiaomi Mi Band 9 Pro', '', '1736452735_', 'Vòng đeo tay thông minh Xiaomi Mi Band 9 Pro', 'Mới, đầy đủ phụ kiện từ nhà sản xuất\r\nVòng đeo tay, sạc, sách hướng dẫn sử dụng\r\nBảo hành 12 tháng chính hãng 1 đổi 1 trong 15 ngày nếu có lỗi phần cứng từ NSX.(xem chi tiết)\r\nGiá sản phẩm đã bao gồm VAT', 10),
(22, 'Đồng hồ thông minh Huawei Watch D2', '8.490.000', '1736452851_', 'Đồng hồ thông minh Huawei Watch D2', 'Mới, đầy đủ phụ kiện từ nhà sản xuất\r\n1x Đồng hồ (có 2 dây đeo (1 dây cỡ lớn và 1 dây đeo cỡ nhỏ))\r\n1x Thước đo chu vi cổ tay\r\n1x Cáp sạc không dây\r\n1x Hướng dẫn sử dụng\r\nBảo hành 12 tháng chính hãng 1 đổi 1 trong 15 ngày nếu có lỗi phần cứng từ NSX.(xem chi tiết)\r\nGiá sản phẩm đã bao gồm VAT', 10),
(23, 'Đồng hồ Samsung Galaxy Watch FE 40mm', '2.690.000', '1736452946_', 'Đồng hồ Samsung Galaxy Watch FE 40mm', '1. Vì sao nên chọn mua đồng hồ thông minh Samsung Galaxy Watch FE?\r\n2. Đồng hồ thông minh Samsung Galaxy Watch FE - Thiết kế năng động, hiệu năng mượt mà\r\n2.1. Tạo hình hiện đại, năng động với đa dạng các tuỳ chọn màu sắc\r\n2.2. Hiệu năng mạnh mẽ tới từ chipset mạnh mẽ\r\n2.3. Đa dạng cảm biến thông minh, giúp theo dõi sức khoẻ và rèn luyện tốt hơn', 10),
(24, 'Apple Watch Series 10 42mm', '1.790.000', '1736452992_', 'Apple Watch Series 10 42mm', 'Hàng chính hãng Apple Việt Nam, Mới\r\nApple Watch Series 10\r\nDây đeo\r\nCáp Sạc Nhanh Từ Tính Có Đầu Nối USB-C (1m) Của Apple Watch\r\n1 ĐỔI 1 trong 30 ngày nếu có lỗi phần cứng nhà sản xuất. Bảo hành 12 tháng tại trung tâm bảo hành chính hãng Apple: CareS.vn(xem chi tiết)\r\nXem thông tin kích hoạt bảo hành các sản phẩm Apple (tại đây)\r\nGiá sản phẩm đã bao gồm VAT', 10),
(25, 'Samsung Galaxy M55', '10.190.000', '1736453103_', 'Samsung Galaxy M55', 'Mới, đầy đủ phụ kiện từ nhà sản xuất\r\nHộp, Sách hướng dẫn, Cáp Type C, Cây lấy sim\r\nBảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi phần cứng từ nhà sản xuất. (xem chi tiết)\r\nGiá sản phẩm đã bao gồm VAT', 9),
(26, 'Samsung Galaxy S24', '13.990.000', '1736453152_', 'Samsung Galaxy S24', 'Mới, đầy đủ phụ kiện từ nhà sản xuất\r\nĐiện thoại thông minh\r\nCáp truyền dữ liệu\r\nQue lấy sim\r\nBảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi phần cứng từ nhà sản xuất. (xem chi tiết)\r\nGiá sản phẩm đã bao gồm VAT', 9),
(27, 'iPhone 16 Pro Max', '33.290.000', '1736453228_', 'iPhone 16 Pro Max', 'Màn hình Super Retina XDR 6,9 inch lớn hơn có viền mỏng hơn, đem đến cảm giác tuyệt vời khi cầm trên tay.\r\nĐiều khiển Camera - Chỉ cần trượt ngón tay để điều chỉnh camera giúp chụp ảnh hoặc quay video đẹp hoàn hảo và siêu nhanh.\r\niPhone 16 Pro Max có thiết kế titan cấp 5 với lớp hoàn thiện mới, tinh tế được xử lý bề mặt vi điểm.\r\niPhone 16 Pro Max được cài đặt sẵn hệ điều hành iOS 18, cho giao diện trực quan, dễ sử dụng và nhiều tính năng hữu ích.', 9),
(28, 'Samsung Galaxy S24 Ultra', '25.000.000', '1736453280_', 'Samsung Galaxy S24 Ultra', 'Trải nghiệm đỉnh cao với hiệu năng mạnh mẽ từ vi xử lý tân tiến, kết hợp cùng RAM 12GB cho khả năng đa nhiệm mượt mà.\r\nLưu trữ thoải mái mọi ứng dụng, hình ảnh và video với bộ nhớ trong 256GB.\r\nNâng tầm nhiếp ảnh di động với hệ thống camera tiên tiến, cho ra đời những bức ảnh và video chất lượng chuyên nghiệp.\r\nThiết kế sang trọng, đẳng cấp, khẳng định phong cách thời thượng.', 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `useer`
--

CREATE TABLE `useer` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `useer`
--

INSERT INTO `useer` (`id`, `username`, `PASSWORD`, `email`) VALUES
(1, 'testuser', 'testpassword', 'test@example.com'),
(2, 'trinhvanh', '$2y$10$J/aNlnovWxKvLjR5Ze0Ogu8FYkNTLUd3VYhwJklEfq/3uC1gi.st2', 'thang1234@gmail.com'),
(3, 'vanh', '$2y$10$ngZej0T8TwiSQwVeb5GCluTrrLRkjrqZgNvBIDVmjgbWiXi71v1A2', 'vanh@gmail.com'),
(4, 'lethang1234', '$2y$10$VdLP2pNltBn29JjhKLGeCOYs/TEGFqtvXaAJZDiAKWm2MVDs74Z7G', 'thang@gmail.com'),
(5, 'lethang12345', '$2y$10$67rSh3jgfVDAP7FwokI1tOkm6XUa.USqzwPfcABMeGttOlXG4c1Bq', 'thang12345@gmail.com');

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
  ADD PRIMARY KEY (`id_sanpham`);

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `useer`
--
ALTER TABLE `useer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
