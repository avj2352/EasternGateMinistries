<section>
	<h3>Users</h3>
	<?php echo anchor('admin/user/edit', '<span class="glyphicon glyphicon-plus"></span> Add User'); ?>
	<hr>
	<table class="table table-striped">
	<thead>
		<tr>
			<th>Email</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
	<?php if(count($users)): ?>
	<?php foreach($users as $user): ?>
		<tr>
			<td><?php echo anchor('admin/user/edit/'.$user->id, $user->email); ?></td>
			<!-- This calls the cms_helper file from the helper folder -->
			<td><?php echo btn_edit('admin/user/edit/'. $user->id); ?></td>
			<td><?php echo btn_delete('admin/user/delete/'. $user->id); ?></td>
		</tr>
	<?php endforeach; ?>
	<?php else: ?>
		<tr>
			<td colspan = "3">We could not find any users.</td>
		</tr>
	<?php endif; ?>
	</tbody>
	</table>
	<div>&nbsp;</div>
	<div>&nbsp;</div>
	<div>&nbsp;</div>
</section>