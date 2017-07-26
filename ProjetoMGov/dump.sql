-- Banco de dados
CREATE DATABASE `projeto`;
USE `projeto`;

-- Estrutura de tabela para a tabela `usuarios`
CREATE TABLE `cliente` (
  `id` int NOT NULL PRIMARY KEY,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `celular` varchar(11) NOT NULL
);

-- Dados para a tabela `cliente`
INSERT INTO `cliente`(`id`, `nome`, `email`, `cpf`, `celular`) VALUES
(1, 'lais ramos','lais@gmail.com', 11111111111, 13999887766),
(2, 'joao silva', 'joao@gmail.com', 22222222222, 13977889966),
(3, 'leonardo santos','leo@gmail.com', 33333333333, 13999776655);
