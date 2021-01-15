/*
SQLyog Enterprise v12.09 (64 bit)
MySQL - 10.4.11-MariaDB : Database - vessel
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`vessel` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `vessel`;

/*Table structure for table `contactmethods` */

DROP TABLE IF EXISTS `contactmethods`;

CREATE TABLE `contactmethods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `twitter` varchar(1000) DEFAULT NULL,
  `facebook` varchar(1000) DEFAULT NULL,
  `instagram` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `contactmethods` */

insert  into `contactmethods`(`id`,`address`,`phone`,`email`,`twitter`,`facebook`,`instagram`) values (1,'Isle of Man','123456789','support@info.com','https://www.twitter.com','https://www.facebook.com','https://www.instagram.com');

/*Table structure for table `crewmembers` */

DROP TABLE IF EXISTS `crewmembers`;

CREATE TABLE `crewmembers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `backgroundcolor` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `crewmembers` */

insert  into `crewmembers`(`id`,`name`,`position`,`image`,`text`,`backgroundcolor`) values (1,'Greg Stylo','Captain','images/captain.jpg','Polish-Briton Greg Stylo began his career as a diving instructor and then went on to work as an engineer and mate/relief captain aboard several luxury charter and private yachts. Aboard Boom Shakalaka he quickly made his way through the ranks to achieve Relief Captain in just 3 years. Greg holds a RYA Yacht Primary Offshore qualification. He is well known for his ability to handle all kinds of challenging situations with a smile and good humour. When he is not working, our captain enjoys diving, reading, and mixing cocktails.','lightgrey'),(2,'Sam Rearden','Chief Engineer','images/captain.jpg','Sam Rearden has spent a decade at sea as a chief engineer aboard various prestigious vessels, including private and yachts. When he is not responsible for keeping luxury sea vessels in tip-top shape, he enjoys rock climbing and designing furniture.','white'),(3,'Greg Gibson','Mate','images/captain.jpg','Born in sunny South Africa, bosun Greg Gibson has accumulated a wealth of experience aboard motor yachts over the last 15 years. He is a qualified RYA Yacht Primary Offshore, as well as a certified water sports, diving and videography instructor. Greg is a man of many talents and a passion for sharing his knowledge, which is why when he does not train guests to jet ski or dive, he enjoys mentoring green crew.','lightgrey'),(4,'Liezl Munnik','Chief Stewardess and Purser','images/captain.jpg','Before embarking on a maritime career South African Liezl Munnik was a legal professional. She is a born leader who has managed private estates, luxury vessels and huge teams comprising hundreds of people. Liezl is skilled at handling all types of managerial matters aboard a ship, from serving guests and managing crew to dealing with administrative, technical, financial, and legal matters. She holds the internationally accredited Beluga Training, speaks seven languages, and has worked with people from many different cultures. Outside all of this Liezl is also a Hatha Yoga instructor, Pranayama Teacher, Ayurveda practitioner, certified massage therapist and energy healer.','white');

/*Table structure for table `decks` */

DROP TABLE IF EXISTS `decks`;

CREATE TABLE `decks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `decks` */

insert  into `decks`(`id`,`image`) values (1,'images/giorgia-1.jpg'),(2,'images/giorgia-2.jpg'),(3,'images/giorgia-5.jpg'),(4,'images/WhatsAppImage2019-11-02at11.30.25 PM(1).jpeg');

/*Table structure for table `destinations` */

DROP TABLE IF EXISTS `destinations`;

CREATE TABLE `destinations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `destinations` */

insert  into `destinations`(`id`,`image`) values (1,'images/WhatsApp Image 2019-11-02 at 11.30.28 PM(3).jpeg'),(2,'images/WhatsApp Image 2019-11-02 at 11.30.28 PM(4).jpeg'),(3,'images/WhatsApp Image 2019-11-02 at 11.30.28 PM(5).jpeg'),(4,'images/WhatsApp Image 2019-11-02 at 11.30.28 PM(6).jpeg'),(5,'images/WhatsApp Image 2019-11-02 at 11.30.28 PM.jpeg'),(6,'images/WhatsApp Image 2019-11-02 at 11.30.29 PM(1).jpeg');

/*Table structure for table `experiencetexts` */

DROP TABLE IF EXISTS `experiencetexts`;

CREATE TABLE `experiencetexts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `food` varchar(255) DEFAULT NULL,
  `toy` varchar(255) DEFAULT NULL,
  `fooddescription` text DEFAULT NULL,
  `toydescription` text DEFAULT NULL,
  `destination` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `experiencetexts` */

insert  into `experiencetexts`(`id`,`food`,`toy`,`fooddescription`,`toydescription`,`destination`) values (1,'food','toy','Thanks to extensive Michelin-star restaurant experience, our chef can effortlessly whip up culinary masterpieces that satisfy diverse tastes. You can enjoy a range of cuisines, ranging from haute cuisine, to BBQ and spit roast tandoori oven. All meals are prepared with the highest quality ingredients and appliances. Food is served on the Sun, Sky and Main decks, the deck aft, and inside the main saloon.\r\n\r\nIf you chose to take advantage of our wellness programs, we incorporate nutrition counselling that will help you restore your body’s balance and boost your energy levels. Whether you are just starting or maintaining your wellness journey, the chef can cater to vegan, vegetarian, gluten-free, banting, ketogenic and low carbohydrate needs. Whether you want to indulge or detox, you are guaranteed a high-end dining experience aboard Giorgia. ','Giorgia is outfitted with state-of-the-art water sports equipment suitable for all types of activities, be it adrenaline-pumping, relaxing or children-friendly. The speedy Yamaha Waverunners will let you hit the water running and race your friends to the shore. For a total adrenaline boost, grab one of the powerful Cayago Seabobs and dive 20 feet underwater at a speed of 40 miles per hour. If all you want is something more laid-back, simply watch the underwater world go by while snorkelling or paddle boarding.\r\nFull List of Toys:\r\n\r\n2 x Cayago FG7 Sea bobs\r\n2 x 2 seat Yamaha GP1300R Wave runners\r\nWater-Skis for kids and adults\r\nWake Board\r\nPaddleboard\r\nDoughnuts\r\nSnorkelling Equipment','destination');

/*Table structure for table `exteriors` */

DROP TABLE IF EXISTS `exteriors`;

CREATE TABLE `exteriors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `exteriors` */

insert  into `exteriors`(`id`,`image`) values (1,'exterior1.jpeg'),(2,'exterior2.jpeg'),(3,'exterior3.jpeg');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `foods` */

DROP TABLE IF EXISTS `foods`;

CREATE TABLE `foods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `foods` */

insert  into `foods`(`id`,`image`) values (1,'images/food.jpg'),(2,'images/food1.jpg'),(3,'images/food2.jpg');

/*Table structure for table `heroimages` */

DROP TABLE IF EXISTS `heroimages`;

CREATE TABLE `heroimages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `heroimages` */

insert  into `heroimages`(`id`,`image`) values (1,'Giorgia-RearProfile.jpg'),(2,'Giorgia-Starboard.jpg'),(3,'[36m-Yacht-GIORGIA]-1618-40.jpg'),(4,'[36m-Yacht-GIORGIA]-1618-72.jpg'),(5,'[36m-Yacht-GIORGIA]-1618-22.jpg'),(6,'[36m-Yacht-GIORGIA]-1618-16.jpg');

/*Table structure for table `interiors` */

DROP TABLE IF EXISTS `interiors`;

CREATE TABLE `interiors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `interiors` */

insert  into `interiors`(`id`,`image`) values (1,'interior1.jpeg'),(2,'interior2.jpeg'),(3,'interior3.jpeg'),(4,'interior1.jpeg');

/*Table structure for table `introductions` */

DROP TABLE IF EXISTS `introductions`;

CREATE TABLE `introductions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `food` varchar(255) DEFAULT NULL,
  `toy` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `crewtitle` varchar(255) DEFAULT NULL,
  `bookingtitle` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `introductions` */

insert  into `introductions`(`id`,`title`,`subtitle`,`text`,`food`,`toy`,`location`,`crewtitle`,`bookingtitle`) values (1,'MY Giorgia','Understated Elegance with a Contemporary Edge','There is simply no better way to experience the sun and sea than the combination of luxury and privacy offered by a bespoke vacation aboard Motor Yacht Giorgia. Embark on a hedonistic voyage specially designed to give you and your guests a whole body, mind, and spirit Zen immersion on this 37-meter floating oasis. Far from the crowds and restrictions of other holiday options, our wellness inspired yachting retreat features massage, yoga, nutritional health, and so much more. Your yachting experience can be tailored to accommodate every need and desire, providing a sense of freedom and flexibility that is truly unrivalled.','food.jpg','toy.jpg','GIORGIA-yacht--2.jpg','crew','enquire');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `specifications` */

DROP TABLE IF EXISTS `specifications`;

CREATE TABLE `specifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `length` varchar(255) DEFAULT NULL,
  `beam` varchar(255) DEFAULT NULL,
  `draft` varchar(255) DEFAULT NULL,
  `built` varchar(255) DEFAULT NULL,
  `builder` varchar(255) DEFAULT NULL,
  `engines` varchar(255) DEFAULT NULL,
  `flag` varchar(255) DEFAULT NULL,
  `hull` varchar(255) DEFAULT NULL,
  `hull_type` varchar(255) DEFAULT NULL,
  `cabins` varchar(255) DEFAULT NULL,
  `guests` varchar(255) DEFAULT NULL,
  `crew` varchar(255) DEFAULT NULL,
  `speed` varchar(255) DEFAULT NULL,
  `range` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `specifications` */

insert  into `specifications`(`id`,`length`,`beam`,`draft`,`built`,`builder`,`engines`,`flag`,`hull`,`hull_type`,`cabins`,`guests`,`crew`,`speed`,`range`) values (1,'36.6 m (120’)','7.86 m (26’)','1.96 m (6’)','2009','Azimut Benetti SpA','2 x Caterpillar C32 1550 bhp','images/man_flag.png','Glass-Reinforced Plastic','Displacement','5','10','7','13 knots (cruising)  16 knots (max)','3,500 mm');

/*Table structure for table `toys` */

DROP TABLE IF EXISTS `toys`;

CREATE TABLE `toys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `toys` */

insert  into `toys`(`id`,`image`) values (1,'images/toy.jpg'),(2,'images/GIORGIA-yacht--26.jpg'),(3,'images/GIORGIA-yacht--24.jpg');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values (1,'support','admin@admin.com',NULL,'$2y$10$drQppGlugI/aFBb1OeqGhOsUoneAyV30DRyN7xBqiy65725rRI.Iq','9UkZzQKkyxHRWTj2GdE5eWSxKiSDci62ED3765bsFWi86KGDcLZM880Sy3PS','2020-11-21 10:28:23','2020-11-21 10:28:23');

/*Table structure for table `vesseltexts` */

DROP TABLE IF EXISTS `vesseltexts`;

CREATE TABLE `vesseltexts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `intro` text DEFAULT NULL,
  `interiortitle` varchar(255) DEFAULT NULL,
  `interior` text DEFAULT NULL,
  `exteriortitle` varchar(255) DEFAULT NULL,
  `exterior` text DEFAULT NULL,
  `specification` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `vesseltexts` */

insert  into `vesseltexts`(`id`,`title`,`intro`,`interiortitle`,`interior`,`exteriortitle`,`exterior`,`specification`) values (1,'The Vessel','MY Giorgia presents true elegance and luxury with a large volume interior and vast outdoor space over three decks. A member of the Italian yard Benetti´s Classic 120 yacht series, MY Giorgia features a classically understated design is coupled with a teak decking and sophisticated finishes that gives the yacht a formal ambiance. With exterior styling by Stefano Righini, MY Giorgia was launched in 2009 and her neat and stylish exterior is matched with a contemporary interior that sees the more formal areas dressed in dark wood bulkheads and a neutral toned colour scheme that offers timeless appeal. \r\nThe master suite can be found on the main deck, while two VIP suites and two twin guest suites are located below deck. Each cabin features a private ensuite bathroom, state-of-the-art audio-visual system, and specially designed furnishings. The master suite also hosts a walk-through study. Each twin cabin features a Pullman berth suitable for children or a nanny. The crew quarters are located separate from the guest accommodations and include cabins for seven, with private facilities. \r\nMY Giorgia also offers great outdoor spaces: a spa pool and a bar on the sun deck and dinning and relaxing in all three levels. Naiad zero- speed stabilizers ensure that guests always experience the minimum of rolling motion and the maximum comfort while her Caterpillar C32 1550 bhp engines give her a range of 3,500 nautical miles and a top speed of 16 knots.','interior','MY Giorgia can accommodate up to ten guests in five well-appointed staterooms, all featuring ensuite marble bathrooms. \r\n\r\nThe master suite, found on the main deck, comes with a walk-through study and double sinks. Below deck you will find two VIP suites and twin Guest suites. \r\n\r\nClassically designed interiors and minimalist dark wood bulkheads contribute to a contemporary ambience, while plush furnishings create a sense of warmth, elegance and comfort.','exterior','Giorgia is a true masterpiece of high-end yachting design, featuring teak beams and elegant, no-fuss exteriors. Wherever you are going you can rest assured that you will arrive in style.\r\n\r\nA plethora of high-end entertainment and leisure facilities make Giorgia perfect for enjoying a family vacation, socializing with friends, or even more formal endeavours.  \r\n\r\nWith a choice of three decks, all featuring their own dining space, you can savour your meals al fresco, sip cocktails under the starry sky at the sundeck bar, or indulge in strawberries and champagne while soaking in the spa pool.','specification');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
