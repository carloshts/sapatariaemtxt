<?php

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

if($usuario=="admin" && $senha=="admin"){
        echo "<script type='text/javascript'>";
        echo "  window.location ='../Paginas/LayoutFuncionario.php';";
        echo "</script>";
}else{
        echo "<script type='text/javascript'>";
        echo "  window.location ='../Paginas/PaginaLogin.php';";
        echo "  alert('Login ou senha errados!\n Tente novamente!');";
        echo "  history.back();";
        echo "</script>";
}

