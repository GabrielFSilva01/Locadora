<?php
require_once 'conexao.php';
$sql = "SELECT * FROM cliente";
$con= Conexao::conectar();
$registros = $con->query($sql);
$con= Conexao::desconectar();

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar clientes </title>
</head>
<body>
    <h1> Listagem geral de clientes <h1>
        <table>
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>email</th>
                <th>data_cadastro</th>
</tr>
<?php
foreach ($registros as $linha) {<?
    <tr>
    <td><?php echo $linha['id']; ?></td>
    <td><?php echo $linha['nome']; ?></td>
    <td><?php echo $linha ['email']; ?></td>
    <td><?php echo $linha ['data_cadastro'];?></td>

    </tr>
<?php } ?>

</table> 
</body>
</html>