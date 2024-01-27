<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["full-name"]) && isset($_POST["email"]) && isset($_POST["subject"])) {
        
        $fullName = $_POST["full-name"];
        $email = $_POST["email"];
        $phoneNumber = $_POST["phone-number"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        $to = "felipevido@emcosta.com.br"; // 
        $subject = "Novo formulário de contato";
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        
        $emailBody = "Nome Completo: $fullName\n";
        $emailBody .= "Email: $email\n";
        $emailBody .= "Telefone: $phoneNumber\n";
        $emailBody .= "Assunto: $subject\n";
        $emailBody .= "Mensagem: $message\n";

        // Envia o e-mail
        if (mail($to, $subject, $emailBody, $headers)) {
            echo "Sua mensagem foi enviada com sucesso!";
        } else {
            echo "Desculpe, ocorreu um erro ao enviar a mensagem. Por favor, tente novamente mais tarde.";
        }
    } else {
        echo "Por favor, preencha todos os campos obrigatórios.";
    }
}
?>
