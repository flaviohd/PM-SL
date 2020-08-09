<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />


  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Exercicio PM-SL</title>


</head>

<body>
  <div name="aluno">
    <h1>Cadastro do Aluno</h1>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      Nome:
      <input name="inputName" type="text" placeholder="Informe seu nome completo." />
      <br>
      Gênero:


      <div class="select">
        <select name="genero" id="genero">
          <option value="0">Masculino</option>
          <option value="1">Feminino</option>
          <option value="2">Outros</option>
        </select>
      </div>


      <br>


      Data de Nascimento
      <input type="date" name="nascimento" />
      <br>

      Cidade:
      <input name="inputCidade" type="text" placeholder="Informe sua cidade de residencia..." />

      <br>
      Bairro:
      <input name="inputBairro" type="text" placeholder="Informe seu Bairro..." />

      <br>
      Rua:
      <input name="inputRua" type="text" placeholder="Informe sua rua..." />
      <br>

      Número:
      <input name="inputNumero" type="number" placeholder="Numero..." />

      <br>
      Complemento:
      <input name="inputComplemento" placeholder="Informe o número." />

      <br />

      <input type="submit" value="Enviar">



  </div>
  <label for="Turmas">Escolha sua turma</label>
  <input list="browsers" />
  <datalist id="browsers">
    <option value="Turma 1"> </option>
    <option value="Turma 2"> </option>
    <option value="Turma 3"> </option>
  </datalist>
  </form>
  <h2>Cadastro do Aluno</h2>




</body>

</html>