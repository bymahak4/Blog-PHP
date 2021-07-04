# Blog-PHP

/* DB FOR BLOG */
/* --------------------------------------------------------------------------*/
CREATE TABLE usuario
( idUser int(5) NOT NULL AUTO_INCREMENT,
  nomUser varchar(20) NOT NULL,
  apeUser varchar(20) NOT NULL,
  emailUser varchar(50) NOT NULL,
  pasUser varchar(255) NOT NULL,
  CONSTRAINT usuario_pk PRIMARY KEY (idUser,emailUser)
);

CREATE TABLE post
( idPost int(20) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  titPost varchar (30) NOT NULL,
  contPost varchar (255) NOT NULL,
  fechPost DATE,
  horaPost TIME
);

CREATE TABLE realiza
( idPost int(20) PRIMARY KEY NOT NULL,
  idUser int(5) NOT NULL,
  emailUser varchar(50) NOT NULL,
  CONSTRAINT realiza_fk1 FOREIGN KEY (idPost) REFERENCES  post(idPost),
  CONSTRAINT realiza_fk2 FOREIGN KEY (idUser,emailUser) REFERENCES  usuario(idUser,emailUser)
);
/* --------------------------------------------------------------------------*/

/* INSERT FOR BLOG */
/* --------------------------------------------------------------------------*/
/* NEW USER */
INSERT INTO `usuario`(`idUser`, `nomUser`, `apeUser`, `emailUser`, `pasUser`) VALUES (null,'Diego','Rodriguez','diego@hotmail.com','diego2021');

/* NEW POST */
INSERT INTO `post`(`idPost`, `titPost`, `contPost`, `fechPost`, `horaPost`) VALUES (null,'PRIMER POST','Primer Post uacho ya sabe',str_to_date('2021-07-02','%Y-%m-%d'),time("14:30:00"));

/* NEW REALIZA */
INSERT INTO `realiza`(`idPost`, `idUser`, `emailUser`) VALUES (1,1,'diego@hotmail.com');
/* --------------------------------------------------------------------------*/