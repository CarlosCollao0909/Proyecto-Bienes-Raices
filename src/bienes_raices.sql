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
-- Table structure for table `entradasblog`
--

DROP TABLE IF EXISTS `entradasblog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `entradasblog` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `escritorID` int DEFAULT NULL,
  `contenido` longtext,
  `descripcion` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `entradasblog_escritores_FK` (`escritorID`),
  CONSTRAINT `entradasblog_escritores_FK` FOREIGN KEY (`escritorID`) REFERENCES `escritores` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entradasblog`
--

LOCK TABLES `entradasblog` WRITE;
/*!40000 ALTER TABLE `entradasblog` DISABLE KEYS */;
INSERT INTO `entradasblog` VALUES (29,'Terraza en el techo de tu casa: ¡Un oasis urbano!','2025-01-20',2,'Descubre cómo transformar tu terraza en el techo en un verdadero espacio de ensueño, un oasis urbano que te permitirá escapar del bullicio de la ciudad y disfrutar de momentos únicos al aire libre. Te daremos consejos prácticos y detallados sobre cómo elegir los mejores materiales, asegurando que sean duraderos, resistentes a las inclemencias del tiempo y que mantengan la estética deseada a lo largo de los años. Exploraremos técnicas para optimizar el diseño, aprovechando cada metro cuadrado para crear diferentes zonas: desde un área de relax con tumbonas hasta un comedor al aire libre o incluso un pequeño huerto urbano. Aprenderás sobre sistemas de iluminación exterior que crean ambientes mágicos al anochecer, mobiliario resistente a la intemperie que no compromete la comodidad ni el estilo, y qué tipo de plantas y vegetación prosperan en altura, añadiendo frescura, color y un toque natural. Además, te mostraremos cómo maximizar su potencial no solo como área de ocio, sino también como un espacio para reuniones sociales, eventos o simplemente para disfrutar de la tranquilidad en soledad. Te daremos trucos para ahorrar dinero en el proceso de construcción o remodelación y cómo evitar los errores más comunes que podrían costarte tiempo y recursos. ¡Haz de tu terraza el lugar favorito de tu hogar, un verdadero santuario personal y una extensión de tu vida al aire libre!','Crea un oasis en tu terraza: diseño, materiales y ahorro.'),(30,'Guía para la decoración de tu hogar: Estilo y funcionalidad','2025-01-25',1,'Maximiza cada rincón de tu hogar con esta guía completa y detallada de decoración, diseñada para transformar tus espacios y hacerlos más funcionales y estéticos. Aprenderás a combinar muebles y colores de una manera armónica y estratégica para darle vida a cada habitación, creando ambientes que no solo sean visualmente atractivos sino que también reflejen tu personalidad, tus gustos y tu estilo de vida. Incluimos tips esenciales sobre iluminación, tanto natural como artificial, explicando cómo utilizarla para ampliar visualmente los espacios, resaltar elementos decorativos y crear diferentes atmósferas según la hora del día o la ocasión. Te guiaremos paso a paso en la correcta distribución del mobiliario para optimizar la fluidez del tránsito y la funcionalidad en cada área, desde la sala de estar y el comedor hasta el dormitorio y la oficina en casa. Además, te enseñaremos cómo seleccionar accesorios decorativos, textiles, obras de arte y elementos personales que complementen tu estilo y añadan ese toque final distintivo y acogedor a tu hogar. ¡Convierte tu casa en un verdadero hogar, donde cada elemento tiene un propósito y contribuye a un ambiente armonioso, funcional y lleno de carácter, con nuestros trucos de experto que harán que cada detalle cuente y marque la diferencia!','Decora tu hogar: combina muebles y colores para un estilo único.'),(31,'Invierte en propiedades: Guía para principiantes','2025-02-10',3,'¿Estás pensando seriamente en invertir en bienes raíces pero te sientes abrumado por la complejidad del mercado y no sabes por dónde empezar? Esta guía exhaustiva es perfecta para ti, diseñada específicamente para principiantes que buscan una base sólida y confiable. Cubrimos los fundamentos esenciales de la inversión inmobiliaria, desde la crucial identificación de propiedades con alto potencial de revalorización y rentabilidad a largo plazo, hasta la gestión efectiva de alquileres, el mantenimiento del inmueble y los aspectos legales clave. Aprenderás sobre los diferentes tipos de inversión disponibles, como propiedades residenciales (unifamiliares, apartamentos), comerciales (locales, oficinas), vacacionales o terrenos, evaluando a fondo los riesgos inherentes y los beneficios esperados de cada una. Te guiaremos en el proceso de cómo construir un portafolio de inversión sólido y diversificado que se alinee perfectamente con tus objetivos financieros a corto, mediano y largo plazo, asegurando así tu estabilidad y crecimiento económico futuro. Además, te proporcionaremos información clave sobre opciones de financiamiento, aspectos tributarios, y las últimas tendencias del mercado para que tomes decisiones inteligentes y estratégicas que maximicen tus retornos.','Guía completa para invertir en propiedades: ¡Empieza hoy!'),(32,'Los barrios más prometedores para vivir en 2025','2025-02-28',4,'Descubre cuáles son los barrios con mayor proyección de crecimiento, calidad de vida y oportunidades de inversión para este año 2025, basándonos en un análisis exhaustivo del mercado inmobiliario y las tendencias urbanas. Analizamos a fondo factores clave como la infraestructura existente y planificada (sistemas de transporte público, nuevos hospitales, escuelas de calidad, centros culturales), la seguridad ciudadana y los índices de criminalidad, el acceso a servicios esenciales y de ocio (centros comerciales, parques, gimnasios, restaurantes de moda, vida nocturna), y la valoración histórica y las previsiones de crecimiento de las propiedades en la zona. Si estás buscando tu próximo hogar y quieres asegurar una buena inversión a largo plazo que te ofrezca una excelente calidad de vida, o si eres un inversor inmobiliario en busca de las mejores oportunidades de rentabilidad, esta información detallada te ayudará a tomar una decisión informada y acertada. Te proporcionaremos datos concretos, estadísticas relevantes y previsiones de expertos para que no te quedes atrás en las mejores oportunidades del mercado. ¡No te pierdas los detalles sobre dónde invertir tu dinero y tu futuro para maximizar tu bienestar y tu patrimonio!','Descubre los barrios con mayor proyección y calidad de vida.'),(33,'Remodelaciones que aumentan el valor de tu propiedad','2025-03-15',5,'Antes de poner tu casa en venta, considera cuidadosamente estas remodelaciones estratégicas que no solo embellecerán tu propiedad, sino que también pueden aumentar significativamente su valor en el mercado y atraer a más compradores potenciales. Desde pequeñas mejoras estéticas que impactan visualmente y son de bajo costo, como pintar paredes con colores neutros, actualizar grifos o instalar iluminación moderna, hasta proyectos más grandes y complejos como la renovación completa de cocinas o baños, te mostraremos cuáles son las inversiones más rentables y cómo calcular su retorno de inversión (ROI). Aprenderás a priorizar las reformas que ofrecen el mayor atractivo para una amplia gama de compradores, a elegir materiales que sean duraderos, estéticamente agradables y de buen gusto, y a optimizar tu presupuesto para obtener el máximo beneficio sin excederte. Te daremos consejos prácticos sobre cómo presentar tu propiedad de manera impecable para las visitas y cómo enfocar las remodelaciones para lograr una venta más rápida y a un precio superior. ¡Transforma tu casa en un imán para compradores y maximiza tu ganancia!','Remodelaciones clave para aumentar el valor de tu casa.'),(34,'Casas ecológicas: Viviendas del futuro','2025-04-01',1,'Explora el fascinante mundo de las casas ecológicas y sostenibles, una tendencia arquitectónica y de estilo de vida que está redefiniendo la construcción moderna y la relación con el medio ambiente. Conoce en profundidad los materiales innovadores y de bajo impacto ambiental que se utilizan en su construcción, como la madera certificada, el bambú, los ladrillos reciclados, el adobe o los aislamientos naturales. Descubre las tecnologías de eficiencia energética que las caracterizan, desde la instalación de paneles solares fotovoltaicos para generar electricidad y sistemas de recolección y reutilización de agua de lluvia, hasta el diseño bioclimático que optimiza la ventilación natural y la iluminación solar para reducir drásticamente el consumo energético. Analizaremos los diseños arquitectónicos que minimizan el impacto ambiental durante su construcción y vida útil, integrándose armónicamente con el entorno natural y respetando la biodiversidad local. Descubre cómo una vivienda \"verde\" no solo es una elección responsable y ética para el planeta, sino que también puede reducir significativamente tus costos de vida a largo plazo gracias a la eficiencia energética, y ofrecerte un ambiente interior más saludable, libre de toxinas y confortable. ¡El futuro de la vivienda ya está aquí y es sostenible y accesible para todos!','Conoce las casas ecológicas: sostenibles y eficientes.'),(35,'Consejos para vender tu propiedad rápidamente','2025-04-20',2,'Si te encuentras en la situación de necesitar vender tu propiedad en un corto periodo de tiempo, estos consejos prácticos y probados te serán de gran ayuda para agilizar el proceso y obtener el mejor resultado posible en el mercado. Desde la preparación meticulosa del inmueble para las visitas (conocido como \"home staging\", donde se despersonaliza y organiza el espacio para que los compradores puedan imaginarse viviendo allí), pasando por la toma de fotografías profesionales de alta calidad que destaquen sus mejores atributos y ángulos, hasta la negociación estratégica del precio, te guiaremos en cada paso crucial del proceso de venta. Aprende a destacar tu propiedad en un mercado competitivo, a fijar un precio competitivo y atractivo que genere un alto nivel de interés y tráfico de visitas, y a manejar las ofertas recibidas de manera efectiva y profesional para cerrar la venta con éxito y en el menor tiempo posible. Te daremos trucos sobre cómo promocionar tu casa en las plataformas adecuadas (portales inmobiliarios, redes sociales), cómo realizar visitas memorables y cómo comunicarte de manera eficiente con los posibles compradores para maximizar tus posibilidades de venta. ¡Con la aplicación de estos tips, tu propiedad no durará mucho en el mercado y podrás cerrar la venta con la mayor eficiencia!','Vende tu propiedad rápido: preparación, precio y negociación.'),(36,'Remodelaciones que aumentan el valor de tu propiedad','2025-05-22',3,'Antes de poner tu casa en venta, considera cuidadosamente estas remodelaciones estratégicas que no solo embellecerán tu propiedad, sino que también pueden aumentar significativamente su valor en el mercado y atraer a más compradores potenciales. Desde pequeñas mejoras estéticas que impactan visualmente y son de bajo costo, como pintar paredes con colores neutros, actualizar grifos o instalar iluminación moderna, hasta proyectos más grandes y complejos como la renovación completa de cocinas o baños, te mostraremos cuáles son las inversiones más rentables y cómo calcular su retorno de inversión (ROI). Aprenderás a priorizar las reformas que ofrecen el mayor atractivo para una amplia gama de compradores, a elegir materiales que sean duraderos, estéticamente agradables y de buen gusto, y a optimizar tu presupuesto para obtener el máximo beneficio sin excederte. Te daremos consejos prácticos sobre cómo presentar tu propiedad de manera impecable para las visitas y cómo enfocar las remodelaciones para lograr una venta más rápida y a un precio superior. ¡Transforma tu casa en un imán para compradores y maximiza tu ganancia!','Remodelaciones clave para aumentar el valor de tu casa.'),(37,'Molestiae et sunt q','2013-06-27',6,'Incidunt nulla est ','Labore consectetur d');
/*!40000 ALTER TABLE `entradasblog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `escritores`
--

DROP TABLE IF EXISTS `escritores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `escritores` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `escritores`
--

LOCK TABLES `escritores` WRITE;
/*!40000 ALTER TABLE `escritores` DISABLE KEYS */;
INSERT INTO `escritores` VALUES (1,'Ana','García','77712345'),(2,'Juan','Martínez','65498712'),(3,'María','Pérez','70055588'),(4,'Carlos','Sánchez','79876543'),(5,'Laura','Díaz','60123456'),(6,'Emma','Escobar','78965456');
/*!40000 ALTER TABLE `escritores` ENABLE KEYS */;
UNLOCK TABLES;

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

-- Dump completed on 2025-05-23 12:48:17
