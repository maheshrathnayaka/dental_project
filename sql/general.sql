CREATE DATABASE  IF NOT EXISTS `a5344960_fyp2015` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `a5344960_fyp2015`;
-- MySQL dump 10.13  Distrib 5.5.44, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: a5344960_fyp2015
-- ------------------------------------------------------
-- Server version	5.5.44-0ubuntu0.14.04.1

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
-- Table structure for table `tbl_channel_history`
--

DROP TABLE IF EXISTS `tbl_channel_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_channel_history` (
  `history_id` int(11) NOT NULL AUTO_INCREMENT,
  `P_ID` int(11) DEFAULT NULL,
  `Main_reason` varchar(500) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL,
  PRIMARY KEY (`history_id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_channel_history`
--

LOCK TABLES `tbl_channel_history` WRITE;
/*!40000 ALTER TABLE `tbl_channel_history` DISABLE KEYS */;
INSERT INTO `tbl_channel_history` (`history_id`, `P_ID`, `Main_reason`, `date_time`) VALUES (45,139,'Tooth Removal','2015-08-07 11:19:06'),(46,140,'Dental Checkup','2015-08-07 11:32:48');
/*!40000 ALTER TABLE `tbl_channel_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_doctor`
--

DROP TABLE IF EXISTS `tbl_doctor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_doctor` (
  `doc_id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_username` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `doc_password` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `doc_name` varchar(300) COLLATE latin1_general_ci NOT NULL,
  `doc_status` int(1) NOT NULL,
  PRIMARY KEY (`doc_username`,`doc_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_doctor`
--

LOCK TABLES `tbl_doctor` WRITE;
/*!40000 ALTER TABLE `tbl_doctor` DISABLE KEYS */;
INSERT INTO `tbl_doctor` (`doc_id`, `doc_username`, `doc_password`, `doc_name`, `doc_status`) VALUES (1,'hasith89','123','Hasith Malinga',0),(2,'mahesh90','123','Mahesh Rathnayake',0),(3,'kumara91','123','Eshan Kumara',0),(4,'kavindi92','123','Kavindi Bogahawatte',0);
/*!40000 ALTER TABLE `tbl_doctor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_patient`
--

DROP TABLE IF EXISTS `tbl_patient`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_patient` (
  `patient_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_first_name` varchar(250) CHARACTER SET utf8 NOT NULL,
  `patient_last_name` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `patient_email` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `patient_gender` char(1) CHARACTER SET utf8 NOT NULL,
  `patient_occupation` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `patient_allergies` mediumtext CHARACTER SET utf8,
  `patient_barcode` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `patient_birthday` date DEFAULT NULL,
  PRIMARY KEY (`patient_id`),
  UNIQUE KEY `patient_barcode_UNIQUE` (`patient_barcode`)
) ENGINE=MyISAM AUTO_INCREMENT=141 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_patient`
--

LOCK TABLES `tbl_patient` WRITE;
/*!40000 ALTER TABLE `tbl_patient` DISABLE KEYS */;
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`, `patient_birthday`) VALUES (24,'Pasidi','Chandrasekara','pasidu@gmail,com','M','Developer','Foods','678439420456','1998-05-10'),(25,'Kasun','Rathnayaka','kasun@gmail.com','M','Project Manager','Meats','678439420416','1988-08-23'),(26,'Thrindu','Gamlath','tharindu@gmail.com','M','Student','Pork','678439420412','1975-12-28'),(27,'Gamlath','Hewage','gamlath@gmail.com','M','Lecturer','Pork','684394204123','1948-11-16'),(28,'Sandamal','Perera','sandamal@gmail.com','M','Forces','Foods','678439320412','1998-05-10'),(29,'Suraj','Maddumage','suraj.m@gmail.com','M','Driver','None','678459420412','1975-12-28'),(30,'Pathum','Ekanayaka','pathum@gmail.com','0','SSE','Penicilin','678439450412','1998-05-10'),(41,'Waas','Gunawardhane','gunawardane@gmail.com','0','Manager','Medicine','349316899665','1998-05-10'),(42,'Surangani','Priyadarshani','suranganni@gmail.com','M','Director','No allergies','631502459196','1988-08-23'),(43,'Supeshali','Jinadasa','supeshali@gmail.com','F','Bank Assistant','None','495873006916','1988-08-23'),(44,'Damitha','Wijesooriya','damitha@gmail.com','F','Developer','None','634675684659','1990-01-13'),(45,'Eshan','Daminda','eshan@gmail.com','F','Tech Lead','None','239985838617','1990-01-13'),(46,'Mahesh','Rathnayaka','shamalmahesh@gmail.com','M','Software Engineer','None','864517131166','1978-10-17'),(47,'Hasith','Malinga','hasith@gmail.com','M','Student','None','197407452931','1988-08-23'),(48,'Malinga','Gunarathna','malinga@gmail.com','M','Tech Lead','No allergies','390393345734','1978-10-17'),(49,'Shamal','Mahesh','mintcrops@gmail.com','M','Tech Lead','None','465424915469','1990-01-13'),(50,'Sanjeewa','Sugathapala','sanjeewa@gmail.com','M','Student','None','476724919468','1968-02-28'),(51,'Sugathapala','Herath','sugathapala@gmail.com','M','Student','None','332674981716','1978-10-17'),(52,'Wiraj','Kavinda','wiraj@gmail.com','M','Student','None','464934163792','1988-08-23'),(53,'Akila','Wiraj','akila@gmail.com','M','Student','None','597489490743','1968-02-28'),(54,'Kamal','Samarakoon','kamal@gmail.com','M','Student','None','751631808045','1978-10-17'),(55,'Nathasha','Lavindi','lavindi@gmail.com','F','Software Engineer','None','261561309019','1988-08-23'),(56,'Nethmi','Hettiarachchi','nethmi@gmail.com','F','Student','None','473571733752','1968-02-28'),(57,'Pubuduni','Ruwanthika','pubuduni@gmail.com','F','Student','None','403577054801','1988-08-23'),(58,'Hasara','Amaraarachchi','hasara@gmail.com','F','Student','None','589129283133','1990-01-13'),(59,'Ushani','Sooriyamudali','ushani@gmail.com','F','Student','None','393548485441','1968-02-28'),(60,'Nathali','Punchihewa','nathali@gmail.com','F','Software Engineer','None','696187836559','1978-10-17'),(61,'Jayamali','Bandara','bandara@gmail.com','F','Lecturer','None','116584646952','1988-08-23'),(62,'Chanushka','Jayamali','chanushka@gmail.com','F','Developer','Foods','585456746906','1998-05-10'),(63,'Jayanika','Gunarathna','jayanika@gmail.com','F','Doctor','None','451149441728','1968-02-28'),(64,'Asheni','Jayanika','asheni@gmail.com','F','Clark','Meats','095031032504','1978-10-17'),(65,'Rehansa','Suheli','rehansa@gmail.com','F','Doctor','None','079369257847','1990-01-13'),(66,'Nuwan','Salinda','nuwan@gmail.com','M','Manager','Meats','922848420461','1968-02-28'),(67,'Upul','Nuwan','upul@gmail.com','M','Manager','Foods','802537323472','1988-08-23'),(68,'Sandakelum','Wijekoon','sandakelum@gmail.com','M','Instructor','None','146892035229','1978-10-17'),(69,'Thilanka','Buddhika','thilanka@gmail.com','M','Developer','None','630381509433','1968-02-28'),(70,'Buddhika','Rathnayaka','rathnayaka@gmail.com','M','Business','Foods','835624737148','1990-01-13'),(71,'Sanka','Buddhika','busshika@gmail.com','F','ASE','No allergies','506531400820','1978-10-17'),(72,'Kumara','Hewage','hewage@gmail.com','M','ASE','None','244440659347','1968-02-28'),(73,'Daminda','Kumara','pubbanda@gmail.com','F','ASE','No allergies','170218887064','1988-08-23'),(74,'Iron','Silva','iron@gmail.com','M','SE','Foods','871722687022','1978-10-17'),(75,'Debra ','Messing','debmes@gmail.com','F','Business Executive','Penicillin','012370912473','1968-02-28'),(76,'Kavindi','Bogahawatte','kavindi@gmail.com','F','Project Manager','Medicines','297939931626','1990-01-13'),(77,'Rohan','Samarasinghe','rohan@gmail.com','M','Lecturer','None','428114816622','1988-08-23'),(78,'Saman','Kumara','kumara@gmail.com','M','ASE','None','576608297618','1990-01-13'),(81,'vfdvf','vfvfd','vdff@fdb.gv','F','','','412887922636','1990-01-13'),(82,'vfdvf','vfvfd','vdff@fdb.gv','F','','','243248243285','1990-01-13'),(83,'vfdvf','vfvfd','vdff@fdb.gv','F','','','232070851528','1990-01-13'),(84,'vfdvf','vfvfd','vdff@fdb.gv','F','','','393492113518','1990-01-13'),(85,'vfdvf','vfvfd','vdff@fdb.gv','F','','','291481269625','1990-01-13'),(86,'vfdvf','vfvfd','vdff@fdb.gv','F','','','673745432863','1990-01-13'),(87,'vfdvf','vfvfd','vdff@fdb.gv','F','','','896730610363','1990-01-13'),(88,'vfdvf','vfvfd','vdff@fdb.gv','F','','','539504002430','1990-01-13'),(89,'vfdvf','vfvfd','vdff@fdb.gv','F','','','333654894592','1990-01-13'),(90,'vfdvf','vfvfd','vdff@fdb.gv','F','','','284749319127','1990-01-13'),(91,'vfdvf','vfvfd','vdff@fdb.gv','F','','','430084410291','1990-01-13'),(92,'vfdvf','vfvfd','vdff@fdb.gv','F','','','029697886538','1990-01-13'),(93,'vfdvf','vfvfd','vdff@fdb.gv','F','','','934048703140','1990-01-13'),(140,'Sanka','Buddhika','sanka@gmail.com','M','Manager','none','705635680805','1982-12-28'),(139,'Mahesh','Rathnayaka','mintcrops@gmail.com','M','Tech Lead','None','357142796115','1989-01-01');
/*!40000 ALTER TABLE `tbl_patient` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_patient_address`
--

DROP TABLE IF EXISTS `tbl_patient_address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_patient_address` (
  `patient_id` int(11) NOT NULL,
  `postal_no` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `address_line1` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `address_line2` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `city` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_patient_address`
--

LOCK TABLES `tbl_patient_address` WRITE;
/*!40000 ALTER TABLE `tbl_patient_address` DISABLE KEYS */;
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (24,'433','Weliwita Road','Malabe','Colombo'),(25,'654','Weliwita Road','Malabe','Colombo'),(26,'67','Kottawa Road','Kottawa','Colombo'),(27,'7634','Kottawa Road','Kottawa','Colombo'),(28,'65','Kottawa Road','Kottawa','Colombo'),(29,'59','Kaduwela Road','Kaduwela','Colombo'),(30,'3435','Kaduwela Road','Kaduwela','Colombo'),(31,'433/2','Pileekada','Pilessa','Kurunegala'),(32,'sdsd','sd','dsd','sds'),(33,'xcvxc','cvxc','cxvxc','xcvcx'),(34,'433','3465','6765','64584'),(35,'vcvx','cvx','cxvcx','xcv'),(36,'ytut','ytu','tyut','ytu'),(37,'ytut','ytu','tyut','ytu'),(38,'ytut','ytu','tyut','ytu'),(39,'ytut','ytu','tyut','ytu'),(40,'0','0','0','0'),(41,'0','0','0','0'),(42,'dfsdf','fdsdf','fdsfsd','df'),(43,'fdgd','fdgd','gdfgd','fgdfg'),(44,'322','Colombo','Colombo 3','Colombo'),(45,'dsfsdfsdf','ghfhffghf','ghfh','ghfg'),(46,'433','Isurupura Road','Isurupura','Malabe'),(47,'433','Pileekada','Pilessa','Kurunegala'),(48,'433','Pileekada','Pilessa','Kurunegala'),(49,'433','Pileekada','Pilessa','Kurunegala'),(50,'433','Pileekada','Pilessa','Kurunegala'),(51,'433','Pileekada','Pilessa','Kurunegala'),(52,'433','Pileekada','Pilessa','Kurunegala'),(53,'433','Pileekada','Pilessa','Kurunegala'),(54,'433','Pileekada','Pilessa','Kurunegala'),(55,'543','vdgtd','vtrdgt','vtdrb'),(56,'543','vdgtd','vtrdgt','vtdrb'),(57,'543','vdgtd','vtrdgt','vtdrb'),(58,'543','vdgtd','vtrdgt','vtdrb'),(59,'543','vdgtd','vtrdgt','vtdrb'),(60,'23','vfdv','tgsf','grters'),(61,'','','',''),(62,'0','0','0','0'),(63,'0','0','0','0'),(64,'0','0','0','0'),(65,'0','0','0','0'),(66,'nionio','nionio','inio','in'),(67,'0','0','0','0'),(68,'','','',''),(69,'','','',''),(70,'moino','mnoknmo','mokmok','mkomo'),(71,'23','malabe rd','kaduwela','colombo'),(72,'moino','mnoknmo','mokmok','mkomo'),(73,'23','malabe rd','kaduwela','colombo'),(74,'njknjk','njkn','knkjn','jknkj'),(75,'154','6th Lane','Wall Street','Las Vegas'),(76,'12','Weliwita Road','Malabe','Colombo'),(77,'','','',''),(78,'0','0','0','0'),(0,'345','vregs','brtbt','vretgtr'),(83,'345','vregs','brtbt','vretgtr'),(84,'345','vregs','brtbt','vretgtr'),(85,'345','vregs','brtbt','vretgtr'),(86,'345','vregs','brtbt','vretgtr'),(87,'345','vregs','brtbt','vretgtr'),(88,'345','vregs','brtbt','vretgtr'),(89,'345','vregs','brtbt','vretgtr'),(90,'345','vregs','brtbt','vretgtr'),(91,'345','vregs','brtbt','vretgtr'),(92,'345','vregs','brtbt','vretgtr'),(93,'345','vregs','brtbt','vretgtr'),(140,'400','Hewapola Road','Hewapola','Kurunegala'),(139,'254','Malabe Road','Malabe','Colombo');
/*!40000 ALTER TABLE `tbl_patient_address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_patient_contacts`
--

DROP TABLE IF EXISTS `tbl_patient_contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_patient_contacts` (
  `patient_id` int(11) NOT NULL,
  `home_no` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `mobile_no` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `work_no` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_patient_contacts`
--

LOCK TABLES `tbl_patient_contacts` WRITE;
/*!40000 ALTER TABLE `tbl_patient_contacts` DISABLE KEYS */;
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (24,'0712456987','0372226245','0372226245'),(25,'0712456984','0372226245','0372226245'),(26,'0712456943','0372226245','0372226245'),(27,'0712453287','0372226245','0372226245'),(28,'0714456987','0372226245','0372226245'),(29,'0712456447','0372226245','0372226245'),(30,'0712456934','0372226245','0372226245'),(31,'0372226245','0372226245','0712803801'),(32,'sdsd','sdsd','sdsd'),(33,'xcvxc','xcvxc','cvx'),(34,'7253648','433','7363816'),(35,'hrtytr','vcvx','yrty'),(36,'tyuyt','ytut','ytut'),(37,'tyuyt','ytut','ytut'),(38,'tyuyt','ytut','ytut'),(39,'tyuyt','ytut','ytut'),(40,'0','0','0'),(41,'0','0','0'),(42,'dsfsd','dfsdf','sdf'),(43,'5645645','fdgd','5t46456'),(44,'0114578654','0114567532','0784132568'),(45,'hghfhfhgh','dsfsdfsdf','ghfhf'),(46,'0372226244','0712803803','0722445557'),(47,'0372226245','433','0712803801'),(48,'0372226245','433','0712803801'),(49,'0372226245','433','0712803801'),(50,'0372226245','433','0712803801'),(51,'0372226245','433','0712803801'),(52,'0372226245','0712803801','0722445555'),(53,'0372226245','0712803801','0722445555'),(54,'0372226245','0712803801','0722445555'),(55,'vtdrgbd','vdrtvtrd','vrtvrdtv'),(56,'vtdrgbd','vdrtvtrd','vrtvrdtv'),(57,'vtdrgbd','vdrtvtrd','vrtvrdtv'),(58,'vtdrgbd','vdrtvtrd','vrtvrdtv'),(59,'vtdrgbd','vdrtvtrd','vrtvrdtv'),(60,'4446546','4464646','4646464'),(61,'','',''),(62,'0','0','0'),(63,'0','0','0'),(64,'0','0','0'),(65,'0','0','0'),(66,'','',''),(67,'0','0','0'),(68,'','',''),(69,'','',''),(70,'iomio','miomio','miomio'),(71,'1234567890','0123456789','9874563210'),(72,'iomio','miomio','miomio'),(73,'1234567890','0123456789','9874563210'),(74,'nnni','onk','nkn'),(75,'0112453647','0776135621','0114267625'),(76,'0112356458','0712453652','0117417417'),(77,'','',''),(78,'0','0','0'),(91,'','1231231231',''),(92,'','1231231231',''),(93,'','1231231231',''),(140,'0372226246','0722445555','0112236547'),(139,'0372226246','0712803801','0112226246');
/*!40000 ALTER TABLE `tbl_patient_contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_patient_dental_history`
--

DROP TABLE IF EXISTS `tbl_patient_dental_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_patient_dental_history` (
  `p_id` varchar(100) CHARACTER SET utf8 NOT NULL,
  `difficulty_in_chewing_your_food` int(11) DEFAULT NULL,
  `chew_on_only_one_side_of_your_mouth` int(11) DEFAULT NULL,
  `avoid_brushing_any_part_of_your_mouth_because_of_pain` int(11) DEFAULT NULL,
  `gums_bleed_when_you_floss` int(11) DEFAULT NULL,
  `gums_feel_swollen_or_tender` int(11) DEFAULT NULL,
  `your_teeth_sensitive` int(11) DEFAULT NULL,
  `hurt_when_you_chew_or_open_wide_to_take_a_bite` int(11) DEFAULT NULL,
  `ever_noticed_slow_healing_sores_in_or_about_your_mouth` int(11) DEFAULT NULL,
  `Have_you_had_a_blow_to_the_jaw` int(11) DEFAULT NULL,
  `have_pain_in_the_f_j_j_t_t` int(11) DEFAULT NULL,
  `Gum_chewer` int(11) DEFAULT NULL,
  `Pipe_smoker` int(11) DEFAULT NULL,
  `Betel_chewer` int(11) DEFAULT NULL,
  `Cigarette_smoker` int(11) DEFAULT NULL,
  `Hot_foods_or_liquids` int(11) DEFAULT NULL,
  `Sours` int(11) DEFAULT NULL,
  `Cold_foods_or_liquids` int(11) DEFAULT NULL,
  `Sweets` int(11) DEFAULT NULL,
  `health_history_other` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `Are_you_pregnant` int(11) DEFAULT NULL,
  `Nursing` int(11) DEFAULT NULL,
  `Number_of_weeks` int(11) DEFAULT NULL,
  `if_you_are_still_menstruating` date DEFAULT NULL,
  `Total_number_of_pregnancies` int(11) DEFAULT NULL,
  `Age_at_beginning_of_periods` int(11) DEFAULT NULL,
  `Number_of_births` int(11) DEFAULT NULL,
  `Age_at_end_of_periods` int(11) DEFAULT NULL,
  `Removal` int(11) DEFAULT NULL,
  `Wound_treatment` int(11) DEFAULT NULL,
  `Fillings` int(11) DEFAULT NULL,
  `Sealants` int(11) DEFAULT NULL,
  `Retainers` int(11) DEFAULT NULL,
  `Braces` int(11) DEFAULT NULL,
  `Cleaning` int(11) DEFAULT NULL,
  `Polishing` int(11) DEFAULT NULL,
  `Bridges` int(11) DEFAULT NULL,
  `Dentures` int(11) DEFAULT NULL,
  `Implants` int(11) DEFAULT NULL,
  `Urgent_Treatment` int(11) DEFAULT NULL,
  `Restorative_Care` int(11) DEFAULT NULL,
  `Preventive_Care` int(11) DEFAULT NULL,
  `treatment_need_other` int(11) DEFAULT NULL,
  `Antibiotic` int(11) DEFAULT NULL,
  `Sedative` int(11) DEFAULT NULL,
  `Anti_inflammatory` int(11) DEFAULT NULL,
  `drugs_prescribed_other` int(11) DEFAULT NULL,
  `Caries` int(11) DEFAULT NULL,
  `Initial` int(11) DEFAULT NULL,
  `Dentine` int(11) DEFAULT NULL,
  `Pulp_exposed` int(11) DEFAULT NULL,
  `Periodontal_diseases` int(11) DEFAULT NULL,
  `Gingivitis` int(11) DEFAULT NULL,
  `Periodontitis` int(11) DEFAULT NULL,
  `Lesions` int(11) DEFAULT NULL,
  `Premalignant` int(11) DEFAULT NULL,
  `Cancerous` int(11) DEFAULT NULL,
  `Non_Cancerous` int(11) DEFAULT NULL,
  `Malocclusion` int(11) DEFAULT NULL,
  `Class_2_Division_1` int(11) DEFAULT NULL,
  `Class_2_Division_2` int(11) DEFAULT NULL,
  `Class_3` int(11) DEFAULT NULL,
  `Fluorosis` int(11) DEFAULT NULL,
  `Missing_Teeth` int(11) DEFAULT NULL,
  `Dry_Mouth` int(11) DEFAULT NULL,
  `Extra_Oral` int(11) DEFAULT NULL,
  `Facial_issues` int(11) DEFAULT NULL,
  `Swellings` int(11) DEFAULT NULL,
  `dental_examination_other` int(11) DEFAULT NULL,
  `Sensitivity` int(11) DEFAULT NULL,
  `Tooth_decay` int(11) DEFAULT NULL,
  `Fractured_teeth` int(11) DEFAULT NULL,
  `Worn_fillings` int(11) DEFAULT NULL,
  `Gum_disease` int(11) DEFAULT NULL,
  `Worn_tooth_enamel` int(11) DEFAULT NULL,
  `Exposed_tooth_root` int(11) DEFAULT NULL,
  `Oropharyngeal_Cancer` int(11) DEFAULT NULL,
  `Sores_that_bleed_easily` int(11) DEFAULT NULL,
  `Thick_or_hard_spot_or_lump` int(11) DEFAULT NULL,
  `Roughened_or_crusted_area` int(11) DEFAULT NULL,
  `Numbness_pain_or_tenderness` int(11) DEFAULT NULL,
  `Change_in_the_way_your_teeth_fit_together_when_you_bite_down` int(11) DEFAULT NULL,
  `dental_examination_comment` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_patient_dental_history`
--

LOCK TABLES `tbl_patient_dental_history` WRITE;
/*!40000 ALTER TABLE `tbl_patient_dental_history` DISABLE KEYS */;
INSERT INTO `tbl_patient_dental_history` (`p_id`, `difficulty_in_chewing_your_food`, `chew_on_only_one_side_of_your_mouth`, `avoid_brushing_any_part_of_your_mouth_because_of_pain`, `gums_bleed_when_you_floss`, `gums_feel_swollen_or_tender`, `your_teeth_sensitive`, `hurt_when_you_chew_or_open_wide_to_take_a_bite`, `ever_noticed_slow_healing_sores_in_or_about_your_mouth`, `Have_you_had_a_blow_to_the_jaw`, `have_pain_in_the_f_j_j_t_t`, `Gum_chewer`, `Pipe_smoker`, `Betel_chewer`, `Cigarette_smoker`, `Hot_foods_or_liquids`, `Sours`, `Cold_foods_or_liquids`, `Sweets`, `health_history_other`, `Are_you_pregnant`, `Nursing`, `Number_of_weeks`, `if_you_are_still_menstruating`, `Total_number_of_pregnancies`, `Age_at_beginning_of_periods`, `Number_of_births`, `Age_at_end_of_periods`, `Removal`, `Wound_treatment`, `Fillings`, `Sealants`, `Retainers`, `Braces`, `Cleaning`, `Polishing`, `Bridges`, `Dentures`, `Implants`, `Urgent_Treatment`, `Restorative_Care`, `Preventive_Care`, `treatment_need_other`, `Antibiotic`, `Sedative`, `Anti_inflammatory`, `drugs_prescribed_other`, `Caries`, `Initial`, `Dentine`, `Pulp_exposed`, `Periodontal_diseases`, `Gingivitis`, `Periodontitis`, `Lesions`, `Premalignant`, `Cancerous`, `Non_Cancerous`, `Malocclusion`, `Class_2_Division_1`, `Class_2_Division_2`, `Class_3`, `Fluorosis`, `Missing_Teeth`, `Dry_Mouth`, `Extra_Oral`, `Facial_issues`, `Swellings`, `dental_examination_other`, `Sensitivity`, `Tooth_decay`, `Fractured_teeth`, `Worn_fillings`, `Gum_disease`, `Worn_tooth_enamel`, `Exposed_tooth_root`, `Oropharyngeal_Cancer`, `Sores_that_bleed_easily`, `Thick_or_hard_spot_or_lump`, `Roughened_or_crusted_area`, `Numbness_pain_or_tenderness`, `Change_in_the_way_your_teeth_fit_together_when_you_bite_down`, `dental_examination_comment`) VALUES ('59',1,0,1,0,1,1,1,0,1,0,0,1,0,1,0,1,1,0,'vcertdgtdrhtrdyhg treg h',1,0,545,'0000-00-00',545,543,5435,5435,1,0,0,1,1,0,0,1,1,0,1,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('60',1,0,1,1,0,0,1,1,1,0,0,1,1,1,1,1,1,0,'svfrezfvre',1,0,0,'0000-00-00',0,0,0,0,1,0,1,1,1,0,1,1,0,1,1,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('61',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'',0,0,0,'0000-00-00',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('62',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'0',0,0,0,'0000-00-00',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('63',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'0',0,0,0,'0000-00-00',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('64',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'0',0,0,0,'0000-00-00',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('65',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'0',0,0,0,'0000-00-00',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('66',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'',0,0,0,'0000-00-00',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('67',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'0',0,0,0,'0000-00-00',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('68',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'',0,0,0,'0000-00-00',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('69',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'',0,0,0,'0000-00-00',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('70',1,0,0,0,0,0,0,0,0,0,0,1,0,0,0,1,0,0,'bgfnj',0,0,0,'0000-00-00',0,0,0,0,1,0,0,0,0,1,0,0,0,0,0,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('71',1,0,0,0,0,1,0,0,0,0,0,0,1,0,0,0,1,0,'byurifrthyg ',1,0,5,'0000-00-00',4,35,4,35,0,0,0,0,1,0,0,1,0,0,0,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('72',1,0,0,0,0,0,0,0,0,0,0,1,0,0,0,1,0,0,'bgfnj',0,0,0,'0000-00-00',0,0,0,0,1,0,0,0,0,1,0,0,0,0,0,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('73',1,0,0,0,0,1,0,0,0,0,0,0,1,0,0,0,1,0,'byurifrthyg ',1,0,5,'0000-00-00',4,35,4,35,0,0,0,0,1,0,0,1,0,0,0,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('74',0,0,0,0,1,0,0,1,0,0,0,1,0,0,0,0,1,0,'kn',0,0,0,'0000-00-00',0,0,0,0,1,0,0,0,1,0,0,0,0,0,0,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('75',0,0,0,1,0,0,0,0,0,0,1,0,0,1,0,0,1,1,'',0,0,0,'0000-00-00',0,0,0,0,1,0,1,1,0,0,1,0,0,0,0,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('76',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'',0,0,0,'0000-00-00',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('77',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'',0,0,0,'0000-00-00',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('78',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'0',0,0,0,'0000-00-00',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('44',1,0,1,0,1,1,1,1,1,1,1,1,1,1,1,1,1,1,'1',1,1,0,'0000-00-00',0,0,0,0,0,0,0,0,0,1,0,1,0,1,0,1,0,1,0,1,0,1,0,1,0,1,0,1,0,1,0,1,0,1,0,1,0,1,0,1,0,1,0,1,0,1,0,1,0,1,0,1,0,1,0,1,0,1,'0'),('140',1,1,1,1,1,1,1,1,1,1,0,1,1,1,1,1,1,0,'Other Dental health',0,0,NULL,NULL,NULL,NULL,NULL,NULL,1,1,0,0,0,1,1,1,0,1,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('139',1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,'Other Dental',0,0,NULL,NULL,NULL,NULL,NULL,NULL,1,1,1,1,1,1,1,1,1,1,1,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `tbl_patient_dental_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_patient_health`
--

DROP TABLE IF EXISTS `tbl_patient_health`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_patient_health` (
  `P_ID` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Main_reason` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `diabetes` int(11) DEFAULT NULL,
  `high_cholesterol` int(11) DEFAULT NULL,
  `high_bood_pressure` int(11) DEFAULT NULL,
  `low_bood_pressure` int(11) DEFAULT NULL,
  `heartburn` int(11) DEFAULT NULL,
  `anemia_bood_problems` int(11) DEFAULT NULL,
  `swollen_ankies` int(11) DEFAULT NULL,
  `depression_anxiety` int(11) DEFAULT NULL,
  `tyroid_problems` int(11) DEFAULT NULL,
  `shortness_of_breath` int(11) DEFAULT NULL,
  `tonsilitis` int(11) DEFAULT NULL,
  `asthma` int(11) DEFAULT NULL,
  `stroke` int(11) DEFAULT NULL,
  `sinus_problems` int(11) DEFAULT NULL,
  `arthiritis` int(11) DEFAULT NULL,
  `cancer` int(11) DEFAULT NULL,
  `ulcers__colities` int(11) DEFAULT NULL,
  `gastric_irritation` int(11) DEFAULT NULL,
  `heart_disease_murmur_angine` int(11) DEFAULT NULL,
  `kidney_bladder_problems` int(11) DEFAULT NULL,
  `lung_problems_cough` int(11) DEFAULT NULL,
  `liver_problems_hepatitis` int(11) DEFAULT NULL,
  `headaches_migrains` int(11) DEFAULT NULL,
  `neurological_problems` int(11) DEFAULT NULL,
  `eye_disorder_glaucoma` int(11) DEFAULT NULL,
  `ear_problems` int(11) DEFAULT NULL,
  `seasonal_allergies` int(11) DEFAULT NULL,
  `other` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`P_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_patient_health`
--

LOCK TABLES `tbl_patient_health` WRITE;
/*!40000 ALTER TABLE `tbl_patient_health` DISABLE KEYS */;
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('23','sfsdf',0,0,0,0,0,1,0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,1,'fsdfsdfsdfsdfsdf'),('24','dgdfg',0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,'sdfsdfs'),('25','sdfsdf',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,'asdasdasd'),('26','tyrty',0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,1,0,0,0,0,0,'gfdg'),('27','tyrty',0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,1,0,0,0,0,0,'gfdg'),('28','GFHFG',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,1,'DDFGDFGDFGDFGDFGDFGDFGDGFDFGDFGFDG'),('29','HGJGH',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,'HGJGH'),('30','0',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'0'),('32','sdsd',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,1,0,0,0,'sdsd'),('33','cvxcv',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,0,0,0,'cvxv'),('34','Hdgghhd jsggh',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,1,'Djhdjh'),('35','trytr',0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,''),('36','tyuty',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,'tuyt'),('37','tyuty',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,'tuyt'),('38','tyuty',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,'tuyt'),('39','tyuty',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,'tuyt'),('40','0',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'0'),('41','0',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'0'),('42','sdfsd',0,0,0,0,0,0,0,1,0,1,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,'sdfsdf'),('43','erterte',0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,'fgfdgdg'),('44','hgfhfg',0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,'gfhfghf'),('45','hgfhfg',0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,1,0,0,1,1,0,0,0,0,'gfhfghf'),('46','hgfhfg',1,0,0,0,0,0,0,0,0,0,0,1,1,1,0,0,0,0,1,0,0,1,1,0,0,0,0,'gfhfghf'),('47','Regular checkup',0,0,0,0,0,0,0,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,'None'),('48','Regular checkup',0,0,0,0,0,0,0,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,'None'),('49','Regular checkup',0,0,0,0,0,0,0,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,'None'),('50','Regular checkup',0,0,0,0,0,0,0,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,'None'),('51','Regular checkup',0,0,0,0,0,0,0,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,'None'),('52','Regular checkup',0,0,0,0,0,0,0,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,'None'),('53','Regular checkup',0,0,0,0,0,0,0,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,'None'),('54','Regular checkup',0,0,0,0,0,0,0,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,'None'),('55','vtdrgtrv',1,1,0,1,1,1,0,0,0,0,0,1,1,1,0,0,1,0,0,1,1,1,1,0,0,1,1,'ggvtergrtdfv'),('56','vtdrgtrv',1,1,0,1,1,1,0,0,0,0,0,1,1,1,0,0,1,0,0,1,1,1,1,0,0,1,1,'ggvtergrtdfv'),('57','vtdrgtrv',1,1,0,1,1,1,0,0,0,0,0,1,1,1,0,0,1,0,0,1,1,1,1,0,0,1,1,'ggvtergrtdfv'),('58','vtdrgtrv',1,1,0,1,1,1,0,0,0,0,0,1,1,1,0,0,1,0,0,1,1,1,1,0,0,1,1,'ggvtergrtdfv'),('59','vtdrgtrv',1,1,0,1,1,1,0,0,0,0,0,1,1,1,0,0,1,0,0,1,1,1,1,0,0,1,1,'ggvtergrtdfv'),('60','fsdsdgv',1,1,0,1,1,0,0,1,1,1,1,1,0,1,0,0,1,0,0,1,1,1,1,0,0,1,0,'fvdsvsfd'),('61','',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,''),('62','0',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'0'),('63','0',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'0'),('64','0',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'0'),('65','0',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'0'),('66','',0,0,0,0,0,0,0,0,0,0,0,1,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,''),('67','0',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'0'),('68','',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,''),('69','',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,''),('70','miomio',1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,''),('71','pain in the teeth',1,1,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,1,0,0,0,0,1,0,'lmkljl'),('72','miomio',1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,''),('73','pain in the teeth',1,1,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,1,0,0,0,0,1,0,'lmkljl'),('74','njknilni',1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,''),('75','Dental checkup',1,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,1,0,0,0,0,1,0,0,0,0,''),('76','',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,''),('77','checkup',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,''),('78','0',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'0'),('140','Dental Checkup',1,1,0,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,'Other Medical Health'),('139','Tooth Removal',1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,'Other Medical');
/*!40000 ALTER TABLE `tbl_patient_health` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_patient_history`
--

DROP TABLE IF EXISTS `tbl_patient_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_patient_history` (
  `h_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL,
  `reason` varchar(45) DEFAULT NULL,
  `treatment` varchar(45) DEFAULT NULL,
  `medications` varchar(45) DEFAULT NULL,
  `drugs` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`h_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_patient_history`
--

LOCK TABLES `tbl_patient_history` WRITE;
/*!40000 ALTER TABLE `tbl_patient_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_patient_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_patients_queue`
--

DROP TABLE IF EXISTS `tbl_patients_queue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_patients_queue` (
  `P_ID` int(11) NOT NULL,
  `Main_reason` varchar(450) CHARACTER SET utf8 DEFAULT NULL,
  `check_status` int(11) DEFAULT NULL,
  `channel_number` int(11) DEFAULT '0',
  PRIMARY KEY (`P_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_patients_queue`
--

LOCK TABLES `tbl_patients_queue` WRITE;
/*!40000 ALTER TABLE `tbl_patients_queue` DISABLE KEYS */;
INSERT INTO `tbl_patients_queue` (`P_ID`, `Main_reason`, `check_status`, `channel_number`) VALUES (140,'Dental Checkup',1,2),(139,'Tooth Removal',1,1);
/*!40000 ALTER TABLE `tbl_patients_queue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_question`
--

DROP TABLE IF EXISTS `tbl_question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_question` (
  `Q_ID` int(11) NOT NULL,
  `Question` varchar(500) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`Q_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_question`
--

LOCK TABLES `tbl_question` WRITE;
/*!40000 ALTER TABLE `tbl_question` DISABLE KEYS */;
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (1,'Do you have difficulty in chewing your food?'),(2,'Do you chew on only one side of your mouth?'),(3,'Do you avoid brushing any part of your mouth because of pain?'),(4,'Do your gums bleed when you floss?'),(5,'Do your gums feel swollen or tender?'),(6,'Are your teeth sensitive?'),(7,'Does it hurt when you chew or open wide to take a bite?'),(8,'Have you ever noticed slow-healing sores in or about your mouth?'),(9,'Have you had a blow to the jaw (trauma)?'),(10,'Do you have pain in the face, cheeks, jaws, joints, throat, or temples?'),(11,'Gum chewer?'),(12,'Pipe smoker?'),(13,'Betel chewer?'),(14,'Cigarette smoker?'),(15,'Hot foods or liquids?'),(16,'Sours?'),(17,'Cold foods or liquids?'),(18,'Sweets?'),(19,'Are you pregnant?'),(20,'Nursing?'),(21,'Number of weeks'),(22,'Date of last menstrual period if you are still menstruating'),(23,'Total number of pregnancies'),(24,'Age at beginning of periods (menstruation)'),(25,'Number of births'),(26,'Age at end of periods (menopause)'),(27,'Removal'),(28,'Wound treatment'),(29,'Fillings'),(30,'Sealants'),(31,'Retainers'),(32,'Braces'),(33,'Cleaning'),(34,'Polishing'),(35,'Bridges'),(36,'Dentures'),(37,'Implants'),(38,'Urgent Treatment'),(39,'Restorative Care'),(40,'Preventive Care'),(41,'Antibiotic'),(42,'Sedative'),(43,'Anti-inflammatory'),(44,'Caries'),(45,'Initial'),(46,'Dentine'),(47,'Pulp exposed'),(48,'Periodontal diseases'),(49,'Gingivitis'),(50,'Periodontitis'),(51,'Lesions'),(52,'Premalignant'),(53,'Cancerous'),(54,'Non Cancerous'),(55,'Malocclusion'),(56,'Class 2 Division 1'),(57,'Class 2 Division 2'),(58,'Class 3'),(59,'Fluorosis'),(60,'Missing Teeth'),(61,'Dry Mouth'),(62,'Extra Oral'),(63,'Facial issues'),(64,'Swellings'),(65,'Sensitivity'),(66,'Tooth decay'),(67,'Fractured teeth'),(68,'Worn fillings'),(69,'Gum disease'),(70,'Worn tooth enamel'),(71,'Exposed tooth root'),(72,'Oropharyngeal Cancer'),(73,'Sores that bleed easily or do not heal'),(74,'Thick or hard spot or lump'),(75,'Roughened or crusted area'),(76,'Numbness, pain or tenderness'),(77,'Change in the way your teeth fit together when you bite down');
/*!40000 ALTER TABLE `tbl_question` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-08-07 11:33:58
