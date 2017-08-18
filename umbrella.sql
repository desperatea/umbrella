-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Авг 11 2017 г., 21:51
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `umbrella`
--

-- --------------------------------------------------------

--
-- Структура таблицы `main`
--

CREATE TABLE IF NOT EXISTS `main` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `url2` varchar(255) NOT NULL,
  `time` int(1) NOT NULL,
  `counter` int(10) NOT NULL,
  `test1` int(1) NOT NULL,
  `test2` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Дамп данных таблицы `main`
--

INSERT INTO `main` (`id`, `url`, `url2`, `time`, `counter`, `test1`, `test2`) VALUES
(1, 'https://mail.ru/', 'mail', 0, 6, 0, 0),
(2, '', '', 0, 0, 0, 0),
(3, 'https://mail.ru/', 'mail', 0, 6, 0, 0),
(4, '', '', 0, 0, 0, 0),
(5, '', '', 0, 0, 0, 0),
(6, '', '', 0, 1, 0, 0),
(7, '', '', 0, 1, 0, 0),
(8, '', '', 0, 1, 0, 0),
(9, '', '', 0, 1, 0, 0),
(10, '', '', 0, 1, 0, 0),
(11, '', '', 0, 1, 0, 0),
(12, 'https://mail.ru/', 'mail', 0, 6, 0, 0),
(13, '', 'czupfwwf', 0, 1, 0, 0),
(14, '', 'enieynxw', 0, 0, 0, 0),
(15, '', 'zsdraazj', 0, 0, 0, 0),
(16, 'vk.com', 'token1', 0, 0, 0, 0),
(17, '', 'acnpyonj', 0, 0, 0, 0),
(18, '', 'pvecswlh', 0, 0, 0, 0),
(19, '', 'wkuufggo', 0, 0, 0, 0),
(20, '', 'gpskhbpr', 0, 0, 0, 0),
(21, 'vk.com', 'zxczxc', 0, 3, 0, 0),
(22, '', 'fczauzdt', 0, 0, 0, 0),
(23, '', 'rzfxcafz', 0, 0, 0, 0),
(24, 'sdfdf', 'mail', 0, 6, 0, 0),
(25, 'sfedu.ru/', 'rrrrrrrrr', 0, 1, 0, 0),
(26, 'sfedu.ru/', 'sdwe', 0, 1, 0, 0),
(27, 'vk.com', 'vk', 0, 1, 0, 0),
(28, 'sfedu.ru/', 'aarksyzp', 0, 1, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
