-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 16 2022 г., 00:32
-- Версия сервера: 8.0.29
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ufomusbd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `autorization`
--

CREATE TABLE `autorization` (
  `ID_Authorization` int NOT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Phone` int DEFAULT NULL,
  `Password` char(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Login` varchar(20) DEFAULT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `autorization`
--

INSERT INTO `autorization` (`ID_Authorization`, `Email`, `Phone`, `Password`, `Login`, `Date`) VALUES
(1, 'Vovanchik@mail.ru', 1231231, 'adadadsa', 'Flappy', '2021-11-20'),
(2, 'fsfsdfsfs@mail.ru', 123421414, '131ewqdad', 'ewqead', '2022-11-24');

-- --------------------------------------------------------

--
-- Структура таблицы `course`
--

CREATE TABLE `course` (
  `ID_Ñourses` int NOT NULL,
  `Price` int NOT NULL,
  `ID_Specialization` int DEFAULT NULL,
  `ID_Teacher` int DEFAULT NULL,
  `name_course` varchar(20) DEFAULT NULL,
  `ID_User` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `course`
--

INSERT INTO `course` (`ID_Ñourses`, `Price`, `ID_Specialization`, `ID_Teacher`, `name_course`, `ID_User`) VALUES
(1, 15000, 1, NULL, 'Программист', NULL),
(2, 12000, 1, 2, 'Психолог', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `paymend`
--

CREATE TABLE `paymend` (
  `ID_Paymend` int NOT NULL,
  `ID_User` int DEFAULT NULL,
  `ID_Ñourses` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `paymend`
--

INSERT INTO `paymend` (`ID_Paymend`, `ID_User`, `ID_Ñourses`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `specialization`
--

CREATE TABLE `specialization` (
  `ID_Specialization` int NOT NULL,
  `Specialization_course` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `specialization`
--

INSERT INTO `specialization` (`ID_Specialization`, `Specialization_course`) VALUES
(1, 'Психология'),
(2, 'It-Сфера');

-- --------------------------------------------------------

--
-- Структура таблицы `teatcher`
--

CREATE TABLE `teatcher` (
  `ID_Teacher` int NOT NULL,
  `Full_name` varchar(20) DEFAULT NULL,
  `ID_Specialization` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `teatcher`
--

INSERT INTO `teatcher` (`ID_Teacher`, `Full_name`, `ID_Specialization`) VALUES
(1, 'Оксана в.с.', 2),
(2, 'Мария Н.А', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `FIO` varchar(20) DEFAULT NULL,
  `ID_Authorization` int DEFAULT NULL,
  `ID_User` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`FIO`, `ID_Authorization`, `ID_User`) VALUES
('Печёркин В.Н', 1, 1),
('Семенов С.И.', 2, 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `autorization`
--
ALTER TABLE `autorization`
  ADD PRIMARY KEY (`ID_Authorization`);

--
-- Индексы таблицы `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`ID_Ñourses`),
  ADD KEY `R_28` (`ID_Specialization`);

--
-- Индексы таблицы `paymend`
--
ALTER TABLE `paymend`
  ADD PRIMARY KEY (`ID_Paymend`),
  ADD KEY `R_38` (`ID_User`),
  ADD KEY `R_39` (`ID_Ñourses`);

--
-- Индексы таблицы `specialization`
--
ALTER TABLE `specialization`
  ADD PRIMARY KEY (`ID_Specialization`);

--
-- Индексы таблицы `teatcher`
--
ALTER TABLE `teatcher`
  ADD PRIMARY KEY (`ID_Teacher`),
  ADD KEY `R_29` (`ID_Specialization`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_User`);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`ID_Specialization`) REFERENCES `specialization` (`ID_Specialization`);

--
-- Ограничения внешнего ключа таблицы `paymend`
--
ALTER TABLE `paymend`
  ADD CONSTRAINT `paymend_ibfk_1` FOREIGN KEY (`ID_User`) REFERENCES `users` (`ID_User`),
  ADD CONSTRAINT `paymend_ibfk_2` FOREIGN KEY (`ID_Ñourses`) REFERENCES `course` (`ID_Ñourses`);

--
-- Ограничения внешнего ключа таблицы `teatcher`
--
ALTER TABLE `teatcher`
  ADD CONSTRAINT `teatcher_ibfk_1` FOREIGN KEY (`ID_Specialization`) REFERENCES `specialization` (`ID_Specialization`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
