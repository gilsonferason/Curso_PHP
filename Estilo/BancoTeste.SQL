CREATE TABLE bairro(
    cod_bairro INT not null AUTO_INCREMENT, 
    bairro varchar(45)not null, 
    PRIMARY KEY(cod_bairro))
    ENGINE=innoDB DEFAULT CHARSET =utf8;

CREATE TABLE usuario(
    id_usuraio INT not null AUTO_INCREMENT, 
    nome_usuario varchar(150)not null,
    bairro_usuario varchar(45),
    PRIMARY KEY(id_usuraio))
    ENGINE=innoDB DEFAULT CHARSET =utf8;
    
    