<?php
$visualizar = $_GET['a'];

$conexao = mysqli_connect("localhost", "root", "", "contato");

$sql = "SELECT * FROM funcionario where idFuncionario = $visualizar" ;
$resultado = mysqli_query($conexao, $sql);
$arResultado = mysqli_fetch_assoc($resultado);
?>

<html>
    <body>
        <head>
            <title>Visualizar</title>
            <meta charset="utf-8">
        </head>
        <h1 style="text-align:center;">Visualizar</h1>
        <table border="1">
            <tr>
            <td>ID:<?php echo $arResultado['idFuncionario']?></td>
</tr>
<tr>
            <td>Funcionario: <?php echo $arResultado['nome_completo']?></td>
</tr>
<tr>
            <td>Email: <?php echo $arResultado['email']?></td>
</tr>
<tr>
            <td>Setor: <?php echo $arResultado['setor']?></td>
</tr>
<tr>
            <td>Curso: <?php echo $arResultado['curso']?></td>
</tr>

        </table>
        <a href="index.php">Voltar</a>
    </body>
</html>