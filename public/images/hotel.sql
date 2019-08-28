-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 27, 2019 lúc 05:10 PM
-- Phiên bản máy phục vụ: 10.1.40-MariaDB
-- Phiên bản PHP: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hotel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `gender` int(1) DEFAULT NULL,
  `birth` varchar(10) DEFAULT NULL,
  `SDT` char(12) NOT NULL,
  `status` int(1) DEFAULT NULL,
  `access` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `pass`, `gender`, `birth`, `SDT`, `status`, `access`) VALUES
(1, 'Yardley Graham', 'admin@admin.com', '4444aw', 0, '2020-03-01', '01246378855', 0, 1),
(2, 'Hammett Singleton', 'gravida@accumsanconvallisante.co.uk', '32134944-7', 1, '1922-03-27', '01246378855', 0, 1),
(4, 'Gavin Guerra', 'laoreet.lectus@erosProin.co.uk', '42226298-9', 1, '2018-09-26', '01246378855', 1, 1),
(5, 'Colt Sutton', 'ipsum.non@mi.net', '29868898-0', 1, '2020-01-31', '0975632513', 1, 0),
(6, 'Devin Shepard', 'Sed.neque@temporaugue.co.uk', '18521745-0', 1, '2019-06-01', '01246378855', 1, 1),
(7, 'Dieter Hicks', 'sollicitudin.a@Sed.co.uk', '41605681-1', 1, '2019-03-23', '0975632513', 1, 0),
(8, 'Derek Houston', 'nunc@parturientmontesnascetur.co.uk', '40889654-1', 1, '2018-10-09', '01246378855', 1, 1),
(9, 'Lawrence Malone', 'et.magnis@sollicitudincommodoipsum.net', '34461231-5', 0, '2019-03-03', '0975632513', 1, 0),
(10, 'Driscoll Booker', 'purus.accumsan@a.co.uk', '6770247-6', 0, '2018-12-16', '0975632513', 1, 0),
(11, 'Fulton Rocha', 'dapibus@ligulaconsectetuerrhoncus.net', '40617887-0', 0, '2019-01-27', '01246378855', 0, 1),
(12, 'Vaughan Roberson', 'gravida.Aliquam@justo.co.uk', '24252626-0', 1, '2018-08-12', '0975632513', 1, 0),
(13, 'Plato Lane', 'ultrices.posuere.cubilia@Integer.com', '24407053-1', 0, '2019-04-11', '01246378855', 0, 1),
(14, 'Avram Roman', 'semper@Proinnonmassa.co', '6726408a', 1, '02/27/1906', '01246378855', 0, 1),
(15, 'Lucas Rogers', 'hendrerit.neque.In@magnaSuspendissetristique.edu', '13557275-6', 1, '2018-12-16', '0975632513', 1, 0),
(16, 'Christopher Clemons', 'at.pede.Cras@Curabitur.org', '36139825-4', 1, '2019-11-05', '0975632513', 1, 0),
(17, 'Cullen Owen', 'tristique.senectus@vulputatenisisem.edu', '38254253-3', 1, '2018-10-25', '0975632513', 1, 0),
(18, 'Emmanuel Gilmore', 'ut.erat@eu.edu', '29917935-4', 0, '2018-12-31', '01246378855', 1, 1),
(19, 'Ignatius Barrera', 'Cras@mattisCraseget.edu', '26313834-1', 1, '2020-02-04', '01246378855', 1, 1),
(20, 'Eric Holloway', 'sagittis.placerat@felisNulla.org', '29967088-0', 1, '2019-03-05', '01246378855', 1, 1),
(21, 'Gage Mathews', 'eros.Proin@nonlaciniaat.org', '48949766-2', 0, '2019-03-01', '01246378855', 1, 1),
(22, 'Nolan Wolf', 'et.netus@aultriciesadipiscing.org', '49715889-3', 1, '1999-03-04', '01246378855', 0, 1),
(23, 'Gregory Phillips', 'diam.dictum@ataugue.edu', '14952565-3', 1, '2019-09-08', '01246378855', 0, 1),
(26, 'Guy Simmons', 'tellus@odiosempercursus.co.uk', '20622538-6', 1, '2018-07-25', '01246378855', 0, 1),
(27, 'Coby King', 'Cras@adipiscingelitCurabitur.org', '50363111-3', 0, '2020-03-27', '01246378855', 1, 1),
(28, 'minh quang', 'haquang829@gmail.com', '1234qw', 1, '2019-06-11', '', NULL, NULL),
(29, 'Ha Minh Quang', 'haquang892@gmail.com', '1234aw', 1, '2019-06-12', '0886643456', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(11) NOT NULL,
  `cus_id` int(11) DEFAULT NULL,
  `total_money` float DEFAULT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `type_id` int(5) NOT NULL,
  `so_luong` tinyint(4) NOT NULL,
  `date_pay` datetime DEFAULT NULL,
  `deposit` float NOT NULL,
  `status` tinyint(4) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`bill_id`, `cus_id`, `total_money`, `check_in`, `check_out`, `type_id`, `so_luong`, `date_pay`, `deposit`, `status`, `create_at`) VALUES
(1, 20, 300, '2019-06-24', '2019-06-25', 1, 1, '2019-06-26 00:00:00', 200, 0, '2019-07-23 07:47:35'),
(2, 23, 600, '2019-06-27', '2019-06-30', 1, 2, '2019-06-30 00:00:00', 200, 3, '2019-06-20 07:47:35'),
(3, 1, 3000, '2019-06-11', '2019-06-13', 3, 2, '2019-06-26 03:15:23', 1000, 1, '2019-05-03 07:59:35'),
(4, 17, 200, '2019-06-29', '2019-06-30', 4, 1, '2019-06-30 00:12:00', 100, 2, '2019-02-23 07:47:35'),
(5, 3, 300, '2019-06-29', '2019-06-25', 7, 1, '2019-06-17 00:00:00', 50, 4, '2019-08-23 07:47:35'),
(6, 20, 400, '2019-08-27', '2019-08-29', 3, 3, '2019-08-28 13:13:05', 200, 3, '2019-08-23 07:47:35'),
(7, 16, 55000, '2019-08-21', '2019-08-23', 3, 1, '2019-08-26 03:15:23', 100, 3, '2019-08-23 07:47:35'),
(8, 18, 400, '2019-08-23', '2019-08-26', 4, 1, '2019-08-28 06:00:00', 200, 5, '2019-08-23 07:47:35'),
(9, 11, 3000, '2019-08-23', '2019-08-27', 4, 1, '2019-08-28 00:09:07', 1000, 1, '2019-08-23 07:47:35'),
(10, 4, 7575, '2019-06-18', '2019-08-28', 3, 1, '2019-06-30 00:12:00', 336, 1, '2019-08-23 07:48:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int(11) NOT NULL,
  `id_bill` int(11) DEFAULT NULL,
  `room_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill_detail`
--

INSERT INTO `bill_detail` (`id`, `id_bill`, `room_id`) VALUES
(1, 3, 12),
(2, 3, 23),
(3, 6, 28),
(4, 6, 30),
(5, 6, 28),
(6, 1, 3),
(7, 7, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `city_hotel`
--

CREATE TABLE `city_hotel` (
  `id` int(11) NOT NULL,
  `city` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `city_hotel`
--

INSERT INTO `city_hotel` (`id`, `city`) VALUES
(1, 'Hà Nội, Việt Nam'),
(2, 'Hồ Chí Minh, Việt Nam'),
(3, 'Hạ Long, Việt Nam'),
(4, 'Huế, Việt Nam\r\n'),
(5, 'Dà lạt, Việt Nam'),
(6, 'LonDon, ‎England'),
(7, 'Paris, France'),
(8, 'SCOTLAND, U.K'),
(9, 'Spain, Europe'),
(10, 'BerLin, Germany'),
(11, 'Ninh Bình, Việt Nam'),
(12, 'Đà Nẵng, Việt Nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `brith` date DEFAULT NULL,
  `gender` bit(1) DEFAULT NULL,
  `phone` char(12) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `access` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `name`, `brith`, `gender`, `phone`, `email`, `pass`, `access`) VALUES
(1, 'Silas Jarvis', '2019-02-21', b'1', '010-740-5943', 'semper.dui.lectus@semelitpharetra.com', 'Etiam.bibendum.fermentum@elementumduiquis.com', 0),
(2, 'Raja Schmidt', '2019-07-31', b'1', '040-814-3311', 'sit.amet.luctus@velvulputate.org', 'odio.Aliquam@ultricesmaurisipsum.net', 1),
(3, 'Ross Pate', '2018-07-09', b'1', '055-990-5806', 'erat.Etiam@pedeac.co.uk', 'ullamcorper.Duis@aliquetvelvulputate.com', 1),
(4, 'Carlos Morton', '2019-01-15', b'1', '062-575-4461', 'Cras.dictum@Nullamsuscipitest.com', 'sed@nascetur.ca', 1),
(5, 'Cooper Jarvis', '2019-06-05', b'1', '006-342-3193', 'interdum.Nunc.sollicitudin@utquam.net', 'augue.porttitor.interdum@est.com', 1),
(6, 'Dominic Madden', '2019-08-09', b'1', '007-353-2998', 'urna.justo@neque.ca', 'sed.sem@dui.co.uk', 0),
(7, 'Quamar Bass', '2018-06-14', b'0', '070-805-5728', 'dolor.Donec@dapibusgravidaAliquam.ca', 'pretium@at.ca', 1),
(8, 'Ira Kim', '2020-01-29', b'1', '002-621-0823', 'amet.consectetuer@CuraePhasellusornare.com', 'facilisis.magna@nibhenimgravida.net', 0),
(9, 'Harlan Bartlett', '2020-03-29', b'1', '046-397-9763', 'ornare.sagittis.felis@Aliquameratvolutpat.com', 'vel.turpis@ipsumnon.com', 0),
(10, 'Ezekiel Castillo', '2019-09-02', b'0', '030-843-9161', 'pretium.aliquet.metus@imperdiet.edu', 'risus.Morbi@augueacipsum.ca', 0),
(11, 'Sean Mayer', '2019-12-25', b'1', '084-027-5218', 'mattis.velit@sodales.net', 'urna.Vivamus.molestie@orciadipiscingnon.edu', 0),
(12, 'Graiden House', '2019-04-15', b'0', '003-135-2324', 'per.conubia@a.ca', 'lectus.pede@egestasa.org', 1),
(14, 'Stephen Holloway', '2020-01-18', b'1', '061-529-9579', 'Nulla.dignissim@malesuadavel.edu', 'volutpat.Nulla@ornare.ca', 0),
(15, 'Barrett Silva', '2020-03-09', b'1', '029-219-1557', 'dapibus@temporarcu.ca', 'Vivamus.euismod@etultricesposuere.org', 0),
(16, 'Neil Oneil', '2020-03-04', b'1', '089-914-6937', 'posuere.at.velit@netuset.org', '', 0),
(17, 'Brody Valencia', '2018-09-23', b'1', '064-086-7429', 'Sed.pharetra.felis@lobortis.edu', 'ultricies.adipiscing@magnaCrasconvallis.ca', 0),
(18, 'Rahim Castillo', '2019-11-28', b'0', '017-851-9105', 'enim@rutrummagnaCras.co.uk', 'aliquet@temporlorem.com', 0),
(19, 'Vladimir Blankenship', '2020-02-28', b'1', '082-217-6427', 'ullamcorper@erat.edu', 'sagittis@accumsan.co.uk', 0),
(20, 'Damian Martin', '2019-11-01', b'1', '054-946-5812', 'ridiculus.mus.Aenean@sodales.net', 'neque@infaucibus.net', 0),
(21, 'Jamal Moses', '2018-08-29', b'1', '009-962-1363', 'sed.turpis.nec@molestiesodales.com', 'nisl.arcu@cursuspurus.net', 0),
(22, 'Timon Cotton', '2018-07-23', b'1', '029-203-0968', 'euismod@consectetuercursus.net', 'orci@diam.co.uk', 0),
(23, 'Aristotle Grant', '2018-09-16', b'1', '066-442-6624', 'tempus@Maurisvestibulum.edu', 'faucibus@Aeneaneget.ca', 0),
(24, 'Sebastian Hernandez', '2019-11-05', b'1', '005-999-1365', 'euismod.urna.Nullam@Maurisut.edu', 'pede@lobortis.co.uk', 0),
(25, 'Merritt Rutledge', '2020-03-06', b'1', '011-406-8485', 'ridiculus@sem.net', 'tincidunt.nibh@In.net', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hotel`
--

CREATE TABLE `hotel` (
  `hotel_id` int(11) NOT NULL,
  `hotel_name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotel_address` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img1` varchar(200) DEFAULT NULL,
  `describ` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `url_hotel` varchar(60) NOT NULL,
  `id_city` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `hotel`
--

INSERT INTO `hotel` (`hotel_id`, `hotel_name`, `hotel_address`, `img1`, `describ`, `url_hotel`, `id_city`) VALUES
(1, 'The Belvedere Hotel', '700, 8th Avenue, Theatre District, New York City, United States', 'Be1.jpg', 'deally set in the Phu Nhuan district of Ho Chi Minh City, Universe Apartment is located 3.1 miles from Tan Dinh Market, 3.9 miles from War Remnants Museum and 4 miles from Reunification Palace.', 'The-Belvedere-Hotel', 1),
(2, 'Row NYC Hotel', '700, 8th Avenue, Theatre District, New York City, United States', 'row1.jpg', 'deally set in the Phu Nhuan district of Ho Chi Minh City, Universe Apartment is located 3.1 miles from Tan Dinh Market, 3.9 miles from War Remnants Museum and 4 miles from Reunification Palace.', 'Row-NYC-Hotel', 2),
(3, 'Crowne Plaza Times Square ', '1605 Broadway , Theatre District, New York City, United States', 'crown1.jpg', 'deally set in the Phu Nhuan district of Ho Chi Minh City, Universe Apartment is located 3.1 miles from Tan Dinh Market, 3.9 miles from War Remnants Museum and 4 miles from Reunification Palace.', 'Crowne Plaza Times Square ', 1),
(4, 'The New Yorker A Wyndham Hotel', '481 8th Avenue & 34th Street, Garment District, New York City, United States', 'TheNewYorkerAWyndhamHotel1.jpg', 'deally set in the Phu Nhuan district of Ho Chi Minh City, Universe Apartment is located 3.1 miles from Tan Dinh Market, 3.9 miles from War Remnants Museum and 4 miles from Reunification Palace.', 'The New-Yorker-A-Wyndham-Hotel', 1),
(5, 'Lotte Hotel Seoul', '30, Eulji-Ro, Jung-gu, Seoul, South Korea', 'LotteHotelSeoul1.jpg', 'deally set in the Phu Nhuan district of Ho Chi Minh City, Universe Apartment is located 3.1 miles from Tan Dinh Market, 3.9 miles from War Remnants Museum and 4 miles from Reunification Palace.', '', 1),
(6, 'Hotel PJ Myeongdong', '71, Mareunnae-ro, Jung-gu, Seoul, South Korea  ', 'PJ1.jpg', 'deally set in the Phu Nhuan district of Ho Chi Minh City, Universe Apartment is located 3.1 miles from Tan Dinh Market, 3.9 miles from War Remnants Museum and 4 miles from Reunification Palace.', '', 1),
(7, 'Hotel Skypark Central Myeongdong', '16, Myeongdong 9-gil, Jung-gu, Seoul, South Korea  ', 'Skypark1.jpg', 'deally set in the Phu Nhuan district of Ho Chi Minh City, Universe Apartment is located 3.1 miles from Tan Dinh Market, 3.9 miles from War Remnants Museum and 4 miles from Reunification Palace.', '', 1),
(8, 'Ibis Ambassador Myeong-dong', '78, Namdaemun-ro, Jung-gu, Seoul, South Korea  ', 'Ibis1.jpg', 'deally set in the Phu Nhuan district of Ho Chi Minh City, Universe Apartment is located 3.1 miles from Tan Dinh Market, 3.9 miles from War Remnants Museum and 4 miles from Reunification Palace.', '', 1),
(9, 'Novotel Paris Les Halles', 'Place Marguerite De Navarre, Les Halles, Paris, France', 'novotel1.jpg', 'deally set in the Phu Nhuan district of Ho Chi Minh City, Universe Apartment is located 3.1 miles from Tan Dinh Market, 3.9 miles from War Remnants Museum and 4 miles from Reunification Palace.', '', 1),
(10, 'Novotel Paris Gare De Lyon ', '2 Rue Hector Malot, 12th arrondissement - Bercy - Gare de Lyon, Paris, France', 'novotel2.jpg', 'deally set in the Phu Nhuan district of Ho Chi Minh City, Universe Apartment is located 3.1 miles from Tan Dinh Market, 3.9 miles from War Remnants Museum and 4 miles from Reunification Palace.', '', 1),
(11, 'Pullman Paris Tour Eiffel ', '18 avenue de Suffren Entree au 22 rue Jean Rey, 15th arrondissement - Porte de Versailles, Paris, Fr', '', 'deally set in the Phu Nhuan district of Ho Chi Minh City, Universe Apartment is located 3.1 miles from Tan Dinh Market, 3.9 miles from War Remnants Museum and 4 miles from Reunification Palace.', '', 1),
(12, 'Crowne Plaza Paris Republique', '10 Place De La , Republique, Paris, France', '', 'deally set in the Phu Nhuan district of Ho Chi Minh City, Universe Apartment is located 3.1 miles from Tan Dinh Market, 3.9 miles from War Remnants Museum and 4 miles from Reunification Palace.', '', 1),
(13, 'Park Plaza Westminster Bridge London', '200 Westminster,london', '', 'deally set in the Phu Nhuan district of Ho Chi Minh City, Universe Apartment is located 3.1 miles from Tan Dinh Market, 3.9 miles from War Remnants Museum and 4 miles from Reunification Palace.', '', 1),
(14, 'DoubleTree by Hilton Hotel London - Tower of Londo', '7 Pepys Street, City of London', '', 'deally set in the Phu Nhuan district of Ho Chi Minh City, Universe Apartment is located 3.1 miles from Tan Dinh Market, 3.9 miles from War Remnants Museum and 4 miles from Reunification Palace.', '', 1),
(15, 'Sofitel London Heathrow', 'Terminal 5,London Heathrow Airport, Hillingdon,london,United Kingdom', '', 'deally set in the Phu Nhuan district of Ho Chi Minh City, Universe Apartment is located 3.1 miles from Tan Dinh Market, 3.9 miles from War Remnants Museum and 4 miles from Reunification Palace.', '', 1),
(16, 'Park Plaza County Hall London', 'Addington Street, Waterloo, London, United Kingdom', '', 'deally set in the Phu Nhuan district of Ho Chi Minh City, Universe Apartment is located 3.1 miles from Tan Dinh Market, 3.9 miles from War Remnants Museum and 4 miles from Reunification Palace.', '', 1),
(17, 'Hotel Artemide Rome', 'Via Nazionale, 22, Castro Pretorio, Rome, Italy', '', 'deally set in the Phu Nhuan district of Ho Chi Minh City, Universe Apartment is located 3.1 miles from Tan Dinh Market, 3.9 miles from War Remnants Museum and 4 miles from Reunification Palace.', '', 1),
(18, 'UNAHOTELS Deco Roma', 'Via 57,Castro Pretorio, Rome, Italy', '', 'deally set in the Phu Nhuan district of Ho Chi Minh City, Universe Apartment is located 3.1 miles from Tan Dinh Market, 3.9 miles from War Remnants Museum and 4 miles from Reunification Palace.', '', 1),
(19, 'Rome Cavalieri A Waldorf Astoria Resort', 'Via Alberto Cadlolo 101, Rome, Italy', '', 'deally set in the Phu Nhuan district of Ho Chi Minh City, Universe Apartment is located 3.1 miles from Tan Dinh Market, 3.9 miles from War Remnants Museum and 4 miles from Reunification Palace.', '', 1),
(20, 'Starhotels Michelangelo Rome', 'Via della Stazione di San Pietro, 14, Aurelio, Rome, Italy', '', 'deally set in the Phu Nhuan district of Ho Chi Minh City, Universe Apartment is located 3.1 miles from Tan Dinh Market, 3.9 miles from War Remnants Museum and 4 miles from Reunification Palace.', '', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `info_hotel`
--

CREATE TABLE `info_hotel` (
  `id_if` int(11) NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img3` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `overview` text COLLATE utf8mb4_unicode_ci,
  `service` text COLLATE utf8mb4_unicode_ci,
  `restaurant` text COLLATE utf8mb4_unicode_ci,
  `id_hotel` int(11) DEFAULT NULL,
  `price_avg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `info_hotel`
--

INSERT INTO `info_hotel` (`id_if`, `img`, `img1`, `img2`, `img3`, `overview`, `service`, `restaurant`, `id_hotel`, `price_avg`) VALUES
(1, 'Be1.jpg', 'Be2.jpg', 'Be3.jpg', 'Be4.jpg', 'Color Dalat Hostel tọa lạc tại thành phố Đà Lạt, trong bán kính 1,7 km từ Hồ Xuân Hương và 1,7 km từ Công viên Yersin. Nhà trọ có nhà hàng, khu vườn, sảnh khách chung, Wi-Fi miễn phí, dịch vụ đặt vé, sân hiên, dịch vụ phòng, máy ATM và dịch vụ thu đổi ngoại tệ cho khách.', 'Nhà trọ có nhà hàng, khu vườn, sảnh khách chung, Wi-Fi miễn phí, dịch vụ đặt vé, sân hiên, dịch vụ phòng, máy ATM và dịch vụ thu đổi ngoại tệ cho khách.\r\n\r\nMỗi phòng nghỉ tại đây đều có khu vực ghế ngồi.\r\niColor Dalat Hostel phục vụ bữa sáng gọi món.\r\nĐi xe đạp là hoạt động phổ biến trong khu vực và nhà trọ cũng cho thuê xe máy/xe hơi.', 'Chỗ nghỉ này là một trong những vị trí được đánh giá tốt nhất ở Đà Lạt! Khách thích nơi đây hơn so với những chỗ nghỉ khác trong khu vực.', 1, 150),
(2, 'row1.jpg', 'RowNYC2.jpg', 'RowNYC3.jpg', 'RowNYC4.jpg', 'Color Dalat Hostel tọa lạc tại thành phố Đà Lạt, trong bán kính 1,7 km từ Hồ Xuân Hương và 1,7 km từ Công viên Yersin. Nhà trọ có nhà hàng, khu vườn, sảnh khách chung, Wi-Fi miễn phí, dịch vụ đặt vé, sân hiên, dịch vụ phòng, máy ATM và dịch vụ thu đổi ngoại tệ cho khách.', 'Nhà trọ có nhà hàng, khu vườn, sảnh khách chung, Wi-Fi miễn phí, dịch vụ đặt vé, sân hiên, dịch vụ phòng, máy ATM và dịch vụ thu đổi ngoại tệ cho khách.\r\n\r\nMỗi phòng nghỉ tại đây đều có khu vực ghế ngồi.\r\niColor Dalat Hostel phục vụ bữa sáng gọi món.\r\nĐi xe đạp là hoạt động phổ biến trong khu vực và nhà trọ cũng cho thuê xe máy/xe hơi.', 'Chỗ nghỉ này là một trong những vị trí được đánh giá tốt nhất ở Đà Lạt! Khách thích nơi đây hơn so với những chỗ nghỉ khác trong khu vực.', 2, 150),
(3, 'cr1.jpg', 'crres.jpg', 'crser.jpg', 'crpo.jpg', 'Color Dalat Hostel tọa lạc tại thành phố Đà Lạt, trong bán kính 1,7 km từ Hồ Xuân Hương và 1,7 km từ Công viên Yersin. Nhà trọ có nhà hàng, khu vườn, sảnh khách chung, Wi-Fi miễn phí, dịch vụ đặt vé, sân hiên, dịch vụ phòng, máy ATM và dịch vụ thu đổi ngoại tệ cho khách.', 'Nhà trọ có nhà hàng, khu vườn, sảnh khách chung, Wi-Fi miễn phí, dịch vụ đặt vé, sân hiên, dịch vụ phòng, máy ATM và dịch vụ thu đổi ngoại tệ cho khách.\r\n\r\nMỗi phòng nghỉ tại đây đều có khu vực ghế ngồi.\r\niColor Dalat Hostel phục vụ bữa sáng gọi món.\r\nĐi xe đạp là hoạt động phổ biến trong khu vực và nhà trọ cũng cho thuê xe máy/xe hơi.', 'Chỗ nghỉ này là một trong những vị trí được đánh giá tốt nhất ở Đà Lạt! Khách thích nơi đây hơn so với những chỗ nghỉ khác trong khu vực.', 3, 150),
(4, 'ny1.jpg', 'ny2.jpg', 'ny3.jpg', 'ny4.jpg', 'Color Dalat Hostel tọa lạc tại thành phố Đà Lạt, trong bán kính 1,7 km từ Hồ Xuân Hương và 1,7 km từ Công viên Yersin. Nhà trọ có nhà hàng, khu vườn, sảnh khách chung, Wi-Fi miễn phí, dịch vụ đặt vé, sân hiên, dịch vụ phòng, máy ATM và dịch vụ thu đổi ngoại tệ cho khách.', 'Nhà trọ có nhà hàng, khu vườn, sảnh khách chung, Wi-Fi miễn phí, dịch vụ đặt vé, sân hiên, dịch vụ phòng, máy ATM và dịch vụ thu đổi ngoại tệ cho khách.\r\n\r\nMỗi phòng nghỉ tại đây đều có khu vực ghế ngồi.\r\niColor Dalat Hostel phục vụ bữa sáng gọi món.\r\nĐi xe đạp là hoạt động phổ biến trong khu vực và nhà trọ cũng cho thuê xe máy/xe hơi.', 'Chỗ nghỉ này là một trong những vị trí được đánh giá tốt nhất ở Đà Lạt! Khách thích nơi đây hơn so với những chỗ nghỉ khác trong khu vực.', 4, 150),
(5, 'lot1.jpg', 'lot2.jpg', 'lot3.jpg', 'lot4.jpg', 'Color Dalat Hostel tọa lạc tại thành phố Đà Lạt, trong bán kính 1,7 km từ Hồ Xuân Hương và 1,7 km từ Công viên Yersin. Nhà trọ có nhà hàng, khu vườn, sảnh khách chung, Wi-Fi miễn phí, dịch vụ đặt vé, sân hiên, dịch vụ phòng, máy ATM và dịch vụ thu đổi ngoại tệ cho khách.', 'Nhà trọ có nhà hàng, khu vườn, sảnh khách chung, Wi-Fi miễn phí, dịch vụ đặt vé, sân hiên, dịch vụ phòng, máy ATM và dịch vụ thu đổi ngoại tệ cho khách.\r\n\r\nMỗi phòng nghỉ tại đây đều có khu vực ghế ngồi.\r\niColor Dalat Hostel phục vụ bữa sáng gọi món.\r\nĐi xe đạp là hoạt động phổ biến trong khu vực và nhà trọ cũng cho thuê xe máy/xe hơi.', 'Chỗ nghỉ này là một trong những vị trí được đánh giá tốt nhất ở Đà Lạt! Khách thích nơi đây hơn so với những chỗ nghỉ khác trong khu vực.', 5, 150),
(6, 'PJ1.jpg', 'PJ2.jpg', 'PJ3.jpg', 'PJ4.jpg', 'Color Dalat Hostel tọa lạc tại thành phố Đà Lạt, trong bán kính 1,7 km từ Hồ Xuân Hương và 1,7 km từ Công viên Yersin. Nhà trọ có nhà hàng, khu vườn, sảnh khách chung, Wi-Fi miễn phí, dịch vụ đặt vé, sân hiên, dịch vụ phòng, máy ATM và dịch vụ thu đổi ngoại tệ cho khách.', 'Nhà trọ có nhà hàng, khu vườn, sảnh khách chung, Wi-Fi miễn phí, dịch vụ đặt vé, sân hiên, dịch vụ phòng, máy ATM và dịch vụ thu đổi ngoại tệ cho khách.\r\n\r\nMỗi phòng nghỉ tại đây đều có khu vực ghế ngồi.\r\niColor Dalat Hostel phục vụ bữa sáng gọi món.\r\nĐi xe đạp là hoạt động phổ biến trong khu vực và nhà trọ cũng cho thuê xe máy/xe hơi.', 'Chỗ nghỉ này là một trong những vị trí được đánh giá tốt nhất ở Đà Lạt! Khách thích nơi đây hơn so với những chỗ nghỉ khác trong khu vực.', 6, 150),
(7, 'sky1.jpg', 'sky2.jpg', 'sky3.jpg', 'sky4.jpg', 'Color Dalat Hostel tọa lạc tại thành phố Đà Lạt, trong bán kính 1,7 km từ Hồ Xuân Hương và 1,7 km từ Công viên Yersin. Nhà trọ có nhà hàng, khu vườn, sảnh khách chung, Wi-Fi miễn phí, dịch vụ đặt vé, sân hiên, dịch vụ phòng, máy ATM và dịch vụ thu đổi ngoại tệ cho khách.', 'Nhà trọ có nhà hàng, khu vườn, sảnh khách chung, Wi-Fi miễn phí, dịch vụ đặt vé, sân hiên, dịch vụ phòng, máy ATM và dịch vụ thu đổi ngoại tệ cho khách.\r\n\r\nMỗi phòng nghỉ tại đây đều có khu vực ghế ngồi.\r\niColor Dalat Hostel phục vụ bữa sáng gọi món.\r\nĐi xe đạp là hoạt động phổ biến trong khu vực và nhà trọ cũng cho thuê xe máy/xe hơi.', 'Chỗ nghỉ này là một trong những vị trí được đánh giá tốt nhất ở Đà Lạt! Khách thích nơi đây hơn so với những chỗ nghỉ khác trong khu vực.', 7, 150),
(8, 'ib1.jpg', 'ib2.jpg', 'ib3.jpg', 'ib4.jpg', 'Color Dalat Hostel tọa lạc tại thành phố Đà Lạt, trong bán kính 1,7 km từ Hồ Xuân Hương và 1,7 km từ Công viên Yersin. Nhà trọ có nhà hàng, khu vườn, sảnh khách chung, Wi-Fi miễn phí, dịch vụ đặt vé, sân hiên, dịch vụ phòng, máy ATM và dịch vụ thu đổi ngoại tệ cho khách.', 'Nhà trọ có nhà hàng, khu vườn, sảnh khách chung, Wi-Fi miễn phí, dịch vụ đặt vé, sân hiên, dịch vụ phòng, máy ATM và dịch vụ thu đổi ngoại tệ cho khách.\r\n\r\nMỗi phòng nghỉ tại đây đều có khu vực ghế ngồi.\r\niColor Dalat Hostel phục vụ bữa sáng gọi món.\r\nĐi xe đạp là hoạt động phổ biến trong khu vực và nhà trọ cũng cho thuê xe máy/xe hơi.', 'Chỗ nghỉ này là một trong những vị trí được đánh giá tốt nhất ở Đà Lạt! Khách thích nơi đây hơn so với những chỗ nghỉ khác trong khu vực.', 8, 150),
(9, 'no1.jpg', 'no2.jpg', 'no3.jpg', 'no4.jpg', 'Color Dalat Hostel tọa lạc tại thành phố Đà Lạt, trong bán kính 1,7 km từ Hồ Xuân Hương và 1,7 km từ Công viên Yersin. Nhà trọ có nhà hàng, khu vườn, sảnh khách chung, Wi-Fi miễn phí, dịch vụ đặt vé, sân hiên, dịch vụ phòng, máy ATM và dịch vụ thu đổi ngoại tệ cho khách.', 'Nhà trọ có nhà hàng, khu vườn, sảnh khách chung, Wi-Fi miễn phí, dịch vụ đặt vé, sân hiên, dịch vụ phòng, máy ATM và dịch vụ thu đổi ngoại tệ cho khách.\r\n\r\nMỗi phòng nghỉ tại đây đều có khu vực ghế ngồi.\r\niColor Dalat Hostel phục vụ bữa sáng gọi món.\r\nĐi xe đạp là hoạt động phổ biến trong khu vực và nhà trọ cũng cho thuê xe máy/xe hơi.', 'Chỗ nghỉ này là một trong những vị trí được đánh giá tốt nhất ở Đà Lạt! Khách thích nơi đây hơn so với những chỗ nghỉ khác trong khu vực.', 9, 150),
(10, 'de1.jpg', 'de2.jpg', 'de3.jpg', 'de4.jpg', 'Color Dalat Hostel tọa lạc tại thành phố Đà Lạt, trong bán kính 1,7 km từ Hồ Xuân Hương và 1,7 km từ Công viên Yersin. Nhà trọ có nhà hàng, khu vườn, sảnh khách chung, Wi-Fi miễn phí, dịch vụ đặt vé, sân hiên, dịch vụ phòng, máy ATM và dịch vụ thu đổi ngoại tệ cho khách.', 'Nhà trọ có nhà hàng, khu vườn, sảnh khách chung, Wi-Fi miễn phí, dịch vụ đặt vé, sân hiên, dịch vụ phòng, máy ATM và dịch vụ thu đổi ngoại tệ cho khách.\r\n\r\nMỗi phòng nghỉ tại đây đều có khu vực ghế ngồi.\r\niColor Dalat Hostel phục vụ bữa sáng gọi món.\r\nĐi xe đạp là hoạt động phổ biến trong khu vực và nhà trọ cũng cho thuê xe máy/xe hơi.', 'Chỗ nghỉ này là một trong những vị trí được đánh giá tốt nhất ở Đà Lạt! Khách thích nơi đây hơn so với những chỗ nghỉ khác trong khu vực.', 10, 150);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `info_room`
--

CREATE TABLE `info_room` (
  `id_info` int(11) NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img3` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img4` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `overview` text COLLATE utf8mb4_unicode_ci,
  `service` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `id_type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `info_room`
--

INSERT INTO `info_room` (`id_info`, `img`, `img1`, `img2`, `img3`, `img4`, `overview`, `service`, `content`, `id_type`) VALUES
(1, 'st1.jpg', 'st2.jpg', 'st3.jpg', 'st4.jpg', 'st5.jpg', 'nice', 'good', 'fabulous', 1),
(2, 'del1.jpg', 'del2.jpg', 'del3.jpg', 'del4.jpg', 'del5.jpg', 'nice', 'good', 'fabulous', 2),
(3, 'su1.jpg', 'su2.jpg', 's3.jpg', 'su4.jpg', 'su5.jpg', 'nice', 'good', 'fabulous', 3),
(4, 'pre1.jpg', 'pre2.jpg', 'pre3.jpg', 'pre4.jpg', 'pre5.jpg', 'nice', 'good', 'fabulous', 4),
(5, 'ju1.jpg', 'ju2.jpg', 'ju3.jpg', 'j4.jpg', 'ju5.jpg', 'nice', 'good', 'fabulous', 5),
(6, 'e1.jpg', 'e2.jpg', 'e3.jpg', 'e4.jpg', 'e5.jpg', 'nice', 'good', 'fabulous', 6),
(7, 'pr1.jpg', 'pr2.jpg', 'pr3.jpg', 'pr4.jpg', 'pr5.jpg', 'nice', 'good', 'fabulous', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `img1` varchar(200) DEFAULT NULL,
  `img2` varchar(200) DEFAULT NULL,
  `url_post` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `img1`, `img2`, `url_post`) VALUES
(1, 'hiiyiy', '<p>rururur</p>', '1173002275.jpg', '741984889.jpg', 'ttuu-ffyur');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_name` varchar(100) DEFAULT NULL,
  `room_status` tinyint(3) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `url_room` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `room`
--

INSERT INTO `room` (`room_id`, `room_name`, `room_status`, `type_id`, `url_room`) VALUES
(1, '302 Standard Deluxe King/Queen Room $129', 0, 3, ''),
(2, '303 Standard Deluxe DBL/DBL Room $139', 1, 1, ''),
(3, '304 Executive King/Queen Room $173', 1, 2, ''),
(4, '305 Executive DBL/DBL Room $149', 1, 1, ''),
(5, '306 Superior King/Queen Room $195', 1, 3, ''),
(6, '307 Superior DBL/DBL Room $215', 1, 3, ''),
(7, '308 Standard Queen Room $138', 0, 1, ''),
(8, '309 Superior King/Queen Room $162', 1, 2, ''),
(9, '201 Superior DBL/DBL Room $181', 0, 2, ''),
(10, '1003 Deluxe King Room $205', 1, 3, ''),
(11, '10002 Deluxe Queen Room #200', 1, 3, ''),
(12, '405 Deluxe DBL/DBL Room #212', 1, 3, ''),
(13, '702 Premium City View Room $228', 0, 3, ''),
(14, '4653 Executive Suites Room $425', 1, 5, ''),
(15, '555 King Bed Traditional Room Nonsmoking $236', 0, 1, ''),
(16, '8944 Standard Room Nonsmoking $242', 1, 2, ''),
(17, '79797 King Bed City View Nonsmoking $284', 0, 3, ''),
(18, '6868 King Bed Times Square View $284', 1, 3, ''),
(19, '6821Deluxe Room Nonsmoking $290', 1, 3, ''),
(20, '3774 DBL/DBL Times Square View Nonsmoking $303', 1, 3, ''),
(21, '7080 Suite King Nonsmoking #521', 0, 5, ''),
(22, '8063 Metro Room DBL/DBL $269', 0, 1, ''),
(23, '2204Executive Room Queen $314', 1, 3, ''),
(24, '9696 Queen Suite $356', 1, 6, ''),
(25, '0944 Family Suite $269', 1, 5, ''),
(26, '505 Grand Deluxe Room $97', 1, 2, ''),
(27, '999 Grand Deluxe Family Twin Room #127', 1, 2, ''),
(28, '2535 Premier Room $133', 0, 3, ''),
(29, '7663 Premier Family Twin Room $153', 0, 3, ''),
(30, '8632 Executive Premier Room $168', 0, 4, ''),
(31, '743 Junior Suite Room $298', 1, 5, ''),
(32, '284 Deluxe Suite Room $323', 1, 5, ''),
(33, '3117 Charlotte Suite Room $395', 0, 6, ''),
(34, '455 Royal Suite Room $404', 0, 6, ''),
(35, '6666 Presidential Suite Room $425', 1, 6, ''),
(37, '4242', 0, 1, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_room`
--

CREATE TABLE `type_room` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(200) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `hotel_id` int(11) NOT NULL,
  `url_type` varchar(60) NOT NULL,
  `guest` int(11) NOT NULL,
  `img_type` varchar(100) NOT NULL,
  `short_des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `type_room`
--

INSERT INTO `type_room` (`type_id`, `type_name`, `price`, `hotel_id`, `url_type`, `guest`, `img_type`, `short_des`) VALUES
(1, 'Standard', 50, 1, '', 0, 'Standard1.jpg', ''),
(2, 'Deluxe', 300, 1, '', 0, 'deluxeking1.jpg', ''),
(3, 'Superior', 200, 1, '', 0, 'superior1.jpg', ''),
(4, 'Premium', 150, 1, '', 0, 'pre1.jpg', ''),
(5, 'Junior Suite', 450, 1, '', 0, 'junior1.jpg', ''),
(6, 'Executive Suite', 579, 1, '', 0, 'ExecutiveSuites.jpg', ''),
(7, 'Premium', 199, 3, '', 0, 'PremiumQueenRoom.jpg', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `bill_ibfk_1` (`type_id`),
  ADD KEY `cus_id` (`cus_id`);

--
-- Chỉ mục cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_bill` (`id_bill`),
  ADD KEY `room_id` (`room_id`);

--
-- Chỉ mục cho bảng `city_hotel`
--
ALTER TABLE `city_hotel`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hotel_id`),
  ADD KEY `id_city` (`id_city`);

--
-- Chỉ mục cho bảng `info_hotel`
--
ALTER TABLE `info_hotel`
  ADD PRIMARY KEY (`id_if`),
  ADD KEY `id_hotel` (`id_hotel`);

--
-- Chỉ mục cho bảng `info_room`
--
ALTER TABLE `info_room`
  ADD PRIMARY KEY (`id_info`),
  ADD KEY `id_type` (`id_type`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Chỉ mục cho bảng `type_room`
--
ALTER TABLE `type_room`
  ADD PRIMARY KEY (`type_id`),
  ADD KEY `hotel_id` (`hotel_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `city_hotel`
--
ALTER TABLE `city_hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `info_hotel`
--
ALTER TABLE `info_hotel`
  MODIFY `id_if` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `info_room`
--
ALTER TABLE `info_room`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `type_room`
--
ALTER TABLE `type_room`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `bill_ibfk_3` FOREIGN KEY (`type_id`) REFERENCES `type_room` (`type_id`);

--
-- Các ràng buộc cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD CONSTRAINT `bill_detail_ibfk_1` FOREIGN KEY (`id_bill`) REFERENCES `bill` (`bill_id`),
  ADD CONSTRAINT `bill_detail_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`);

--
-- Các ràng buộc cho bảng `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `hotel_ibfk_1` FOREIGN KEY (`id_city`) REFERENCES `city_hotel` (`id`);

--
-- Các ràng buộc cho bảng `info_hotel`
--
ALTER TABLE `info_hotel`
  ADD CONSTRAINT `info_hotel_ibfk_1` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`hotel_id`);

--
-- Các ràng buộc cho bảng `info_room`
--
ALTER TABLE `info_room`
  ADD CONSTRAINT `info_room_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `type_room` (`type_id`);

--
-- Các ràng buộc cho bảng `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `type_room` (`type_id`);

--
-- Các ràng buộc cho bảng `type_room`
--
ALTER TABLE `type_room`
  ADD CONSTRAINT `type_room_ibfk_1` FOREIGN KEY (`hotel_id`) REFERENCES `hotel` (`hotel_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
