<?php 

  $this->extend('baselayout'); 

  $this->assign('before_title', 'BaseKit: ');

  $this->Html->css(
  [
      'KingLoui/BaseKitThemeSmarty./plugins/swiper/dist/css/swiper.min.css'
  ], 
  ['block' => 'css']);

  $this->Html->script(
  [
      'KingLoui/BaseKitThemeSmarty./plugins/swiper/dist/js/swiper.min.js',
      'KingLoui/BaseKitThemeSmarty.view/demo.swiper_slider.js'
  ], 
  ['block' => 'scriptfiles_body']);

?>

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