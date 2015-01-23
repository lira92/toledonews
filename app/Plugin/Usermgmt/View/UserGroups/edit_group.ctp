<div class="umtop">
	<?php echo $this->Session->flash(); ?>
	<?php //echo $this->element('dashboard'); ?>
	<div class="um_box_up"></div>
	<div class="um_box_mid">
		<div class="um_box_mid_content">
			<div class="um_box_mid_content_top">
				<span class="umstyle1"><?php echo __('Editar Grupo'); ?></span>
				<span class="umstyle2" style="float:right"><?php echo $this->Html->link(__("Pagína Inicial",true),"/") ?></span>
				<div style="clear:both"></div>
			</div>
			<div class="umhr"></div>
			<div class="um_box_mid_content_mid" id="addgroup">
				<?php echo $this->Form->create('UserGroup'); ?>
				<?php echo $this->Form->hidden('id')?>
				<div>
					<div class="umstyle3"><?php echo __('Nome do Grupo');?><font color='red'>*</font></div>
					<div class="umstyle4" ><?php echo $this->Form->input("name" ,array('label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
					<div class="umstyle7">por ex. Negócios usuário</div>
					<div style="clear:both"></div>
				</div>
				<div>
					<div class="umstyle3"><?php echo __('Nome Alias do Grupo');?><font color='red'>*</font></div>
					<div class="umstyle4" ><?php echo $this->Form->input("alias_name" ,array('label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
					<div class="umstyle7">por ex. Business_User (Não deve conter espaço) (Recomendado: não editar)</div>
					<div style="clear:both"></div>
				</div>
				<div>
					<div class="umstyle3"><?php echo __('permitir o registo');?></div>
					<div class="umstyle4"><?php echo $this->Form->input("allowRegistration" ,array("type"=>"checkbox",'label' => false))?></div>
					<div style="clear:both"></div>
				</div>
				<div>
					<div class="umstyle3"></div>
					<div class="umstyle4"><?php echo $this->Form->Submit(__('Atualizar Grupo'));?></div>
					<div style="clear:both"></div>
				</div>
				<?php echo $this->Form->end(); ?>
			</div>
		</div>
	</div>
	<div class="um_box_down"></div>
</div>
<script>
document.getElementById("UserUserGroupId").focus();
</script>