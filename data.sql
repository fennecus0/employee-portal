-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: melnykdb
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.16.04.1

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
-- Table structure for table `dform`
--

DROP TABLE IF EXISTS `dform`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dform` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstname1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstname2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstname3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstname4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstname5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstname6` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname6` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstname7` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname7` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstname8` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname8` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstname9` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname9` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstname10` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname10` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `initialDate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `initialTime` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `endingDate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `endingTime` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dform`
--

LOCK TABLES `dform` WRITE;
/*!40000 ALTER TABLE `dform` DISABLE KEYS */;
INSERT INTO `dform` VALUES (20,33,'BearingNet Madrid','Jan','Kruse','','','','','','','','','','','','','','','','','','','','','2017-06-08','','2017-06-11',''),(22,1,'Messe','Vadym','Melnyk','Mustermann','Mustermann','','','','','','','','','','','','','','','','','','','2017-05-31','15:34','2017-06-03','15:34'),(23,33,'Testeintrag','Jan','Kruse','','','','','','','','','','','','','','','','','','','','','2017-06-07','','',''),(24,6,'Teilnahme Bearingnet User Meeting, Madrid','Hans-Martin','Reinhardt','','','','','','','','','','','','','','','','','','','','','undefined','','2017-06-08',''),(26,1,'Messe','Vadym','Melnyk','','','Vadym','Melnyk','','','','','','','','','','','','','','','','','2017-06-07','09:33','','09:33'),(27,6,'Bearingnet User Meeting, Madrid','Hans-Martin','Reinhardt','','','','','','','','','','','','','','','','','','','','','2017-06-08','','2017-06-11',''),(33,33,'BearingNet Madrid','Jan','Kruse','','','','','','','','','','','','','','','','','','','','','2017-06-08','','2017-06-11',''),(35,6,'Besuch NordWest in Giesen','Hans-Martin','Reinhardt','','','','','','','','','','','','','','','','','','','','','2017-08-02','','',''),(36,6,'Besuch Meister Dachau','Hans-Martin','Reinhardt','','','','','','','','','','','','','','','','','','','','','2017-07-13','','',''),(37,6,'Besuch Ditzinger in Braunschweig','Hans-Martin','Reinhardt','','','','','','','','','','','','','','','','','','','','','2017-07-11','','',''),(38,6,'Termin Stadt Bochum','Hans-Martin','Reinhardt','','','','','','','','','','','','','','','','','','','','','2017-07-06','13:00','','15:30'),(39,6,'Besuch Referenzfirma BVS, Aachen','Hans-Martin','Reinhardt','','','','','','','','','','','','','','','','','','','','','2017-07-07','','',''),(40,6,'Besuch Referenzfirma BVS, Aachen','Hans-Martin','Reinhardt','','','','','','','','','','','','','','','','','','','','','2017-08-28','','',''),(41,6,'STORNO, Besuch Referenzfirma BVS, Aachen, STORNO','Hans-Martin','Reinhardt','','','','','','','','','','','','','','','','','','','','','2017-07-07','','',''),(42,47,'Termin bei Meister in Dachau','Daniel','Pereira','','','','','','','','','','','','','','','','','','','','','2017-07-13','','',''),(43,33,'Fokusgruppe 3D-Druck','Jan','Kruse','','','','','','','','','','','','','','','','','','','','','2017-08-15','16:00','','18:00'),(44,6,'Besuch Lemken','Hans-Martin','Reinhardt','','','','','','','','','','','','','','','','','','','','','2017-08-23','','',''),(45,33,'Grosshandelstag Essen','Jan','Kruse','','','','','','','','','','','','','','','','','','','','','2017-09-27','','',''),(46,1,'Test Test Test','Vadym','Melnyk','','','','','','','','','','','','','','','','','','','','','2017-08-29','','2017-08-23',''),(50,1,'Test Test Test3333','Vadym','Melnyk','','','','','','','','','','','','','','','','','','','','','2017-08-29','','2017-08-30',''),(51,1,'Test Test Test444','Vadym','Melnyk','','','','','','','','','','','','','','','','','','','','','2017-08-29','','',''),(52,1,'Test Test Test55','Vadym','Melnyk','','','','','','','','','','','','','','','','','','','','','2017-08-29','11:12','','12:13'),(54,6,'UPS Düsseldorf','Hans-Martin','Reinhardt','','','','','','','','','','','','','','','','','','','','','2017-08-31','11:00','','16:00'),(55,33,'Messe EMO Hannover','Jan','Kruse','','','','','','','','','','','','','','','','','','','','','2017-09-19','','',''),(56,33,'Veranstaltung up-Satz Bochum','Jan','Kruse','','','','','','','','','','','','','','','','','','','','','2017-09-28','14:30','','20:00'),(57,33,'ERIKS/IADA Besuche in UK','Jan','Kruse','','','','','','','','','','','','','','','','','','','','','2017-10-01','','2017-10-07',''),(58,33,'Messe MOTEK Stuttgart','Jan','Kruse','','','','','','','','','','','','','','','','','','','','','2017-10-10','','',''),(59,33,'Konferenz BRCE Dortmund','Jan','Kruse','','','','','','','','','','','','','','','','','','','','','2017-10-11','','2017-10-12','');
/*!40000 ALTER TABLE `dform` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fos_user`
--

DROP TABLE IF EXISTS `fos_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fos_user`
--

LOCK TABLES `fos_user` WRITE;
/*!40000 ALTER TABLE `fos_user` DISABLE KEYS */;
INSERT INTO `fos_user` VALUES (1,'vadym.melnyk@picard.de','vadym.melnyk@picard.de','vadym.melnyk@picard.de','vadym.melnyk@picard.de',1,NULL,'$2y$13$aJYhu186Vcj3L1h43sjq9.Tr2F9SWmper.QCpVBxX/H9TuFWjL/CC','2017-09-06 16:47:55',NULL,NULL,'a:0:{}','Vadym','Melnyk'),(4,'andrea.ivanegova@picard.de','andrea.ivanegova@picard.de','andrea.ivanegova@picard.de','andrea.ivanegova@picard.de',1,NULL,'$2y$13$Z9EPZ5ArRJvXGHZ878CS7uu7CJ6LloFp9.0gO6ae8XHvhCymFK/Le','2017-05-16 13:55:57',NULL,NULL,'a:0:{}','Andrea','Ivanegova'),(5,'dulsmann@gmx.de','dulsmann@gmx.de','dulsmann@gmx.de','dulsmann@gmx.de',1,NULL,'$2y$13$lZkgYRtTvq5cB3ULLBU/LOdhbepgJVh3vTZ6Lncb1m8hkBbzU5Fra','2017-05-16 13:56:54',NULL,NULL,'a:0:{}','Maik','Dulsmann'),(6,'h-m.reinhardt@t-online.de','h-m.reinhardt@t-online.de','h-m.reinhardt@t-online.de','h-m.reinhardt@t-online.de',1,NULL,'$2y$13$wtGQYMqmjsNwoBvJgqGg9OMiJS3cuCxMTr3xF/9Mo3uyHhOE65ff2','2017-08-31 10:12:23',NULL,NULL,'a:0:{}','Hans-Martin','Reinhardt'),(7,'ms@picard.de','ms@picard.de','ms@picard.de','ms@picard.de',1,NULL,'$2y$13$nvaH0E.d1XGlhnz2pX8gRuEDFYGNq7/HfwojlaWPea6XO3Gkb8qki','2017-05-18 12:51:17',NULL,NULL,'a:0:{}','Marina','Sacco'),(8,'natascha.schueler@picard.de','natascha.schueler@picard.de','natascha.schueler@picard.de','natascha.schueler@picard.de',1,NULL,'$2y$13$akBGnTLxbltUs2cKqsAqPeiRsPoRpFwaGZpjKrLx3aq5MwCw4UY8.','2017-05-18 12:52:01',NULL,NULL,'a:0:{}','Natascha','Schüler'),(9,'marc.picard@picard.de','marc.picard@picard.de','marc.picard@picard.de','marc.picard@picard.de',1,NULL,'$2y$13$60UQ/se2TQGpt1SuD0/eM.WUFIBqRb9q1CqqU3UE.ohgMBPOXn5Pu','2017-05-18 12:52:49',NULL,NULL,'a:0:{}','Marc','Picard'),(10,'larissa.schumacher@picard.de','larissa.schumacher@picard.de','larissa.schumacher@picard.de','larissa.schumacher@picard.de',1,NULL,'$2y$13$xRqT5VEWOjXdPeL2H1QMfO6m7mSND3VUhpKfMIoHeXsAB7rQlwfSK','2017-05-18 13:23:23',NULL,NULL,'a:0:{}','Larissa','Schumacher'),(11,'ali@picard.de','ali@picard.de','ali@picard.de','ali@picard.de',1,NULL,'$2y$13$fTXqlldgmsnEHCD6GCT.zeko71W9OK64MiUdn09kEMbuata.t1/vu','2017-05-18 13:24:31',NULL,NULL,'a:0:{}','Annick','Lingier'),(12,'ulrich.hoevelmann@picard.de','ulrich.hoevelmann@picard.de','ulrich.hoevelmann@picard.de','ulrich.hoevelmann@picard.de',1,NULL,'$2y$13$A/N4LCn4m4HKuJF.xveSZ.5MVOEbFZSklfKKn.IBwkjMofQyQ06au','2017-05-18 13:25:39',NULL,NULL,'a:0:{}','Ulrich','Hövelmann'),(13,'jt@picard.de','jt@picard.de','jt@picard.de','jt@picard.de',1,NULL,'$2y$13$cEYgFG8mkaaRcH9T4fudbe47cyBcbSyFL61vu4meTeJASJxmytrp2','2017-05-18 15:31:31',NULL,NULL,'a:0:{}','Julian','Tomaschewsky'),(14,'katerina.szymikova@picard.de','katerina.szymikova@picard.de','katerina.szymikova@picard.de','katerina.szymikova@picard.de',1,NULL,'$2y$13$Q.ZjjRZ12yS68OTQaRtJI.KCDOqLAMypqZiqHJUgI0YRM3f0nUV3G','2017-05-18 15:32:09',NULL,NULL,'a:0:{}','Katerina','Szymikova'),(15,'konstantinos.panagiotou@picard.de','konstantinos.panagiotou@picard.de','konstantinos.panagiotou@picard.de','konstantinos.panagiotou@picard.de',1,NULL,'$2y$13$sCr78yl2GdW47n4WA9LrFODf//.wZlm7CScQirrd8AsNbSyFG3UfC','2017-05-18 16:15:01',NULL,NULL,'a:0:{}','Kostantinos','Panagiotou'),(16,'klaus.rehermann@picard.de','klaus.rehermann@picard.de','klaus.rehermann@picard.de','klaus.rehermann@picard.de',1,NULL,'$2y$13$GjdZbK5Na4nzdx8VfR267.6ZujGZwuRKpKdvp7tQbZ6s0a/dVbknK','2017-05-18 16:15:31',NULL,NULL,'a:0:{}','Klaus','Rehermann'),(17,'d.grundmann@heureka.de','d.grundmann@heureka.de','d.grundmann@heureka.de','d.grundmann@heureka.de',1,NULL,'$2y$13$eRiMZD7geaowfs1.ZoI/ru2xV8vXCDDGJJUFomWOLNQA8Ii/6EE.K','2017-05-18 16:16:03',NULL,NULL,'a:0:{}','Daniela','Grundmann'),(18,'c.schramm@heureka.de','c.schramm@heureka.de','c.schramm@heureka.de','c.schramm@heureka.de',1,NULL,'$2y$13$T2grI5osAXPUjGDcxoe1wOPUyDy72n8yl/JiUO3F0trIleXRDwjAi','2017-05-18 16:16:36',NULL,NULL,'a:0:{}','Christian','Schramm'),(19,'i.dalkmann@heureka.de','i.dalkmann@heureka.de','i.dalkmann@heureka.de','i.dalkmann@heureka.de',1,NULL,'$2y$13$4Xp6dYw78gmySUv2hZXMKO6npqF/OwNmwIeEwuV8zElkAT6FhIgkK','2017-05-18 16:17:15',NULL,NULL,'a:0:{}','Ines','Dalkmann'),(20,'gabriella.depka@picard.de','gabriella.depka@picard.de','gabriella.depka@picard.de','gabriella.depka@picard.de',1,NULL,'$2y$13$XkdE9u0n2B6sIeIr5MtFj.O4B02xotrsLZspuqCDCMfkB0HolYFEi','2017-05-18 16:17:47',NULL,NULL,'a:0:{}','Gabriella','Depka'),(21,'isabella.tullio@picard.de','isabella.tullio@picard.de','isabella.tullio@picard.de','isabella.tullio@picard.de',1,NULL,'$2y$13$RkF1hzs1svFhHE./ERObV.2iV9qQ3ZquyZcwp9Ynsmc3bElewNNLW','2017-05-18 16:18:22',NULL,NULL,'a:0:{}','Isabella','Tullio'),(22,'stephan.isenberg@picard.de','stephan.isenberg@picard.de','stephan.isenberg@picard.de','stephan.isenberg@picard.de',1,NULL,'$2y$13$duBWobZQAkFgc0auxQQEM.RuXB7LRkyzFI7BwIt6F.4kemEcXaSly','2017-05-18 16:18:55',NULL,NULL,'a:0:{}','Stephan','Isenberg'),(23,'ts@picard.de','ts@picard.de','ts@picard.de','ts@picard.de',1,NULL,'$2y$13$deMY/SDU7PI84Ju3uCrYAO.tTeGG1oqeGnvIikegDClUVbSII6042','2017-05-31 12:26:33',NULL,NULL,'a:0:{}','Tobias','Schweitzer'),(24,'mathilde.cartolaro@picard.de','mathilde.cartolaro@picard.de','mathilde.cartolaro@picard.de','mathilde.cartolaro@picard.de',1,NULL,'$2y$13$.rourFHAjFrp9Af8bIhpWO85Z9op.HN5VghgwX4k4oq74Xc51Q4si','2017-05-18 16:20:02',NULL,NULL,'a:0:{}','Mathilde','Cartolaro'),(25,'lena.kyrychenko@picard.de','lena.kyrychenko@picard.de','lena.kyrychenko@picard.de','lena.kyrychenko@picard.de',1,NULL,'$2y$13$.EcJO6HzAz2/cwd63UYAf.XzhRP812aD5xYNnzgTOe3K7DbsiNcKm','2017-05-18 16:20:37',NULL,NULL,'a:0:{}','Lena','Kyrychenko'),(26,'isabelle.daveluy@picard.de','isabelle.daveluy@picard.de','isabelle.daveluy@picard.de','isabelle.daveluy@picard.de',1,NULL,'$2y$13$8y3hp.IOYMujsdSrANafju1riAMV9ZNtrCoRGR4KQP4kbeyIEgaca','2017-05-18 16:21:09',NULL,NULL,'a:0:{}','Isabelle','Daveluy'),(27,'enza.di.giuseppe@picard.de','enza.di.giuseppe@picard.de','enza.di.giuseppe@picard.de','enza.di.giuseppe@picard.de',1,NULL,'$2y$13$TpZBcEPhU/n/5xbzopPNB.sDSynNUcqTHq6M9COnUQLHCO.s1G0RG','2017-05-18 16:21:40',NULL,NULL,'a:0:{}','Enza','Di Giuseppe'),(28,'carsten.huentemann@picard.de','carsten.huentemann@picard.de','carsten.huentemann@picard.de','carsten.huentemann@picard.de',1,NULL,'$2y$13$2lQ1LgAt/KI2CynRq137uu2/82815NsAmhF8Br2cV1x8XndbR6Him','2017-05-18 16:23:32',NULL,NULL,'a:0:{}','Carsten','Hüntemann'),(29,'kirill.gontscharov@picard.de','kirill.gontscharov@picard.de','kirill.gontscharov@picard.de','kirill.gontscharov@picard.de',1,NULL,'$2y$13$ltBz8w7wAuBNAqKBBMRijOwG.S4gCRPf3GjPVbDdccyMjwynkkuxe','2017-05-18 16:24:06',NULL,NULL,'a:0:{}','Kirill','Gontscharov'),(30,'marina.kuzmenko@picard.de','marina.kuzmenko@picard.de','marina.kuzmenko@picard.de','marina.kuzmenko@picard.de',1,NULL,'$2y$13$FQKr6IlgbhuGwoYHn67C0OtORSLXaiVy1jWEPzkfTvuFe0J1Z/lmy','2017-05-18 16:24:37',NULL,NULL,'a:0:{}','Marina','Kuzmenko'),(31,'patrick.czezorra@picard.de','patrick.czezorra@picard.de','patrick.czezorra@picard.de','patrick.czezorra@picard.de',1,NULL,'$2y$13$TtocGDqaxhAPy./v3wa1U.M8azHUkVbrNK5IjzuwU7.6qywko43ia','2017-05-18 16:25:04',NULL,NULL,'a:0:{}','Patrick','Czezorra'),(32,'raluca.paun@picard.de','raluca.paun@picard.de','raluca.paun@picard.de','raluca.paun@picard.de',1,NULL,'$2y$13$IvRw3U5C8I8F.PI1WTIdPOaE0w137tsRK/SQPycFhUWk4TG4ZDKha','2017-05-18 16:25:34',NULL,NULL,'a:0:{}','Raluca','Paun'),(33,'jk@picard.de','jk@picard.de','jk@picard.de','jk@picard.de',1,NULL,'$2y$13$wU6Hs9TaBw7i2JyKI4jZ8uqN0EDlK1kEiLp5Qydrze4a504rwKyyW','2017-09-04 09:50:10',NULL,NULL,'a:0:{}','Jan','Kruse'),(34,'edyta.krafczyk@picard.de','edyta.krafczyk@picard.de','edyta.krafczyk@picard.de','edyta.krafczyk@picard.de',1,NULL,'$2y$13$oFLxOsZv4OEP94v3fQeK6Of5RkO/Cedg7tDbP/q6SoXqlm8pcWJwS','2017-05-18 16:26:55',NULL,NULL,'a:0:{}','Edyta','Krafczyk'),(35,'st@picard.de','st@picard.de','st@picard.de','st@picard.de',1,NULL,'$2y$13$cL/.LTw9wT0MhTlJhj7wYOp2MVBkcKfHDW3mQ7b4Uy6kAEftp4NXi','2017-05-18 16:27:27',NULL,NULL,'a:0:{}','Songul','Tanriverdi'),(36,'claire.alves@picard.de','claire.alves@picard.de','claire.alves@picard.de','claire.alves@picard.de',1,NULL,'$2y$13$cqbeEWR1xau98CbCTdvFSulcdVakCgfNXHLFYK0y3zglpS4uPhg1K','2017-05-18 16:28:16',NULL,NULL,'a:0:{}','Claire','Alves'),(37,'sh@picard.de','sh@picard.de','sh@picard.de','sh@picard.de',1,NULL,'$2y$13$UZrydHtGz0twsJP5mIlHa.7qsFO76m0tCvRl0mIY6ZWJh/EbZWlBO','2017-05-18 16:28:45',NULL,NULL,'a:0:{}','Svenja','Hering'),(38,'rene.skupin@picard.de','rene.skupin@picard.de','rene.skupin@picard.de','rene.skupin@picard.de',1,NULL,'$2y$13$jy9JWD4qtllosKBESM1K6.3n5ieMLc1tjJppmqZjV.3yBBBvZ0o.a','2017-07-19 15:35:29',NULL,NULL,'a:0:{}','René','Skupin'),(39,'luis.martinez@picard.de','luis.martinez@picard.de','luis.martinez@picard.de','luis.martinez@picard.de',1,NULL,'$2y$13$i1d6TuSJHyYk8uIeJPPKO.hZWEL/b3F0o9TavNg/hSQyiquK5WltG','2017-05-18 16:31:32',NULL,NULL,'a:0:{}','Luis','Martinez'),(40,'lejla.hajder@picard.de','lejla.hajder@picard.de','lejla.hajder@picard.de','lejla.hajder@picard.de',1,NULL,'$2y$13$17nLldHeiQqUiKql6hTRieVIl8Nn21JUeaR4QPDR80.fzrVXHBP6S','2017-05-18 16:32:02',NULL,NULL,'a:0:{}','Lejla','Hajder'),(41,'griet.desmet@picard.de','griet.desmet@picard.de','griet.desmet@picard.de','griet.desmet@picard.de',1,NULL,'$2y$13$XhXKxviDSvh/unStYBoereHd.VDBUktw2/ICHwJzfPFxEJNM6cKH2','2017-05-19 08:02:06',NULL,NULL,'a:0:{}','Griet','De Smet'),(42,'christina.dierks@picard.de','christina.dierks@picard.de','christina.dierks@picard.de','christina.dierks@picard.de',1,NULL,'$2y$13$wnxOgUFrHsBJ89zOJdPjbOGGYw84OkiLA.h2I40RMOe34mdXCmuNa','2017-05-19 08:05:49',NULL,NULL,'a:0:{}','Christina','Dierks'),(43,'dani.malinova@picard.de','dani.malinova@picard.de','dani.malinova@picard.de','dani.malinova@picard.de',1,NULL,'$2y$13$7epQXM2s6qBxamOs8ACDp.kFTt9HjSK/eJwLWq8hVpCezTsLfYdRa','2017-05-19 08:07:41',NULL,NULL,'a:0:{}','Dani','Malinova'),(44,'jennifer.kuschnik@picard.de','jennifer.kuschnik@picard.de','jennifer.kuschnik@picard.de','jennifer.kuschnik@picard.de',1,NULL,'$2y$13$j1ABxJeKSyOOQw4414AHzugG2eegoC7GXyW2bW6LblP1BzHkIRcVq','2017-05-19 08:08:39',NULL,NULL,'a:0:{}','Jennifer','Kuschnik'),(45,'lisa.luecking@picard.de','lisa.luecking@picard.de','lisa.luecking@picard.de','lisa.luecking@picard.de',1,NULL,'$2y$13$41AXWmmJ1w3ekaKw/tA8geZ6L4Iubj5U2pYtUwEupOqs//T49/R16','2017-05-19 08:09:13',NULL,NULL,'a:0:{}','Lisa','Lücking'),(46,'andrea.rincon@picard.de','andrea.rincon@picard.de','andrea.rincon@picard.de','andrea.rincon@picard.de',1,NULL,'$2y$13$YgVH7ou9HyePV2TDg.G8T.ZBpsG0kfixtIuPFH0pd4xAIVwFOoSWO','2017-05-19 08:09:47',NULL,NULL,'a:0:{}','Andrea','Rincon'),(47,'daniel.pereira@picard.de','daniel.pereira@picard.de','daniel.pereira@picard.de','daniel.pereira@picard.de',1,NULL,'$2y$13$YHH7g6m7BB3pC7JatocZcO2z2MwYXJphkaePeT9nKtFZqqmMoTpMK','2017-07-10 09:27:56',NULL,NULL,'a:0:{}','Daniel','Pereira'),(48,'patrycja.kalla@picard.de','patrycja.kalla@picard.de','patrycja.kalla@picard.de','patrycja.kalla@picard.de',1,NULL,'$2y$13$nZnHxZOXJIoGViZNhkEfb.xFjuCHJbp1RHEPOIpuGKSbwIhlqtSra','2017-05-19 08:11:48',NULL,NULL,'a:0:{}','Patrycja','Kalla'),(49,'cristina.forto@picard.de','cristina.forto@picard.de','cristina.forto@picard.de','cristina.forto@picard.de',1,NULL,'$2y$13$/jMHWFbTjx9OfbQnUccDJO4017zmyaZrEf1zb9UIuVxxnyl72Wwb2','2017-05-19 08:12:20',NULL,NULL,'a:0:{}','Cristina','Forto i Casado'),(50,'ana.yanez@picard.de','ana.yanez@picard.de','ana.yanez@picard.de','ana.yanez@picard.de',1,NULL,'$2y$13$I2Su1CtCqcRVyLjcxTbM.eMhPjm.lQjATa377WbEVWK3kGyWF2xUu','2017-05-19 08:12:47',NULL,NULL,'a:0:{}','Ana','Yanez de la Mata'),(51,'janina.schwehm@picard.de','janina.schwehm@picard.de','janina.schwehm@picard.de','janina.schwehm@picard.de',1,NULL,'$2y$13$e6evaGpY3Itfh5T1q/vWoeGf.ySUppp12JOEHf7YYFPJyVggViCdC','2017-05-19 08:13:16',NULL,NULL,'a:0:{}','Janina','Schwehm'),(52,'jennifer.hahnenkamp@picard.de','jennifer.hahnenkamp@picard.de','jennifer.hahnenkamp@picard.de','jennifer.hahnenkamp@picard.de',1,NULL,'$2y$13$r8QNCKa9o/uSrT20RzO6s.ovxwMcRRdRH4Zq19DyN9T14o2ggikLa','2017-05-19 08:13:45',NULL,NULL,'a:0:{}','Jennifer','Hahnenkamp'),(53,'veit.winter@picard.de','veit.winter@picard.de','veit.winter@picard.de','veit.winter@picard.de',1,NULL,'$2y$13$is185oAM0K0hCYaXZzxU5uq09quRaFbaJwcyMgYyZkJrjKBRoDere','2017-05-19 08:14:14',NULL,NULL,'a:0:{}','Veit','Winter'),(54,'cedric.scheer@picard.de','cedric.scheer@picard.de','cedric.scheer@picard.de','cedric.scheer@picard.de',1,NULL,'$2y$13$gd3fdAKrQ1QvQAix.Y.SxOXtRrBlXB6B3WcM.6nEzVoIr2KbSFCE.','2017-05-19 08:14:40',NULL,NULL,'a:0:{}','Cedric','Scheer'),(55,'samira.cherif@picard.de','samira.cherif@picard.de','samira.cherif@picard.de','samira.cherif@picard.de',1,NULL,'$2y$13$M.uuG69xz5bpp60o2KYI3eDgLAvVMORB8vx3cnaAUF.vfp9WkpkIe','2017-05-19 08:15:11',NULL,NULL,'a:0:{}','Samira','Cherif'),(56,'sascha.krinke@picard.de','sascha.krinke@picard.de','sascha.krinke@picard.de','sascha.krinke@picard.de',1,NULL,'$2y$13$56tpaPuglqUiaOOs1NmWku/J8bUEhejQ26HLrChAf6ua0O9oXrqDi','2017-05-19 08:15:44',NULL,NULL,'a:0:{}','Sascha','Krinke'),(57,'sascha.diebel@picard.de','sascha.diebel@picard.de','sascha.diebel@picard.de','sascha.diebel@picard.de',1,NULL,'$2y$13$DNjvyfhkMEGjxMB8X0sBz.N1Y0jMRIDj.YdBAk3Wzn7HLHswh.2rS','2017-05-19 08:16:15',NULL,NULL,'a:0:{}','Sascha','Diebel'),(58,'paula.kneba@picard.de','paula.kneba@picard.de','paula.kneba@picard.de','paula.kneba@picard.de',1,NULL,'$2y$13$3YtXNY0N7ag.kIfj.Wgzpuwfqfse2aZ8WqzGEnKQ7/gOxI4zlAmOS','2017-05-19 08:16:44',NULL,NULL,'a:0:{}','Paula','Kneba'),(59,'tk@picard.de','tk@picard.de','tk@picard.de','tk@picard.de',1,NULL,'$2y$13$cVrNKpAdsn0WaKTVYsIbxuIbhrV74roPCH2ErYW.Ho/OFBe62ParG','2017-06-06 16:32:49',NULL,NULL,'a:0:{}','Tim','Koepsel');
/*!40000 ALTER TABLE `fos_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-07 14:12:07
