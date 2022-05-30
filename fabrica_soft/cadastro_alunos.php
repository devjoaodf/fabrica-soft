<html>
    <body>
        <head>
            <title>Cadastro de Alunos</title>
            <meta charset="utf-8">
        </head>
        <h1 style="text-align:center;">Cadastro de Alunos</h1>
        <form action="cCadastro_alunos.php" method="POST">
        Matricula:
        <input type="number" name="matricula"><br><br>
        Aluno:
        <input type="text" name="aluno"><br><br>
        Boleto Pago?
        <input type="text" name="boleto"><br><br>
        Passado pelo SAP:
        <input type="text" name="sap"><br><br>
        Passado pelo CAA:
        <input type="text" name="caa"><br><br>
        Coordenador:
        <input type="text" name="coordenador"><br><br>
        <input type="submit" value="Enviar"><br><br>
        <input type="reset" value="Limpar">
        </form>
    </body>
</html>