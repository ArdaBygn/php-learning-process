-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 18 May 2022, 11:22:42
-- Sunucu sürümü: 10.4.21-MariaDB
-- PHP Sürümü: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `emlak`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `emlaklar`
--

CREATE TABLE `emlaklar` (
  `emlak_id` int(11) NOT NULL,
  `emlak_ad` varchar(200) DEFAULT NULL,
  `emlak_tur` varchar(200) DEFAULT NULL,
  `oda_sayisi` varchar(200) DEFAULT NULL,
  `emlak_resim` varchar(200) DEFAULT NULL,
  `emlak_fiyat` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `emlaklar`
--

INSERT INTO `emlaklar` (`emlak_id`, `emlak_ad`, `emlak_tur`, `oda_sayisi`, `emlak_resim`, `emlak_fiyat`) VALUES
(1, 'Kardeşler', 'Kiralık', '2+1', 'emlak.jpg', '600.000TL'),
(2, 'Portakal', 'Satılık', '1+1', 'emlak2.jpg', '2.000.000TL');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `musteriler`
--

CREATE TABLE `musteriler` (
  `musteri_id` int(11) NOT NULL,
  `musteri_isim` text DEFAULT NULL,
  `musteri_aciklama` text DEFAULT NULL,
  `musteri_resim` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `musteriler`
--

INSERT INTO `musteriler` (`musteri_id`, `musteri_isim`, `musteri_aciklama`, `musteri_resim`) VALUES
(1, 'Arda', 'Yıldızlar  Binasına Talibim', 'ahmet.jpg'),
(6, 'Arda', 'Kardeşler Binasına Talibim', 'arda.jpg');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `emlaklar`
--
ALTER TABLE `emlaklar`
  ADD PRIMARY KEY (`emlak_id`);

--
-- Tablo için indeksler `musteriler`
--
ALTER TABLE `musteriler`
  ADD PRIMARY KEY (`musteri_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `emlaklar`
--
ALTER TABLE `emlaklar`
  MODIFY `emlak_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `musteriler`
--
ALTER TABLE `musteriler`
  MODIFY `musteri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
