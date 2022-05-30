<?php
include_once("conexao.php");
$sql = "SELECT
idUnidade,
unidade.Nome,
Funcionario.Nome
FROM
unidade inner Join funcionario ON unidade.DiretorUnidade = funcionario.idFuncionario";
$resultado = mysqli_query($conexao, $sql);
$arResultado = $resultado;
?>
<html>
    <body>
        <head>
            <title>Home Unidade</title>
            <meta charset="utf-8">
        </head>
        <h1>Unidade</h1>
        <table border="1">
            <tr>
        <th>id da Unidade:</th>
        <th>Nome da Unidade:</th>
        <th>Sigla:</th>
        <th>Diretor:</th>
</tr>
        <?php 
        do{
            ?>
        <tr>
            <td><?php echo $resultado['idUnidade'];?></td>
            <td><?php echo $resultado['nome_unidade'];?></td>
            <td><?php echo $arResultado['sigla_unidade'];?></td>
            <td><?php echo $arResultado['nome_completo'];?></td>             
        </tr>
        <?php
    }while($arResultado = mysqli_fetch_assoc($resultado));
        ?>
        </table>
         
    </body>
</html>