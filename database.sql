CREATE TABLE IF NOT EXISTS `listcontent`(
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(200) NULL ,
	`product` varchar(200) NULL ,
	`quantity` varchar(200) NULL ,
	`description` varchar(500) DEFAULT NULL,
	`list_id` INT(12) NULL DEFAULT'0',
	`user_id` INT(12) NULL ,
	`product_id` INT(12) NULL ,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB Default CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `products` (
	`id` int(8) NOT NULL AUTO_INCREMENT ,
  `post_id` int(11) NOT NULL,
  `user_id` int(11)  NULL,
  `product` varchar(500) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `likes` tinyint(3) DEFAULT '0',
  `timestamp` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `posts` (
  `id`  int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `comments` int(11) NOT NULL DEFAULT '0',
  `likes` int(11) NOT NULL DEFAULT '0',
  `shares` int(11) DEFAULT '0',
  `op` int(11) DEFAULT NULL,
  `roles` varchar(4) DEFAULT NULL,
  `value1` varchar(50) DEFAULT NULL,
  `value2` varchar(50) DEFAULT NULL,
  `value1a` int(66) DEFAULT '0',
  `value2a` int(66) DEFAULT '0',
  `value1link` varchar(100) DEFAULT NULL,
  `product` varchar(100) DEFAULT NULL,
  `repuser` int(15) DEFAULT NULL,
  `price` varchar(15) DEFAULT NULL,
  `post` varchar(3000) NOT NULL,
  `brand` varchar(280) NOT NULL,
  `shop` varchar(280) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `quantity` varchar(50) DEFAULT NULL,
  `image_small` varchar(50) DEFAULT NULL,
  `location` varchar(90) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `timestamp` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `name` varchar(35) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(32) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `background` varchar(255) DEFAULT NULL,
  `timestamp` int(20) DEFAULT NULL,
  `aboutme` text,
  `hometown` varchar(50) DEFAULT NULL,
  `followers` int(11) DEFAULT '0',
  `following` int(11) DEFAULT '0',
  `posts` int(11) DEFAULT '0',
  `tribes` int(11) DEFAULT '0',
  `likes` int(11) DEFAULT '0',
  `auth` int(2) DEFAULT '0',
  `client` text,
  `ip` varchar(30) DEFAULT NULL,
  `loc` int(2) DEFAULT '0',
  `twitter` varchar(56) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `type` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `subscribers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `name` varchar(35) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(32) NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `background` varchar(255) DEFAULT NULL,
  `timestamp` int(20) DEFAULT NULL,
  `aboutme` text,
  `hometown` varchar(50) DEFAULT NULL,
  `followers` int(11) DEFAULT '0',
  `following` int(11) DEFAULT '0',
  `posts` int(11) DEFAULT '0',
  `tribes` int(11) DEFAULT '0',
  `likes` int(11) DEFAULT '0',
  `auth` int(2) DEFAULT '0',
  `client` text,
  `ip` varchar(30) DEFAULT NULL,
  `loc` int(2) DEFAULT '0',
  `type` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `tags` (
   `id` int(8) NOT NULL AUTO_INCREMENT, 
  `user_id` int(11) DEFAULT NULL, 
  `tag` varchar(50) DEFAULT NULL,
  `timestamp` int(11) DEFAULT NULL,
  `tribe` int(11) DEFAULT NULL,
  `location` varchar(90) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `likes` (
`id` int(8) NOT NULL AUTO_INCREMENT ,
  `post_id` int(11) NOT NULL,
  `user_id` int(11)  NULL,
  `username` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `likes` tinyint(3) DEFAULT '0',
  `timestamp` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
