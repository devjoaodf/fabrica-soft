<?php
print_r($_POST);
$matricula = $_POST['matricula'];
$alunos = $_POST['aluno'];
$boleto = $_POST['boleto'];
$sap = $_POST['sap'];
$caa = $_POST['caa'];
$coordenador = $_POST['coordenador'];

$conexao = mysqli_connect("localhost", "root", "", "rematricula");
if($conexao){
    echo"conexão sucesso";
}
else{
    echo"conexão failed";
}
$sql = "INSERT INTO aluno (matricula, alunos, boleto, sap, caa, coordenador)";
$sql .= " VALUES ('$matricula', '$alunos', '$boleto', '$sap', '$caa', '$coordenador')";
$resultado = mysqli_query($conexao, $sql);
if($resultado){
    echo"inserido com sucesso";
}
else{
    echo"inserimento falhou";
}
?>