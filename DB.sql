-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 25 2022 г., 18:32
-- Версия сервера: 5.6.51
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `DB`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(7) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `validts` int(11) DEFAULT NULL,
  `confirmed` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `validts`, `confirmed`) VALUES
(33, 'test', 'worktestmail111@yandex.ru', 1652216400, 0),
(34, 'test1', 'worktestmail111@yandex.ru', 1664312400, 0),
(35, 'test2', 'worktestmail111@yandex.ru', 1664312400, 0),
(36, 'test3', 'worktestmail111@yandex.ru', 1664312400, 0),
(37, 'test4', 'worktestmail111@yandex.ru', 1664312400, 0),
(38, 'test5', 'worktestmail111@yandex.ru', 1664312400, 0),
(39, 'test6', 'worktestmail111@yandex.ru', 1664312400, 1),
(40, 'test7', 'worktestmail111@yandex.ru', 1664312400, 1),
(41, 'test7', 'worktestmail111@yandex.ru', 1664312400, 1),
(42, 'test9', 'worktestmail111@yandex.ru', 1664312400, 1),
(43, 'test13', 'worktestmail111@yandex.ru', 1664226000, 1),
(44, 'test56', 'worktestmail111@yandex.ru', 1664139600, 0),
(45, 'test88', 'worktestmail111@yandex.ru', 1664312400, 0),
(46, 'test99', 'worktestmail111@yandex.ru', 1665115627, 1),
(47, 'test15', 'worktestmail111@yandex.ru', 1665115627, 1),
(48, 'yyuu', 'worktestmail111@yandex.ru', 1665115627, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
