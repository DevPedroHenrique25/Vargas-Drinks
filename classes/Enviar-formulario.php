<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'Email.php';

// Carrega variáveis do .env (caso não tenha sido carregado ainda)
if (!isset($_ENV['EMAIL_SENHA'])) {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
}

header('Content-Type: application/json');

$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$telefoneCelular = $_POST['telefone-celular'] ?? '';
$telefone = $_POST['telefone'] ?? '';
$cidade = $_POST['cidade'] ?? '';
$mensagem = $_POST['mensagem'] ?? '';
$estado = $_POST['estado'] ?? '';

// Anti-spam simples
if (!empty($_POST['website'])) {
    echo json_encode(['status' => 'spam', 'mensagem' => 'Spam detectado.']);
    exit;
}   

// Verifica campos obrigatórios
if (
    empty($nome) || empty($email) || empty($telefoneCelular) ||
    empty($telefone) || empty($cidade) || empty($mensagem) || empty($estado)
) {
    echo json_encode(['status' => 'emptyFieldError', 'mensagem' => 'Todos os campos são obrigatórios.']);
    exit;
}

// Validação email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['status' => 'invalidEmail', 'mensagem' => 'Email inválido.']);
    exit;
}

// Verifica se variável EMAIL_SENHA está setada
if (!isset($_ENV['EMAIL_SENHA']) || empty($_ENV['EMAIL_SENHA'])) {
    echo json_encode(['status' => 'erro', 'mensagem' => 'Senha do email não configurada.']);
    exit;
}

$assunto = 'Nova mensagem do site';
$corpo = '';

foreach ($_POST as $key => $value) {
    if ($key != 'acao') {
        $corpo .= ucfirst($key) . ": " . htmlspecialchars($value) . "<br>";
    }
}

$info = ['assunto' => $assunto, 'corpo' => $corpo];

try {
    $mail = new Email(
        'seu host',
        'seu usuario',
        'sua senha',
        'seu email',
        'seu nome'
    );
    $mail->informarEmail('seu email', 'seu nome');
    $mail->formatarEmail($info);

    if ($mail->enviarEmail()) {
        echo json_encode(['status' => 'sucesso', 'mensagem' => 'Formulário enviado com sucesso.']);
    } else {
        echo json_encode(['status' => 'erro', 'mensagem' => 'Erro ao enviar o formulário.']);
    }
} catch (Exception $e) {
    echo json_encode(['status' => 'erro', 'mensagem' => 'Erro no servidor: ' . $e->getMessage()]);
}
?>