<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

//		echo $this->Html->css('cake.generic');
		 echo $this->Html->css(array('fonts','bootstrap.min','estilo_carrucel','estilo_general','boostrap-submenu.min','boostrap-theme.min','boostrap-combobox'));
	echo $this->Html->script(array('jquery','Main','Carrusel','bootstrap.min','bootstrap-submenu','bootstrap-combobox') );
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<script>
			//	var basePath = "<?php //echo Router::url('/');?>"
	</script>
</head>
<body>

	<div class="social">
			 <ul>
					 <li>
							 <a href="https://www.facebook.com/CIC-UCAB-1626210684296485/timeline" target="_blank" class="icon-facebook"></a>
					 </li>
					 <li>
							 <a href="https://twitter.com/cic_ucab" target="_blank" class="icon-twitter"></a>
					 </li>
					 <li>
							 <a href="mailto:contacto@falconmasters.com" class="icon-youtube"></a>
					 </li>
			 </ul>
	 </div>

	 <div class="container">
 			<div class="row">

 		<?php //echo $this->element(array('header_usu','Marquesina_pc','Modales','Marquesina_cell')); ?>
 		<?php echo $this->element('header_usu'); ?>
 		<?php // echo $this->element('Marquesina_pc'); ?>
 		<?php //echo  $this->element('Modales'); ?>
 		<?php //echo $this->element('Marquesina_cell'); ?>

 			</div>
 			<!--  row primero -->
 	</div>


	<div id="content">

		<?php echo $this->Session->flash(); ?>

		<?php echo $this->fetch('content'); ?>
	</div>



	<div class="container">
			<div class="row">
<?php  echo $this->element('footer_usu'); ?>
</div>
</div>









	<div id="container">
<!--		<div id="header">
			<h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
		</div>-->

	<!--	<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div> -->
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
