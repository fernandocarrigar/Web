Create Database Web;
use Web;

Create Table Archivos (
IdArchivo int NOT NULL IDENTITY PRIMARY KEY,
Archivo varbinary(max)	NOT NULL,
MimeType varchar(50) NOT NULL,
Descripcion varchar(100)
);

Create Table Marcas (
IdMarca int NOT NULL IDENTITY PRIMARY KEY, 
Nombre varchar(250) NOT NULL,
IdArchivo int NOT NULL,
CONSTRAINT fk_Marcas_Archivos FOREIGN KEY (IdArchivo) REFERENCES Archivos(IdArchivo)
);

Create Table Productos (
IdProductos int NOT NULL IDENTITY PRIMARY KEY,
Descripcion varchar(250) NOT NULL,
IdMarca int NOT NULL,
IdArchivo int NOT NULL,
CONSTRAINT fk_Productos_Archivos FOREIGN KEY (IdArchivo) REFERENCES Archivos(IdArchivo),
CONSTRAINT fk_Productos_Marcas FOREIGN KEY (IdMarca) REFERENCES Marcas(IdMarca)
);

Create Table Publicaciones (
IdPublic int NOT NULL IDENTITY PRIMARY KEY,
Seccion varchar(100) NOT NULL,
Principal varchar(250) NOT NULL,
Secundario varchar(250),
IdArchivo int NOT NULL,
CONSTRAINT fk_Publicaciones_Archivos FOREIGN KEY (IdArchivo) REFERENCES Archivos(IdArchivo)
);