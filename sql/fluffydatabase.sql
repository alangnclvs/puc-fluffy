-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27/11/2023 às 00:33
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fluffydatabase`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tutores`
--

CREATE TABLE `tutores` (
  `idTutor` int(11) NOT NULL,
  `nomeTutor` varchar(100) NOT NULL,
  `cpfTutor` char(11) NOT NULL,
  `telefoneTutor` varchar(13) NOT NULL,
  `emailTutor` varchar(255) NOT NULL,
  `senhaTutor` varchar(64) NOT NULL,
  `nomePet` varchar(100) NOT NULL,
  `especiePet` varchar(100) NOT NULL,
  `racaPet` varchar(100) NOT NULL,
  `datanascimentoPet` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tutores`
--

INSERT INTO `tutores` (`idTutor`, `nomeTutor`, `cpfTutor`, `telefoneTutor`, `emailTutor`, `senhaTutor`, `nomePet`, `especiePet`, `racaPet`, `datanascimentoPet`) VALUES
(91, 'Alan Gonçalves', '07053194906', '+554199880988', 'alangnclvs@outlook.com', '$2y$10$e4o3vC25EBuHKmkeucM.JO7SfSvcdL.uWyx.mYluW9rA2SmKH6x8S', 'Frank', 'Gato', 'SRD', '2018-12-01'),
(92, 'Hermione Granger', '78945632177', '+554198899445', 'hermione@outlook.com', '$2y$10$mVBoWTmLaxucV27wovRB9eKy.ba7WClJ7NY08CfU4sP0EVD7vsUpq', 'Bichento', 'Gato', 'SRD', '1999-05-15'),
(93, 'Luna Lovegood', '14725896312', '+554192233445', 'luna@outlook.com', '$2y$10$.eKw/3/wQ9gO42OXTMvB7.7x342NaPmQIaS3.o0rd4BdqFae7kQVG', 'Rudolph', 'Testrálio', 'SRD', '1991-04-12'),
(94, 'Fred Weasley', '95184762323', '+554199988551', 'fred@outlook.com', '$2y$10$.RjcjRzcNxLIAj7Mpt8TPeqhdnxDxDyebG7tU56Hk4RGAjKU58kY6', 'Puffy', 'Aranha', 'SRD', '1995-06-15'),
(95, 'Sirius Black', '33322211166', '+554191478952', 'sirius@outlook.com', '$2y$10$N2kk.jZNu0XLJ.wq2qR5UugGBfHny/XI8v70J4AuAaWUzOM/OFpCu', 'Bicuço', 'Hipogrifo', 'SRD', '2001-05-14');

-- --------------------------------------------------------

--
-- Estrutura para tabela `veterinarios`
--

CREATE TABLE `veterinarios` (
  `idVet` int(11) NOT NULL,
  `nomeVet` varchar(100) NOT NULL,
  `crmvVet` char(9) NOT NULL,
  `telefoneVet` varchar(13) NOT NULL,
  `emailVet` varchar(255) NOT NULL,
  `senhaVet` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `veterinarios`
--

INSERT INTO `veterinarios` (`idVet`, `nomeVet`, `crmvVet`, `telefoneVet`, `emailVet`, `senhaVet`) VALUES
(27, 'Rúbeo Hagrid', '123456789', '+554199880885', 'hagrid@outlook.com', '$2y$10$jRt3aZsc.7dGp8pTTU1tl.atUmEmbjheInx6MlxfLxYr0Kj0ZKCJy'),
(28, 'Minerva McGonagall', '111222333', '+554193322332', 'minerva@outlook.com', '$2y$10$zF1ruJRqh0byq1ZKfAFVGuWaM6wrwnNee1bwpqHy4wzpG89EYO4i6'),
(29, 'Fleur Delacour', '156333666', '+554199777885', 'fleur@outlook.com', '$2y$10$5ruWtIrYqED8o1rpDkOO..Dm9DD7WV9Pl3FMc0GhONahsEEvwfnXC'),
(30, 'Charlie Weasley', '999888777', '+554191111222', 'charlie@outlook.com', '$2y$10$yA0AvsBYxWfcOZuXkXtbMuWVRqlp/0oHjsaMPynXraio8fXkhd4Da'),
(31, 'Fenrir Greyback', '777888999', '+554193232656', 'fenrir@outlook.com', '$2y$10$GnX5x0uycwlyo6sMJv5HlOAX5P4Rt01Dnd7mS4JRWBe3TInwlQxNu');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tutores`
--
ALTER TABLE `tutores`
  ADD PRIMARY KEY (`idTutor`);

--
-- Índices de tabela `veterinarios`
--
ALTER TABLE `veterinarios`
  ADD PRIMARY KEY (`idVet`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tutores`
--
ALTER TABLE `tutores`
  MODIFY `idTutor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT de tabela `veterinarios`
--
ALTER TABLE `veterinarios`
  MODIFY `idVet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
