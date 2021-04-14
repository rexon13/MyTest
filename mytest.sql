-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 14 2021 г., 20:08
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mytest`
--

-- --------------------------------------------------------

--
-- Структура таблицы `apprentice`
--

CREATE TABLE `apprentice` (
  `id` int NOT NULL,
  `FIO` varchar(150) NOT NULL,
  `letter` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `lesson`
--

CREATE TABLE `lesson` (
  `id` int NOT NULL,
  `name_lesson` varchar(150) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE `questions` (
  `id` int NOT NULL,
  `letter` varchar(2) NOT NULL,
  `question` varchar(500) NOT NULL,
  `A` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `B` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `C` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `D` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `answer_right` varchar(1) NOT NULL,
  `SummBall` float NOT NULL,
  `theme` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id`, `letter`, `question`, `A`, `B`, `C`, `D`, `answer_right`, `SummBall`, `theme`) VALUES
(1, '3', 'Презентация это? ', 'способ представления информации. Документ или комплект документов, предназначенный для представления чего-либо.', 'это визуальный эффект, который воспроизводится при переходе от одного слайда к другому во время презентации', 'мультимедийная технология, которая создает видимость движения объекта', 'программа, предназначенная для просмотра web сайтов. ', 'A', 2.5, 1),
(2, '3', 'Как называется программа, с помощью которой создается презентация?', 'Paint', 'Microsoft Word', 'Chrome', 'Microsoft PowerPoint ', 'D', 2.5, 1),
(3, '3', 'Что представляет собой слайд?', 'это визуальный эффект, который воспроизводится при переходе от одного слайда к другому во время презентации', 'мультимедийная технология, которая создает видимость движения объекта', 'Отдельная часть призентации', 'мультимедийная технология, которая создает видимость движения объекта', 'C', 2.5, 1),
(4, '3', 'Цель презентации ?', 'способ представления информации. Документ или комплект документов, предназначенный для представления чего-либо.', 'Донести до аудитории полноценную информацию об объекте презентации в удобной форме', 'программа, предназначенная для просмотра web сайтов. ', 'мультимедийная технология, которая создает видимость движения объекта', 'B', 2.5, 1),
(5, '4', 'Что такое электронная почта? ', 'Служба отправки мгновенных сообщений', 'Технология и служба по созданию презентаций', 'Программа для создания анимаций', 'Технология и служба по пересылке и получению электронных сообщений', 'D', 2, 3),
(6, '4', 'Как называется казахстанский почтовый сервис', 'MAIL.RU', 'MAIL.KZ', 'YANDEX.KZ', 'GMAIL.COM', 'B', 2, 3),
(7, '', 'Презентация это? ', 'Cпособ представления информации. Документ или комплект документов, предназначенный для представления чего-либо.', 'Это визуальный эффект, который воспроизводится при переходе от одного слайда к другому во время презентации', 'Мультимедийная технология, которая создает видимость движения объекта', 'Программа, предназначенная для просмотра web сайтов. ', 'A', 2.5, 2),
(8, '3', 'Дизайн презентации это?', 'Программа, предназначенная для просмотра web сайтов. ', 'Единое оформление всех слайдов', 'Способ представления информации. Документ или комплект документов, предназначенный для представления чего-либо.', 'Это визуальный эффект, который воспроизводится при переходе от одного слайда к другому во время презентации', 'B', 2.5, 2),
(9, '3', 'Видео переходы это? ', 'Единое оформление всех слайдов', 'Мультимедийная технология, которая создает видимость движения объекта', 'Это визуальный эффект, который воспроизводится при переходе от одного слайда к другому во время презентации.', 'Cпособ представления информации. Документ или комплект документов, предназначенный для представления чего-либо.', 'C', 2.5, 2),
(10, '3', 'Как создать презентацию? ', 'Главная -> создать -> презентация PPTX', 'ПКМ -> создать презентацию', 'ЛКМ -> создать -> Презентация PPTX', 'ПКМ -> создать -> Презентация PPTX', 'D', 2.5, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `question_theme`
--

CREATE TABLE `question_theme` (
  `id_theme` int NOT NULL,
  `name_theme` varchar(500) NOT NULL,
  `class_theme` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `question_theme`
--

INSERT INTO `question_theme` (`id_theme`, `name_theme`, `class_theme`) VALUES
(1, 'Создание и оформление презентации', '3'),
(2, 'Информация для презентации', '3'),
(3, 'Передача данных в Интернет', '4');

-- --------------------------------------------------------

--
-- Структура таблицы `results_app`
--

CREATE TABLE `results_app` (
  `id` int NOT NULL,
  `FIO` varchar(500) NOT NULL,
  `Letter` varchar(2) NOT NULL,
  `Gr` int NOT NULL,
  `dat_time` datetime NOT NULL,
  `id_theme` int NOT NULL,
  `ball` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `results_app`
--

INSERT INTO `results_app` (`id`, `FIO`, `Letter`, `Gr`, `dat_time`, `id_theme`, `ball`) VALUES
(2, 'Молчанов Валентин', '4А', 1, '2021-04-12 16:04:18', 3, 2),
(3, 'Молчанов Валентин', '4А', 1, '2021-04-12 16:04:20', 3, 2),
(4, 'Молчанов Валентин', '4А', 1, '2021-04-12 16:04:20', 3, 2),
(5, 'Молчанов Валентин', '4Б', 1, '2021-04-12 16:04:22', 3, 4),
(6, 'Молчанов Валентин', '4Б', 1, '2021-04-12 16:04:24', 3, 4),
(7, 'Молчанов Валентин', '4Б', 1, '2021-04-12 16:04:24', 3, 4),
(8, 'Молчанов Валентин', '4Б', 1, '2021-04-12 16:04:24', 3, 4),
(9, 'Молчанов Валентин', '4Б', 1, '2021-04-12 16:04:25', 3, 4),
(10, 'Молчанов Валентин', '3А', 2, '2021-04-13 23:04:07', 2, 8),
(11, 'Молчанов Валентин', '3А', 2, '2021-04-13 23:04:07', 2, 10),
(12, 'Молчанов Валентин', '3А', 1, '2021-04-13 23:04:18', 2, 8),
(13, 'Молчанов Валентин', '3А', 1, '2021-04-14 23:04:06', 2, 10);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(250) NOT NULL,
  `login` varchar(150) NOT NULL,
  `pwd` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `login`, `pwd`) VALUES
(2, 'admin', 'admin', '$2y$10$yYTKI4pXWHRL62O4.4jjc.7IMuRfsXwut0py3v/c3Tamsyop/ji52');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `apprentice`
--
ALTER TABLE `apprentice`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `question_theme`
--
ALTER TABLE `question_theme`
  ADD PRIMARY KEY (`id_theme`);

--
-- Индексы таблицы `results_app`
--
ALTER TABLE `results_app`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `apprentice`
--
ALTER TABLE `apprentice`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `lesson`
--
ALTER TABLE `lesson`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `question_theme`
--
ALTER TABLE `question_theme`
  MODIFY `id_theme` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `results_app`
--
ALTER TABLE `results_app`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
