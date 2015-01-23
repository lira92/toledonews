<?php
$cakeDescription = __d('cake_dev', 'Rede News');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css(array('cake.generic','bootstrap','/usermgmt/css/umstyle','/usermgmt/css/styles'));
		echo $this->Html->script(array('/usermgmt/js/script'));
		echo $this->Html->script('ckeditor/ckeditor.js');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>

</head>
<body>

	<div id="container">
		<div id="header">
			<h1>Rede News</h1>
			Você esta logado com. <?php print_r($this->Session->read('UserAuth.User.username')); ?>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>
			<?php echo $this->element('Usermgmt.dashboard'); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			
			<p>
			Sistema gerenciador Rede News
			</p>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>

	


</body>
</html>
