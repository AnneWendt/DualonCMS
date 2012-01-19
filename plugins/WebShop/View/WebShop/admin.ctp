<!--  Produkt Administrations View -->
	<?php	
	
	//LOAD js
	 $this->Html->script('/web_shop/js/admin', false); 
	
	//LOAD style-sheet
	echo $this->Html->css('/WebShop/css/webshop');
	
	//LOAD menu
	echo $this->element('admin_menu', array('contentID' => $contentID));
	?>
	
	<div id="webshop_product_administration">
		<h1><?php echo __d("web_shop", "Product Administration"); ?></h1>	
		
		<?php
			echo $this->Session->flash('WebshopProduct');
		?>
		<table>
			<thead>
				<tr>
					<th colspan="3"><p><?php echo __d("web_shop", 'Product'); ?></p><?php echo $this->Form->postLink(__d("web_shop", "Add"), array('controller' => 'WebShop', 'action' => 'create', $contentID), array('style' => 'float: right', 'class' => 'webshop_button')); ?></th>
				</tr>
			</thead>
			<?php foreach ($products as $product): ?>
			    <tr>
				    <td><?php echo $product['WebshopProduct']['name']; ?></td>
				    <td class="webshop_orientation_right"><?php echo $product['WebshopProduct']['created']; ?></td>
				    <td class="webshop_orientation_right"><?php echo $this->Html->link(
				    			 		$this->Html->image("edit.png"), 
				    					array('action' => 'edit', $contentID, $product['WebshopProduct']['id']),
				    					array('escape' => False)
				    				);?>
				    	<?php echo $this->Html->link(
				    					$this->Html->image("delete.png"), 
				    					array('action' => 'remove', $contentID, $product['WebshopProduct']['id']),
				    					array('escape' => False)
				    				);?>
				    </td>
			    </tr>
			<?php endforeach; ?>
		</table>
	</div>