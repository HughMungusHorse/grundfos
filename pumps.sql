-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Vært: localhost
-- Genereringstid: 24. 03 2017 kl. 14:22:40
-- Serverversion: 5.6.35
-- PHP-version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pumper`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `pumps`
--

CREATE TABLE `pumps` (
  `id` int(11) NOT NULL,
  `id_name` varchar(128) NOT NULL,
  `serial_number` varchar(64) NOT NULL,
  `type` varchar(64) NOT NULL,
  `placement` varchar(128) NOT NULL,
  `address` varchar(128) NOT NULL,
  `company_name` varchar(128) NOT NULL,
  `date` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Data dump for tabellen `pumps`
--

INSERT INTO `pumps` (`id`, `id_name`, `serial_number`, `type`, `placement`, `address`, `company_name`, `date`) VALUES
(48, 'Vandpumpe1', '498641 PN', 'ALPHA2', 'Kælderrum 2. tv', 'Ringvej Syd 104', 'Erhvervsakademi Århus', '03/10/2008'),
(49, 'Pump2', '423641 PN', 'CM/CME/CMBE', 'kælderen, 1 dør. th', 'Ringgade 180', 'Kaspers A/S', '03/23/2010');

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `pumps`
--
ALTER TABLE `pumps`
  ADD PRIMARY KEY (`id`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `pumps`
--
ALTER TABLE `pumps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
