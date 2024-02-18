<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arnia</title>
    <link rel="stylesheet" href="./css/styles.css" />
    <link rel="stylesheet" href="styles.js" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    </head>
    <body>
            <header class="global" style="padding-top: 20px;">
                <div class="container container2" style="padding-bottom: 16px;">
                    <div><img src = './images/logotipo.png'></div>
                    <div><button class='buttonBusca' style="margin-right: 140px;">
                        <?php 
                            if (!isset($_GET['nome']) || $_GET['nome'] === '') {
                                echo 'Faça o seu cadastro';
                                } else {
                                        echo $_GET['nome'];
                                        }          
                        ?>
                        </button>
                    </div>
                </div>
                <hr class="linha global container container2"/>
            </header>
            


        <section class="global" style="padding-top: 20px;">
                    <form class="container container2" action="index.php" method="post" style="padding-bottom: 40px;">
                        
                    
                            <div class="container container2" style="padding:0">
                                <div p-0>
                                    <label class=textbusca for="" style="padding-bottom: 8px;">O que você procura?</label><br/>
                                    <input class='busca' type="text" name="tecnologia" placeholder="Digite uma tecnologia">       

                                    <?php if (isset($_POST['tecnologia'])): ?>
                                        <span  class="selecao"><?php echo $_POST['tecnologia'] ?></span>
                                    <?php endif; ?>
                                </div>

                            </div>

                            <div class="container container2">
                                <div>
                                    <label class=textbusca for="" style="padding-bottom: 8px;">Qual sua localização?</label><br/>
                                    <input class='busca' type="text" name="localizacao" placeholder="Digite uma lcoalizacao">       

                                    <?php if (isset($_POST['localizacao'])): ?>
                                        <span> <?php echo $_POST['localizacao'] ?></span>
                                    <?php endif; ?>
                                </div>
                                            
                            </div>


                            <div class="container container2" style="margin-top: 25px">
                                    <input type="submit" class="buttonBusca" value="Buscar vaga">
                                
                                <br> 
                            </div>
                        </form>
            </section>


            <footer class="global">
                <div class="container container2">
                    <div><img src = './images/logotipo.png'></div>
                    <div class="text_footer">
                            <i class="fa-light fa-phone" style="color: #FFD43B;"></i><span class="poppins-regular">Telefone: 4003-5442</span>
                            <p class="poppins-regular">Email: contato@arnia.com.br</p>
                            <p class="poppins-regular">Av. do Contorno, 2905 Santa Efigênia,<br>
                            Belo Horizonte - MG, 30110-080</p>
                        </div>
        
                        <div style="display: inline-flex;">
                            <button class='container container2 buttonBusca botaoFooterEntrar' style="margin-right: 17px;">Entrar</button>
                            <button class='container container2 buttonBusca' style="padding-right: 180px;margin-right: 140px;">Cadastre-se gratuitamente</button>
                        </div>
                    </div>
                </div>
            </footer>
    
        </body>
</html>