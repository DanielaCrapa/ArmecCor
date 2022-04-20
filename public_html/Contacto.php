<?php

if (isset ($_POST['enviar'])){
    if (!empty($_POST['email']) && !empty($_POST ['nombre']) && !empty($_POST ['mensaje']) && !empty($_POST['asunto'])) {
        $email = $_POST['email'];
        $nombre = $_POST['nombre'];
        $mensaje = $_POST['mensaje'];
        $subject = $_POST['subject'];
        $header = "From: noreply@gmail.com" . "/r/n";
        $header = "Reply-To: example@gmail.com" . "/r/n";
        $header = "Xmailer: PHP/" . phpversion();
        $mail = @mail( $email, $nombre, $subject, $mensaje, $header);
        if ($email) {
            echo "<h4> ¡Su mensaje ha sido enviado con éxito! <h4>";
        } else {
            echo "Ha habido un error en el envío. Por favor inténtelo nuevamente.";
        }
    }
}
?>