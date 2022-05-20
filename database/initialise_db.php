<?php
  $conn = mysqli_connect("katara.scam.keele.ac.uk","x6j10","x6j10x6j10","x6j10");

  $query = "CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `dp_path` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 ";
  mysqli_query($conn,$query);

  $query = "CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_imagepath` varchar(255) NOT NULL,
  `post_caption` text NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `foreign key` (`user_id`),
  CONSTRAINT `foreign key` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4  ";
  mysqli_query($conn,$query);

  $query = "CREATE TABLE IF NOT EXISTS `comments` (
   `comment_id` int(11) NOT NULL AUTO_INCREMENT,
   `content` longtext NOT NULL,
   `user_id` int(11) NOT NULL,
   `post_id` int(11) NOT NULL,
   PRIMARY KEY (`comment_id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 ";
  mysqli_query($conn,$query);

  $query = "CREATE TABLE IF NOT EXISTS `likes` (
  `likes` int(5) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ";
  mysqli_query($conn,$query);
?>
