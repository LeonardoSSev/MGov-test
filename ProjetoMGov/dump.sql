-- Banco de dados
CREATE DATABASE `projeto`;
USE `projeto`;

-- Estrutura de tabela para a tabela `usuarios`
CREATE TABLE `cliente` (
  `id` int NOT NULL PRIMARY KEY,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `celular` varchar(14) NOT NULL
);

-- Dados para a tabela `cliente`
INSERT INTO `cliente`(`id`, `nome`, `email`, `cpf`, `celular`) VALUES
(1, "Fernanda Teste","fernanda@gmail.com", "11111111111", "13999887766"),
(2, "Joao Teste", "joao@gmail.com", "22222222222", "13977889966"),
(3, "Leonardo Teste","leo@gmail.com", "33333333333", "13999776655");
