<?php
echo $this->element('config-menu');
echo $this->Form->create('Permission');

foreach ($this->data['Permission'] as $key => $value) {
	if (!empty($value['plugin'])){
		echo $this->Form->input('Permission.' . $key . '.role_id', array('label' => $value['plugin'] . ': ' . $value['action']));
	} else {
		echo $this->Form->input('Permission.' . $key . '.role_id', array('label' => $value['action']));
	}
    echo $this->Form->input('Permission.' . $key . '.id');
    echo $this->Form->input('Permission.' . $key . '.action', array('type' => 'hidden'));
}

echo $this->Form->end('Save Permissions');
?>