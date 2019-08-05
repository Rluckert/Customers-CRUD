-- MySQL dump 10.16  Distrib 10.3.9-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: db_prueba
-- ------------------------------------------------------
-- Server version	5.7.26-0ubuntu0.18.04.1

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
-- Table structure for table `Customer`
--

DROP TABLE IF EXISTS `Customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Customer` (
  `Id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Estado` varchar(100) COLLATE utf8_spanish_ci NOT NULL DEFAULT '1',
  `Name` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `LastName` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Birthdate` date NOT NULL,
  `Gender` enum('Masculino','Femenino') COLLATE utf8_spanish_ci NOT NULL,
  `Identification` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Customer`
--

LOCK TABLES `Customer` WRITE;
/*!40000 ALTER TABLE `Customer` DISABLE KEYS */;
INSERT INTO `Customer` VALUES (1,'1','Rafael Alberto','Luckert Germán','rafael.luckert@hotmail.com','2019-02-23','Masculino','1140896453'),(4,'1','María Fernanda','Reyes','Mariareyes@gmail.com','2019-07-04','Femenino','1150089025'),(7,'1','María ','Camargo','maria@hotmail.com','1996-02-15','Femenino','30147222'),(8,'1','Fernanda','Osorio','fer@outlook.com','1998-02-04','Femenino','123123123'),(9,'1','Mayra','Acosta','may-acosta@gmail.com','1996-07-24','Femenino','45678913');
/*!40000 ALTER TABLE `Customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'db_prueba'
--
