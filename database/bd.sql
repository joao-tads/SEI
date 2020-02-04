DROP DATABASE IF EXISTS `Projeto`;
CREATE DATABASE `Projeto`DEFAULT CHARACTER SET 'UTF8';

USE `Projeto`;

CREATE TABLE `Aluno` (
	`id` INT NOT NULL,
    `nome` VARCHAR(100) NOT NULL,
    `dataNascimento` DATE NOT NULL,
    `nomeMae` VARCHAR(100) NOT NULL,
    `nomePai` VARCHAR(100) NOT NULL,
    `rg` VARCHAR(11) NOT NULL,
    `cpf` VARCHAR(14) NOT NULL,
    `naturalidade` VARCHAR(20),
    `endereco` TEXT NOT NULL,
    `telefone` VARCHAR(25) NOT NULL,
    `sexo` VARCHAR(10) NOT NULL,
    `senha` VARCHAR(100) NOT NULL,
    `condition` VARCHAR(10),
    `nlogin` INT NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `Responsavel` (
	`id` INT NOT NULL,
    `idAluno` INT NOT NULL,
    `cpf` VARCHAR(15) NOT NULL,
    `rg` VARCHAR(11) NOT NULL,
    `telefone` VARCHAR(25) NOT NULL,
    `email` VARCHAR(50),
    `nome` VARCHAR(50) NOT NULL,
    `senha` VARCHAR(100) NOT NULL,
    `nlogin` INT NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `Funcionario` (
	`id` INT NOT NULL,
    `nome` VARCHAR(100) NOT NULL,
    `cpf` VARCHAR(14) NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    `telefone` VARCHAR(15) NOT NULL,
    `dataNascimento` DATE NOT NULL,
    `cargo` VARCHAR(15) NOT NULL,
    `senha` VARCHAR(100),
    `nlogin` INT NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `Disciplina` (
	`id` INT NOT NULL,
    `nome` VARCHAR(20) NOT NULL,
    `idProfessor` INT
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `DisciplinaAluno` (
	`id` INT NOT NULL,
    `idDisciplina` INT NOT NULL,
    `idAluno` INT NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `Turma` (
    `id` INT NOT NULL,
    `nome` VARCHAR(2) NOT NULL,
    `turno` VARCHAR(20) NOT NULL,
    `anoSerie` VARCHAR(30) NOT NULL,
    `min` INT NOT NULL,
    `max` INT NOT NULL,
    `idAluno` INT
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `Solicitacao` (
	`id` INT NOT NULL,
    `tipo` VARCHAR(30) NOT NULL,
    `descricao` TEXT(300) NOT NULL,
    `idDisciplina` INT NOT NULL,
    `resposta` TEXT(300),
    `idSecretario` INT,
    `idAluno` INT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `DisciplinaTurma` (
	`id` INT NOT NULL,
    `idDisciplina` INT NOT NULL,
    `idAluno` INT NOT NULL,
    `idTurma` INT NOT NULL,
    `ano` VARCHAR(20) NOT NULL,
    `pb` FLOAT,
    `sb` FLOAT,
    `tb` FLOAT,
    `qb` FLOAT
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `AlunoInativo` (
	`id` INT NOT NULL,
    `nome` VARCHAR(100) NOT NULL,
    `dataNascimento` DATE NOT NULL,
    `nomeMae` VARCHAR(100) NOT NULL,
    `nomePai` VARCHAR(100) NOT NULL,
    `rg` VARCHAR(11) NOT NULL,
    `cpf` VARCHAR(14) NOT NULL,
    `naturalidade` VARCHAR(20),
    `endereco` TEXT NOT NULL,
    `telefone` VARCHAR(25) NOT NULL,
    `sexo` varchar(10) NOT NULL,
    `senha` VARCHAR(100) NOT NULL,
    `nlogin` INT NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `FuncionarioInativo` (
	`id` INT NOT NULL,
    `nome` VARCHAR(100) NOT NULL,
    `cpf` VARCHAR(14) NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    `telefone` VARCHAR(15) NOT NULL,
    `dataNascimento` DATE NOT NULL,
    `cargo` VARCHAR(15) NOT NULL,
    `senha` VARCHAR(100),
    `nlogin` INT NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `Frequencia` (
	`id` INT NOT NULL,
    `idProfessor` INT NOT NULL,
    `idTurma` INT NOT NULL,
    `idAluno` INT NOT NULL,
    `data` DATE NOT NULL,
    `status` VARCHAR(20) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `Aluno`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `Responsavel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Aluno_01` (`idAluno`);
  
ALTER TABLE `Funcionario`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `Disciplina`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Professor_01` (`idProfessor`);

ALTER TABLE `DisciplinaAluno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_aluno_02` (`idAluno`),
  ADD KEY `fk_disciplina_01` (`idDisciplina`);
  
ALTER TABLE `Turma`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Aluno_03` (`idAluno`);

ALTER TABLE `Solicitacao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Aluno_04` (`idAluno`),
  ADD KEY `fk_Secretario_01` (`idSecretario`);

ALTER TABLE `DisciplinaTurma`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Aluno_05` (`idAluno`),
  ADD KEY `fk_Disciplina_02` (`idDisciplina`),
  ADD KEY `fk_Turma_01` (`idTurma`);
  
ALTER TABLE `AlunoInativo`
  ADD PRIMARY KEY (`id`);
  
ALTER TABLE `FuncionarioInativo`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `Frequencia`
  ADD PRIMARY KEY (`id`);
  
ALTER TABLE `Aluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `Responsavel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `Funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `Disciplina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
  
ALTER TABLE `DisciplinaAluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
  
ALTER TABLE `Turma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `Solicitacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `DisciplinaTurma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
  
ALTER TABLE `AlunoInativo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `FuncionarioInativo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `Frequencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
  
ALTER TABLE `Responsavel`
  ADD CONSTRAINT `Aluno_ibfk_1` FOREIGN KEY (`idAluno`) REFERENCES `Aluno` (`id`);

ALTER TABLE `Disciplina`
  ADD CONSTRAINT `Professor_ibfk_1` FOREIGN KEY (`idProfessor`) REFERENCES `Funcionario` (`id`);

ALTER TABLE `DisciplinaAluno`
  ADD CONSTRAINT `Aluno_ibfk_3` FOREIGN KEY (`idAluno`) REFERENCES `Aluno` (`id`), 
  ADD CONSTRAINT `Disciplina_ibfk_1`FOREIGN KEY (`idDisciplina`) REFERENCES `Disciplina` (`id`);

ALTER TABLE `Turma`
  ADD CONSTRAINT `Aluno_ibfk_4`FOREIGN KEY (`idAluno`) REFERENCES `Aluno` (`id`);

ALTER TABLE `Solicitacao`
  ADD CONSTRAINT `Aluno_ibfk_5` FOREIGN KEY (`idAluno`) REFERENCES `Aluno` (`id`), 
  ADD CONSTRAINT `Secretario_ibfk_1` FOREIGN KEY (`idSecretario`) REFERENCES `Funcionario` (`id`);

ALTER TABLE `DisciplinaTurma`
  ADD CONSTRAINT `Aluno_ibfk_6` FOREIGN KEY (`idAluno`) REFERENCES `Aluno` (`id`), 
  ADD CONSTRAINT `Disciplian_ibfk_2` FOREIGN KEY (`idDisciplina`) REFERENCES `Disciplina` (`id`),
  ADD CONSTRAINT `Turma_ibfk_1` FOREIGN KEY (`idTurma`) REFERENCES `Turma` (`id`);

ALTER TABLE `Frequencia`
  ADD CONSTRAINT `Aluno_ibfk_7` FOREIGN KEY (`idAluno`) REFERENCES `Aluno` (`id`), 
  ADD CONSTRAINT `Professor_ibfk_2` FOREIGN KEY (`idProfessor`) REFERENCES `Funcionario` (`id`),
  ADD CONSTRAINT `Turma_ibfk_2` FOREIGN KEY (`idTurma`) REFERENCES `Turma` (`id`);
  
INSERT INTO `Aluno` (`nome`, `dataNascimento`, `nomeMae`, `nomePai`, `rg`, `cpf`, `naturalidade`, `endereco`, `telefone`, `sexo`, `senha`, `nlogin`) VALUES
	('João Guedes de Moura Junior', '2002-05-15', 'Maria da Penha', 'João Guedes', '111.222.333', '111.111.111-11', 'Nova Cruz', 'Rua Antônio Viana Barbosa 104', '(84) 99478-6496', 'Masculino', '$argon2i$v=19$m=65536,t=4,p=1$dy5YUGQwYnV0SmdMSDdYcg$wsBBeyEnae8C1qY6mCKe0vZAuHiIszETOJNTGVyZ/Yw', 0),
	('Larissa Agatha Rezende', '2000-05-12', 'Nicole Carolina', 'Pedro Carlos Eduardo Gael Rezende', '222.222.222', '222.222.222-22', 'Nova Cruz', 'Rua Principal, s/n', '(84) 98381-3627', 'Feminino', '$argon2i$v=19$m=65536,t=4,p=1$bzNZYWNpTGY1VG5QZTJTeQ$UZEAceTPM5w5gxFSgTq/BsiVlH6Sk5hL4cUDA1eeicc', 0),
	('Rita Lavínia Aline da Conceição', '2000-04-08', 'Rosa Elisar', 'Calebe Fernando Hugo da Conceição', '333.333.333', '333.333.333-33', 'Nova Cruz', 'Rua Antônio Viana Barbosa 104', '(84) 99478-6496', 'Feminino', '$argon2i$v=19$m=65536,t=4,p=1$cGVwZ2NndHdmdThaeWliRg$seEs5+CyJ/ySPGOO3wF75KCqstklLdRhsvyhKVtYaNg', 0),
	('Ruan Samuel Santos', '2000-05-03', 'Bárbara Sarah Maria', 'Manuel Henrique Santos', '444.444.444', '444.444.444-44', 'Nova Cruz', 'Rua Antônio Viana Barbosa 104', '(84) 99478-6496', 'Masculino', '$argon2i$v=19$m=65536,t=4,p=1$M001ZFkzcEhOaVE5cnBKMQ$vzgWqHFEGg0/HO1HsmNaWAyQltE4l0kz8GXAkLFZgzU', 0),
	('Anderson Alexandre Nelson Gonçalves', '2002-02-13', 'Emily Luciana Tânia', 'Edson Miguel Benício Gonçalves', '555.555.555', '555.555.555-55', 'Nova Cruz', 'Rua Antônio Viana Barbosa 104', '(84) 99478-6496', 'Masculino', '$argon2i$v=19$m=65536,t=4,p=1$bnEvTlRJYXJ5Y3pvQjV6VQ$/0T24RIFnP2QXHWF7bRWQ1C+jd6uSX1IfXD2S9+RjJ0', 0),
	('Eduardo Thiago Ruan Moraes', '2002-07-17', 'Ayla Julia', 'Nicolas Samuel Moraes', '115.589.251', '666.666.666-66', 'Nova Cruz', 'Rua Antônio Viana Barbosa 104', '(84) 99478-6496', 'Masculino', '$argon2i$v=19$m=65536,t=4,p=1$N2hZY2tya25PRmZSdVBQWA$ygTDTLSjQJGRF3WZ2q2dIF+rolwsyKUENmliYGyfckc', 0),
	('Gabrielly Isabel Carolina Pires', '2000-10-12', 'Isabelle Marina', 'Yuri Rodrigo Ruan Pires', '777.777.777', '777.777.777-77', 'Nova Cruz', 'Rua Antônio Viana Barbosa 104', '(84) 99478-6496', 'Feminino', '$argon2i$v=19$m=65536,t=4,p=1$N3YuQmM3QzZQcnNRRkw1bQ$05FUXughwrorO4tAkRfFoEY4wSy9LJlUNFzYVp5mlhc', 0),
	('Aurora Vanessa Natália Carvalho', '2000-05-12', 'Lúcia Evelyn', 'Diogo Vitor Ryan Carvalho', '115.589.251', '888.888.888-88', 'Nova Cruz', 'Rua Antônio Viana Barbosa 104', '(84) 99478-6496', 'Feminino', '$argon2i$v=19$m=65536,t=4,p=1$d2ZmZFhxbVk3ampCeWtRYw$Bkwwh5kPgdKbIJLdg5ixMfmKEtcU0IjkjncHrGnVsXA', 0),
	('Bruno Eduardo Baptista', '2000-09-23', 'Renata Carolina', 'Fernando Diogo Renato Baptista', '999.999.999', '999.999.999-99', 'Nova Cruz', 'Rua Antônio Viana Barbosa 104', '(84) 99478-6496', 'Masculino', '$argon2i$v=19$m=65536,t=4,p=1$Uk0uSEFrTjFnY0NRbjlKYw$jQ1JagGi7acw6vE44PCU5mzqBtQ8PWbYbdnAC5yLVj4', 0),
	('Anthony Fábio Kauê Baptista', '2001-03-24', 'Amanda Hadassa', 'Benedito Enzo Caleb Baptista', '101.101.101', '101.101.101-10', 'Nova Cruz', 'Rua Antônio Viana Barbosa 104', '(84) 99478-6496', 'Masculino', '$argon2i$v=19$m=65536,t=4,p=1$V0E2aHVSQlU4Q2VTMWVxWQ$L8RY2z/eHvNwGfj+Zod0Lztd+pS6WN+4nqZ/GmmDWsA', 0),
	('Juan Eduardo Mateus Vieira', '2001-01-19', 'Tânia Carolina', 'Anthony Diego Luan Vieira', '110.110.110', '110.110.110-11', 'Nova Cruz', 'Rua Antônio Viana Barbosa 104', '(84) 99478-6496', 'Masculino', '$argon2i$v=19$m=65536,t=4,p=1$cXJoUzRnWkNva3NEcWREag$Wf6rGTPIqrXH7wowBloi4OsD3JPybxlcuqaJDyLvFrE', 0),
	('Igor Otávio Peixoto', '1999-03-14', 'Daiane Sônia Bárbara', 'Juan Victor Fernando Peixoto', '120.120.120', '120.120.120-12', 'Nova Cruz', 'Rua Antônio Viana Barbosa 104', '(84) 99478-6496', 'Masculino', '$argon2i$v=19$m=65536,t=4,p=1$djZQcVNRYmJNcHI1WVZKVQ$Zpph+/NA812cufHn9Ik9stNrCMjEDo3qZfdTWxN/oBI', 0),
	('Isis Heloisa Rodrigues', '1999-03-20', 'Fernanda Francisca Luiza', 'Osvaldo Davi Rodrigues', '130.130.130', '130.130.130-13', 'Nova Cruz', 'Rua Antônio Viana Barbosa 104', '(84) 99478-6496', 'Feminino', '$argon2i$v=19$m=65536,t=4,p=1$d1U4Tks5S3kyeVZtdjE0Zg$A84fDmPnMnxTN/4CS1i8Uxt1feFV4kdEc/cFhaFYiV0', 0),
	('Theo Caio Anthony dos Santos', '2001-09-17', 'Gabrielly Letícia Carolina', 'Paulo Theo Luís dos Santos', '140.140.140', '140.140.140-14', 'Nova Cruz', 'Rua Antônio Viana Barbosa 104', '(84) 99478-6496', 'Masculino', '$argon2i$v=19$m=65536,t=4,p=1$eFFtVHhqRU5jQk1Zd2lrRg$SunnjfyWlHIA4Zi1U9RGMMFsFHubq2FUsnHwtFwOqtE', 0),
	('Ryan Benedito Barbosa', '2000-03-22', 'Giovanna Márcia Antonella', 'Bernardo Lucca Barbosa', '150.150.150', '150.150.150-15', 'Nova Cruz', 'Rua Antônio Viana Barbosa 104', '(84) 99478-6496', 'Masculino', '$argon2i$v=19$m=65536,t=4,p=1$QkZSV3RpbEhyVlF0d0hSZg$rLn51avqlC46B5k3QmRR3iRhg+hCZ/7EqysLDZlrWYI', 0),
	('Antonio Nathan de Paula', '1998-10-12', 'Cecília Jennifer Bianca', 'Cauã Manuel Kaique de Paula', '160.160.160', '160.160.160-16', 'Nova Cruz', 'Rua Antônio Viana Barbosa 104', '(84) 99478-6496', 'Masculino', '$argon2i$v=19$m=65536,t=4,p=1$SWFydC42YXloNkV6Lk1pRQ$FnFOto/1L6/Mqh/JCJwn7Xy9ZTkKeic23bbFDKtUwdU', 0),
	('Manoel Nathan Rodrigues', '1999-05-14', 'Pietra Cecília', 'Kevin Carlos Eduardo Rodrigues', '170.170.170', '170.170.170-17', 'Nova Cruz', 'Rua Antônio Viana Barbosa 104', '(84) 98672-7705', 'Masculino', '$argon2i$v=19$m=65536,t=4,p=1$TVpHWkZnU1lvWC5EWTdCQw$QD+2q5xeOwSy3pwp9Hrmuz6e97PewW9G3P3D7OrQKhE', 0),
	('Eduardo Vitor Gael Carvalho', '2000-04-01', 'Tatiane Isabella', 'Oliver Sérgio Manuel Carvalho', '180.180.180', '180.180.180-18', 'Nova Cruz', 'Rua Antônio Viana Barbosa 104', '(84) 99626-7333', 'Masculino', '$argon2i$v=19$m=65536,t=4,p=1$QlJkT0ZCa2JIVHlhNFlZSQ$4pFpXC+fIRr6lwESnVJOZhzNLtJ7lJNMlugfORiOyvk', 0),
	('Tânia Stefany Moreira', '1999-03-12', 'Carla Nair', 'Rodrigo Ruan Moreira', '190.190.190', '190.190.190-19', 'Nova Cruz', 'Rua Antônio Viana Barbosa 104', '(84) 99478-6496', 'Feminino', '$argon2i$v=19$m=65536,t=4,p=1$S0FKVnZiZlBMT2trUWRzdg$jEMHhZEo2NPlCSA0pPCOkCy+z+0IA0wc2DCWRnpmhDA', 0),
	('Carla Vanessa Luzia Moraes', '1999-06-02', 'Carolina Maria Rita', 'Marcos Vinicius Mário Sérgio Moraes', '200.200.200', '200.200.200-20', 'Nova Cruz', 'Rua Antônio Viana Barbosa 104', '(84) 99478-6496', 'Feminino', '$argon2i$v=19$m=65536,t=4,p=1$YTBEYUJpUEhYd25pVGxrYg$ODCjPkAHwaUVx1LsAGEMK+lb2UrkPHThe29dEHsQWKs', 0);
	
INSERT INTO `Responsavel` (`idAluno`, `cpf`, `rg`, `telefone`, `email`, `nome`, `senha`, `nlogin`) VALUES 
	(1, '111.111.111-00', '111.111.000', '(84) 99999-9999', 'joaoguedes@outlook.com', 'João Guedes', '$argon2i$v=19$m=65536,t=4,p=1$dy5YUGQwYnV0SmdMSDdYcg$wsBBeyEnae8C1qY6mCKe0vZAuHiIszETOJNTGVyZ/Yw', 0),
	(2, '222.222.222-00', '222.222.000', '(84) 99999-9999', 'pedrocarlos@gmail.com', 'Pedro Carlos Eduardo Gael Rezende', '$argon2i$v=19$m=65536,t=4,p=1$Wkd2bzU3VktSNUFYVnVETA$/rmyj9mlCcPclxZkchxDc5qoqf1087/JRsbkHAakbjg', 0),
	(3, '333.333.333-00', '333.333.000', '(84) 98099-9009', 'calebefernando@live.com', 'Calebe Fernando Hugo da Conceição', '$argon2i$v=19$m=65536,t=4,p=1$LlVlaU9wQ05QVXgvVENabw$wM8VV4iMlfUtrdWiNQ/uHOMF7OuivyaT0LG6KVDczxQ', 0),
	(4, '444.444.444-00', '444.444.000', '(84) 99909-7390', 'manuelhenrique@hotmail.com', 'Manuel Henrique Santos', '$argon2i$v=19$m=65536,t=4,p=1$aFBUUDlTUDRvWjJMTExpWg$QbF95PbdcoSbtqWTu0n2e3neTTnRZO2HxVwpE8zPMm8', 0),
	(5, '555.555.555-00', '555.555.000', '(84) 98706-2047', 'edsonmiguel@gmail.com', 'Edson Miguel Benício Gonçalves', '$argon2i$v=19$m=65536,t=4,p=1$ajNXeFNHczNxeVoya05FeQ$+Cvb5trMxiii8g9stEzk8urgAF0pLCM1EZ+QQSm0cxI', 0),
	(6, '666.666.666-00', '666.666.000', '(84) 99555-5739', 'nicolassamuel@outlook.com', 'Nicolas Samuel Moraes', '$argon2i$v=19$m=65536,t=4,p=1$Wmt3NlBTTEZxcVIxZzBBTg$aaf5mZcaQvmqjsFLJfWFCdqA4kS1AM0imNW/52gRa24', 0),
	(7, '777.777.777-00', '777.777.000', '(84) 99095-6400', 'yurirodrigo@hotmail.com', 'Yuri Rodrigo Ruan Pires', '$argon2i$v=19$m=65536,t=4,p=1$ZTBlT3dpUThhd2xmY2pGWg$JahXptgrTgR869PHAXnXXehD2Uq6MC+ljc40zOID/vo', 0),
	(8, '888.888.888-00', '888.888.000', '(84) 99673-3255', 'diogovitor@live.com', 'Diogo Vitor Ryan Carvalho', '$argon2i$v=19$m=65536,t=4,p=1$ODB0UDlRWnJ2U0piMmFESA$wOPK68vm1E5tbsa2KBREpOfO6/hPq/R/IR4cv18pkwo', 0),
	(9, '999.999.999-00', '999.999.000', '(84) 98096-5793', 'fernandodiogo@gmail.com', 'Fernando Diogo Renato Baptista', '$argon2i$v=19$m=65536,t=4,p=1$MWw3REpyNEIubmNoaGFkSA$mDKzJpjMv4GO7dYA68J3bAhjgW1pISuyMwPVkuISAag', 0),
	(10, '101.101.101-00', '101.101.000', '(84) 98765-6422', 'beneditoenzo@outlook.com', 'Benedito Enzo Caleb Baptista', '$argon2i$v=19$m=65536,t=4,p=1$QVVUYVFscy9tWVFpdXNHVg$04FPxTTVvA12XgQEKtIRJWa22kbGM2JVwUQMiWqnUQw', 0),
	(11, '110.110.110-00', '110.110.000', '(84) 98765-0743', 'anthonydiego@gmail.com', 'Anthony Diego Luan Vieira', '$argon2i$v=19$m=65536,t=4,p=1$NHpBTHJFWXZDVFRBSXluYw$fIcT2APoGtlmkgs2IP6hjSSAh9UNbkQ2pudRSnaHbH4', 0),
	(12, '120.120.120-00', '120.120.000', '(84) 99465-5467', 'juanvictor@live.com', 'Juan Victor Fernando Peixoto', '$argon2i$v=19$m=65536,t=4,p=1$QlFsL0dKVXdKYWVqeHNOdA$awY9rS08bcJHRuLIsdkBGT5NOcCh2vSCjBPnl87z5aI', 0),
	(13, '130.130.130-00', '130.130.000', '(84) 99306-9573', 'osvaldodavi@hotmail.com', 'Osvaldo Davi Rodrigues', '$argon2i$v=19$m=65536,t=4,p=1$ZmNJRXF4eGRMM3N2RnY4eA$mwyT/MlLQxHO0HUUUeSPRTD19sOJ2Z2cCJ7Bmn2OgO0', 0),
	(14, '140.140.140-00', '140.140.000', '(84) 99785-7859', 'paulotheo@live.com', 'Paulo Theo Luís dos Santos', '$argon2i$v=19$m=65536,t=4,p=1$dmd1bjFqQmMvRlp0T0hGMA$rHsG856gCqM6afoFU9kCOVM+zuHTDpe2Z0TTJuHzUBE', 0),
	(15, '150.150.150-00', '150.150.000', '(84) 99673-0909', 'bernardolucca@gmail.com', 'Bernardo Lucca Barbosa', '$argon2i$v=19$m=65536,t=4,p=1$NXU4QU9wUWNYQ2dIc0kvTg$L3fChIwXp0f7R/DNeROCHEWExHDre5MDnkL34COhgUo', 0),
	(16, '160.160.160-00', '160.160.000', '(84) 98904-5626', 'cauamanuel@outlook.com', 'Cauã Manuel Kaique de Paula', '$argon2i$v=19$m=65536,t=4,p=1$U3IxVkswdTdCVzJqZVVwaQ$WpWtt+3hFCvwV3c2+Qyud7y8YT5FYafg3e8bePwc2z0', 0),
	(17, '170.170.170-00', '170.170.000', '(84) 98594-6078', 'kevincarlos@gmail.com', 'Kevin Carlos Eduardo Rodrigues', '$argon2i$v=19$m=65536,t=4,p=1$MWN6VmVUUHhRU0VPVmhUeA$Guaq05C2KzAyzeoAVJNnmsGIOrq3MHYwCvmoRYuDAPg', 0),
	(18, '180.180.180-00', '180.180.000', '(84) 99345-0962', 'oliversergio@yahoo.com.br', 'Oliver Sérgio Manuel Carvalho', '$argon2i$v=19$m=65536,t=4,p=1$VEZZNzBRSHBBSDJOU0RpaA$HPh9tFqA//J0hOS7TFIY1F/7Qzvt1I2Blc5MJcwl7/M', 0),
	(19, '190.190.190-00', '190.190.000', '(84) 99349-9679', 'rodrigoruan@bol.com', 'Rodrigo Ruan Moreira', '$argon2i$v=19$m=65536,t=4,p=1$Y2R3aE5YWC96U3R1ODFtaQ$+7WTdh3djkNVOSWRMQiNNC1GKmQAzh/1Gr6vnhCiPFU', 0),
	(20, '200.200.200-00', '200.200.000', '(84) 99563-7854', 'marcosvinicius@gmail.com', 'Marcos Vinicius Mário Sérgio Moraes', '$argon2i$v=19$m=65536,t=4,p=1$VElZTHFjNGFmL09VSG9vMA$ck1Weu2FoiRk6zK+9uNRVW0hIc2cw/2B3u9f12OrjBA', 0);

INSERT INTO `Funcionario` (`nome`, `cpf`, `email`, `telefone`, `dataNascimento`, `cargo`, `senha`, `nlogin`) VALUES 
	('João Guedes de Moura Junior', '123.111.111-00', 'joaodocente@gmail.com', '(84) 99494-9494', '1995-05-12', 'Professor(a)', '$argon2i$v=19$m=65536,t=4,p=1$dy5YUGQwYnV0SmdMSDdYcg$wsBBeyEnae8C1qY6mCKe0vZAuHiIszETOJNTGVyZ/Yw', 0),
	('Matias Justino', '123.222.222-00', 'matiasdocente@gmail.com', '(84) 99494-563', '1998-04-22', 'Professor(a)', '$argon2i$v=19$m=65536,t=4,p=1$a05DZmxpWUZIdWNQbm1VVg$TvxXP9LbE7UHByK2PPEdbsm9tYo+DOK3pNftR9/cdCA', 0),
	('Maria da Penha Justino de Moura', '123.333.333-00', 'mariadocente@gmail.com', '(84) 99494-3578', '1991-10-02', 'Professor(a)', '$argon2i$v=19$m=65536,t=4,p=1$UWgzYUtQeFlwaG1qcS4yVA$xep01t3FsecUaSDIUyjElF3jVG9XqKmKYY90kdZHMGM', 0),
	('Bruna Guedes de Moura', '123.444.444-00', 'brunadocente@gmail.com', '(84) 99494-7676', '1997-05-10', 'Professor(a)', '$argon2i$v=19$m=65536,t=4,p=1$V2JZZHkzMVMxMFBIVEd5dg$l0tNs/riGlOt2Ixu1LIkJ2q/2uWqGLKLUsOtMg6z1dw', 0),
	('Eliane Padilha dos Santos Moura', '123.555.555-00', 'elianedocente@gmail.com', '(84) 99494-5376', '1998-12-02', 'Professor(a)', '$argon2i$v=19$m=65536,t=4,p=1$V1dicTh5Ri9BbHZCLkdQVg$xFijUI+qP2zKbRvki0rFyRnhAdirxicfBfKbZRT360M', 0),
	('Edieluza Ernesto da Silva', '123.666.666-00', 'edileuzadocente@gmail.com', '(84) 99494-9866', '1995-04-12', 'Professor(a)', '$argon2i$v=19$m=65536,t=4,p=1$UERNbGFzZC40ZTZGZkFxQw$HsKl1aCGuyiHdCOwgAqU/Al/dt0Vldz8XZZDLeCdIZk', 0),
	('Carlos Andre de Freitas', '123.777.777-00', 'carlosdocente@gmail.com', '(84) 99494-9494', '1997-05-12', 'Professor(a)', '$argon2i$v=19$m=65536,t=4,p=1$SVNLWmUvcFpnYklqbkdOVA$dIpXzzIFGZ6ox3RV2c/3tXrDID9d0HWSzdnjEoF4TCg', 0),
	('Marcio Oliveira da Silva', '123.888.888-00', 'marciosecretario@gmail.com', '(84) 99094-9494', '1997-02-08', 'Secretario(a)', '$argon2i$v=19$m=65536,t=4,p=1$dy5YUGQwYnV0SmdMSDdYcg$wsBBeyEnae8C1qY6mCKe0vZAuHiIszETOJNTGVyZ/Yw', 1),
	('Geraldo de Souza', '123.999.999-00', 'geraldodocente@gmail.com', '(84) 99494-0000', '1995-08-19', 'Professor(a)', '$argon2i$v=19$m=65536,t=4,p=1$NEViWnlPZVp3UUpnWVVSaw$y/eaNmxQI4sYMR6ASzyZmuRIQUIb7q60tcBcw3uIi1A', 0),
	('Fernando Conceição Marques', '123.101.101-00', 'fernandodocente@gmail.com', '(84) 99494-9000', '1995-07-29', 'Professor(a)', '$argon2i$v=19$m=65536,t=4,p=1$N05RejRDY1NWdUR4cmJndw$uinIVr1mPNsJPnN3+i2xNW97SF8ulZQ/1w6P8fNZBgw', 0),
	('Elizabeth Cavalcante de Souza', '123.110.110-00', 'elizabethdocente@gmail.com', '(84) 99494-9004', '1994-09-07', 'Professor(a)', '$argon2i$v=19$m=65536,t=4,p=1$emV1Y0hody5jUXlJSzJmdA$RVFR9ZUnA73NoYyYR/pupEzfUoaS/Mc/F4jmdbHViUc', 0),
	('Maria Educarda da Conceição', '123.120.120-00', 'mariasecretaria@gmail.com', '(84) 99494-4940', '1992-04-14', 'Secretario(a)', '$argon2i$v=19$m=65536,t=4,p=1$LzdmQjZUR080MEI3Wjd6Rg$3zmOdbSCCnGa0Dbr6jd2tUy4eKJfcQGi8ejZl3JNlUE', 0),
	('Ednaldo Fernandes de Souza', '123.130.130-00', 'ednaldodocente@gmail.com', '(84) 99494-9794', '1990-09-21', 'Professor(a)', '$argon2i$v=19$m=65536,t=4,p=1$c0xvQUdMNkQ0d2toay4vMw$Kwd5K/2p925tZsGQXb+8iSLvJi4xxrzYhRBOkOl6I/8', 0),
	('Manoel Cerafim da Costa', '123.140.140-00', 'manoeldocente@gmail.com', '(84) 99494-8894', '1995-05-27', 'Professor(a)', '$argon2i$v=19$m=65536,t=4,p=1$Z3Raemo2bDdZbllIQ25FTQ$wuCzkdDhItwS2UIcN7W0khfjcc7APvxKgQwUrxvai44', 0),
	('José Alcantara Furtado', '123.150.150-00', 'josedocente@gmail.com', '(84) 99494-9784', '1990-04-17', 'Professor(a)', '$argon2i$v=19$m=65536,t=4,p=1$ZzQ3VWN4YTJKZDE4WHEvaA$4mYuyVeITEx39qcqECo6NUOIK9PkQ9mo9zIsyyJwT3s', 0),
	('André Gomes', '123.160.160-00', 'andredocente@gmail.com', '(84) 99494-9657', '1999-10-18', 'Professor(a)', '$argon2i$v=19$m=65536,t=4,p=1$NEp2N2FkWEIzQ3BSRXZ1bw$K8az8gmB/QWWyv8LcezLVk59uxnBiHGueKKFhC78BFc', 0),
	('João Carlos Guedes', '123.170.170-00', 'joaosecretario@gmail.com', '(84) 99784-0883', '1993-05-20', 'Secretario(a)', '$argon2i$v=19$m=65536,t=4,p=1$c1NjeU5pc3o5aGxoZzBYZw$9werFIVZrV+X+1J/Jik/EAoWZzqhJNBaUAccwdsTlew', 0),
	('Vivian Trajano da Silva', '123.180.180-00', 'viviandocente@gmail.com', '(84) 98494-9890', '1994-01-02', 'Professor(a)', '$argon2i$v=19$m=65536,t=4,p=1$MldKaDJoSC9hM3JORnNWNg$l/6nxCXHeaSFzukaQugt5GgBzvRNFeKi3PeX8LnUnT4', 0),
	('Maria Clara da Silva', '123.190.190-00', 'claradocente@gmail.com', '(84) 99432-8494', '1997-05-12', 'Professor(a)', '$argon2i$v=19$m=65536,t=4,p=1$WFE0b1RWeXNzbFF6RGdpaw$A60WukGZu9WJI1S4zLSjlCwCcfEIs7++Hvffk0iL++Q', 0),
	('Otávio Mendonça Silva', '123.200.200-00', 'otaviodocente@gmail.com', '(84) 99976-9854', '1996-06-25', 'Professor(a)', '$argon2i$v=19$m=65536,t=4,p=1$WE1iUFNOTHlvN3JuRGpxTw$GEjxZyXUF3Z1oTYONcMJc5sLoZVK1551NWn7b9F8krY', 0);
	
INSERT INTO `Disciplina` (`nome`, `idProfessor`) VALUES
	('Português', 2),
	('Matemática', 1),
	('História', 3),
	('Geografia', 5),
	('Ciências', 4),
	('Educação Fìsica', 6),
	('Química', 9),
	('Biologia', 13),
	('Física', 14),
	('Fisolosofia', 16);
	
INSERT INTO `DisciplinaAluno` (`idDisciplina`, `idAluno`) VALUES
	(2, 2),
	(1, 2),
	(3, 2),
	(5, 2),
	(4, 2),
	(2, 3),
	(1, 3),
	(3, 3),
	(5, 3),
	(4, 3),
	(2, 4),
	(1, 4),
	(3, 4),
	(5, 4),
	(4, 4),
	(2, 5),
	(1, 5),
	(3, 5),
	(5, 5),
	(4, 5);
	
INSERT INTO `Turma` (`nome`, `turno`, `anoSerie`, `min`, `max`, `idAluno`) VALUES
	('A', 'Matutino', '6º ano', 20, 40, 1),
    ('A', 'Matutino', '6º ano', 20, 40, 2),
    ('A', 'Matutino', '6º ano', 20, 40, 3),
    ('A', 'Matutino', '6º ano', 20, 40, 4),
    ('A', 'Vespertino', '7º ano', 20, 40, 5),
    ('A', 'Vespertino', '7º ano', 20, 40, 6),
    ('A', 'Vespertino', '7º ano', 20, 40, 7),
    ('A', 'Vespertino', '7º ano', 20, 40, 8),
    ('B', 'Matutino', '7º ano', 20, 40, 9),
    ('B', 'Matutino', '7º ano', 20, 40, 10),
    ('B', 'Matutino', '7º ano', 20, 40, 11),
    ('B', 'Matutino','7º ano', 20, 40, 12),
    ('B', 'Vespertino', '6º ano', 20, 40, 13),
    ('B', 'Vespertino', '6º ano', 20, 40, 14),
    ('B', 'Vespertino', '6º ano', 20, 40, 15),
    ('B', 'Vespertino', '6º ano', 20, 40, 16),
    ('C', 'Matutino', '8º ano', 20, 40, 17),
    ('C', 'Matutino', '8º ano', 20, 40, 18),
    ('C', 'Matutino', '8º ano', 20, 40, 19),
    ('C', 'Matutino', '8º ano', 20, 40, 20);

INSERT INTO `DisciplinaTurma` (`idDisciplina`, `idAluno`, `idTurma`, `ano`, `pb`, `sb`, `tb`, `qb`) VALUES 
	(1, 1, 1, 2019, 6.7, 7.0, 8.5, 9.0),
    (2, 1, 1, 2019, 6.0, 7.0, 8.5, 9.0),
    (3, 1, 1, 2019, 3.4, 7.0, 8.5, 9.0),
    (4, 1, 1, 2019, 8.6, 7.0, 8.5, 9.0),
    (5, 1, 1, 2019, 8.7, 7.0, 8.5, 9.0),
    (1, 2, 1, 2019, 6.8, 7.0, 8.5, 9.0),
    (2, 2, 1, 2019, 6.0, 7.0, 8.5, 9.0),
    (3, 2, 1, 2019, 5.0, 7.0, 8.5, 9.0),
    (4, 2, 1, 2019, 6.7, 7.0, 8.5, 9.0),
    (5, 2, 1, 2019, 6.7, 7.0, 8.5, 9.0),
    (1, 3, 1, 2019, 6.7, 7.0, 8.5, 9.0),
    (2, 3, 1, 2019, 6.7, 7.0, 8.5, 9.0),
    (3, 3, 1, 2019, 6.7, 7.0, 8.5, 9.0),
    (4, 3, 1, 2019, 6.7, 7.0, 8.5, 9.0),
    (5, 3, 1, 2019, 6.7, 7.0, 8.5, 9.0),
    (1, 4, 1, 2019, 6.7, 7.0, 8.5, 9.0),
    (2, 4, 1, 2019, 6.7, 7.0, 8.5, 9.0),
    (3, 4, 1, 2019, 6.7, 7.0, 8.5, 9.0),
    (4, 4, 1, 2019, 6.7, 7.0, 8.5, 9.0),
    (5, 4, 1, 2019, 6.7, 7.0, 8.5, 9.0),
    
    (1, 1, 1, 2020, 6.7, 7.0, 8.5, 9.0),
    (2, 1, 1, 2020, 6.0, 7.0, 8.5, 9.0),
    (3, 1, 1, 2020, 3.4, 7.0, 8.5, 9.0),
    (4, 1, 1, 2020, 8.6, 7.0, 8.5, 9.0),
    (5, 1, 1, 2020, 8.7, 7.0, 8.5, 9.0),
    (1, 2, 1, 2020, 6.8, 7.0, 8.5, 9.0),
    (2, 2, 1, 2020, 6.0, 7.0, 8.5, 9.0),
    (3, 2, 1, 2020, 5.0, 7.0, 8.5, 9.0),
    (4, 2, 1, 2020, 6.7, 7.0, 8.5, 9.0),
    (5, 2, 1, 2020, 6.7, 7.0, 8.5, 9.0),
    (1, 3, 1, 2020, 6.7, 7.0, 8.5, 9.0),
    (2, 3, 1, 2020, 6.7, 7.0, 8.5, 9.0),
    (3, 3, 1, 2020, 6.7, 7.0, 8.5, 9.0),
    (4, 3, 1, 2019, 6.7, 7.0, 8.5, 9.0),
    (5, 3, 1, 2019, 6.7, 7.0, 8.5, 9.0),
    (1, 4, 1, 2019, 6.7, 7.0, 8.5, 9.0),
    (2, 4, 1, 2017, 6.7, 7.0, 8.5, 9.0),
    (3, 4, 1, 2020, 6.7, 7.0, 8.5, 9.0),
    (4, 4, 1, 2020, 6.7, 7.0, 8.5, 9.0),
    (5, 4, 1, 2020, 6.7, 7.0, 8.5, 9.0);
    
SELECT * FROM `Aluno` ORDER BY `dataNascimento`;
SELECT COUNT(`nome`) FROM `Aluno`;
SELECT MAX(`dataNascimento`) FROM `Funcionario`;
SELECT `d`.`nome`, `f`.`nome` FROM `Disciplina` `d` INNER JOIN `Funcionario` `f` ON  (`d`.`idProfessor` = `f`.`id`);
SELECT `d`.`nome`, `a`.`nome`  FROM `Disciplina` `d` INNER JOIN `DisciplinaAluno` `da` 
	INNER JOIN `Aluno` `a` ON (`da`.`idAluno` = `a`.`id` AND `da`.`idDisciplina` = `d`.`id`);
SELECT `t`.`nome`, `t`.`anoSerie`, `a`.`nome` FROM `Turma` `t` INNER JOIN `Aluno` `a` ON (`t`.`idAluno` = `a`.`id`);
SELECT `d`.`nome`, `dt`.`pb`, `dt`.`sb`, `dt`.`tb`, `dt`.`qb` FROM `Disciplina` `d` INNER JOIN `DisciplinaTurma` `dt` 
	INNER JOIN `Aluno` `a` WHERE (`dt`.`idAluno` = `a`.`id` AND `a`.`id` = 1 AND `dt`.`idDisciplina` = 1);
SELECT * FROM `Responsavel` WHERE (`nome` = 'João Guedes' OR `idAluno` = 1 OR `cpf` = '111.111.111-00');

SELECT * FROM `Responsavel` WHERE (`nome` = 'João Guedes' OR `idAluno` = 1 OR `cpf` = '111.111.111-00'); 
SELECT * FROM `turma` WHERE (`idAluno` = 1 AND `max` = 40) OR (`idAluno` = 20 AND `turno` = 'Matutino');

select * from Turma where idAluno = 1;
select * from Funcionario;
select * from FuncionarioInativo;
select * from Frequencia;
select * from Aluno;
SELECT DISTINCT nome, anoSerie, turno FROM turma;
select distinct ano from DisciplinaTurma where idAluno = 4;
