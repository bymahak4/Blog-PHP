 Blog-PHP

_Blog hecho en mvc con php y msql._

## Información 🚀

_La base de datos fue hecha usando la herramienta phpMyAdmin usando xampp._


### Sentencia de creación de Base De Datos 📋

_Nombre de la base de datos "blogdb" y el nombre de las tablas "usuario" y "post"._

```
CREATE DATABASE blogdb;

CREATE TABLE usuario
( idUser int(5) NOT NULL AUTO_INCREMENT,
  nomUser varchar(20) NOT NULL,
  apeUser varchar(20) NOT NULL,
  emailUser varchar(50) NOT NULL,
  pasUser varchar(255) NOT NULL,
  imgUser varchar(255),
  CONSTRAINT usuario_pk PRIMARY KEY (idUser,emailUser)
);

CREATE TABLE post
( idPost int(20) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  titPost varchar (30) NOT NULL,
  contPost varchar (255) NOT NULL,
  fechPost DATE,
  horaPost TIME,
  idUser int(5) NOT NULL,
  emailUser varchar(50) NOT NULL,
  CONSTRAINT post_fk1 FOREIGN KEY (idUser,emailUser) REFERENCES  usuario(idUser,emailUser)
);
```

### Configuración 🔧

_Configurar dentro de la carpeta: "config/parameters.php" para poner su ruta por defecto._

```
define("base_url", "http://localhost/bog_php/Blog-PHP/")
```

_Configurar dentro de la carpeta: "config/db.php" por si quiere cambiar la configuracion de la base de datos._

```
$db = new mysqli("localhost", "root", "", "blogdb");
```


## Autores ✒️

* **Diego Rodriguez** - [Mahaka](https://github.com/bymahak4)


---
