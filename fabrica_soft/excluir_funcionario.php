<?php
$id = $_GET['a'];
include_once("conexao.php");
if($conexao){
    echo"conexão sucesso";
}
else{
    echo"conexão failed";
}
$sql = "SELECT * FROM funcionario";
$sql .= " WHERE idFuncionario = " . $id;

$resultado = mysqli_query($conexao, $sql);
$arResultado = mysqli_fetch_assoc($resultado);
?>
<html>
    <body>
        <head>
            <title>Excluir funcionario</title>
            <meta charset="utf-8">
        </head>
        <h1 style="text-align:center;">Excluir Funcionario</h1>
        <form action="cExcluir_funcionario.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $arResultado['idFuncionario'];?>">
        <?php echo $arResultado['idFuncionario'];?>
        Funcionario:
        <?php echo $arResultado['nome_completo']?><br><br>
        Email:
        <?php echo $arResultado['email']?><br><br>
        Setor:
        <?php echo $arResultado['setor']?><br><br>
        Função:
        <?php echo $arResultado['funcao']?><br><br>
        Curso:
        <?php echo $arResultado['curso']?><br><br>

        <input type="submit" name="excluir" value="Deseja excluir realmente?"><br><br>
        <a href ="rematriculas.php">Voltar a pagina anterior</a>

</form>
    </body>
</html>