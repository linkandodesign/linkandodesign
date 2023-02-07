<section class="section-orcamento" id="sectionOrcamento">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 text-center mb-5 texto-orcamento">
                <p class="mb-5">Para te enviar uma proposta com o orçamento adequado, precisamos que responda algumas perguntas, vamos lá?</p>
                <p>Primeiro, com quem estou falando?</p>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-lg-8">
                <input type="hidden" value="true" id="status">
                <ul class="nav nav-pills steps-orcamento nav-justified" id="pills-tab" role="tablist">
                    <li class="nav-item text-center align-items-center" role="presentation">
                        <a class="nav-link mb-5 mx-auto active" id="pills-1-tab" data-bs-toggle="pill" data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1" aria-selected="true">
                            <label>1</label>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link mb-5 mx-auto" id="pills-2-tab" data-bs-toggle="pill" data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                            <label>2</label>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link mb-5 mx-auto" id="pills-3-tab" data-bs-toggle="pill" data-bs-target="#pills-3" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                            <label>3</label>
                        </a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab" tabindex="0">
                        <form class="form-orcamento-primeiro mt-5 has-validation" novalidate id="primeiroForm" onsubmit="primeiroForm(event, this);">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="form-floating mb-3 position-relative">
                                        <input type="text" class="form-control" id="nomeResponsavel" name="nomeResponsavel" placeholder="Nome do responsável pelo projeto" required>
                                        <label for="nomeResponsavel">* Nome do responsável pelo projeto</label>
                                        <div class="invalid-tooltip">Campo obrigatório.</div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="cargoResponsavel" name="cargoResponsavel" placeholder="Cargo">
                                        <label for="cargoResponsavel">Cargo</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="tempoTrabalho" name="tempoTrabalho" placeholder="A quanto tempo trabalha na empresa?">
                                        <label for="nome">A quanto tempo trabalha na empresa?</label>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="redeSiteEmpresa" name="redeSiteEmpresa" placeholder="Rede social / Site da empresa">
                                        <label for="redeSiteEmpresa">Rede social / Site da empresa</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2 pe-0">
                                    <div class="form-floating mb-3 position-relative">
                                        <select class="form-select" id="paisFone" name="paisFone" aria-label="País">
                                            <option value="+55" selected>BR (+55)</option>
                                            <option value="+1">CA (+1)</option>
                                            <option value="+34">ES (+34)</option>
                                            <option value="+33">FR (+33)</option>
                                            <option value="+39">IT( +39)</option>
                                            <option value="+212">PT (+351)</option>
                                            <option value="+1">US (+1)</option>
                                        </select>
                                        <label for="paisFone">* País</label>
                                        <div class="invalid-tooltip">Campo obrigatório.</div>
                                    </div>
                                </div>
                                <div class="col-10 col-lg-4">
                                    <div class="form-floating mb-3 position-relative">
                                        <input type="text" class="form-control" id="whatsapp" name="whatsapp" placeholder="Whatsapp">
                                        <label for="whatsapp">* Whatsapp</label>
                                        <div class="invalid-tooltip">Campo obrigatório.</div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-floating mb-3 position-relative">
                                        <input type="text" class="form-control" id="email" name="email" placeholder="E-mail">
                                        <label for="email">* E-mail</label>
                                        <div class="invalid-tooltip">E-mail inválido.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
                                        <label for="cidade">Cidade</label>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-floating mb-3 position-relative">
                                        <select class="form-select" id="comoEncontrou" name="comoEncontrou" aria-label="Como nos encontrou?">
                                            <option value="" selected>Selecione um item</option>
                                            <option value="google">Google</option>
                                            <option value="instagram">Instagram</option>
                                            <option value="facebook">Facebook</option>
                                            <option value="linkedin">Linkedin</option>
                                            <option value="indicacao">Indicação</option>
                                        </select>
                                        <label for="comoEncontrou">* Como nos encontrou?</label>
                                        <div class="invalid-tooltip">Campo obrigatório.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col">
                                    <div class="mensagem-info position-relative" id="mensagemInfo1">
                                        <label></label>
                                    </div>
                                    <div class="mensagem-invalido position-relative" id="mensagemInvalido1">
                                        <label></label>
                                    </div>
                                    <div class="mensagem-valido position-relative" id="mensagemValido1">
                                        <label></label>
                                        <div class="progress-bar1"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-end mt-4">
                                <div class="col-12 col-lg-6">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-tema w-100">Próximo</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab" tabindex="0">
                        <form class="form-orcamento-segundo mt-5 has-validation" novalidate id="segundoForm" onsubmit="segundoForm(event, this);">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="nomeEmpresa" name="nomeEmpresa" placeholder="Qual o nome da empresa?">
                                        <label for="nomeEmpresa">Qual o nome da empresa?</label>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="momentoEmpresa" name="momentoEmpresa" aria-label="Qual é o momento da empresa?">
                                            <option selected>Selecione um item</option>
                                            <option value="1">Consolidada</option>
                                            <option value="2">Nova</option>
                                            <option value="3">Reposicionamento</option>
                                        </select>
                                        <label for="momentoEmpresa">Qual é o momento da empresa?</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" placeholder="O que a empresa faz? Se preferir, conte um pouco da história da empresa." name="empresaFaz" id="empresaFaz" style="height: 100px"></textarea>
                                        <label for="empresaFaz">O que a empresa faz? Se preferir, conte um pouco da história da empresa.</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center my-5">
                                <div class="col-12 text-center">
                                    <p><small></small>Qual serviço você procura?</small></p>
                                </div>
                                <div class="col-auto mb-3">
                                    <input type="checkbox" class="btn-check" id="branding" name="branding" autocomplete="off">
                                    <label class="btn btn-tema h-100 px-4 d-flex justify-content-center align-items-center" for="branding">Branding / Identidade Visual</label>
                                </div>
                                <div class="col-auto mb-3">
                                    <input type="checkbox" class="btn-check" id="uiux" name="uiux" autocomplete="off">
                                    <label class="btn btn-tema h-100 px-4 d-flex justify-content-center align-items-center" for="uiux">UI/UX</label>
                                </div>
                                <div class="col-auto mb-3">
                                    <input type="checkbox" class="btn-check" id="socialMedia" name="socialMedia" autocomplete="off">
                                    <label class="btn btn-tema h-100 px-4 d-flex justify-content-center align-items-center" for="socialMedia">Social Media</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" placeholder="O que você espera que esse projeto faça por sua empresa?" name="objetivoProjeto" id="objetivoProjeto" style="height: 100px"></textarea>
                                        <label for="objetivoProjeto">O que você espera que esse projeto faça por sua empresa?</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col">
                                    <div class="mensagem-info position-relative" id="mensagemInfo2">
                                        <label></label>
                                    </div>
                                    <div class="mensagem-invalido position-relative" id="mensagemInvalido2">
                                        <label></label>
                                    </div>
                                    <div class="mensagem-valido position-relative" id="mensagemValido2">
                                        <label></label>
                                        <div class="progress-bar2"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-end mt-4">
                                <div class="col-12 col-lg-6">
                                    <div class="text-center">
                                        <button type="button" onclick="voltarForm(2)" class="btn btn-outline w-100">Voltar</button>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-tema w-100">Próximo</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab" tabindex="0">
                        <form class="form-orcamento-terceiro mt-5 has-validation" novalidate id="terceiroForm" onsubmit="terceiroForm(event, this);">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="pontoContato" name="pontoContato" placeholder="Pontos de contato da empresa">
                                        <label for="pontoContato">Pontos de contato da empresa</label>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="quantosColaboradores" name="quantosColaboradores" placeholder="Quantos colaboradores sua empresa tem?">
                                        <label for="quantosColaboradores">Quantos colaboradores sua empresa tem?</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="orcamentoDisponivel" name="orcamentoDisponivel" placeholder="Qual o orçamento para este projeto?">
                                        <label for="orcamentoDisponivel">Qual o orçamento para este projeto?</label>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="prazo" name="prazo" placeholder="Qual o prazo para o projeto?">
                                        <label for="prazo">Qual o prazo para o projeto?</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" placeholder="Tem mais alguma informação que considere relevante no momento?" name="informacaoAdicional" id="informacaoAdicional" style="height: 100px"></textarea>
                                        <label for="informacaoAdicional">Tem mais alguma informação que considere relevante no momento?</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col">
                                    <div class="mensagem-info position-relative" id="mensagemInfo3">
                                        <label></label>
                                    </div>
                                    <div class="mensagem-invalido position-relative" id="mensagemInvalido3">
                                        <label></label>
                                    </div>
                                    <div class="mensagem-valido position-relative" id="mensagemValido3">
                                        <label></label>
                                        <div class="progress-bar3"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-end mt-4">
                                <div class="col-12 col-lg-6">
                                    <div class="text-center">
                                        <button type="button" onclick="voltarForm(3)" class="btn btn-outline w-100">Voltar</button>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-tema w-100">Finalizar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>