-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-09-2022 a las 01:02:23
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `library_001`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `authors`
--

CREATE TABLE `authors` (
  `id` int(5) UNSIGNED NOT NULL,
  `author_fst_name` varchar(100) NOT NULL,
  `author_lst_name` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `book_number` varchar(5) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `authors`
--

INSERT INTO `authors` (`id`, `author_fst_name`, `author_lst_name`, `country`, `book_number`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Thony', 'dormeus', 'República Dominicana', '3', '2022-09-07 19:37:39', '2022-09-08 19:14:44', NULL),
(2, 'galmy', 'louis', 'República Dominicana', '0', '2022-09-07 19:37:48', '2022-09-07 19:37:48', NULL),
(3, 'galmy', 'louis', 'República Dominicana', '0', '2022-09-07 23:33:41', '2022-09-07 23:33:41', NULL),
(4, 'louis', 'Stephane', 'Haití', '0', '2022-09-07 23:34:11', '2022-09-07 23:34:11', NULL),
(5, 'Stephane', 'jean', 'USA', '12', '2022-09-08 08:20:28', '2022-09-09 14:16:35', NULL),
(6, 'Dahimy', 'dormeus', 'República Dominicana', '45', '2022-09-08 11:18:38', '2022-09-08 23:12:36', NULL),
(7, 'Thony', 'dormeus', 'República Dominicana', '0', '2022-09-08 15:26:41', '2022-09-09 13:57:31', '2022-09-09 13:57:31'),
(8, 'Stephane ', 'El sharawy', 'Italy', '5', '2022-09-08 17:32:15', '2022-09-09 13:56:46', '2022-09-09 13:56:46'),
(10, 'Thony', 'louis', 'República Dominicana', '0', '2022-09-08 18:38:07', '2022-09-09 13:09:09', '2022-09-09 13:09:09'),
(13, 'Lisemene', 'Almeus', 'Haití', '3000', '2022-09-09 13:56:32', '2022-09-09 13:56:32', NULL),
(14, 'Faranatha ', 'Lafleur ', 'República Dominicana', '23', '2022-09-09 14:14:28', '2022-09-09 14:14:28', NULL),
(15, '', '', '', '', '2022-09-09 15:00:26', '2022-09-09 15:00:33', '2022-09-09 15:00:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `books`
--

CREATE TABLE `books` (
  `Id` int(5) UNSIGNED NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `edition` varchar(100) NOT NULL,
  `authors_id` int(5) UNSIGNED NOT NULL,
  `publication_date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `books`
--

INSERT INTO `books` (`Id`, `book_name`, `edition`, `authors_id`, `publication_date`, `created_at`) VALUES
(13, 'Le Prince', '2004', 4, '2005-07-12', '2022-09-09 05:24:58'),
(24, 'Le dernier temp', '2004', 10, '2022-09-07', '2022-09-09 16:21:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(3, '2022-09-07-221252', 'App\\Database\\Migrations\\Books', 'default', 'App', 1662597033, 1),
(4, '2022-09-07-221320', 'App\\Database\\Migrations\\Author', 'default', 'App', 1662597033, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `test` (`authors_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `books`
--
ALTER TABLE `books`
  MODIFY `Id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `test` FOREIGN KEY (`authors_id`) REFERENCES `authors` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
