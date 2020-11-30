-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2020 a las 22:28:38
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `my_little_world`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `url_media` varchar(255) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `type` varchar(10) NOT NULL,
  `update_at` timestamp(2) NULL DEFAULT NULL,
  `section` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `banners`
--

INSERT INTO `banners` (`id`, `url_media`, `title`, `description`, `position`, `type`, `update_at`, `section`) VALUES
(1, 'images/camping.jpg', 'Zona de camping ', 'En mi pequeño mundo tenemos espacios verdes libres para la recreación', 1, '', '2020-11-12 03:52:43.00', 'horario_prejardin'),
(2, 'images/evento_dia_docente.jpg', 'Dia docente celebración', 'Contiene una imagen relativa a la celebración del dia del docente que se celebra en...', 2, '', '2020-11-12 03:52:43.00', 'slider_index'),
(3, 'images/noticias.png', 'Anuncio publicitario mi pequeño mundo ', 'Este cartel invita a reconocer el centro educativo...', 3, '', '2020-11-12 03:52:43.00', 'slider_index'),
(4, 'images/globos_jardin.jpg', 'Proceso de Admisiones', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint\r\nconsectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui .impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas', 1, '', '2020-11-16 03:52:43.00', 'admisiones'),
(5, 'https://www.youtube.com/embed/BD4qBctPHzU', 'INSCRIPCIONES', 'Inscripciones Abiertas', 1, 'video', '2020-11-15 17:27:08.00', 'matriculas'),
(6, 'images/globos_jardin.jpg', 'Inscripciones abiertas', 'Imagen aluciva a matriculas abiertas', 2, 'image', '2020-11-15 16:28:24.00', 'matriculas'),
(7, 'images/globos_jardin.jpg\r\n', 'Invitación Matriculas', 'En esta imagen vemos una invitación a matricularse este link te conduce a contáctanos.', 3, 'image', '2020-11-15 16:28:24.00', 'matriculas'),
(8, 'images/biblioteca.jpg', 'Imagen galeria momentos mi pequeño mundo', 'en esta imagen se muestra un recuerdo de mi pequeño mundo ', 1, '', '2020-11-15 17:27:08.00', 'galeria'),
(9, 'images/biblioteca.jpg', 'imagen galería ', 'En esta sección van los momentos de mi pequeño mundo', 1, 'image', '2020-11-16 05:00:00.00', 'galeria'),
(10, 'images/biblioteca.jpg', 'Imagen galería ', 'en esta sección van los momentos de mi pequeño mundo', 2, 'image', '2020-11-16 05:00:00.00', 'galeria'),
(11, 'images/camping.jpg', 'Imagen galeria', 'Momentos de Mi Pequeño Mundo', 3, 'image', '2020-11-16 05:00:00.00', 'galeria'),
(12, 'images/camping.jpg', 'Imagen galeria', 'Momentos de Mi Pequeño Mundo', 4, 'image', '2020-11-16 05:00:00.00', 'galeria'),
(13, 'images/colegio.jpg', 'Imagen galeria', 'Momentos de Mi Pequeño Mundo', 5, 'image', '2020-11-16 05:00:00.00', 'galeria'),
(14, 'images/camping.jpg', 'Imagem galeria', 'Momentos de Mi Pequeño Mundo', 6, 'image', '2020-11-16 05:00:00.00', 'galeria'),
(15, 'images/cronograma.jpg', 'Imagen cronograma', 'En esta imagen se encuentra el cronograma de la escuela de padres', 1, 'image', '2020-11-16 03:52:43.00', 'cronograma'),
(16, 'images/HorarioJardin.jpg', 'Imagen horario', 'En esta imagen se encuentra el horario de los estudiantes', 2, 'image', '2020-11-15 22:26:25.00', 'horario_jardin'),
(17, 'images/HorarioPreJardin.jpg', 'Imagen horario', 'En esta imagen se encuentra el horario de los estudiantes', 3, 'image', '2020-11-15 16:28:24.00', 'horario_prejardin'),
(18, 'images/HorarioParvulos.jpg', 'Imagen horario', 'En esta imagen se encuentra el horario de los estudiantes', 4, 'image', '2020-11-15 22:26:25.00', 'horario_parvulos'),
(19, 'images/camping.jpg', 'Imagem galeria', 'Momentos de Mi Pequeño Mundo', 6, 'image', '2020-11-16 05:00:00.00', 'galeria'),
(20, 'images/art-89198_1920.jpg', 'Noticia ultima hora', 'esta es una nuevo slider', 4, 'image', NULL, 'slider_index'),
(21, '', '', '', 1, 'image', NULL, 'slide_index');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coming`
--

CREATE TABLE `coming` (
  `id_coming` int(11) NOT NULL,
  `direction` varchar(45) DEFAULT NULL,
  `users_document` bigint(12) NOT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grades`
--

CREATE TABLE `grades` (
  `id_grade` int(11) NOT NULL,
  `year` int(6) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `TEACHER_id_teacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grades_subjects`
--

CREATE TABLE `grades_subjects` (
  `grades_id_grade` int(11) NOT NULL,
  `subject_id_subject` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grade_students`
--

CREATE TABLE `grade_students` (
  `idgrade_student` int(11) NOT NULL,
  `grades_id_grade` int(11) NOT NULL,
  `students_id_estudent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `honors`
--

CREATE TABLE `honors` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `grade` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `honors`
--

INSERT INTO `honors` (`id`, `image`, `name`, `description`, `grade`) VALUES
(1, 'my_little_world (3).sql', 'Kathalina Hernandez', 'Aquí puedes escribir los motivos por los cuales estan en cuadro de honor\r\n( promedio, puesto, logros).', 'jardin'),
(2, 'images/2_niña_cuadro.jpg', 'Julian Corredor', 'Aquí puedes escribir los motivos por los cuales estan en cuadro de honor\r\n( promedio, puesto, logros).', 'jardin'),
(3, 'images/3_niña_cuadro.jpg', 'Camila Andrea Perez', 'Aquí puedes escribir los motivos por los cuales estan en cuadro de honor\r\n( promedio, puesto, logros).', 'jardin'),
(4, 'images/2_niña_cuadro.jpg', 'Khatalina Hernandez', 'Aquí puedes escribir los motivos por los cuales estan en cuadro de honor\r\n( promedio, puesto, logros).', 'prejardin'),
(5, 'images/2_niña_cuadro.jpg', 'Julian Corredor', 'Aquí puedes escribir los motivos por los cuales estan en cuadro de honor\r\n( promedio, puesto, logros).', 'prejardin'),
(6, 'images/3_niña_cuadro.jpg', 'Camila Andrea Perez', 'Aquí puedes escribir los motivos por los cuales estan en cuadro de honor\r\n( promedio, puesto, logros).', 'prejardin'),
(7, 'images/1_niña_cuadro.jpg', 'Kathalina Hernandez', 'Aquí puedes escribir los motivos por los cuales estan en cuadro de honor\r\n( promedio, puesto, logros).', 'parvulos'),
(10, 'images/art-89198_1920.jpg', 'Pepito Perez', 'jajajajaa\r\n', 'parvulos'),
(11, 'images/art-89198_1920.jpg', 'grrr', 'nuevo estudiante', 'parvulos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informations`
--

CREATE TABLE `informations` (
  `id` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email_one` varchar(100) DEFAULT NULL,
  `email_two` varchar(100) DEFAULT NULL,
  `phone_one` varchar(25) DEFAULT NULL,
  `phone_two` varchar(20) DEFAULT NULL,
  `url_image` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `informations`
--

INSERT INTO `informations` (`id`, `description`, `location`, `address`, `email_one`, `email_two`, `phone_one`, `phone_two`, `url_image`, `image`) VALUES
(1, 'En esta sección encuentras un formulario para enviar tus datos para que el centro educativo mi pequeño mundo se comunique contigo.', 'Barbosa, Santander', 'Crr 8 # 14a-15', 'mipequeñomundo@gmail.com', NULL, '+57 3136052704', NULL, 'https://www.google.com/maps/place/Cl.+8,+Barbosa,+Santander/@5.9301738,-73.6169024,19z/data=!4m13!1m7!3m6!1s0x8e41e5b0cab066ad:0x4192c22730e82d43!2sCl.+8,+Barbosa,+Santander!3b1!8m2!3d5.93007!4d-73.6169669!3m4!1s0x8e41e5b0cab066ad:0x4192c22730e82d43!8m2!3d5.93007!4d-73.6169669?hl=es', 'images/barbosaubicacion.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `url_media` varchar(255) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `section` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `news`
--

INSERT INTO `news` (`id`, `url_media`, `title`, `description`, `section`) VALUES
(1, 'images/art-89198_1920.jpg', 'Es importante comer acompañado', 'Según estudios se ha demostrado que la compañía a la hora de comer es importante...', 'news'),
(2, 'images/noticias.png', 'Sección de noticias ', 'En este párrafo puedes hacer una explicación o presentacion de una noticias importante para mi pequeño mundo.... ', 'news'),
(3, 'images/periodico_logo.png', 'Seccion noticias dos', 'En este párrafo puedes hacer una explicación o presentacion de una noticias importante para mi pequeño mundo.... ', 'news'),
(4, 'images/evento_independencia.jpg', 'Eventos de la institución\r\n', 'En este párrafo puedes hacer una explicación o presentacion de un evento importante para mi pequeño mundo.... ', 'events'),
(5, 'images/evento_dia_docente.jpg', 'Eventos dia del docente ', 'En este párrafo puedes hacer una explicación o presentacion de un evento importante para mi pequeño mundo.... ', 'events'),
(6, 'images/evento_dia_docente.jpg', 'Eventos de la institución', 'En este párrafo puedes hacer una explicación o presentacion de un evento importante para mi pequeño mundo....', 'events'),
(7, 'images/info.jpg', 'my little', 'En este párrafo puedes hacer una explicación importante para seccion de admisiones para mi pequeño mundo.... ', 'admisiones'),
(8, 'images/matriculas.jpg', 'Admisiones', 'En este párrafo puedes hacer una explicación importante para sección de admisiones para mi pequeño mundo.... ', 'admisiones'),
(9, 'images/info.jpg', 'Inscripciones Abiertas', 'En este párrafo puedes hacer una explicación importante para sección de inscripciones para mi pequeño mundo.... ', 'matriculas'),
(10, 'images/matriculas.jpg', 'Inscripciones Abiertas', 'En este párrafo puedes hacer una explicación importante para sección de admisiones para mi pequeño mundo.... ', 'matriculas'),
(11, 'images/04-Anuncio.png', '', 'asfdgshfdjfhkhjfgfsdashrjtrhdfgsfad', 'admisiones'),
(12, 'images/art-89198_1920.jpg', 'Noticia ultima hora', 'jajjasjdjhasjdhuehfoheuhfoefbkabsfe', 'admisiones'),
(13, 'images/art-89198_1920.jpg', 'Noticia ', 'wqewrtyfugjfdssasdfgxcnvmbvvcsgdhfjgkyjhgfdsf', 'matriculas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `observers`
--

CREATE TABLE `observers` (
  `id_observers` int(11) NOT NULL,
  `grade_students_idgrade_student` int(11) NOT NULL,
  `modification_date` timestamp(6) NULL DEFAULT NULL,
  `creation_date` timestamp(6) NULL DEFAULT NULL,
  `deleted_date` timestamp(6) NULL DEFAULT NULL,
  `descripcion` longtext DEFAULT NULL,
  `corrective_measures` longtext DEFAULT NULL,
  `commitment` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `students`
--

CREATE TABLE `students` (
  `id_estudent` int(11) NOT NULL,
  `blood_type` varchar(5) DEFAULT NULL,
  `health_insurance` varchar(45) DEFAULT NULL,
  `age` varchar(45) DEFAULT NULL,
  `date_birth` timestamp(6) NULL DEFAULT NULL,
  `place_birth` varchar(45) DEFAULT NULL,
  `stratum` varchar(15) DEFAULT NULL,
  `direction` varchar(45) DEFAULT NULL,
  `neighborhood` varchar(45) DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  `users_document` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subjects`
--

CREATE TABLE `subjects` (
  `id_subject` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `teachers_id_teacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `document_type` varchar(45) NOT NULL,
  `document` bigint(12) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `user` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `rol` varchar(45) NOT NULL,
  `date_entry` timestamp(6) NULL DEFAULT NULL,
  `study_level` varchar(45) DEFAULT NULL,
  `SUBJECTS_id_subject` int(11) NOT NULL,
  `GRADES_id_grade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `coming`
--
ALTER TABLE `coming`
  ADD PRIMARY KEY (`id_coming`),
  ADD KEY `fk_COMING_USERS1` (`users_document`);

--
-- Indices de la tabla `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id_grade`);

--
-- Indices de la tabla `grades_subjects`
--
ALTER TABLE `grades_subjects`
  ADD PRIMARY KEY (`grades_id_grade`,`subject_id_subject`),
  ADD KEY `fk_GRADES_has_SUBJECTS_SUBJECTS1` (`subject_id_subject`);

--
-- Indices de la tabla `grade_students`
--
ALTER TABLE `grade_students`
  ADD PRIMARY KEY (`idgrade_student`),
  ADD KEY `fk_GRADES_has_STUDENTS_GRADES1` (`grades_id_grade`),
  ADD KEY `fk_GRADES_has_STUDENTS_STUDENTS1` (`students_id_estudent`);

--
-- Indices de la tabla `honors`
--
ALTER TABLE `honors`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `informations`
--
ALTER TABLE `informations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `observers`
--
ALTER TABLE `observers`
  ADD PRIMARY KEY (`id_observers`),
  ADD KEY `fk_OBSERVERS_GRADE_STUDENTS1` (`grade_students_idgrade_student`);

--
-- Indices de la tabla `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id_estudent`),
  ADD KEY `fk_STUDENTS_USERS` (`users_document`);

--
-- Indices de la tabla `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id_subject`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`document`),
  ADD KEY `fk_USERS_SUBJECTS1` (`SUBJECTS_id_subject`),
  ADD KEY `fk_USERS_GRADES1` (`GRADES_id_grade`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `grade_students`
--
ALTER TABLE `grade_students`
  MODIFY `idgrade_student` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `honors`
--
ALTER TABLE `honors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `informations`
--
ALTER TABLE `informations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `students`
--
ALTER TABLE `students`
  MODIFY `id_estudent` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `coming`
--
ALTER TABLE `coming`
  ADD CONSTRAINT `fk_COMING_USERS1` FOREIGN KEY (`users_document`) REFERENCES `users` (`document`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `grades_subjects`
--
ALTER TABLE `grades_subjects`
  ADD CONSTRAINT `fk_GRADES_has_SUBJECTS_GRADES1` FOREIGN KEY (`grades_id_grade`) REFERENCES `grades` (`id_grade`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_GRADES_has_SUBJECTS_SUBJECTS1` FOREIGN KEY (`subject_id_subject`) REFERENCES `subjects` (`id_subject`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `grade_students`
--
ALTER TABLE `grade_students`
  ADD CONSTRAINT `fk_GRADES_has_STUDENTS_GRADES1` FOREIGN KEY (`grades_id_grade`) REFERENCES `grades` (`id_grade`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_GRADES_has_STUDENTS_STUDENTS1` FOREIGN KEY (`students_id_estudent`) REFERENCES `students` (`id_estudent`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `observers`
--
ALTER TABLE `observers`
  ADD CONSTRAINT `fk_OBSERVERS_GRADE_STUDENTS1` FOREIGN KEY (`grade_students_idgrade_student`) REFERENCES `grade_students` (`idgrade_student`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `fk_STUDENTS_USERS` FOREIGN KEY (`users_document`) REFERENCES `users` (`document`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_USERS_GRADES1` FOREIGN KEY (`GRADES_id_grade`) REFERENCES `grades` (`id_grade`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_USERS_SUBJECTS1` FOREIGN KEY (`SUBJECTS_id_subject`) REFERENCES `subjects` (`id_subject`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
