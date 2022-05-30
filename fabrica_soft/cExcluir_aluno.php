<?php
print_r($_POST);
$idMatricula = $_POST['id'];
$conexao = mysqli_connect("localhost", "root", "", "rematricula");
if($conexao){
    echo"conexão sucesso";
}
else{
    echo"conexão failed";
}
$sql = "DELETE FROM aluno WHERE idMatricula = $idMatricula";
$resultado = mysqli_query($conexao, $sql);
if($resultado){
    header("Location: rematriculas.php");
}
else{
    echo"execução falhou";
}
?>