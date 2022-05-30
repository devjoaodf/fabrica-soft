<?php
$conexao = mysqli_connect("localhost", "root", "", "rematricula");
if($conexao){
    echo "Conexão sucesso";
}
else{
    echo"Conexão failed";
}
$sql = "SELECT * FROM aluno WHERE idMatricula";

$resultado = mysqli_query($conexao, $sql);
$arResultado = mysqli_fetch_assoc($resultado);


?>
<html>
    <body>
        <head>
            <title>Rematricula de alunos</title>
            <meta charset="utf-8">
        </head>
    <h1 style="text-align:center;">Rematricula de alunos</h1>
    <table border="1">
    <tr>
        <td>Aluno:</td>
        <td>Boleto Pago</td>
        <td>Passado Pelo SAP</td>
        <td>Passado Pelo CAA</td>
        <td>Coordenador</td>
        <td>Editar</td>
        <td>Excluir</td>
        <td>Visualizar</td>
    </tr>
    <?php
    do{
        ?>
    <tr><form method="GET">
        
        <td><?php echo $arResultado['alunos']?></td>
        <td><?php echo $arResultado['boleto']?></td>
        <td><?php echo $arResultado['sap']?></td>
        <td><?php echo $arResultado['caa']?></td>
        <td><?php echo $arResultado['coordenador']?></td>
        <td>
            <a href="editar_aluno.php?a=<?php echo $arResultado['idUsuario']?>">editar</a></td>
            <td>
            <a href="excluir_aluno.php?a=<?php echo $arResultado['idUsuario']?>">excluir</a></td>
            <td> 
                <a href="visualizar_aluno.php?a=<?php echo $arResultado['idUsuario']?>">visualizar</a>
        </td>
        </form>
    </tr>
    <?php
    } while($arResultado = mysqli_fetch_assoc($resultado));
    ?>



    </table>




    </body>
</html>
