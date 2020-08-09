<?php

require_once "config.php";

$nome = "";
$genero = "";
$dtnascimento = "";
$cidade = "";
$bairro = "";
$rua = "";
$numero = "";
$complemento = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  echo "request";


  $novonome = trim($_POST["inputName"]);
  echo $novonome;
  $nome = $novonome;
  $novogenero = trim($_POST["genero"]);
  echo $novogenero;
  $genero = $novogenero;
  $dtnascimento = trim($_POST["dtnascimento"]);
  echo $ndtnascimento;
  $dtnascimento = $ndtnascimento;

  $sql = "INSERT INTO alunos (nome, genero, dtnascimento) VALUES (?, ?, ?)";

  if ($coisa = mysqli_prepare($mysql, $sql)) {
    echo "preparou";

    mysqli_stmt_bind_param($coisa, $pnome, $pgenero, $pdtnascimento);
    $pnome = $nome;
    $pgenero = $genero;
    $pdtnascimento = $dtnascimento;

    if (mysqli_stmt_execute($coisa)) {
      echo "executou";

      exit();
    } else {

      echo "ERRO!!!";
    }

    mysqli_stmt_close($coisa);
  }

  mysqli_close($mysql);
}
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

      Sexo:

      <select name="genero">
        <option value="0">Masculino</option>
        <option value="1">Feminino</option>
        <option value="2">Outros</option>
      </select>

      <p></p>


      Data de Nascimento
      <input type="text" name="dtnascimento" />



      Cidade:
      <input name="inputCidade" type="text" placeholder="Informe sua cidade de residencia..." />


      Bairro:
      <input name="inputBairro" type="text" placeholder="Informe seu Bairro..." />


      Rua:
      <input name="inputRua" type="text" placeholder="Informe sua rua..." />


      Número:
      <input name="inputNumero" type="number" placeholder="Numero..." />


      Complemento:
      <input name="inputComplemento" placeholder="Informe o número." />

      <br />

      <input type="submit" value="Enviar">



    </form>
    <h2>Cadastro do Aluno</h2>





</body>

</html>