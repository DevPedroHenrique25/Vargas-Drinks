<?php
$protocolo = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];

// Detectar automaticamente a pasta do projeto
$pasta = str_replace('/index.php', '', $_SERVER['PHP_SELF']);
$pasta = rtrim($pasta, '/') . '/';

define('INCLUDE_PATH', $protocolo . $host . $pasta);

// Autoload das classes
$autoLoad = function($class) {
    $file = 'classes/' . $class . '.php';
    if($class == 'Email'){
        include('vendor/phpmailer/phpmailer/src/PHPMailer.php');
    }
    if (file_exists($file)) {
        require_once $file;
    } else {
        die("A classe '{$class}' não foi encontrada em {$file}.");
    }
};
spl_autoload_register($autoLoad);
?>