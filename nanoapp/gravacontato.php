<?php

require_once 'db.php';
// como evitar sql injection 

$objStmt = $objBanco->prepare('INSERT INTO contatos (nome, whatsapp) VALUES( :nm, :wzap ) ');


$objStmt->bindParam(':nm', $_POST['nm']);
$objStmt->bindParam(':wzap', $_POST['whats']);

//executar
if ($objStmt->execute()) {


    $msg = 'Obrigado por se cadastrar';
} else {

    $msg = ' D: deu ruim';
}

include 'grava_contato_tpl.php';
