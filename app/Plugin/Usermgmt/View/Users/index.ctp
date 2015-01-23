<div class="umtop">
	<?php echo $this->Session->flash(); ?>
	<?php // echo $this->element('dashboard'); ?>
	<div class="um_box_up"></div>
	<div class="um_box_mid">
		<div class="um_box_mid_content">
			<div class="um_box_mid_content_top">
				<span class="umstyle1"><?php echo __('Usuários'); ?></span>
				<span class="umstyle2" style="float:right"><?php echo $this->Html->link(__("Página inicial",true),"/") ?></span>
				<div style="clear:both"></div>
			</div>
			<div class="umhr"></div>
			<div class="um_box_mid_content_mid" id="index">
				<table cellspacing="0" cellpadding="0" width="100%" border="0" >
					<thead>
						<tr>
							<th><?php echo __('SL');?></th>
							<th><?php echo __('Nome');?></th>
							<th><?php echo __('Nome de usuário');?></th>
							<th><?php echo __('Email');?></th>
							<th><?php echo __('Grupo');?></th>
							<th><?php echo __('Email verificado');?></th>
							<th><?php echo __('Status');?></th>
							<th><?php echo __('Criação');?></th>
							<th><?php echo __('Ações');?></th>
						</tr>
					</thead>
					<tbody>
			<?php       if (!empty($users)) {
							$sl=0;
							foreach ($users as $row) {
								$sl++;
								echo "<tr>";
								echo "<td>".$sl."</td>";
								echo "<td>".h($row['User']['first_name'])." ".h($row['User']['last_name'])."</td>";
								echo "<td>".h($row['User']['username'])."</td>";
								echo "<td>".h($row['User']['email'])."</td>";
								echo "<td>".h($row['UserGroup']['name'])."</td>";
								echo "<td>";
								if ($row['User']['email_verified']==1) {
									echo "Sim";
								} else {
									echo "Não";
								}
								echo"</td>";
								echo "<td>";
								if ($row['User']['active']==1) {
									echo "Ativo";
								} else {
									echo "Inativo";
								}
								echo"</td>";
								echo "<td>".date('d-M-Y',strtotime($row['User']['created']))."</td>";
								echo "<td>";
									echo "<span class='icon'><a href='".$this->Html->url('/viewUser/'.$row['User']['id'])."'><img src='".SITE_URL."usermgmt/img/view.png' border='0' alt='Visualizar' title='Visualizar'></a></span>";
									echo "<span class='icon'><a href='".$this->Html->url('/editUser/'.$row['User']['id'])."'><img src='".SITE_URL."usermgmt/img/edit.png' border='0' alt='Editar' title='Editar'></a></span>";
									echo "<span class='icon'><a href='".$this->Html->url('/changeUserPassword/'.$row['User']['id'])."'><img src='".SITE_URL."usermgmt/img/password.png' border='0' alt='Alterar Senha' title='Alterar Senha'></a></span>";
									if ($row['User']['email_verified']==0) {
										echo "<span class='icon'><a href='".$this->Html->url('/usermgmt/users/verifyEmail/'.$row['User']['id'])."'><img src='".SITE_URL."usermgmt/img/email-verify.png' border='0' alt='Verificar e-mail' title='Verificar e-mail'></a></span>";
									}
									if ($row['User']['active']==0) {
										echo "<span class='icon'><a href='".$this->Html->url('/usermgmt/users/makeActiveInactive/'.$row['User']['id'].'/1')."'><img src='".SITE_URL."usermgmt/img/dis-approve.png' border='0' alt='Ativar' title='Ativar'></a></span>";
									} else {
										echo "<span class='icon'><a href='".$this->Html->url('/usermgmt/users/makeActiveInactive/'.$row['User']['id'].'/0')."'><img src='".SITE_URL."usermgmt/img/approve.png' border='0' alt='Inativar' title='Inativar'></a></span>";
									}
									if ($row['User']['id']!=1 && $row['User']['username']!='Admin') {
										echo $this->Form->postLink($this->Html->image(SITE_URL.'usermgmt/img/delete.png', array("alt" => __('Deletar'), "title" => __('Deletar'))), array('action' => 'deleteUser', $row['User']['id']), array('escape' => false, 'confirm' => __('Tem certeza de que deseja excluir este usuário?')));
									}
								echo "</td>";
								echo "</tr>";
							}
						} else {
							echo "<tr><td colspan=10><br/><br/>Sem dados</td></tr>";
						} ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="um_box_down"></div>
</div>