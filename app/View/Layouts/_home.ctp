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
<script type="text/javascript">
	var timeout         = 500;
	var closetimer		= 0;
	var ddmenuitem      = 0;

	function jsddm_open()
	{	jsddm_canceltimer();
		jsddm_close();
		ddmenuitem = $(this).find('ul').eq(0).css('visibility', 'visible');}

	function jsddm_close()
	{	if(ddmenuitem) ddmenuitem.css('visibility', 'hidden');}

	function jsddm_timer()
	{	closetimer = window.setTimeout(jsddm_close, timeout);}

	function jsddm_canceltimer()
	{	if(closetimer)
		{	window.clearTimeout(closetimer);
			closetimer = null;}}

	$(document).ready(function()
	{	$('#jsddm > li').bind('mouseover', jsddm_open);
		$('#jsddm > li').bind('mouseout',  jsddm_timer);});

	document.onclick = jsddm_close;
</script>
 
<!--  esse script assima é para funcionar o menu não deletar --> 


<!-- script abaixo e para funcionar o slidshow,  não sei pq não esta funcionando qualquer coisa usar outro pegar na net -->
	
	
<script type="text/javascript">
$(function() {
	var $imgs = $('#imagesbanner .carouselbanner'),
		$capt = $('#captionsbanner .carouselbanner'),
		$timr = $('#timerbanner');
 
	$imgs.carouFredSel({
		circular: false,
		scroll: {
			easing: 'quadratic',
			duration: 2,
			timeoutDuration: 3000,
			onBefore: function( data ) {
				$capt.trigger( 'slideTo', [ '.' + data.items.visible.first().attr( 'alt' ) ] );
				$timr.stop().animate({
					opacity: 0
				}, data.scroll.duration);
			},
			onAfter: function() {
				$timr.stop().animate({
					opacity: 1
				}, 150);
			}
		},
		auto: {
			progress: '#timerbanner'
		},
		pagination: {
			container: '.pagerbannerr',
			anchorBuilder: function( i ) {
				return '<a class="p' + i + '" href="#"></a>';
			}
		}
	});
	$capt.carouFredSel({
		circular: false,
		auto: false,
		scroll: {
			easing: 'quadratic',
			duration: 2
		}
	});
});

      $(function() {

        var $c = $('#carousel'),
          $w = $(window);

        $c.carouFredSel({
         
          items: 5,
          width: 1000,
          scroll: {
            items: 1,
            duration: 2000,
            timeoutDuration: 0,
            easing: 'linear',
            pauseOnHover: 'immediate'
          }
        });

        
        $w.bind('resize.example', function() {
          var nw = $w.width();
          if (nw < 990) {
            nw = 990;
          }

          

        }).trigger('resize.example');

      });
    </script>
        

</head>
<body>
	
		<div class="barraazultopo"></div>
		<div class="topocinza">
				<div class="meio">

					<object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" height="107" width="297">
					<param name="movie" value="flash/flashnews.swf">
					<param name="quality" value="high">
					<param name="wmode" value="opaque">
					<param name="swfversion" value="7.0.70.0">
					<!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don't want users to see the prompt. -->
					<param name="expressinstall" value="Scripts/expressInstall.swf">
					<!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. --> 
					<!--[if !IE]>-->
					<object type="application/x-shockwave-flash" data="flash/flashnews.swf" height="107" width="297">
					  <!--<![endif]-->
					  <param name="quality" value="high">
					  <param name="wmode" value="opaque">
					  <param name="swfversion" value="7.0.70.0">
					  <param name="expressinstall" value="Scripts/expressInstall.swf">
					  <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
					  <div>
						<h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
						<p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" height="33" width="112"></a></p>
					  </div>
					  <!--[if !IE]>-->
					</object>
					<!--<![endif]-->
				  </object>

				  <img src="img/bandeira.jpg" style="margin-left:30px; margin-right:30px;" height="107" width="117">
				   
				  
					  <object id="FlashID2" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" height="107" width="515">
						<param name="movie" value="flash/publicidadetopo.swf">
						<param name="quality" value="high">
						<param name="wmode" value="opaque">
						<param name="swfversion" value="6.0.65.0">
						<!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don't want users to see the prompt. -->
						<param name="expressinstall" value="Scripts/expressInstall.swf">
						<!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. --> 
						<!--[if !IE]>-->
						<object type="application/x-shockwave-flash" data="flash/publicidadetopo.swf" height="107" width="515">
						  <!--<![endif]-->
						  <param name="quality" value="high">
						  <param name="wmode" value="opaque">
						  <param name="swfversion" value="6.0.65.0">
						  <param name="expressinstall" value="Scripts/expressInstall.swf">
						  <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
						  <div>
							<h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
							<p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" height="33" width="112"></a></p>
						  </div>
						  <!--[if !IE]>-->
						</object>
						<!--<![endif]-->
					  </object>

				</div>
			</div>
			<div class="barralaranjatopo">
				<div class="meio">
					<div style="float:left;">
					<!-- formulario q atualiza a session -->
					<?php 
					$options = $this->MenuSite->isMenuLocal();
					
					echo $this->Form->create('Atualiza', array('url' => '/pages/atualiza')); 
					?>
					<table style="width:100%">
					  <tr>
						<td><?php echo $this->Form->input('local',array('label'=>false,'options' => $options)); ?></td>
						<td><?php echo $this->Form->end('IR', array('style' => 'height:15px;')); ?></td> 
					
					  </tr>
					  
					</table>
					
					
					
					</div>
					<a href="princigaleria.php?idcategoria=50">
					<img src="img/horoscopo.png" class="horoscopo" style="margin-right:150px; border-left:0px;"></a>

					<a href="princigaleria.php?idcategoria=52">
					<img src="img/clima_tempo.png" class="horoscopo"></a>

				</div>
			</div>
			<?php echo $this->element('menuSite'); ?>

			<div class="barraazul" style="height:4px;"></div>
			<div class="menuservicos">
				<div class="meio">

					<a href="princigaleria.php?idcategoria=42" style="float:left;">
						<div class="servico23">
						<p class="menuservico">Happy Hour</p>
						<img src="img/happy.jpg" style="margin-top:0px;">
					</div></a>

					<a href="princigaleria.php?idcategoria=41" style="float:left;">
						<div class="servico23">
						<p class="menuservico">Compras</p>
						<img src="img/compras.jpg" style="margin-top:0px;">
					</div></a>

					<a href="princigaleria.php?idcategoria=40" style="float:left;">
						<div class="servico23">
						<p class="menuservico">Onde Ficar</p>
						<img src="img/ficar.jpg" style="margin-top:0px;">
					</div></a>

					<a href="princigaleria.php?idcategoria=39" style="float:left;">
						<div class="servico23">
						<p class="menuservico">Saúde</p>
						<img src="img/saude.jpg" style="margin-top:0px;">
					</div></a>

					<a href="princigaleria.php?idcategoria=38" style="float:left;">
						<div class="servico23">
						<p class="menuservico">Como Chegar</p>
						<img src="img/chegar.jpg" style="margin-top:0px;">
					</div></a>

					<a href="princigaleria.php?idcategoria=37" style="float:left;">
						<div class="servico23">
						<p class="menuservico">Telefones Úteis</p>
						<img src="img/fones.jpg" style="margin-top:0px;">
					</div></a>


				</div>
			</div>
			<div class="barraazul" style="height:4px;"></div>
	
<div id="todo">
	

	<div id="meio">
		

		<div id="miolo">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		
		</div>
-
		<div id="direita">
			<?php echo $this->element('direita'); ?>
		</div>
		<div style="clear: both;"></div>
	</div>

	
</div>
		<div id="rodape">
			<div class="meio">
				<div style="clear:both; height:50px;"></div>
					
					<div class="shellrodape">
					<p style="margin-bottom:8px;">Notícias</p>
					<ul class="menurodape">
											<li class="menurodape"><a href="princigaleria.php?idcategoria=13">
							Agronegócios					</a></li>

											<li class="menurodape"><a href="princigaleria.php?idcategoria=1">
							Brasil/Mundo					</a></li>

											<li class="menurodape"><a href="princigaleria.php?idcategoria=8">
							Carros 					</a></li>

											<li class="menurodape"><a href="princigaleria.php?idcategoria=9">
							Economia					</a></li>

											<li class="menurodape"><a href="princigaleria.php?idcategoria=12">
							Educação/Vestibular					</a></li>

											<li class="menurodape"><a href="princigaleria.php?idcategoria=11">
							Emprego					</a></li>

											<li class="menurodape"><a href="princigaleria.php?idcategoria=14">
							Loterias					</a></li>

											<li class="menurodape"><a href="princigaleria.php?idcategoria=10">
							Política					</a></li>

											<li class="menurodape"><a href="princigaleria.php?idcategoria=6">
							Região Oeste/Paraná					</a></li>

											<li class="menurodape"><a href="princigaleria.php?idcategoria=7">
							Toledo/Bairros					</a></li>

											<li class="menurodape"><a href="princigaleria.php?idcategoria=15">
							Trâsito					</a></li>

									</ul>
					
					</div>

					
					<div class="shellrodape">
					<p style="margin-bottom:8px;">Esportes</p>
					<ul class="menurodape">
											<li class="menurodape"><a href="princigaleria.php?idcategoria=20">
							Basquetebol					</a></li>

											<li class="menurodape"><a href="princigaleria.php?idcategoria=22">
							Brasileirão					</a></li>

											<li class="menurodape"><a href="princigaleria.php?idcategoria=24">
							Campeonato Europeu					</a></li>

											<li class="menurodape"><a href="princigaleria.php?idcategoria=16">
							Futebol					</a></li>

											<li class="menurodape"><a href="princigaleria.php?idcategoria=19">
							futsal					</a></li>

											<li class="menurodape"><a href="princigaleria.php?idcategoria=18">
							Handebol					</a></li>

											<li class="menurodape"><a href="princigaleria.php?idcategoria=23">
							Libertadores da America					</a></li>

											<li class="menurodape"><a href="princigaleria.php?idcategoria=21">
							Lutas					</a></li>

											<li class="menurodape"><a href="princigaleria.php?idcategoria=17">
							Volei					</a></li>

									</ul>
					
					</div>

					
					<div class="shellrodape">
					<p style="margin-bottom:8px;">Entretenimento</p>
					<ul class="menurodape">
											<li class="menurodape"><a href="princigaleria.php?idcategoria=29">
							Agenda de Eventos					</a></li>

											<li class="menurodape"><a href="princigaleria.php?idcategoria=34">
							Bichos					</a></li>

											<li class="menurodape"><a href="princigaleria.php?idcategoria=35">
							Casa/Jardins					</a></li>

											<li class="menurodape"><a href="princigaleria.php?idcategoria=31">
							Casamento/Noivas					</a></li>

											<li class="menurodape"><a href="princigaleria.php?idcategoria=32">
							Cinema					</a></li>

											<li class="menurodape"><a href="princigaleria.php?idcategoria=25">
							Humor					</a></li>

											<li class="menurodape"><a href="princigaleria.php?idcategoria=33">
							Moda e Beleza					</a></li>

											<li class="menurodape"><a href="princigaleria.php?idcategoria=36">
							Novelas					</a></li>

											<li class="menurodape"><a href="princigaleria.php?idcategoria=26">
							Receitas e Dietas					</a></li>

											<li class="menurodape"><a href="princigaleria.php?idcategoria=28">
							Teatro/Cultura					</a></li>

											<li class="menurodape"><a href="princigaleria.php?idcategoria=30">
							Viagem					</a></li>

									</ul>
					
					</div>

					
					<div class="shellrodape">
					<p style="margin-bottom:8px;">Serviços</p>
					<ul class="menurodape">
											<li class="menurodape"><a href="princigaleria.php?idcategoria=38">
							Como Chegar					</a></li>

											<li class="menurodape"><a href="princigaleria.php?idcategoria=41">
							Compras					</a></li>

											<li class="menurodape"><a href="princigaleria.php?idcategoria=5">
							Emergência					</a></li>

											<li class="menurodape"><a href="princigaleria.php?idcategoria=42">
							Happy Houer					</a></li>

											<li class="menurodape"><a href="princigaleria.php?idcategoria=47">
							Horóscopo					</a></li>

											<li class="menurodape"><a href="princigaleria.php?idcategoria=40">
							Onde Ficar					</a></li>

											<li class="menurodape"><a href="princigaleria.php?idcategoria=46">
							Previsão do Tempo					</a></li>

											<li class="menurodape"><a href="princigaleria.php?idcategoria=39">
							Saúde					</a></li>

											<li class="menurodape"><a href="princigaleria.php?idcategoria=37">
							Telefones Utéis					</a></li>

									</ul>
					
					</div>

					
					<div class="shellrodape">
					<p style="margin-bottom:8px;">Colunistas</p>
					<ul class="menurodape">
											<li class="menurodape"><a href="princigaleria.php?idcategoria=44">
							Bijubinha					</a></li>

											<li class="menurodape"><a href="princigaleria.php?idcategoria=45">
							Dona Elena					</a></li>

											<li class="menurodape"><a href="princigaleria.php?idcategoria=43">
							Roberto Roberto					</a></li>

									</ul>
					
					</div>

				
			<img src="img/logorodape.png" class="logorodape">

			<div style="clear:both; background:white; height:3px;"></div>
			
			<div style="width:100%; text-align:center;">
			</div>

			</div>


		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>

	


</body>
</html>