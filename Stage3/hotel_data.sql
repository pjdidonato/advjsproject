-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: localhost    Database: capstone
-- ------------------------------------------------------
-- Server version	8.0.21

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `hotels`
--

DROP TABLE IF EXISTS `hotels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hotels` (
  `idhotels` int NOT NULL AUTO_INCREMENT,
  `hotelname` varchar(255) NOT NULL,
  `hoteladdr` varchar(255) NOT NULL,
  `hotelphone` varchar(255) DEFAULT NULL,
  `price` varchar(45) NOT NULL,
  `ratings` decimal(1,0) DEFAULT NULL,
  `link` text,
  PRIMARY KEY (`idhotels`),
  UNIQUE KEY `hotelname` (`hotelname`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hotels`
--

LOCK TABLES `hotels` WRITE;
/*!40000 ALTER TABLE `hotels` DISABLE KEYS */;
INSERT INTO `hotels` VALUES (1,'French Quarter Inn','166 Church St, Charleston, SC 29401','(843) 722-1900','$$$',5,'https://s3-media4.fl.yelpcdn.com/bphoto/s36j3VT4B5RyQP07yNPhsA/o.jpg'),(2,'The Spectator Hotel','67 State St, Charleston, SC 29401','(843) 724-4326','$$$',5,'https://s3-media3.fl.yelpcdn.com/bphoto/uexTPxqL4qIZy17vHC9rqg/o.jpg'),(3,'Emeline','181 Church St, Charleston, SC 29401','(843) 577-2644','N/A',5,'https://s3-media3.fl.yelpcdn.com/bphoto/qRc3nWt2KE_pkTesiHaRuw/o.jpg'),(4,'Hyatt House Charleston/Historic District','560 King St, Charleston, SC 29403','(843) 414-7900','$$',4,'https://s3-media3.fl.yelpcdn.com/bphoto/52GJNdmC1RMotaiZFKeI8A/o.jpg'),(5,'Hotel Bennett','404 King St, Charleston, SC 29403','(833) 313-1798','N/A',5,'https://s3-media2.fl.yelpcdn.com/bphoto/iY2xsHRkDM0pk309RZWv_Q/o.jpg'),(6,'The Dewberry','334 Meeting St, Charleston, SC 29403','(888) 550-1450','$$$',5,'https://s3-media1.fl.yelpcdn.com/bphoto/Rl5zcoIeG4GwNiK6IPKdlA/o.jpg'),(7,'The Vendue Hotel','19 Vendue Range, Charleston, SC 29401','(843) 577-7970','$$$',4,'https://s3-media2.fl.yelpcdn.com/bphoto/nnw_5QLokiBOpTGPtA9vHQ/o.jpg'),(8,'Belmond Charleston Place','205 Meeting St, Charleston, SC 29401','(843) 722-4900','$$$',4,'https://s3-media1.fl.yelpcdn.com/bphoto/HpU_kJ99niikIoDbhI_rLQ/o.jpg'),(25,'The Delaney Hotel','1315 S Orange Ave, Orlando, FL 32806','(407) 849-0805','N/A',5,'https://s3-media2.fl.yelpcdn.com/bphoto/fikUF4yC5J63f3EOCZ8uOw/o.jpg'),(26,'SpringHill Suites by Marriott Orlando at Millenia','5403 Millenia Lakes Boulevard, Orlando, FL 32839','(407) 352-2500','$$',5,'https://s3-media2.fl.yelpcdn.com/bphoto/Z7hZpkd35RvncyVjLvruLg/o.jpg'),(27,'Hard Rock Hotel','5800 Universal Blvd, Orlando, FL 32821','(407) 503-2000','$$$',4,'https://s3-media2.fl.yelpcdn.com/bphoto/CLLUDIQVpxa0lJVx-zw76w/o.jpg'),(28,'Universal\'s Cabana Bay Beach Resort','6550 Adventure Way, Orlando, FL 32819','(407) 503-4000','$$',4,'https://s3-media4.fl.yelpcdn.com/bphoto/BOM49fnQBq4Ke-O7p3j2RA/o.jpg'),(29,'Drury Inn & Suites - Orlando','7301 W Sand Lake Rd, Orlando, FL 32819','(407) 354-1101','$$',5,'https://s3-media1.fl.yelpcdn.com/bphoto/8n5EOYYAFYnn4s1JvMRosQ/o.jpg'),(30,'Courtyard by Marriott Orlando Downtown','730 N Magnolia Ave, Orlando, FL 32803','(407) 996-1000','$$',4,'https://s3-media3.fl.yelpcdn.com/bphoto/vduVqEYTalSAba3n7TOB6g/o.jpg'),(31,'JW Marriott Orlando, Grande Lakes','4040 Central Florida Pkwy, Orlando, FL 32837','(407) 206-2300','$$$',4,'https://s3-media4.fl.yelpcdn.com/bphoto/8OICQoqPkQzSngahJgGhZg/o.jpg'),(32,'Hyatt Regency Orlando','9801 International Dr, Orlando, FL 32819','(407) 284-1234','$$$',4,'https://s3-media4.fl.yelpcdn.com/bphoto/kpmZ-PSxj7tbsPxkVDixTg/o.jpg');
/*!40000 ALTER TABLE `hotels` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-12 16:34:39
