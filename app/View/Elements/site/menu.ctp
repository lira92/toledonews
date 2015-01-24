<nav class="navbar navbar-default mb-10 mt-10">
    <div class="container-fluid">
    	<div class="collapse navbar-collapse">
            <?PHP
            $this->Tree->bootstrap = true;
            $this->Tree->block_start = '<ul class="menu nav navbar-nav">';
            $this->Tree->context = array(
                                    '<a href="%s">%s</a>' => array(
                                        array('url' => 'id'),
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