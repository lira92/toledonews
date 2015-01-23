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
    echo $this->Html->css(array('site/cake.generic.site','site/clearbox'));
    echo $this->Html->script(array('site/jquery.min','site/jquery.carouFredSel-6.0.4-packed','site/jquery-1.8.2.min'));
    
    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
<body>
	
    <div class="barraazultopo"></div>
    
    <div class="topocinza">
        <?php echo $this->element('site/topo'); ?>
    </div>
    
    <div class="barralaranjatopo">
        <?php echo $this->element('site/header'); ?>
    </div>    
    <?php echo $this->element('menuSite'); ?>    
    <div class="barraazul" style="height:4px;"></div>    
    <div class="menuservicos">
        <?php echo $this->element('site/menu_servico'); ?>
    </div>    
    <div class="barraazul" style="height:4px;"></div>

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
    <?PHP echo $this->Html->script(array('site/new_site.min')); ?>
</body>
</html>