<?php get_header(); ?>
<section class="cnk-hero">
  <div class="cnk-hero__container">
    <div class="d-flex">
      <div class="cnk-hero__container__text">
        <div class="cnk-hero__container__text__text">
          <h2>Estrategias <span>creativas</span> para posicionar tu <span> marca </span> en internet</h2>
        </div>
        <div class="cnk-hero__container__text__imgs">
          <div class="hero__point d-none">
            <img src='<?php $url = get_template_directory_uri() . "/assets/img/hero/point.png";
                      echo esc_url($url); ?>' alt="Point Marketing">
          </div>
          <div class="hero__dudes">
            <img src='<?php $url = get_template_directory_uri() . "/assets/img/hero/dudes-3.png";
                      echo esc_url($url); ?>' alt="Estrategias creativas">
          </div>
        </div>
      </div>
      <div class="cnk-hero__container__form"></div>
    </div>
  </div>
</section>

<section class="cnk-services">
  <div class="cnk-services__title">
    <h2>Soluciones integrales de marketing stratégico para tu empresa</h2>
    <!-- <img src="" alt=""> logo -->
  </div>
  <div class="cnk-services__content">

    <div class="d-flex">

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
          'image' => "google-ads",
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

          <div class="cnk-services__content__item">
            <div class="item-text">
              <h3> <?php echo $service['title']?></h3>
              <p> <?php echo $service['description']?></p>
            </div>
            <div class="item-img">
              <img src='<?php echo esc_url($cnkUrl . $service['image'] . ".png"); ?>' alt="<?php echo $service['description']; ?>">
            </div>
          </div>
      <?php }
      ?>

    </div>

  </div>
</section>

<section class="cnk-call-to-action">
  <div class="d-flex cnk-call-to-action__container">
    <p>Conekta con más clientes potenciales
      y aumenta tus ventas</p>
  </div>
</section>
<section class="cnk-partners">
  <div class="cnk-partners__container">
    <div class="cnk-partners__container__title">
      <h2>TECNOLOGÍAS QUE UTILIZAMOS A TU FAVOR</h2>
    </div>
    <div class="cnk-partners__container__technologies">
      <div class="d-flex">

        <?php
        $partners = array(
          "wordpress",
          "magento",
          "rdstation",
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
          <img src='<?php echo esc_url($cnkUrl . $valor . ".png"); ?>' alt='<?php $partners ?>'>
        </div>
        <?php
        }
        ?>

      </div>
    </div>
  </div>
</section>
<section class="cnk-customers">
</section>
<section class="cnk-contact">
  <div class="cnk-contact__container">
    <div class="d-flex">
      <div class="cnk-contact__container__data">
        <div class="cnk-contact__container__data__logo">
          <img src='<?php $url = get_template_directory_uri() . "/assets/img/logo-footer";
                    echo esc_url($url); ?>' alt="Conektica Agencia Creativa">
        </div>
        <div class="cnk-contact__container__data__text">
          <div class="contact-text-container">
            <p>
              Teziutlan Norte 1 B Col. La paz
              Puebla Pue.
              tel:(222) 249 93 41 / (222) 403 87 32
            </p>
          </div>
          <div class="contact-text-social">
            <ul>
              <li>IN</li>
              <li>Fa</li>
              <li>Ins</li>
              <li>Twi</li>
              <li>Beh</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="cnk-contact__container__form"></div>
    </div>
  </div>
  <div class="cnk-contact__footer-phrase">
    <p>
      conekticamos <span>infinitas</span> posibilidades
    </p>
  </div>
</section>


<?php get_footer(); ?>