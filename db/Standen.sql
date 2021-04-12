-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Gegenereerd op: 11 apr 2021 om 13:59
-- Serverversie: 5.5.68-MariaDB
-- PHP-versie: 5.6.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c5835Standen`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Standen`
--

CREATE TABLE IF NOT EXISTS `Standen` (
  `id` int(11) NOT NULL,
  `Datum` date NOT NULL,
  `Item` varchar(20) CHARACTER SET utf8 NOT NULL,
  `Stand` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `Standen`
--

INSERT INTO `Standen` (`id`, `Datum`, `Item`, `Stand`) VALUES
(1, '2021-04-11', 'Water', 100),
(2, '2021-04-11', 'Water', 127),
(3, '2021-04-11', 'Water', 99),
(4, '2021-04-11', 'Water', 123),
(5, '2021-04-11', 'Water', 117),
(6, '2021-04-11', 'Water', 111),
(7, '2021-04-11', 'Water', 98),
(8, '2021-04-11', 'Water', 87);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `Standen`
--
ALTER TABLE `Standen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `Standen`
--
ALTER TABLE `Standen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
