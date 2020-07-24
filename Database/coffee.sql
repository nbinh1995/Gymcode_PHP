-- MySQL dump 10.13  Distrib 8.0.20, for Win64 (x86_64)
--
-- Host: localhost    Database: description_coffee_store
-- ------------------------------------------------------
-- Server version	8.0.20

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
-- Table structure for table `bill`
--

DROP TABLE IF EXISTS `bill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bill` (
  `id` int NOT NULL AUTO_INCREMENT,
  `employees_id` int NOT NULL,
  `users_id` int NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sum_money` double DEFAULT NULL,
  `isComplete` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_bill_employees1_idx` (`employees_id`),
  KEY `fk_bill_users1_idx` (`users_id`),
  CONSTRAINT `fk_bill_employees1` FOREIGN KEY (`employees_id`) REFERENCES `employees` (`id`),
  CONSTRAINT `fk_bill_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bill`
--

LOCK TABLES `bill` WRITE;
/*!40000 ALTER TABLE `bill` DISABLE KEYS */;
INSERT INTO `bill` VALUES (1,2,1,'2020-06-23 08:11:14',40000,1),(2,4,7,'2020-06-23 08:11:22',30000,1),(3,2,1,'2020-06-23 08:11:49',42000,1),(4,3,5,'2020-06-23 08:12:00',30000,1),(5,2,1,'2020-06-23 08:12:06',30000,1),(6,4,3,'2020-06-23 08:12:09',36000,1),(7,2,1,'2020-06-23 08:12:10',30000,1),(8,3,7,'2020-06-23 08:12:10',30000,1),(9,3,10,'2020-06-23 08:12:20',50000,1),(10,2,1,'2020-06-23 08:12:26',45000,0);
/*!40000 ALTER TABLE `bill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detailbill`
--

DROP TABLE IF EXISTS `detailbill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `detailbill` (
  `bill_id` int NOT NULL,
  `tables_id` int NOT NULL,
  `products_id` int NOT NULL,
  `numbers` int NOT NULL,
  KEY `fk_detailBill_bill1_idx` (`bill_id`),
  KEY `fk_detailBill_products1_idx` (`products_id`),
  KEY `fk_detailBill_tables1_idx` (`tables_id`),
  CONSTRAINT `fk_detailBill_bill1` FOREIGN KEY (`bill_id`) REFERENCES `bill` (`id`),
  CONSTRAINT `fk_detailBill_products1` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`),
  CONSTRAINT `fk_detailBill_tables1` FOREIGN KEY (`tables_id`) REFERENCES `tables` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detailbill`
--

LOCK TABLES `detailbill` WRITE;
/*!40000 ALTER TABLE `detailbill` DISABLE KEYS */;
INSERT INTO `detailbill` VALUES (1,1,8,2),(2,2,7,2),(3,3,5,2),(3,3,1,1),(4,4,2,1),(4,4,4,1),(5,5,5,2),(6,6,1,3),(7,7,9,1),(7,7,1,1),(8,8,7,2),(9,9,10,2),(10,10,10,1),(10,10,8,1);
/*!40000 ALTER TABLE `detailbill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employees` (
  `id` int NOT NULL AUTO_INCREMENT,
  `salary` double DEFAULT NULL,
  `position` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES (1,10000000,'QuanLy'),(2,3000000,'Phucvu'),(3,3000000,'Phucvu'),(4,3000000,'Phucvu');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `numbersProduct` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'ca phe fin',12000,500),(2,'ca phe fin sua',14000,500),(3,'ca phe rang xay',13000,500),(4,'ca phe rang xay sua',16000,500),(5,'ca phe sai gon',15000,500),(6,'ca phe sua sai gon',17000,500),(7,'cocacola',15000,500),(8,'rebull',20000,500),(9,'ya-ua da',18000,500),(10,'sinh to',25000,500);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recordemployees`
--

DROP TABLE IF EXISTS `recordemployees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `recordemployees` (
  `employees_id` int NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `address` varchar(200) NOT NULL,
  PRIMARY KEY (`employees_id`),
  KEY `fk_RecordEmployees_Employees_idx` (`employees_id`),
  CONSTRAINT `fk_RecordEmployees_Employees` FOREIGN KEY (`employees_id`) REFERENCES `employees` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recordemployees`
--

LOCK TABLES `recordemployees` WRITE;
/*!40000 ALTER TABLE `recordemployees` DISABLE KEYS */;
INSERT INTO `recordemployees` VALUES (1,'Nguyen The Quang Binh','09xxxxxxxxx','duong XX, thanh pho XX, tinh XX'),(2,'Nguyen The Quang Binh2','09xxxxxxxxx','duong XX, thanh pho XX, tinh XX'),(3,'Nguyen The Quang Binh3','09xxxxxxxxx','duong XX, thanh pho XX, tinh XX'),(4,'Nguyen The Quang Binh4','09xxxxxxxxx','duong XX, thanh pho XX, tinh XX');
/*!40000 ALTER TABLE `recordemployees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tables`
--

DROP TABLE IF EXISTS `tables`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tables` (
  `id` int NOT NULL AUTO_INCREMENT,
  `isEmpty` tinyint(1) NOT NULL,
  `numbersPeople` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tables`
--

LOCK TABLES `tables` WRITE;
/*!40000 ALTER TABLE `tables` DISABLE KEYS */;
INSERT INTO `tables` VALUES (1,0,4),(2,0,4),(3,0,4),(4,0,4),(5,0,4),(6,0,4),(7,0,4),(8,0,4),(9,0,4),(10,0,4);
/*!40000 ALTER TABLE `tables` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'khachvanlai','null','null','null',0,'2020-06-23 07:50:37'),(2,'khach1','pass1','email1','phon1',0,'2020-06-23 07:51:03'),(3,'khach2','pass2','email2','phone2',0,'2020-06-23 07:51:15'),(4,'khach3','pass3','email3','phone3',0,'2020-06-23 07:51:24'),(5,'khach4','pass4','email4','phone4',0,'2020-06-23 07:51:32'),(6,'khach5','pass5','email5','phone5',0,'2020-06-23 07:51:39'),(7,'khach6','pass6','email6','phone6',0,'2020-06-23 07:51:47'),(8,'khach7','pass7','email7','phone7',0,'2020-06-23 07:51:53'),(9,'khach8','pass8','email8','phone8',0,'2020-06-23 07:52:01'),(10,'khach9','pass9','email9','phone9',0,'2020-06-23 07:52:08');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-06-23 15:57:30
