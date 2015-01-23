<div class="umtop">
	<?php echo $this->Session->flash(); ?>
	<?php // echo $this->element('dashboard'); ?>
	<div class="um_box_up"></div>
	<div class="um_box_mid">
		<div class="um_box_mid_content">
			<div class="um_box_mid_content_top">
				<span class="umstyle1"><?php echo __('Detalhes do usuário'); ?></span>
				<span class="umstyle2" style="float:right"><?php echo $this->Html->link(__("Página inicial",true),"/") ?></span>
				<div style="clear:both"></div>
			</div>
			<div class="umhr"></div>
			<div class="um_box_mid_content_mid" id="index">
				<table cellspacing="0" cellpadding="0" width="100%" border="0" >
					<tbody>
			<?php       if (!empty($user)) { ?>
							<tr>
								<td><strong><?php echo __('Id do usuário ');?></strong></td>
								<td><?php echo $user['User']['id']?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Grupo do usuário');?></strong></td>
								<td><?php echo h($user['UserGroup']['name'])?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Nome do usuário');?></strong></td>
								<td><?php echo h($user['User']['username'])?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Primeiro nome');?></strong></td>
								<td><?php echo h($user['User']['first_name'])?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Ultimo nome');?></strong></td>
								<td><?php echo h($user['User']['last_name'])?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Email');?></strong></td>
								<td><?php echo h($user['User']['email'])?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Email Verificado');?></strong></td>
								<td><?php
										if ($user['User']['email_verified']) {
											echo 'Sim';
										} else {
											echo 'Não';
										} ?>
								</td>
							</tr>
							<tr>
								<td><strong><?php echo __('Status');?></strong></td>
								<td><?php
										if ($user['User']['active']) {
											echo 'Ativo';
										} else {
											echo 'Inativo';
										} ?>
								</td>
							</tr>
							<tr>
								<td><strong><?php echo __('Endereço de IP');?></strong></td>
								<td><?php echo h($user['User']['ip_address'])?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Criado');?></strong></td>
								<td><?php echo date('d-M-Y',strtotime($user['User']['created']))?></td>
							</tr>
				<?php   } else {
							echo "<tr><td colspan=2><br/><br/>Sem registros</td></tr>";
						} ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="um_box_down"></div>
</div>