<?php
$visualizar = $_GET['a'];

$conexao = mysqli_connect("localhost", "root", "", "rematricula");

$sql = "SELECT * FROM aluno where idMatricula = $visualizar" ;
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
            <td>ID:<?php echo $arResultado['idMatricula']?></td>
</tr>
<tr>
            <td>Matricula: <?php echo $arResultado['matricula']?></td>
</tr>
<tr>
            <td>Aluno: <?php echo $arResultado['alunos']?></td>
</tr>
<tr>
            <td>SAP: <?php echo $arResultado['sap']?></td>
</tr>
<tr>
            <td>CAA: <?php echo $arResultado['caa']?></td>
</tr>
<tr>
            <td>BOLETO: <?php echo $arResultado['boleto']?></td>
</tr>
<tr>
            <td>Coordenador:<?php echo $arResultado['coordenador']?></td>
            </tr>
        </table>
        <a href="rematriculas.php">Voltar</a>
    </body>
</html>