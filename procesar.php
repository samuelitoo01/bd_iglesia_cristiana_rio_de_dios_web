<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// === DATOS DE BREVO ===
$apiKey = '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';
$listId = 5; 

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = trim($_POST['nombre']);
    $correo = trim($_POST['correo']);

    if (!empty($nombre) && filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $data = [
            'email' => $correo,
            'attributes' => [
                'FIRSTNAME' => $nombre
            ],
            'listIds' => [$listId],
            'updateEnabled' => true
        ];

        $ch = curl_init('https://api.brevo.com/v3/contacts');
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'api-key: ' . $apiKey,
            'Content-Type: application/json'
        ]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_POST, true);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($httpCode == 201 || $httpCode == 204) {
            echo "<script>alert('✅ Furmulario enviado correctamente.Revisa tu correo'); window.location.href = 'index.html';</script>";
        } else {
            echo "❌ Error al llenar el formulario: $response";
        }
    } else {
        echo "⚠️ Correo inválido o campos vacíos.";
    }
} else {
    echo "⛔ Método no permitido.";
}
?>
