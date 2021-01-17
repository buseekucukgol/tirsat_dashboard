-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 17 Oca 2021, 23:03:36
-- Sunucu sürümü: 8.0.21
-- PHP Sürümü: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `proje`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `adresler`
--

DROP TABLE IF EXISTS `adresler`;
CREATE TABLE IF NOT EXISTS `adresler` (
  `adres_id` int NOT NULL AUTO_INCREMENT,
  `ulke_ad` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `il_ad` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `adres_ad` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`adres_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `adresler`
--

INSERT INTO `adresler` (`adres_id`, `ulke_ad`, `il_ad`, `adres_ad`) VALUES
(1, 'Türkiye', 'Bursa', 'Doruk Çarşı no:143'),
(2, 'Türkiye', 'Ankara', 'Sincan Sanayi Sitesi 2C 15. Sokak'),
(3, 'Romanya', 'Bucharest', 'STR. CIUCEA nr. 1 bl. P16 sc. 1 ap. 9, BUCHAREST'),
(4, 'Türkiye', 'İzmir', 'Çiğli Atatürk Sanayi Sitesi no:3'),
(5, 'Almanya', 'Sonnefeld', 'Billwerder Neuer Deich 25  Freistaat Bayern'),
(6, 'Almanya ', 'Wolfenbüttel', 'Kommißstraße 9, 38300'),
(7, 'Rusya', 'Moskova ', '35/4, St. Suschevsky Val, 43 Building 2, Krasnoyarsk Krai'),
(8, 'Rusya ', 'Uray', 'Ulitsa Mikrorayon Zapadnyy, 7, Khanty-Mansi Autonomous Okrug'),
(9, 'Türkiye', 'Sivas', 'Paşabey Mahallesi Çarşı içi 3. sokak'),
(10, 'Türkiye', 'Eskişehir', '1. İnönü Kılıçoğlu İşhanı No:110'),
(11, 'Almanya', 'Göllheim', 'Brandenburgische Strasse 67'),
(12, 'Rusya', 'Stavropol', '50-Letiya Vlksm Ul., bld. 51/3, appt. 37'),
(13, 'Katar', 'Doha', 'Salwa Rd, Mamoura'),
(14, 'Türkiye', 'Gaziantep', ' 3.Organize Sanayi Bölgesi, Küsget D Blok 34.Cad. No.6 Başpınar'),
(15, 'Türkiye', 'Konya', 'Fevzi Çakmak Mahallesi no:133 a blok'),
(16, 'Türkiye ', 'Çanakkale', 'Atatürk Sanayi Sitesi 2. sokak no:30'),
(17, 'Avustralya', 'Gowland', '14 Timmothy Drv, Wantirna South, VIC 3152'),
(18, 'Almanya', 'Tailfingen', 'Baden-Württemberg, Mohrenstrasse 13'),
(19, 'Türkiye ', 'Hatay ', 'Akçay Sanayi Bölgesi '),
(20, 'İngiltere', 'Southampton', 'Princes St, Southampton, SO14 5AP , European Metal Recycling Ltd'),
(21, 'İngiltere', 'Manchester', 'Hadfields (Bakers) Ltd, 1016 Manchester Rd, Huddersfield, HD7 5QQ '),
(22, 'Almanya', 'Berlin ', 'Wilhelmstraße 45, 10117 Berlin, Almanya'),
(23, 'Rusya ', 'Soçi', 'Ulitsa 60 Let Vlksm, 24А, Sochi, Krasnodar Krai, 354003'),
(24, 'Rusya ', 'Kazan', 'Ulitsa Tashayak, 2, Kazan, Republic of Tatarstan, 420111'),
(25, 'Türkiye ', 'Samsun', 'İstiklal Caddesi Kurtuluş İşhanı no:2\r\n'),
(26, 'Almanya', 'Münster', 'Roxeler Str. 416-420, 48161 Münster, Almanya'),
(27, 'Türkiye', 'İstanbul', ' doğan araslı bulvarı akyol plaza kat:5 esenyurt,'),
(28, 'Türkiye', 'Yozgat', ' Demirciler Sitesi 2. Yol N0: 73,'),
(29, 'Türkiye', 'Bursa', 'MUAMMER AKSOY BULV.FATİH İŞ MERKEZİ'),
(30, 'Almanya', 'Mertesdorf', ' Leipziger Strasse 89'),
(31, 'Almanya', 'Reutlingen Achalm', 'Bayreuther Strasse 99'),
(32, 'Rusya', 'Lipetsk', '30 Let Oktyabrya Ul., bld. 8, appt. 83'),
(33, 'Rusya', 'Chelyabinsk', 'Molodogvardeytsev, bld. 64/А, appt. 44'),
(34, 'Türkiye', 'Adana ', 'Kemal Paşa İş hanı no:15'),
(35, 'Romanya', 'Caras Severin', 'Strada 1 Decembrie 1918 nr.21, Moldova Noua'),
(36, 'İngiltere', 'Dardanup', '28 Hunter Street'),
(37, 'Avustralya', ' Narrawa', '63 Eurack Court'),
(38, 'Azerbaycan', 'Absheron', ' M. Subhi Kuc. 221 Az1000'),
(39, 'Azerbaycan', 'Baku', 'C. Mustafayev Kuc. 111 Az1009'),
(40, 'Rusya', ' Kurgan', 'Heyder Eliyev Prosp. 102 ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `birimler`
--

DROP TABLE IF EXISTS `birimler`;
CREATE TABLE IF NOT EXISTS `birimler` (
  `birim_kod` int NOT NULL,
  `birim_ad` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`birim_kod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `birimler`
--

INSERT INTO `birimler` (`birim_kod`, `birim_ad`) VALUES
(1000, 'Yönetim'),
(1001, 'Ar-Ge'),
(1002, 'Bilgi İşlem'),
(1003, 'İnsan Kaynakları'),
(1004, 'Finans'),
(1005, 'Lojistik'),
(1006, 'Test ve Sistem');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cinsiyet`
--

DROP TABLE IF EXISTS `cinsiyet`;
CREATE TABLE IF NOT EXISTS `cinsiyet` (
  `cinsiyet_id` int NOT NULL AUTO_INCREMENT,
  `cinsiyet_tur` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`cinsiyet_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `cinsiyet`
--

INSERT INTO `cinsiyet` (`cinsiyet_id`, `cinsiyet_tur`) VALUES
(1, 'Kadın'),
(2, 'Erkek');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `musteriler`
--

DROP TABLE IF EXISTS `musteriler`;
CREATE TABLE IF NOT EXISTS `musteriler` (
  `musteri_id` int NOT NULL AUTO_INCREMENT,
  `ad` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `tel_no` int NOT NULL,
  PRIMARY KEY (`musteri_id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `musteriler`
--

INSERT INTO `musteriler` (`musteri_id`, `ad`, `soyad`, `tel_no`) VALUES
(1, 'Heriberto ', 'Koch', 49685715),
(2, 'Anıl', 'Tezel', 531041025),
(3, 'Faruk ', 'Yüce', 530214752),
(4, 'Philiph ', 'Holden', 748502144),
(5, 'Camron ', 'Olson', 348210385),
(6, 'Serdar', 'Işık', 542900442),
(7, 'Jahiem', 'Sanchez', 98745023),
(8, 'Murat ', 'Çam', 530145225),
(9, 'Volkan ', 'Tosun', 532014711),
(10, 'Charlie', 'Byrd', 496582003),
(11, 'Muhammad', 'Soto', 325147857),
(12, 'Gunner', 'Huffman', 498703625),
(13, 'Kasım', 'Kalay', 531420639),
(14, 'Kerem', 'Dişli', 492506387),
(15, 'Mehmet', 'Yaprak', 536247803),
(16, 'Tavion', 'Figueroa', 78920365),
(17, 'Marlon', 'Hagan', 496520127),
(18, 'Lukas', 'Vogel', 741258036),
(19, 'Uriel', 'Broussard', 496325014),
(20, 'Nelson', 'Barnett', 452036972),
(21, 'Hüseyin Can', 'Doğru', 536121471),
(22, 'Rıdvan ', 'Özbeyler', 536202145),
(23, 'Mustafa ', 'Yaprak', 531402698),
(25, 'Ayhan ', 'Kaymaz', 532014729),
(26, 'Demetrius', 'Cannon', 748023985),
(27, 'Jaquan ', 'Blake', 98542400),
(28, 'Jose ', 'Cross', 497210654),
(29, 'Ali', 'Aycan', 534785094),
(30, 'Caden ', 'Rossi', 498516054),
(31, 'Ismael', 'Baird', 881454245),
(32, 'Musa ', 'Ertaş', 534001575),
(33, 'Osman', 'Ergezen', 3232365),
(34, 'Veli ', 'Tuna', 475412851),
(35, 'Mert', 'Budinli', 425527440),
(36, 'Ömer', 'Uzun', 455204527),
(37, 'Sema', 'Dere', 714104523),
(38, 'Zeynep', 'Şengez', 74524140),
(39, 'Ferhat', 'Gezmiş', 54702195),
(40, 'İlhan', 'Can', 5496114),
(41, 'Adem', 'Sarı', 54878131),
(42, 'İsmail', 'Yılmaz', 574987454),
(43, 'Yusuf', 'Atıl', 548781531),
(44, 'Oğuz', 'Çetin', 587154455);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `musteri_adres`
--

DROP TABLE IF EXISTS `musteri_adres`;
CREATE TABLE IF NOT EXISTS `musteri_adres` (
  `adres_id` int NOT NULL,
  `musteri_id` int NOT NULL,
  KEY `adres_id` (`adres_id`,`musteri_id`),
  KEY `musteri_id` (`musteri_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `musteri_adres`
--

INSERT INTO `musteri_adres` (`adres_id`, `musteri_id`) VALUES
(1, 8),
(2, 6),
(3, 12),
(4, 16),
(5, 20),
(5, 29),
(5, 29),
(6, 10),
(7, 7),
(8, 1),
(9, 3),
(10, 2),
(11, 4),
(12, 5),
(13, 9),
(14, 29),
(15, 14),
(16, 13),
(17, 11),
(17, 17),
(17, 28),
(17, 28),
(18, 18),
(19, 15),
(19, 23),
(20, 19),
(21, 21),
(22, 25),
(23, 26),
(24, 27),
(25, 30),
(26, 22),
(27, 31),
(28, 32),
(29, 33),
(30, 34),
(31, 35),
(32, 36),
(33, 37),
(34, 38),
(35, 39),
(36, 40),
(37, 41),
(38, 42),
(39, 43),
(40, 40);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personel`
--

DROP TABLE IF EXISTS `personel`;
CREATE TABLE IF NOT EXISTS `personel` (
  `personel_no` int NOT NULL AUTO_INCREMENT,
  `per_ad` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `per_soyad` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `per_tel_no` int NOT NULL,
  `dogum_tarih` date NOT NULL,
  `birim_kod` int NOT NULL,
  `cinsiyet_id` int NOT NULL,
  PRIMARY KEY (`personel_no`),
  KEY `birim_kod` (`birim_kod`),
  KEY `cinsiyet_id` (`cinsiyet_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20168 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `personel`
--

INSERT INTO `personel` (`personel_no`, `per_ad`, `per_soyad`, `per_tel_no`, `dogum_tarih`, `birim_kod`, `cinsiyet_id`) VALUES
(20091, 'Ahmet', 'Er', 69461451, '1973-08-25', 1001, 2),
(20092, 'Mustafa', 'Yüzbaşı', 32244556, '1980-12-10', 1004, 2),
(20093, 'Burak ', 'Ilıca', 12145465, '1976-08-01', 1001, 2),
(20095, 'Halit', 'Yıldız', 547862100, '1968-08-25', 1005, 2),
(20096, 'Çağatay', 'Aslanalp', 589441221, '1969-01-07', 1004, 2),
(20101, 'Salih', 'Söker', 547849600, '1972-04-09', 1001, 2),
(20102, 'Aydın', 'Köksal', 548654544, '1970-10-05', 1006, 2),
(20103, 'Pablo', 'Davenport', 496124442, '1970-05-12', 1002, 2),
(20104, 'Dean', 'Tobin', 725896401, '1971-08-05', 1000, 2),
(20105, 'Sophie', 'Huber', 748125904, '1965-10-08', 1001, 1),
(20106, 'Aja', 'Hastings', 748512401, '1972-09-05', 1004, 1),
(20107, 'William ', 'Anderson', 496587125, '1970-07-04', 1005, 2),
(20108, 'Jomes', 'Adams', 496587152, '1963-02-12', 1000, 2),
(20109, 'Uygar ', 'Ercan', 547125844, '1971-05-21', 1002, 2),
(20111, 'Buse', 'Küçükgöl', 547849612, '1965-01-06', 1000, 1),
(20113, 'Ufuk ', 'Toygun', 546235694, '1969-05-14', 1001, 2),
(20114, 'John', 'Allen', 491555553, '1964-01-08', 1001, 2),
(20115, 'Robert ', 'Barnes', 492554370, '1970-10-05', 1002, 2),
(20116, 'Richard', 'Carter', 495555374, '1969-05-10', 1003, 2),
(20117, 'Anna ', 'Petrov', 793559714, '1969-08-14', 1000, 1),
(20118, 'Linda', 'Henderson', 796587415, '1967-11-08', 1002, 1),
(20119, 'Beril', 'Gülüş', 532478125, '1970-09-07', 1002, 1),
(20121, 'Beste', 'Özcan', 541425870, '1973-12-03', 1003, 1),
(20122, 'Lütfü ', 'Gürsoy', 543258744, '1975-05-25', 1005, 2),
(20123, 'Tolga ', 'Kızıl', 547821465, '1976-04-07', 1004, 2),
(20124, 'Mark ', 'Hall', 496857151, '1976-08-05', 1006, 2),
(20125, 'Steven ', 'Gray ', 789548264, '1981-07-08', 1006, 2),
(20126, 'Jennifer ', 'Miller', 496852147, '1974-09-01', 1003, 1),
(20127, 'Susan ', 'Paters', 748512963, '1970-08-05', 1003, 1),
(20128, 'Patrica ', 'Lee', 496587152, '1973-10-12', 1004, 1),
(20129, 'Orhan ', 'Gül', 547125814, '1976-05-14', 1006, 2),
(20131, 'Helen ', 'Sanders', 496852174, '1980-12-22', 1005, 1),
(20132, 'Karen ', 'Parter', 495891254, '1969-12-21', 1001, 1),
(20133, 'Finn', 'Schulz', 495712124, '1977-03-21', 1006, 2),
(20134, 'Metin ', 'Kalem', 547821495, '1975-11-17', 1004, 2),
(20135, 'Başak', 'Sak', 542896214, '1978-10-05', 1005, 1),
(20136, 'Ali Said', 'Güney', 532147029, '1980-09-21', 1003, 2),
(20137, 'Alicia', 'Leblanc', 748152697, '1987-10-03', 1005, 1),
(20138, 'Grace', 'Mitchell', 758496125, '1980-10-05', 1001, 1),
(20139, 'Semra ', 'Tekgül', 531402478, '1977-12-05', 1002, 1),
(20141, 'Eylül ', 'Koç', 532014781, '1982-09-07', 1004, 1),
(20142, 'Rasim', 'Kara', 530214785, '1979-09-18', 1005, 2),
(20143, 'Mehmet ', 'Reşit', 532548106, '1980-02-02', 1006, 2),
(20145, 'Alexa ', 'Klein', 495871256, '1981-03-25', 1006, 1),
(20146, 'Luca ', 'Wagner ', 745892415, '1979-12-21', 1006, 1),
(20147, 'Noah ', 'Becker', 496985201, '1980-09-08', 1004, 1),
(20148, 'Elias ', 'Bauer', 495872165, '1978-08-05', 1004, 1),
(20149, 'Liam ', 'Krüger', 498752154, '1982-12-05', 1005, 2),
(20161, 'Nail', 'Aral', 54781520, '1985-02-03', 1001, 2),
(20162, 'Hamit ', 'Erzurum', 64591234, '1974-10-12', 1002, 2),
(20163, 'Şenol', 'Taşar', 547813174, '1975-02-03', 1001, 2),
(20164, 'Miray', 'Karay', 414174524, '1977-11-14', 1002, 1),
(20167, 'Abdullah', 'Özmen', 874511245, '1962-02-17', 1001, 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personel_kampus`
--

DROP TABLE IF EXISTS `personel_kampus`;
CREATE TABLE IF NOT EXISTS `personel_kampus` (
  `personel_no` int NOT NULL,
  `kampus_no` int NOT NULL,
  KEY `personel_no` (`personel_no`,`kampus_no`),
  KEY `kampus_no` (`kampus_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `personel_kampus`
--

INSERT INTO `personel_kampus` (`personel_no`, `kampus_no`) VALUES
(20091, 3),
(20093, 3),
(20095, 4),
(20096, 3),
(20101, 1),
(20102, 1),
(20103, 2),
(20104, 2),
(20105, 1),
(20106, 1),
(20107, 2),
(20108, 3),
(20109, 1),
(20111, 1),
(20111, 2),
(20111, 3),
(20111, 4),
(20113, 4),
(20114, 2),
(20115, 2),
(20116, 2),
(20117, 4),
(20118, 3),
(20119, 1),
(20121, 1),
(20122, 1),
(20123, 1),
(20124, 2),
(20125, 2),
(20126, 3),
(20127, 4),
(20128, 2),
(20129, 1),
(20131, 3),
(20132, 3),
(20133, 4),
(20134, 1),
(20135, 1),
(20136, 1),
(20137, 4),
(20138, 2),
(20139, 4),
(20141, 1),
(20142, 1),
(20143, 1),
(20145, 3),
(20146, 4),
(20147, 4),
(20148, 3),
(20149, 4),
(20161, 3),
(20162, 3),
(20163, 3),
(20164, 2),
(20167, 4);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparisler`
--

DROP TABLE IF EXISTS `siparisler`;
CREATE TABLE IF NOT EXISTS `siparisler` (
  `urun_id` int NOT NULL,
  `musteri_id` int NOT NULL,
  `adet` int NOT NULL,
  `tarih` date NOT NULL,
  KEY `urun_id` (`urun_id`,`musteri_id`),
  KEY `musteri_id` (`musteri_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `siparisler`
--

INSERT INTO `siparisler` (`urun_id`, `musteri_id`, `adet`, `tarih`) VALUES
(980, 1, 1, '2020-11-09'),
(981, 25, 2, '2020-02-11'),
(983, 23, 2, '2020-06-15'),
(984, 2, 1, '2020-05-12'),
(985, 3, 1, '2020-12-22'),
(986, 5, 1, '2020-11-23'),
(986, 4, 1, '2020-08-11'),
(987, 6, 1, '2020-07-07'),
(988, 22, 1, '2020-07-10'),
(989, 7, 2, '2020-12-28'),
(990, 21, 1, '2020-01-12'),
(990, 20, 1, '2020-03-03'),
(981, 17, 1, '2020-03-25'),
(988, 8, 1, '2020-09-10'),
(983, 9, 1, '2020-11-17'),
(985, 19, 1, '2020-10-12'),
(986, 18, 1, '2020-09-29'),
(984, 10, 1, '2020-06-23'),
(982, 11, 1, '2020-05-05'),
(983, 12, 1, '2020-01-19'),
(987, 13, 1, '2020-11-20'),
(990, 14, 1, '2020-12-15'),
(988, 15, 2, '2020-03-03'),
(988, 16, 1, '2020-05-30'),
(984, 17, 1, '2020-06-30'),
(990, 18, 1, '2020-03-31'),
(987, 1, 1, '2020-09-01'),
(983, 3, 1, '2020-10-05'),
(989, 8, 2, '2020-11-09'),
(980, 5, 1, '2020-10-13'),
(981, 20, 1, '2020-02-11'),
(980, 25, 1, '2020-04-08'),
(990, 26, 1, '2020-12-20'),
(980, 27, 1, '2020-08-19'),
(984, 28, 1, '2020-05-29'),
(980, 29, 1, '2020-04-22'),
(989, 30, 2, '2020-05-18'),
(982, 31, 1, '2020-12-07'),
(989, 32, 1, '2020-07-05'),
(990, 33, 1, '2020-12-06'),
(989, 34, 1, '2020-03-16'),
(980, 35, 1, '2020-11-11'),
(985, 36, 2, '2020-06-06'),
(986, 37, 1, '2020-12-19'),
(987, 38, 1, '2020-01-30'),
(983, 39, 2, '2020-06-18'),
(985, 40, 1, '2020-07-18'),
(981, 41, 3, '2020-09-09'),
(980, 42, 2, '2020-10-08'),
(983, 43, 1, '2020-03-27'),
(981, 44, 5, '2020-01-14');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uretim_kampus`
--

DROP TABLE IF EXISTS `uretim_kampus`;
CREATE TABLE IF NOT EXISTS `uretim_kampus` (
  `kampus_no` int NOT NULL AUTO_INCREMENT,
  `kampus_ad` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kampus_ulke` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kampus_sehir` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kampus_tel_no` int NOT NULL,
  PRIMARY KEY (`kampus_no`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `uretim_kampus`
--

INSERT INTO `uretim_kampus` (`kampus_no`, `kampus_ad`, `kampus_ulke`, `kampus_sehir`, `kampus_tel_no`) VALUES
(1, 'Adapazarı Üretim Tesisi', 'Türkiye', 'Sakarya', 4447082),
(2, 'Goch Üretim Tesisi', 'Almanya', 'Goch', 4446323),
(3, 'Ulm Üretim Tesisi', 'Almanya', 'Tübingen', 4446528),
(4, 'Tula Üretim Tesisi', 'Rusya', 'Tula', 4447896);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

DROP TABLE IF EXISTS `urunler`;
CREATE TABLE IF NOT EXISTS `urunler` (
  `urun_id` int NOT NULL,
  `urun_ad` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `fiyat` decimal(7,3) NOT NULL,
  PRIMARY KEY (`urun_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`urun_id`, `urun_ad`, `fiyat`) VALUES
(980, 'Low-Loader', '315.000'),
(981, 'Silo', '22.000'),
(982, 'Low-Bed', '335.000'),
(983, 'Tanker', '535.000'),
(984, 'Frigo', '589.000'),
(985, 'Platform', '368.000'),
(986, 'Perdeli ve Tenteli', '219.000'),
(987, 'Damper', '98.000'),
(988, 'Konteyner Taşıyıcı', '152.000'),
(989, 'Kutu', '150.000'),
(990, 'Swap-Body', '110.000');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun_detay`
--

DROP TABLE IF EXISTS `urun_detay`;
CREATE TABLE IF NOT EXISTS `urun_detay` (
  `urun_id` int NOT NULL,
  `kampus_no` int NOT NULL,
  KEY `urun_id` (`urun_id`,`kampus_no`),
  KEY `kampus_no` (`kampus_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urun_detay`
--

INSERT INTO `urun_detay` (`urun_id`, `kampus_no`) VALUES
(980, 1),
(981, 1),
(981, 2),
(981, 3),
(981, 4),
(982, 1),
(983, 1),
(984, 1),
(985, 1),
(985, 2),
(985, 3),
(985, 4),
(986, 1),
(986, 2),
(986, 3),
(986, 4),
(987, 1),
(988, 1),
(989, 1),
(989, 2),
(989, 3),
(989, 4),
(990, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yonetici`
--

DROP TABLE IF EXISTS `yonetici`;
CREATE TABLE IF NOT EXISTS `yonetici` (
  `yonetici_id` int NOT NULL AUTO_INCREMENT,
  `adi` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `soyadi` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `eposta` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `avatar` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`yonetici_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yonetici`
--

INSERT INTO `yonetici` (`yonetici_id`, `adi`, `soyadi`, `eposta`, `sifre`, `avatar`) VALUES
(1, 'Buse', 'Küçükgöl', 'buse@gmail.com', '9988', 'img/buse.jpg'),
(2, 'Dean', 'Tobin', 'dean@gmail.com', '1234', 'img/dean.png'),
(3, 'Jomes', 'Adams', 'jomes@gmail.com', '123321', 'img/jomes.jpg'),
(4, 'Anna', 'Petrov', 'anna@gmail.com', '123456', 'img/anna.jpg');

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `musteri_adres`
--
ALTER TABLE `musteri_adres`
  ADD CONSTRAINT `musteri_adres_ibfk_1` FOREIGN KEY (`adres_id`) REFERENCES `adresler` (`adres_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `musteri_adres_ibfk_2` FOREIGN KEY (`musteri_id`) REFERENCES `musteriler` (`musteri_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `personel`
--
ALTER TABLE `personel`
  ADD CONSTRAINT `personel_ibfk_1` FOREIGN KEY (`birim_kod`) REFERENCES `birimler` (`birim_kod`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `personel_ibfk_2` FOREIGN KEY (`cinsiyet_id`) REFERENCES `cinsiyet` (`cinsiyet_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `personel_kampus`
--
ALTER TABLE `personel_kampus`
  ADD CONSTRAINT `personel_kampus_ibfk_1` FOREIGN KEY (`personel_no`) REFERENCES `personel` (`personel_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `personel_kampus_ibfk_2` FOREIGN KEY (`kampus_no`) REFERENCES `uretim_kampus` (`kampus_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `siparisler`
--
ALTER TABLE `siparisler`
  ADD CONSTRAINT `siparisler_ibfk_1` FOREIGN KEY (`urun_id`) REFERENCES `urunler` (`urun_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siparisler_ibfk_2` FOREIGN KEY (`musteri_id`) REFERENCES `musteriler` (`musteri_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `urun_detay`
--
ALTER TABLE `urun_detay`
  ADD CONSTRAINT `urun_detay_ibfk_1` FOREIGN KEY (`urun_id`) REFERENCES `urunler` (`urun_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `urun_detay_ibfk_2` FOREIGN KEY (`kampus_no`) REFERENCES `uretim_kampus` (`kampus_no`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
