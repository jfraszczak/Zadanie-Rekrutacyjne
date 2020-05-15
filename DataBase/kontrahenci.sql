-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 15 Maj 2020, 10:30
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
-- Struktura tabeli dla tabeli `kontrahenci`
--

CREATE TABLE `kontrahenci` (
  `NIP` varchar(64) NOT NULL,
  `REGON` int(11) NOT NULL,
  `Nazwa` varchar(64) NOT NULL,
  `Czy_platnik_vat` varchar(8) NOT NULL,
  `Ulica` varchar(64) NOT NULL,
  `Numer_domu` varchar(64) NOT NULL,
  `Numer_mieszkania` varchar(64) NOT NULL,
  `Usunieto` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `kontrahenci`
--

INSERT INTO `kontrahenci` (`NIP`, `REGON`, `Nazwa`, `Czy_platnik_vat`, `Ulica`, `Numer_domu`, `Numer_mieszkania`, `Usunieto`) VALUES
('123-12-12-123', 33333, 'Microsoft4', 'Nie', 'Aleje2', '17', '5', 0),
('777-12-12-123', 132442, 'Microsoft', 'Tak', 'Krysiewicza', '24', '23', 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `kontrahenci`
--
ALTER TABLE `kontrahenci`
  ADD PRIMARY KEY (`NIP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
