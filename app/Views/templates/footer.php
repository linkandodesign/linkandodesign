<footer>
    <div class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg text-center mb-5">
                    <img src="<?= IMG ?>/logo-rodape.webp" alt="Logo da Linkando Design no rodapé do site.">
                </div>
            </div>
            <div class="row text-center mt-3 mx-lg-5">
                <div class="col-12 col-lg mt-4 p-0">
                    <p>
                        <a href="mailto:contato@linkandodesign.com.br?subject=Contato através do site&cc=linkandodesign@gmail.com&body=Oi, vim pelo site, gostaria de um atendimento.">
                            <i class="fa-regular fa-envelope me-2 cor-amarela"></i>contato@linkandodesign.com.br
                        </a>
                    </p>
                    </p>
                </div>
                <div class="col-12 col-lg mt-4 p-0">
                    <p>
                        <a href="https://api.whatsapp.com/send?phone=5544991024165&text=Ol%C3%A1,%20vim%20pelo%20site,%20gostaria%20de%20um%20atendimento." target="_blank">
                            <i class="fa-brands fa-whatsapp me-2 cor-amarela"></i>44 9102-4165
                        </a>
                    </p>
                </div>
                <div class="col-12 col-lg mt-4 p-0">
                    <p>
                        <a class="text-center me-4" target="_blank" href="https://www.instagram.com/linkandodesign/">
                            <i class="fa-brands fa-instagram me-2 cor-amarela"></i>@linkandodesign
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="bkg-copy d-flex justify-content-center">
        <div class="align-items-center text-center">
            <p class="copy mb-0"><i class="fa-regular fa-copyright me-2"></i><?= date('Y') ?> Linkando Design - Todos os direitos reservados</p>
        </div>
    </div>
</footer>
<div class="modal-contato">
    <div class="modal fade" tabindex="-1" id="modalContato">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Contato</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <p class="mb-4 text-center"><strong>Como podemos te ajudar?</strong></p>
                    <form class="form-contato has-validation" novalidate id="formContato" onsubmit="formContato(event, this);">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="nomeContato" name="nomeContato" placeholder="Seu nome">
                                    <label for="nomeContato">Seu nome</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating mb-3 position-relative">
                                    <input type="text" class="form-control valida-email" id="emailContato" name="emailContato" placeholder="Seu e-mail" required>
                                    <label for="emailContato">* Seu e-mail</label>
                                    <div class="invalid-tooltip">E-mail inválido.</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating mb-3 position-relative">
                                    <textarea class="form-control" placeholder="Sua mensagem" name="mensagemContato" id="mensagemContato" style="height: 100px" required></textarea>
                                    <label for="mensagemContato">* Sua mensagem</label>
                                    <div class="invalid-tooltip">Campo obrigatório.</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <div class="mensagem-invalido position-relative card-mensagem" id="mensagemInvalido">
                                    <label></label>
                                </div>
                                <div class="mensagem-valido position-relative card-mensagem" id="mensagemValido">
                                    <label></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-6 mb-3">
                                <button type="button" class="btn btn-outline w-100" data-bs-dismiss="modal">Fechar</button>
                            </div>
                            <div class="col-12 col-lg-6 mb-3">
                                <button type="submit" class="btn btn-tema w-100">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="whats">
    <a href="https://api.whatsapp.com/send?phone=5544991024165&text=Ol%C3%A1,%20vim%20pelo%20site,%20gostaria%20de%20um%20atendimento." target="_blank">
        <img class="img-fluid" src="<?= IMG ?>/whats.svg" alt="Whatsapp flutuante para contato com a Linkando Design.">
    </a>
</div>
<script src="https://www.google.com/recaptcha/api.js?render=6Ld6bzgkAAAAAAg2_dNUDcSHb32fTnOUdmNWY1Rc"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/keen-slider@6.7.0/keen-slider.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<script src="<?= JS ?>/all.min.js"></script>
<script src="<?= JS ?>/script.js"></script>
<?php if ($active['orcamento'] == true) { ?>
    <script src="<?= JS ?>/orcamento.js"></script>
<?php } ?>
</body>

</html>