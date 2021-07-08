<?php

use Config\Helpers\Email;

require "../../vendor/autoload.php";

$Email = new Email();

sleep(4);

$jSON = array();
$getPost = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(empty($getPost["send-email"])){
    $jSON["erro"] = true;
}else{

    $Post = array_map("strip_tags", $getPost);

    if(!empty($Post["from_email"]) && !empty($Post["to_email"]) && !empty($Post["assunto"]) && !empty($Post["mensagem"])){
        $Email->addMessage(
            $Post["assunto"],
            $Post["mensagem"],
            "Francisco Assis",
            "francisco.sts@hotmail.com"
        );
    }

    
    $jSON["success"] = true;
}

echo json_encode($jSON);