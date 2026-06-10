<?php

/**
 * InvControl - Sistema de Control de Inventario
 * Proyecto Académico
 */

// Configuración básica
define('APP_NAME', 'InvControl');
define('APP_VERSION', '1.0.0');
define('APP_ENV', getenv('APP_ENV') ?: 'development');

// Headers
header('Content-Type: application/json; charset=utf-8');
header('X-Powered-By: InvControl');

// Respuesta inicial
$response = [
    'app' => APP_NAME,
    'version' => APP_VERSION,
    'status' => 'running',
    'environment' => APP_ENV,
    'timestamp' => date('Y-m-d H:i:s')
];

echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

?>