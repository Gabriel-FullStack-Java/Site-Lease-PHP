<?php

// Incluir os arquivos do PHPMailer
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
require '../PHPMailer/src/Exception.php';

// Importar os namespaces do PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Pegar e sanitizar o nome do usuário
    $nomeUsuario = $_POST['nome-do-usuario'];
    $nomeUsuario = trim($nomeUsuario);  // Remover espaços extras
    $nomeUsuario = htmlspecialchars($nomeUsuario, ENT_QUOTES, 'UTF-8');  // Evitar XSS

    // Pegar e sanitizar o e-mail
    $emailDestinatario = filter_var($_POST['email-do-usuario'], FILTER_SANITIZE_EMAIL);
    
    // Verificar se o e-mail é válido
    if (filter_var($emailDestinatario, FILTER_VALIDATE_EMAIL)) {

        //$mensagem = htmlspecialchars($_POST['mensagem']); // Sanitiza a mensagem caso viesse do formulário
        // Definir a mensagem do e-mail
        $mensagem = 'Olá, ' . $nomeUsuario . ',<br><br>';
        $mensagem .= 'Obrigado por entrar em contato com a SiteLease. ';
        $mensagem .= 'Recebemos sua mensagem e nossa equipe está analisando o seu pedido. ';
        $mensagem .= 'Em breve, entraremos em contato para fornecer mais informações.<br><br>';
        $mensagem .= 'Atenciosamente,<br>Equipe SiteLease';

        // Criar instância do PHPMailer
        $mail = new PHPMailer(true);

        try {
            // Configurações do servidor SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';  // Servidor SMTP
            $mail->SMTPAuth = true;
            $mail->Username = 'contatositelease@gmail.com';  // Seu e-mail
            $mail->Password = 'wvwr ysxu wjjc gxuw';  // Sua senha de e-mail ou senha de app
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // Segurança TLS
            $mail->Port = 587;  // Porta do servidor SMTP

            // Remetente e destinatário
            $mail->setFrom('contatositelease@gmail.com', 'Site Lease');
            $mail->addAddress($emailDestinatario, $nomeUsuario);  // Endereço do destinatário

            // Conteúdo do e-mail
            $mail->isHTML(true);  // Habilita o formato HTML
            $mail->Subject = 'E-mail enviado via PHPMailer by Gabriel & Robert';
            $mail->Body    = $mensagem;  // Mensagem formatada em HTML
            $mail->AltBody = strip_tags($mensagem);  // Caso o cliente de e-mail não suporte HTML

            // Envia o e-mail
            $mail->send();
            echo 'Mensagem enviada com sucesso!';
        } catch (Exception $e) {
            echo "Erro ao enviar e-mail: {$mail->ErrorInfo}";
        }

    } else {
        echo 'O endereço de e-mail fornecido não é válido.';
    }
} else {
    echo 'Por favor, preencha o formulário corretamente.';
}

?>
