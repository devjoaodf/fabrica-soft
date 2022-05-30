<?php
include_once("conexao.php");
$sql = "SELECT nome_completo, funcao, idFuncionario FROM funcionario WHERE funcao = 'Diretor'";
$resultado = mysqli_query($conexao, $sql);
$arResultado = mysqli_fetch_assoc($resultado);
?>
<html>
    <body>
        <head>
            <title>Unidade</title>
            <meta charset="utf-8">
            </head>
            <h1>Unidade Projeção</h1>
            <form action="cUnidade.php" method="POST">
            Nome da Unidade:
            <select name ="unidade"value="unidade">
            <option value="---">---</option>
            <option value="GUARA">GUARÁ</option>
            <option vlaue="TAGUATINGA">TAGUATINGA</option>
            <option value="SOBRADINHO">SOBRADINHO</option>
            <option value="CEILANDIA">CEILANDIA</option>
            </select><br><br>
            Silga da Unidade:
            <select name="sigla" value="sigla">
            <option value="---">---</option>
            <option value="GUA">GUA</option>
            <option value="TAG">TAG</option>
            <option value="SOB">SOB</option>
            <option value="CEI">CEI</option>
            </select><br><br>
            <select name="diretor" value="diretor">
                <?php do{?>
                <option value="<?php echo $arResultado['idFuncionario']?>"><?php echo $arResultado['nome_completo'] . $arResultado['funcao'] . $arResultado['idFuncionario']?></option>
                <?php
            } while( $arResultado = mysqli_fetch_assoc($resultado) );?>
                
            </select>
            
            <input type="submit" value="Enviar">
            
        </head>
    </body>
</html>