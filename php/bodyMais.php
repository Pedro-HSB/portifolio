<style>
    .mostrar_tecnologia,
    .mostrar_linguagem,
    .mostrar_software {

        display: none;
        /* position: fixed;
        bottom: 10%;
        right: 20%;
        width: 200px;
        height: 100px; */
    }

    #tecnologia:hover .mostrar_tecnologia {
        display: block;
    }

    #linguagem:hover .mostrar_linguagem {
        display: block;
    }

    #software:hover .mostrar_software {
        display: block;
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="col">foto</div>
            <div class="col">
                <h2>Mais de Mim</h2>
                <p>Ola, sou o pedro, tenho 19 anos, moro em Sao paulo, atualmente estou na fatec no primeiro semestre.</p>
                <p>estou matriculado no curso de Desenvolvimento De Sofware Multi-plataforma,
                    ainda nao tive uma primeira oportunidade po% height: 10%;venho trabalhando em <a href="./projetos.php">meus projetos</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="mostrar_tecnologia position-relative">
                </div>
            </div>
            <div class="col">
                <h2>Minha trajetória</h2>
                <p>
                    comecei a estudar sobre tecnologia a pouco tempo, cerca de 3 anos, comecei com Desenvolvimento de sistemas,
                    passei para tecnioco em informatica e estou agora estou na fatec
                </p>
                <p>
                    na falta de experiencia profissional, ja tive diversas experiencias dentro do tecnico,
                    conheci diversas coisas novas.
                <ul>
                    <div class="tecnologia" id="tecnologia" onmousemove="mostrar()">
                        <li>tecnologias</li>
                    </div>
                    <div class="linguagem " id="linguagem">
                        <li>linguagens</li>
                        <div class="mostrar_linguagem position-relative">
                            <div class="card opacity-50 position-absolute top-0 start-100 translate-middle" style="width: 30%;height: 10%;">
                                <div class="card-header">
                                    Featured
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">An item</li>
                                    <li class="list-group-item">A second item</li>
                                    <li class="list-group-item">A third item</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="software" id="software">
                        <li>softwares</li>
                        <div class="mostrar_software position-relative ">
                            <div class="card opacity-50 position-absolute top-0 start-100 translate-middle" style="width: 30%;height: 10%;">
                                <div class="card-header">
                                    Featured
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">An item</li>
                                    <li class="list-group-item">A second item</li>
                                    <li class="list-group-item">A third item</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </ul>
                conheci e aprendi com diversos profissionais exelentes tambem.
                </p>
            </div>
        </div>
    </div>
</body>
<script>
    function mostrar() {
        let teste =document.getElementById("tecnologia");
        teste.innerHTML=`<div class="
            card opacity - 50 position - absolute top - 0 start - 100 translate - middle " style="
            width: 30 % ; height: 10 % ;
            ">

            <
            ul class = "list-group list-group-flush" >
            <
            li class = "list-group-item" > An item < /li> <
            li class = "list-group-item" > A second item < /li> <
            li class = "list-group-item" > A third item < /li> <
            /ul> <
            /div>`
        }
</script>