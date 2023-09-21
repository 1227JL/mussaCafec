CREATE DATABASE IF NOT EXISTS mussacafec;
USE mussacafec;

CREATE TABLE usuarios(
id  int(3) auto_increment not null,
nombre  varchar(25) not null,
usuario varchar(20) not null,
password  varchar(20) not null,
CONSTRAINT pk_usuarios PRIMARY KEY(id) 
)ENGINE=InnoDb;

INSERT INTO usuarios VALUES(NULL, 'Administrador', 'adminmussacafec', 'admin2023*');

CREATE TABLE ponentes (
    id INT(6) auto_increment not null,
    eje_tematico VARCHAR (50) not null,
    tipo_Institucion VARCHAR(10) not null,
    titulada VARCHAR(60),
    ficha VARCHAR(10),
    institucion VARCHAR(60),
    ponente_1 VARCHAR(50),
    correo_1 VARCHAR(50),
    contacto_1 VARCHAR(15),
    ponente_2 VARCHAR(50),
    correo_2 VARCHAR(50),
    contacto_2 VARCHAR(15),
    ponente_3 VARCHAR(50),
    correo_3 VARCHAR(50),
    contacto_3 VARCHAR(15),
    titulo_proyecto VARCHAR(60) not null,
    tipo_proyecto VARCHAR(10) not null,
    archivo_1 VARCHAR(70) not null,
    archivo_2 VARCHAR(70) not null,
    CONSTRAINT pk_ponentes PRIMARY KEY(id)
)ENGINE = InnoDb;

CREATE TABLE poster(
    id int(6) not null auto_increment,
    institucion VARCHAR(100) not null,
    nombre_1 varchar(50) ,
    correo_1 varchar(30),
    contacto_1 varchar(15),
    nombre_2 varchar(50) ,
    correo_2 varchar(30),
    contacto_2 varchar(15),
    nombre_3 varchar(50) ,
    correo_3 varchar(30),
    contacto_3 varchar(15),
    titulo VARCHAR(60) not null,
    archivo VARCHAR(70) not null,
    CONSTRAINT pk_poster PRIMARY KEY(id)
)Engine=InnoDb;

CREATE TABLE feria_empresarial (
    id int(6) not null auto_increment,
    institucion varchar(100) not null,
    participantes VARCHAR (10) not null,
    titulo_proyecto VARCHAR(60) not null,
    archivo VARCHAR (70) not null,
    CONSTRAINT pk_feria_empresarial PRIMARY KEY(id)
)Engine=InnoDb;

CREATE TABLE robotica (
    id int(6) not null auto_increment,
    categoria VARCHAR(40) not null,
    institucion VARCHAR(100) not null,
    nombre_proyecto VARCHAR(60) not null,
    representante VARCHAR(50) not null,
    participante2 VARCHAR(50),
    contacto VARCHAR(15) not null,
    correo varchar(50)not null,
    confirmacion varchar(20) not null,
    CONSTRAINT pk_robotica PRIMARY KEY (id)
)ENGINE=InnoDb;

