<style type="text/css">
body{
	font-family:arial
}

.clear {
	clear:both
}

#gallery {
	position:relative;
	height:360px
}
	#gallery a {
		float:left;
		position:absolute;
	}
	
	#gallery a img {
		border:none;
	}
	
	#gallery a.show {
		z-index:500
	}

	#gallery .caption {
		z-index:600; 
		background-color:#000; 
		color:#ffffff; 
		height:100px; 
		width:100%; 
		position:absolute;
		bottom:0;
	}

	#gallery .caption .content {
		margin:5px
	}
	
	#gallery .caption .content h3 {
		margin:0;
		padding:0;
		color:#1DCCEF;
	}
	

</style>

<div id="gallery">
	<?php
		$banners = $this->MenuSite->bannerSite();
		
		foreach ($banners as $key => $f):
		?>
			<a href="paginas/ver/<?php echo $f['Pagina']['id']; ?>">
				<img src="app/webroot/img/paginas/<?php echo $f['Pagina']['src']; ?>" alt="<?php echo $f['Pagina']['titulo']; ?>" width="920" height="360" title="" alt="" rel="<h3><?php echo $f['Pagina']['titulo']; ?></h3><?php echo $f['Pagina']['subtitulo']; ?>"/>
			</a>
			
			
		<?php
			endforeach;
	?>	
	<div class="caption"><div class="content"></div></div>
</div>
<div class="clear"></div>





