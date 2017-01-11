<!DOCTYPE html>
<!--[if IE 8]>      <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>      <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
  <head>
    <meta charset="utf-8" />
    <title><?= $this->fetch('before_title') ?><?= $this->fetch('title') ?></title>
    <?= $this->Html->meta('icon') ?>
    <!-- mobile settings -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <?= $this->fetch('meta') ?>

    <!-- CSS -->
    <?= $this->Html->css('KingLoui/BaseKitThemeSmarty.theme.css')?>
    <?= $this->fetch('css') ?>

    <!-- JS -->
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
      <?= $this->fetch('content') ?>
    </div>
    <!-- /wrapper -->

    <!-- scroll to top -->
    <a href="#" id="toTop"></a>

    <!-- preloader -->
    <div id="preloader">
      <div class="inner">
        <span class="loader"></span>
      </div>
    </div>

    <!-- scripts -->
    <script type="text/javascript">var plugin_path = '/king_loui/base_kit_theme_smarty/plugins/';</script>
    <?= $this->Html->script([
      'KingLoui/BaseKitThemeSmarty./plugins/jquery/dist/jquery.min.js',
      'KingLoui/BaseKitThemeSmarty.theme.js'
    ])?>
    <?= $this->fetch('scriptfiles_body') ?>
    <?= $this->fetch('script_body') ?>
  </body>
</html>