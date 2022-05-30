<?php
$alunos = $_POST['alunos'];
$matricula = $_POST['matricula'];
$sap = $_POST['sap'];
$caa = $_POST['caa'];
$boleto = $_POST['boleto'];
$coordenador = $_POST['coordenador'];

$conexao = mysqli_connect("localhost", "root", "", "rematricula");
if($conexao){
    echo"conexão sucesso";
}
else{
    echo"conexão failed";
}

$sql = "UPDATE aluno SET alunos = '$alunos',";
$sql .= " matricula = '$matricula', sap = '$sap', caa = '$caa', boleto = '$boleto', coordenador = '$coordenador'";
$sql .= " WHERE idMatricula = " . $_POST['id'];
$resultado = mysqli_query($conexao, $sql);
if($resultado){
    header("Location: rematriculas.php");
}

?>