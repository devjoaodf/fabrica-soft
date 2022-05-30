<?php
print_r($_GET);
$a = $_GET['a'];

include_once("conexao.php");
if($conexao){
    echo"conexão sucesso";
}
else{
    echo"conexão failed";
}
$sql = "SELECT * FROM funcionario";
$sql .= " WHERE idFuncionario = " . $a;
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
<h1 style="text-align:center;"> Editar dados do funcionario</h1>
<form action="cEditar_funcionario.php" method="POST">
    <?php echo $arResultado['idFuncionario'] ?>
<input type="hidden" name="id" value="<?php echo $arResultado['idFuncionario']?>">
Funcionario:
<input type ="text" name="nome" value="<?php echo $arResultado['nome_completo']?>"><br><br>
Email:
<input type ="text" name="email" value="<?php echo $arResultado['email']?>"><br><br>

SETOR:
    <select name="setor" value="setor"></br><br>
        <option value="...">...</option>
    <option value="Ti">Ti</option>
    <option value="CAA">CAA</option>
    <option value="SAP">SAP</option>
    <option value="Professor">Professor</option></br><br>
    </select></br><br>
FUNÇÃO:
    <select name="funcao" value="funcao"></br><br>
    <option value="...">...</br></option>
    <option value="Supervisor">Supervisor</br></option>
    <option value="Coordenador">Coordeandor</br></option>
    <option value="Diretor">Diretor</br></option>
    </select></br><br>

    CURSO:
    <select name="curso" value="curso">
        <option value="...">...</option>
        <option value="TADS">TADS</option>
        <option value="PSICOLOGIA">PSICOLOGIA</option>
        <option value="DIREITO">DIREITO</option>
        <option value="CIENCIA POLITICA">CIENCIA POLITICA</option>
        <option value="ADMINISTRACAO">ADM</option>
    </select></br><br>
    <input type="date" name="registro"><br><br>
<input type ="submit" name="Enviar" value="Enviar"><br><br>
<input type="reset" name="Limpar" value="retorna ao valor original">





</form>




</html>
