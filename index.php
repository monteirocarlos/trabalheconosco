<?php
session_start();
include ("controller/banco.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Trabalhe Conosco -Cybernet</title>
</head>
<body>
    <header>
        <div class="container">
        <a class="grid-4 header_logo" href="https://cybernetprovedor.com">
            <img src="img/logo.png" alt="Logo Cybernet">
        </a>
        </div>
    </header>

    <section class="banner">
    <div class="container">
        <div class="banner_geral">
        <h1 class="banner_texto grid-12">
            Trabalhe Conosco
        </h1>
        <h2 class="banner_texto grid-12">
            Você também quer fazer a diferença na vida das pessoas?<br>
            Sua jornada começa aqui.          
        </h2> 
    </div>
    </div>
    </section>

    <section>
        <div class="container">
            <div class="grid-12 titulo">
                <h1>
                    NOSSAS OPORTUNIDADES
                </h1>
                <div class="botao">
                <table class=" tabela grid-12">
                    <div class="tabela_topo">
                        <tr>
                            <th>Vagas</th>
                            <th>Descrição</th>                      
                        </tr>
                    </div>

                    <div class="tabela_resumo">
                    <?php 
                    $lista_talentos = "SELECT * FROM tb_talentos";
                    $con = $mysqli->query($lista_talentos) or die ($mysqli->error);
                     while($dados = $con->fetch_array()){ ?>
                        <td style="display:none;"><?php echo $dados['id_talento'];?></td>
                        <td><?php echo $dados['candidato'];?></td>
                        <td><?php echo $dados['setor'];?></td>
                     <?php } ?>
                    </div> 
                </table>
                    
                <a class="btn" href="https://www.cybernetprovedor.com">
                    CADASTRE SEU CURRÍCULO
                </a>
            
            </div>
            </div>
        </div>
    </section>
 
    <footer>
        <div class="container">
        <div class="grid-12 footer_texto">
            <h1>Copyright © Cybernet Provedor 2020</h1>
        </div>
        </div>
    </footer>

</body>
</html>

