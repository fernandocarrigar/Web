SET GLOBAL  max_allowed_packet=100*1024*1024;

Create Database Web;

use Web;

Create Table Archivos (
IdArchivo   int(10) NOT NULL AUTO_INCREMENT,
Archivo     longblob NOT NULL,
MimeType    varchar(50) NOT NULL,
Descripcion varchar(100),
PRIMARY KEY (IdArchivo)
);

Create Table Marcas (
IdMarca     int(10) NOT NULL AUTO_INCREMENT, 
Nombre      varchar(250) NOT NULL,
Archivo     longblob NOT NULL,
MimeType    varchar(50) NOT NULL,
PRIMARY KEY (IdMarca)
);

Create Table Productos (
IdProductos     int(10) NOT NULL AUTO_INCREMENT,
Descripcion     varchar(250) NOT NULL,
Archivo     longblob NOT NULL,
MimeType    varchar(50) NOT NULL,
IdMarca         int(10) NOT NULL,
PRIMARY KEY (IdProductos),
CONSTRAINT fk_Productos_Marcas FOREIGN KEY (IdMarca) REFERENCES Marcas(IdMarca)
);

Create Table Sucursales(
    IdSucursal  int(10) NOT NULL AUTO_INCREMENT,
    Longitud    double NOT NULL,
    Latitud     double NOT NULL,
    Sucursal    varchar(100),
    Direccion   varchar(450),
    PRIMARY KEY (IdSucursal)
);

Create Table Publicaciones (
IdPublic    int(10) NOT NULL AUTO_INCREMENT,
Seccion     varchar(100) NOT NULL,
Principal   varchar(250) NOT NULL,
Secundario  varchar(250),
IdArchivo   int(10) NOT NULL,
PRIMARY KEY (IdPublic),
CONSTRAINT fk_Publicaciones_Archivos FOREIGN KEY (IdArchivo) REFERENCES Archivos(IdArchivo)
);

Create Table Roles(
    IdRol   int(10) NOT NULL AUTO_INCREMENT,
    Rol     varchar(50) NOT NULL,
    PRIMARY KEY (IdRol)
);

Create Table Usuarios(
    IdUsuario   int(10) NOT NULL AUTO_INCREMENT,
    Nombre      varchar(50) NOT NULL,
    Correo      varchar(150) NOT NULL,
    Contra      varchar(20) NOT NULL,
    IdRol       int(10) NOT NULL,
    PRIMARY KEY (IdUsuario),
    CONSTRAINT fk_Usuarios_Roles FOREIGN KEY (IdRol) REFERENCES Roles(IdRol)
);