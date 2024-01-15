-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table linssen.users: ~7 rows (approximately)
REPLACE INTO `users` (`User_ID`, `username`, `password`) VALUES
	(1, 'John', 'John'),
	(2, 'Dwane', '$2y$10$FnRjSwDPKQuosVsq2xZor.lPJfpS0WuLzIl/S23cSdJmzhWQ///Ei'),
	(3, 'Dwane', '$2y$10$D38ULkb4n0vPtzTa3Chf1.JLyoKs53oX7th3cq6/tA.Zz1d7ue1Nm'),
	(4, 'Dwane', '$2y$10$0NfffSa3xItHD76/KHO.ReQRY3LmZu9uP0HzcmB/HuGWlX0Syy9T2'),
	(5, 'Dwane', '$2y$10$RW0qQKL4Ek6HzZHHahKequqs7tXL.nyNRFDbVuxeIAjEYVE12ACLO'),
	(6, 'Dwane', '$2y$10$FOGwf9wCILpDupRDH.cg6.4Xk2c5tw6LZqQJDWy8hnovqw/jDbCOO'),
	(7, 'Johnny', '$2y$10$VEYNY84SeLJO7dcxONfPxOZbsyVvdv0EX7plqQtrs0wIZGBduhYRa');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
