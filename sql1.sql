-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           5.7.33-log - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Listage de la structure de la table cms. admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Listage des données de la table cms.admin : ~1 rows (environ)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id`, `username`, `password`) VALUES
	(1, 'redven', '3c4ae26dad3a3e0e05b250857b2da911f5637c74');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Listage de la structure de la table cms. blog
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext,
  `img_url` longtext,
  `low_description` longtext,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Listage des données de la table cms.blog : ~1 rows (environ)
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
INSERT INTO `blog` (`id`, `title`, `description`, `img_url`, `low_description`, `date`) VALUES
	(5, 'tttttttt', 'tttttttt', 'https://i.pinimg.com/originals/72/39/10/72391070ed02392c0b23fc70d50740e3.jpg', 'tttttttt', '2021-05-07 02:00:24');
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;

-- Listage de la structure de la table cms. devlog
CREATE TABLE IF NOT EXISTS `devlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext NOT NULL,
  `low_description` longtext NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `img_url` longtext NOT NULL,
  `version` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Listage des données de la table cms.devlog : ~1 rows (environ)
/*!40000 ALTER TABLE `devlog` DISABLE KEYS */;
INSERT INTO `devlog` (`id`, `title`, `description`, `low_description`, `date`, `img_url`, `version`) VALUES
	(6, 'tttttttt', 'tttttttt', 'tttttttt', '2021-05-07 02:01:19', 'https://i.pinimg.com/originals/72/39/10/72391070ed02392c0b23fc70d50740e3.jpg', 'tttttttt'),
	(7, 'test devlog', '<center>test devlog<br>\r\ntest devlog1<br>\r\ntest devlog2</center>', 'test devlog', '2021-05-09 18:31:58', 'https://i.imgur.com/XcQvaRJ.jpg', '1.0');
/*!40000 ALTER TABLE `devlog` ENABLE KEYS */;

-- Listage de la structure de la table cms. donate
CREATE TABLE IF NOT EXISTS `donate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` longtext NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `description` longtext NOT NULL,
  `url` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Listage des données de la table cms.donate : ~1 rows (environ)
/*!40000 ALTER TABLE `donate` DISABLE KEYS */;
INSERT INTO `donate` (`id`, `img`, `title`, `description`, `url`) VALUES
	(3, 'https://i.pinimg.com/originals/72/39/10/72391070ed02392c0b23fc70d50740e3.jpg', 'tttttttt', 'tttttttt', 'https://google.fr');
/*!40000 ALTER TABLE `donate` ENABLE KEYS */;

-- Listage de la structure de la table cms. faq
CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Listage des données de la table cms.faq : ~1 rows (environ)
/*!40000 ALTER TABLE `faq` DISABLE KEYS */;
INSERT INTO `faq` (`id`, `title`, `description`) VALUES
	(5, 'tttttttt', 'ttttttt');
/*!40000 ALTER TABLE `faq` ENABLE KEYS */;

-- Listage de la structure de la table cms. footer
CREATE TABLE IF NOT EXISTS `footer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `twitter_show` varchar(255) DEFAULT NULL,
  `twitter_url` longtext,
  `youtube_show` varchar(255) DEFAULT NULL,
  `youtube_url` longtext,
  `discord_show` varchar(255) DEFAULT NULL,
  `discord_url` longtext,
  `facebook_show` varchar(255) DEFAULT NULL,
  `facebook_url` longtext,
  `twitch_show` varchar(255) DEFAULT NULL,
  `twitch_url` longtext,
  `footer_name` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Listage des données de la table cms.footer : ~1 rows (environ)
/*!40000 ALTER TABLE `footer` DISABLE KEYS */;
INSERT INTO `footer` (`id`, `twitter_show`, `twitter_url`, `youtube_show`, `youtube_url`, `discord_show`, `discord_url`, `facebook_show`, `facebook_url`, `twitch_show`, `twitch_url`, `footer_name`) VALUES
	(1, '', 'https://twitter.com/', '', 'https://www.youtube.com/channel/UC7cOssWHSyWgxnVZ3Q-2iIQ', '', 'https://discord.gg/C3aN2bBVbB', '', 'https://www.facebook.com/', '', 'https://www.twitch.tv/redvenbiker', 'Â© 2019 XLIFE');
/*!40000 ALTER TABLE `footer` ENABLE KEYS */;

-- Listage de la structure de la table cms. gallery
CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext,
  `img` longtext,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Listage des données de la table cms.gallery : ~1 rows (environ)
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
INSERT INTO `gallery` (`id`, `title`, `description`, `img`, `date`) VALUES
	(13, 'tttttttt', 'tttttttt', 'https://i.pinimg.com/originals/72/39/10/72391070ed02392c0b23fc70d50740e3.jpg', '2021-05-07 02:04:52');
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;

-- Listage de la structure de la table cms. header
CREATE TABLE IF NOT EXISTS `header` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login_header` text(255) DEFAULT NULL,
  `register_header` text(255) DEFAULT NULL,
  `preload` text(255) DEFAULT NULL,
  `username_login_header` text(255) DEFAULT NULL,
  `password_login_header` text(255) DEFAULT NULL,
  `btn_login_header` text(255) DEFAULT NULL,
  `or_login_header` text(255) DEFAULT NULL,
  `btn_register_header` text(255) DEFAULT NULL,
  `home_header` text(255) DEFAULT NULL,
  `dropdown_other_header` text(255) DEFAULT NULL,
  `show_gallery_header` text(255) DEFAULT NULL,
  `gallery_header` text(255) DEFAULT NULL,
  `show_timeline_header` text(255) DEFAULT NULL,
  `timeline_header` text(255) DEFAULT NULL,
  `show_staff_header` text(255) DEFAULT NULL,
  `staff_header` text(255) DEFAULT NULL,
  `twitter_show` text(255) DEFAULT NULL,
  `Colonne 12` text(255) DEFAULT NULL,
  `twitter_url` text(255) DEFAULT NULL,
  `youtube_show` text(255) DEFAULT NULL,
  `youtube_url` text(255) DEFAULT NULL,
  `discord_show` text(255) DEFAULT NULL,
  `discord_url` text(255) DEFAULT NULL,
  `facebook_show` text(255) DEFAULT NULL,
  `facebook_url` text(255) DEFAULT NULL,
  `twitch_show` text(255) DEFAULT NULL,
  `twitch_url` text(255) DEFAULT NULL,
  `show_faq_header` text(255) DEFAULT NULL,
  `faq_header` text(255) DEFAULT NULL,
  `id_incorrect` text(255) DEFAULT NULL,
  `all_incorrect` text(255) DEFAULT NULL,
  `logout_header` text(255) DEFAULT NULL,
  `show_donate_header` text(255) DEFAULT NULL,
  `donate_header` text(255) DEFAULT NULL,
  `show_vote_header` text(255) DEFAULT NULL,
  `vote_header` text(255) DEFAULT NULL,
  `show_devlog_header` text(255) DEFAULT NULL,
  `devlog_header` text(255) DEFAULT NULL,
  `show_news_header` text(255) DEFAULT NULL,
  `news_header` text(255) DEFAULT NULL,
  `show_blog_header` text(255) DEFAULT NULL,
  `blog_header` text(255) DEFAULT NULL,
  `show_shop_header` text(255) DEFAULT NULL,
  `shop_header` text(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Listage des données de la table cms.header : ~1 rows (environ)
/*!40000 ALTER TABLE `header` DISABLE KEYS */;
INSERT INTO `header` (`id`, `login_header`, `register_header`, `preload`, `username_login_header`, `password_login_header`, `btn_login_header`, `or_login_header`, `btn_register_header`, `home_header`, `dropdown_other_header`, `show_gallery_header`, `gallery_header`, `show_timeline_header`, `timeline_header`, `show_staff_header`, `staff_header`, `twitter_show`, `Colonne 12`, `twitter_url`, `youtube_show`, `youtube_url`, `discord_show`, `discord_url`, `facebook_show`, `facebook_url`, `twitch_show`, `twitch_url`, `show_faq_header`, `faq_header`, `id_incorrect`, `all_incorrect`, `logout_header`, `show_donate_header`, `donate_header`, `show_vote_header`, `vote_header`, `show_devlog_header`, `devlog_header`, `show_news_header`, `news_header`, `show_blog_header`, `blog_header`, `show_shop_header`, `shop_header`) VALUES
	(1, 'Login', 'Register', 'Loading', 'Username', 'Password', 'Login', 'Or', 'Register', 'Home', 'Others', '', 'Gallery', '', 'Timeline', '', 'Staff', '', NULL, 'https://twitter.com/', '', 'https://www.youtube.com/channel/UC7cOssWHSyWgxnVZ3Q-2iIQ', '', 'https://discord.gg/C3aN2bBVbB', '', 'https://www.facebook.com/', '', 'https://www.twitch.tv/redvenbiker', '', 'FAQ', 'Incorrect Username or Password!', 'All fields must be filled in!', 'Logout', '', 'Donate', '', 'Vote', '', 'Devlog', '', 'News', '', 'Blog', '', 'Shop');
/*!40000 ALTER TABLE `header` ENABLE KEYS */;

-- Listage de la structure de la table cms. home
CREATE TABLE IF NOT EXISTS `home` (
  `title_slider_home` text(255) DEFAULT NULL,
  `description_slider_home` longtext,
  `btn_show_slider_home` text(255) DEFAULT NULL,
  `btn_url_slider_home` text(255) DEFAULT NULL,
  `btn_text_slider_home` text(255) DEFAULT NULL,
  `about_text_section` text(255) DEFAULT NULL,
  `about_description_section` longtext,
  `about_box1_url_section` longtext,
  `about_box1_url_new_tab_section` longtext,
  `about_box1_icon_section` text(255) DEFAULT NULL,
  `about_box1_text_section` text(255) DEFAULT NULL,
  `about_box1_description_section` longtext,
  `about_box2_url_section` longtext,
  `about_box2_url_new_tab_section` longtext,
  `about_box2_icon_section` text(255) DEFAULT NULL,
  `about_box2_text_section` text(255) DEFAULT NULL,
  `about_box2_description_section` longtext,
  `about_box3_url_section` longtext,
  `about_box3_url_new_tab_section` longtext,
  `about_box3_icon_section` text(255) DEFAULT NULL,
  `about_box3_text_section` text(255) DEFAULT NULL,
  `about_box3_description_section` longtext,
  `video_text_section` text(255) DEFAULT NULL,
  `video_show_section` text(255) DEFAULT NULL,
  `video_id_section` longtext,
  `gallery_show_section` text(255) DEFAULT NULL,
  `gallery_text_section` text(255) DEFAULT NULL,
  `gallery_more_section` text(255) DEFAULT NULL,
  `timeline_show_section` text(255) DEFAULT NULL,
  `timeline_text_section` text(255) DEFAULT NULL,
  `timeline_description_section` longtext,
  `timeline_more_section` text(255) DEFAULT NULL,
  `staff_show_section` text(255) DEFAULT NULL,
  `staff_text_section` text(255) DEFAULT NULL,
  `staff_more_section` text(255) DEFAULT NULL,
  `about2_show_section` text(255) DEFAULT NULL,
  `about2_text_section` text(255) DEFAULT NULL,
  `about2_description_section` longtext,
  `about2_box1_url_section` longtext,
  `about2_box1_url_new_tab_section` text(255) DEFAULT NULL,
  `about2_box1_icon_section` text(255) DEFAULT NULL,
  `about2_box1_text_section` text(255) DEFAULT NULL,
  `about2_box1_description_section` longtext,
  `about2_box2_url_section` longtext,
  `about2_box2_url_new_tab_section` text(255) DEFAULT NULL,
  `about2_box2_icon_section` text(255) DEFAULT NULL,
  `about2_box2_text_section` text(255) DEFAULT NULL,
  `about2_box2_description_section` longtext,
  `about2_box3_url_section` longtext,
  `about2_box3_url_new_tab_section` text(255) DEFAULT NULL,
  `about2_box3_icon_section` text(255) DEFAULT NULL,
  `about2_box3_text_section` text(255) DEFAULT NULL,
  `about2_box3_description_section` text(255) DEFAULT NULL,
  `faq_text_section` text(255) DEFAULT NULL,
  `faq_description_section` longtext,
  `donate_text_section` text(255) DEFAULT NULL,
  `vote_text_section` text(255) DEFAULT NULL,
  `devlog_text_section` text(255) DEFAULT NULL,
  `news_text_section` text(255) DEFAULT NULL,
  `blog_text_section` text(255) DEFAULT NULL,
  `shop_text_section` text(255) DEFAULT NULL,
  `buy_text` text(255) DEFAULT NULL,
  `buy_text_name` text(255) DEFAULT NULL,
  `buy_text_email` text(255) DEFAULT NULL,
  `buy_text_discord` text(255) DEFAULT NULL,
  `buy_text_send_amount` longtext,
  `buy_text_btn_buy` text(255) DEFAULT NULL,
  `buy_text_confirm` longtext,
  `buy_send_confirm` text(255) DEFAULT NULL,
  `success_text` text(255) DEFAULT NULL,
  `success_description` text(255) DEFAULT NULL,
  `success_discord_text` text(255) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `register_text_section` text(255) DEFAULT NULL,
  `username_register_text_section` text(255) DEFAULT NULL,
  `password_register_text_section` text(255) DEFAULT NULL,
  `btn_register_button_section` text(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Listage des données de la table cms.home : ~1 rows (environ)
/*!40000 ALTER TABLE `home` DISABLE KEYS */;
INSERT INTO `home` (`title_slider_home`, `description_slider_home`, `btn_show_slider_home`, `btn_url_slider_home`, `btn_text_slider_home`, `about_text_section`, `about_description_section`, `about_box1_url_section`, `about_box1_url_new_tab_section`, `about_box1_icon_section`, `about_box1_text_section`, `about_box1_description_section`, `about_box2_url_section`, `about_box2_url_new_tab_section`, `about_box2_icon_section`, `about_box2_text_section`, `about_box2_description_section`, `about_box3_url_section`, `about_box3_url_new_tab_section`, `about_box3_icon_section`, `about_box3_text_section`, `about_box3_description_section`, `video_text_section`, `video_show_section`, `video_id_section`, `gallery_show_section`, `gallery_text_section`, `gallery_more_section`, `timeline_show_section`, `timeline_text_section`, `timeline_description_section`, `timeline_more_section`, `staff_show_section`, `staff_text_section`, `staff_more_section`, `about2_show_section`, `about2_text_section`, `about2_description_section`, `about2_box1_url_section`, `about2_box1_url_new_tab_section`, `about2_box1_icon_section`, `about2_box1_text_section`, `about2_box1_description_section`, `about2_box2_url_section`, `about2_box2_url_new_tab_section`, `about2_box2_icon_section`, `about2_box2_text_section`, `about2_box2_description_section`, `about2_box3_url_section`, `about2_box3_url_new_tab_section`, `about2_box3_icon_section`, `about2_box3_text_section`, `about2_box3_description_section`, `faq_text_section`, `faq_description_section`, `donate_text_section`, `vote_text_section`, `devlog_text_section`, `news_text_section`, `blog_text_section`, `shop_text_section`, `buy_text`, `buy_text_name`, `buy_text_email`, `buy_text_discord`, `buy_text_send_amount`, `buy_text_btn_buy`, `buy_text_confirm`, `buy_send_confirm`, `success_text`, `success_description`, `success_discord_text`, `id`, `register_text_section`, `username_register_text_section`, `password_register_text_section`, `btn_register_button_section`) VALUES
	('Title', 'Description', '', 'https://xlife.fr', 'Button', 'About', 'Description', 'https://xlife.fr', '_blank', 'fa fa-arrow-right', 'Text', 'Description', 'https://xlife.fr', '_blank', 'fa fa-arrow-right', 'Text', 'Description', 'https://xlife.fr', '_blank', 'fa fa-arrow-right', 'Text', 'Description', 'Video', '', 'eSL8ZGVUONU', '', 'Gallery', 'More', '', 'Timeline', 'Description', 'More', '', 'Staff', 'More', '', 'About 2', 'Description', 'https://xlife.fr/', '_blank', 'fa fa-arrow-right', 'Text', 'Description', 'https://xlife.fr/', '_blank', 'fa fa-arrow-right', 'Text', 'Description', 'https://xlife.fr/', '_blank', 'fa fa-arrow-right', 'Text', 'Description', 'FAQ', 'Description', 'Donate', 'Vote', 'Devlog', 'News', 'Blog', 'Shop', 'Buy', 'Name and forename that are on your PayPal', 'Email adress of your PayPal', 'Discord Username (ex AAAAA#0000)', 'Please send the exact amount of your product you have choose.', 'Buy', 'Clicking on the', 'Confirm', 'Success', 'We have received your request it will be treated as soon as possible, you will be contacted on discord', 'Join the discord', 1, 'Register', 'Username', 'Password', 'Create');
/*!40000 ALTER TABLE `home` ENABLE KEYS */;

-- Listage de la structure de la table cms. news
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext,
  `low_description` longtext,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `img_url` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Listage des données de la table cms.news : ~1 rows (environ)
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`id`, `title`, `description`, `low_description`, `date`, `img_url`) VALUES
	(3, 'tttttttt', 'tttttttt', 'tttttttt', '2021-05-07 02:06:00', 'https://i.pinimg.com/originals/72/39/10/72391070ed02392c0b23fc70d50740e3.jpg');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

-- Listage de la structure de la table cms. orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `name_paypal` varchar(255) NOT NULL,
  `email_paypal` varchar(255) NOT NULL,
  `discord` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Listage des données de la table cms.orders : ~2 rows (environ)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`id`, `product`, `price`, `name_paypal`, `email_paypal`, `discord`, `username`, `date`) VALUES
	(10, 'ttttttt', 'ttttttt', 'aaaaaa@aaaaaa.fr', 'aaaaaa@aaaaaa.fr', 'aaaaaa@aaaaaa.fr', 'redven', '2021-05-07 02:58:36'),
	(11, 'ttttttt', 'ttttttt', 'marcel dupond', 'rdzhacker35@gmail.com', 'marcel', 'redven', '2021-05-07 22:07:26');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Listage de la structure de la table cms. setting
CREATE TABLE IF NOT EXISTS `setting` (
  `name_website` varchar(255) DEFAULT NULL,
  `name_website_header` varchar(255) DEFAULT NULL,
  `meta_description` longtext,
  `meta_keywords` longtext,
  `paypal_me` longtext,
  `discord` longtext,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Listage des données de la table cms.setting : ~1 rows (environ)
/*!40000 ALTER TABLE `setting` DISABLE KEYS */;
INSERT INTO `setting` (`name_website`, `name_website_header`, `meta_description`, `meta_keywords`, `paypal_me`, `discord`, `id`) VALUES
	('XCMS', 'XCMS', 'Description', 'Keyword1, Keyword2', 'https://paypal.me/MarweenP', 'https://discord.gg/C3aN2bBVbB', 1);
/*!40000 ALTER TABLE `setting` ENABLE KEYS */;

-- Listage de la structure de la table cms. shop
CREATE TABLE IF NOT EXISTS `shop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `text_1_show` varchar(255) DEFAULT NULL,
  `text_1` varchar(255) DEFAULT NULL,
  `text_2_show` varchar(255) DEFAULT NULL,
  `text_2` varchar(255) DEFAULT NULL,
  `text_3_show` varchar(255) DEFAULT NULL,
  `text_3` varchar(255) DEFAULT NULL,
  `text_4_show` varchar(255) DEFAULT NULL,
  `text_4` varchar(255) DEFAULT NULL,
  `text_5_show` varchar(255) DEFAULT NULL,
  `text_5` varchar(255) DEFAULT NULL,
  `text_6_show` varchar(255) DEFAULT NULL,
  `text_6` varchar(255) DEFAULT NULL,
  `text_7_show` varchar(255) DEFAULT NULL,
  `text_7` varchar(255) DEFAULT NULL,
  `text_8_show` varchar(255) DEFAULT NULL,
  `text_8` varchar(255) DEFAULT NULL,
  `text_9_show` varchar(255) DEFAULT NULL,
  `text_9` varchar(255) DEFAULT NULL,
  `text_10_show` varchar(255) DEFAULT NULL,
  `text_10` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Listage des données de la table cms.shop : ~1 rows (environ)
/*!40000 ALTER TABLE `shop` DISABLE KEYS */;
INSERT INTO `shop` (`id`, `title`, `price`, `text_1_show`, `text_1`, `text_2_show`, `text_2`, `text_3_show`, `text_3`, `text_4_show`, `text_4`, `text_5_show`, `text_5`, `text_6_show`, `text_6`, `text_7_show`, `text_7`, `text_8_show`, `text_8`, `text_9_show`, `text_9`, `text_10_show`, `text_10`) VALUES
	(9, 'ttttttt', 'ttttttt', 'none', 'ttttttt1', 'none', 'ttttttt2', 'none', 'ttttttt3', 'none', 'ttttttt', 'none', 'ttttttt', 'none', 'ttttttt', 'none', 'ttttttt', 'none', 'ttttttt', 'none', 'ttttttt', 'none', 'ttttttt');
/*!40000 ALTER TABLE `shop` ENABLE KEYS */;

-- Listage de la structure de la table cms. staff
CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `facebook_show` varchar(255) DEFAULT NULL,
  `facebook_url` longtext,
  `twitter_show` varchar(255) DEFAULT NULL,
  `twitter_url` longtext,
  `youtube_show` varchar(255) DEFAULT NULL,
  `youtube_url` longtext,
  `discord_show` varchar(255) DEFAULT NULL,
  `discord_url` longtext,
  `twitch_show` varchar(255) DEFAULT NULL,
  `twitch_url` longtext,
  `img` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Listage des données de la table cms.staff : ~1 rows (environ)
/*!40000 ALTER TABLE `staff` DISABLE KEYS */;
INSERT INTO `staff` (`id`, `name`, `grade`, `facebook_show`, `facebook_url`, `twitter_show`, `twitter_url`, `youtube_show`, `youtube_url`, `discord_show`, `discord_url`, `twitch_show`, `twitch_url`, `img`) VALUES
	(14, 'tttt', 'tttt', '', 'https://xlife.fr', '', 'https://xlife.fr', '', 'https://xlife.fr', '', 'https://xlife.fr', '', 'https://xlife.fr', 'https://i.pinimg.com/originals/72/39/10/72391070ed02392c0b23fc70d50740e3.jpg');
/*!40000 ALTER TABLE `staff` ENABLE KEYS */;

-- Listage de la structure de la table cms. timeline
CREATE TABLE IF NOT EXISTS `timeline` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext,
  `low_description` longtext,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `img_url` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Listage des données de la table cms.timeline : ~1 rows (environ)
/*!40000 ALTER TABLE `timeline` DISABLE KEYS */;
INSERT INTO `timeline` (`id`, `title`, `description`, `low_description`, `date`, `img_url`) VALUES
	(12, 'tttttttt', 'tttttttt', 'tttttttt', '2021-05-07 02:18:24', 'https://i.pinimg.com/originals/72/39/10/72391070ed02392c0b23fc70d50740e3.jpg');
/*!40000 ALTER TABLE `timeline` ENABLE KEYS */;

-- Listage de la structure de la table cms. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table cms.users : ~2 rows (environ)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `date`) VALUES
	(1, 'redven', '3c4ae26dad3a3e0e05b250857b2da911f5637c74', '2021-03-30 23:25:57'),
	(3, 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '2021-05-07 03:01:45');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Listage de la structure de la table cms. vote
CREATE TABLE IF NOT EXISTS `vote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` longtext NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `description` longtext NOT NULL,
  `url` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Listage des données de la table cms.vote : ~1 rows (environ)
/*!40000 ALTER TABLE `vote` DISABLE KEYS */;
INSERT INTO `vote` (`id`, `img`, `title`, `description`, `url`) VALUES
	(1, 'data:image/png;base64,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', 'Top Serveur', 'Description', 'https://google.fr'),
	(2, 'https://www.grandtheftauto5.fr/images/artworks-officiels/gta5-artwork-72-hd.jpg', 'test1', 'test 1', 'test1');
/*!40000 ALTER TABLE `vote` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
