<?php
print_r($_POST);
$email = $_POST['email'];
$senha = $_POST['senha'];

$conexao = mysqli_connect("localhost", "root", "", "rematricula");
if($conexao){
    echo "<p>conexao sucesso</p>";
}
else{
    echo"failed";
}
$sql = "SELECT * FROM usuario";
$sql .= " WHERE email = '$email' AND senha = '$senha'";

if($email == $sql AND $senha == $sql){
    echo "<p>email ok</p>";
}
else{
    echo "email/senha incorreta";
}
$resultado = mysqli_query($conexao, $sql);
$arResultado = mysqli_fetch_assoc($resultado);

if($arResultado){
    header("Location: login.php");
}



?>
