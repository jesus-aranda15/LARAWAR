-- phpMyAdmin SQL Dump
-- version 5.2.1deb1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 10-12-2024 a las 23:28:32
-- Versión del servidor: 10.11.6-MariaDB-0+deb12u1
-- Versión de PHP: 8.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `OverPower`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `computers`
--

CREATE TABLE `computers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `computers`
--

INSERT INTO `computers` (`id`, `name`, `description`, `price`, `image_path`, `created_at`, `updated_at`) VALUES
(1, 'PC Gamer RYZEN 7 5700G 32GB SSD 960GB WiFi', 'Facilis eligendi quia necessitatibus illum soluta et. Doloribus neque rem voluptatem pariatur aut. Voluptatem sed natus ut non.', 6500.57, 'assets/img/pc1.jpg', '2024-12-05 03:52:09', '2024-12-05 03:52:09'),
(2, 'XTREME PC GAMING AMD Radeon Vega Renoir Ryzen 7 5700G 16GB SSD 240GB 2TB WiFi White', 'Ullam quasi et qui enim nisi pariatur eaque. Qui natus at et. Ipsa sit corporis maiores voluptatum deserunt et nesciunt. Fugiat illo ipsum numquam veniam.', 7669.00, 'assets/img/pc2.jpg', '2024-12-05 03:52:09', '2024-12-05 03:52:09'),
(3, 'PC Gamer RYZEN 7 5700G 32GB SSD 960GB WiFi', 'Delectus dolorem cumque ut. Provident error odit et expedita. Magnam voluptas consequuntur consequatur sit.', 8995.93, 'assets/img/pc3.jpg', '2024-12-05 03:52:09', '2024-12-05 03:52:09'),
(4, 'PC Gamer RYZEN 7 5700G 32GB SSD 1TB Fuente Certificada 750w 80+ (3VentNegro) ', 'Facere omnis consequatur provident. Natus id aspernatur illum odit voluptatibus exercitationem praesentium maxime. Odit odit adipisci dignissimos unde eius occaecati modi.', 10795.49, 'assets/img/pc4.jpg', '2024-12-05 03:52:09', '2024-12-05 03:52:09'),
(5, 'PC Gamer Ferret Pro Ryzen 5 5500/ RTX 3060/ RAM 32GB / SSD 1TB', 'Et sed laudantium voluptatum eligendi consequatur quasi sint sint. Et totam molestiae aut molestias. Qui rerum sapiente expedita laudantium rerum. Ullam non deserunt dolores.', 16499.55, 'assets/img/pc5.jpg', '2024-12-05 03:52:09', '2024-12-05 03:52:09'),
(6, 'iste', 'Ipsam distinctio voluptatum voluptate accusantium corporis. Asperiores eveniet omnis enim autem. Quia quis molestiae minus inventore.', 134.65, NULL, '2024-12-05 03:52:09', '2024-12-05 03:52:09'),
(7, 'adipisci', 'Ipsa voluptatibus porro sapiente quibusdam. Iure natus et veniam aut id modi. Commodi qui cupiditate officia recusandae quia.', 362.27, NULL, '2024-12-05 03:52:09', '2024-12-05 03:52:09'),
(8, 'possimus', 'Tempora animi cupiditate distinctio possimus et deserunt autem. Velit reiciendis distinctio et quae eum at. Ratione dolore quasi accusamus odit optio qui explicabo. Excepturi id perferendis numquam pariatur tempore ea velit soluta. Eaque possimus et est voluptatibus error.', 1942.60, NULL, '2024-12-05 03:52:09', '2024-12-05 03:52:09'),
(9, 'iste', 'Aliquid vel debitis quibusdam velit illum veniam amet. Odit vel expedita voluptatem pariatur distinctio ea sed culpa. Non dolores voluptatem non omnis quaerat reiciendis voluptas.', 1636.44, NULL, '2024-12-05 03:52:09', '2024-12-05 03:52:09'),
(10, 'sapiente', 'Et saepe perferendis vel autem praesentium vero. Sunt pariatur eaque quas ratione eius. Non natus molestiae voluptatum non. Modi dolore a numquam non.', 406.50, NULL, '2024-12-05 03:52:09', '2024-12-05 03:52:09'),
(11, 'possimus', 'Dicta perferendis commodi provident enim. Eaque maiores minus consequuntur incidunt molestias non sed rerum. Dicta et repellendus et dolorem ex eum rerum reprehenderit.', 228.76, NULL, '2024-12-05 03:52:09', '2024-12-05 03:52:09'),
(12, 'est', 'Facilis animi id vitae reiciendis et ratione pariatur. Molestiae sunt est facilis nemo. Et enim quam cum unde recusandae sequi.', 793.60, NULL, '2024-12-05 03:52:09', '2024-12-05 03:52:09'),
(13, 'ut', 'At qui minus impedit eaque nisi et dolore. Unde rerum expedita modi deleniti ut dolores. Nulla quaerat dolores aliquid in ullam et eum deleniti.', 907.56, NULL, '2024-12-05 03:52:09', '2024-12-05 03:52:09'),
(14, 'magni', 'Vel dicta tenetur quia impedit accusamus unde. Omnis veniam consequuntur eum ullam et. Sint dolorem velit ipsa omnis dolorem impedit.', 1524.42, NULL, '2024-12-05 03:52:09', '2024-12-05 03:52:09'),
(15, 'ex', 'Autem eum aut non sed laborum velit facere. Veniam laborum consequatur magni qui omnis voluptas.', 658.72, NULL, '2024-12-05 03:52:09', '2024-12-05 03:52:09'),
(16, 'odit', 'Aut enim aut enim ut ab. Earum autem voluptatem voluptatem voluptatem voluptatem nemo. Enim quasi eos aut qui minima rerum non. Non doloremque recusandae praesentium deserunt non.', 1010.55, NULL, '2024-12-05 03:52:09', '2024-12-05 03:52:09'),
(17, 'tenetur', 'Consequatur quasi hic ipsa iste. Iure explicabo et voluptatem. Ut impedit laborum consequatur pariatur dolore quia laudantium. Totam ratione et rem voluptatem.', 973.73, NULL, '2024-12-05 03:52:09', '2024-12-05 03:52:09'),
(18, 'vitae', 'Natus cum illo fugit reiciendis itaque. Necessitatibus aut laborum autem vel temporibus reiciendis. Iusto incidunt autem harum similique culpa.', 1055.82, NULL, '2024-12-05 03:52:09', '2024-12-05 03:52:09'),
(19, 'dolor', 'A dolorem deserunt dolores sunt dolor est temporibus ipsum. Et facilis magni est temporibus incidunt unde.', 760.12, NULL, '2024-12-05 03:52:09', '2024-12-05 03:52:09'),
(20, 'eligendi', 'Ut aspernatur et hic ipsum consequatur veniam. Ipsa tempora voluptatibus accusamus voluptas debitis. Sequi voluptates provident dolore debitis. Sunt omnis et ad qui minima accusantium accusantium hic.', 463.24, NULL, '2024-12-05 03:52:09', '2024-12-05 03:52:09');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `computers`
--
ALTER TABLE `computers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `computers`
--
ALTER TABLE `computers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
