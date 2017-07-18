-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 15 2017 г., 02:00
-- Версия сервера: 5.7.16
-- Версия PHP: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `QFix`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Brand_Auto`
--

CREATE TABLE `Brand_Auto` (
  `brand_id` int(11) NOT NULL,
  `model_id` int(11) NOT NULL,
  `name_brand` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Brand_Auto`
--

INSERT INTO `Brand_Auto` (`brand_id`, `model_id`, `name_brand`) VALUES
(1, 1, 'Ford');

-- --------------------------------------------------------

--
-- Структура таблицы `Model_Auto`
--

CREATE TABLE `Model_Auto` (
  `model_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `name_model` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Model_Auto`
--

INSERT INTO `Model_Auto` (`model_id`, `type_id`, `name_model`) VALUES
(1, 1, 'Focus');

-- --------------------------------------------------------

--
-- Структура таблицы `Type_Auto`
--

CREATE TABLE `Type_Auto` (
  `type_id` int(11) NOT NULL,
  `name_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Type_Auto`
--

INSERT INTO `Type_Auto` (`type_id`, `name_type`) VALUES
(1, 'Универсал');

-- --------------------------------------------------------

--
-- Структура таблицы `Users`
--

CREATE TABLE `Users` (
  `users_id` int(11) NOT NULL,
  `login` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `users_auto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Users`
--

INSERT INTO `Users` (`users_id`, `login`, `password`, `email`, `avatar`, `users_auto`) VALUES
(2, 'Kuz_EV', 'repmvbx', 'ewgen9826@list.ru', NULL, NULL);
INSERT INTO `Users` (`users_id`, `login`, `password`, `email`, `avatar`, `users_auto`) VALUES
(1, 'Mly_SA', 'Grinsburg', 'smlynchik@mail.ru', 8787, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `Users_Auto`
--

CREATE TABLE `Users_Auto` (
  `auto_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `model_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `year` date DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `number` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Users_Auto`
--

INSERT INTO `Users_Auto` (`auto_id`, `users_id`, `brand_id`, `model_id`, `type_id`, `year`, `color`, `number`) VALUES
(1, 1, 1, 1, 1, '2007-03-15', 'gray', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `Users_Details`
--

CREATE TABLE `Users_Details` (
  `users_id` int(11) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `sure_name` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Users_Details`
--

INSERT INTO `Users_Details` (`users_id`, `last_name`, `first_name`, `sure_name`, `gender`) VALUES
(1, 'Кузьмич', 'Евгений', 'Викторович', 'мужской');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Brand_Auto`
--
ALTER TABLE `Brand_Auto`
  ADD PRIMARY KEY (`brand_id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `model_id` (`model_id`);

--
-- Индексы таблицы `Model_Auto`
--
ALTER TABLE `Model_Auto`
  ADD PRIMARY KEY (`model_id`),
  ADD KEY `model_id` (`model_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Индексы таблицы `Type_Auto`
--
ALTER TABLE `Type_Auto`
  ADD PRIMARY KEY (`type_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Индексы таблицы `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`users_id`),
  ADD KEY `users_id` (`users_id`);

--
-- Индексы таблицы `Users_Auto`
--
ALTER TABLE `Users_Auto`
  ADD PRIMARY KEY (`auto_id`),
  ADD KEY `users_auto_ibfk_1` (`users_id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `model_id` (`model_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Индексы таблицы `Users_Details`
--
ALTER TABLE `Users_Details`
  ADD KEY `users_id` (`users_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Brand_Auto`
--
ALTER TABLE `Brand_Auto`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `Model_Auto`
--
ALTER TABLE `Model_Auto`
  MODIFY `model_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `Type_Auto`
--
ALTER TABLE `Type_Auto`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `Users`
--
ALTER TABLE `Users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `Users_Auto`
--
ALTER TABLE `Users_Auto`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Brand_Auto`
--
ALTER TABLE `Brand_Auto`
  ADD CONSTRAINT `brand_auto_ibfk_1` FOREIGN KEY (`model_id`) REFERENCES `Model_Auto` (`model_id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `Model_Auto`
--
ALTER TABLE `Model_Auto`
  ADD CONSTRAINT `model_auto_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `Type_Auto` (`type_id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `Users_Auto`
--
ALTER TABLE `Users_Auto`
  ADD CONSTRAINT `users_auto_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `Users` (`users_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_auto_ibfk_2` FOREIGN KEY (`brand_id`) REFERENCES `Brand_Auto` (`brand_id`),
  ADD CONSTRAINT `users_auto_ibfk_3` FOREIGN KEY (`model_id`) REFERENCES `Model_Auto` (`model_id`),
  ADD CONSTRAINT `users_auto_ibfk_4` FOREIGN KEY (`type_id`) REFERENCES `Type_Auto` (`type_id`);

--
-- Ограничения внешнего ключа таблицы `Users_Details`
--
ALTER TABLE `Users_Details`
  ADD CONSTRAINT `users_details_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `Users` (`users_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
