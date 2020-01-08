<?php

require __DIR__ . "/vendor/autoload.php";

use Source\Support\Email;

$mail = new Email();

/*
 *
 *
 *  Testes de disparo com Simples
 *
 *
 */

$mail->add("Olá mundo, este é o meu primeiro e-mail",
    "<h1>Teste</h1>",
    "André Dorneles",
    "contato@imperiosoft.com.br"
)->send();

if ($mail_error = $mail->error()) {
    echo $mail_error->getMessage();
}

var_dump(true);

/*
 *
 *
 *  Testes de disparo com Anexo
 *
 *
 */

$mail->add("Olá mundo, este é o meu segundo e-mail",
    "<h1>Teste</h1>",
    "André Dorneles",
    "contato@imperiosoft.com.br"
)->attach(
    "files/1.jpg",
    "Wallpaper 1"
)->attach(
    "files/2.jpg",
    "Wallpaper 2"
)->send();

if ($mail_error = $mail->error()) {
    echo $mail_error->getMessage();
}

var_dump(true);
