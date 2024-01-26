-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2023 a las 04:29:57
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `plataformas_act`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos`
--

CREATE TABLE `archivos` (
  `id_archivo` int(11) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `pdf` varchar(50) NOT NULL,
  `video` varchar(50) NOT NULL,
  `id_publicacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `archivos`
--

INSERT INTO `archivos` (`id_archivo`, `imagen`, `pdf`, `video`, `id_publicacion`) VALUES
(1, 'netflix.jpg', 'netflix.pdf', 'netflix.mp4', 5),
(2, 'spotify.jpg', 'spotify.pdf', 'spotify.mp4', 6),
(3, 'aniqui.jpg', 'aniqui.pdf', 'aniqui.mp4', 1),
(4, 'nope.jpg', 'nope.pdf', 'nope.mp4', 2),
(5, 'castillo.jpg', '', '', 3),
(7, 'cruz.jpg', '', 'cruz.mp4', 7),
(8, 'toys.jpg', '', 'toys.mp4', 12),
(9, 'conejo.jpg', 'conejo.pdf', '', 8),
(10, 'klaus.jpg', '', '', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `clase` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `clase`) VALUES
(1, 'Motion graphics'),
(2, 'Modelado 3D'),
(3, 'Diseño vectorial'),
(4, 'Fotomontajes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `contenido` varchar(200) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_publicacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `fecha`, `contenido`, `id_usuario`, `id_publicacion`) VALUES
(1, '2023-09-05', '¡Muy lindo trabajo!', 9, 1),
(2, '2023-08-02', '¡Excelente animación!', 10, 6),
(3, '2023-09-11', 'Buenísimo video!!!', 2, 5),
(4, '2023-09-10', '¡Chulo!', 10, 3),
(5, '2023-09-09', '¡No lo puedo creer! Es increíble', 6, 1),
(6, '2023-09-08', '¡Sigue brillando! Este contenido es oro puro.', 11, 12),
(7, '2023-09-07', '¡Bravo! Siempre inspirándome con tus publicaciones. ', 2, 11),
(8, '2023-09-05', 'Gracias por compartir esto. Me hizo sentir tan positivo. ', 7, 7),
(10, '2023-09-11', 'Eres una fuente constante de inspiración.', 7, 13),
(20, '0000-00-00', 'fachero', 3, 1),
(21, '0000-00-00', 'epico\r\n', 15, 8),
(22, '0000-00-00', 'Geniaa!!', 16, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favoritos`
--

CREATE TABLE `favoritos` (
  `id_favorito` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_publicacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `favoritos`
--

INSERT INTO `favoritos` (`id_favorito`, `fecha`, `id_usuario`, `id_publicacion`) VALUES
(1, '2023-09-13', 10, 2),
(2, '2023-09-13', 2, 2),
(4, '2023-09-12', 7, 6),
(5, '2023-09-09', 2, 1),
(6, '2023-09-13', 9, 3),
(7, '2023-09-03', 11, 13),
(8, '2023-09-13', 7, 11),
(9, '2023-09-09', 8, 12),
(10, '2023-09-03', 7, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `id_publicacion` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `url` varchar(50) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `fecha` date NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `portada` varchar(200) NOT NULL,
  `megusta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`id_publicacion`, `titulo`, `url`, `descripcion`, `fecha`, `id_categoria`, `id_usuario`, `foto`, `portada`, `megusta`) VALUES
(1, 'Rediseño de póster para la película \"Aniquilación\"', '', 'Explora nuestra versión rediseñada del póster de la película \"Aniquilación\". Una nueva perspectiva visual te espera. #Aniquilación #RediseñoDePóster', '2023-09-01', 4, 4, 'recursos/publicaciones/ciervos.jpg', 'recursos/portadas/annihilation.jpg', 1),
(2, 'Rediseño de póster para la película \"Nope\"', '', '¡Prepárate para quedar atrapado en el misterio! Hemos reinventado por completo el póster de la película \'Nope\'.', '2023-09-05', 4, 5, 'recursos/publicaciones/nope.jpg', 'recursos/portadas/nope.jpg', 1),
(3, 'Magia en Movimiento: Mi Creación Inspirada en \'El Increíble Castillo Ambulante', '', 'Sumérgete en el mundo de la fantasía con mi último fotomontaje inspirado en \'El Increíble Castillo Ambulante\'.', '2023-08-02', 4, 4, 'recursos/publicaciones/castillo.jpg', 'recursos/portadas/castillo.jpg', 1),
(5, 'Pauta publicitaria para Netflix', '', '¡Descubre nuestro fascinante mundo de motion graphics en esta pauta publicitaria diseñada especialmente para Netflix!', '2023-08-09', 1, 5, 'recursos/publicaciones/netflix.mp4', 'recursos/portadas/netflix.jpg', 1),
(6, 'Pauta publicitaria para Spotify', '', 'Deja que la música cobre vida con nuestra pauta publicitaria en motion graphics para Spotify. ', '2023-09-03', 1, 3, 'recursos/publicaciones/spotify.mp4', 'recursos/portadas/spotify.jpg', 0),
(7, 'Propaganda en Motion Graphics para Cruz Roja', '', 'Nuestros cursos de Cruz Roja en motion graphics te ofrecen la oportunidad de aprender habilidades vitales.', '2023-09-05', 1, 5, 'recursos/publicaciones/cruzRoja.mp4', 'recursos/portadas/cruzRoja.jpg', 1),
(8, 'Ilustración hiperrealista de personaje animado', '', 'Esta ilustración hiperrealista de nuestro personaje animado favorito fue creada con amor y paciencia en Adobe Illustrator.', '2023-09-05', 3, 4, 'recursos/publicaciones/ilustracion.jpg', 'recursos/portadas/ilustracion.jpg', 1),
(9, 'Ilustración hiperrealista de Venom', '', 'Esta ilustración hiperrealista de Venom te dejará boquiabierto. Creada meticulosamente con Adobe Illustrator, cada detalle y textura cobra vida. ', '2023-09-01', 3, 5, 'recursos/publicaciones/venom.jpg', 'recursos/portadas/venom.jpg', 1),
(10, 'Klaus Nomi: Un Retrato de Vanguardia en Ilustración', '', 'Descubre la visión única y vanguardista de Klaus Nomi en nuestra ilustración extraordinaria.', '2023-09-19', 3, 3, 'recursos/publicaciones/klaus.jpg', 'recursos/portadas/klaus.png', 0),
(11, 'Modelado 3D máquina de peluches', '', 'Sumérgete en la textura y la tridimensionalidad con nuestra máquina de peluches en un modelo 3D creado con Cinema 4D.', '2023-09-05', 2, 5, 'recursos/publicaciones/peluches.mp4', 'recursos/portadas/peluches.jpg', 0),
(12, 'Modelo 3d inspirado en Toy Story', '', '¡Revive la Magia de Toy Story en un Modelo 3D Creado en Cinema 4D! Descubre cómo hemos llevado a la vida a tus personajes favoritos.', '2023-09-06', 2, 3, 'recursos/publicaciones/pixar.mp4', 'recursos/portadas/pixar.jpg', 0),
(13, 'Modelo 3D inspirado en el Viaje de Chihiro', '', 'Embárcate en un Viaje Mágico: Modelo 3D Inspirado en El Viaje de Chihiro, creado con Cinema 4D. ', '2023-09-05', 2, 4, 'recursos/publicaciones/chihiro.mp4', 'recursos/portadas/chihiro.jpg', 0),
(14, 'Contemplando la Noche: Fotomontaje en las Montañas', '', 'En la tranquilidad de la noche, una joven se sumerge en la magia de la contemplación en las majestuosas montañas.', '2023-09-19', 4, 5, 'recursos/publicaciones/montañas.jpg', 'recursos/portadas/montañas.jpg', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `clase` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `clase`) VALUES
(1, 'administrador'),
(2, 'visitantes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contraseña` varchar(30) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `email`, `contraseña`, `imagen`, `id_rol`) VALUES
(2, 'Jazmin', 'Caronte', 'jazcaronte@gmail.com', 'jaz12345', 'recursos/perfil/jazu.jpg', 2),
(3, 'Lucia', 'Pedemonte', 'luciapedemonte@gmail.com', 'lucia123', 'recursos/perfil/lu.jpg', 1),
(4, 'Sol', 'Drews', 'soldrews@gmail.com', 'sol123', 'recursos/perfil/solD.jpg', 1),
(5, 'Sol', 'Maggio', 'solmaggio@gmail.com', 'maggio123', 'recursos/perfil/solM.jpg', 1),
(6, 'Joaquin', 'Rivero', 'joaquinrivero@gmail.com', 'joaquin123', 'recursos/perfil/joaco.jpg', 2),
(7, 'Lourdes', 'Gonzalez', 'lougonzalez@gmail.com', 'lou123', 'recursos/perfil/lourdes.jpg', 2),
(8, 'Valentina', 'Aguirre', 'valaguirre@gmail.com', 'valen123', 'recursos/perfil/valen.jpg', 2),
(9, 'Ailen', 'Drews', 'ailendrews@gmail.com', 'ailen123', 'recursos/perfil/ailu.jpg', 2),
(10, 'Cecilia', 'Musini', 'ceciliamusini@gmail.com', 'ceci123', 'recursos/perfil/cecilia.jpg', 2),
(11, 'Carla', 'Barri', 'carlabarri@gmail.com', 'carla123', 'recursos/perfil/carla.jpg', 2),
(14, 'Facundo', 'Escobar', 'facuescobar@gmail.com', 'facu123', 'recursos/perfil/facu.jpg', 1),
(15, 'Matias', 'Maggio', 'matiasmaggio@gmail.com', 'maty', 'recursos/perfil/maty.jpg', 1),
(16, 'Camila', 'Pedraza', 'camipedraza@gmail.com', 'cami123', 'recursos/perfil/2401bc20e382953d887f537789d2c371.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoraciones`
--

CREATE TABLE `valoraciones` (
  `id_valoracion` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` int(1) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_publicacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `valoraciones`
--

INSERT INTO `valoraciones` (`id_valoracion`, `fecha`, `cantidad`, `id_usuario`, `id_publicacion`) VALUES
(1, '2023-09-13', 5, 6, 5),
(2, '2023-09-12', 3, 2, 1),
(3, '2023-09-13', 4, 9, 6),
(4, '2023-09-12', 5, 8, 3),
(5, '2023-09-03', 5, 10, 5),
(6, '2023-09-10', 4, 6, 1),
(7, '2023-09-12', 5, 8, 13),
(8, '2023-09-13', 5, 9, 12),
(9, '2023-09-13', 4, 2, 2),
(10, '2023-09-10', 5, 11, 10);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `archivos`
--
ALTER TABLE `archivos`
  ADD PRIMARY KEY (`id_archivo`),
  ADD KEY `id_publicacion` (`id_publicacion`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_publicacion` (`id_publicacion`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  ADD PRIMARY KEY (`id_favorito`),
  ADD KEY `id_usuario` (`id_usuario`,`id_publicacion`),
  ADD KEY `id_publicacion` (`id_publicacion`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`id_publicacion`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Indices de la tabla `valoraciones`
--
ALTER TABLE `valoraciones`
  ADD PRIMARY KEY (`id_valoracion`),
  ADD KEY `id_publicacion` (`id_publicacion`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `archivos`
--
ALTER TABLE `archivos`
  MODIFY `id_archivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  MODIFY `id_favorito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `id_publicacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `valoraciones`
--
ALTER TABLE `valoraciones`
  MODIFY `id_valoracion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `archivos`
--
ALTER TABLE `archivos`
  ADD CONSTRAINT `archivos_ibfk_1` FOREIGN KEY (`id_publicacion`) REFERENCES `publicaciones` (`id_publicacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`id_publicacion`) REFERENCES `publicaciones` (`id_publicacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `favoritos`
--
ALTER TABLE `favoritos`
  ADD CONSTRAINT `favoritos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favoritos_ibfk_2` FOREIGN KEY (`id_publicacion`) REFERENCES `publicaciones` (`id_publicacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD CONSTRAINT `publicaciones_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `publicaciones_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `valoraciones`
--
ALTER TABLE `valoraciones`
  ADD CONSTRAINT `valoraciones_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `valoraciones_ibfk_2` FOREIGN KEY (`id_publicacion`) REFERENCES `publicaciones` (`id_publicacion`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
