-- phpMyAdmin SQL Dump
--
-- Database: `VerySimpleRSSReader`
--

-- --------------------------------------------------------

--
-- Table `feed` structure
--

CREATE TABLE `feed` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `slug` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Table `feed` content
--

INSERT INTO `feed` (`id`, `nom`, `slug`) VALUES
(1, 'Hacker News', 'https://news.ycombinator.com/rss'),
(2, 'Designer News', 'https://news.layervault.com/?format=rss');