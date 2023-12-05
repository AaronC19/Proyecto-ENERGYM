USE inicioderegistro;

-- Insertar usuarios
/*
INSERT INTO usuarios (nombre_usuario, correo, contrasena, tipo_usuario) VALUES
('Ana', 'ana@gmail.com', 'claveana1', 'cliente'),
('Cristian', 'Cristian@gmail.com', 'clavejuan2', 'cliente'),
('Maria', 'maria@gmail.com', 'clavemaria3', 'cliente'),
('Pedro', 'pedro@gmail.com', 'clavepedro4', 'cliente'),
('Laura', 'laura@gmail.com', 'clavelaura5', 'cliente'),
('Carlos', 'carlos@gmail.com', 'clavecarlos6', 'cliente'),
('Sofia', 'sofia@gmail.com', 'clavesofia7', 'cliente'),
('Daniel', 'daniel@gmail.com', 'clavedaniel8', 'cliente'),
('Elena', 'elena@gmail.com', 'claveelena9', 'cliente'),
('Luis', 'luis@gmail.com', 'claveluis1', 'cliente'),
('Marta', 'marta@gmail.com', 'clavemarta2', 'cliente'),
('Raul', 'raul@gmail.com', 'claveraul3', 'cliente'),
('Carmen', 'carmen@gmail.com', 'cavecarmen4', 'cliente'),
('David', 'david@gmail.com', 'clavedavid5', 'cliente'),
('Isabel', 'isabel@gmail.com', 'claveisabel6', 'cliente'),
('Javier', 'javier@gmail.com', 'clavejavier7', 'cliente'),
('Paula', 'paula@gmail.com', 'clavepaula8', 'cliente'),
('Victor', 'victor@gmail.com', 'clavevictor9', 'cliente'),
('Natalia', 'natalia@gmail.com', 'clavenatalia1', 'cliente'),
('Alejandro', 'alejandro@gmail.com', 'clavealejandro2', 'cliente');
*/



-- Insertar administradores
INSERT INTO usuarios (nombre_usuario, correo, contrasena, tipo_usuario) 
VALUES 
('Aarón', 'aaron123@gmail.com', '$2y$10$TE.qVSew2x21ujERS0QRAO2Ix/8sXkC.34Qo2dG/Ak/SREY7FFcHu', 'administrador'),
('Juan', 'juanjose123@gmail.com', '$2y$10$TE.qVSew2x21ujERS0QRAO2Ix/8sXkC.34Qo2dG/Ak/SREY7FFcHu', 'administrador'),
('Emmanuel', 'emmanuel123@gmail.com', '$2y$10$TE.qVSew2x21ujERS0QRAO2Ix/8sXkC.34Qo2dG/Ak/SREY7FFcHu', 'administrador');


-- Eliminar usuarios
/*
DELETE FROM usuarios WHERE tipo_usuario = 'administrador';
DELETE FROM usuarios WHERE tipo_usuario = 'cliente';
ALTER TABLE usuarios AUTO_INCREMENT = 1;
*/





