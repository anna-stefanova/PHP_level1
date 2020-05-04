-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 04 2020 г., 09:43
-- Версия сервера: 10.4.10-MariaDB
-- Версия PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `internet_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

DROP TABLE IF EXISTS `goods`;
CREATE TABLE IF NOT EXISTS `goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `full_info` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `title`, `price`, `img`, `full_info`) VALUES
(1, 'Орхидея Каттлея двухцветная (Cattleya bicolor) ', 500, 'cattley_bicolor.jpg', 'Орхидеи по праву считаются чуть ли не самыми прекрасными цветами на всей планете. В свою очередь Каттлея – королева среди орхидей.\r\nКаттлея двухцветная (Cattleya bicolor): отличаются ярко-пурпурным цветом губы и красно-коричневым цветом лепестков. Вырастают до 60 см в высоту.'),
(2, 'Орхидея Ванда голубая (Vanda coerulescens)', 550, 'vanda_blue.jpg', 'Орхидеи Ванда (лат. Vanda) – пожалуй, самые красивые цветы из семейства орхидей. При хорошем уходе эти изящные цветы могут цвести около 3 месяцев даже несколько раз в год, создавая в доме атмосферу праздника.\r\nВанда Голубая — орхидея с наличием прямостоячего стебля и многочисленных корней. Имеет крупные цветки в среднем — 10 см в диаметре. Цвет – лавандово-голубой с темным сетчатым рисунком.'),
(3, 'Фаленопсис Люддемана (Ph. lueddemanniana)', 420, 'phalaenopsis_lueddemanniana.jpg', 'Орхидея Фаленопсис на данный момент является самой распространенной орхидеей в комнатном цветоводстве\r\nФаленопсис Люддемана (Phalaenopsis lueddemanniana). Это интересный вид, цветущий в основном целый год, пик цветения в зимний период, с декабря по март. Цветоносы являются небольшими, на них обычно размещаются до 7 мелких цветков, раскрываются поочередно. Имеют очень приятный аромат.'),
(4, 'Орхидея Каттлея Варшевича (Cattleya warscewiczii)', 640, 'cattleya_varsh.jpg', 'Каттлея Варшевича или гигантская \r\n(Cattleya warscewiczii): высокогорная каттлея родом из Колумбии. Отличается большими ароматными цветами. Окрас белый с большой волнистой губой пурпурного цвета с желтым пятном.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
