CREATE DATABASE  IF NOT EXISTS `products` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `products`;
-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: 127.0.0.1    Database: products
-- ------------------------------------------------------
-- Server version	5.6.36

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
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `sku` varchar(45) NOT NULL,
  `description` varchar(45) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `price` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `color` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `items`
--

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` VALUES (1,'Huawei Nova 2i','Nova 2i','The Huawei Nova 2i is powered by a Octa-core.',1,1220,164,5,'grey','2017-12-11 14:43:06','2017-12-11 14:45:54'),(2,'vivo V7','V7 Plus','The vivo V7 is powered by a Octa-core 1.8 GHz',1,1400,139,5,'gold','2017-12-11 14:45:25','2017-12-11 15:23:24'),(3,'Oppo F5','F5-Oppo','The Oppo F5 is powered by a Octa-core CPU.',1,1100,152,5,'red','2017-12-11 14:47:41','2017-12-11 14:47:41'),(4,'Samsung UN55MU7000','5773701','One of the many features of the UN55MU7000 55',1,797,30,6,'red','2017-12-11 14:51:12','2017-12-11 14:51:12'),(5,'Philips TV 32PHA4110','32PHA411','Philips TV 32PHA4110 HD Slim LED TV with Digi',1,679,20,6,'blue','2017-12-11 14:54:10','2017-12-11 14:54:10'),(6,'Sunny Lion Suction Bowl','Sunny12','SGS safety certified the product  and uses on',0,12,10,1,'grey','2017-12-11 14:56:00','2017-12-11 14:56:30'),(7,'Philips Avent Classic + Feeding Bottle 4Oz/12','Phil321','Philips Avent Classic + Feeding Bottle 4Oz/12',1,20,100,1,'red','2017-12-11 14:57:10','2017-12-11 14:57:10'),(8,'Nuby Banana Juice Box Holder','NubyB2','Nuby Banana Juice Box Holder',1,10,17,1,'grey','2017-12-11 14:58:14','2017-12-11 15:31:09'),(9,'Sustagen Kid 3','Sustag21','Sustagen Kid 3',0,10,40,1,'blue','2017-12-11 14:58:56','2017-12-11 14:58:56'),(10,'MCSEW12628C Ripped Style Men Casual Jeans ','MCSEW126','MCSEW12628C Ripped Style Men Casual Jeans ',1,30,100,2,'blue','2017-12-11 15:00:58','2017-12-11 15:00:58'),(11,'MCSEW12628B Simple Men Casual Jeans','MCSEW123','MCSEW12628B Simple Men Casual Jeans',1,32,109,2,'grey','2017-12-11 15:01:55','2017-12-11 15:01:55'),(12,'MCSEW12628A Men Straight Style Jeans','MCSEW1A2','MCSEW12628A Men Straight Style Jeans',0,39,300,2,'gold','2017-12-11 15:02:36','2017-12-11 15:02:36'),(13,'Men\'s Jordan Hydro 6 Sliders','Hydro43','Men\'s Jordan Hydro 6 Sliders',1,120,450,7,'blue','2017-12-11 15:04:42','2017-12-11 15:04:42'),(14,'adidas originals Superstar','Superst2','adidas originals Superstar',1,350,500,7,'red','2017-12-11 15:09:25','2017-12-11 15:09:25'),(15,'Reebok Runner 2.0 MT Shoes','Reebok21','Reebok Runner 2.0 MT Shoes',1,50,250,7,'blue','2017-12-11 15:10:22','2017-12-11 15:10:22'),(16,' XD Design Bobby Anti Theft Backpack (Black) ','XDDesi12','XD Design Bobby Anti Theft Backpack (Black) ',1,50,120,7,'red','2017-12-11 15:12:56','2017-12-11 15:12:56'),(17,'50kg Portable Electronic Luggage Scale LCD','PortLCD8','50kg Portable Electronic Luggage Scale LCD',1,40,30,7,'blue','2017-12-11 15:14:06','2017-12-11 15:14:06'),(18,'Amazing Shoe Rack','ShoeRac1','Amazing Shoe Rack',1,13,400,4,'gold','2017-12-11 15:16:38','2017-12-11 15:16:38'),(19,'Gas Cabinet 168','GasCabiI','Gas Cabinet 168',1,30,50,4,'red','2017-12-11 15:17:46','2017-12-11 15:17:46'),(20,'A pair of Hester 18\" metal stool','Hester18','A pair of Hester 18\" metal stool',1,10,100,4,'red','2017-12-11 15:21:57','2017-12-11 15:21:57'),(21,'PAMICA JERICHO Adjustable Double Pole Garment','PAMICA32','PAMICA JERICHO Adjustable Double Pole Garment',1,30,560,4,'grey','2017-12-11 15:22:57','2017-12-11 15:22:57');
/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-12  0:07:05
