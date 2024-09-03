<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
<div class="cadastro">
        <h1> Crie uma conta 
        </h1>
        <hr>
        <input type="text" name="text" id="f_nome" placeholder=" Insira seu nome" required>
        </br>
        </br>
        <input type="text" name="text" id="f_sobrenome" placeholder="insira seu sobrenome" required>
        <br>
        <input type="text" name="text" id="f_cpf" placeholder="CPF" required>
        </br>
        <input type="text" name="text" id="f_cpf" placeholder="telefone celular" required>
        </br>
        <input type="text" name="text" id="f_datanascimento" placeholder="Data de nascimento" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" required>
        </br>
        <input type="Email" name="Email" id="Email" placeholder=" Insira seu email" required>
        </br>
        </br>
        <input type="password" name="password" id="password" placeholder="Crie sua senha" required>
        </br>
        <input type="password" name="password" id="password" placeholder="Confirme sua senha" required>
        </br>
        <!-- <input type="submit" value="cadastrar"> -->
        </br>
    </div>

</body>
</html>