<?php
require_once 'db.php';

echo '<pre>';
$id = preg_replace('/\D/', '', $_GET['id']);


if ($objBanco->exec("DELETE FROM contatos WHERE id = $id") !== false) {

    $msg = "Registro alterado com sucesso!";
} else {
    $msg = "Erro ao apagar aquivo";
}
include  "apaga_contato_tpl.php";
