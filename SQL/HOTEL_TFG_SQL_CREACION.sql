CREATE DATABASE IF NOT EXISTS hotel;

CREATE TABLE estancia (
  cod_estancia INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  estado BOOLEAN NOT NULL,
  descripcion VARCHAR(500) NOT NULL,
  ubicacion ENUM('exterior','interior','azotea') NOT NULL,
  planta int NOT NULL,
  tipo_estancia ENUM('lujo','comun','presidencial') NOT NULL,
  precio DOUBLE NOT NULL,
  descuento DOUBLE NOT NULL,
  
  CONSTRAINT planta CHECK (planta <= 10)
);

CREATE TABLE foto (
	cod_foto INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    cod_estancia INT NOT NULL,
    foto VARCHAR(500) NOT NULL,
    
	CONSTRAINT fk_cod_estancia FOREIGN KEY (cod_estancia) REFERENCES estancia(cod_estancia) ON DELETE RESTRICT
);

CREATE TABLE habitacion (
	cod_habitacion INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    cod_estancia INT NOT NULL,
    num_camas ENUM('1','2') NOT NULL,
    tipo_bano ENUM('bañera','ducha','jacuzzi') NOT NULL,
    planta INT NOT NULL,
    localidad ENUM('madrid') NOT NULL,
    
	CONSTRAINT fk_cod_estancia_habitacion FOREIGN KEY (cod_estancia) REFERENCES estancia(cod_estancia) ON DELETE RESTRICT
);

CREATE TABLE sala (
	cod_sala INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    cod_estancia INT NOT NULL,
    aforo INT NOT NULL,
    tipo_sala ENUM('boda','conferencia','reunion') NOT NULL,
    
	CONSTRAINT fk_cod_estancia_sala FOREIGN KEY (cod_estancia) REFERENCES estancia(cod_estancia) ON DELETE RESTRICT
);

CREATE TABLE usuario (
	cod_usuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    primer_apellido VARCHAR(50) NOT NULL,
    segundo_apellido VARCHAR(50) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    correo VARCHAR(250) NOT NULL,
    usuario VARCHAR(50) NOT NULL,
    contraseña VARCHAR(50) NOT NULL
);

CREATE TABLE reserva (
	cod_reserva INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    cod_usuario INT NOT NULL,
    cod_estancia INT NOT NULL,
    fecha_inicio DATE NOT NULL,
    fecha_fin DATE NOT NULL,
    puntuacion ENUM('1','2','3','4','5'),
    comentario VARCHAR(500),
    
    CONSTRAINT fk_cod_usuario FOREIGN KEY (cod_usuario) REFERENCES usuario(cod_usuario) ON DELETE RESTRICT,
    CONSTRAINT fk_cod_estancia_reserva FOREIGN KEY (cod_estancia) REFERENCES estancia(cod_estancia) ON DELETE RESTRICT
);


DROP TABLE habitacion;
