div class="movies form">
<?php
echo $this->Form->create('Member');
echo $this->Form->inputs(array('id', 'title', 'author', 'shelfmark', 'barcode', 'location_code', 'location_desc', 'checkouts'));
echo $this->Form->end('Edit');
?>
</div>
<div class="actions">
    <h3>Actions</h3>
    <ul>
        <li><?php echo $this->Html->link('List Member', 
array('action' => 'index'));?></li>
    </ul>
</div>