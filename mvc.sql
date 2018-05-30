-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 31 mei 2018 om 00:06
-- Serverversie: 10.1.28-MariaDB
-- PHP-versie: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `data`
--

CREATE TABLE `data` (
  `dataid` int(11) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `data`
--

INSERT INTO `data` (`dataid`, `text`) VALUES
(33, 'this is a bunch of text');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `note`
--

CREATE TABLE `note` (
  `noteid` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `note`
--

INSERT INTO `note` (`noteid`, `userid`, `title`, `content`, `date_added`) VALUES
(11, 1, 'This is a note', 'Look at this marveles note', '2018-05-30 23:20:25');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `person`
--

CREATE TABLE `person` (
  `personid` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(3) UNSIGNED NOT NULL,
  `gender` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `person`
--

INSERT INTO `person` (`personid`, `name`, `age`, `gender`) VALUES
(1, 'JESSE', 24, 'm'),
(2, 'joe', 22, 'm'),
(3, 'jenny', 434, 'f');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `login` varchar(25) NOT NULL,
  `password` varchar(64) NOT NULL,
  `role` enum('default','admin','owner') NOT NULL DEFAULT 'default'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`userid`, `login`, `password`, `role`) VALUES
(1, 'yarno', '84906bbb0d80a5237a65200bb1f65c1fd9ba6e96d424bd1ed5aada94ea4d34cf', 'owner'),
(14, 'gerrit', '607c42bf47513f77b532676712d113a4f430a9da86c09db6b9906180d3fee7c3', 'admin'),
(16, 'yarnobachmann', '59e6f2be131b3db6b596128c26c4c1c5ce9c7194201d620403bde871838b508b', 'default');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`dataid`);

--
-- Indexen voor tabel `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`noteid`),
  ADD KEY `userid` (`userid`);

--
-- Indexen voor tabel `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`personid`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `data`
--
ALTER TABLE `data`
  MODIFY `dataid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT voor een tabel `note`
--
ALTER TABLE `note`
  MODIFY `noteid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT voor een tabel `person`
--
ALTER TABLE `person`
  MODIFY `personid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
