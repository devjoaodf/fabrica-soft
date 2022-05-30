<?php
print_r($_POST);
$id = $_POST['id'];
include_once("conexao.php");
if($conexao){
    echo"conexão sucesso";
}
else{
    echo"conexão failed";
}
$sql = "DELETE FROM funcionario WHERE idFuncionario = $id";
$resultado = mysqli_query($conexao, $sql);
if($resultado){
    header("Location: index.php");
}
else{
    echo"execução falhou";
}
?>