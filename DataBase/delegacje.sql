-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 15 Maj 2020, 10:31
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `e-msi`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `delegacje`
--

CREATE TABLE `delegacje` (
  `Lp` int(11) NOT NULL,
  `Imie i Nazwisko` varchar(128) NOT NULL,
  `Data od` date NOT NULL,
  `Data do` date NOT NULL,
  `Miejsce Wyjazdu` varchar(64) NOT NULL,
  `Miejsce Przyjazdu` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `delegacje`
--

INSERT INTO `delegacje` (`Lp`, `Imie i Nazwisko`, `Data od`, `Data do`, `Miejsce Wyjazdu`, `Miejsce Przyjazdu`) VALUES
(1, 'Roger Federer', '2020-05-05', '2020-05-22', 'Bazylea', 'Londyn'),
(2, 'Dominic Thiem', '2020-01-01', '2020-01-21', 'Wiedeń', 'Paryż'),
(3, 'Nick Kyrgios', '2019-01-11', '2020-01-24', 'Canberra', 'Melbourne'),
(4, 'Alexander Zverev', '2017-01-11', '2017-03-24', 'Geneva', 'Nowy Jork'),
(5, 'Andrey Rublev', '2019-01-11', '2020-01-24', 'Moskwa', 'Miami'),
(6, 'Fabio Fognini', '2020-07-12', '2020-07-17', 'Rzym', 'Madryt'),
(7, 'Rafael Nadal', '2019-01-11', '2020-01-24', 'Shanghai', 'Pekin');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `delegacje`
--
ALTER TABLE `delegacje`
  ADD PRIMARY KEY (`Lp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
