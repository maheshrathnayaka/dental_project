# Smart DentAssist - Final Year Project (Ongoing)

### Database - General & Knowledge
``````````````````````````````````

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
-- Table structure for table `medication`
--

DROP TABLE IF EXISTS `medication`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `medication` (
  `medication_id` int(11) NOT NULL AUTO_INCREMENT,
  `medication_name` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `description` text COLLATE latin1_general_ci,
  PRIMARY KEY (`medication_id`)
) ENGINE=MyISAM AUTO_INCREMENT=793 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medication`
--

LOCK TABLES `medication` WRITE;
/*!40000 ALTER TABLE `medication` DISABLE KEYS */;
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (1,'Accolate  - Zafirlukast',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (2,'Accuhaler  - Salbutamol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (3,'Accupro  - Quinapril',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (4,'Acepril  - Captopril',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (5,'Acetaminophen  - Paracetamol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (6,'Achromycin  - Tetracycline',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (7,'Acupan  - Nefopam hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (8,'Adactone  - Spironolactone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (9,'Adalat  - Nifedipine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (10,'Adizem  - Diltiazem',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (11,'Adrenaline in dental local anaesthetic solutions  - Epinephrine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (12,'AeroBec  - Beclometasone dipropionate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (13,'Aerocrom  - Sodium cromoglicate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (14,'Aerolin  - Salbutamol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (15,'Airomir  - Salbutamol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (16,'Akineton  - Biperiden',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (17,'Aldomet  - Methyldopa',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (18,'Algicon  - Alginates',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (19,'Alkeran  - Melphalan',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (20,'Allegron  - Nortriptyline',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (21,'Alphaparin  - Certoparin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (22,'Alu-cap  - Aluminium hydroxide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (23,'Alupent  - Orciprenaline sulphate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (24,'Alvercol  - Alverine citrate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (25,'Amaryl  - Glimepiride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (26,'Ametop  - Amethocaine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (27,'Amias  - Candesartan',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (28,'Amikin  - Amikacin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (29,'Amoxil  - Amoxicillin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (30,'Amylobarbitone  - Amobarbital',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (31,'Anabact  - Metronidazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (32,'Anafranil  - Clomipramine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (33,'Ancotil  - Flucytosine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (34,'Androcur  - Cyproterone acetate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (35,'Anexate  - Flumazenil',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (36,'Angiopine  - Nifedipine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (37,'Angitil  - Diltiazem',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (38,'Anquil  - Benperidol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (39,'Antabuse  - Disulfiram',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (40,'Antepsin  - Sucralfate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (41,'Anturan  - Sulfinpyrazone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (42,'Apresoline  - Hydralazine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (43,'Aprovel  - Irbesartan',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (44,'Aricept  - Donepezil hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (45,'Arimidex  - Anastrozole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (46,'Arosmasin  - Exemestan',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (47,'Arpicolin  - Procyclidine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (48,'Arythmol  - Propafenone hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (49,'Asacol  - Mesalazine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (50,'Asendis  - Amoxapine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (51,'AsmaBec  - Beclometasone dipropionate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (52,'Asmasal  - Salbutamol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (53,'Aspirin  - Acetylsalicylic acid',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (54,'Atarax  - Hydroxyzine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (55,'Atrovent  - Ipratropium bromide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (56,'Augmentin  - Co-amoxiclav',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (57,'Augmentin-Duo  - Co-amoxiclav',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (58,'Avloclor  - Chloroquine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (59,'Avomine  - Promethazine teoclate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (60,'Axid  - Nizatidine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (61,'Azactam  - Aztreonam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (62,'Azopt  - Brinzolamide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (63,'BCNU  - Carmustine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (64,'Bambec  - Bambuterol hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (65,'Baratol  - Indoramin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (66,'Baxan  - Cefadroxil',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (67,'Becloforte  - Beclometasone dipropionate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (68,'Becodisks  - Beclometasone dipropionate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (69,'Beconase  - Beclometasone dipropionate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (70,'Becotide  - Beclometasone dipropionate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (71,'Benadryl allergy relief  - Acrivastine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (72,'Benemid  - Probenecid',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (73,'Berotec  - Fenoterol hydrobromide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (74,'Beta-cardone  - Sotalol hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (75,'Betadine  - Povidone-iodine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (76,'Betaloc  - Metoprolol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (77,'Betnesol  - Betamethasone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (78,'Bicillin  - Procaine penicillin/Procaine benzylpenicillin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (79,'Bioplex  - Carbenoxolone sodium',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (80,'Bioral gel  - Carbenoxolone sodium',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (81,'Biorphen  - Orphenadrine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (82,'Bocasan  - Sodium perborate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (83,'Bonefos  - Sodium clodronate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (84,'Botox  - Botulinum A Toxin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (85,'Bricanyl  - Terbutaline sulphate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (86,'BritLofex  - Lofexadine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (87,'Britaject  - Apomorphine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (88,'Broflex  - Benzhexol hydrochloride/ Trihexyphenidyl hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (89,'Bronchodil  - Reproterol hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (90,'Brufen  - Ibuprofen',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (91,'Buccastem  - Prochlorperazine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (92,'Budenofalk  - Budesonide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (93,'Burinex  - Bumetanide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (94,'Buscopan  - Hyoscine butylbromide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (95,'Buspar  - Buspirone hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (96,'Butacote  - Phenylbutazone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (97,'Butobarbitone  - Butobarbital',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (98,'Cabaser  - Cabergoline',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (99,'Cafegot  - Ergotamine tartrate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (100,'Calcitare  - Calcitonin-porcine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (101,'Calcort  - Deflazacort',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (102,'Calicard  - Diltiazem',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (103,'Calpol  - Paracetamol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (104,'Calsynar  - Salcatonin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (105,'Camcolit  - Lithium salts',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (106,'Campral EC  - Acamprosate calcium',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (107,'Campto  - Irinotecan hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (108,'Capastat  - Capreomycin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (109,'Capoten  - Captopril',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (110,'Cardene  - Nicardipine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (111,'Cardura  - Doxazosin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (112,'Catapres  - Clonidine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (113,'Cefrom  - Cefpirome',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (114,'Cefzil  - Cefprozil',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (115,'Celance  - Pergolide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (116,'Celebrex  - Celecoxib',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (117,'Celevac  - Methylcellulose',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (118,'Cellcept  - Mycophenolate mofetil',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (119,'Ceporex  - Cefalexin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (120,'Cerubidin  - Daunorubicin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (121,'Chirocain  - Levobupivacaine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (122,'Chloral elixir  - Chloral hydrate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (123,'Chloral mixture  - Chloral hydrate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (124,'Chlorohex  - Chlorhexidine gluconate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (125,'Chloromycetin  - Chloramphenicol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (126,'Cidomycin  - Gentamicin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (127,'Cinobac  - Cinoxacin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (128,'Cipramil  - Citalopram',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (129,'Ciproxin  - Ciprofloxacin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (130,'Citanest  - Prilocaine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (131,'Claforan  - Cefotaxime',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (132,'Clarityn  - Loratadine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (133,'Clexane  - Enoxaparin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (134,'Clinoril  - Sulindac',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (135,'Clomid  - Clomifene',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (136,'Clopixol acuphase  - Zuclopenthixol acetate    ',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (137,'Clopixol conc.  ? Zuclopenthixol decanoate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (138,'Clopixol  - Zuclopenthixol decanoate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (139,'Clotam  - Tolfenamic acid',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (140,'Clozaril  - Clozapine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (141,'Co-danthromer  - Dantron',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (142,'Co-danthrusate  - Dantron',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (143,'Cogentin  - Benzatropine mesilate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (144,'Colazide  - Balsalazide sodium',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (145,'Colestid  - Colestipol hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (146,'Colofac  - Mebeverine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (147,'Colomycin  - Colistin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (148,'Colpermin  - Peppermint oil',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (149,'Comtess  - Entacapone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (150,'Concordin  - Protriptyline hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (151,'Contraceptive Pill  - Progestogen',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (152,'Convulex  - Valproate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (153,'Coracten  - Nifedipine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (154,'Cordarone  - Amiodarone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (155,'Corday  - Nifedipine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (156,'Cordilox  - Verapamil',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (157,'Corfaretic  - Nadolol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (158,'Corsodyl  - Chlorhexidine gluconate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (159,'Cortisyl  - Cortisone acetate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (160,'Cosopt  - Dorzolamide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (161,'Cozaar  - Losartan',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (162,'Creon  - Pancreatin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (163,'Crixivan  - Indinavir',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (164,'Cromogen Easi-Breathe  - Sodium cromoglicate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (165,'Crystapen Penicillin V  - Penicillin G',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (166,'Crystapen  - Benzyl penicillin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (167,'Cyklokapron  - Tranexamic acid',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (168,'Cymevene  - Ganciclovir',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (169,'Cystrin  - Oxybutynin hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (170,'Cytosar  - Cytarabine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (171,'Cytotec  - Misoprostol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (172,'DDAVP  - Desmopressin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (173,'DF118  - Dihydrocodeine tartrate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (174,'Daktarin  - Miconazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (175,'Dalacin C  - Clindamycin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (176,'Dalmane  - Flurazepam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (177,'Daonil  - Glibenclamide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (178,'Daraprim  - Pyramethamine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (179,'De-Noltab  - Tripotassium dicitratobismuthate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (180,'Deca-Durabolin  - Nandrolone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (181,'Decadron  - Dexamethasone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (182,'Depixol Conc  - Flupentixol decanoate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (183,'Depixol Low Volume  - Flupentixol decanoate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (184,'Depixol  - Flupentixol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (185,'Depixol  - Flupentixol decanoate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (186,'Deseril  - Methysergide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (187,'Desmotabs  - Desmopressin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (188,'Destolit  - Ursodeoxycholic acid',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (189,'Deteclo  - Tetracycline',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (190,'Detrunorm  - Propiverine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (191,'Detrusitol  - Tolterodine tartrate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (192,'Dexedrine  - Dexamfetamine sulphate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (193,'Dialar  - Diazepam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (194,'Diamicron  - Gliclazide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (195,'Diazemuls  - Diazepam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (196,'Diconal  - Dipipanone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (197,'Diflucan  - Fluconazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (198,'Dilzem  - Diltiazem',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (199,'Dimetriose  - Gestrinone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (200,'Dimotane  - Brompheniramine maleate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (201,'Dioctyl  - Docusate sodium',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (202,'Diovan  - Valsartan',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (203,'Dipentum  - Olsalazine sodium',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (204,'Diprivan  - Propofol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (205,'Disipal  - Orphenadrine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (206,'Diskhaler  - Fluticasone propionate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (207,'Distaclor MR  - Cefaclor',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (208,'Distaclor  - Cefaclor',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (209,'Distamine  - Penicillamine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (210,'Dixarit  - Clonidine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (211,'Docusol  - Docusate sodium',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (212,'Dolmatil  - Sulpiride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (213,'Dolobid  - Diflunisal',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (214,'Dostinex  - Cabergoline',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (215,'Dozic  - Haloperidol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (216,'Dramamine  - Dimenhydrinate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (217,'Droleptan  - Droperidol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (218,'Dumicoat  - Miconazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (219,'Durogesic  - Fentanyl',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (220,'Duromine  - Phentermine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (221,'Dutonin  - Nefazodone hydrochloride ',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (222,'Dyspamet  - Cimetidine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (223,'Dysport  - Botulinum A Toxin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (224,'Dytac  - Triamterene',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (225,'Easi-breathe  - Salbutamol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (226,'Edronax  - Reboxetine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (227,'Efcortesol  - Hydrocortisone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (228,'Efexor  - Venlafaxine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (229,'Efudix  - Fluorouracil',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (230,'Eldepryl  - Selegeline hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (231,'Eldisine  - Vindesine sulphate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (232,'Eloxatin  - Oxaliplatin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (233,'Elyzol Flagyl  - Metronidazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (234,'Emcor  - Bisoprolol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (235,'Emeside  - Ethosuximide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (236,'Emflex  - Acemetacin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (237,'Endoxana  - Cyclophosphamide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (238,'Entocort  - Budesonide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (239,'Epanutin  - Phenytoin sodium',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (240,'Epilim  - Valproate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (241,'Epinephrine in dental local anaesthetic solutions  - Adrenaline',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (242,'Epivir  - Lamivudine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (243,'Equagesic  - Meprobamate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (244,'Equasym  - Methylphenidate hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (245,'Erymax  - Erythromycin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (246,'Erythrocin  - Erythromycin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (247,'Erythroped  - Erythromycin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (248,'Eskazole  - Albendazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (249,'Estracyt  - Estramustine phosphate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (250,'Eucardic  - Carvedilol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (251,'Eudemine  - Diazoxide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (252,'Euglucon  - Glibenclamide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (253,'Evohaler  - Salbutamol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (254,'Exelon  - Rivastigmine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (255,'Famvir  - Famciclovir',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (256,'Fansidar  - Pyramethamine with Sulfadoxine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (257,'Fasigyn  - Tinidazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (258,'Faverin  - Fluvoxamine maleate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (259,'Feldene  - Piroxicam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (260,'Femara  - Letrozole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (261,'Fenbid  - Ibuprofen',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (262,'Fenopron  - Fenoprofen',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (263,'Fentazin  - Perphenazine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (264,'Feospan  - Ferrous sulphate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (265,'Ferrograd  - Ferrous sulphate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (266,'Fersaday  - Ferrous fumarate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (267,'Fersamal  - Ferrous fumarate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (268,'Fletcher\'s Enemette  - Docusate sodium',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (269,'Flixonase  - Fluticasone propionate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (270,'Flixotide  - Fluticasone propionate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (271,'Florinef  - Fludrocortisone acetate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (272,'Floxapen  - Flucloxacillin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (273,'Fluanxol  - Flupentixol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (274,'Fludara  - Fludarabine phosphate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (275,'Foradil  - Eformoterol fumarate/Formoterol fumarate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (276,'Fortipine  - Nifedipine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (277,'Fortovase  - Saquinavir',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (278,'Fortral  - Pentazocine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (279,'Fortum  - Ceftazidime',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (280,'Fosamax  - Alendronic acid',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (281,'Foscavir  - Foscarnet sodium',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (282,'Fragmin  - Dalteparin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (283,'Frisium  - Clobazam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (284,'Froben  - Flurbiprofen',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (285,'Fucidin  - Sodium fusidate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (286,'Fulcin  - Griseofulvin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (287,'Fungilin  - Amphotericin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (288,'Fungizone  - Amphotericin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (289,'Furadantin  - Nitrofurantoin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (290,'Furamide  - Diloxanide furoate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (291,'Fybogel  - Ispaghula husk',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (292,'Fybogel  - Mebeverine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (293,'Gabitril  - Tiagebine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (294,'Galenphol  - Pholcodine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (295,'Galpseud  - Pseudoephedrine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (296,'Gamanil  - Lofepramine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (297,'Gastrobid Continus  - Metoclopramide hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (298,'Gastrocote  - Alginates',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (299,'Gastrocote  - Aluminium hydroxide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (300,'Gastrocote  - Magnesium trisilicate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (301,'Gastromax  - Metoclopramide hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (302,'Gaviscon Maalox  - Aluminium hydroxide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (303,'Gaviscon  - Alginates',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (304,'Gemzar  - Gemcitabine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (305,'Genotropin  - Somatropin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (306,'Genticin  - Gentamicin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (307,'Glandosane  - Saliva substitute',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (308,'Glibenese  - Glipizide    429',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (309,'Glucobay  - Acarbose',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (310,'Glucophage  - Metformin hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (311,'Glurenorm  - Gliquidone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (312,'Gopten  - Trandolapril',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (313,'Grisovin  - Griseofulvin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (314,'Haldol decanoate  - Haloperidol decanoate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (315,'Haldol  - Haloperidol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (316,'Half Sinemet  - Co-careldopa',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (317,'HeliClear  - Lansoprazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (318,'Hemineverin  - Clomethiazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (319,'Heroin hydrochloride  - Diamorphine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (320,'Hexopal  - Nicotinic acid',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (321,'Hiprex  - Methenamine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (322,'Hivid  - Zalcitabine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (323,'Honvan  - Fosfestrol tetrasodium',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (324,'Hormone Replacement Therapy  - Oestrogen',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (325,'Human Mixtard  - Biphasic isophane insulin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (326,'Human Monotard  - Insulin Zinc suspension',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (327,'Humatrope  - Somatropin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (328,'Humulin Lente  - Insulin Zinc suspension',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (329,'Humulin  - Soluble insulin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (330,'Hycamtin  - Topotecan',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (331,'Hydrocortone  - Hydrocortisone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (332,'Hygroton  - Chlorthalidone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (333,'Hypnovel  - Midazolam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (334,'Hypovase  - Prazosin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (335,'Hypurin  - Soluble insulin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (336,'Hytrin  - Terazosin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (337,'Ikorel  - Nicorandil',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (338,'Ilosone  - Erythromycin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (339,'Imigran  - Sumatriptan',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (340,'Imodium plus  - Loperamide hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (341,'Imodium  - Loperamide hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (342,'Imunovir  - Inosine pranobex',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (343,'Imuran  - Azathioprine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (344,'Inderal  - Propanolol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (345,'Indocid  - Indomethacin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (346,'Innohep  - Tinzaparin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (347,'Innovace  - Enalapril',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (348,'Insuman  - Biphasic isophane insulin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (349,'Intal  - Sodium cromoglicate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (350,'Invirase  - Saquinavir',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (351,'Ionamin  - Phentermine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (352,'Isogel  - Ispaghula husk',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (353,'Istin  - Amlodipine besylate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (354,'Kannasyn  - Kanamycin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (355,'Kaolin mixture  - Kaolin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (356,'Kefadim  - Ceftazidime',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (357,'Kefadol  - Cefamandole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (358,'Keflex  - Cefalexin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (359,'Kefzol  - Cefazolin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (360,'Kemadrin  - Procyclidine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (361,'Kemicetine  - Chloramphenicol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (362,'Kenalog  - Triamcinolone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (363,'Kinidin  - Quinidine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (364,'Klaricid XL  - Clarithromycin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (365,'Klaricid  - Clarithromycin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (366,'Kolanticon  - Dicyclomine hydrochloride/Dicycloverine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (367,'Konsyl  - Ispaghula husk',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (368,'Kytril  - Granisetron',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (369,'Lamictal  - Lamotrigine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (370,'Lamisil  - Terbinafine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (371,'Lamprene  - Clofazimine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (372,'Lanoxin  - Digoxin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (373,'Lanvis  - Tioguanine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (374,'Largactil  - Chlorpromazine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (375,'Lariam  - Mefloquine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (376,'Lasix  - Frusemide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (377,'Lasma  - Theophylline',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (378,'Lederfen  - Fenbufen',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (379,'Ledermycin  - Demeclocycline hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (380,'Lentaron  - Formestane',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (381,'Lentizol  - Amitriptyline hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (382,'Lescol  - Fluvastatin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (383,'Leukeran  - Chlorambucil',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (384,'Leustat  - Cladribine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (385,'Lexotan  - Bromazepam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (386,'Librium  - Chlordiazepoxide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (387,'Lignospan  - Lidocaine/ Lignocaine Dental preparations ',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (388,'Lignostab  - Lidocaine/Lignocaine Dental preparations',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (389,'Limclair  - Trisodium edetate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (390,'Lingraine  - Ergotamine tartrate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (391,'Lipitor  - Atorvastatin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (392,'Lipobay  - Cerivastatin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (393,'Lipostat  - Parvastatin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (394,'Liskonum  - Lithium salts',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (395,'Litarex  - Lithium salts',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (396,'Lodine  - Etodolac',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (397,'Lomotil  - Co-phenotrope',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (398,'Loniten  - Minoxidil',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (399,'Lopressor  - Metoprolol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (400,'Losec  - Omeprazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (401,'Loxapac  - Loxapine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (402,'Luborant  - Saliva substitute',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (403,'Ludiomil  - Maprotiline hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (404,'Lustral  - Sertraline',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (405,'MST  - Morphine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (406,'Maalox TC  - Aluminium hydroxide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (407,'Macrobid  - Nitrofurantoin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (408,'Macrodantin  - Nitrofurantoin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (409,'Madopar  - Co-beneldopa',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (410,'Magnapen  - Co-fluampicil',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (411,'Maloprim  - Pyramethamine with Dapsone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (412,'Malorone  - Proguanil hydrochloride with Atovaquone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (413,'Manerix  - Moclobemide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (414,'Manevac  - Senna',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (415,'Marcain  - Bupivacaine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (416,'Maxalt  - Rizatriptan',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (417,'Maxolon  - Metoclopramide hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (418,'Medrone  - Methylprednisolone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (419,'Mefoxin  - Cefoxitin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (420,'Melleril  - Thioridazine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (421,'Meptid  - Meptazinol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (422,'Merbentyl  - Dicyclomine hydrochloride/Dicycloverine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (423,'Merocet  - Cetylpyridinium chloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (424,'Meronem  - Meropenem',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (425,'Methadose  - Methadone hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (426,'Metrogel  - Metronidazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (427,'Metrolyl  - Metronidazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (428,'Metrotop  - Metronidazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (429,'Micardis  - Telmisartan',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (430,'Mictral  - Nalidixic acid',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (431,'Midrid  - Isometheptene mucate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (432,'Migranal  - Dihydroergotamine mesilate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (433,'Migril  - Ergotamine tartrate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (434,'Minocin MR  - Minocycline',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (435,'Mintec  - Peppermint oil',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (436,'Mintezol  - Tiabendazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (437,'Mirapexin  - Pramipexole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (438,'Mistamine  - Mizolastine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (439,'Mitoxana  - Ifosfamide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (440,'Mizollen  - Mizolastine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (441,'Mobic  - Meloxicam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (442,'Mobiflex  - Tenoxicam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (443,'Modecate  - Fluphenazine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (444,'Moditen  - Fluphenazine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (445,'Mogadon  - Nitrazepam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (446,'Molipaxin  - Trazodone hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (447,'Monocor  - Bisoprolol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (448,'Monotrim  - Trimethoprim',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (449,'Monovent  - Terbutaline sulphate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (450,'Motens  - Lacidipine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (451,'Motilium  - Domperidone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (452,'Motipress  - Nortriptyline',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (453,'Motival  - Nortriptyline',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (454,'Movicol  - Macrogols',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (455,'Mucogel  - Aluminium hydroxide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (456,'Mycobutin  - Rifabutin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (457,'Myleran  - Busulphan',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (458,'Myotonine  - Bethanechol chloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (459,'Mysoline  - Primidone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (460,'Nalcrom  - Sodium cromoglicate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (461,'Nalorex  - Naltrexone hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (462,'Naprosyn  - Naproxen',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (463,'Naramig  - Naratriptan',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (464,'Nardil  - Phenelzine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (465,'Naropin  - Ropivacaine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (466,'Narphen  - Phenazocine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (467,'Natrillix  - Indapamide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (468,'Navelbine  - Vinorelbine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (469,'Navoban  - Tropisetron',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (470,'Nebcin  - Tobramycin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (471,'Nebules  - Fluticasone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (472,'propionate/Salbutamol    431',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (473,'Negram  - Nalidixic acid',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (474,'Neo-Mercazole  - Carbimazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (475,'Neoral  - Ciclosporin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (476,'Netillin  - Netilmicin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (477,'Neulactil  - Pericyazine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (478,'Neurontin  - Gabapentin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (479,'Neutrexin  - Trimetrexate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (480,'NiQuitin CQ  - Nicotine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (481,'Nicorette  - Nicotine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (482,'Nicotinell  - Nicotine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (483,'Niferex  - Polysaccharide-iron complex',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (484,'Nimotop  - Nimodipine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (485,'Nivaquine  - Chloroquine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (486,'Nivemycin  - Neomycin sulphate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (487,'Nizoral  - Ketoconazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (488,'Nolvadex  - Tamoxifen',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (489,'Nootropil  - Piracetam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (490,'Norgalax Micro-enema  - Docusate sodium',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (491,'Normacol  - Sterculia',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (492,'Norprolac  - Quinagolide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (493,'Norvir  - Ritonavir',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (494,'Novantrone  - Mitoxantrone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (495,'Nozinan  - Levomepromazine/ Methotrimeprazine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (496,'Nozinan  - Methotrimeprazine/ Levomepromazine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (497,'Nuelin  - Theophylline',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (498,'Nurofen  - Ibuprofen',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (499,'Nutrizym  - Pancreatin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (500,'Nystan  - Nystatin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (501,'Oncovin  - Vincristine sulphate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (502,'Optimax  - Tryptophan',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (503,'Optimine  - Azatadine maleate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (504,'OrLAAM  - Levacetylmethadol hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (505,'Oralbalance  - Saliva substitute',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (506,'Oraldene  - Hexetidine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (507,'Oramorph  - Morphine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (508,'Orap  - Pimozide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (509,'Orelox  - Cefpodoxime',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (510,'Orgaran  - Danaparoid',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (511,'Orudis  - Ketoprofen',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (512,'Oxis  - Eformoterol fumarate/Formoterol fumarate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (513,'Oxivent  - Oxitropium bromide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (514,'Palfium  - Dextromoramide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (515,'Palladone  - Hydromorphone hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (516,'Paludrine  - Proguanil hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (517,'Paludrine/Avoclor  - Chloroquine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (518,'Panadol  - Paracetamol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (519,'Pancrease  - Pancreatin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (520,'Pancrex  - Pancreatin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (521,'Paraplatin  - Carboplatin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (522,'Pariet  - Rabeprazole sodium',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (523,'Parlodel  - Bromocriptine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (524,'Parnate  - Tranylcypromine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (525,'Penbritin  - Ampicillin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (526,'Penicillin G  - Benzyl penicillin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (527,'Penicillin V  - Phenoxymethyl penicillin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (528,'Pentacarinat  - Pentamidine isethionate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (529,'Pentasa  - Mesalazine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (530,'Pentostam  - Sodium stibogluconate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (531,'Pepcid  - Famotidine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (532,'Peptac  - Alginates',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (533,'Perdix  - Moexipril',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (534,'Periactin  - Cyproheptadine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (535,'Peroxyl  - Hydrogen peroxide mouthwash',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (536,'Persantin  - Dipyridamole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (537,'Pharmorubicin  - Epirubicin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (538,'Phenergan  - Promethazine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (539,'Phyllocontin Continus  - Aminophylline',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (540,'Physeptone  - Methadone hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (541,'Physiotens  - Moxonidine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (542,'Piportil Depot  - Pipotiazine palmitate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (543,'Piriton  - Chlorphenamine maleate / Chlorpheniramine maleate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (544,'Pitressin  - Vasopressin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (545,'Plavix  - Clopidogrel',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (546,'Plendil  - Felodipine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (547,'Plesmet  - Ferrous glycine sulphate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (548,'Ponstan  - Mefenamic acid',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (549,'Pork Mixtard  - Biphasic isophane insulin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (550,'Prepulsid  - Cisapride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (551,'Prescal  - Isradipine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (552,'Preservex  - Aceclofenac',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (553,'Priadel  - Lithium salts',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (554,'Priadel: Li-Liquid  - Lithium salts 432   ',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (555,'Primacor  - Milrinone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (556,'Primalan  - Mequitazine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (557,'Primaxin  - Imipenem with cilastatin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (558,'Pripsen  - Piperazine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (559,'Pro Epanutin  - Fosphenytoin sodium',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (560,'Pro-Viron  - Mesterolone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (561,'Pro-banthine  - Propantheline bromide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (562,'Prograf  - Tacrolimus',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (563,'Prominal  - Methylphenobarbital',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (564,'Pronestyl  - Procainamide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (565,'Propaderm  - Beclometasone dipropionate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (566,'Proscar  - Finasteride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (567,'Prothiaden  - Dosulepin hydrochloride/Dothiepin hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (568,'Protium  - Pantoprazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (569,'Provigil  - Modafinil',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (570,'Prozac  - Fluoxetine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (571,'Pulmicort  - Budesonide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (572,'Pulmozyne  - Dornase alpha',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (573,'Puri-Nethol  - Mercaptopurine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (574,'Pylorid  - Ranitidine bismuth citrate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (575,'Pyrogastrone  - Carbenoxolone sodium',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (576,'Questran  - Cholestyramine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (577,'Quinalbarbitone {[Tuinal]}  -Secobarbital',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (578,'Qvar  - Beclometasone dipropionate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (579,'Rapitil  - Nedocromil sodium',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (580,'Raxar  - Grepafloxacin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (581,'Rebetol  - Ribavarin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (582,'Regulan  - Ispaghula husk',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (583,'Relenza  - Zanamivir',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (584,'Relifex  - Nabumetone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (585,'Remnos  - Nitrazepam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (586,'Requip  - Ropinirole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (587,'Respacal  - Tulobuterol hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (588,'Respontin  - Ipratropium bromide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (589,'Restandol  - Testosterone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (590,'Retrovir  - Zidovudine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (591,'Revanil  - Lisuride maleaten',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (592,'Rheumox  - Azapropazone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (593,'Ridaura  - Auranofin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (594,'Rifadin  - Rifampicin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (595,'Rifater  - Rifampicin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (596,'Rifinah 150  - Rifampicin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (597,'Rifinah 300  - Rifampicin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (598,'Rimacid  - Indomethacin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (599,'Rimactane  - Rifampicin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (600,'Rimactazid 150  - Rifampicin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (601,'Rimactazid 300  - Rifampicin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (602,'Rimapam  - Diazepam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (603,'Risperdal  - Risperidone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (604,'Ritalin  - Methylphenidate hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (605,'Rivotril  - Clonazepam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (606,'Robicin  - Spectinomycin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (607,'Rocephin  - Ceftriaxone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (608,'Rohypnol  - Flunitrazepam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (609,'Rotacaps  - Salbutamol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (610,'Rozex  - Metronidazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (611,'Rynacrom.  - Sodium cromoglicate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (612,'Rythmodan  - Disopyramide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (613,'Salagen  - Pilocarpine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (614,'Salazopyrin  - Sulfasalazine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (615,'Saliva Orthana  - Saliva substitute',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (616,'Salivace  - Saliva substitute',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (617,'Salivix  - Saliva substitute',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (618,'Salofalk  - Mesalazine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (619,'Saluric  - Chlorothiazide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (620,'Salveze  - Saliva substitute',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (621,'Sanomigran  - Pizotifen',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (622,'Scandonest  - Mepivacaine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (623,'Scopoderm  - Hyoscine hydrobromide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (624,'Sectral  - Acebutolol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (625,'Securon  - Verapamil',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (626,'Securopen  - Azlocillin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (627,'Selexid  - Pivmecillinam hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (628,'Semprex  - Acrivastine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (629,'Senokot  - Senna',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (630,'Septanenst  - Articaine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (631,'Septrin  - Co-trimoxazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (632,'Serc  - Betahistine dihydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (633,'Serdolect  - Sertindole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (634,'Serenace  - Haloperidol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (635,'Seretide  - Fluticasone propionate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (636,'Serevent  - Salmeterol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (637,'Seroquel  - Quetiapine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (638,'Seroxat  - Paroxetine    433',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (639,'Sinemet CR  - Co-careldopa',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (640,'Sinemet plus  - Co-careldopa',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (641,'Sinemet  - Co-careldopa',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (642,'Sinequan  - Doxepin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (643,'Singulair  - Montelukast',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (644,'Skelid  - Tiludronic acid',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (645,'Slo-Phyllin  - Theophylline',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (646,'Slozem  - Diltiazem',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (647,'Sno Phenicol  - Chloramphenicol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (648,'Solfedipine  - Nifedipine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (649,'Solian  - Amisulpride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (650,'Solu-cortel  - Hydrocortisone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (651,'Sonata  - Zaleplon',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (652,'Sotacor  - Sotalol hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (653,'Spiroctan  - Spironolactone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (654,'Sporanox  - Itraconazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (655,'Staril  - Fosinopril',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (656,'Stelazine  - Trifluoperazine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (657,'Stemetil  - Prochlorperazine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (658,'Stesolid  - Diazepam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (659,'Stilboesterol  - Diethylstilbestrol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (660,'Stilnoct  - Zolpidem tartrate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (661,'Stromba  - Stanozolol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (662,'Stugeron  - Cinnarizine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (663,'Sudafed  - Pseudoephedrine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (664,'Sulparex  - Sulpiride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (665,'Sulpitil  - Sulpiride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (666,'Suprax  - Cefixime',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (667,'Suprecur  - Buserelin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (668,'Surgam  - Tiaprofenic acid',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (669,'Surmontil  - Trimipramine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (670,'Sustiva  - Efavirenz',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (671,'Symmetrel  - Amantadine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (672,'Synagis  - Palivizumab',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (673,'Synercid  - Quinupristin with Dalfopristin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (674,'Syscor  - Nisoldipine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (675,'Tagamet  - Cimetidine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (676,'Tambocor  - Flecainide acetate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (677,'Tanatril  - Imidapril',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (678,'Targocid  - Teicoplanin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (679,'Tarivid  - Ofloxacin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (680,'Tavanic  - Levofloxacin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (681,'Tavegil  - Clemastine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (682,'Taxol  - Paclitaxel',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (683,'Taxotere  - Docetaxel',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (684,'Tazocin  - Piperacillin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (685,'Tegretol retard  - Carbamazepine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (686,'Tegretol  - Carbamazepine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (687,'Telfast  - Fexofenadine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (688,'Temgesic  - Buprenorphine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (689,'Tenorminx  - Atenolol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (690,'Tensipine  - Nifedipine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (691,'Tensium  - Diazepam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (692,'Terasyl 300  - Lymecycline',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (693,'Teril CR  - Carbamazepine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (694,'Terramycin  - Oxytetracycline',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (695,'Tertroxin  - Liothyronine sodium',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (696,'Teveten  - Eprosartan',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (697,'Theo-Dur  - Theophylline',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (698,'Tilade  - Nedocromil sodium',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (699,'Tildiem  - Diltiazem',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (700,'Tiloryth  - Erythromycin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (701,'Timecef  - Cefodizime',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (702,'Timentin  - Ticarcillin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (703,'Timonil retard.  - Carbamazepine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (704,'Tofranil  - Imipramine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (705,'Tolanase  - Tolazamide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (706,'Tomudex  - Raltitrexed',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (707,'Topal  - Alginates',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (708,'Topamax  - Topiramate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (709,'Trandate  - Labetalol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (710,'Trasicor  - Oxprenolol hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (711,'Trileptal  - Oxcarbazepine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (712,'Triludan  - Terfenadine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (713,'Trimopan  - Trimethoprim',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (714,'Triptaphen  - Amitriptyline hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (715,'Tritace  - Ramipril',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (716,'Trusopt  - Dorzolamide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (717,'Tryptizol  - Amitriptyline hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (718,'Ubretid  - Distigmine bromide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (719,'Ucerax  - Hydroxyzine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (720,'Ultralanum  - Fluticasone propionate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (721,'Uniphyllin Continus  - Theophylline',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (722,'Unisomnia  - Nitrazepam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (723,'Urdox  - Ursodeoxycholic acid',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (724,'Uriben  - Nalidixic acid',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (725,'Urispass 200  - Flavoxate hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (726,'Ursofalk  - Ursodeoxycholic acid 434   ',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (727,'Ursogal  - Ursodeoxycholic acid',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (728,'Utinor  - Norfloxacin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (729,'Valclair  - Diazepam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (730,'Valium  - Diazepam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (731,'Vallergan  - Alimemazine tartrate/ Trimeprazine tartrate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (732,'Valoid  - Cyclizine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (733,'Valtrex  - Valaciclovir',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (734,'Vancocin  - Vancomycin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (735,'Vascace  - Cilazapril',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (736,'Velbe  - Vinblastine sulphate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (737,'Velosef  - Cefradine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (738,'Ventide  - Beclometasone dipropionate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (739,'Ventodisks  - Salbutamol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (740,'Ventolin  - Salbutamol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (741,'Vepesid  - Etoposide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (742,'Vermox  - Mebendazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (743,'Viagra  - Sildenafil',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (744,'Viazem  - Diltiazem',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (745,'Vibramycin -D  - Doxycycline',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (746,'Vibramycin  - Doxycycline',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (747,'Videx  - Didanosine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (748,'Vioxx  - Rofecoxib',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (749,'Viracept  - Nelfinavir',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (750,'Viramune  - Nevirapine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (751,'Virazole  - Ribavarin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (752,'Visclair  - Mecysteine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (753,'Visken  - Pindolol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (754,'Vistide  - Cidofovir',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (755,'Vivalan  - Viloxazine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (756,'Voltarol  - Diclofenac sodium',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (757,'Welldorm  - Chloral hydrate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (758,'Wellvone  - Atovaquone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (759,'Xanax  - Alprazolam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (760,'Xenical  - Orlistat',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (761,'Xylocaine  - Lidocaine/Lignocaine Dental preparations',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (762,'Xylotox  - Lidocaine/Lignocaine Dental preparations',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (763,'Yomesan  - Niclosamide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (764,'Zaditen  - Ketotifen',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (765,'Zadstat  - Metronidazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (766,'Zamadol  - Tramadol hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (767,'Zandip  - Lercanidipine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (768,'Zantac  - Ranitidine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (769,'Zarontin  - Ethosuximide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (770,'Zavedos  - Idarubicin hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (771,'Zelapar  - Selegeline hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (772,'Zemtard  - Diltiazem',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (773,'Zerit  - Stavudine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (774,'Zestril  - Lisinopril',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (775,'Ziagen  - Abacavir',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (776,'Zimovane  - Zopiclone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (777,'Zinacef  - Cefuroxime',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (778,'Zinamide  - Pyrazinamide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (779,'Zinnat  - Cefuroxime',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (780,'Zirtek  - Cetirizine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (781,'Zispin  - Mirtazapine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (782,'Zithromax  - Azithromycin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (783,'Zocor  - Simvastatin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (784,'Zofran  - Ondansetron',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (785,'Zoleptil  - Zotepine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (786,'Zomig  - Zolmitriptan',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (787,'Zoton  - Lansoprazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (788,'Zovirax  - Aciclovir',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (789,'Zyban  - Amfebutamone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (790,'Zydol  - Tramadol hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (791,'Zyloric  - Allopurinol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (792,'Zyprexa  - Olanzapine',NULL);
/*!40000 ALTER TABLE `medication` ENABLE KEYS */;
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
INSERT INTO `tbl_doctor` (`doc_id`, `doc_username`, `doc_password`, `doc_name`, `doc_status`) VALUES (1,'hasith89','123','Hasith Malinga',0);
INSERT INTO `tbl_doctor` (`doc_id`, `doc_username`, `doc_password`, `doc_name`, `doc_status`) VALUES (2,'mahesh90','123','Mahesh Rathnayake',0);
INSERT INTO `tbl_doctor` (`doc_id`, `doc_username`, `doc_password`, `doc_name`, `doc_status`) VALUES (3,'kumara91','123','Eshan Kumara',0);
INSERT INTO `tbl_doctor` (`doc_id`, `doc_username`, `doc_password`, `doc_name`, `doc_status`) VALUES (4,'kavindi92','123','Kavindi Bogahawatte',0);
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
  PRIMARY KEY (`patient_id`),
  UNIQUE KEY `patient_barcode_UNIQUE` (`patient_barcode`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_patient`
--

LOCK TABLES `tbl_patient` WRITE;
/*!40000 ALTER TABLE `tbl_patient` DISABLE KEYS */;
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (3,'Hasith','Malinga','hasith@gmail.com','M','ASE','No Allergies',NULL);
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (4,'Hsafgd','ddgfgdf','dfgdignmi','M','vbfgbfbg','cffdgbdf',NULL);
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (5,'hasith','Daminda','eshan@gmail.com','M','SE','Meals',NULL);
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (6,'hasith','Daminda','eshan@gmail.com','M','SE','Meals',NULL);
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (7,'novhd','njovdf','njono','M','nvdjfin','njonvof',NULL);
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (8,'novhd','njovdf','njono','M','nvdjfin','njonvof',NULL);
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (9,'novhd','njovdf','njono','M','nvdjfin','njonvof',NULL);
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (10,'novhd','njovdf','njono','M','nvdjfin','njonvof',NULL);
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (11,'xcxzczx','czxc','','M','cxzcz','xczxc',NULL);
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (12,'erter','ert','rtert@DFG.RE','M','erte','ertertretretr',NULL);
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (13,'Daminda','Kumara','damindakumara@gmail.com','M','Student','Allergic of Penicillin',NULL);
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (14,'ddsfsfsd','sdfsdf','','M','sdfsdfssdfsdfsdfsfsdfsdfsf','s',NULL);
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (15,'ddsfsfsd','sdfsdf','fghfghf','M','sdfsdfssdfsdfsdfsfsdfsdfsf','s',NULL);
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (16,'jljklj','','','0','','',NULL);
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (17,'','','','F','','',NULL);
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (18,'Shamal','Rathnayake','shamaldfn@gmail.com','M','ASE','Test Allergies',NULL);
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (19,'','','','0','','',NULL);
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (20,'dfsdf','sfsdfs','dfsfsd','M','sdfsdfs','fsdfs',NULL);
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (21,'dfsdf','sfsdfs','dfsfsd','M','sdfsdfs','fsdfs',NULL);
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (22,'dfsdf','sfsdfs','dfsfsd','M','sdfsdfs','fsdfs',NULL);
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (23,'dfsdf','sfsdfs','dfsfsd','M','sdfsdfs','fsdfs',NULL);
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (24,'bfdgb','dfgdfg','gfdg','M','dfgdg','gfdg','6784394204');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (25,'sdfsdf','fsdf','sfsd','M','sdfsdf','sdfsdf','67843942041');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (26,'ttryrt','rtyrt','rtyr','M','','trytry','678439420412');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (27,'ttryrt','rtyrt','rtyr','M','','trytry','6784394204123');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (28,'dvfgd','qweqe','FGHFG','M','SDAF','GFHGF','67843942041234');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (29,'DGF','JG','JGH','M','GHJ','HGJ','6784394204127');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (30,'0','0','0','0','0','0','67843942041274');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (31,'Mahesh','Rathnayaka','dfnmahesh@gmail.com','M','Student','None',NULL);
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (32,'sdd','sdsd','sds','M','sds','sds',NULL);
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (33,'vcxvxc','xcvxc','xcvx','M','xcvxc','xcv',NULL);
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (34,'shamal','64685','nfhdvbj@hhdv.jbx','M','gdhsj','Njjhdjb d hi bdg',NULL);
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (35,'vcv','cv','tyrt','M','try','tyr',NULL);
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (36,'yttuty','utyu','ytu','F','yt','tyu',NULL);
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (37,'yttuty','utyu','ytu','F','yt','tyu',NULL);
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (38,'yttuty','utyu','ytu','F','yt','tyu',NULL);
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (39,'yttuty','utyu','ytu','F','yt','tyu',NULL);
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (40,'0','0','0','0','0','0',NULL);
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (41,'0','0','0','0','0','0','349316899665');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (42,'sfsdfsd','sdfs','sdfd','M','sfdsd','sdfsdf','631502459196');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (43,'gugu','dfgdfg','tertee','M','fdsdff','erterte','495873006916');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (44,'sdfdssfdsfsdf','gfhfg','fghf','F','hfhf','hfghf','634675684659');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (45,'Eshan','gfhfg','fghf','F','hfhf','hfghf','239985838617');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (46,'Mahesh','gfhfg','fghf','F','hfhf','hfghf','864517131166');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (47,'Shamal','Mahesh','mintcrops@gmail.com','M','Student','None','197407452931');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (48,'Shamal','Mahesh','mintcrops@gmail.com','M','Student','None','390393345734');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (49,'Shamal','Mahesh','mintcrops@gmail.com','M','Student','None','465424915469');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (50,'Shamal','Mahesh','mintcrops@gmail.com','M','Student','None','476724919468');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (51,'Shamal','Mahesh','mintcrops@gmail.com','M','Student','None','332674981716');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (52,'Shamal','Mahesh','mintcrops@gmail.com','M','Student','None','464934163792');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (53,'Shamal','Mahesh','mintcrops@gmail.com','M','Student','None','597489490743');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (54,'Shamal','Mahesh','mintcrops@gmail.com','M','Student','None','751631808045');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (55,'hello','helloS','vrdtvdrt','F','Student','vdrtdr','261561309019');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (56,'hello','helloS','vrdtvdrt','F','Student','vdrtdr','473571733752');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (57,'hello','helloS','vrdtvdrt','F','Student','vdrtdr','403577054801');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (58,'hello','helloS','vrdtvdrt','F','Student','vdrtdr','589129283133');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (59,'hello','helloS','vrdtvdrt','F','Student','vdrtdr','393548485441');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (60,'Su','Ji','fiosdoni@fds.df','F','Ban','hoshdoif','696187836559');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (61,'','','','F','','','116584646952');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (62,'0','0','0','0','0','0','585456746906');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (63,'0','0','0','0','0','0','451149441728');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (64,'0','0','0','0','0','0','095031032504');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (65,'0','0','0','0','0','0','079369257847');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (66,'nn','inoin','','M','','','922848420461');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (67,'0','0','0','0','0','0','802537323472');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (68,'','','','0','','','146892035229');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (69,'','','','0','','','630381509433');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (70,'gers','nno','miomi','M','','moimoi','835624737148');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (71,'eshan','daminda','pubbanda@gmail.com','F','ASE','no allergies','506531400820');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (72,'gers','nno','miomi','M','','moimoi','244440659347');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (73,'eshan','daminda','pubbanda@gmail.com','F','ASE','no allergies','170218887064');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (74,'ioni','ononok','kl','M','non','nkl','871722687022');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (75,'Debra ','Messing','debmes@gmail.com','F','Business Executive','penicillin','012370912473');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (76,'Kavindi','ajdjsa.sdas','','0','','','297939931626');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (77,'abc','abc','','0','-','','428114816622');
INSERT INTO `tbl_patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_gender`, `patient_occupation`, `patient_allergies`, `patient_barcode`) VALUES (78,'0','0','0','0','0','0','576608297618');
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
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (6,'34','Malabe rd','Malabe','Kaduwela');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (7,'njnjn','njnjo','njnjo','nojkno');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (8,'njnjn','njnjo','njnjo','nojkno');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (9,'njnjn','njnjo','njnjo','nojkno');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (10,'njnjn','njnjo','njnjo','nojkno');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (11,'','','','');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (12,'34','rgfbhrrr','fgddfdfdfgd','fdgdg');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (13,'34','Kahawa','Ambalangoda','Ambalangoda');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (14,'','','','');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (15,'fghgfh','fhgfg','fghf','ghfghfgh');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (16,'','','','');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (17,'','','','');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (18,'12','Kaduwela','Malabe','kurunegala');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (19,'','','','');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (22,'dfgdf','fdgdf','dfgdfg','fgdf');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (23,'dfgdf','fdgdf','dfgdfg','fgdf');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (24,'dfgfdg','gdf','dfgfd','fdgdfg');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (25,'sfsdf','sdfsdf','sdfsf','sfsdf');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (26,'ytyrty','ytry','rtytr','rtytr');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (27,'ytyrty','ytry','rtytr','rtytr');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (28,'gfdgdf','yutu','qweqw','jy');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (29,'DFG','GDF','JHGJG','JHJ');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (30,'0','0','0','0');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (31,'433/2','Pileekada','Pilessa','Kurunegala');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (32,'sdsd','sd','dsd','sds');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (33,'xcvxc','cvxc','cxvxc','xcvcx');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (34,'433','3465','6765','64584');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (35,'vcvx','cvx','cxvcx','xcv');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (36,'ytut','ytu','tyut','ytu');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (37,'ytut','ytu','tyut','ytu');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (38,'ytut','ytu','tyut','ytu');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (39,'ytut','ytu','tyut','ytu');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (40,'0','0','0','0');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (41,'0','0','0','0');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (42,'dfsdf','fdsdf','fdsfsd','df');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (43,'fdgd','fdgd','gdfgd','fgdfg');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (44,'dsfsdfsdf','ghfhffghf','ghfh','ghfg');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (45,'dsfsdfsdf','ghfhffghf','ghfh','ghfg');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (46,'dsfsdfsdf','ghfhffghf','ghfh','ghfg');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (47,'433','Pileekada','Pilessa','Kurunegala');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (48,'433','Pileekada','Pilessa','Kurunegala');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (49,'433','Pileekada','Pilessa','Kurunegala');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (50,'433','Pileekada','Pilessa','Kurunegala');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (51,'433','Pileekada','Pilessa','Kurunegala');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (52,'433','Pileekada','Pilessa','Kurunegala');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (53,'433','Pileekada','Pilessa','Kurunegala');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (54,'433','Pileekada','Pilessa','Kurunegala');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (55,'543','vdgtd','vtrdgt','vtdrb');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (56,'543','vdgtd','vtrdgt','vtdrb');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (57,'543','vdgtd','vtrdgt','vtdrb');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (58,'543','vdgtd','vtrdgt','vtdrb');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (59,'543','vdgtd','vtrdgt','vtdrb');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (60,'23','vfdv','tgsf','grters');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (61,'','','','');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (62,'0','0','0','0');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (63,'0','0','0','0');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (64,'0','0','0','0');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (65,'0','0','0','0');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (66,'nionio','nionio','inio','in');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (67,'0','0','0','0');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (68,'','','','');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (69,'','','','');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (70,'moino','mnoknmo','mokmok','mkomo');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (71,'23','malabe rd','kaduwela','colombo');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (72,'moino','mnoknmo','mokmok','mkomo');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (73,'23','malabe rd','kaduwela','colombo');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (74,'njknjk','njkn','knkjn','jknkj');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (75,'154','6th Lane','Wall Street','Las Vegas');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (76,'','','','');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (77,'','','','');
INSERT INTO `tbl_patient_address` (`patient_id`, `postal_no`, `address_line1`, `address_line2`, `city`) VALUES (78,'0','0','0','0');
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
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (6,'1234564789','34','7777777777');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (7,'njnjn','njnjn','jnjnjo');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (8,'njnjn','njnjn','jnjnjo');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (9,'njnjn','njnjn','jnjnjo');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (10,'njnjn','njnjn','jnjnjo');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (11,'','','');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (12,'3454353','34','34535435');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (13,'0351597952','34','0775588669');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (14,'','','');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (15,'gffhgfhfhf','fghgfh','ghfghfhfgh');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (16,'','','');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (17,'','','');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (18,'0712803801','12','0372226246');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (19,'','','');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (22,'64564564','dfgdf','565656565');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (23,'64564564','dfgdf','565656565');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (24,'dfgfdg','dfgfdg','dfgfd');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (25,'sdfsdf','sfsdf','fsd');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (26,'tryrt','ytyrty','rtyrty');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (27,'tryrt','ytyrty','rtyrty');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (28,'Asda','gfdgdf','asAS');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (29,'GHJH','DFG','GHJ');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (30,'0','0','0');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (31,'0372226245','433/2','0712803801');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (32,'sdsd','sdsd','sdsd');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (33,'xcvxc','xcvxc','cvx');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (34,'7253648','433','7363816');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (35,'hrtytr','vcvx','yrty');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (36,'tyuyt','ytut','ytut');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (37,'tyuyt','ytut','ytut');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (38,'tyuyt','ytut','ytut');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (39,'tyuyt','ytut','ytut');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (40,'0','0','0');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (41,'0','0','0');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (42,'dsfsd','dfsdf','sdf');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (43,'5645645','fdgd','5t46456');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (44,'hghfhfhgh','dsfsdfsdf','ghfhf');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (45,'hghfhfhgh','dsfsdfsdf','ghfhf');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (46,'hghfhfhgh','dsfsdfsdf','ghfhf');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (47,'0372226245','433','0712803801');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (48,'0372226245','433','0712803801');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (49,'0372226245','433','0712803801');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (50,'0372226245','433','0712803801');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (51,'0372226245','433','0712803801');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (52,'0372226245','0712803801','0722445555');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (53,'0372226245','0712803801','0722445555');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (54,'0372226245','0712803801','0722445555');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (55,'vtdrgbd','vdrtvtrd','vrtvrdtv');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (56,'vtdrgbd','vdrtvtrd','vrtvrdtv');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (57,'vtdrgbd','vdrtvtrd','vrtvrdtv');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (58,'vtdrgbd','vdrtvtrd','vrtvrdtv');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (59,'vtdrgbd','vdrtvtrd','vrtvrdtv');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (60,'4446546','4464646','4646464');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (61,'','','');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (62,'0','0','0');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (63,'0','0','0');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (64,'0','0','0');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (65,'0','0','0');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (66,'','','');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (67,'0','0','0');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (68,'','','');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (69,'','','');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (70,'iomio','miomio','miomio');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (71,'1234567890','0123456789','9874563210');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (72,'iomio','miomio','miomio');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (73,'1234567890','0123456789','9874563210');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (74,'nnni','onk','nkn');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (75,'0112453647','0776135621','0114267625');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (76,'','','');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (77,'','','');
INSERT INTO `tbl_patient_contacts` (`patient_id`, `home_no`, `mobile_no`, `work_no`) VALUES (78,'0','0','0');
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
  `if_you_are_still_menstruating` int(11) DEFAULT NULL,
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
  `treatment_need_other` int(11) NOT NULL,
  `Antibiotic` int(11) DEFAULT NULL,
  `Sedative` int(11) DEFAULT NULL,
  `Anti-inflammatory` int(11) DEFAULT NULL,
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
  `Sores_that_bleed_easily_or_do_not_heal` int(11) DEFAULT NULL,
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
INSERT INTO `tbl_patient_dental_history` (`p_id`, `difficulty_in_chewing_your_food`, `chew_on_only_one_side_of_your_mouth`, `avoid_brushing_any_part_of_your_mouth_because_of_pain`, `gums_bleed_when_you_floss`, `gums_feel_swollen_or_tender`, `your_teeth_sensitive`, `hurt_when_you_chew_or_open_wide_to_take_a_bite`, `ever_noticed_slow_healing_sores_in_or_about_your_mouth`, `Have_you_had_a_blow_to_the_jaw`, `have_pain_in_the_f_j_j_t_t`, `Gum_chewer`, `Pipe_smoker`, `Betel_chewer`, `Cigarette_smoker`, `Hot_foods_or_liquids`, `Sours`, `Cold_foods_or_liquids`, `Sweets`, `health_history_other`, `Are_you_pregnant`, `Nursing`, `Number_of_weeks`, `if_you_are_still_menstruating`, `Total_number_of_pregnancies`, `Age_at_beginning_of_periods`, `Number_of_births`, `Age_at_end_of_periods`, `Removal`, `Wound_treatment`, `Fillings`, `Sealants`, `Retainers`, `Braces`, `Cleaning`, `Polishing`, `Bridges`, `Dentures`, `Implants`, `Urgent_Treatment`, `Restorative_Care`, `Preventive_Care`, `treatment_need_other`, `Antibiotic`, `Sedative`, `Anti-inflammatory`, `drugs_prescribed_other`, `Caries`, `Initial`, `Dentine`, `Pulp_exposed`, `Periodontal_diseases`, `Gingivitis`, `Periodontitis`, `Lesions`, `Premalignant`, `Cancerous`, `Non_Cancerous`, `Malocclusion`, `Class_2_Division_1`, `Class_2_Division_2`, `Class_3`, `Fluorosis`, `Missing_Teeth`, `Dry_Mouth`, `Extra_Oral`, `Facial_issues`, `Swellings`, `dental_examination_other`, `Sensitivity`, `Tooth_decay`, `Fractured_teeth`, `Worn_fillings`, `Gum_disease`, `Worn_tooth_enamel`, `Exposed_tooth_root`, `Oropharyngeal_Cancer`, `Sores_that_bleed_easily_or_do_not_heal`, `Thick_or_hard_spot_or_lump`, `Roughened_or_crusted_area`, `Numbness_pain_or_tenderness`, `Change_in_the_way_your_teeth_fit_together_when_you_bite_down`, `dental_examination_comment`) VALUES ('59',1,0,1,0,1,1,1,0,1,0,0,1,0,1,0,1,1,0,'vcertdgtdrhtrdyhg treg h',1,0,545,543,545,543,5435,5435,1,0,0,1,1,0,0,1,1,0,1,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `tbl_patient_dental_history` (`p_id`, `difficulty_in_chewing_your_food`, `chew_on_only_one_side_of_your_mouth`, `avoid_brushing_any_part_of_your_mouth_because_of_pain`, `gums_bleed_when_you_floss`, `gums_feel_swollen_or_tender`, `your_teeth_sensitive`, `hurt_when_you_chew_or_open_wide_to_take_a_bite`, `ever_noticed_slow_healing_sores_in_or_about_your_mouth`, `Have_you_had_a_blow_to_the_jaw`, `have_pain_in_the_f_j_j_t_t`, `Gum_chewer`, `Pipe_smoker`, `Betel_chewer`, `Cigarette_smoker`, `Hot_foods_or_liquids`, `Sours`, `Cold_foods_or_liquids`, `Sweets`, `health_history_other`, `Are_you_pregnant`, `Nursing`, `Number_of_weeks`, `if_you_are_still_menstruating`, `Total_number_of_pregnancies`, `Age_at_beginning_of_periods`, `Number_of_births`, `Age_at_end_of_periods`, `Removal`, `Wound_treatment`, `Fillings`, `Sealants`, `Retainers`, `Braces`, `Cleaning`, `Polishing`, `Bridges`, `Dentures`, `Implants`, `Urgent_Treatment`, `Restorative_Care`, `Preventive_Care`, `treatment_need_other`, `Antibiotic`, `Sedative`, `Anti-inflammatory`, `drugs_prescribed_other`, `Caries`, `Initial`, `Dentine`, `Pulp_exposed`, `Periodontal_diseases`, `Gingivitis`, `Periodontitis`, `Lesions`, `Premalignant`, `Cancerous`, `Non_Cancerous`, `Malocclusion`, `Class_2_Division_1`, `Class_2_Division_2`, `Class_3`, `Fluorosis`, `Missing_Teeth`, `Dry_Mouth`, `Extra_Oral`, `Facial_issues`, `Swellings`, `dental_examination_other`, `Sensitivity`, `Tooth_decay`, `Fractured_teeth`, `Worn_fillings`, `Gum_disease`, `Worn_tooth_enamel`, `Exposed_tooth_root`, `Oropharyngeal_Cancer`, `Sores_that_bleed_easily_or_do_not_heal`, `Thick_or_hard_spot_or_lump`, `Roughened_or_crusted_area`, `Numbness_pain_or_tenderness`, `Change_in_the_way_your_teeth_fit_together_when_you_bite_down`, `dental_examination_comment`) VALUES ('60',1,0,1,1,0,0,1,1,1,0,0,1,1,1,1,1,1,0,'svfrezfvre',1,0,0,0,0,0,0,0,1,0,1,1,1,0,1,1,0,1,1,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `tbl_patient_dental_history` (`p_id`, `difficulty_in_chewing_your_food`, `chew_on_only_one_side_of_your_mouth`, `avoid_brushing_any_part_of_your_mouth_because_of_pain`, `gums_bleed_when_you_floss`, `gums_feel_swollen_or_tender`, `your_teeth_sensitive`, `hurt_when_you_chew_or_open_wide_to_take_a_bite`, `ever_noticed_slow_healing_sores_in_or_about_your_mouth`, `Have_you_had_a_blow_to_the_jaw`, `have_pain_in_the_f_j_j_t_t`, `Gum_chewer`, `Pipe_smoker`, `Betel_chewer`, `Cigarette_smoker`, `Hot_foods_or_liquids`, `Sours`, `Cold_foods_or_liquids`, `Sweets`, `health_history_other`, `Are_you_pregnant`, `Nursing`, `Number_of_weeks`, `if_you_are_still_menstruating`, `Total_number_of_pregnancies`, `Age_at_beginning_of_periods`, `Number_of_births`, `Age_at_end_of_periods`, `Removal`, `Wound_treatment`, `Fillings`, `Sealants`, `Retainers`, `Braces`, `Cleaning`, `Polishing`, `Bridges`, `Dentures`, `Implants`, `Urgent_Treatment`, `Restorative_Care`, `Preventive_Care`, `treatment_need_other`, `Antibiotic`, `Sedative`, `Anti-inflammatory`, `drugs_prescribed_other`, `Caries`, `Initial`, `Dentine`, `Pulp_exposed`, `Periodontal_diseases`, `Gingivitis`, `Periodontitis`, `Lesions`, `Premalignant`, `Cancerous`, `Non_Cancerous`, `Malocclusion`, `Class_2_Division_1`, `Class_2_Division_2`, `Class_3`, `Fluorosis`, `Missing_Teeth`, `Dry_Mouth`, `Extra_Oral`, `Facial_issues`, `Swellings`, `dental_examination_other`, `Sensitivity`, `Tooth_decay`, `Fractured_teeth`, `Worn_fillings`, `Gum_disease`, `Worn_tooth_enamel`, `Exposed_tooth_root`, `Oropharyngeal_Cancer`, `Sores_that_bleed_easily_or_do_not_heal`, `Thick_or_hard_spot_or_lump`, `Roughened_or_crusted_area`, `Numbness_pain_or_tenderness`, `Change_in_the_way_your_teeth_fit_together_when_you_bite_down`, `dental_examination_comment`) VALUES ('61',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `tbl_patient_dental_history` (`p_id`, `difficulty_in_chewing_your_food`, `chew_on_only_one_side_of_your_mouth`, `avoid_brushing_any_part_of_your_mouth_because_of_pain`, `gums_bleed_when_you_floss`, `gums_feel_swollen_or_tender`, `your_teeth_sensitive`, `hurt_when_you_chew_or_open_wide_to_take_a_bite`, `ever_noticed_slow_healing_sores_in_or_about_your_mouth`, `Have_you_had_a_blow_to_the_jaw`, `have_pain_in_the_f_j_j_t_t`, `Gum_chewer`, `Pipe_smoker`, `Betel_chewer`, `Cigarette_smoker`, `Hot_foods_or_liquids`, `Sours`, `Cold_foods_or_liquids`, `Sweets`, `health_history_other`, `Are_you_pregnant`, `Nursing`, `Number_of_weeks`, `if_you_are_still_menstruating`, `Total_number_of_pregnancies`, `Age_at_beginning_of_periods`, `Number_of_births`, `Age_at_end_of_periods`, `Removal`, `Wound_treatment`, `Fillings`, `Sealants`, `Retainers`, `Braces`, `Cleaning`, `Polishing`, `Bridges`, `Dentures`, `Implants`, `Urgent_Treatment`, `Restorative_Care`, `Preventive_Care`, `treatment_need_other`, `Antibiotic`, `Sedative`, `Anti-inflammatory`, `drugs_prescribed_other`, `Caries`, `Initial`, `Dentine`, `Pulp_exposed`, `Periodontal_diseases`, `Gingivitis`, `Periodontitis`, `Lesions`, `Premalignant`, `Cancerous`, `Non_Cancerous`, `Malocclusion`, `Class_2_Division_1`, `Class_2_Division_2`, `Class_3`, `Fluorosis`, `Missing_Teeth`, `Dry_Mouth`, `Extra_Oral`, `Facial_issues`, `Swellings`, `dental_examination_other`, `Sensitivity`, `Tooth_decay`, `Fractured_teeth`, `Worn_fillings`, `Gum_disease`, `Worn_tooth_enamel`, `Exposed_tooth_root`, `Oropharyngeal_Cancer`, `Sores_that_bleed_easily_or_do_not_heal`, `Thick_or_hard_spot_or_lump`, `Roughened_or_crusted_area`, `Numbness_pain_or_tenderness`, `Change_in_the_way_your_teeth_fit_together_when_you_bite_down`, `dental_examination_comment`) VALUES ('62',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'0',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `tbl_patient_dental_history` (`p_id`, `difficulty_in_chewing_your_food`, `chew_on_only_one_side_of_your_mouth`, `avoid_brushing_any_part_of_your_mouth_because_of_pain`, `gums_bleed_when_you_floss`, `gums_feel_swollen_or_tender`, `your_teeth_sensitive`, `hurt_when_you_chew_or_open_wide_to_take_a_bite`, `ever_noticed_slow_healing_sores_in_or_about_your_mouth`, `Have_you_had_a_blow_to_the_jaw`, `have_pain_in_the_f_j_j_t_t`, `Gum_chewer`, `Pipe_smoker`, `Betel_chewer`, `Cigarette_smoker`, `Hot_foods_or_liquids`, `Sours`, `Cold_foods_or_liquids`, `Sweets`, `health_history_other`, `Are_you_pregnant`, `Nursing`, `Number_of_weeks`, `if_you_are_still_menstruating`, `Total_number_of_pregnancies`, `Age_at_beginning_of_periods`, `Number_of_births`, `Age_at_end_of_periods`, `Removal`, `Wound_treatment`, `Fillings`, `Sealants`, `Retainers`, `Braces`, `Cleaning`, `Polishing`, `Bridges`, `Dentures`, `Implants`, `Urgent_Treatment`, `Restorative_Care`, `Preventive_Care`, `treatment_need_other`, `Antibiotic`, `Sedative`, `Anti-inflammatory`, `drugs_prescribed_other`, `Caries`, `Initial`, `Dentine`, `Pulp_exposed`, `Periodontal_diseases`, `Gingivitis`, `Periodontitis`, `Lesions`, `Premalignant`, `Cancerous`, `Non_Cancerous`, `Malocclusion`, `Class_2_Division_1`, `Class_2_Division_2`, `Class_3`, `Fluorosis`, `Missing_Teeth`, `Dry_Mouth`, `Extra_Oral`, `Facial_issues`, `Swellings`, `dental_examination_other`, `Sensitivity`, `Tooth_decay`, `Fractured_teeth`, `Worn_fillings`, `Gum_disease`, `Worn_tooth_enamel`, `Exposed_tooth_root`, `Oropharyngeal_Cancer`, `Sores_that_bleed_easily_or_do_not_heal`, `Thick_or_hard_spot_or_lump`, `Roughened_or_crusted_area`, `Numbness_pain_or_tenderness`, `Change_in_the_way_your_teeth_fit_together_when_you_bite_down`, `dental_examination_comment`) VALUES ('63',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'0',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `tbl_patient_dental_history` (`p_id`, `difficulty_in_chewing_your_food`, `chew_on_only_one_side_of_your_mouth`, `avoid_brushing_any_part_of_your_mouth_because_of_pain`, `gums_bleed_when_you_floss`, `gums_feel_swollen_or_tender`, `your_teeth_sensitive`, `hurt_when_you_chew_or_open_wide_to_take_a_bite`, `ever_noticed_slow_healing_sores_in_or_about_your_mouth`, `Have_you_had_a_blow_to_the_jaw`, `have_pain_in_the_f_j_j_t_t`, `Gum_chewer`, `Pipe_smoker`, `Betel_chewer`, `Cigarette_smoker`, `Hot_foods_or_liquids`, `Sours`, `Cold_foods_or_liquids`, `Sweets`, `health_history_other`, `Are_you_pregnant`, `Nursing`, `Number_of_weeks`, `if_you_are_still_menstruating`, `Total_number_of_pregnancies`, `Age_at_beginning_of_periods`, `Number_of_births`, `Age_at_end_of_periods`, `Removal`, `Wound_treatment`, `Fillings`, `Sealants`, `Retainers`, `Braces`, `Cleaning`, `Polishing`, `Bridges`, `Dentures`, `Implants`, `Urgent_Treatment`, `Restorative_Care`, `Preventive_Care`, `treatment_need_other`, `Antibiotic`, `Sedative`, `Anti-inflammatory`, `drugs_prescribed_other`, `Caries`, `Initial`, `Dentine`, `Pulp_exposed`, `Periodontal_diseases`, `Gingivitis`, `Periodontitis`, `Lesions`, `Premalignant`, `Cancerous`, `Non_Cancerous`, `Malocclusion`, `Class_2_Division_1`, `Class_2_Division_2`, `Class_3`, `Fluorosis`, `Missing_Teeth`, `Dry_Mouth`, `Extra_Oral`, `Facial_issues`, `Swellings`, `dental_examination_other`, `Sensitivity`, `Tooth_decay`, `Fractured_teeth`, `Worn_fillings`, `Gum_disease`, `Worn_tooth_enamel`, `Exposed_tooth_root`, `Oropharyngeal_Cancer`, `Sores_that_bleed_easily_or_do_not_heal`, `Thick_or_hard_spot_or_lump`, `Roughened_or_crusted_area`, `Numbness_pain_or_tenderness`, `Change_in_the_way_your_teeth_fit_together_when_you_bite_down`, `dental_examination_comment`) VALUES ('64',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'0',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `tbl_patient_dental_history` (`p_id`, `difficulty_in_chewing_your_food`, `chew_on_only_one_side_of_your_mouth`, `avoid_brushing_any_part_of_your_mouth_because_of_pain`, `gums_bleed_when_you_floss`, `gums_feel_swollen_or_tender`, `your_teeth_sensitive`, `hurt_when_you_chew_or_open_wide_to_take_a_bite`, `ever_noticed_slow_healing_sores_in_or_about_your_mouth`, `Have_you_had_a_blow_to_the_jaw`, `have_pain_in_the_f_j_j_t_t`, `Gum_chewer`, `Pipe_smoker`, `Betel_chewer`, `Cigarette_smoker`, `Hot_foods_or_liquids`, `Sours`, `Cold_foods_or_liquids`, `Sweets`, `health_history_other`, `Are_you_pregnant`, `Nursing`, `Number_of_weeks`, `if_you_are_still_menstruating`, `Total_number_of_pregnancies`, `Age_at_beginning_of_periods`, `Number_of_births`, `Age_at_end_of_periods`, `Removal`, `Wound_treatment`, `Fillings`, `Sealants`, `Retainers`, `Braces`, `Cleaning`, `Polishing`, `Bridges`, `Dentures`, `Implants`, `Urgent_Treatment`, `Restorative_Care`, `Preventive_Care`, `treatment_need_other`, `Antibiotic`, `Sedative`, `Anti-inflammatory`, `drugs_prescribed_other`, `Caries`, `Initial`, `Dentine`, `Pulp_exposed`, `Periodontal_diseases`, `Gingivitis`, `Periodontitis`, `Lesions`, `Premalignant`, `Cancerous`, `Non_Cancerous`, `Malocclusion`, `Class_2_Division_1`, `Class_2_Division_2`, `Class_3`, `Fluorosis`, `Missing_Teeth`, `Dry_Mouth`, `Extra_Oral`, `Facial_issues`, `Swellings`, `dental_examination_other`, `Sensitivity`, `Tooth_decay`, `Fractured_teeth`, `Worn_fillings`, `Gum_disease`, `Worn_tooth_enamel`, `Exposed_tooth_root`, `Oropharyngeal_Cancer`, `Sores_that_bleed_easily_or_do_not_heal`, `Thick_or_hard_spot_or_lump`, `Roughened_or_crusted_area`, `Numbness_pain_or_tenderness`, `Change_in_the_way_your_teeth_fit_together_when_you_bite_down`, `dental_examination_comment`) VALUES ('65',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'0',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `tbl_patient_dental_history` (`p_id`, `difficulty_in_chewing_your_food`, `chew_on_only_one_side_of_your_mouth`, `avoid_brushing_any_part_of_your_mouth_because_of_pain`, `gums_bleed_when_you_floss`, `gums_feel_swollen_or_tender`, `your_teeth_sensitive`, `hurt_when_you_chew_or_open_wide_to_take_a_bite`, `ever_noticed_slow_healing_sores_in_or_about_your_mouth`, `Have_you_had_a_blow_to_the_jaw`, `have_pain_in_the_f_j_j_t_t`, `Gum_chewer`, `Pipe_smoker`, `Betel_chewer`, `Cigarette_smoker`, `Hot_foods_or_liquids`, `Sours`, `Cold_foods_or_liquids`, `Sweets`, `health_history_other`, `Are_you_pregnant`, `Nursing`, `Number_of_weeks`, `if_you_are_still_menstruating`, `Total_number_of_pregnancies`, `Age_at_beginning_of_periods`, `Number_of_births`, `Age_at_end_of_periods`, `Removal`, `Wound_treatment`, `Fillings`, `Sealants`, `Retainers`, `Braces`, `Cleaning`, `Polishing`, `Bridges`, `Dentures`, `Implants`, `Urgent_Treatment`, `Restorative_Care`, `Preventive_Care`, `treatment_need_other`, `Antibiotic`, `Sedative`, `Anti-inflammatory`, `drugs_prescribed_other`, `Caries`, `Initial`, `Dentine`, `Pulp_exposed`, `Periodontal_diseases`, `Gingivitis`, `Periodontitis`, `Lesions`, `Premalignant`, `Cancerous`, `Non_Cancerous`, `Malocclusion`, `Class_2_Division_1`, `Class_2_Division_2`, `Class_3`, `Fluorosis`, `Missing_Teeth`, `Dry_Mouth`, `Extra_Oral`, `Facial_issues`, `Swellings`, `dental_examination_other`, `Sensitivity`, `Tooth_decay`, `Fractured_teeth`, `Worn_fillings`, `Gum_disease`, `Worn_tooth_enamel`, `Exposed_tooth_root`, `Oropharyngeal_Cancer`, `Sores_that_bleed_easily_or_do_not_heal`, `Thick_or_hard_spot_or_lump`, `Roughened_or_crusted_area`, `Numbness_pain_or_tenderness`, `Change_in_the_way_your_teeth_fit_together_when_you_bite_down`, `dental_examination_comment`) VALUES ('66',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `tbl_patient_dental_history` (`p_id`, `difficulty_in_chewing_your_food`, `chew_on_only_one_side_of_your_mouth`, `avoid_brushing_any_part_of_your_mouth_because_of_pain`, `gums_bleed_when_you_floss`, `gums_feel_swollen_or_tender`, `your_teeth_sensitive`, `hurt_when_you_chew_or_open_wide_to_take_a_bite`, `ever_noticed_slow_healing_sores_in_or_about_your_mouth`, `Have_you_had_a_blow_to_the_jaw`, `have_pain_in_the_f_j_j_t_t`, `Gum_chewer`, `Pipe_smoker`, `Betel_chewer`, `Cigarette_smoker`, `Hot_foods_or_liquids`, `Sours`, `Cold_foods_or_liquids`, `Sweets`, `health_history_other`, `Are_you_pregnant`, `Nursing`, `Number_of_weeks`, `if_you_are_still_menstruating`, `Total_number_of_pregnancies`, `Age_at_beginning_of_periods`, `Number_of_births`, `Age_at_end_of_periods`, `Removal`, `Wound_treatment`, `Fillings`, `Sealants`, `Retainers`, `Braces`, `Cleaning`, `Polishing`, `Bridges`, `Dentures`, `Implants`, `Urgent_Treatment`, `Restorative_Care`, `Preventive_Care`, `treatment_need_other`, `Antibiotic`, `Sedative`, `Anti-inflammatory`, `drugs_prescribed_other`, `Caries`, `Initial`, `Dentine`, `Pulp_exposed`, `Periodontal_diseases`, `Gingivitis`, `Periodontitis`, `Lesions`, `Premalignant`, `Cancerous`, `Non_Cancerous`, `Malocclusion`, `Class_2_Division_1`, `Class_2_Division_2`, `Class_3`, `Fluorosis`, `Missing_Teeth`, `Dry_Mouth`, `Extra_Oral`, `Facial_issues`, `Swellings`, `dental_examination_other`, `Sensitivity`, `Tooth_decay`, `Fractured_teeth`, `Worn_fillings`, `Gum_disease`, `Worn_tooth_enamel`, `Exposed_tooth_root`, `Oropharyngeal_Cancer`, `Sores_that_bleed_easily_or_do_not_heal`, `Thick_or_hard_spot_or_lump`, `Roughened_or_crusted_area`, `Numbness_pain_or_tenderness`, `Change_in_the_way_your_teeth_fit_together_when_you_bite_down`, `dental_examination_comment`) VALUES ('67',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'0',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `tbl_patient_dental_history` (`p_id`, `difficulty_in_chewing_your_food`, `chew_on_only_one_side_of_your_mouth`, `avoid_brushing_any_part_of_your_mouth_because_of_pain`, `gums_bleed_when_you_floss`, `gums_feel_swollen_or_tender`, `your_teeth_sensitive`, `hurt_when_you_chew_or_open_wide_to_take_a_bite`, `ever_noticed_slow_healing_sores_in_or_about_your_mouth`, `Have_you_had_a_blow_to_the_jaw`, `have_pain_in_the_f_j_j_t_t`, `Gum_chewer`, `Pipe_smoker`, `Betel_chewer`, `Cigarette_smoker`, `Hot_foods_or_liquids`, `Sours`, `Cold_foods_or_liquids`, `Sweets`, `health_history_other`, `Are_you_pregnant`, `Nursing`, `Number_of_weeks`, `if_you_are_still_menstruating`, `Total_number_of_pregnancies`, `Age_at_beginning_of_periods`, `Number_of_births`, `Age_at_end_of_periods`, `Removal`, `Wound_treatment`, `Fillings`, `Sealants`, `Retainers`, `Braces`, `Cleaning`, `Polishing`, `Bridges`, `Dentures`, `Implants`, `Urgent_Treatment`, `Restorative_Care`, `Preventive_Care`, `treatment_need_other`, `Antibiotic`, `Sedative`, `Anti-inflammatory`, `drugs_prescribed_other`, `Caries`, `Initial`, `Dentine`, `Pulp_exposed`, `Periodontal_diseases`, `Gingivitis`, `Periodontitis`, `Lesions`, `Premalignant`, `Cancerous`, `Non_Cancerous`, `Malocclusion`, `Class_2_Division_1`, `Class_2_Division_2`, `Class_3`, `Fluorosis`, `Missing_Teeth`, `Dry_Mouth`, `Extra_Oral`, `Facial_issues`, `Swellings`, `dental_examination_other`, `Sensitivity`, `Tooth_decay`, `Fractured_teeth`, `Worn_fillings`, `Gum_disease`, `Worn_tooth_enamel`, `Exposed_tooth_root`, `Oropharyngeal_Cancer`, `Sores_that_bleed_easily_or_do_not_heal`, `Thick_or_hard_spot_or_lump`, `Roughened_or_crusted_area`, `Numbness_pain_or_tenderness`, `Change_in_the_way_your_teeth_fit_together_when_you_bite_down`, `dental_examination_comment`) VALUES ('68',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `tbl_patient_dental_history` (`p_id`, `difficulty_in_chewing_your_food`, `chew_on_only_one_side_of_your_mouth`, `avoid_brushing_any_part_of_your_mouth_because_of_pain`, `gums_bleed_when_you_floss`, `gums_feel_swollen_or_tender`, `your_teeth_sensitive`, `hurt_when_you_chew_or_open_wide_to_take_a_bite`, `ever_noticed_slow_healing_sores_in_or_about_your_mouth`, `Have_you_had_a_blow_to_the_jaw`, `have_pain_in_the_f_j_j_t_t`, `Gum_chewer`, `Pipe_smoker`, `Betel_chewer`, `Cigarette_smoker`, `Hot_foods_or_liquids`, `Sours`, `Cold_foods_or_liquids`, `Sweets`, `health_history_other`, `Are_you_pregnant`, `Nursing`, `Number_of_weeks`, `if_you_are_still_menstruating`, `Total_number_of_pregnancies`, `Age_at_beginning_of_periods`, `Number_of_births`, `Age_at_end_of_periods`, `Removal`, `Wound_treatment`, `Fillings`, `Sealants`, `Retainers`, `Braces`, `Cleaning`, `Polishing`, `Bridges`, `Dentures`, `Implants`, `Urgent_Treatment`, `Restorative_Care`, `Preventive_Care`, `treatment_need_other`, `Antibiotic`, `Sedative`, `Anti-inflammatory`, `drugs_prescribed_other`, `Caries`, `Initial`, `Dentine`, `Pulp_exposed`, `Periodontal_diseases`, `Gingivitis`, `Periodontitis`, `Lesions`, `Premalignant`, `Cancerous`, `Non_Cancerous`, `Malocclusion`, `Class_2_Division_1`, `Class_2_Division_2`, `Class_3`, `Fluorosis`, `Missing_Teeth`, `Dry_Mouth`, `Extra_Oral`, `Facial_issues`, `Swellings`, `dental_examination_other`, `Sensitivity`, `Tooth_decay`, `Fractured_teeth`, `Worn_fillings`, `Gum_disease`, `Worn_tooth_enamel`, `Exposed_tooth_root`, `Oropharyngeal_Cancer`, `Sores_that_bleed_easily_or_do_not_heal`, `Thick_or_hard_spot_or_lump`, `Roughened_or_crusted_area`, `Numbness_pain_or_tenderness`, `Change_in_the_way_your_teeth_fit_together_when_you_bite_down`, `dental_examination_comment`) VALUES ('69',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `tbl_patient_dental_history` (`p_id`, `difficulty_in_chewing_your_food`, `chew_on_only_one_side_of_your_mouth`, `avoid_brushing_any_part_of_your_mouth_because_of_pain`, `gums_bleed_when_you_floss`, `gums_feel_swollen_or_tender`, `your_teeth_sensitive`, `hurt_when_you_chew_or_open_wide_to_take_a_bite`, `ever_noticed_slow_healing_sores_in_or_about_your_mouth`, `Have_you_had_a_blow_to_the_jaw`, `have_pain_in_the_f_j_j_t_t`, `Gum_chewer`, `Pipe_smoker`, `Betel_chewer`, `Cigarette_smoker`, `Hot_foods_or_liquids`, `Sours`, `Cold_foods_or_liquids`, `Sweets`, `health_history_other`, `Are_you_pregnant`, `Nursing`, `Number_of_weeks`, `if_you_are_still_menstruating`, `Total_number_of_pregnancies`, `Age_at_beginning_of_periods`, `Number_of_births`, `Age_at_end_of_periods`, `Removal`, `Wound_treatment`, `Fillings`, `Sealants`, `Retainers`, `Braces`, `Cleaning`, `Polishing`, `Bridges`, `Dentures`, `Implants`, `Urgent_Treatment`, `Restorative_Care`, `Preventive_Care`, `treatment_need_other`, `Antibiotic`, `Sedative`, `Anti-inflammatory`, `drugs_prescribed_other`, `Caries`, `Initial`, `Dentine`, `Pulp_exposed`, `Periodontal_diseases`, `Gingivitis`, `Periodontitis`, `Lesions`, `Premalignant`, `Cancerous`, `Non_Cancerous`, `Malocclusion`, `Class_2_Division_1`, `Class_2_Division_2`, `Class_3`, `Fluorosis`, `Missing_Teeth`, `Dry_Mouth`, `Extra_Oral`, `Facial_issues`, `Swellings`, `dental_examination_other`, `Sensitivity`, `Tooth_decay`, `Fractured_teeth`, `Worn_fillings`, `Gum_disease`, `Worn_tooth_enamel`, `Exposed_tooth_root`, `Oropharyngeal_Cancer`, `Sores_that_bleed_easily_or_do_not_heal`, `Thick_or_hard_spot_or_lump`, `Roughened_or_crusted_area`, `Numbness_pain_or_tenderness`, `Change_in_the_way_your_teeth_fit_together_when_you_bite_down`, `dental_examination_comment`) VALUES ('70',1,0,0,0,0,0,0,0,0,0,0,1,0,0,0,1,0,0,'bgfnj',0,0,0,0,0,0,0,0,1,0,0,0,0,1,0,0,0,0,0,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `tbl_patient_dental_history` (`p_id`, `difficulty_in_chewing_your_food`, `chew_on_only_one_side_of_your_mouth`, `avoid_brushing_any_part_of_your_mouth_because_of_pain`, `gums_bleed_when_you_floss`, `gums_feel_swollen_or_tender`, `your_teeth_sensitive`, `hurt_when_you_chew_or_open_wide_to_take_a_bite`, `ever_noticed_slow_healing_sores_in_or_about_your_mouth`, `Have_you_had_a_blow_to_the_jaw`, `have_pain_in_the_f_j_j_t_t`, `Gum_chewer`, `Pipe_smoker`, `Betel_chewer`, `Cigarette_smoker`, `Hot_foods_or_liquids`, `Sours`, `Cold_foods_or_liquids`, `Sweets`, `health_history_other`, `Are_you_pregnant`, `Nursing`, `Number_of_weeks`, `if_you_are_still_menstruating`, `Total_number_of_pregnancies`, `Age_at_beginning_of_periods`, `Number_of_births`, `Age_at_end_of_periods`, `Removal`, `Wound_treatment`, `Fillings`, `Sealants`, `Retainers`, `Braces`, `Cleaning`, `Polishing`, `Bridges`, `Dentures`, `Implants`, `Urgent_Treatment`, `Restorative_Care`, `Preventive_Care`, `treatment_need_other`, `Antibiotic`, `Sedative`, `Anti-inflammatory`, `drugs_prescribed_other`, `Caries`, `Initial`, `Dentine`, `Pulp_exposed`, `Periodontal_diseases`, `Gingivitis`, `Periodontitis`, `Lesions`, `Premalignant`, `Cancerous`, `Non_Cancerous`, `Malocclusion`, `Class_2_Division_1`, `Class_2_Division_2`, `Class_3`, `Fluorosis`, `Missing_Teeth`, `Dry_Mouth`, `Extra_Oral`, `Facial_issues`, `Swellings`, `dental_examination_other`, `Sensitivity`, `Tooth_decay`, `Fractured_teeth`, `Worn_fillings`, `Gum_disease`, `Worn_tooth_enamel`, `Exposed_tooth_root`, `Oropharyngeal_Cancer`, `Sores_that_bleed_easily_or_do_not_heal`, `Thick_or_hard_spot_or_lump`, `Roughened_or_crusted_area`, `Numbness_pain_or_tenderness`, `Change_in_the_way_your_teeth_fit_together_when_you_bite_down`, `dental_examination_comment`) VALUES ('71',1,0,0,0,0,1,0,0,0,0,0,0,1,0,0,0,1,0,'byurifrthyg ',1,0,5,2008,4,35,4,35,0,0,0,0,1,0,0,1,0,0,0,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `tbl_patient_dental_history` (`p_id`, `difficulty_in_chewing_your_food`, `chew_on_only_one_side_of_your_mouth`, `avoid_brushing_any_part_of_your_mouth_because_of_pain`, `gums_bleed_when_you_floss`, `gums_feel_swollen_or_tender`, `your_teeth_sensitive`, `hurt_when_you_chew_or_open_wide_to_take_a_bite`, `ever_noticed_slow_healing_sores_in_or_about_your_mouth`, `Have_you_had_a_blow_to_the_jaw`, `have_pain_in_the_f_j_j_t_t`, `Gum_chewer`, `Pipe_smoker`, `Betel_chewer`, `Cigarette_smoker`, `Hot_foods_or_liquids`, `Sours`, `Cold_foods_or_liquids`, `Sweets`, `health_history_other`, `Are_you_pregnant`, `Nursing`, `Number_of_weeks`, `if_you_are_still_menstruating`, `Total_number_of_pregnancies`, `Age_at_beginning_of_periods`, `Number_of_births`, `Age_at_end_of_periods`, `Removal`, `Wound_treatment`, `Fillings`, `Sealants`, `Retainers`, `Braces`, `Cleaning`, `Polishing`, `Bridges`, `Dentures`, `Implants`, `Urgent_Treatment`, `Restorative_Care`, `Preventive_Care`, `treatment_need_other`, `Antibiotic`, `Sedative`, `Anti-inflammatory`, `drugs_prescribed_other`, `Caries`, `Initial`, `Dentine`, `Pulp_exposed`, `Periodontal_diseases`, `Gingivitis`, `Periodontitis`, `Lesions`, `Premalignant`, `Cancerous`, `Non_Cancerous`, `Malocclusion`, `Class_2_Division_1`, `Class_2_Division_2`, `Class_3`, `Fluorosis`, `Missing_Teeth`, `Dry_Mouth`, `Extra_Oral`, `Facial_issues`, `Swellings`, `dental_examination_other`, `Sensitivity`, `Tooth_decay`, `Fractured_teeth`, `Worn_fillings`, `Gum_disease`, `Worn_tooth_enamel`, `Exposed_tooth_root`, `Oropharyngeal_Cancer`, `Sores_that_bleed_easily_or_do_not_heal`, `Thick_or_hard_spot_or_lump`, `Roughened_or_crusted_area`, `Numbness_pain_or_tenderness`, `Change_in_the_way_your_teeth_fit_together_when_you_bite_down`, `dental_examination_comment`) VALUES ('72',1,0,0,0,0,0,0,0,0,0,0,1,0,0,0,1,0,0,'bgfnj',0,0,0,0,0,0,0,0,1,0,0,0,0,1,0,0,0,0,0,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `tbl_patient_dental_history` (`p_id`, `difficulty_in_chewing_your_food`, `chew_on_only_one_side_of_your_mouth`, `avoid_brushing_any_part_of_your_mouth_because_of_pain`, `gums_bleed_when_you_floss`, `gums_feel_swollen_or_tender`, `your_teeth_sensitive`, `hurt_when_you_chew_or_open_wide_to_take_a_bite`, `ever_noticed_slow_healing_sores_in_or_about_your_mouth`, `Have_you_had_a_blow_to_the_jaw`, `have_pain_in_the_f_j_j_t_t`, `Gum_chewer`, `Pipe_smoker`, `Betel_chewer`, `Cigarette_smoker`, `Hot_foods_or_liquids`, `Sours`, `Cold_foods_or_liquids`, `Sweets`, `health_history_other`, `Are_you_pregnant`, `Nursing`, `Number_of_weeks`, `if_you_are_still_menstruating`, `Total_number_of_pregnancies`, `Age_at_beginning_of_periods`, `Number_of_births`, `Age_at_end_of_periods`, `Removal`, `Wound_treatment`, `Fillings`, `Sealants`, `Retainers`, `Braces`, `Cleaning`, `Polishing`, `Bridges`, `Dentures`, `Implants`, `Urgent_Treatment`, `Restorative_Care`, `Preventive_Care`, `treatment_need_other`, `Antibiotic`, `Sedative`, `Anti-inflammatory`, `drugs_prescribed_other`, `Caries`, `Initial`, `Dentine`, `Pulp_exposed`, `Periodontal_diseases`, `Gingivitis`, `Periodontitis`, `Lesions`, `Premalignant`, `Cancerous`, `Non_Cancerous`, `Malocclusion`, `Class_2_Division_1`, `Class_2_Division_2`, `Class_3`, `Fluorosis`, `Missing_Teeth`, `Dry_Mouth`, `Extra_Oral`, `Facial_issues`, `Swellings`, `dental_examination_other`, `Sensitivity`, `Tooth_decay`, `Fractured_teeth`, `Worn_fillings`, `Gum_disease`, `Worn_tooth_enamel`, `Exposed_tooth_root`, `Oropharyngeal_Cancer`, `Sores_that_bleed_easily_or_do_not_heal`, `Thick_or_hard_spot_or_lump`, `Roughened_or_crusted_area`, `Numbness_pain_or_tenderness`, `Change_in_the_way_your_teeth_fit_together_when_you_bite_down`, `dental_examination_comment`) VALUES ('73',1,0,0,0,0,1,0,0,0,0,0,0,1,0,0,0,1,0,'byurifrthyg ',1,0,5,2008,4,35,4,35,0,0,0,0,1,0,0,1,0,0,0,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `tbl_patient_dental_history` (`p_id`, `difficulty_in_chewing_your_food`, `chew_on_only_one_side_of_your_mouth`, `avoid_brushing_any_part_of_your_mouth_because_of_pain`, `gums_bleed_when_you_floss`, `gums_feel_swollen_or_tender`, `your_teeth_sensitive`, `hurt_when_you_chew_or_open_wide_to_take_a_bite`, `ever_noticed_slow_healing_sores_in_or_about_your_mouth`, `Have_you_had_a_blow_to_the_jaw`, `have_pain_in_the_f_j_j_t_t`, `Gum_chewer`, `Pipe_smoker`, `Betel_chewer`, `Cigarette_smoker`, `Hot_foods_or_liquids`, `Sours`, `Cold_foods_or_liquids`, `Sweets`, `health_history_other`, `Are_you_pregnant`, `Nursing`, `Number_of_weeks`, `if_you_are_still_menstruating`, `Total_number_of_pregnancies`, `Age_at_beginning_of_periods`, `Number_of_births`, `Age_at_end_of_periods`, `Removal`, `Wound_treatment`, `Fillings`, `Sealants`, `Retainers`, `Braces`, `Cleaning`, `Polishing`, `Bridges`, `Dentures`, `Implants`, `Urgent_Treatment`, `Restorative_Care`, `Preventive_Care`, `treatment_need_other`, `Antibiotic`, `Sedative`, `Anti-inflammatory`, `drugs_prescribed_other`, `Caries`, `Initial`, `Dentine`, `Pulp_exposed`, `Periodontal_diseases`, `Gingivitis`, `Periodontitis`, `Lesions`, `Premalignant`, `Cancerous`, `Non_Cancerous`, `Malocclusion`, `Class_2_Division_1`, `Class_2_Division_2`, `Class_3`, `Fluorosis`, `Missing_Teeth`, `Dry_Mouth`, `Extra_Oral`, `Facial_issues`, `Swellings`, `dental_examination_other`, `Sensitivity`, `Tooth_decay`, `Fractured_teeth`, `Worn_fillings`, `Gum_disease`, `Worn_tooth_enamel`, `Exposed_tooth_root`, `Oropharyngeal_Cancer`, `Sores_that_bleed_easily_or_do_not_heal`, `Thick_or_hard_spot_or_lump`, `Roughened_or_crusted_area`, `Numbness_pain_or_tenderness`, `Change_in_the_way_your_teeth_fit_together_when_you_bite_down`, `dental_examination_comment`) VALUES ('74',0,0,0,0,1,0,0,1,0,0,0,1,0,0,0,0,1,0,'kn',0,0,0,0,0,0,0,0,1,0,0,0,1,0,0,0,0,0,0,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `tbl_patient_dental_history` (`p_id`, `difficulty_in_chewing_your_food`, `chew_on_only_one_side_of_your_mouth`, `avoid_brushing_any_part_of_your_mouth_because_of_pain`, `gums_bleed_when_you_floss`, `gums_feel_swollen_or_tender`, `your_teeth_sensitive`, `hurt_when_you_chew_or_open_wide_to_take_a_bite`, `ever_noticed_slow_healing_sores_in_or_about_your_mouth`, `Have_you_had_a_blow_to_the_jaw`, `have_pain_in_the_f_j_j_t_t`, `Gum_chewer`, `Pipe_smoker`, `Betel_chewer`, `Cigarette_smoker`, `Hot_foods_or_liquids`, `Sours`, `Cold_foods_or_liquids`, `Sweets`, `health_history_other`, `Are_you_pregnant`, `Nursing`, `Number_of_weeks`, `if_you_are_still_menstruating`, `Total_number_of_pregnancies`, `Age_at_beginning_of_periods`, `Number_of_births`, `Age_at_end_of_periods`, `Removal`, `Wound_treatment`, `Fillings`, `Sealants`, `Retainers`, `Braces`, `Cleaning`, `Polishing`, `Bridges`, `Dentures`, `Implants`, `Urgent_Treatment`, `Restorative_Care`, `Preventive_Care`, `treatment_need_other`, `Antibiotic`, `Sedative`, `Anti-inflammatory`, `drugs_prescribed_other`, `Caries`, `Initial`, `Dentine`, `Pulp_exposed`, `Periodontal_diseases`, `Gingivitis`, `Periodontitis`, `Lesions`, `Premalignant`, `Cancerous`, `Non_Cancerous`, `Malocclusion`, `Class_2_Division_1`, `Class_2_Division_2`, `Class_3`, `Fluorosis`, `Missing_Teeth`, `Dry_Mouth`, `Extra_Oral`, `Facial_issues`, `Swellings`, `dental_examination_other`, `Sensitivity`, `Tooth_decay`, `Fractured_teeth`, `Worn_fillings`, `Gum_disease`, `Worn_tooth_enamel`, `Exposed_tooth_root`, `Oropharyngeal_Cancer`, `Sores_that_bleed_easily_or_do_not_heal`, `Thick_or_hard_spot_or_lump`, `Roughened_or_crusted_area`, `Numbness_pain_or_tenderness`, `Change_in_the_way_your_teeth_fit_together_when_you_bite_down`, `dental_examination_comment`) VALUES ('75',0,0,0,1,0,0,0,0,0,0,1,0,0,1,0,0,1,1,'',0,0,0,0,0,0,0,0,1,0,1,1,0,0,1,0,0,0,0,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `tbl_patient_dental_history` (`p_id`, `difficulty_in_chewing_your_food`, `chew_on_only_one_side_of_your_mouth`, `avoid_brushing_any_part_of_your_mouth_because_of_pain`, `gums_bleed_when_you_floss`, `gums_feel_swollen_or_tender`, `your_teeth_sensitive`, `hurt_when_you_chew_or_open_wide_to_take_a_bite`, `ever_noticed_slow_healing_sores_in_or_about_your_mouth`, `Have_you_had_a_blow_to_the_jaw`, `have_pain_in_the_f_j_j_t_t`, `Gum_chewer`, `Pipe_smoker`, `Betel_chewer`, `Cigarette_smoker`, `Hot_foods_or_liquids`, `Sours`, `Cold_foods_or_liquids`, `Sweets`, `health_history_other`, `Are_you_pregnant`, `Nursing`, `Number_of_weeks`, `if_you_are_still_menstruating`, `Total_number_of_pregnancies`, `Age_at_beginning_of_periods`, `Number_of_births`, `Age_at_end_of_periods`, `Removal`, `Wound_treatment`, `Fillings`, `Sealants`, `Retainers`, `Braces`, `Cleaning`, `Polishing`, `Bridges`, `Dentures`, `Implants`, `Urgent_Treatment`, `Restorative_Care`, `Preventive_Care`, `treatment_need_other`, `Antibiotic`, `Sedative`, `Anti-inflammatory`, `drugs_prescribed_other`, `Caries`, `Initial`, `Dentine`, `Pulp_exposed`, `Periodontal_diseases`, `Gingivitis`, `Periodontitis`, `Lesions`, `Premalignant`, `Cancerous`, `Non_Cancerous`, `Malocclusion`, `Class_2_Division_1`, `Class_2_Division_2`, `Class_3`, `Fluorosis`, `Missing_Teeth`, `Dry_Mouth`, `Extra_Oral`, `Facial_issues`, `Swellings`, `dental_examination_other`, `Sensitivity`, `Tooth_decay`, `Fractured_teeth`, `Worn_fillings`, `Gum_disease`, `Worn_tooth_enamel`, `Exposed_tooth_root`, `Oropharyngeal_Cancer`, `Sores_that_bleed_easily_or_do_not_heal`, `Thick_or_hard_spot_or_lump`, `Roughened_or_crusted_area`, `Numbness_pain_or_tenderness`, `Change_in_the_way_your_teeth_fit_together_when_you_bite_down`, `dental_examination_comment`) VALUES ('76',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `tbl_patient_dental_history` (`p_id`, `difficulty_in_chewing_your_food`, `chew_on_only_one_side_of_your_mouth`, `avoid_brushing_any_part_of_your_mouth_because_of_pain`, `gums_bleed_when_you_floss`, `gums_feel_swollen_or_tender`, `your_teeth_sensitive`, `hurt_when_you_chew_or_open_wide_to_take_a_bite`, `ever_noticed_slow_healing_sores_in_or_about_your_mouth`, `Have_you_had_a_blow_to_the_jaw`, `have_pain_in_the_f_j_j_t_t`, `Gum_chewer`, `Pipe_smoker`, `Betel_chewer`, `Cigarette_smoker`, `Hot_foods_or_liquids`, `Sours`, `Cold_foods_or_liquids`, `Sweets`, `health_history_other`, `Are_you_pregnant`, `Nursing`, `Number_of_weeks`, `if_you_are_still_menstruating`, `Total_number_of_pregnancies`, `Age_at_beginning_of_periods`, `Number_of_births`, `Age_at_end_of_periods`, `Removal`, `Wound_treatment`, `Fillings`, `Sealants`, `Retainers`, `Braces`, `Cleaning`, `Polishing`, `Bridges`, `Dentures`, `Implants`, `Urgent_Treatment`, `Restorative_Care`, `Preventive_Care`, `treatment_need_other`, `Antibiotic`, `Sedative`, `Anti-inflammatory`, `drugs_prescribed_other`, `Caries`, `Initial`, `Dentine`, `Pulp_exposed`, `Periodontal_diseases`, `Gingivitis`, `Periodontitis`, `Lesions`, `Premalignant`, `Cancerous`, `Non_Cancerous`, `Malocclusion`, `Class_2_Division_1`, `Class_2_Division_2`, `Class_3`, `Fluorosis`, `Missing_Teeth`, `Dry_Mouth`, `Extra_Oral`, `Facial_issues`, `Swellings`, `dental_examination_other`, `Sensitivity`, `Tooth_decay`, `Fractured_teeth`, `Worn_fillings`, `Gum_disease`, `Worn_tooth_enamel`, `Exposed_tooth_root`, `Oropharyngeal_Cancer`, `Sores_that_bleed_easily_or_do_not_heal`, `Thick_or_hard_spot_or_lump`, `Roughened_or_crusted_area`, `Numbness_pain_or_tenderness`, `Change_in_the_way_your_teeth_fit_together_when_you_bite_down`, `dental_examination_comment`) VALUES ('77',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `tbl_patient_dental_history` (`p_id`, `difficulty_in_chewing_your_food`, `chew_on_only_one_side_of_your_mouth`, `avoid_brushing_any_part_of_your_mouth_because_of_pain`, `gums_bleed_when_you_floss`, `gums_feel_swollen_or_tender`, `your_teeth_sensitive`, `hurt_when_you_chew_or_open_wide_to_take_a_bite`, `ever_noticed_slow_healing_sores_in_or_about_your_mouth`, `Have_you_had_a_blow_to_the_jaw`, `have_pain_in_the_f_j_j_t_t`, `Gum_chewer`, `Pipe_smoker`, `Betel_chewer`, `Cigarette_smoker`, `Hot_foods_or_liquids`, `Sours`, `Cold_foods_or_liquids`, `Sweets`, `health_history_other`, `Are_you_pregnant`, `Nursing`, `Number_of_weeks`, `if_you_are_still_menstruating`, `Total_number_of_pregnancies`, `Age_at_beginning_of_periods`, `Number_of_births`, `Age_at_end_of_periods`, `Removal`, `Wound_treatment`, `Fillings`, `Sealants`, `Retainers`, `Braces`, `Cleaning`, `Polishing`, `Bridges`, `Dentures`, `Implants`, `Urgent_Treatment`, `Restorative_Care`, `Preventive_Care`, `treatment_need_other`, `Antibiotic`, `Sedative`, `Anti-inflammatory`, `drugs_prescribed_other`, `Caries`, `Initial`, `Dentine`, `Pulp_exposed`, `Periodontal_diseases`, `Gingivitis`, `Periodontitis`, `Lesions`, `Premalignant`, `Cancerous`, `Non_Cancerous`, `Malocclusion`, `Class_2_Division_1`, `Class_2_Division_2`, `Class_3`, `Fluorosis`, `Missing_Teeth`, `Dry_Mouth`, `Extra_Oral`, `Facial_issues`, `Swellings`, `dental_examination_other`, `Sensitivity`, `Tooth_decay`, `Fractured_teeth`, `Worn_fillings`, `Gum_disease`, `Worn_tooth_enamel`, `Exposed_tooth_root`, `Oropharyngeal_Cancer`, `Sores_that_bleed_easily_or_do_not_heal`, `Thick_or_hard_spot_or_lump`, `Roughened_or_crusted_area`, `Numbness_pain_or_tenderness`, `Change_in_the_way_your_teeth_fit_together_when_you_bite_down`, `dental_examination_comment`) VALUES ('78',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'0',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
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
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('23','sfsdf',0,0,0,0,0,1,0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,1,'fsdfsdfsdfsdfsdf');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('24','dgdfg',0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,'sdfsdfs');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('25','sdfsdf',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,'asdasdasd');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('26','tyrty',0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,1,0,0,0,0,0,'gfdg');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('27','tyrty',0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,1,0,0,0,0,0,'gfdg');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('28','GFHFG',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,1,'DDFGDFGDFGDFGDFGDFGDFGDGFDFGDFGFDG');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('29','HGJGH',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,'HGJGH');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('30','0',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'0');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('32','sdsd',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,1,0,0,0,'sdsd');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('33','cvxcv',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,0,0,0,'cvxv');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('34','Hdgghhd jsggh',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,1,'Djhdjh');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('35','trytr',0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,'');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('36','tyuty',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,'tuyt');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('37','tyuty',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,'tuyt');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('38','tyuty',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,'tuyt');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('39','tyuty',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,'tuyt');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('40','0',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'0');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('41','0',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'0');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('42','sdfsd',0,0,0,0,0,0,0,1,0,1,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,'sdfsdf');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('43','erterte',0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,'fgfdgdg');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('44','hgfhfg',0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,'gfhfghf');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('45','hgfhfg',0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,1,0,0,1,1,0,0,0,0,'gfhfghf');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('46','hgfhfg',1,0,0,0,0,0,0,0,0,0,0,1,1,1,0,0,0,0,1,0,0,1,1,0,0,0,0,'gfhfghf');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('47','Regular checkup',0,0,0,0,0,0,0,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,'None');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('48','Regular checkup',0,0,0,0,0,0,0,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,'None');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('49','Regular checkup',0,0,0,0,0,0,0,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,'None');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('50','Regular checkup',0,0,0,0,0,0,0,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,'None');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('51','Regular checkup',0,0,0,0,0,0,0,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,'None');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('52','Regular checkup',0,0,0,0,0,0,0,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,'None');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('53','Regular checkup',0,0,0,0,0,0,0,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,'None');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('54','Regular checkup',0,0,0,0,0,0,0,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,'None');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('55','vtdrgtrv',1,1,0,1,1,1,0,0,0,0,0,1,1,1,0,0,1,0,0,1,1,1,1,0,0,1,1,'ggvtergrtdfv');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('56','vtdrgtrv',1,1,0,1,1,1,0,0,0,0,0,1,1,1,0,0,1,0,0,1,1,1,1,0,0,1,1,'ggvtergrtdfv');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('57','vtdrgtrv',1,1,0,1,1,1,0,0,0,0,0,1,1,1,0,0,1,0,0,1,1,1,1,0,0,1,1,'ggvtergrtdfv');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('58','vtdrgtrv',1,1,0,1,1,1,0,0,0,0,0,1,1,1,0,0,1,0,0,1,1,1,1,0,0,1,1,'ggvtergrtdfv');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('59','vtdrgtrv',1,1,0,1,1,1,0,0,0,0,0,1,1,1,0,0,1,0,0,1,1,1,1,0,0,1,1,'ggvtergrtdfv');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('60','fsdsdgv',1,1,0,1,1,0,0,1,1,1,1,1,0,1,0,0,1,0,0,1,1,1,1,0,0,1,0,'fvdsvsfd');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('61','',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('62','0',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'0');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('63','0',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'0');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('64','0',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'0');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('65','0',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'0');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('66','',0,0,0,0,0,0,0,0,0,0,0,1,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,'');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('67','0',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'0');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('68','',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('69','',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('70','miomio',1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('71','pain in the teeth',1,1,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,1,0,0,0,0,1,0,'lmkljl');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('72','miomio',1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('73','pain in the teeth',1,1,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,1,0,0,0,0,1,0,'lmkljl');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('74','njknilni',1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,'');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('75','Dental checkup',1,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,1,0,0,0,0,1,0,0,0,0,'');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('76','',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('77','checkup',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'');
INSERT INTO `tbl_patient_health` (`P_ID`, `Main_reason`, `diabetes`, `high_cholesterol`, `high_bood_pressure`, `low_bood_pressure`, `heartburn`, `anemia_bood_problems`, `swollen_ankies`, `depression_anxiety`, `tyroid_problems`, `shortness_of_breath`, `tonsilitis`, `asthma`, `stroke`, `sinus_problems`, `arthiritis`, `cancer`, `ulcers__colities`, `gastric_irritation`, `heart_disease_murmur_angine`, `kidney_bladder_problems`, `lung_problems_cough`, `liver_problems_hepatitis`, `headaches_migrains`, `neurological_problems`, `eye_disorder_glaucoma`, `ear_problems`, `seasonal_allergies`, `other`) VALUES ('78','0',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'0');
/*!40000 ALTER TABLE `tbl_patient_health` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_patients_queue`
--

DROP TABLE IF EXISTS `tbl_patients_queue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_patients_queue` (
  `P_ID` int(11) NOT NULL,
  `patient_first_name` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `patient_gender` char(1) CHARACTER SET utf8 DEFAULT NULL,
  `patient_main_reason` varchar(450) CHARACTER SET utf8 DEFAULT NULL,
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
INSERT INTO `tbl_patients_queue` (`P_ID`, `patient_first_name`, `patient_gender`, `patient_main_reason`, `check_status`, `channel_number`) VALUES (44,'Damitha','F','Regular checkup',1,1);
INSERT INTO `tbl_patients_queue` (`P_ID`, `patient_first_name`, `patient_gender`, `patient_main_reason`, `check_status`, `channel_number`) VALUES (45,'Eshan','F','Regular checkup',1,3);
INSERT INTO `tbl_patients_queue` (`P_ID`, `patient_first_name`, `patient_gender`, `patient_main_reason`, `check_status`, `channel_number`) VALUES (46,'Mahesh','F','Regular checkup',1,2);
INSERT INTO `tbl_patients_queue` (`P_ID`, `patient_first_name`, `patient_gender`, `patient_main_reason`, `check_status`, `channel_number`) VALUES (47,'Hasith','M','Regular checkup',1,5);
INSERT INTO `tbl_patients_queue` (`P_ID`, `patient_first_name`, `patient_gender`, `patient_main_reason`, `check_status`, `channel_number`) VALUES (48,'Malinga','M','Regular checkup',1,4);
INSERT INTO `tbl_patients_queue` (`P_ID`, `patient_first_name`, `patient_gender`, `patient_main_reason`, `check_status`, `channel_number`) VALUES (49,'Shamal','M','Regular checkup',1,8);
INSERT INTO `tbl_patients_queue` (`P_ID`, `patient_first_name`, `patient_gender`, `patient_main_reason`, `check_status`, `channel_number`) VALUES (50,'Sanjeewa','M','Regular checkup',1,7);
INSERT INTO `tbl_patients_queue` (`P_ID`, `patient_first_name`, `patient_gender`, `patient_main_reason`, `check_status`, `channel_number`) VALUES (51,'Sugathapala','M','Regular checkup',1,6);
INSERT INTO `tbl_patients_queue` (`P_ID`, `patient_first_name`, `patient_gender`, `patient_main_reason`, `check_status`, `channel_number`) VALUES (52,'Wiraj','M','Regular checkup',1,10);
INSERT INTO `tbl_patients_queue` (`P_ID`, `patient_first_name`, `patient_gender`, `patient_main_reason`, `check_status`, `channel_number`) VALUES (53,'Akila','M','Regular checkup',1,0);
INSERT INTO `tbl_patients_queue` (`P_ID`, `patient_first_name`, `patient_gender`, `patient_main_reason`, `check_status`, `channel_number`) VALUES (54,'Kamal','M','Regular checkup',1,13);
INSERT INTO `tbl_patients_queue` (`P_ID`, `patient_first_name`, `patient_gender`, `patient_main_reason`, `check_status`, `channel_number`) VALUES (55,'Nathasha','F','Regular checkup',1,0);
INSERT INTO `tbl_patients_queue` (`P_ID`, `patient_first_name`, `patient_gender`, `patient_main_reason`, `check_status`, `channel_number`) VALUES (56,'Nethmi','F','Tooth Removal',1,0);
INSERT INTO `tbl_patients_queue` (`P_ID`, `patient_first_name`, `patient_gender`, `patient_main_reason`, `check_status`, `channel_number`) VALUES (57,'Pubuduni','F','Tooth Removal',1,12);
INSERT INTO `tbl_patients_queue` (`P_ID`, `patient_first_name`, `patient_gender`, `patient_main_reason`, `check_status`, `channel_number`) VALUES (58,'Hasara','F','Tooth Removal',1,0);
INSERT INTO `tbl_patients_queue` (`P_ID`, `patient_first_name`, `patient_gender`, `patient_main_reason`, `check_status`, `channel_number`) VALUES (59,'Ushani','F','Tooth Removal',1,0);
INSERT INTO `tbl_patients_queue` (`P_ID`, `patient_first_name`, `patient_gender`, `patient_main_reason`, `check_status`, `channel_number`) VALUES (60,'Nathali','F','Tooth Removal',1,0);
INSERT INTO `tbl_patients_queue` (`P_ID`, `patient_first_name`, `patient_gender`, `patient_main_reason`, `check_status`, `channel_number`) VALUES (61,'Jayamali','F','Tooth Removal',1,11);
INSERT INTO `tbl_patients_queue` (`P_ID`, `patient_first_name`, `patient_gender`, `patient_main_reason`, `check_status`, `channel_number`) VALUES (62,'Chanushka','M','Tooth Removal',1,17);
INSERT INTO `tbl_patients_queue` (`P_ID`, `patient_first_name`, `patient_gender`, `patient_main_reason`, `check_status`, `channel_number`) VALUES (63,'Jayanika','F','Tooth Removal',1,0);
INSERT INTO `tbl_patients_queue` (`P_ID`, `patient_first_name`, `patient_gender`, `patient_main_reason`, `check_status`, `channel_number`) VALUES (64,'Asheni','F','Tooth Removal',1,14);
INSERT INTO `tbl_patients_queue` (`P_ID`, `patient_first_name`, `patient_gender`, `patient_main_reason`, `check_status`, `channel_number`) VALUES (65,'Rehansa','F','Tooth Removal',1,19);
INSERT INTO `tbl_patients_queue` (`P_ID`, `patient_first_name`, `patient_gender`, `patient_main_reason`, `check_status`, `channel_number`) VALUES (66,'Nuwan','M','Tooth Removal',1,15);
INSERT INTO `tbl_patients_queue` (`P_ID`, `patient_first_name`, `patient_gender`, `patient_main_reason`, `check_status`, `channel_number`) VALUES (67,'Upul','M','Regular checkup',1,16);
INSERT INTO `tbl_patients_queue` (`P_ID`, `patient_first_name`, `patient_gender`, `patient_main_reason`, `check_status`, `channel_number`) VALUES (68,'Sandakelum','M','Regular checkup',1,25);
INSERT INTO `tbl_patients_queue` (`P_ID`, `patient_first_name`, `patient_gender`, `patient_main_reason`, `check_status`, `channel_number`) VALUES (69,'Thilanka','M','Regular checkup',1,0);
INSERT INTO `tbl_patients_queue` (`P_ID`, `patient_first_name`, `patient_gender`, `patient_main_reason`, `check_status`, `channel_number`) VALUES (70,'Buddhika','M','Regular checkup',1,18);
INSERT INTO `tbl_patients_queue` (`P_ID`, `patient_first_name`, `patient_gender`, `patient_main_reason`, `check_status`, `channel_number`) VALUES (71,'Sanka','F','pain in the teeth',1,22);
INSERT INTO `tbl_patients_queue` (`P_ID`, `patient_first_name`, `patient_gender`, `patient_main_reason`, `check_status`, `channel_number`) VALUES (72,'Kumara','M','Regular checkup',1,20);
INSERT INTO `tbl_patients_queue` (`P_ID`, `patient_first_name`, `patient_gender`, `patient_main_reason`, `check_status`, `channel_number`) VALUES (73,'Daminda','F','pain in the teeth',1,0);
INSERT INTO `tbl_patients_queue` (`P_ID`, `patient_first_name`, `patient_gender`, `patient_main_reason`, `check_status`, `channel_number`) VALUES (74,'Iron','M','Regular checkup',1,23);
INSERT INTO `tbl_patients_queue` (`P_ID`, `patient_first_name`, `patient_gender`, `patient_main_reason`, `check_status`, `channel_number`) VALUES (75,'Debra ','F','Dental checkup',1,0);
INSERT INTO `tbl_patients_queue` (`P_ID`, `patient_first_name`, `patient_gender`, `patient_main_reason`, `check_status`, `channel_number`) VALUES (76,'Kavindi','M','Regular checkup',1,21);
INSERT INTO `tbl_patients_queue` (`P_ID`, `patient_first_name`, `patient_gender`, `patient_main_reason`, `check_status`, `channel_number`) VALUES (77,'Rohan','M','Regular checkup',1,0);
INSERT INTO `tbl_patients_queue` (`P_ID`, `patient_first_name`, `patient_gender`, `patient_main_reason`, `check_status`, `channel_number`) VALUES (78,'Saman','M','Regular checkup',1,24);
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
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (1,'Do you have difficulty in chewing your food?');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (2,'Do you chew on only one side of your mouth?');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (3,'Do you avoid brushing any part of your mouth because of pain?');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (4,'Do your gums bleed when you floss?');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (5,'Do your gums feel swollen or tender?');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (6,'Are your teeth sensitive?');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (7,'Does it hurt when you chew or open wide to take a bite?');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (8,'Have you ever noticed slow-healing sores in or about your mouth?');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (9,'Have you had a blow to the jaw (trauma)?');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (10,'Do you have pain in the face, cheeks, jaws, joints, throat, or temples?');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (11,'Gum chewer?');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (12,'Pipe smoker?');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (13,'Betel chewer?');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (14,'Cigarette smoker?');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (15,'Hot foods or liquids?');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (16,'Sours?');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (17,'Cold foods or liquids?');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (18,'Sweets?');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (19,'Are you pregnant?');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (20,'Nursing?');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (21,'Number of weeks');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (22,'Date of last menstrual period if you are still menstruating');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (23,'Total number of pregnancies');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (24,'Age at beginning of periods (menstruation)');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (25,'Number of births');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (26,'Age at end of periods (menopause)');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (27,'Removal');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (28,'Wound treatment');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (29,'Fillings');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (30,'Sealants');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (31,'Retainers');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (32,'Braces');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (33,'Cleaning');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (34,'Polishing');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (35,'Bridges');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (36,'Dentures');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (37,'Implants');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (38,'Urgent Treatment');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (39,'Restorative Care');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (40,'Preventive Care');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (41,'Antibiotic');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (42,'Sedative');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (43,'Anti-inflammatory');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (44,'Caries');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (45,'Initial');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (46,'Dentine');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (47,'Pulp exposed');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (48,'Periodontal diseases');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (49,'Gingivitis');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (50,'Periodontitis');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (51,'Lesions');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (52,'Premalignant');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (53,'Cancerous');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (54,'Non Cancerous');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (55,'Malocclusion');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (56,'Class 2 Division 1');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (57,'Class 2 Division 2');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (58,'Class 3');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (59,'Fluorosis');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (60,'Missing Teeth');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (61,'Dry Mouth');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (62,'Extra Oral');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (63,'Facial issues');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (64,'Swellings');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (65,'Sensitivity');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (66,'Tooth decay');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (67,'Fractured teeth');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (68,'Worn fillings');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (69,'Gum disease');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (70,'Worn tooth enamel');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (71,'Exposed tooth root');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (72,'Oropharyngeal Cancer');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (73,'Sores that bleed easily or do not heal');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (74,'Thick or hard spot or lump');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (75,'Roughened or crusted area');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (76,'Numbness, pain or tenderness');
INSERT INTO `tbl_question` (`Q_ID`, `Question`) VALUES (77,'Change in the way your teeth fit together when you bite down');
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

-- Dump completed on 2015-07-23 13:21:45

CREATE DATABASE  IF NOT EXISTS `a5344960_knwbase` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `a5344960_knwbase`;
-- MySQL dump 10.13  Distrib 5.5.44, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: a5344960_knwbase
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
-- Table structure for table `diesease`
--

DROP TABLE IF EXISTS `diesease`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `diesease` (
  `diesease_id` int(11) NOT NULL AUTO_INCREMENT,
  `diesease_name` varchar(255) NOT NULL,
  `description` text,
  `medication_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`diesease_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `diesease`
--

LOCK TABLES `diesease` WRITE;
/*!40000 ALTER TABLE `diesease` DISABLE KEYS */;
/*!40000 ALTER TABLE `diesease` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `knwbase_category`
--

DROP TABLE IF EXISTS `knwbase_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `knwbase_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `parent_category` int(11) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `knwbase_category`
--

LOCK TABLES `knwbase_category` WRITE;
/*!40000 ALTER TABLE `knwbase_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `knwbase_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `knwbase_img`
--

DROP TABLE IF EXISTS `knwbase_img`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `knwbase_img` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `image_name` varchar(255) NOT NULL,
  `image_path` text NOT NULL,
  `date_added` datetime DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `comment` text,
  `description` text,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `knwbase_img`
--

LOCK TABLES `knwbase_img` WRITE;
/*!40000 ALTER TABLE `knwbase_img` DISABLE KEYS */;
/*!40000 ALTER TABLE `knwbase_img` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `knwbase_info`
--

DROP TABLE IF EXISTS `knwbase_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `knwbase_info` (
  `info_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `disease_id` int(11) NOT NULL,
  `treatment` text,
  `reason` text,
  `medication_id` int(11) NOT NULL,
  `date_added` datetime DEFAULT NULL,
  PRIMARY KEY (`info_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `knwbase_info`
--

LOCK TABLES `knwbase_info` WRITE;
/*!40000 ALTER TABLE `knwbase_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `knwbase_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medication`
--

DROP TABLE IF EXISTS `medication`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `medication` (
  `medication_id` int(11) NOT NULL AUTO_INCREMENT,
  `medication_name` varchar(255) NOT NULL,
  `description` text,
  PRIMARY KEY (`medication_id`)
) ENGINE=InnoDB AUTO_INCREMENT=793 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medication`
--

LOCK TABLES `medication` WRITE;
/*!40000 ALTER TABLE `medication` DISABLE KEYS */;
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (1,'Accolate  - Zafirlukast',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (2,'Accuhaler  - Salbutamol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (3,'Accupro  - Quinapril',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (4,'Acepril  - Captopril',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (5,'Acetaminophen  - Paracetamol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (6,'Achromycin  - Tetracycline',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (7,'Acupan  - Nefopam hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (8,'Adactone  - Spironolactone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (9,'Adalat  - Nifedipine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (10,'Adizem  - Diltiazem',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (11,'Adrenaline in dental local anaesthetic solutions  - Epinephrine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (12,'AeroBec  - Beclometasone dipropionate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (13,'Aerocrom  - Sodium cromoglicate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (14,'Aerolin  - Salbutamol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (15,'Airomir  - Salbutamol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (16,'Akineton  - Biperiden',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (17,'Aldomet  - Methyldopa',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (18,'Algicon  - Alginates',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (19,'Alkeran  - Melphalan',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (20,'Allegron  - Nortriptyline',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (21,'Alphaparin  - Certoparin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (22,'Alu-cap  - Aluminium hydroxide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (23,'Alupent  - Orciprenaline sulphate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (24,'Alvercol  - Alverine citrate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (25,'Amaryl  - Glimepiride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (26,'Ametop  - Amethocaine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (27,'Amias  - Candesartan',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (28,'Amikin  - Amikacin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (29,'Amoxil  - Amoxicillin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (30,'Amylobarbitone  - Amobarbital',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (31,'Anabact  - Metronidazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (32,'Anafranil  - Clomipramine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (33,'Ancotil  - Flucytosine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (34,'Androcur  - Cyproterone acetate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (35,'Anexate  - Flumazenil',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (36,'Angiopine  - Nifedipine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (37,'Angitil  - Diltiazem',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (38,'Anquil  - Benperidol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (39,'Antabuse  - Disulfiram',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (40,'Antepsin  - Sucralfate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (41,'Anturan  - Sulfinpyrazone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (42,'Apresoline  - Hydralazine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (43,'Aprovel  - Irbesartan',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (44,'Aricept  - Donepezil hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (45,'Arimidex  - Anastrozole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (46,'Arosmasin  - Exemestan',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (47,'Arpicolin  - Procyclidine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (48,'Arythmol  - Propafenone hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (49,'Asacol  - Mesalazine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (50,'Asendis  - Amoxapine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (51,'AsmaBec  - Beclometasone dipropionate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (52,'Asmasal  - Salbutamol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (53,'Aspirin  - Acetylsalicylic acid',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (54,'Atarax  - Hydroxyzine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (55,'Atrovent  - Ipratropium bromide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (56,'Augmentin  - Co-amoxiclav',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (57,'Augmentin-Duo  - Co-amoxiclav',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (58,'Avloclor  - Chloroquine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (59,'Avomine  - Promethazine teoclate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (60,'Axid  - Nizatidine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (61,'Azactam  - Aztreonam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (62,'Azopt  - Brinzolamide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (63,'BCNU  - Carmustine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (64,'Bambec  - Bambuterol hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (65,'Baratol  - Indoramin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (66,'Baxan  - Cefadroxil',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (67,'Becloforte  - Beclometasone dipropionate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (68,'Becodisks  - Beclometasone dipropionate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (69,'Beconase  - Beclometasone dipropionate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (70,'Becotide  - Beclometasone dipropionate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (71,'Benadryl allergy relief  - Acrivastine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (72,'Benemid  - Probenecid',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (73,'Berotec  - Fenoterol hydrobromide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (74,'Beta-cardone  - Sotalol hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (75,'Betadine  - Povidone-iodine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (76,'Betaloc  - Metoprolol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (77,'Betnesol  - Betamethasone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (78,'Bicillin  - Procaine penicillin/Procaine benzylpenicillin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (79,'Bioplex  - Carbenoxolone sodium',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (80,'Bioral gel  - Carbenoxolone sodium',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (81,'Biorphen  - Orphenadrine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (82,'Bocasan  - Sodium perborate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (83,'Bonefos  - Sodium clodronate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (84,'Botox  - Botulinum A Toxin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (85,'Bricanyl  - Terbutaline sulphate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (86,'BritLofex  - Lofexadine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (87,'Britaject  - Apomorphine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (88,'Broflex  - Benzhexol hydrochloride/ Trihexyphenidyl hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (89,'Bronchodil  - Reproterol hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (90,'Brufen  - Ibuprofen',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (91,'Buccastem  - Prochlorperazine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (92,'Budenofalk  - Budesonide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (93,'Burinex  - Bumetanide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (94,'Buscopan  - Hyoscine butylbromide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (95,'Buspar  - Buspirone hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (96,'Butacote  - Phenylbutazone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (97,'Butobarbitone  - Butobarbital',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (98,'Cabaser  - Cabergoline',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (99,'Cafegot  - Ergotamine tartrate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (100,'Calcitare  - Calcitonin-porcine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (101,'Calcort  - Deflazacort',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (102,'Calicard  - Diltiazem',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (103,'Calpol  - Paracetamol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (104,'Calsynar  - Salcatonin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (105,'Camcolit  - Lithium salts',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (106,'Campral EC  - Acamprosate calcium',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (107,'Campto  - Irinotecan hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (108,'Capastat  - Capreomycin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (109,'Capoten  - Captopril',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (110,'Cardene  - Nicardipine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (111,'Cardura  - Doxazosin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (112,'Catapres  - Clonidine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (113,'Cefrom  - Cefpirome',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (114,'Cefzil  - Cefprozil',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (115,'Celance  - Pergolide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (116,'Celebrex  - Celecoxib',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (117,'Celevac  - Methylcellulose',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (118,'Cellcept  - Mycophenolate mofetil',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (119,'Ceporex  - Cefalexin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (120,'Cerubidin  - Daunorubicin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (121,'Chirocain  - Levobupivacaine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (122,'Chloral elixir  - Chloral hydrate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (123,'Chloral mixture  - Chloral hydrate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (124,'Chlorohex  - Chlorhexidine gluconate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (125,'Chloromycetin  - Chloramphenicol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (126,'Cidomycin  - Gentamicin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (127,'Cinobac  - Cinoxacin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (128,'Cipramil  - Citalopram',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (129,'Ciproxin  - Ciprofloxacin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (130,'Citanest  - Prilocaine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (131,'Claforan  - Cefotaxime',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (132,'Clarityn  - Loratadine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (133,'Clexane  - Enoxaparin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (134,'Clinoril  - Sulindac',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (135,'Clomid  - Clomifene',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (136,'Clopixol acuphase  - Zuclopenthixol acetate    ',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (137,'Clopixol conc.  ? Zuclopenthixol decanoate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (138,'Clopixol  - Zuclopenthixol decanoate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (139,'Clotam  - Tolfenamic acid',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (140,'Clozaril  - Clozapine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (141,'Co-danthromer  - Dantron',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (142,'Co-danthrusate  - Dantron',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (143,'Cogentin  - Benzatropine mesilate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (144,'Colazide  - Balsalazide sodium',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (145,'Colestid  - Colestipol hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (146,'Colofac  - Mebeverine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (147,'Colomycin  - Colistin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (148,'Colpermin  - Peppermint oil',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (149,'Comtess  - Entacapone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (150,'Concordin  - Protriptyline hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (151,'Contraceptive Pill  - Progestogen',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (152,'Convulex  - Valproate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (153,'Coracten  - Nifedipine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (154,'Cordarone  - Amiodarone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (155,'Corday  - Nifedipine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (156,'Cordilox  - Verapamil',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (157,'Corfaretic  - Nadolol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (158,'Corsodyl  - Chlorhexidine gluconate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (159,'Cortisyl  - Cortisone acetate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (160,'Cosopt  - Dorzolamide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (161,'Cozaar  - Losartan',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (162,'Creon  - Pancreatin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (163,'Crixivan  - Indinavir',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (164,'Cromogen Easi-Breathe  - Sodium cromoglicate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (165,'Crystapen Penicillin V  - Penicillin G',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (166,'Crystapen  - Benzyl penicillin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (167,'Cyklokapron  - Tranexamic acid',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (168,'Cymevene  - Ganciclovir',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (169,'Cystrin  - Oxybutynin hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (170,'Cytosar  - Cytarabine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (171,'Cytotec  - Misoprostol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (172,'DDAVP  - Desmopressin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (173,'DF118  - Dihydrocodeine tartrate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (174,'Daktarin  - Miconazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (175,'Dalacin C  - Clindamycin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (176,'Dalmane  - Flurazepam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (177,'Daonil  - Glibenclamide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (178,'Daraprim  - Pyramethamine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (179,'De-Noltab  - Tripotassium dicitratobismuthate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (180,'Deca-Durabolin  - Nandrolone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (181,'Decadron  - Dexamethasone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (182,'Depixol Conc  - Flupentixol decanoate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (183,'Depixol Low Volume  - Flupentixol decanoate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (184,'Depixol  - Flupentixol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (185,'Depixol  - Flupentixol decanoate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (186,'Deseril  - Methysergide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (187,'Desmotabs  - Desmopressin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (188,'Destolit  - Ursodeoxycholic acid',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (189,'Deteclo  - Tetracycline',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (190,'Detrunorm  - Propiverine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (191,'Detrusitol  - Tolterodine tartrate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (192,'Dexedrine  - Dexamfetamine sulphate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (193,'Dialar  - Diazepam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (194,'Diamicron  - Gliclazide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (195,'Diazemuls  - Diazepam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (196,'Diconal  - Dipipanone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (197,'Diflucan  - Fluconazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (198,'Dilzem  - Diltiazem',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (199,'Dimetriose  - Gestrinone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (200,'Dimotane  - Brompheniramine maleate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (201,'Dioctyl  - Docusate sodium',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (202,'Diovan  - Valsartan',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (203,'Dipentum  - Olsalazine sodium',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (204,'Diprivan  - Propofol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (205,'Disipal  - Orphenadrine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (206,'Diskhaler  - Fluticasone propionate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (207,'Distaclor MR  - Cefaclor',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (208,'Distaclor  - Cefaclor',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (209,'Distamine  - Penicillamine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (210,'Dixarit  - Clonidine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (211,'Docusol  - Docusate sodium',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (212,'Dolmatil  - Sulpiride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (213,'Dolobid  - Diflunisal',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (214,'Dostinex  - Cabergoline',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (215,'Dozic  - Haloperidol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (216,'Dramamine  - Dimenhydrinate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (217,'Droleptan  - Droperidol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (218,'Dumicoat  - Miconazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (219,'Durogesic  - Fentanyl',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (220,'Duromine  - Phentermine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (221,'Dutonin  - Nefazodone hydrochloride ',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (222,'Dyspamet  - Cimetidine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (223,'Dysport  - Botulinum A Toxin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (224,'Dytac  - Triamterene',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (225,'Easi-breathe  - Salbutamol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (226,'Edronax  - Reboxetine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (227,'Efcortesol  - Hydrocortisone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (228,'Efexor  - Venlafaxine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (229,'Efudix  - Fluorouracil',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (230,'Eldepryl  - Selegeline hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (231,'Eldisine  - Vindesine sulphate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (232,'Eloxatin  - Oxaliplatin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (233,'Elyzol Flagyl  - Metronidazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (234,'Emcor  - Bisoprolol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (235,'Emeside  - Ethosuximide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (236,'Emflex  - Acemetacin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (237,'Endoxana  - Cyclophosphamide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (238,'Entocort  - Budesonide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (239,'Epanutin  - Phenytoin sodium',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (240,'Epilim  - Valproate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (241,'Epinephrine in dental local anaesthetic solutions  - Adrenaline',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (242,'Epivir  - Lamivudine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (243,'Equagesic  - Meprobamate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (244,'Equasym  - Methylphenidate hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (245,'Erymax  - Erythromycin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (246,'Erythrocin  - Erythromycin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (247,'Erythroped  - Erythromycin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (248,'Eskazole  - Albendazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (249,'Estracyt  - Estramustine phosphate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (250,'Eucardic  - Carvedilol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (251,'Eudemine  - Diazoxide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (252,'Euglucon  - Glibenclamide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (253,'Evohaler  - Salbutamol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (254,'Exelon  - Rivastigmine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (255,'Famvir  - Famciclovir',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (256,'Fansidar  - Pyramethamine with Sulfadoxine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (257,'Fasigyn  - Tinidazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (258,'Faverin  - Fluvoxamine maleate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (259,'Feldene  - Piroxicam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (260,'Femara  - Letrozole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (261,'Fenbid  - Ibuprofen',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (262,'Fenopron  - Fenoprofen',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (263,'Fentazin  - Perphenazine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (264,'Feospan  - Ferrous sulphate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (265,'Ferrograd  - Ferrous sulphate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (266,'Fersaday  - Ferrous fumarate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (267,'Fersamal  - Ferrous fumarate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (268,'Fletcher\'s Enemette  - Docusate sodium',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (269,'Flixonase  - Fluticasone propionate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (270,'Flixotide  - Fluticasone propionate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (271,'Florinef  - Fludrocortisone acetate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (272,'Floxapen  - Flucloxacillin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (273,'Fluanxol  - Flupentixol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (274,'Fludara  - Fludarabine phosphate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (275,'Foradil  - Eformoterol fumarate/Formoterol fumarate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (276,'Fortipine  - Nifedipine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (277,'Fortovase  - Saquinavir',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (278,'Fortral  - Pentazocine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (279,'Fortum  - Ceftazidime',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (280,'Fosamax  - Alendronic acid',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (281,'Foscavir  - Foscarnet sodium',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (282,'Fragmin  - Dalteparin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (283,'Frisium  - Clobazam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (284,'Froben  - Flurbiprofen',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (285,'Fucidin  - Sodium fusidate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (286,'Fulcin  - Griseofulvin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (287,'Fungilin  - Amphotericin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (288,'Fungizone  - Amphotericin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (289,'Furadantin  - Nitrofurantoin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (290,'Furamide  - Diloxanide furoate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (291,'Fybogel  - Ispaghula husk',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (292,'Fybogel  - Mebeverine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (293,'Gabitril  - Tiagebine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (294,'Galenphol  - Pholcodine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (295,'Galpseud  - Pseudoephedrine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (296,'Gamanil  - Lofepramine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (297,'Gastrobid Continus  - Metoclopramide hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (298,'Gastrocote  - Alginates',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (299,'Gastrocote  - Aluminium hydroxide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (300,'Gastrocote  - Magnesium trisilicate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (301,'Gastromax  - Metoclopramide hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (302,'Gaviscon Maalox  - Aluminium hydroxide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (303,'Gaviscon  - Alginates',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (304,'Gemzar  - Gemcitabine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (305,'Genotropin  - Somatropin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (306,'Genticin  - Gentamicin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (307,'Glandosane  - Saliva substitute',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (308,'Glibenese  - Glipizide    429',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (309,'Glucobay  - Acarbose',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (310,'Glucophage  - Metformin hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (311,'Glurenorm  - Gliquidone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (312,'Gopten  - Trandolapril',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (313,'Grisovin  - Griseofulvin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (314,'Haldol decanoate  - Haloperidol decanoate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (315,'Haldol  - Haloperidol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (316,'Half Sinemet  - Co-careldopa',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (317,'HeliClear  - Lansoprazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (318,'Hemineverin  - Clomethiazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (319,'Heroin hydrochloride  - Diamorphine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (320,'Hexopal  - Nicotinic acid',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (321,'Hiprex  - Methenamine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (322,'Hivid  - Zalcitabine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (323,'Honvan  - Fosfestrol tetrasodium',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (324,'Hormone Replacement Therapy  - Oestrogen',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (325,'Human Mixtard  - Biphasic isophane insulin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (326,'Human Monotard  - Insulin Zinc suspension',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (327,'Humatrope  - Somatropin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (328,'Humulin Lente  - Insulin Zinc suspension',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (329,'Humulin  - Soluble insulin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (330,'Hycamtin  - Topotecan',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (331,'Hydrocortone  - Hydrocortisone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (332,'Hygroton  - Chlorthalidone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (333,'Hypnovel  - Midazolam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (334,'Hypovase  - Prazosin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (335,'Hypurin  - Soluble insulin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (336,'Hytrin  - Terazosin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (337,'Ikorel  - Nicorandil',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (338,'Ilosone  - Erythromycin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (339,'Imigran  - Sumatriptan',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (340,'Imodium plus  - Loperamide hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (341,'Imodium  - Loperamide hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (342,'Imunovir  - Inosine pranobex',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (343,'Imuran  - Azathioprine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (344,'Inderal  - Propanolol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (345,'Indocid  - Indomethacin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (346,'Innohep  - Tinzaparin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (347,'Innovace  - Enalapril',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (348,'Insuman  - Biphasic isophane insulin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (349,'Intal  - Sodium cromoglicate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (350,'Invirase  - Saquinavir',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (351,'Ionamin  - Phentermine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (352,'Isogel  - Ispaghula husk',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (353,'Istin  - Amlodipine besylate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (354,'Kannasyn  - Kanamycin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (355,'Kaolin mixture  - Kaolin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (356,'Kefadim  - Ceftazidime',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (357,'Kefadol  - Cefamandole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (358,'Keflex  - Cefalexin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (359,'Kefzol  - Cefazolin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (360,'Kemadrin  - Procyclidine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (361,'Kemicetine  - Chloramphenicol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (362,'Kenalog  - Triamcinolone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (363,'Kinidin  - Quinidine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (364,'Klaricid XL  - Clarithromycin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (365,'Klaricid  - Clarithromycin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (366,'Kolanticon  - Dicyclomine hydrochloride/Dicycloverine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (367,'Konsyl  - Ispaghula husk',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (368,'Kytril  - Granisetron',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (369,'Lamictal  - Lamotrigine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (370,'Lamisil  - Terbinafine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (371,'Lamprene  - Clofazimine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (372,'Lanoxin  - Digoxin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (373,'Lanvis  - Tioguanine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (374,'Largactil  - Chlorpromazine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (375,'Lariam  - Mefloquine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (376,'Lasix  - Frusemide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (377,'Lasma  - Theophylline',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (378,'Lederfen  - Fenbufen',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (379,'Ledermycin  - Demeclocycline hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (380,'Lentaron  - Formestane',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (381,'Lentizol  - Amitriptyline hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (382,'Lescol  - Fluvastatin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (383,'Leukeran  - Chlorambucil',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (384,'Leustat  - Cladribine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (385,'Lexotan  - Bromazepam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (386,'Librium  - Chlordiazepoxide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (387,'Lignospan  - Lidocaine/ Lignocaine Dental preparations ',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (388,'Lignostab  - Lidocaine/Lignocaine Dental preparations',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (389,'Limclair  - Trisodium edetate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (390,'Lingraine  - Ergotamine tartrate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (391,'Lipitor  - Atorvastatin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (392,'Lipobay  - Cerivastatin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (393,'Lipostat  - Parvastatin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (394,'Liskonum  - Lithium salts',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (395,'Litarex  - Lithium salts',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (396,'Lodine  - Etodolac',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (397,'Lomotil  - Co-phenotrope',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (398,'Loniten  - Minoxidil',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (399,'Lopressor  - Metoprolol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (400,'Losec  - Omeprazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (401,'Loxapac  - Loxapine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (402,'Luborant  - Saliva substitute',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (403,'Ludiomil  - Maprotiline hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (404,'Lustral  - Sertraline',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (405,'MST  - Morphine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (406,'Maalox TC  - Aluminium hydroxide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (407,'Macrobid  - Nitrofurantoin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (408,'Macrodantin  - Nitrofurantoin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (409,'Madopar  - Co-beneldopa',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (410,'Magnapen  - Co-fluampicil',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (411,'Maloprim  - Pyramethamine with Dapsone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (412,'Malorone  - Proguanil hydrochloride with Atovaquone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (413,'Manerix  - Moclobemide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (414,'Manevac  - Senna',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (415,'Marcain  - Bupivacaine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (416,'Maxalt  - Rizatriptan',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (417,'Maxolon  - Metoclopramide hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (418,'Medrone  - Methylprednisolone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (419,'Mefoxin  - Cefoxitin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (420,'Melleril  - Thioridazine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (421,'Meptid  - Meptazinol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (422,'Merbentyl  - Dicyclomine hydrochloride/Dicycloverine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (423,'Merocet  - Cetylpyridinium chloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (424,'Meronem  - Meropenem',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (425,'Methadose  - Methadone hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (426,'Metrogel  - Metronidazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (427,'Metrolyl  - Metronidazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (428,'Metrotop  - Metronidazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (429,'Micardis  - Telmisartan',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (430,'Mictral  - Nalidixic acid',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (431,'Midrid  - Isometheptene mucate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (432,'Migranal  - Dihydroergotamine mesilate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (433,'Migril  - Ergotamine tartrate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (434,'Minocin MR  - Minocycline',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (435,'Mintec  - Peppermint oil',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (436,'Mintezol  - Tiabendazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (437,'Mirapexin  - Pramipexole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (438,'Mistamine  - Mizolastine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (439,'Mitoxana  - Ifosfamide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (440,'Mizollen  - Mizolastine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (441,'Mobic  - Meloxicam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (442,'Mobiflex  - Tenoxicam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (443,'Modecate  - Fluphenazine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (444,'Moditen  - Fluphenazine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (445,'Mogadon  - Nitrazepam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (446,'Molipaxin  - Trazodone hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (447,'Monocor  - Bisoprolol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (448,'Monotrim  - Trimethoprim',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (449,'Monovent  - Terbutaline sulphate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (450,'Motens  - Lacidipine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (451,'Motilium  - Domperidone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (452,'Motipress  - Nortriptyline',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (453,'Motival  - Nortriptyline',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (454,'Movicol  - Macrogols',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (455,'Mucogel  - Aluminium hydroxide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (456,'Mycobutin  - Rifabutin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (457,'Myleran  - Busulphan',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (458,'Myotonine  - Bethanechol chloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (459,'Mysoline  - Primidone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (460,'Nalcrom  - Sodium cromoglicate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (461,'Nalorex  - Naltrexone hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (462,'Naprosyn  - Naproxen',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (463,'Naramig  - Naratriptan',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (464,'Nardil  - Phenelzine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (465,'Naropin  - Ropivacaine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (466,'Narphen  - Phenazocine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (467,'Natrillix  - Indapamide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (468,'Navelbine  - Vinorelbine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (469,'Navoban  - Tropisetron',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (470,'Nebcin  - Tobramycin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (471,'Nebules  - Fluticasone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (472,'propionate/Salbutamol    431',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (473,'Negram  - Nalidixic acid',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (474,'Neo-Mercazole  - Carbimazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (475,'Neoral  - Ciclosporin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (476,'Netillin  - Netilmicin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (477,'Neulactil  - Pericyazine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (478,'Neurontin  - Gabapentin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (479,'Neutrexin  - Trimetrexate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (480,'NiQuitin CQ  - Nicotine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (481,'Nicorette  - Nicotine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (482,'Nicotinell  - Nicotine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (483,'Niferex  - Polysaccharide-iron complex',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (484,'Nimotop  - Nimodipine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (485,'Nivaquine  - Chloroquine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (486,'Nivemycin  - Neomycin sulphate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (487,'Nizoral  - Ketoconazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (488,'Nolvadex  - Tamoxifen',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (489,'Nootropil  - Piracetam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (490,'Norgalax Micro-enema  - Docusate sodium',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (491,'Normacol  - Sterculia',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (492,'Norprolac  - Quinagolide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (493,'Norvir  - Ritonavir',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (494,'Novantrone  - Mitoxantrone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (495,'Nozinan  - Levomepromazine/ Methotrimeprazine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (496,'Nozinan  - Methotrimeprazine/ Levomepromazine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (497,'Nuelin  - Theophylline',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (498,'Nurofen  - Ibuprofen',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (499,'Nutrizym  - Pancreatin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (500,'Nystan  - Nystatin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (501,'Oncovin  - Vincristine sulphate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (502,'Optimax  - Tryptophan',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (503,'Optimine  - Azatadine maleate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (504,'OrLAAM  - Levacetylmethadol hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (505,'Oralbalance  - Saliva substitute',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (506,'Oraldene  - Hexetidine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (507,'Oramorph  - Morphine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (508,'Orap  - Pimozide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (509,'Orelox  - Cefpodoxime',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (510,'Orgaran  - Danaparoid',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (511,'Orudis  - Ketoprofen',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (512,'Oxis  - Eformoterol fumarate/Formoterol fumarate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (513,'Oxivent  - Oxitropium bromide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (514,'Palfium  - Dextromoramide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (515,'Palladone  - Hydromorphone hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (516,'Paludrine  - Proguanil hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (517,'Paludrine/Avoclor  - Chloroquine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (518,'Panadol  - Paracetamol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (519,'Pancrease  - Pancreatin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (520,'Pancrex  - Pancreatin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (521,'Paraplatin  - Carboplatin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (522,'Pariet  - Rabeprazole sodium',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (523,'Parlodel  - Bromocriptine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (524,'Parnate  - Tranylcypromine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (525,'Penbritin  - Ampicillin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (526,'Penicillin G  - Benzyl penicillin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (527,'Penicillin V  - Phenoxymethyl penicillin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (528,'Pentacarinat  - Pentamidine isethionate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (529,'Pentasa  - Mesalazine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (530,'Pentostam  - Sodium stibogluconate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (531,'Pepcid  - Famotidine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (532,'Peptac  - Alginates',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (533,'Perdix  - Moexipril',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (534,'Periactin  - Cyproheptadine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (535,'Peroxyl  - Hydrogen peroxide mouthwash',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (536,'Persantin  - Dipyridamole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (537,'Pharmorubicin  - Epirubicin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (538,'Phenergan  - Promethazine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (539,'Phyllocontin Continus  - Aminophylline',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (540,'Physeptone  - Methadone hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (541,'Physiotens  - Moxonidine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (542,'Piportil Depot  - Pipotiazine palmitate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (543,'Piriton  - Chlorphenamine maleate / Chlorpheniramine maleate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (544,'Pitressin  - Vasopressin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (545,'Plavix  - Clopidogrel',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (546,'Plendil  - Felodipine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (547,'Plesmet  - Ferrous glycine sulphate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (548,'Ponstan  - Mefenamic acid',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (549,'Pork Mixtard  - Biphasic isophane insulin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (550,'Prepulsid  - Cisapride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (551,'Prescal  - Isradipine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (552,'Preservex  - Aceclofenac',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (553,'Priadel  - Lithium salts',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (554,'Priadel: Li-Liquid  - Lithium salts 432   ',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (555,'Primacor  - Milrinone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (556,'Primalan  - Mequitazine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (557,'Primaxin  - Imipenem with cilastatin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (558,'Pripsen  - Piperazine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (559,'Pro Epanutin  - Fosphenytoin sodium',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (560,'Pro-Viron  - Mesterolone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (561,'Pro-banthine  - Propantheline bromide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (562,'Prograf  - Tacrolimus',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (563,'Prominal  - Methylphenobarbital',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (564,'Pronestyl  - Procainamide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (565,'Propaderm  - Beclometasone dipropionate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (566,'Proscar  - Finasteride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (567,'Prothiaden  - Dosulepin hydrochloride/Dothiepin hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (568,'Protium  - Pantoprazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (569,'Provigil  - Modafinil',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (570,'Prozac  - Fluoxetine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (571,'Pulmicort  - Budesonide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (572,'Pulmozyne  - Dornase alpha',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (573,'Puri-Nethol  - Mercaptopurine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (574,'Pylorid  - Ranitidine bismuth citrate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (575,'Pyrogastrone  - Carbenoxolone sodium',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (576,'Questran  - Cholestyramine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (577,'Quinalbarbitone {[Tuinal]}  -Secobarbital',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (578,'Qvar  - Beclometasone dipropionate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (579,'Rapitil  - Nedocromil sodium',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (580,'Raxar  - Grepafloxacin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (581,'Rebetol  - Ribavarin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (582,'Regulan  - Ispaghula husk',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (583,'Relenza  - Zanamivir',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (584,'Relifex  - Nabumetone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (585,'Remnos  - Nitrazepam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (586,'Requip  - Ropinirole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (587,'Respacal  - Tulobuterol hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (588,'Respontin  - Ipratropium bromide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (589,'Restandol  - Testosterone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (590,'Retrovir  - Zidovudine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (591,'Revanil  - Lisuride maleaten',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (592,'Rheumox  - Azapropazone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (593,'Ridaura  - Auranofin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (594,'Rifadin  - Rifampicin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (595,'Rifater  - Rifampicin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (596,'Rifinah 150  - Rifampicin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (597,'Rifinah 300  - Rifampicin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (598,'Rimacid  - Indomethacin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (599,'Rimactane  - Rifampicin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (600,'Rimactazid 150  - Rifampicin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (601,'Rimactazid 300  - Rifampicin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (602,'Rimapam  - Diazepam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (603,'Risperdal  - Risperidone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (604,'Ritalin  - Methylphenidate hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (605,'Rivotril  - Clonazepam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (606,'Robicin  - Spectinomycin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (607,'Rocephin  - Ceftriaxone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (608,'Rohypnol  - Flunitrazepam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (609,'Rotacaps  - Salbutamol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (610,'Rozex  - Metronidazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (611,'Rynacrom.  - Sodium cromoglicate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (612,'Rythmodan  - Disopyramide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (613,'Salagen  - Pilocarpine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (614,'Salazopyrin  - Sulfasalazine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (615,'Saliva Orthana  - Saliva substitute',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (616,'Salivace  - Saliva substitute',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (617,'Salivix  - Saliva substitute',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (618,'Salofalk  - Mesalazine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (619,'Saluric  - Chlorothiazide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (620,'Salveze  - Saliva substitute',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (621,'Sanomigran  - Pizotifen',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (622,'Scandonest  - Mepivacaine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (623,'Scopoderm  - Hyoscine hydrobromide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (624,'Sectral  - Acebutolol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (625,'Securon  - Verapamil',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (626,'Securopen  - Azlocillin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (627,'Selexid  - Pivmecillinam hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (628,'Semprex  - Acrivastine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (629,'Senokot  - Senna',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (630,'Septanenst  - Articaine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (631,'Septrin  - Co-trimoxazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (632,'Serc  - Betahistine dihydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (633,'Serdolect  - Sertindole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (634,'Serenace  - Haloperidol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (635,'Seretide  - Fluticasone propionate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (636,'Serevent  - Salmeterol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (637,'Seroquel  - Quetiapine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (638,'Seroxat  - Paroxetine    433',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (639,'Sinemet CR  - Co-careldopa',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (640,'Sinemet plus  - Co-careldopa',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (641,'Sinemet  - Co-careldopa',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (642,'Sinequan  - Doxepin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (643,'Singulair  - Montelukast',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (644,'Skelid  - Tiludronic acid',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (645,'Slo-Phyllin  - Theophylline',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (646,'Slozem  - Diltiazem',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (647,'Sno Phenicol  - Chloramphenicol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (648,'Solfedipine  - Nifedipine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (649,'Solian  - Amisulpride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (650,'Solu-cortel  - Hydrocortisone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (651,'Sonata  - Zaleplon',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (652,'Sotacor  - Sotalol hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (653,'Spiroctan  - Spironolactone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (654,'Sporanox  - Itraconazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (655,'Staril  - Fosinopril',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (656,'Stelazine  - Trifluoperazine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (657,'Stemetil  - Prochlorperazine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (658,'Stesolid  - Diazepam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (659,'Stilboesterol  - Diethylstilbestrol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (660,'Stilnoct  - Zolpidem tartrate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (661,'Stromba  - Stanozolol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (662,'Stugeron  - Cinnarizine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (663,'Sudafed  - Pseudoephedrine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (664,'Sulparex  - Sulpiride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (665,'Sulpitil  - Sulpiride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (666,'Suprax  - Cefixime',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (667,'Suprecur  - Buserelin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (668,'Surgam  - Tiaprofenic acid',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (669,'Surmontil  - Trimipramine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (670,'Sustiva  - Efavirenz',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (671,'Symmetrel  - Amantadine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (672,'Synagis  - Palivizumab',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (673,'Synercid  - Quinupristin with Dalfopristin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (674,'Syscor  - Nisoldipine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (675,'Tagamet  - Cimetidine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (676,'Tambocor  - Flecainide acetate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (677,'Tanatril  - Imidapril',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (678,'Targocid  - Teicoplanin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (679,'Tarivid  - Ofloxacin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (680,'Tavanic  - Levofloxacin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (681,'Tavegil  - Clemastine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (682,'Taxol  - Paclitaxel',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (683,'Taxotere  - Docetaxel',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (684,'Tazocin  - Piperacillin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (685,'Tegretol retard  - Carbamazepine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (686,'Tegretol  - Carbamazepine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (687,'Telfast  - Fexofenadine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (688,'Temgesic  - Buprenorphine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (689,'Tenorminx  - Atenolol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (690,'Tensipine  - Nifedipine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (691,'Tensium  - Diazepam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (692,'Terasyl 300  - Lymecycline',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (693,'Teril CR  - Carbamazepine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (694,'Terramycin  - Oxytetracycline',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (695,'Tertroxin  - Liothyronine sodium',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (696,'Teveten  - Eprosartan',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (697,'Theo-Dur  - Theophylline',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (698,'Tilade  - Nedocromil sodium',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (699,'Tildiem  - Diltiazem',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (700,'Tiloryth  - Erythromycin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (701,'Timecef  - Cefodizime',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (702,'Timentin  - Ticarcillin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (703,'Timonil retard.  - Carbamazepine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (704,'Tofranil  - Imipramine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (705,'Tolanase  - Tolazamide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (706,'Tomudex  - Raltitrexed',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (707,'Topal  - Alginates',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (708,'Topamax  - Topiramate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (709,'Trandate  - Labetalol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (710,'Trasicor  - Oxprenolol hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (711,'Trileptal  - Oxcarbazepine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (712,'Triludan  - Terfenadine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (713,'Trimopan  - Trimethoprim',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (714,'Triptaphen  - Amitriptyline hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (715,'Tritace  - Ramipril',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (716,'Trusopt  - Dorzolamide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (717,'Tryptizol  - Amitriptyline hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (718,'Ubretid  - Distigmine bromide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (719,'Ucerax  - Hydroxyzine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (720,'Ultralanum  - Fluticasone propionate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (721,'Uniphyllin Continus  - Theophylline',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (722,'Unisomnia  - Nitrazepam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (723,'Urdox  - Ursodeoxycholic acid',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (724,'Uriben  - Nalidixic acid',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (725,'Urispass 200  - Flavoxate hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (726,'Ursofalk  - Ursodeoxycholic acid 434   ',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (727,'Ursogal  - Ursodeoxycholic acid',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (728,'Utinor  - Norfloxacin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (729,'Valclair  - Diazepam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (730,'Valium  - Diazepam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (731,'Vallergan  - Alimemazine tartrate/ Trimeprazine tartrate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (732,'Valoid  - Cyclizine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (733,'Valtrex  - Valaciclovir',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (734,'Vancocin  - Vancomycin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (735,'Vascace  - Cilazapril',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (736,'Velbe  - Vinblastine sulphate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (737,'Velosef  - Cefradine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (738,'Ventide  - Beclometasone dipropionate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (739,'Ventodisks  - Salbutamol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (740,'Ventolin  - Salbutamol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (741,'Vepesid  - Etoposide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (742,'Vermox  - Mebendazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (743,'Viagra  - Sildenafil',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (744,'Viazem  - Diltiazem',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (745,'Vibramycin -D  - Doxycycline',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (746,'Vibramycin  - Doxycycline',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (747,'Videx  - Didanosine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (748,'Vioxx  - Rofecoxib',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (749,'Viracept  - Nelfinavir',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (750,'Viramune  - Nevirapine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (751,'Virazole  - Ribavarin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (752,'Visclair  - Mecysteine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (753,'Visken  - Pindolol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (754,'Vistide  - Cidofovir',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (755,'Vivalan  - Viloxazine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (756,'Voltarol  - Diclofenac sodium',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (757,'Welldorm  - Chloral hydrate',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (758,'Wellvone  - Atovaquone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (759,'Xanax  - Alprazolam',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (760,'Xenical  - Orlistat',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (761,'Xylocaine  - Lidocaine/Lignocaine Dental preparations',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (762,'Xylotox  - Lidocaine/Lignocaine Dental preparations',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (763,'Yomesan  - Niclosamide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (764,'Zaditen  - Ketotifen',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (765,'Zadstat  - Metronidazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (766,'Zamadol  - Tramadol hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (767,'Zandip  - Lercanidipine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (768,'Zantac  - Ranitidine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (769,'Zarontin  - Ethosuximide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (770,'Zavedos  - Idarubicin hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (771,'Zelapar  - Selegeline hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (772,'Zemtard  - Diltiazem',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (773,'Zerit  - Stavudine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (774,'Zestril  - Lisinopril',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (775,'Ziagen  - Abacavir',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (776,'Zimovane  - Zopiclone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (777,'Zinacef  - Cefuroxime',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (778,'Zinamide  - Pyrazinamide',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (779,'Zinnat  - Cefuroxime',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (780,'Zirtek  - Cetirizine hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (781,'Zispin  - Mirtazapine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (782,'Zithromax  - Azithromycin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (783,'Zocor  - Simvastatin',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (784,'Zofran  - Ondansetron',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (785,'Zoleptil  - Zotepine',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (786,'Zomig  - Zolmitriptan',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (787,'Zoton  - Lansoprazole',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (788,'Zovirax  - Aciclovir',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (789,'Zyban  - Amfebutamone',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (790,'Zydol  - Tramadol hydrochloride',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (791,'Zyloric  - Allopurinol',NULL);
INSERT INTO `medication` (`medication_id`, `medication_name`, `description`) VALUES (792,'Zyprexa  - Olanzapine',NULL);
/*!40000 ALTER TABLE `medication` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-23 13:26:14

*** Some duplicate tables are in the database and we have to refactor them later ***

