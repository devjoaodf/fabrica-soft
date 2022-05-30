<?php
print_r($_POST);
$unidade = $_POST['unidade'];
$sigla = $_POST['sigla'];
$diretor = $_POST['diretor'];
include_once("conexao.php");
$sql = "INSERT INTO unidade (nome_unidade, sigla_unidade, DiretorUnidade)";
$sql .= " VALUES ('$unidade', '$sigla', '$diretor')";
$resultado = mysqli_query($conexao, $sql);
if($resultado){
    echo "Deu bom";
    //echo "<p> Usuário '$nome' cadastrado com sucesso.";
    header("Location: home.php");
}
else{
    echo "Deu ruim";
}
?>