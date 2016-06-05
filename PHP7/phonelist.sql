-- phpMyAdmin SQL Dump
-- version 4.4.15.6
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Май 27 2016 г., 21:50
-- Версия сервера: 5.6.12-log
-- Версия PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `php7`
--

-- --------------------------------------------------------

--
-- Структура таблицы `phonelist`
--

CREATE TABLE IF NOT EXISTS `phonelist` (
  `id` int(11) NOT NULL,
  `firstName` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `lastName` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `birthDay` date NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `phonelist`
--

INSERT INTO `phonelist` (`id`, `firstName`, `lastName`, `birthDay`, `email`, `phone`) VALUES
(0, 'Рысин', 'Михаил', '2016-05-04', 'mrysin@mail.ru', '+79689106245'),
(1, 'Вася', 'Пупкин', '2016-05-02', 'vasya007@mail.ru', '555555444');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `phonelist`
--
ALTER TABLE `phonelist`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
