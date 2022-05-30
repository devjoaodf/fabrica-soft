<?php
include_once("conexao.php");
$sql = "SELECT * FROM funcionario,unidade";
$sql .= " WHERE idFuncionario AND idUnidade";
$resultado = mysqli_query($conexao, $sql);
$arResultado = mysqli_fetch_assoc($resultado);
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
            <td><?php echo $arResultado['idUnidade'];?></td>
            <td><?php echo $arResultado['nome_unidade'];?></td>
            <td><?php echo $arResultado['sigla_unidade'];?></td>
            <td><?php echo $arResultado['nome_completo'];?></td>             
        </tr>
        <?php
    }while($arResultado = mysqli_fetch_assoc($resultado));
        ?>
        </table>
         
    </body>
</html>