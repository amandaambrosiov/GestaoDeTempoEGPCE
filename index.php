<?php
include('layout/header.php');
 ?>
<body>

    <!-- NAV  -->
    <?php
    include('layout/nav.php');
    ?>
    <!-- FIM DA NAV -->

    <!-- menu lateral  -->
    <?php
    include('layout/menu.php');
    ?>

    <div class="all-conteudo">
        <section>
            <div class="main-content container-fluid">



                <div class="row">
                    <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10 col-sm-8 container-fluid">

                        <h2 class="Titulo fw-bolder">Apresentação</h2>
                        <!-- tirei o hr por que o menu não estava ficando sobreposto -->
                        <!-- <hr> -->


                        <p>Bem-vindo ao curso de Gestão do Tempo. Se você tem a
                            percepção de que todas as suas horas passam voando e você nunca
                            realiza todos os planos ou nem consegue planejar nada e apenas lida
                            com as coisas de acordo com a ordem em que aparecem, este curso vai
                            te ajudar a tornar-se um <strong>realizador muito mais eficiente</strong> . Embora não
                            exista
                            uma única forma correta de lidar com o tempo, você aprenderá boas práticas para utilização
                            do
                            seu próprio tempo e talvez passe a percebê-lo de forma diferente. O que importa é que ao
                            final
                            dessa breve jornada espera-se que você possa estar completamente consciente da importância
                            do
                            tempo e possa decidir, de acordo com suas próprias necessidades, se vale a pena mudar sua
                            gestão
                            pessoal do tempo.
                        </p>
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
                                        <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong>
                                        </p>
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
                        <hr> <br>

                        <!-- fim do accordion do davi -->
                        <p class="scrool">Nossos dias e horas são basicamente definidos pela duração do sol, da lua e
                            das
                            estações. Os
                            egípcios resolveram organizar o tempo em calendários com a duração do ano e das horas do dia
                            e,
                            desde então, utilizamos essa referência para organizar nossas vidas. Isso não significa que
                            a
                            nossa relação com o tempo tenha sido sempre a mesma. Todos nós, mas em especial aqueles com
                            mais
                            de trinta anos, percebemos claramente que desde a chegada das novas tecnologias a nossa
                            relação
                            com o tempo mudou drasticamente.
                        </p>


                        <ul class="none">
                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i></i>
                                <h4>
                                    Olá, Nome_Completo bem-vindo ao módulo 01 do curso de Gestão do tempo. Bons estudos!
                                </h4>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </section>


        <!-- Botões de navegação -->
        <div class="text-center">
            <a href="topico01.html" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i
                    class="bi bi-chevron-right"></i></a>
        </div>


        <div id="progress-bar"></div>
    </div>
<?php
include('layout/footer.php');
?>
</body>

</html>