-- MySQL dump 10.13  Distrib 8.0.40, for Win64 (x86_64)
--
-- Host: localhost    Database: bienesraices_crud
-- ------------------------------------------------------
-- Server version	8.0.40

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
-- Table structure for table `propiedades`
--

DROP TABLE IF EXISTS `propiedades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `propiedades` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `imagen` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `descripcion` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `habitaciones` int DEFAULT NULL,
  `wc` int DEFAULT NULL,
  `estacionamiento` int DEFAULT NULL,
  `creado` date DEFAULT NULL,
  `vendedorID` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `propiedades_vendedores_fk` (`vendedorID`),
  CONSTRAINT `propiedades_vendedores_fk` FOREIGN KEY (`vendedorID`) REFERENCES `vendedores` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `propiedades`
--

LOCK TABLES `propiedades` WRITE;
/*!40000 ALTER TABLE `propiedades` DISABLE KEYS */;
INSERT INTO `propiedades` VALUES (11,'Casa Moderna en el Bosque',90000.00,'ea6622ac0c852b43f1adf664b9820af2.jpg','Vive en armonía con la naturaleza en esta casa moderna rodeada de árboles. Cuenta con grandes ventanales que permiten una iluminación natural excepcional, acabados de lujo y una terraza perfecta para disfrutar del aire libre. La distribución de sus espacios está diseñada para brindar confort y tranquilidad.',2,2,2,'2025-01-26',2),(12,'Villa de Lujo con Vista al Mar',200000.00,'594c2d1bea95203a16897cab18a03d0d.jpg','Impresionante villa con un diseño arquitectónico de vanguardia y espectaculares vistas al océano. Disfruta de un amplio balcón, piscina infinita y acabados premium. Ubicada en una zona exclusiva, ofrece privacidad y acceso a playas paradisíacas. Ideal para quienes buscan un refugio de lujo frente al mar.',2,1,1,'2025-02-03',2),(13,'Casa de Montaña junto al Lago',1285863.00,'78aef240e32c8f9ed9f2f08e34ad3d52.jpg','Disfruta de la tranquilidad en esta acogedora casa de montaña con vista al lago. Su diseño rústico y elegante se complementa con una chimenea de piedra, techos de madera y amplios ventanales. Perfecta para escapadas relajantes o para vivir rodeado de naturaleza sin perder las comodidades modernas.',2,1,1,'2025-02-03',1),(14,'Residencia Exclusiva con Alberca en Tarija',236999.00,'1a8b6b4068a3154dbb670439a37b1967.jpg','Hermosa casa de lujo con piscina privada, ideal para el confort y la exclusividad. Ubicada en una de las mejores zonas de Tarija, cuenta con amplios espacios interiores, terraza con área de BBQ y un jardín perfectamente diseñado. Su distribución funcional la convierte en una excelente opción familiar.',2,2,2,'2025-02-04',2),(15,'Moderna Propiedad en Zona Residencial',360999.00,'0c2cc684eb1b2f2ce2ecae30a20334d0.jpg','Casa contemporánea con tecnología de automatización, espacios abiertos y acabados de alta calidad. Su ubicación estratégica permite un acceso rápido a centros comerciales y avenidas principales. Equipada con domótica, seguridad avanzada y áreas sociales para el máximo confort y bienestar.',1,3,1,'2025-02-04',2),(16,'Penthouse de Lujo con Terraza Panorámica',563999.00,'3175316081882c4c8e07800873531aeb.jpg','Departamento exclusivo en la cima de un moderno edificio con terraza privada y vistas impresionantes. Cuenta con jacuzzi, cocina equipada con electrodomésticos de alta gama y grandes ventanales que llenan los espacios de luz natural. Vive con elegancia en una de las mejores zonas de la ciudad.',4,1,1,'2025-02-06',1),(17,'Casa Familiar con Diseño Clásico',856333.00,'ef12f80d109d5f971239eb302f1c55c8.jpg','Encantadora casa de diseño tradicional con espacios amplios, techos altos y un hermoso jardín. Ubicada en un vecindario tranquilo, perfecta para familias que buscan comodidad y seguridad. Cuenta con cocina espaciosa, patio trasero y acabados de madera que aportan calidez a cada ambiente.',3,1,1,'2025-02-06',1),(18,'Casa Moderna con Estilo Vanguardista',325411.00,'4174c2f615e8a6bc66b290134b7e58da.jpg','Innovadora propiedad con un diseño minimalista y detalles de vanguardia. Sus espacios abiertos y grandes ventanales crean una conexión fluida entre el interior y el exterior. Ubicada en una zona exclusiva, cerca de parques y centros comerciales, ideal para quienes buscan modernidad y confort.',1,1,1,'2025-02-06',1),(19,'Residencia de Alto Estándar en la Ciudad',503030.00,'06291a7b8734b4b1ab665cd572aaec63.jpg','Exclusiva casa con acabados de primera calidad, ubicada en una zona privilegiada. Su arquitectura elegante combina lujo y funcionalidad, con una cocina gourmet, amplios espacios y tecnología de hogar inteligente. Perfecta para quienes buscan comodidad y sofisticación en cada detalle.',3,1,1,'2025-02-08',2),(20,'Propiedad con Diseño Clásico',695999.00,'4a18bb78365e18e691cb106e063e08f7.jpg','Impresionante casa con un estilo clásico que resalta por su elegancia y amplitud. Con un gran jardín, terrazas y acabados de lujo, es ideal para familias grandes o quienes buscan un hogar con carácter y distinción. La iluminación natural y la distribución optimizada garantizan un ambiente acogedor.',2,3,4,'2025-02-11',1);
/*!40000 ALTER TABLE `propiedades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `password` char(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (2,'correo@correo.com','$2y$10$0/14X7A3njUy2ipr2vZRQuNyT9a7NM2NrPBVvsZsO8YVt.fp95D6C');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vendedores`
--

DROP TABLE IF EXISTS `vendedores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vendedores` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendedores`
--

LOCK TABLES `vendedores` WRITE;
/*!40000 ALTER TABLE `vendedores` DISABLE KEYS */;
INSERT INTO `vendedores` VALUES (1,'Juan Carlos','Collao Mamani','69575687'),(2,'Marta Laura','Vegas Prado','78965412'),(11,'Guadalupe','Esparza','78965412'),(13,'Ana Paola','Sanchez','78541236');
/*!40000 ALTER TABLE `vendedores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'bienesraices_crud'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-03-27 22:04:15
