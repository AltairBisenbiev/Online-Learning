-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 06 2018 г., 01:41
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `school`
--

-- --------------------------------------------------------

--
-- Структура таблицы `keyterms_cdb`
--

CREATE TABLE IF NOT EXISTS `keyterms_cdb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kaz` text NOT NULL,
  `rus` text NOT NULL,
  `eng` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

--
-- Дамп данных таблицы `keyterms_cdb`
--

INSERT INTO `keyterms_cdb` (`id`, `kaz`, `rus`, `eng`) VALUES
(16, 'жалпы сипат', 'абстракция', 'abstraction'),
(17, 'автотабақжад', 'автодиск', 'autodisc'),
(18, 'автосурау, автоотініш', 'автоопрос', 'autopoll'),
(19, 'белсенді есеп', 'активная задача', 'active task'),
(20, 'белсенді байланыс', 'активная связь', 'active communication'),
(21, 'агынды жад құрылгы', 'аппаратный стек', 'hardware stack,nesting storage'),
(22, 'ЭЕМ соулет', 'архитектура ЭВМ', 'computer architecture'),
(23, 'қауымдастық, қауым,', 'ассоциация', 'association'),
(24, 'қор', 'База', 'base'),
(25, 'негіз, базис', 'базис', 'basis'),
(26, 'ДҚ-машинесі', 'БД-машина', 'data base machine'),
(27, 'адрес байты', 'байт адреса', 'address byte'),
(28, 'үйлестіру', 'балансировка', 'balance'),
(29, 'дерекхана', 'банк данных', 'data bank'),
(30, 'тосқауыл', 'барьер', 'barrier'),
(31, 'қауіпсіздік', 'безопасность', 'security'),
(32, 'тоқтаусыз', 'безотказный', 'unfailing'),
(33, 'қатесіздік', 'безошибочность', 'faultlessness'),
(34, 'деректер жинагы', 'блок данных', 'data block'),
(35, 'естелік кітапшасы', 'блокнот заметок', 'notepad'),
(36, 'блок-сызба', 'блок-схема', 'block diagram'),
(37, 'қүраларалықжады', 'буфер', 'buffer'),
(38, 'тез ауыстыр', 'быстрый перенос', 'high-speed carry'),
(39, 'ауасыз кеңістік', 'вакуум', 'vacuum'),
(40, 'нусқаəмірді енгізу', 'ввод оператора', 'operation input'),
(41, 'туспалдама, версия', 'версия', 'version, theory'),
(42, 'деректердің турі', 'вид данных', 'data type');

-- --------------------------------------------------------

--
-- Структура таблицы `keyterms_css`
--

CREATE TABLE IF NOT EXISTS `keyterms_css` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kaz` text NOT NULL,
  `rus` text NOT NULL,
  `eng` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `keyterms_html`
--

CREATE TABLE IF NOT EXISTS `keyterms_html` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kaz` text NOT NULL,
  `rus` text NOT NULL,
  `eng` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `keyterms_java`
--

CREATE TABLE IF NOT EXISTS `keyterms_java` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kaz` text NOT NULL,
  `rus` text NOT NULL,
  `eng` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `keyterms_java`
--

INSERT INTO `keyterms_java` (`id`, `kaz`, `rus`, `eng`) VALUES
(1, 'sdbb', 'dfb', 'dfb'),
(3, 'asvaasv', 'asv', 'svasa');

-- --------------------------------------------------------

--
-- Структура таблицы `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `message`) VALUES
(6, 'Soyer', 'soyer@gmail.com', 'Thanks for more information'),
(7, 'person', 'person@gmail.com', 'Can I found you?'),
(8, 'Diana', 'diana@gmail.com', 'I well and you?'),
(9, 'turan', 'turan@mail.ru', 'Today i can not to you');

-- --------------------------------------------------------

--
-- Структура таблицы `test_cdb_answer`
--

CREATE TABLE IF NOT EXISTS `test_cdb_answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomer_variant` int(11) NOT NULL,
  `nomer_question` int(11) NOT NULL,
  `variant_answer` varchar(39) NOT NULL,
  `answer` text NOT NULL,
  `correct` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=167 ;

--
-- Дамп данных таблицы `test_cdb_answer`
--

INSERT INTO `test_cdb_answer` (`id`, `nomer_variant`, `nomer_question`, `variant_answer`, `answer`, `correct`) VALUES
(7, 1, 1, 'A', 'Internet Explorer', 0),
(8, 1, 1, 'B', 'Google Chrome', 0),
(9, 1, 1, 'C', 'Safari', 1),
(10, 1, 1, 'D', 'Firefox', 0),
(11, 1, 2, 'A', 'Arithmetic Logic Unit (ALU) ', 0),
(12, 1, 2, 'B', 'Control Unit (CU) ', 0),
(13, 1, 2, 'C', 'Visual Display Unit (VDU) ', 1),
(14, 1, 2, 'D', 'Registers', 0),
(15, 1, 3, 'A', 'IBM PC ', 0),
(16, 1, 3, 'B', 'Laptop', 0),
(17, 1, 3, 'C', 'Netbook', 0),
(18, 1, 3, 'D', 'Smartphone', 1),
(19, 1, 4, 'A', 'Basic Input Output System ', 1),
(20, 1, 4, 'B', 'Basic Inter Outer System ', 0),
(21, 1, 4, 'C', 'Basic Integrated Open System ', 0),
(22, 1, 4, 'D', 'Basic Input Open System ', 0),
(23, 1, 5, 'A', 'CPU speed ', 0),
(24, 1, 5, 'B', 'RAM size ', 0),
(25, 1, 5, 'C', 'The number of applications running ', 0),
(26, 1, 5, 'D', 'All the above', 1),
(27, 1, 6, 'A', 'Terabyte', 0),
(28, 1, 6, 'B', 'GHz', 1),
(29, 1, 6, 'C', 'DDR', 0),
(30, 1, 6, 'D', 'MbPS', 0),
(31, 1, 7, 'A', 'Windows8', 0),
(32, 1, 7, 'B', 'SUSE Linux ', 0),
(33, 1, 7, 'C', 'Mountain Lion', 0),
(34, 1, 7, 'D', 'None of above ', 1),
(35, 1, 8, 'A', 'Right System Interface ', 0),
(36, 1, 8, 'B', 'Real Smart Interface ', 0),
(37, 1, 8, 'C', 'Repetitive Strain Injury ', 1),
(38, 1, 8, 'D', ' ROM Strain Injury', 0),
(39, 1, 9, 'A', 'Coffee', 0),
(40, 1, 9, 'B', 'Break ', 1),
(41, 1, 9, 'C', 'Tea', 0),
(42, 1, 9, 'D', 'None of above ', 0),
(43, 1, 10, 'A', 'CRT', 0),
(44, 1, 10, 'B', 'LCD', 0),
(45, 1, 10, 'C', 'LED', 1),
(46, 1, 10, 'D', 'None of above ', 0),
(47, 1, 11, 'A', 'Facebook', 0),
(48, 1, 11, 'B', 'Orkut', 0),
(49, 1, 11, 'C', 'Myspace', 0),
(50, 1, 11, 'D', 'Gmail', 1),
(51, 1, 12, 'A', 'Bing', 0),
(52, 1, 12, 'B', 'Google', 0),
(53, 1, 12, 'C', 'AltaVista', 0),
(54, 1, 12, 'D', 'Chrome', 1),
(55, 1, 13, 'A', 'Browser', 1),
(56, 1, 13, 'B', 'Operating System ', 0),
(57, 1, 13, 'C', 'Antivirus', 0),
(58, 1, 13, 'D', 'Search Engine', 0),
(59, 1, 14, 'A', '1956', 0),
(60, 1, 14, 'B', '1977', 0),
(61, 1, 14, 'C', '1981', 1),
(62, 1, 14, 'D', '2006 ', 0),
(63, 1, 15, 'A', 'Phone Line ', 0),
(64, 1, 15, 'B', 'Cable', 0),
(65, 1, 15, 'C', 'Wi-Fi ', 0),
(66, 1, 15, 'D', 'Satellite ', 1),
(67, 1, 16, 'A', 'Downloading', 1),
(68, 1, 16, 'B', 'Uploading', 0),
(69, 1, 16, 'C', 'Buffering', 0),
(70, 1, 16, 'D', 'None of above', 0),
(71, 1, 17, 'A', 'Podcast', 1),
(72, 1, 17, 'B', 'Blogs', 0),
(73, 1, 17, 'C', 'Social Networking ', 0),
(74, 1, 17, 'D', 'None of above ', 0),
(75, 1, 18, 'A', 'Thunderbird', 0),
(76, 1, 18, 'B', 'Earlybird', 0),
(77, 1, 18, 'C', 'MS Outlook', 1),
(78, 1, 18, 'D', 'Yahoo Messenger ', 0),
(79, 1, 19, 'A', 'myname', 0),
(80, 1, 19, 'B', 'MyNaMe ', 0),
(81, 1, 19, 'C', 'M.y.N.a.M.e. ', 1),
(82, 1, 19, 'D', 'All of above', 0),
(83, 1, 20, 'A', 'On-site backup ', 1),
(84, 1, 20, 'B', 'Off-site backup ', 0),
(85, 1, 20, 'C', 'Incremental backup ', 0),
(86, 1, 20, 'D', 'Complete backup ', 0),
(87, 1, 21, 'A', 'On-site backup ', 0),
(88, 1, 21, 'B', 'Off-site backup', 0),
(89, 1, 21, 'C', 'Incremental backup ', 1),
(90, 1, 21, 'D', 'Complete backup ', 0),
(91, 1, 22, 'A', 'Hardware', 0),
(92, 1, 22, 'B', 'Software', 0),
(93, 1, 22, 'C', 'Both of above ', 0),
(94, 1, 22, 'D', 'All of above ', 1),
(95, 1, 23, 'A', 'Constructive', 0),
(96, 1, 23, 'B', 'Destructive', 1),
(97, 1, 23, 'C', 'Small', 0),
(98, 1, 23, 'D', 'Big', 0),
(99, 1, 24, 'A', 'Virus', 0),
(100, 1, 24, 'B', 'Antivirus', 1),
(101, 1, 24, 'C', 'Operation System ', 0),
(102, 1, 24, 'D', 'Gmail', 0),
(103, 1, 25, 'A', 'Malware', 0),
(104, 1, 25, 'B', 'Scareware', 1),
(105, 1, 25, 'C', 'Spyware', 0),
(106, 1, 25, 'D', 'None of above ', 0),
(107, 2, 1, 'A', 'Uploading', 0),
(108, 2, 1, 'B', 'Downloading', 1),
(109, 2, 1, 'C', 'Chatting', 0),
(110, 2, 1, 'D', 'None of above ', 0),
(111, 2, 2, 'A', 'Physical Components ', 1),
(112, 2, 2, 'B', 'Operating System', 0),
(113, 2, 2, 'C', 'Internet Connection ', 0),
(114, 2, 2, 'D', 'Internet Explorer ', 0),
(115, 2, 3, 'A', 'Write Only ', 0),
(116, 2, 3, 'B', 'Read Only ', 1),
(117, 2, 3, 'C', 'Re-writable ', 0),
(118, 2, 3, 'D', 'None of above ', 0),
(119, 2, 4, 'A', 'Firefox', 0),
(120, 2, 4, 'B', 'iTunes', 1),
(121, 2, 4, 'C', 'Netscape Navigator ', 0),
(122, 2, 4, 'D', 'Internet Explorer ', 0),
(123, 2, 5, 'A', 'USB3', 0),
(124, 2, 5, 'B', 'SATA2', 0),
(125, 2, 5, 'C', 'PS2', 0),
(126, 2, 5, 'D', 'FireWire', 1),
(127, 2, 6, 'A', 'Mac OS X ', 1),
(128, 2, 6, 'B', 'IOS6 ', 0),
(129, 2, 6, 'C', 'Android', 0),
(130, 2, 6, 'D', 'Symbian', 0),
(131, 2, 7, 'A', 'Word Processor ', 0),
(132, 2, 7, 'B', 'Anti-Virus ', 0),
(133, 2, 7, 'C', 'Operating System', 1),
(134, 2, 7, 'D', 'Disk Defragmenter', 0),
(135, 2, 8, 'A', 'MS Word ', 0),
(136, 2, 8, 'B', 'Quick Heal ', 0),
(137, 2, 8, 'C', 'USB', 1),
(138, 2, 8, 'D', 'Windows Explorer', 0),
(139, 2, 9, 'A', 'Screen Magnifier ', 0),
(140, 2, 9, 'B', ' Screen Reader', 0),
(141, 2, 9, 'C', 'Voice Recognition Software ', 0),
(142, 2, 9, 'D', 'On-screen Keyboard ', 1),
(143, 2, 10, 'A', 'MRI', 0),
(144, 2, 10, 'B', 'RSI', 1),
(145, 2, 10, 'C', 'RMI', 0),
(146, 2, 10, 'D', 'None of above ', 0),
(147, 2, 11, 'A', '1024', 0),
(148, 2, 11, 'B', '1000', 0),
(149, 2, 11, 'C', '8', 1),
(150, 2, 11, 'D', '64', 0),
(151, 2, 12, 'A', 'Podcast', 0),
(152, 2, 12, 'B', 'Web Blog', 0),
(153, 2, 12, 'C', 'Internet Forum', 0),
(154, 2, 12, 'D', 'None of above ', 1),
(155, 2, 13, 'A', 'Scanner', 0),
(156, 2, 13, 'B', 'Mouse', 0),
(157, 2, 13, 'C', 'Touch Screen ', 1),
(158, 2, 13, 'D', 'VDU', 0),
(159, 2, 14, 'A', 'Microsoft', 0),
(160, 2, 14, 'B', 'Sun Microsystems ', 0),
(161, 2, 14, 'C', 'IBM', 1),
(162, 2, 14, 'D', 'Infosys', 0),
(163, 2, 15, 'A', 'Macintosh', 0),
(164, 2, 15, 'B', 'Personal Computers', 1),
(165, 2, 15, 'C', 'Main Frame ', 0),
(166, 2, 15, 'D', 'All of above ', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `test_cdb_question`
--

CREATE TABLE IF NOT EXISTS `test_cdb_question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomer_variant` int(11) NOT NULL,
  `nomer_question` int(11) NOT NULL,
  `question` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- Дамп данных таблицы `test_cdb_question`
--

INSERT INTO `test_cdb_question` (`id`, `nomer_variant`, `nomer_question`, `question`) VALUES
(4, 1, 1, '________________ is the web browser developed by the Apple Inc.'),
(5, 1, 2, 'Which one is not the part of Central Processing Unit? '),
(6, 1, 3, 'The _____________ is the most portable device among these devices. '),
(7, 1, 4, 'BIOS in ROM-BIOS stands for _________________. '),
(8, 1, 5, 'The computer performance affected by: '),
(9, 1, 6, 'The speed of a CPU can be calculated in ____________. '),
(10, 1, 7, '___________ is not a valid operating system for personal computers. '),
(11, 1, 8, 'The full name of RSI is: '),
(12, 1, 9, 'You should take regular _______________ to avoid staring constantly at the screen. '),
(13, 1, 10, 'Which one is the best display unit according to the need of your health? '),
(14, 1, 11, 'Which one is not a proper Social Networking Website?'),
(15, 1, 12, 'Which one is not a Search Engine for the internet? '),
(16, 1, 13, 'The Safari is a ___________. '),
(17, 1, 14, 'When was the first personal computer develop? '),
(18, 1, 15, 'Which is the most expensive way to get connected to the Internet? '),
(19, 1, 16, 'Copying something from the Internet is usually known as _________. '),
(20, 1, 17, 'The _____________ is a way of providing content such as radio programs. '),
(21, 1, 18, 'Which is the E-mail client developed that is developed by Microsoft Corporation? '),
(22, 1, 19, 'Which is the best password that is hard to crack by the hackers? '),
(23, 1, 20, 'The _________________ means that you backup all the data on your computer. '),
(24, 1, 21, 'The ______________ means that you only backup those files that have been newly created.'),
(25, 1, 22, 'A firewall can be implemented via _______________. '),
(26, 1, 23, 'The computer viruses are ___________ by nature. '),
(27, 1, 24, 'When your computer gets infected by a virus, an __________ application can remove viruses from your computers. '),
(28, 1, 25, '___________ are the popup messages that you may see displayed within a web browser. '),
(29, 2, 1, 'Fetching out some data (Images, Audios, and Videos etc.) from the internet is known as ________________. '),
(30, 2, 2, 'The term hardware refers to the ___________________ of your computer system. '),
(31, 2, 3, 'ROM is a _____________ memory which is embedded on the motherboard. '),
(32, 2, 4, 'The ______________ is not a web browsing application. '),
(33, 2, 5, 'The _____________ is one of the fastest ports exclusively developed by Apple Inc. '),
(34, 2, 6, 'Which is not a valid mobile operating system? '),
(35, 2, 7, 'Which one is the most essential software for a personal computer? '),
(36, 2, 8, 'Which is not a valid application program? '),
(37, 2, 9, 'The type of software which is used to secure your input data like password, credit card numbers etc. from key logger is: '),
(38, 2, 10, '____________ is a condition caused by constant use of the keyboard or mouse. '),
(39, 2, 11, 'The 1 byte contains ________ bits. '),
(40, 2, 12, 'Which is not suitable for publishing and sharing the contents online? '),
(41, 2, 13, 'The ________________ is both input and output device. '),
(42, 2, 14, 'The first Personal Computer was developed by the __________, a great IT company. '),
(43, 2, 15, 'Windows 7 is one of the most popular operating system which is running on the __________. ');

-- --------------------------------------------------------

--
-- Структура таблицы `test_cdb_variant`
--

CREATE TABLE IF NOT EXISTS `test_cdb_variant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomer_variant` int(11) NOT NULL,
  `variant` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `test_cdb_variant`
--

INSERT INTO `test_cdb_variant` (`id`, `nomer_variant`, `variant`) VALUES
(3, 1, ''),
(4, 2, '');

-- --------------------------------------------------------

--
-- Структура таблицы `test_css_answer`
--

CREATE TABLE IF NOT EXISTS `test_css_answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomer_variant` int(11) NOT NULL,
  `nomer_question` int(11) NOT NULL,
  `variant_answer` varchar(39) NOT NULL,
  `answer` text NOT NULL,
  `correct` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=121 ;

--
-- Дамп данных таблицы `test_css_answer`
--

INSERT INTO `test_css_answer` (`id`, `nomer_variant`, `nomer_question`, `variant_answer`, `answer`, `correct`) VALUES
(25, 1, 3, 'A', 'Selector', 0),
(26, 1, 3, 'B', 'Property', 0),
(27, 1, 3, 'C', 'Value', 0),
(28, 1, 3, 'D', '- All of the above', 1),
(29, 1, 2, 'A', 'Style sheets allow content to be optimized for more than one type of device. ', 0),
(30, 1, 2, 'B', 'CSS can store web applications locally with the help of an offline catche. ', 0),
(31, 1, 2, 'C', ' Using CSS, we can view offline websites.The cache also ensures faster loading and better overall performance of the website. ', 0),
(32, 1, 2, 'D', ' All of the above.', 1),
(33, 1, 4, 'A', 'The Type Selector ', 1),
(34, 1, 4, 'B', 'The Universal Selector', 0),
(35, 1, 4, 'C', 'The Descendant Selector ', 0),
(36, 1, 4, 'D', ' The Class Selector', 0),
(37, 1, 5, 'A', 'The Type Selector ', 0),
(38, 1, 5, 'B', 'The Universal Selector ', 1),
(39, 1, 5, 'C', 'The Descendant Selector ', 0),
(40, 1, 5, 'D', 'The Class Selector', 0),
(41, 1, 6, 'A', 'The Type Selector ', 0),
(42, 1, 6, 'B', 'The Universal Selector ', 0),
(43, 1, 6, 'C', 'The Descendant Selector ', 1),
(44, 1, 7, 'A', ' The Type Selector ', 0),
(45, 1, 7, 'B', 'The Universal Selector ', 0),
(46, 1, 7, 'C', 'The Descendant Selector ', 1),
(47, 1, 6, 'D', 'The class Selector', 0),
(48, 1, 8, 'A', 'The Id Selector ', 1),
(49, 1, 8, 'B', 'The Universal Selector ', 0),
(50, 1, 8, 'C', ' The Descendant Selector ', 0),
(55, 1, 9, 'A', 'Embedded CSS - The style Element ', 0),
(56, 1, 9, 'B', ' Inline CSS - The style Attribute ', 0),
(57, 1, 9, 'C', ' Both of the above. ', 1),
(58, 1, 9, 'D', 'None of the above.', 0),
(59, 1, 10, 'A', 'External CSS - The Element ', 0),
(60, 1, 10, 'B', 'mported CSS - @import Rule ', 0),
(61, 1, 10, 'C', 'Both of the above. ', 1),
(62, 1, 10, 'D', ' None of the above.', 0),
(64, 1, 11, 'A', 'Any inline style sheet takes highest priority. So, it will override any rule defined in tags or rules defined in any external style sheet file. ', 0),
(65, 1, 11, 'B', ' Any rule defined in tags will override rules defined in any external style sheet file. ', 0),
(66, 1, 11, 'C', 'Any rule defined in external style sheet file takes lowest priority, and rules defined in this file will be applied only when above two rules are not applicable. ', 0),
(67, 1, 11, 'D', ' All of the above.', 1),
(72, 1, 12, 'A', '%', 0),
(73, 1, 12, 'B', 'cm ', 1),
(74, 1, 12, 'C', 'em ', 0),
(75, 1, 12, 'D', 'ex', 0),
(76, 1, 13, 'A', '%', 1),
(77, 1, 13, 'B', 'cm ', 0),
(78, 1, 13, 'C', 'em ', 0),
(79, 1, 13, 'D', 'ex', 0),
(80, 1, 14, 'A', '% ', 0),
(81, 1, 14, 'B', 'cm ', 0),
(82, 1, 14, 'C', 'em ', 1),
(83, 1, 14, 'D', 'ex', 0),
(84, 1, 15, 'A', '% ', 0),
(85, 1, 15, 'B', 'cm ', 0),
(86, 1, 15, 'C', 'em ', 0),
(87, 1, 15, 'D', 'ex', 1),
(88, 1, 16, 'A', 'in ', 1),
(89, 1, 16, 'B', 'mm ', 0),
(90, 1, 16, 'C', 'pc ', 0),
(91, 1, 16, 'D', 'pt', 0),
(92, 1, 17, 'A', 'in', 0),
(93, 1, 17, 'B', 'mm', 1),
(94, 1, 17, 'C', 'pc', 0),
(95, 1, 17, 'D', 'pt', 0),
(96, 1, 18, 'A', 'in', 0),
(97, 1, 18, 'B', 'mm', 0),
(98, 1, 18, 'C', 'pc', 1),
(99, 1, 18, 'D', 'pt', 0),
(100, 1, 19, 'A', 'in', 0),
(101, 1, 19, 'B', 'mm', 0),
(102, 1, 19, 'C', 'pc', 0),
(103, 1, 19, 'D', 'pt', 1),
(104, 1, 20, 'A', 'px', 1),
(105, 1, 20, 'B', 'vh', 0),
(106, 1, 20, 'C', 'vw', 0),
(107, 1, 20, 'D', 'vmin', 0),
(108, 1, 21, 'A', 'px', 0),
(109, 1, 21, 'B', 'vh', 1),
(110, 1, 21, 'C', 'vw', 0),
(111, 1, 21, 'D', 'vmin', 0),
(118, 1, 1, 'A', 'CSS is used to control the style of a web document in a simple and easy way. ', 0),
(119, 1, 1, 'B', 'You can write CSS once and then reuse same sheet in multiple HTML pages. ', 0),
(120, 1, 1, 'C', 'All of the above.', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `test_css_question`
--

CREATE TABLE IF NOT EXISTS `test_css_question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomer_variant` int(11) NOT NULL,
  `nomer_question` int(11) NOT NULL,
  `question` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

--
-- Дамп данных таблицы `test_css_question`
--

INSERT INTO `test_css_question` (`id`, `nomer_variant`, `nomer_question`, `question`) VALUES
(11, 1, 3, 'Which of the following is a component of CSS style rule?'),
(12, 1, 2, ' Which of the following is correct about CSS?  '),
(13, 1, 4, 'Which of the following selector matches all elements of a type? '),
(14, 1, 5, 'Which of the following selector matches the name of any element type? '),
(15, 1, 6, 'Which of the following selector matches a particular element only when it lies inside a particular element? '),
(16, 1, 7, 'Which of the following selector matches a element based on its class attribute? '),
(17, 1, 8, 'Which of the following selector matches a element based on its id? '),
(19, 1, 9, 'Which of the following is a way to associate styles with your HTML document? '),
(20, 1, 10, 'Which of the following is a way to associate styles with your HTML document? '),
(21, 1, 11, 'Which of the following is a true about CSS style overriding? '),
(22, 1, 12, 'Which of the following defines a measurement in centimeters? '),
(23, 1, 13, 'Which of the following defines a measurement as a percentage relative to another value, typically an enclosing element? '),
(24, 1, 14, 'Which of the following defines a relative measurement for the height of a font in em spaces? '),
(25, 1, 15, ' Which of the following defines a measurement relative to a font''s x-height? '),
(26, 1, 16, 'Which of the following defines a measurement in inches? '),
(27, 1, 17, 'Which of the following defines a measurement in millimeters? '),
(28, 1, 18, 'Which of the following defines a measurement in picas? '),
(29, 1, 19, 'Which of the following defines a measurement in points? '),
(30, 1, 20, 'Which of the following defines a measurement in screen pixels? '),
(31, 1, 21, 'Which of the following defines 1% of viewport height? '),
(35, 1, 1, ' Which of the following is correct about CSS? ');

-- --------------------------------------------------------

--
-- Структура таблицы `test_css_variant`
--

CREATE TABLE IF NOT EXISTS `test_css_variant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomer_variant` int(11) NOT NULL,
  `variant` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `test_css_variant`
--

INSERT INTO `test_css_variant` (`id`, `nomer_variant`, `variant`) VALUES
(1, 1, 'CCSSSS MMOOCCKK TTEESSTT');

-- --------------------------------------------------------

--
-- Структура таблицы `test_html_answer`
--

CREATE TABLE IF NOT EXISTS `test_html_answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomer_variant` int(11) NOT NULL,
  `nomer_question` int(11) NOT NULL,
  `variant_answer` varchar(39) NOT NULL,
  `answer` text NOT NULL,
  `correct` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=205 ;

--
-- Дамп данных таблицы `test_html_answer`
--

INSERT INTO `test_html_answer` (`id`, `nomer_variant`, `nomer_question`, `variant_answer`, `answer`, `correct`) VALUES
(11, 1, 1, 'A', 'HTML5 is the next major revision of the HTML standard superseding HTML 4.01, XHTML 1.0, and XHTML 1.1.', 0),
(12, 1, 1, 'B', 'HTML5 is a standard for structuring and presenting content on the World Wide Web', 0),
(13, 1, 1, 'C', 'HTML5 is a cooperation between the World Wide Web Consortium W3C and the Web Hypertext Application Technology Working Group WHATWG.', 0),
(14, 1, 1, 'D', 'All of the above.', 1),
(15, 1, 2, 'A', 'Persistent Local Storage', 0),
(16, 1, 2, 'B', 'WebSocket', 0),
(17, 1, 2, 'C', ' Server-Sent Events', 0),
(18, 1, 2, 'D', 'All of the above.', 1),
(19, 1, 3, 'A', 'Canvas ', 0),
(20, 1, 3, 'B', 'Audio & Video ', 0),
(21, 1, 3, 'C', 'Geolocation ', 0),
(22, 1, 3, 'D', 'All of the above ', 1),
(27, 1, 4, 'A', 'Apple Safari', 0),
(28, 1, 4, 'B', ' Google Chrome', 0),
(29, 1, 4, 'C', 'Both of the above', 1),
(30, 1, 4, 'D', '- None of the above', 0),
(31, 1, 5, 'A', '- Mozilla Firefox', 0),
(32, 1, 5, 'B', '- Opera', 0),
(33, 1, 5, 'C', 'Both of the above.', 1),
(34, 1, 5, 'D', 'None of the above.', 0),
(35, 1, 6, 'A', 'Mozilla Firefox', 0),
(36, 1, 6, 'B', 'Opera', 0),
(37, 1, 6, 'C', 'Both of the above.', 1),
(38, 1, 6, 'D', 'None of the above.', 0),
(39, 1, 7, 'A', 'true', 1),
(40, 1, 7, 'B', 'false', 0),
(41, 1, 8, 'A', 'true', 0),
(42, 1, 8, 'B', 'false', 1),
(43, 1, 9, 'A', 'section', 1),
(44, 1, 9, 'B', 'article', 0),
(45, 1, 9, 'C', 'aside', 0),
(46, 1, 9, 'D', '- header', 0),
(47, 1, 10, 'A', 'section', 0),
(48, 1, 10, 'B', 'article', 1),
(49, 1, 10, 'C', 'aside', 0),
(50, 1, 10, 'D', 'header', 0),
(51, 1, 11, 'A', 'section', 0),
(52, 1, 11, 'B', 'article', 0),
(53, 1, 11, 'C', 'aside', 1),
(54, 1, 11, 'D', 'header', 0),
(55, 1, 12, 'A', 'section', 0),
(56, 1, 12, 'B', 'article', 0),
(57, 1, 12, 'C', 'aside', 0),
(58, 1, 12, 'D', '- header', 1),
(59, 1, 13, 'A', 'footer', 1),
(60, 1, 13, 'B', 'nav', 0),
(61, 1, 13, 'C', 'section', 0),
(62, 1, 13, 'D', 'dialog', 0),
(63, 1, 14, 'A', 'footer', 0),
(64, 1, 14, 'B', 'nav', 1),
(65, 1, 14, 'C', 'section', 0),
(66, 1, 14, 'D', 'dialog', 0),
(67, 1, 15, 'A', 'footer', 0),
(68, 1, 15, 'B', 'nav', 1),
(69, 1, 15, 'C', 'section', 0),
(70, 1, 15, 'D', 'dialog', 0),
(71, 1, 16, 'A', 'footer', 0),
(72, 1, 16, 'B', 'nav', 0),
(73, 1, 16, 'C', '- dialog', 1),
(74, 1, 16, 'D', 'figure', 0),
(75, 1, 17, 'A', ' footer', 0),
(76, 1, 17, 'B', 'nav', 0),
(77, 1, 17, 'C', 'dialog', 0),
(78, 1, 17, 'D', 'figure', 1),
(79, 1, 18, 'A', 'A custom data attribute starts with data- and would be named based on your requirement', 0),
(80, 1, 18, 'B', 'You would be able to get the values of these attributes using JavaScript APIs or CSS in similar way as you get for standard attributes.', 0),
(81, 1, 18, 'C', 'Both of the above', 1),
(82, 1, 18, 'D', '- None of the above.', 0),
(83, 1, 19, 'A', 'A custom data attribute starts with data- and would be named based on your requirement', 0),
(84, 1, 19, 'B', 'You would be able to get the values of these attributes using JavaScript APIs or CSS in similar way as you get for standard attributes.', 0),
(85, 1, 19, 'C', 'Both of the above.', 1),
(86, 1, 19, 'D', ' None of the above.', 0),
(87, 1, 20, 'A', 'Web Forms 2.0 is an extension to the forms features found in HTML4.', 0),
(88, 1, 20, 'B', 'Form elements and attributes in HTML5 provide a greater degree of semantic mark-up than HTML4.', 0),
(89, 1, 20, 'C', '- Form elements and attributes in HTML5 remove a great deal of the need for tedious scripting and styling that was required in HTML4.', 0),
(90, 1, 20, 'D', 'All of the above.', 1),
(91, 1, 21, 'A', 'Web Forms 2.0 is an extension to the forms features found in HTML4.', 0),
(92, 1, 21, 'B', 'Form elements and attributes in HTML5 provide a greater degree of semantic mark-up than HTML4.', 0),
(93, 1, 21, 'C', 'Form elements and attributes in HTML5 remove a great deal of the need for tedious scripting and styling that was required in HTML4.', 0),
(94, 1, 21, 'D', 'All of the above.', 1),
(95, 1, 22, 'A', 'datetime', 1),
(96, 1, 22, 'B', 'datetime-local', 0),
(97, 1, 22, 'C', 'date', 0),
(98, 1, 22, 'D', 'month', 0),
(99, 1, 23, 'A', '- datetime', 0),
(100, 1, 23, 'B', 'datetime-local', 1),
(101, 1, 23, 'C', 'date', 0),
(102, 1, 23, 'D', 'month', 0),
(103, 1, 24, 'A', 'datetime', 0),
(104, 1, 24, 'B', '- datetime-local', 0),
(105, 1, 24, 'C', 'date', 1),
(106, 1, 24, 'D', 'month', 0),
(107, 1, 25, 'A', 'datetime', 0),
(108, 1, 25, 'B', 'datetime-local', 0),
(109, 1, 25, 'C', 'date', 0),
(110, 1, 25, 'D', 'month', 1),
(111, 2, 1, 'A', 'a text editor', 0),
(112, 2, 1, 'B', 'a graphics editor', 0),
(113, 2, 1, 'C', 'a word processor', 0),
(114, 2, 1, 'D', 'a browser', 1),
(115, 2, 1, 'E', 'a server', 0),
(116, 2, 2, 'A', ' &lt;blockquote> </blockquote>', 0),
(117, 2, 2, 'B', ' &lt;span> </span>', 0),
(118, 2, 2, 'C', ' &lt;ins> </ins>', 0),
(119, 2, 2, 'D', ' &lt;pre> </pre>', 1),
(120, 2, 2, 'E', ' &lt;a href=&quot;&quot;&gt;', 0),
(121, 2, 3, 'A', 'element title', 0),
(122, 2, 3, 'B', 'element html', 0),
(123, 2, 3, 'C', 'element body', 0),
(124, 2, 3, 'D', 'element meta', 0),
(125, 2, 3, 'E', 'element head', 1),
(126, 2, 4, 'A', 'because they take longer to type, making them seem more important than single characters', 0),
(127, 2, 4, 'B', 'because without HTML entities, unknown characters show up as giant smiley faces', 0),
(128, 2, 4, 'C', 'because keyboards are made wrong and are missing the most important keys', 0),
(129, 2, 4, 'D', 'because they can prevent characters from being interpreted instead of displayed', 1),
(130, 2, 5, 'A', 'frog', 0),
(131, 2, 5, 'B', 'post', 1),
(132, 2, 5, 'C', 'input', 0),
(133, 2, 5, 'D', 'pull', 0),
(134, 2, 5, 'E', 'get', 0),
(135, 2, 6, 'A', 'True', 0),
(136, 2, 6, 'B', 'False', 1),
(137, 2, 7, 'A', 'ol', 0),
(138, 2, 7, 'B', 'dl', 0),
(139, 2, 7, 'C', 'ul', 1),
(140, 2, 8, 'A', 'HTML Separates Style From Design', 0),
(141, 2, 8, 'B', 'File Extensions Are Not Important', 1),
(142, 2, 8, 'C', 'HTML Does Not Require the Use of a Server', 0),
(143, 2, 8, 'D', 'HTML Files Can Contain PHP Code', 0),
(144, 2, 9, 'A', 'inline elements', 0),
(145, 2, 9, 'B', 'addresses', 0),
(146, 2, 9, 'C', 'horizontal rules', 0),
(147, 2, 9, 'D', 'paragraphs', 0),
(148, 2, 9, 'E', 'headings', 1),
(149, 2, 10, 'A', 'search engine spiders that read HTML code', 0),
(150, 2, 10, 'B', 'characteristics of an element that provide additional information', 1),
(151, 2, 10, 'C', 'elements that give credit to other elements', 0),
(152, 2, 11, 'A', '&lt;input="submit" /&gt;', 0),
(153, 2, 11, 'B', '&lt;input type="button" /&gt;', 0),
(154, 2, 11, 'C', '&lt;input type="submit" /&gt;', 1),
(155, 2, 12, 'A', '&lt;html&lt;&lt;/html&lt;', 0),
(156, 2, 12, 'B', '&lt;html&gt;&lt;head&gt;&lt;body&gt;&lt;/html&gt;&lt;/head&gt;&lt;/body&gt;', 0),
(157, 2, 12, 'C', '&lt;html&gt;&lt;head&gt;&lt;/head&gt;&lt;body&gt;&lt;/body&gt;&lt;/html&gt;', 1),
(158, 2, 13, 'A', 'a brightly-colored element that comes in multiple shapes ideal for stacking', 0),
(159, 2, 13, 'B', 'an element that blends in without interrupting the flow of surrounding elements', 0),
(160, 2, 13, 'C', 'an element that stands out by forces line breaks before and after itself', 0),
(161, 2, 13, 'D', 'an element that blocks other elements from appearing', 1),
(162, 2, 14, 'A', '// This Is An HTML Comment', 0),
(163, 2, 14, 'B', '&lt;!-- This Is An HTML Comment --&gt;', 1),
(164, 2, 15, 'A', 'textarea', 0),
(165, 2, 15, 'B', 'hidden', 0),
(166, 2, 15, 'C', 'form', 0),
(167, 2, 15, 'D', 'input', 1),
(168, 2, 15, 'E', 'select', 0),
(169, 2, 16, 'A', 'Hyperlinks, Text, Markups and Linguistics', 0),
(170, 2, 16, 'B', 'Half The Mess Later', 0),
(171, 2, 16, 'C', 'HyperText Mixup Language', 0),
(172, 2, 16, 'D', 'HyperText Markup Language', 1),
(173, 2, 16, 'E', 'HyperTools Markup Language', 0),
(174, 2, 17, 'A', 'languages', 0),
(175, 2, 17, 'B', 'tags', 0),
(176, 2, 17, 'C', 'file names', 0),
(177, 2, 17, 'D', 'opening and closing elements', 0),
(178, 2, 17, 'E', 'file extensions', 1),
(179, 2, 18, 'A', '#505050', 1),
(180, 2, 18, 'B', '505050', 0),
(181, 2, 18, 'C', '$505050', 0),
(182, 2, 18, 'D', '-505050', 0),
(183, 2, 19, 'A', '&lt;a&gt;http://www.phpforkids.com/&lt;/a&gt;', 0),
(184, 2, 19, 'B', '&lt;a &quot;http://www.phpforkids.com/&quot;&gt;PHP For Kids.com&lt;/a&gt;', 0),
(185, 2, 19, 'C', '&lt;a href=&quot;http://www.phpforkids.com/&quot;&gt;PHP For Kids.com&lt;/a&gt;', 1),
(186, 2, 19, 'D', '&lt;a url=&quot;http://www.phpforkids.com/&quot;&gt;PHP For Kids.com&lt;/a&gt;', 0),
(187, 2, 20, 'A', 'Yes', 1),
(188, 2, 20, 'B', 'No', 0),
(189, 2, 20, 'C', 'Maybe', 0),
(190, 2, 21, 'A', 'because they stay out of the way', 0),
(191, 2, 21, 'B', 'because they can hold onto data for use later on', 0),
(192, 2, 21, 'D', 'because their values are unique', 1),
(193, 2, 22, 'A', '&lt;head&gt; &lt;/head&gt;', 1),
(194, 2, 22, 'B', '&lt;title&gt; &lt;/title&gt;', 0),
(195, 2, 23, 'A', 'a table head cell', 0),
(196, 2, 23, 'B', 'a table data cell', 1),
(197, 2, 23, 'C', 'a tabular distortion', 0),
(198, 2, 23, 'D', 'a table description', 0),
(199, 2, 23, 'E', 'a table database', 0),
(200, 2, 24, 'A', 'The Head Element', 1),
(201, 2, 24, 'B', 'The Body Element', 0),
(202, 2, 24, 'C', 'The Foot Element', 0),
(203, 2, 24, 'D', 'The Div Element', 0),
(204, 2, 24, 'E', 'The Form Element', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `test_html_question`
--

CREATE TABLE IF NOT EXISTS `test_html_question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomer_variant` int(11) NOT NULL,
  `nomer_question` int(11) NOT NULL,
  `question` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=56 ;

--
-- Дамп данных таблицы `test_html_question`
--

INSERT INTO `test_html_question` (`id`, `nomer_variant`, `nomer_question`, `question`) VALUES
(5, 1, 1, '- Which of the following is true about HTML 5?'),
(6, 1, 2, 'Which of the following feature is a part of HTML 5?'),
(7, 1, 3, 'Which of the following feature is a part of HTML 5? '),
(10, 1, 4, 'Which of the following browser supports HTML5 in its latest version?'),
(11, 1, 5, 'Which of the following browser supports HTML5 in its latest version?'),
(12, 1, 6, 'Which of the following browser supports HTML5 in its latest version?'),
(13, 1, 7, 'Is HTML5 backward compatible with old browsers?'),
(14, 1, 8, 'Are HTML tags case sensitive?'),
(15, 1, 9, 'Which of the following tag represents a generic document or application section in HTML5?'),
(16, 1, 10, ' Which of the following tag represents an independent piece of content of a document in HTML5?'),
(17, 1, 11, '- Which of the following tag represents a piece of content that is only slightly related to the rest of the page in HTML5?'),
(18, 1, 12, 'Which of the following tag represents the header of a section in HTML5?'),
(19, 1, 13, 'Which of the following tag represents the footer of a section in HTML5?'),
(20, 1, 14, ' Which of the following tag represents a section of the document intended for navigation in HTML5?'),
(21, 1, 15, 'Which of the following tag represents a section of the document intended for navigation in HTML5?'),
(22, 1, 16, 'Which of the following tag can be used to mark up a conversation in HTML5?'),
(23, 1, 17, 'Which of the following tag can be used to associate a caption together with some embedded content in HTML5?'),
(24, 1, 18, 'Which of the following is correct about custom attributes in HTML5?'),
(25, 1, 19, 'Which of the following is correct about custom attributes in HTML5?'),
(26, 1, 20, 'Which of the following is correct about Web form 2.0 in HTML5?'),
(27, 1, 21, ' Which of the following is correct about Web form 2.0 in HTML5?'),
(28, 1, 22, 'Which of the following input control represents a date and time year, month, day, hour, minute, second, fractionsofasecond encoded according to ISO 8601 with the time zone set to UTC in Web Form 2.0?'),
(29, 1, 23, 'Which of the following input control represents a date and time year, month, day, hour, minute, second, fractionsofasecond encoded according to ISO 8601 with no time zone information in Web Form 2.0?'),
(30, 1, 24, 'Which of the following input control represents a date year, month, day encoded according to ISO 8601 in Web Form 2.0?'),
(31, 1, 25, '- Which of the following input control represents a date consisting of a year and a month encoded according to ISO 8601 in Web Form 2.0?'),
(32, 2, 1, 'What program interprets HTML?'),
(33, 2, 2, 'Which element formats text and whitespace identically to how it is entered between the tags?'),
(34, 2, 3, 'Which of the following tags do not make up a valid HTML element?'),
(35, 2, 4, 'Why are HTML entities necessary?'),
(36, 2, 5, 'Which form method sends information in the URL?'),
(37, 2, 6, 'Rowspan, colspan and cellspan are all valid HTML table attributes.'),
(38, 2, 7, 'Which element will create an unordered list?'),
(39, 2, 8, 'One of the following statements is correct. Which one is it?'),
(40, 2, 9, 'h1 and  h3 are examples of what?'),
(41, 2, 10, 'What are HTML attributes?'),
(42, 2, 11, 'What is the proper syntax of a form submit button?'),
(43, 2, 12, 'Which of the following examples shows correctly nested HTML elements?'),
(44, 2, 13, 'What is an inline element?'),
(45, 2, 14, 'What is the proper format of an HTML comment?'),
(46, 2, 15, 'Which element is used for both text and password form fields?'),
(47, 2, 16, 'What does HTML stand for?'),
(48, 2, 17, '&quot;.html&quot;. and &quot;..htm&quot;. are valid HTML'),
(49, 2, 18, 'Which of the following is a valid color code?'),
(50, 2, 19, 'What is the correct format for creating an HTML text link?'),
(51, 2, 20, 'Should HTML be used to design and style a website?'),
(52, 2, 21, 'Why are hidden form fields useful?'),
(53, 2, 22, 'Which of the following tags should <meta> tags be enclosed in?'),
(54, 2, 23, 'What is the &lt;td&gt; &lt;/td&gt; element?'),
(55, 2, 24, 'Title, meta and link elements are all located inside what element?');

-- --------------------------------------------------------

--
-- Структура таблицы `test_html_variant`
--

CREATE TABLE IF NOT EXISTS `test_html_variant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomer_variant` int(11) NOT NULL,
  `variant` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `test_html_variant`
--

INSERT INTO `test_html_variant` (`id`, `nomer_variant`, `variant`) VALUES
(1, 1, ''),
(3, 2, '');

-- --------------------------------------------------------

--
-- Структура таблицы `test_java_answer`
--

CREATE TABLE IF NOT EXISTS `test_java_answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomer_variant` int(11) NOT NULL,
  `nomer_question` int(11) NOT NULL,
  `variant_answer` varchar(39) NOT NULL,
  `answer` text NOT NULL,
  `correct` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=381 ;

--
-- Дамп данных таблицы `test_java_answer`
--

INSERT INTO `test_java_answer` (`id`, `nomer_variant`, `nomer_question`, `variant_answer`, `answer`, `correct`) VALUES
(11, 1, 1, 'A', 'public static int main(St ring[] args)', 0),
(12, 1, 1, 'B', 'public int main(St ring[] args)', 0),
(13, 1, 1, 'C', 'public static void main(St ring[] args)', 1),
(14, 1, 1, 'D', 'None of the above.', 0),
(15, 1, 2, 'A', 'static', 0),
(16, 1, 2, 'B', 'Boolean', 1),
(17, 1, 2, 'C', 'void', 0),
(18, 1, 2, 'D', 'private', 0),
(19, 1, 3, 'A', 'A class is a blue print from which individual objects are created. A class can contain fields and methods to describe the behavior of an object.A class is a blue print from which individual objects are created. A class can contain fields and methods to describe the behavior of an object.', 1),
(20, 1, 3, 'B', 'class is a special data type.', 0),
(21, 1, 3, 'C', 'class is used to allocate memory to a data type.', 0),
(22, 1, 3, 'D', 'none of the above.', 0),
(23, 1, 4, 'A', 'True', 1),
(24, 1, 4, 'B', 'False', 0),
(25, 1, 5, 'A', 'True', 0),
(26, 1, 5, 'B', 'False', 1),
(27, 1, 6, 'A', 'True', 0),
(28, 1, 6, 'B', 'False', 1),
(29, 1, 7, 'A', 'True', 0),
(30, 1, 7, 'B', 'False', 1),
(31, 1, 8, 'A', 'null', 0),
(32, 1, 8, 'B', '0', 0),
(33, 1, 8, 'C', 'Depends upon the type of variable', 0),
(34, 1, 8, 'D', 'Not assigned', 1),
(35, 1, 9, 'A', 'null', 0),
(36, 1, 9, 'B', '0', 0),
(37, 1, 9, 'C', 'Depends upon the type of variable', 1),
(38, 1, 9, 'D', 'Not assigned', 0),
(39, 1, 10, 'A', '8 bit', 1),
(40, 1, 10, 'B', '16 bit', 0),
(41, 1, 10, 'C', '32 bit ', 0),
(42, 1, 10, 'D', ' 64 bit', 0),
(43, 1, 11, 'A', '8 bit', 0),
(44, 1, 11, 'B', '16 bit', 0),
(45, 1, 11, 'C', '32 bit', 1),
(46, 1, 11, 'D', '64 bit', 0),
(47, 1, 12, 'A', '8 bit', 0),
(48, 1, 12, 'B', '16 bit', 0),
(49, 1, 12, 'C', '32 bit', 1),
(50, 1, 12, 'D', '64 bit', 0),
(51, 1, 13, 'A', '8 bit', 0),
(52, 1, 13, 'B', '16 bit', 0),
(53, 1, 13, 'C', '32 bit', 0),
(54, 1, 13, 'D', '64 bit', 1),
(55, 1, 14, 'A', ' 8 bit', 0),
(56, 1, 14, 'B', '16 bit', 0),
(57, 1, 14, 'C', '32 bit', 1),
(58, 1, 14, 'D', '64 bit', 0),
(59, 1, 15, 'A', '8 bit', 0),
(60, 1, 15, 'B', '16 bit', 0),
(61, 1, 15, 'C', '32 bit', 0),
(62, 1, 15, 'D', '64 bit', 1),
(63, 1, 16, 'A', '8 bit', 0),
(64, 1, 16, 'B', '16 bit', 1),
(65, 1, 16, 'C', '32 bit', 0),
(66, 1, 16, 'D', '64 bit', 0),
(67, 1, 17, 'A', '8 bit', 0),
(68, 1, 17, 'B', '16 bit', 1),
(69, 1, 17, 'C', '32 bit ', 0),
(70, 1, 17, 'D', 'not precisely defined', 0),
(71, 1, 18, 'A', 'True', 1),
(72, 1, 18, 'B', 'False', 0),
(73, 1, 19, 'A', 'True', 1),
(74, 1, 19, 'B', 'False', 0),
(75, 1, 20, 'A', 'True', 0),
(76, 1, 20, 'B', 'False', 1),
(77, 1, 21, 'A', '0', 1),
(78, 1, 21, 'B', ' 0.0', 0),
(79, 1, 21, 'C', 'null', 0),
(80, 1, 21, 'D', 'undefined', 0),
(81, 1, 22, 'A', '0.0', 1),
(82, 1, 22, 'B', '0', 0),
(83, 1, 22, 'C', 'null', 0),
(84, 1, 22, 'D', 'undefined', 0),
(85, 1, 23, 'A', '0', 1),
(86, 1, 23, 'B', '0.0', 0),
(87, 1, 23, 'C', 'null', 0),
(88, 1, 23, 'D', 'not defined', 0),
(89, 1, 24, 'A', '0.0', 0),
(90, 1, 24, 'B', '- 0', 1),
(91, 1, 24, 'C', 'null', 0),
(92, 1, 24, 'D', 'not defined', 0),
(93, 1, 25, 'A', '0', 1),
(94, 1, 25, 'B', '0.0', 0),
(95, 1, 25, 'C', 'null', 0),
(96, 1, 25, 'D', 'not defined', 0),
(97, 2, 1, 'A', '0', 0),
(98, 2, 1, 'B', ' 0.0', 0),
(99, 2, 1, 'C', '0L', 1),
(100, 2, 1, 'D', 'not defined', 0),
(101, 2, 2, 'A', '0.0d', 0),
(102, 2, 2, 'B', '0.0f', 1),
(103, 2, 2, 'C', '0', 0),
(104, 2, 2, 'D', 'not defined', 0),
(105, 2, 3, 'A', '0.0d', 1),
(106, 2, 3, 'B', '0.0f', 0),
(107, 2, 3, 'C', '0', 0),
(108, 2, 3, 'D', 'not defined', 0),
(109, 2, 4, 'A', '&quot;u0000&quot;', 1),
(110, 2, 4, 'B', '0', 0),
(111, 2, 4, 'C', 'null', 0),
(112, 2, 4, 'D', 'not defined', 0),
(113, 2, 5, 'A', '&quot;', 0),
(114, 2, 5, 'B', 'null', 0),
(115, 2, 5, 'C', 'not defined', 1),
(116, 2, 6, 'A', 'undefined', 0),
(117, 2, 6, 'B', '0', 0),
(118, 2, 6, 'C', 'null', 1),
(119, 2, 6, 'D', 'not defined', 0),
(120, 2, 7, 'A', 'true', 0),
(121, 2, 7, 'B', 'false', 1),
(122, 2, 7, 'C', 'null', 0),
(123, 2, 7, 'D', 'not defined', 0),
(124, 2, 8, 'A', 'Variables, methods and constructors which are declared public can be accessed by any class', 1),
(125, 2, 8, 'B', 'Variables, methods and constructors which are declared public can be accessed by any class lying in same package.', 0),
(126, 2, 8, 'C', '- Variables, methods and constructors which are declared public in the superclass can be accessed only by its child class.', 0),
(127, 2, 8, 'D', '- None of the above', 0),
(128, 2, 9, 'A', '- Variables, methods and constructors which are declared protected can be accessed by any class.', 0),
(129, 2, 9, 'B', 'Variables, methods and constructors which are declared protected can be accessed by any class lying in same package.', 0),
(130, 2, 9, 'C', 'Variables, methods and constructors which are declared protected in the superclass can be accessed only by its child class', 1),
(131, 2, 9, 'D', 'None of the above', 0),
(132, 2, 10, 'A', 'Variables, methods and constructors which are declared private can be accessed only by the members of the same class', 1),
(133, 2, 10, 'B', 'Variables, methods and constructors which are declared private can be accessed by any class lying in same package.', 0),
(134, 2, 10, 'C', 'Variables, methods and constructors which are declared private in the superclass can be accessed only by its child class.', 0),
(135, 2, 10, 'D', 'None of the above.', 0),
(136, 2, 11, 'A', 'Variables, methods and constructors which are declared private can be accessed only by the members of the super class.', 0),
(137, 2, 11, 'B', 'Variables, methods and constructors which are declared protected can be accessed by any subclass of the super class.', 0),
(138, 2, 11, 'C', 'Variables, methods and constructors which are declared public in the superclass can be accessed by any class.', 0),
(139, 2, 11, 'D', 'All of the above', 1),
(140, 2, 12, 'A', ' By default, variables, methods and constructors can be accessed by subclass only.', 0),
(141, 2, 12, 'B', 'By default, variables, methods and constructors can be accessed by any class lying in any package.', 0),
(142, 2, 12, 'C', 'By default, variables, methods and constructors can be accessed by any class lying in the same package.', 1),
(143, 2, 12, 'D', 'None of the above.', 0),
(144, 2, 13, 'A', 'String is immutable.', 0),
(145, 2, 13, 'B', 'String can be created using new operator.', 0),
(146, 2, 13, 'C', 'String is a primary data type.', 1),
(147, 2, 13, 'D', 'None of the above', 0),
(148, 2, 14, 'A', 'String is mutable.', 1),
(149, 2, 14, 'B', 'String is immutable.', 0),
(150, 2, 14, 'C', 'String is a data type.', 0),
(151, 2, 14, 'D', '- None of the above.', 0),
(152, 2, 15, 'A', 'Polymorphism is a technique to define different objects of same type.', 0),
(153, 2, 15, 'B', 'Polymorphism is the ability of an object to take on many form', 1),
(154, 2, 15, 'C', ' Polymorphism is a technique to define different methods of same type.', 0),
(155, 2, 15, 'D', 'None of the above.', 0),
(156, 2, 16, 'A', 'It is the process where one object acquires the properties of another.', 1),
(157, 2, 16, 'B', '- inheritance is the ability of an object to take on many forms.', 0),
(158, 2, 16, 'C', '- inheritance is a technique to define different methods of same type.', 0),
(159, 2, 16, 'D', 'None of the above', 0),
(160, 2, 17, 'A', 'Abstraction is a technique to define different methods of same type.', 0),
(161, 2, 17, 'B', 'Abstraction is the ability of an object to take on many forms.', 0),
(162, 2, 17, 'C', 'It refers to the ability to make a class abstract in OOP.', 1),
(163, 2, 17, 'D', 'None of the above.', 0),
(164, 2, 18, 'A', 'Encapsulation is a technique to define different methods of same type.', 0),
(165, 2, 18, 'B', 'Encapsulation is the ability of an object to take on many forms.', 0),
(166, 2, 18, 'C', 'Encapsulation is the technique of making the fields in a class private and providing access to the fields via public methods.', 1),
(167, 2, 18, 'D', 'None of the above.', 0),
(168, 2, 19, 'A', 'An interface is a collection of abstract methods.', 0),
(169, 2, 19, 'B', '- Interface is an abstract class.', 0),
(170, 2, 19, 'C', 'Interface is an concrete class', 1),
(171, 2, 19, 'D', 'None of the above.', 0),
(172, 2, 20, 'A', 'An immutable object can be changed once it is created.', 1),
(173, 2, 20, 'C', 'An immutable object is an instance of an abstract class', 0),
(174, 2, 20, 'D', 'None of the above.', 0),
(175, 2, 21, 'A', 'Variables defined inside methods, constructors or blocks are called local variables.', 1),
(176, 2, 21, 'B', 'Variables defined outside methods, constructors or blocks are called local variables.', 0),
(177, 2, 21, 'C', 'Static variables defined outside methods, constructors or blocks are called local variables.', 0),
(178, 2, 21, 'D', 'None of the above.', 0),
(179, 2, 22, 'A', 'Instance variables are static variables within a class but outside any method', 0),
(180, 2, 22, 'B', 'Instance variables are variables defined inside methods, constructors or blocks.', 0),
(181, 2, 22, 'C', '- Instance variables are variables within a class but outside any method.', 1),
(182, 2, 22, 'D', ' None of the above', 0),
(183, 2, 23, 'A', 'class variables are static variables within a class but outside any method', 1),
(184, 2, 23, 'B', 'class variables are variables defined inside methods, constructors or blocks.', 0),
(185, 2, 23, 'C', 'class variables are variables within a class but outside any method.', 0),
(186, 2, 23, 'D', 'None of the above.', 0),
(187, 2, 24, 'A', 'True', 0),
(188, 2, 24, 'B', 'False', 1),
(189, 2, 25, 'A', '- HAS-A relationship.', 0),
(190, 2, 25, 'B', ' - IS-A relationship.', 1),
(191, 3, 1, 'A', 'HAS-A relationship.', 1),
(192, 3, 1, 'B', ' IS-A relationship', 0),
(193, 3, 2, 'A', 'class variables, instance variables', 0),
(194, 3, 2, 'B', 'class variables, local variables, instance variables', 1),
(195, 3, 2, 'C', 'class variables', 0),
(196, 3, 2, 'D', '- class variables, local variables', 0),
(197, 3, 3, 'A', 'An applet is a Java program that runs in a Web browser', 1),
(198, 3, 3, 'B', 'Applet is a standalone java program.', 0),
(199, 3, 3, 'C', 'Applet is a tool.', 0),
(200, 3, 3, 'D', 'Applet is a run time environment.', 0),
(201, 3, 4, 'A', '- Set is a collection of element which contains elements along with their key.', 0),
(202, 3, 4, 'B', 'Set is a collection of element which contains hashcode of elements.', 0),
(203, 3, 4, 'C', '- Set is a collection of element which cannot contain duplicate elements.', 1),
(204, 3, 4, 'D', 'Set is a collection of element which can contain duplicate elements.', 0),
(205, 3, 5, 'A', 'It is a Set implemented when we want elements in a tree based order.', 0),
(206, 3, 5, 'B', 'It is a Set implemented when we want elements in a sorted order', 1),
(207, 3, 5, 'C', '- It is a Set implemented when we want elements in a binary tree format.', 0),
(208, 3, 5, 'D', 'It is a Set implemented when we want elements in a hiearchical order.', 0),
(209, 3, 6, 'A', 'JRE is a java based GUI application', 0),
(210, 3, 6, 'B', 'JRE is an application development framework.', 0),
(211, 3, 6, 'C', 'JRE is an implementation of the Java Virtual Machine which executes Java programs.', 1),
(212, 3, 6, 'D', 'None of the above.', 0),
(213, 3, 7, 'A', 'JIT improves the runtime performance of computer programs based on bytecode', 1),
(214, 3, 7, 'B', 'JIT is an application development framework.', 0),
(215, 3, 7, 'C', 'JIT is an implementation of the Java Virtual Machine which executes Java programs', 0),
(216, 3, 7, 'D', 'None of the above.', 0),
(217, 3, 8, 'A', 'True', 0),
(218, 3, 8, 'B', 'False', 1),
(219, 3, 9, 'A', 'True', 1),
(220, 3, 9, 'B', 'False', 0),
(221, 3, 10, 'A', 'It is used to create syncronized code', 0),
(222, 3, 10, 'B', 'There is no such block.', 0),
(223, 3, 10, 'C', 'It is used to initialize the static data member., It is excuted before main method at the time of class loading.', 1),
(224, 3, 10, 'D', '- None of the above', 0),
(225, 3, 11, 'A', 'Composition is a data structure.', 0),
(226, 3, 11, 'B', 'Composition is a way to create an object.', 0),
(227, 3, 11, 'C', 'Holding the reference of the other class within some other class is known as composition.', 1),
(228, 3, 11, 'D', 'None of the above.', 0),
(229, 3, 12, 'A', 'Methods with same name but different parameters.', 1),
(230, 3, 12, 'B', 'Methods with same name but different return types.', 0),
(231, 3, 12, 'C', 'Methods with same name, same parameter types but different parameter names.', 0),
(232, 3, 12, 'D', 'None of the above.', 0),
(233, 3, 13, 'A', 'If a subclass uses a method that is already provided by its parent class, it is known as Method Overriding.', 0),
(234, 3, 13, 'B', '- If a subclass provides a specific implementation of a method that is already provided by its parent class, it is known as Method Overriding.', 1),
(235, 3, 13, 'C', 'Both of the above.', 0),
(236, 3, 13, 'D', 'None of the above', 0),
(237, 3, 14, 'A', 'Static binding occurs during Compile time', 1),
(238, 3, 14, 'B', 'Static binding occurs during load time.', 0),
(239, 3, 14, 'C', 'Static binding occurs during runtime.', 0),
(240, 3, 14, 'D', ' None of the above', 0),
(241, 3, 15, 'A', 'Static Binding.', 1),
(242, 3, 15, 'B', '- Dynamic Binding.', 0),
(243, 3, 15, 'C', '- Both of the above.', 0),
(244, 3, 15, 'D', 'None of the above.', 0),
(245, 3, 16, 'A', 'type', 1),
(246, 3, 16, 'B', 'object', 0),
(247, 3, 16, 'C', 'Both of the above.', 0),
(248, 3, 16, 'D', '- None of the above.', 0),
(249, 3, 17, 'A', 'type', 0),
(250, 3, 17, 'B', 'object', 1),
(251, 3, 17, 'C', 'Both of the above.', 0),
(252, 3, 17, 'D', ' None of the above.', 0),
(253, 3, 18, 'A', '- Static Binding.', 0),
(254, 3, 18, 'B', 'Dynamic Binding.', 1),
(255, 3, 18, 'C', 'Both of the above.', 0),
(256, 3, 18, 'D', 'None of the above.', 0),
(257, 3, 19, 'A', 'class declard final is a final class.', 0),
(258, 3, 19, 'B', 'Final classes are created so the methods implemented by that class cannot be overridden.', 0),
(259, 3, 19, 'D', 'All of the above.', 1),
(260, 3, 20, 'A', 'A NullPointerException is thrown when calling the instance method of a null object or modifying/accessing field of a null object.', 1),
(261, 3, 20, 'B', '- A NullPointerException is thrown when object is set as null', 0),
(262, 3, 20, 'C', 'A NullPointerException is thrown when object property is set as null', 0),
(263, 3, 20, 'D', 'None of the above.', 0),
(264, 3, 21, 'A', 'Invoke its sleep method.', 0),
(265, 3, 21, 'C', '- Invoke its suspend method.', 0),
(266, 3, 21, 'D', 'All of the above', 1),
(281, 3, 22, 'B', 'Main application running the thread.', 0),
(282, 3, 22, 'C', 'start method of the thread class.', 1),
(283, 3, 22, 'D', 'None of the above', 0),
(284, 3, 23, 'A', 'Thread returns to the ready state.', 1),
(285, 3, 23, 'B', 'Thread returns to the waiting state.', 0),
(286, 3, 23, 'C', 'Thread starts running.', 0),
(287, 3, 23, 'D', 'None of the above.', 0),
(288, 3, 24, 'A', 'Thread returns to the ready state.', 0),
(289, 3, 24, 'B', 'Thread returns to the waiting state', 1),
(290, 3, 24, 'C', 'Thread starts running', 0),
(291, 3, 24, 'D', 'None of the above.', 0),
(292, 3, 25, 'A', 'These are classes that allow primitive types to be accessed as objects. ', 1),
(293, 3, 25, 'B', ' These are classes that wraps functionality of an existing class. ', 0),
(294, 3, 25, 'C', 'Both of the above. ', 0),
(295, 3, 25, 'D', '- None of the above.', 0),
(296, 4, 1, 'A', 'Serialization is the process of writing the state of an object to another object. ', 0),
(297, 4, 1, 'B', 'Serialization is the process of writing the state of an object to a byte stream. ', 1),
(298, 4, 1, 'C', 'Both of the above. ', 0),
(299, 4, 1, 'D', 'None of the above.', 0),
(300, 4, 2, 'A', 'Deserialization is the process of restoring state of an object from a byte stream. ', 1),
(301, 4, 2, 'B', 'Serialization is the process of restoring state of an object from an object. ', 0),
(302, 4, 2, 'C', 'Both of the above. ', 0),
(303, 4, 2, 'D', 'None of the above.', 0),
(304, 4, 3, 'A', 'A transient variable is a variable which is serialized during Serialization. ', 0),
(305, 4, 3, 'B', 'A transient variable is a variable that may not be serialized during Serialization. ', 1),
(306, 4, 3, 'C', 'A transient variable is a variable which is to be marked as serializable. ', 0),
(307, 4, 3, 'D', ' None of the above.', 0),
(308, 4, 4, 'A', ' Synchronization is the capability to control the access of multiple threads to shared resources.', 1),
(309, 4, 4, 'B', 'Synchronization is the process of writing the state of an object to another object. ', 0),
(310, 4, 4, 'C', 'Synchronization is the process of writing the state of an object to byte stream. ', 0),
(311, 4, 4, 'D', 'None of the above.', 0),
(312, 4, 5, 'A', 'True', 0),
(313, 4, 5, 'B', 'False', 1),
(314, 4, 6, 'A', 'When it detects that the object has become unreachable. ', 1),
(315, 4, 6, 'B', 'As soon as object is set as null. ', 0),
(316, 4, 6, 'C', ' At fixed intervalm it checks for null value. ', 0),
(317, 4, 6, 'D', 'None of the above.', 0),
(318, 4, 7, 'A', ' / , % ', 1),
(319, 4, 7, 'B', ' * , + ', 0),
(320, 4, 7, 'C', '! , -', 0),
(321, 4, 7, 'D', ' >>, <<', 0),
(322, 4, 8, 'A', 'True', 1),
(323, 4, 8, 'B', 'False', 0),
(324, 4, 9, 'A', ' Compilation Error.', 0),
(325, 4, 9, 'B', 'RunTime Error: NoSuchMethodError', 1),
(326, 4, 9, 'C', 'Program will compile and run without any output. ', 0),
(327, 4, 9, 'D', 'Program will compile and run to show the required output.', 0),
(328, 4, 10, 'A', 'True', 0),
(329, 4, 10, 'B', 'False', 1),
(330, 4, 11, 'A', 'True', 0),
(331, 4, 11, 'B', 'False', 1),
(332, 4, 12, 'A', 'True', 0),
(333, 4, 12, 'B', 'False', 1),
(334, 4, 13, 'A', 'Runtime polymorphism is a process in which a call to an overridden method is resolved at runtime rather than at compile-time. ', 1),
(335, 4, 13, 'B', 'Runtime polymorphism is a process in which a call to an overloaded method is resolved at runtime rather than at compile-time. ', 0),
(336, 4, 13, 'C', ' Both of the above. ', 0),
(337, 4, 13, 'D', 'None of the above.', 0),
(338, 4, 14, 'A', 'True', 0),
(339, 4, 14, 'B', 'False', 1),
(340, 4, 15, 'A', 'True', 1),
(341, 4, 15, 'B', 'False', 0),
(342, 4, 16, 'A', 'It is a Thread public static method used to obtain a reference to the current thread. ', 1),
(343, 4, 16, 'B', ' It is a thread''s instance method used to get thread count.', 0),
(344, 4, 16, 'C', ' It is a object''s public static method used obtain a reference to the current thread. ', 0),
(345, 4, 17, 'A', 'wait ', 0),
(346, 4, 17, 'B', 'start ', 0),
(347, 4, 17, 'C', 'stop ', 0),
(348, 4, 17, 'D', 'run', 1),
(349, 4, 18, 'A', 'marker interface is an interface with no method. ', 1),
(350, 4, 18, 'B', 'marker interface is an interface with single method, mark.', 0),
(351, 4, 18, 'C', 'marker interface is an interface with single method, marker. ', 0),
(352, 4, 18, 'D', 'none of the above.', 0),
(353, 4, 19, 'A', 'serializable', 1),
(354, 4, 19, 'B', 'comparable ', 0),
(355, 4, 19, 'C', 'cloneable', 0),
(356, 4, 19, 'D', 'none of the above.', 0),
(357, 4, 20, 'A', 'StringBuilder ', 0),
(358, 4, 20, 'B', 'StringBuffer ', 1),
(359, 4, 20, 'C', 'Both of the above ', 0),
(360, 4, 20, 'D', 'none of the above', 0),
(361, 4, 21, 'A', 'StringBuilder ', 1),
(362, 4, 21, 'B', 'StringBuffer ', 0),
(363, 4, 21, 'C', 'Both of the above. ', 0),
(364, 4, 21, 'D', 'none of the above.', 0),
(365, 4, 22, 'A', '[]', 1),
(366, 4, 22, 'B', '= ', 0),
(367, 4, 22, 'C', '?:', 0),
(368, 4, 22, 'D', '%', 0),
(369, 4, 23, 'A', 'Throwable ', 1),
(370, 4, 23, 'B', 'Catchable', 0),
(371, 4, 23, 'C', 'MainError ', 0),
(372, 4, 23, 'D', 'MainException', 0),
(373, 4, 24, 'A', 'Always when try block get executed, no matter exception occured or not. ', 1),
(374, 4, 24, 'B', 'Always when a method get executed, no matter exception occured or not. ', 0),
(375, 4, 24, 'C', 'Always when a try block get executed, if exception do not occur. ', 0),
(376, 4, 24, 'D', 'Only when exception occurs in try block code.', 0),
(377, 4, 25, 'A', 'If an error occurs. ', 0),
(378, 4, 25, 'B', 'If an exception occurs. ', 1),
(379, 4, 25, 'C', 'Both of the above.', 0),
(380, 4, 25, 'D', 'None of the above.', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `test_java_question`
--

CREATE TABLE IF NOT EXISTS `test_java_question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomer_variant` int(11) NOT NULL,
  `nomer_question` int(11) NOT NULL,
  `question` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=108 ;

--
-- Дамп данных таблицы `test_java_question`
--

INSERT INTO `test_java_question` (`id`, `nomer_variant`, `nomer_question`, `question`) VALUES
(6, 1, 1, 'What is correct syntax for main method of a java class?'),
(7, 1, 2, 'Which of the following is not a keyword in java?'),
(8, 1, 3, 'What is a class in java?'),
(9, 1, 4, 'Primitive variables are stored on Stack.'),
(10, 1, 5, 'Objects are stored on Stack'),
(11, 1, 6, 'Static functions can be accessed using null reference.'),
(12, 1, 7, 'Can we compare int variable with a boolean variable?'),
(13, 1, 8, 'What of the following is the default value of a local variable?'),
(14, 1, 9, 'What of the following is the default value of an instance variable?'),
(15, 1, 10, 'What is the size of byte variable?'),
(16, 1, 11, 'What is the size of short variable?'),
(17, 1, 12, ' What is the size of int variable?'),
(18, 1, 13, 'What is the size of long variable?'),
(19, 1, 14, 'What is the size of float variable?'),
(20, 1, 15, 'What is the size of double variable?'),
(21, 1, 16, '- What is the size of char variable?'),
(22, 1, 17, 'What is the size of boolean variable?'),
(23, 1, 18, 'Is an empty .java file a valid source file?'),
(24, 1, 19, 'Can we have multiple classes in same java file?'),
(25, 1, 20, 'Can we have two public classes in one java file?'),
(26, 1, 21, 'What is the default value of byte variable?'),
(27, 1, 22, ' What is the default value of short variable?'),
(28, 1, 23, 'What is the default value of byte variable?'),
(29, 1, 24, 'What is the default value of short variable?'),
(30, 1, 25, 'What is the default value of int variable?'),
(31, 2, 1, 'What is the default value of long variable?'),
(32, 2, 2, 'What is the default value of float variable?'),
(33, 2, 3, 'What is the default value of double variable?'),
(34, 2, 4, 'What is the default value of char variable?'),
(35, 2, 5, 'What is the default value of String variable?'),
(36, 2, 6, 'What is the default value of Object variable?'),
(37, 2, 7, 'What is the default value of Boolean variable?'),
(38, 2, 8, 'Which of the following is true about public access modifier?'),
(39, 2, 9, 'Which of the following is true about protected access modifier?'),
(40, 2, 10, 'Which of the following is true about private access modifier?'),
(41, 2, 11, 'Which of the following is true about super class?'),
(42, 2, 12, 'Which of the following stands true about default modifier of class members?'),
(43, 2, 13, 'Which of the following is false about String?'),
(44, 2, 14, 'Which of the following is true about String?'),
(45, 2, 15, 'What is polymorphism?'),
(46, 2, 16, 'What is inheritance?'),
(47, 2, 17, 'What is Abstraction?'),
(48, 2, 18, 'What is Encapsulation?'),
(49, 2, 19, 'What is an Interface?'),
(50, 2, 20, '- What is an immutable object?'),
(51, 2, 21, 'What is local variable?'),
(52, 2, 22, 'What is instance variable?'),
(53, 2, 23, 'What is class variable?'),
(54, 2, 24, 'A class always has a default constructor.'),
(55, 2, 25, 'Inheritance represents'),
(56, 3, 1, 'Composition represents'),
(57, 3, 2, 'What kind of variables a class can consist of?'),
(58, 3, 3, 'What is an applet?'),
(59, 3, 4, 'What is Set Interface?'),
(60, 3, 5, 'What is TreeSet Interface?'),
(61, 3, 6, 'What is JRE?'),
(62, 3, 7, 'What is JIT compiler?'),
(63, 3, 8, '- Can be constructor be made final?'),
(64, 3, 9, 'Can be constructor be made private?'),
(65, 3, 10, 'What is static block?'),
(66, 3, 11, 'What is composition?'),
(67, 3, 12, 'What is function overloading?'),
(68, 3, 13, '- What is function overriding?'),
(69, 3, 14, 'When static binding occurs?'),
(70, 3, 15, 'Method Overloading is an example of'),
(71, 3, 16, 'Static binding uses which information for binding?'),
(72, 3, 17, 'Dynamic binding uses which information for binding?'),
(73, 3, 18, 'Method Overriding is an example of'),
(74, 3, 19, 'What is true about a final class?'),
(75, 3, 20, 'What is NullPointerException?'),
(76, 3, 21, 'Which is the way in which a thread can enter the waiting state?'),
(78, 3, 22, 'What invokes a thread''s run method?'),
(79, 3, 23, 'What happens when thread''s yield method is called?'),
(80, 3, 25, 'What are Wrapper classes? '),
(81, 3, 24, 'What happens when thread''s sleep method is called? '),
(82, 4, 1, 'What is Serialization?'),
(83, 4, 2, ' What is Deserialization? '),
(84, 4, 3, 'What is a transient variable? '),
(85, 4, 4, 'What is synchronization? '),
(86, 4, 5, 'Does garbage collection guarantee that a program will not run out of memory? '),
(88, 4, 6, ' Under what conditions is an objects finalize method invoked by the garbage collector? '),
(89, 4, 7, 'Which arithmetic operations can result in the throwing of an ArithmeticException? '),
(90, 4, 8, 'Can try statements be nested? '),
(91, 4, 9, 'What will happen if static modifier is removed from the signature of the main method? '),
(92, 4, 10, 'Can a top level class be private or protected? '),
(93, 4, 11, 'Is it necessary that each try block must be followed by a catch block? '),
(94, 4, 12, 'Is it necessary that each try block must be followed by a finally block? '),
(95, 4, 13, 'What is runtime polymorphism?'),
(96, 4, 14, 'Can constructor be inherited? '),
(97, 4, 15, 'Deletion is faster in LinkedList than ArrayList. '),
(98, 4, 16, 'What is currentThread?'),
(99, 4, 17, 'Which method must be implemented by all threads? '),
(100, 4, 18, 'What is a marker interface?'),
(101, 4, 19, 'Which of the following is a marker interface? '),
(102, 4, 20, 'Which of the following is a thread safe? '),
(103, 4, 21, 'Which of the following is Faster, StringBuilder or StringBuffer? '),
(104, 4, 22, 'which operator is considered to be with highest precedence? '),
(105, 4, 23, 'This is the parent of Error and Exception classes. '),
(106, 4, 24, 'When finally block gets executed?'),
(107, 4, 25, 'In which case, a program is expected to recover? ');

-- --------------------------------------------------------

--
-- Структура таблицы `test_java_variant`
--

CREATE TABLE IF NOT EXISTS `test_java_variant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomer_variant` int(11) NOT NULL,
  `variant` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `test_java_variant`
--

INSERT INTO `test_java_variant` (`id`, `nomer_variant`, `variant`) VALUES
(3, 1, ''),
(4, 2, ''),
(5, 3, ''),
(6, 4, '');

-- --------------------------------------------------------

--
-- Структура таблицы `test_result`
--

CREATE TABLE IF NOT EXISTS `test_result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `timedate` date NOT NULL,
  `timetest` varchar(255) NOT NULL,
  `part` text NOT NULL,
  `module` text NOT NULL,
  `result` text NOT NULL,
  `correct` int(11) NOT NULL,
  `ball` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- Дамп данных таблицы `test_result`
--

INSERT INTO `test_result` (`id`, `username`, `timedate`, `timetest`, `part`, `module`, `result`, `correct`, `ball`) VALUES
(35, 'martin@live.com', '2018-06-01', '02:02:17', 'html', '1', '<td>A</td><td>A</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>C</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>', 0, '0'),
(36, 'martin@live.com', '2018-06-01', '02:04:04', 'html', '2', '<td></td><td>A</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>D</td>', 0, '0'),
(37, 'martin@live.com', '2018-06-01', '02:04:28', 'java', '4', '<td>A</td><td></td><td>B</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>A</td><td></td><td></td><td></td><td></td><td></td><td></td><td>C</td><td></td>', 1, '4'),
(38, 'martin@live.com', '2018-06-01', '02:04:53', 'java', '2', '<td>A</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>B</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>B</td>', 1, '4'),
(39, 'martin@live.com', '2018-06-01', '02:05:11', 'java', '3', '<td></td><td></td><td>C</td><td></td><td></td><td></td><td></td><td></td><td></td><td>C</td><td></td><td></td><td></td><td></td><td></td><td>D</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>D</td>', 1, '4'),
(43, 'admin@mail.ru', '2018-06-02', '18:22:09', 'cdb', '2', '<td>A</td><td></td><td></td><td>A</td><td></td><td>C</td><td></td><td>D</td><td></td><td></td><td></td><td>B</td><td></td><td></td><td>D</td>', 0, '0');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`) VALUES
(8, 'Kevin', 'Sistrow', 'kevin@live.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(9, 'Tom', 'Holand', 'tom@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(10, 'admin', 'admin', 'admin@mail.ru', '21232f297a57a5a743894a0e4a801fc3'),
(12, 'Martin', 'Melman', 'martin@live.com', '925d7518fc597af0e43f5606f9a51512');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
