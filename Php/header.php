<header class="global" style="padding-top: 20px;">
    <div class="container container2" style="padding-bottom: 16px;">
        <div><img src="./images/logotipo.png"></div>
        <div>
            <button class="buttonBusca" style="margin-right: 140px;">
                <?php 
                    if (!isset($_GET['nome']) || $_GET['nome'] === '') {
                        echo 'Faça o seu cadastro';
                    } else {
                        echo "Bem-vindo " . $_GET['nome'];
                    }          
                ?>
            </button>
        </div>
    </div>
    <hr class="linha global container container2"/>
</header>
