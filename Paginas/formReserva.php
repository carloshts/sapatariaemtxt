<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../Css/StyleForm.css">
        <script type="text/javascript" src="../JavaScript/lib/jquery.js"></script>
        <script type="text/javascript" src="../JavaScript/lib/jquery.validate.min.js"></script>
        <script type="text/javascript" src="../JavaScript/lib/jquery.maskedinput.js"></script>
        <script type="text/javascript" src="../JavaScript/validacaoform.js"></script>    
        <script type="text/javascript">
            jQuery(function($){
                $("#cpf").mask("999.999.999-99");
                $("#tel").mask("(99)99999-9999");
            });
        </script>
    </head>
    <body>
        <div class="imagem">
            
        </div>
        <div class="informações"></div>
        <div class="reserva">
            <form id="formulario" action="../Controller/Reserva.php" method="post">
                <table>
                    <tr>
                        <td colspan="2" align="center">
                            <?php
                            echo "<img src='../Imagens/".$_GET['img']."' style='height: 250px; width:250px;'/>";
                            echo "<input name='img' type='hidden' value='".$_GET['img']."'/>";
                            ?>
                        </td>
                        <td>
                            <?php
                            
                            echo "<input name='sapato' type='hidden' value='".$_GET['sapato']."'/>";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">Número:</td>
                        <td>
                            <select name="numSapato">
                                <option selected>Selecione</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                                <option value="32">32</option>
                                <option value="33">33</option>
                                <option value="34">34</option>
                                <option value="35">35</option>
                                <option value="36">36</option>
                                <option value="37">37</option>
                                <option value="38">38</option>
                                <option value="39">39</option>
                                <option value="40">40</option>
                                <option value="41">41</option>
                                <option value="42">42</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">Nome:</td>
                        <td><input name="nome" type="text" placeholder="Nome"/></td>
                    </tr>
                    <tr>
                        <td align="right">Cpf:</td>
                        <td><input name="cpf" id="cpf" type="text"/></td>
                    </tr>
                    <tr>
                        <td align="right">Telefone:</td>
                        <td><input name="tel" id="tel" type="tel"/></td>
                    </tr>
                    <tr>
                        <td align="right">E-mail:</td>
                        <td><input name="email" type="text"/></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" value="Reservar"/></td>
                    </tr>
                </table>
                
            </form>
        </div>
    </body>
</html>
