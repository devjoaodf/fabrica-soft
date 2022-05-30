<?php

include_once("conexao.php");
	
	$sql = "SELECT * FROM funcionario ";
    $sql .= "WHERE idFuncionario";
	

	$resultado = mysqli_query($conexao, $sql);

	$arResultado = mysqli_fetch_assoc($resultado);
			
	
?>
<html>
<body>
    <head>
        <title>Tabela</title>
        <meta charset="utf-8">
    </head>
<title>Tabela de alunos</title>
<table border="1">
    <tr> 
        <td>Nome:</td>
        <td>Setor:</td>
        <td>Função:</td>
        <td>Curso:</td>
        <td>Email:</td>
        <td>Editar</td>
        <td>Excluir</td>
        <td>Visualizar</td>
    </tr>
<?php
			do{
		?>
<tr>
    <td><?php echo $arResultado['nome_completo'];?></td>
    <td><?php echo $arResultado['setor'];?></td>
    <td><?php echo $arResultado['funcao'];?></td>
    <td><?php echo $arResultado['curso'];?></td>
    <td><?php echo $arResultado['email'];?></td>
<td>
            <a href="editar_funcionario.php?a=<?php echo $arResultado['idFuncionario']?>">editar</a></td>
            <td>
            <a href="excluir_funcionario.php?a=<?php echo $arResultado['idFuncionario']?>">excluir</a></td>
            
            <td> 
            <a href="visualizar_funcionario.php?a=<?php echo $arResultado['idFuncionario']?>">visualizar</a>
        </td></tr>
<?php
			}while( $arResultado = mysqli_fetch_assoc($resultado) );
		?>



</table>


</body>
</html>