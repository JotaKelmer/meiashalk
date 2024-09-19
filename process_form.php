<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $regiao = $_POST['regiao'];

    if (empty($nome) || empty($email) || empty($telefone) || empty($regiao)) {
        echo "Todos os campos são obrigatórios.";
        exit;
    }

    $to = "emkt.halk@gmail.com";  // E-mail de destino
    $subject = "Nova solicitação de contato - Representante comercial - Meias Halk";
    $headers = "From: $email";

    $message = "Nome: $nome\n";
    $message .= "E-mail: $email\n";
    $message .= "Telefone: $telefone\n";
    $message .= "Região: $regiao\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Solicitação enviada com sucesso!";
    } else {
        echo "Erro ao enviar a solicitação. Tente novamente.";
    }
}
?>
