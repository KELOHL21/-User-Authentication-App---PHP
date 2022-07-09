-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 09, 2022 at 02:32 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

DROP TABLE IF EXISTS `authors`;
CREATE TABLE IF NOT EXISTS `authors` (
  `author_id` int(11) NOT NULL AUTO_INCREMENT,
  `author_name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `genre` varchar(255) NOT NULL,
  PRIMARY KEY (`author_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`author_id`, `author_name`, `age`, `genre`) VALUES
(1, 'J. K. Rowling', 56, 'Fantasy/Drama/Young adult fiction/Crime fiction'),
(2, 'James Patterson', 75, ' Mystery, young adult fiction, thriller, comedy, realistic fiction, romance, science fiction'),
(3, 'Stephen King', 74, 'Horror/Supernatural fiction/Suspense/Crime/Science-fiction/Fantasy'),
(4, 'Chimamanda Ngozi Adichie', 44, 'Fiction/Nonfiction/Poetry/Playwriting'),
(5, 'Amanda Gorman', 24, 'Poetry'),
(6, 'David Walliams', 50, 'Children fiction');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_name` varchar(50) NOT NULL,
  `description` varchar(600) NOT NULL,
  `year` int(11) NOT NULL,
  `book_genre` varchar(255) NOT NULL,
  `age_group` tinytext NOT NULL,
  `author_id` int(11) NOT NULL,
  PRIMARY KEY (`book_id`),
  KEY `author_id` (`author_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_name`, `description`, `year`, `book_genre`, `age_group`, `author_id`) VALUES
(1, 'Fantastic Beasts and Where to Find Them', 'A magical young man named Newt embarks on a journey to find his beasts that escaped. Newt Scamander is a wizard unlike any other, he uses not only his powers but the powers of his magical animals. Newt has lost some of his creatures and needs to find them before they wreak havoc among the regular people\'s lives and more importantly before the truth about wizards being real is revealed to everyone. Newt meets lots of strange people almost as fascinating as his beasts and even befriends a person', 2001, 'Fiction/Fantasy', '7+', 1),
(2, 'Troubled Blood', 'Private Detective Cormoran Strike is visiting his family when he is approached by a woman asking for help finding her mother, who went missing in mysterious circumstances in 1974.Strike has never tackled a cold case before, let alone one forty years old. Despite the slim chance of success, he is intrigued and takes it on. Within the investigate he comes up against a fiendishly complex case learning that even cases decades old can prove to be deadly', 2020, 'Crime fiction/Thriller', '16+', 1),
(3, 'The Hill We Climb', 'The poem celebrates the U.S. not as a \"perfect union,\" but as a country that has the grit to struggle with its all-too-real problems. Progress, the poem argues, doesn\'t happen all at once: it\'s a slow and sometimes painful \"climb\" up the \"hill\" of justice, a climb that takes patience and humility.', 2021, 'Inaugural Poem', '12+', 5),
(4, 'Demon Dentist', 'Walliams makes going to the dentist a wacky adventure with his signature humor-this is one dentist appointment you don\'t want to miss.Something strange is happening in Alfie\'s town. Instead of shiny coins from the Tooth Fairy, kids are waking up to dead slugs, live spiders, and other dreadfully icky things under their pillows.Who would do something so horrific? Alfie is sure that Miss Root, the creepy new dentist in town, is behind it all. There\'s nothing Alfie hates more than going to the dentist, but to solve this mystery, he may have to book a dreaded appointment', 2016, 'Children Fiction', '6+', 6),
(5, 'We Should All Be Feminists', 'In essence, we should all be feminists is not only a commitment to women\'s liberation but also is a way of encouraging men to hold conversations with women on sexuality, appearance, roles, and success. Being a feminist entails championing for the rights of women and trying to make the world a better place for women.', 2019, 'Essay', '8+', 4),
(6, 'The Shining ', 'The Shining centres on the Torrance family: Jack, Wendy and their five-year-old son, Danny.Jack is hired as the caretaker of the remote Overlook Hotel for the winter offseason. He is informed by the hotel manager that the previous caretaker, Delbert Grady, killed his entire family inside the hotel.As Jack later learns, the Overlook has a long and ghastly history. Over the years, it has housed illicit affairs, horrible murders, and mob-style executions; perhaps by consequence, its ownership has changed hands several times.', 1977, 'Gothic novel/Horror/Psychological horror', '13+', 3),
(7, 'Hope to Die', 'Detective Alex Cross is being stalked by a psychotic genius, forced to play the deadliest game of his career. Cross\'s family - his loving wife Bree, the wise and lively Nana Mama, and his precious children--have been ripped away. Terrified and desperate, Cross must give this mad man what he wants if he has any chance of saving the most important people in his life. The stakes have never been higher: What will Cross sacrifice to save the ones he loves?', 2014, 'Thriller/Fiction/Mystery/Suspense/Police procedural', '13+', 2),
(8, 'Change Sings: A Children\'s Anthem', 'In this stirring, much-anticipated picture book by presidential inaugural poet and activist Amanda Gorman, anything is possible when our voices join together. As a young girl leads a cast of characters on a musical journey, they learn that they have the power to make changes-big or small-in the world, in their communities, and in most importantly, in themselves. ', 2021, 'Children Fiction', '4-8', 5),
(9, 'Pet Sematary', 'Pet Sematary follows Dr. Louis Creed , who, after relocating with his wife Rachel and their two young children from Boston to rural Maine, discovers a mysterious burial ground hidden deep in the woods near the family\'s new home.', 1983, 'Horror', '16+', 3),
(10, 'Purple Hibiscus', 'Purple Hibiscus is set in postcolonial Nigeria,a country beset by political instability and economic difficulties. The central character is Kambili Achike, aged fifteen for much of the period covered by the book, a member of a wealthy family in Enugu State, dominated by her devoutly Catholic father, Eugene.', 2004, 'Fiction', '14-17', 4),
(11, 'The World\'s Worst Pets', 'These ten tales of the world\'s craziest creatures will have you shaking with laughter. You\'ll never look at pets in the same way again! Marvel at Houdini, the magician\'s rabbit. Take a trip around the world with Zoom, the supersonic tortoise. Gasp at the chaos created by Griselda, a grizzly bear with a big secret. And RUN FOR YOUR LIVES! It\'s Furp, the monstrous goldfish! Good pets, bad pets, supervillain pets, pets as big as a house and pets that could eat you in one gulp - these are the most hilarious and horrendous animals around.', 2022, 'Children Fiction', '8-11', 6),
(12, 'Along Came a Spider', 'Its centered on Washington D.C. police detective Alex Cross. Cross and his partner are investigating a group of murders in the poor section of the capitol when they are suddenly pulled away to investigate a high profile kidnapping.', 1993, 'Crime/Mystery/Thriller', '17+', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'member',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(2, 'Kelsy', 'kelsyohlsson@gmail.com', 'UGvg@t633PqdkA3', 'member'),
(3, 'doma', 'doma@gmail.com', 'boo', 'librarian'),
(4, 'tyler', 'tyler@gmail.com', 'yoyo', 'member'),
(5, 'tyler', 'tyler@gmail.com', 'boo', 'member'),
(6, 'marcy', 'marcelle21wiener@gmail.com', '1234', 'librarian'),
(7, 'marcy', 'marcy@gmail.com', '1234', 'librarian'),
(8, 'booboo', 'kelsy@gmail.com', '12345', 'member');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `authors` (`author_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
