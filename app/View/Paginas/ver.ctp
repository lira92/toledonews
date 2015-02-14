<script type="text/javascript">
			document.write('<style>.noscript { display: none; }</style>');
		</script>


<div class="secao_miolo lista_noticias" style="padding: 0px 10px;">
    <div class="row">
    	<div class="col-sm-8 blog-main">
    		<div class="blog-post">
                <?PHP if ($Pagina) { ?>
                    
                    <h2 class="blog-post-title"><?PHP echo $Pagina['Pagina']['titulo']; ?></h2>
                    <?PHP echo $Pagina['Pagina']['conteudo']; ?>
                    
                <?PHP } else { ?>
        			<h2 class="blog-post-title">Ops!!!</h2>
                    <p>Ocorreu algum erro, ao carregar a p&aacute;gina.<br />Tente novamente mais tarde.</p>
                <?PHP } ?>
            </div>  
    		<!-- /.blog-post -->
    	</div>
    	<!-- /.blog-sidebar -->
    </div>
	
	
		
		
	
	
</div>
<div id="page">
			<div id="container">
				<!-- Start Advanced Gallery Html Containers -->
				<div id="gallery" class="content">
					<div id="controls" class="controls"></div>
					<div class="slideshow-container">
						<div id="loading" class="loader"></div>
						<div id="slideshow" class="slideshow"></div>
					</div>
					<div id="caption" class="caption-container"></div>
				</div>
				<div id="thumbs" class="navigation">
					<ul class="thumbs noscript">
						<?php
						foreach ($Pagina['Foto'] as $key => $f):
						?>
							<li>
								<a class="thumb" name="leaf" href="/toledonews/app/webroot/img/foto/fotos/<?php echo h($f['src']); ?>" title="<?php echo h($f['titulo']); ?>">
									<img  width = "75" src="/toledonews/app/webroot/img/foto/fotos/thumb_<?php echo h($f['src']); ?>" alt="<?php echo h($f['titulo']); ?>" />
								</a>
								<div class="caption">
									<div class="image-title"><?php echo h($f['titulo']); ?></div>
									<div class="image-desc"><?php echo h($f['descricao']); ?></div>
								</div>
							</li>

						<?php
							endforeach;
						?>
					</ul>
				</div>
				<div style="clear: both;"></div>
			</div>
		</div>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				// We only want these styles applied when javascript is enabled
				$('div.navigation').css({'width' : '300px', 'float' : 'left'});
				$('div.content').css('display', 'block');

				// Initially set opacity on thumbs and add
				// additional styling for hover effect on thumbs
				var onMouseOutOpacity = 0.67;
				$('#thumbs ul.thumbs li').opacityrollover({
					mouseOutOpacity:   onMouseOutOpacity,
					mouseOverOpacity:  1.0,
					fadeSpeed:         'fast',
					exemptionSelector: '.selected'
				});
				
				// Initialize Advanced Galleriffic Gallery
				var gallery = $('#thumbs').galleriffic({
					delay:                     2500,
					numThumbs:                 15,
					preloadAhead:              10,
					enableTopPager:            true,
					enableBottomPager:         true,
					maxPagesToShow:            7,
					imageContainerSel:         '#slideshow',
					controlsContainerSel:      '#controls',
					captionContainerSel:       '#caption',
					loadingContainerSel:       '#loading',
					renderSSControls:          true,
					renderNavControls:         true,
					playLinkText:              'Play Slideshow',
					pauseLinkText:             'Pause Slideshow',
					prevLinkText:              '&lsaquo; Previous Photo',
					nextLinkText:              'Next Photo &rsaquo;',
					nextPageLinkText:          'Next &rsaquo;',
					prevPageLinkText:          '&lsaquo; Prev',
					enableHistory:             false,
					autoStart:                 false,
					syncTransitions:           true,
					defaultTransitionDuration: 900,
					onSlideChange:             function(prevIndex, nextIndex) {
						// 'this' refers to the gallery, which is an extension of $('#thumbs')
						this.find('ul.thumbs').children()
							.eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
							.eq(nextIndex).fadeTo('fast', 1.0);
					},
					onPageTransitionOut:       function(callback) {
						this.fadeTo('fast', 0.0, callback);
					},
					onPageTransitionIn:        function() {
						this.fadeTo('fast', 1.0);
					}
				});
			});
		</script>