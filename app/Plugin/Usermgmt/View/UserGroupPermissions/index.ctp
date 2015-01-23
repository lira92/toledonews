<?php
echo $this->Html->script('/usermgmt/js/umupdate');

//Array ( [-2] => Selecionar Controller [-1] => Todos [0] => Anuncios [1] => Banners [2] => Comentarios [3] => Imagens [4] => Noticias [5] => Pages [6] => Sites [7] => SitesTipos [8] => Tipos [9] => UserGroupPermissions [10] => UserGroups [11] => Users )

foreach ($allControllers as $key=>$value) {
	// tradução bem podre mas foi uma forma de deixar dinamica.
	//print_r($value);
	if($value == "Comentarios"){
		$allControllers[$key] = "Comentários";
	}
	if($value == "UserGroupPermissions"){
		$allControllers[$key] = "Permissões";
	}
	if($value == "UserGroups"){
		$allControllers[$key] = "Grupos";
	}
	if($value == "Users"){
		$allControllers[$key] = "Usuários";
	}
}

?>
<div class="umtop">
	<?php echo $this->Session->flash(); ?>
	<?php //echo $this->element('dashboard'); ?>
	<div class="um_box_up"></div>
	<div class="um_box_mid">
		<div class="um_box_mid_content">
			<div class="um_box_mid_content_top">
				<div class="umstyle1"  align="left" style="float:left"><?php echo __('Selecione a página para editar as permissões ->');?></div>
				<div style="float:right">
					<span  class="umstyle2"><?php __('Selecione a página para editar as permissões ->');?></span>  <?php echo $this->Form->input("controller",array('type'=>'select','div'=>false,'options'=>$allControllers,'selected'=>$c,'label'=>false,"onchange"=>"window.location='".SITE_URL."permissions/?c='+(this).value"))?>
				</div>
				<div style="clear:both"></div>
			</div>
			<div class="umhr"></div>
			<div class="um_box_mid_content_mid" id="permissions">
		<?php   if (!empty($controllers)) { ?>
					<input type="hidden" id="BASE_URL" value="<?php echo SITE_URL?>">
					<input type="hidden" id="groups" value="<?php echo $groups?>">
					<table cellspacing="0" cellpadding="0" width="100%" border="0">
						<thead>
							<tr>
								<th> <?php echo __("Controller");?> </th>
								<th> <?php echo __("Ação");?> </th>
								<th> <?php echo __("Permissões");?> </th>
								<th> <?php echo __("Operação");?> </th>
							</tr>
						</thead>
						<tbody>
			<?php
					$k=1;
					foreach ($controllers as $key=>$value) {
						if (!empty($value)) {
							for ($i=0; $i<count($value); $i++) {
								if (isset($value[$i])) {
									$action=$value[$i];
									echo $this->Form->create();
									echo $this->Form->hidden('controller',array('id'=>'controller'.$k,'value'=>$key));
									echo $this->Form->hidden('action',array('id'=>'action'.$k,'value'=>$action));
									echo "<tr>";
									echo "<td>";
									echo __($key);
									echo "</td>";
									echo "<td>";
									echo __($action);
									echo "</td>";
									echo "<td>";
									foreach ($user_groups as $user_group) {
										$ugname=$user_group['name'];
										$ugname_alias=$user_group['alias_name'];
										if (isset($value[$action][$ugname_alias]) && $value[$action][$ugname_alias]==1) {
											$checked=true;
										} else {
											$checked=false;
										}
										echo $this->Form->input($ugname,array('id'=>$ugname_alias.$k,'type'=>'checkbox','checked'=>$checked));
									}
									echo "</td>";
									echo "<td>";
									echo $this->Form->button('Salvar', array('type'=>'button','id'=>'mybutton123','name'=>$k,'onClick'=>'javascript:update_fields('.$k.');', 'class'=>'umbtn'));
									echo "<div id='updateDiv".$k."' align='right' class='updateDiv'>&nbsp;</div>";
									echo "</td>";
									echo "</tr>";
									echo $this->Form->end();
									$k++;
								}
							}
						}
					} ?>
					</tbody>
				</table>
		<?php   }   ?>
			</div>
		</div>
	</div>
	<div class="um_box_down"></div>
</div>