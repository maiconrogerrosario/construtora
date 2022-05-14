<?php $v->layout("_theme"); ?>


<!--OPTIN-->
<div class="contact_content">
    <div class="contact_content container content">
        <div class="contact_content_flex">
            <h2>Entre em Contato Conosco</h2>
            <form action="<?= url("/contato"); ?>" method="post">
                <div class="ajax_response"><?= flash(); ?></div>
                <?= csrf_input(); ?>

                <div class="col-md-6 mb-4 mb-lg-0">
                    <input type="text" name="name" placeholder="Nome:"/>
                </div>

                <div class="col-md-6 mb-4 mb-lg-0">
                    <input type="email" name="email" placeholder="Email:"/>
                </div>

                <div class="col-md-6">
                    <input type="text" name="phone" placeholder="Phone:"/>
                </div>

                <div class="col-md-6">
                    <input type="text" name="message" placeholder="Assunto:"/>
                </div>



                <input type="submit">


            </form>
        </div>
    </div>
</div>


<!--OPTIN-->
<div class="contact_content">
    <div class="contact_content container content">
        <div class="contact_content_flex">
            <h2>Entre em Contato Conosco</h2>
            <form action="<?= url("/cadastrar"); ?>" method="post" enctype="multipart/form-data">
                <div class="ajax_response"><?= flash(); ?></div>
                <?= csrf_input(); ?>
                <div class="col-md-12">
                    <select id="country" name="country"  class="form-control">
                        <option value="setordeatendimento">Setor de Atendimento</option>
                        <option value="sac">SAC</option>
                        <option value="canada">Vendas</option>
                        <option value="administrativo">Administrativo</option>
                        <option value="outros">Outros</option>
                    </select>
                </div>
                <div class="col-md-6 mb-4 mb-lg-0">
                    <input type="text" name="first_name" placeholder="NOME:"/>
                </div>
                <div class="col-md-6">
                    <input type="email" name="email" placeholder="E-MAIL:"/>
                </div>
                <div class="col-md-12">
                    <input type="text" name="assunto" placeholder="ASSUNTO"/>
                </div>
                <div class="col-md-12">
                    <textarea type="text" name="mensagem" placeholder="MENSAGEM" cols="30" rows="10"/></textarea>
                </div>
                <button class="radius">Enviar Mensagem</button>
            </form>
        </div>

        <header class="contact_flex">
                    <h4>Informações sobre Nós</h4>
                    <ul class="list-unstyled footer-link">
                        <li class="d-block mb-3">
                            <span class="d-block text-black">Endereço:</span>
                            <span>Joiville, Brasil</span></li>
                        <li class="d-block mb-3"><span class="d-block text-black">Telefone:</span><span>+55 47 98409-2233</span></li>
                        <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>contato@nicolecontrutora.com.br</span></li>
                    </ul>
        </header>

          </div>
</div>
