<section class="global" style="padding-top: 20px;">
                    <form class="container container2" action="index.php" method="post" style="padding-bottom: 10px;">
                        
                    
                            <div class="container container2" style="padding:0">
                                <div p-0>
                                    <label class=textbusca for="" style="padding-bottom: 8px;">O que você procura?</label><br/>
                                    <input class='busca' type="text" name="tecnologia" placeholder="Digite uma tecnologia">       

                                </div>

                            </div>
                               
                                     
                            <div class="container container2">
                                <div>
                                    <label class=textbusca for="" style="padding-bottom: 8px;">Qual sua localização?</label><br/>
                                    
                                    <input class='busca' type="text" name="localizacao" placeholder="Digite uma localizacao">       

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
                        <div class="container container2">
                        <?php if (isset($_POST['tecnologia'])): ?>
                                        <span  class="selecao" ><?php echo $_POST['tecnologia'] ?></span>
                                    <?php endif; ?>
                        </div>
            </section>


            <section>
    <div class="container d-flex mt-1">
        <div class="col-3">
            <div>
                <span class="spanVagas">Vagas em React</span>
                <p class="pspan">225 vagas encontradas</p>
            </div>
            <div class="rounded-4 border colfiltro">
                <div class="m-4">
                    <div class="d-flex">
                        <span class="titulo">Filtre sua busca</span>
                    </div>
                    <div id="arrayItens">
                        <h6 class="TextoTitulos">Tecnologias</h6>
                        <?php foreach ($tec as $tecs) {
                            echo "<input class='textovag' type='checkbox' name='$tecs'> $tecs <br>";
                        } ?>

                        <h6 class="TextoTitulos">Tipo de vaga</h6>
                        <?php foreach ($vag as $vagas) {
                            echo "<input class='textovag' type='checkbox' name='$vagas'> $vagas <br>";
                        } ?>

                        <h6 class="TextoTitulos">Regime de trabalho</h6>
                        <?php foreach ($trab as $trabalho) {
                            echo "<input class='textovag' type='checkbox' name='$trabalho'> $trabalho <br>";
                        } ?>

                        <h6 class="TextoTitulos">Tamanho da empresa</h6>
                        <?php foreach ($dimensao as $dimensoes) {
                            echo "<input class='textovag' type='checkbox' name='$dimensoes'> $dimensoes <br>";
                        } ?>

                        <h6 class="TextoTitulos">Nível de experiência</h6>
                        <?php foreach ($exp as $experiencias) {
                            echo "<input class='textovag' type='checkbox' name='$experiencias'> $experiencias <br>";
                        } ?>
                    </div>
                    <div>
                        <button class="btn m-3 botao botaoFiltra">Filtrar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-9">
            <div class="row">
                <?php $i = 1;
                foreach ($jobs as $jobseletor) { ?>
                    <section>
                        <div class="col-sm-4 d-flex col-12 mb-4 infoCard">
                            <div class="info border">
                                <div class="d-flex justify-content-between">
                                    <div class="card-title textoDoCard"><?php echo $jobseletor->cabecalho; ?></div>
                                    <div class="datatexto"><?php echo $jobseletor->data; ?></div>
                                </div>
                                <div class="cardTextoSecundario"><?php echo $jobseletor->legenda; ?></div>
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="m-2 textoOpcoes"><span><?php echo  $jobseletor->selecao1; ?></span></div>
                                        <div class="m-2 textoOpcoes"><span><?php echo  $jobseletor->selecao2; ?></span></div>
                                        <div class="m-2 textoOpcoes"><span><?php echo  $jobseletor->selecao3; ?></span></div>
                                    </div>

                                    <div class="infoVagaTexto">
                                        <div>
                                            <i class="ri-money-dollar-circle-line iconFinan"></i>
                                            <?php echo  $jobseletor->salario; ?>
                                        </div>
                                        <div>
                                            <i class="ri-map-pin-line iconMap"></i>
                                            <?php echo  $jobseletor->local; ?>
                                        </div>
                                        <div>
                                            <i class="ri-computer-line iconDevice"></i>
                                            <?php echo  $jobseletor->opcaoVaga; ?>
                                        </div>
                                    </div>
                                    <div class="textovaga1"><?php echo  $jobseletor->descritivo; ?></div>
                                    <div><span class="vagaTexto">Ver mais detalhes> </span></div>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php $i++;
                } ?>
            </div>
        </div>
    </div>
</section>