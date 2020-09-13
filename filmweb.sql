-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 13 Wrz 2020, 14:59
-- Wersja serwera: 10.1.38-MariaDB
-- Wersja PHP: 7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `filmweb`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `actor`
--

CREATE TABLE `actor` (
  `id_actor` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `age` int(11) NOT NULL,
  `birth_date` date NOT NULL,
  `id_country` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `actor`
--

INSERT INTO `actor` (`id_actor`, `name`, `lastname`, `age`, `birth_date`, `id_country`) VALUES
(1, 'Tom', 'Hanks', 64, '1956-07-09', 1),
(2, 'Martin', 'Freeman', 48, '1971-09-08', 3),
(3, 'Ian', 'McKallen', 81, '1939-05-25', 3),
(4, 'Al', 'Pacino', 80, '1940-04-25', 1),
(5, 'Morgan', 'Freeman', 83, '1937-06-01', 1),
(6, 'Jack', 'Nicholson', 83, '1937-04-22', 1),
(7, 'Leonardo', 'Dicaprio', 45, '1974-11-11', 1),
(8, 'Alan', 'Rickman', 69, '1946-02-21', 3),
(9, 'Benedict', 'Cumberbatch', 44, '1976-07-19', 3),
(11, 'Edward Thomas', 'Hardy', 42, '1977-09-15', 3),
(12, 'David', 'Morse', 66, '1953-10-15', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `category`
--

INSERT INTO `category` (`id_category`, `name`) VALUES
(1, 'Comedy'),
(2, 'Horror'),
(3, 'Thriller'),
(4, 'Romance'),
(5, 'Animation'),
(6, 'Action'),
(7, 'Drama'),
(8, 'Fantasy'),
(9, 'Criminal'),
(10, 'Sci-fi');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `country`
--

CREATE TABLE `country` (
  `id_country` int(11) NOT NULL,
  `country_name` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `country`
--

INSERT INTO `country` (`id_country`, `country_name`) VALUES
(1, 'USA'),
(2, 'Germany'),
(3, 'England'),
(4, 'Australia'),
(5, 'Belgium'),
(6, 'France'),
(7, 'Sweden'),
(8, 'New Zealand');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `director`
--

CREATE TABLE `director` (
  `id_director` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `age` int(11) NOT NULL,
  `birth_date` date NOT NULL,
  `id_country` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `director`
--

INSERT INTO `director` (`id_director`, `name`, `lastname`, `age`, `birth_date`, `id_country`) VALUES
(3, 'Mel', 'Gibson', 64, '1956-01-03', 1),
(4, 'Roman', 'Polanski', 87, '1933-08-17', 6);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `film`
--

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `premiere_date` date NOT NULL,
  `length` varchar(10) COLLATE utf8mb4_polish_ci NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_country` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `film`
--

INSERT INTO `film` (`id_film`, `title`, `premiere_date`, `length`, `id_category`, `id_country`) VALUES
(1, 'The Green Mile', '1999-12-06', '188min.', 7, 1),
(2, 'The Hobbit: An Unexpected Journey', '2012-11-28', '169min.', 8, 8),
(3, 'Nietykalni', '2011-09-23', '112', 1, 6),
(8, 'Forrest Gump', '1934-06-23', '144', 1, 1),
(9, 'Forrest Gump', '1934-06-23', '144minXD', 1, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `film_actor_pivot`
--

CREATE TABLE `film_actor_pivot` (
  `id_film` int(11) NOT NULL,
  `id_actor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `film_actor_pivot`
--

INSERT INTO `film_actor_pivot` (`id_film`, `id_actor`) VALUES
(1, 1),
(1, 12);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `film_director_pivot`
--

CREATE TABLE `film_director_pivot` (
  `id_film` int(11) NOT NULL,
  `id_director` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `film_writer_pivot`
--

CREATE TABLE `film_writer_pivot` (
  `id_film` int(11) NOT NULL,
  `id_writer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `film_writer_pivot`
--

INSERT INTO `film_writer_pivot` (`id_film`, `id_writer`) VALUES
(1, 1),
(1, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `login` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `birth_date` date NOT NULL,
  `sex` varchar(1) COLLATE utf8mb4_polish_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_rating`
--

CREATE TABLE `user_rating` (
  `id_film` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `rating` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `writer`
--

CREATE TABLE `writer` (
  `id_writer` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `age` int(11) NOT NULL,
  `birth_date` date NOT NULL,
  `id_country` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `writer`
--

INSERT INTO `writer` (`id_writer`, `name`, `lastname`, `age`, `birth_date`, `id_country`) VALUES
(1, 'Frank', 'Darabont', 61, '1959-01-28', 6),
(2, 'Fran', 'Walsh', 61, '1959-01-10', 8),
(3, 'Sam', 'Esmail', 42, '1977-09-17', 1),
(4, 'Alan', 'Ball', 64, '1957-05-13', 1),
(5, 'Matt', 'Damon', 49, '1970-10-08', 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`id_actor`),
  ADD KEY `id_country` (`id_country`);

--
-- Indeksy dla tabeli `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indeksy dla tabeli `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id_country`);

--
-- Indeksy dla tabeli `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`id_director`),
  ADD KEY `id_country` (`id_country`);

--
-- Indeksy dla tabeli `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`),
  ADD KEY `film_ibfk_4` (`id_country`),
  ADD KEY `film_ibfk_5` (`id_category`);

--
-- Indeksy dla tabeli `film_actor_pivot`
--
ALTER TABLE `film_actor_pivot`
  ADD KEY `id_actor` (`id_actor`),
  ADD KEY `id_film` (`id_film`);

--
-- Indeksy dla tabeli `film_director_pivot`
--
ALTER TABLE `film_director_pivot`
  ADD KEY `id_film` (`id_film`,`id_director`),
  ADD KEY `film_director_pivot_ibfk_1` (`id_director`);

--
-- Indeksy dla tabeli `film_writer_pivot`
--
ALTER TABLE `film_writer_pivot`
  ADD KEY `id_film` (`id_film`,`id_writer`),
  ADD KEY `id_writer` (`id_writer`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeksy dla tabeli `user_rating`
--
ALTER TABLE `user_rating`
  ADD KEY `id_film` (`id_film`,`id_user`),
  ADD KEY `user_rating_ibfk_2` (`id_user`);

--
-- Indeksy dla tabeli `writer`
--
ALTER TABLE `writer`
  ADD PRIMARY KEY (`id_writer`),
  ADD KEY `id_country` (`id_country`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `actor`
--
ALTER TABLE `actor`
  MODIFY `id_actor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT dla tabeli `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `country`
--
ALTER TABLE `country`
  MODIFY `id_country` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `director`
--
ALTER TABLE `director`
  MODIFY `id_director` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `writer`
--
ALTER TABLE `writer`
  MODIFY `id_writer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `actor`
--
ALTER TABLE `actor`
  ADD CONSTRAINT `actor_ibfk_1` FOREIGN KEY (`id_country`) REFERENCES `country` (`id_country`);

--
-- Ograniczenia dla tabeli `director`
--
ALTER TABLE `director`
  ADD CONSTRAINT `director_ibfk_2` FOREIGN KEY (`id_country`) REFERENCES `country` (`id_country`);

--
-- Ograniczenia dla tabeli `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `film_ibfk_4` FOREIGN KEY (`id_country`) REFERENCES `country` (`id_country`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `film_ibfk_5` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `film_actor_pivot`
--
ALTER TABLE `film_actor_pivot`
  ADD CONSTRAINT `film_actor_pivot_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  ADD CONSTRAINT `film_actor_pivot_ibfk_4` FOREIGN KEY (`id_actor`) REFERENCES `actor` (`id_actor`);

--
-- Ograniczenia dla tabeli `film_director_pivot`
--
ALTER TABLE `film_director_pivot`
  ADD CONSTRAINT `film_director_pivot_ibfk_1` FOREIGN KEY (`id_director`) REFERENCES `director` (`id_director`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `film_director_pivot_ibfk_2` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `film_writer_pivot`
--
ALTER TABLE `film_writer_pivot`
  ADD CONSTRAINT `film_writer_pivot_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  ADD CONSTRAINT `film_writer_pivot_ibfk_2` FOREIGN KEY (`id_writer`) REFERENCES `writer` (`id_writer`);

--
-- Ograniczenia dla tabeli `user_rating`
--
ALTER TABLE `user_rating`
  ADD CONSTRAINT `user_rating_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_rating_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `writer`
--
ALTER TABLE `writer`
  ADD CONSTRAINT `writer_ibfk_1` FOREIGN KEY (`id_country`) REFERENCES `country` (`id_country`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
