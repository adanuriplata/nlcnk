<?php get_header(); ?>
<div class="cnk-hero__container__form__logo is-center">
  <img src='<?php $url = get_template_directory_uri() . "/assets/img/logos/logo-white.png";
            echo esc_url($url); ?>' alt="logo conektica">
</div>
<div class="section section-form">
  <div class="container is-center">
    <p class="is-center">Usa este formulario para ingresar los nuevos Leads que llegán por Facebook, Teléfono o Whatsapp </p>
  </div>
  <div class="form" class="container is-center">
    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
    <script>
      hbspt.forms.create({
        portalId: "5826409",
        formId: "4e50e7a5-828a-4b46-9446-f12fc20a5215"
      });
    </script>
  </div>
</div>