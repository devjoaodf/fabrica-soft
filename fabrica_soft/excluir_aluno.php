<?php
$id = $_GET['a'];
$conexao = mysqli_connect("localhost", "root", "", "rematricula");
if($conexao){
    echo"conexão sucesso";
}
else{
    echo"conexão failed";
}
$sql = "SELECT * FROM aluno";
$sql .= " WHERE idMatricula = " . $id;

$resultado = mysqli_query($conexao, $sql);
$arResultado = mysqli_fetch_assoc($resultado);
?>
<html>
    <body>
        <head>
            <title>Excluir aluno</title>
            <meta charset="utf-8">
        </head>
        <h1 style="text-align:center;">Excluir aluno </h1>
        <form action="cExcluir_aluno.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $arResultado['idMatricula'];?>">
        <?php echo $arResultado['idMatricula'];?>
            Aluno:
        <?php echo $arResultado['alunos']?><br><br>
        SAP:
        <?php echo $arResultado['sap']?><br><br>
        CAA:
        <?php echo $arResultado['caa']?><br><br>
        Boleto:
        <?php echo $arResultado['boleto']?><br><br>
        Coordenador:
       <?php echo $arResultado['coordenador']?><br><br>
        <input type="submit" name="excluir" value="Deseja excluir realmente?"><br><br>
        <a href ="rematriculas.php">Voltar a pagina anterior</a>

</form>
    </body>
</html>