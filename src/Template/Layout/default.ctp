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

<?= $this->Element('topbar') ?>
<?= $this->Element('header') ?>
<?= $this->fetch('content') ?>