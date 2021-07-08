<?php

require_once __DIR__ . "/../vendor/autoload.php";

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php
    require "../metatags.php";
    ?>
</head>

<body>

    <section class="container bg-darkgreen container-h100 grid-container">
        <div class="main_success content-90-1200 grid-container">
            <div class="box40">
                <img class="img-500" src="<?= MASTER_FOLDER_IMG; ?>/sucesso.png" alt="">
            </div>
            <div class="box60">
                <h3>E-mail enviado com sucesso!</h3>
                <p>Fique a vontade e continue enviado.</p>
                <a href="<?= MASTER; ?>">Enviar mais e-mail</a>
                <div class="clear"></div>
            </div>

        </div>
    </section>

    <?php
    require "../scripts.php";
    ?>
</body>

</html>