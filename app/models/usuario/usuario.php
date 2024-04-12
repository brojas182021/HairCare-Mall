<?php
require_once __DIR__ . '/../../views/shared/conexion.php';

class UsuarioModel {
    public function verificarCredenciales($correo, $contrasena) {
        $con = conectar();
        // Evita la inyección SQL utilizando sentencias preparadas
        $query = "SELECT * FROM usuario WHERE usua_nombre = ? AND usua_clave = ?";
        $stmt = $con->prepare($query);
        $stmt->bind_param("ss", $correo, $contrasena);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            // El usuario existe en la base de datos
            return true;
        } else {
            // El usuario no existe o las credenciales son incorrectas
            return false;
        }

        $stmt->close();
        $con->close();
    }
}