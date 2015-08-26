CREATE DATABASE  IF NOT EXISTS `bdespacopatas` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `bdespacopatas`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: bdespacopatas
-- ------------------------------------------------------
-- Server version	5.5.34

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
-- Table structure for table `albuns`
--

DROP TABLE IF EXISTS `albuns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `albuns` (
  `album_id` int(11) NOT NULL AUTO_INCREMENT,
  `album_name` varchar(200) DEFAULT NULL,
  `album_user` int(11) NOT NULL,
  `album_url` text NOT NULL,
  `album_embed` text NOT NULL,
  `album_tipo` varchar(50) NOT NULL,
  PRIMARY KEY (`album_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `aniversariantes`
--

DROP TABLE IF EXISTS `aniversariantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aniversariantes` (
  `ani_id` int(11) NOT NULL AUTO_INCREMENT,
  `ani_nome` varchar(255) NOT NULL,
  `ani_data_aniversario` date NOT NULL,
  `ani_date` date NOT NULL,
  `ani_time` time NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `ani_imagem` varchar(255) NOT NULL,
  `ani_dia` int(11) NOT NULL,
  `ani_mes` int(11) NOT NULL,
  `ani_ano` int(11) NOT NULL,
  PRIMARY KEY (`ani_id`),
  KEY `Fk_Usuario_ID_idx` (`usuario_id`),
  CONSTRAINT `Fk_Usuario_ID_NIVER` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `conteudo`
--

DROP TABLE IF EXISTS `conteudo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conteudo` (
  `cont_id` int(11) NOT NULL AUTO_INCREMENT,
  `cont_titulo` varchar(255) NOT NULL,
  `cont_conteudo` text NOT NULL,
  `cont_chamada` varchar(255) NOT NULL,
  `cont_url` varchar(255) NOT NULL,
  `cont_id_usuario` int(11) NOT NULL,
  `cont_date` date NOT NULL,
  `cont_time` time NOT NULL,
  PRIMARY KEY (`cont_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `depoimentos`
--

DROP TABLE IF EXISTS `depoimentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `depoimentos` (
  `dep_id` int(11) NOT NULL AUTO_INCREMENT,
  `dep_titulo` varchar(255) NOT NULL,
  `dep_detalhes` varchar(255) DEFAULT NULL,
  `dep_conteudo` text NOT NULL,
  `dep_imagem` varchar(255) DEFAULT NULL,
  `dep_date` date NOT NULL,
  `dep_time` time NOT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`dep_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `duvidas`
--

DROP TABLE IF EXISTS `duvidas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `duvidas` (
  `duv_id` int(11) NOT NULL AUTO_INCREMENT,
  `duv_titulo` varchar(255) NOT NULL,
  `duv_conteudo` text NOT NULL,
  `duv_date` date NOT NULL,
  `duv_time` time NOT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`duv_id`),
  KEY `Fk_Usuario_ID_idx` (`usuario_id`),
  CONSTRAINT `Fk_Usuario_ID` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `empresa`
--

DROP TABLE IF EXISTS `empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresa` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_t1` varchar(255) NOT NULL,
  `emp_t2` varchar(255) NOT NULL,
  `emp_t_esq` varchar(255) NOT NULL,
  `emp_t_dir` varchar(255) NOT NULL,
  `emp_cont_dir` text NOT NULL,
  `emp_cont_esq` text NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `emp_date` date NOT NULL,
  `emp_time` time NOT NULL,
  PRIMARY KEY (`emp_id`),
  KEY `Fk_Usuarios_idx` (`usuario_id`),
  CONSTRAINT `Fk_Usuarios` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `fotos`
--

DROP TABLE IF EXISTS `fotos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fotos` (
  `foto_id` int(11) NOT NULL AUTO_INCREMENT,
  `foto_url` varchar(200) DEFAULT NULL,
  `foto_caption` varchar(100) DEFAULT NULL,
  `foto_data` datetime DEFAULT NULL,
  `foto_album` int(11) DEFAULT NULL,
  `foto_pos` int(11) DEFAULT '0',
  `foto_info` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`foto_id`)
) ENGINE=InnoDB AUTO_INCREMENT=353 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `info`
--

DROP TABLE IF EXISTS `info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `info` (
  `info_id` int(11) NOT NULL AUTO_INCREMENT,
  `info_title` varchar(255) NOT NULL,
  `info_desc` text NOT NULL,
  `info_key` text NOT NULL,
  `info_id_usuario` int(11) NOT NULL,
  `info_email_contato1` varchar(255) NOT NULL,
  `info_email_contato2` varchar(255) DEFAULT NULL,
  `info_email_contato3` varchar(255) DEFAULT NULL,
  `info_email_contato4` varchar(255) DEFAULT NULL,
  `info_date` date NOT NULL,
  `info_time` time NOT NULL,
  PRIMARY KEY (`info_id`),
  KEY `info_id_usuario_idx` (`info_id_usuario`),
  CONSTRAINT `info_id_usuario` FOREIGN KEY (`info_id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `noticias`
--

DROP TABLE IF EXISTS `noticias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `noticias` (
  `not_id` int(11) NOT NULL AUTO_INCREMENT,
  `not_titulo` varchar(255) NOT NULL,
  `not_descricao` text NOT NULL,
  `not_conteudo` text NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `not_url` text,
  `not_embed` text,
  `not_date` date NOT NULL,
  `not_time` time NOT NULL,
  `not_dia` int(11) NOT NULL,
  `not_mes` int(11) NOT NULL,
  `not_ano` int(11) NOT NULL,
  `not_tipo` varchar(50) NOT NULL,
  `not_view` char(1) NOT NULL,
  `not_frase` text,
  PRIMARY KEY (`not_id`),
  KEY `usuario_id` (`usuario_id`),
  CONSTRAINT `noticias_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `noticias_fotos`
--

DROP TABLE IF EXISTS `noticias_fotos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `noticias_fotos` (
  `nfto_id` int(11) NOT NULL AUTO_INCREMENT,
  `nfto_url` varchar(200) DEFAULT NULL,
  `nfto_caption` varchar(100) DEFAULT NULL,
  `nfto_data` datetime DEFAULT NULL,
  `not_id` int(11) DEFAULT NULL,
  `nfto_pos` int(11) DEFAULT '0',
  `nfto_info` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`nfto_id`),
  KEY `not_id` (`not_id`),
  CONSTRAINT `noticias_fotos_ibfk_1` FOREIGN KEY (`not_id`) REFERENCES `noticias` (`not_id`)
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `parceiros`
--

DROP TABLE IF EXISTS `parceiros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parceiros` (
  `parc_id` int(11) NOT NULL AUTO_INCREMENT,
  `parc_titulo` varchar(255) NOT NULL,
  `parc_imagem` varchar(255) NOT NULL,
  `parc_link` varchar(255) DEFAULT NULL,
  `parc_date` date NOT NULL,
  `parc_time` time NOT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`parc_id`),
  KEY `Fk_Parc_Usu_od_idx` (`usuario_id`),
  CONSTRAINT `Fk_Parc_Usu_od` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `servicos`
--

DROP TABLE IF EXISTS `servicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servicos` (
  `serv_id` int(11) NOT NULL AUTO_INCREMENT,
  `serv_titulo` varchar(255) NOT NULL,
  `serv_chamada` varchar(255) NOT NULL,
  `serv_imagem` varchar(255) NOT NULL,
  `serv_date` date NOT NULL,
  `serv_time` time NOT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`serv_id`),
  KEY `FK_Usuario_idx` (`usuario_id`),
  CONSTRAINT `FK_Usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping events for database 'bdespacopatas'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-09-26 10:10:19
