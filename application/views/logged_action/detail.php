<table border="1" width="100%">
    <?php echo form_open('logged_action/edetail/'.$logged_action['action_tstamp']); ?>
    <tr>
        <th> </th>
        <th> </th>
    </tr>
    <tr>
        <td>Schema Name</td>
        <td><?php echo $logged_action['schema_name']; ?></td>
    </tr>
    <tr>
        <td>Schema Name</td>
        <td><?php echo $logged_action['table_name']; ?></td>
    </tr>
    <tr>
        <td>User Name</td>
        <td><?php echo $logged_action['user_name']; ?></td>
    </tr>
    <tr>
        <td>Action Tstamp</td>
        <td><?php echo $logged_action['action_tstamp']; ?></td>
    </tr>
    <tr>
        <td>Action</td>
        <td><?php echo $logged_action['action']; ?></td>
    </tr>
    <tr>
        <td>Original Data</td>
        <td><?php echo $logged_action['original_data']; ?></td>
    </tr>
    <tr>
        <td>New Data</td>
        <td><?php echo $logged_action['new_data']; ?></td>
    </tr>
    <tr>
        <td>Query</td>
        <td><?php echo $logged_action['query']; ?></td>
    </tr>

</table>
<div>
    <a href="<?php echo site_url('logged_action/index'); ?>">Volver</a>
</div>