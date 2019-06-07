<?php

$nomedoarquivo = $_GET['nomearquivo'];
$opcao = $_GET['opcao'];
unlink($nomedoarquivo);
echo "<script>";
echo "window.location='ListaReserva.php?opcao=$opcao';";
echo "</script>";

