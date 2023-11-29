SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `product` (
    `id_producto` INT(11) NOT NULL AUTO_INCREMENT,
    `description` varchar(255) NOT NULL DEFAULT '',
    `cost` int(11) NOT NULL DEFAULT 0.00,
    `amount` int(11) NOT NULL DEFAULT 0,
    `image_name` varchar(255) NOT NULL DEFAULT '',
    `type` varchar(30) NOT NULL,
    `size` varchar(30) NOT NULL,
    `color` varchar(100) NOT NULL DEFAULT '',
    `gender` varchar(20) NOT NULL,
    PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci AUTO_INCREMENT=1;

INSERT INTO `product` (
    `id_producto`,
    `description`,
    `cost`,
    `amount`,
    `image_name`,
    `type`,
    `size`,
    `color`,
    `gender`
    ) VALUES
(1, 'Manfinity Sporsity Hombres Pantalones deportivos con capucha con estampado de letra de color combinado con bolsillo de canguro con cordon', 532.95, 10, 'nasa_manfinity_hombre.jpg', 'Conjunto', 'M', 'Negro', 'Hombre'), 
(2, 'Manfinity Basics Hombres Camisa unicolor con botón delantero & Pantalones de cintura con cordón sin camiseta', 536, 7, 'conjunto_basics_manfinity_hombre.jpg', 'Conjunto', 'G', 'Negro', 'Hombre'), 
(3, 'Manfinity Homme Hombres Camisa de rayas & Shorts de cintura con cordón sin camiseta', 426, 8, 'conjunto_homme_manfinity_hombre.jpg', 'Conjunto', 'C', 'Multicolor', 'Hombre'), 
(4, 'Manfinity Homme Hombres talla grande Pantalones deportivos con sudadera con estampado de letra', 680, 6, 'conjunto_homme_manfinity_king.jpg', 'Conjunto', 'M', 'Albaricoque', 'Hombre'), 
(5, 'Hombres Camiseta deportiva con estampado de letra de manga raglán', 459, 8, 'camiseta_hombre_raglan_rojo.jpg', 'Deportivo', 'G', 'Rojo', 'Hombre'), 
(6, 'Running Hombres Top tank deportivo de hombré', 106.4, 5, 'camisate_bombre_run_rojo.jpg', 'Deportivo', 'C', 'Negro', 'Hombre'), 
(7, 'Pantalones cortos deportivos de camuflaje para hombre 2 en 1 de secado rápido para entrenamiento gimnasio Fitness Jogging Verano',139,5,'short_deportivo_camuflaje_hombre.jpg','Deportivo','M','Gris oscuro','Hombre'), 
(8, 'Hombres Shorts deportivos de hombré de cintura con cordón', 268, 7, 'short_deportivo_azul.jpg', 'Deportivo', 'C', 'Azul', 'Hombre'), 
(9, 'Sudadera Hombre Con Capucha Con Cierre Hoodie', 219, 5, 'sudadera_hombre_hoddie_azul.jpg', 'Sudadera', 'M', 'Azul', 'Hombre'), 
(10, 'Manfinity Homme Hombres Capucha de dos tonos con bolsillo de canguro con cordón', 391, 8, 'sudadera_hombre_hoddie_caqui.jpg', 'Sudadera', 'G', 'Caqui', 'Hombre'), 
(11, 'Hombres Capucha con estampado de letra con bolsillo de canguro con cordón', 344, 5, 'sudadera_hombre_hoddie_negro.jpg', 'Sudadera', 'C', 'Negro', 'Hombre'), 
(12, 'Manfinity Homme Sudadera Con Capucha Para Hombre Con Estampado De Letras Y Cordón', 356, 9, 'sudadera_hombre_hoddie_celeste.jpg', 'Sudadera', 'C', 'Celeste', 'Hombre'), 
(13, 'Chaqueta de cuero para hombre', 500, 6, 'chaquetaHombre1.jpg', 'Chaqueta/Abrigo', 'M', 'Beige', 'Hombre'), 
(14, 'Abrigo formal de botones para hombre', 1200, 5, 'chaquetaHombre2.jpg', 'Chaqueta/Abrigo', 'G', 'Gris', 'Hombre'), 
(15, 'Abrigo formal con cinto para hombre', 700, 5, 'chaquetaHombre3.jpg', 'Chaqueta/Abrigo', 'M', ' Gris', 'Hombre'), 
(16, 'Chaqueta casual para hombre', 550, 7, 'chaquetaHombre4.jpg', 'Chaqueta/Abrigo', 'G', 'Cafe', 'Hombre'), 
(17, 'Reloj avanzado para hombre', 300, 8, 'accesorioHombre1.jpg', 'Accesorio', 'M', ' Negro', 'Hombre'), 
(18, 'Reloj sencillo para hombre', 200, 10, 'accesorioHombre2.jpg', 'Accesorio', 'M', 'Negro', 'Hombre'), 
(19, 'Sombrero con pluma para hombre', 400, 5, 'accesorioHombre3.jpg', 'Accesorio', 'G', 'Naranja', 'Hombre'), 
(20, 'Sombrero elegante para hombre', 300, 9, 'accesorioHombre4.jpg', 'Accesorio', 'G', 'Negro', 'Hombre'), 
(21, 'Calcetin con estampado para hombre', 350, 5, 'ropaInteriorHombre1.jpg', 'Ropa interior', 'G', 'Naranja', 'Hombre'), 
(22, 'Calcetin sencillo para hombre', 500, 8, 'ropaInteriorHombre2.jpg', 'Ropa interior', 'M', 'Blanco', 'Hombre'), 
(23, 'Boxer ancho para hombre', 600, 6, 'ropaInteriorHombre3.jpg', 'Ropa interior', 'C', 'Varios', 'Hombre'), 
(24, 'Boxer de cuadros para hombre', 400, 7, 'ropaInteriorHombre4.jpg', 'Ropa interior', 'C', 'Rojo', 'Hombre'),
(25, 'Anillo de oro con detalle en flores', 60, 5, 'anilloDeOroConDetalleFlores.jpeg', 'Accesorio', 'G', 'Dorado', 'Mujer'), 
(26, 'Par de anillos de oro con detalles en piedras blancas', 120, 5, 'anillosDeOroConPiedrasBlancas.jpeg', 'Accesorio', 'M', 'Dorado', 'Mujer'), 
(27, 'Tiara de oro con detalle en flores', 200, 5, 'tiaraDeOroConFlores.jpeg', 'Accesorio', 'M', 'Dorado', 'Mujer'), 
(28, 'Aretes de plata en forma de luna', 120, 5, 'aretesDePlata.jpeg', 'Accesorio', 'G', 'Plata', 'Mujer'), 
(29, 'Abrigo de cuello cascada con botones', 1000, 5, 'abrigoBlanco.jpeg', 'Chaqueta/abrigo', 'M', 'Blanco', 'Mujer'), 
(30, 'Abrigo de cuadruple botonadura de cuello con solapa', 1000, 5, 'abrigoCafe.jpeg', 'Chaqueta/abrigo', 'G', 'Café', 'Mujer'), 
(31, 'Chaqueta denim con botones', 800, 5, 'chaquetaAzul.jpeg', 'Chaqueta/abrigo', 'M', 'Azul', 'Mujer'), 
(32, 'Cazadora tipo bomber', 1000, 5, 'chaquetaNegra.jpeg', 'Chaqueta/abrigo', 'C', 'Negro', 'Mujer'), 
(33, 'Conjunto blazer, camisa y pantalones', 1500, 5, 'conjunto1.jpeg', 'Conjunto', 'G', 'Azul', 'Mujer'), 
(34, 'Conjunto estilo oriental', 2000, 5, 'conjunto2.jpeg', 'Conjunto', 'M', 'Rojo', 'Mujer'), 
(35, 'Conjunto sombrero con ala camisa de manga larga y pantalones', 1000, 5, 'conjunto3.jpeg', 'Conjunto', 'M', 'Verde', 'Mujer'), 
(36, 'Conjunto blusa de manga larga y shorts con detalle en flores', 1000, 5, 'conjunto4.jpeg', 'Conjunto', 'C', 'Amarillo', 'Mujer'), 
(37, 'Blusa deportiva ceñida con cremallera', 500, 5, 'blusaBlancaDeportiva.jpeg', 'Deportivo', 'C', 'Blanco', 'Mujer'), 
(38, 'Conjunto blusa y pantalones deportivos de algodón', 800, 5, 'conjuntoDeportivoRosa.jpeg', 'Deportivo', 'G', 'Rosado', 'Mujer'), 
(39, 'Conjunto sudadera cuello v con pantalones deportivos', 600, 5, 'conjuntoDeportivoAzul.jpg', 'Deportivo', 'C', 'Azul', 'Mujer'), 
(40, 'Pantalones deportivos de algodón', 500, 5, 'pantalonesNegrosDeportivos.jpeg', 'Deportivo', 'M', 'Negro', 'Mujer'), 
(41, 'Paquete calcetines neutrales con rayas', 150, 5, 'paqueteCalcetinesRayas.jpeg', 'Ropa interior', 'C', 'Blanco', 'Mujer'), 
(42, 'Paquete de calcetas tobilleras de algodón', 150, 5, 'paqueteTines.jpeg', 'Ropa interior', 'M', 'Blanco', 'Mujer'), 
(43, 'Paquete de calcetines coloridos de algodón con dibujos', 200, 5, 'paqueteCalcetinesColoridos.jpeg', 'Ropa interior', 'G', 'Rosado', 'Mujer'), 
(44, 'Calcetines largos con diseño fruncido', 50, 5, 'calcetinesNegros.jpeg', 'Ropa interior', 'C', 'Negro', 'Mujer'), 
(45, 'Sudadera blanca con estampado de flores', 450, 5, 'sudaderaBlanca.jpeg', 'Sudadera', 'G', 'Blanco', 'Mujer'), 
(46, 'Sudadera negra con grafico de gato', 450, 5, 'sudaderaGato.jpeg', 'Sudadera', 'C', 'Negro', 'Mujer'), 
(47, 'Sudadera negra con grafico de gato y detalles en manga', 450, 5, 'sudaderaGatoConRayas.jpeg', 'Sudadera', 'M', 'Negro', 'Mujer'), 
(48, 'Sudadera color lavanda', 450, 5, 'sudaderaLavanda.jpeg', 'Sudadera', 'G', 'Morado', 'Mujer');

CREATE TABLE `user` (
    `id_user` int(11) NOT NULL AUTO_INCREMENT,
    `fullname` varchar(100) NOT NULL,
    `email` varchar(100) NOT NULL,
    `password` varchar(100) NOT NULL,
    `rol` int(5) NOT NULL,
    PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `user` (`id_user`, `fullname`, `email`, `password`,`rol`) VALUES
(1, 'Ruben Alvarado', 'ruben.alvarado@niehs.com', '12345', 0),
(2, 'Jose Puc', 'jose.puc@niehs.com', '12345', 0),
(3, 'Miguel Castillo', 'mike.castillo@niehs.com', '12345', 0),
(4, 'Ileana Castillo', 'ileana.castillo@niehs.com', '12345', 0),
(5, 'Jean Buenfil', 'jean.buenfil@niehs.com', '12345', 0),
(6, 'Administrador Sanchez', 'admin.sanchez@niehs.com', '12345', 1),
(7, 'Administrador Juarez', 'admin.juarez@niehs.com', '12345', 1);