<div class="umtop">
	<?php echo $this->Session->flash(); ?>
	<?php //echo $this->element('dashboard'); ?>
	<div class="um_box_up"></div>
	<div class="um_box_mid">
		<div class="um_box_mid_content">
			<div class="um_box_mid_content_top">
				<span class="umstyle1"><?php echo __('Adicionar Grupo'); ?></span>
				<span class="umstyle2" style="float:right"><?php echo $this->Html->link(__("Pagína Inicial",true),"/") ?></span>
				<div style="clear:both"></div>
			</div>
			<div class="umhr"></div>
			<div class="um_box_mid_content_mid" id="addgroup">
				<?php echo $this->Form->create('UserGroup', array('action' => 'addGroup')); ?>
				<div>
					<div class="umstyle3"><?php echo __('Nome do grupo');?><font color='red'>*</font></div>
					<div class="umstyle4" ><?php echo $this->Form->input("name" ,array('label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
					<div class="umstyle7">Por ex. sporte</div>
					<div style="clear:both"></div>
				</div>
				<div>
					<div class="umstyle3"><?php echo __('Nome Alias do Grupo');?><font color='red'>*</font></div>
					<div class="umstyle4" ><?php echo $this->Form->input("alias_name" ,array('label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
					<div class="umstyle7">Por ex. Notícias_externas (Não possui spaços)</div>
					<div style="clear:both"></div>
				</div>
				<div>
				<?php   if (!isset($this->request->data['UserGroup']['allowRegistration'])) {
							$this->request->data['UserGroup']['allowRegistration']=true;
						}   ?>
					<div class="umstyle3"><?php echo __('permitir o registo');?></div>
					<div class="umstyle4"><?php echo $this->Form->input("allowRegistration" ,array("type"=>"checkbox",'label' => false))?></div>
					<div style="clear:both"></div>
				</div>
				<div>
					<div class="umstyle3"></div>
					<div class="umstyle4"><?php echo $this->Form->Submit(__('Adicionar Grupo'));?></div>
					<div style="clear:both"></div>
				</div>
				<div>Nota: Se você adicionar um novo grupo, então você deve dar permissões para este grupo recém-criado.</div>
				<?php echo $this->Form->end(); ?>
			</div>
		</div>
	</div>
	<div class="um_box_down"></div>
</div>
<script>
document.getElementById("UserUserGroupId").focus();
</script>