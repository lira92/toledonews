<nav class="navbar navbar-default mb-10 mt-10">
    <div class="container-fluid">
    	<div class="collapse navbar-collapse">
            <?PHP
            $this->Tree->bootstrap = true;
            $this->Tree->block_start = '<ul class="menu nav navbar-nav">';
            $this->Tree->context = array(
			
									'<a href="%s " style="color:%s;  font-size: 18px;">%s</a>' 
									
									=> array(
                                        array('url' => 'id'),
										array('color' => 'cor'),
                                        array('text' => 'titulo')
                                    )
            );
            echo $this->Tree->show($MenuSite, 'Menu');
            ?>
    	</div>
    	<!-- /.navbar-collapse -->
    </div>
<!-- /.container-fluid -->
</nav>
<div class="clearfix visible-xs-block"></div>