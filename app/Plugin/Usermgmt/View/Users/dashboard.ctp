<div class="umtop">
	<?php echo $this->Session->flash(); ?>
	<?php // echo $this->element('dashboard'); ?>
	<div class="um_box_up"></div>
	<div class="um_box_mid">
		<div class="um_box_mid_content">
			<div class="um_box_mid_content_top">
				<span class="umstyle1"><?php echo __('Painel'); ?></span>
				<span class="umstyle2" style="float:right"><?php echo $this->Html->link(__("Página inicial",true),"/") ?></span>
				<div style="clear:both"></div>
			</div>
			<div class="umhr"></div>
			<div class="um_box_mid_content_mid">
				<div class="um_box_mid_content_mid_left">
					Olá. <?php echo h($user['User']['first_name']).' '.h($user['User']['last_name']); ?>
					<br/><br/>
			<?php   if ($this->UserAuth->getGroupName()=='Admin') { ?>
						<span  class="umstyle6"><?php echo $this->Html->link(__("Adicionar Usuário",true),"/addUser") ?></span><br/><br/>
						<span  class="umstyle6"><?php echo $this->Html->link(__("Usuários",true),"/allUsers") ?></span><br/><br/>
						<span  class="umstyle6"><?php echo $this->Html->link(__("Adicionar Grupo",true),"/addGroup") ?></span><br/><br/>
						<span  class="umstyle6"><?php echo $this->Html->link(__("Grupos",true),"/allGroups") ?></span><br/><br/>
						<span  class="umstyle6"><?php echo $this->Html->link(__("Permições",true),"/permissions") ?></span><br/><br/>
						<span  class="umstyle6"><?php echo $this->Html->link(__("Perfil",true),"/viewUser/".$this->UserAuth->getUserId()) ?></span><br/><br/>
						<span  class="umstyle6"><?php echo $this->Html->link(__("Alterar Perfil",true),"/editUser/".$this->UserAuth->getUserId()) ?></span><br/><br/>
			<?php   } ?>
						<span  class="umstyle6"><?php echo $this->Html->link(__("Alterar Senha",true),"/changePassword") ?></span><br/><br/>
						<span  class="umstyle6"><?php echo $this->Html->link(__("Perfil",true),"/myprofile") ?></span><br/><br/>
				</div>
				<div class="um_box_mid_content_mid_right" align="right"></div>
				<div style="clear:both"></div>
			</div>
		</div>
	</div>
	<div class="um_box_down"></div>
</div>