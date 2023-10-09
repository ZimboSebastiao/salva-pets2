<?php
require_once "funcoes.php";
require_once "conecta.php";
$usuarios = LerUsuario($conexao);
?>
<style>

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th {
    background-color: #f2f2f2;
    text-align: left;
    padding: 8px;
    border: 1px solid #ddd;
}

td {
    padding: 8px;
    border: 1px solid #ddd;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #ddd;
}

</style>
<table>
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>CEP</th>
        <th>Senha</th>
    </tr>
    <?php
    foreach ($usuarios as $usuario) { ?>
        <tr>
            <td> <?= $usuario["nome"] ?></td>
            <td><?= $usuario["email"] ?></td>
            <td><?= $usuario["cep"] ?></td>
            <td> <?= $usuario["senha"] ?></td>

        </tr>
    <?php } ?>
</table>


<?php
?>