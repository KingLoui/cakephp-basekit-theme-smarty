<?php
$pageTitle = 'BaseKit Theme Twenty Sixteen:';
?>
<!DOCTYPE html>
<!--[if IE 8]>      <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>      <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
  <head>
    <meta charset="utf-8" />
    <title>
      <?= $pageTitle ?>:
          <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <!-- mobile settings -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <?= $this->Html->css('KingLoui/BaseKitThemeSmarty.theme.css') ?>

    <?= $this->Html->css('KingLoui/BaseKitThemeSmarty./plugins/slider.swiper/dist/css/swiper.min.css') ?>
    <?= $this->Html->css('KingLoui/BaseKitThemeSmarty./plugins/font-awesome/4.6.3/css/font-awesome.min.css') ?>

    <?=
      $this->Html->script(
      [
          //'KingLoui/BaseKitThemeSmarty./plugins/jquery/jquery-3.1.0.min.js', 
          'KingLoui/BaseKitThemeSmarty./plugins/jquery/jquery-2.1.4.min.js',
          'KingLoui/BaseKitThemeSmarty./plugins/bootstrap/3.3.7_sass/javascripts/bootstrap.min.js',
          'KingLoui/BaseKitThemeSmarty./plugins/slider.swiper/dist/js/swiper.min.js',
          'KingLoui/BaseKitThemeSmarty.theme.js',
          'KingLoui/BaseKitThemeSmarty.view/demo.swiper_slider.js',
      ], 
      ['block' => 'scriptfiles_body'])
    ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script_head') ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="smoothscroll enable-animation">

    <!-- wrapper -->
    <div id="wrapper">
      <div id="header" class="sticky header-md dark clearfix">
        <header id="topNav">
          <div class="container">

            <!-- Mobile Menu Button -->
            <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
              <i class="fa fa-bars"></i>
            </button>
            <!-- Logo -->
            <?= $this->Html->link('BaseKit', ['controller' => 'Pages', 'action' => 'display', 'home'], ['class' => 'logo pull-left'])?>

            <?= $this->element('demo/menu_demo') ?>
          </div>
        </header>
      </div>

      <?= $this->fetch('content') ?>

      <?= $this->element('demo/footer_demo') ?>
      <!-- /FOOTER -->

    </div>
    <!-- /wrapper -->

    <!-- SCROLL TO TOP -->
    <a href="#" id="toTop"></a>

    <!-- PRELOADER -->
    <div id="preloader">
      <div class="inner">
        <span class="loader"></span>
      </div>
    </div>


    <script type="text/javascript">var plugin_path = '/king_loui/base_kit_theme_twenty_sixteen/plugins/';</script>
    <?= $this->fetch('scriptfiles_body') ?>
    <?= $this->fetch('script_body') ?>
  </body>
</html>