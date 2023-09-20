-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-09-2023 a las 06:37:01
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mundialqatar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `cod_equipo` int(11) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `grupo` varchar(100) NOT NULL,
  `cant_copas` int(11) NOT NULL,
  `logro` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Se contiene los equipos participantes en el mundial';

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`cod_equipo`, `pais`, `grupo`, `cant_copas`, `logro`) VALUES
(1, 'Qatar', 'A', 0, 'Clasificado directamente por ser país anfitrión'),
(2, 'Ecuador', 'A', 0, 'Ha participado en 4 mundiales (2002, 2006, 2014, 2022).'),
(3, 'Senegal', 'A', 0, 'Tres participaciones en mundiales (2002 llegando a Octavos de final, 2018 y 2022).'),
(4, 'Países Bajos', 'A', 0, 'Ha participado en doce ediciones de la Copa Mundial de Fútbol, donde ha sido subcampeona en tres ediciones de la competición: 1974, 1978 y 2010; y además fue semifinalista en otras dos ediciones: 1998 y 2014.'),
(5, 'Inglaterra', 'B', 1, 'Entre sus mejores actuaciones destaca un título de la Copa Mundial de Fútbol, en la edición en la que fueron locales, en 1966, también quedó en cuarto lugar en 1990 y 2018, además ocupa el tercer lugar en la Copa del Mundo detrás de Brasil y Alemania en cuanto a presencia en cuartos de final (11 veces en 15 apariciones).'),
(6, 'IR Irán', 'B', 0, 'Alcanzó la fase final de la Copa Mundial en cinco ediciones.'),
(7, 'Estados Unidos', 'B', 0, ' En la Copa Mundial de Fútbol de 2002, llegó a los cuartos de final, siendo su segunda mejor actuación en los mundiales. Ha jugado 7 ediciones consecutivas en los mundiales de fútbol, de 1990 a 2014.'),
(8, 'Gales', 'B', 0, 'Consiguió clasificarse para el Mundial de Catar 2022 después de 64 años de no acudir a una cita mundialista.'),
(9, 'Argentina', 'C', 2, 'Bicampeón del mundo: 1978 y 1986.'),
(10, 'Saudi Arabia', 'C', 0, '6 participaciones mundialistas con una destacada en 1994 llegando a octavos de final.'),
(11, 'México', 'C', 0, 'Ha llegado dos veces a cuartos de final: 1970; 1986, y 7 veces a octavos de final: 1994; 1998; 2002; 2006; 2010; 2014; 2022.'),
(12, 'Polonia', 'C', 0, 'Tercer puesto en el mundial de 1974 y de 1982.'),
(13, 'Francia', 'D', 2, 'Actual campeona del mundo(2018), y campeona en 1998.'),
(14, 'Australia', 'D', 0, '6 participaciones en mundiales con mejor resultado en 2006 llegando a octavos de final.'),
(15, 'Dinamarca', 'D', 0, '6 participaciones en mundiales con mejor resultado en 1998 llegando a cuartos de final.'),
(16, 'Túnez', 'D', 0, '6 participaciones en mundiales.'),
(17, 'España', 'E', 1, '16 participaciones mundialistas quedando como campeona en 2010.'),
(18, 'Costa Rica', 'E', 0, 'Su mejor participación fue en el mundial de 2014 donde alcanzó los cuartos de final y finalizando el torneo de forma invicta.'),
(19, 'Alemania', 'E', 4, 'Ha sido ganadora en cuatro ocasiones de la Copa del Mundo: 1954, 1974, 1990, 2014. '),
(20, 'Japón', 'E', 0, 'Ha llegado en 3 ocasiones a Octavos de final: 2002, 2010, 2018.'),
(21, 'Bélgica', 'F', 0, 'Ha participado en un total de trece Copas Mundiales, alcanzando su mejor resultado con el tercer puesto obtenido en 2018.'),
(22, 'Canadá', 'F', 0, 'Dos clasificaciones a mundiales: 1986, 2022.'),
(23, 'Marruecos', 'F', 0, 'La selección ha participado en 6 mundiales de fútbol (1970, 1986, 1994, 1998, 2018 y 2022). Se destaca su participación en el Mundial de México 86, en el que logró ser el primer país del mundo árabe y de África en ganar un partido en un Mundial de Fútbol.'),
(24, 'Croacia', 'F', 0, 'Cuenta con un tercer puesto logrado en el Mundial de Francia 98, firmando una gran actuación en su estreno en la gran cita mundialista. Y el subcampeonato conseguido en el Mundial de Rusia 2018.'),
(25, 'Brasil', 'G', 5, 'Es la selección con mayor cantidad de Mundiales ganados: 1958, 1962, 1970, 1994, 2002.'),
(26, 'Serbia', 'G', 0, 'Cuarto lugar en dos ocasiones: 1930 y 1962.'),
(27, 'Suiza', 'G', 0, 'Han llegado a cuartos de final en 3 ocasiones: 1934, 1938, 1954.'),
(28, 'Camerún', 'G', 0, 'Ha logrado clasificarse ocho veces a la Copa Mundial de Fútbol siendo la selección africana que más veces ha asistido al Mundial.'),
(29, 'Portugal', 'H', 0, 'Tercer lugar en el Mundial de 1966.'),
(30, 'Ghana', 'H', 0, 'Logró llegar a Cuartos de final en el Mundial de 2010.'),
(31, 'Uruguay', 'H', 2, 'Hasta la fecha ha logrado clasificarse a 14 ediciones de la Copa del Mundo, siendo después de Argentina y Brasil la que más veces ha ido al mundial en Sudamérica. Ganadora en dos ocasiones de la Copa del Mundo: 1930 y 1950.'),
(32, 'Corea del Sur', 'H', 0, 'El mayor logro de su historia ha sido llegar hasta semifinales en la Copa Mundial de Fútbol de 2002 en la que participó bajo anfitrión junto con Japón, obteniendo el cuarto lugar.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

CREATE TABLE `jugadores` (
  `cod_jugador` int(11) NOT NULL,
  `cod_equipo` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jugadores`
--

INSERT INTO `jugadores` (`cod_jugador`, `cod_equipo`, `nombre`, `apellido`) VALUES
(1, 1, 'Saad', 'Al Sheeb'),
(2, 1, 'Pedro\r\n', 'Miguel'),
(3, 1, 'Bassam', 'Al Rawi '),
(4, 1, 'Boualem', 'Khoukhi'),
(5, 1, 'Abdelkarim', 'Hassan'),
(6, 1, 'Homam', 'Ahmed'),
(7, 1, 'Hassan', 'Al Haydos'),
(8, 1, 'Karim', 'Boudiaf'),
(9, 1, 'Abdulaziz', 'Hatem'),
(10, 1, 'Almoez', 'Alí'),
(11, 1, 'Akram', 'Afif'),
(12, 2, 'Hernán', 'Galíndez'),
(13, 2, 'Ayrton', 'Preciado'),
(14, 2, 'Felix', 'Torres'),
(15, 2, 'Piero', 'Hincapié'),
(16, 2, 'Pervis', 'Estupiñán'),
(17, 2, 'Gonzalo', 'Plata'),
(18, 2, 'Jhegson', 'Méndez'),
(19, 2, 'Moises', 'Caicedo'),
(20, 2, 'Romario', 'Ibarra'),
(21, 2, 'Michael', 'Estrada'),
(22, 2, 'Enner', 'Valencia'),
(23, 3, 'Édouard', 'Mendy'),
(24, 3, 'Abdou', 'Diallo'),
(25, 3, 'Pape Abou', 'Cissé'),
(26, 3, 'Kalidou', 'Koulibaly'),
(27, 3, 'Youssouf', 'Sabaly'),
(28, 3, 'Cheikhou', 'Kouyaté'),
(29, 3, 'Nampalys', 'Mendy'),
(30, 3, 'Krépin', 'Diatta'),
(31, 3, 'Idrissa', 'Gueye'),
(32, 3, 'Ismaila', 'Sarr'),
(33, 3, 'Boulaye', 'Dia'),
(34, 4, 'Andries', 'Noppert'),
(35, 4, 'Nathan', 'Aké'),
(36, 4, 'Virgil', 'Van Dijk'),
(37, 4, 'Matthijs', 'De Light'),
(38, 4, 'Denzel', 'Dumfries'),
(39, 4, 'Steven', 'Berghuis'),
(40, 4, 'Frenkie', 'De Jong'),
(41, 4, 'Daley', 'Blind'),
(42, 4, 'Cody', 'Gakpo'),
(43, 4, 'Steven', 'Bergwijn'),
(44, 4, 'Memphis', 'Depay'),
(45, 5, 'Jordan', 'Pickford'),
(46, 5, 'Kieran', 'Trippier'),
(47, 5, 'John', 'Stones'),
(48, 5, 'Harry', 'Maguire'),
(49, 5, 'Luke', 'Shaw'),
(50, 5, 'Jude', 'Bellingham'),
(51, 5, 'Declan', 'Rice'),
(52, 5, 'Bukayo', 'Saka'),
(53, 5, 'Mason', 'Mount'),
(54, 5, 'Rahim', 'Sterling'),
(55, 5, 'Harry', 'Kane'),
(56, 6, 'Alireza', 'Beiranvand'),
(57, 6, 'Sadegh', 'Moharrami'),
(58, 6, 'Morteza', 'Pouraliganji'),
(59, 6, 'Rouzbeh', 'Cheshmi'),
(60, 6, 'Majid ', 'Hosseini'),
(61, 6, 'Milad', 'Mohammadi'),
(62, 6, 'Alireza', 'Jahanbakhsh'),
(63, 6, '\r\nAhmad', 'Nourollahi'),
(64, 6, 'Ali', 'Karimi'),
(65, 6, 'Ehsan', 'Hajsafi'),
(66, 6, 'Mehdi', 'Taremi'),
(67, 7, 'Matt ', 'Turner'),
(68, 7, 'Sergiño', 'Dest'),
(69, 7, 'Walker', 'Zimmerman'),
(70, 7, 'Tim', 'Ream'),
(71, 7, 'Antonee', 'Robinson'),
(72, 7, 'Weston', 'McKennie'),
(73, 7, 'Tyler', 'Adams'),
(74, 7, 'Yunus', 'Musah'),
(75, 7, 'Christian', 'Pulisic'),
(76, 7, 'Timothy', 'Weah'),
(77, 7, 'Haji', 'Wright'),
(78, 8, 'Wayne', 'Hennessey'),
(79, 8, 'Chris ', 'Mepham'),
(80, 8, 'Joe', 'Rodon'),
(81, 8, 'Ben', 'Davies'),
(82, 8, 'Connor ', 'Roberts'),
(83, 8, 'Aaron', 'Ramsey'),
(84, 8, 'Ethan', 'Ampadu'),
(85, 8, 'Harry', 'Wilson'),
(86, 8, 'Neco', 'Williams'),
(87, 8, 'Gareth', 'Bale'),
(88, 8, 'Kieffer', 'Moore'),
(89, 9, 'Emiliano', 'Martínez'),
(90, 9, 'Nahuel', 'Molina'),
(91, 9, 'Nicolas', 'Otamendi'),
(92, 9, 'Lisandro', 'Martínez'),
(93, 9, 'Marcos', 'Acuña'),
(94, 9, 'Ángel', 'Di María'),
(95, 9, 'Rodrigo', 'De Paul'),
(96, 9, 'Guido', 'Rodríguez'),
(97, 9, 'Leandro', 'Paredes'),
(98, 9, 'Lautaro', 'Martínez'),
(99, 9, 'Lionel', 'Messi'),
(100, 10, 'Mohammed', 'Al-Owais'),
(101, 10, 'Saud', 'Abdulhamid'),
(102, 10, 'Hassan', 'Tambakti'),
(103, 10, 'Ali', 'Al-Bulaihi'),
(104, 10, 'Yasir', 'Al-Shahrani'),
(105, 10, 'Abdulellah', 'Al-Malki'),
(106, 10, 'Firas', 'Al-Buraikan'),
(107, 10, 'Salman', 'Al-Faraj'),
(108, 10, 'Mohamed', 'Kanno'),
(109, 10, 'Salem', 'Al-Dawsari'),
(110, 10, 'Saleh', 'Al-Shehri'),
(111, 11, 'Guillermo', 'Ochoa'),
(112, 11, 'Kevin', 'Álvarez'),
(113, 11, 'Néstor', 'Araujo'),
(114, 11, 'César', 'Montes'),
(115, 11, 'Héctor', 'Moreno'),
(116, 11, 'Jesús', 'Gallardo'),
(117, 11, 'Luis', 'Chávez'),
(118, 11, 'Héctor', 'Herrera'),
(119, 11, 'Andrés', 'Guardado'),
(120, 11, 'Hirving', 'Lozano'),
(121, 11, 'Alexis', 'Vega'),
(122, 12, 'Wojciech', 'Szczęsny'),
(123, 12, 'Bartosz', 'Bereszyński'),
(124, 12, 'Jakub', 'Kiwior'),
(125, 12, 'Kamil ', 'Glik'),
(126, 12, 'Matty', 'Cash'),
(127, 12, 'Przemysław', 'Frankowski'),
(128, 12, 'Grzegorz', 'Krychowiak'),
(129, 12, 'Krystian', 'Bielik'),
(130, 12, 'Piotr ', 'Zieliński'),
(131, 12, 'Arkadiusz', 'Milik'),
(132, 12, 'Robert', 'Lewandowski'),
(133, 13, 'Hugo', 'Lloris'),
(134, 13, 'Jules', 'Koundé'),
(135, 13, 'Raphaël', 'Varane'),
(136, 13, 'Dayot', 'Upamecano'),
(137, 13, 'Theo', 'Hernández'),
(138, 13, 'Aurélien', 'Tchouaméni'),
(139, 13, 'Adrien', 'Rabiot'),
(140, 13, 'Ousmane', 'Dembélé'),
(141, 13, 'Antoine', 'Griezmann'),
(142, 13, 'Kylian', 'Mbappé'),
(143, 13, 'Olivier', 'Giroud'),
(144, 14, 'Mathew ', 'Ryan'),
(145, 14, 'Fran', 'Karačić'),
(146, 14, 'Harry', 'Souttar'),
(147, 14, 'Kye', 'Rowles'),
(148, 14, 'Aziz', 'Behich'),
(149, 14, 'Mathew', 'Leckie'),
(150, 14, 'Jackson', 'Irvine'),
(151, 14, 'Aaron', 'Mooy'),
(152, 14, 'Craig', 'Goodwin'),
(153, 14, 'Mitchell', 'Duke'),
(154, 14, 'Riley', 'McGree'),
(155, 15, 'Kasper', 'Schmeichel'),
(156, 15, 'Joachim', 'Andersen'),
(157, 15, 'Andreas', 'Christensen'),
(158, 15, 'Victor', 'Nelsson'),
(159, 15, 'Rasmus', 'Kristensen'),
(160, 15, 'Pierre-Emile', 'Højbjerg'),
(161, 15, 'Christian', 'Eriksen'),
(162, 15, 'Joakim', 'Mæhle'),
(163, 15, 'Jesper', 'Lindstrøm'),
(164, 15, 'Mikkel', 'Damsgaard'),
(165, 15, 'Andreas', 'Cornelius'),
(166, 16, 'Aymen', 'Dahmen'),
(167, 16, 'Dylan', 'Bronn'),
(168, 16, 'Yassine', 'Meriah'),
(169, 16, 'Montassar', 'Talbi'),
(170, 16, 'Mohamed', 'Dräger'),
(171, 16, 'Ellyes', 'Skhiri'),
(172, 16, 'Aïssa', 'Laïdouni'),
(173, 16, 'Ali', 'Abdi'),
(174, 16, 'Naïm ', 'Sliti'),
(175, 16, 'Youssef', 'Msakni'),
(176, 16, 'Wahbi', 'Khazri'),
(177, 17, 'Unai', 'Simón'),
(178, 17, 'César', 'Azpilicueta'),
(179, 17, 'Rodrigo ', 'Hernández'),
(180, 17, 'Aymeric', 'Laporte'),
(181, 17, 'Jordi', 'Alba'),
(182, 17, 'Pablo Gavi', 'Páez'),
(183, 17, 'Sergio', 'Busquets'),
(184, 17, 'Pedri', 'González'),
(185, 17, 'Ferrán', 'Torres'),
(186, 17, 'Marco', 'Asensio'),
(187, 17, 'Dani', 'Olmo'),
(188, 18, 'Keylor', 'Navas'),
(189, 18, 'Carlos', 'Martínez'),
(190, 18, 'Óscar', 'Duarte'),
(191, 18, 'Francisco', 'Calvo'),
(192, 18, 'Bryan', 'Oviedo'),
(193, 18, 'Keysher', 'Fuller'),
(194, 18, 'Celso', 'Borges'),
(195, 18, 'Yeltsin', 'Tejeda'),
(196, 18, 'Jewison', 'Bennette'),
(197, 18, 'Joel', 'Campbell'),
(198, 18, 'Anthony', 'Contreras'),
(199, 19, 'Manuel', 'Neuer'),
(200, 19, 'Niklas', 'Süle'),
(201, 19, 'Antonio', 'Rüdiger'),
(202, 19, 'Nico', 'Schlotterbeck'),
(203, 19, 'David', 'Raum'),
(204, 19, 'Joshua', 'Kimmich'),
(205, 19, 'İlkay', 'Gündoğan'),
(206, 19, 'Serge', 'Gnabry'),
(207, 19, 'Thomas', 'Müller'),
(208, 19, 'Jamal', 'Musiala'),
(209, 19, 'Kai', 'Havertz'),
(210, 20, 'Shūichi', 'Gonda'),
(211, 20, 'Yūto', 'Nagatomo'),
(212, 20, 'Maya', 'Yoshida'),
(213, 20, 'Ko', 'Itakura'),
(214, 20, 'Hiroki ', 'Sakai'),
(215, 20, 'Wataru', 'Endō'),
(216, 20, 'Ao', 'Tanaka'),
(217, 20, 'Junya', 'Ito'),
(218, 20, 'Daichi', 'Kamada'),
(219, 20, 'Takefusa', 'Kubo'),
(220, 20, 'Daizen', 'Maeda'),
(221, 21, 'Thibaut', 'Courtois'),
(222, 21, 'Leander', 'Dendoncker'),
(223, 21, 'Toby', 'Alderweireld'),
(224, 21, 'Jan', 'Vertonghen'),
(225, 21, 'Timothy', 'Castagne'),
(226, 21, 'Youri', 'Tielemans'),
(227, 21, 'Axel', 'Witsel'),
(228, 21, 'Yannick', 'Carrasco'),
(229, 21, 'Kevin', 'De Bruyne'),
(230, 21, 'Eden', 'Hazard'),
(231, 21, 'Michy', 'Batshuayi'),
(232, 22, 'Milan', 'Borjan'),
(233, 22, 'Alistair', 'Johnston'),
(234, 22, 'Steven', 'Vitória'),
(235, 22, 'Kamal', 'Miller'),
(236, 22, 'Richie', 'Laryea'),
(237, 22, 'Atiba', 'Hutchinson'),
(238, 22, 'Stephen', 'Eustáquio'),
(239, 22, 'Alphonso', 'Davies'),
(240, 22, 'Tajon', 'Buchanan'),
(241, 22, 'Junior', 'Hoilett'),
(242, 22, 'Jonathan', 'David'),
(243, 23, 'Yassine', 'Bounou'),
(244, 23, 'Achraf', 'Hakimi'),
(245, 23, 'Nayef', 'Aguerd'),
(246, 23, 'Romain', 'Saïss'),
(247, 23, 'Noussair', 'Mazraoui'),
(248, 23, 'Azzedine', 'Ounahi'),
(249, 23, 'Sofyan', 'Amrabat'),
(250, 23, 'Selim', 'Amallah'),
(251, 23, 'Hakim', 'Ziyech'),
(252, 23, 'Sofiane', 'Boufal'),
(253, 23, 'Youssef', 'En-Nesyri'),
(254, 24, 'Dominik', 'Livaković'),
(255, 24, 'Josip', 'Juranović'),
(256, 24, 'Dejan', 'Lovren'),
(257, 24, 'Joško', 'Gvardiol'),
(258, 24, 'Borna', 'Sosa'),
(259, 24, 'Luka', 'Modrić'),
(260, 24, 'Marcelo', 'Brozović'),
(261, 24, 'Mateo', 'Kovačić'),
(262, 24, 'Nikola', 'Vlašić'),
(263, 24, 'Ivan', 'Perišić'),
(264, 24, 'Andrej', 'Kramarić'),
(265, 25, 'Alisson', 'Becker'),
(266, 25, 'Danilo', 'da Silva'),
(267, 25, 'Marcos (Marquinhos)', 'Aoás Corrêa'),
(268, 25, 'Thiago', 'Silva'),
(269, 25, 'Alex', 'Sandro'),
(270, 25, 'Lucas', 'Paquetá'),
(271, 25, 'Carlos Henrique ', 'Casemiro'),
(272, 25, 'Raphael Raphinha', 'Dias'),
(273, 25, 'Neymar', 'da Silva Santos Júnior'),
(274, 25, 'Vinícius José ', 'Paixaõ de Oliveira Junior'),
(275, 25, 'Richarlison', 'de Andrade'),
(276, 26, 'Vanja', 'Milinković-Savić'),
(277, 26, 'Nikola', 'Milenković'),
(278, 26, 'Miloš ', 'Veljković'),
(279, 26, 'Strahinja', 'Pavlović'),
(280, 26, 'Andrija', 'Živković'),
(281, 26, 'Saša', 'Lukić'),
(282, 26, 'Nemanja', 'Gudelj'),
(283, 26, 'Filip', 'Mladenović'),
(284, 26, 'Dušan', 'Tadić'),
(285, 26, 'Sergej', 'Milinković-Savić'),
(286, 26, 'Aleksandar', 'Mitrović'),
(287, 27, 'Yann', 'Sommer'),
(288, 27, 'Silvan', 'Widmer'),
(289, 27, 'Manuel', 'Akanji'),
(290, 27, 'Nico', 'Elvedi'),
(291, 27, 'Ricardo', 'Rodríguez'),
(292, 27, 'Remo', 'Freuler'),
(293, 27, 'Granit', 'Xhaka'),
(294, 27, 'Xherdan', 'Shaqiri'),
(295, 27, 'Djibril', 'Sow'),
(296, 27, 'Ruben', 'Vargas'),
(297, 27, 'Breel', 'Embolo'),
(298, 28, 'André', 'Onana'),
(299, 28, 'Collins', 'Fai'),
(300, 28, 'Jean-Charles', 'Castelletto'),
(301, 28, 'Nicolas', 'N\'Koulou'),
(302, 28, 'Nouhou', 'Tolo'),
(303, 28, 'André', 'Zambo Anguissa'),
(304, 28, 'Samuel', 'Gouet'),
(305, 28, 'Martin', 'Hongla'),
(306, 28, 'Bryan', 'Mbeumo'),
(307, 28, 'Karl Toko', 'Ekambi'),
(308, 28, 'Eric Maxim', 'Choupo-Moting'),
(309, 29, 'Diogo ', 'Costa'),
(310, 29, 'João ', 'Cancelo'),
(311, 29, 'Rúben ', 'Dias'),
(312, 29, 'Danilo', 'Pereira'),
(313, 29, 'Raphaël ', 'Guerreiro'),
(314, 29, 'Bernardo', 'Silva'),
(315, 29, 'Rúben ', 'Neves'),
(316, 29, 'Otávio', 'da Silva'),
(317, 29, 'Bruno', 'Fernandes'),
(318, 29, 'João ', 'Félix'),
(319, 29, 'Cristiano Ronaldo', 'Dos Santos Aveiro'),
(320, 30, 'Lawrence', 'Ati-Zigi'),
(321, 30, 'Baba', 'Rahman'),
(322, 30, 'Mohamed Salisu', 'Abdul Karim'),
(323, 30, 'Alexander', 'Djiku'),
(324, 30, 'Daniel', 'Amartey'),
(325, 30, 'Alidu', 'Seidu'),
(326, 30, 'Thomas ', 'Partey'),
(327, 30, 'Salis', 'Abdul Samed'),
(328, 30, 'Mohammed', 'Kudus'),
(329, 30, 'André ', 'Ayew'),
(330, 30, 'Iñaki ', 'Williams'),
(331, 31, 'Sergio ', 'Rochet'),
(332, 31, 'Martín', 'Cáceres'),
(333, 31, 'Diego ', 'Godín'),
(334, 31, 'José María', 'Giménez'),
(335, 31, 'Mathías', 'Olivera'),
(336, 31, 'Federico ', 'Valverde'),
(337, 31, 'Rodrigo ', 'Bentancur'),
(338, 31, 'Matías ', 'Vecino'),
(339, 31, 'Facundo ', 'Pellistri'),
(340, 31, 'Darwin', 'Núñez'),
(341, 31, 'Luis', 'Suárez'),
(342, 32, 'Kim', 'Seung-Gyu'),
(343, 32, 'Kim', 'Moon-hwan'),
(344, 32, 'Kim', 'Min-jae'),
(345, 32, 'Kim', 'Young-Gwon'),
(346, 32, 'Jin-Su', 'Kim'),
(347, 32, 'Hwang', 'In-beom'),
(348, 32, 'Jung', 'Woo-young'),
(349, 32, 'Sang-ho', 'Na'),
(350, 32, 'Jae-sung', 'Lee'),
(351, 32, 'Heung-Min', 'Son'),
(352, 32, 'Hwang', 'Ui-jo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_posiciones`
--

CREATE TABLE `tabla_posiciones` (
  `cod_equipo` int(11) NOT NULL,
  `puntos` int(11) NOT NULL,
  `JJ` int(11) NOT NULL,
  `JG` int(11) NOT NULL,
  `JE` int(11) NOT NULL,
  `JP` int(11) NOT NULL,
  `GA` int(11) NOT NULL,
  `GC` int(11) NOT NULL,
  `GD` int(11) NOT NULL,
  `cod_grupo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `cod_usuario` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `contraseña` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `favorito` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Contiene los usuarios del sitio web';

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`cod_equipo`),
  ADD UNIQUE KEY `pais` (`pais`),
  ADD KEY `grupo` (`grupo`);

--
-- Indices de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`cod_jugador`),
  ADD KEY `cod_equipo` (`cod_equipo`);

--
-- Indices de la tabla `tabla_posiciones`
--
ALTER TABLE `tabla_posiciones`
  ADD PRIMARY KEY (`cod_grupo`),
  ADD KEY `cod_equipo` (`cod_equipo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `cod_equipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  MODIFY `cod_jugador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=353;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `cod_usuario` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
