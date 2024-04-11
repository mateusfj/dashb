<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css?<?= rand() ?>">
    <title>Home</title>
</head>

<body>

    <div id="home">
        <div class="menu-lateral">
            <div class="between">
                <div class="logo-icon display-flex">
                    <a href=""><img src="assets/img/logo-login.png" alt="logo"></a>
                    <i class="bi bi-layout-sidebar-reverse"></i>
                </div>

                <div class="nav-bar">
                    <p class="p-style">Favorites</p>
                    <ul>
                        <li><a href="#"><i class="bi bi-file-text font-weight-bold"></i> Technical Docs</a></li>
                        <li><a href="#"><i class="bi bi-file-text"></i> Campaing Guiedliness</a></li>
                        <li><a href="#"><i class="bi bi-file-text"></i> Important Rules</a></li>
                        <li><a href="#"><i class="bi bi-camera-video"></i> Onboarding</a></li>
                    </ul>
                </div>

                <div class="nav-bar">
                    <p class="p-style">Main Menu</p>
                    <ul>
                        <li><a href="#"><i class="bi bi-house"></i> Dashboard</a></li>
                        <li><a href="#"><i class="bi bi-pie-chart"></i> Campaigns</a></li>
                        <li><a href="#"><i class="bi bi-chat"></i> Chat</a></li>
                        <li><a href="#"><i class="bi bi-life-preserver"></i> Suporte Center</a></li>
                        <li><a href="#"><i class="bi bi-coin"></i> Leads</a></li>
                        <li><a href="#"><i class="bi bi-folder"></i> Archive</a></li>
                    </ul>
                </div>
            </div>
            <div class="between">
                <div class="perfil">
                    <div class="img-adm">
                        <img src="assets/img/perfil1.png" alt="imagem de perfil">
                        <div>
                            <h3>Mateus França</h3>
                            <h6>Administrador</h6>
                        </div>
                    </div>
                    <div class="escuro-mode">
                        <a href=""><i class="bi bi-moon"></i></a>
                    </div>
                </div>
            </div>
        </div>


        <div class="centro">
            <div class="cabecalho">
                <div class="links">
                    <a href="#">Campaigns /</a>
                    <a href="#">Analytics</a>
                </div>
                <div class="procurar">
                    <div>

                    </div>
                    <div>
                        <i class="bi bi-bell"></i>
                    </div>
                </div>
            </div>
            <div class="grafico">
                <h1>Your total revenue</h1>
                <div class="filtro">
                    <h1 class="gradient">$90,239.00</h1>
                    <div class="display">
                        <button><i class="bi bi-calendar4"></i> Select Dates</button>
                        <button><i class="bi bi-funnel-fill"></i> Filters</button>
                    </div>
                </div>
                <div class="display-flex box-grafico">
                    <div class="box">
                        <h2 class="text-box"> New subscritions</h2>
                        <div class="conteudo-grafico">
                            <div class="text-grafico">
                                <div class="flex-span">
                                    <h3>22 </h3>
                                    <span class="spanlf"><i class="bi bi-arrow-up-circle-fill"></i> 15%</span>
                                </div>
                                <p>Comapared to last week</p>
                            </div>
                            <div>
                                <img src="assets/img/grafico01.png" alt="grafico de novas inscriçoes">
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <h2 class="text-box"> New Orders</h2>
                        <div class="conteudo-grafico">
                            <div class="text-grafico">
                                <div class="flex-span">
                                    <h3>320</h3>
                                    <span class="spanc"><i class="bi bi-arrow-up-circle-fill icon"></i> 4%</span>
                                </div>
                                <p>Comapared to last week</p>
                            </div>
                            <div>
                                <img src="assets/img/grafico02.png" alt="grafico de novas inscriçoes">
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <h2 class="text-box"> Avg. order revenue</h2>
                        <div class="conteudo-grafico">
                            <div class="text-grafico">
                                <div class="flex-span">
                                    <h3>$1,080 </h3>
                                    <span class="spanlf"><i class="bi bi-arrow-up-circle-fill"></i> 8%</span>
                                </div>
                                <p>Comapared to last week</p>
                            </div>
                            <div>
                                <img src="assets/img/grafico01.png" alt="grafico de novas inscriçoes">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="campanhas">
                <div class="title-campanha flex">
                    <h2>Recents Campaigns</h2>
                    <a href="#">View All</a>
                </div>
                <div class="box-campanha">
                    <div>
                        <div class="situacao">
                            <p>Draft<span>2</span></p>
                        </div>
                        <div class="boxes">
                            <div class="i-img">
                                <i class="bi bi-facebook"></i>
                                <img src="assets/img/perfils.png" alt="">
                            </div>
                            <h3>10 Simple steps to revollutionise workflows with our product</h3>
                            <div class="progresso">
                                <p class="texto-claro"><span>Start:</span> Not Started</p>
                                <p class="texto-escuro"><span>Ends:</span> Aug 1, 2023</p>
                                <div class="linha"></div>
                            </div>
                            <p class="texto-escuro"> <span> Last updated:</span> Apr 10, 2023</p>
                        </div>
                        <div class="boxes">
                            <div class="i-img">
                                <img class="plataforma-icon" src="assets/img/instagram.png" alt="icone do instagram">
                                <img src="assets/img/perfils.png" alt="">
                            </div>
                            <h3>Beyond Boundaries: Explore our new product</h3>
                            <div class="progresso">
                                <p class="texto-claro"><span>Start:</span> Not Started</p>
                                <p class="texto-escuro"><span>Ends:</span> Aug 1, 2023</p>
                                <div class="linha"></div>
                            </div>
                            <p class="texto-escuro"> <span> Last updated:</span> Apr 10, 2023</p>
                        </div>
                        <div class="add-campaing">
                            <i class="bi bi-plus-lg"></i>
                            <p>Add campaing</p>
                        </div>
                    </div>
                    <div>
                        <div class="situacao">
                            <p>In Progress<span>2</span></p>
                        </div>
                        <div class="boxes">
                            <div class="i-img">
                                <img class="plataforma-icon" src="assets/img/google.png" alt="icone do google">
                                <img class="perfil-icon" src="assets/img/perfils.png" alt="">
                            </div>
                            <h3>Boost your performance: start using our amazing product</h3>
                            <div class="progresso">
                                <p class="texto-escuro"><span>Start:</span> Jun 1, 2023</p>
                                <p class="texto-escuro"><span>Ends:</span> Aug 1, 2023</p>
                                <div class="linha"></div>
                            </div>
                            <p class="texto-escuro"> <span> Last updated:</span> July 10, 2023</p>
                        </div>
                        <div class="boxes">
                            <div class="i-img">
                                <i class="bi bi-facebook"></i>
                                <img src="assets/img/perfils.png" alt="">
                            </div>
                            <h3>Skyrocket your productivity: our product is revealed</h3>
                            <div class="progresso">
                                <p class="texto-claro"><span>Start:Jun 1, 2023</span></p>
                                <p class="texto-escuro"><span>Ends:</span> Sep 30, 2023</p>
                                <div class="linha"></div>
                            </div>
                            <p class="texto-escuro"> <span> Last updated:</span> June 23, 2023</p>
                        </div>
                        <div class="add-campaing">
                            <i class="bi bi-plus-lg"></i>
                            <p>Add campaing</p>
                        </div>
                    </div>
                    <div>
                        <div class="situacao">
                            <p>Archived<span>1</span></p>
                        </div>
                        <div class="boxes">
                            <div class="i-img">
                                <img class="plataforma-icon" src="assets/img/google.png" alt="icone do google">
                                <img src="assets/img/perfils.png" alt="">
                            </div>
                            <h3>10 Simple steps to revollutionise workflows with our product</h3>
                            <div class="progresso">
                                <p class="texto-escuro"><span>Ended:</span> Jun 11, 2023</p>
                                <div class="linha"></div>
                            </div>
                            <p class="texto-escuro"> <span> Last updated:</span> Apr 10, 2023</p>
                        </div>
                        <div class="add-campaing">
                            <i class="bi bi-plus-lg"></i>
                            <p>Add campaing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="direita">
            <p class="p-style">Recent Documents</p>
            <div class="perfil">
                <div class="img-adm">
                    <img class="img-doc" src="assets/img/logo-login.png" alt="imagem de perfil">
                    <div>
                        <h3>Summer Campaing</h3>
                        <h6>Update 2 minutes ago</h6>
                    </div>
                </div>
            </div>
            <div class="perfil">
                <div class="img-adm">
                    <img class="img-doc" src="assets/img/logo-login.png" alt="imagem de perfil">
                    <div>
                        <h3>Inspiration Notes</h3>
                        <h6>Update 5 hours ago</h6>
                    </div>
                </div>
            </div>
            <div class="perfil">
                <div class="img-adm">
                    <img class="img-doc" src="assets/img/logo-login.png" alt="imagem de perfil">
                    <div>
                        <h3>Campaing Moodboard</h3>
                        <h6>Update 8 hours ago</h6>
                    </div>
                </div>
            </div>
            <div class="perfil">
                <div class="img-adm">
                    <img class="img-doc" src="assets/img/logo-login.png" alt="imagem de perfil">
                    <div>
                        <h3>Circular Inpiration</h3>
                        <h6>Update 2 days ago</h6>
                    </div>
                </div>
            </div>
            <div class="perfil">
                <div class="img-adm">
                    <img class="img-doc" src="assets/img/logo-login.png" alt="imagem de perfil">
                    <div>
                        <h3>Untitled</h3>
                        <h6>Update 2 days ago</h6>
                    </div>
                </div>
            </div>
            <div class="perfil">
                <div class="img-adm">
                    <img class="img-doc" src="assets/img/logo-login.png" alt="imagem de perfil">
                    <div>
                        <h3>Test Note</h3>
                        <h6>Update 2 days ago</h6>
                    </div>
                </div>
            </div>
            <div class="perfil">
                <div class="img-adm">
                    <img class="img-doc" src="assets/img/logo-login.png" alt="imagem de perfil">
                    <div>
                        <h3>Concepts</h3>
                        <h6>Update 2 days ago</h6>
                    </div>
                </div>
            </div>
            <div class="perfil">
                <div class="img-adm">
                    <img class="img-doc" src="assets/img/logo-login.png" alt="imagem de perfil">
                    <div>
                        <h3>Luxury Campaing Steps</h3>
                        <h6>Update 5 days ago</h6>
                    </div>
                </div>
            </div>
            <p class="p-style">Team Mates</p>
            <div class="perfil">
                <div class="img-adm">
                    <img src="assets/img/perfil1.png" alt="imagem de perfil">
                    <div>
                        <h3>Ethan</h3>
                        <h6>Product Manager</h6>
                    </div>
                </div>
            </div>
            <div class="perfil">
                <div class="img-adm">
                    <img src="assets/img/perfil1.png" alt="imagem de perfil">
                    <div>
                        <h3>Simone Deniels</h3>
                        <h6>Marketing Maneger</h6>
                    </div>
                </div>
            </div>
            <div class="perfil">
                <div class="img-adm">
                    <img src="assets/img/perfil1.png" alt="imagem de perfil">
                    <div>
                        <h3>Noah Martinez</h3>
                        <h6>CRM Designer</h6>
                    </div>
                </div>
            </div>
            <div class="perfil">
                <div class="img-adm">
                    <img src="assets/img/perfil1.png" alt="imagem de perfil">
                    <div>
                        <h3>Olivia Mitchell</h3>
                        <h6>Designer</h6>
                    </div>
                </div>
            </div>
            <div class="perfil">
                <div class="img-adm">
                    <img src="assets/img/perfil1.png" alt="imagem de perfil">
                    <div>
                        <h3>Liam johnson</h3>
                        <h6>Designer</h6>
                    </div>
                </div>
            </div>
            <div class="perfil">
                <div class="img-adm">
                    <img src="assets/img/perfil1.png" alt="imagem de perfil">
                    <div>
                        <h3>Mateus Sousa</h3>
                        <h6>programmer</h6>
                    </div>
                </div>
            </div>
            <div class="perfil">
                <div class="img-adm">
                    <img src="assets/img/perfil1.png" alt="imagem de perfil">
                    <div>
                        <h3>Avam Willians</h3>
                        <h6>Designer</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>