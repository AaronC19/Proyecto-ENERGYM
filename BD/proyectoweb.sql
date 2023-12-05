CREATE DATABASE inicioderegistro;
USE inicioderegistro;


CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_usuario VARCHAR(255) NOT NULL,
    correo VARCHAR(255) NOT NULL,
    contrasena VARCHAR(255) NOT NULL,
    tipo_usuario ENUM('cliente', 'administrador') NOT NULL,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    numero_telefonico VARCHAR(20) UNIQUE NOT NULL
);

-- Resto del código sin cambios
CREATE TABLE perfil_usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT,
    nombre VARCHAR(255),
    informacion_adicional TEXT,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id)
);

CREATE UNIQUE INDEX idx_nombre_usuario ON usuarios (id);

INSERT INTO usuarios (nombre_usuario, correo, contrasena, tipo_usuario, numero_telefonico) 
VALUES 
('Aarón', 'aaron123@gmail.com', '$2y$10$TE.qVSew2x21ujERS0QRAO2Ix/8sXkC.34Qo2dG/Ak/SREY7FFcHu', 'administrador', '1234567890'),
('Juan', 'juanjose123@gmail.com', '$2y$10$TE.qVSew2x21ujERS0QRAO2Ix/8sXkC.34Qo2dG/Ak/SREY7FFcHu', 'administrador', '9876543210'),
('Emmanuel', 'emmanuel123@gmail.com', '$2y$10$TE.qVSew2x21ujERS0QRAO2Ix/8sXkC.34Qo2dG/Ak/SREY7FFcHu', 'administrador', '5555555555');
/*
La contraseña para iniciar sesion como administrador con esos usuarios es proyectoweb
*/


