-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 15 Cze 2022, 09:31
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `pomoc_techniczna`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `problem`
--

CREATE TABLE `problem` (
  `id` int(11) NOT NULL,
  `problem` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `problem`
--

INSERT INTO `problem` (`id`, `problem`) VALUES
(1, 'Problem z internetem'),
(2, 'Problem z myszką/klawiaturą'),
(3, 'Problem z głosem/głośnikami'),
(4, 'Problem z komputerem'),
(5, 'Problem z monitorem'),
(6, 'Problem z projektorem'),
(7, 'Inny (opisz)'),
(9, 'Pomoc w zajęciach zdalnych');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sala`
--

CREATE TABLE `sala` (
  `id` int(11) NOT NULL,
  `sala` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `sala`
--

INSERT INTO `sala` (`id`, `sala`) VALUES
(1, '4'),
(2, '5'),
(3, '6'),
(4, '7'),
(5, '14'),
(6, '18 informatyczna'),
(7, '20'),
(8, '22 klimatyzacja'),
(9, '26'),
(10, '28 fryzjer'),
(11, '104'),
(12, '106'),
(13, '108'),
(14, '110'),
(15, '114'),
(16, '116 informatyczna'),
(17, '120'),
(18, '204'),
(19, '206'),
(20, '208 informatyczna'),
(21, '214 informatyczna'),
(22, '216 informatyczna'),
(23, '220 informatyczna'),
(24, '103'),
(25, '105'),
(26, '107'),
(27, '109'),
(28, '111'),
(29, '113'),
(30, '115'),
(31, '203'),
(32, '205'),
(33, '207'),
(34, '209 informatyczna'),
(35, '215'),
(36, 'sg1a gimnastyczna'),
(37, 'sg1b gimnastyczna'),
(38, 'sg1c gimnastyczna'),
(39, 'sg1 gimnastyczna'),
(40, 'sg2 gimastyczna'),
(41, 'sg3 gimnastyczna'),
(42, 'sg4 gimnastyczna'),
(43, 'sg5 gimnastyczna'),
(44, 'gastronomiczna'),
(45, 'internat 1 informatyczna'),
(46, 'internat 2'),
(47, 'M2'),
(48, 'M3'),
(49, 'M4'),
(50, 'internat 6'),
(51, 'internat 4'),
(52, 'internat 5'),
(53, 'CKZiU'),
(54, 'MCI'),
(55, 'int 14'),
(56, 'int 15'),
(57, 'int 16'),
(58, 'int3 przemysł mody'),
(59, 'aula'),
(60, 'int 17');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `haslo` varchar(32) NOT NULL,
  `uprawnienia` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`id`, `login`, `haslo`, `uprawnienia`) VALUES
(2, 'user', 'user', 1),
(5, 'uczen', 'uczen', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zgloszenia`
--

CREATE TABLE `zgloszenia` (
  `id` int(11) NOT NULL,
  `sala` int(20) NOT NULL,
  `problem` int(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `opis` text NOT NULL,
  `rozwiazane` varchar(10) NOT NULL,
  `zwrot` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `zgloszenia`
--

INSERT INTO `zgloszenia` (`id`, `sala`, `problem`, `email`, `opis`, `rozwiazane`, `zwrot`) VALUES
(26, 1, 1, '', 'halo', 'rozwiazane', ''),
(27, 1, 1, '', 'test', 'rozwiazane', ''),
(28, 14, 5, 'jakubaszek.bartosz.IT@gmail.com', 'test', 'rozwiazane', ''),
(29, 14, 1, 'jakubaszek.bartosz.it@gmail.com', 'test', 'przyjeto', 'adada'),
(30, 18, 5, 'jakubaszek.bartosz.it@gmail.com', 'testy', 'przyjeto', ''),
(31, 18, 1, 'jakubaszek.bartosz.it@gmail.com', 'teda', 'przyjeto', ''),
(32, 18, 1, 'jakubaszek.bartosz.it@gmail.com', 'teda', 'przyjeto', ''),
(33, 15, 4, 'jakubaszek.bartosz.it@gmail.com', 'ggag', 'przyjeto', ''),
(34, 59, 3, 'jakubaszek.bartosz.IT@gmail.com', 'Głośniki w auli nie działaja', 'przyjeto', 'Już idę');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `problem`
--
ALTER TABLE `problem`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `zgloszenia`
--
ALTER TABLE `zgloszenia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `problem`
--
ALTER TABLE `problem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `sala`
--
ALTER TABLE `sala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `zgloszenia`
--
ALTER TABLE `zgloszenia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
