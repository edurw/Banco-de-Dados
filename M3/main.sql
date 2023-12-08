-- Alunos: Rodrigo Rey de Oliveira Carrard, Eduardo da Rocha Weber;

-- Criação do esquema da tabela

CREATE SCHEMA moneyplus;

-- Tabelas

USE moneyplus;

-- Criação da Tabela "Usuário"
CREATE TABLE Usuario (
    id_usuario INT PRIMARY KEY,
    nome_usuario VARCHAR(255),
    senha VARCHAR(255),
    telefone VARCHAR(20)
);

-- Criação da Tabela "Transação Financeira"
CREATE TABLE TransacaoFinanceira (
    ID_Transacao INT PRIMARY KEY,
    Data DATE,
    Valor INT,
    Descricao VARCHAR(255),
    ID_Usuario INT,
    ID_Categoria INT,
    ID_Pagamento INT,
    FOREIGN KEY (ID_Usuario) REFERENCES Usuario(ID_Usuario),
    FOREIGN KEY (ID_Categoria) REFERENCES CategoriaDespesa(ID_Categoria),
    FOREIGN KEY (ID_Pagamento) REFERENCES FormaPagamento(ID_Pagamento)
);

-- Criação da Tabela "Categoria de Despesa"
CREATE TABLE CategoriaDespesa (
    ID_Categoria INT PRIMARY KEY,
    Nome_Categoria CHAR
);

-- Criação da Tabela "Forma de Pagamento"
CREATE TABLE FormaPagamento (
    ID_Pagamento INT PRIMARY KEY,
    Nome_Pagamento CHAR
);
