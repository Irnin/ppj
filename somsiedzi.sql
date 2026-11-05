-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 23 Lis 2017, 14:09
-- Wersja serwera: 10.0.17-MariaDB
-- Wersja PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `somsiedzi`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `posty`
--

CREATE TABLE `posty` (
  `id` int(11) NOT NULL,
  `id_uzytkownika` int(11) DEFAULT NULL,
  `tresc` text,
  `data_dodania` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `posty`
--

INSERT INTO `posty` (`id`, `id_uzytkownika`, `tresc`, `data_dodania`) VALUES
(1, 1, 'Kurrrr?a kiedy? to by?o!!!1!1!!', '2017-11-23'),
(2, 1, 'Ale pyszna kie?baska, bigosik weselny!!!1!1!!', '2017-11-23'),
(3, 1, 'Helena mam zawa?!', '2017-11-23 13:23:47'),
(4, 1, '', '2017-11-23 14:00:29'),
(5, 1, '', '2017-11-23 14:01:28'),
(6, 1, 'saasdasd', '2017-11-23 14:01:32'),
(7, 1, 'saasdasd', '2017-11-23 14:02:28'),
(8, 1, 'pozdrawiam tomusia', '2017-11-23 14:02:37'),
(9, 1, 'elo mordy', '2017-11-23 14:03:09'),
(10, 1, 'wincyj php', '2017-11-23 14:04:43'),
(11, 1, 'wincyj php', '2017-11-23 14:05:33'),
(12, 1, 'wincyj php', '2017-11-23 14:06:01'),
(13, 1, 'wincyj php', '2017-11-23 14:06:29'),
(14, 1, 'TO MA DZIALAC HALINA', '2017-11-23 14:07:07'),
(15, 1, '#HALYNA mam ZAWAÅ!@!\r\n', '2017-11-23 14:07:35'),
(16, 1, '#HALYNA mam ZAWAÅ!@!\r\n', '2017-11-23 14:07:59'),
(17, 1, '#HALYNA mam ZAWAÅ!@!\r\n', '2017-11-23 14:08:00'),
(18, 1, '#HALYNA mam ZAWAÅ!@!\r\n', '2017-11-23 14:08:16'),
(19, 1, 'sad', '2017-11-23 14:08:18'),
(20, 1, 'sad', '2017-11-23 14:08:21'),
(21, 1, 'sad', '2017-11-23 14:09:00'),
(22, 1, 'elo', '2017-11-23 14:09:04'),
(23, 1, 'elo', '2017-11-23 14:09:06');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` text,
  `haslo` text,
  `imie` text,
  `nazwisko` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `login`, `haslo`, `imie`, `nazwisko`) VALUES
(1, 'qwas', 'sawq', 'Janusz', 'Nosacz');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `posty`
--
ALTER TABLE `posty`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_uzytkownika` (`id_uzytkownika`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `posty`
--
ALTER TABLE `posty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `posty`
--
ALTER TABLE `posty`
  ADD CONSTRAINT `posty_ibfk_1` FOREIGN KEY (`id_uzytkownika`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
