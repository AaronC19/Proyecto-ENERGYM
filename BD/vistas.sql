USE inicioderegistro;

-- Solo usuarios de tipo 'cliente'
CREATE VIEW vista_clientes AS SELECT * FROM usuarios WHERE tipo_usuario = 'cliente';
SELECT * FROM vista_clientes;

-- Solo usuarios de tipo 'administrador'
CREATE VIEW vista_administradores AS SELECT * FROM usuarios WHERE tipo_usuario = 'administrador';
SELECT * FROM vista_administradores;

USE inicioderegistro;


-- Eliminar vista de clientes
	-- DROP VIEW IF EXISTS vista_clientes;
    
-- Eliminar vista de administradores
	-- DROP VIEW IF EXISTS vista_administradores;
