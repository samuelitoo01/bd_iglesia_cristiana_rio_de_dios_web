<?php

/*
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Datos de conexión
//$host = 'localhost';
//$dbname = 'usuarios';
//$user = 'postgres';
//$pass = '1234';
$host = 'shortline.proxy.rlwy.net';
$port = '45566';
$dbname = 'ferrocarril';
$user = 'postgres';
$password = 'rsWWBVdCuLgLcWTAUonvryeaZFLlmJZQ';
//postgresql://postgres:rsWWBVdCuLgLcWTAUonvryeaZFLlmJZQ@shortline.proxy.rlwy.net:45566/railway
try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Verificar si es POST
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Obtener datos del formulario
        $nombre = trim($_POST['nombre']);
        $correo = trim($_POST['correo']);

        // Verificar que no estén vacíos
        if (!empty($nombre) && !empty($correo)) {
            // Insertar datos con consulta preparada
            $stmt = $pdo->prepare("INSERT INTO usuarios (nombre, correo) VALUES (:nombre, :correo)");
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':correo', $correo);

            if ($stmt->execute()) {
                echo "✅ Datos guardados correctamente.";
            } else {
                echo "⚠️ Error al guardar los datos.";
            }
        } else {
            echo "⚠️ Todos los campos son obligatorios.";
        }
    } else {
        echo "⛔ Método no permitido.";
    }
} catch (PDOException $e) {
    echo "❌ Error de conexión: " . $e->getMessage();
}*/
?>
