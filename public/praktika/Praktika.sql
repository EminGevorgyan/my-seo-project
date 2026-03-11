-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Мар 08 2026 г., 11:03
-- Версия сервера: 5.7.39
-- Версия PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Praktika`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Chat`
--

CREATE TABLE `Chat` (
  `Id` int(11) NOT NULL,
  `user1_id` int(11) DEFAULT NULL,
  `user2_id` int(11) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Chat`
--

INSERT INTO `Chat` (`Id`, `user1_id`, `user2_id`, `time`) VALUES
(11, 4, 3, '2026-03-06 18:41:37'),
(12, 7, 3, '2026-03-06 18:41:37');

-- --------------------------------------------------------

--
-- Структура таблицы `Chat_message`
--

CREATE TABLE `Chat_message` (
  `Id` int(11) NOT NULL,
  `chat_id` int(11) DEFAULT NULL,
  `sender_id` int(11) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Chat_message`
--

INSERT INTO `Chat_message` (`Id`, `chat_id`, `sender_id`, `text`, `time`) VALUES
(7, 11, 4, 'a', '2026-03-06 18:45:19'),
(8, 11, 3, 'b', '2026-03-06 18:45:19'),
(9, 11, 3, 'c', '2026-03-06 18:45:19'),
(10, 12, 7, 'a', '2026-03-06 18:45:19'),
(11, 12, 7, '3', '2026-03-06 18:45:19'),
(12, 12, 7, 'a', '2026-03-06 18:45:19'),
(13, 12, 7, 'c', '2026-03-06 18:45:19'),
(14, 12, 3, 'a', '2026-03-06 18:45:19'),
(15, 11, 3, 'a', '2026-03-06 18:45:19'),
(16, 11, 3, 'a', '2026-03-06 18:45:19'),
(17, 11, 3, 'c', '2026-03-06 18:45:19'),
(18, 11, 3, 'd', '2026-03-06 18:45:19'),
(19, 11, 3, '3', '2026-03-06 18:45:19'),
(20, 11, 3, '3', '2026-03-06 18:45:19'),
(21, 13, 3, '0', '2026-03-06 18:45:19'),
(22, 13, 3, '0', '2026-03-06 18:45:19'),
(23, 13, 3, '0', '2026-03-06 18:45:19'),
(24, 11, 4, '2', '2026-03-06 18:45:19'),
(25, 11, 4, '1', '2026-03-06 18:45:19'),
(26, 11, 4, '4', '2026-03-06 18:45:19'),
(27, 11, 3, '1', '2026-03-06 19:24:52');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `Id` int(11) NOT NULL,
  `comment_id` int(11) DEFAULT NULL,
  `sender_id` int(11) DEFAULT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `text` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`Id`, `comment_id`, `sender_id`, `time`, `text`) VALUES
(90, 37, 3, '2026-03-05 00:41:50', '5'),
(91, 37, 3, '2026-03-05 00:44:05', 's'),
(92, 40, 3, '2026-03-05 01:08:58', 'a'),
(93, 40, 3, '2026-03-05 01:09:24', 'a'),
(94, 40, 3, '2026-03-05 01:10:26', '1'),
(95, 40, 3, '2026-03-05 01:11:15', '2'),
(96, 40, 3, '2026-03-05 01:11:30', '2'),
(97, 40, 3, '2026-03-05 01:11:32', '2'),
(98, 40, 3, '2026-03-05 01:12:19', '2'),
(99, 40, 3, '2026-03-05 01:14:10', '2'),
(100, 40, 3, '2026-03-05 01:14:20', '2'),
(101, 40, 3, '2026-03-05 01:17:48', '2'),
(102, 40, 3, '2026-03-05 01:18:23', '2'),
(103, 40, 3, '2026-03-05 01:18:26', '1'),
(104, 40, 3, '2026-03-05 01:20:14', 'a'),
(105, 42, 3, '2026-03-05 01:27:07', '1'),
(106, 43, 3, '2026-03-06 22:08:15', 'c'),
(107, 43, 3, '2026-03-06 22:28:09', 's'),
(108, 43, 3, '2026-03-06 22:28:10', '1'),
(109, 45, 3, '2026-03-06 22:29:53', 'a');

-- --------------------------------------------------------

--
-- Структура таблицы `comment_user`
--

CREATE TABLE `comment_user` (
  `Id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comment_user`
--

INSERT INTO `comment_user` (`Id`, `post_id`) VALUES
(37, 36),
(38, 11),
(39, 31),
(40, 29),
(41, 0),
(42, 37),
(43, 43),
(44, 42),
(45, 47);

-- --------------------------------------------------------

--
-- Структура таблицы `Friends`
--

CREATE TABLE `Friends` (
  `Id` int(11) NOT NULL,
  `sender_id` int(11) DEFAULT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Friends`
--

INSERT INTO `Friends` (`Id`, `sender_id`, `receiver_id`, `status`) VALUES
(14, 7, 3, 1),
(21, 3, 4, 1),
(23, 6, 3, 1),
(25, 4, 3, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `is_liked`
--

CREATE TABLE `is_liked` (
  `Id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `is_liked`
--

INSERT INTO `is_liked` (`Id`, `post_id`, `user_id`) VALUES
(140, 27, 4),
(141, 25, 4),
(144, 11, 4),
(147, 41, 3),
(151, 27, 3),
(170, 31, 3),
(177, 11, 3),
(178, 36, 3),
(180, 43, 4),
(183, 47, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `is_saved`
--

CREATE TABLE `is_saved` (
  `Id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `is_saved`
--

INSERT INTO `is_saved` (`Id`, `post_id`, `user_id`) VALUES
(5, 11, 3),
(7, 43, 4),
(9, 47, 3),
(10, 43, 3),
(11, 42, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `Posts`
--

CREATE TABLE `Posts` (
  `Id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `is_archive` int(11) DEFAULT '0',
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `text` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Posts`
--

INSERT INTO `Posts` (`Id`, `user_id`, `is_archive`, `time`, `text`) VALUES
(42, 4, 0, '2026-03-06 00:27:40', 'as'),
(43, 4, 0, '2026-03-06 00:27:57', '9090'),
(44, 6, 0, '2026-03-06 22:15:37', 'echo 5;'),
(47, 3, 0, '2026-03-06 22:23:06', 'asa');

-- --------------------------------------------------------

--
-- Структура таблицы `post_images`
--

CREATE TABLE `post_images` (
  `Id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `post_images`
--

INSERT INTO `post_images` (`Id`, `post_id`, `url`) VALUES
(112, 42, '17727424601770833121female.png'),
(113, 42, '17727424601770833121male.jpeg'),
(114, 42, '17727424601770833164female.png'),
(116, 42, '17727424601771096772female.png'),
(117, 42, '17727424601771096772male.jpeg'),
(118, 43, '17727424771772564724177256328617712691861766351485toyota.webp'),
(119, 43, '177274247717708331641766352267audi.jpeg'),
(120, 44, '17728209371770833164female.png'),
(121, 44, '17728209371770833164male.jpeg'),
(122, 45, '1772820996'),
(125, 47, '177282138617712691861766351485toyota.webp'),
(126, 47, '177282138617712691571766351485toyota.webp'),
(127, 47, '177282138617710181751766351485toyota.webp');

-- --------------------------------------------------------

--
-- Структура таблицы `Users`
--

CREATE TABLE `Users` (
  `Id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `surName` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `phoneNumber` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT 'user',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Users`
--

INSERT INTO `Users` (`Id`, `name`, `surName`, `gender`, `avatar`, `phoneNumber`, `email`, `password`, `role`, `status`) VALUES
(3, 'a', 'a', 'male', '17725635301770833164female.png', '1', 'a@a', '$2y$10$XLrKW0Qrr1O2tD9B3A6fMuDYpUb.tPkVCm6SmBczxDs3d46sejumO', 'admin', 1),
(4, 's', 's', 'female', '17710997761766351485toyota.webp', '029392934', 's@s', '$2y$10$YPEgvosAkQXtIAE2Bt4mCOIEhtmN31xVH.zWzH6A8REA89ZOAdEhu', 'user', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Chat`
--
ALTER TABLE `Chat`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `Chat_message`
--
ALTER TABLE `Chat_message`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `comment_user`
--
ALTER TABLE `comment_user`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `Friends`
--
ALTER TABLE `Friends`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `is_liked`
--
ALTER TABLE `is_liked`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `is_saved`
--
ALTER TABLE `is_saved`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `Posts`
--
ALTER TABLE `Posts`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `post_images`
--
ALTER TABLE `post_images`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Chat`
--
ALTER TABLE `Chat`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `Chat_message`
--
ALTER TABLE `Chat_message`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT для таблицы `comment_user`
--
ALTER TABLE `comment_user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT для таблицы `Friends`
--
ALTER TABLE `Friends`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `is_liked`
--
ALTER TABLE `is_liked`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

--
-- AUTO_INCREMENT для таблицы `is_saved`
--
ALTER TABLE `is_saved`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `Posts`
--
ALTER TABLE `Posts`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT для таблицы `post_images`
--
ALTER TABLE `post_images`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT для таблицы `Users`
--
ALTER TABLE `Users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
