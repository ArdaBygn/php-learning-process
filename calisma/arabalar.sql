-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 13 May 2022, 12:02:26
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
-- Veritabanı: `arabalar`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `araba`
--

CREATE TABLE `araba` (
  `ID` smallint(6) NOT NULL,
  `Marka` text NOT NULL,
  `Model` text NOT NULL,
  `ModelYili` text NOT NULL,
  `Renk` text NOT NULL,
  `Fiyat` text NOT NULL,
  `Fotoraf` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `araba`
--

INSERT INTO `araba` (`ID`, `Marka`, `Model`, `ModelYili`, `Renk`, `Fiyat`, `Fotoraf`) VALUES
(0, 'Dacia', 'Duster', '2015', 'Siyah', '450.000TL', 'duster.jpg'),
(1, 'BMW', '730d', '2018', 'Gri', '2.575.000TL', 'bmw.jpg'),
(2, 'Audi', 'Sedan', '2018', 'Siyah', '232.000TL', 'audi.jpg');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `araba`
--
ALTER TABLE `araba`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
