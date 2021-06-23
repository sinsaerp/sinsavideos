-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla sinsavideos.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla sinsavideos.categorias: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`id`, `nombre`, `imagen`, `estado`, `created_at`, `updated_at`) VALUES
	(1, 'ADMISIONES', 'admisiones.png', 1, '2021-06-22 19:08:03', '2021-06-22 19:08:03'),
	(2, 'FACTURACION', 'facturacion.png', 1, '2021-06-22 19:36:45', '2021-06-22 19:36:45');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;

-- Volcando estructura para tabla sinsavideos.contador
CREATE TABLE IF NOT EXISTS `contador` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `video_id` bigint(20) unsigned NOT NULL,
  `total` int(11) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `contador_video_id_foreign` (`video_id`),
  CONSTRAINT `contador_video_id_foreign` FOREIGN KEY (`video_id`) REFERENCES `videos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla sinsavideos.contador: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `contador` DISABLE KEYS */;
INSERT INTO `contador` (`id`, `video_id`, `total`, `estado`, `created_at`, `updated_at`) VALUES
	(1, 1, 38, 1, '2021-06-23 00:29:15', '2021-06-23 00:29:15'),
	(2, 10, 23, 1, '2021-06-23 00:52:13', '2021-06-23 00:52:13');
/*!40000 ALTER TABLE `contador` ENABLE KEYS */;

-- Volcando estructura para tabla sinsavideos.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla sinsavideos.failed_jobs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Volcando estructura para tabla sinsavideos.historial
CREATE TABLE IF NOT EXISTS `historial` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `video_id` bigint(20) unsigned NOT NULL,
  `usuario` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `historial_video_id_foreign` (`video_id`),
  CONSTRAINT `historial_video_id_foreign` FOREIGN KEY (`video_id`) REFERENCES `videos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla sinsavideos.historial: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `historial` DISABLE KEYS */;
INSERT INTO `historial` (`id`, `video_id`, `usuario`, `total`, `estado`, `created_at`, `updated_at`) VALUES
	(1, 1, 2, 6, 1, '2021-06-23 02:45:22', '2021-06-23 02:45:22');
/*!40000 ALTER TABLE `historial` ENABLE KEYS */;

-- Volcando estructura para tabla sinsavideos.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla sinsavideos.migrations: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2019_08_19_000000_create_failed_jobs_table', 1),
	(3, '2021_06_22_161007_create_servicios_table', 1),
	(4, '2021_06_22_161048_create_videos_table', 1),
	(5, '2021_06_22_161310_create_categorias_table', 1),
	(6, '2021_06_22_161706_create_video_categorias_table', 1),
	(7, '2021_06_22_172952_create_video_servicios_table', 1),
	(8, '2021_06_22_231717_create_contador_table', 1),
	(9, '2021_06_22_231729_create_historial_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla sinsavideos.servicios
CREATE TABLE IF NOT EXISTS `servicios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla sinsavideos.servicios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `servicios` DISABLE KEYS */;
/*!40000 ALTER TABLE `servicios` ENABLE KEYS */;

-- Volcando estructura para tabla sinsavideos.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo` int(11) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla sinsavideos.users: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `nombre`, `nit`, `direccion`, `telefono`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `tipo`, `estado`, `created_at`, `updated_at`) VALUES
	(1, 'CEHOS', 'CEHOS', 'sincelejo', '23232', 'cehos@mail.caom', 'cehos', NULL, '$2y$10$atSY2brBdy9/Oc6jC3yDquqHx.HNznTWbdwfbh716nemIpfCf4AaK', NULL, 2, 1, '2021-06-23 01:54:09', '2021-06-23 01:59:00'),
	(2, 'EDUARDO ALMANZA', 'EDUARDO ALMANZA', '', '', 'eduardopipe2@mail.com', 'sinsa', NULL, '$2y$10$F3CLwqmV3NqmiGNtKdX2MeCveEA0pMqHLmJT9svEGTNRgcwLSVX52', NULL, 1, 1, '2021-06-23 01:54:52', '2021-06-23 03:04:03');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Volcando estructura para tabla sinsavideos.videos
CREATE TABLE IF NOT EXISTS `videos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visible` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'SI',
  `ruta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla sinsavideos.videos: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` (`id`, `titulo`, `descripcion`, `visible`, `ruta`, `estado`, `created_at`, `updated_at`) VALUES
	(1, 'Siesa', 'siesa', 'SI', 'https://www.youtube.com/embed/3ILVM9wpfUA', 1, '2021-06-23 00:14:16', '2021-06-23 00:14:16'),
	(10, 'navegacion Siesa', 'siesa', 'SI', 'https://www.youtube.com/embed/UUPmi692Osc', 1, '2021-06-23 00:37:59', '2021-06-23 00:37:59');
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;

-- Volcando estructura para tabla sinsavideos.video_categorias
CREATE TABLE IF NOT EXISTS `video_categorias` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `video_id` bigint(20) unsigned NOT NULL,
  `categoria_id` bigint(20) unsigned NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `video_categorias_video_id_foreign` (`video_id`),
  KEY `video_categorias_categoria_id_foreign` (`categoria_id`),
  CONSTRAINT `video_categorias_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`),
  CONSTRAINT `video_categorias_video_id_foreign` FOREIGN KEY (`video_id`) REFERENCES `videos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla sinsavideos.video_categorias: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `video_categorias` DISABLE KEYS */;
INSERT INTO `video_categorias` (`id`, `video_id`, `categoria_id`, `estado`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 1, '2021-06-23 00:14:16', '2021-06-23 00:14:16'),
	(2, 1, 1, 1, '2021-06-23 00:14:16', '2021-06-23 00:14:16'),
	(3, 1, 1, 1, '2021-06-23 00:14:16', '2021-06-23 00:14:16'),
	(4, 1, 1, 1, '2021-06-23 00:14:16', '2021-06-23 00:14:16'),
	(5, 1, 1, 1, '2021-06-23 00:14:16', '2021-06-23 00:14:16'),
	(6, 1, 1, 1, '2021-06-23 00:14:16', '2021-06-23 00:14:16'),
	(7, 10, 2, 1, '2021-06-23 00:37:59', '2021-06-23 00:37:59');
/*!40000 ALTER TABLE `video_categorias` ENABLE KEYS */;

-- Volcando estructura para tabla sinsavideos.video_servicios
CREATE TABLE IF NOT EXISTS `video_servicios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `video_id` bigint(20) unsigned NOT NULL,
  `servicio_id` bigint(20) unsigned NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `video_servicios_video_id_foreign` (`video_id`),
  KEY `video_servicios_servicio_id_foreign` (`servicio_id`),
  CONSTRAINT `video_servicios_servicio_id_foreign` FOREIGN KEY (`servicio_id`) REFERENCES `servicios` (`id`),
  CONSTRAINT `video_servicios_video_id_foreign` FOREIGN KEY (`video_id`) REFERENCES `videos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla sinsavideos.video_servicios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `video_servicios` DISABLE KEYS */;
/*!40000 ALTER TABLE `video_servicios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
