<?php
$menus = $this->UserAuth->isMenu();
$dados = array();
foreach ($menus as $key => $f):
	$campo1 = $f['UserGroupPermission']['controller'];
	$dados[$campo1] = array();
	
	foreach ($menus as $f):
		$campo2 = $f['UserGroupPermission']['action'];
		
		if($campo1 == $f['UserGroupPermission']['controller']){
			$dados[$campo1][$campo2] = $campo2;
		}
	endforeach;
endforeach;
?>
	
<div id='cssmenu'>
	<ul>
	   <li class='active'><?php echo $this->Html->link(__("Painel",true),"/dashboard") ?></li>
	   
		<!-- --------------------------------------------------------- -->
		
			<?php if (array_key_exists("Users", $dados)) { ?>			
				<li class='has-sub'><a href='#'>Perfil</a>
					<ul>
						<?php if (isset($dados['Users']['addUser'])) { ?>
							<li><?php echo $this->Html->link(__("Cadastral Perfil",true),"/addUser") ?></li>
						<?php } ?>
						<?php if (isset($dados['Users']['viewUser'])) { ?>
							<li><?php echo $this->Html->link(__("Listar Perfil",true),"/allUsers") ?></li>
						<?php } ?>
						<?php if (isset($dados['Users']['myprofile'])) { ?>
							<li><?php echo $this->Html->link(__("Meu Perfil",true),"/myprofile") ?></li>
						<?php } ?>
						<?php if (isset($dados['Users']['dashboard'])) { ?>	
							<li><?php echo $this->Html->link(__("Painel",true),"/dashboard") ?></li>
						<?php } ?>
						<?php if (isset($dados['Users']['changePassword'])) { ?>	
							<li><?php echo $this->Html->link(__("Alterar Senha",true),"/changePassword") ?></li>
						<?php } ?>
						<?php if (isset($dados['Users']['logout'])) { ?>	
							<li><?php echo $this->Html->link(__("Sair",true),"/logout") ?></li>
						<?php } ?>	
					</ul>
				</li>
			<?php } ?>	
			
			<!-- --------------------------------------------------------- -->
			
			<?php if (array_key_exists("UserGrupos", $dados)) { ?>
				<li class='has-sub'><a href='#'>Grupos</a>
					<ul>
						<?php if (isset($dados['UserGrupos']['addGroup'])) { ?>
							<li><?php echo $this->Html->link(__("Cadastrar Grupo",true),"/addGroup") ?></li>
						<?php } ?>
						<?php if (isset($dados['UserGrupos']['allGroups'])) { ?>
							<li><?php echo $this->Html->link(__("Listar Grupos",true),"/allGroups") ?></li>
						<?php } ?>
					</ul>
				</li>
			<?php } ?>	
			
			<!-- --------------------------------------------------------- -->
			
			<?php if (array_key_exists("UserGroupPermissions", $dados)) { ?>	
				<li><?php echo $this->Html->link(__("Permissões",true),"/permissions") ?></li>	
			<?php } ?>	
			
			<!-- --------------------------------------------------------- -->
			
			<?php if (array_key_exists("Menus", $dados) || array_key_exists("Paginas", $dados) || array_key_exists("Patrocinios", $dados)) { ?>			
				<li class='has-sub'><a href='#'>Site</a>
					<ul>
						<?php if (isset($dados['Menus']['add'])) { ?>
							<li><?php echo $this->Html->link(__("Cadastrar Menu",true),"/menus/add") ?></li>
						<?php } ?>
						<?php if (isset($dados['Menus']['view'])) { ?>
							<li><?php echo $this->Html->link(__("Listar Menus",true),"/menus") ?></li>
						<?php } ?>
						
						<!-- ---------- -->
						
						<?php if (isset($dados['Paginas']['add'])) { ?>
							<li><?php echo $this->Html->link(__("Cadastrar Paginas",true),"/paginas/add") ?></li>
						<?php } ?>
						<?php if (isset($dados['Paginas']['view'])) { ?>
							<li><?php echo $this->Html->link(__("Listar Paginas",true),"/paginas") ?></li>
						<?php } ?>
						
						<!-- ---------- -->
						
						<?php if (isset($dados['Patrocinios']['add'])) { ?>
							<li><?php echo $this->Html->link(__("Cadastrar Patrocinios",true),"/Patrocinios/add") ?></li>
						<?php } ?>
						<?php if (isset($dados['Patrocinios']['view'])) { ?>
							<li><?php echo $this->Html->link(__("Listar Patrocinios",true),"/Patrocinios") ?></li>
						<?php } ?>
						
						
						
						
						
						
					</ul>
				</li>
				
			<?php } ?>	
			
			<!-- --------------------------------------------------------- -->
			
			<?php if (array_key_exists("Tipos", $dados) || array_key_exists("Categorias", $dados) || array_key_exists("Contagens", $dados) || array_key_exists("Ensaios", $dados)) { ?>			
				<li class='has-sub'><a href='#'>Sistema</a>
					<ul>
						<?php if (isset($dados['Tipos']['add'])) { ?>
							<li><?php echo $this->Html->link(__("Cadastrar Tipos",true),"/tipos/add") ?></li>
						<?php } ?>
						<?php if (isset($dados['Tipos']['view'])) { ?>
							<li><?php echo $this->Html->link(__("Listar Tipos",true),"/tipos") ?></li>
						<?php } ?>
						
						<!-- ---------- -->
						
						<?php if (isset($dados['Categorias']['add'])) { ?>
							<li><?php echo $this->Html->link(__("Cadastrar Categorias",true),"/categorias/add") ?></li>
						<?php } ?>
						<?php if (isset($dados['Categorias']['view'])) { ?>
							<li><?php echo $this->Html->link(__("Listar Categorias",true),"/categorias") ?></li>
						<?php } ?>
						
						<!-- ---------- -->
						
						<?php if (isset($dados['Contagens']['view'])) { ?>
							<li><?php echo $this->Html->link(__("Listar Contagens",true),"/contagens") ?></li>
						<?php } ?>
						
						<!-- ---------- -->
						
						<?php if (isset($dados['Ensaios']['add'])) { ?>
							<li><?php echo $this->Html->link(__("Cadastrar Ensaios",true),"/ensaios/add") ?></li>
						<?php } ?>
						<?php if (isset($dados['Ensaios']['view'])) { ?>
							<li><?php echo $this->Html->link(__("Listar Ensaios",true),"/ensaios") ?></li>
						<?php } ?>
						
						
						
						
					</ul>
				</li>
			<?php } ?>
			
			<!-- --------------------------------------------------------- -->
			
			<li><?php echo $this->Html->link(__("Sair",true),"/logout") ?></li>
	   
	</ul>
</div>








<!-- div id="dashboard">
	<div style="float:left"><?php echo $this->Html->link(__("Painel",true),"/dashboard") ?></div>
<?php   if ($this->UserAuth->isAdmin()) { ?>
	<div style="float:left;padding-left:10px"><?php echo $this->Html->link(__("Adicionar Usuário",true),"/addUser") ?></div>
	<div style="float:left;padding-left:10px"><?php echo $this->Html->link(__("Usuários",true),"/allUsers") ?></div>
	<div style="float:left;padding-left:10px"><?php echo $this->Html->link(__("Adicionar Grupo",true),"/addGroup") ?></div>
	<div style="float:left;padding-left:10px"><?php echo $this->Html->link(__("Grupos",true),"/allGroups") ?></div>
	<div style="float:left;padding-left:10px"><?php echo $this->Html->link(__("Permições",true),"/permissions") ?></div>
	<div style="float:left;padding-left:10px"><?php echo $this->Html->link(__("Perfil",true),"/viewUser/".$this->UserAuth->getUserId()) ?></div>
	<div style="float:left;padding-left:10px"><?php echo $this->Html->link(__("Editar Perfil",true),"/editUser/".$this->UserAuth->getUserId()) ?></div>
	
	
	<div style="float:left;padding-left:10px"><?php echo $this->Html->link(__("Tipos",true),"/tipos") ?></div>
	<div style="float:left;padding-left:10px"><?php echo $this->Html->link(__("Banners",true),"/banners") ?></div>
	<div style="float:left;padding-left:10px"><?php echo $this->Html->link(__("Imagens",true),"/imagens") ?></div>
	<div style="float:left;padding-left:10px"><?php echo $this->Html->link(__("Notícias",true),"/noticias") ?></div>
	
	
<?php   } else {?>
	<div style="float:left;padding-left:10px"><?php echo $this->Html->link(__("Perfil",true),"/myprofile") ?></div>
	
	
	<div style="float:left;padding-left:10px"><?php echo $this->Html->link(__("Tipos",true),"/tipos") ?></div>
	<div style="float:left;padding-left:10px"><?php echo $this->Html->link(__("Banners",true),"/banners") ?></div>
	<div style="float:left;padding-left:10px"><?php echo $this->Html->link(__("Imagens",true),"/imagens") ?></div>
	<div style="float:left;padding-left:10px"><?php echo $this->Html->link(__("Notícias",true),"/noticias") ?></div>
	
<?php   } ?>
	<div style="float:left;padding-left:10px"><?php echo $this->Html->link(__("Alterar Senha",true),"/changePassword") ?></div>
	<div style="float:right;padding-left:10px"><?php echo $this->Html->link(__("Sair",true),"/logout") ?></div>
	<div style="clear:both"></div>
</div -->