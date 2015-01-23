<div class="umtop">
	<?php echo $this->Session->flash(); ?>
	<div class="um_box_up"></div>
	<div class="um_box_mid">
		<div class="um_box_mid_content">
			<div class="um_box_mid_content_top">
				<span class="umstyle1"><?php echo __('Acesso Negado'); ?></span>
				<span class="umstyle2" style="float:right"><?php echo $this->Html->link(__("Página inicial",true),"/") ?></span>
				<div style="clear:both"></div>
			</div>
			<div class="umhr"></div>
			<div class="um_box_mid_content_mid">
				<div class="um_box_mid_content_mid_left">
					Desculpe, você não tem permissão para ver essa página. ir para <span  class="umstyle6"><?php echo $this->Html->link(__("Painel",true),"/dashboard") ?></span><br/><br/>
					<br/><br/>
				</div>
				<div class="um_box_mid_content_mid_right" align="right"></div>
				<div style="clear:both"></div>
			</div>
		</div>
	</div>
	<div class="um_box_down"></div>
</div>