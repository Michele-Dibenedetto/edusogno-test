CREATE TABLE IF NOT EXISTS utenti (
id int NOT NULL AUTO_INCREMENT,
nome varchar(45),
cognome varchar(45),
email varchar(255),
inbox_email varchar(255),
PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS evento (
id int NOT NULL AUTO_INCREMENT,
nome_evento varchar(255),
descrizione text,
data_evento date,
ora_evento time,
PRIMARY KEY (id)
);
