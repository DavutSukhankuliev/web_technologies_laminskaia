-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Апр 13 2023 г., 00:09
-- Версия сервера: 5.7.21-20-beget-5.7.21-20-1-log
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `alexsoft_f19`
--

-- --------------------------------------------------------

--
-- Структура таблицы `COMMENTS`
--
-- Создание: Апр 12 2023 г., 20:21
-- Последнее обновление: Апр 12 2023 г., 20:56
--

DROP TABLE IF EXISTS `COMMENTS`;
CREATE TABLE `COMMENTS` (
  `ID` int(11) NOT NULL,
  `CREATED` date NOT NULL,
  `AUTHOR` varchar(200) NOT NULL,
  `COMMENT` varchar(200) NOT NULL,
  `ART_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `COMMENTS`
--

INSERT INTO `COMMENTS` (`ID`, `CREATED`, `AUTHOR`, `COMMENT`, `ART_ID`) VALUES
(1, '2023-04-12', 'Test1', 'Test1', 1),
(2, '2023-04-12', 'Test2', 'Test2', 1),
(4, '2023-04-12', 'test4', 'test4', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `NOTES`
--
-- Создание: Апр 12 2023 г., 20:16
-- Последнее обновление: Апр 12 2023 г., 20:19
--

DROP TABLE IF EXISTS `NOTES`;
CREATE TABLE `NOTES` (
  `ID` int(11) NOT NULL,
  `TITLE` varchar(200) NOT NULL,
  `ARTICLE` varchar(200) NOT NULL,
  `CREATED` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `NOTES`
--

INSERT INTO `NOTES` (`ID`, `TITLE`, `ARTICLE`, `CREATED`) VALUES
(1, 'ОАО \"Прогресс\"', 'Фруто-Няня', '2023-04-12'),
(2, 'Nestle', 'NAN', '2023-04-12'),
(3, 'Nestle', 'Gerber', '2023-04-12'),
(4, 'Nestle', 'Nestogen', '2023-04-12');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `COMMENTS`
--
ALTER TABLE `COMMENTS`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `art-_d` (`ART_ID`);

--
-- Индексы таблицы `NOTES`
--
ALTER TABLE `NOTES`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `COMMENTS`
--
ALTER TABLE `COMMENTS`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `NOTES`
--
ALTER TABLE `NOTES`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `COMMENTS`
--
ALTER TABLE `COMMENTS`
  ADD CONSTRAINT `COMMENTS_ibfk_1` FOREIGN KEY (`ART_ID`) REFERENCES `NOTES` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
