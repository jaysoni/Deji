<div>
<h2>Member</h2>
    <dl>
        <dt>Title</dt>
        <dd><?php echo $member['Member']['title']; ?></dd>
        <dt>Author</dt>
        <dd><?php echo $member['Member']['author']; ?></dd>
        <dt>Shelfmark</dt>
        <dd><?php echo $member['Member']['shelfmark']; ?></dd>
        <dt>Barcode</dt>
        <dd><?php echo $member['Member']['barcode']; ?></dd>
        <dt>Location Code</dt>
        <dd><?php echo $member['Member']['location_code']; ?></dd>
        <dt>Location Description</dt>
        <dd><?php echo $member['Member']['location_desc']; ?></dd>
        <dt>Checkouts</dt>
        <dd><?php echo $member['Member']['checkouts']; ?></dd>
    </dl>
</div>


<div class="actions">
    <h3>Actions</h3>
    <ul>
        <li><?php echo $this->Html->link
('Edit Member', array('action' => 'edit', $member['Member']['id'])); ?> </li>
        <li><?php echo $this->Html->link
('Delete Member', array('action' => 'delete', $member['Member']['id']),
null, sprintf('Are you sure you want to delete # %s?', $member['Member']['id'])); ?> </li>
        <li><?php echo $this->Html->link
('List Members', array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link
('New Member', array('action' => 'add')); ?> </li>
    </ul>
</div>