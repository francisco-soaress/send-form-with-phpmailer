<?php

/* DEFININDO CONSTANTES DE CAMINHO DO SERVIDOR */
if ($_SERVER['HTTP_HOST'] == "localhost") :
    define('MASTER', 'https://localhost/study/study-private/git/gitlab/send-form-with-phpmailer/');
endif;

/* ==================================================== */
/* ========== DEFINES MASTER:: JS, CSS e IMG ========== */
/* ==================================================== */
define("MASTER_FOLDER_IMG", MASTER . "Assets/Images"); /* não alterar */
define("MASTER_FOLDER_CSS", MASTER .  "Assets/Style"); /* não alterar */
define("MASTER_FOLDER_JS", MASTER .  "Assets/Js"); /* não alterar */
define("MASTER_FOLDER_INC",  "Assets/Include"); /* não alterar */