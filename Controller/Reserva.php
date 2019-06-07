<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
    </head>
    <body>
        <?php
        try{
        $verifica=TRUE;
        $i=0;
        $sapato = $_POST["sapato"];
        $numSapato = $_POST["numSapato"];
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $tel = $_POST["tel"];
        $email = $_POST["email"];
        
        if(empty($_POST['nomearquivo'])){
        while ($verifica==TRUE){
            $verifica = file_exists("Reserva".$sapato.$i.".txt");
            if($verifica==FALSE){
                $a = fopen("Reserva".$sapato.$i.".txt", "a+");
            }
            $i++;
        }
        $dadoscad = $sapato.PHP_EOL.$numSapato.PHP_EOL.$nome.PHP_EOL.$cpf.PHP_EOL.$tel.PHP_EOL.$email;
        fwrite($a, $dadoscad);
        
        fclose($a);
        
        
        echo "<script type='text/javascript'>";
        echo "  window.location ='formReserva.php';";
        echo "  alert('Reserva efetuada com sucesso!');";
        echo "</script>";
        }else{
            
            $verifica = file_exists($_POST['nomearquivo']);
            if($verifica==TRUE){
                unlink($_POST['nomearquivo']);
                $b = fopen($_POST['nomearquivo'], "a+");
            }
            
        
        $dados = $sapato.PHP_EOL.$numSapato.PHP_EOL.$nome.PHP_EOL.$cpf.PHP_EOL.$tel.PHP_EOL.$email;
        fwrite($b, $dados);
        
        fclose($b);
        
        
        echo "<script type='text/javascript'>";
        echo "  window.location ='ListaReserva.php?opcao=$sapato';";
        echo "  alert('Reserva efetuada com sucesso!');";
        echo "</script>";
        }
        }  catch (Exception $erro){
            echo "<script type='text/javascript'>";
            echo "  window.location ='formReserva.php';";
            echo "  alert('A reserva não foi possível!');";
            echo "  history.back();";
            echo "</script>";
        }
        ?>
    </body>
</html>
