<table border="1" width="100%">
    <tr>
		<th>Schema Name</th>
		<th>TABLE NAME</th>
		<th>User Name</th>
		<th>Action Tstamp</th>
		<th>Action</th>
		<th>Actions</th>
    </tr>
	<?php foreach($logged_actions as $l){ ?>
    <tr>
		<td><?php echo $l['schema_name']; ?></td>
		<td><?php echo $l['table_name']; ?></td>
		<td><?php echo $l['user_name']; ?></td>
		<td><?php echo $l['action_tstamp']; ?></td>
		<td><?php echo $l['action']; ?></td>

		<td>
            <a href="<?php echo site_url('logged_action/detail/'.$l['action_tstamp']); ?>">Details</a>
        </td>

    </tr>
	<?php } ?>
</table>