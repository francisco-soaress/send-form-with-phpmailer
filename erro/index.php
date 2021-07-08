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

    <section class="container bg-white container-h100 grid-container">
        <div class="main_error content-90-1200 grid-container">
            <div class="box40">
                <img class="img-500" src="<?= MASTER_FOLDER_IMG; ?>/error.png" alt="">
            </div>
            <div class="box60">
                <h3>Erro ao enviar o E-mail</h3>
                <a href="<?= MASTER; ?>">Tentar novamente</a>
                <div class="clear"></div>
            </div>

        </div>
    </section>

    <?php
    require "../scripts.php";
    ?>
</body>

</html>