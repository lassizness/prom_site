-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 13 2017 г., 12:16
-- Версия сервера: 10.1.25-MariaDB
-- Версия PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `prof`
--

-- --------------------------------------------------------

--
-- Структура таблицы `balls`
--

CREATE TABLE `balls` (
  `id` int(10) DEFAULT NULL,
  `articul` varchar(10) COLLATE utf8_bin NOT NULL,
  `name` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `diameter` varchar(10) COLLATE utf8_bin NOT NULL,
  `effect` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `video` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `packaging` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `amount` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `weight` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `price` varchar(10) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;

--
-- Дамп данных таблицы `balls`
--

INSERT INTO `balls` (`id`, `articul`, `name`, `diameter`, `effect`, `video`, `packaging`, `amount`, `weight`, `price`) VALUES
(1, 'CSH9200', 'Шар пиротехнический', '2.5', 'Time rain with time rain pistil', 'dfqnuKtLBIA', '120/1', '0,047', '0,123', '125'),
(2, 'CSH9200', 'Шар пиротехнический', '2.5', 'Red wave with strobe pistil', '398Muuf70rs', '120/1', '0,047', '0,138', '125'),
(3, 'CSH9200', 'Шар пиротехнический', '2.5', 'Chry to color', 'NE3HxrweQ2Y', '120/1', '0,047', '0,128', '125'),
(4, 'CSH9200', 'Шар пиротехнический', '2.5', 'Chrys first to red', 'l6KFzs09214', '120/1', '0,047', '0,13', '125'),
(5, 'CSH9200', 'Шар пиротехнический', '2.5', 'White strobe', 'GhHAk008kOE', '120/1', '0,047', '16', '125'),
(6, 'CSH9200', 'Шар пиротехнический', '2.5', 'Multicolor penoy to chry', 'JxVU6RunLbE', '120/1', '0,047', '0,142', '125'),
(7, 'CSH9200', 'Шар пиротехнический', '2.5', 'Brocade with green strobe pistil', '4df-PjkWqFA', '120/1', '0,047', '0,127', '125'),
(8, 'CSH9200', 'Шар пиротехнический', '2.5', 'Brocade with crackling pistil', 'j7n4WV5Qq0U', '120/1', '0,047', '0,126', '125'),
(9, 'CSH9200', 'Шар пиротехнический', '2.5', 'Silver wave to purple', 'VTb-V6NL3Uc', '120/1', '0,047', '0,134', '125'),
(10, 'CSH9200', 'Шар пиротехнический', '2.5', 'Red to green peony', 'KwY_WYJuAaM', '120/1', '0,047', '0,137', '125'),
(11, 'CSH9200', 'Шар пиротехнический', '2.5', 'Red peony with time rain pistil', 'PK17rK52WJs', '120/1', '0,047', '0,137', '125'),
(12, 'CSH9201', 'Шар пиротехнический', '3.0', 'Purple Wave', '6PrO3eaYp24', '72/1', '0,052', '0,24', '185'),
(13, 'CSH9201', 'Шар пиротехнический', '3.0', 'Red Wave', '0oF7NqF6924', '72/1', '0,052', '0,23', '185'),
(14, 'CSH9201', 'Шар пиротехнический', '3.0', 'Blue Wave', 'EVV3LE0DNe0', '72/1', '0,052', '0,24', '185'),
(15, 'CSH9201', 'Шар пиротехнический', '3.0', 'Green Wave', 'ut_XkHlLNRg', '72/1', '0,052', '0,24', '185'),
(16, 'CSH9201', 'Шар пиротехнический', '3.0', 'White strobe', 'H0cc5j0Y8do', '72/1', '0,052', '0,23', '185'),
(17, 'CSH9201', 'Шар пиротехнический', '3.0', 'Green strobe', 'tY5GjKHlegg', '72/1', '0,052', '0,23', '185'),
(18, 'CSH9201', 'Шар пиротехнический', '3.0', 'Brocade to blue', 'J7EnowCffgI', '72/1', '0,052', '0,23', '185'),
(19, 'CSH9201', 'Шар пиротехнический', '3.0', 'Brocade with red strobe pistil', 'zFLjIKdVmIQ', '72/1', '0,052', '0,23', '185'),
(20, 'CSH9201', 'Шар пиротехнический', '3.0', 'Coconut pistil and blue peony', 'ExpR0MtrpKk', '72/1', '0,052', '0,025', '185'),
(21, 'CSH9201', 'Шар пиротехнический', '3.0', 'Coconut pistil and purple peony', 'sYn7JOFH-3M', '72/1', '0,052', '0,24', '185'),
(22, 'CSH9201', 'Шар пиротехнический', '3.0', 'Acque wave', 'wQqXVOS2ERQ', '72/1', '0,053', '0,24', '255'),
(23, 'CSH9201', 'Шар пиротехнический', '3.0', 'Red wave', 'HIS70FFGp-k', '72/1', '0,053', '0,24', '255'),
(24, 'CSH9201', 'Шар пиротехнический', '3.0', 'Blue to white strobe', '0gpy9Kx2Fm4', '72/1', '0,053', '0,24', '255'),
(25, 'CSH9201', 'Шар пиротехнический 3.0', '3.0', 'Gold strobe', 'yOLBeZQVvug', '72/1', '0,053', '0,24', '255'),
(26, 'CSH9201', 'Шар пиротехнический', '3.0', 'Brocade crown to yellow wave', 'BxbAMwN6zo8', '72/1', '0,053', '0,24', '255'),
(27, 'CSH9201', 'Шар пиротехнический', '3.0', 'Gold tit willow to crackling', 'NfuudPS2Idw\r\n', '72/1', '0,053', '0,24', '255'),
(28, 'CSH9201', 'Шар пиротехнический ', '3.0', 'Red ring to dragon eggs pistil', 'zK3_szoZijk', '72/1', '0,053', '0,24', '255'),
(29, 'CSH9201', 'Шар пиротехнический', '3.0', 'Time rain', '9JBkcL114lA', '72/1', '0,053', '0,24', '255'),
(30, 'CSH9201', 'Шар пиротехнический', '3.0', 'Green wave to crackling', 'eml0ceVfRuA', '72/1', '0,053', '0,24', '255'),
(31, 'CSH9201', 'Шар пиротехнический', '3.0', 'Chrys. to sea blue', 'Fw3FhM9Sv_k', '72/1', '0,053', '0,24', '255'),
(32, 'CSH9201', 'Шар пиротехнический', '3.0', 'Chrys. to lemon wave', 'Chrys. to lemon wave', '72/1', '0,053', '0,24', '255'),
(33, 'CSH9201', 'Шар пиротехнический', '3.0', 'Tit.chrys to red wandering star', 'r-PIpWdscrk', '72/1', '0,053', '0,24', '255'),
(34, 'CSH9201', 'Шар пиротехнический', '3.0', 'Chrys. to red wave', 'WTf7AuAPz-4', '72/1', '0,053', '0,24', '255'),
(35, 'CSH9201', 'Шар пиротехнический', '3.0', 'Tit chry with silver strobe coco', 'VhFrFae0aCk', '72/1', '0,053', '0,24', '255'),
(36, 'CSH9201', 'Шар пиротехнический', '3.0', 'Gold willow to pink', 'nlGd1q1UAr4', '72/1', '0,053', '0,24', '255'),
(37, 'CSH9201', 'Шар пиротехнический', '3.0', 'Coconut pistil and green peony', '-u_O9o5UEY0', '72/1', '0,053', '0,24', '255'),
(38, 'CSH9201', 'Шар пиротехнический', '3.0', 'Red flower to crackling', 'zEp5fgl0fto', '72/1', '0,053', '0,24', '255'),
(39, 'CSH9201', 'Шар пиротехнический', '3.0', 'Wave to blue', '4MN1s3mYXt8', '72/1', '0,053', '0,24', '255'),
(40, 'CSH9201', 'Шар пиротехнический', '3.0', 'Chry to blue', 'WCvZRwv9hww', '72/1', '0,053', '0,24', '255'),
(41, 'CSH9201', 'Шар пиротехнический', '3.0', 'Brocade strobe with red strobe pistil', 'zFLjIKdVmIQ', '72/1', '0,053', '0,24', '255'),
(42, 'CSH9201', 'Шар пиротехнический', '3.0', 'Brocade crown to silver glitter', 'jpVpb8HIsuk', '72/1', '0,053', '0,25', '55'),
(43, 'CSH9300', 'Шар пиротехнический', '4.0', 'White strobe', 'VlzIqKdR6Rw', '36/1', '0,057', '0,48', '355'),
(44, 'CSH9300', 'Шар пиротехнический', '4.0', 'Coconut pistil and red peony', 'ad09KrXtQm4', '36/1', '0,057', '0,51', '355'),
(45, 'CSH9300', 'Шар пиротехнический', '4.0', 'Red strobe', 'uH9RnUuFDFw', '36/1', '0,057', '0,46', '355'),
(46, 'CSH9300', 'Шар пиротехнический', '4.0', 'Brocade to white wave', 'LHwXfnLwZYE', '36/1', '0,057', '0,47', '355'),
(47, 'CSH9300', 'Шар пиротехнический', '4.0', 'Golden willow', 'szYTUpqT10E', '36/1', '0,057', '0,44', '355'),
(48, 'CSH9300', 'Шар пиротехнический', '4.0', 'Brocade flower crown', '8XVJ1Cvww8Y', '36/1', '0,057', '0,5', '355'),
(49, 'CSH9300', 'Шар пиротехнический', '4.0', 'Green Wave', 'OrbroyaCNUQ', '36/1', '0,057', '0,49', '355'),
(50, 'CSH9300', 'Шар пиротехнический', '4.0', 'Blue Wave', 'bI2yow28Wlo', '36/1', '0,057', '0,5', '355'),
(51, 'CSH9300', 'Шар пиротехнический', '4.0', 'Coconut pistil and purple peony', 'reBajJ34l34', '36/1', '0,057', '0,49', '355'),
(52, 'CSH9300', 'Шар пиротехнический', '4.0', 'Brocade crown to red strobe w/ red strobe pistil', 'Brocade crown to red strobe w/ red strobe pistil', '36/1', '0,057', '0,48', '355'),
(53, 'CSH9300', 'Шар пиротехнический', '4.0', 'Green strobe', 'ieFrcazMdIY', '36/1', '0,057', '0,46', '355'),
(54, 'CSH9300', 'Шар пиротехнический', '4.0', 'Coconut pistil and blue peony', 'NztRBzcSelQ', '36/1', '0,057', '0,48', '355'),
(55, 'CSH9300', 'Шар пиротехнический', '4.0', 'Coconut pistil and green peony', 'sl9SW2Qq2U0', '36/1', '0,057', '0,51', '355'),
(56, 'CSH9300', 'Шар пиротехнический ', '4.0', 'Blue to brocade crown', 'ILD3HFODDi8', '36/0', '0,054', '0,53', '425'),
(57, 'CSH9300', 'Шар пиротехнический ', '4.0', 'Brocade crown to dragon eggs', 'tf1MKSDd3Yg', '36/1', '0,054', '0,53', '425'),
(58, 'CSH9300', 'Шар пиротехнический ', '4.0', 'Silver willow', 'x0cbC1xlCkU', '36/1', '0,054', '0,53', '425'),
(59, 'CSH9300', 'Шар пиротехнический ', '4.0', 'Blue mushroom', '3FA01I3rdFM', '36/1', '0,054', '0,53', '425'),
(60, 'CSH9300', 'Шар пиротехнический ', '4.0', 'Octagonal chry to red', '3vgYCPfIgvU', '36/1', '0,054', '0,53', '425'),
(61, 'CSH9300', 'Шар пиротехнический ', '4.0', 'Red strobe willow', '_8UsXwvKxI0', '36/1', '0,054', '0,53', '425'),
(62, 'CSH9300', 'Шар пиротехнический ', '4.0', 'Gold tit willow', 'qEr1adaUlyY', '36/1', '0,054', '0,53', '425'),
(63, 'CSH9300', 'Шар пиротехнический ', '4.0', 'Silver wave to purple', 'gRfU_7TootM', '36/1', '0,054', '0,53', '425'),
(64, 'CSH9300', 'Шар пиротехнический ', '4.0', 'Ttit chry with silver strobe coco', '_cGEvI5rP_0', '36/1', '0,054', '0,53', '425'),
(65, 'CSH9300', 'Шар пиротехнический ', '4.0', 'Brocade crown to yellow wave', 'VbD1-Cs360A', '36/1', '0,054', '0,53', '425'),
(66, 'CSH9300', 'Шар пиротехнический ', '4.0', 'Blood', 'k4V66sS0axE', '36/1', '0,054', '0,53', '425'),
(67, 'CSH9300', 'Шар пиротехнический ', '4.0', 'Green to orange wave', 'evmiD0nDvGo', '36/1', '0,054', '0,53', '425'),
(68, 'CSH9300', 'Шар пиротехнический ', '4.0', 'Gold tit willow to dragon eggs', 'zC1FMwcjsmM', '36/1', '0,054', '0,53', '425'),
(69, 'CSH9300', 'Шар пиротехнический ', '4.0', 'Red to brocade crown', 'yY_VEX5K3W8', '36/1', '0,054', '0,53', '425'),
(70, 'CSH9300', 'Шар пиротехнический ', '4.0', 'Chrys. to white wave', 'gaoaTow8dsk', '36/1', '0,054', '0,53', '425'),
(71, 'CSH9300', 'Шар пиротехнический ', '4.0', 'Brocade crown to crackling', 'UtA1XNf6mEY', '36/1', '0,054', '0,53', '425'),
(72, 'CSH9300', 'Шар пиротехнический ', '4.0', 'Brocade crown', 'zqXx04U-9Rk', '36/1', '0,054', '0,53', '425'),
(73, 'CSH9300', 'Шар пиротехнический ', '4.0', 'Red coconut palm', '2hlzqVLzZv8', '36/1', '0,054', '0,53', '425'),
(74, 'CSH9300', 'Шар пиротехнический ', '4.0', 'Silver wave to green', 'zKod4n9GAg8', '36/1', '0,054', '0,53', '425'),
(75, 'CSH9300', 'Шар пиротехнический ', '4.0', 'Silver strobe', 'GlMdZdAVLY0', '36/1', '0,054', '0,053', '425'),
(76, 'CSH9300', 'Шар пиротехнический ', '4.0', 'Gold tit willow to pink', 'nNT6fjyPthQ', '36/1', '0,054', '0,53', '425'),
(77, 'CSH9300', 'Шар пиротехнический ', '4.0', 'Sea blue wave', 'V6U1W1JVmyk', '36/1', '0,054', '0,53', '425'),
(78, 'CSH9300', 'Шар пиротехнический ', '4.0', 'Silver peony', '5xtu74eWVag', '36/1', '0,054', '0,53', '425'),
(79, 'CSH9300', 'Шар пиротехнический ', '4.0', 'Double ring', 'o5LalZqYqDw', '36/1', '0,054', '0,53', '425'),
(80, 'CSH9300', 'Шар пиротехнический ', '4.0', 'Lemon falling leaves', 'S23H_w7rDLg', '36/1', '0,054', '0,53', '425'),
(81, 'CSH9300', 'Шар пиротехнический ', '4.0', 'Brocade crown to white strobe', 'll2azvfMaAY', '36/1', '0,054', '0,53', '425'),
(82, 'CSH9300', 'Шар пиротехнический ', '4.0', 'Silver crown + red double ring', 'OD-Zkl30ZNQ', '36/1', '0,054', '0,53', '425'),
(83, 'CSH9300', 'Шар пиротехнический ', '4.0', 'Orange red time rain dahlia flower', 'g5Kzn1NeU4w', '36/1', '0,054', '0,53', '425'),
(84, 'CSH9302', 'Шар пиротехнический', '5.0', 'Brocade crown', 'FoLfElqlryg', '24/1', '0,061', '0,96', '670'),
(85, 'CSH9302', 'Шар пиротехнический ', '5.0', 'Brocade crown to yellow wave', 'Eqxju6d6efI', '24/1', '0,061', '0,96', '670'),
(86, 'CSH9302', 'Шар пиротехнический ', '5.0', 'Brocade crown to silver strobe', 'YcI0Vsj1Jr8', '24/1', '0,061', '0,96', '670'),
(87, 'CSH9302', 'Шар пиротехнический ', '5.0', 'Brocade crown to red strobe pistil', 'TbtPnVRQxKw', '24/1', '0,061', '0,96', '670'),
(88, 'CSH9302', 'Шар пиротехнический ', '5.0', 'Octagonal chry to blue', 'ho0BSpOM3Rw', '24/1', '0,061', '0,96', '670'),
(89, 'CSH9302', 'Шар пиротехнический ', '5.0', 'Purple mushroom', 'ebs9Wg3t5eg', '24\\1', '0,061', '0,96', '670'),
(90, 'CSH9302', 'Шар пиротехнический ', '5.0', 'Tit chry with tit chry crackling coco rising two crackling tiger tail', 'rLUOTMME6mw', '24/1', '0,061', '0,96', '670'),
(91, 'CSH9302', 'Шар пиротехнический ', '5.0', 'Red to blue to silver', 'yX4K06CFQJA', '24/1', '0,061', '0,96', '670'),
(92, 'CSH9302', 'Шар пиротехнический ', '5.0', 'Sea blue wave', '4yAcmU-8Hcg', '24/1', '0,061', '0,96', '670'),
(93, 'CSH9302', 'Шар пиротехнический ', '5.0', 'TIt chry tit crackling coco', 'rrwz7HaB1es', '24/1', '0,061', '0,96', '670'),
(94, 'CSH9302', 'Шар пиротехнический ', '5.0', 'rrwz7HaB1es', 'GpbSdtJxhI4', '24/1', '0,061', '0,96', '670'),
(95, 'CSH9302', 'Шар пиротехнический ', '5.0', 'Gold tit willow', '4JhOjHym-GA', '24/1', '0,061', '0,96', '670'),
(96, 'CSH9302', 'Шар пиротехнический ', '5.0', 'Blue to dragon eggs with dragon eggs pistil', 'MxVCK0wHztg', '24/1', '0,061', '0,96', '670'),
(97, 'CSH9302', 'Шар пиротехнический ', '5.0', 'Silver strobe', 'sEJb0XbvfiU', '24/1', '0,061', '0,96', '670'),
(98, 'CSH9302', 'Шар пиротехнический ', '5.0', 'Silver crackling willow', 'v0oKIRj6640', '24/1', '0,061', '0,96', '670'),
(99, 'CSH9302', 'Шар пиротехнический ', '5.0', 'Yellow crown chrys', 'Sh2qWdyzeDs', '24/1', '0,061', '0,96', '670'),
(100, 'CSH9302', 'Шар пиротехнический ', '5.0', 'Gold ti willow to crackling', 'wJkmZ0UWNhM', '24/1', '0,061', '0,96', '670'),
(101, 'CSH9302', 'Шар пиротехнический ', '5.0', 'Gold ti willow', 'GViGAbP5DUw', '24/1', '0,061', '0,96', '670'),
(102, 'CSH9302', 'Шар пиротехнический ', '5.0', 'Gold ti willow to pink', 'O6f4vH4fiyY', '24/1', '0,061', '0,96', '670'),
(103, 'CSH9302', 'Шар пиротехнический ', '5.0', 'Lemon ', 'ke22S1iIe5E', '24/1', '0,061', '0,96', '670'),
(104, 'CSH9302', 'Шар пиротехнический ', '5.0', 'Lemon strobe', 'g6cGDC5zM58', '24/1', '0,061', '0,96', '670'),
(105, 'CSH9302', 'Шар пиротехнический ', '5.0', 'Green wave ', 'ahnsGs1QDyg', '24/1', '0,061', '0,96', '670'),
(106, 'CSH9302', 'Шар пиротехнический ', '5.0', 'Color to crackling', '8sS7HKBRtrQ', '24/1', '0,061', '0,96', '670'),
(107, 'CSH9302', 'Шар пиротехнический ', '5.0', 'Lemon to blue to orange yellow', 'dppfUvaBpXo', '24/1', '0,061', '0,96', '670'),
(108, 'CSH9302', 'Шар пиротехнический ', '5.0', 'Red wave', 'oXdEyFuYiUY', '24/1', '0,061', '0,96', '670'),
(109, 'CSH9302', 'Шар пиротехнический ', '5.0', 'Willow to lemon', 'JQ7ICraI9lA', '24/1', '0,061', '0,96', '670'),
(110, 'CSH9302', 'Шар пиротехнический ', '5.0', 'Silver strobe waterfall', 'Bv95EaDulJs', '24/1', '0,061', '0,96', '670'),
(111, 'CSH9400', 'Шар пиротехнический ', '6.0', 'Crackling wave to gold strobe', 'qnjo9YJHVKo', '9/1', '0,039', '1,67', '1040'),
(112, 'CSH9400', 'Шар пиротехнический ', '6.0', 'Brocade crown to sea blue', 'rSOYou-wH8c', '9/1', '0,039', '1,67', '1040'),
(113, 'CSH9400', 'Шар пиротехнический ', '6.0', 'Sea blue star with silver strobe coco', 'gT5qlVGwqD0', '9/1', '0,039', '1,67', '1040'),
(114, 'CSH9400', 'Шар пиротехнический ', '6.0', 'Brocade crown to blue rising white strobe ring silver tail', 'Ri_j3y9AN54', '9/1', '0,039', '1,67', '1040'),
(115, 'CSH9400', 'Шар пиротехнический ', '6.0', 'Gold willow to dragon eggs to pink dahlia ring', 'oujWIzkioVo', '9/1', '0,039', '1,67', '1040'),
(116, 'CSH9400', 'Шар пиротехнический ', '6.0', 'Pink to brocade crown', 'g0TLegJI_ko', '9/1', '0,039', '1,67', '1040'),
(117, 'CSH9400', 'Шар пиротехнический ', '6.0', 'Gold tit willow with crackling pistil', 'Z5a7ToTk9cI', '9/1', '0,039', '1,67', '1040'),
(118, 'CSH9400', 'Шар пиротехнический ', '6.0', 'Purple to gold strobe', 'eYNztKCyW40', '9/1', '0,039', '1,67', '1040'),
(119, 'CSH9400', 'Шар пиротехнический ', '6.0', 'Brocade crown', '-F9vs7Ij3Gg', '9/1', '0,039', '1,67', '1040'),
(120, 'CSH9400', 'Шар пиротехнический ', '6.0', 'Brocade crown dahlia', 'pNlcxoH-bEY', '9/1', '0,039', '1,67', '1040'),
(121, 'CSH9400', 'Шар пиротехнический ', '6.0', 'Silver crown to red with green pistil to red to green to chry magic ball', '1GMfnwFX1uM', '9/1', '0,039', '1,67', '1800'),
(122, 'CSH9400', 'Шар пиротехнический ', '6.0', 'Flower crown to blue with red strobe pistil', '5hgeZ-7f7v0', '9/1', '0,039', '1,67', '1040'),
(123, 'CSH9400', 'Шар пиротехнический ', '6.0', 'Gold ti willow', 'eYNztKCyW40', '9/1', '0,039', '1,67', '1040'),
(124, 'CSH9400', 'Шар пиротехнический ', '6.0', 'Ti chrys ti crackling willow with crossete', '6x0mHU_eVHg', '9/1', '0,039', '1,67', '1040'),
(125, 'CSH400', 'Шар пиротехнический ', '6.0', 'Ti chrys crackling palm', 'q6h09wZGE5w', '9/1', '0,039', '1,67', '1040'),
(126, 'CSH9400', 'Шар пиротехнический ', '6.0', 'Silver strobe with waterfall ', '83awweCibL8', '9/1', '0,039', '1,67', '1040'),
(127, 'CSH9400', 'Шар пиротехнический', '6.0', 'Yellow crown silver strobe with pistil', 'YQ5uWyFbLBM', '9/1', '0,039', '1,67', '1040');

-- --------------------------------------------------------

--
-- Структура таблицы `batter`
--

CREATE TABLE `batter` (
  `id` int(10) DEFAULT NULL,
  `articul` varchar(10) COLLATE utf8_bin NOT NULL,
  `name` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `diameter` varchar(10) COLLATE utf8_bin NOT NULL,
  `effect` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `video` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `packaging` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `amount` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `weight` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `price` varchar(10) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Структура таблицы `pli`
--

CREATE TABLE `pli` (
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `link` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `pli`
--

INSERT INTO `pli` (`name`, `link`) VALUES
('CB081', 'http://123pli.ru/catalog/batarei_salyutov/sdelano_s_dushoy.html'),
('CB082', 'http://123pli.ru/catalog/batarei_salyutov/salyut_dlya_vashego_prazdnika.html'),
('CB083', 'http://123pli.ru/catalog/batarei_salyutov/ba_bakh_trakh_tara_rakh_dyshch_bydyshch_vau_.html'),
('CB084', 'http://123pli.ru/catalog/krupnye_batarei_salyutov/nochnoy_drayv_sv084.html'),
('CB085', 'http://123pli.ru/catalog/batarei_salyutov/almaznaya_pyl.html'),
('CB086', 'http://123pli.ru/catalog/batarei_salyutov/4kh4.html'),
('CB087', 'http://123pli.ru/catalog/batarei_salyutov/posledniy_geroy.html'),
('CB088', 'http://123pli.ru/catalog/batarei_salyutov/letuchiy_gollandets.html'),
('CB089', 'http://123pli.ru/catalog/batarei_salyutov/sto_zalpov_schastya.html'),
('CB090', 'http://123pli.ru/catalog/krupnye_batarei_salyutov/pylayushchee_nebo.html'),
('CB091', 'http://123pli.ru/catalog/krupnye_batarei_salyutov/more_emotsiy.html'),
('CB101', 'http://123pli.ru/catalog/batarei_salyutov/podarok_synu.html'),
('CB102', 'http://123pli.ru/catalog/krupnye_batarei_salyutov/vybor_professionalov_sv102.html'),
('CB103', 'http://123pli.ru/catalog/batarei_salyutov/chernaya_akula.html'),
('CB104', 'http://123pli.ru/catalog/krupnye_batarei_salyutov/agent_007.html'),
('CB105', 'http://123pli.ru/catalog/krupnye_batarei_salyutov/vip_korparativ.html'),
('CB106', 'http://123pli.ru/catalog/krupnye_batarei_salyutov/udivi_gostey_svoikh.html'),
('CB120', 'http://123pli.ru/catalog/batarei_salyutov_vip/piro_bezumie_sv120.html'),
('CB121', 'http://123pli.ru/catalog/batarei_salyutov/veselaya_semeyka_sv121.html'),
('CB122', 'http://123pli.ru/catalog/batarei_salyutov/tsarskie_zalpy.html'),
('CB123', 'http://123pli.ru/catalog/batarei_salyutov/zvezda_zhelaniy.html'),
('CB124', 'http://123pli.ru/catalog/batarei_salyutov/samyy_luchshiy_den.html'),
('CB125', 'http://123pli.ru/catalog/batarei_salyutov/nochnaya_skazka.html'),
('CB126', 'http://123pli.ru/catalog/batarei_salyutov/piratskie_zabavy.html'),
('CB127', 'http://123pli.ru/catalog/batarei_salyutov/vezhlivye_lyudi.html'),
('CB128', 'http://123pli.ru/catalog/batarei_salyutov/rossiyskaya_imperiya.html'),
('CB129', 'http://123pli.ru/catalog/batarei_salyutov/blestyashchiy_vecher.html'),
('CB131', 'http://123pli.ru/catalog/krupnye_batarei_salyutov/prazdnik_po_russki_sv131.html'),
('CB133', 'http://123pli.ru/catalog/batarei_salyutov_vip/prestol_imperatora_sv133.html'),
('CB134', 'http://123pli.ru/catalog/batarei_salyutov/prinosyashchiy_udachu_sv134.html'),
('CB135', 'http://123pli.ru/catalog/batarei_salyutov/roskoshnyy_salyut.html'),
('CB136', 'http://123pli.ru/catalog/batarei_salyutov/prazdnik_budet_1.html'),
('CB137', 'http://123pli.ru/catalog/batarei_salyutov/raz_dva_tri_pli.html'),
('CB138', 'http://123pli.ru/catalog/krupnye_batarei_salyutov/ognennyy_zakat_sv138.html'),
('CB139', 'http://123pli.ru/catalog/batarei_salyutov_vip/vysotnyy_salyut.html'),
('CB150', 'http://123pli.ru/catalog/batarei_salyutov/vyshe_tolko_zvezdy.html'),
('CB151', 'http://123pli.ru/catalog/krupnye_batarei_salyutov/tyazhelaya_artilleriya_sv151.html'),
('CB200', 'http://123pli.ru/catalog/batarei_salyutov/lyubimoy_dochke.html'),
('CB201', 'http://123pli.ru/catalog/batarei_salyutov/prazdnik_neposlushaniya.html'),
('CB202', 'http://123pli.ru/catalog/batarei_salyutov/khit_prodazh.html');

-- --------------------------------------------------------

--
-- Структура таблицы `scenepir`
--

CREATE TABLE `scenepir` (
  `id` int(10) DEFAULT NULL,
  `articul` varchar(10) COLLATE utf8_bin NOT NULL,
  `name` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `diameter` varchar(10) COLLATE utf8_bin NOT NULL,
  `effect` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `video` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `packaging` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `amount` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `weight` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `price` varchar(10) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Структура таблицы `singl`
--

CREATE TABLE `singl` (
  `id` int(10) DEFAULT NULL,
  `articul` varchar(10) COLLATE utf8_bin NOT NULL,
  `name` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `diameter` varchar(10) COLLATE utf8_bin NOT NULL,
  `effect` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `video` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `packaging` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `amount` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `weight` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `price` varchar(10) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Структура таблицы `singleline`
--

CREATE TABLE `singleline` (
  `id` int(10) DEFAULT NULL,
  `articul` varchar(10) COLLATE utf8_bin NOT NULL,
  `name` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `diameter` varchar(10) COLLATE utf8_bin NOT NULL,
  `effect` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `video` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `packaging` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `amount` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `weight` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `price` varchar(10) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `balls`
--
ALTER TABLE `balls`
  ADD UNIQUE KEY `id` (`id`) USING BTREE;

--
-- Индексы таблицы `batter`
--
ALTER TABLE `batter`
  ADD UNIQUE KEY `id` (`id`) USING BTREE;

--
-- Индексы таблицы `pli`
--
ALTER TABLE `pli`
  ADD PRIMARY KEY (`name`),
  ADD KEY `name` (`name`),
  ADD KEY `name_2` (`name`);

--
-- Индексы таблицы `scenepir`
--
ALTER TABLE `scenepir`
  ADD UNIQUE KEY `id` (`id`) USING BTREE;

--
-- Индексы таблицы `singl`
--
ALTER TABLE `singl`
  ADD UNIQUE KEY `id` (`id`) USING BTREE;

--
-- Индексы таблицы `singleline`
--
ALTER TABLE `singleline`
  ADD UNIQUE KEY `id` (`id`) USING BTREE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
