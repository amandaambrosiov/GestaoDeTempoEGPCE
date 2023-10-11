<?php
include('layout/header.php');
?>

<body>

    <!-- NAV  -->
    <?php
    include('layout/nav.php');
    ?>
    <!-- FIM DA NAV -->


    <!-- menu lateral começa aqui -->
    <?php
    include('layout/menu.php');
    ?>

    <!-- CONTEUDO INICIO -->
    <div class="all-conteudo">
        <section class="conteiner-principal">
            <div class="main-content container-fluid">
                <div class="row">
                    <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10 col-sm-8 container-fluid">

                        <h2 class="Titulo fw-bolder">A Gestão de Tempo</h2>
                        <!-- tirei o hr por que o menu não estava ficando sobreposto -->
                        <!-- <hr> -->
                        <div class="text-center img-01">
                            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 1:</strong>
                                Representação
                                do tempo na mente humana</p>
                            <div class="zoom">
                                <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                    <img src="imgs/gestão_tempo.png" alt="Imagem que remete a organização" id="img-1">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> banco de imagens
                                gratuitas do canvas, 2020</p>
                        </div>

                        <!-- Imagem 01 - MODAL (Audi)-->
                        <div class="modal fade text-center" id="Imagem01" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/gestão_tempo.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Fonte:</strong> banco de imagens
                                        gratuitas do canvas, 2020</p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 01 - End  (Audi)-->

                        <!-- Importante -->
                        <!-- accordion do davi -->
                        <section class="container">
                            <div class="accordion">

                                <section id="content">
                                    <div class="caixaprincipal" id="tituloimportante">
                                        <div class="div_teste">
                                            <div><i class="bi bi-exclamation-circle"></i> IMPORTANTE </div>

                                            <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                        </div>
                                    </div> <!--caixa Principal-->
                                    <div class="accordion-content" id="importante"><!--caixa secundaria-->
                                        <p class="txt-aviso"><strong class="opacity-75"><strong class="opacity-75">
                                                    Passe o
                                                    mouse acima </strong></strong></p>
                                        <p class="txt-caixasecundaria">O principal objetivo da gestão do tempo é tornar
                                            mais
                                            eficaz a sua relação com
                                            tarefas, compromissos, metas e planejamento de curto, médio e longo prazo.
                                            Quando aliamos a gestão do tempo com os benefícios tecnológicos isso nos
                                            possibilita viver e produzir melhor do que há tempos atrás planejando a vida
                                            com
                                            autonomia e liberdade o que pode gerar resultados a longo prazo que seriam
                                            mais
                                            bem traduzidos como qualidade de vida.
                                        </p>

                                    </div>
                                </section>

                            </div>
                        </section>
                        <hr>


                        <p class="scrool">Note que cada ser humano possui exatamente a mesma
                            quantidade de horas diárias para realizar suas atividades, mas a nossa
                            percepção sobre o tempo pode ser completamente diferente. Já
                            perceberam que o minuto do microondas é diferente do minuto que
                            passamos com alguém que amamos? É essa mudança de percepção
                            sobre o tempo que vai mudar completamente a sua vida e eu vou te
                            ajudar nessa caminhada.
                        </p>



                        <p class="scrool">Tendo tudo isso como base, nas próximas seções deste curso
                            você perceberá os benefícios da gestão do tempo, como visualizar uma
                            nova vida para si mesmo e planejar a sua realização através de
                            objetivos e hábitos.
                        </p>



                        <!-- CITAÇÃO -->
                        <div class="bd-callout bd-callout-success">
                            <p>
                                Provavelmente você conhece alguém <strong>extremamente ativo </strong> que parece fazer
                                o
                                dia durar 50 horas e alguém para a qual o dia parece ter somente 12 horas. Obviamente,
                                elas
                                não conseguem esticar ou encurtar as horas do dia, mas o modo como se relacionam com seu
                                tempo é completamente diferente. Assim, a relação com o tempo é ao mesmo tempo
                                <strong>prática e material</strong> , mas também <strong>emocional</strong> .
                            </p>
                            </p>
                        </div>


                        <!-- começo das questões de fixação -->
                        <div id="base">


                            <div class="accordion accordion-flush" id="accordionFlushExample">

                                <div class="accordion-item">

                                    <h2 class="accordion-header">

                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapse"
                                            aria-expanded="false" aria-controls="flush-collapse" id="titulo">

                                            <i id="puzzle" class="fa-solid fa-puzzle-piece"></i>
                                            TESTE SEUS CONHECIMENTOS
                                </div>
                                </button>

                                </h2>

                                <div id="flush-collapse" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">





                                        <div id="caixa-de-pergunta">

                                            <h4 id="pergunta-principal">Dentre os itens elencados abaixo, qual deles
                                                favorece uma
                                                real administração do tempo?</h4>

                                            <div id="grupo-botao">


                                                <!-- resposta errada -->

                                                <button type="button" class="btn " id="botao-resposta"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal1">Começar a
                                                    fazer
                                                    algo sem antes pensar
                                                    cuidadosamente sobre o mesmo</button>

                                                <!-- Modal com a respota errada -->
                                                <div class="modal fade" id="exampleModal1" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header" id="header-modal">
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"
                                                                    id="botao-fechar"></button>
                                                            </div>
                                                            <div class="modal-body imagem">
                                                                <img id="imagem-erro" src="imgs/ERRO.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- resposta errada -->

                                                <button type="button" class="btn " id="botao-resposta"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal1">Dedicar-se em
                                                    excesso a afazeres ou conversas
                                                    pessoais</button>
                                                <!-- Modal com a reposta errada -->
                                                <div class="modal fade" id="exampleModal1" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header" id="header-modal">
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"
                                                                    id="botao-fechar"></button>
                                                            </div>
                                                            <div class="modal-body imagem">
                                                                <img id="imagem-erro" src="imgs/ERRO.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- resposta certa  -->

                                                <button type="button" class="btn " id="botao-resposta"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal">Reservar a
                                                    última
                                                    hora do seu dia para planejar o
                                                    dia seguinte</button>

                                                <!-- Modal com a respota certa -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header" id="header-modal">
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"
                                                                    id="botao-fechar"></button>
                                                            </div>
                                                            <div class="modal-body imagem">
                                                                <img id="imagem-acerto" src="imgs/ACERTO.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <!-- resposta errada -->

                                                <button type="button" class="btn" id="botao-resposta"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal1">Abandonar um
                                                    trabalho antes de
                                                    terminá-lo

                                                </button>
                                                <!-- Modal com resposta errada -->
                                                <div class="modal fade" id="exampleModal1" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header" id="header-modal">
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"
                                                                    id="botao-fechar"></button>
                                                            </div>
                                                            <div class="modal-body imagem">
                                                                <img id="imagem-erro" src="imgs/ERRO.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- final da questao de fixacao -->

                        <!--Movimento-->
                        <!-- aqui teria uma transição com  wow.js (o texto vem do lado direto) -->
                        <div>
                            <ul class="none mt-3">
                                <li class="img-fluid">
                                    <p>
                                        A consequência imediata no fato de alguém conseguir o melhor aproveitamento do
                                        seu
                                        dia é que essas pessoas geralmente conseguem obter melhores resultados relação à
                                        execução das suas tarefas e atividades diárias. Mas é também bastante comum que
                                        essas pessoas tenham uma atitude mais empoderada em relação à sua vida e muitas
                                        vezes mais positivas.</p>
                                </li>
                            </ul>
                        </div><br>
                        <p class="scrool"> Pessoas que se relacionam mal com
                            o tempo, por outro lado, podem viver constantemente em estado de
                            reclamação e apegadas ao tempo perdido ou desestimuladas com o
                            seu planejamento futuro.
                        </p><br>

                        <!-- iframe - video -->



                        <div class="container">
                            <iframe width="600" height="340"
                                src="https://www.youtube.com/embed/VcFK4u1IOZQ?si=y8y72OhKbuIWtrl6"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>



                        <!-- accordion do davi -->
                        <!-- fique atento -->
                        <section class="container">
                            <div class="accordion ">

                                <section id="content">
                                    <div class="caixaprincipal" id="titulofiqueatento">
                                        <div class="div_teste">
                                            <div><i class="fa-solid fa-person-circle-exclamation"></i> FIQUE ATENTO
                                            </div>

                                            <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                        </div>

                                    </div> <!--caixa Principal-->
                                    <div class="accordion-content" id="fiqueatento"><!--caixa secundaria-->
                                        <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong>
                                        </p>
                                        <p class="txt-caixasecundaria">Não cabe aqui entrar no mérito de todas as
                                            vantagens
                                            que
                                            uma pessoa que tornou-se milionária pode ter tido em relação ao trabalhador
                                            que
                                            mal consegue sobreviver. O que nos interessa aqui é avaliar se você na
                                            situação
                                            em que se encontra hoje está agindo como um milionário que
                                            <strong>multiplica o
                                                tempo</strong> ou como um sobrevivente que trabalha demais, mas não
                                            alcança
                                            os melhores resultados.
                                        </p>
                                    </div>
                                </section>
                        </section>
                        <br>
                        <p class="scrool">Um dos aspectos mais importantes que separam pessoas <strong>extremamente
                                realizadores</strong> das pessoas que mal conseguem fazer minimamente suas tarefas é
                            a definição de prioridades que, por sua vez, está ligada à sua visão futura. Se você
                            pudesse duplicar as horas do seu dia, como utilizaria esse excedente?</p>

                        <!--Movimento-->
                        <!--texto animado co wow.js -->
                        <div>
                            <ul class="none">
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s">
                                    <p>
                                        A gestão do tempo possibilita uma percepção mais ampla do
                                        planejamento de metas futuras que consequentemente levará a uma
                                        definição clara de prioridades e o estabelecimento de metas. Para tanto, a
                                        autoavaliação do presente é fundamental. Como você tem priorizado as suas
                                        atividades?</p>
                                </li>
                            </ul>
                        </div><br>

                        <!-- accordion do davi -->
                        <!-- reflita -->
                        <section class="container">
                            <div class="accordion ">

                                <section id="content">
                                    <section id="content">
                                        <div class="caixaprincipal" id="tituloreflita">
                                            <div class="div_teste">
                                                <div> <i class="fa-solid fa-head-side-virus fa-xl me-2"></i>REFLITA
                                                </div>
                                                <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                            </div>
                                        </div> <!--caixa Principal-->

                                        <div class="accordion-content" id="reflita">
                                            <!--caixa secundaria com um class universal accordion-content e um id unico reflita-->
                                            <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima
                                                </strong></p>
                                            <p class="txt-caixasecundaria">Não cabe aqui entrar no mérito de todas as
                                                vantagens que uma pessoa que tornou-se milionária pode ter tido em
                                                relação ao trabalhador que mal consegue sobreviver. O que nos interessa
                                                aqui é avaliar se você na situação em que se encontra hoje está agindo
                                                como um milionário que <strong>multiplica o tempo</strong> ou como um
                                                sobrevivente que trabalha demais, mas não alcança os melhores
                                                resultados.</p>
                                        </div>
                                    </section>


                            </div>
                        </section> <br>

                        <p class="scrool">A disciplina para cumprir todas as atividades está relacionada
                            principalmente com três aspectos:
                        </p>

                        <ul class="none">
                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i
                                    class="fa fa-dot-circle text-success"></i>
                                A disposição natural do indivíduo
                            </li>
                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"><i
                                    class="fa fa-dot-circle text-success"></i>
                                A definição clara de atividades e
                            </li>
                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.9s"><i
                                    class="fa fa-dot-circle text-success"></i>
                                A motivação pessoal. </li>
                        </ul>

                        <p class="scrool">Desse modo, algumas pessoas conseguem seguir a disciplina de
                            modo natural e até sentem prazer em executar as atividades
                            programadas. No entanto, não fique chateado se você não for uma
                            dessas pessoas porque elas são uma pequena minoria. Para todas as
                            outras pessoas, a disciplina é o resultado de um bom planejamento e
                            ótima organização das tarefas. Já a manutenção da disciplina no
                            decorrer do tempo exige para todas as pessoas (mesmo aquelas que
                            são altamente disciplinadas) uma motivação permanente que pode ser
                            traduzida como uma visão de mundo que conduz o indivíduo aos seus
                            objetivos. </p>

                        <p class="scrool">Por essa razão, destacamos entre as vantagens da gestão do
                            tempo:</p>
                        <!-- transição com wow.js -->

                        <ol class="scrool" id="txt_final">
                            <li> Uma visão ampla da sua vida e do futuro;</li>
                            <li> Planejamento para atingir metas e aumentar a produtividade e
                                eficiência do tempo;</li>
                            <li> A mudança de hábitos e da mentalidade sobre o tempo. A combinação dessas vantagens,
                                por sua vez, pode trazer felicidade e satisfação pessoal.
                            </li>
                        </ol>

                    </div>

                </div>






        </section>
        <!-- Botões de navegação -->
        <div class="text-center">
            <a href="index.html" class="btn btn-outline-success" role="button" aria-pressed="true"> <i
                    class="fa-solid fa-chevron-left"></i> Voltar </a>
            <a href="topico02.html" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i
                    class="fa-solid fa-chevron-right"></i></a>
        </div>

        <!-- barra de progresso embaixo -->
        <div id="progress-bar"></div>
    </div>

    <!-- BUTTON BACK TO TOP (JAMILLE) -->
    <div id="back_to_top">
        <div id="btn_back">
            <i id="icon_up" class="fa-solid fa-arrow-up"></i>
        </div>
    </div>

<?php
include('layout/footer.php');
?>
</body>

</html>