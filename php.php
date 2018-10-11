<html>
<head>
  <title>Radar de Assalto</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="13-09.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
		<body>
		<div class="jumbotron text-center">
  
   <img src = "sucesso.png"/>
     <h3>Confira Seus Dados A Baixo:</h3><br><br>

<body>


<p class="font-weight-normal">
<?php



$vnome = $_GET['nome'];

echo "<h4>nome: ${vnome}</h4><br><br>";


$vemail = $_GET['email'];

echo "<h4>email: ${vemail}</h4><br><br>";



$vcpf = $_GET['cpf'];

echo "<h4>cpf: ${vcpf}<h4><br><br>";


$vrua = $_GET['rua'];

echo "<h4>Rua: ${vrua}</h4><br><br>";


$vdata = $_GET['data'];

echo "<h4>Data: ${vdata}</h4><br><br>";


$vhora= $_GET['hora'];

echo "<h4>Hora: ${vhora}</h4><br><br>";


$vseleciona = $_GET['seleciona'];

echo "<h4>Tipo de Delito: ${vseleciona}</h4><br><br>";


$vdescricao = $_GET['descricao'];

echo "<h4>Descrição do delito:</h4>:<br><br> ${vdescricao}";

?>




</p>
</body

</html>