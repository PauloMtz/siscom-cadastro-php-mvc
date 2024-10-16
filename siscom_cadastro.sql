-- MySQL dump 10.13  Distrib 8.0.39, for Linux (x86_64)
--
-- Host: localhost    Database: siscom_cadastro
-- ------------------------------------------------------
-- Server version	8.0.39-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `banco`
--

DROP TABLE IF EXISTS `banco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `banco` (
  `id_banco` bigint unsigned NOT NULL AUTO_INCREMENT,
  `codigo` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banco` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_banco`)
) ENGINE=InnoDB AUTO_INCREMENT=208 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banco`
--

LOCK TABLES `banco` WRITE;
/*!40000 ALTER TABLE `banco` DISABLE KEYS */;
INSERT INTO `banco` VALUES (1,'999','Caixa Interno'),(2,'001','Banco do Brasil S.A.'),(3,'004','Banco do Nordeste do Brasil S.A.'),(4,'033','Banco Santander (Brasil) S.A.'),(5,'104','Caixa Econômica Federal'),(6,'341','Itaú Unibanco S.A.'),(7,'260','Nu Pagamentos S.A (Nubank)'),(8,'290','Pagseguro Internet S.A'),(9,'237','Banco Bradesco S.A.'),(10,'246','Banco ABC Brasil S.A.'),(11,'748','Banco Cooperativo Sicredi S.A.'),(12,'117','Advanced Cc Ltda'),(13,'121','Banco Agibank S.A.'),(14,'172','Albatross Ccv S.A'),(15,'188','Ativa Investimentos S.A'),(16,'654','Banco A.J.Renner S.A.'),(17,'246','Banco ABC Brasil S.A.'),(18,'075','Banco ABN AMRO S.A'),(19,'121','Banco Agibank S.A.'),(20,'025','Banco Alfa S.A.'),(21,'641','Banco Alvorada S.A.'),(22,'065','Banco Andbank (Brasil) S.A.'),(23,'213','Banco Arbi S.A.'),(24,'096','Banco B3 S.A.'),(25,'024','Banco BANDEPE S.A.'),(26,'318','Banco BMG S.A.'),(27,'752','Banco BNP Paribas Brasil S.A.'),(28,'107','Banco BOCOM BBM S.A.'),(29,'063','Banco Bradescard S.A.'),(30,'036','Banco Bradesco BBI S.A.'),(31,'122','Banco Bradesco BERJ S.A.'),(32,'204','Banco Bradesco Cartões S.A.'),(33,'394','Banco Bradesco Financiamentos S.A.'),(34,'218','Banco BS2 S.A.'),(35,'208','Banco BTG Pactual S.A.'),(36,'336','Banco C6 S.A – C6 Bank'),(37,'473','Banco Caixa Geral – Brasil S.A.'),(38,'412','Banco Capital S.A.'),(39,'040','Banco Cargill S.A.'),(40,'368','Banco Carrefour'),(41,'266','Banco Cédula S.A.'),(42,'739','Banco Cetelem S.A.'),(43,'233','Banco Cifra S.A.'),(44,'745','Banco Citibank S.A.'),(45,'241','Banco Clássico S.A.'),(46,'756','Banco Cooperativo do Brasil S.A. '),(47,'748','Banco Cooperativo Sicredi S.A.'),(48,'222','Banco Credit Agricole Brasil S.A.'),(49,'505','Banco Credit Suisse (Brasil) S.A.'),(50,'069','Banco Crefisa S.A.'),(51,'003','Banco da Amazônia S.A.'),(52,'083','Banco da China Brasil S.A.'),(53,'707','Banco Daycoval S.A.'),(54,'051','Banco de Desenvolvimento do Espírito Santo S.A.'),(55,'300','Banco de La Nacion Argentina'),(56,'495','Banco de La Provincia de Buenos Aires'),(57,'335','Banco Digio S.A'),(58,'047','Banco do Estado de Sergipe S.A.'),(59,'037','Banco do Estado do Pará S.A.'),(60,'041','Banco do Estado do Rio Grande do Sul S.A.'),(61,'196','Banco Fair Corretora de Câmbio S.A'),(62,'265','Banco Fator S.A.'),(63,'224','Banco Fibra S.A.'),(64,'626','Banco Ficsa S.A.'),(65,'094','Banco Finaxis S.A.'),(66,'612','Banco Guanabara S.A.'),(67,'012','Banco Inbursa S.A.'),(68,'604','Banco Industrial do Brasil S.A.'),(69,'653','Banco Indusval S.A.'),(70,'077','Banco Inter S.A.'),(71,'249','Banco Investcred Unibanco S.A.'),(72,'184','Banco Itaú BBA S.A.'),(73,'029','Banco Itaú Consignado S.A.'),(74,'479','Banco ItauBank S.A'),(75,'376','Banco J. P. Morgan S.A.'),(76,'074','Banco J. Safra S.A.'),(77,'217','Banco John Deere S.A.'),(78,'076','Banco KDB S.A.www.bancokdb.com.br'),(79,'757','Banco KEB HANA do Brasil S.A.'),(80,'600','Banco Luso Brasileiro S.A.'),(81,'243','Banco Máxima S.A.'),(82,'720','Banco Maxinvest S.A.'),(83,'389','Banco Mercantil de Investimentos S.A.'),(84,'389','Banco Mercantil do Brasil S.A.'),(85,'370','Banco Mizuho do Brasil S.A.'),(86,'746','Banco Modal S.A.'),(87,'066','Banco Morgan Stanley S.A.'),(88,'456','Banco MUFG Brasil S.A.www.br.bk.mufg.jp'),(89,'007','Banco Nacional de Desenvolvimento Econômico e Social – BNDES'),(90,'169','Banco Olé Bonsucesso Consignado S.A.'),(91,'111','Banco Oliveira Trust Dtvm S.A'),(92,'079','Banco Original do Agronegócio S.A.'),(93,'212','Banco Original S.A.'),(94,'712','Banco Ourinvest S.A.'),(95,'623','Banco PAN S.A.'),(96,'611','Banco Paulista S.A.'),(97,'643','Banco Pine S.A.'),(98,'658','Banco Porto Real de Investimentos S.A.'),(99,'747','Banco Rabobank International Brasil S.A.'),(100,'633','Banco Rendimento S.A.'),(101,'741','Banco Ribeirão Preto S.A.'),(102,'120','Banco Rodobens S.A.'),(103,'422','Banco Safra S.A.'),(104,'630','Banco Smartbank S.A.'),(105,'637','Banco Sofisa S.A.www.sofisa.com.br'),(106,'655','Banco Votorantim S.A.'),(107,'610','Banco VR S.A.'),(108,'119','Banco Western Union do Brasil S.A.'),(109,'124','Banco Woori Bank do Brasil S.A.'),(110,'348','Banco Xp S/A'),(111,'081','BancoSeguro S.A.'),(112,'021','BANESTES S.A. Banco do Estado do Espírito Santo'),(113,'755','Bank of America Merrill Lynch Banco Múltiplo S.A.'),(114,'268','Barigui Companhia Hipotecária'),(115,'250','BCV – Banco de Crédito e Varejo S.A.'),(116,'144','BEXS Banco de Câmbio S.A.'),(117,'253','Bexs Corretora de Câmbio S/A'),(118,'134','Bgc Liquidez Dtvm Ltda'),(119,'017','BNY Mellon Banco S.A.'),(120,'301','Bpp Instituição De Pagamentos S.A'),(121,'126','BR Partners Banco de Investimento S.A.'),(122,'070','BRB – Banco de Brasília S.A.'),(123,'092','Brickell S.A. Crédito, Financiamento e Investimentow'),(124,'173','BRL Trust Distribuidora de Títulos e Valores Mobiliários S.A.'),(125,'142','Broker Brasil Cc Ltda'),(126,'292','BS2 Distribuidora de Títulos e Valores Mobiliários S.A.'),(127,'011','C.Suisse Hedging-Griffo Cv S.A (Credit Suisse)'),(128,'288','Carol Distribuidora de Títulos e Valor Mobiliários Ltda'),(129,'130','Caruana Scfi'),(130,'159','Casa Credito S.A'),(131,'016','Ccm Desp Trâns Sc E Rs'),(132,'089','Ccr Reg Mogiana'),(133,'114','Central Cooperativa De Crédito No Estado Do Espírito Santo'),(134,'320','China Construction Bank (Brasil) Banco Múltiplo S.A.'),(135,'477','Citibank N.A.'),(136,'180','Cm Capital Markets Cctvm Ltda'),(137,'127','Codepe Cvc S.A'),(138,'163','Commerzbank Brasil S.A. – Banco Múltiplo'),(139,'060','Confidence Cc S.A'),(140,'098','Credialiança Ccr'),(141,'010','Credicoamo'),(142,'133','Cresol Confederação'),(143,'182','Dacasa Financeira S/A'),(144,'707','Banco Daycoval S.A.'),(145,'487','Deutsche Bank S.A. – Banco Alemão'),(146,'140','Easynvest – Título Cv S.A'),(147,'149','Facta S.A. Cfi'),(148,'285','Frente Corretora de Câmbio Ltda.'),(149,'278','Genial Investimentos Corretora de Valores Mobiliários S.A.'),(150,'138','Get Money Cc Ltda'),(151,'064','Goldman Sachs do Brasil Banco Múltiplo S.A.'),(152,'177','Guide Investimentos S.A. Corretora de Valores'),(153,'146','Guitta Corretora de Câmbio Ltda'),(154,'078','Haitong Banco de Investimento do Brasil S.A.'),(155,'062','Hipercard Banco Múltiplo S.A.www.hipercard.com.br'),(156,'189','HS Financeira S/A Crédito, Financiamento e Investimentos'),(157,'269','HSBC Brasil S.A. – Banco de Investimento'),(158,'271','IB Corretora de Câmbio, Títulos e Valores Mobiliários S.A.'),(159,'157','Icap Do Brasil Ctvm Ltda'),(160,'132','ICBC do Brasil Banco Múltiplo S.A.'),(161,'492','ING Bank N.V.www.ing.com'),(162,'139','Intesa Sanpaolo Brasil S.A. '),(163,'652','Itaú Unibanco Holding S.A.'),(164,'488','JPMorgan Chase Bank, National Association'),(165,'399','Kirton Bank S.A. – Banco Múltiplo'),(166,'293','Lastro RDV Distribuidora de Títulos e Valores Mobiliários Ltda.'),(167,'105','Lecca Crédito, Financiamento e Investimento S/A'),(168,'145','Levycam Ccv Ltda'),(169,'113','Magliano S.A'),(170,'323','Mercado Pago – Conta Do Mercado Livre'),(171,'128','MS Bank S.A. Banco de Câmbio'),(172,'137','Multimoney Cc Ltda'),(173,'014','Natixis Brasil S.A. Banco Múltiplo'),(174,'191','Nova Futura Corretora de Títulos e Valores Mobiliários Ltda.'),(175,'753','Novo Banco Continental S.A.'),(176,'613','Omni Banco S.A.www.bancopecunia.com.br'),(177,'613','Omni Banco S.A.www.omni.com.br'),(178,'254','Paraná Banco S.A.'),(179,'326','Parati – Crédito Financiamento e Investimento S.A.'),(180,'174','Pernambucanas Financ S.A'),(181,'100','Planner Corretora De Valores S.A'),(182,'125','Plural S.A. – Banco Múltiplo'),(183,'093','Pólocred Scmepp Ltda'),(184,'108','Portocred S.A'),(185,'283','Rb Capital Investimentos Dtvm Ltda'),(186,'101','Renascenca Dtvm Ltda'),(187,'270','Sagitur Corretora de Câmbio Ltda.'),(188,'751','Scotiabank Brasil S.A. Banco Múltiplo'),(189,'276','Senff S.A. – Crédito, Financiamento e Investimento'),(190,'545','Senso Ccvm S.A'),(191,'190','Servicoop'),(192,'183','Socred S.A'),(193,'299','Sorocred Crédito, Financiamento e Investimento S.A.'),(194,'118','Standard Chartered Bank (Brasil) '),(195,'197','Stone Pagamentos S.A'),(196,'095','Travelex Banco de Câmbio S.A.'),(197,'143','Treviso Corretora de Câmbio S.A.'),(198,'131','Tullett Prebon Brasil Cvc Ltda'),(199,'129','UBS Brasil Banco de Investimento S.A.'),(200,'91','Unicred Central Rs'),(201,'136','Unicred Cooperativa'),(202,'298','Vips Cc Ltda'),(203,'102','Xp Investimentos S.A');
/*!40000 ALTER TABLE `banco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categoria` (
  `id_categoria` bigint unsigned NOT NULL AUTO_INCREMENT,
  `categoria` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (1,'Vestuário');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cliente` (
  `id_cliente` int NOT NULL AUTO_INCREMENT,
  `id_pessoa` int DEFAULT NULL,
  `limite_credito` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id_cliente`),
  KEY `id_pessoa` (`id_pessoa`),
  CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id_pessoa`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (12,11,NULL),(13,12,55000.00);
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `conta_corrente`
--

DROP TABLE IF EXISTS `conta_corrente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `conta_corrente` (
  `id_conta_corrente` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_banco` bigint unsigned NOT NULL,
  `id_tipo_conta_corrente` bigint unsigned NOT NULL,
  `descricao` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agencia` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conta` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pix` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_conta_corrente`),
  KEY `conta_correntes_banco_id_foreign` (`id_banco`),
  KEY `conta_correntes_tipo_conta_corrente_id_foreign` (`id_tipo_conta_corrente`),
  CONSTRAINT `conta_correntes_banco_id_foreign` FOREIGN KEY (`id_banco`) REFERENCES `banco` (`id_banco`),
  CONSTRAINT `conta_correntes_tipo_conta_corrente_id_foreign` FOREIGN KEY (`id_tipo_conta_corrente`) REFERENCES `tipo_conta_corrente` (`id_tipo_conta_corrente`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conta_corrente`
--

LOCK TABLES `conta_corrente` WRITE;
/*!40000 ALTER TABLE `conta_corrente` DISABLE KEYS */;
INSERT INTO `conta_corrente` VALUES (1,1,3,'Conta Caixa','Conta Caixa','0001',NULL);
/*!40000 ALTER TABLE `conta_corrente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forma_pagamento`
--

DROP TABLE IF EXISTS `forma_pagamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `forma_pagamento` (
  `id_forma_pagamento` bigint unsigned NOT NULL AUTO_INCREMENT,
  `forma_pagamento` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_forma_pagamento`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forma_pagamento`
--

LOCK TABLES `forma_pagamento` WRITE;
/*!40000 ALTER TABLE `forma_pagamento` DISABLE KEYS */;
INSERT INTO `forma_pagamento` VALUES (1,'DINHEIRO','Dinheiro'),(2,'CHEQUE','Cheque'),(3,'CARTAO_CREDITO','Cartao credito'),(4,'CARTAO_DEBITO','Cartao debito'),(5,'CREDITO_LOJA','Credito loja'),(10,'VALE_ALIMENTACAO','Vale alimentacao'),(11,'VALE_REFEICAO','Vale refeicao'),(12,'VALE_PRESENTE','Vale presente'),(13,'VALE_COMBUSTIVEL','Vale combustivel'),(14,'DUPLICATA_MERCANTIL','Duplicata mercantil'),(15,'BOLETO_BANCARIO','Boleto bancario'),(16,'DEPOSITO_BANCARIO','Deposito bancario'),(17,'PIX','Pix'),(18,'PROGRAMA_FIDELIDADE','Programa fidelidade'),(90,'SEMP_PAGAMENTO','Semp pagamento'),(99,'OUTROS','Outros');
/*!40000 ALTER TABLE `forma_pagamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fornecedor`
--

DROP TABLE IF EXISTS `fornecedor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fornecedor` (
  `id_fornecedor` int NOT NULL AUTO_INCREMENT,
  `id_pessoa` int DEFAULT NULL,
  PRIMARY KEY (`id_fornecedor`),
  KEY `id_pessoa` (`id_pessoa`),
  CONSTRAINT `fornecedor_ibfk_1` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id_pessoa`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fornecedor`
--

LOCK TABLES `fornecedor` WRITE;
/*!40000 ALTER TABLE `fornecedor` DISABLE KEYS */;
INSERT INTO `fornecedor` VALUES (15,12);
/*!40000 ALTER TABLE `fornecedor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `local_armazenamento`
--

DROP TABLE IF EXISTS `local_armazenamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `local_armazenamento` (
  `id_local` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(90) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_local`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `local_armazenamento`
--

LOCK TABLES `local_armazenamento` WRITE;
/*!40000 ALTER TABLE `local_armazenamento` DISABLE KEYS */;
INSERT INTO `local_armazenamento` VALUES (1,'Armazém Central'),(2,'Loja Física'),(3,'Armazém Secundário'),(4,'Depósito Central'),(5,'Loja Virtual');
/*!40000 ALTER TABLE `local_armazenamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lote`
--

DROP TABLE IF EXISTS `lote`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lote` (
  `id_lote` int NOT NULL AUTO_INCREMENT,
  `id_produto` int DEFAULT NULL,
  `numero_lote` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `data_validade` date NOT NULL,
  `quantidade` int NOT NULL,
  PRIMARY KEY (`id_lote`),
  KEY `fk_produto_lote` (`id_produto`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lote`
--

LOCK TABLES `lote` WRITE;
/*!40000 ALTER TABLE `lote` DISABLE KEYS */;
INSERT INTO `lote` VALUES (4,1,'Lote 01','2024-06-28',35);
/*!40000 ALTER TABLE `lote` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pessoa`
--

DROP TABLE IF EXISTS `pessoa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pessoa` (
  `id_pessoa` int NOT NULL AUTO_INCREMENT,
  `nome_razao_social` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `apelido_fantasia` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cpf_cnpj` varchar(18) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `telefone` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `logradouro` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `numero` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `complemento` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bairro` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cidade` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `uf` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cep` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ibge` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_cadastro` date DEFAULT NULL,
  `tipo_pessoa` enum('fisica','juridica') COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'fisica',
  PRIMARY KEY (`id_pessoa`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pessoa`
--

LOCK TABLES `pessoa` WRITE;
/*!40000 ALTER TABLE `pessoa` DISABLE KEYS */;
INSERT INTO `pessoa` VALUES (8,'Manoel Jailton Editado','Jailton','78589452387','(98) 9898-988','mjailton@gmail.com','   Rua José do Patrocínio','10','','Cohama','São Luís','MA','65074-410','2111300','2024-09-14','juridica'),(9,'INTELIMAX COMERCIO LTDA',NULL,'10175153000123','','intelimax@gmail.com',' Rua Quarenta e Nove','30','QUADRA: 36;','Vinhais','São Luís','MA','65071-260','2111300','2024-09-14','fisica'),(11,'COCA COLA INDUSTRIAS LTDA','COCA-COLA','45997418001800','','email@gmail.com','   Largo do Mendanha','4489','','Campo Grande','Rio de Janeiro','RJ','23097-003','3304557',NULL,'juridica'),(12,'Eloá e Renata Telecom ME','Renata Telecom','21102231000186','(18) 3936-4967','posvenda@renatatelecom.com.br',' Rua Euclides da Cunha','312','','Vila Paraíso','Assis','SP','19802-140','3504008',NULL,'juridica');
/*!40000 ALTER TABLE `pessoa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produto`
--

DROP TABLE IF EXISTS `produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produto` (
  `id_produto` bigint NOT NULL AUTO_INCREMENT,
  `id_categoria` int DEFAULT NULL,
  `id_fornecedor` int DEFAULT NULL,
  `sku` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ncm` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cest` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `codigo_barra` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nome_produto` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `imagem` varchar(90) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `preco_venda` decimal(10,2) DEFAULT NULL,
  `margem_lucro` decimal(10,2) DEFAULT NULL,
  `preco_custo` decimal(10,2) DEFAULT NULL,
  `estoque_inicial` decimal(10,2) DEFAULT NULL,
  `estoque_minimo` decimal(10,2) DEFAULT NULL,
  `estoque_maximo` decimal(10,2) DEFAULT NULL,
  `estoque_atual` int DEFAULT NULL,
  `unidade` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `img_barra` varchar(80) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_produto`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produto`
--

LOCK TABLES `produto` WRITE;
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` VALUES (1,1,NULL,NULL,'1111.11.11','',NULL,'Camisa Polo','9ad397f3ef021a9a41bcde17d2106a48.jpg',59.90,NULL,30.00,NULL,NULL,NULL,NULL,'UNID',NULL),(2,NULL,NULL,NULL,NULL,NULL,NULL,'Calça Jeans',NULL,129.90,NULL,80.00,NULL,NULL,NULL,50,'unidade',NULL),(3,NULL,NULL,NULL,NULL,NULL,NULL,'Tênis Esportivo',NULL,299.90,NULL,180.00,NULL,NULL,NULL,20,'par',NULL),(4,NULL,NULL,NULL,NULL,NULL,NULL,'Mochila Escolar',NULL,79.90,NULL,50.00,NULL,NULL,NULL,200,'unidade',NULL),(5,NULL,NULL,NULL,NULL,NULL,NULL,'Smartphone XYZ',NULL,1999.90,NULL,1500.00,NULL,NULL,NULL,15,'unidade',NULL),(6,NULL,NULL,NULL,NULL,NULL,NULL,'Notebook ABC',NULL,3999.90,NULL,3200.00,NULL,NULL,NULL,10,'unidade',NULL),(8,1,NULL,NULL,'1111.11.11','',NULL,'Camisa Polo','6749f5af5cdfa5b99bd0788edf0a3bd1.jpg',59.90,NULL,30.00,NULL,NULL,NULL,NULL,'UNID',NULL),(9,1,NULL,NULL,'1111.11.11','',NULL,'frigideira','39c0c366e67248dd5749b3ea77810770.jpg',1.11,NULL,NULL,NULL,1.11,1.11,NULL,'UNID',NULL);
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `status` (
  `id_status` bigint unsigned NOT NULL AUTO_INCREMENT,
  `status` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` VALUES (1,'ATIVO','Ativo'),(2,'DIGITACAO','Digitacao'),(3,'CONCRETIZADO','Concretizado'),(4,'CANCELADO','Cancelado'),(5,'DELETADO','Deletado'),(6,'PENDENTE','Pendente'),(7,'ABERTO','Aberto'),(8,'PARCIALMENTE_PAGO','Parcialmente pago'),(9,'PAGO','Pago'),(10,'ATRASADO','Atrasado'),(11,'VENCIDO','Vencido'),(12,'ERRO_AO_GERAR_XML','Erro ao gerar xml'),(13,'ERRO_AO_ASSINAR_XML','Erro ao assinar xml'),(14,'ERRO_AO_ENVIAR_NFE','Erro ao enviar nfe'),(15,'DENEGADO','Denegado'),(16,'REJEITADO','Rejeitado'),(17,'AUTORIZADO','Autorizado'),(18,'FINALIZADO','Finalizado'),(19,'ENVIADO','Enviado'),(20,'INDISPONIVEL','Indisponivel'),(21,'OCUPADO','Ocupado'),(22,'DISPONIVEL','Disponivel'),(23,'OBRIGATORIO','Obrigatorio'),(24,'FECHADO','Fechado'),(25,'RECUSADO','Recusado'),(26,'EM_TRANSITO','Em transito'),(27,'ENTREGUE','Entregue'),(28,'EM_DIAS','Em dias'),(29,'BLOQUEADO','Bloqueado'),(30,'LIBERADO','Liberado'),(31,'DEMO','Demo'),(32,'DEMO_VENCIDO','Demo vencido'),(33,'NAO_ASSINANTE','Nao assinante'),(34,'PROSPECTO','Prospecto'),(35,'NOVO','Novo'),(36,'INUTILIZADO','Inutilizado'),(37,'EM_PROCESSAMENTO','Em processamento'),(38,'AGUARDANDO_FORNECEDOR','Aguardando fornecedor'),(39,'PRONTO_PARA_COTAR','Pronto para cotar'),(40,'COTADO','Cotado'),(41,'AGUARDANDO_COTACAO','Aguardando cotacao'),(42,'AGUARDANDO_APROVACAO','Aguardando aprovacao'),(43,'APROVADO','Aprovado'),(44,'NAO_COMERCIALIZA','Nao comercializa'),(45,'NAO_ATENDE','Nao atende'),(46,'NO_ESTOQUE','No estoque'),(47,'AGUARDANDO_LIBERACAO_PARA_INICIO','Aguardando liberacao para inicio'),(48,'AGUARDANDO_COMPRA_DE_INSUMOS_FALTANTES','Aguardando compra de insumos faltantes'),(49,'LIBERADO_PARA_INICIAR','Liberado para iniciar'),(50,'INICIADO','Iniciado'),(51,'PROCESSO_FINALIZADO','Processo finalizado'),(52,'PAUSADO','Pausado'),(53,'EM_ESPERA','Em espera'),(54,'EM_PRODUCAO','Em producao'),(55,'PRONTO_PARA_FATURAR','Pronto para faturar'),(56,'FATURADO','Faturado'),(57,'EM_COTACAO_DE_PRECO','Em cotacao de preco'),(58,'EM_ORDEM_COMPRA','Em ordem compra');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_conta_corrente`
--

DROP TABLE IF EXISTS `tipo_conta_corrente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipo_conta_corrente` (
  `id_tipo_conta_corrente` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tipo_conta_corrente` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_tipo_conta_corrente`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_conta_corrente`
--

LOCK TABLES `tipo_conta_corrente` WRITE;
/*!40000 ALTER TABLE `tipo_conta_corrente` DISABLE KEYS */;
INSERT INTO `tipo_conta_corrente` VALUES (1,'Conta Corrente'),(2,'Poupança'),(3,'Carteira/Caixa'),(4,'Investimento'),(5,'Cartão Crédito'),(6,'Outros');
/*!40000 ALTER TABLE `tipo_conta_corrente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transportadora`
--

DROP TABLE IF EXISTS `transportadora`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transportadora` (
  `id_transportadora` int NOT NULL AUTO_INCREMENT,
  `id_pessoa` int DEFAULT NULL,
  `placa_veiculo` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_transportadora`),
  KEY `id_pessoa` (`id_pessoa`),
  CONSTRAINT `transportadora_ibfk_1` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id_pessoa`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transportadora`
--

LOCK TABLES `transportadora` WRITE;
/*!40000 ALTER TABLE `transportadora` DISABLE KEYS */;
INSERT INTO `transportadora` VALUES (4,12,NULL);
/*!40000 ALTER TABLE `transportadora` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unidade`
--

DROP TABLE IF EXISTS `unidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `unidade` (
  `id_unidade` bigint unsigned NOT NULL AUTO_INCREMENT,
  `abrev` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unidade` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_unidade`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unidade`
--

LOCK TABLES `unidade` WRITE;
/*!40000 ALTER TABLE `unidade` DISABLE KEYS */;
INSERT INTO `unidade` VALUES (1,'kg','Kilograma'),(2,'l','Litro');
/*!40000 ALTER TABLE `unidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vendedor`
--

DROP TABLE IF EXISTS `vendedor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vendedor` (
  `id_vendedor` int NOT NULL AUTO_INCREMENT,
  `id_pessoa` int DEFAULT NULL,
  `comissao` decimal(5,2) DEFAULT NULL,
  `metas` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id_vendedor`),
  KEY `id_pessoa` (`id_pessoa`),
  CONSTRAINT `vendedor_ibfk_1` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id_pessoa`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendedor`
--

LOCK TABLES `vendedor` WRITE;
/*!40000 ALTER TABLE `vendedor` DISABLE KEYS */;
INSERT INTO `vendedor` VALUES (2,12,NULL,NULL);
/*!40000 ALTER TABLE `vendedor` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-10-15 20:56:11
