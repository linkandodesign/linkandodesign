<section class="section-duvidas" id="sectionDuvidas">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 text-center mb-5">
                <p>Precisa de ajuda? Selecione o serviço e veja no que podemos te ajudar.</p>
            </div>
            <div class="col-12 col-lg-12 text-center mb-5">
            <ul class="nav nav-pills mb-5 justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item mb-4" role="presentation">
                        <button class="mx-2 nav-link active" id="pills-todos-tab" data-bs-toggle="pill" data-bs-target="#pills-todos" type="button" role="tab" aria-controls="pills-todos" aria-selected="true">TODOS</button>
                    </li>
                    <li class="nav-item mb-4" role="presentation">
                        <button class="mx-2 nav-link" id="pills-branding-tab" data-bs-toggle="pill" data-bs-target="#pills-branding" type="button" role="tab" aria-controls="pills-branding" aria-selected="false">BRANDING</button>
                    </li>
                    <li class="nav-item mb-4" role="presentation">
                        <button class="mx-2 nav-link" id="pills-uiux-tab" data-bs-toggle="pill" data-bs-target="#pills-uiux" type="button" role="tab" aria-controls="pills-uiux" aria-selected="false">UI/UX</button>
                    </li>
                    <li class="nav-item mb-4" role="presentation">
                        <button class="mx-2 nav-link" id="pills-socialmedia-tab" data-bs-toggle="pill" data-bs-target="#pills-socialmedia" type="button" role="tab" aria-controls="pills-socialmedia" aria-selected="false">SOCIAL MEDIA</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-todos" role="tabpanel" aria-labelledby="pills-todos-tab" tabindex="0">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-6 mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="pesquisaTodos" onkeyup="pesquisaTodos()" placeholder="Pesquisar em todos">
                                    <label for="pesquisaTodos">Pesquisar em todos...</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12 mb-2">
                                <div class="accordion accordion-flush" id="accordionFlushTodos">
                                    <?php for ($i = 0; $i < count($dados_todos); $i++) { ?>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingTodos">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-todos-<?= $i ?>" aria-expanded="false" aria-controls="flush-collapseTodos">
                                                    <?= $dados_todos[$i]['pergunta']; ?>
                                                </button>
                                            </h2>
                                            <div id="flush-todos-<?= $i ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingTodos" data-bs-parent="#accordionFlushTodos">
                                                <div class="accordion-body text-start">
                                                    <p><?= $dados_todos[$i]['resposta']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-branding" role="tabpanel" aria-labelledby="pills-branding-tab" tabindex="0">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-6 mb-2">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="pesquisaBranding" onkeyup="pesquisaBranding()" placeholder="Pesquisar em branding">
                                    <label for="pesquisaBranding">Pesquisar em branding...</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12 mb-2">
                                <div class="accordion accordion-flush" id="accordionFlushBranding">
                                    <?php for ($i = 0; $i < count($dados_branding); $i++) { ?>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingBranding">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-branding-<?= $i ?>" aria-expanded="false" aria-controls="flush-collapseBranding">
                                                    <?= $dados_branding[$i]['pergunta']; ?>
                                                </button>
                                            </h2>
                                            <div id="flush-branding-<?= $i ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingBranding" data-bs-parent="#accordionFlushBranding">
                                                <div class="accordion-body text-start">
                                                    <p><?= $dados_branding[$i]['resposta']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-uiux" role="tabpanel" aria-labelledby="pills-uiux-tab" tabindex="0">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-6 mb-2">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="pesquisaUiUx" onkeyup="pesquisaUiUx()" placeholder="Pesquisar em UI/UX">
                                    <label for="pesquisaUiUx">Pesquisar em UI/UX...</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12 mb-2">
                                <div class="accordion accordion-flush" id="accordionFlushUiUx">
                                    <?php for ($i = 0; $i < count($dados_uiux); $i++) { ?>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingUiUx">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-uiux-<?= $i ?>" aria-expanded="false" aria-controls="flush-collapseUiUx">
                                                    <?= $dados_uiux[$i]['pergunta']; ?>
                                                </button>
                                            </h2>
                                            <div id="flush-uiux-<?= $i ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingUiUx" data-bs-parent="#accordionFlushUiUx">
                                                <div class="accordion-body text-start">
                                                    <p><?= $dados_uiux[$i]['resposta']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-socialmedia" role="tabpanel" aria-labelledby="pills-socialmedia-tab" tabindex="0">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-6 mb-2">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="pesquisaSocialMedia" onkeyup="pesquisaSocialMedia()" placeholder="Pesquisar em social media">
                                    <label for="pesquisaSocialMedia">Pesquisar em social media...</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12 mb-2">
                                <div class="accordion accordion-flush" id="accordionFlushSocialMedia">
                                    <?php for ($i = 0; $i < count($dados_socialmedia); $i++) { ?>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingSocialMedia">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-socialmedia-<?= $i ?>" aria-expanded="false" aria-controls="flush-collapseSocialMedia">
                                                    <?= $dados_socialmedia[$i]['pergunta']; ?>
                                                </button>
                                            </h2>
                                            <div id="flush-socialmedia-<?= $i ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingSocialMedia" data-bs-parent="#accordionFlushSocialMedia">
                                                <div class="accordion-body text-start">
                                                    <p><?= $dados_socialmedia[$i]['resposta']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 justify-content-center">
            <div class="col-12 col-lg-6 text-center">
                <p>Não encontrou o que procurava? Entre em contato com a gente.</p>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-lg-5 mb-5">
                <div class="card card-contato text-center">
                    <label>E-MAIL</label>
                    <img class="img-fluid my-4" src="<?= IMG ?>/iconecardemail.svg" alt="Ícone e-mail">
                    <p>contato@linkandodesign.com.br</p>
                </div>    
            </div>
            <div class="col-12 col-lg-5 mb-5">
                <a href="https://api.whatsapp.com/send?phone=5544991024165&text=Ol%C3%A1,%20n%C3%A3o%20encontrei%20o%20que%20procurava%20no%20site,%20poderia%20me%20ajudar?" target="_blank">
                <div class="card card-contato text-center">
                        <label>WHATS</label>
                        <img class="img-fluid my-4" src="<?= IMG ?>/iconecardwhats.svg" alt="Ícone whatsapp">
                        <p>44 9102-4165</p>
                    </div>    
                </a>
            </div>
        </div>
    </div>
</section>