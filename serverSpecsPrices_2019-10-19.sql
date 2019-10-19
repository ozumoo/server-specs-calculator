# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.26)
# Database: serverSpecsPrices
# Generation Time: 2019-10-19 01:33:42 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table cart_packages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cart_packages`;

CREATE TABLE `cart_packages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cart_id` int(10) unsigned DEFAULT NULL,
  `vCpu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transfer_limit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_storage_space` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_storage_price` int(11) DEFAULT NULL,
  `package_price` int(11) DEFAULT NULL,
  `total_price` int(11) DEFAULT NULL,
  `os_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subsucription_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `cart_packages` WRITE;
/*!40000 ALTER TABLE `cart_packages` DISABLE KEYS */;

INSERT INTO `cart_packages` (`id`, `cart_id`, `vCpu`, `ram`, `disk`, `transfer_limit`, `extra_storage_space`, `extra_storage_price`, `package_price`, `total_price`, `os_type`, `subsucription_type`, `created_at`, `updated_at`)
VALUES
	(1,NULL,'1 vCPU','1 GB','25 GB','unlimited','0',0,40,40,'windows','monthly',NULL,NULL),
	(2,NULL,'1 vCPU','1 GB','25 GB','unlimited','0',0,1,1,'windows','monthly',NULL,NULL),
	(3,NULL,'1 vCPU','1 GB','25 GB','unlimited','0',0,40,40,'windows','monthly',NULL,NULL),
	(4,NULL,'1 vCPU','1 GB','25 GB','unlimited','0',0,40,40,'windows','monthly',NULL,NULL),
	(5,NULL,'1 vCPU','1 GB','25 GB','unlimited','0',0,40,40,'windows','monthly',NULL,NULL),
	(6,NULL,'1 vCPU','1 GB','25 GB','unlimited','0',0,40,40,'windows','monthly',NULL,NULL),
	(7,NULL,'1 vCPU','1 GB','25 GB','unlimited','0',0,40,40,'windows','monthly',NULL,NULL),
	(8,NULL,'1 vCPU','1 GB','25 GB','unlimited','0',0,40,40,'windows','monthly',NULL,NULL),
	(9,NULL,'1 vCPU','1 GB','25 GB','unlimited','0',0,40,40,'windows','monthly',NULL,NULL),
	(10,NULL,'1 vCPU','1 GB','25 GB','unlimited','0',0,40,40,'windows','monthly',NULL,NULL),
	(11,NULL,'1 vCPU','1 GB','25 GB','unlimited','0',0,40,40,'windows','monthly',NULL,NULL),
	(12,NULL,'1 vCPU','1 GB','25 GB','unlimited','0',0,40,40,'windows','monthly',NULL,NULL),
	(13,1,'1 vCPU','3 GB','60 GB','unlimited','33',0,50,50,'windows','monthly',NULL,NULL),
	(14,1,'1 vCPU','1 GB','25 GB','unlimited','0',0,40,40,'windows','monthly',NULL,NULL),
	(15,1,'1 vCPU','1 GB','25 GB','unlimited','0',0,57,57,'linux','yearly',NULL,NULL),
	(16,2,'1 vCPU','1 GB','25 GB','unlimited','0',0,40,40,'windows','monthly',NULL,NULL),
	(17,3,'1 vCPU','1 GB','25 GB','unlimited','0',0,57,57,'linux','yearly',NULL,NULL),
	(18,3,'1 vCPU','1 GB','25 GB','unlimited','100',0,460,460,'windows','yearly',NULL,NULL),
	(19,3,'1 vCPU','1 GB','25 GB','unlimited','0',0,40,40,'windows','monthly',NULL,NULL);

/*!40000 ALTER TABLE `cart_packages` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table carts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `carts`;

CREATE TABLE `carts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `carts` WRITE;
/*!40000 ALTER TABLE `carts` DISABLE KEYS */;

INSERT INTO `carts` (`id`, `status`, `user_id`, `created_at`, `updated_at`)
VALUES
	(3,'pending',3,'2019-10-19 01:24:01','2019-10-19 01:24:01');

/*!40000 ALTER TABLE `carts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1),
	(3,'2019_10_04_193246_create_packages_table',1),
	(10,'2019_10_18_233455_create_carts_table',2),
	(11,'2019_10_18_233857_create_cart_packages',3);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table packages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `packages`;

CREATE TABLE `packages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order` int(11) DEFAULT NULL,
  `vCpu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transfer_limit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linux_price_per_month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `windows_price_per_month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linux_price_per_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `windows_price_per_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `packages` WRITE;
/*!40000 ALTER TABLE `packages` DISABLE KEYS */;

INSERT INTO `packages` (`id`, `order`, `vCpu`, `ram`, `disk`, `transfer_limit`, `linux_price_per_month`, `windows_price_per_month`, `linux_price_per_year`, `windows_price_per_year`, `created_at`, `updated_at`)
VALUES
	(1,1,'1 vCPU','1 GB','25 GB','unlimited','$5.00','$40.00 ','$57.50','$460.00',NULL,NULL),
	(2,2,'1 vCPU','2 GB','50 GB','unlimited','$10.00','$45.00 ','$115.00','$517.50',NULL,NULL),
	(3,3,'1 vCPU','3 GB','60 GB','unlimited','$15.00','$50.00 ','$172.50','$575.00',NULL,NULL),
	(4,4,'2 vCPUs','2 GB','60 GB','unlimited','$15.00','$50.00 ','$172.50','$575.00',NULL,NULL),
	(5,5,'2 vCPUs','1 GB','60 GB','unlimited','$15.00','$50.00 ','$172.50','$575.00',NULL,NULL),
	(6,6,'3 vCPUs','4 GB','80 GB','unlimited','$20.00','$55.00 ','$230.00','$632.50',NULL,NULL),
	(7,7,'4 vCPUs','8 GB','160 GB','unlimited','$40.00','$75.00 ','$460.00','$862.50',NULL,NULL),
	(8,8,'6 vCPUs','16 GB','320 GB','unlimited','$80.00','$115.00 ','$880.00','$1,265.00',NULL,NULL),
	(9,9,'8 vCPUs','32 GB','640 GB','unlimited','$160.00','$195.00 ','$1,760.00','$2,145.00',NULL,NULL),
	(10,10,'12 vCPUs','48 GB','960 GB','unlimited','$240.00','$310.00 ','$2,640.00','$3,410.00',NULL,NULL),
	(11,11,'16 vCPUs','64 GB','1,280 GB','unlimited','$320.00','$390.00 ','$3,520.00','$4,290.00',NULL,NULL),
	(12,12,'20 vCPUs','96 GB','1,920 GB','unlimited','$480.00','$585.00 ','$5,280.00','$6,435.00',NULL,NULL),
	(13,13,'24 vCPUs','128 GB','2,560 GB','unlimited','$640.00','$745.00 ','$7,040.00','$8,195.00',NULL,NULL),
	(14,14,'32 vCPUs','192 GB','3,840 GB','unlimited','$960.00','$1,065.00 ','$10,560.00','$11,715.00',NULL,NULL);

/*!40000 ALTER TABLE `packages` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('client','admin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `company_name`, `email`, `type`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'admin-1','','admin-1@mail.com','admin',NULL,'$2y$10$L9r587IEGzlK52.RTaeLg.Qy/XcHIYMlRGAWuanLBr7dIB//OS//S',NULL,NULL,NULL),
	(2,'Aretha Farrell','Cooke and Dodson Co','puju@gmail.com','client',NULL,'$2y$10$ile0jKpb4arLAH6W9jLmCeVaKy91Ep/436o8nxMTkiJuV7NtkQ.JS',NULL,NULL,'2019-10-09 12:56:36'),
	(3,'client-1','company-1','client-1@mail.com','client',NULL,'$2y$10$3I1fzSJXrnLCpkcRbEXbCuHtmK.tkJPSjKtyUyLFMYpxz91KDjc4C',NULL,NULL,NULL),
	(4,'client-2','company-2','client-2@mail.com','client',NULL,'$2y$10$anbJEMKRjAF4O8I2Yb4LUOopvRrcKiPTL13tDtN0uNbOoMOlNEsCC',NULL,NULL,NULL),
	(5,'client-3','company-3','client-3@mail.com','client',NULL,'$2y$10$twejZ6QKK1iJkDEfwJFQ4eE44F9BzA7/daJp6Lb/CY068fsI7qWXe',NULL,NULL,NULL),
	(6,'client-4','company-4','client-4@mail.com','client',NULL,'$2y$10$8SoMFaYH4Td.tYzjtVjmBOB2nSrn1VJFkFh2geoB/sGgfxL6kdWQy',NULL,NULL,NULL),
	(7,'client-5','company-5','client-5@mail.com','client',NULL,'$2y$10$H4pvoyU7g7dknB/pYjQYK.1fIaj6hFI9JXyyNddcUKMHcHtxNW/TG',NULL,NULL,NULL),
	(8,'client-6','company-6','client-6@mail.com','client',NULL,'$2y$10$cQ/SSj43n8EVhrMZL6VfJeL7I3/PYM75igS/iw3nDJCk8eQLYi5rq',NULL,NULL,NULL),
	(9,'client-7','company-7','client-7@mail.com','client',NULL,'$2y$10$DNQXPCHLQubQ0Eo6l6yKku88sOXZDgKuhLtHwyvHYxiHetbCXuwOS',NULL,NULL,NULL),
	(10,'client-8','company-8','client-8@mail.com','client',NULL,'$2y$10$0FvqsAnACWLS38GrMubxIuDbVUoZ2bnYooV6J4SgSU8/ST0tk.nUq',NULL,NULL,NULL),
	(11,'client-9','company-9','client-9@mail.com','client',NULL,'$2y$10$pQlFDpkD3hQCEm8uYl3QJu7rjO2BYVW9ipyOm.uHIMqIEZkQJwz2u',NULL,NULL,NULL),
	(12,'Veda Workman','Vincent and Delaney Co','degeresety@hotmail.com','client',NULL,'$2y$10$/T1Kmbl6uf2emQQe3KY.6.WP6WoP9Y4r/MfuAkwJuRcBVQrDCtY3a',NULL,'2019-10-09 12:56:28','2019-10-09 12:56:28'),
	(13,'Davis Franco','Whitley and Harper Inc','hebaq@gmail.com','client',NULL,'$2y$10$2WJ.gVLSp9x14uRNmlTto.Eq3Jj8PuzcpmJr7SaqVBeBD0Crbe1t2',NULL,'2019-10-09 13:54:25','2019-10-09 13:54:25');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
