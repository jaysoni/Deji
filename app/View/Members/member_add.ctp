<div>
<?php
echo $this->Form->create('Member');
echo $this->Form->inputs(array('title', 'author', 'shelfmark', 'barcode', 'location_code', 'location_desc', 'checkouts'));
echo $this->Form->end('Add');
?>
</div>

<div class="actions">
    <h3>Actions</h3>
    <ul>
        <li><?php echo $this->Html->link('List of member', array('action' => 'member_index'));?></li>
    </ul>
</div>