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
            jQuery(function ($) {
                $("#cpf").mask("999.999.999-99");
                $("#tel").mask("(99)99999-9999");
            });
        </script>
        <style>
            img{
                width: 200px;
                height: 200px;
            }
        </style>
    </head>
    <body>

        <div class="reserva">
            <?php
            if(isset($_GET['nomearquivo'])){
                $nomedoarquivo = $_GET['nomearquivo'];
            $linha = file($nomedoarquivo);
            $i =0;
            }
            ?>
            <table>
                <tr>
                    <td colspan="2" align="center">
                        <?php
                        if (isset($_POST["opcao"])) {
                            $opcao = $_POST["opcao"];
                        } elseif (isset($_GET['opcao'])) {
                            $opcao = $_GET["opcao"];
                        } else {
                            $opcao = null;
                        }
                        ?>

                        

                    </td>
                </tr>
                <tr>
                    <td>
                        <form action="" method="post">
                            <?php
                                if(isset($_GET['nomearquivo'])){
                                    $opcao= $linha[$i];
                                    
                                ?>
                                <?php $i++;
                                
                                $img = $linha[$i];
                                } else { ?>
                            <select name="opcao" onchange="this.form.submit()">
                                
                                
                                
                                <option selected>Selecione</option>
                                
                                <option value="Mocassim Converse Preto">Mocassim Converse Preto</option>
                                <option value="Mocassim Converse Cinza">Mocassim Converse Cinza</option>
                                <option value="Sapato Anabela Azul">Sapato Anabela Azul</option>
                                <option value="Tenis Mizuno">Tenis Mizuno</option>
                                <option value="Tenis Nike">Tenis Nike</option>
                                <option value="Sapatenis Nike Roxo">Sapatenis Nike Roxo</option>
                                <?php } ?>
                            </select>

                        </form>
                        <?php
                        $img;
                        switch ($opcao) {
                            case "Mocassim Converse Preto":
                                echo "<img id='imgsapato' src='../Imagens/t11.jpg'/>";
                                $img = "t11.jpg";
                                break;
                            case"Mocassim Converse Cinza":
                                echo "<img id='imgsapato' src='../Imagens/t13.jpg'/>";
                                $img = "t13.jpg";
                                break;
                            case"Sapato Anabela Azul":
                                echo "<img id='imgsapato' src='../Imagens/t15.jpg'/>";
                                $img = "t15.jpg";
                                break;
                            case "Tenis Mizuno":
                                echo "<img id='imgsapato' src='../Imagens/t2.jpg'/>";
                                $img = "t2.jpg";
                                break;
                            case"Tenis Nike":
                                echo "<img id='imgsapato' src='../Imagens/t4.jpg'/>";
                                $img = "t4.jpg";
                                break;
                            case"Sapatenis Nike Roxo":
                                echo "<img id='imgsapato' src='../Imagens/t6.jpg' style='width:300px; height:300px;'/>";
                                $img = "t6.jpg";
                                break;
                            case null:
                                echo "<h1>Reserva de sapatos!</h1>";
                                break;
                        }
                        ?>
                    </td>
                </tr>
            </table>
            <form id="formulario" action="Reserva.php" method="post">
                <table>                
                    <tr>
                        <td align="right">Número:</td>
                        <td>
                            <input type="hidden" name="nomearquivo" value="<?php if(isset($_GET['nomearquivo'])){echo $nomedoarquivo;}?>"/> 
                            <select name="numSapato">
                                <?php
                                if(isset($_GET['nomearquivo'])){
                                ?>
                                <option selected value="<?php echo $linha[$i]; ?>"><?php echo $linha[$i]; ?></option>
                                
                                <?php $i++; } else { ?>
                                <option selected>Selecione</option>
                                <?php } ?>
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
                        <td><input name="nome" value="<?php if(isset($_GET['nomearquivo'])){echo $linha[$i]; $i++;}?>" type="text" placeholder="Nome"/>
                            <input type="hidden" name="sapato" value="<?php echo $opcao; ?>"/>
                            <input type="hidden" name="img" value="<?php echo $img; ?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">Cpf:</td>
                        <td><input name="cpf" id="cpf" value="<?php if(isset($_GET['nomearquivo'])){echo $linha[$i]; $i++;}?>" type="text"/></td>
                    </tr>
                    <tr>
                        <td align="right">Telefone:</td>
                        <td><input name="tel" id="tel" value="<?php if(isset($_GET['nomearquivo'])){echo $linha[$i]; $i++;}?>" type="tel"/></td>
                    </tr>
                    <tr>
                        <td align="right">E-mail:</td>
                        <td><input name="email" value="<?php if(isset($_GET['nomearquivo'])){echo $linha[$i]; $i++;}?>" type="text"/></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" value="Reservar"/></td>
                    </tr>
                </table>
            </form>



        </div>
    </body>
</html>
