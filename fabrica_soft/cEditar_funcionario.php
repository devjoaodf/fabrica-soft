<?php
$funcionario = $_POST['nome'];
$email = $_POST['email'];
$curso = $_POST['curso'];
$funcao = $_POST['funcao'];
$setor = $_POST['setor'];
$registro = $_POST['registro'];


include_once("conexao.php");
if($conexao){
    echo"conexão sucesso";
}
else{
    echo"conexão failed";
}

$sql = "UPDATE funcionario SET nome_completo = '$funcionario',";
$sql .= " email = '$email', curso = '$curso',funcao = '$funcao' ,setor = '$setor', curso = '$curso',dt_registro_funcionario = '$registro'";
$sql .= " WHERE idFuncionario = " . $_POST['id'];
$resultado = mysqli_query($conexao, $sql);
if($resultado){
    header("Location: index.php");
}

?>