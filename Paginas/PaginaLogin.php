
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style type="text/css">
            body{
                background-image: url("../Imagens/bglogin.jpg");
            }
            .layout{
                position: absolute;
                width: 700px;
                left: 50%;
                margin-left: -350px;
                text-align: center;
                border: none;
            }
            table{
                position: absolute;
                left: 50%;
                width: 200px;
                top: 40%;
                margin-left: -100px;
            }
            table td{
                color: white;
                font-family: arial;
                font-weight: bold;
            }
            #campo{
                border: 1px solid #ebac10;
            }
            #campo:focus{
                border: 2px solid #ff9900;
            }
            
            #bottom{
                border: 2px solid #ff9900;
                background: #ffb638;
                font-size: 24px;
                font-family: arial;
                font-weight: bold;
                color: white;
            }
        </style>
    </head>
    <body>
        <div class="layout">
            <table>
                <form action="../Controller/Login.php" method="post">
                <tr>
                    <td>Usuário:</td>
                    <td><input id="campo" type="text" name="usuario"/></td>
                </tr>
                <tr>
                    <td>Senha:</td>
                    <td><input id="campo" type="password" name="senha"/></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input id="bottom" type="submit" value="Login"/></td>
                </tr>
                </form>
            </table>
        </div>
    </body>
</html>
