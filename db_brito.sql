CREATE TABLE IF NOT EXISTS tbl_usuario(
	id_usuario INT NOT NULL AUTO_INCREMENT,
    nome_usu varchar(50)NOT NULL,
    senha varchar(50) NOT NULL,
    PRIMARY KEY (id_usuario)
);
INSERT INTO tbl_usuario VALUES (1, 'anderson', 12345);