-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 06 Nis 2022, 14:13:48
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
-- Veritabanı: `urunler`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `esya`
--

CREATE TABLE `esya` (
  `urun_id` smallint(6) NOT NULL,
  `adi` text NOT NULL,
  `kategori` text NOT NULL,
  `marka` text NOT NULL,
  `model` text NOT NULL,
  `fiyat` text NOT NULL,
  `resim` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `esya`
--

INSERT INTO `esya` (`urun_id`, `adi`, `kategori`, `marka`, `model`, `fiyat`, `resim`) VALUES
(0, '10 üzerinden 9', 'bilgisayar', 'Asus', 'Rog Flow Z13', '10.000TL', 'https://www.notebookcheck-tr.com/uploads/tx_nbc2/rog_flow_z13.jpg'),
(1, '10 üzerinden 6', 'televizyon', 'LG', 'LG 55NANO916', '15.200TL', 'https://cdn.vatanbilgisayar.com/Upload/PRODUCT/lg/thumb/125602_large.jpg'),
(2, '10 üzerinden 7', 'telefon', 'Iphone', 'Iphone 8', '8.000TL', 'https://productimages.hepsiburada.net/s/31/1500/10352776413234.jpg');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `esya`
--
ALTER TABLE `esya`
  ADD PRIMARY KEY (`urun_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
