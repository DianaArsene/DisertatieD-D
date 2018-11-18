-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2018 at 04:33 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `an_invatamant`
--

CREATE TABLE `an_invatamant` (
  `Id` int(5) NOT NULL,
  `Nume` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `an_invatamant`
--

INSERT INTO `an_invatamant` (`Id`, `Nume`) VALUES
(1, '2016/2017'),
(2, '2017/2018'),
(3, '2018/2019'),
(4, '2019/2020'),
(6, '2020/2021');

-- --------------------------------------------------------

--
-- Table structure for table `an_studiu`
--

CREATE TABLE `an_studiu` (
  `Id` int(5) NOT NULL,
  `Nume` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `an_studiu`
--

INSERT INTO `an_studiu` (`Id`, `Nume`) VALUES
(1, 'Licenta anul I'),
(2, 'Licenta anul II'),
(3, 'Licenta anul III'),
(4, 'Licenta anul IV'),
(5, 'Master anul I'),
(6, 'Master anul II'),
(7, 'Licenta anii I+II'),
(8, 'Licenta toti anii de studiu'),
(9, 'Master toti anii de studiu'),
(10, 'Licenta + Master toti anii de studiu');

-- --------------------------------------------------------

--
-- Table structure for table `cadru_didactic`
--

CREATE TABLE `cadru_didactic` (
  `Id` int(11) NOT NULL,
  `Grad` varchar(100) COLLATE utf8_romanian_ci NOT NULL,
  `Nume` varchar(100) COLLATE utf8_romanian_ci NOT NULL,
  `Prenume` varchar(100) COLLATE utf8_romanian_ci NOT NULL,
  `Disciplina` varchar(100) COLLATE utf8_romanian_ci NOT NULL,
  `Id_grad_titular` int(11) NOT NULL,
  `Titlu` varchar(100) COLLATE utf8_romanian_ci NOT NULL,
  `Vechime` int(11) NOT NULL,
  `Titular_suplinitor` varchar(100) COLLATE utf8_romanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_romanian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detalii_disciplina`
--

CREATE TABLE `detalii_disciplina` (
  `Id` int(11) NOT NULL,
  `Id_disciplina` int(11) UNSIGNED NOT NULL,
  `Tip` varchar(100) COLLATE utf8_romanian_ci NOT NULL,
  `Specializare` varchar(100) COLLATE utf8_romanian_ci NOT NULL,
  `Nr_ore_total` int(11) NOT NULL,
  `Pregatire_individuala` int(11) NOT NULL,
  `Nr_pc` int(11) NOT NULL,
  `Limba` varchar(100) COLLATE utf8_romanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_romanian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `disciplina`
--

CREATE TABLE `disciplina` (
  `Id` int(11) UNSIGNED NOT NULL,
  `Nume` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disciplina`
--

INSERT INTO `disciplina` (`Id`, `Nume`) VALUES
(1, 'Calcul Cluster si Grid'),
(2, 'Securitatea calculatoarelor si retelelor'),
(3, 'Algoritmi distribuiti'),
(4, 'Sisteme distribuite'),
(5, 'Introduction to big data'),
(6, 'Programare paralela'),
(7, 'Metode avansate in securitatea calculatoarelo si retelelor'),
(8, 'Topici avansate in sisteme distribuite'),
(9, 'Sisteme de Ã®ncredere'),
(10, 'Architecture of Enterprise Information Systems'),
(11, 'Data mining and Data warehousing'),
(12, 'Gestiunea serviciilor de retea'),
(13, 'Infrastructura si servicii pentru retele mobile'),
(14, 'Securitatea caculatoarelor si a retelelor'),
(15, 'Securizarea retelelor cu echipamente dedicate'),
(16, 'Introducere in Quantum Computing'),
(17, 'Securitatea dispozitivelor mobile'),
(18, 'Auditarea securitatii retelelor'),
(19, 'Fundamentele stiintei serviciilor'),
(20, 'Integrarea si managementul serviciilor'),
(21, 'Managementul proiectelor si serviciilor IT'),
(22, 'Politici in sisteme distribuite'),
(23, 'Circuite inteligente bazate pe logica fuzzy\nfuzzy'),
(24, 'Sisteme cu microprocesoare avansate'),
(25, 'Sisteme de procesare in timp real cu microprocesoare'),
(26, 'Structuri Avansate VLSI'),
(27, 'Datacenter Computing'),
(28, 'Metode si tehnici de programare in\nHigh Performance Computing'),
(29, 'Retele wireless de senzori'),
(30, 'Sisteme paralele si distribuite-AAC'),
(31, 'Administrarea bazelor de date'),
(32, 'Implementarea sistemelor de baze de date'),
(33, 'Instrumente CASE pentru proiectarea aplicatiilor cu baze de date'),
(34, 'Notiuni avansate de baze de date'),
(35, 'Sisteme avansate de baze de date'),
(36, 'Proiectarea aplicatiilor J2EE'),
(37, 'Data mining si data warehousing'),
(38, 'Introducere in Big Data'),
(39, 'E-Guvernare'),
(40, 'Managementul proiectelor de e-guvernare'),
(41, 'Psihologia utilizatorului de e-servicii'),
(42, 'Sisteme de suport pentru decizii'),
(43, 'Securitatea informatica'),
(44, 'Sisteme adaptive si colaborative'),
(45, 'Cloud Computing eGov'),
(46, 'Metodologia pentru consultanta serviciilor informatice'),
(47, 'Geometrie computationala'),
(48, 'Introducere in Realitatea Virtuala'),
(49, 'Sisteme avansate de analiza si\nprelucrare a imaginilor'),
(50, 'Sisteme si tehnici multimedia'),
(51, 'Tehnici de modelare 3D'),
(52, 'Tehnici de programare pentru prelucrari grafice de inalta performanta'),
(53, 'Tehnici de vizualizare a datelor volumetrice si animatie pe calculator'),
(54, 'Transmisia datelor multimedia in\nretele de calculatoare'),
(55, 'Dezvoltarea jocurilor video'),
(56, 'Analiza si extragerea automata a continutului documentelor'),
(57, 'Dezvoltarea aplicatiilor grafice pentru dispozitive mobile'),
(58, 'Dezvoltarea sistemelor de Realitate Virtuala'),
(59, 'Motoare de grafica 3D in timp real'),
(60, 'Technical Scientific Writing'),
(61, 'Type Systems and Functional\nProgramming'),
(62, 'Data Mining'),
(63, 'Knowledge Representation and\nReasoning'),
(64, 'Multi-agent Systems'),
(65, 'Natural Language Processing'),
(66, 'Symbolic and Statistical Learning'),
(67, 'Neural Networks'),
(68, 'Self-organizing Systems'),
(69, 'Software verification and validation'),
(70, 'Computer Vision'),
(71, 'Aplicatii WEB semantice'),
(72, 'Prelucrari distribuite in Internet'),
(73, 'Reprezentarea cunostintelor'),
(74, 'Sisteme multiagent'),
(75, 'Sisteme de regasire a informatiei'),
(76, 'Dezvoltarea aplicatiilor pentru Internet'),
(77, 'Curs avansat de Ingineria Programelor'),
(78, 'Managementul securitatii informatiei'),
(79, 'Modelarea informatica a proceselor complexe de afaceri'),
(80, 'Instrumente Informatice pentru antreprenoriat si management tehnologic'),
(81, 'Introduction to robotics'),
(82, 'Securizarea avansata a sistemelor de calcul'),
(83, 'HPC (High Performance Computing) in sisteme informatice in medicina'),
(84, 'Cloud Computing SSA'),
(85, 'Sisteme de e-Sanatate'),
(86, 'Criptografie aplicata'),
(87, 'Protocoale de securitate'),
(88, 'Securitatea cibernetica a infrastructurilor critice'),
(89, 'Securitatea sistemelor informationale'),
(90, 'Securitatea in sistemele grid si cloud'),
(91, 'Cyberdefense si cyberintellgence. Tehnici de securitate cibernetica'),
(92, 'Tehnologii de protectie a vietii private'),
(93, 'Sisteme paralele si distribuite-SRIC'),
(94, 'Matematica 1'),
(95, 'Matematica 2'),
(96, 'Programarea calculatoarelor'),
(97, 'Utilizarea sistemelor de operare'),
(98, 'Proiectare logica'),
(99, 'Limba straina 1'),
(100, 'Educatie fizica si sport'),
(101, 'Matematica 3'),
(102, 'Structuri de date'),
(103, 'Bazele electrotehnicii'),
(104, 'Metode numerice'),
(105, 'Fizica'),
(106, 'Limba straina 2');

-- --------------------------------------------------------

--
-- Table structure for table `facultate`
--

CREATE TABLE `facultate` (
  `Id` int(11) UNSIGNED NOT NULL,
  `Nume` varchar(200) COLLATE utf8_romanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_romanian_ci;

--
-- Dumping data for table `facultate`
--

INSERT INTO `facultate` (`Id`, `Nume`) VALUES
(1, 'A&C'),
(3, 'A%C');

-- --------------------------------------------------------

--
-- Table structure for table `forme_invatamant`
--

CREATE TABLE `forme_invatamant` (
  `Id` int(11) UNSIGNED NOT NULL,
  `Nume` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forme_invatamant`
--

INSERT INTO `forme_invatamant` (`Id`, `Nume`) VALUES
(1, 'SA,Master in limbi straine'),
(2, 'SA,Master'),
(4, 'ing.zi');

-- --------------------------------------------------------

--
-- Table structure for table `nota_comanda`
--

CREATE TABLE `nota_comanda` (
  `Id` int(11) NOT NULL,
  `Id_disciplina` int(5) NOT NULL,
  `Id_facultate` int(5) NOT NULL,
  `Id_forma` int(11) UNSIGNED NOT NULL,
  `an_studiu` varchar(5) COLLATE utf8_romanian_ci NOT NULL,
  `Id_serie` int(5) UNSIGNED NOT NULL,
  `Nr_st` int(5) NOT NULL,
  `Nr_gr` int(5) NOT NULL,
  `Nr_sgr` int(5) NOT NULL,
  `Semestru` int(2) NOT NULL,
  `Curs` int(2) NOT NULL,
  `Seminar` int(2) NOT NULL,
  `Laborator` int(2) NOT NULL,
  `Proiect` int(2) NOT NULL,
  `Evaluare` varchar(5) COLLATE utf8_romanian_ci NOT NULL,
  `Nr_ore` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_romanian_ci;

--
-- Dumping data for table `nota_comanda`
--

INSERT INTO `nota_comanda` (`Id`, `Id_disciplina`, `Id_facultate`, `Id_forma`, `an_studiu`, `Id_serie`, `Nr_st`, `Nr_gr`, `Nr_sgr`, `Semestru`, `Curs`, `Seminar`, `Laborator`, `Proiect`, `Evaluare`, `Nr_ore`) VALUES
(1, 108, 1, 4, 'I', 1, 165, 6, 6, 1, 1, 0, 1, 0, 'V', 112),
(2, 108, 1, 4, 'I', 2, 165, 6, 6, 1, 1, 0, 1, 0, 'V', 112),
(3, 97, 1, 4, 'I', 3, 84, 3, 6, 1, 2, 0, 1, 0, 'E', 140),
(4, 109, 1, 4, 'II', 4, 145, 5, 10, 1, 3, 1, 1, 0, 'E', 294),
(5, 110, 1, 4, 'II', 5, 145, 5, 10, 1, 3, 0, 2, 0, 'E', 364),
(6, 110, 1, 4, 'II', 4, 145, 5, 10, 1, 3, 0, 2, 0, 'E', 364),
(7, 110, 1, 4, 'II', 6, 116, 4, 8, 1, 3, 0, 2, 0, 'E', 308),
(8, 110, 1, 4, 'II', 7, 116, 4, 8, 1, 3, 0, 2, 0, 'E', 308),
(9, 111, 1, 4, 'II', 7, 116, 4, 8, 1, 3, 0, 2, 0, 'E', 308),
(10, 111, 1, 4, 'II', 4, 145, 5, 10, 1, 3, 0, 2, 0, 'E', 364),
(11, 111, 1, 4, 'II', 6, 116, 4, 8, 1, 3, 0, 2, 0, 'E', 308),
(12, 111, 1, 4, 'II', 5, 145, 5, 10, 1, 3, 0, 2, 0, 'E', 364),
(13, 112, 1, 4, 'II', 6, 116, 4, 8, 1, 3, 0, 1, 1, 'E', 252),
(14, 112, 1, 4, 'II', 4, 145, 5, 10, 1, 3, 0, 1, 1, 'E', 294),
(15, 112, 1, 4, 'II', 7, 116, 4, 8, 1, 3, 0, 1, 1, 'E', 252);

-- --------------------------------------------------------

--
-- Table structure for table `plan_invatamant`
--

CREATE TABLE `plan_invatamant` (
  `Id` int(11) NOT NULL,
  `Id_an_invatamant` int(15) NOT NULL,
  `An_studiu` varchar(5) COLLATE utf8_romanian_ci NOT NULL,
  `Id_facultate` int(11) UNSIGNED NOT NULL,
  `Cod` varchar(50) COLLATE utf8_romanian_ci NOT NULL,
  `Tip` varchar(5) COLLATE utf8_romanian_ci NOT NULL,
  `Id_disciplina` int(11) NOT NULL,
  `Semestru` varchar(5) COLLATE utf8_romanian_ci NOT NULL,
  `Curs` int(10) NOT NULL,
  `Seminar` int(10) NOT NULL,
  `Laborator` int(10) NOT NULL,
  `Proiect` int(10) NOT NULL,
  `Puncte_credit` int(10) NOT NULL,
  `Evaluare` varchar(5) COLLATE utf8_romanian_ci NOT NULL,
  `Nr_total_ore` int(10) NOT NULL,
  `Ore_preg_indiv` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_romanian_ci;

--
-- Dumping data for table `plan_invatamant`
--

INSERT INTO `plan_invatamant` (`Id`, `Id_an_invatamant`, `An_studiu`, `Id_facultate`, `Cod`, `Tip`, `Id_disciplina`, `Semestru`, `Curs`, `Seminar`, `Laborator`, `Proiect`, `Puncte_credit`, `Evaluare`, `Nr_total_ore`, `Ore_preg_indiv`) VALUES
(1, 2, 'I', 1, 'UPB.03.L1.O.01', 'F', 94, 'I', 3, 2, 0, 0, 5, 'E', 130, 60),
(2, 2, 'I', 1, 'UPB.03.L1.O.02', 'F', 95, 'I', 3, 2, 0, 0, 5, 'E', 130, 60),
(3, 2, 'I', 1, 'UPB.03.L1.O.03', 'F', 96, 'I', 2, 0, 2, 0, 5, 'E', 130, 74),
(4, 2, 'I', 1, 'UPB.03.L1.O.04', 'D', 97, 'I', 2, 0, 2, 0, 4, 'E', 104, 48),
(5, 2, 'I', 1, 'UPB.03.L1.O.05', 'D', 98, 'I', 3, 0, 2, 0, 5, 'E', 130, 60),
(6, 2, 'I', 1, 'UPB.03.L1.O.06', 'C', 99, 'I', 0, 1, 0, 0, 1, 'V', 26, 12),
(7, 2, 'I', 1, 'UPB.03.L1.O.016', 'C', 100, 'I', 0, 0, 1, 0, 1, 'V', 26, 12),
(8, 2, 'I', 1, 'UPB.03.L1.O.07', 'F', 101, 'II', 3, 2, 0, 0, 5, 'E', 130, 60),
(9, 2, 'I', 1, 'UPB.03.L1.O.08', 'F', 102, 'II', 3, 0, 2, 0, 5, 'E', 130, 60),
(10, 2, 'I', 1, 'UPB.03.L1.O.09', 'D', 103, 'II', 3, 0, 2, 0, 4, 'E', 104, 34),
(11, 2, 'I', 1, 'UPB.03.L1.O.10', 'F', 104, 'II', 3, 0, 2, 0, 5, 'E', 130, 60),
(12, 2, 'I', 1, 'UPB.03.L1.O.11', 'F', 105, 'II', 3, 0, 2, 0, 5, 'E', 130, 60),
(13, 2, 'I', 1, 'UPB.03.L1.O.12', 'C', 106, 'II', 0, 2, 0, 0, 1, 'V', 26, 12),
(14, 2, 'I', 1, 'UPB.03.L1.O.18', 'C', 100, 'II', 0, 0, 1, 0, 1, 'V', 26, 12),
(26, 2, 'I', 1, 'UPB.03.L1.O.01', 'F', 94, 'I', 3, 2, 0, 0, 5, 'E', 130, 60),
(27, 2, 'I', 1, 'UPB.03.L1.O.02', 'F', 95, 'I', 3, 2, 0, 0, 5, 'E', 130, 60),
(28, 2, 'I', 1, 'UPB.03.L1.O.03', 'F', 96, 'I', 2, 0, 2, 0, 5, 'E', 130, 74),
(29, 2, 'I', 1, 'UPB.03.L1.O.04', 'D', 97, 'I', 2, 0, 2, 0, 4, 'E', 104, 48),
(30, 2, 'I', 1, 'UPB.03.L1.O.05', 'D', 98, 'I', 3, 0, 2, 0, 5, 'E', 130, 60),
(31, 2, 'I', 1, 'UPB.03.L1.O.06', 'C', 99, 'I', 0, 1, 0, 0, 1, 'V', 26, 12),
(32, 2, 'I', 1, 'UPB.03.L1.O.016', 'C', 100, 'I', 0, 0, 1, 0, 1, 'V', 26, 12),
(33, 2, 'I', 1, 'UPB.03.L1.O.07', 'F', 101, 'II', 3, 2, 0, 0, 5, 'E', 130, 60),
(34, 2, 'I', 1, 'UPB.03.L1.O.08', 'F', 102, 'II', 3, 0, 2, 0, 5, 'E', 130, 60),
(35, 2, 'I', 1, 'UPB.03.L1.O.09', 'D', 103, 'II', 3, 0, 2, 0, 4, 'E', 104, 34),
(36, 2, 'I', 1, 'UPB.03.L1.O.10', 'F', 104, 'II', 3, 0, 2, 0, 5, 'E', 130, 60),
(37, 2, 'I', 1, 'UPB.03.L1.O.11', 'F', 105, 'II', 3, 0, 2, 0, 5, 'E', 130, 60),
(38, 2, 'I', 1, 'UPB.03.L1.O.12', 'C', 106, 'II', 0, 2, 0, 0, 1, 'V', 26, 12),
(39, 2, 'I', 1, 'UPB.03.L1.O.18', 'C', 100, 'II', 0, 0, 1, 0, 1, 'V', 26, 12),
(40, 2, 'I', 1, '', '', 0, '', 0, 0, 0, 0, 0, '', 0, 0),
(41, 2, 'I', 1, '', '', 0, '', 0, 0, 0, 0, 0, '', 0, 0),
(42, 2, 'I', 1, '', '', 0, '', 0, 0, 0, 0, 0, '', 0, 0),
(43, 2, 'I', 1, '', '', 0, '', 0, 0, 0, 0, 0, '', 0, 0),
(44, 2, 'I', 1, '', '', 0, '', 0, 0, 0, 0, 0, '', 0, 0),
(45, 2, 'I', 1, '', '', 0, '', 0, 0, 0, 0, 0, '', 0, 0),
(46, 2, 'I', 1, '', '', 0, '', 0, 0, 0, 0, 0, '', 0, 0),
(47, 2, 'I', 1, '', '', 0, '', 0, 0, 0, 0, 0, '', 0, 0),
(48, 2, 'I', 1, '', '', 0, '', 0, 0, 0, 0, 0, '', 0, 0),
(49, 2, 'I', 1, '', '', 0, '', 0, 0, 0, 0, 0, '', 0, 0),
(50, 2, 'I', 1, '', '', 0, '', 0, 0, 0, 0, 0, '', 0, 0),
(51, 2, 'I', 1, 'UPB.03.L1.O.01', 'F', 94, 'I', 3, 2, 0, 0, 5, 'E', 130, 60),
(52, 2, 'I', 1, 'UPB.03.L1.O.02', 'F', 95, 'I', 3, 2, 0, 0, 5, 'E', 130, 60),
(53, 2, 'I', 1, 'UPB.03.L1.O.03', 'F', 96, 'I', 2, 0, 2, 0, 5, 'E', 130, 74),
(54, 2, 'I', 1, 'UPB.03.L1.O.04', 'D', 97, 'I', 2, 0, 2, 0, 4, 'E', 104, 48),
(55, 2, 'I', 1, 'UPB.03.L1.O.05', 'D', 98, 'I', 3, 0, 2, 0, 5, 'E', 130, 60),
(56, 2, 'I', 1, 'UPB.03.L1.O.06', 'C', 99, 'I', 0, 1, 0, 0, 1, 'V', 26, 12),
(57, 2, 'I', 1, 'UPB.03.L1.O.016', 'C', 100, 'I', 0, 0, 1, 0, 1, 'V', 26, 12),
(58, 2, 'I', 1, 'UPB.03.L1.O.07', 'F', 101, 'II', 3, 2, 0, 0, 5, 'E', 130, 60),
(59, 2, 'I', 1, 'UPB.03.L1.O.08', 'F', 102, 'II', 3, 0, 2, 0, 5, 'E', 130, 60),
(60, 2, 'I', 1, 'UPB.03.L1.O.09', 'D', 103, 'II', 3, 0, 2, 0, 4, 'E', 104, 34),
(61, 2, 'I', 1, 'UPB.03.L1.O.10', 'F', 104, 'II', 3, 0, 2, 0, 5, 'E', 130, 60),
(62, 2, 'I', 1, 'UPB.03.L1.O.11', 'F', 105, 'II', 3, 0, 2, 0, 5, 'E', 130, 60),
(63, 2, 'I', 1, 'UPB.03.L1.O.12', 'C', 106, 'II', 0, 2, 0, 0, 1, 'V', 26, 12),
(64, 2, 'I', 1, 'UPB.03.L1.O.18', 'C', 100, 'II', 0, 0, 1, 0, 1, 'V', 26, 12),
(65, 2, 'I', 1, '', '', 0, '', 0, 0, 0, 0, 0, '', 0, 0),
(66, 2, 'I', 1, '', '', 0, '', 0, 0, 0, 0, 0, '', 0, 0),
(67, 2, 'I', 1, '', '', 0, '', 0, 0, 0, 0, 0, '', 0, 0),
(68, 2, 'I', 1, '', '', 0, '', 0, 0, 0, 0, 0, '', 0, 0),
(69, 2, 'I', 1, '', '', 0, '', 0, 0, 0, 0, 0, '', 0, 0),
(70, 2, 'I', 1, '', '', 0, '', 0, 0, 0, 0, 0, '', 0, 0),
(71, 2, 'I', 1, '', '', 0, '', 0, 0, 0, 0, 0, '', 0, 0),
(72, 2, 'I', 1, '', '', 0, '', 0, 0, 0, 0, 0, '', 0, 0),
(73, 2, 'I', 1, '', '', 0, '', 0, 0, 0, 0, 0, '', 0, 0),
(74, 2, 'I', 1, '', '', 0, '', 0, 0, 0, 0, 0, '', 0, 0),
(75, 2, 'I', 1, '', '', 0, '', 0, 0, 0, 0, 0, '', 0, 0),
(76, 2, 'I', 1, 'UPB.03.L1.O.01', 'F', 94, 'I', 3, 2, 0, 0, 5, 'E', 130, 60),
(77, 2, 'I', 1, 'UPB.03.L1.O.02', 'F', 95, 'I', 3, 2, 0, 0, 5, 'E', 130, 60),
(78, 2, 'I', 1, 'UPB.03.L1.O.03', 'F', 96, 'I', 2, 0, 2, 0, 5, 'E', 130, 74),
(79, 2, 'I', 1, 'UPB.03.L1.O.04', 'D', 97, 'I', 2, 0, 2, 0, 4, 'E', 104, 48),
(80, 2, 'I', 1, 'UPB.03.L1.O.05', 'D', 98, 'I', 3, 0, 2, 0, 5, 'E', 130, 60),
(81, 2, 'I', 1, 'UPB.03.L1.O.06', 'C', 99, 'I', 0, 1, 0, 0, 1, 'V', 26, 12),
(82, 2, 'I', 1, 'UPB.03.L1.O.016', 'C', 100, 'I', 0, 0, 1, 0, 1, 'V', 26, 12),
(83, 2, 'I', 1, 'UPB.03.L1.O.07', 'F', 101, 'II', 3, 2, 0, 0, 5, 'E', 130, 60),
(84, 2, 'I', 1, 'UPB.03.L1.O.08', 'F', 102, 'II', 3, 0, 2, 0, 5, 'E', 130, 60),
(85, 2, 'I', 1, 'UPB.03.L1.O.09', 'D', 103, 'II', 3, 0, 2, 0, 4, 'E', 104, 34),
(86, 2, 'I', 1, 'UPB.03.L1.O.10', 'F', 104, 'II', 3, 0, 2, 0, 5, 'E', 130, 60),
(87, 2, 'I', 1, 'UPB.03.L1.O.11', 'F', 105, 'II', 3, 0, 2, 0, 5, 'E', 130, 60),
(88, 2, 'I', 1, 'UPB.03.L1.O.12', 'C', 106, 'II', 0, 2, 0, 0, 1, 'V', 26, 12),
(89, 2, 'I', 1, 'UPB.03.L1.O.18', 'C', 100, 'II', 0, 0, 1, 0, 1, 'V', 26, 12),
(90, 2, 'I', 1, '', '', 0, '', 0, 0, 0, 0, 0, '', 0, 0),
(91, 2, 'I', 1, '', '', 0, '', 0, 0, 0, 0, 0, '', 0, 0),
(92, 2, 'I', 1, '', '', 0, '', 0, 0, 0, 0, 0, '', 0, 0),
(93, 2, 'I', 1, '', '', 0, '', 0, 0, 0, 0, 0, '', 0, 0),
(94, 2, 'I', 1, '', '', 0, '', 0, 0, 0, 0, 0, '', 0, 0),
(95, 2, 'I', 1, '', '', 0, '', 0, 0, 0, 0, 0, '', 0, 0),
(96, 2, 'I', 1, '', '', 0, '', 0, 0, 0, 0, 0, '', 0, 0),
(97, 2, 'I', 1, '', '', 0, '', 0, 0, 0, 0, 0, '', 0, 0),
(98, 2, 'I', 1, '', '', 0, '', 0, 0, 0, 0, 0, '', 0, 0),
(99, 2, 'I', 1, '', '', 0, '', 0, 0, 0, 0, 0, '', 0, 0),
(100, 2, 'I', 1, '', '', 0, '', 0, 0, 0, 0, 0, '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `serie`
--

CREATE TABLE `serie` (
  `Id` int(11) UNSIGNED NOT NULL,
  `Nume` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `serie`
--

INSERT INTO `serie` (`Id`, `Nume`) VALUES
(1, 'SCPD 1'),
(2, 'SCPD 2'),
(3, 'SEM 1'),
(4, 'SRIC 1'),
(5, 'GrupG-sem 2'),
(6, 'SRIC 2'),
(7, 'SSA 1'),
(8, 'SSA 2'),
(9, 'AAC 1'),
(10, 'AAC 2'),
(11, 'ABD 1'),
(12, 'ABD 2'),
(13, 'ABD'),
(14, 'MTI'),
(15, 'SSA'),
(16, 'e-GOV 1'),
(17, 'e-GOV 2'),
(18, 'e-GOV1'),
(19, 'ISI'),
(20, 'GC'),
(21, 'GMRV 1'),
(22, 'GMRV 2'),
(23, 'GrupG-Lbs'),
(24, 'IA 1'),
(25, 'IA 2'),
(26, 'ISI 1'),
(27, 'ISI 2'),
(28, 'MTI 1'),
(29, 'IR'),
(30, 'SASC'),
(31, 'SIM 1'),
(32, 'SAS');

-- --------------------------------------------------------

--
-- Table structure for table `structura_an`
--

CREATE TABLE `structura_an` (
  `Id` int(5) NOT NULL,
  `Id_an_studiu` int(5) NOT NULL,
  `Id_an_invatamant` int(5) NOT NULL,
  `Start` date NOT NULL,
  `End` date NOT NULL,
  `Activitate` varchar(100) NOT NULL,
  `Semestru` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `structura_an`
--

INSERT INTO `structura_an` (`Id`, `Id_an_studiu`, `Id_an_invatamant`, `Start`, `End`, `Activitate`, `Semestru`) VALUES
(6, 4, 2, '2018-11-13', '2018-11-14', 'Examen', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'profesor', '793741d54b00253006453742ad4ed534');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `an_invatamant`
--
ALTER TABLE `an_invatamant`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `an_studiu`
--
ALTER TABLE `an_studiu`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `cadru_didactic`
--
ALTER TABLE `cadru_didactic`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Disciplina` (`Disciplina`);

--
-- Indexes for table `detalii_disciplina`
--
ALTER TABLE `detalii_disciplina`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `disciplina_fk` (`Id_disciplina`);

--
-- Indexes for table `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `facultate`
--
ALTER TABLE `facultate`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `forme_invatamant`
--
ALTER TABLE `forme_invatamant`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `nota_comanda`
--
ALTER TABLE `nota_comanda`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Facultate` (`Id_facultate`),
  ADD KEY `Disciplina` (`Id_disciplina`),
  ADD KEY `nota_comanda_ibfk_1` (`Id_forma`),
  ADD KEY `Id_serie` (`Id_serie`);

--
-- Indexes for table `plan_invatamant`
--
ALTER TABLE `plan_invatamant`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Disciplina` (`Id_disciplina`),
  ADD KEY `Id_facultate` (`Id_facultate`);

--
-- Indexes for table `serie`
--
ALTER TABLE `serie`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `structura_an`
--
ALTER TABLE `structura_an`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `an_invatamant`
--
ALTER TABLE `an_invatamant`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `an_studiu`
--
ALTER TABLE `an_studiu`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cadru_didactic`
--
ALTER TABLE `cadru_didactic`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detalii_disciplina`
--
ALTER TABLE `detalii_disciplina`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `Id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `facultate`
--
ALTER TABLE `facultate`
  MODIFY `Id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `forme_invatamant`
--
ALTER TABLE `forme_invatamant`
  MODIFY `Id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `plan_invatamant`
--
ALTER TABLE `plan_invatamant`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `serie`
--
ALTER TABLE `serie`
  MODIFY `Id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `structura_an`
--
ALTER TABLE `structura_an`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detalii_disciplina`
--
ALTER TABLE `detalii_disciplina`
  ADD CONSTRAINT `disciplina_fk` FOREIGN KEY (`Id_disciplina`) REFERENCES `disciplina` (`Id`);

--
-- Constraints for table `plan_invatamant`
--
ALTER TABLE `plan_invatamant`
  ADD CONSTRAINT `plan_invatamant_ibfk_1` FOREIGN KEY (`Id_facultate`) REFERENCES `facultate` (`Id`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
