<?php get_header(); ?>
<section class="cnk-hero section">
  <div class="cnk-hero__container container">
    <div class="d-flex flex-wrap">
      <div class="cnk-hero__container__text">
        <div class="cnk-hero__container__text__text">
          <h2>Estrategias <span class="is-red">creativas</span> para posicionar tu <span class="is-red"> marca </span> en internet</h2>
          <i class="fab fa-facebook"></i>
        </div>
        <div class="cnk-hero__container__text__imgs">
          <div class="hero__point d-none">
            <img src='<?php $url = get_template_directory_uri() . "/assets/img/hero/point.png";
                      echo esc_url($url); ?>' alt="Point Marketing">
          </div>
          <div class="hero__dudes animated fadeInDownBig">
            <img src='<?php $url = get_template_directory_uri() . "/assets/img/hero/dudes-3.png";
                      echo esc_url($url); ?>' alt="Estrategias creativas">
          </div>
        </div>
      </div>
      <div class="cnk-hero__container__form">
        <div class="cnk-hero__container__form__logo is-center">
          <img src='<?php $url = get_template_directory_uri() . "/assets/img/logos/logo-white.png";
                    echo esc_url($url); ?>' alt="logo conektica">
        </div>
        <div class="cnk-hero__container__form__form bg-is-white is-shadow-1">
          <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
          <script>
            hbspt.forms.create({
              portalId: "5826409",
              formId: "abcbd936-0477-4d8c-8b06-44eb9cb18fe7"
            });
          </script>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cnk-services section">
  <div class="cnk-services__container container">
    <div class="cnk-services__title">
      <h2 class="is-center is-light">Soluciones integrales de marketing stratégico <br> para tu empresa</h2>
      <!-- <img src="" alt=""> logo -->
    </div>
    <div class="cnk-services__content is-center">

      <div class="d-flex flex-wrap flex-j-c">

        <?php
        $services = array(
          array(
            'title' =>  "Content Marketing",
            'image' => "content-marketing",
            'description' => "Redactamos contenidos relevantes para tu audiencia e investigamos a tu competencia, análisamos datos y elaboramos estratégia de SEO y SEM."
          ),
          array(
            'title' =>  "Inbound Marketing",
            'image' => "inbound-marketing",
            'description' => "Utilizamos la metodología para atraer, convertir, enganchar y cerrar a tus prospectos clientes."
          ),
          array(
            'title' =>  "Google Ads",
            'image' => "google-ads",
            'description' => "Lo orgánico no es suficiente. Es por ello que somos Google Parthers, para optimizar tu capital y garantizar que tengas retorno de inversión y resultados medibles."
          ),
          array(
            'title' =>  "Redes Sociales",
            'image' => "redes-sociales",
            'description' => "¿Sabías que muchas personas buscan primero tu marca en R.S. antes que en un buscador de internet? . Tener una imagen profesional es vital para toda empresa, conectar con tu audiencia, contar historias y generar engangement,"
          ),
          array(
            'title' =>  "Email Marketing",
            'image' => "email-marketing",
            'description' => "Mantenemos a tus clientes calificados  regresando a tu sitio web, con contenidos de acuerdo a sus intereses. Campañas programadas y segmentadas."
          ),
        );

        $cnkUrl = get_template_directory_uri() . "/assets/img/services/";
        foreach ($services as $service) {
          foreach ($service as $item => $value) ?>

        <div class="cnk-services__content__item d-flex flex-wrap">
          <div class="item-text">
            <h3 class="is-red"> <?php echo $service['title'] ?></h3>
            <p class="is-light is-justify"> <?php echo $service['description'] ?></p>
          </div>
          <div class="item-img">
            <img src='<?php echo esc_url($cnkUrl . $service['image'] . ".png"); ?>' alt="<?php echo $service['title']; ?>">
          </div>
        </div>
        <?php }
        ?>

      </div>

    </div>
  </div>

</section>

<section class="cnk-call-to-action section">
  <div class="cnk-call-to-action__container container">
    <p class="is-center is-white is-bold">COnekta con más clientes potenciales <br>
      y aumenta tus ventas</p>
  </div>
</section>

<section class="cnk-partners section">
  <div class="cnk-partners__container container">
    <div class="cnk-partners__container__title">
      <h3 class="is-medium is-center">TECNOLOGÍAS QUE UTILIZAMOS A TU FAVOR</h3>
    </div>
    <div class="cnk-partners__container__technologies">
      <div class="d-flex flex-wrap flex-a-c">

        <?php
        $partners = array(
          "wordpress",
          "magento",
          "redstation",
          "googleads",
          "facebook",
          "hubspot",
          "mailchimp",
          "shopify",
          "openpay"
        );
        $cnkUrl = get_template_directory_uri() . "/assets/img/techs/";
        foreach ($partners as &$valor) {
          ?>
        <div class="tech-item">
          <img src='<?php echo esc_url($cnkUrl . $valor . ".png"); ?>' alt='<?php echo $valor ?>'>
        </div>
        <?php
        }
        ?>

      </div>
    </div>
  </div>
</section>

<section class="cnk-customers section">
</section>

<section class="cnk-contact section">
  <div class="cnk-contact__container container">
    <div class="d-flex flex-wrap">
      <div class="cnk-contact__container__data">
        <div class="cnk-contact__container__data__logo">
          <!-- <img src='<?php $url = get_template_directory_uri() . "/assets/img/logo-footer";
                          echo esc_url($url); ?>' alt="Conektica Agencia Creativa"> -->
          <img src='https://conektica.com/wp-content/uploads/2019/03/LOGO-CNK-bco-03.png' alt="Conektica Agencia Creativa">
        </div>
        <div class="cnk-contact__container__data__text">
          <div class="contact-text-container">
            <p class="is-light is-white">
              Teziutlan Norte 1 B Col. La paz <br>
              Puebla Pue. <br>
              tel:(222) 249 93 41 / (222) 403 87 32
            </p>
          </div>
          <div class="contact-text-social">
            <ul>
              <li> <a href="https://www.linkedin.com/company/conektica-agencia-de-publicidad/?originalSubdomain=mx"> <img src='<?php $url = get_template_directory_uri() . "/assets/img/ico/ico-link.png"; echo esc_url($url); ?>' alt="" target="_blank"> </a> </li>
              <li> <a href="https://www.facebook.com/conekticapublicidad"> <img src='<?php $url = get_template_directory_uri() . "/assets/img/ico/ico-face.png"; echo esc_url($url); ?>' alt="" target="_blank"> </a> </li>
              <li> <a href="https://www.instagram.com/conektica/"> <img src='<?php $url = get_template_directory_uri() . "/assets/img/ico/ico-inst.png"; echo esc_url($url); ?>' alt="" target="_blank"> </a> </li>
              <li> <a href="https://twitter.com/Conektica"> <img src='<?php $url = get_template_directory_uri() . "/assets/img/ico/ico-tw.png"; echo esc_url($url); ?>' alt="" target="_blank"> </a> </li>
              <li> <a href="https://www.behance.net/conektica"> <img src='<?php $url = get_template_directory_uri() . "/assets/img/ico/ico-be.png"; echo esc_url($url); ?>' alt="" target="_blank"> </a> </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="cnk-contact__container__form bg-is-white">
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
        <script>
          hbspt.forms.create({
            portalId: "5826409",
            formId: "abcbd936-0477-4d8c-8b06-44eb9cb18fe7"
          });
        </script>
      </div>
    </div>
  </div>
  <div class="cnk-contact__footer-phrase is-center">
    <p class="is-bold">
      CONEKTAMOS <span class="is-light">infinitas</span> POSIBILIDADES
    </p>
  </div>
</section>

<?php get_footer(); ?>