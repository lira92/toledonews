<div id="wrapperbanner">
	<div id="imagesbanner">
		<div class="carouselbanner">
		<?php
		$i=1;
		$banners = $this->MenuSite->bannerSite();
	
		foreach ($banners as $key => $f):
		?>
			
			<img src="app/webroot/img/paginas/<?php echo $f['Pagina']['src']; ?>" alt="cod<?php echo $i; ?>" width="820" height="350" />
			
		<?php
			$i++;
			endforeach;

		?>		
			
		</div>
	</div>
	
	<div id="captionsbanner">
		<div class="carouselbanner">
			
			<?php
			$i=1;
			$banners = $this->MenuSite->bannerSite();
	
			foreach ($banners as $key => $f):
			?>
			<div class="cod<?php echo $i; ?>"><a href="princifinal.php?id=<?php echo $f['Pagina']['id']; ?>" style="color:white;"><?php echo $f['Pagina']['titulo']; ?></a>
				<div class="pagerbanner"></div>
			</div>
			<?php
			$i++;
			endforeach;

			?>
			

		</div>
	</div>
	
</div>
