-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 24, 2021 lúc 04:45 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `laptop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `ma_hd` int(11) NOT NULL,
  `ngay_mua` varchar(20) NOT NULL,
  `ghi_chu` varchar(200) NOT NULL,
  `tinh_trang` varchar(20) NOT NULL DEFAULT '0',
  `ma_tk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoa_don`
--

INSERT INTO `hoa_don` (`ma_hd`, `ngay_mua`, `ghi_chu`, `tinh_trang`, `ma_tk`) VALUES
(1, '12-12-2021', '', '1', 2),
(2, '12-12-2021', 'Giao giờ hành chính ', '1', 3),
(3, '12-12-2021', 'Giao hàng nhanh ', '0', 4),
(4, '12-12-2021', 'Admin', '0', 1),
(5, '12-12-2021', '', '0', 2),
(6, '12-12-2021', '', '0', 1),
(7, '21-12-2021', '', '0', 2),
(8, '21-12-2021', '', '0', 2),
(9, '21-12-2021', '', '0', 2),
(10, '21-12-2021', '', '0', 2),
(17, '21-12-2021', '', '0', 2),
(18, '21-12-2021', '', '0', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don_chi_tiet`
--

CREATE TABLE `hoa_don_chi_tiet` (
  `ma_hd` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `don_gia` int(11) NOT NULL,
  `ma_sp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoa_don_chi_tiet`
--

INSERT INTO `hoa_don_chi_tiet` (`ma_hd`, `so_luong`, `don_gia`, `ma_sp`) VALUES
(1, 1, 31990000, 1),
(2, 9, 18890000, 5),
(3, 2, 33490000, 9),
(3, 1, 44990000, 7),
(4, 1, 31990000, 1),
(5, 1, 44990000, 7),
(5, 3, 31490000, 8),
(6, 2, 60000000, 25),
(7, 2, 31990000, 1),
(8, 3, 33990000, 4),
(9, 1, 19590000, 3),
(10, 1, 19590000, 3),
(10, 1, 22499000, 6),
(18, 3, 33990000, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_hang`
--

CREATE TABLE `loai_hang` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loai_hang`
--

INSERT INTO `loai_hang` (`ma_loai`, `ten_loai`) VALUES
(11, 'DELL'),
(12, 'Asus'),
(13, 'MSI'),
(14, 'Acer'),
(15, 'Lenovo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `ma_sp` int(11) NOT NULL,
  `ten_sp` varchar(100) NOT NULL,
  `hinh` varchar(100) NOT NULL,
  `hinh1` varchar(100) NOT NULL,
  `hinh2` varchar(100) NOT NULL,
  `hinh3` varchar(100) NOT NULL,
  `don_gia` int(11) NOT NULL,
  `mo_ta` varchar(500) NOT NULL,
  `ma_loai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`ma_sp`, `ten_sp`, `hinh`, `hinh1`, `hinh2`, `hinh3`, `don_gia`, `mo_ta`, `ma_loai`) VALUES
(1, 'Laptop Dell Gaming G3 15 i7', 'dell-g3.webp', 'dell-g3-img2.webp', 'dell-g3-img3.webp', 'dell-g3-img4.webp', 31990000, 'CPU: i7-10750H 2.6GHz / RAM: 16GB DDR4 2 khe (1 khe 8GB + 1 khe 8GB) 2933 MHz / Ổ cứng: SSD 512 GB / Màn hình: 15.6\" Full HD (1920 x 1080) 120Hz / Card màn hình: Card rời GTX 1660Ti 6GB / Hệ điều hành: Windows 10 Home SL / Thiết kế: Vỏ nhựa / Trọng lượng: Nặng 2.58 kg\r\n\r\n', 11),
(2, 'Laptop Dell Gaming G7 15 7500 i7', 'dell-g7.jpg', 'dell-g7-img2.webp', 'dell-g7-img3.webp', 'dell-g7-img4.webp', 38999000, 'CPU : Intel Core i7-10750H / RAM : 8 GB DDR4 2933 MHz / Màn hình : 15.6\", 1920 x 1080 Pixel WVA 144 Hz 300 nits / Đồ họa : NVIDIA GeForce GTX 1660Ti 6 GB / Ổ cứng : SSD 512 GB / Hệ điều hành : Windows 10 / Trọng lượng : 2.56kg\r\n\r\n', 11),
(3, 'Laptop Dell Inspiron 14 5415 R5', 'dell-inspiron-14.webp', 'dell-inspiron-14-img2.webp', 'dell-inspiron-14-img3.webp', 'dell-inspiron-14-img4.jpg', 19590000, 'CPU : Ryzen 5500U 2.1GHz / RAM : 8 GB DDR4 2 khe (1 khe 8GB + 1 khe rời)3200 MHz / \r\nỔ cứng : 256 GB SSD NVMe PCIe / Màn hình : 14\"Full HD (1920 x 1080) / Card màn hình :\r\nCard tích hợpRadeon / Đặc biệt : Có đèn bàn phím / Hệ điều hành : Windows 10 Home SL / \r\nThiết kế : Nắp lưng và chiếu nghỉ tay bằng kim loại / Trọng lượng : 1.44 kg\r\n', 11),
(4, 'Laptop Dell Gaming G15 5515 R7', 'dell-g15.webp', 'dell-g15-img2.webp', 'dell-g15-img3.webp', 'dell-g15-img4.webp', 33990000, 'CPU : AMD Ryzen 7-5800H / RAM : 8 GB DDR4 3200 MHz / Màn hình : 15.6\", 1920 x 1080 Pixel WVA 120 Hz 250 nits / Đồ họa : NVIDIA GeForce RTX 3050 4GB / Ổ cứng : SSD 512 GB / \r\nHệ điều hành : Windows 10 / Trọng lượng : 2.81kg', 11),
(5, 'Laptop Dell Vostro 3400 i5', 'dell-vostro-3400-img.webp', 'dell-vostro-3400-img2.jpg', 'dell-vostro-3400-img3.webp', 'dell-vostro-3400-img4.webp', 18890000, 'CPU : i5-1135G7 2.4GHz / RAM : 8 GB DDR4 2 khe (1 khe 8GB + 1 khe rời) 2666 MHz / Ổ cứng : SSD 256 GB NVMe PCIe Hỗ trợ khe cắm HDD SATA / Màn hình : 14\"Full HD / Card màn hình : Card tích hợp Intel Iris Xe / Hệ điều hành : Windows 10 Home SL / Thiết kế : Vỏ nhựa / \r\nTrọng lượng : Nặng 1.64 kg\r\n', 11),
(6, 'Laptop Dell Inspiron N3501 i5', 'dell-N3501-i5.webp', 'dell-N3501-i5-img2.webp', 'dell-N3501-i5-img3.webp', 'dell-N3501-i5-img4.webp', 22499000, 'CPU : i5-1135G7 2.4GHz / RAM : 4 GB DDR4 (2 khe) 2666 MHz / Ổ cứng : SSD 512 GB NVMe PCIe / Màn hình : 15.6\"Full HD (1920 x 1080) / Card màn hình : Card tích hợp Intel Iris Xe / Hệ điều hành : Windows 10 Home SL / Thiết kế : Vỏ nhựa / Trọng lượng : Nặng 1.96 kg\r\n', 11),
(7, 'Laptop Asus ROG Zephyrus G14', 'asus-rog-zephyrus.webp', 'asus-rog-zephyrus-img2.webp', 'asus-rog-zephyrus-img3.webp', 'asus-rog-zephyrus-img4.webp', 44990000, 'CPU : Ryzen 95900HS 3GHz / RAM : 16 GB DDR4 2 khe (8GB onboard+ 1 khe 8GB)3200 MHz / \r\nỔ cứng: Hỗ trợ thêm 1 khe cắm SSD M.2 PCIe 3.0 mở rộng (nâng cấp dung lượng không giới hạn) / Màn hình : 14\"QHD (2560 x 1440) 120Hz / Card màn hình : Card rời RTX 3050Ti 4GB\r\n/ Đặc biệt : Có đèn bàn phím / Hệ điều hành : Windows 10 Home SL / Thiết kế : Vỏ nhựa - nắp lưng bằng kim loại / Trọng lượng : Nặng 1.7 kg\r\n', 12),
(8, 'Laptop Asus TUF Gaming FX706HE i7', 'asus-tuf.webp', 'asus-tuf-img2.webp', 'asus-tuf-img3.webp', 'asus-tuf-img4.webp', 31490000, 'CPU : i7-11800H 2.30 GHz / RAM : 8 GB DDR4 2 khe (1 khe 8GB + 1 khe rời)3200 MHz / Ổ cứng : SSD 512 GB NVMe PCIeHỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng / Màn hình :\r\n17.3\"Full HD (1920 x 1080) 144Hz / Card màn hình : Card rời RTX 3050Ti 4GB / Đặc biệt:\r\nCó đèn bàn phím / Hệ điều hành : Windows 10 Home SL / Thiết kế : Vỏ nhựa - nắp lưng bằng kim loại / Trọng lượng : Nặng 2.6 kg\r\n', 12),
(9, 'Laptop Asus ZenBook Flip UX363EA i7', 'asus-zenbook-img3.webp', 'asus-zenbook.webp', 'asus-zenbook-img2.webp', 'asus-zenbook-img4.webp', 33490000, 'CPU : i7-1165G7 2.8GHz / RAM : 16 GBLPDDR4X (On board) 4266 MHz / Ổ cứng : SSD 512 GB NVMe PCIe / Màn hình : 13.3\"Full HD (1920 x 1080) OLED / Card màn hình : Card tích hợpIntel Iris Xe / Đặc biệt : Có màn hình cảm ứng, có đèn bàn phím / Hệ điều hành : \r\nWindows 10 Home SL / Thiết kế : Vỏ kim loại nguyên khối / Trọng lượng : Nặng 1.3 kg\r\n', 12),
(10, 'Laptop Asus ZenBook UX325EA i5', 'ux3-img2.webp', 'ux3.webp', 'ux3-img3.webp', 'ux3-img4.webp', 23790000, 'CPU : Intel Core i5-1135G7 / RAM : 8 GB LPDDR4X 3200 MHz / Màn hình : 13.3\", 1920 x 1080 Pixel, IPS, 60 Hz, 300 nits / Đồ họa : Intel Iris Xe Graphics / Ổ cứng : SSD 256 GB / \r\nHệ điều hành : Windows 10 / Trọng lượng : 1.1kg', 12),
(11, 'Laptop MSI Gaming Stealth 15M A11UEK-232VN i7', 'msi-15m.webp', 'msi-15m-img2.webp', 'msi-15m-img3.webp', 'msi-15m-img4.webp', 41990000, 'CPU : Intel Core i7-11370H / RAM : 16 GB DDR4 3200 MHz / Màn hình : 15.6\", 1920 x 1080 Pixel IPS 144 Hz 300 nits IPS LCD / Đồ họa : NVIDIA GeForce RTX 3060 Max-Q 6GB & Intel UHD Graphics / Ổ cứng :	SSD 512 GB / Hệ điều hành : Windows 10 / Trọng lượng : 1.7kg', 13),
(12, 'Laptop MSI Gaming GF65 Thin', 'msi-thin.webp', 'msi-thin-img2.webp', 'msi-thin-img3.webp', 'msi-thin-img4.webp', 29490000, 'CPU : i5-10500H 2.5GHz / RAM : DDR4 2 khe (1 khe 8GB + 1 khe 8GB) 3200 MHz / Ổ cứng :\r\n512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 2TB)Hỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng (nâng cấp tối đa 2TB) / Màn hình : 15.6\"Full HD (1920x1080)144Hz / Card màn hình : Card rời RTX 3060 Max-Q 6GB / Đặc biệt : Có đèn bàn phím / Hệ điều hành : Windows 10 Home SL / Thiết kế : Vỏ nhựa / Trọng lượng : Nặng 1.86 kg\r\n', 13),
(13, 'Laptop MSI Modern 15 A11MU i5', 'msi-modern-15.jpg', 'msi-modern-15-img2.webp', 'msi-modern-15-img3.webp', 'msi-modern-15-img4.webp', 18990000, 'CPU : i5-1155G7 2.5GHz / RAM : 8 GB DDR4 2 khe (1 khe 8GB + 1 khe rời)3200 MHz / Ổ cứng : Hỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng (nâng cấp tối đa 2TB)512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 2TB) / Màn hình : 15.6\"Full HD / Card màn hình : Card tích hợp Intel Iris Xe / Đặc biệt : Có đèn bàn phím / Hệ điều hành : Windows 10 Home SL / Thiết kế : Vỏ kim loại / Trọng lượng : Nặng 1.6 kg\r\n', 13),
(14, 'Laptop MSI Gaming Pulse GL66 11UDK i7', 'msi-pulse-gl66.jpg', 'msi-pulse-gl66-img2.webp', 'msi-pulse-gl66-img3.webp', 'msi-pulse-gl66-img4.webp', 33990000, 'CPU : i7-11800H 2.30 GHz / RAM : 16 GB DDR4 2 khe (1 khe 8GB + 1 khe 8GB)3200 MHz / \r\nỔ cứng : 512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 2TB) Không hỗ trợ khe cắm HDD / Màn hình : 15.6\"Full HD (1920 x 1080) 144Hz / Card màn hình : Card rời RTX 3050Ti 4GB / Đặc biệt : Có đèn bàn phím / Hệ điều hành : Windows 10 Home SL / Trọng lượng : Nặng 2.25 kg\r\n', 13),
(15, 'Laptop MSI Summit E16 Flip i7 ', 'msi-e16.webp', 'msi-e16-img2.webp', 'msi-e16-img3.webp', 'msi-e16-img4.webp', 46990000, 'CPU : i7-1195G7 2.9GHz / RAM : 16 GBLPDDR4X (8GB On board + 8GB On board)2133 MHz / \r\nỔ cứng : 1 TB SSD M.2 PCIe (Có thể tháo ra, lắp thanh khác tối đa 2TB) / Màn hình : \r\n16\"2K 120Hz / Card màn hình : Card rời RTX 3050 4GB / Đặc biệt : Có đèn bàn phím / \r\nHệ điều hành : Windows 10 Home SL / Thiết kế : Vỏ kim loại / Trọng lượng : Nặng 1.9 kg\r\n', 13),
(16, 'Laptop Acer Aspire 7 Gaming A715', 'acer-a715.webp', 'acer-a715-img2.webp', 'acer-a715-img3.webp', 'acer-a715-img4.webp', 22290000, 'CPU : Ryzen 55500U 2.1GHz / RAM : 8 GBDDR4 2 khe (1 khe 8GB + 1 khe rời)3200 MHz / \r\nỔ cứng : Không hỗ trợ khe cắm HDD Không hỗ trợ khe cắm SSD M2 mở rộng thêm512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 1TB) / Màn hình : 15.6\"Full HD 144Hz\r\n/ Card màn hình : Card rời GTX 1650 4GB / Đặc biệt : Có đèn bàn phím / Hệ điều hành :\r\nWindows 10 Home SL / Thiết kế : Vỏ nhựa / Trọng lượng : Nặng 2.1 kg\r\n', 14),
(17, 'Laptop Acer Nitro 5 Gaming AN515 57 5831 i5', 'acer-nitro5.webp', 'acer-nitro5-img2.webp', 'acer-nitro5-img3.webp', 'acer-nitro5-img4.webp', 32790000, 'CPU : i5-11400H 2.7GHz / RAM : 8 GB DDR4 2 khe (1 khe 8GB + 1 khe rời)3200 MHz / Ổ cứng : 512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 1TB)Hỗ trợ khe cắm HDD SATA (nâng cấp tối đa 2TB)Hỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng (nâng cấp tối đa 1TB) / Màn hình : 15.6\"Full HD (1920 x 1080) 144Hz / Card màn hình : Card rời RTX 3060 6GB / Đặc biệt : Có đèn bàn phím / Hệ điều hành : Windows 10 Home SL / Thiết kế :\r\nVỏ nhựa / Trọng lượng : Nặng 2.2 kg\r\n', 14),
(18, 'Laptop Acer Predator Triton 300 PT315 53 71DJ i7', 'acer-triton.webp', 'acer-triton-img2.webp', 'acer-triton-img3.webp', 'acer-triton-img4.webp', 50690000, 'CPU : i7-11800H 2.30 GHz / RAM : 16 GB DDR4 2 khe (1 khe 8GB + 1 khe 8GB)3200 MHz / \r\nỔ cứng : Hỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng (nâng cấp tối đa 1TB)512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 1TB) / Màn hình : 15.6\"QHD (2560 x 1440) 165Hz / Card màn hình : Card rời RTX 3070 8GB / Đặc biệt : Có đèn bàn phím / \r\nHệ điều hành : Windows 10 Home SL / Thiết kế : Vỏ kim loại / Trọng lượng : Nặng 2 kg\r\n', 14),
(19, 'Laptop Acer Swift 5 SF514 53T 720R i7', 'acer-swift-5.jpg', 'acer-swift-5-img2.webp', 'acer-swift-5-img3.webp', 'acer-swift-5-img4.webp', 27690000, 'CPU : i7-8565U 1.8GHz / RAM : 8 GB DDR4 (1 khe) 2133 MHz / Ổ cứng : SSD 256 GB NVMe PCIe / Màn hình : 14\"Full HD (1920 x 1080) / Card màn hình : Card tích hợpIntel UHD 620 / Đặc biệt : Có đèn bàn phím Có màn hình cảm ứng / Hệ điều hành : Windows 10 Home SL / Thiết kế : Nhôm - Magie / Trọng lượng : Nặng 0.94 kg\r\n', 14),
(20, 'Laptop Lenovo Ideapad 5 15ITL05 i5', 'lenovo-ideapad-5.jpg', 'lenovo-ideapad-5-img2.webp', 'lenovo-ideapad-5-img3.jpg', 'lenovo-ideapad-5-img4.webp', 21090000, 'CPU : i5-1135G7 2.4GHz / RAM : 8 GB DDR4 (On board) 3200 MHz / Ổ cứng : Hỗ trợ khe cắm HDD SATASSD 512 GB NVMe PCIe / Màn hình : 15.6\"Full HD (1920 x 1080) / Card màn hình :\r\nCard rời MX450 2GB / Đặc biệt : Có đèn bàn phím / Hệ điều hành : Windows 10 Home SL / Thiết kế : Vỏ nhựa - nắp lưng bằng kim loại / Trọng lượng : Nặng 1.66 kg\r\n', 15),
(21, 'Laptop Lenovo Ideapad Gaming 3 15IMH05 i7', 'lenovo-gaming3.webp', 'lenovo-gaming3-img2.webp', 'lenovo-gaming3-img3.webp', 'lenovo-gaming3-img4.webp', 25990000, 'CPU : i7-10750H 2.6GHz / RAM : 8 GB DDR4 (2 khe)2933 MHz / Ổ cứng : SSD 512 GB NVMe PCIeHỗ trợ khe cắm HDD SATA / Màn hình : 15.6\"Full HD (1920 x 1080) 120Hz / Card màn hình : Card rời GTX 1650Ti 4GB / Đặc biệt : Có đèn bàn phím / Hệ điều hành : Windows 10 Home SL / Thiết kế : Vỏ nhựa / Trọng lượng : Nặng 2.2 kg\r\n', 15),
(22, 'Laptop Lenovo Yoga Duet 7 13ITL6 i5 ', 'lenovo-yoga-due.webp', 'lenovo-yoga-due-img2.webp', 'lenovo-yoga-due-img3.webp', 'lenovo-yoga-due-img4.webp', 28590000, 'CPU : i5-1135G7 2.4GHz / RAM : 8 GB DDR4 (On board)3200 MHz / Ổ cứng : SSD 512 GB NVMe PCIe / Màn hình : 13 inchWQHD (2160x1350) / Card màn hình :  Card tích hợp Intel Iris Xe / Đặc biệt : Có màn hình cảm ứng Có đèn bàn phím / Hệ điều hành : Windows 10 Home SL / Thiết kế : Vỏ kim loại / Trọng lượng : Nặng 1.1683 kg\r\n', 15),
(25, 'jjj', 'product.png', 'product.png', 'product.png', 'product.png', 30000000, 'Sản phẩm mới ra mắt', 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `ma_tk` int(11) NOT NULL,
  `ten_tk` varchar(200) NOT NULL,
  `mat_khau` varchar(200) NOT NULL,
  `ho_ten` varchar(200) NOT NULL,
  `dia_chi` varchar(200) NOT NULL,
  `vai_tro` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tai_khoan`
--

INSERT INTO `tai_khoan` (`ma_tk`, `ten_tk`, `mat_khau`, `ho_ten`, `dia_chi`, `vai_tro`) VALUES
(1, 'admin', '2121', 'Quốc Thái', 'TPHCM', 0),
(2, 'khachhang', '159', 'Văn A', 'TPHCM', 1),
(3, 'khachhang1', '456', 'Văn E', 'Bến Tre', 1),
(4, 'khachhang2', '789', 'Văn B', 'Trà Vinh', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`ma_hd`),
  ADD KEY `ma_tk` (`ma_tk`);

--
-- Chỉ mục cho bảng `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  ADD KEY `ma_hd` (`ma_hd`),
  ADD KEY `ma_sp` (`ma_sp`);

--
-- Chỉ mục cho bảng `loai_hang`
--
ALTER TABLE `loai_hang`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`ma_sp`),
  ADD KEY `ma_loai` (`ma_loai`);

--
-- Chỉ mục cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`ma_tk`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `ma_hd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `loai_hang`
--
ALTER TABLE `loai_hang`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `ma_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `ma_tk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `hoa_don_ibfk_1` FOREIGN KEY (`ma_tk`) REFERENCES `tai_khoan` (`ma_tk`);

--
-- Các ràng buộc cho bảng `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  ADD CONSTRAINT `hoa_don_chi_tiet_ibfk_1` FOREIGN KEY (`ma_hd`) REFERENCES `hoa_don` (`ma_hd`),
  ADD CONSTRAINT `hoa_don_chi_tiet_ibfk_2` FOREIGN KEY (`ma_sp`) REFERENCES `san_pham` (`ma_sp`);

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`ma_loai`) REFERENCES `loai_hang` (`ma_loai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
