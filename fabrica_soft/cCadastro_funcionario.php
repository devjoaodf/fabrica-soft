<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senhaconf = $_POST['senhaconf'];
$setor = $_POST['setor'];
$curso = $_POST['curso'];
$funcao = $_POST['funcao'];
$dt_registro = $_POST['registro'];

$conexao = mysqli_connect('localhost', 'root','','contato');
if($conexao){
    echo"Conexão sucesso";
}
else{
    echo"conexão failed";
}
$sql = "INSERT INTO funcionario (nome_completo, email, senha, setor, funcao, curso, dt_registro_funcionario)";
$sql .= " VALUES ('$nome', '$email', '$senha', '$setor', '$funcao', '$curso', '$dt_registro')";
$resultado = mysqli_query($conexao, $sql);
$arResultado = $resultado;
if($arResultado){
    //echo "<p> Usuário '$nome' cadastrado com sucesso.";
    header("Location: index.php");
}else{
    echo "<p> Falha ao cadastrar usuário. Verifique!";
}
?>