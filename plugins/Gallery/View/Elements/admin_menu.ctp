<?php $this->Html->css('menu-design', NULL, array('inline' => false));?>
<?php $this->Html->css('menu-template', NULL, array('inline' => false));?>
<div id="menu" class="overlay">
    <ol class="nav">
    	<li><?php echo $this->Html->link('Set Image',array('plugin' => 'Gallery', 'controller' => 'SimpleImageDisplay', 'action' => 'index', $contentId));?></li>
        <li><?php echo $this->Html->link('Manage Images',array('plugin' => 'Gallery', 'controller' => 'Images', 'action' => 'index'));?></li>
    </ol>
    <div style="clear:both;"></div>
</div>