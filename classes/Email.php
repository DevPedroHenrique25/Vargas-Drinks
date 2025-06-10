<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../vendor/autoload.php';

class Email {
    private $mailer;

    public function __construct($host, $username, $senha, $from, $name) {
        $this->mailer = new PHPMailer(true);
        try {
            $this->mailer->isSMTP();
            $this->mailer->Host       = $host;
            $this->mailer->SMTPAuth   = true;
            $this->mailer->Username   = $username;
            $this->mailer->Password   = $senha;
            $this->mailer->SMTPSecure = 'ssl';
            $this->mailer->Port       = 'porta do servidor';
            $this->mailer->CharSet    = 'UTF-8';
            $this->mailer->setFrom($from, $name);
            $this->mailer->isHTML(true);
            $this->mailer->XMailer    = '';
        } catch (Exception $e) {
            throw new Exception("Erro ao configurar o mailer: " . $e->getMessage());
        }
    }

    public function informarEmail($email, $nome) {
        $this->mailer->addAddress($email, $nome);
    }

    public function formatarEmail($info) {
        $this->mailer->Subject = $info['assunto'];
        $this->mailer->Body    = $info['corpo'];
        $this->mailer->AltBody = strip_tags($info['corpo']);
    }

    public function enviarEmail() {
        try {
            return $this->mailer->send();
        } catch (Exception $e) {
            error_log("Erro ao enviar email: " . $e->getMessage());
            return false;
        }
    }
}
?>