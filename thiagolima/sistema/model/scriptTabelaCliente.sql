CREATE TABLE Cliente (
    Id INT AUTO_INCREMENT,
    Nome VARCHAR(50) NOT NULL,
    Sobrenome VARCHAR(50),
    Email VARCHAR(50),
    Idade INT,
    Sexo CHAR,
    PRIMARY KEY(Id)
);

INSERT INTO Cliente (Nome, Sobrenome, Email, Idade, Sexo)
    VALUES ('Thiago', 'Lima', 'thiagofslima@gmail.com', 27, 'M');