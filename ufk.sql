-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Дек 02 2020 г., 21:15
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `ufk`
--

-- --------------------------------------------------------

--
-- Структура таблицы `ipadreses`
--

CREATE TABLE IF NOT EXISTS `ipadreses` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=98 ;

--
-- Дамп данных таблицы `ipadreses`
--

INSERT INTO `ipadreses` (`id`, `ip`, `title`, `description`) VALUES
(19, '10.3.1.220', 'ПРИНТЕР', 'Кабинет 302'),
(20, '10.3.1.1', 'SV0300FS', 'Диск X'),
(21, '10.3.1.2', '?', '?'),
(22, '10.3.1.3', 'SV0300UNIFO', 'СЭД УНИФО'),
(23, '10.3.1.4', 'МЭ Континент', 'МЭ Континент'),
(25, '10.3.0.210', 'Принтер', 'Кабинет 300'),
(26, '10.3.1.221', 'ПРИНТЕР', 'Кабинет 112'),
(27, '10.3.0.253', 'Принтер', 'Кабинет 214'),
(28, '10.3.0.252', 'Принтер', 'Кабинет 106'),
(29, '10.3.1.251', 'Принтер', 'Кабинет 231'),
(30, '10.3.1.209', 'Принтер', 'Кабинет 100'),
(31, '10.3.1.249', 'Принтер', 'Кабинет 109'),
(32, '10.3.1.248', 'Принтер', 'Кабинет 204'),
(33, '10.3.1.247', 'W0300ORSBI', 'Гамзат'),
(34, '10.3.1.246', 'Принтер', 'Кабинет ?'),
(35, '10.3.1.245', 'Принтер', 'Кабинет 312'),
(36, '10.3.1.244', 'Принтер', 'Кабинет 304'),
(37, '10.3.0.243', 'Принтер', 'Кабинет 201'),
(38, '10.3.1.8', 'SV0300DB', 'Сервер СЭД'),
(39, '10.3.1.11', 'S0300DC01', 'Домен Контроллер 1'),
(40, '10.3.1.12', 'S0300DC02', 'Домен Контроллер 2'),
(41, '10.3.1.5', 'SV0300LDDB01', 'Сервер LanDocs'),
(42, '10.3.1.6', 'SV0300LDDB02', 'Сервер LanDocs'),
(43, '10.3.1.7', 'SV0300LDDB03', 'Сервер LanDocs'),
(44, '10.3.1.10', 'SV0300DHCP', 'Сервер DHCP'),
(45, '10.3.1.20', 'SV0300SEDMSC', 'Сервер СЭД Москва'),
(46, '10.3.1.14', 'SV0300APP', 'Сервер приложений'),
(48, '10.3.1.27', 'SV0300TS01', 'Терминальный сервер 1'),
(49, '10.3.1.30', 'Balabit', 'Balabit'),
(50, '10.3.1.9', 'АКПШ Континент', 'АКПШ Континент'),
(51, '10.3.1.16', 'АКПШ Континент', 'АКПШ Континент'),
(52, '10.3.1.17', 'PV', 'PV'),
(53, '10.3.1.18', 'PV', 'PV'),
(55, '10.3.1.19', 'PV', 'PV'),
(56, '10.3.1.22', 'PV', 'PV'),
(57, '10.3.1.23', 'PV', 'PV'),
(58, '10.3.1.24', 'PV', 'PV'),
(59, '10.3.1.34', 'PV', 'PV'),
(60, '10.3.1.42', 'PV', 'PV'),
(61, '10.3.1.43', 'PV', 'PV'),
(62, '10.3.1.44', 'PV', 'PV'),
(63, '10.3.1.45', 'PV', 'PV'),
(64, '10.3.1.46', 'PV', 'PV'),
(65, '10.3.1.47', 'PV', 'PV'),
(66, '10.3.1.100', 'W0300OIS01', 'Зураб'),
(67, '10.3.1.101', 'W0300OIS05', 'Аслан'),
(68, '10.3.1.102', 'W0300OIS11', 'Ризван'),
(69, '10.3.1.103', 'Детектор атак ОРСБИ', 'Детектор атак ОРСБИ'),
(70, '10.3.1.138', 'S0300IISAKS', 'Аксиок Шина'),
(71, '10.3.1.142', 'SV0300NNTP', 'Сервер новостей'),
(72, '10.3.1.54', 'ОК Татьяна', 'Для ЕИСУКС'),
(73, '10.3.1.146', 'ОК Одесса', 'Для ЕИСУКС'),
(74, '10.3.1.73', 'ОК Жанна', 'Для ЕИСУКС'),
(75, '10.3.1.51', 'ОК Индира', 'Для ЕИСУКС'),
(76, '10.3.1.53', 'ОК Наида', 'Для ЕИСУКС'),
(77, '10.3.1.39', 'ОК Диана', 'Для ЕИСУКС'),
(78, '10.3.1.52', 'ОК Карема', 'Для ЕИСУКС'),
(79, '10.3.1.55', 'ОК Перихалум', 'Для ЕИСУКС'),
(80, '10.3.1.56', 'ОК Хадижат', 'Для ЕИСУКС'),
(81, '10.3.1.57', 'ОК Динара (Муталим)', 'Для ЕИСУКС'),
(82, '10.3.1.58', 'ОК Муслимат', 'Для ЕИСУКС'),
(83, '10.3.1.25', 'Континент', 'ОРСБИ'),
(84, '10.3.1.26', 'Континент', 'ОРСБИ'),
(85, '10.3.1.198', 'Принтер', 'Кабинет 102 ОВФР'),
(86, '10.3.1.242', 'Принтер', 'Кабинет МАГДИ'),
(87, '10.3.1.241', 'Принтер', 'Кабинет 221'),
(88, '10.3.1.240', 'Принтер', 'КУРБАНОВ АХМЕДХАН'),
(89, '10.3.0.199', 'принтер', 'принтерная'),
(90, '10.3.0.254', 'Принтер 100 каб', ''),
(91, '10.3.1.66', 'Принтер', 'Принтер 110каб'),
(92, '10.3.1.220', 'Принтер ЮО', 'Принтер ЮО'),
(93, '10.3.1.21', 'S0300MSUSMON02', 'ОРСБИ'),
(94, '10.3.1.31', 'S0300MSUSMON01', 'ОРСБИ'),
(95, '10.3.1.29', 'Balabit', 'Balabit'),
(96, '10.3.0.7', 'Принтер ОЦБ 229 каб', 'Принтер ОЦБ 229 каб'),
(97, '10.3.0.8', 'ОВФР 112 кабинет', 'Принтер');

-- --------------------------------------------------------

--
-- Структура таблицы `otdel`
--

CREATE TABLE IF NOT EXISTS `otdel` (
  `otdel_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `otdel_name` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `position` tinyint(3) unsigned NOT NULL DEFAULT '2',
  PRIMARY KEY (`otdel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=47 ;

--
-- Дамп данных таблицы `otdel`
--

INSERT INTO `otdel` (`otdel_id`, `otdel_name`, `full_name`, `alias`, `position`) VALUES
(2, 'АФО', 'Административно-финансовый отдел', 'afo', 74),
(3, 'ОКОИБ', 'Отдел кассового обслуживания исполнения бюджетов', 'okoib', 3),
(4, 'юо', 'Юридический отдел', 'yuo', 10),
(5, 'ок', 'Отдел государственной гражданской службы и кадров', 'ok', 9),
(7, 'оао', 'Организационно-аналитический отдел', 'oao', 73),
(8, 'кросв', 'КРО в сфере деятельности силовых ведомств и судебной системы', 'krosv', 70),
(9, 'кромо', 'КРО в социальной сфере межбюджетных отношений и социального страхования', 'kromo', 71),
(10, 'крорэ', 'КРО в сфере развития экономики', 'krore', 72),
(12, 'офкс', 'Отдел функционирования контрактной системы', 'ogz', 76),
(13, 'оцб', 'Отдел централизованной бухгалтерии', 'ocb', 75),
(14, 'обуио', 'Отдел БУ и О по операциям бюджетов', 'obuio', 7),
(15, 'ор', 'Отдел расходов', 'or', 68),
(16, 'ОВКиА', 'Отдел внутреннего контроля и аудита', 'ovk', 6),
(17, 'оис', 'Отдел информационных систем', 'ois', 11),
(18, 'оо', 'Операционный отдел', 'oo', 4),
(19, 'орсби', 'Отдел режима секретности и безопасности информации', 'orsbi', 12),
(20, 'овфр', 'Отдел ведения федеральных реестров', 'ovfr', 14),
(21, 'ото', 'Отдел технологического обеспечения', 'oto', 67),
(22, 'архив', 'Архив', 'arxiv', 102),
(23, '84 отряд', '84 отряд', 'otryad', 100),
(24, 'цокр', 'Отдел №1 Межрегионального филиала ФКУ "ЦОКР" в г. Ставрополе (г. Махачкала)', 'cokr', 101),
(25, 'руководствО', 'Руководство', 'ruk', 1),
(46, 'ОД', 'Отдел доходов', 'od', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `page_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `position` int(11) DEFAULT NULL,
  `link` varchar(255) NOT NULL DEFAULT '/',
  `text` text,
  `work` int(11) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`page_id`, `title`, `position`, `link`, `text`, `work`) VALUES
(1, 'Справочник ВТС', 1, 'phones', NULL, 1),
(2, 'IP адреса', 2, 'ipadreses', NULL, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `peoples`
--

CREATE TABLE IF NOT EXISTS `peoples` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `vtc` varchar(255) NOT NULL,
  `gtc` varchar(255) NOT NULL,
  `kab` varchar(255) NOT NULL,
  `otdel` varchar(255) NOT NULL,
  `positions` varchar(255) NOT NULL DEFAULT '500',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=228 ;

--
-- Дамп данных таблицы `peoples`
--

INSERT INTO `peoples` (`id`, `name`, `post`, `vtc`, `gtc`, `kab`, `otdel`, `positions`) VALUES
(2, 'Татарханова Диляра Вазирхановна', 'Заместитель начальника', '2072', '', '202', 'afo', '500'),
(4, 'Тагиров Тагир Ибадуллаевич', 'Заместитель начальника', '2097', '', '308', 'afo', '500'),
(5, 'Магомаев Мурад Магомаевич', 'Заместитель начальника', '2021', '550724', '314', 'afo', '102'),
(7, 'Шахбанов Рамазан Магомедович', 'Главный специалист-эксперт', '2088', '', '202', 'afo', '500'),
(8, 'Алиева Айна Казахмедовна', 'Главный специалист-эксперт', '2112', '', '202', 'afo', '500'),
(9, 'Абакарова Анжела Умаровна', 'Ведущий специалист-эксперт', '2094', '554724', '202', 'afo', '500'),
(10, 'Астапова Ирина Анатольевна', 'Ведущий специалист-эксперт', '2180', '550725', '100', 'afo', '500'),
(11, 'Насрулаева Раисат Халилулаевна', 'Ведущий специалист-эксперт', '2099', '', '100', 'afo', '500'),
(12, 'Иманалиева Марьям Валиевна', 'Ведущий специалист-эксперт', '2094', '554724', '202', 'afo', '500'),
(13, 'Магомедова Патимат Хабибовна', 'Старший специалист 2 разряда', '2098', '', '100', 'afo', '500'),
(14, 'Мамедова Муслимат Арсеновна', 'Специалист-эксперт', '2164', '', '314', 'ok', '121'),
(15, 'Товлиева Раиса Самаиловна', 'Специалист-эксперт', '2190', '55-07-24', '314', 'afo', '500'),
(16, 'Яхияев Ибрагим Алжанбегович', 'Специалист 1 разряда', '2019', '55-07-24', '314', 'afo', '500'),
(17, 'Мугутдинова Нуриян Курбаналиевна', 'Специалист 1 разряда', '2062', '55-07-24', '314', 'afo', '500'),
(18, 'Тучаев Рамазан Гаджиевич', 'Специалист-эксперт', '', 'Завсклад', '', 'afo', '500'),
(19, 'Абдулбутаев Магди Шохолович', 'Начальник отдела', '2006', '554732 554758', '216', 'okoib', '500'),
(20, 'Батырова Мадинат Батыровна', 'Заместитель начальника', '2115', '554705', '106', 'okoib', '500'),
(21, 'Аджиева Эльмира Шихувовна', 'Заместитель начальника', '2121', '554745', '106', 'okoib', '500'),
(22, 'Максимова Рена Шахвеледовна', 'Главный казначей ', '2118', '554726', '204', 'okoib', '500'),
(23, 'Шуайбова Тамара Сулеймановна', 'Главный казначей ', '2148', '554705', '204', 'okoib', '500'),
(24, 'Телемишева Софият Сувридиновна', 'Старший казначей ', '2116', '554705', '204', 'okoib', '500'),
(25, 'Астарханова Мадина Платовна', 'Старший казначей ', '2118', '554726', '106', 'okoib', '500'),
(26, 'Битаров Муса Магомедович', 'Старший казначей', '2192', '554725', '106', 'okoib', '500'),
(27, 'Ламазова Амалия Карибовна', 'Старший казначей ', '2114', '554705', '204', 'okoib', '500'),
(28, 'Байбекова Маржанат Магомедовна ', 'Казначей', '2141', '554705', '204', 'okoib', '500'),
(29, 'Велибекова Нарима Абукаровна ', 'Казначей', '2121', '550738', '204', 'okoib', '500'),
(30, 'Нухова Аминат Бахмудовна', 'Казначей', '2141', '554705', '204', 'okoib', '500'),
(31, 'Акаева Солтанат Сулеймановна', 'Казначей', '2141', '554705', '204', 'okoib', '500'),
(32, 'Магомедова Шуанат Омаровна ', 'Казначей', '2117', '554705', '204', 'okoib', '500'),
(33, 'Кабахова Патимат Магомедовна  ', 'Казначей', '2118', '554726', '112', 'okoib', '500'),
(34, 'Дациева Индира Магомедовна', 'Казначей', '2121', '550738', '204', 'okoib', '500'),
(35, 'Юсупова Эльвира Юсуповна', 'Казначей', '2114', '554705', '204', 'okoib', '500'),
(36, 'Рагимова Джарият Гаджибалаевна ', 'Специалист-эксперт', '2114', '554705', '204', 'okoib', '500'),
(37, 'Меджидова Саида Зайнулабидовна', 'Специалист-эксперт', '2121', '554705', '204', 'okoib', '500'),
(38, 'Маламагомедов Магомедгаджи Магомедович', 'Специалист-эксперт', '2125', '', '111', 'okoib', '500'),
(39, 'Гусейнова Зайнаб Алиевна', 'Специалист-эксперт', '2121', '550738', '204', 'okoib', '500'),
(40, 'Биакаева Зада Магомедовна ', 'Специалист 1 разряда', '2121', '550738', '204', 'okoib', '500'),
(41, 'Магомедова Патимат Гусейновна', 'Специалист 1 разряда', '2114', '554705', '204', 'okoib', '500'),
(42, 'Абдурахманова Аминат Закаригаджиевна', 'Специалист 1 разряда', '2121', '550738', '204', 'okoib', '500'),
(43, 'Ибрагимова Аминат Магомедсаидовна', 'Специалист 1 разряда', '2121', '550738', '204', 'okoib', '500'),
(44, 'Абдурахманова Олеся Абдурахмангаджиевна', 'И.о. начальника отдела', '2017', '', '306', 'yuo', '100'),
(46, 'Махмудова Диана Магомедовна', 'Главный специалист - эксперт', '2189', '554703', '302', 'yuo', '500'),
(47, 'Исмаилов Газимагомед Исмаилович', 'Ведущий специалист- эксперт', '2129', '554703', '302', 'yuo', '500'),
(48, 'Абдулгалимов Расим Абдулакимович', 'Специалист - эксперт', '2177', '550729     факс', '302', 'yuo', '500'),
(49, 'Бейбутова Роза Акифовна', 'Специалист - эксперт', '2048', '', '302', 'yuo', '500'),
(50, 'Салимгереев Магомед Пахрудинович', 'Заместитель начальника отдела', '2111', '550729     факс', '302', 'yuo', '200'),
(51, 'Абдулатипова Джамиля Юсуповна', 'Специалист 1 разряда', '2062', '550724', '314', 'afo', '500'),
(52, 'Алилова Жанна Саидовна', 'Начальник отдела', '2016', '550739', '303', 'ok', '100'),
(53, 'Алипулатова Наида Джавидиновна', 'Вед.  специалист – эксперт', '2075', '550739', '303', 'ok', '110'),
(54, 'Тагирова Перихалум Таймуровна', 'Вед.  специалист – эксперт', '2040', '550739', '303', 'ok', '113'),
(55, 'Малачиева Карема Пахрудиновна', 'Вед.  специалист – эксперт', '2090', '550739', '303', 'ok', '111'),
(56, 'Ахмедова Одесса Нажмутдиновна', 'Вед.  специалист – эксперт', '2126', '550739', '308', 'ok', '112'),
(57, 'Омарова Хадижат Абдулкадыровна', 'Специалист - эксперт', '2081', '550739', '308', 'ok', '120'),
(58, 'Ахвердиева Индира Низамиевна', 'Специалист - эксперт', '2136', '550739', '308', 'ok', '123'),
(59, 'Ганиева Динара Османовна', 'Специалист 1 разряда', '2040', '550739', '308', 'ok', '122'),
(60, 'Шугаева Диана Умаровна', 'Специалист 1 разряда', '2084', '550739', '308', 'ok', '500'),
(61, 'Мукаилова Райганат Магомедовна', 'Начальник отдела', '2024', '550722', '304', 'oao', '500'),
(62, 'Рамазанова Имара Насировна', 'Ведущий  специалист – эксперт', '2055', '', '304', 'oao', '500'),
(63, 'Атаева Зарема Тагировна ', 'Ведущий  специалист – эксперт', '', '', '304', 'oao', '500'),
(64, 'Гаджиева Калимат Мухтарпашаевна', 'Специалист-эксперт', '2049', '', '304', 'oao', '500'),
(65, 'Багдасарова Гаяна Викторовна', 'Специалист-эксперт', '2101', '', '304', 'oao', '500'),
(66, 'Гитинова Патимат Магомедовна', 'Специалист 1 разряда', '2188', '', '304', 'oao', '500'),
(67, 'Сурхаев Нокер Ризванович', 'Начальник отдела', '', '560912', '', 'krosv', '500'),
(68, 'Будунов Магомед Давудович', 'Начальник отдела', '', '560923', '', 'kromo', '500'),
(69, 'Тинамагомедов Исрапил Омарович', 'Начальник отдела', '', '560915', '', 'krore', '500'),
(71, 'Ибрагимова Рагима Эфендиевна', 'Заместитель начальника', '2067', '554712', '202', 'od', '02'),
(72, 'Махмудов Муса Сейфуддинович', 'Заместитель начальника', '2063', '554708', '210', 'od', '03'),
(73, 'Гаирбекова Марина Расуловна', 'Главный казначей', '2183', '554708', '309', 'afo', '500'),
(74, 'Нагиева Эльмира  Мавлудовна', 'Главный казначей', '2064', '554712', '202', 'od', '500'),
(75, 'Абдурахманова Асият Гайирбеговна', 'Главный казначей', '2183', '554708', '309', 'afo', '500'),
(76, 'Шахбанова Айна Мамедовна', 'Главный казначей', '2073', '554708', '210', 'od', '3'),
(77, 'Гусейханова Замира Рамизовна', 'Старший казначей', '2071', '554708', '210', 'od', '500'),
(78, 'Мусаева Асият Магомедовна', 'Старший казначей', '2175', '554712', '202', 'od', '500'),
(79, 'Гитинасулмагомедова Патимат Ахмедгаджиевна', 'Старший казначей', '2070', '554708', '210', 'od', '500'),
(80, 'Мутиева Султанат Суайповна', 'Специалист 1 разряда', '2187', '554712', '202', 'od', '500'),
(81, 'Анварбегова Муминат Сулеймановна', 'Специалист 1 разряда', '2070', '554708', '210', 'od', '500'),
(82, 'Юсупов Юсуп Джанаевич', 'И.о. начальника отдела', '2195', '554728', '229', 'ogz', '500'),
(83, 'Мирзоева Мария Нусретуллаховна', 'Главный специалист-эксперт', '2095', '554728', '227', 'ogz', '500'),
(84, 'Магомедова Аминат Садрудиновна', 'Главный специалист-эксперт', '', '554728', '227', 'ogz', '500'),
(85, 'Газиев Газияв Ахмадулаевич', 'Главный специалист-эксперт', '', '', '227', 'ogz', '500'),
(86, 'Козлитина Шуайнат Николаевна', 'Ведущий специалист – эксперт', '2195', '550728', '229', 'ogz', '500'),
(87, 'Ашурова Заира Абдулбасировна', 'Ведущий специалист – эксперт', '2096', '', '229', 'ogz', '500'),
(88, 'Магомедова Мадина Магомедгаджиевна', 'Казначей', '2085', '', '101', 'or', '31'),
(89, 'Салаватова Сакинат Яхяевна', 'Ведущий специалист – эксперт', '2091', '', '229', 'ogz', '500'),
(90, 'Гусейнова Зубайдат Шейхилаевна', 'Начальник отдела ', '2193', '550731', '213', 'ocb', '500'),
(91, 'Алиева Аида Алиевна', 'Заместитель начальника ', '2193', '550731', '213', 'ocb', '500'),
(92, 'Ибрагимова Зульмира Бекмурзаевна', 'Главный казначей', '2104', '550734', '218', 'ocb', '500'),
(93, 'Джалилова Каприят Магомедовна', 'Старший казначей', '2102', '550732', '218', 'ocb', '500'),
(94, 'Абдулжелилов Нусрет Бабаевич', 'Старший казначей', '2093', '550732', '218', 'ocb', '500'),
(95, 'Гаммаева Патимат Гаммаевна', 'Казначей', '2110', '554721', '218', 'ocb', '500'),
(96, 'Омариева Амина Гамзатовна', 'Казначей', '2173', '554721', '218', 'ocb', '500'),
(97, 'Магадова Савдат Магомедовна', 'Старший специалист 3 разряда', '2107', '550734', '214', 'ocb', '500'),
(98, 'Магомедова Мадинат Саидовна', 'Специалист 1 разряда', '2105', '554720', '214', 'ocb', '500'),
(99, 'Азизова Мейрам Абдуразаковна', 'Специалист 1 разряда', '2104', '550734', '214', 'ocb', '500'),
(100, 'Рамазанова Малика Мирзамагомедовна', 'Специалист 1 разряда', '2105', '554720', '214', 'ocb', '500'),
(101, 'Алиомарова Мадина Раджабовна', 'Специалист 1 разряда', '2099', '554720', '100', 'afo', '500'),
(102, 'Абдурахманова Залиха Михайловна', 'Начальник отдела', '2004', '550730', '301', 'obuio', '500'),
(103, 'Багаутдинова Джахбат Зайналовна', 'Заместитель начальника', '2182', '550721', '301', 'obuio', '500'),
(104, 'Асланова Альбина Тагировна', 'Заместитель начальника', '2054', '554737', '301', 'obuio', '500'),
(105, 'Абасова Асият Хайруллаевна', 'Главный казначей', '2202', '554739', '301', 'obuio', '500'),
(106, 'Бабатова Анжелика Омаровна', 'Главный казначей', '2181', '550721', '308', 'obuio', '500'),
(107, 'Рамазанова Аида Занкидаровна', 'Главный казначей', '2149', '554737', '301', 'obuio', '500'),
(108, 'Бабаева Ольга Владимировна', 'Старший казначей', '2057', '550721', '301', 'obuio', '500'),
(109, 'Рамазанова  Аида  Шарафидиновна', 'Старший казначей', '2058', '550721', '301', 'obuio', '500'),
(110, 'Газиева Олеся Газиевна', 'Старший казначей', '2181', '554738', '301', 'obuio', '500'),
(111, 'Далгатова Камила Далгатовна', 'Казначей', '2050', '554738', '301', 'obuio', '500'),
(112, 'Абдуллаева Хабибат Абакаровна', 'Казначей', '2056', '550721', '308', 'obuio', '500'),
(113, 'Рамазанов Залухан Халидович', 'Старший специалист 2 разряда', '2156', '554756', 'Принтерная', 'orsbi', '6'),
(114, 'Абдуллаев Магомед Гаджиевич', 'Начальник отдела', '2026', '550723', '101 а', 'or', '01'),
(115, 'Гусейнова Надия Чупалаевна', 'Заместитель начальника', '2082', '', '101', 'or', '02'),
(116, 'Кадиева Джамиля Зауровна', 'Заместитель начальника', '2085', '554735', '101', 'or', '03'),
(117, 'Раджабова Фироза Каировна', 'Старший казначей', '', '554735', '101', 'oo', '15'),
(118, 'Гаджиева Зумруд Муртазалиевна', 'Главный казначей', '2192', '554725', '106', 'okoib', '500'),
(119, 'Махмудова Зумзул Мирзаевна', 'Старший казначей', '2194', '554736', '101', 'or', '20'),
(120, 'Абакаров Марат Абакарович', 'Старший казначей', '2133', '550715', '101', 'or', '21'),
(121, 'Омарова Маржанет Адамовна', 'Казначей', '2089', '554728', '103', 'or', '32'),
(122, 'Магомедова Наида Ниязовна', 'Казначей', '2082', '554733', '101', 'or', '33'),
(123, 'Салаватова Гульнара Абдулгамидовна', 'Казначей', '', '', '', 'od', '500'),
(124, 'Гаджимагомедова Мадинат Гаджимагомедовна', 'Старший казначей', '2077', '554735', '101', 'or', '22'),
(125, 'Богданович Наталья Олеговна', 'Специалист-эксперт', '2089', '554728', '103', 'or', '500'),
(126, 'Биакаева Мадина Кебедмагомедовна', 'Специалист 1 разряда', '2003', '554736', '101', 'or', '500'),
(127, 'Азизова Лейла Гасановна', 'Специалист 1 разряда', '2003', '554736', '101', 'or', '500'),
(128, 'Магомедова Рена Мирзаалиевна', 'Специалист 1 разряда', '2089', '554728', '103', 'or', '500'),
(129, 'Абдурахманов Муслим Абдурахманович', 'Начальник отдела ', '2009', '560921', '', 'ovk', '500'),
(130, 'Байтувганова Анжела Багавдиновна', 'Старший казначей', '2201', '554713', '300', 'ovk', '500'),
(132, 'Магомедов Роберт Ахмедович', 'Заместитель начальника', '2158', '', '223', 'ois', '500'),
(133, 'Амирханов Рамазан Агабалаевич', 'Заместитель начальника', '2152', '554752', '201', 'ois', '500'),
(134, 'Хайбулаев Муталим Алибегович', 'Главный специалист-эксперт ', '2035', '554752', '201', 'ois', '500'),
(135, 'Керимов Зураб Гаджимурадович', 'Главный специалист-эксперт ', '2143', '554743', '201', 'ois', '500'),
(136, 'Джамалутдинов Гусейн Гаджиевич', 'Главный специалист-эксперт', '2155', '554755', '223', 'ois', '500'),
(137, 'Гаджиев Ризван Мугатигаджиевич', 'Специалист 1 разряда', '2140', '', '201', 'ois', '500'),
(138, 'Магомедов Аслан Медетханович', 'Специалист 1 разряда', '2032', '', '201', 'ois', '500'),
(139, 'Магомедов Руслан Магомед-Сайгидович', 'Специалист 1 разряда', '2034', '', '201', 'ois', '500'),
(140, 'Магомедова Римма Магомедовна', 'Специалист 1 разряда', '2053', '', '', 'ois', '500'),
(141, 'Ашурбекова Эсли Керимовна', 'Начальник отдела', '2045', '554718', '212', 'oo', '01'),
(142, 'Качалова Умужат Гасановна', 'Заместитель начальника', '2106', '554729', '212', 'oo', '02'),
(143, 'Гасанова Аминат Хабибулаевна', 'Главный казначей', '2070', '554708', '210', 'od', '03'),
(144, 'Магомедова Хадижат Раджабовна', 'Главный казначей', '2138', '554729', '111', 'oo', '04'),
(145, 'Махачева Хадижат Асламбековна ', 'Старший казначей', '2137', '554729', '111', 'oo', '500'),
(146, 'Абдуллаева Гюльназ Гашимовна', 'Старший казначей', '2106', '554729', '212', 'oo', '500'),
(147, 'Джаватханова Салихат Гамзатовна', 'Старший казначей', '2139', '554729', '111', 'oo', '500'),
(148, 'Абдусаламова Асият Магомедовна', 'Старший казначей', '2045', '554729', '212', 'oo', '500'),
(149, 'Мамалиева Фариза Абумуслимовна', 'Казначей', '2043', '554729', '212', 'oo', '500'),
(150, 'Алиева Башарат Магомедовна', 'Казначей', '2044', '554729', '212', 'oo', '500'),
(151, 'Магомедова Патимат Магомедовна', 'Казначей', '2043', '554729', '212', 'oo', '500'),
(152, 'Магомедова Джамиля Джафаровна', 'Казначей', '2107', '554729', '214', 'ocb', '500'),
(153, 'Алахвердиева Аида Евгеньевна', 'Казначей', '2138', '554729', '111', 'oo', '500'),
(154, 'Агаларова Баджи  Селимовна', 'Казначей', '2137', '554729', '111', 'oo', '500'),
(155, 'Гаджилова Малькура Курамагомедовна', 'Казначей', '2138', '554729', '111', 'oo', '500'),
(156, 'Абонентский пункт (терминал)', '', '2161', '554729', '111', 'oo', '500'),
(157, 'Дациев Хизри Магомедович', 'Начальник отдела', '2014', '554747', '201', 'ois', '1'),
(158, 'Ханавов Марат Бекболатович', 'Заместитель начальника', '2046', '554747', '312', 'orsbi', '2'),
(159, 'Галимов Гамзат Абдулгалимович', 'Начальник отдела', '2047', '554747', '312', 'orsbi', '1'),
(160, 'Нурмагомедова Айшат Мурадовна', 'Главный специалист-эксперт', '2135', '554746', 'Принтерная', 'orsbi', '4'),
(161, 'Абакаров Мурат Абакарович', 'Ведущий  специалист-эксперт', '2156', '554747', '312', 'orsbi', '5'),
(162, 'Гадисов Азамат Мурзабекович', 'Специалист 1 разряда', '2203', '554747', '312', 'orsbi', '7'),
(163, 'Мусаева Маржанат Ахмедовна', 'Заместитель начальника', '2170', '554710', '102', 'ovfr', '500'),
(164, 'Шахманаев Юнус Шахманаевич', 'Начальник отдела', '2186', '554748', '112', 'ovfr', '100'),
(165, 'Омарова Анжела Михайловна', 'Старший казначей', '2060', '550713', '102', 'ovfr', '500'),
(166, 'Гашимова Асият Магомедовна', 'Старший казначей', '2185', '554710', '102', 'ovfr', '500'),
(167, 'Шахмарданова Карима Арифовна', 'Казначей', '2041', '554754', '101', 'or', '34'),
(168, 'Гасанова Асият Абдулхалимовна', 'Специалист 1 разряда', '2142', '550713', '102', 'ovfr', '500'),
(169, 'Магомедова Наида Абдулмажидовна', 'Специалист 1 разряда', '2065', '554748', '112', 'ovfr', '500'),
(170, 'Абдулаева Роза Шапиевна', 'И.о начальника отдела', '2168', '550712', '221', 'oto', '500'),
(172, 'Султанов Гусейн Магомедалиевич', 'Ведущий специалист – эксперт', '2131', '550712', '221', 'oto', '500'),
(173, 'Макаев Шамиль Шапиевич', 'Ведущий специалист – эксперт', '2150', '550712', '221', 'oto', '500'),
(174, 'Абдуллатипова Сарижат Магдиевна', 'Ведущий специалист – эксперт', '2154', '550712', '221', 'oto', '500'),
(175, 'Абачарова Загидат Абдуловна', 'Архив', '2113', '', '116', 'arxiv', '500'),
(176, 'Ибрагимхалилов Рашид Рамазанович', 'Начальник 84 отряда ГУ "ВО МФ РФ"', '2166', '550718', '', 'otryad', '500'),
(177, 'Приемная', '', '2184', '550726', '', 'otryad', '500'),
(178, '"ВО МФ РФ"', 'Отдел кадров 84 отряда ГУ', '', '554727', '', 'otryad', '500'),
(179, '"ВО МФ РФ"', 'Бухгалтерия 84 отряда ГУ', '2160', '550719', '', 'otryad', '500'),
(180, 'Дежурный', 'Пост охраны', '2022', '554741', '', 'otryad', '500'),
(181, 'Алибегов Марат Алибегович', 'Начальник отдела', '2083', '554742', '109', 'cokr', '500'),
(182, 'Рамазанов Ибрагим Магомедович', 'Комендант', '2119', '554742', '114', 'cokr', '500'),
(183, 'Шабанов Рамазан Микдадович', 'Механик', '2119', '554742', '114', 'cokr', '500'),
(184, 'Арбуханов Ибрагим Магомедович', 'Инженер', '2197', '554742', '114', 'cokr', '500'),
(185, 'Курбанова Диана Валиевна', 'Инженер', '2196', '554742', '109', 'cokr', '500'),
(186, 'Магомедова Патимат Магомедгаджиевна', 'Инженер', '2196', '554742', '109', 'cokr', '500'),
(188, 'Приемная руководителя', 'Приемная руководителя', '2000/2001', '670077 /554744', '313', 'ruk', '1'),
(189, 'Ахмедов Ахмед Багаутдинович', 'Врио руководителя УФК по РД', '2012', '554701', '207', 'ruk', '2'),
(192, 'Магомедов Магомед Гимбатгаджиевич', 'Заместитель руководителя', '2010', '550737 / 560910', '208', 'ruk', '3'),
(193, 'Гасанова Карина Шапиевна', 'Заместитель руководителя', '2008', '554709', '107', 'ruk', '4'),
(196, 'Печерский Игорь Евгеньевич', 'Главный специалист - эксперт по вопросам МП и ГО', '2151', '554719', '225', 'ruk', '500'),
(202, 'Алиева Залму Магомедовна', 'Специалист 1 разряда', '2201', '', '300', 'ovk', '500'),
(203, 'Читилаева Аида Гаджимагомедовна', 'Специалист 1 разряда', '2074', '', '302', 'yuo', '500'),
(205, 'Меджидова Саида Зайнулабидовна', 'Специалист 1 разряда', '2172', '550722', '304', 'oao', '500'),
(206, 'Магомедов Мурад Анварович', 'Отдел №1 (г. Махачкала)', '8-963-422-00-00', '', '', 'mtofk', '500'),
(207, 'Кичибеков Фархад Рахманович', 'Отдел №2 (г. Дербент)', '8-988-300-88-89', '', '', 'mtofk', '500'),
(208, 'Павлова Татьяна Тимофеевна', 'Отдел №3 (г. Кизляр)', '8-928-250-22-11', '', '', 'mtofk', '500'),
(209, 'Абдулбутаев Магди Шохолович', 'Отдел №4 (г. Буйнакск)', '8-903-428-74-56', '', '', 'mtofk', '500'),
(210, 'Лабазанов Арсен Магомеднабиевич', 'Отдел №5 (г. Хасавюрт)', '8-928-984-55-55', '', '', 'mtofk', '500'),
(211, 'Денгаев Магомед Абасханович', 'Отдел №6 (г. Кизилюрт)', '8-928-054-51-61', '', '', 'mtofk', '500'),
(212, 'Мусаев Багаутдин Гаджиевич', 'Отдел №7 (г. Каспийск)', '8-967-393-44-44', '', '', 'mtofk', '500'),
(213, 'Гасанова Эльфия Магомедовна (зам.)', 'Отдел №7 (г. Каспийск)', '8-903-499-75-44', '', '', 'mtofk', '500'),
(214, 'Рамазанов Ахмед Раджабович', 'Отдел №8 (г. Избербаш)', '8-909-483-37-42', '', '', 'mtofk', '500'),
(215, 'Османов Магомед Омарович', 'Отдел № 10 (г. Южно-Сухокумск)', '8-989-658-22-29', '', '', 'mtofk', '500'),
(216, 'Алиев Салих Курабанович', 'Отдел №11 (Агульский район)', '8-928-297-06-01', '', '', 'mtofk', '500'),
(217, 'Багандов Абдулла Алиевич', 'Отдел №12 (Акушинский район)', '8-928-834-22-58', '', '', 'mtofk', '500'),
(218, 'Магомедов Магомед Шайхулисламович', 'Отдел №13 (Ахвахский район)', '8-928-286-43-59', '', '', 'mtofk', '500'),
(220, 'Абдулаев Магомедшапи Алигаджиявович', 'Инженер', '2176', '', '110', 'cokr', '500'),
(221, 'Амирханов Шагабутдин Эфселитдинович', 'Начальник отдела', '2011', '55-07-16', '', 'afo', '101'),
(222, 'Биарсланов Тимур Мухтарович', '', '2092', '554715', '229', 'ogz', '500'),
(223, 'serwer', '1', 'werwer', '', '234', 'ot', '500'),
(224, 'Абдулаева Айшат Абдулкадировна', 'Специалист 1 разряда', '2041', '550713', '102', 'ovfr', '500'),
(225, 'Битаров Муса Магомедович', 'Начальник отдела', '2042', '', '215', 'od', '01'),
(226, 'Никишина Татьяна Александровна', 'Вед. специалист – эксперт', '2157', '', '308', 'ok', '115'),
(227, 'Курбанов Ахмедхан Курбанович', 'Врио заместителя руководителя', '2005', '', '', 'ruk', '5');

-- --------------------------------------------------------

--
-- Структура таблицы `tofk`
--

CREATE TABLE IF NOT EXISTS `tofk` (
  `tofk_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `tofk_name` varchar(255) NOT NULL,
  `tofk_alias` varchar(255) NOT NULL,
  PRIMARY KEY (`tofk_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=47 ;

--
-- Дамп данных таблицы `tofk`
--

INSERT INTO `tofk` (`tofk_id`, `tofk_name`, `tofk_alias`) VALUES
(1, 'Отдел №1 (г. Махачкала)', '0311'),
(2, 'Отдел №2 (г. Дербент)', '0312'),
(3, 'Отдел №3 (г. Кизляр)', '0313'),
(4, 'Отдел №4 (г. Буйнакск)', '0314'),
(5, 'Отдел №5 (г. Хасавюрт)', '0315'),
(6, 'Отдел №6 (г. Кизилюрт)', '0316'),
(7, 'Отдел №7 (г. Каспийск)', '0317'),
(8, 'Отдел №8 (г. Избербаш)', '0318'),
(9, 'Отдел №10 (г. Южно-Сухокумск)', '0320'),
(10, 'Отдел №11 (Агульский район)', '0321'),
(11, 'Отдел №12 (Акушинский район)', '0322'),
(12, 'Отдел №13 (Ахвахский район)', '0323'),
(13, 'Отдел №14 (Ахтынский район)', '0324'),
(14, 'Отдел №15 (Бабаюртовский район)', '0325'),
(15, 'Отдел №16 (Бежтинский участок)', '0326'),
(16, 'Отдел №17 (Ботлихский район)', '0327'),
(17, 'Отдел №18 (Гергебельский район)', '0328'),
(18, 'Отдел №19 (Гумбетовский район)', '0329'),
(19, 'Отдел №20 (Гунибский район)', '0330'),
(20, 'Отдел №21 (Дахадаевский район)', '0331'),
(21, 'Отдел №22 (Докузпаринский р-н)', '0332'),
(22, 'Отдел №23 (Казбековский район)', '0333'),
(23, 'Отдел №24 (Кайтагский район)', '0334'),
(24, 'Отдел №25 (Карабудахкентский район)', '0335'),
(25, 'Отдел №26 (Каякентский район)', '0336'),
(26, 'Отдел №27 (Кулинский район)', '0337'),
(27, 'Отдел №28 (Кумторкалинский район)', '0338'),
(28, 'Отдел №29 (Курахский район)', '0339'),
(29, 'Отдел №30 (Лакский район)', '0340'),
(30, 'Отдел №31 (Левашинский район)', '0341'),
(31, 'Отдел №32 (Магарамкентский р-н)', '0342'),
(32, 'Отдел №33 (Новолакский район)', '0343'),
(33, 'Отдел №34 (Ногайский район)', '0344'),
(34, 'Отдел №35 (Рутульский район)  ', '0345'),
(35, 'Отдел №36 (Сулейман-Стальск. р)', '0346'),
(36, 'Отдел №37 (Сергокала)', '0347'),
(37, 'Отдел №38 (Табасаранский район)', '0348'),
(38, 'Отдел №39 (Тарумовский район)', '0349'),
(39, 'Отдел №40 (Тляратинский район)', '0350'),
(40, 'Отдел №41 (Унцукульский район)', '0351'),
(41, 'Отдел №42 (Хивский район)', '0352'),
(42, 'Отдел №43 (Хунзахский район)', '0353'),
(43, 'Отдел №44 (Цумадинский район)', '0354'),
(44, 'Отдел №45 (Цунтинский район)', '0355'),
(45, 'Отдел №46 (Чародинский район)', '0356'),
(46, 'Отдел №47 (Шамильский район)', '0357');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
