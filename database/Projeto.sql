drop database if exists Projeto;
create database Projeto;

use Projeto;

create table Aluno (
    id int primary key not null auto_increment,
    nome varchar(50) not null,
    dataNascimento date not null,
    nomeMae varchar(50),
    nomePai varchar(50),
    rg varchar(11) not null,
    cpf varchar(15) not null,
    naturalidade varchar(20),
    endereco text not null,
    telefone varchar(25) not null,
    sexo varchar(10) not null,
    senha varchar(100) not null,
    nlogin int

);

create table Responsavel (
	id int primary key not null auto_increment,
    idAluno int not null,
    cpf varchar(15) not null,
    rg varchar(11) not null,
    telefone varchar(25) not null,
    email varchar(50),
    nome varchar(50) not null,
    senha varchar(100) not null,
    nlogin int
);

create table Funcionario (
	id int primary key not null auto_increment,
    nome varchar(100) not null,
    idade int not null,
    cpf varchar(14) not null,
    email varchar(50) not null,
    telefone varchar(15) not null,
    dataNascimento varchar(10) not null,
    cargo varchar(15) not null,
    senha varchar(100),
    nlogin int
);

create table Boletim (
    id int primary key not null auto_increment,
    idAluno int not null,
    disciplinas varchar(10) not null,
    notas float,
    fequencia float
);

create table Proejto (
    id int primary key not null auto_increment,
    tema varchar(100) not null,
    conteudo text not null,
    dataPublicacao date not null,
    periodo date not null
);

create table Disciplina (
	id int primary key not null auto_increment,
    nome varchar(20) not null,
    idProfessor int,
    idAluno int,
    foreign key (idProfessor) references Funcionario (id),
    foreign key (idAluno) references Aluno (id)
);

create table DisciplinaAluno (
	id int primary key not null auto_increment,
    idDisciplina int not null,
    idAluno int not null,
    foreign key (idDisciplina) references Disciplina (id),
    foreign key (idAluno) references Aluno (id)
);

create table Turma (
    id int primary key not null auto_increment,
    nome varchar(10) not null,
    turno varchar(10) not null,
    anoSerie varchar(10) not null,
    min int not null,
    max int not null,
    idAluno int,
    idDisciplina int,
    foreign key (idAluno) references Aluno (id),
    foreign key (idDisciplina) references Disciplina (id)
);
 create table solicitacao (
	id int primary key not null auto_increment,
    tipo varchar(30) not null,
    descricao text(300) not null,
    resposta text(300),
    idSecretario int,
    idAluno int not null,
    foreign key (idSecretario) references Funcionario (id),
    foreign key (idAluno) references Aluno (id)
);

insert into Funcionario (nome, idade, cpf, email, telefone, dataNascimento, cargo, senha, nlogin) 
	values('Joao Guedes', 24, '222.333.555-44', 'joo_guedes@live.com', '(84)99421-3471', '1995-05-12', 'Professor(a)', 
    '$argon2i$v=19$m=1024,t=2,p=2$amJXMTVKZXBCUExCN0Z2RQ$vuy2Gbmoag71H5T6otHs66eY+tU+3AKDdGhdAkNuzCw',
    0);
    insert into Funcionario (nome, idade, cpf, email, telefone, dataNascimento, cargo, senha, nlogin) 
	values('Junior Guedes', 24, '000.000.000-00', 'juniorgmj2016@gmail.com', '(84)99421-3471', '1995-05-12', 'Secretario(a)', 
    '$argon2i$v=19$m=1024,t=2,p=2$amJXMTVKZXBCUExCN0Z2RQ$vuy2Gbmoag71H5T6otHs66eY+tU+3AKDdGhdAkNuzCw',
    0);
insert into Aluno (nome, dataNascimento, nomeMae, nomePai, rg, cpf, naturalidade,
	endereco, telefone, sexo, senha, nlogin) 
	values('Joao Guedes de Moura Junior', '1995-05-12', 'Maria da Penha', 'João Guedes', '111.222.333',
    '111.222.333-44', 'Natal', 'Sítio Cajazeiras', '(84) 9 9494-9494', 'Masculino',
    '$argon2i$v=19$m=1024,t=2,p=2$ajg4OWdEb0pKYmVIb2FGUA$XyfOE0U5Is6WzVroGpcuRFfK1xGQspwsfG0KmqSMT9U', 0);

select * from Funcionario;
select * from Aluno;
select * from Turma;
select * from DisciplinaAluno;
select * from Solicitacao;
select * from Disciplina;