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
-- Dumping data for table `albuns`
--

LOCK TABLES `albuns` WRITE;
/*!40000 ALTER TABLE `albuns` DISABLE KEYS */;
INSERT INTO `albuns` VALUES (15,'Recreação',18,'','','Fotos'),(16,'Roupas e Fantasias',18,'','','Fotos'),(17,'Hóspedes',18,'','','Fotos');
/*!40000 ALTER TABLE `albuns` ENABLE KEYS */;
UNLOCK TABLES;

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
-- Dumping data for table `aniversariantes`
--

LOCK TABLES `aniversariantes` WRITE;
/*!40000 ALTER TABLE `aniversariantes` DISABLE KEYS */;
INSERT INTO `aniversariantes` VALUES (6,'Macarena','2005-09-05','2014-09-26','09:56:45',18,'d61b0562a0b6b4b4074bd769a3848a41.jpg',5,9,2005),(7,'Mel','2005-09-08','2014-09-26','09:57:06',18,'dcc8f6306544c2b85243ce9087c6e81d.jpg',8,9,2005),(8,'Donatela','2005-09-10','2014-09-26','09:57:28',18,'42abc16cf714931cab91cb54cd8e7af1.jpg',10,9,2005),(9,'Frederico','2005-09-20','2014-09-26','09:57:50',18,'1fce6eff7fe3ce7bcdd5d59ffc251e66.jpg',20,9,2005);
/*!40000 ALTER TABLE `aniversariantes` ENABLE KEYS */;
UNLOCK TABLES;

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
-- Dumping data for table `conteudo`
--

LOCK TABLES `conteudo` WRITE;
/*!40000 ALTER TABLE `conteudo` DISABLE KEYS */;
INSERT INTO `conteudo` VALUES (1,'INCORPORADORA','                A Damha Urbanizadora é uma empresa parte do Grupo Encalso Damha, conglomerado empresarial fundado em 1964, que atua nos seguintes segmentos: Engenharia Civil, Agronegócios, Shopping Center, Concessão de Rodovias, Energia e Empreendimentos Imobiliários.\r\nPresente no cenário nacional desde 1979, a Damha desenvolve e executa loteamentos fechados e condomínios residenciais, reconhecidos pela alta qualidade urbanística e construtiva. Em seus projetos, aplica o que há de melhor em conceito de urbanismo no País e infraestrutura qualificada, em perfeita harmonia com o meio ambiente. Ao projetar empreendimentos que integram padrão diferenciado de moradia, lazer e segurança, a Damha transforma o cotidiano dos moradores e das cidades em que se insere.\r\nA Damha Urbanizadora conta atualmente com 58 empreendimentos e mais de 20 mil unidades comercializadas e está presente em 17 Estados brasileiros além do Distrito Federal, sendo que em nove deles - Bahia, Distrito Federal, Maranhão, Mato Grosso do Sul, Minas Gerais, Paraíba, Rio de Janeiro, São Paulo, Sergipe - com empreendimentos já implantados. Em 2013, obteve crescimento de 20%, alcançando um Valor Geral de Vendas (VGV) de R$ 700 milhões, e para 2014, projeta um crescimento de 20%, alcançando um VGV lançado de R$ 840 milhões. O landbank total é de mais de 100 milhões de m², que representam um VGV potencial superior a R$ 7 bilhões.                ','                A Damha Urbanizadora é uma empresa parte do Grupo Encalso Damha, conglomerado empresarial fundado em 1964, que atua nos seguintes segmentos: Engenharia Civil, Agronegócios, Shopping Center, Concessão de... Saiba Mais                   ','incorporadora',18,'2014-06-26','18:12:33'),(2,'HISTÓRICO','Nossa história começou há mais de 49 anos com a Encalso, construtora que rapidamente cresceu e se diversificou. Assim surgiu o Grupo Encalso Damha, um conglomerado empresarial reconhecido nacionalmente nos diversos segmentos em que atua: Engenharia Civil Pesada, Agronegócios, Shopping Center, Concessão de Rodovias e Empreendimentos Imobiliários, cujos princípios básicos são a busca da qualidade e da perfeição, sempre respeitando o meio ambiente. Com esses valores em mente, estamos sempre prontos para novos desafios e oportunidades. ','Nossa história começou há mais de 49 anos com a Encalso, construtora que rapidamente cresceu e se diversificou. Assim surgiu o Grupo Encalso Damha, um conglomerado empresarial reconhecido nacionalmente nos diversos... Saiba Mais','historico',18,'2014-06-26','16:34:39'),(3,'CONCEITO','Um conceito urbanístico como você nunca viu igual: loteamento fechado com total respeito ao meio ambiente. Acesso rápido e fácil, praças centrais com diversos itens de lazer, infraestrutura de qualidade e um rigoroso padrão técnico testado e aprovado nos empreendimentos já construídos. Estes são apenas alguns diferenciais que você encontra nos empreendimentos Damha. Além da garantia da tradição do Grupo Encalso e modernidade da Damha Urbanizadora. ','Um conceito urbanístico como você nunca viu igual: loteamento fechado com total respeito ao meio ambiente. Acesso rápido e fácil, praças centrais com diversos itens de lazer, infraestrutura de qualidade e um rigoroso padrão... Saiba Mais    ','conceito',18,'2014-06-26','16:35:18');
/*!40000 ALTER TABLE `conteudo` ENABLE KEYS */;
UNLOCK TABLES;

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
-- Dumping data for table `depoimentos`
--

LOCK TABLES `depoimentos` WRITE;
/*!40000 ALTER TABLE `depoimentos` DISABLE KEYS */;
INSERT INTO `depoimentos` VALUES (4,'EDSON KENJI DOI','CLÍNICA KENKOVET','<p><span>&ldquo;Uma &oacute;tima iniciativa, onde n&atilde;o encontramos na nossa regi&atilde;o uma estrutura t&atilde;o avan&ccedil;ada com alta tecnologia para deixar o seu c&atilde;o em situa&ccedil;&atilde;o de pessoas que viajam. Eu recomendo!&rdquo;</span></p>','32c4ad0a62d5ea430b2ed1599aacb1eb.jpg','2014-09-19','16:47:11',18);
/*!40000 ALTER TABLE `depoimentos` ENABLE KEYS */;
UNLOCK TABLES;

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
-- Dumping data for table `duvidas`
--

LOCK TABLES `duvidas` WRITE;
/*!40000 ALTER TABLE `duvidas` DISABLE KEYS */;
INSERT INTO `duvidas` VALUES (4,'  Quais os procedimentos iniciais para o meu cão se hospedar no Espaço Patas?','<p style=\"text-align: justify;\"><span>Para assegurar o bem estar, a sa&uacute;de e a higiene de todos os animais, exigimos: Carteira de vacina&ccedil;&atilde;o em dia contra raiva, aplica&ccedil;&atilde;o de anti-parasit&aacute;rio, V8 ou V10; recomend&aacute;vel vacina giardia e tosse canina; Vermifuga&ccedil;&atilde;o a cada 3 meses; As f&ecirc;meas n&atilde;o podem estar no cio; C&atilde;es possessivos ou muito agressivos s&oacute; ser&atilde;o aceitos ap&oacute;s uma avalia&ccedil;&atilde;o pr&eacute;via.</span></p>','2014-09-18','14:08:45',18),(5,' Quais são os valores para hospedar o meu cão?','<p style=\"text-align: justify;\"><span>Di&aacute;rias de R$65,00 (dia de semana), R$80,00 (final de semana e feriado) e R$80,00 (Natal e Ano novo).</span></p>','2014-09-18','14:13:12',18),(6,'  Qual o horário de funcionamento do Espaço Patas?','<p><span>Todos os dias das 7h &agrave;s 17h (sa&iacute;da de hospedagem somente at&eacute; as 18h).</span></p>','2014-09-19','16:26:51',18);
/*!40000 ALTER TABLE `duvidas` ENABLE KEYS */;
UNLOCK TABLES;

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
-- Dumping data for table `empresa`
--

LOCK TABLES `empresa` WRITE;
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
INSERT INTO `empresa` VALUES (1,'Conheça nossa','EMPRESA','SOBRE NÓS','ROTINA DOS HÓSPEDES','<div class=\"texto_empresa_vermelho\" style=\"width: 90%;\">Socializa&ccedil;&atilde;o com os companheiros</div>\r\n<div class=\"texto_empresa_verde\" style=\"width: 100%;\">Brincadeiras com recreacionista</div>\r\n<div class=\"texto_empresa_vermelho\" style=\"width: 80%;\">Hora do almo&ccedil;o</div>\r\n<div class=\"texto_empresa_verde\" style=\"width: 70%;\">Descanso</div>\r\n<div class=\"texto_empresa_vermelho\" style=\"width: 90%;\">Caminhadas</div>\r\n<div class=\"texto_empresa_verde\" style=\"width: 80%;\">Pr&aacute;tica de Agility</div>\r\n<div class=\"texto_empresa_vermelho\" style=\"width: 70%;\">Nata&ccedil;&atilde;o (opcional)</div>\r\n<div class=\"texto_empresa_verde\" style=\"width: 100%;\">Banho (opcional)</div>\r\n<div class=\"texto_empresa_vermelho\" style=\"width: 60%;\">Alimenta&ccedil;&atilde;o</div>\r\n<div class=\"texto_empresa_verde\" style=\"width: 80%;\">Hora de dormir</div>','<p class=\"texto_empresa\" style=\"text-align: justify;\">O Espa&ccedil;o Patas &eacute; um Resort e Spa Pet sendo uma solu&ccedil;&atilde;o em hospedagem e recrea&ccedil;&atilde;o animal. Com uma &aacute;rea de 12.000 m2, contamos com uma estrutura completa permitindo aos c&atilde;es praticarem e aproveitarem atividades das mais variadas, e dando aos donos uma melhor alternativa para o cuidado de seu c&atilde;o com mais tranquilidade, comodidade e seguran&ccedil;a.</p>\r\n<p class=\"texto_empresa\" style=\"text-align: justify;\">Contamos com instala&ccedil;&otilde;es modernas, dois tipos de baias (simples e vip), monitores treinados, acompanhamento veterin&aacute;rio, brinquedos interativos, piscina, grandes &aacute;reas livres al&eacute;m de uma loja completa com ra&ccedil;&otilde;es e acess&oacute;rios e o TaxiDog, um ve&iacute;culo especialmente preparado para buscar e levar o seu c&atilde;o &agrave; sua casa sempre que voc&ecirc; precisar. Trabalhamos com o conceito de hospedagem livre, onde o c&atilde;o fica a maior parte do dia fora das baias participando das atividades pr&eacute; programadas, aproveitando melhor a estadia sem causar nenhum tipo de stress ao animal.</p>\r\n<p class=\"texto_empresa\" style=\"text-align: justify;\">Para deixar os donos ainda mais tranquilos, o Espa&ccedil;o Patas possui um sistema de monitoramento online 24 horas e oferece . Assim, sempre que quiser, o dono pode conferir o que seu c&atilde;o est&aacute; fazendo atrav&eacute;s de c&acirc;meras instaladas em todos os nossos ambientes.</p>',18,'2014-09-16','11:12:53');
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;
UNLOCK TABLES;

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
-- Dumping data for table `fotos`
--

LOCK TABLES `fotos` WRITE;
/*!40000 ALTER TABLE `fotos` DISABLE KEYS */;
INSERT INTO `fotos` VALUES (245,'d29f1b18766b58250b4a4429e20a6cb5.jpg',NULL,'2014-09-17 00:00:00',15,999,NULL),(246,'3108fbf6c2e6015b0dc4e1fcb0ff016b.jpg',NULL,'2014-09-17 00:00:00',15,999,NULL),(247,'49c2a5070cee112bb8c12066e6813ae3.jpg',NULL,'2014-09-17 00:00:00',15,999,NULL),(248,'f2bb3e910d104ba1ef2cc18a0e20fb56.jpg',NULL,'2014-09-17 00:00:00',15,999,NULL),(249,'ee7a4030884b4b35e9b773b969923e31.jpg',NULL,'2014-09-17 00:00:00',15,999,NULL),(250,'2b36e10d901a174a39a0e47b956a9f3d.jpg',NULL,'2014-09-17 00:00:00',15,999,NULL),(251,'20170ba3d2ae93791c4cd4cace4f0b1e.jpg',NULL,'2014-09-17 00:00:00',15,999,NULL),(252,'0189bdaeaa0bfd1ac524782e6d6526c5.jpg',NULL,'2014-09-17 00:00:00',15,999,NULL),(253,'aa823eb28cb99ad95a5118bfe4df5b79.jpg',NULL,'2014-09-17 00:00:00',15,999,NULL),(254,'d5b306037ec8b91a1c3bcfbb6b074c74.jpg',NULL,'2014-09-17 00:00:00',15,999,NULL),(255,'d6defa89dba2c18f0693e3b1ed934d37.jpg',NULL,'2014-09-17 00:00:00',15,999,NULL),(256,'e43b86c1c587b310552e403952c958c5.jpg',NULL,'2014-09-17 00:00:00',15,999,NULL),(257,'c9a83d8596e9b1f8990fd7c8a4f07bf4.jpg',NULL,'2014-09-17 00:00:00',15,999,NULL),(258,'e040fc10a8eec12d3d8f298836b3cece.jpg',NULL,'2014-09-17 00:00:00',15,999,NULL),(259,'3f669ec689918d9fd51f80e6848de421.jpg',NULL,'2014-09-17 00:00:00',15,999,NULL),(260,'921c4889cbd4dc2d2baaa21d6800b9d5.jpg',NULL,'2014-09-17 00:00:00',15,999,NULL),(261,'1c17dc90a96a56d1954821d4cb9d584b.jpg',NULL,'2014-09-17 00:00:00',15,999,NULL),(262,'80401acfa96f78a245a9b04b0f85113c.jpg',NULL,'2014-09-17 00:00:00',15,999,NULL),(263,'314f65727995782c7a3ebfe3ce77ed5d.jpg',NULL,'2014-09-17 00:00:00',15,999,NULL),(264,'a1bed84983f13e22b773c1e580712a56.jpg',NULL,'2014-09-17 00:00:00',15,999,NULL),(265,'937bf8dfc0611f79778edf73bee4eb68.jpg',NULL,'2014-09-17 00:00:00',15,999,NULL),(266,'22e515939051e0e514c0a26c393249f7.jpg',NULL,'2014-09-17 00:00:00',15,999,NULL),(267,'ddb5d367334c1e2a6b0f6a887d8e2e69.jpg',NULL,'2014-09-17 00:00:00',15,999,NULL),(268,'d275861c433041855acd9a3268000394.jpg',NULL,'2014-09-17 00:00:00',15,999,NULL),(269,'50d11213d85731af91186a7092a9c1cb.jpg',NULL,'2014-09-17 00:00:00',15,999,NULL),(270,'89785e160ba254dfe12ee9f6a17e5b29.jpg',NULL,'2014-09-17 00:00:00',15,999,NULL),(271,'4233143c324f9f6442d1882f6728a307.jpg',NULL,'2014-09-17 00:00:00',15,999,NULL),(272,'80c3e5958cb2830b792ea6c4f16e1e9a.jpg',NULL,'2014-09-17 00:00:00',15,999,NULL),(273,'74c0d4d6007a156e13a0cde4759f91c6.jpg',NULL,'2014-09-17 00:00:00',15,999,NULL),(274,'d1e6a554305c2d455c0b8b0645edddb9.jpg',NULL,'2014-09-17 00:00:00',15,999,NULL),(275,'5a314a1291d7f60a3bb9e947ee242be4.jpg',NULL,'2014-09-17 00:00:00',15,999,NULL),(276,'af0c70a8aecc6630a00b3d929728cc06.jpg',NULL,'2014-09-17 00:00:00',15,999,NULL),(277,'cc77289e9bacbbfd6c8c9c47fd25caa5.jpg',NULL,'2014-09-17 00:00:00',15,999,NULL),(278,'f9e5a29f374ad06dda9bff96fe8e3714.jpg',NULL,'2014-09-17 00:00:00',15,999,NULL),(279,'f207e4504ea26e708538bbc782d905a9.jpg',NULL,'2014-09-17 00:00:00',15,999,NULL),(280,'43986cf2d354ac9c447b387ec629f9ca.jpg',NULL,'2014-09-17 00:00:00',16,999,NULL),(281,'03499a72bbfcef305819d4b0fe50ca68.jpg',NULL,'2014-09-17 00:00:00',16,999,NULL),(282,'f2d3d0762d67efad75d9e675929f6bf6.jpg',NULL,'2014-09-17 00:00:00',16,0,NULL),(283,'03a697e7bea133258f3cf5bf0b3c466d.jpg',NULL,'2014-09-17 00:00:00',16,999,NULL),(284,'39ce8ee35f7456426974f92cd17137aa.jpg',NULL,'2014-09-17 00:00:00',16,999,NULL),(285,'7bbe4999898ba2a7e3f14a49ed96cf6b.jpg',NULL,'2014-09-17 00:00:00',17,2,NULL),(286,'d7bc21e50f96472512c3013c1f6b66e9.jpg',NULL,'2014-09-17 00:00:00',17,3,NULL),(287,'9284580b02dcf1fdacf521d890d66f3c.jpg',NULL,'2014-09-17 00:00:00',17,4,NULL),(288,'aef1f573f6ce50da9a77e1bdbc9eb06a.jpg',NULL,'2014-09-17 00:00:00',17,5,NULL),(289,'1c944731ec5c36ca65a0451e60cb877a.jpg',NULL,'2014-09-17 00:00:00',17,6,NULL),(290,'f6478cf30df4b01c23c9b53031136818.jpg',NULL,'2014-09-17 00:00:00',17,7,NULL),(291,'eb1483134b83bca68883513615b3d5e3.jpg',NULL,'2014-09-17 00:00:00',17,1,NULL),(292,'a3938e42da8a33a1ccd623aa6e84d8ff.jpg',NULL,'2014-09-17 00:00:00',17,8,NULL),(293,'1cd6bc1c815be7338fcece4ea4f2d7d6.jpg',NULL,'2014-09-17 00:00:00',17,9,NULL),(294,'aa8fe0b907e1af2c6cc6fcd090dcbe98.jpg',NULL,'2014-09-17 00:00:00',17,10,NULL),(295,'ecb328ec4899e0e332008640bfe5abad.jpg',NULL,'2014-09-17 00:00:00',17,0,NULL),(296,'077f1c505a6e6293ac3967a3222702b3.jpg',NULL,'2014-09-17 00:00:00',17,11,NULL),(297,'d74d5986a9c9f0a3606c753bf1b16bba.jpg',NULL,'2014-09-17 00:00:00',17,12,NULL),(298,'310d4c70982acc900526e540558f5642.jpg',NULL,'2014-09-17 00:00:00',17,13,NULL),(299,'a07f00d125e59c29adcd3400ea9f44d4.jpg',NULL,'2014-09-17 00:00:00',17,14,NULL),(300,'68d9ece5dd4b442aa7c8ed09f3adf678.jpg',NULL,'2014-09-17 00:00:00',17,15,NULL),(301,'b09db3f424b5a9710ab4af392d92448d.jpg',NULL,'2014-09-17 00:00:00',17,16,NULL),(302,'b32b45028343fc3594b23ce71c3e6347.jpg',NULL,'2014-09-17 00:00:00',17,17,NULL),(303,'ea62cab0050eb7887cd65f8f94b233e2.jpg',NULL,'2014-09-17 00:00:00',17,18,NULL),(304,'652e7504d7dbf488c83972c66e0de391.jpg',NULL,'2014-09-17 00:00:00',17,19,NULL),(305,'f1bee70751b6fca3582094eda88c577a.jpg',NULL,'2014-09-17 00:00:00',17,20,NULL),(306,'5807da99a2609e507093249ce629340d.jpg',NULL,'2014-09-17 00:00:00',17,21,NULL),(307,'4ae2a4fd4bee3f55e786c8d51e5133a1.jpg',NULL,'2014-09-17 00:00:00',17,22,NULL),(308,'84d887ec53f4aabea90e5ea6d2180eda.jpg',NULL,'2014-09-17 00:00:00',17,23,NULL),(309,'bd7b4f4e303cf2aec03dcc3adf06b63a.jpg',NULL,'2014-09-17 00:00:00',17,24,NULL),(310,'0a182f169c04064c41b752a1846de8a1.jpg',NULL,'2014-09-17 00:00:00',17,25,NULL),(311,'8173ea43aeb33271fb787935b0591638.jpg',NULL,'2014-09-17 00:00:00',17,26,NULL),(312,'d4c79cb92495d2d6921e7f58c1aa9b37.jpg',NULL,'2014-09-17 00:00:00',17,27,NULL),(313,'da251d1e05bf7def7b21beb876933555.jpg',NULL,'2014-09-17 00:00:00',17,28,NULL),(314,'0f68e8d9b2c10f7a3daf685547e4547e.jpg',NULL,'2014-09-17 00:00:00',17,29,NULL),(315,'dc229738ddf1c17a968372d8e287b3ed.jpg',NULL,'2014-09-17 00:00:00',17,30,NULL),(316,'54c9e14bb8fbd830c3a2c4ba859f27a3.jpg',NULL,'2014-09-17 00:00:00',17,31,NULL),(317,'46ecc997201cec0d5b982cab4a4fdf24.jpg',NULL,'2014-09-17 00:00:00',17,32,NULL),(318,'dd2d52dcc5dd770dbf6ccf5d39785d71.jpg',NULL,'2014-09-17 00:00:00',17,33,NULL),(319,'c32d6618f6c63a0a252ab7e3894a80a8.jpg',NULL,'2014-09-17 00:00:00',17,34,NULL),(320,'53d20fb70c259729ec4da83f1aaceeaa.jpg',NULL,'2014-09-17 00:00:00',17,35,NULL),(321,'42bd918573f4343bcf5ddb9bfb2f782a.jpg',NULL,'2014-09-17 00:00:00',17,36,NULL),(322,'1ffac28faa38b4dccf3ff7873f873499.jpg',NULL,'2014-09-17 00:00:00',17,37,NULL),(323,'38ccca742e4827796170ad06ecdf1238.jpg',NULL,'2014-09-17 00:00:00',17,38,NULL),(324,'69948de89d5e1cfa244d2ef2d0c9ef54.jpg',NULL,'2014-09-17 00:00:00',17,39,NULL),(325,'29535cb9f23a0a4e5fe2fe41c3f0a9f9.jpg',NULL,'2014-09-17 00:00:00',17,40,NULL),(326,'0d6d86c10b7436b5dadecd358d8ac8fe.jpg',NULL,'2014-09-17 00:00:00',17,41,NULL),(327,'22c4232476091488bc3dd6f8d2bac0e6.jpg',NULL,'2014-09-17 00:00:00',17,42,NULL),(328,'4f6d162ee51cab90abc6675b40c9a3d8.jpg',NULL,'2014-09-17 00:00:00',17,43,NULL),(329,'a84c3578584e57df4884bce9ef9b90da.jpg',NULL,'2014-09-17 00:00:00',17,44,NULL),(330,'09ffdc41a5c599af4a164e00ac42b187.jpg',NULL,'2014-09-17 00:00:00',17,45,NULL),(331,'3e6be28fe1a0762888abb828c77e2f65.jpg',NULL,'2014-09-17 00:00:00',17,46,NULL),(332,'933a1456e6d1c6acbdb9585a57ed9223.jpg',NULL,'2014-09-17 00:00:00',17,47,NULL),(333,'1fee6f1d879486f0448ba7c44c002fe8.jpg',NULL,'2014-09-17 00:00:00',17,48,NULL),(334,'7cd6e3f83935c8599023581fbb8e9cb4.jpg',NULL,'2014-09-17 00:00:00',17,49,NULL),(335,'d46177b7c6351e57c592479674097098.jpg',NULL,'2014-09-17 00:00:00',17,50,NULL),(336,'7c519f0942b630658526391f696a5f51.jpg',NULL,'2014-09-17 00:00:00',17,51,NULL),(337,'2d14e0435410c6e733a7776107d0bc53.jpg',NULL,'2014-09-17 00:00:00',17,52,NULL),(338,'37950cacfd1f1aa81fe85ff02a8e2080.jpg',NULL,'2014-09-17 00:00:00',17,53,NULL),(339,'67f4909c22b3b56b5b7eb77a0c29e7e7.jpg',NULL,'2014-09-17 00:00:00',17,54,NULL),(340,'e3398503ee37110f15e8db6a01f243a3.jpg',NULL,'2014-09-17 00:00:00',17,55,NULL),(341,'a919755a7f4cd8417f85723884c7d497.jpg',NULL,'2014-09-17 00:00:00',17,56,NULL),(342,'d187e653b1b8b8b436adcbb504d8af2a.jpg',NULL,'2014-09-17 00:00:00',17,57,NULL),(343,'26b5efdd4ce99d70115f14f7ccd6db21.jpg',NULL,'2014-09-17 00:00:00',17,58,NULL),(344,'3f08758357d2a2a72f78c364031d27d5.jpg',NULL,'2014-09-17 00:00:00',17,59,NULL),(345,'f552a05398cfb1c547e5dbb9c1d88f29.jpg',NULL,'2014-09-17 00:00:00',17,60,NULL),(346,'7767d8489e73d106729ec4b055ed0ce0.jpg',NULL,'2014-09-17 00:00:00',17,61,NULL),(347,'4a81748088b7c000edb98379c434dae1.jpg',NULL,'2014-09-17 00:00:00',17,62,NULL),(350,'81963d81c98961a027587f4ebf1f84a6.jpg',NULL,'2014-09-25 00:00:00',18,999,NULL);
/*!40000 ALTER TABLE `fotos` ENABLE KEYS */;
UNLOCK TABLES;

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
-- Dumping data for table `info`
--

LOCK TABLES `info` WRITE;
/*!40000 ALTER TABLE `info` DISABLE KEYS */;
INSERT INTO `info` VALUES (1,'Espaço Patas - Resort & Spa Pet','<p><span>O&nbsp;</span><span>Espa&ccedil;o Patas</span><span>&nbsp;&eacute; um Resort e Spa Pet sendo uma solu&ccedil;&atilde;o em hospedagem e recrea&ccedil;&atilde;o animal. Com uma &aacute;rea de 12.000 m2, contamos com uma estrutura...</span></p>','<p>resort spa pet, spa pet, hospedagem animal, recreacao animal, espaco patas</p>',18,'2','2','2','2','2014-09-24','15:01:17'),(2,'2','2','2',18,'contato@espacopatas.com.br','web@ataquepropaganda.com.br','','','2014-09-24','15:08:29');
/*!40000 ALTER TABLE `info` ENABLE KEYS */;
UNLOCK TABLES;

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
-- Dumping data for table `noticias`
--

LOCK TABLES `noticias` WRITE;
/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
INSERT INTO `noticias` VALUES (4,'ADOTAR É O BICHO!','Com a realização do Espaço Patas, a 2ª Feira de Adoção \"Adotar é o Bicho!\" foi um SUCESSO!!! Aconteceu neste sábado no parque do povo de Presidente Prudente, das 9h às 12h, foram adotados mais de 30 animais (entre cães e gatos).','<p>Com a realiza&ccedil;&atilde;o do Espa&ccedil;o Patas, a 2&ordf; Feira de Ado&ccedil;&atilde;o \'Adotar &eacute; o Bicho!\' foi um SUCESSO!!! Aconteceu neste s&aacute;bado no parque do povo de Presidente Prudente, das 9h &agrave;s 12h, foram adotados mais de 30 animais (entre c&atilde;es e gatos).</p>',18,'','','2013-04-21','16:38:20',21,4,2013,'','s',' O objetivo foi alcançado com muita alegria e satisfação. Confira algumas fotos da feira... =)'),(5,'1ª FESTA CÃONINA ESPAÇO PATAS','Cães e proprietários trajados a carater para o grande casório. A cerimônia terá início às 17h regada de muitas brincadeiras, diversão, comidinhas típicas e petiscos para todos.','<p><span>C&atilde;es e propriet&aacute;rios trajados a carater para o grande cas&oacute;rio. A cerim&ocirc;nia ter&aacute; in&iacute;cio &agrave;s 17h regada de muitas brincadeiras, divers&atilde;o, comidinhas t&iacute;picas e petiscos para todos.</span></p>',18,NULL,NULL,'2013-06-22','16:38:47',22,6,2013,'','s',' Cães e proprietários trajados a carater para o grande casório. A cerimônia terá início às 17h regada de muitas brincadeiras, diversão, comidinhas típicas e petiscos para todos.'),(6,'INAUGURAÇÃO ESPAÇO PATAS','A festa de Inauguração do Espaço Patas foi demais!!! Obrigada a todos que compareceram!!!','<p><span>A festa de Inaugura&ccedil;&atilde;o do Espa&ccedil;o Patas foi demais!!! Obrigada a todos que compareceram!!!</span></p>',18,NULL,NULL,'2013-01-19','16:37:46',19,1,2013,'','s','A festa de Inauguração do Espaço Patas foi demais!!! Obrigada a todos que compareceram!!!'),(7,'CAMPANHA 2014 \"ADOTAR É O BICHO!\"','Com a realização do Espaço Patas, a 2ª Feira de Adoção \"Adotar é o Bicho!\" foi um SUCESSO!!! Aconteceu neste sábado no parque do povo de Presidente Prudente','<p><span>Com a realiza&ccedil;&atilde;o do Espa&ccedil;o Patas, a 2&ordf; Feira de Ado&ccedil;&atilde;o \"Adotar &eacute; o Bicho!\" foi um SUCESSO!!! Aconteceu neste s&aacute;bado no parque do povo de Presidente Prudente, das 9h &agrave;s 12h, foram adotados mais de 30 animais (entre c&atilde;es e gatos). Agradecemos todos os amigos e parceiros que ajudaram nesta causa. O objetivo foi alcan&ccedil;ado com muita alegria e satisfa&ccedil;&atilde;o. Confira algumas fotos da feira... =))</span></p>',18,NULL,NULL,'2014-09-24','11:33:33',24,9,2014,'','s','O objetivo foi alcançado com muita alegria e satisfação. Confira algumas fotos da feira... =))');
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;
UNLOCK TABLES;

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
-- Dumping data for table `noticias_fotos`
--

LOCK TABLES `noticias_fotos` WRITE;
/*!40000 ALTER TABLE `noticias_fotos` DISABLE KEYS */;
INSERT INTO `noticias_fotos` VALUES (7,'5f44ba56193075a35f6b0013393fe690.jpg',NULL,'2014-09-24 00:00:00',4,1,NULL),(8,'33b5a1e58fdd5cd22ab4d5580799ea09.jpg',NULL,'2014-09-24 00:00:00',4,1,NULL),(9,'b6c54309c4938e3c36163315dfb1db10.jpg',NULL,'2014-09-24 00:00:00',4,1,NULL),(10,'dc3bed2e6b6b36676cc10096b8b40dcc.jpg',NULL,'2014-09-24 00:00:00',4,1,NULL),(11,'46faef70c0de88508ff2d9df6dead478.jpg',NULL,'2014-09-24 00:00:00',4,1,NULL),(12,'ce75ce385474be6e29151a6b1b62f61f.jpg',NULL,'2014-09-24 00:00:00',4,1,NULL),(13,'d96dc82b3ccfde47b537bbcec7e7a8e9.jpg',NULL,'2014-09-24 00:00:00',4,1,NULL),(14,'9287704934b309ae1d1fec6faace8580.jpg',NULL,'2014-09-24 00:00:00',4,1,NULL),(15,'3816fe1ecdea36597c5ae1f0c93db85b.jpg',NULL,'2014-09-24 00:00:00',4,1,NULL),(16,'cc2efe0ec602045069a61bf10278e6dd.jpg',NULL,'2014-09-24 00:00:00',4,1,NULL),(17,'6957c7d4d4ca359ef5a9a8a9bd3d4ef5.jpg',NULL,'2014-09-24 00:00:00',4,1,NULL),(18,'553814c2383a64e5bc75fba74410f380.jpg',NULL,'2014-09-24 00:00:00',4,1,NULL),(19,'a4aec9d31c661858f860ea5ef9fe0241.jpg',NULL,'2014-09-24 00:00:00',4,1,NULL),(20,'26052a80d4eb4a57f6638cdab6d17429.jpg',NULL,'2014-09-24 00:00:00',4,1,NULL),(21,'b8fc19f20d9810a174bd8aa3c88ee2a7.jpg',NULL,'2014-09-24 00:00:00',4,1,NULL),(22,'98dc07387fffaca904874920b7ceae5f.jpg',NULL,'2014-09-24 00:00:00',4,1,NULL),(23,'1c108261c6c2ecd84e7174b474bb0721.jpg',NULL,'2014-09-24 00:00:00',4,1,NULL),(24,'aba2d71c07fd236bcea2d4f2a50506ab.jpg',NULL,'2014-09-24 00:00:00',4,1,NULL),(25,'db2fdf9a6380e116583d8e95b2f86a52.jpg',NULL,'2014-09-24 00:00:00',4,1,NULL),(26,'f72a43f8eec8b7992dd2ed0b9dcdc668.jpg',NULL,'2014-09-24 00:00:00',4,1,NULL),(27,'66092dc260b3d01dbf7508ecd1a6d463.jpg',NULL,'2014-09-24 00:00:00',4,1,NULL),(28,'7b64ccae0e13d1d97a34ead4a0d3ec05.jpg',NULL,'2014-09-24 00:00:00',4,1,NULL),(29,'dd001918df5062fa9956041b867a2e52.jpg',NULL,'2014-09-24 00:00:00',4,1,NULL),(30,'77bead696e28b1dcfbb8f4f43f8f782e.jpg',NULL,'2014-09-24 00:00:00',4,1,NULL),(31,'80050d770d13641a1cb8cc08af950b7e.jpg',NULL,'2014-09-24 00:00:00',4,0,NULL),(32,'b678d1d54ea2d9665c7f0173e3d64b27.jpg',NULL,'2014-09-24 00:00:00',5,1,NULL),(33,'d7378c4775e9a69ba8e7a3769ba85388.jpg',NULL,'2014-09-24 00:00:00',5,1,NULL),(34,'f11564f8916802d764d030698d71aae3.jpg','Espaço Patas','2014-09-24 00:00:00',5,0,''),(35,'c61e50d20f6fed7f28a495494d8c5643.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(36,'3e701eb15787852536974b2281479f51.jpg',NULL,'2014-09-24 00:00:00',6,0,NULL),(37,'0ed0a753e3f70a2ce143524e14c61f48.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(38,'e8440b08e91853b117d5f2dc9c2a3152.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(39,'b1f8040e281eb0ced6f8a6e3f300bcba.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(40,'efee5c5b48e7231f2eca83bd6a87237d.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(41,'911bd4861bc2aa845e39a1ecfc372dd8.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(42,'c806808e03550cb1e38ae83acdb30d80.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(43,'a01131233fcebc5ff9956ddf3458e144.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(44,'90a83de6d4424731ef5ded57aa9d3ec7.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(45,'b54a1ce2743bdcd38075474d7803675b.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(46,'c08cb80d0c9131c92e98334b1b809710.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(47,'0f56dc889d6110f5f3fd6296a848d53b.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(48,'4520df96c07fc50ef1bd662c5b428b22.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(49,'c506109e1ac0c480e613f7c34bc5d0bf.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(50,'beea34c1c5581670a3b76d02fa1d7e39.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(51,'e2a95c3832cd7934e3927de40ee92d24.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(52,'082dc945836575b74857017b0e303c50.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(53,'ea9297784ecd6bf47e442ec693cd50a6.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(54,'d6193270f1e1a411976caa3b8d678965.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(55,'679c10b4cbeac59f3406850f2535aa70.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(56,'8746896cb1a53e35e21209e7cb56ff59.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(57,'426ba8800d3e263a07c5f460e8abc2e6.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(58,'75672894254849a9d5500a099f01b0a2.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(59,'93cd940df0e49c5358427998f6fc7def.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(60,'dc15a3855b9796f673a138bbd18df244.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(61,'e93099284ddcce519e8b8fa2abeaf88a.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(62,'550bed6a8b979a1d1080e44b0857eca4.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(63,'e87729c1a2f9d5320ecc3210bb973354.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(64,'54a6ddcfda4748e9ccbde5dd54318680.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(65,'6cd7f8f7068d72d9df920cf025d7c927.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(66,'9dc12f6d377a94fb987636140e33f600.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(67,'a037214c6aa5f463e6f8ae2c0f2139b9.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(68,'48e1827b12f8c54e3aeabf4f8e9df945.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(69,'983f8ffeebad8135e33d4f254961b29a.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(70,'a1b796d7dc26343d28f97e45183dbb16.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(71,'3c524b193045139665d934e8970d2c58.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(72,'951b161e74fbadd97ddce351a063455e.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(73,'edef1e7666a1db318ecabf2f9d9695b4.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(74,'51d3e01f5c012888ab75b2011de03fda.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(75,'7cc348aae876e56402d2f532796223d9.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(76,'15a1b323ca06d732dc4acf56ec95c7b3.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(77,'7ce2b2b8720c77a1f5b6180102ed9f8b.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(78,'173d1b4629ab6a6737f63e763dcca3d5.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(79,'2262e98d82c46ddce0b5c7d96ea0bc46.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(80,'e8b778cdb86ec25342cb56da9a2ee2ee.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(81,'d525266e108e9100d03a601eebfea4d2.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(82,'7e155a683c6ac759bf7335fdf45cd784.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(83,'12b6a23c8f5d5d5e5dcb07ae7cbcdf59.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(84,'24a83645da53ea0a9258a0599bff0f2e.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(85,'9544b2d7952cb8a0a53284888774ad39.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(86,'582a15933515088a2b3264803e8c0331.jpg',NULL,'2014-09-24 00:00:00',6,1,NULL),(101,'68466af7cdbb84c24103a69ac2e9c2f2.jpg',NULL,'2014-09-24 00:00:00',7,999,NULL),(102,'44004c614af2370e0b78a333cc2eb52f.jpg',NULL,'2014-09-24 00:00:00',7,999,NULL),(103,'02255f134f9f061d8a2179befd0a3d8b.jpg',NULL,'2014-09-24 00:00:00',7,999,NULL),(104,'4d3400f9b9072f280cfc04dfe5871ba6.jpg',NULL,'2014-09-24 00:00:00',7,999,NULL),(105,'15c1d493efe01091a14629cc821f28c8.jpg',NULL,'2014-09-24 00:00:00',7,999,NULL),(106,'3c3d5a2849dd864819b6a2c10fc96c44.jpg',NULL,'2014-09-24 00:00:00',7,999,NULL),(107,'860de6e776d3634db00d3fbd79368354.jpg',NULL,'2014-09-24 00:00:00',7,999,NULL),(108,'803e06ef542b5ed1e24d570531bbf8ae.jpg',NULL,'2014-09-24 00:00:00',7,999,NULL),(109,'b1462e4bec1bccabbbcac4571e72956e.jpg',NULL,'2014-09-24 00:00:00',7,999,NULL),(110,'470a0a2d5a2671d237ae0363d0fbe794.jpg',NULL,'2014-09-24 00:00:00',7,999,NULL),(111,'7f0f8ea36707bac6d402fa05fb114f34.jpg',NULL,'2014-09-24 00:00:00',7,999,NULL),(112,'93cda0677ee3b8b6a3af7297b59f5b87.jpg',NULL,'2014-09-24 00:00:00',7,999,NULL),(113,'928ce8eb4edb4a131ffc26e8e4e9a498.jpg',NULL,'2014-09-24 00:00:00',7,999,NULL),(114,'0a09ea6d4c17554c7ef9ba45b5d63e40.jpg',NULL,'2014-09-24 00:00:00',7,999,NULL),(115,'fef0afbc91dda2f154d95bdfb72898eb.jpg',NULL,'2014-09-24 00:00:00',7,999,NULL),(116,'969342fb3873afbaf6f2f27ec3f4b30b.jpg',NULL,'2014-09-24 00:00:00',7,999,NULL),(117,'de62195b746a5c0988da6954b6d61765.jpg',NULL,'2014-09-24 00:00:00',7,999,NULL),(118,'0065d21d3d962b232596880999ca3b9d.jpg',NULL,'2014-09-24 00:00:00',7,999,NULL),(119,'e931bf560a671e4d80ea475ee2f02d2a.jpg',NULL,'2014-09-24 00:00:00',7,999,NULL),(120,'e123e8c46e50fb44c3b9dcca5ec48574.jpg',NULL,'2014-09-24 00:00:00',7,999,NULL),(121,'f679878a0333155c593d763810e55810.jpg',NULL,'2014-09-24 00:00:00',7,999,NULL),(122,'675292859c477243bdd23d2b9fc77659.jpg',NULL,'2014-09-24 00:00:00',7,999,NULL),(123,'8e0fa505b4f8fa0b46987fc1a4f04522.jpg',NULL,'2014-09-24 00:00:00',7,999,NULL),(124,'1b526e4d7849ec8af4e978c90eb2b19d.jpg',NULL,'2014-09-24 00:00:00',7,999,NULL),(125,'216f4c76709227ac27267d789b36fb4d.jpg',NULL,'2014-09-24 00:00:00',7,999,NULL),(126,'5481ecba6cae0fe94269b58638fc7493.jpg',NULL,'2014-09-24 00:00:00',7,999,NULL),(127,'ceed48689a8b2bdda296c17923a3de5d.jpg',NULL,'2014-09-24 00:00:00',7,999,NULL),(128,'5ca9200294507b0df1428d5af409e3e1.jpg',NULL,'2014-09-24 00:00:00',7,999,NULL),(129,'fa2bd5bbfc3c1aa43a5061f5016b0086.jpg',NULL,'2014-09-24 00:00:00',7,999,NULL),(130,'97726f6a050cc9aab2486b99ce1c7dce.jpg',NULL,'2014-09-24 00:00:00',7,999,NULL);
/*!40000 ALTER TABLE `noticias_fotos` ENABLE KEYS */;
UNLOCK TABLES;

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
-- Dumping data for table `parceiros`
--

LOCK TABLES `parceiros` WRITE;
/*!40000 ALTER TABLE `parceiros` DISABLE KEYS */;
INSERT INTO `parceiros` VALUES (18,'Campo Belo','767382047af9b83fb51bde2919ba62cb.jpg','www.campobeloresort.com.br/site/','2014-09-23','10:13:08',18),(19,'Adotar é o Bicho','b175b7b73b0dafc1ee5aae4462b6df6e.jpg','www.espacopatas.com.br','2014-09-23','10:13:26',18),(20,'Campo Belo','767382047af9b83fb51bde2919ba62cb.jpg','www.campobeloresort.com.br/site/','2014-09-23','10:13:38',18),(21,'Adotar é o Bicho','b175b7b73b0dafc1ee5aae4462b6df6e.jpg','www.espacopatas.com.br','2014-09-23','10:13:48',18),(22,'Campo Belo','767382047af9b83fb51bde2919ba62cb.jpg','www.campobeloresort.com.br/site/','2014-09-23','10:14:04',18),(23,'Adotar é o Bicho','b175b7b73b0dafc1ee5aae4462b6df6e.jpg','www.espacopatas.com.br','2014-09-23','10:14:15',18);
/*!40000 ALTER TABLE `parceiros` ENABLE KEYS */;
UNLOCK TABLES;

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
-- Dumping data for table `servicos`
--

LOCK TABLES `servicos` WRITE;
/*!40000 ALTER TABLE `servicos` DISABLE KEYS */;
INSERT INTO `servicos` VALUES (1,'HOSPEDAGEM','Aqui, o seu cão tem um serviço completo de hospedagem com total segurança e qualidade.','2061e88348440978748a519e86514b10.jpg','2014-09-26','09:36:52',18),(2,'RECREAÇÃO teste','Para você que anda muito ocupado, a nossa creche é a solução ideal.','84952cb0d2cf37abf6ec5db598306f2c.jpg','2014-09-17','11:39:53',18),(3,'SPA & REABILITAÇÃO','Se o seu cão necessita de exercícios e atividades físicas monitoradas para recuperação de traumas ou emagrecimentopara atender às suas necessidades.','e8478d0c921a633edcd457b705843151.jpg','2014-09-17','09:48:46',18),(4,'TAXI DOG','Dispomos de um veículo especial e climatizado para levar e trazer seu cachorro com conforto e segurança, na cidade de Presidente Prudente e região.','932c46d0aebac19a85cb9e95c86ae939.jpg','2014-09-17','09:50:50',18),(5,'BANHO E TOSA','Usamos produtos hipoalergênicos de primeira linha que realmente tratam, hidratam os pêlos e dão todo o embelezamento necessário para o seu cachorrinho.','46e6f4cf14a88e0ad17ea1648b6d024c.jpg','2014-09-17','09:51:12',18),(6,'ASILO','Possuimos a estrutura ideal para o seu fiel amigo idoso. Nossas baias individuais internas possuem cama com cobertorzinho para manter os cachorros confortáveis.','a7080221fd95e723db7ad973570622fd.jpg','2014-09-17','09:52:20',18),(7,'CONSULTA COMPORTAMENTAL','Possuimos a estrutura ideal para o seu fiel amigo idoso. Nossas baias individuais internas possuem cama com cobertorzinho para manter os cachorros confortáveis.','5b48db90947cbe0177f045e1fbc1b2f0.jpg','2014-09-17','09:52:56',18);
/*!40000 ALTER TABLE `servicos` ENABLE KEYS */;
UNLOCK TABLES;

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
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (16,'Usuário','usuario@usuario','f8032d5cae3de20fcec887f395ec9a6a','USUARIO'),(18,'Administrador','admin@admin','7c0aaa09f4a4c2e053076968f4c1e375','ADMIN'),(19,'Espaço Patas','espacopatas@espacopatas','7c0aaa09f4a4c2e053076968f4c1e375','ADMIN');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

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

-- Dump completed on 2014-09-26 10:11:50
