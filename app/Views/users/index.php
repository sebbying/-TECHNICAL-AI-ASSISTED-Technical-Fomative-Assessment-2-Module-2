<?= view('layout/header', ['title' => 'User Accounts']) ?>
<h1>User Accounts</h1>
<table><thead><tr><th>ID</th><th>Username</th><th>Full Name</th><th>Created At</th></tr></thead><tbody>
<?php foreach ($users as $user): ?>
<tr><td><?= esc($user['id']) ?></td><td><?= esc($user['username']) ?></td><td><?= esc($user['full_name']) ?></td><td><?= esc($user['created_at']) ?></td></tr>
<?php endforeach; ?>
<?php if ($users === []): ?><tr><td colspan="4">No users found.</td></tr><?php endif; ?>
</tbody></table>
<?= view('layout/footer') ?>
