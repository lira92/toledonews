<div class="umtop">
	<?php echo $this->Session->flash(); ?>
	<?php //echo $this->element('dashboard'); ?>
	<div class="um_box_up"></div>
	<div class="um_box_mid">
		<div class="um_box_mid_content">
			<div class="um_box_mid_content_top">
				<span class="umstyle1"><?php echo __('Grupos'); ?></span>
				<span class="umstyle2" style="float:right"><?php echo $this->Html->link(__("Página Inicial",true),"/") ?></span>
				<div style="clear:both"></div>
			</div>
			<div class="umhr"></div>
			<div class="um_box_mid_content_mid" id="index">
				<table cellspacing="0" cellpadding="0" width="100%" border="0" >
					<thead>
						<tr>
							<th><?php echo __('Grupo Id');?></th>
							<th><?php echo __('Nome');?></th>
							<th><?php echo __('Nome Alias');?></th>
							<th><?php echo __('Permitir registro');?></th>
							<th><?php echo __('Criado');?></th>
							<th><?php echo __('Ações');?></th>
						</tr>
					</thead>
					<tbody>
				<?php   if(!empty($userGroups)) {
							foreach ($userGroups as $row) {
								echo "<tr>";
								echo "<td>".$row['UserGroup']['id']."</td>";
								echo "<td>".h($row['UserGroup']['name'])."</td>";
								echo "<td>".h($row['UserGroup']['alias_name'])."</td>";
								echo "<td>";
								if ($row['UserGroup']['allowRegistration']) {
									echo "Sim";
								} else {
									echo "Não";
								}
								echo"</td>";
								echo "<td>".date('d-M-Y',strtotime($row['UserGroup']['created']))."</td>";
								echo "<td>";
									echo "<span class='icon'><a href='".$this->Html->url('/editGroup/'.$row['UserGroup']['id'])."'><img src='".SITE_URL."usermgmt/img/edit.png' border='0' alt='Edit' title='Editar'></a></span>";
									if ($row['UserGroup']['id']!=1) {
										echo $this->Form->postLink($this->Html->image(SITE_URL.'usermgmt/img/delete.png', array("alt" => __('Delete'), "title" => __('Deletar'))), array('action' => 'deleteGroup', $row['UserGroup']['id']), array('escape' => false, 'confirm' => __('Tem certeza de que deseja excluir este grupo? Excluí-lo será de sua responsabilidade')));
									}
								echo "</td>";
								echo "</tr>";
							}
						} else {
							echo "<tr><td colspan=6><br/><br/>Sem dados</td></tr>";
						} ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="um_box_down"></div>
</div>