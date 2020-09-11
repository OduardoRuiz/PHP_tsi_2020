<?php
$db = mysqli_connect('localhost', 'root', '', 'cmswp');  // conecta sgbd ( usuario/senha/nomebd)

if (mysqli_query($db, 'CREATE TABLE IF NOT EXISTS  contatos (id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
nome VARCHAR(255) NOT NULL, whatsapp BIGINT) ')) {


    echo 'Tabela contatos criadas com sucesso! <br>';
} else {
    echo 'nao foi possivel criar a tabela contatos';
    echo mysqli_connect_error();
}

$contato = ['nome' => 'Du', 'whatsapp' => '5511925633652'];

if (mysqli_query($db, "INSERT INTO contatos (nome, whatsapp) VALUES('{$contato['nome']}','{$contato['whatsapp']}')")) {



    echo 'contato inserido com sucesso';
}


$query = mysqli_query($db, 'SELECT id, nome, whatsapp 
FROM contatos');


echo "
<table border>
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Whatsapp</td>
            </tr>";

while ($registro = $query->fetch_assoc()) {
    echo "<tr>
                <td>{$registro['id']}</td>
                <td>{$registro['nome']}</td>
                <td>{$registro['whatsapp']}</td>
            </tr>";
}

echo "</table>";

if (mysqli_query($db, 'DELETE FROM contatos WHERE id = 1')) {

    echo "Registro apagado com sucesso";
} else {

    echo "vc nao apagou";
}



echo "<br><br>Nome enviado: {$_post['nm']}, whatsapp: {echo "<br><br>Nome enviado: {$_POST['nm']}, whatsapp: {$_POST['whats']}";