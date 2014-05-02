<div>
    <h2>Member</h2>
	<?php 
echo $this->Html->link('Export',array('controller'=>'members','action'=>'export'), array('target'=>'_blank'));

?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Shelfmark</th>
            <th>Barcode</th>
            <th>Location Code</th>
			<th>Location Description</th>
			<th>Checkouts</th>
            <th class="actions">Actions</th>
        </tr>
    <?php foreach ($members as $member): ?>
    <tr>
        <td><?php echo $member['Member']['title']; ?> </td>
        <td><?php echo $member['Member']['author']; ?> </td>
        <td><?php echo $member['Member']['shelfmark']; ?> </td>
        <td><?php echo $member['Member']['barcode']; ?> </td>
        <td><?php echo $member['Member']['location_code']; ?> </td>
		<td><?php echo $member['Member']['location_desc']; ?> </td>
		<td><?php echo $member['Member']['checkouts']; ?> </td>
        <td class="actions">
            <?php echo $this->Html->link('View',
array('action' => 'view', $member['Member']['id'])); ?>
            <?php echo $this->Html->link('Edit',
array('action' => 'edit', $member['Member']['id'])); ?>
            <?php echo $this->Html->link('Delete',
array('action' => 'delete', $member['Member']['id']), 
null, sprintf('Are you sure you want to delete %s?', $member['Member']['title'])); ?>
        </td>
    </tr>
    <?php endforeach; ?>
    </table>
</div>
<div class="actions">
    <h3>Actions</h3>
    <ul>
        <li><?php echo $this->Html->link('New Member', array('action' => 'add')); ?></li>
    </ul>
</div>