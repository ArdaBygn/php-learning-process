-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 17 May 2022, 17:27:02
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `okul`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kayip_esyalar`
--

CREATE TABLE `kayip_esyalar` (
  `id` int(11) NOT NULL,
  `b_esya` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `b_adsoyad` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `b_yer` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `b_tarihi` date DEFAULT NULL,
  `b_durumu` tinyint(1) DEFAULT NULL,
  `b_esya_resmi` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kayip_esyalar`
--

INSERT INTO `kayip_esyalar` (`id`, `b_esya`, `b_adsoyad`, `b_yer`, `b_tarihi`, `b_durumu`, `b_esya_resmi`) VALUES
(1, 'Çanta', 'Arda B.', 'Kütüphane', '2022-05-01', 0, 'canta.jpg'),
(2, 'Kalem', 'Arda T.', 'Lavabo', '2022-05-18', 0, 'kalem.jpg'),
(3, 'Mont', 'Muhammed S.', 'Sınıf Askılığı', '2022-05-04', 0, 'mont.jpg'),
(22, 'kalem', 'Funda', 'Bahçe', '2022-05-06', 0, 'kalem.jpg');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kayip_esyalar`
--
ALTER TABLE `kayip_esyalar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kayip_esyalar`
--
ALTER TABLE `kayip_esyalar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
