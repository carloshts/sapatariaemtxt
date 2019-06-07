
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistema Agittus</title>
        <link rel="stylesheet" type="text/css" media="screen and (min-width: 0px)" href="../Css/ResFuncionario800x600.css"/>
        <link rel="stylesheet" type="text/css" media="screen and (min-width: 1000px)" href="../Css/ResFuncionario1024x768.css"/>
        <link rel="stylesheet" type="text/css" media="screen and (min-width: 1350px)" href="../Css/ResFuncionario1366x768.css"/>
    </head>
    <body>
        <div class="layout">
            <div class="barra">
                <div class="logo"><img id="logo" src="../Imagens/logosemslogan.png"/></div>
                <div class="logout"><a href="PaginaLogin.php"><img id="logout" src="../Imagens/logout.png"/></a></div>
            </div>
            <div class="left">
                <nav id="menu">
                    <ul>
                        <li><a target="tela" href="../Controller/ListaReserva.php">Reservas</a></li>
                        <li><a href="#">Funcionários</a></li>
                        <li><a href="#">Relatórios</a></li>
                        <li><a href="#">Controle de estoque</a></li>
                    </ul>
                </nav>
            </div>
            <div class="right">
                <iframe name="tela" src="../Controller/ListaReserva.php" scrolling="no"></iframe>
            </div>
        </div>
    </body>
</html>
