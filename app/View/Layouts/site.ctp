<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title><?php echo $title_for_layout; ?></title>
    
    <base href="<?PHP echo $this->webroot; ?>" />
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
	
    <?php
    echo $this->Html->meta('icon');
    echo $this->Html->css(array(
									'site/cake.generic.site', 
									'bootstrap.min',
									'site/new_style',
									'galeria/galleriffic-2'
							));
    echo $this->Html->script(array(
									'site/jquery-1.11.2.min.js', 
									'bootstrap.min',
									'slideshow/jquery-1.3.1.min',
									'slideshow/passadordeimg',
									'galeria/jquery-1.3.2',
									'galeria/jquery.galleriffic',
									'galeria/jquery.opacityrollover'	
							));
    
    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<body>

<div class="container">
	
    <div class="barraazultopo"></div>
    
    <div class="topocinza">
        <?php echo $this->element('site/topo'); ?>
    </div>
    
    <div class="barralaranjatopo">
        <?php echo $this->element('site/header'); ?>
    </div>    
    
    <?php echo $this->element('site/menu'); ?>
    
    <div class="menuservicos">
        <?php echo $this->element('site/menu_servico'); ?>
    </div>    

    <div id="todo">
    	<div id="meio">
    		<div id="miolo">
    			<?php echo $this->Session->flash(); ?>
                
                <?php echo $this->fetch('content'); ?>
    		</div>
            
    		<div id="direita">
    			<?php echo $this->element('direita'); ?>
    		</div>
            
    		<div style="clear: both;"></div>
    	</div>
    </div>
    
    <div id="rodape"><?php echo $this->element('site/footer'); ?></div>
    
    <?PHP echo $this->element('sql_dump'); ?>

</div>    
    
<?PHP echo $this->Html->script(array('site/new_site')); ?>
</body>
</html>