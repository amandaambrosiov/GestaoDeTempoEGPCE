<!-- menu lateral começa aqui -->
<nav class="menulateral shadow-lg">
        <div class="btn-expandir">
            <img src="imgs/logoEGP2.png" alt="logo" id="logo">
        </div>
        <!-- os topicos começam aqui  -->
        <ul>
            <li class="menu">
                <a href="index.php">
                    <span class="icon "><i class="bi bi-person-workspace"></i></span>
                    <span class="txt">Apresentação</span>
                </a>
            </li>

            <li class="menu">
                <a href="topico01.php">
                    <span class="icon "><i class="bi bi-1-circle"></i>
                    </span>
                    <span class="txt">Gestão de tempo</i></span>
                </a>
            </li>

            <!-- topico com Subtópico -->
            <button class="dropdown-btn">
                <li class="menu">
                    <a data-valor="topico02.html">
                        <span class="icon space"><i class="bi bi-2-circle"></i></span>
                        <span class="txt">Poder de decisão<i class="bi bi-caret-down-fill barra-sub"></i></span>
                    </a>
                </li>
            </button>
            <!-- subtopicos aqui  -->
            <div class="dropdown-container" id="spy">
                <a href="topico02.html">
                    <i class="fa-regular fa-pen-to-square circulo"></i>Inicío</a>
                <a href="#item1">
                    <i class="fa-regular fa-pen-to-square circulo"></i>Subtópico</a>

            </div>

            <li class="menu">
                <a href="topico03.html">
                    <span class="icon"><i class="bi bi-3-circle"></i></span>
                    <span class="txt">Planejamento de Metas</span>
                </a>
            </li>
            <li class="menu">
                <a href="referencias.html">
                    <span class="icon"><i class="bi bi-book-half"></i></span>
                    <span class="txt">Referências</span>
                </a>
            </li>

        </ul>
    </nav>