-- --------------------------------------------------------
-- Сервер:                       127.0.0.1
-- Server version:               5.6.13-log - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Версія:              8.0.0.4396
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table zoo.anemneses
DROP TABLE IF EXISTS `anemneses`;
CREATE TABLE IF NOT EXISTS `anemneses` (
  `id_anemnes` int(11) NOT NULL AUTO_INCREMENT,
  `id_animal` int(11) NOT NULL,
  `date` date NOT NULL,
  `description` longtext NOT NULL,
  `summ` decimal(10,2) NOT NULL DEFAULT '0.00',
  `id_medic` int(11) NOT NULL,
  `temperature` decimal(10,1) unsigned NOT NULL,
  `color_sl` varchar(255) NOT NULL,
  `skin` varchar(255) NOT NULL,
  PRIMARY KEY (`id_anemnes`),
  KEY `id_animal` (`id_animal`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8;

-- Dumping data for table zoo.anemneses: ~9 rows (approximately)
DELETE FROM `anemneses`;
/*!40000 ALTER TABLE `anemneses` DISABLE KEYS */;
INSERT INTO `anemneses` (`id_anemnes`, `id_animal`, `date`, `description`, `summ`, `id_medic`, `temperature`, `color_sl`, `skin`) VALUES
	(1, 2, '2014-02-14', '2222222222222222222222222222222222222', 26.00, 1, 10.0, 'colorrrrr', 'skinnnnnds'),
	(2, 3, '2013-12-29', '333333333333333333333цуацуацуацуацуацуацуац3ауцауа', 35.00, 2, 0.0, '', ''),
	(3, 4, '2014-03-08', '444444444444444444цуацуацуацуацуацуа', 184.00, 1, 10.0, '', ''),
	(4, 2, '2014-01-29', '2-2-2-2-2-2-2-2-2-2-111111111111111111111111111111111111111111111', 48.60, 1, 36.7, 'fwefwf', 'ewfwef'),
	(78, 2, '2002-06-20', 'qewfefwe11111111111111111', 4341.89, 2, 10.0, '34tgrdgerg11', 'ergergreg11111111'),
	(79, 9, '2002-06-20', 'opisnie', 48.95, 3, 37.0, 'blue', 'good'),
	(80, 13, '2014-07-01', 'Какая-то хрень', 21.80, 3, 36.6, '', ''),
	(82, 6, '2014-07-21', 'ofsojhjpokbpkcvp[[pbkbkbk', 4565.00, 1, 36.6, '', '');
/*!40000 ALTER TABLE `anemneses` ENABLE KEYS */;


-- Dumping structure for table zoo.animals
DROP TABLE IF EXISTS `animals`;
CREATE TABLE IF NOT EXISTS `animals` (
  `id_animal` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `id_type` int(11) NOT NULL,
  `sex` tinyint(1) NOT NULL DEFAULT '0',
  `age` int(11) DEFAULT NULL,
  `reg_num` varchar(45) DEFAULT NULL,
  `date_reg` date DEFAULT NULL,
  `date_death` date DEFAULT NULL,
  `id_priv` int(11) DEFAULT NULL,
  `id_master` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_animal`),
  KEY `fk_animals_masters` (`id_master`),
  KEY `fk_animals_types1` (`id_type`),
  CONSTRAINT `fk_animals_masters` FOREIGN KEY (`id_master`) REFERENCES `masters` (`id_master`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_animals_types1` FOREIGN KEY (`id_type`) REFERENCES `types` (`id_type`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- Dumping data for table zoo.animals: ~12 rows (approximately)
DELETE FROM `animals`;
/*!40000 ALTER TABLE `animals` DISABLE KEYS */;
INSERT INTO `animals` (`id_animal`, `name`, `id_type`, `sex`, `age`, `reg_num`, `date_reg`, `date_death`, `id_priv`, `id_master`, `description`) VALUES
	(2, 'Кузя', 1, 0, 78, '111555666', '2013-05-06', '2014-01-01', 1, 1, 'decr'),
	(3, 'Vasya', 2, 1, 5, '222555444', '2012-02-15', '2014-05-27', 2, 1, 'descri'),
	(4, 'Gosha', 1, 0, 2, '555888777', '2013-05-29', '0000-00-00', 3, 2, 'descr'),
	(5, 'Кеша', 2, 1, 10, '334234', '2013-12-01', '2014-01-01', NULL, 1, ''),
	(6, 'Тузик', 2, 0, 3, '333344444', '2005-05-20', '0000-00-00', NULL, 1, 'уцацуацуа'),
	(7, 'Кешуня', 1, 1, 5, '546456', '2001-04-20', '0000-00-00', NULL, 1, 'акаук укп укп'),
	(8, 'Бобик', 2, 0, 9, '324534', '2004-03-20', '0000-00-00', NULL, 2, 'апукпукпу'),
	(9, 'Вася', 4, 0, 1, 'ва435436547', '2014-06-02', '0000-00-00', NULL, 4, 'упс'),
	(10, 'Тузик', 2, 0, 7, 'ва45465768', '2014-05-01', '2014-06-03', NULL, 4, 'вуацуа'),
	(12, 'Хомяк', 4, 0, 25, '34534534534', '2013-12-01', '0000-00-00', NULL, 3, 'кекупукпукпук'),
	(13, 'Пельмень', 1, 0, 2, 'а156458', '2014-07-01', '0000-00-00', NULL, 3, 'Мой кот');
/*!40000 ALTER TABLE `animals` ENABLE KEYS */;


-- Dumping structure for table zoo.AuthAssignment
DROP TABLE IF EXISTS `AuthAssignment`;
CREATE TABLE IF NOT EXISTS `AuthAssignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`),
  CONSTRAINT `authassignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table zoo.AuthAssignment: ~0 rows (approximately)
DELETE FROM `AuthAssignment`;
/*!40000 ALTER TABLE `AuthAssignment` DISABLE KEYS */;
/*!40000 ALTER TABLE `AuthAssignment` ENABLE KEYS */;


-- Dumping structure for table zoo.AuthItem
DROP TABLE IF EXISTS `AuthItem`;
CREATE TABLE IF NOT EXISTS `AuthItem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table zoo.AuthItem: ~60 rows (approximately)
DELETE FROM `AuthItem`;
/*!40000 ALTER TABLE `AuthItem` DISABLE KEYS */;
INSERT INTO `AuthItem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
	('admin', 2, '', NULL, 'N;'),
	('adminAnemnes', 0, 'AdminAnemnes', NULL, 'N;'),
	('adminAnimal', 0, 'AdminAnimal', NULL, 'N;'),
	('adminCure', 0, 'AdminCure', NULL, 'N;'),
	('adminMaster', 0, 'AdminMaster', NULL, 'N;'),
	('adminMedic', 0, 'AdminMedic', NULL, 'N;'),
	('adminPriv', 0, 'AdminPriv', NULL, 'N;'),
	('adminRecomendation', 0, 'AdminRecomendation', NULL, 'N;'),
	('adminType', 0, 'AdminType', NULL, 'N;'),
	('countAnimalReport', 0, 'CountAnimalReport', NULL, 'N;'),
	('createAnemnes', 0, 'CreateAnemnes', NULL, 'N;'),
	('createAnimal', 0, 'CreateAnimal', NULL, 'N;'),
	('createCure', 0, 'CreateCure', NULL, 'N;'),
	('createMaster', 0, 'CreateMaster', NULL, 'N;'),
	('createMedic', 0, 'CreateMedic', NULL, 'N;'),
	('createPriv', 0, 'CreatePriv', NULL, 'N;'),
	('createRecomendation', 0, 'CreateRecomendation', NULL, 'N;'),
	('createType', 0, 'CreateType', NULL, 'N;'),
	('deleteAnemnes', 0, 'DeleteAnemnes', NULL, 'N;'),
	('deleteAnimal', 0, 'DeleteAnimal', NULL, 'N;'),
	('deleteCure', 0, 'DeleteCure', NULL, 'N;'),
	('deleteMaster', 0, 'DeleteMaster', NULL, 'N;'),
	('deleteMedic', 0, 'DeleteMedic', NULL, 'N;'),
	('deletePriv', 0, 'DeletePriv', NULL, 'N;'),
	('deleteRecomendation', 0, 'DeleteRecomendation', NULL, 'N;'),
	('deleteType', 0, 'DeleteType', NULL, 'N;'),
	('indexAnemnes', 0, 'IndexAnemnes', NULL, 'N;'),
	('indexAnimal', 0, 'IndexAnimal', NULL, 'N;'),
	('indexCure', 0, 'IndexCure', NULL, 'N;'),
	('indexMaster', 0, 'IndexMaster', NULL, 'N;'),
	('indexMedic', 0, 'IndexMedic', NULL, 'N;'),
	('indexPriv', 0, 'IndexPriv', NULL, 'N;'),
	('indexRecomendation', 0, 'IndexRecomendation', NULL, 'N;'),
	('indexSearch', 0, 'IndexSearch', NULL, 'N;'),
	('indexType', 0, 'IndexType', NULL, 'N;'),
	('manageDatabase', 1, 'manageDatabase', NULL, 'N;'),
	('manager', 2, '', NULL, 'N;'),
	('manageUser', 1, 'manageUser', NULL, 'N;'),
	('printReport', 0, 'PrintReport', NULL, 'N;'),
	('privReport', 0, 'PrivReport', NULL, 'N;'),
	('registrationUser', 0, 'RegistrationUser', NULL, 'N;'),
	('typeReport', 0, 'TypeReport', NULL, 'N;'),
	('updateAnemnes', 0, 'UpdateAnemnes', NULL, 'N;'),
	('updateAnimal', 0, 'UpdateAnimal', NULL, 'N;'),
	('updateCure', 0, 'UpdateCure', NULL, 'N;'),
	('updateMaster', 0, 'UpdateMaster', NULL, 'N;'),
	('updateMedic', 0, 'UpdateMedic', NULL, 'N;'),
	('updatePriv', 0, 'UpdatePriv', NULL, 'N;'),
	('updateRecomendation', 0, 'UpdateRecomendation', NULL, 'N;'),
	('updateType', 0, 'UpdateType', NULL, 'N;'),
	('user', 2, '', NULL, 'N;'),
	('viewAnemnes', 0, 'ViewAnemnes1', NULL, 'N;'),
	('viewAnimal', 0, 'ViewAnimal', NULL, 'N;'),
	('viewCure', 0, 'ViewCure', NULL, 'N;'),
	('viewDatabase', 1, 'viewDatabase', NULL, 'N;'),
	('viewMaster', 0, 'ViewMaster', NULL, 'N;'),
	('viewMedic', 0, 'ViewMedic', NULL, 'N;'),
	('viewPriv', 0, 'ViewPriv', NULL, 'N;'),
	('viewRecomendation', 0, 'ViewRecomendation', NULL, 'N;'),
	('viewReports', 1, 'viewReports', NULL, 'N;'),
	('viewType', 0, 'ViewType', NULL, 'N;');
/*!40000 ALTER TABLE `AuthItem` ENABLE KEYS */;


-- Dumping structure for table zoo.AuthItemChild
DROP TABLE IF EXISTS `AuthItemChild`;
CREATE TABLE IF NOT EXISTS `AuthItemChild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `authitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `authitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table zoo.AuthItemChild: ~0 rows (approximately)
DELETE FROM `AuthItemChild`;
/*!40000 ALTER TABLE `AuthItemChild` DISABLE KEYS */;
INSERT INTO `AuthItemChild` (`parent`, `child`) VALUES
	('manageDatabase', 'adminAnemnes'),
	('manageDatabase', 'adminAnimal'),
	('manageDatabase', 'adminCure'),
	('manageDatabase', 'adminMaster'),
	('manageDatabase', 'adminMedic'),
	('manageDatabase', 'adminPriv'),
	('manageDatabase', 'adminRecomendation'),
	('manageDatabase', 'adminType'),
	('viewReports', 'countAnimalReport'),
	('viewDatabase', 'createAnemnes'),
	('viewDatabase', 'createAnimal'),
	('viewDatabase', 'createCure'),
	('viewDatabase', 'createMaster'),
	('viewDatabase', 'createMedic'),
	('viewDatabase', 'createPriv'),
	('viewDatabase', 'createRecomendation'),
	('viewDatabase', 'createType'),
	('manageDatabase', 'deleteAnemnes'),
	('manageDatabase', 'deleteAnimal'),
	('manageDatabase', 'deleteCure'),
	('manageDatabase', 'deleteMaster'),
	('manageDatabase', 'deleteMedic'),
	('manageDatabase', 'deletePriv'),
	('manageDatabase', 'deleteRecomendation'),
	('manageDatabase', 'deleteType'),
	('viewDatabase', 'indexAnemnes'),
	('viewDatabase', 'indexAnimal'),
	('viewDatabase', 'indexCure'),
	('viewDatabase', 'indexMaster'),
	('viewDatabase', 'indexMedic'),
	('viewDatabase', 'indexPriv'),
	('viewDatabase', 'indexRecomendation'),
	('viewDatabase', 'indexSearch'),
	('viewDatabase', 'indexType'),
	('manager', 'manageDatabase'),
	('admin', 'manager'),
	('admin', 'manageUser'),
	('viewReports', 'printReport'),
	('viewReports', 'privReport'),
	('manageUser', 'registrationUser'),
	('viewReports', 'typeReport'),
	('manageDatabase', 'updateAnemnes'),
	('manageDatabase', 'updateAnimal'),
	('manageDatabase', 'updateCure'),
	('manageDatabase', 'updateMaster'),
	('manageDatabase', 'updateMedic'),
	('manageDatabase', 'updatePriv'),
	('manageDatabase', 'updateRecomendation'),
	('manageDatabase', 'updateType'),
	('manager', 'user'),
	('viewDatabase', 'viewAnemnes'),
	('viewDatabase', 'viewAnimal'),
	('viewDatabase', 'viewCure'),
	('manageDatabase', 'viewDatabase'),
	('user', 'viewDatabase'),
	('viewDatabase', 'viewMaster'),
	('viewDatabase', 'viewMedic'),
	('viewDatabase', 'viewPriv'),
	('viewDatabase', 'viewRecomendation'),
	('user', 'viewReports'),
	('viewDatabase', 'viewType');
/*!40000 ALTER TABLE `AuthItemChild` ENABLE KEYS */;


-- Dumping structure for table zoo.cure
DROP TABLE IF EXISTS `cure`;
CREATE TABLE IF NOT EXISTS `cure` (
  `id_cure` int(10) NOT NULL AUTO_INCREMENT,
  `id_anemnes` int(10) DEFAULT NULL,
  `rp` mediumtext,
  `ds` mediumtext,
  PRIMARY KEY (`id_cure`),
  KEY `id_anemnes` (`id_anemnes`),
  CONSTRAINT `FK_cure_anemneses` FOREIGN KEY (`id_anemnes`) REFERENCES `anemneses` (`id_anemnes`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- Dumping data for table zoo.cure: ~11 rows (approximately)
DELETE FROM `cure`;
/*!40000 ALTER TABLE `cure` DISABLE KEYS */;
INSERT INTO `cure` (`id_cure`, `id_anemnes`, `rp`, `ds`) VALUES
	(1, 1, 'fuck', 'lock'),
	(2, 1, 'gruuuuu', 'ass'),
	(3, 1, 'dff', 'fee'),
	(4, 2, ' kyukyuk yu', 'yukyu yukyuk'),
	(5, 2, 'yukyukyuk yuk', 'yuk yukyu yu'),
	(6, 1, 'goo', 'boo'),
	(7, 1, 'вава', 'вавав'),
	(8, 1, '121212', '12121212'),
	(10, 82, 'gfh', 'пекр'),
	(11, 82, 'decunon', 'v/m 3ml');
/*!40000 ALTER TABLE `cure` ENABLE KEYS */;


-- Dumping structure for table zoo.masters
DROP TABLE IF EXISTS `masters`;
CREATE TABLE IF NOT EXISTS `masters` (
  `id_master` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `street` varchar(45) NOT NULL,
  `n_home` varchar(5) NOT NULL,
  `n_apart` int(11) DEFAULT NULL,
  `telephone_1` varchar(45) DEFAULT NULL,
  `telephone_2` varchar(45) DEFAULT NULL,
  `telephone_3` varchar(45) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_master`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table zoo.masters: ~5 rows (approximately)
DELETE FROM `masters`;
/*!40000 ALTER TABLE `masters` DISABLE KEYS */;
INSERT INTO `masters` (`id_master`, `firstname`, `surname`, `lastname`, `city`, `street`, `n_home`, `n_apart`, `telephone_1`, `telephone_2`, `telephone_3`, `description`) VALUES
	(1, 'Иван', 'Иванович', 'Иванов', 'Синельниково', 'Мира', '25', 15, '123456789', '123456789', '123456789', 'descrdqdqwdqwdqwd'),
	(2, 'Petya', 'Petrovich', 'Petrov', 'Синельниково', 'Lenina', '15', NULL, '123456789', NULL, NULL, 'desc'),
	(3, 'Дмитрий', 'Александрович', 'Галушко', 'Синельниково', 'Шевченко', '46', 0, '123456789', '123456', '', 'дескр'),
	(4, 'Сидор', 'Сидорович', 'Сидоров', 'сел. Зайцеве', 'Миру', '12', 1, '0664865679', '0566348978', '', 'Хто це?');
/*!40000 ALTER TABLE `masters` ENABLE KEYS */;


-- Dumping structure for table zoo.medics
DROP TABLE IF EXISTS `medics`;
CREATE TABLE IF NOT EXISTS `medics` (
  `id_medic` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(45) NOT NULL,
  `surname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `description` varchar(45) DEFAULT NULL,
  `work` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_medic`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table zoo.medics: ~3 rows (approximately)
DELETE FROM `medics`;
/*!40000 ALTER TABLE `medics` DISABLE KEYS */;
INSERT INTO `medics` (`id_medic`, `firstname`, `surname`, `lastname`, `description`, `work`) VALUES
	(1, 'Marina', 'Volodimirivna', 'Galushko', 'description', 'nach'),
	(2, 'Lusya', 'Ivanovna', 'Petrova', 'descr', 'zam'),
	(3, 'Болит', 'Иванович', 'Ай', 'это описание ', 'самый главный');
/*!40000 ALTER TABLE `medics` ENABLE KEYS */;


-- Dumping structure for table zoo.priv
DROP TABLE IF EXISTS `priv`;
CREATE TABLE IF NOT EXISTS `priv` (
  `id_priv` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `id_animal` int(11) NOT NULL,
  `complete` enum('0','1') DEFAULT '0',
  `crazy` enum('0','1') NOT NULL,
  PRIMARY KEY (`id_priv`),
  KEY `fk_priv_animals1` (`id_animal`),
  CONSTRAINT `fk_priv_animals1` FOREIGN KEY (`id_animal`) REFERENCES `animals` (`id_animal`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- Dumping data for table zoo.priv: ~12 rows (approximately)
DELETE FROM `priv`;
/*!40000 ALTER TABLE `priv` DISABLE KEYS */;
INSERT INTO `priv` (`id_priv`, `date`, `description`, `id_animal`, `complete`, `crazy`) VALUES
	(1, '2012-06-29', 'Бешенство', 2, '1', '0'),
	(2, '2014-02-16', 'retergerg', 3, '0', '0'),
	(3, '2014-01-29', 'ergergerqg', 4, '1', '1'),
	(4, '2013-05-29', 'цуацуацуа', 2, '0', '0'),
	(5, '2019-06-20', 'egfrgergergerg', 2, '0', '0'),
	(6, '2027-06-20', 'thrhrhtrh111111111111111111', 2, '0', '0'),
	(7, '2015-06-20', 'kokoko', 9, '0', '1'),
	(8, '2014-08-14', 'сказ\r\n', 2, '0', '1'),
	(9, '2014-05-05', 'dsvsdvsdvsdv', 2, '1', '1'),
	(10, '2014-07-23', ',titycndj', 2, '0', '1'),
	(11, '2014-08-01', 'от бешенства', 5, '0', '1'),
	(12, '2014-08-01', 'цуацуацуа', 4, '0', '1');
/*!40000 ALTER TABLE `priv` ENABLE KEYS */;


-- Dumping structure for table zoo.recomendations
DROP TABLE IF EXISTS `recomendations`;
CREATE TABLE IF NOT EXISTS `recomendations` (
  `id_recomendation` int(10) NOT NULL AUTO_INCREMENT,
  `id_anemnes` int(10) DEFAULT NULL,
  `rp` mediumtext,
  `ds` mediumtext,
  PRIMARY KEY (`id_recomendation`),
  KEY `id_anemnes` (`id_anemnes`),
  CONSTRAINT `FK_recomendations_anemneses` FOREIGN KEY (`id_anemnes`) REFERENCES `anemneses` (`id_anemnes`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- Dumping data for table zoo.recomendations: ~6 rows (approximately)
DELETE FROM `recomendations`;
/*!40000 ALTER TABLE `recomendations` DISABLE KEYS */;
INSERT INTO `recomendations` (`id_recomendation`, `id_anemnes`, `rp`, `ds`) VALUES
	(8, 1, 'la la la ', 'bla bla bla '),
	(9, 1, 'sdvsdvsd', 'dsvsdvsdv'),
	(10, 2, 'sdvsdvsdvsdv', 'dg dfbdfb dfb'),
	(11, 1, 'dadada', 'yesyesyes'),
	(13, 1, 'укпку', 'укпку');
/*!40000 ALTER TABLE `recomendations` ENABLE KEYS */;


-- Dumping structure for table zoo.types
DROP TABLE IF EXISTS `types`;
CREATE TABLE IF NOT EXISTS `types` (
  `id_type` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table zoo.types: ~6 rows (approximately)
DELETE FROM `types`;
/*!40000 ALTER TABLE `types` DISABLE KEYS */;
INSERT INTO `types` (`id_type`, `name`, `description`) VALUES
	(1, 'Cat', NULL),
	(2, 'Dog', NULL),
	(3, 'Goat', NULL),
	(4, 'Хомяк', 'животное'),
	(5, 'бычок', ''),
	(6, 'корова', '');
/*!40000 ALTER TABLE `types` ENABLE KEYS */;


-- Dumping structure for table zoo.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL DEFAULT '0',
  `firstname` varchar(50) DEFAULT '0',
  `surname` varchar(50) DEFAULT '0',
  `lastname` varchar(50) DEFAULT '0',
  `password` varchar(255) NOT NULL DEFAULT '0',
  `description` varchar(255) DEFAULT '0',
  `id_medic` int(10) DEFAULT NULL,
  `role` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- Dumping data for table zoo.users: ~9 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id_user`, `login`, `firstname`, `surname`, `lastname`, `password`, `description`, `id_medic`, `role`) VALUES
	(1, 'admin', 'Дмитрий', 'Александрович', 'Галушко', 'j789789', 'admin', NULL, NULL),
	(2, 'medic', 'Марина', 'Владимировна', 'Галушко', '111111', 'medic', 1, NULL),
	(3, 'medic1', 'Иван', 'Иванович', 'Иванов', '222222', 'medic1', 3, NULL),
	(9, 'admin1', '0', '0', '0', 'j789789', '0', NULL, NULL),
	(10, 'tyjtyj', '0', '0', '0', 'tyjtyjtyj', '0', NULL, NULL),
	(11, 'ghnghn', '0', '0', '0', '$2a$13$nwDcwZiEgBuUJ0r2loEPTeSM/lOZLvBgAm3xKv8kQYAQuGNeZ9SMi', '0', NULL, NULL),
	(12, 'test', '0', '0', '0', '$2a$13$r0KQM5QKc/sae2KTjsjDiOr7viXN7.xP80XWoKvKFr004D5E55uXW', '0', NULL, 10),
	(13, 'asasasas', '0', '0', '0', '$2a$13$jy8Unio1mFp9uhuIWgkW/uk3pLYVYpq0iWRv6KMcJkxiHvn.HOY5e', '0', NULL, NULL),
	(14, 'dima', 'Дмитрий', 'Александрович', 'Галушко', '$2a$13$Lq4HXA3M4SeraEWuWH2Rj.oaT9oaP5ova1gT6HCX9UuCLqWsDy2Ie', 'admin of this site', NULL, 15);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
