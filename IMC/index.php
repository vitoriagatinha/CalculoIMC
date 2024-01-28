<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calcular IMC</title>
</head>
<body>
     
    <h1 style="text-align: left;"> Cálculo de Massa Corporal - IMC  </h1> 

    


    <div id="formulario">
        <form action="index.php" method="get">
            <br><h3>ALTURA</h3>
            <input type="text" name="altura" placeholder="Ex: 1.59" required>
            <br><h3>PESO</h3>
            <input type="text" name="peso" placeholder="Ex: 50" required>

            <br><button type="submit">Calcular</button>
        </form>

    <?php 
        function IMC(){

            @$altura = $_GET['altura'];
            @$peso = $_GET['peso'];

            @$multiplicar = ($altura * $altura);
            @$dividir = ($peso / $multiplicar);
            print_r("<h3>IMC = $dividir");

            if($dividir < 18.5){
                print_r ("<h3 style='color:Red'>MAGREZA!</h3>");
            }elseif($dividir < 24.9 ){
                print_r("<h3 style='color:Green'>NORMAL</h3>");
            }elseif($dividir < 29.9 ){
                print_r("<h3 style='color:Orange'>SOBREPESO</h3>");
            }elseif($dividir < 34.9 ){
                print_r("<h3 style='color:Crimson'>OBESIDADE GRAU I</h3>");
            }elseif($dividir < 39.9 ){
                print_r("<h3 style='color:Crimson'>OBESIDADE GRAU II</h3>");
            }elseif($dividir > 40 ){
                print_r("<h3 style='color:Red'>OBESIDADE GRAU III</h3>");
            }         
        }
        $result = IMC();
        return $result;
    ?>
    
    </div>
    </div>
    
</body>
</html>