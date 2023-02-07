/* mysql -u root -p Comando de acesso ao mysql 
SHOW DATABASES; Comando para visualizar bancos
DROP DATABASE NOT EXISTS banco_o14
CREATE IF NOT EXISTS banco_14 ;*/

CREATE DATABASE banco_o14;
USE banco_o14;

CREATE TABLE bairro(
    cod_bairro INT NOT NULL AUTO_INCREMENT,
    nome_bairro VARCHAR(45) NOT NULL,
    PRIMARY KEY(cod_bairro)
    )ENGINE=innoDB DEFAULT CHARSET=utf8;

CREATE TABLE tipo_conta(
    conta INT,
    tipo VARCHAR(55),
    PRIMARY KEY(conta)
)ENGINE=innoDB DEFAULT CHARSET=utf8;

CREATE TABLE tipo_transacao(
    conta INT,
    tipo VARCHAR(55)
)ENGINE=innoDB DEFAULT CHARSET=utf8;


CREATE TABLE gerente(id_gerente INT AUTO_INCREMENT,nome_gerente VARCHAR(45),PRIMARY KEY(id_gerente),)ENGINE=innoDB DEFAULT CHARSET=utf8;


CREATE TABLE usuario(
    id_usuario INT NOT NULL AUTO_INCREMENT,
    nome_usuario VARCHAR(45) NOT NULL,
    senha VARCHAR(6),
    bairro_usuario INT NOT NULL,
    PRIMARY KEY(id_usuario),
    FOREIGN KEY(bairro_usuario) REFERENCES bairro(cod_bairro)
    )ENGINE=innoDB DEFAULT CHARSET=utf8;

CREATE TABLE cliente(
    id_cliente INT AUTO_INCREMENT,
    nome_cliente VARCHAR(45),
    PRIMARY KEY(id_cliente),
    FOREIGN KEY(bairro_cliente) REFERENCES bairro(cod_bairro)
)ENGINE=innoDB DEFAULT CHARSET=utf8;

CREATE TABLE agencia_conta(
    num_agencia INT AUTO_INCREMENT,
    gerente_agencia INT,
PRIMARY KEY(num_agencia)
)ENGINE=innoDB DEFAULT CHARSET=utf8;



CREATE TABLE conta(
    num_conta INT AUTO_INCREMENT,
    cliente_conta INT, 
    tipo_conta INT,    
    agencia_conta INT, 
    saldo_conta DOUBLE NOT NULL,
    PRIMARY KEY (num_conta),
    FOREIGN KEY(cliente_conta) REFERENCES cliente(id_cliente),
    FOREIGN KEY(tipo_conta)REFERENCES tipo_conta(conta),
    FOREIGN KEY(agencia_conta)REFERENCES agencia_conta(num_agencia)
)ENGINE=innoDB DEFAULT CHARSET=utf8;


CREATE TABLE transacao(
    cod_transacao INT AUTO_INCREMENT,
    tipo_transacao INT,
    conta_tansacao INT, 
    valor DOUBLE,
    PRIMARY KEY (cod_transacao)
)ENGINE=innoDB DEFAULT CHARSET=utf8;



    INSERT INTO bairro(nome_bairro) VALUES ('Asa sul'),('Asa norte'),('Lago sul'),('Lago norte');

    INSERT INTO usuario(nome_usuario,bairro_usuario) VALUES ('Oto',2),('Anna',4),('Gorety',1),('Odety',1);

    INSERT INTO gerente(nome_gerente,bairro_gerente) VALUES ('Gilson Americanas',1),('Mauricio Ambev',3),('Slvio IBM',1),('Davison do BB',2),('Ruan da caixa',1),('Goretty',2),('Ricardo',4);

    SELECT nome_usuario, nome_bairro FROM usuario INNER JOIN bairro ON bairro_usuario=cod_bairro;

    SELECT * FROM bairro;

    ALTER TABLE usuario ADD senha VARCHAR(45);

   ALTER TABLE usuario ADD email VARCHAR(45); 

    ALTER TABLE gerente ADD bairro_gerente int ;

    ALTER TABLE gerente ADD FOREIGN KEY(bairro_gerente) REFERENCES bairro(cod_bairro);

    ALTER TABLE tipo_conta MODIFY (55);

