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

Create Table TipoHerramientas(
    IdHerramienta   int(10) AUTO_INCREMENT,
    TipoHerramienta varchar(100) NOT NULL,
    PRIMARY KEY (IdHerramienta)
);

Create Table Productos (
IdProductos     int(10) NOT NULL AUTO_INCREMENT,
Descripcion     varchar(250) NOT NULL,
Archivo         longblob NOT NULL,
MimeType        varchar(50) NOT NULL,
IdMarca         int(10) NOT NULL,
IdHerramienta   int(10) NOT NULL,
PRIMARY KEY (IdProductos),
CONSTRAINT fk_Productos_Marcas FOREIGN KEY (IdMarca) REFERENCES Marcas(IdMarca),
CONSTRAINT fk_Productos_Herramientas FOREIGN KEY (IdHerramienta) REFERENCES TipoHerramientas(IdHerramienta)
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

Create Table Contactos(
    IdContacto  int(10) NOT NULL AUTO_INCREMENT,
    Correo      varchar(100) NOT NULL,
    Direccion   varchar(250),
    CodigoP     varchar(10),
    Ciudad      varchar(30),
    Estado      varchar(30),
    Telefono    varchar(15),
    PRIMARY KEY (IdContacto)
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

INSERT INTO Roles(IdRol,Rol) VALUES(NULL,'Admin');
INSERT INTO Usuarios(IdUsuario,Nombre,Correo,Contra,IdRol) VALUES(NULL,'AdminMGCTools', '','MGCTools2023', '1');

Create View view_publicaciones as
SELECT p.IdPublic, p.Seccion, p.Principal, p.Secundario, p.IdArchivo, a.Archivo, a.MimeType, a.Descripcion
FROM Publicaciones as p
LEFT JOIN
Archivos as a
ON p.IdArchivo = a.IdArchivo
ORDER by IdPublic DESC;

Create View view_productos as
SELECT  p.IdProductos, p.Descripcion, p.Archivo as ProductoImg, p.MimeType as ProductoTp, p.IdMarca,
        m.Nombre, m.Archivo as MarcaImg, m.MimeType as MarcaTp,
        h.IdHerramienta, h.TipoHerramienta
FROM Productos as p
LEFT JOIN
Marcas as m
ON p.IdMarca = m.IdMarca
LEFT JOIN
TipoHerramientas as h
ON p.IdHerramienta = h.IdHerramienta
ORDER by IdProductos DESC;