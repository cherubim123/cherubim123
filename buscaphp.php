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
  
   <img src = "gps.png"/>
     <h3>Confira Se Existe Algum Delito No Seu Destino </h3><br><br>

<body>


<?php 

$vpesquisa = $_POST['pesquisa'];

if ($vpesquisa=="90030143"||$vpesquisa=="9546145") {

	echo "Foi Registrado um delito do tipo Furto neste CEP";

	}else{

		echo "Não existe Nenhum Resgistro de Delito Para Este CEP";



	}

?>

</body>


</html>

