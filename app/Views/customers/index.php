<?= view('layout/header', ['title' => 'Customer Accounts']) ?>
<h1>Customer Accounts</h1>
<table><thead><tr><th>ID</th><th>Full Name</th><th>Email</th><th>Phone</th><th>Created At</th></tr></thead><tbody>
<?php foreach ($customers as $customer): ?>
<tr><td><?= esc($customer['id']) ?></td><td><?= esc($customer['full_name']) ?></td><td><?= esc($customer['email']) ?></td><td><?= esc($customer['phone'] ?? '') ?></td><td><?= esc($customer['created_at']) ?></td></tr>
<?php endforeach; ?>
<?php if ($customers === []): ?><tr><td colspan="5">No customers found.</td></tr><?php endif; ?>
</tbody></table>
<?= view('layout/footer') ?>
