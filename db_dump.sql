-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2020 at 09:25 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdip2019x148`
--

-- --------------------------------------------------------

--
-- Table structure for table `dnevnik`
--

CREATE TABLE `dnevnik` (
  `Dnevnik_ID` int(11) NOT NULL,
  `Datum_Vrijeme_Radnje` datetime NOT NULL,
  `Radnja` text NOT NULL,
  `Upit` text NOT NULL,
  `Korisnik_Korisnik_ID` int(11) NOT NULL,
  `Tip_Tip_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `klub`
--

CREATE TABLE `klub` (
  `Klub_ID` int(11) NOT NULL,
  `Naziv` varchar(45) NOT NULL,
  `Godina_Osnutka` date NOT NULL,
  `Adresa` varchar(45) NOT NULL,
  `IBAN` varchar(21) NOT NULL,
  `Mjesto` varchar(45) NOT NULL,
  `Stadion` varchar(45) NOT NULL,
  `Titule` int(11) NOT NULL,
  `Predsjednik` varchar(45) DEFAULT NULL,
  `Korisnik_Korisnik_ID` int(11) NOT NULL,
  `Sport_Sport_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `klub`
--

INSERT INTO `klub` (`Klub_ID`, `Naziv`, `Godina_Osnutka`, `Adresa`, `IBAN`, `Mjesto`, `Stadion`, `Titule`, `Predsjednik`, `Korisnik_Korisnik_ID`, `Sport_Sport_ID`) VALUES
(1, 'Juventus Football Club S.p.A', '1897-01-11', 'Via Druento, 175 10151 Torino', 'IT60X054281110100000 ', 'Torino', 'Allianz ', 37, 'Andrea Agnelli', 2, 1),
(2, 'GNK Dinamo Zagreb', '1965-09-06', 'Maksimirska cesta 128, 10000, Zagreb', 'HR1723600001101234565', 'Zagreb', 'Maksimit', 30, 'Mirko Barišić', 3, 1),
(3, 'Real Madrid C.F.', '1902-06-05', 'Av. de Concha Espina, Madrid', 'ES91210004184502', 'Madrid', 'Santiago Bernabeu', 33, 'Florentino Perez', 4, 1),
(4, 'RK Prvo plinarsko društvo Zagreb', '1922-01-06', 'Veprinačka 16, 10000 Zagreb', 'HR1515488455961233547', 'Zagreb', 'Arena Zagreb', 50, 'Zoran Gobac', 12, 2),
(5, 'KK Cibona', '1946-04-15', 'Savska 30, Zagreb', 'HR1564865645466526562', 'Zagreb', 'Dvorana Dražena Petrovića', 19, 'Mladen Bušić', 15, 3),
(6, 'KK Zadar', '1945-04-16', 'Splitska 3, Zadar', 'HR1546846654684665644', 'Zadar', 'SC VIŠNJIK', 2, 'Željko Žilavec', 18, 3),
(7, 'THW Kiel', '1904-09-07', 'KG Ziegelteich 525 , Kiel', 'DE2516162165565562565', 'Kiel', 'Sparkassen Arena', 31, 'Olaf Berner', 19, 2),
(8, 'Vaterpolski klub Jug Dubrovnik', '1923-08-08', ' Dr. Ante Starčevića 22, 20000 Dubrovnik', 'HR6541544615826842665', 'Dubrovnik', ' Bazen u Gružu', 37, 'Tomislav Dumančić', 19, 4),
(9, 'Bora–Hansgrohe', '2010-04-16', 'Prof.-Dr.-Anton-Kathrein-Str. 2,Niederndorf', 'AU5154161461665615165', 'Niederndorf', 'Nema', 0, 'Ralf Denk', 22, 9),
(10, 'Team Bahrain McLaren ', '2006-04-09', 'Bahrain Mer 251, Bahrain', 'BA6268465616265615625', 'Bahrain', 'Nema', 0, 'Rod Ellingwort', 24, 9),
(11, 'klub1', '2020-06-16', 'Adresa', 'hr1234', 'mjesto', 'stadion', 4, 'predjsednik', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `Korisnik_ID` int(11) NOT NULL,
  `Ime` varchar(45) NOT NULL,
  `Prezime` varchar(45) NOT NULL,
  `Korisnicko_ime` varchar(45) NOT NULL,
  `Lozinka` varchar(45) NOT NULL,
  `Lozinka_SHA1` char(40) NOT NULL,
  `Uvjeti` datetime DEFAULT NULL,
  `Email` varchar(45) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Datum_Vrijeme_Registracije` datetime NOT NULL,
  `Uloga_Uloga_ID` int(11) NOT NULL,
  `Blokiran` tinyint(1) NOT NULL DEFAULT 0,
  `Kolacic` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`Korisnik_ID`, `Ime`, `Prezime`, `Korisnicko_ime`, `Lozinka`, `Lozinka_SHA1`, `Uvjeti`, `Email`, `Status`, `Datum_Vrijeme_Registracije`, `Uloga_Uloga_ID`, `Blokiran`, `Kolacic`) VALUES
(1, 'Bruno', 'Žitković', 'bzitkovic', 'admin_01', 'b00cb4a2d5c2391fc0cfc8a4fb97d44c8287bfe3', '2020-04-04 08:22:30', 'bzitkovic@foi.hr', 1, '2020-04-04 04:20:30', 1, 0, NULL),
(2, 'Andrea', 'Agnelli', 'aagnelli', 'vlasnik_01', '7fbabc9f5a05fe9d3c473396b28a45afc03b6bb6', '2020-04-05 12:25:20', 'aagnelli@gmail.com', 1, '2020-04-05 19:28:26', 2, 0, NULL),
(3, 'Mirko', 'Barišić', 'mbarisic', 'vlasnik_02', 'c3e1dab820fd41f949d0cdc8bf174f2345101b2a', '2020-05-31 16:49:11', 'mbarisic@gmail.com', 1, '2020-04-06 06:23:24', 2, 0, NULL),
(4, 'Florentino ', 'Perez', 'fperez', 'vlasnik_03', '48af11e76e8e8c7a14ee8b85a686a3e315300783', '2020-04-07 11:26:21', 'fperez@gmail.com', 1, '2020-04-06 10:12:00', 2, 0, NULL),
(5, 'Cristiano ', 'Ronaldo', 'cronaldo', 'igrac_01', '87701c9d46546e9c33243c69736faf6a422fe9a7', '2020-05-31 16:50:14', 'cronaldo@gmail.com', 1, '2020-04-07 06:17:12', 3, 0, NULL),
(6, 'Luka', 'Modrić', 'lmodric', 'igrac_02', '7ae2c8c5f748dc41a6781bd1c50814ba2e42b195', '2020-04-09 08:21:21', 'lmodric@gmail.com', 1, '2020-04-07 07:20:21', 3, 0, NULL),
(7, 'Bruno', 'Petković', 'bpetkovic', 'igrac_03', 'fd9e7f9d94c226f49e4b31130bb5c093a712db2a', '2020-04-16 06:17:17', 'bpetkovic@gmail.com', 1, '2020-04-11 15:40:29', 3, 0, NULL),
(8, 'Paulo ', 'Dybala', 'pdybala', 'igrac_04', '0fcaccc5577dd0527807b00a68bf547704f14c06', '2020-04-13 09:28:30', 'pdybala@gmail.com', 1, '2020-04-09 09:27:25', 3, 0, NULL),
(9, 'Marko ', 'Pjaca', 'mpjaca', 'igrac_05', '78524726acc0848ad0f8fa80a4514b2bf1fcc182', '2020-04-17 08:13:19', 'mpjaca@gmail.com', 1, '2020-04-15 07:20:29', 3, 0, NULL),
(10, 'Matija', 'Jurić', 'mjuric', 'neRegKorisnik_01', 'af57fde28008d68e24a6b3c7dde9af773036a6ea', '2020-04-15 16:19:30', 'mjuric@gmail.com', 1, '2020-04-15 07:32:22', 4, 0, NULL),
(11, 'Dominik', 'Livaković', 'dlivakovic', 'igrac_06', '12702e7b87733a7f831a062793a918e575f9ee92', '2020-04-09 07:23:25', 'dlivakovic@gmail.com', 1, '2020-04-11 11:31:32', 3, 0, NULL),
(12, 'Vedran', 'Šupuković', 'vsupukovic', 'vlasnik_04', '0c0e9737e1cb433c293180cebaa38ced510d7198', '2020-05-13 10:20:33', 'vsupukovic@gmail.com', 1, '2020-05-01 15:19:20', 2, 0, NULL),
(13, 'Marin', 'Šipić', 'msipic', 'igrac_07', 'cf05c6d44863373672fc92b200b83ee085731a38', '2020-05-13 08:22:22', 'msipic@gmail.com', 1, '2020-04-09 06:21:19', 3, 0, NULL),
(14, 'Zlatko', 'Horvat', 'zhorvat', 'igrac_08', 'b3194775f3118faca88414fcc3a0a04a4363c4e8', '2020-05-01 09:48:24', 'zhirvat@gmail.com', 1, '2020-04-25 13:35:12', 3, 0, NULL),
(15, 'Mladen', 'Bušić', 'mbusic', 'vlasnik_05', '8ff799626d479b09fab1e7832af860cac667f509', '2020-06-11 11:28:00', 'mbusic', 1, '2020-06-01 11:23:23', 2, 0, NULL),
(16, 'Marko ', 'Ramljak', 'mramljak', 'igrac_09', '2e0c86a94259087efbf40434fe1960c6029901d3', '2020-06-05 12:28:23', 'mramljak@gmail.com', 1, '2020-04-18 14:30:00', 3, 0, NULL),
(17, 'Ivan', 'Novačić', 'inovacic', 'igrac_10', '297c7f271d980acf6614428b16f645ce648da7df', '2020-06-12 08:16:18', 'inovacic', 1, '2020-04-01 13:35:00', 3, 0, NULL),
(18, 'Željko', 'Žilavec', 'zzilavec', 'vlasnik_06', '4377bf5cb768bb2547afa3468c02dd21b4825256', '2020-06-17 07:22:22', 'zzilavec@gmail.com', 1, '2020-04-15 08:21:21', 2, 0, NULL),
(19, 'Olaf', 'Berner', 'oberner', 'vlasnik_07', 'b6476837c3723120548aefc031147f6351053a11', '2020-04-01 10:24:00', 'oberner@gmail.com', 1, '2020-03-04 08:23:34', 2, 0, NULL),
(20, 'Tomislav', 'Dumančić', 'tdumancic', 'vlasnik_08', 'cabd4c02a43b0da4a26cdbe72ded915a3aaeca6d', '2020-07-10 09:18:18', 'tdumancic@gmail.com', 1, '2020-06-17 09:21:19', 2, 0, NULL),
(21, 'Paulo', 'Obradović', 'pobradovic', 'igrac_11', '4e513563a90a7c97748a00e379452566d7fbc08d', '2020-06-12 12:25:35', 'poobradovic@gmail.com', 1, '2020-06-04 12:19:00', 3, 0, NULL),
(22, 'Ralf', 'Denk', 'rdenk', 'vlanik_09', '3cd72acda5590303e0661a914898328ee4be0798', '2020-06-17 08:19:19', 'rdenk@gmail.com', 1, '2020-04-22 17:29:00', 2, 0, NULL),
(23, 'Peter', 'Sagan', 'psagan', 'igrac_12', '6d05d25d2a13dbf5897282ddcbed3226194f3892', '2020-04-03 17:18:00', 'psagan@gmail.com', 1, '2020-04-07 08:22:00', 3, 0, NULL),
(24, 'Rod ', 'Ellingworth', 'rellingworth', 'vlasnik_10', 'd624d767d444fd1c250d2d337bf3b5f4ce166458', '2020-04-15 10:25:25', 'rellingworth@gmail.com', 1, '2020-04-03 05:16:16', 2, 0, NULL),
(25, 'Marko', 'Markic', 'mark12', 'marko12345', 'sha1', '0000-00-00 00:00:00', 'marko@gmail.com', 1, '0000-00-00 00:00:00', 3, 0, 'kolacic'),
(26, 'Ivan', 'Ivic', 'ivek12', 'ivek12345', '718e12d69b40727fec3f6e1631641233b7888843', '0000-00-00 00:00:00', 'ivek@gmail.com', 1, '2020-05-31 15:58:02', 3, 0, 'kolacic'),
(27, 'Marko', 'Markic', 'mmarkic', 'markic12345', 'beb35ee12c3dde8499337e9b0824de342e9a5dd4', '2020-06-15 23:30:24', 'mmarkic@gmail.com', 1, '2020-06-01 23:30:24', 3, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ponuda`
--

CREATE TABLE `ponuda` (
  `Ponuda_ID` int(11) NOT NULL,
  `Iznos` float NOT NULL,
  `Datum` date NOT NULL,
  `Pristanak_Igraca` tinyint(1) DEFAULT 0,
  `Profil_Profil_ID` int(11) NOT NULL,
  `Korisnik_Korisnik_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ponuda`
--

INSERT INTO `ponuda` (`Ponuda_ID`, `Iznos`, `Datum`, `Pristanak_Igraca`, `Profil_Profil_ID`, `Korisnik_Korisnik_ID`) VALUES
(1, 20000, '2020-04-24', 1, 6, 3),
(2, 15000, '2020-04-23', 0, 7, 4),
(3, 20000, '2020-04-16', 1, 7, 2),
(4, 4000, '2020-04-21', 0, 9, 12),
(5, 4000, '2020-06-19', 0, 11, 15),
(6, 5000, '2020-07-17', 0, 12, 15),
(7, 24000, '2020-04-25', 1, 6, 4),
(8, 2000, '2020-04-24', 0, 13, 20),
(9, 5000, '2020-06-18', 0, 13, 23),
(10, 6000, '2020-08-12', 0, 14, 23),
(12, 15000, '2020-06-06', 0, 7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `Profil_ID` int(11) NOT NULL,
  `Ime` varchar(45) NOT NULL,
  `Prezime` varchar(45) NOT NULL,
  `Nacionalnost` varchar(45) NOT NULL,
  `Godina_Rodenja` date NOT NULL,
  `Mjesto_Rodenja` varchar(45) NOT NULL,
  `Tezina` float NOT NULL,
  `Cijena` float NOT NULL DEFAULT 0,
  `Slika` text DEFAULT NULL,
  `Visina` int(11) NOT NULL,
  `Sport` varchar(255) NOT NULL,
  `Pozicija` varchar(45) NOT NULL,
  `Zahtjev_Za_Napustanje` tinyint(1) DEFAULT 0,
  `Suglasnost` tinyint(1) NOT NULL,
  `Korisnik_Korisnik_ID` int(11) NOT NULL,
  `Klub_Klub_ID` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`Profil_ID`, `Ime`, `Prezime`, `Nacionalnost`, `Godina_Rodenja`, `Mjesto_Rodenja`, `Tezina`, `Cijena`, `Slika`, `Visina`, `Sport`, `Pozicija`, `Zahtjev_Za_Napustanje`, `Suglasnost`, `Korisnik_Korisnik_ID`, `Klub_Klub_ID`) VALUES
(1, 'Cristiano', 'Ronaldo', 'Portugalac', '1985-05-02', 'Funchal', 84, 105000, 'https://i.dlpng.com/static/png/6631919_preview.png', 187, 'Nogomet', 'Napadač', 0, 1, 5, 1),
(2, 'Luka ', 'Modrić', 'Hrvat', '1985-09-09', 'Zadar', 66, 87480, 'https://futhead.cursecdn.com/static/img/20/players_alt/p67285867.png', 172, 'Nogomet', 'Playmaker', 0, 1, 6, 3),
(3, 'Bruno', 'Petković', 'Hrvat', '1994-09-16', 'Metković', 88, 15000, 'https://d1si3tbndbzwz9.cloudfront.net/soccer/player/55793/headshot.png', 193, 'Nogomet', 'Napadač', 0, 1, 7, 2),
(4, 'Paulo', 'Dybala', 'Argentinac', '1993-05-11', 'Laguna larga', 75, 60000, 'https://www.pngarts.com/files/5/Paulo-Dybala-PNG-High-Quality-Image.png', 177, 'Nogomet', 'Napadač', 0, 1, 8, 1),
(6, 'Marko', 'Pjaca', 'Hrvat', '1995-05-06', 'Zagreb', 83, 20000, 'https://vignette.wikia.nocookie.net/the-football-database/images/6/63/M._Pjaca.png/revision/latest/scale-to-width-down/340?cb=20170514131603', 186, 'Nogomet', 'Napadač', 1, 1, 9, 1),
(7, 'Dominik', 'Livaković', 'Hrvat', '1995-09-01', 'Zadar', 79, 10000, 'https://cdn.soccerwiki.org/images/player/63418.png', 186, 'Nogomet', 'Golman', 0, 1, 11, NULL),
(8, 'Marin', 'Šipić', 'Hrvat', '1996-04-06', ' Bad Soden am Taunus', 108, 2000, 'https://img.ehf.eu/ecpictures/E6dJQfOvIeeNLqJ52Xmi63K-jtIN8kf5q9wdbm68Z_6rgI9oJBl7wp4hqzTCKlCV8xNj9cz83bm2vrex7luTmF6LJI-z5npkF9QqCxWvurs', 190, 'Rukomet', 'Pivot', 0, 1, 13, 4),
(9, 'Zlatko', 'Horvat', 'Hrvat', '1984-09-25', 'Zagreb', 86, 1000, 'https://img.ehf.eu/ecpictures/E6dJQfOvIeeNLqJ52Xmi63K-jtIN8kf5q9wdbm68Z_6rgI9oJBl7wp4hqzTCKlCVw90LEpMUrJJTh1qMSaLYvdvCPu2k2T0zibdBuVlGmsU', 179, 'Rukomet', 'Desno krilo', 0, 0, 14, NULL),
(11, 'Marko', 'Ramljak', 'Hrvat', '1993-03-14', 'Posušje', 96, 3000, 'https://lh3.googleusercontent.com/proxy/bUD_8Q7LeqJmF6wxJdORvLpUrkjulB7VqhYOkIrSb8RQOa_zoHHhMNYwSMI3_QhyYQYS6CrDdRoilNmu8WrgxcVxYe4cQQE', 201, 'Košarka', 'Shooting guard', 0, 1, 16, NULL),
(12, 'Ivan ', 'Novačić', 'Hrvat', '1985-03-09', 'Zadar', 89, 3000, 'https://sportskikod.com/wp-content/uploads/2019/12/Nova%C4%8Di%C4%87-1-1024x1024.jpg', 201, 'Košarka', 'Small forward', 0, 1, 17, NULL),
(13, 'Paulo ', 'Obradović', 'Hrvat', '1986-09-03', 'Dubrovnik', 100, 1000, 'https://jug.hr/rezultati/images/people/89tg5gdt.jpg', 190, 'Vaterpolo', 'Vanjski', 0, 1, 21, NULL),
(14, 'Peter', 'Sagan', 'Slovak', '1990-01-26', 'Zilina', 78, 4000, 'https://firstcycling.com/img/ridersNew/784.png', 184, 'Biciklizam', 'Allrounder', 0, 1, 23, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sport`
--

CREATE TABLE `sport` (
  `Sport_ID` int(11) NOT NULL,
  `Naziv` varchar(45) NOT NULL,
  `Opis` text NOT NULL,
  `Pravila` text NOT NULL,
  `Popularnost` varchar(45) DEFAULT NULL,
  `Godina_nastanka` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sport`
--

INSERT INTO `sport` (`Sport_ID`, `Naziv`, `Opis`, `Pravila`, `Popularnost`, `Godina_nastanka`) VALUES
(1, 'Nogomet', 'Nogomet je sport u kojemu se dvije momčadi od 11 igrača nadmeću na pravokutnom igralištu travnate površine. Cilj igre jest postizanje više pogodaka od protivničke momčadi bilo kojim dijelom tijela osim rukom. Vratar je jedini igrač kojemu je dozvoljeno igrati i zabiti gol rukama, doduše samo unutar jasno označenog pravokutnika ispred vlastitih vrata. Svim igračima dopušteno je proizvoljno kretanje po terenu, iako pravilo zaleđa ograničava napadačke kretnje ovisno o položaju lopte i protivničke obrane.', '1. pravilo: Igralište\r\n2. pravilo: Lopta\r\n3. pravilo: Broj igrača na terenu\r\n4. pravilo: Oprema igrača i sudaca\r\n5. pravilo: Sudac\r\n6. pravilo: Pomoćni sudac\r\n7. pravilo: Trajanje utakmice\r\n8. pravilo: Nastavak igre nakon prekida\r\n9. pravilo: Lopta u igri i izvan igre\r\n10. pravilo: Način zabijanja golova\r\n11. pravilo: Zaleđe\r\n12. pravilo: Prekršaji\r\n13. pravilo: Slobodan udarac\r\n14. pravilo: Jedanaesterac\r\n15. pravilo: Aut\r\n16. pravilo: Gol-aut\r\n17. pravilo: Udarac iz kuta (korner)', 'Popularan sport', 1863),
(2, 'Rukomet', 'Rukomet je ekipni šport s loptom, u kojem se natječu dvije momčadi s po 7 igrača (6 igrača u polju + 1 golman) na svakoj strani, Osnovni cilj igre jest loptom pogoditi označeni prostor gola. Lopta se između igrača dodaje rukama slično kao u košarci, ali s nešto manjom loptom te uz drugačija pravila vođenja lopte.', '1. VRATAR KAO IGRAČ\r\n2. POVRIJEĐENI IGRA\r\n3. PASIVNA IGRA\r\n4. PLAVI KARTON', 'Srednje popularan sport', 1958),
(3, 'Košarka', 'Košarka je sport u kojem dvije momčadi sastavljene od pet igrača pokušavaju ostvariti što više poena (bodova) ubacivanjem lopte kroz obruč koša pod organiziranim pravilima. Kada se to dogodi govori se o košu.', '1. Regulacije u igri\r\n2. Oprema\r\n3. Prekršaji \r\n', 'Popularan sport', 1891),
(4, 'Vaterpolo', 'Vaterpolo je ekipni vodeni sport u kojem sudjeluju dvije ekipe s po sedam članova (jedan od njih je vratar). Uz nogomet, najstariji je momčadski šport koji se pojavio na programu Olimpijskih igara - 1900. godine u Parizu.', 'Cilj igre je postići što više pogodaka. Utakmica se igra 32 minute, a podijeljena je na četiri četvrtine, od kojih svaka traje 8 minuta. Na početku svake četvrtine po jedan igrač iz svake momčadi pliva od gola prema sredini igrališta na kojemu je lopta; onaj igrač koji prvi dopliva do lopte osvaja ju na taj način i njegova momčad prva kreće u napad.', 'Slabo popularan', 1900),
(5, 'Hokej na ledu', 'Hokej na ledu jedan je od najdinamičnijih zimskih športova. Hokej je ekipni šport koji se igra na umjetnim ili prirodnim ledenim površinama, a najpopularniji je u zemljama s dugim, hladnim zimama. Iznimno je popularan u Češkoj, Finskoj, Kanadi, Rusiji, Slovačkoj, Švedskoj i Sjedinjenim Američkim Državama. Krovna organizacija hokeja na ledu IIHF (International Ice Hockey Federation) ima 64 članice, a lige spomenutih zemalja smatraju se najjačima. Na Zimskim je Olimpijskim igrama hokej prisutan od 1924. godine. ', 'U hokejskoj utakmici sude od dva do četiri suca, dva linijska suca koji su zaduženi za prekršaje zaleđa i zabranjenog ispucavanja, te glavni sudac (ponekad i dva) zadužene za ostale prekršaje.', 'Popularan', 1859),
(6, 'Bejzbol', 'Bejzbol (od engleskog naziva baseball, što dolazi od riječi base što znači baza i riječi ball što znači lopta) je momčadski sport u kojem se loptica udara palicom. Osnovni cilj igre momčadi u napadu je udariti bačenu lopticu na način da prije nego li protivnička obrana lopticu uhvati igrači napada \'osvoje\' neku od četiri označene baze. Postoji i podvarijanta bejzbola koja se igra na manjem terenu i s nešto većom loptom koja se naziva softbol, a primjerenija je natjecanjima žena i mlađih dobnih kategorija.', 'Bejzbol je igra između dvije momčadi sa po devet igrača koje vodi menadžer, a igra se na ograđenom igralištu pod nadzorom jednog ili više sudaca. Pobjednik je ona momčad koja na kraju utakmice osvoji više runs (bodova). Bodove može osvajati samo momčad koja se nalazi u fazi napada, dok momčad koja se nalazi u obrani nastoji izbacivanjem trojice napadača doći u fazu napada. Bod se osvoji kad neki od igrača momčadi u napadu na dozvoljeni način osvoji sve četiri obilježene baze.', 'Srednje popularan', 1900),
(7, 'Kriket', 'Kriket je šport u kojema se loptica udara palicom ili batom, sličan bejzbolu. Globalno gledano, kriket je drugi najveći šport na svijetu.', 'Kriket je igra koju igraju dvije jedanaesteročlane momčadi. Momčadi se smjenjuju u ulozi udarača i čuvara polja. Tijekom svakog kola udaračka strana nastoji osvojiti bodove trčanjem između vrata; čuvari polja nastoje srušiti vrata. Utakmica se sastoji od jednog ili dva kola za svaku stranu. Igra se isključivo ljeti i to po suhim vremenskim uvjetima.', 'Popularan', 1900),
(8, 'Odbojka', 'Odbojka je sport s loptom u kojem se dvije suparničke momčadi natječu na terenu s razapetom mrežom na sredini. Cilj igre je prebaciti loptu preko mreže u protivničko polje na način da je protivnik ne uspije održati u zraku i vratiti natrag preko mreže na dozvoljen način prije nego li padne na teren. Na desnoj strani ide 1, ispred njega je broj 2, u sredini je broj 6, ispred njega je 3, na lijevoj strani je 5,ispred njega je 4.', 'Odbojka je sport koji obiluje brzinom i svestranim pokretima tijela pa se od igrača očekuju brze reakcije, sabranost i trenutna snalažljivost. Glavna obilježja današnjih nacionalnih selekcija su snaga i visina.Osobito je važno da igrači budu dobro zagrijani i trenirani.Važno je da igrači igraju složno .', 'Popularan ', 1891),
(9, 'Biciklizam', 'Biciklizam (koturaštvo)[1] je način kretanja kopnom korištenjem bicikla, prijevoznog sredstva na ljudski pogon. Iako prvotno nastao u 19. stoljeću u Europi kao način bržeg i lakšeg transporta ljudi, danas je osim načina prijevoza i vrlo rašireni sport, te vid rekreacije', 'Razlikuju se od kategorije do kategorije.', 'Popularan', 1850),
(10, 'Formula 1', 'Formula 1, također poznata i kao F1, a službeno se naziva FIA Formula One World Championship je najviša klasa jednosjeda u automobilizmu koju je odobrila Međunarodna automobilistička federacija. Ime \"Formula\" se odnosi na skup pravila kojih se sudionici moraju pridržavati. Sezona Formule 1 sastoji se od niza utrka poznatih kao Velike nagrade, koje se održavaju na posebno izgrađenim stazama ili javnim cestama.', 'Sadašnji način kvalifikacija od nekoliko letećih krugova zamijenio je onaj s početka sezone 2005. Od početka sezone 2005. do Velike nagrade Europe kvalifikacije su se održavale i u subotu i nedjelju i ta dva vremena bi se zbrajala i najbolje vrijeme je bilo pobjedničko. Nakon raznih spekulacija je li dobro ili nije na ovaj način provoditi kvalifikacije za utrku, a i zbog razloga što televizijske kuće nisu htjele prenositi toliko Formule 1 u jednom danu to pravilo je ukinuto.', 'Popularan', 1950);

-- --------------------------------------------------------

--
-- Table structure for table `tip`
--

CREATE TABLE `tip` (
  `Tip_ID` int(11) NOT NULL,
  `Naziv` varchar(45) NOT NULL,
  `Opis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tip`
--

INSERT INTO `tip` (`Tip_ID`, `Naziv`, `Opis`) VALUES
(1, 'Prijava/odjava', 'Korisnik se prijavio na stranicu ili se je s nje odjavio.'),
(2, 'Rad s bazom', 'Korisnik je obavljao radnje na bazi podataka.'),
(3, 'Ostale radnje', 'Korisnik je obavljao radnje koje se ne odnose na prijavu/odjavu ili rad s bazom.');

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `Transfer_ID` int(11) NOT NULL,
  `Datum_Transfera` date NOT NULL,
  `Iznos` float NOT NULL,
  `Klub` int(11) NOT NULL,
  `dolazni_odlazni` tinyint(4) NOT NULL,
  `Profil_Profil_ID` int(11) NOT NULL,
  `Korisnik_Korisnik_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`Transfer_ID`, `Datum_Transfera`, `Iznos`, `Klub`, `dolazni_odlazni`, `Profil_Profil_ID`, `Korisnik_Korisnik_ID`) VALUES
(1, '2020-04-21', 100000, 1, 1, 1, 2),
(2, '2020-04-16', 60000, 3, 0, 2, 4),
(3, '2020-04-13', 22000, 1, 1, 6, 2),
(4, '2020-05-21', 6000, 4, 1, 8, 12),
(5, '2020-08-12', 6000, 9, 0, 14, 23),
(6, '2020-01-21', 4000, 2, 1, 3, 3),
(7, '2020-03-24', 40000, 1, 0, 4, 2),
(10, '2020-02-10', 500, 8, 1, 13, 20),
(11, '2019-12-09', 20000, 10, 0, 14, 24),
(12, '2018-10-16', 2200, 5, 0, 11, 15),
(14, '2020-02-02', 20000, 2, 0, 6, 3),
(19, '2020-06-07', 20000, 1, 1, 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `transferni_zahtjevi`
--

CREATE TABLE `transferni_zahtjevi` (
  `Trasferni_zahtjevi_ID` int(11) NOT NULL,
  `Cijena` float NOT NULL,
  `Datum_zahtjeva` date NOT NULL,
  `Pristanak_Igraca` tinyint(1) DEFAULT 0,
  `Pristanak_Vlasnika` tinyint(1) DEFAULT 0,
  `Profil_Profil_ID` int(11) NOT NULL,
  `Korisnik_Korisnik_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transferni_zahtjevi`
--

INSERT INTO `transferni_zahtjevi` (`Trasferni_zahtjevi_ID`, `Cijena`, `Datum_zahtjeva`, `Pristanak_Igraca`, `Pristanak_Vlasnika`, `Profil_Profil_ID`, `Korisnik_Korisnik_ID`) VALUES
(1, 20000, '2020-04-16', 1, 0, 3, 4),
(2, 90000, '2020-04-13', 0, 0, 2, 3),
(3, 80000, '2020-04-13', 0, 0, 4, 4),
(4, 100000, '2020-07-10', 0, 0, 2, 2),
(5, 4000, '2020-06-19', 0, 0, 12, 18),
(6, 5000, '2020-07-17', 0, 0, 11, 18),
(8, 150000, '2020-04-15', 0, 0, 1, 4),
(9, 120000, '2020-06-18', 0, 1, 2, 2),
(10, 130000, '2020-09-18', 0, 0, 2, 2),
(11, 20000, '2020-06-06', 1, 1, 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `uloga`
--

CREATE TABLE `uloga` (
  `Uloga_ID` int(11) NOT NULL,
  `Naziv` varchar(45) NOT NULL,
  `Obveze` text DEFAULT NULL,
  `Opis` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uloga`
--

INSERT INTO `uloga` (`Uloga_ID`, `Naziv`, `Obveze`, `Opis`) VALUES
(1, 'Administrator', 'Cjelukupno upravljanje stranicom za transfere.', 'Administrator je osoba koja ima sva prava na stranici za transfere i glavna je odgovorna osoba za cijelu stranicu.'),
(2, 'Moderator', 'Upravljanje svojim klubom na stranici za transfere.', 'Moderator je vlasnik kluba te ima mogućnost upravljanja s njim na stranici za transfere. '),
(3, 'Registrirani korisnik', 'Odgovoran je za svoj profil.', 'Registrirani korisnik je igrač koji ima mogućnost izrade svog profila te pridruživanja nekom klubu.'),
(4, 'Neregistrirani korisnik', 'Nema obveza.', 'Neregistrirani korisnik je svaki onaj korisnik koji posječuje stranicu, a na njoj nema kreiran račun. Ima mogućnost pregleda pojedinosti o klubu i pojedinom igraču.\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dnevnik`
--
ALTER TABLE `dnevnik`
  ADD PRIMARY KEY (`Dnevnik_ID`,`Tip_Tip_ID`,`Korisnik_Korisnik_ID`),
  ADD KEY `fk_Dnevnik_Korisnik1_idx` (`Korisnik_Korisnik_ID`),
  ADD KEY `fk_Dnevnik_Tip1_idx` (`Tip_Tip_ID`);

--
-- Indexes for table `klub`
--
ALTER TABLE `klub`
  ADD PRIMARY KEY (`Klub_ID`),
  ADD KEY `fk_Klub_Korisnik1_idx` (`Korisnik_Korisnik_ID`),
  ADD KEY `fk_Klub_Sport1_idx` (`Sport_Sport_ID`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`Korisnik_ID`),
  ADD KEY `fk_Korisnik_Uloga_idx` (`Uloga_Uloga_ID`);

--
-- Indexes for table `ponuda`
--
ALTER TABLE `ponuda`
  ADD PRIMARY KEY (`Ponuda_ID`),
  ADD KEY `fk_Ponuda_Profil1_idx` (`Profil_Profil_ID`),
  ADD KEY `fk_Ponuda_Korisnik1_idx` (`Korisnik_Korisnik_ID`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`Profil_ID`),
  ADD KEY `fk_Profil_Korisnik1_idx` (`Korisnik_Korisnik_ID`),
  ADD KEY `fk_Profil_Klub1_idx` (`Klub_Klub_ID`);

--
-- Indexes for table `sport`
--
ALTER TABLE `sport`
  ADD PRIMARY KEY (`Sport_ID`);

--
-- Indexes for table `tip`
--
ALTER TABLE `tip`
  ADD PRIMARY KEY (`Tip_ID`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`Transfer_ID`,`Profil_Profil_ID`,`Korisnik_Korisnik_ID`),
  ADD KEY `fk_Transfer_Profil1_idx` (`Profil_Profil_ID`),
  ADD KEY `fk_Transfer_Korisnik1_idx` (`Korisnik_Korisnik_ID`);

--
-- Indexes for table `transferni_zahtjevi`
--
ALTER TABLE `transferni_zahtjevi`
  ADD PRIMARY KEY (`Trasferni_zahtjevi_ID`),
  ADD KEY `fk_Transferni_Zahtjevi_Profil1_idx` (`Profil_Profil_ID`),
  ADD KEY `fk_Transferni_Zahtjevi_Korisnik1_idx` (`Korisnik_Korisnik_ID`);

--
-- Indexes for table `uloga`
--
ALTER TABLE `uloga`
  ADD PRIMARY KEY (`Uloga_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dnevnik`
--
ALTER TABLE `dnevnik`
  MODIFY `Dnevnik_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `klub`
--
ALTER TABLE `klub`
  MODIFY `Klub_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `Korisnik_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `ponuda`
--
ALTER TABLE `ponuda`
  MODIFY `Ponuda_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `Profil_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `sport`
--
ALTER TABLE `sport`
  MODIFY `Sport_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tip`
--
ALTER TABLE `tip`
  MODIFY `Tip_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `Transfer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `transferni_zahtjevi`
--
ALTER TABLE `transferni_zahtjevi`
  MODIFY `Trasferni_zahtjevi_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `uloga`
--
ALTER TABLE `uloga`
  MODIFY `Uloga_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dnevnik`
--
ALTER TABLE `dnevnik`
  ADD CONSTRAINT `fk_Dnevnik_Korisnik1` FOREIGN KEY (`Korisnik_Korisnik_ID`) REFERENCES `korisnik` (`Korisnik_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Dnevnik_Tip1` FOREIGN KEY (`Tip_Tip_ID`) REFERENCES `tip` (`Tip_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `klub`
--
ALTER TABLE `klub`
  ADD CONSTRAINT `fk_Klub_Korisnik1` FOREIGN KEY (`Korisnik_Korisnik_ID`) REFERENCES `korisnik` (`Korisnik_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Klub_Sport1` FOREIGN KEY (`Sport_Sport_ID`) REFERENCES `sport` (`Sport_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD CONSTRAINT `fk_Korisnik_Uloga` FOREIGN KEY (`Uloga_Uloga_ID`) REFERENCES `uloga` (`Uloga_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ponuda`
--
ALTER TABLE `ponuda`
  ADD CONSTRAINT `fk_Ponuda_Korisnik1` FOREIGN KEY (`Korisnik_Korisnik_ID`) REFERENCES `korisnik` (`Korisnik_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Ponuda_Profil1` FOREIGN KEY (`Profil_Profil_ID`) REFERENCES `profil` (`Profil_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `profil`
--
ALTER TABLE `profil`
  ADD CONSTRAINT `fk_Profil_Klub1` FOREIGN KEY (`Klub_Klub_ID`) REFERENCES `klub` (`Klub_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Profil_Korisnik1` FOREIGN KEY (`Korisnik_Korisnik_ID`) REFERENCES `korisnik` (`Korisnik_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transfer`
--
ALTER TABLE `transfer`
  ADD CONSTRAINT `fk_Transfer_Korisnik1` FOREIGN KEY (`Korisnik_Korisnik_ID`) REFERENCES `korisnik` (`Korisnik_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Transfer_Profil1` FOREIGN KEY (`Profil_Profil_ID`) REFERENCES `profil` (`Profil_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transferni_zahtjevi`
--
ALTER TABLE `transferni_zahtjevi`
  ADD CONSTRAINT `fk_Transferni_Zahtjevi_Korisnik1` FOREIGN KEY (`Korisnik_Korisnik_ID`) REFERENCES `korisnik` (`Korisnik_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Transferni_Zahtjevi_Profil1` FOREIGN KEY (`Profil_Profil_ID`) REFERENCES `profil` (`Profil_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
