-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 20 juin 2021 à 23:35
-- Version du serveur : 10.4.19-MariaDB
-- Version de PHP : 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bibliotheque`
--

-- --------------------------------------------------------

--
-- Structure de la table `author`
--

CREATE TABLE `author` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom_auteur` varchar(50) DEFAULT NULL,
  `prenom_auteur` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `author`
--

INSERT INTO `author` (`id`, `nom_auteur`, `prenom_auteur`) VALUES
(1, 'Kishimoto', 'Masashi'),
(2, 'Hugo', 'Victor'),
(3, 'Toriama', 'Akira'),
(5, 'Coelho', 'Paulo'),
(6, 'Eiichiro', 'Oda'),
(7, 'Kubo', 'Tite'),
(8, 'de Saint-Exupéry', 'Antoine'),
(9, 'Granet', 'Vincent'),
(10, 'Regourd', 'Jean-Pierre'),
(11, 'Grenand', 'Pierre'),
(12, 'Nietzsche', 'Friedrich'),
(13, 'Sapir', 'Edward'),
(14, 'Stoczkowski', 'Wiktor'),
(15, 'Anouilh', 'Jean'),
(16, 'Platon', 'Tom'),
(17, 'Goscinny', 'René'),
(18, 'McMurry', 'John'),
(19, 'Simanek', 'Eric'),
(20, 'Charmettant', 'Hervé'),
(21, 'Sébastien', 'Georges'),
(22, 'Rocca', 'Michel'),
(23, 'Vallet', 'Guillaume'),
(24, 'Moliere', 'Andi'),
(25, 'Bergson', 'Henri'),
(26, 'Alain', 'Arbi'),
(27, 'Draillard', 'Francis'),
(28, 'Yoshihiro', 'Togashi'),
(29, 'Sheffield', 'Gary'),
(30, 'Colomb', 'Cristophe'),
(31, 'Berthomier', 'Eric'),
(32, 'Schang', 'Daniel'),
(33, 'Delannoy', 'Claude'),
(34, 'Musolino', 'Michel'),
(35, 'Camus', 'Albert'),
(36, 'Blondeel', 'Sébastien'),
(37, 'Cartron', 'Daniel'),
(38, 'Singodiwirjo', 'Hermantino'),
(39, 'Morris', NULL),
(40, 'Pickover', 'Clifford'),
(41, 'Hitler', 'Adolf'),
(42, 'Dordoigne', 'José'),
(43, 'Hergé', NULL),
(44, 'Zep', NULL),
(45, 'Elalamy', 'Youssouf Amine'),
(46, 'Gomez', 'Sylvain');

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

CREATE TABLE `book` (
  `ISBN` int(10) UNSIGNED NOT NULL,
  `titre_livre` varchar(70) DEFAULT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `author_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) NOT NULL DEFAULT 0,
  `img_livre` text DEFAULT NULL,
  `nb_pages` int(11) NOT NULL,
  `resume` text DEFAULT NULL,
  `auteur` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `book`
--

INSERT INTO `book` (`ISBN`, `titre_livre`, `category_id`, `author_id`, `customer_id`, `img_livre`, `nb_pages`, `resume`, `auteur`) VALUES
(1, 'Naruto', 2, 1, 1, 'ouvrages\\Naruto.jpg ?&gt;', 100, 'L\'histoire commence pendant l\'adolescence de Naruto, vers ses douze ans. Orphelin cancre et grand farceur, il fait toutes les bêtises possibles pour se faire remarquer. Son rêve : devenir Hokage afin d\'être reconnu par les habitants de son village. En effet, le démon renard à neuf queues scellé en lui a attisé la crainte et le mépris des autres villageois, qui, avec le temps, ne font plus de différence entre Kyûbi et Naruto.', 'Kishimoto Masashi'),
(2, 'L\'alchimiste', 1, 1, 1, 'ouvrages\\L\'alchimiste.jpg ?&gt;', 220, 'Le héros de ce court roman est un jeune berger espagnol, Santiago. Lors d\'un voyage qui le conduit d\'Andalousie aux Pyramides d\'Égypte, en passant par Tanger et le désert du Sahara, il découvre sa « légende personnelle » grâce à l\'aide d\'un roi et d\'un alchimiste.', 'Toriama Akita'),
(3, 'Onze minutes', 1, 5, 1, 'ouvrages\\11min.jpg', 0, 'Onze minutes est un roman de Paulo Coelho qui conte l\'histoire d\'une jeune fille brésilienne qui se retrouve entraînée dans une vie de prostitution dans un pays qui lui est inconnu.', 'Coelho Paulo'),
(4, 'L\'etranger', 1, 2, 0, 'ouvrages\\L\'etranger.jpg', 0, 'C\'est un roman qui relate l’histoire d’un jeune homme du nom de Meursault.L’histoire se déroule en Afrique plus précisément en Algérie au moment où celui-ci était encore un département français.L’auteur développe dans son œuvre un humanisme fondé sur la prise de conscience de l’absurde de la condition humaine.', 'Toriama Kira'),
(5, 'Dragon Ball 21', 1, 1, 1, 'ouvrages\\Dragon_ball.jpg', 0, 'Dragon Ball raconte le parcours de Son Goku, depuis l\'enfance jusqu\'à l\'âge adulte. Accompagné de nombreux personnages, il cherche à plusieurs reprises les sept Dragon Balls. Il s\'agit de boules magiques qui permettent, si elles sont réunies, de faire apparaître le dragon Shenron, chargé d\'exaucer le souhait de celui qui prononce face à lui une formule spécifique. Tout au long de sa vie, Son Goku est amené à combattre des ennemis de plus en plus forts.', 'Kishimoto Masashi'),
(6, 'Un marocain a NewYork', 1, 2, 0, 'ouvrages\\Un_Marocain_a_New_York.jpg', 0, 'D’une aventure à l’autre, le narrateur de ce livre croque la Grosse Pomme à pleine dents, s’invite dans de drôles de soirées, se retrouve emprisonné dans la Statue de la Liberté, annonce l’arrivée d’une nouvelle espèce humaine?: l’Homo Hamburgerus. Dans un mélange d’humour, de dérision et de fantaisie, Youssouf Amine Elalamy nous invite à découvrir un New York pas comme les autres.', 'Toriama Kira'),
(7, 'One piece 57', 1, 1, 0, 'ouvrages\\One_piece.jpg ?&gt;', 0, 'One Piece relate les aventures d\'un équipage de pirates ayant pour capitaine Monkey D. Luffy dont le rêve est d\'obtenir le One Piece, fameux trésor inestimable qui appartenait au seigneur des pirates Gol D. Roger exécuté il y a de cela plus de vingt ans ; celui qui découvrira ce trésor pourra devenir à son tour le roi des pirates.', 'Coelho Paulo'),
(8, 'Aleph', 1, 3, 0, 'ouvrages\\Aleph.jpg', 0, 'Aleph est considéré comme l\'un des romans les plus personnels de Paulo Coelho, l\'auteur balance entre fiction et réalité. Les événements narrés sont troublants et l\'on a un peu de mal a cerner la pensée de l\'auteur. Ce roman mystérieux nous relate le voyage de l\'auteur dans son univers et à bord du train ainsi que sa rencontre avec l\'énigmatique Hilal dont le regard révèle \"l\'amour et la mort». ', 'Toriama Akita'),
(9, 'Bleach 13', 1, 6, 1, 'ouvrages\\Bleach.jpg', 0, 'Le récit commence en 2001 au Japon dans la ville fictive de Karakura. Ichigo Kurosaki, lycéen de 15 ans, arrive à voir, entendre et toucher les âmes des morts depuis qu\'il est tout petit. Un soir, sa routine quotidienne vient à être bouleversée à la suite de sa rencontre avec une shinigami (???, littéralement « dieu de la mort »), Rukia Kuchiki, et la venue d\'un monstre appelé hollow. Ce dernier..', 'Eiichiro Oda'),
(10, 'Astérix en corse', 1, 1, 0, 'ouvrages\\Asterix.jpg', 0, 'La bande dessinée se focalise principalement sur l\'un des habitants de Gaule, Astérix, courageux guerrier, qui se sert non seulement de la potion magique mais aussi de son intelligence pour déjouer les plans de Jules César et défendre son village de l\'envahisseur.', 'Kishimoto Masashi'),
(42, 'xxxx', 4, 1, 0, ' ?&gt;', 330, 'ALLO', 'Samir');

-- --------------------------------------------------------

--
-- Structure de la table `borrow`
--

CREATE TABLE `borrow` (
  `id` int(99) NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `book_ISBN` int(10) UNSIGNED NOT NULL,
  `date_emprunt` date NOT NULL,
  `nbjour_emprunt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `borrow`
--

INSERT INTO `borrow` (`id`, `customer_id`, `book_ISBN`, `date_emprunt`, `nbjour_emprunt`) VALUES
(16, 10, 10, '2016-04-22', 0),
(51, 4, 9, '2016-05-03', 0),
(52, 4, 2, '2016-05-03', 0),
(53, 4, 1, '2016-05-03', 0),
(54, 4, 5, '2016-05-03', 0),
(64, 4, 9, '2016-05-03', 0),
(65, 1, 3, '2016-05-16', 0);

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `libelle` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `libelle`) VALUES
(1, 'ROMAN'),
(2, 'POLICIER'),
(4, 'TEST '),
(5, 'SAMXXX');

-- --------------------------------------------------------

--
-- Structure de la table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom_client` varchar(50) NOT NULL,
  `Email` varchar(80) NOT NULL,
  `date_naissance` date NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `Date_inscription` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `customer`
--

INSERT INTO `customer` (`id`, `nom_client`, `Email`, `date_naissance`, `adresse`, `Date_inscription`) VALUES
(1, 'youssef', 'Jalil_Jerf@email.com', '1995-10-31', 'youssef', '2016-02-01'),
(2, 'Dadso', 'Haitham_Dadso@email.com', '1995-06-15', 'LAAAAAATER', '2015-12-31'),
(3, 'Faraby', 'Yusuf_Faraby@email.com', '1994-12-25', 'Boulevard Bouchaib Doukali Num 15, Casablanca', '2016-03-01'),
(4, 'JY-7', 'Youssef7jabbari@email.com', '1995-10-31', 'Boulevard El Fida Num 9, Casablanca', '2007-07-07'),
(5, 'Nkir', 'Dounia_Nkir@email.com', '1994-04-24', 'Boulevard Boulevard Num N, Casablanca', '2016-03-21'),
(6, 'Mellouki', 'Zakaria_Mellouki', '1995-09-19', 'Boulevard BLVRD Num N, Casablanca', '1995-09-19'),
(8, 'youssef', 'Youssef.Faraby13', '2016-04-28', 'youssef', NULL),
(9, 'youssef faraby', 'youssef@faraby.com', '2016-04-06', 'boulvar & 1', '2016-04-17'),
(10, 'bouhaddioui', 'manar@gmail.com', '1995-06-11', 'boulvard la resistance ', '2016-04-22'),
(11, 'Hidan', 'kill_yourself@email.com', '1986-06-06', 'machi so9ek ^^', '2016-05-03');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`ISBN`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `author_id` (`author_id`);

--
-- Index pour la table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `book_ISBN` (`book_ISBN`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT pour la table `book`
--
ALTER TABLE `book`
  MODIFY `ISBN` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`author_id`) REFERENCES `author` (`id`);

--
-- Contraintes pour la table `borrow`
--
ALTER TABLE `borrow`
  ADD CONSTRAINT `borrow_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `borrow_ibfk_2` FOREIGN KEY (`book_ISBN`) REFERENCES `book` (`ISBN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
