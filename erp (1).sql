-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26 Mai 2018 la 14:28
-- Versiune server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

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
-- Structura de tabel pentru tabelul `cadru_didactic`
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
-- Structura de tabel pentru tabelul `detalii_disciplina`
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
-- Structura de tabel pentru tabelul `disciplina`
--

CREATE TABLE `disciplina` (
  `Id` int(11) UNSIGNED NOT NULL,
  `Nume` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `disciplina`
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
(93, 'Sisteme paralele si distribuite-SRIC');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `facultate`
--

CREATE TABLE `facultate` (
  `Id` int(11) UNSIGNED NOT NULL,
  `Nume` varchar(200) COLLATE utf8_romanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_romanian_ci;

--
-- Salvarea datelor din tabel `facultate`
--

INSERT INTO `facultate` (`Id`, `Nume`) VALUES
(1, 'A&C'),
(2, 'A%C');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `forme_invatamant`
--

CREATE TABLE `forme_invatamant` (
  `Id` int(11) UNSIGNED NOT NULL,
  `Nume` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `forme_invatamant`
--

INSERT INTO `forme_invatamant` (`Id`, `Nume`) VALUES
(1, 'SA,Master in limbi straine'),
(2, 'SA,Master');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `nota_comanda`
--

CREATE TABLE `nota_comanda` (
  `Id` int(11) NOT NULL,
  `Id_disciplina` int(5) NOT NULL,
  `Id_facultate` int(5) NOT NULL,
  `Id_forma` int(11) NOT NULL,
  `Id_plan_invatamant` int(11) NOT NULL,
  `Ciclu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_romanian_ci;

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `plan_invatamant`
--

CREATE TABLE `plan_invatamant` (
  `Id` int(11) NOT NULL,
  `An_studiu` varchar(100) COLLATE utf8_romanian_ci NOT NULL,
  `Specializare` varchar(100) COLLATE utf8_romanian_ci NOT NULL,
  `Facultate` varchar(100) COLLATE utf8_romanian_ci NOT NULL,
  `Disciplina` varchar(100) COLLATE utf8_romanian_ci NOT NULL,
  `Total_ore` int(11) NOT NULL,
  `Nr_ore_pc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_romanian_ci;

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `serie`
--

CREATE TABLE `serie` (
  `Id` int(11) UNSIGNED NOT NULL,
  `Nume` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `serie`
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

--
-- Indexes for dumped tables
--

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
  ADD KEY `Id_plan_invatamant` (`Id_plan_invatamant`);

--
-- Indexes for table `plan_invatamant`
--
ALTER TABLE `plan_invatamant`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Facultate` (`Facultate`),
  ADD KEY `Disciplina` (`Disciplina`);

--
-- Indexes for table `serie`
--
ALTER TABLE `serie`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

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
  MODIFY `Id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `facultate`
--
ALTER TABLE `facultate`
  MODIFY `Id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `forme_invatamant`
--
ALTER TABLE `forme_invatamant`
  MODIFY `Id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nota_comanda`
--
ALTER TABLE `nota_comanda`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plan_invatamant`
--
ALTER TABLE `plan_invatamant`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `serie`
--
ALTER TABLE `serie`
  MODIFY `Id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Restrictii pentru tabele sterse
--

--
-- Restrictii pentru tabele `detalii_disciplina`
--
ALTER TABLE `detalii_disciplina`
  ADD CONSTRAINT `disciplina_fk` FOREIGN KEY (`Id_disciplina`) REFERENCES `disciplina` (`Id`);

--
-- Restrictii pentru tabele `nota_comanda`
--
ALTER TABLE `nota_comanda`
  ADD CONSTRAINT `nota_comanda_ibfk_3` FOREIGN KEY (`Id_plan_invatamant`) REFERENCES `plan_invatamant` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
