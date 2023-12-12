-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: deposito
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.28-MariaDB

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
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `categorias` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,'tecnologia'),(2,'indumentaria'),(3,'kit_escolar'),(4,'donaciones'),(5,'libreria'),(6,'herramientas'),(7,'comunicacion'),(8,'diversion'),(9,'insumos');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `colores`
--

DROP TABLE IF EXISTS `colores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `colores` (
  `id_colores` int(11) NOT NULL AUTO_INCREMENT,
  `colores` varchar(100) NOT NULL,
  PRIMARY KEY (`id_colores`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colores`
--

LOCK TABLES `colores` WRITE;
/*!40000 ALTER TABLE `colores` DISABLE KEYS */;
INSERT INTO `colores` VALUES (1,'negro');
/*!40000 ALTER TABLE `colores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos_comunicacion`
--

DROP TABLE IF EXISTS `productos_comunicacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos_comunicacion` (
  `id_productos_comunicacion` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) DEFAULT 7,
  `productos` varchar(100) DEFAULT NULL,
  `stock` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_productos_comunicacion`),
  KEY `id_categoria` (`id_categoria`),
  CONSTRAINT `productos_comunicacion_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos_comunicacion`
--

LOCK TABLES `productos_comunicacion` WRITE;
/*!40000 ALTER TABLE `productos_comunicacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `productos_comunicacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos_diversion`
--

DROP TABLE IF EXISTS `productos_diversion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos_diversion` (
  `id_productos_diversion` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) DEFAULT 8,
  `productos` varchar(100) DEFAULT NULL,
  `stock` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_productos_diversion`),
  KEY `id_categoria` (`id_categoria`),
  CONSTRAINT `productos_diversion_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos_diversion`
--

LOCK TABLES `productos_diversion` WRITE;
/*!40000 ALTER TABLE `productos_diversion` DISABLE KEYS */;
/*!40000 ALTER TABLE `productos_diversion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos_donaciones`
--

DROP TABLE IF EXISTS `productos_donaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos_donaciones` (
  `id_productos_donaciones` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) DEFAULT 4,
  `productos` varchar(100) DEFAULT NULL,
  `stock` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_productos_donaciones`),
  KEY `id_categoria` (`id_categoria`),
  CONSTRAINT `productos_donaciones_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos_donaciones`
--

LOCK TABLES `productos_donaciones` WRITE;
/*!40000 ALTER TABLE `productos_donaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `productos_donaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos_herramientas`
--

DROP TABLE IF EXISTS `productos_herramientas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos_herramientas` (
  `id_productos_herramientas` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) DEFAULT 6,
  `productos` varchar(100) DEFAULT NULL,
  `stock` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_productos_herramientas`),
  KEY `id_categoria` (`id_categoria`),
  CONSTRAINT `productos_herramientas_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos_herramientas`
--

LOCK TABLES `productos_herramientas` WRITE;
/*!40000 ALTER TABLE `productos_herramientas` DISABLE KEYS */;
/*!40000 ALTER TABLE `productos_herramientas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos_indumentaria`
--

DROP TABLE IF EXISTS `productos_indumentaria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos_indumentaria` (
  `id_productos_indumentaria` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) DEFAULT 2,
  `productos` varchar(100) DEFAULT NULL,
  `id_talle` int(11) DEFAULT NULL,
  `id_color` int(11) DEFAULT NULL,
  `stock` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_productos_indumentaria`),
  KEY `id_talle` (`id_talle`),
  KEY `id_color` (`id_color`),
  KEY `id_categoria` (`id_categoria`),
  CONSTRAINT `productos_indumentaria_ibfk_1` FOREIGN KEY (`id_talle`) REFERENCES `talles` (`id_talles`),
  CONSTRAINT `productos_indumentaria_ibfk_2` FOREIGN KEY (`id_color`) REFERENCES `colores` (`id_colores`),
  CONSTRAINT `productos_indumentaria_ibfk_3` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos_indumentaria`
--

LOCK TABLES `productos_indumentaria` WRITE;
/*!40000 ALTER TABLE `productos_indumentaria` DISABLE KEYS */;
INSERT INTO `productos_indumentaria` VALUES (6,2,'remeras',1,1,'10'),(7,2,'buzos',4,1,'20');
/*!40000 ALTER TABLE `productos_indumentaria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos_insumos`
--

DROP TABLE IF EXISTS `productos_insumos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos_insumos` (
  `id_productos_insumos` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) DEFAULT 9,
  `productos` varchar(100) DEFAULT NULL,
  `stock` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_productos_insumos`),
  KEY `id_categoria` (`id_categoria`),
  CONSTRAINT `productos_insumos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos_insumos`
--

LOCK TABLES `productos_insumos` WRITE;
/*!40000 ALTER TABLE `productos_insumos` DISABLE KEYS */;
/*!40000 ALTER TABLE `productos_insumos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos_kit_escolar`
--

DROP TABLE IF EXISTS `productos_kit_escolar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos_kit_escolar` (
  `id_productos_kit_escolar` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) DEFAULT 3,
  `productos` varchar(100) DEFAULT NULL,
  `stock` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_productos_kit_escolar`),
  KEY `id_categoria` (`id_categoria`),
  CONSTRAINT `productos_kit_escolar_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos_kit_escolar`
--

LOCK TABLES `productos_kit_escolar` WRITE;
/*!40000 ALTER TABLE `productos_kit_escolar` DISABLE KEYS */;
/*!40000 ALTER TABLE `productos_kit_escolar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos_libreria`
--

DROP TABLE IF EXISTS `productos_libreria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos_libreria` (
  `id_productos_libreria` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) DEFAULT 5,
  `productos` varchar(100) DEFAULT NULL,
  `stock` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_productos_libreria`),
  KEY `id_categoria` (`id_categoria`),
  CONSTRAINT `productos_libreria_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos_libreria`
--

LOCK TABLES `productos_libreria` WRITE;
/*!40000 ALTER TABLE `productos_libreria` DISABLE KEYS */;
/*!40000 ALTER TABLE `productos_libreria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos_tecnologia`
--

DROP TABLE IF EXISTS `productos_tecnologia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos_tecnologia` (
  `id_productos_tecnologia` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) DEFAULT 1,
  `productos` varchar(100) DEFAULT NULL,
  `stock` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_productos_tecnologia`),
  KEY `id_categoria` (`id_categoria`),
  CONSTRAINT `productos_tecnologia_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos_tecnologia`
--

LOCK TABLES `productos_tecnologia` WRITE;
/*!40000 ALTER TABLE `productos_tecnologia` DISABLE KEYS */;
INSERT INTO `productos_tecnologia` VALUES (1,1,'tablet','10'),(2,1,'celulares','20');
/*!40000 ALTER TABLE `productos_tecnologia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `talles`
--

DROP TABLE IF EXISTS `talles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `talles` (
  `id_talles` int(11) NOT NULL AUTO_INCREMENT,
  `talle_tipo1` varchar(100) NOT NULL,
  `talle_tipo2` varchar(45) DEFAULT NULL,
  `talle_tipo3` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_talles`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `talles`
--

LOCK TABLES `talles` WRITE;
/*!40000 ALTER TABLE `talles` DISABLE KEYS */;
INSERT INTO `talles` VALUES (1,'s','1','38'),(2,'m','2','40'),(3,'l','3','42-44'),(4,'xl','4','46-48'),(5,'xxl','5','50-52');
/*!40000 ALTER TABLE `talles` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-05  9:18:58
