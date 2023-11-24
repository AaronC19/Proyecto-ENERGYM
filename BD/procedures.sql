USE inicioderegistro;

DELIMITER //
CREATE PROCEDURE infoUsuarios (IN idUsuario INT)
BEGIN
    SELECT * FROM usuarios WHERE id = idUsuario;
END //
DELIMITER ;

-- Se cambia el numero por el id requerido
CALL infoUsuarios(113);

-- Eliminar el procedure
	-- DROP PROCEDURE IF EXISTS infoUsuarios;
