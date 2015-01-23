<div class="umtop">
	<?php echo $this->Session->flash(); ?>
	<div class="um_box_up"></div>
	<div class="um_box_mid">
		<div class="um_box_mid_content">
			<div class="um_box_mid_content_top">
				<span class="umstyle1"><?php echo __('Entrar ou'); ?></span>
				<span  class="umstyle2"><?php echo $this->Html->link(__("inscrever-se",true),"/register") ?></span>
				<span class="umstyle2" style="float:right"><?php echo $this->Html->link(__("Página Inicial",true),"/") ?></span>
				<div style="clear:both"></div>
			</div>
			<div class="umhr"></div>
			<div class="um_box_mid_content_mid" id="login">
				<div class="um_box_mid_content_mid_left">
					<?php echo $this->Form->create('User', array('action' => 'login')); ?>
					<div>
						<div class="umstyle3"><?php echo __('Email / Nome de usuário');?></div>
						<div class="umstyle4" ><?php echo $this->Form->input("email" ,array('label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
						<div style="clear:both"></div>
					</div>
					<div>
						<div class="umstyle3"><?php echo __('Senha');?></div>
						<div class="umstyle4"><?php echo $this->Form->input("password" ,array("type"=>"password",'label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
						<div style="clear:both"></div>
					</div>
					<div>
					<?php   if(!isset($this->request->data['User']['remember']))
								$this->request->data['User']['remember']=true;
					?>
						<div class="umstyle3"><?php echo __('lembre de mim');?></div>
						<div class="umstyle4"><?php echo $this->Form->input("remember" ,array("type"=>"checkbox",'label' => false))?></div>
						<div style="clear:both"></div>
					</div>
					<div>
						<div class="umstyle3"></div>
						<div class="umstyle4"><?php echo $this->Form->Submit(__('Acessar'));?></div>
						<div style="clear:both"></div>
					</div>
					<?php echo $this->Form->end(); ?>
					<div  align="left"><?php echo $this->Html->link(__("Esqueceu sua senha?",true),"/forgotPassword",array("class"=>"style30")) ?></div>
					<div  align="left"><?php echo $this->Html->link(__("Verificação de email",true),"/emailVerification",array("class"=>"style30")) ?></div>
				</div>
				<div class="um_box_mid_content_mid_right" align="right">

				</div>
				<div style="clear:both"></div>
			</div>
		</div>
	</div>
	<div class="um_box_down"></div>
</div>
<script>
document.getElementById("UserEmail").focus();
</script>