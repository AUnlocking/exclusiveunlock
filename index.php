<?php

// Definir el entorno de la aplicación
define('ENVIRONMENT', 'production');

// Configuración de la carpeta del sistema
$system_path = 'system';

// Configuración de la carpeta de la aplicación
$application_folder = 'application';

// Resolver la ruta del sistema
if (realpath($system_path) !== FALSE) {
    $system_path = realpath($system_path) . '/';
}

$system_path = rtrim($system_path, '/').'/';

// Validar que la carpeta del sistema exista
if (!is_dir($system_path)) {
    exit("La carpeta del sistema no está configurada correctamente.");
}

// Configuración de constantes principales
define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));
define('BASEPATH', str_replace("\\", "/", $system_path));
define('FCPATH', str_replace(SELF, '', __FILE__));
define('SYSDIR', trim(strrchr(trim(BASEPATH, '/'), '/'), '/'));

if (is_dir($application_folder)) {
    define('APPPATH', $application_folder . '/');
} else {
    define('APPPATH', BASEPATH . $application_folder . '/');
}

// Cargar el archivo bootstrap
require_once BASEPATH . 'core/CodeIgniter.php';
