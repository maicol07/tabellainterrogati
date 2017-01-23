-- --------------------------------------------------------
-- Host:                         db4free.net
-- Versione server:              5.7.17 - MySQL Community Server (GPL)
-- S.O. server:                  linux-glibc2.5
-- HeidiSQL Versione:            9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dump della struttura di tabella interrogati.interrogati
CREATE TABLE IF NOT EXISTS `interrogati` (
  `ID` tinyint(4) NOT NULL DEFAULT '0',
  `Nome_Cognome` text NOT NULL,
  `ITA1` char(50) NOT NULL DEFAULT '0' COMMENT 'O 0 o 1, imposta già interrogato o no',
  `STO1` char(50) NOT NULL DEFAULT '0' COMMENT 'O 0 o 1, imposta già interrogato o no',
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- L’esportazione dei dati non era selezionata.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
