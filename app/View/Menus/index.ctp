<div class="menus index">
	
	<?php
		echo $this->Html->link("Adicionar Menu",array('action'=>'add'));
		
		echo '<table cellpadding="0" cellspacing="0">
		
		<thead>
	<tr>
			<th>Menu</th>

			<th>Ações</th>
			
	</tr>
	</thead>
		<tbody>';
		foreach($Menulist as $key=>$value){
		
			$editurl = $this->Html->image("edit.png", array("title" => "Editar menu", "alt" => "Editar",'url' => array('controller' => 'menus', 'action' => 'edit', $key)));
			
			$upurl =  $this->Html->image("gui-next.png", array("style"=>"-ms-transform: rotate(-90deg);-webkit-transform: rotate(-90deg);-moz-transform: rotate(-90deg);-o-transform: rotate(-90deg);transform: rotate(-90deg);","title" => "Subir", "alt" => "Subir",'url' => array('controller' => 'menus', 'action' => 'moveup', $key)));
			
			$downurl = $this->Html->image("gui-next.png", array("style"=>"-ms-transform: rotate(90deg);-webkit-transform: rotate(90deg);-moz-transform: rotate(90deg);-o-transform: rotate(90deg);transform: rotate(90deg);","title" => "Descer", "alt" => "Descer",'url' => array('controller' => 'menus', 'action' => 'movedown', $key)));
			
			$deleteurl = $this->Html->image("delete.png", array("title" => "Deletar apenas este menu", "alt" => "Deletar",'url' => array('controller' => 'menus', 'action' => 'delete', $key)));
	
			$removeurl = $this->Html->link("Remover familia Abaixo",array('action'=>'removeNode',$key),array('style'=>'font-weight:lighter;color:#b3b3b3;','title'=>'Remove todos erdeiros do menu'));
			 
			 echo "
				<tr>
					<td><span style='color:$menus[$key];'>$value</span></td>
					<td>$editurl &nbsp;&nbsp; $upurl &nbsp;&nbsp; $downurl &nbsp;&nbsp; $deleteurl &nbsp;&nbsp; $removeurl </td>
				</tr>";
		}
		echo "
			</tbody>
			</table>
		";
		
		
	?>

</div>