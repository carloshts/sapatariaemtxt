
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" media="screen and (min-width: 500px)" href="../Css/listRes1024x768.css"/>
        <link rel="stylesheet" type="text/css" media="screen and (min-width: 900px)" href="../Css/listRes1366x768.css"/>
    </head>
    <body>
        <div class="layout">
            <div class="top">
                <table>
                    <tr>
                        <td></td>
                        <td>
                            <form action="" method="post">
                                <select name="opcao">
                                    <option selected>Selecione</option>
                                    <option value="Mocassim Converse Preto">Mocassim Converse Preto</option>
                                    <option value="Mocassim Converse Cinza">Mocassim Converse Cinza</option>
                                    <option value="Sapato Anabela Azul">Sapato Anabela Azul</option>
                                    <option value="Tenis Mizuno">Tenis Mizuno</option>
                                    <option value="Tenis Nike">Tenis Nike</option>
                                    <option value="Sapatenis Nike Roxo">Sapatenis Nike Roxo</option>
                                    <input type="submit" value="Pesquisar"/>
                                </select>

                            </form>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="conteudo">
                <table border="1">
                    <tr>
                        <td colspan="6" align="center">
                            <?php
                            if (isset($_POST["opcao"])){
                                $opcao = $_POST["opcao"];
                            }elseif(isset($_GET['opcao'])) {
                                $opcao = $_GET["opcao"];
                            } else {
                                $opcao = null;
                            }
                            switch ($opcao) {
                                case "Mocassim Converse Preto":
                                    echo "<img id='imgsapato' src='../Imagens/t11.jpg'/>";
                                    break;
                                case"Mocassim Converse Cinza":
                                    echo "<img id='imgsapato' src='../Imagens/t13.jpg'/>";
                                    break;
                                case"Sapato Anabela Azul":
                                    echo "<img id='imgsapato' src='../Imagens/t15.jpg'/>";
                                    break;
                                case "Tenis Mizuno":
                                    echo "<img id='imgsapato' src='../Imagens/t2.jpg'/>";
                                    break;
                                case"Tenis Nike":
                                    echo "<img id='imgsapato' src='../Imagens/t4.jpg'/>";
                                    break;
                                case"Sapatenis Nike Roxo":
                                    echo "<img id='imgsapato' src='../Imagens/t6.jpg' style='width:300px; height:300px;'/>";
                                    break;
                                case null:
                                    echo "<h1>Reserva de sapatos!</h1>";
                                    break;
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6" align="center">
                            <?php
                                switch ($opcao) {
                                case "Mocassim Converse Preto":
                                    echo "Mocassim converse preto";
                                    break;
                                case "Mocassim Converse Cinza":
                                    echo "Mocassim converse cinza";
                                    break;
                                case "Sapato Anabela Azul":
                                    echo "Sapato Anabela Azul";
                                    break;
                                case "Tenis Mizuno":
                                    echo "Tenis Mizuno";
                                    break;
                                case "Tenis Nike":
                                    echo "Tenis Nike";
                                    break;
                                case "Sapatenis Nike Roxo":
                                    echo "Sapatenis Nike Roxo";
                                    break;
                                case null:
                                    echo "";
                                    break;
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Número</th>
                        <th>Nome</th>
                        <th>Cpf</th>
                        <th>Telefone</th>
                        <th>E-mail</th>
                    </tr>
                    <tr>
                        <?php
                        $sapato = $opcao;
                        $j = 0;
                        $nomedoarquivo = "Reserva" . $sapato . $j . ".txt";
                        $verifica = file_exists($nomedoarquivo);
                        while ($verifica == TRUE) {
                            $linha = file($nomedoarquivo);
                            echo "<tr>";
                            for ($i = 1; $i <= 5; $i++) {
                                echo "<td>" . $linha[$i] . "</td>";
                            }
                            echo "<td><a href='ExcluirReserva.php?nomearquivo=$nomedoarquivo&opcao=$opcao'>Excluir</a></td>";
                            echo "<td><a href='formReserva.php?nomearquivo=$nomedoarquivo&opcao=$opcao'>Alterar</a></td>";
                            echo "</tr>";
                            $j++;
                            $nomedoarquivo = "Reserva" . $sapato . $j . ".txt";
                            $verifica = file_exists($nomedoarquivo);
                        }
                        ?>
                    </tr>

                </table>
            </div>
        </div>

    </body>
</html>
