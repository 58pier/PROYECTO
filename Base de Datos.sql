-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-08-2020 a las 08:39:26
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `boletas`
--

CREATE TABLE `boletas` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `nombres` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `dni` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `juego` varchar(255) NOT NULL,
  `importe` smallint(5) UNSIGNED NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `boletas`
--

INSERT INTO `boletas` (`id`, `nombres`, `apellidos`, `direccion`, `dni`, `correo`, `juego`, `importe`, `fecha`) VALUES
(1, 'John', 'Doe', 'Free Trade Zone, Lima, Lima', 'KN8EBA63DPUEJ', 'sb-h06mm2892436@personal.example.com', 'Mario Kart 8 Deluxe', 239, '2020-08-16 02:00:00'),
(2, 'John', 'Doe', 'Free Trade Zone, Lima, Lima', 'KN8EBA63DPUEJ', 'sb-h06mm2892436@personal.example.com', 'Fall Guys: Ultimate Knockout', 37, '2020-08-24 15:23:53'),
(3, 'John', 'Doe', 'Free Trade Zone, Lima, Lima', 'KN8EBA63DPUEJ', 'sb-h06mm2892436@personal.example.com', 'Fall Guys: Ultimate Knockout', 37, '2020-08-24 15:23:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Accion', 'Accion'),
(2, 'Aventura', ' Aventura'),
(3, 'Deporte', ' Deporte'),
(4, 'Casual', 'Casual'),
(5, 'Indie', ' Indie');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `digitalkey`
--

CREATE TABLE `digitalkey` (
  `idjuego` smallint(5) UNSIGNED NOT NULL,
  `digitalkey` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `digitalkey`
--

INSERT INTO `digitalkey` (`idjuego`, `digitalkey`) VALUES
(7, '06Ve-3OGp-HWN4-QhqJ'),
(8, '0aRu-Ct9S-1Pyf-IURX'),
(21, '0QYZ-HJPn-68bS-OhNo'),
(18, '28a8-srAB-3ezy-Ojzp'),
(11, '29SS-2sHe-4Tcd-Ci5B'),
(9, '3eWL-wM5B-jBXN-GSwL'),
(2, '41pV-TJPc-sWVF-MqdF'),
(1, '4qtt-X0EP-WMfx-ZPfm'),
(3, '4upm-Awq2-OwEz-9r66'),
(2, '80pu-l6Qs-z5xf-SnZR'),
(4, '8lDF-vrtO-3QIZ-bVRp'),
(5, '8Rpx-cQOd-EtwG-sp9N'),
(21, '9Pap-a4ir-qiJx-UcKF'),
(22, 'aj9L-OLOq-Svy3-dHA8'),
(18, 'aMsG-sPfM-8mwd-jxTg'),
(12, 'aQb6-SY1P-62wB-H0gA'),
(12, 'Bdsa-Jtrd-zpHd-mLuf'),
(21, 'BFaP-204d-eleT-ASSC'),
(24, 'bGzg-TNMB-aqAe-g8N4'),
(7, 'CScP-4IDR-Tjbm-NM30'),
(8, 'd1bv-JRIV-0B0s-RBEL'),
(1, 'dao1-OHMK-qt4B-YaDp'),
(8, 'DEZZ-ZXOf-2FJO-GXPq'),
(20, 'DHgz-pUD9-FZjt-pRWV'),
(7, 'dJ26-eBDx-kaHx-2STL'),
(18, 'dK4D-C8wY-QN2K-USaE'),
(11, 'DOix-bcme-JZLF-Nbfj'),
(7, 'DOrt-Hp5C-iAwv-8BvN'),
(19, 'DwuK-GBFG-NoIu-t0UP'),
(13, 'DYuq-N0WH-BWP6-WrMl'),
(17, 'EdZf-VwAa-ZOfo-eHJC'),
(12, 'EJCj-qrMx-tB1A-Ezkq'),
(4, 'eUIz-EsPZ-06k8-FOHK'),
(21, 'fcET-Ukwx-2wQl-4TeG'),
(10, 'FOda-rmWm-oH4m-QeqA'),
(10, 'Fwhe-2TJI-JFR2-pV6y'),
(11, 'FWZ1-43dn-X9hA-1w95'),
(24, 'GgLJ-o5hm-g0dS-Bg72'),
(3, 'GPhe-PkW3-Hheo-J8lZ'),
(15, 'HIPr-R1Jl-dKde-ZCb3'),
(23, 'HprE-MA5O-ZOqU-CwCC'),
(23, 'hWwW-Zd5B-AxF6-DA71'),
(13, 'hzHT-M1ZA-Hln3-K656'),
(1, 'iAkO-7GS5-lwEJ-jxxd'),
(16, 'Irn5-tU0u-BB8V-sTLM'),
(6, 'iz6I-S75i-76KN-oFxc'),
(20, 'j1CM-OKiS-BiBe-LGR7'),
(13, 'J2WN-muOv-6X25-HPfe'),
(22, 'J5FW-TvFb-SeqU-VhZt'),
(4, 'Jb4p-HH3M-QyuE-XIjE'),
(19, 'JfP0-bs5Y-tFL6-J5rH'),
(22, 'JKyG-6WoE-HIdV-KOTF'),
(15, 'K6li-C3Hg-zGx9-uh3M'),
(6, 'KcuY-sGlm-yvf8-RXuE'),
(10, 'kIoJ-nCcT-tOqh-RZpM'),
(5, 'KkRm-lFra-eaUx-YEOg'),
(24, 'KwDA-x005-nHq7-QF9A'),
(11, 'KxD5-V4SP-2pHG-5rPS'),
(16, 'l496-kiNK-P2dU-Qdsa'),
(10, 'L4So-RPav-wb4v-iNVJ'),
(1, 'L6l5-ZxJh-au9b-aLiG'),
(2, 'loN3-JJJA-BN69-545a'),
(10, 'Ltue-zJh5-MP6I-ZXgA'),
(15, 'LvCP-sDim-L3qM-pGWv'),
(8, 'lXm1-6fkC-Hz6C-dJMd'),
(16, 'M6Eh-wCyP-cQ9f-rWyi'),
(18, 'mEMl-8L02-jcjF-So4c'),
(20, 'MFLc-8MqJ-EhvI-o4Rz'),
(14, 'mhpk-tJvv-R2Vm-Ltd8'),
(17, 'mL5R-RjXj-66RS-F8P1'),
(12, 'MrU2-tnEL-Ulr7-vEix'),
(9, 'mTwq-8Ows-3z5F-btP2'),
(13, 'myb5-H68m-x63y-uBOY'),
(20, 'Nda0-dvzC-bdt4-MAEi'),
(4, 'NJXU-QzWG-FvIi-RAHC'),
(6, 'NPnC-WgRQ-d5Vw-RTgJ'),
(6, 'nrKo-22Pa-w7BO-0wOy'),
(13, 'NTSI-AIdA-sP4J-ZSZf'),
(15, 'nu7e-04WT-cxnB-WyIv'),
(9, 'nzLC-McEN-Btl5-JxP7'),
(14, 'OD4y-Iu0X-ebwD-JT89'),
(17, 'OEfg-F37Y-6kFp-2PM3'),
(17, 'OgDV-H85s-6U2K-K4rf'),
(14, 'onut-UZnE-gGxs-W1bp'),
(14, 'PeFh-yNg8-jLeU-NgW6'),
(20, 'piSM-5rbg-HBpX-lYFA'),
(5, 'pr8z-18mT-qtFn-fMD1'),
(22, 'pTXh-llpT-uffr-S5Y7'),
(24, 'px5N-DWjJ-qIGJ-UMwb'),
(19, 'PyaA-29Xm-ZlGH-zd18'),
(2, 'PYAt-zRbi-NYab-08ry'),
(9, 'qVee-JaWX-i7WO-Pebh'),
(3, 'rAQN-ptwI-MdzE-uH3H'),
(19, 'RB4f-vraC-0OXu-zCQr'),
(3, 'rfLn-SbJr-NZXz-Oagr'),
(24, 'rjAs-BPBc-8ASw-y07G'),
(11, 'RKvd-b0jK-mqMA-T5ZY'),
(7, 'rS9P-szrp-86yc-s3JI'),
(22, 'ScWo-GkcY-CWpH-v6LO'),
(5, 't2Wa-8KAi-xbGB-wSmJ'),
(16, 'T3f3-9FZh-ytbd-7Mzi'),
(18, 'TG5z-pFhT-eP60-iTjN'),
(1, 'U6f3-k1Kh-5le5-jmUD'),
(9, 'UEBD-U4Uu-3JsX-n0Qy'),
(5, 'uIi9-6sPC-eofd-Arqg'),
(16, 'UtZr-1Dgm-fhoc-3YTJ'),
(23, 'vao9-K7aW-SjX5-Eb6m'),
(2, 'VdwZ-yOcZ-uSFy-lXUq'),
(19, 'vfZX-ravd-X2hn-RZZP'),
(15, 'vLcn-qXV8-7bJr-bbnv'),
(17, 'vohr-SK1W-TE4r-oMXC'),
(6, 'VP0h-K7No-pP3y-nN2U'),
(21, 'WWdX-61kC-Igz4-KP50'),
(23, 'Wy1J-8Qr2-VNSq-fxru'),
(8, 'WzqH-iOBq-B5xr-3NuL'),
(14, 'XSF0-ZcOL-IG69-8QGy'),
(3, 'XVz1-2EJk-9oFi-HUvf'),
(12, 'xWBs-vduB-uZHh-jGew'),
(4, 'z99U-C3P4-xaqg-yVli'),
(23, 'zR7q-Twxa-Ainl-SKut');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `idiomas` text NOT NULL,
  `precio` smallint(5) UNSIGNED NOT NULL,
  `desarrollador` varchar(255) NOT NULL,
  `plataforma` text NOT NULL,
  `clasificacion` mediumtext NOT NULL,
  `resumen` text NOT NULL,
  `requerimientos` text NOT NULL,
  `pagina_web` mediumtext NOT NULL,
  `derechos_autor` text NOT NULL,
  `trailer` text NOT NULL,
  `descripcion` text NOT NULL,
  `categoriaId` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`id`, `nombre`, `fecha`, `idiomas`, `precio`, `desarrollador`, `plataforma`, `clasificacion`, `resumen`, `requerimientos`, `pagina_web`, `derechos_autor`, `trailer`, `descripcion`, `categoriaId`) VALUES
(1, 'Grand Theft Auto V', '2019-09-08', 'español,ingles,frances,ruso', 100, 'Rockstar Games', 'PS(3,4,5),Xbox(One,360),PC', 'MATURE 17+', 'Grand Theft Auto V para PC ofrece a los jugadores la opción de explorar el galardonado mundo de Los Santos y el condado de Blaine en resoluciones de hasta 4k y más, así como la oportunidad de experimentar el juego corriendo a 60 cuadros por segundo.', 'Intel Core i5 3470,Windows,4GB,NVIDIA 9800', 'https://www.rockstargames.com/V/es', '©2008 - 2015 Rockstar Games, Inc. Rockstar Games, Rockstar North, Grand Theft Auto, the GTA Five, and the Rockstar Games R* marks and logos are trademarks and/or registered trademarks of Take-Two Interactive Software, Inc. in the U.S.A. and/or foreign countries. Dolby and the double-D symbols are trademarks of Dolby Laboratories. Uses Bink Video. Copyright © 1997-2012 by RAD Game Tools, Inc. euphoria motion synthesis technology provided by NaturalMotion. euphoria code is (c) NaturalMotion 2008. \"NaturalMotion\", \"euphoria\" and the NaturalMotion and euphoria logos are trademarks of NaturalMotion. Used under license. This software product includes Autodesk® Scaleform® software, © 2013 Autodesk, Inc. All rights reserved The ratings icon is a trademark of the Entertainment Software Association. All other marks and trademarks are properties of their respective owners. All rights reserved.  Software license terms in game and www.rockstargames.com/eula; online account terms at www.rockstargames.com/socialclub  Violation of EULA, Code of Conduct, or other policies may result in restriction or termination of access to game or online account. Player data transfer subject to certain limits and requirements, see www.rockstargames.com/gtaonline/charactertransfer for details. For customer& technical support visit www.rockstargames.com/support  Non-transferable access to special features such as exclusive/unlockable/downloadable/online content/services/functions, such as multiplayer services or bonus content, may require single-use serial code, additional fee, and/or online account registration (13+). Access to special features may require internet connection, may not be available to all users, and may, upon 30 days notice, be terminated, modified, or offered under different terms. Unauthorized copying, reverse engineering, transmission, public performance, rental, pay for play, or circumvention of copy protection is strictly prohibited.  The content of this video game is purely fictional, is not intended to represent or depict any actual event, person, or entity, and any such similarities are purely coincidental. The makers and publishers of this video game do not in any way endorse, condone or encourage engaging in any conduct depicted in this video game.  Rockstar Games, 622 Broadway, New York, NY, 10012 T2 Take Two Interactive  For information about online services, fees, restrictions, or software license terms that may apply to this game, please visit www.rockstargames.com', 'accion/GTA.jpg,accion/GTAVgp1.jpg,accion/GTAVgp2.jpg,accion/GTAV.jpg,https://www.youtube.com/embed/QkkoHAzjnUs', 'Cuando un joven estafador callejero, un ladrón de bancos retirado y un psicópata aterrador se encuentran enredados con algunos de los elementos más aterradores y trastornados del inframundo criminal, el gobierno de los EE. UU. Y la industria del entretenimiento, deben realizar una serie de atracos peligrosos para sobrevivir. en una ciudad despiadada en la que no pueden confiar en nadie, y menos aún en todos.\r\n\r\nGrand Theft Auto V para PC ofrece a los jugadores la opción de explorar el galardonado mundo de Los Santos y el condado de Blaine en resoluciones de hasta 4k y más, así como la oportunidad de experimentar el juego corriendo a 60 cuadros por segundo.\r\n\r\nEl juego ofrece a los jugadores una amplia gama de opciones de personalización específicas para PC, que incluyen más de 25 configuraciones configurables separadas para calidad de textura, sombreadores, mosaico, suavizado y más, así como soporte y amplia personalización para controles de mouse y teclado. Las opciones adicionales incluyen un control deslizante de densidad de población para controlar el tráfico de automóviles y peatones, así como compatibilidad con monitores dobles y triples, compatibilidad 3D y compatibilidad con controladores plug-and-play.\r\n\r\nGrand Theft Auto V para PC también incluye Grand Theft Auto Online, con soporte para 30 jugadores y dos espectadores. Grand Theft Auto Online para PC incluirá todas las actualizaciones de juego existentes y el contenido creado por Rockstar lanzado desde el lanzamiento de Grand Theft Auto Online, incluidos los modos Heists y Adversary.\r\n\r\nLa versión para PC de Grand Theft Auto V y Grand Theft Auto Online presenta el modo en primera persona, que brinda a los jugadores la oportunidad de explorar el mundo increíblemente detallado de Los Santos y el condado de Blaine de una manera completamente nueva.\r\n\r\nGrand Theft Auto V para PC también trae el debut de Rockstar Editor, un poderoso conjunto de herramientas creativas para capturar, editar y compartir de manera rápida y fácil imágenes de juegos desde Grand Theft Auto V y Grand Theft Auto Online. El modo Director del Editor de Rockstar permite a los jugadores la posibilidad de escenificar sus propias escenas utilizando personajes de la historia prominentes, peatones e incluso animales para dar vida a su visión. Junto con la manipulación avanzada de la cámara y los efectos de edición que incluyen cámara rápida y lenta, y una variedad de filtros de cámara, los jugadores pueden agregar su propia música usando canciones de las estaciones de radio GTAV, o controlar dinámicamente la intensidad de la puntuación del juego. Los videos completos se pueden cargar directamente desde el Editor de Rockstar a YouTube y al Club Social de Rockstar Games para compartirlos fácilmente.\r\n\r\nLos artistas de la banda sonora The Alchemist y Oh No regresan como presentadores de la nueva estación de radio, The Lab FM. La estación presenta música nueva y exclusiva del dúo de producción basada e inspirada en la banda sonora original del juego. Los artistas invitados colaboradores incluyen Earl Sweatshirt, Freddie Gibbs, Little Dragon, Killer Mike, Sam Herring de Future Islands y más. Los jugadores también pueden descubrir Los Santos y el condado de Blaine mientras disfrutan de su propia música a través de Self Radio, una nueva estación de radio que albergará bandas sonoras personalizadas creadas por los jugadores.', 1),
(2, 'Assassin\'s Creed® IV', '2013-11-14', 'español,ingles,frances,ruso', 100, 'Ubisoft Montreal', 'PS(3,4),Xbox(360,One),PC', 'MATURE 17+', 'El año es 1715. Los piratas gobiernan el Caribe y han establecido su propia República sin ley donde la corrupción, la codicia y la crueldad son comunes. Entre estos forajidos se encuentra un joven y descarado capitán llamado Edward Kenway.', ' Intel Core2Quad Q8400,Windows,4GB,Nvidia Geforce GTX 260', 'https://www.ubisoft.com/es-es/game/assassins-creed-4-black-flag/', '© 2013 Ubisoft Entertainment. Todos los derechos reservados. Assassin\'s Creed, Black Flag y Ubisoft, y el logotipo de Ubisoft son marcas comerciales de Ubisoft Entertainment en Estados Unidos y/o en otros países.', 'accion/AssasinCreed.jpg,accion/AssasinCreedgp1.jpg,accion/AssasinCreedgp2.jpg,accion/AssasinCreedico.jpg,https://www.youtube.com/embed/OwVe4ZNeQZk', 'El año es 1715. Los piratas gobiernan el Caribe y han establecido su propia República sin ley donde la corrupción, la codicia y la crueldad son comunes.\r\nEntre estos forajidos se encuentra un joven y descarado capitán llamado Edward Kenway.\r\nSu lucha por la gloria le ha ganado el respeto de leyendas como Barbanegra, pero también lo atrajo a la antigua guerra entre Asesinos y Templarios, una guerra que puede destruir todo lo que los piratas han construido.\r\nBienvenidos a la Edad de Oro de la\r\nPiratería.', 1),
(3, ' C.O.D:Black Ops III', '2015-10-31', 'español,ingles,frances,ruso', 200, 'Treyarch', 'PS(ALL),Xbox(360,ONE),PC,WiiU,Nintendo', 'MATURE 17+', 'Call of Duty® Black Ops III: Zombies Chronicles Edition incluye el juego original completo y la expansión de contenido Zombies Chronicles.', 'Intel® Core™ i3-530+,Windows,MacOS X,6GB', 'https://www.callofduty.com/es/blackops3', '© 2008-2017 Activision Publishing, Inc. ACTIVISION, CALL OF DUTY, CALL OF DUTY BLACK OPS, and stylized roman numerals II and III are trademarks of Activision Publishing, Inc.DLC content in the Season Pass may be sold separately. All Season Pass content has been released. If you purchase the Season Pass, do not also purchase the standalone map packs, as you will be charged for them. Season Pass and DLC content may not be available in all territories. Pricing may vary by platform.', 'accion/CallOfDutty.jpg,accion/CallOfDuttygp1.jpg,accion/CallOfDuttygp2.jpg,accion/CallOfDuttyico.jpg, https://www.youtube.com/embed/cUeA0SNWEB4', 'Call of Duty: Black Ops III combina tres modos de juego únicos: campaña, multijugador y Zombis para proporcionar a los fans la experiencia Call of Duty más profunda y ambiciosa hasta la fecha.\r\nLa expansión de contenido Zombies Chronicles incluye 8 mapas clásicos de Zombis remasterizados de Call of Duty®: World at War, Call of Duty®: Black Ops y Call of Duty®: Black Ops II. Mapas completos de la saga original totalmente remasterizados en alta definición para jugar en Call of Duty®: Black Ops III.', 1),
(4, 'DOOM Eternal', '2020-03-16', 'español,ingles,frances,ruso', 233, 'TORUS GAMES', 'Android,PS4, Compatible IBM PC', 'MATURE 17+', 'Los ejércitos del infierno han invadido la Tierra. Ponte en la piel del Slayer en una épica campaña para un jugador y cruza dimensiones para detener la destrucción definitiva de la humanidad. No le tienen miedo a nada... salvo a ti.', 'Intel Core i5,Windows,8GB,NVIDIA GeForce GTX 1050Ti', 'https://bethesda.net/es/game/doom', '© 2020 Bethesda Softworks LLC, a ZeniMax Media company.  Bethesda, Bethesda Softworks, ZeniMax and related logos are registered trademarks or trademarks of ZeniMax Media Inc. in the U.S. and/or other countries. DOOM, id, id Software and related logos are registered trademarks or trademarks of id Software LLC in the U.S. and/or other countries. All Rights Reserved.', 'accion/DOOM.jpg,accion/DOOMgp1.jpg,accion/DOOMgp2.jpg,accion/DOOMico.jpg,https://www.youtube.com/embed/vMdNO4eMAg0', 'Los ejércitos del infierno han invadido la Tierra. Ponte en la piel del Slayer en una épica campaña para un jugador y cruza dimensiones aniquilando demonios para detener la destrucción definitiva de la humanidad.\r\n\r\nNo Le Tienen Miedo A Nada... Salvo A Ti.\r\n\r\nDisfruta de la mejor combinación de velocidad y potencia en DOOM Eternal, que trae un salto cualitativo del combate en primera persona.\r\n', 1),
(5, 'Watch Dogs: Legion', '2020-10-26', 'español,ingles,frances,', 200, 'Ubisoft Toronto', 'PS(4,5),Xbox(ONE,360),PC', 'MATURE 17+', 'Londres se enfrenta a su propia decadencia gracias a la vigilancia estatal, los militares privados, y crimen organizado. Recluta a una resistencia completa para acabar con los imbéciles que arruinan esta gran ciudad. El destino de Londres está en tus manos.', 'Intel® Core™ i3-530+,Windows,4GB,NVIDIA GeForce GTX 1050Ti', 'https://watchdogs.ubisoft.com/game/es-mx/', '© 2019 Ubisoft Entertainment. All Rights Reserved. Ubisoft and the Ubisoft logo are registered or unregistered trademarks of Ubisoft Entertainment in the U.S. and/or other countries. The “PS” Family logo is a registered trademark and “PS4” is a trademark of Sony Computer Entertainment Inc. Software platform logo (TM and ©) EMA 2006.', 'accion/WatchDogsLegion.jpg,accion/WatchDogsLegiongp1.jpg,accion/WatchDogsLegiongp2.jpg,accion/WatchDogsLegionico.jpg,https://www.youtube.com/embed/L20nioDjCxU', 'Crea una resistencia a partir de cualquier persona en el mundo para recuperar del colapso a un Londres de un futuro cercano. Ganador de más de 65 premios y nominaciones durante la E3.\r\n\r\nCaracterísticas\r\nRecluta y juega como cualquier persona de Londres. Cada persona que veas cuenta con su propia historia, personalidad y conjunto de habilidades para crear situaciones únicas.\r\nHackea drones armados, despliega robots araña y acaba con los enemigos usando un manto de realidad aumentada.\r\nExplora un masivo mundo abierto urbano que contiene muchos de los sitios icónicos de Londres, además de divertidas actividades adicionales.\r\nHaz equipo con tus amigos mientras completas las misiones en modo cooperativo y modos de juego únicos.\r\n¡Mejora a la edición Gold o a la edición Ultimate para obtener acceso al pase de temporada y mucho más!', 1),
(6, 'FIFA 20', '2019-09-24', 'español,ingles,frances,ruso', 43, 'EA Vancouver', 'PS4,XboxOne,PC,Switch', 'EVERYONE', 'Desde las luchas por los títulos hasta los puestos de descenso, aún hay mucho en juego esta temporada. Prepárate para el regreso del juego del mundo y rinde homenaje a los mejores jugadores de 2019/2020 con el Equipo de la Temporada Hasta ahora de FIFA 20.', 'Intel Core i3-2100,Windows,8GB,NVIDIA GTX 660', 'https://www.ea.com/es-es/games/fifa/fifa-20', 'Copyright ©1994 - 2020 FIFA. All rights reserved', 'deportes/FIFA20.jpg,deportes/FIFA20gp1.jpg,deportes/FIFA20gp2.jpg,deportes/FIFA20ico.png,https://www.youtube.com/embed/vgQNOIhRsV4', 'FIFA 20 es un videojuego de simulación de fútbol desarrollado por EA Sports, como parte de la serie FIFA de Electronic Arts. Está disponible en las plataformas de PlayStation 4, Xbox One, Microsoft Windows y Nintendo Switch (Versión Legacy). EA Sports lanzó la demo el 10 de septiembre de 2019 y el juego el día 27 de septiembre del mismo año. Es el primer juego de la franquicia en no estar disponible para PS3 y Xbox 360, siendo FIFA 19 el último en salir para estas consolas.\r\n\r\nEl extremo del Real Madrid, Eden Hazard, fue nombrado la nueva estrella de portada de la Edición Regular, con el defensor del Liverpool Virgil van Dijk en la portada de la Edición de Campeones. El excentrocampista de la Juventus y el Real Madrid, Zinedine Zidane, fue nombrado más tarde como la estrella de la portada de la Ultimate Edition.\r\n\r\nEl juego presenta VOLTA Football por primera vez, un nuevo modo que ofrece una variación en el juego tradicional de 11 contra 11 y se enfoca en juegos callejeros y de fútbol sala de lados pequeños. Se cree que el modo se centra en la antigua serie FIFA Street. En esta nueva versión del FIFA, se pierde la licencia de la Juventus por el nuevo contrato con eFootball Pro Evolution Soccer 2020 por Konami. El equipo se llama Piemonte Calcio.', 3),
(7, 'NBA 2K19', '2018-09-08', 'español,ingles,frances,ruso', 180, ' Visual Concepts', 'PS4,XboxOne,PC,Switch,Android', 'EVERYONE', 'NBA 2K celebra 20 años de redefinir lo que pueden ser los juegos deportivos. NBA 2K19 continúa superando los límites, ya que acerca los juegos un paso más hacia la emoción y la cultura del baloncesto de la vida real.\r\n', 'Intel® Core™ i3-530+,Windows,6GB,NVIDIA® GeForce® GT 450+', 'https://www.2k.com/en-US/', '© 2005-2018 Take-Two Interactive Software, Inc. and its subsidiaries. 2K, the 2K logo, and Take-Two Interactive Software are all trademarks and/or registered trademarks of Take-Two Interactive Software, Inc. The NBA and NBA member team identifications are the intellectual property of NBA Properties, Inc. and the respective NBA member teams. © 2018 NBA Properties, Inc. Officially licensed product of the National Basketball Players Association. All other trademarks are property of their respective owners. All rights reserved.', 'deportes/NBA.jpg,deportes/NBAgp1.png,deportes/NBAgp2.jpg,deportes/NBAicon.jpg,https://www.youtube.com/embed/S6i_E0QP0ko', 'NBA 2K celebra 20 años de redefinir lo que pueden ser los juegos deportivos, desde los mejores gráficos y jugabilidad de su clase hasta modos de juego innovadores y un \"Barrio\" envolvente de mundo abierto. NBA 2K19 continúa superando los límites, ya que acerca los juegos un paso más hacia la emoción y la cultura del baloncesto de la vida real.\r\n\r\nTOMA EL CONTROL CON TAKEOVER\r\nAproveche todo el potencial de baloncesto de MyPLAYER con la nueva función Takeover. Desbloquee movimientos y habilidades especiales nunca antes vistos en la cancha, o active Team Takeover y desate el poder de su escuadrón completo.\r\nCORRE EL BARRIO\r\nNo querrás perderte ni un solo día en Neighborhood actualizado. Hazte un nombre en la cancha, en las jaulas Under Armour y durante los eventos en vivo en la cuadra. Baila hasta el amanecer con nuevas transiciones de día a noche, camina en el Jordan Rec Center o reúne al viejo Crew para una emocionante acción de streetball 3 contra 3.\r\nMi equipo\r\nCrea tu primera tarjeta MyPLAYER y juega con LeBron, Kobe y el resto de tu colección en una variedad de modos competitivos. Presentamos el nuevo modo Ilimitado, que te permite elegir cinco cartas de tu mazo sin restricciones y luchar contra otros jugadores en línea.\r\nMi carrera\r\nDe la leyenda del barrio al fenómeno global. El modo historia de carrera original regresa con una narrativa completamente nueva e inmersiva que traza su viaje desde China a la Liga G y, finalmente, a la NBA. Con un elenco de estrellas, avales vinculados a su popularidad y nuevos elementos de química de equipo que le permiten dominar la madera dura.', 3),
(8, 'DiRT Rally 2.0', '2019-02-22', 'español,ingles,frances,ruso', 70, ' Codemasters', 'PlayStation 4,Xbox One,PC', 'EVERYONE', 'DiRT Rally 2.0 lo desafía a abrirse camino a través de una selección de lugares de rally icónicos de todo el mundo, en los vehículos todoterreno más potentes que se hayan hecho, sabiendo que el error más pequeño podría terminar su etapa.', 'Intel Core i3 2130,Windows,8GB,NVIDIA GTX650Ti', 'https://dirtrally2.dirtgame.com', '© 2018 The Codemasters Software Company Limited (\"Codemasters\"). All rights reserved. \"Codemasters\"®, “EGO”®, the Codemasters logo, and “DiRT”® are registered trademarks owned by Codemasters. “DiRT Rally 2.0”™ and “RaceNet”™ are trademarks of Codemasters. All rights reserved. Under licence from International Management Group (UK) Limited.All other copyrights or trademarks are the property of their respective owners and are being used under license. Developed and published by Codemasters. Unauthorized copying, adaptation, rental, lending, re-sale, arcade use, charging for use, broadcast, cable transmission, public performance, distribution or extraction of this product or any trademark or copyright work that forms part of this product is prohibited.', 'deportes/DR.jpg,deportes/DRgp1.jpg,deportes/DRgp2.jpg,deportes/DRico.png,https://www.youtube.com/embed/RQ7JvIncd4Y', 'DiRT Rally 2.0 lo desafía a abrirse camino a través de una selección de lugares de rally icónicos de todo el mundo, en los vehículos todoterreno más potentes que se hayan hecho, sabiendo que el error más pequeño podría terminar su etapa.\r\n\r\n\r\n\r\nTendrá que confiar en sus instintos con la experiencia todoterreno más inmersiva y verdaderamente centrada hasta la fecha, incluido un nuevo modelo de manejo auténtico, elección de neumáticos y degradación de la superficie. Alimente su auto de rally a través de entornos todoterreno de la vida real en Nueva Zelanda, Argentina, España, Polonia, Australia y los EE. UU., Con solo su copiloto e instintos para guiarlo.\r\n\r\nCorre en ocho circuitos oficiales del campeonato mundial de Rallycross de la FIA, completo con Supercoches con licencia y series de apoyo.\r\nDesarrolle su equipo y sus autos en torno a estrategias de carrera, y progrese a través de una variada selección de eventos y campeonatos en una campaña profesional para un solo jugador y en un entorno competitivo en línea.\r\n\r\n\r\n\r\n• MÁS DE 50 DE LOS COCHES FUERA DE CARRETERA MÁS POTENTES QUE SE HAYAN CONSTRUIDO: atraviesa entornos con una lista icónica de autos de rally históricos y modernos, VW Polo GTI R5, Mitsubishi Lancer Evolution X y Citroën C3 R5. También tome el poder desafiante del Chevrolet Camaro GT4.R.\r\n\r\n• 6 UBICACIONES DE RALLY DE LA VIDA REAL: tome el volante a través de los impresionantes entornos de Nueva Zelanda, Argentina, España, Polonia, Australia y los Estados Unidos.\r\n\r\n• SIENTE SU CARRERA: el manejo, las superficies, la falibilidad y los entornos mejorados brindan la experiencia todoterreno más auténtica y centrada de la historia.\r\n\r\n• EL JUEGO OFICIAL DEL CAMPEONATO MUNDIAL DE RALLYCROSS DE LA FIA - Corre en Barcelona, ​​Montalegre, Mettet, Lohéac Bretagne, Trois-Rivières, Hell, Höljes y Silverstone en una multitud de series diferentes.\r\n\r\n• DESARROLLA TU PROPIO EQUIPO: crea un equipo, contrata a tu personal y amplía tu garaje de vehículos como elijas.\r\n\r\n• TUNING: ajuste su vehículo para adaptarlo a su estilo de conducción y características ambientales. Alivie el desgaste mediante la configuración de la configuración de cada automóvil y actualice sus piezas para asegurarse de que sus vehículos estén listos para cualquier desafío que se presente.\r\n\r\n• SEA COMPETITIVO: compita con toda la comunidad DiRT en desafíos diarios, semanales y mensuales, con tablas de clasificación y eventos mundiales.', 3),
(9, 'Mario Kart 8 Deluxe', '2017-04-22', 'español,ingles,frances,ruso', 239, 'Nintendo EPD', 'Nintendo Switch', 'EVERYONE', 'Mario Kart 8 Deluxe es un videojuego de carreras desarrollado y publicado por Nintendo para la consola Nintendo Switch. Es la undécima entrega de la serie Mario Kart, novena en consolas de Nintendo, lanzado mundialmente el 28 de abril de 2017. Cuenta con todo lo visto previamente en Mario Kart 8 (pistas, personajes, DLCs, vehículos, etc.). Aunque no incluye nuevas pistas de carreras,1​incluye nuevos personajes y un mejorado modo batalla.', '-,-,-,-', 'https://www.nintendo.com/games/detail/mario-kart-8-deluxe-switch/', '*MSRP: Manufacturer\'s Suggested Retail Price. Actual price may vary. See retailer for details.  **Nintendo Switch Online membership (sold separately) and Nintendo Account required for online play. This game does not support Save Data Cloud backup. Not available in all countries. Internet access required for online features. Terms apply. nintendo.com/switch-online  *Additional accessories may be required for multiplayer mode. Sold separately.  amiibo™ compatible game (software update may be required). Visit nintendo.com for details on amiibo functionality. © 2017 Nintendo.', 'deportes/MK.jpg,deportes/MKgp1.jpg,deportes/MKgp2.jpg,deportes/MKicon.png,https://www.youtube.com/embed/tKlRN2YpxRE', 'MODOS DE JUEGO:\r\nGrand Prix\r\nModo de juego de uno a cuatro jugadores. Los jugadores deberán correr por las 4 pistas que componen cada una de las 12 copas, mientras corren junto a las CPU.\r\n\r\nContrarreloj\r\nModo de un solo jugador en el que se disputa una carrera en cualquier circuito sin rivales para conseguir el mejor tiempo.\r\n\r\nCarrera VS\r\nModo de uno hasta cuatro jugadores, donde se juega cualquier circuito con las reglas deseadas.\r\n\r\nMultijugador en línea\r\nEl jugador puede jugar contra rivales o amigos de todo el mundo en cualquier pista. Se pueden fabricar torneos con las propias reglas de juego del jugador, utilizar funciones de chat de voz mientras espera jugadores o texto predefinido si así lo desea el jugador.\r\n\r\nMario Kart TV\r\nSucesor del Canal Mario Kart de Mario Kart Wii. Permite utilizar repeticiones o fotografías hechas por el jugador a modo de homenaje a su carrera finalizada en pista, para subirlas directamente a YouTube. Su nombre hace referencia a un modo de F-Zero GX, llamado F-Zero TV. Era también usada en la versión de Wii U, donde se compartía en la red social difunta Miiverse y poder comentar en las publicaciones.\r\n\r\nModo inalámbrico\r\nPermite que dos personas jueguen inalámbricamente, votando un circuito de juego y ganando puntos según los resultados.\r\n\r\nModo Batalla\r\nEn el Modo Batalla de Mario Kart 8, los campos de batalla fueron reemplazados por los circuitos del juego. En Mario Kart 8 Deluxe, se añade un renovado Modo Batalla de hasta 5 modalidades de juego diferentes, y vuelven los campos de batalla. Permite jugar individualmente o por equipos.\r\n\r\nBatalla de Globos\r\nEs la batalla clásica de Mario Kart, donde los jugadores deben utilizar objetos para reventar los globos de sus oponentes y conseguir puntos.\r\n\r\nBatalla de Monedas\r\nUtilizada en Mario Kart Wii y Mario Kart 7, la Batalla de Monedas consiste en conseguir tantas monedas como sean posibles.\r\n\r\nAsalto al Sol\r\nEste modo fue utilizado en Mario Kart: Double Dash!!. Un jugador tiene que atrapar el sol antes que sus rivales, y los demás tienen que intentar robárselo antes de que se acabe el tiempo.\r\n\r\nBob-ombardeo\r\nEl Bob-ombardeo, es otra modalidad de Mario Kart: Double Dash!!. Los jugadores tienen que atravesar cajas de objetos para acumular Bob-ombs hasta un máximo de 10 y lanzárselos a los contrincantes.\r\n\r\nPatrulla Piraña\r\nEl nuevo modo de Mario Kart 8 Deluxe, llamado Patrulla Piraña, que requiere el juego por equipos. Los jugadores de un equipo tienen que utilizar las Plantas Piraña para coger a los del otro equipo y meterlos en la cárcel. Los otros deben intentar abrir la cárcel.', 3),
(10, 'Rocket League®', '2015-07-04', 'español,ingles,frances,ruso', 50, ' Psyonix LLC', 'PS4,XboxOne,PC,Switch', 'EVERYONE', 'Rocket League es un híbrido de gran potencia del fútbol de estilo arcade y el caos vehicular con controles fáciles de entender y una competencia fluida basada en la física. Rocket League incluye Partidos en línea casuales y competitivos, un modo de temporada fuera de línea con todas las funciones, \"Mutadores\" especiales que te permiten cambiar ...', '2.5 GHz Dual core,Windows,MacOS,Linux', 'https://www.rocketleague.com', 'Copyright © 2015-2019 Psyonix Inc. Rocket League, Psyonix, and all related marks and logos are registered trademarks or trademarks of Psyonix Inc. All rights reserved. All other trademarks are property of their respective owners.', 'deportes/RL.jpg,deportes/RLgp1.jpg,deportes/RLgp2.jpg,deportes/RLico.png,https://www.youtube.com/embed/Vawwy2eu5sA', 'Rocket League se jugará gratis este verano\r\n\r\nJuegue entre ahora y el lanzamiento de Free to Play y reciba Golden Cosmos Boost, Dieci-Oro Wheels, Huntress Player Banner y el título \"Est. 20XX\" que muestra el año en que comenzó a jugar Rocket League. ¡Cualquiera que haya jugado a Rocket League antes del 21/07/2020 recibirá estos artículos, además del Faded Cosmos Boost! Los artículos se otorgarán en el lanzamiento.\r\n\r\nRocket League es un híbrido de gran potencia del fútbol de estilo arcade y el caos vehicular con controles fáciles de entender y una competencia fluida basada en la física. Rocket League incluye Partidos en línea casuales y competitivos, un modo de temporada fuera de línea con todas las funciones, \"Mutadores\" especiales que le permiten cambiar las reglas por completo, modos adicionales inspirados en el hockey y el baloncesto, y más de 500 billones de combinaciones posibles de personalización cosmética.\r\n\r\nGanador o nominado de más de 150 premios al \"Juego del año\", Rocket League es uno de los juegos deportivos más aclamados por la crítica de todos los tiempos. Con una comunidad de más de 57 millones de jugadores, Rocket League presenta actualizaciones gratuitas y pagas, que incluyen nuevos DLC, paquetes de contenido, características, modos y arenas.\r\n\r\nQué hay de nuevo:\r\nRocket Pass: compre Rocket Pass Premium para obtener un bono inicial de 50% de XP y gane hasta 70 recompensas únicas, que incluyen un nuevo coche de batalla, explosión de objetivos, llaves y mucho más.\r\nSistema de desafíos: juega partidas en línea y completa desafíos semanales para subir de nivel y desbloquear recompensas únicas que solo se encuentran en Rocket Pass.\r\nTienda de Esports: ¡presume de orgullo por tu equipo por tus equipos favoritos en Rocket League Esports! El programa piloto Rocket League Esports Shop trae nuevas calcomanías, ruedas y carteles de jugadores que representan a algunos de los mejores equipos del deporte. de los mejores equipos del deporte.\r\n\r\nVersiones Beta de SteamOS y Mac\r\nA medida que continuamos actualizando Rocket League® con nuevas tecnologías como DirectX 11 y un cliente de 64 bits, ya no es viable para nosotros mantener el soporte para las plataformas macOS y Linux (SteamOS). Como resultado, el parche final para las versiones macOS y Linux de Rocket League se lanzó el 10 de marzo de 2020. Esta actualización deshabilitó la funcionalidad en línea (como las listas de reproducción casuales y competitivas) para jugadores en macOS y Linux, pero características fuera de línea que incluyen partidos locales , y la reproducción en pantalla dividida sigue siendo accesible.\r\n\r\nTenga en cuenta que Rocket League® en SteamOS y macOS puede tener errores y problemas de estabilidad que no se ven en la versión de Windows del juego, y estos problemas pueden no solucionarse en futuras actualizaciones.\r\n\r\nNOTA: Debido a los acuerdos con nuestro proveedor de servicios en línea, hay ciertas regiones que no pueden conectarse al componente multijugador en línea de Rocket League®. Como resultado, el acceso al servidor está restringido en China, Crimea, Cuba, Irán, Corea del Norte, Sudán y Siria. Disculpas a nuestros clientes en esas regiones.\r\n\r\nLas funciones de software y en línea están sujetas a licencia, términos de uso y política de privacidad (rocketleague.com/eula, rocketleague.com/tou y rocketleague.com/privacy).', 3),
(11, 'Biped', '2020-03-18', 'español,ingles,frances,', 31, 'NEXT Studios', 'PS(4,5),Xbox(ONE,360),PC', 'EVERYONE', 'Biped es un juego cooperativo de acción y aventura con sistema físico 3D y un fuerte énfasis en la colaboración constante entre dos jugadores.', 'Intel® Core™ i3-530+,Windows,4GB,NVIDIA GeForce GTX 660', 'https://www.nextstudios.com/biped/index_en.html', '© 2020 Ubisoft Entertainment. All Rights Reserved. Ubisoft and the Ubisoft logo are registered or unregistered trademarks of Ubisoft Entertainment in the U.S. and/or other countries. The “PS” Family logo is a registered trademark and “PS4” is a trademark of Sony Computer Entertainment Inc. Software platform logo (TM and ©) EMA 2006.', 'casual/Biped.jpg,casual/Bipedgp1.jpg,casual/Bipedgp2.jpg,casual/Bipedico.jpg,https://www.youtube.com/embed/sMSK-AoOsGg', 'Dos robots bípedos, Aku y Sila, trabajarán hombro a hombro y se embarcarán en un viaje divertido y emotivo para lograr su misión en el planeta Tierra.\r\nPuedes controlar las dos piernas del robot con los dos sticks o con los botones del ratón. Así podrás realizar todo tipo de movimientos: desde caminar y deslizarte hasta acciones más avanzadas, como operar maquinaria y cortar madera.', 4),
(12, 'Dawn Of Man', '2019-02-26', 'español,ingles,frances,', 45, 'Madruga Works', 'PlayStation 4,Xbox One,PC', 'TEEN', 'Comanda un asentamiento de humanos antiguos, guíalos a través de los siglos en su lucha por la supervivencia. Cazar, reunir, herramientas artesanales, luchar, investigar nuevos técnicos y hacer frente a los desafíos que el entorno le lanzará.', 'Intel Core i5,Windows,4GB,NVIDIA Card', 'https://www.playstation.com/es-pe/games/dawn-of-man-ps4/', '© 2020 Valve Corporation. Todos los derechos reservados. Todas las marcas registradas pertenecen a sus respectivos dueños en EE. UU. y otros países. Todos los precios incluyen IVA (donde sea aplicable). ', 'casual/DawnOfMan.jpg,casual/DawnOfMangp1.jpg,casual/DawnOfMangp2.jpg,casual/DawnOfManico.jpg, https://www.youtube.com/embed/02i1_wXdf7M', 'Toma el control de un asentamiento de los primeros humanos modernos, guíalos a través de las edades en su lucha por la supervivencia. Dawn of Man es un constructor de supervivencia /ciudad de los creadores de Planetbase.\r\nEl juego comienza en la Edad de Piedra,y te lleva hasta la Edad de Hierro,abarcando más de 10.000 años de prehistoria humana.\r\nTendrás que hacer que tu gente sobreviva, expanda y evolucione, al igual que nuestros antepasados, enfrentándote a los desafíos que el medio ambiente te lanzará.', 4),
(13, 'Human Fall Flat', '2016-07-20', 'español,ingles,frances,ruso', 37, 'No Brakes Games', 'PlayStation 4,PC', 'EVERYONE', 'Human: Fall Flat es un divertido juego de plataformas ambientado en paisajes flotantes y oníricos para hasta 8 jugadores en línea. Ahora con niveles gratuitos para recompensar a una comunidad muy entregada.', 'Intel Core2 Duo E6750,Windows,2GB,NVIDIA GeForce GT 740', 'https://505games.com/games/human-fall-flat/', 'Human: Fall Flat ™ & © No Brakes Games. Licensed by Curve Digital.', 'casual/HumanFallFlat.jpg,casual/HumanFallFlatgp1.jpg,casual/HumanFallFlatgp2.jpg,casual/HumanFallFlatico.jpg,https://www.youtube.com/embed/-Edk59BqSEU', 'Este nivel, que ganó la competición Worldwide Workshop, está repleto de mecanismos metálicos que deberás dominar individualmente o con un máximo de siete amigos.\r\nCrea piezas de máquinas a partir de lingotes de acero y decide cómo recorrer la fábrica. Atravesar cintas transportadoras en movimiento, enormes engranajes y llamas entraña riesgos, ¡pero también conlleva diversión sin igual!', 4),
(14, 'Last Day Of June', '2019-08-29', 'español,ingles,frances,', 50, 'Ovosonico', 'PlayStation 4,PC', 'EVERYONE', 'Una aventura profunda e interactiva sobre el amor y la pérdida, maravillosamente narrada y que ofrece una experiencia cinemática intensa. ¿Qué serías capaz de hacer por la persona a la que amas?', 'Intel® Core™ i3,Windows,4GB,NVIDIA GeForce 750Ti', 'https://505games.com/games/last-day-of-june/', 'Last Day of June™ ©2017 Ovosonico / ©2017 505 Games - Todos los derechos reservados. Distribuida por 505 Games. Desarrollada por Ovosonico. 505 Games y el logotipo de 505 Games son marcas comerciales registradas de 505 Games S.p.A o sus afiliados. Banda sonora: letra y música por Steven John Wilson - distribuidor original: Songs of Universal Inc./Hands Off It’s Mine Publishing - distribuidor secundario: Universal/MCA Music Italia \"PlayStation\" y \"PS4\" son marcas comerciales registradas de Sony Interactive Entertainment. Todas las demás marcas y marcas comerciales pertenecen a sus respectivos dueños. Todos los derechos reservados.', 'casual/LastDayOfJune.jpg,casual/LastDayOfJunegp1.jpg,casual/LastDayOfJunegp2.jpg,casual/LastDayOfJuneico.jpg,https://www.youtube.com/embed/YeV7HLpfPXw', 'Last Day of June es una historia interactiva sobre el amor y la pérdida, diseñada por un superequipo de creadores entre los que se incluyen el director aclamado por la crítica Massimo Guarini (Murasaki Baby, Shadows of the Damned), el galardonado músico y productor de discos Steven Wilson, además de contar con la colaboración del guionista/director/animador Jess Cope (animador de \"Frankenweenie\" y director del videoclip \"Here Comes Revenge\" de Metallica).', 4),
(15, 'The Suicide of R.F', '2020-02-16', 'español,ingles,frances,ruso', 33, 'ONE-O-ONE GAMES', 'PS4,Xbox(ONE,360),PC', 'MATURE 17+', 'Tras volver al hotel familiar después de varios años, una tenaz mujer se ve atrapada con los fantasmas de su pasado y un viejo teléfono móvil con el que tendrá que arreglárselas para revelar una terrible verdad.', 'Intel Core i5-2500,Windows,8GB,NVIDIA GeForce GTX 660', 'https://www.fanatical.com/es/game/the-suicide-of-rachel-foster', '©2019 Daedalic Entertainment GmbH and \"ONE-O-ONE GAMES\". The Daedalic logo is a trademark of Daedalic Entertainment GmbH, Germany. All rights reserved.', 'casual/TheSuicide.jpg,casual/TheSuicidegp1.jpg,casual/TheSuicidegp2.jpg,casual/TheSuicideico.jpg,https://www.youtube.com/embed/LyF6yiL5S44', 'Hace diez años, la adolescente Nicole y su madre abandonaron el hotel familiar tras descubrir la aventura de su padre con Rachel, que además estaba embarazada. Rachel era una chica de su misma edad que acabó suicidándose.\r\n\r\nAhora que sus padres han fallecido, Nicole quiere cumplir la última voluntad de su madre: vender el hotel y reparar el daño realizado a los familiares de Rachel. Nicole vuelve al hotel con el abogado de la familia para inspeccionar la deteriorada estructura.\r\n\r\nCuando el tiempo empeora por sorpresa, Nicole no tiene manera de salir del gran albergue de montaña y encuentra apoyo en Irving, una joven agente de FEMA que usa uno de los primeros radioteléfonos fabricados.\r\n\r\nCon su ayuda, Nicole comienza a investigar un misterio con mucha más historia de lo que la gente del valle se pensaba. Una historia de amor y de muerte, en la que la melancolía y la nostalgia se unen en un apasionante relato de fantasmas.', 4),
(16, 'Destroy All Humans!', '2020-07-24', 'español,ingles,frances,', 75, 'Black Forest Games, Pandemic Studios', 'PlayStation 4,Xbox One,PC', 'TEEN', '¡Vuelve el clásico de culto! Ponte en la piel del diabólico alienígena Crypto-137 y aterroriza a los terrícolas de los años 50. Recolecta ADN y derroca al gobierno de los EE. UU. en esta nueva versión del legendario juego de invasión alienígena, acción y aventura.', 'Intel Core i3 8100+,Windows,16GB,NVIDIA GTX 1050', 'https://destroyallhumansgame.com', 'Derechos de Autor: © 2020 THQ Nordic AB, Sweden. Developed by Black Forest Games. Destroy All Humans, THQ and their respective logos are trademarks and/or registered trademarks of THQ Nordic AB. All rights reserved. All other trademarks, logos and copyrights are property of their respective owners.', 'aventura/DAH.jpg,aventura/DAHgp1.jpg,aventura/DAHgp2.png,aventura/DAHico.png,https://www.youtube.com/embed/EnxS5SZBYDM', '¡Vuelve el clásico de culto! Ponte en la piel del diabólico alienígena Crypto-137 y aterroriza a los terrícolas de los años 50. Recolecta ADN y derroca al gobierno de los EE. UU. en esta nueva versión del legendario juego de invasión alienígena, acción y aventura. Aniquila a los endebles humanos con una variedad de armas y habilidades psíquicas alienígenas. ¡Arrasa sus ciudades con tu platillo volador! ¡Un paso gigantesco sobre la humanidad!\r\n● Vive el lado oscuro de una historia de invasión alienígena en los años 50\r\n● (Re)descubre por qué este juego es considerado uno de los más divertidos de la historia\r\n● Una nueva gloria galáctica, reconstruida desde cero y fiel al juego original\r\n● Disfruta de las armas únicas de Crypto, como la pistola de sonda anal\r\n● Hazte pasar por patéticos humanos para infiltrarte en su frágil democracia\r\n● Usa la telequinesis para lanzar a los enemigos por los aires o bombardearlos con objetos aleatorios\r\n● Explora con total libertad ciudades estadounidenses de los años 50 usando tu propulsor\r\n● Destruye por completo la primitiva arquitectura de los humanos con tu platillo volador\r\n● ¡Incluye la remodelada, rumoreada y nunca antes vista misión perdida del Área 42!', 2),
(17, 'Death Stranding', '2020-07-12', 'español,ingles,frances,ruso', 199, 'KOJIMA PRODUCTIONS', 'PlayStation 4,PC', 'MATURE 17+', 'Del legendario diseñador de videojuegos Hideo Kojima llega una experiencia completamente nueva que desafía los géneros. Sam Bridges debe enfrentarse a un mundo completamente transformado por la muerte en Death Stranding. Con los restos aislados de nuestro futuro en sus manos, se ...', 'Intel® Core i5-3470+,Windows,8GB,GeForce GTX 1050', 'http://www.kojimaproductions.jp/en/death_stranding.html', 'PC version published by 505 Games. ©2019 Sony Interactive Entertainment Inc. DEATH STRANDING is a trademark of Sony Interactive Entertainment LLC. Created and developed by KOJIMA PRODUCTIONS. All trademarks are the property of their respective owners. 505 Games and the 505 Games logo are registered trademarks of 505 Games S.P.A. Appearance in this game does not imply sponsorship or endorsement.© 2020 Valve Corporation. All rights reserved. Valve, the Valve logo, Half-Life, the Half-Life logo, Portal, the Portal logo, and the Lambda logo are trademarks and/or registered trademarks of Valve Corporation in the U.S. and/or other countries', 'aventura/DS.jpg,aventura/DSgp1.jpg,aventura/DSgp2.jpg,aventura/DSico.jpg,https://www.youtube.com/embed/tCI396HyhbQ', 'Del legendario diseñador de videojuegos Hideo Kojima llega una experiencia completamente nueva que desafía los géneros.\r\nSam Bridges debe enfrentarse a un mundo completamente transformado por la muerte en DEATH STRANDING. Con los restos aislados de nuestro futuro en sus manos, se embarca en un viaje para volver a unir el fragmentado mundo paso a paso.\r\nProtagonizado por Norman Reedus, Mads Mikkelsen, Léa Seydoux y Lindsay Wagner.\r\nLas características adicionales de PC incluyen: TASA DE FOTOGRAMAS ALTA, MODO FOTOGRAFÍA y COMPATIBILIDAD CON MONITORES PANORÁMICOS. También incluye contenido crossover de HALF-LIFE de Valve Corporation.\r\nHaz ya la precompra para obtener:\r\n• Fondos de pantalla de alta definición\r\n• GAFAS DE SOL \"SAM\" (ORO CHIRAL Y OMNIRREFLECTOR)\r\n• GORRO (ORO CHIRAL Y OMNIRREFLECTOR)\r\n• EXOESQUELETO DE VELOCIDAD DE ORO Y PLATA\r\n• NVL 2 DE LA PLACA DE ARMADURA ORO y PLATA o superior\r\nTodas las copias del juego también incluirán:\r\n• La banda sonora oficial de DEATH STRANDING, edición expandida: una banda sonora digital de Ludvig Forssell que incluye 10 temas adicionales inéditos\r\n• Selecciones del libro digital \"The Art of Death Stranding\" (por Titan Books)\r\n• GAFAS DE SOL LUDENS MASK (ORO CHIRAL Y OMNIRREFLECTOR)\r\n• EXOESQUELETO DE PODER DE ORO Y PLATA\r\n• EXOESQUELETO TODOTERRENO DE ORO Y PLATA\r\n• PLACA BLINDADA DE ORO Y PLATA\r\nDESBLOQUEARÁS LOS ARTÍCULOS AL AVANZAR EN LA HISTORIA DEL JUEGO', 2),
(18, 'Far Cry® 5', '2018-03-24', 'español,ingles,frances,ruso', 179, 'Ubisoft', 'PlayStation 4,Xbox One,PC', 'MATURE 17+', 'Bienvenido al condado de Hope, Montana, hogar de un fanático culto del fin del mundo conocido como Eden’s Gate. Enfréntate al líder de culto Joseph Seed y sus hermanos, los Heraldos, para encender los fuegos de la resistencia y liberar a la comunidad sitiada.', 'Intel® Core i5-2400+,Windows,8GB,NVIDIA GeForce GTX 670', 'https://far-cry.ubisoft.com/farcry5/es-mx/home/', '© 2018 Ubisoft Entertainment. All Rights Reserved. Far Cry, Ubisoft and the Ubisoft logo are registered or unregistered trademarks of Ubisoft Entertainment in the US and/or other countries. Based on Crytek’s original Far Cry directed by Cevat Yerli. Powered by Crytek’s technology “CryEngine”.', 'aventura/FC5.jpg,aventura/FC5gp1.jpg,aventura/FC5gp2.jpg,aventura/FC5gp1.jpg,https://www.youtube.com/embed/4hVME3O9wf4', 'Far Cry llega a Estados Unidos en la última entrega de la galardonada franquicia.\r\n\r\nBienvenido al condado de Hope, Montana, tierra de los libres y valientes, pero también hogar de un culto fanático del fin del mundo conocido como la Puerta del Edén. Enfréntate al líder de culto Joseph Seed, y a sus hermanos, los Heraldos, para encender los fuegos de la resistencia y liberar a la comunidad sitiada.\r\n\r\nLUCHA CONTRA UN CULTO MORTAL\r\nHope County gratis en modo cooperativo individual o de dos jugadores. Recluta pistolas y colmillos para ayudar a derrotar al culto.\r\n\r\nUn mundo que golpea\r\nCausar estragos en el culto y sus miembros, pero ten cuidado con la ira de Joseph Seed y sus seguidores.\r\n\r\nTALLA TU PROPIO CAMINO\r\n¡Construye tu personaje y elige tu aventura en el juego Far Cry personalizable más grande de todos los tiempos!\r\n\r\nJUGUETES DINÁMICOS\r\nToma el control de icónicos muscle cars, vehículos todo terreno, aviones y mucho más para involucrar a las fuerzas de culto en luchas épicas.\r\n\r\nMecánica de invisibilidad redefinida\r\nMejora tu juego con el seguimiento ocular. Etiqueta a los enemigos mirándolos para aumentar tus habilidades de sigilo y ayudar a tus compañeros de equipo a detectar amenazas.\r\nCompatible con todos los dispositivos de juego Tobii Eye Tracking\r\n', 2),
(19, 'Horizon: Zero Dawn', '2020-08-05', 'español,ingles,frances,ruso', 87, 'Guerrilla', 'PlayStation 4,Xbox One,PC', 'TEEN', 'Vive la misión legendaria de Aloy para revelar los secretos de una futura Tierra dominada por máquinas. ¡Usa ataques devastadores contra tus presas y explora un majestuoso mundo abierto en este galardonado RPG de acción!', 'Intel Core i5-2500,Windows,8GB,Nvidia GeForce GTX 780', 'https://www.playstation.com/es-pe/games/horizon-zero-dawn-ps4/', '© 2020 Valve Corporation. Todos los derechos reservados. Todas las marcas registradas pertenecen a sus respectivos dueños en EE. UU. y otros países. Todos los precios incluyen IVA (donde sea aplicable).', 'aventura/HorizonZero.jpg,aventura/HerizonZerogp1.jpg,aventura/HerizonZerogp2.png,aventura/HorizonZeroico.png,https://www.youtube.com/embed/VNd7tpPzmzE', 'LA TIERRA YA NO NOS PERTENECE\r\nVive la misión de Aloy para revelar los secretos de un mundo dominado por máquinas.\r\nLa joven cazadora, una paria de su tribu, lucha por revelar su pasado, descubrir su destino y detener una amenaza catastrófica para el futuro.\r\nDesata ataques tácticos contra máquinas y tribus rivales mientras exploras un mundo abierto repleto de vida salvaje y peligros.\r\nHorizon Zero Dawn™ es un RPG de acción que ganó varios premios. La Complete Edition para PC incluye la expansión The Frozen Wilds, que añade nuevas tierras, habilidades, armas y máquinas.', 2),
(20, 'Just Cause', '2018-12-01', 'español,ingles,frances,ruso', 180, 'Avalanche Studios', 'PlayStation 4,Xbox One,PC', 'MATURE 17+', 'El agente pícaro Rico Rodríguez viaja a Solís, un enorme mundo sudamericano hogar de conflictos, opresión y condiciones climáticas extremas. Correa en su traje de alas, equipar su gancho de agarre totalmente personalizable, y prepárate para traer el trueno!', 'Intel Core i5-2400,Windows,8GB,NVIDIA GeForce GTX 760', 'https://justcause.square-enix-games.com/en-us', 'JUST CAUSE 4 © 2018 Square Enix Ltd. All rights reserved. Developed by Avalanche Studios AB. Just Cause, EIDOS, the EIDOS logo, SQUARE ENIX and the SQUARE ENIX logo are registered trademarks or trademarks of the Square Enix group of companies. Avalanche and the Avalanche logo are trademarks of Fatalist Entertainment AB.', 'aventura/JustCause.jpg,aventura/JustCausegp1.jpg,aventura/JustCausegp2.jpg,aventura/JustCauseico.jpg,https://www.youtube.com/embed/Lfek7Kcq16g', '¡Just Cause 4 Reloaded ofrece una vasta experiencia de juego explosiva en un paquete totalmente nuevo! Just Cause 4 Reloaded incluye contenido premium, mejoras y características adicionales que se añaden a todas las mejoras ya lanzadas.\r\nSumérgete en una experiencia de mundo abierto repleta de acción y siembra el caos con una amplia variedad de armas, vehículos y equipo. ¡Abróchate tu traje aéreo, equipa el gancho personalizable y prepárate para desatar la tempestad!\r\n', 2),
(21, 'Fall Guys: U.K.', '2020-08-02', 'español,ingles,frances,ruso', 37, ' Mediatonic', 'PlayStation 4,PC', 'EVERYONE', 'Fall Guys es un juego de fiesta multijugador masivo con hasta 60 jugadores en línea en una lucha libre para todos a través de ronda tras ronda de caos creciente hasta que quede un vencedor.', 'Intel Core i5,Windows,8GB,NVIDIA GTX 660', 'https://fallguys.com', 'Copyright 2019 Mediatonic. All Rights Reserved', 'indie/FallGuys.jpg,indie/FallGuysgp1.jpg,indie/FallGuysgp2.jpg,indie/FallGuysico.jpg,https://www.youtube.com/embed/Wj3dUvGLjNQ', 'Fall Guys: Ultimate Knockout flings hordes of contestants together online in a mad dash through round after round of escalating chaos until one victor remains! Battle bizarre obstacles, shove through unruly competitors, and overcome the unbending laws of physics as you stumble towards greatness. Leave your dignity at the door and prepare for hilarious failure in your quest to claim the crown!\r\nMassive Online Pandemonium: Dive into a series of ridiculous challenges and wild obstacle courses with masses of other competitors online, all with the hopes of making the cut and advancing to the next round of mayhem.\r\nCompetitive & Cooperative: Shift between competitive free-for-alls and cooperative challenges where the losing team all get eliminated!\r\nComically Physical: Watch in delight as your fellow competitors bend, bounce, and bash their way to hilarious, physics-based failure!\r\nDelightfully Customizable: Fail in style with everything from fashionable pineapple couture to the latest in bunny hats available to customize your look in Fall Guys.', 5);
INSERT INTO `juegos` (`id`, `nombre`, `fecha`, `idiomas`, `precio`, `desarrollador`, `plataforma`, `clasificacion`, `resumen`, `requerimientos`, `pagina_web`, `derechos_autor`, `trailer`, `descripcion`, `categoriaId`) VALUES
(22, 'The Binding of Isaac: Rebirth', '2014-11-02', 'español,ingles,frances,ruso', 28, 'Re-Logic', 'PS4,XboxOne,PC,Switch,WiiU', 'MATURE 17+', 'The Binding of Isaac: Rebirth es un juego de disparos RPG de acción generado aleatoriamente con elementos pesados de tipo pícaro. Siguiendo a Isaac en su viaje, los jugadores encontrarán extraños tesoros que cambian la forma de Isaac dándole habilidades sobrehumanas y permitiéndole luchar contra hordas de criaturas misteriosas, descubrir secretos ...', 'Core 2 Duo,Windows,MacOS,2GB', 'https://bindingofisaac.com/#_=_', '© 2014 Nicalis, Inc/Edmund McMillen', 'indie/TBOI.jpg,indie/TBOIgp1.jpg,indie/TBOIgp2.jpg,indie/TBOIico.jpg,https://www.youtube.com/embed/7fTPuAlCWEk', 'Cuando la madre de Isaac comienza a escuchar la voz de Dios exigiendo que se haga un sacrificio para demostrar su fe, Isaac escapa al sótano y se enfrenta a hordas de enemigos trastornados, hermanos y hermanas perdidos, sus miedos y, finalmente, su madre.\r\n\r\nComo se Juega\r\nThe Binding of Isaac es un juego de disparos RPG de acción generado aleatoriamente con elementos pesados ​​de tipo pícaro. Siguiendo a Isaac en su viaje, los jugadores encontrarán tesoros extraños que cambian la forma de Isaac dándole habilidades sobrehumanas y permitiéndole luchar contra hordas de criaturas misteriosas, descubrir secretos y luchar para abrirse camino hacia la seguridad.\r\n\r\nAcerca de The Binding Of Isaac: Rebirth\r\nThe Binding of Isaac: Rebirth es lo último en remakes con un motor de juego completamente nuevo y altamente eficiente (espere 60 fps en la mayoría de las PC), ilustraciones de estilo pixel completamente nuevas dibujadas a mano, efectos visuales altamente pulidos, banda sonora completamente nueva y audio de el sexy dúo de Ridiculon Matthias Bossi + Jon Evans. Ah, sí, y cientos y cientos de diseños, rediseños y mejoras reajustadas por el creador de la serie, Edmund McMillen. ¿Mencionamos la caca?\r\nCaracterísticas principales:\r\nMás de 500 horas de juego\r\n¡4 MIL MILLONES de carreras sembradas!\r\n20 carreras de desafío\r\n450+ elementos, incluidos 160 nuevos desbloqueables\r\nSoporte de controlador integrado para los pads de control más populares.\r\nVelocidad y movimiento direccional analógico\r\nToneladas de finales animados con calidad cinematográfica\r\nMás de 100 semillas especializadas\r\nCooperativo local para 2 jugadores\r\nMás de 100 personajes cooperativos\r\nIluminación dinámica, efectos visuales y dirección de arte\r\nMotor de juego completamente nuevo a 60FPS 24/7\r\nBanda sonora y diseño de sonido completamente nuevos\r\nMúltiples ranuras para guardar\r\n¡Física de la caca!\r\nEl último roguelike\r\nUn montón de logros\r\n\r\nSecretos de Uber que incluyen:\r\n10 personajes jugables\r\nMás de 100 enemigos, con nuevos diseños.\r\nMás de 50 jefes, incluidos toneladas de jefes nuevos y raros\r\nHabitaciones llenas de caca!\r\nRunas místicas\r\nTiendas actualizables', 5),
(23, 'Beat Saber', '2019-05-20', 'español,ingles,frances,ruso', 53, 'Beat Games', 'PlayStation 4,PC, Oculus Quest', 'EVERYONE', 'Beat Saber es un juego de ritmo de realidad virtual en el que recortes los ritmos de la música que bombea adrenalina mientras vuelan hacia ti, rodeados de un mundo futurista.', ' Intel Core i5,Windows,4GB,Nvidia GTX 960', 'https://beatsaber.com', 'COPYRIGHT © BEAT GAMES', 'indie/BeatSaber.jpg,indie/BeatSabergp1.jpg,indie/BeatSabergp2.jpg,indie/BeatSaberico.jpg,https://www.youtube.com/embed/vL39Sg2AqWg', '¡Beat Saber es una experiencia de ritmo inmersivo que nunca antes habías visto! Disfruta de toneladas de niveles hechos a mano y avanza a través de los latidos de la música, rodeado de un mundo futurista. Usa tus sables para cortar los latidos a medida que vienen volando hacia ti; cada latido indica qué sable debes usar y la dirección que debes hacer coincidir. ¡Con Beat Saber te conviertes en un superhéroe bailarín!\r\nCaracteristicas\r\nSiente el ritmo: sumérgete en la combinación más fluida de ritmos musicales y efectos visuales en la jugabilidad verdaderamente única de Beat Saber.\r\nNiveles y música hechos a mano: a diferencia de otros juegos de ritmo con contenido generado, la música y los niveles de Beat Saber se dibujan con precisión a mano para mejorar la experiencia musical.\r\nCampaña desafiante: mejora cada día mientras completas objetivos y desafíos en la campaña.\r\nSube en las tablas de clasificación globales: compite contra otros Beat Saberists de todo el mundo en diversas dificultades.\r\nFácil de aprender, divertido de dominar: todo el mundo puede entender la mecánica básica del juego. Es fácil para cualquiera aprender a jugar.\r\nGran ejercicio: haga ejercicio mientras baila y corta los ritmos, Beat Saber lo pone en movimiento.', 5),
(24, 'Gunfire Reborn', '2020-05-21', 'español,ingles,frances,ruso', 24, 'Douyi', 'Pc', 'TEEN', 'Gunfire Reborn es un juego de aventuras basado en niveles que incluye FPS, Roguelite y RPG. Los jugadores pueden controlar héroes con varias habilidades para experimentar diversos juegos de construcción, usar armas lanzadas al azar para explorar niveles aleatorios. Este juego puede ser jugado por un solo jugador o en modo cooperativo hasta cuatro.', 'Intel Core i5-6400,Windows,4GB,GTX 960', 'https://gunfire.herojoys.com/en/', 'All rights reserved@DUOYI (HONGKONG) INTERACTIVE ENTERTAINMENT LIMITED', 'indie/GR.jpg,indie/GRgp1.jpg,indie/GRgp2.jpg,indie/GRico.jpg,https://www.youtube.com/embed/V4EybWcc2KI', 'Acerca de este juego:\r\nGunfire Reborn es un juego de aventuras basado en niveles con elementos de FPS, roguelite y RPG. Los jugadores pueden controlar héroes únicos, cada uno con diferentes habilidades, mientras se aventuran a través de niveles aleatorios y recogen armas arrojadas al azar. Puedes jugar a Gunfire Reborn solo o de forma cooperativa con hasta otros tres jugadores (cooperativo de 4 jugadores).\r\nCada nivel es aleatorio; cada nuevo reinicio es una experiencia completamente nueva. Conocerás a diferentes héroes y experimentarás nuevas armas, elementos, puntos de control y ritmos de combate únicos en los muchos niveles del juego.\r\nGunfire Reborn todavía está en acceso anticipado. Gradualmente arreglaremos errores, agregaremos más contenido y presentaremos nuevas ideas de juego. ¡Gracias por tu apoyo! Haremos todo lo posible para optimizar nuestro juego y ofrecer una experiencia premium a la que no puedes esperar a volver.\r\nCaracterísticas del juego:\r\nJuego combinado de FPS + Roguelite + RPG, construye diversos ciclos de construcción a través de la muerte para una experiencia diferente\r\nExperiencia de escenario elaborada pero aleatoria\r\nMás de 100 elementos diferentes y varias armas.\r\nMuchos héroes y múltiples juegos más con diferentes mecanismos de juego.\r\nEstilo de arte único\r\nAventura cooperativa basada en niveles', 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `boletas`
--
ALTER TABLE `boletas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `digitalkey`
--
ALTER TABLE `digitalkey`
  ADD PRIMARY KEY (`digitalkey`);

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `boletas`
--
ALTER TABLE `boletas`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
