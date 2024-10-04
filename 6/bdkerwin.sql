-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-10-2024 a las 15:01:19
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdkerwin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `ci` int(200) NOT NULL,
  `paterno` varchar(200) NOT NULL,
  `materno` varchar(200) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `telefono` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`ci`, `paterno`, `materno`, `nombre`, `telefono`) VALUES
(10072756, 'Mayta', 'Quisbert', 'Roman', 62371590),
(10072757, 'Condori', 'Quispe', 'Juan Carlos', 62371591),
(10072758, 'Lopez', 'Mamani', 'Maria Fernanda', 62371592),
(10072759, 'Gutiérrez', 'Apaza', 'José Luis', 62371593),
(10072760, 'Vargas', 'Choque', 'Ana Gabriela', 62371594),
(10072761, 'Quispe', 'Llanos', 'Luis Alberto', 62371595),
(10072762, 'Paredes', 'Mendoza', 'Karla Vanessa', 62371596),
(10072763, 'Torrez', 'Arias', 'Oscar Raúl', 62371597),
(10072764, 'Romero', 'Villca', 'Veronica Paola', 62371598),
(10072765, 'Apaza', 'Mamani', 'Daniel Roberto', 62371599),
(10072766, 'Montano', 'Callisaya', 'Carmen Julia', 62371600),
(10072767, 'Flores', 'Zurita', 'Santiago Rene', 62371601),
(10072768, 'Aguirre', 'Alvarez', 'Jorge Mario', 62371602),
(10072769, 'Lima', 'Calle', 'Andrea Pamela', 62371603),
(10072770, 'Rojas', 'Rodriguez', 'Mauricio Javier', 62371604),
(10072771, 'Fernandez', 'Aguayo', 'Liliana Sofia', 62371605),
(10072772, 'Gonzalez', 'Vargas', 'Victor Hugo', 62371606),
(10072773, 'Salazar', 'Alvarez', 'Patricia Beatriz', 62371607),
(10072774, 'Perez', 'Lopez', 'Carlos Alberto', 62371608),
(10072775, 'Ortiz', 'Flores', 'Martha Cecilia', 62371609),
(10072776, 'Ramirez', 'Quintana', 'Rene Armando', 62371610),
(10072777, 'Arce', 'Mendoza', 'Gabriela Fernanda', 62371611),
(10072778, 'Flores', 'Rojas', 'Luis Fernando', 62371612);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedad`
--

CREATE TABLE `propiedad` (
  `id` int(100) NOT NULL,
  `zona` varchar(200) NOT NULL,
  `xinicial` int(200) NOT NULL,
  `yinicial` int(200) NOT NULL,
  `xfinal` int(200) NOT NULL,
  `yfinal` int(200) NOT NULL,
  `superficie` int(255) NOT NULL,
  `propetario` int(200) NOT NULL,
  `distrito` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `propiedad`
--

INSERT INTO `propiedad` (`id`, `zona`, `xinicial`, `yinicial`, `xfinal`, `yfinal`, `superficie`, `propetario`, `distrito`) VALUES
(13561, 'Zona El Alto', 270, 270, 320, 320, 500, 10072756, 'Distrito 4: Max Paredes'),
(13567, 'Zona San Antonio', 330, 330, 380, 380, 500, 10072776, 'Distrito 8: San Antonio'),
(13571, 'Zona Chasquipampa', 370, 370, 420, 420, 500, 10072773, 'Distrito 10: La Paz Sur'),
(13572, 'Zona Irpavi', 380, 380, 430, 430, 500, 10072774, 'Distrito 10: La Paz Sur'),
(13573, 'Zona Achumani', 390, 390, 440, 440, 500, 10072775, 'Distrito 11: Achumani'),
(13574, 'Zona Alto Irpavi', 400, 400, 450, 450, 500, 10072775, 'Distrito 11: Achumani'),
(13575, 'Zona Achumani', 410, 410, 460, 460, 500, 10072777, 'Distrito 11: Achumani'),
(13576, 'Zona Alto Irpavi', 420, 420, 470, 470, 500, 10072777, 'Distrito 11: Achumani'),
(13577, 'Zona Achumani', 430, 430, 480, 480, 500, 10072778, 'Distrito 11: Achumani'),
(13578, 'Zona Alto Irpavi', 440, 440, 490, 490, 500, 10072778, 'Distrito 11: Achumani'),
(23545, 'Zona Villa Fátima', 110, 110, 160, 160, 500, 10072757, 'Distrito 4: Max Paredes'),
(23553, 'Zona La Portada', 190, 190, 240, 240, 500, 10072765, 'Distrito 8: San Antonio'),
(23554, 'Zona Villa Pabón', 200, 200, 250, 250, 500, 10072766, 'Distrito 9: Villa Pabón'),
(23558, 'Zona Achumani', 240, 240, 290, 290, 500, 10072770, 'Distrito 11: Achumani'),
(23562, 'Zona San Sebastián', 280, 280, 330, 330, 500, 10072773, 'Distrito 5: San Sebastián'),
(23565, 'Zona Cotahuma', 310, 310, 360, 360, 500, 10072775, 'Distrito 7: Cotahuma'),
(23566, 'Zona Tembladerani', 320, 320, 370, 370, 500, 10072775, 'Distrito 7: Cotahuma'),
(23568, 'Zona La Portada', 340, 340, 390, 390, 500, 10072776, 'Distrito 8: San Antonio'),
(23570, 'Zona 20 de Octubre', 360, 360, 410, 410, 500, 10072756, 'Distrito 9: Villa Pabón'),
(24557, 'Zona 20 de Octubre', 210, 210, 260, 260, 500, 10072767, 'Distrito 9: Villa Pabón'),
(24567, 'Zona San Antonio', 180, 180, 230, 230, 500, 10072764, 'Distrito 8: San Antonio'),
(24684, 'Zona Chasquipampa', 220, 220, 270, 270, 500, 10072768, 'Distrito 10: La Paz Sur'),
(24788, 'Zona Cotahuma', 160, 160, 210, 210, 500, 10072762, 'Distrito 7: Cotahuma'),
(25646, 'Zona El Alto', 120, 120, 170, 170, 500, 10072758, 'Distrito 5: San Sebastián'),
(27845, 'Zona Irpavi', 230, 230, 280, 280, 500, 10072769, 'Distrito 10: La Paz Sur'),
(28993, 'Zona Irpavi', 50, 60, 150, 200, 800, 10072756, 'Distrito 11: Achumani'),
(33548, 'Zona Miraflores', 140, 140, 190, 190, 500, 10072760, 'Distrito 6: El Alto'),
(33560, 'Zona Villa Fátima', 260, 260, 310, 310, 500, 10072756, 'Distrito 4: Max Paredes'),
(33563, 'Zona Miraflores', 290, 290, 340, 340, 500, 10072774, 'Distrito 6: El Alto'),
(33564, 'Zona Villa Adela', 300, 300, 350, 350, 500, 10072774, 'Distrito 6: El Alto'),
(33569, 'Zona Villa Pabón', 350, 350, 400, 400, 500, 10072756, 'Distrito 9: Villa Pabón'),
(34755, 'Zona Tembladerani', 170, 170, 220, 220, 500, 10072763, 'Distrito 7: Cotahuma'),
(34785, 'Zona Villa Adela', 150, 150, 200, 200, 500, 10072761, 'Distrito 6: El Alto'),
(34897, 'Zona San Sebastián', 130, 130, 180, 180, 500, 10072759, 'Distrito 5: San Sebastián'),
(236547, 'Zona Alto Irpavi', 250, 250, 300, 300, 500, 10072771, 'Distrito 11: Achumani');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`ci`);

--
-- Indices de la tabla `propiedad`
--
ALTER TABLE `propiedad`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
