<?php
print_r($_GET);
$a = $_GET['a'];

$conexao = mysqli_connect("localhost", "root", "", "rematricula");
if($conexao){
    echo"conexão sucesso";
}
else{
    echo"conexão failed";
}
$sql = "SELECT * FROM aluno";
$sql .= " WHERE idMatricula = " . $a;
$resultado = mysqli_query($conexao, $sql);
$arResultado = mysqli_fetch_assoc($resultado);
?>
<html>
<body>
    <head>
        <title>Editar</title>
        <meta charset="utf-8">
    </head>
</body>
<h1 style="text-align:center;"> Editar dados do aluno</h1>
<form action="cEditar_aluno.php" method="POST">
    <?php echo $arResultado['idMatricula'] ?>
<input type="hidden" name="id" value="<?php echo $arResultado['idMatricula']?>">
Aluno:
<input type ="text" name="alunos" value="<?php echo $arResultado['alunos']?>"><br><br>
Matricula:
<input type ="text" name="matricula" value="<?php echo $arResultado['matricula']?>"><br><br>
SAP:
<input type ="text" name="sap" value="<?php echo $arResultado['sap']?>"><br><br>
CAA:
<input type ="text" name="caa" value="<?php echo $arResultado['caa']?>"><br><br>
Boleto:
<input type ="text" name="boleto" value="<?php echo $arResultado['boleto']?>"><br><br>
Coordenador:
<input type ="text" name="coordenador" value="<?php echo $arResultado['coordenador']?>"><br><br>
<input type ="submit" name="Enviar" value="Enviar"><br><br>
<input type="reset" name="Limpar" value="retorna ao valor original">





</form>




</html>
