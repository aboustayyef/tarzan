# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.35-0ubuntu0.12.04.2)
# Database: tarzan
# Generation Time: 2014-03-05 19:21:55 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table data
# ------------------------------------------------------------

DROP TABLE IF EXISTS `data`;

CREATE TABLE `data` (
  `page_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(200) NOT NULL,
  `page_title` varchar(200) CHARACTER SET utf8 NOT NULL,
  `page_image` varchar(200) CHARACTER SET utf8 NOT NULL,
  `page_content` longtext CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `data` WRITE;
/*!40000 ALTER TABLE `data` DISABLE KEYS */;

INSERT INTO `data` (`page_id`, `page_name`, `page_title`, `page_image`, `page_content`)
VALUES
	(1,'haulage','Haulage and Fleet','tarzan-images/trucks.png','<p class =\"lead\">Tarzan has a long history and experience in haulage transport. Our red trucks are recognizable all over Ghana and our name is equivalent to goodwill. Our operations division is staffed with highly seasoned experts that can assist in delivering the quality of transport service that you\'ve come to expect.</p>\r\n\r\n<p><img src =\"tarzan-images/tarzan-image2.jpg\"></p>\r\n\r\n<h3>Why Tarzan?</h3>\r\n<hr/>\r\n<p>With 70 years of experience in haulage and logistics, Tarzan haulage offers unbeatable quality and value. Here are the reasons why our services stand out:</p>\r\n<hr/>\r\n<ul>\r\n<li><strong>Reputation:</strong> Tarzan has been in the Haulage business for 70 years, gaining a vast experience.</li>\r\n<li><strong>Reliability:</strong> Tarzan has its own workshop and an always-ready maintenance team. Even more, we maintain our fleet on regular basis. this will guarantee an uninterrupted service.</li>\r\n<li><strong>Readiness:</strong> Our fleet is always ready to begin with a new job, which makes us ideal for clients with urgent needs.</li>\r\n</ul>\r\n\r\n<h3>Technical Details</h3>\r\n            \r\n<p><strong>Hauling destinations:</strong>We haul to most of the Ghanaian territory</p>\n<p>our rates vary according to the assignment details, including distance, weight, return time and other requirements</p>\r\n<p><strong>Rates:</strong> Our rates largely depend on the distance we cross and the weight of the goods. We also have promotional Prices for Large jobs</p>\r\n<p><b>Trailer Types:</b> flatbeds and sided, standardized and interchangeable</p>\r\n\r\n<h3>Contact Us</h3>\r\n\r\n<p>Have more questions about our haulages services? <a href =\"contact.php\">Get in touch</a> with us..</p>'),
	(2,'container depot','Container Depot','tarzan-images/forklifts.gif','<p class =\"lead\">In late 2002, Tarzan has upgraded its Tema yard by adding an extra 12,000 m2 of reinforced concrete. Together with our forklifts, it will be an ideal environment for containerizing goods before sending them to the harbour, thus avoiding the congestion now common there.</p>\r\n<p><img src =\"tarzan-images/tarzan-container-depot.jpg\"></p>\r\n\r\n<h3>Operations</h3>\r\n\r\n<p>Operations in the container depot include offloading and loading cocoa beans, stacking containers and preparing them for shipping out. Tarzan\'s heavy duty forklifts take care of handling the containers</p>\n\n<h3>Types of Forklift Available</h3>\r\n<ul>\n<li>1 x 46 - tonner SMV</li>\n<li>2 x 28 - tonner SMV</li>\n<li>1 x 13.6 - tonner SMV</li>\n<li>1 x 6 - Tonner BOSS</li>\n<li>2 x 2 - Tonner BVOSS</li>\n</ul>\n\n\r\n<p><img src =\"tarzan-images/forklift-small.jpg\"></p>\r\n<p><img src =\"tarzan-images/forklift-medium.jpg\"></p>\r\n<p><img src =\"tarzan-images/forklift-large.jpg\"></p>\r\n<h4>Find out more</h4>\r\n\r\n<p>Find out more about our operations by <a href =\"contact.php\">contacting us</a>'),
	(3,'warehousing','Tema Warehouses','tarzan-images/warehouses.png','<p class =\"lead\">Our Tema warehouses (Motorway Roundabout and Akasanoma) Are ideal to store up to 56,000 tons of goods, in a clean and well maintained environment. Currently, the warehouses are being all used by the CMC (Cocoa Marketing Company in Ghana) and are therefore not available for rent.</p>\r\n\r\n<p><img src =\"tarzan-images/tarzan-yard-front.jpg\"></p>\r\n\r\n<h3>Blue Gallery Warehouses</h3>\r\n\r\n<p><img src =\"tarzan-images/warehouses-bg.jpg\"></p>\r\n\r\n<p class =\"lead\">Our Blue Gallery warehouses (Aflao road) form a new standard of cleanliness and style. The Warehouses are also rented by the cocoa board.</p>'),
	(4,'stores','Commercial Stores','tarzan-images/tenants.jpg','<p class =\"lead\">Our building in kantamanto is strategically located in the heart of Accra\'s commercial zone. Because of our good location and ample parking space, our tenants include many of Ghana\'s most reputed banks (see left sidebar for list)</p>\r\n\r\n<iframe width=\"600\" height=\"350\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Mamleshie+Road,+Accra,+Greater+Accra,+Ghana&amp;aq=0&amp;oq=mamleshie+&amp;sll=7.900284,-1.024801&amp;sspn=17.474773,33.33252&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=Mamleshie+Rd,+Ashiedu+Keteke,+Accra,+Accra+Metropolis,+Greater+Accra,+Ghana&amp;ll=5.560461,-0.216894&amp;spn=0.029899,0.051498&amp;z=14&amp;iwloc=A&amp;output=embed\"></iframe><br /><small><a href=\"https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Mamleshie+Road,+Accra,+Greater+Accra,+Ghana&amp;aq=0&amp;oq=mamleshie+&amp;sll=7.900284,-1.024801&amp;sspn=17.474773,33.33252&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=Mamleshie+Rd,+Ashiedu+Keteke,+Accra,+Accra+Metropolis,+Greater+Accra,+Ghana&amp;ll=5.560461,-0.216894&amp;spn=0.029899,0.051498&amp;z=14&amp;iwloc=A\" style=\"color:#0000FF;text-align:left\">View Larger Map</a></small>\r\n\r\n<h3>Future Plans</h3>\r\n\r\n<p><a href =\"news.php?id=6\"><img src =\"tarzan-images/7-avenue.jpg\"></a></p>\r\n\r\nTarzan is in the process of planning and preparing for the development of a comercial center in the heart of Accra. <a href =\"news.php?id=6\">Find out more</a> about this.\r\n\r\n<h3>Contact us</h3>\r\n\r\n<p>For inquiries please <a href =\"contact.php\">send us an email</a> or call us on 0302 662234</p>');

/*!40000 ALTER TABLE `data` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table news
# ------------------------------------------------------------

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `news_id` smallint(4) NOT NULL AUTO_INCREMENT,
  `news_title` text CHARACTER SET utf8 NOT NULL,
  `news_date` date NOT NULL,
  `news_content` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;

INSERT INTO `news` (`news_id`, `news_title`, `news_date`, `news_content`)
VALUES
	(1,'Addition of 10 Mercedes Actros&reg; trucks to our fleet','2003-09-11','<p><img src =\"news-images/red-actros.jpg\"></p>\r\n\r\n<p>In its constant effort to upgrade its services to its dear clients, Tarzan has acquired 10 brand new trucks, as the first phase of a general plan to renew its fleet.</p>\r\n\r\n<p>This is consistant with Tarzan&apos;s philosophy of providing reliable and robust services to its clients.</p>\r\n\r\n<p>for more info about Mercedes Actros&reg; Trucks, visit:</p>\r\n\r\nhttp://www.mercedes-benz.com/e/ecars/trucks/modelle/actros/'),
	(2,'Arrival of an additional 28 Tonner SMV&reg; forklift to Tarzan&apos;s Yard','2004-07-06','<p>To further improve the handling of containers in our container depot, we acquired a new 28 Tonner forklift</p>'),
	(3,'Construction begins on new Tema Premises','2005-11-11','<p>We have begun the work on a new complex that comprises a large showroom (800m2), large warehouses (7000m2) and a container depot.</p><p> The first phase of the project should end by mid 2006. It consists of the showroom and the smaller warehouse. The second phase is expected to end by mid 2007</p>'),
	(4,'Blue Gallery to open for public','2008-05-11','<p><img src =\"news-images/bluegallery-2008.jpg\"></p>\r\n\r\n<p>Blue Gallery, one of Ghana&apos;s Largest and most stylish furniture showrooms will open in Tarzan&apos;s Aflao road premises</p>'),
	(5,'Acquisition of Kone Crane SMV Reach Stacker','2012-08-05','<p><img src =\"news-images/kone-stacker.jpg\"></p>\r\n\r\n<p>In its commitment to provide excellence and a full service to our clients, we proudly announce the acquisition of a 10-45 Tonnes Kone Crane SMV reach Stacker.</p>\r\n\r\n<p>Kone Crane&apos;s latest generation of SMV reach stackers is based on more than 50 years of experience in designing and customizing trucks for the most demanding use. This knowledge combined with modern, proven technology underlies the market&apos;s most extensive series of powerful and reliable reach stackers.</p>'),
	(6,'Commercial development planned for Accra','2012-10-28','<p><img src =\"tarzan-images/7-avenue.jpg\"></p>\r\n\r\n<p>A commercial building unlike any other Accra has seen has now finished the design and development phase. Ground breaking will hopefully begin soon.</p>\r\n\r\n<p>The promotional video below presents the project in context: </p>\r\n\r\n<iframe width=\"640\" height=\"360\" src=\"http://www.youtube.com/embed/fd5r7qYx0gk\" frameborder=\"0\" allowfullscreen></iframe>');

/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
