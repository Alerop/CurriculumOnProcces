CREATE DATABASE  IF NOT EXISTS `Curriculums` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `Curriculums`;
-- MySQL dump 10.13  Distrib 5.7.13, for linux-glibc2.5 (x86_64)
--
-- Host: localhost    Database: Curriculums
-- ------------------------------------------------------
-- Server version	5.6.40

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
-- Table structure for table `EMPRESAS`
--

DROP TABLE IF EXISTS `EMPRESAS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `EMPRESAS` (
  `idempresas` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idempresas`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `EMPRESAS`
--

LOCK TABLES `EMPRESAS` WRITE;
/*!40000 ALTER TABLE `EMPRESAS` DISABLE KEYS */;
INSERT INTO `EMPRESAS` VALUES (1,'Yudaya'),(2,'Prueba1');
/*!40000 ALTER TABLE `EMPRESAS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ESTUDIOS`
--

DROP TABLE IF EXISTS `ESTUDIOS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ESTUDIOS` (
  `idestudios` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idestudios`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ESTUDIOS`
--

LOCK TABLES `ESTUDIOS` WRITE;
/*!40000 ALTER TABLE `ESTUDIOS` DISABLE KEYS */;
INSERT INTO `ESTUDIOS` VALUES (1,'Desarrollador');
/*!40000 ALTER TABLE `ESTUDIOS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `EXPERIENCIAS`
--

DROP TABLE IF EXISTS `EXPERIENCIAS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `EXPERIENCIAS` (
  `idexperiencias` int(11) NOT NULL AUTO_INCREMENT,
  `idtrabajos` int(11) DEFAULT NULL,
  `idempresas` int(11) DEFAULT NULL,
  `fecha_ini` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `puesto` varchar(45) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idexperiencias`),
  KEY `idtrabajos` (`idtrabajos`),
  KEY `idempresas` (`idempresas`),
  CONSTRAINT `EXPERIENCIAS_ibfk_1` FOREIGN KEY (`idtrabajos`) REFERENCES `TRABAJOS` (`idtrabajos`),
  CONSTRAINT `EXPERIENCIAS_ibfk_2` FOREIGN KEY (`idempresas`) REFERENCES `EMPRESAS` (`idempresas`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `EXPERIENCIAS`
--

LOCK TABLES `EXPERIENCIAS` WRITE;
/*!40000 ALTER TABLE `EXPERIENCIAS` DISABLE KEYS */;
INSERT INTO `EXPERIENCIAS` VALUES (1,1,1,'2018-03-19','2018-05-25','Desarrolador','He realizado bla bla bla'),(2,1,2,'2018-03-19','2018-05-25','Prueba1Puesto','realizado bla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla bla');
/*!40000 ALTER TABLE `EXPERIENCIAS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `FORMACIONES`
--

DROP TABLE IF EXISTS `FORMACIONES`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `FORMACIONES` (
  `idformaciones` int(11) NOT NULL AUTO_INCREMENT,
  `idestudios` int(11) DEFAULT NULL,
  `fecha_promocion` varchar(45) DEFAULT NULL,
  `idinstitutos` int(11) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idformaciones`),
  KEY `idestudios` (`idestudios`),
  KEY `idinstitutos` (`idinstitutos`),
  CONSTRAINT `FORMACIONES_ibfk_1` FOREIGN KEY (`idestudios`) REFERENCES `ESTUDIOS` (`idestudios`),
  CONSTRAINT `FORMACIONES_ibfk_2` FOREIGN KEY (`idinstitutos`) REFERENCES `INSTITUTOS` (`idinstitutos`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FORMACIONES`
--

LOCK TABLES `FORMACIONES` WRITE;
/*!40000 ALTER TABLE `FORMACIONES` DISABLE KEYS */;
INSERT INTO `FORMACIONES` VALUES (1,1,'Promocion 2018',1,'Actualmente blabla');
/*!40000 ALTER TABLE `FORMACIONES` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `HABILIDADES`
--

DROP TABLE IF EXISTS `HABILIDADES`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `HABILIDADES` (
  `idhabilidades` int(11) NOT NULL AUTO_INCREMENT,
  `idthabilidades` int(11) DEFAULT NULL,
  `nombreHabilidad` varchar(200) DEFAULT NULL,
  `idusuarios` int(11) DEFAULT NULL,
  `puntuacion` int(11) DEFAULT '3',
  PRIMARY KEY (`idhabilidades`),
  KEY `idthabilidades` (`idthabilidades`),
  KEY `idusuarios` (`idusuarios`),
  CONSTRAINT `HABILIDADES_ibfk_1` FOREIGN KEY (`idthabilidades`) REFERENCES `TIPOS_HABILIDADES` (`idthabilidades`),
  CONSTRAINT `HABILIDADES_ibfk_2` FOREIGN KEY (`idusuarios`) REFERENCES `USUARIOS` (`idusuarios`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `HABILIDADES`
--

LOCK TABLES `HABILIDADES` WRITE;
/*!40000 ALTER TABLE `HABILIDADES` DISABLE KEYS */;
INSERT INTO `HABILIDADES` VALUES (1,1,'Mysql',1,3),(2,2,'Bebedor',1,3),(3,1,'PHP',2,3),(4,1,'HTML',1,3);
/*!40000 ALTER TABLE `HABILIDADES` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `INSTITUTOS`
--

DROP TABLE IF EXISTS `INSTITUTOS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `INSTITUTOS` (
  `idinstitutos` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idinstitutos`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `INSTITUTOS`
--

LOCK TABLES `INSTITUTOS` WRITE;
/*!40000 ALTER TABLE `INSTITUTOS` DISABLE KEYS */;
INSERT INTO `INSTITUTOS` VALUES (1,'IES El Rincon');
/*!40000 ALTER TABLE `INSTITUTOS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TIPOS_HABILIDADES`
--

DROP TABLE IF EXISTS `TIPOS_HABILIDADES`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TIPOS_HABILIDADES` (
  `idthabilidades` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idthabilidades`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TIPOS_HABILIDADES`
--

LOCK TABLES `TIPOS_HABILIDADES` WRITE;
/*!40000 ALTER TABLE `TIPOS_HABILIDADES` DISABLE KEYS */;
INSERT INTO `TIPOS_HABILIDADES` VALUES (1,'Profesional'),(2,'Personal'),(3,'Idioma'),(4,'Otros');
/*!40000 ALTER TABLE `TIPOS_HABILIDADES` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TRABAJOS`
--

DROP TABLE IF EXISTS `TRABAJOS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TRABAJOS` (
  `idtrabajos` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idtrabajos`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TRABAJOS`
--

LOCK TABLES `TRABAJOS` WRITE;
/*!40000 ALTER TABLE `TRABAJOS` DISABLE KEYS */;
INSERT INTO `TRABAJOS` VALUES (1,'Estudiante en practicas');
/*!40000 ALTER TABLE `TRABAJOS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `USUARIOS`
--

DROP TABLE IF EXISTS `USUARIOS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `USUARIOS` (
  `idusuarios` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido1` varchar(45) DEFAULT NULL,
  `apellido2` varchar(45) DEFAULT NULL,
  `fNacimiento` date DEFAULT NULL,
  `residencia` varchar(45) DEFAULT NULL,
  `cp` int(10) DEFAULT NULL,
  `numTelefono` int(11) DEFAULT NULL,
  `numMovil` int(11) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `usuarioLinkdin` varchar(45) DEFAULT NULL,
  `usuarioGitHub` varchar(45) DEFAULT NULL,
  `objetivo` varchar(400) DEFAULT NULL,
  `tituloMuestra` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idusuarios`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `USUARIOS`
--

LOCK TABLES `USUARIOS` WRITE;
/*!40000 ALTER TABLE `USUARIOS` DISABLE KEYS */;
INSERT INTO `USUARIOS` VALUES (1,'juanco','123','Juan','Cepeda','Orellana','2015-12-17','En un pueblo italiano',11540,685984323,689430504,'arrivederchi@poeso.com','JoseCorp','JosePrco','Mi objetivo es poder acumular suficiente texto en este gran recuadro que me permites tener para asi poder ver algo mas visual de lo que podriamos hacer realizando este tipo de contenido','Programador'),(2,'juanco2','123','Juan','Cepeda','Orellana','2015-12-17','En un pueblo italiano',11540,685984323,689430504,'arrivederchi@poeso.com','JoseCorp','JosePrco','Mi objetivo es poder acumular suficiente texto en este gran recuadro que me permites tener para asi poder ver algo mas visual de lo que podriamos hacer realizando este tipo de contenido y mas de lo mismo de llo que dice el anterior usuario que da la casualidad de que soy exactamente el mismo','Desarrolador');
/*!40000 ALTER TABLE `USUARIOS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `USUARIOS_EXPERIENCIAS`
--

DROP TABLE IF EXISTS `USUARIOS_EXPERIENCIAS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `USUARIOS_EXPERIENCIAS` (
  `idusuarios` int(11) NOT NULL,
  `idexperiencias` int(11) NOT NULL,
  PRIMARY KEY (`idusuarios`,`idexperiencias`),
  KEY `idexperiencias` (`idexperiencias`),
  CONSTRAINT `USUARIOS_EXPERIENCIAS_ibfk_1` FOREIGN KEY (`idusuarios`) REFERENCES `USUARIOS` (`idusuarios`),
  CONSTRAINT `USUARIOS_EXPERIENCIAS_ibfk_2` FOREIGN KEY (`idexperiencias`) REFERENCES `EXPERIENCIAS` (`idexperiencias`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `USUARIOS_EXPERIENCIAS`
--

LOCK TABLES `USUARIOS_EXPERIENCIAS` WRITE;
/*!40000 ALTER TABLE `USUARIOS_EXPERIENCIAS` DISABLE KEYS */;
INSERT INTO `USUARIOS_EXPERIENCIAS` VALUES (2,1),(2,2);
/*!40000 ALTER TABLE `USUARIOS_EXPERIENCIAS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `USUARIOS_FORMACIONES`
--

DROP TABLE IF EXISTS `USUARIOS_FORMACIONES`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `USUARIOS_FORMACIONES` (
  `idusuarios` int(11) NOT NULL,
  `idformaciones` int(11) NOT NULL,
  PRIMARY KEY (`idusuarios`,`idformaciones`),
  KEY `idformaciones` (`idformaciones`),
  CONSTRAINT `USUARIOS_FORMACIONES_ibfk_1` FOREIGN KEY (`idusuarios`) REFERENCES `USUARIOS` (`idusuarios`),
  CONSTRAINT `USUARIOS_FORMACIONES_ibfk_2` FOREIGN KEY (`idformaciones`) REFERENCES `FORMACIONES` (`idformaciones`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `USUARIOS_FORMACIONES`
--

LOCK TABLES `USUARIOS_FORMACIONES` WRITE;
/*!40000 ALTER TABLE `USUARIOS_FORMACIONES` DISABLE KEYS */;
INSERT INTO `USUARIOS_FORMACIONES` VALUES (1,1);
/*!40000 ALTER TABLE `USUARIOS_FORMACIONES` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-25 19:28:01
