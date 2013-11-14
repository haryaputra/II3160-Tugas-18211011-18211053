-- MySQL dump 10.13  Distrib 5.5.32, for Win32 (x86)
--
-- Host: localhost    Database: perpustakaan
-- ------------------------------------------------------
-- Server version	5.5.32

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `buku`
--

DROP TABLE IF EXISTS `buku`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buku` (
  `id` varchar(20) NOT NULL,
  `judul` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buku`
--

LOCK TABLES `buku` WRITE;
/*!40000 ALTER TABLE `buku` DISABLE KEYS */;
INSERT INTO `buku` VALUES ('1','AAB1'),('2','AAB2'),('3','AAB3'),('4','AAB4'),('5','AAB5'),('6','AAB6'),('7','AAB7'),('8','AAB8'),('9','AAB9'),('10','AAB10'),('11','AAB11'),('12','AAB12'),('13','AAB13'),('14','AAB14'),('15','AAB15'),('16','AAB16'),('17','AAB17'),('18','AAB18'),('19','AAB19'),('20','AAB20'),('21','AAB21'),('22','AAB22'),('23','AAB23'),('24','AAB24'),('25','AAB25'),('26','AAB26'),('27','AAB27'),('28','AAB28'),('29','AAB29'),('30','AAB30'),('31','AAB31'),('32','AAB32'),('33','AAB33'),('34','AAB34'),('35','AAB35'),('36','AAB36'),('37','AAB37'),('38','AAB38'),('39','AAB39'),('40','AAB40'),('41','AAB41'),('42','AAB42'),('43','AAB43'),('44','AAB44'),('45','AAB45'),('46','AAB46'),('47','AAB47'),('48','AAB48'),('49','AAB49'),('50','AAB50'),('51','AAB51'),('52','AAB52'),('53','AAB53'),('54','AAB54'),('55','AAB55'),('56','AAB56'),('57','AAB57'),('58','AAB58'),('59','AAB59'),('60','AAB60'),('61','AAB61'),('62','AAB62'),('63','AAB63'),('64','AAB64');
/*!40000 ALTER TABLE `buku` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-11-06 11:37:50
