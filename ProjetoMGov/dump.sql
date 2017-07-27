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
(1, "Fernanda Teste","fernanda@hotmail.com", "11111111111", "13999887766"),
(2, "Joao Teste", "joao@email.com", "22222222222", "13977889966"),
(3, "Leonardo Teste","leonardo@gmail.com", "39334982870", "13999776655"),
(4, "Luis Teste","luis@yahoo.com", "44444444444", "13966778899"),
(5, "Mariana Teste", "mariana@bol.com", "55555555555", "13989896767");