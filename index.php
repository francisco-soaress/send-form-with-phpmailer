<?php

require_once __DIR__ . "/vendor/autoload.php";

use Config\Helpers\Email;

$Email = new Email();

$Email->addMessage(
    "Olá Mundo, esse é um email de teste",
    "<h1>Estou apenas testando!</h1> Torcendo para ter dado certo",
    "Francisco Assis",
    "francisco.sts@hotmail.com"
);
// $Email->sendEmail();

// if (!$Email->error()) {
//     var_dump(true);
// } else {
//     echo $Email->error()->getMessage() . "<br>";
// }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php
    require "metatags.php";
    ?>
</head>

<body>

    <?php
    require "Assets/Include/pluginModalSendForm.php";
    ?>
    <section class="container bg-darkblue grid-container">
        <div class="main_content content-90-1200 grid-container">
            <div class="box100">
                <h1>Envie um E-mail</h1>
            </div>
            <div class="box40">
                <img class="img-300" src="<?= MASTER_FOLDER_IMG; ?>/send-form.png" alt="">
            </div>

            <div class="box60">
                <form class="sendForm form_content" action="" method="POST">

                    <input type="hidden" name="send-email" value="email-enviado">

                    <label>
                        <p>De:</p>
                        <input class="input_content" type="text" name="from_email" value="contatowebfr@gmail.com" disabled>
                    </label>
                    <label>
                        <p>Para:</p>
                        <input class="input_content" type="text" name="to_email" placeholder="Insira o e-mail de destino">
                    </label>
                    <!-- <label>
                        <p>Com cópia para:</p>
                        <input class="input_content" type="text" name="to_email" placeholder="Insira o e-mail de que receberá a cópia">
                    </label> -->
                    <label>
                        <p>Assunto:</p>
                        <input class="input_content" type="text" name="assunto" placeholder="Insira o assunto">
                    </label>
                    <label>
                        <p>Mensagem:</p>
                        <textarea class="input_content" name="mensagem" cols="20" rows="5"></textarea>
                    </label>

                    <button>Enviar</button>
                </form>
            </div>
            <div class="clear"></div>
        </div>
    </section>

    <?php
    require "scripts.php";
    ?>
</body>

</html>